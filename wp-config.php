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
define('DB_NAME', 'unowr_v2');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '{6YMR|j1ew1 r{HP!%utE&@K2fdR!]SG}&OB`5OK)x3 w$.<UzBRHkEzHCTf=(W<');
define('SECURE_AUTH_KEY',  'AcLn0?@K{M[edAM2!cf&<)SOVQ{vs$%5Q_al@mN{@vA|spaua%W$o^!M.m:,sx+&');
define('LOGGED_IN_KEY',    '.j[H!c4IHw-s}~fCo{0@7VKJOff~LUdpDDk&$!6QVW5kE@:9BM%Yy]RrA:SHC0mZ');
define('NONCE_KEY',        'RecK#)vAd[vBBI2UrJ?FI+RR!EHJgD%U2dAS){tV,OB.3n~k>- e&-5{RM_W0MT;');
define('AUTH_SALT',        '|*ch4pCl:Vurhu%uV)5Z=%4qzQ8xjEdOm&M7m5dW}qa{sS{QIGbYmDqS^pi@]^4P');
define('SECURE_AUTH_SALT', 'Gl&&9V3WTNRVjQX#~/z9ij0V.W}cZKy>q}tf!D?oxQF4=]2&*WP(Q^!w ~493Q^b');
define('LOGGED_IN_SALT',   'ONSZ|76-]yi_mpb]mbl3j6-1h,@r 9+e>KE4%&C<fF)avsGN;`4geC)%626fjP(U');
define('NONCE_SALT',       'sT-]@D1eI.i<FZ`?DG7O0,ri~QV;v)06sN}g_P4HM~1{Ba+uX2SSbq)oD$bEr< O');
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
 * Pour plus d'information sur les autres constantes qui peuvent être utilisées
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