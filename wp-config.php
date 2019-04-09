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
define('DB_NAME', 'seves');

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
define('AUTH_KEY',         'ae&1bmYvN?-@`+vlFDp$8Z`+|R(4X|=I[~D~dn)UF</m Vyp^nmkC5~L;:lTC]VA');
define('SECURE_AUTH_KEY',  'cnn.kO(p76[z!T`[@Ie8usLfx:7Qip|&G#}V:&|s59KF3?SC:^]pn0_lQ/6472~3');
define('LOGGED_IN_KEY',    'LPu)6W6Pr0smJ+:g(~`HFAW@<PI$tvw?SB`vKrna32M&&FDt4F66XHq V__%1|X2');
define('NONCE_KEY',        'T: !#s/ 43EE?&5B6x3#V5]D18zO&]{Rsd3KO~{=/4|pG$WD~(l)9UN9;KEnE m~');
define('AUTH_SALT',        'Rmj|RW:xsD!wa/a/,keMe%Cq^>A@/4&Ee4tH{5g-|s+T(-14W;u52g95W*KH1_$_');
define('SECURE_AUTH_SALT', '3|b#kTxQPlN=v0tND.O{pk[~Y;<$2lD>vT,7E[Nv]C+p;`c#aF5$w@jXp!T?3F,`');
define('LOGGED_IN_SALT',   'JZV55?^7 0?N}62!n!7h1qva1y(kY=I7@Igj88LJShHK]gjiql|56p_#T39pqG%)');
define('NONCE_SALT',       'Ja0fTmqXz)gBCa,Ts-8URTV~=w:z*Tn3+YC#cG:>~34%z>@wfW3zFQ7wgLIxIwt#');
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