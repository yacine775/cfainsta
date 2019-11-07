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
define( 'DB_NAME', 'baseadmin' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '4{J$?UU.(ry0NdOmU#jX/De|VAmYS7W52jkZ$+z23GC!pb&#=95a]uvkOX:WG^6 ' );
define( 'SECURE_AUTH_KEY',  'PPKj|#3mT.i:R0^/T?s-D4%H1`*yu!dbQTBZ;&D%^7#Cvu6f@vX[I!Z^S/UF (/!' );
define( 'LOGGED_IN_KEY',    '6 M]g<]UBnAC^q`j^|[Q(>,9K!f!$Q|CGb<Fz[LJnv/ WM(ryWJ)qgsIG&Fl$n18' );
define( 'NONCE_KEY',        'KIZ3<7Sw %|(4s<0KlvyD5Il-Wa5k?g@.c[nui_tv=2_k3m8}35vU~,FrGs0c4H,' );
define( 'AUTH_SALT',        '0.Gp~:6%FAdgcH{E*_.c)l7$O$=O=D:`A&2];@ 3>m3C6#a9z;ny-#r r&.?1(-G' );
define( 'SECURE_AUTH_SALT', '8amt@SkWr5}*vq<h{DAt-9u?n*WsTM@Ynm~HgzLZ0g)tVo4e7{~0JhR!d`(4KLr/' );
define( 'LOGGED_IN_SALT',   'uF?j$7F5#8izg$m#Rw30!`~Lt3`?,Ae(57+M{3,Q-mAl{Fv5!m-YZaLCT2~xc?C=' );
define( 'NONCE_SALT',       'S~]pHP(?Yfaf`.UoXW9<p=72_*bKy`T#.0!QI0o<,.2GrHlK59&|x3B=eL,j1#l*' );
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
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
