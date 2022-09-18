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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'bd_goodseasoning' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '[SoTAc+Doo>OPs]9!5B8}s|h|LNa/&3Qfd1R<vnk3u31i927z$qvmEz)xRfq)+Lh' );
define( 'SECURE_AUTH_KEY',  '-L?Ok H7CJ+Q^=yWpRqe88q/tbE17+!B|VSr@M-P+F+&7!-JmLvbIC9a64;c&Oeb' );
define( 'LOGGED_IN_KEY',    '94Odz3hiVBc*:f{J!8Y=`SQi=>Hs8AIXy3s4;G_[v3z[1Z{EZTdqDF^>%iLRNm/$' );
define( 'NONCE_KEY',        'C4WaC30;;@>Y AnP!}=IE7ytW5XgPxvPAyv7u88y-|<=dY)aixk:}ma(}Ky@k=UI' );
define( 'AUTH_SALT',        'EX)pI@ fPBH)s7I3d=$;<g!gQUos1>,<hq8T$hwi6w]wN,qm*<%VZ{5V^_6[1gPg' );
define( 'SECURE_AUTH_SALT', 'VHrQhSJg%e7lIYge}S-iRdkbjc7c~`{E$8wjD0z-cGK{BLywBVFh`vEzbV&#evND' );
define( 'LOGGED_IN_SALT',   ']cki5!RE5uk~rd>Da%ZzI/0)OIZUd!^o#6I-T8.#F,D~f{_`#EY1]6Kt:B-GR)G7' );
define( 'NONCE_SALT',       '`Tb<NJrr)S*<],T!.:9N@6DAepok!Y5(=^+-<7QX`~TaX5GYS.ola3z[EO/J7uA_' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

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

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
