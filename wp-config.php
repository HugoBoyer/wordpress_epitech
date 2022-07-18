<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'portfolio_Wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ',&;%>!6DwWPfa`GOQ|O~/H_w?Q~mDd0R.4{Lu-TkXwL`jEiRGi)&7foF<[8P9c$;' );
define( 'SECURE_AUTH_KEY',  'J_Y>6kKP)DX1!Sy52cIL]^R5{r?4aUtug2>]*IXy/oHEIy=Je&Yyn3B]%8sW&@)#' );
define( 'LOGGED_IN_KEY',    'k{+1yA?Sw60eG)Tz G|D;FqG.sy7i6q~d~T_z<XdZNd1?66bE`h9LMx7Fp{)*oW*' );
define( 'NONCE_KEY',        '!UD,CtBM_b{7g[c.bzfL6SYe5]5-Zaf4jva[;u+U[{vt5Cmo)u|Q%qMc~svH+Yc.' );
define( 'AUTH_SALT',        '19lkr:|.kkuIAe7o%(SbUNz~]$N1g:ED5w[W~Xl*3086&])V(Ke0u-`etnFn-`h[' );
define( 'SECURE_AUTH_SALT', '#B$Rqn-u?d2ecP:Vxsv=pC-LYWK~gw+!.9l}a>p~@%nEF!-&Tv 138IC;H&;ls/x' );
define( 'LOGGED_IN_SALT',   'fewiG5bwG8s&h4M]pnMdJRm->oA{$ `RT2Z8o6GUmb$~a<* ICiCn}nxJsVrMm{d' );
define( 'NONCE_SALT',       'mjr.e&<$K:{Kv+3aE&UQ$7kFh/?^U@B7g^5b]W%ksqLv9ilZIt}0U$[MPH;JQ;lP' );
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
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
