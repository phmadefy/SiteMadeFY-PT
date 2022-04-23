<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'dani7778_mfypt' );


/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'dani7778_mfypt' );


/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'p)S(3f468H' );


/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );


/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );


/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '`lI&%4l-d0[wx4Q~7++8`R4gh4@iPDC-Z-/M/YC8N)o]=Gf4yxDDrf71v]UKoc1p' );

define( 'SECURE_AUTH_KEY',  'GDRz0%5}rTndy)h[5p 4XK~<yc%v9H3Vsyg~L*0;,2)l-rLmTJe0<zZ3m7YtQ%mY' );

define( 'LOGGED_IN_KEY',    '2aY43ga)k*fx#;l]k-QPl2//HmB2Ld vJLCaeM4&j[hL&vOzIKe<]](j8RWWi-Pw' );

define( 'NONCE_KEY',        '<YVuchU?h-Rwwxah}k0A|VR%Xj6x:Lwyy3i5eXT0+ :q_t@:7lr~A{WmKxJ1;~F2' );

define( 'AUTH_SALT',        'y&(9p]OQ2bUo|4+-bCEB,g?cp#qr&IG:b.75+aiSy3I`^i$/IUD,eFCG}R7t!*h#' );

define( 'SECURE_AUTH_SALT', '(Sqc!^`1VszvY|+l8z2rCuh:PO,,Y7wNh3El9Y7?C8q?YfA&H(.}[(VnZ[Z9lM3(' );

define( 'LOGGED_IN_SALT',   '2^^x3O;EviNqK$ rv@t*oG.<>w]qmL}`|G2+`d@[A u|#<[nPc_6%|wuUh~IJI~;' );

define( 'NONCE_SALT',       'H2uIR~+(@sSNNxKfS^:U=snM[8a%Vk5Q|fzXMp&YrK-*4NpEOdtb@}(mo6}k@Q^z' );


/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'smdfy_';


/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';


error_reporting(0);
@ini_set(‘display_errors’, 0);

define( 'DISALLOW_FILE_EDIT', true );