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
define('DB_NAME', 'wordpress');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'm74e71'); //senha 3sagencia: nUZlOF4xb!4Q

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
define('AUTH_KEY',         '},y^;Py ?zLk[%LO*ch5|DamOJIQpaTtPuAMpt>)ZUCl7G_^xV9vnafqg)]- ET^');
define('SECURE_AUTH_KEY',  ' +c{A7jD430Bc^@y66q2,5)*M P/RM_I5l#nu~O3:Sg6Gy11d13*ubarz#~<rQc#');
define('LOGGED_IN_KEY',    'n)MrOW_<0y!1jTjr<?O*df%r!oZQej;Dbb8V) L7D6(#`/xx;1Op+D-{{xD6c&cd');
define('NONCE_KEY',        'yPDwA;T(N!Px+DHuQ)jOr7l[8T~To}4`zC3}aJb9zF8Zyf@J`kj@B(;h=a&@[pIm');
define('AUTH_SALT',        '_o@]w.?o)mg%RgOOm%$w79x(*p=6G%Drc[u%QoC.afI$MQ7Nb9lv:/AS`2?)|yLv');
define('SECURE_AUTH_SALT', 'irOaPK}:$S8lW?M/jPM2M?e`Q831Uo7/X>-5,),O$_|+Y3<D~.(.^:fi(3:#V:4u');
define('LOGGED_IN_SALT',   't+M=|=IK$+fO2ByU^`sm3AH?vFuq^<5%dzT&q4c~lq97=#@nH.V1D6sIrXP5]!qG');
define('NONCE_SALT',       'ozugh>P,U22}C?1g5$>g`8^HifM%Z 9Ro`%u%m9xxQ#q882lq6<k>AH#53[ =SY>');

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


