<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'onews-wp' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ')#*0J^O78aD}q2,>q-nZq2!)nmClr3.&DF!YUEcy1O3-EA=o;P0(Ak[j9w2Z/LL$' );
define( 'SECURE_AUTH_KEY',  '{3*p)RL!FHAy9lamZAE4ntf3dC6UI FOy39dSJ+n]|,7MxI}e2W=89(IA;O-iq_w' );
define( 'LOGGED_IN_KEY',    ' G3/ar~Ia x`}Y|rE(!S5,[=~ViD2Gkxm;D+R+(y0e<mlgJsuu+`~t;jF|vcpp4o' );
define( 'NONCE_KEY',        'q_UNcyTW :qI@XFzQL8K-K]Ez4Dnn-7~+kpjd{L7(JATF&L R0#Vz 5xyPHd`?#M' );
define( 'AUTH_SALT',        'n&BJJV)JY763Exkhkxih~gQn8KAu(DLNC_[ES;fvL&%$/x@CjZS^IHz:tM>Lnf,w' );
define( 'SECURE_AUTH_SALT', ' *%JC7 M(/0}h{Y&pN;aWpx=M.T=(7z!HnCm;arLJY/O[)2yj3XW=dR rbbt-iXd' );
define( 'LOGGED_IN_SALT',   '[o:Y(LgCr~C)_rdtE7NO{!rEAb<b(x%:X>44eFGqEP05 ik*z#=X?7:kCD;X ETZ' );
define( 'NONCE_SALT',       'A8*ZFf<Ebg dlt3}`l45D5!-%blCB+@U`3K_E#EH,HLoL?/$*I6>LHY~ADuv+wZ<' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', true);

//pour activer le téléchargement direct (et non par FTP) des fichiers
//ajouté par moi-même
define('FS_METHOD', 'direct');

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
