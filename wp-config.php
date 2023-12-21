<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'Chic-Dressing' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '~Ui(aHbuxzy[ 3Y^-H<#yf8[~ZaoO*bE-[m10+bv-uO65AD](fJ,$H9bhs,cfy~6' );
define( 'SECURE_AUTH_KEY',  '1xF8#n`)Gw96#Amj(%JKumK!X+>U|fBJ@bREQ<XZGWi?tXYVQ+`cA}*!<I:I%@vz' );
define( 'LOGGED_IN_KEY',    's=e;TsT)c);Oy;g30kTt=M%U:L._n3F;807icTi%$cL*hK{<BN&L$r0SO/[X*2YI' );
define( 'NONCE_KEY',        '{yYxO>$c|txZLrH[lP-L?bXpj+ii|xlL56UQP[L2{CDajqyvRj@%DO`yK8c$s=9i' );
define( 'AUTH_SALT',        'a<;<*ZV-Zsah/n+@xTb%_YQs2JF^%/x]~{EW==!]TTrD1aS?Ws<XsRV{b4gHtq>x' );
define( 'SECURE_AUTH_SALT', 'OKB/Xn]z9Yu$4<CI`k]U|JSz6z`xT4aUaA-iAb73n>1RR_wvcU^8c`v7aZs5X%0J' );
define( 'LOGGED_IN_SALT',   'VZ&o8*oCWjdvL`({r~a}`K|0Y)2yE(bRyLT;(&PL&.Ry51c7c98XsNI75@#QFFRX' );
define( 'NONCE_SALT',       't>5[Mc}cS*#?&%oMiJ!Hl^X~X{v_h9vW0ac<<MPjHS,G=;YPg`r)t;859#LqOjT)' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
