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
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'blog-karla' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'toor' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         'TjvWCb p,xpy9z8n`^^6v8#&o!^ObtlXi9Y*e8is]Xuudt1S&`Qs%9Wasg$:v%h,' );
define( 'SECURE_AUTH_KEY',  'q_/3Je,dS6e8H@XX^WND$B8T%;OL8C3#X7o_.>HDu=6&[$z+Fj&~SFj!0Rjb33DV' );
define( 'LOGGED_IN_KEY',    'Qo4OjN+v^d*Oi^,|D3MK)tBgR0DQ39R[qJ6D~aN]QVUwS>;jn:r<`-f-J)k_,Ph;' );
define( 'NONCE_KEY',        '?!8^Y@i$h(*X&ZWO=#z4#[g_{PUCzcj?l-`<bU=4iaB-1Xi9tyaH,PixRV&EPQ1O' );
define( 'AUTH_SALT',        ' s~4FCZ;+Ul{+2~#9Wg~28DU.K_w0CiYwG4c~tWevm$uF<<??9Hy>S<9ZrD%D[%z' );
define( 'SECURE_AUTH_SALT', 'r(CJnoA55f=4.qRkt!ZU~PYF]es?neE6EI)OvP=R7YP84(O:KPot4e3og7{Uc>/~' );
define( 'LOGGED_IN_SALT',   'H2#6bv3cyKs>lMxX@7&6uu>JO%`9Ai0WND(Q.+)6dZ?6Mjq(9B(YaA32D:.T0^*1' );
define( 'NONCE_SALT',       '?o|LWtV@9R=#UEA5gZ{JW;!om6O6[qJg`7{z!YLrqFJ|gEwKnWg`}oC9Zc{=vZuW' );

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
