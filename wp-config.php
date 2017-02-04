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
define('AUTH_KEY',         'jD*m+<9?{*wDn[-.i@ZNbuq)@DW?2m)!v@[a4x(vF)<4,LZ(xPZa@q(1g}mW2E!P');
define('SECURE_AUTH_KEY',  'MBPgcu.%$+>E:@Qbe<!r:|{W)3H!/Ru}]vlax+lq.%zT2~pbpNuc,C1rb.IdiU:|');
define('LOGGED_IN_KEY',    'XhE.p]88@)j6z[[jQF-YX3?M@S)?D{M2RsuTpw&|>C$O=INPA^z}jPwN+&49].88');
define('NONCE_KEY',        'lbwEsD!^;Q<mQcH{{Y},F*Lal1rT%qImgxyhNcVAj9G^ZE?q<F3rF%pJerFpt:RJ');
define('AUTH_SALT',        'G0{RQwiCl*BpZsKmO$+)Z&AoXzf%*_G[sG$uBq2&X;vh]o9t#hnuSYC>c}=S4={,');
define('SECURE_AUTH_SALT', 'y?Me61uRJpq9Ba+WXfbKLI)S (Z&= M3w$MO`OG?LmflCrNc~a.5FQQogSyTODDa');
define('LOGGED_IN_SALT',   '-[&iI_;LNk+).OqcMf[~e,KC!c+GT)bT7~EOrc7CES,*x&V)E[_N_J~6ui31JN+B');
define('NONCE_SALT',       'QQ6f(=dQ0j. nu8sSi 5]r4LHTIHBvJoT!fU:Ez)kAGzLsCO,c;UDQ;P4TKfV<BX');
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