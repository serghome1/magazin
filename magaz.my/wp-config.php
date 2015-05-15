<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи и ABSPATH. Дополнительную информацию можно найти на странице
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется скриптом для создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения вручную.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'magaz');

/** Имя пользователя MySQL */
define('DB_USER', 'serg');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'adg357');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '@+NU>c-vW%wjMj^>:l>xyx5R5POX*mIP|iZx^nXg/-K%z@`TH(p {v~ef,PM;>GV');
define('SECURE_AUTH_KEY',  'FG#?$2dH^zsjI3yIpeDT[?%xQugagrowZB{(5<Tdr(K sKZN>+}+M@QROqH<[oOH');
define('LOGGED_IN_KEY',    'gu:!?LRdk=B/px-&6?dZ, .OH(|X.Mgdz7sW:Ks4i>%D`pXE8,ymgfne&SaSZ%e*');
define('NONCE_KEY',        'RJ^1Ye9NW(h+Uwz:cz)yFf0UYV1>?%K*#b=MXXbEQdK,/T_3$$}Pw6|GC%I1Bnf>');
define('AUTH_SALT',        'B<G? MVmt@YNRw);2_TS`A8 SEQDSsV{l|8QiUJn471Y&ZY]+XSwJbI@~?AB8<a?');
define('SECURE_AUTH_SALT', '2VNS9JHrIh_b1+ov[.E[Rd+jf]M~L!Q-4&a|W2:gAu^@02+Dc}Y>G(G$/yUm@.fZ');
define('LOGGED_IN_SALT',   '@Oc0{5*3ri?Y(2]7_l:~LO_?-6qgD-X7l7I5Q?h9,^SqK%s7LMX--vza]Af1?VUR');
define('NONCE_SALT',       '0kbi7Lg]S]qQTJw)ivj*P`|d,>c_ixNH6{I*/p3KQ@?NA;Kl*MmPC9yk-*6:s#J/');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
