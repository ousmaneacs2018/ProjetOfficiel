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
define('DB_NAME', 'site_projet');

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
define('AUTH_KEY',         'U-VtreU |-N HRpPJ#aujpyDBzJvZ*.wc}K4guGDP_^<4u!![X-GY9`^LT`VV80m');
define('SECURE_AUTH_KEY',  'mmi{4F#wIo;W1qNV[oU0wCpcND}t]Cq**1)MBz~Zw/BKL<O=C9$0^}gtzCoz{I0T');
define('LOGGED_IN_KEY',    '3Mie}&47j]I{L2~@*Sx]n$-wi8Jii:HD|&p nrU@={FS4U1T5gI6~u(vxvOlJhj{');
define('NONCE_KEY',        'Jv>.QnRen6{KaO*,)pIYp<F_m`:f>j:zhC,l.d{tUke/p6Qc&oK}Y8<;,Cai]9U~');
define('AUTH_SALT',        'Vk4RCLCY%p=xKltcIwQs>pws=WB.=.]q~ceQ>}!L?~@:iH.w1nx[cjFcz|*$z=G)');
define('SECURE_AUTH_SALT', '>!>*+jX9fw0/}DN%,/A<WqJ^0hF>2NAK<~Shl-,.%3`=xRy-`$AKRrn/(uSIJb$^');
define('LOGGED_IN_SALT',   '#xt%ZO*tCcFF^5q?JwV@s!L2,F1OIN1?aVy9VW4[JcH9ba@u)d1VYC6kJxSh<3Ee');
define('NONCE_SALT',       'Q!v}[ftnt3+%uz~!r]?a+DBl?sa@HuY$]r%.c5=OrL lFjpWfX37h*bFr^w(Pog5');
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