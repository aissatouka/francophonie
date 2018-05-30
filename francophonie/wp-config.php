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
define('DB_NAME', 'francophonie');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'aissatouka');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'auf');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'W.VPbQgnIiB!~rQhP0Yr_? d?`lXVRt2D0E280& <W?;$sUryhZod#l)SOTz2=J/');
define('SECURE_AUTH_KEY',  '<lGNUy&6A6zFmH5cw*0IiY_WKJS^C]fqu/<_0nL18DnNL*E2dE|^ebOl`T-`SQmn');
define('LOGGED_IN_KEY',    'oNCIVn^xiH*H{YENX(gZnX/q@y_j.^i[{.<9[Z1Yj?j{60ixELhJsK<R~IcTtl@2');
define('NONCE_KEY',        'kCUv9VmGtw=$K:=96Dd0gGWpf@o/UGibL<klpype|KPM[}x#D[p]#%4G+O||dT7R');
define('AUTH_SALT',        'G[Fy|ON` .St~5Z(kp*vBC28fAF.;FU7CiC~MGf&?Wuppix]JTG;tN,R*7vv#6`=');
define('SECURE_AUTH_SALT', 'bEN1wQhg-3U88juD|g0HbU Uh2_)ejfpE51H4@1LY{]C=Qn}y:&f]6;<!:Dswr:J');
define('LOGGED_IN_SALT',   'QgKzi/XY<tik%a=%::rcM/r{0fCH{M{2?>Q %k$4tX:}bH|@b8 w/@54ZCO}WCEe');
define('NONCE_SALT',       '&)!wUe5w{BNWY1`+KWF1`VV0RV$P2c0m5#~^$=+~T@?6@lrJXReEYEUTxb6rG41,');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');