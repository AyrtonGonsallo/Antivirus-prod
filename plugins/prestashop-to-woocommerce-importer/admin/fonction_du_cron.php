<?php

if (!defined('ABSPATH')) {
    exit;
}

require_once plugin_dir_path(__FILE__) . '/commandes_mode_paiements.php';
require_once plugin_dir_path(__FILE__) . '/send_welcome_email.php';

function job_du_cron() {

    if (!isset($_GET['presta_import'])) {
        return;
    }

    global $wpdb;

    $table = $wpdb->prefix . 'import_cron';

    // Récupérer l'import actif
    $import = $wpdb->get_row("
        SELECT *
        FROM $table
        WHERE actif = 1
        ORDER BY id ASC
        LIMIT 1
    ");

    if (!$import) {
        exit('Aucun import actif');
    }

    $id_courant = (int) $import->id_courant;
    $range      = (int) $import->range;

    $id_fin = $id_courant + $range - 1;

    // ===============================
    // JOB
    // ===============================

    $file = WP_CONTENT_DIR . '/import-test.txt';

    file_put_contents(
        $file,
        date('Y-m-d H:i:s') .
        ' - Traitement ID ' . $id_courant .
        ' -> ' . $id_fin .
        PHP_EOL,
        FILE_APPEND
    );

    echo 'Traitement ID ' . $id_courant . ' -> ' . $id_fin;

    $offset = $id_courant;
    $limit  = $id_fin - $id_courant + 1;

    

    $users = get_users([
        'orderby' => 'login',
        'order'   => 'DESC',
        'number'  => $limit,
        'offset'  => $offset,
    ]);

    

    /*

    $user_ids = [
        13986, 
        4852,
        7333, 
        23507,
        2135,
        14180, 
        22381, 
        16767,
        17778,
        2556, 
        6403,
        6948, 
        20144,
        19468, 
        22567,
    ]; // ou une liste plus longue

    $users = get_users([
        'include' => $user_ids,
        'orderby' => 'login',
        'order'   => 'DESC',
    ]);

    */

 

    foreach ($users as $user) {
        if (empty($user->user_email) || !is_email($user->user_email)) {
            continue;
        }

       
        $pays = get_user_meta($user->ID, 'pays', true) ?: 'FR';

        

        $sent = avast_send_welcome_email(
            //$user->user_email,
            "ayrtongonsalloheroku@gmail.com",
            $pays
        );

        error_log(
            "Utilisateur {$user->ID} ({$user->user_login}) : "
            . ($sent ? 'e-mail envoyé' : 'échec de l’envoi')
        );

        echo (
            "Utilisateur : {$user->ID} ({$user->user_login}) <br>".
            "Pays : {$pays} <br>".
            ($sent ? 'e-mail envoyé' : 'échec de l’envoi')."<br>"
        );
    }
    


    /*
    
    $order_ids = [ 
       
        65168, 65164, 65162, 65160, 65158, 65156, 65154, 65152, 65150, 65129, 65127, 65125,
         65123, 65121, 65119, 65109, 65105, 65101, 65099, 65097, 65095, 65093, 65091, 65087, 
         65085, 65083, 65081, 65079, 65077, 65073, 65069, 65067, 65065, 65061, 65057, 65049, 
         65033, 65031, 65023, 65021, 65019, 64993, 64991, 64989, 64987, 64985, 64983, 64981, 
         64979, 64977, 64975, 64973, 64971, 64967, 64965, 64937, 64935, 64933, 64931, 64929, 
         64927, 64893, 64891, 64877, 64873, 64871, 64869, 64867, 64865, 64855, 64851, 64849, 
         64847, 64845, 64843, 64839, 64835, 64833, 64831, 64829, 64827, 64825, 64823, 64821,
          
          64817, 64815, 64813, 64811, 64809, 64807, 64805, 64803, 64796, 64794, 64790, 64788,
        64786, 64784, 64780, 64776, 64774, 64772, 64770, 64768, 64766, 64764, 64762, 64760,
        64758, 64746, 64744, 64742, 64740, 64738, 64732, 64730, 64728, 64726, 64724, 64722,
        64720, 64718, 64716, 64714, 64712, 64702, 64700, 64698, 64696, 64694, 64692, 64690,
        64688, 64686, 64684, 64682, 64668, 64666, 64662, 64660, 64658, 64654, 64650, 64648,
        64646, 64644, 64642, 64640, 64638, 64608, 64606, 64598, 64594, 64588, 64586, 64584,
        64582, 64580, 64578, 64574, 64572, 64570, 64568, 64566, 64564, 64562, 64560, 64558,
            64556, 64554, 64552, 64550, 64548, 64546
                
     ]; 
     
    foreach ($order_ids as $order_id) { 
        $order = wc_get_order($order_id); 
        if (!$order) { 
            echo "Commande #{$order_id} introuvable.<br>"; 
            continue; 
        } 
        
        if ($order->get_type() !== 'shop_order') { 
            echo "Commande #{$order_id} ignorée : type incorrect.<br>"; continue;
        } 

        if ($order->get_status() === 'completed') { 
            echo "Commande #{$order_id} déjà terminée.<br>"; continue;
        } 

        $result = $order->update_status( 'completed', 'Statut modifié par script.' ); 
        echo "Commande #{$order_id} : statut terminé.<br>"; 
    }

    
*/







    // ===============================
    // PASSER AU LOT SUIVANT
    // ===============================

    $wpdb->update(
        $table,
        [
            'id_courant' => $id_fin + 1
        ],
        [
            'id' => $import->id
        ]
    );

    exit;
}



// ===============================
// URL IMPORT
// ===============================

add_action('init', 'job_du_cron');



