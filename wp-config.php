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
define('DB_NAME', 'wordpressvitrine');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '+hAu@J@nB>U~;vU>!Z9l yL1W7eBtX~g{PIaIsB:8m7mky!: Qj5Cy`NxG!0#6t#');
define('SECURE_AUTH_KEY',  ';m]FDcVOF,mPf Q]H]mLWae8+i?9a,CEVG,?_k8$pg:NR$_O}PmHtx|ea^XspNP ');
define('LOGGED_IN_KEY',    '0G3?,=oz`~-F/p^WnX`yOw>*-:^3;c$rj{8+&cr:N,DS:)}ts&w*j>YA,3H#8n%B');
define('NONCE_KEY',        '@^=J88mpfJ>I;Z5(A<)Pj%#pQX4xyJYmJ4^oDrg[!nRT~[|d3IP?#k&]]`PU<T3F');
define('AUTH_SALT',        'RS3o1.;nH]MtK=TEi+f#.#bAF)$65(w6~]sLZ!!Y:_-sC-t30>.EO8@DeW0ZA^$X');
define('SECURE_AUTH_SALT', '$MAE=3Jf$.maUfs[q_}m4,YgE%O5Ts,V#+lq(UbY,1$*euR.=a-k*S@QXlNy.(R#');
define('LOGGED_IN_SALT',   '#$PLV-1OG%G1_7y#VdI>+0)b.~lRB-NoXZfhDs6k!*kLqq91P<pX6[ 7&{:n.KGE');
define('NONCE_SALT',       'wNajOo^K- ^bYa 0#_5cOo$e;M6Fs]P;.!#18rL[mzerYjxLJWaib /_g`ZwwpLv');
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