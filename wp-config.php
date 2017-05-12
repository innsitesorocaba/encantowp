<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa user o site, você pode copiar este arquivo
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

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'innsites_encanto');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'innsites_encanto');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'innsite@55');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '3MghO8v&T4-z|,~6}I[oqv9vp{FVFbI{&;hl84%pvMi7L+Yyuf!|q0 tJ#t_x`;)');
define('SECURE_AUTH_KEY',  '_$}o;*Jy+K/^8{N>^{D5d~|9%sSQ,LD=$*J&V02_2%ZGKSbgGjmP.=nF~b2v>_8 ');
define('LOGGED_IN_KEY',    'OR>$@IpzC5 m9(WdX=i|)oirllEXwMqFe4l3KkR<0,_J&v{(7T>?h}ufIU|fF|B&');
define('NONCE_KEY',        '5Jc7t~pA!naU(fR,Wy4/8i>P(tu#phD,&,/Mc0SUwO8~uPClaj6#J[%p:55ti$gJ');
define('AUTH_SALT',        'h!a!]o2:N!Ep)L3b]Rpb,^medW%KYNpV =EXEb{T,XG_|t]ykTy7J`$!4f466?&|');
define('SECURE_AUTH_SALT', '2ilFe*o574Bi#W[8yMm/9JhUb.fF`d<e&|@I-GELM,k8~G^7mbPG[Z,ZL^JTSl.R');
define('LOGGED_IN_SALT',   'QRV]/!U{1aB_?B>{zO8yX>*H 1X9@gs.{vTa;BOBS)chER%?=lCQ,nj3TtNWtFL;');
define('NONCE_SALT',       'nq/>):}HXD{}I6M$8*M]Z&,ee: 6X<I40v`95Wi6S!H{Ohn2[*/[bb!VkW!6cE_`');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * para cada um um único prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * Para desenvolvedores: Modo debugging WordPress.
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
