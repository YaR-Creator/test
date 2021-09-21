<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wp_mytest' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'coda' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'coda1' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '+V{O(lS?<X{4@9]e$0Q=u#a&arRF.dErVtX}#e4lx{}bk<#(6bl3fmf<UZrj=9%q' );
define( 'SECURE_AUTH_KEY',  'fGjg+Qp3e6B8R)hZB`Thk(ns+>bc~[nKd?_W!m%}H4`:!u--pGfV&Bvl|IKQZ`Gv' );
define( 'LOGGED_IN_KEY',    'KBz2f*|vkcEMch]C-FX]sPPm7e-;;EGaJrl=P/kXq&DBhat{D$8bnKd,Q)F8K-O]' );
define( 'NONCE_KEY',        '-k=cg_-E^w[*75i r<8PojME=HqPkrGV$6ZCc1S!  C.|-b.2*x[!R74u=$RqN{}' );
define( 'AUTH_SALT',        '<ItFcgF2>]9LRC^xDcIjQng4)/`(]hXVHr{1F6&e((4qW=|R.%?Y4wOmIiP4&w7`' );
define( 'SECURE_AUTH_SALT', 'c_b`72k%ZzW4wEN+Q_G2yRp`{`MH|ctw>^h%>31uc1Xe3y-p})Ia5Fm#^Tl.:bi1' );
define( 'LOGGED_IN_SALT',   'CWQSzts&Q`Nyu#^:ajx`n.Bk&c5EP52Q!%Yk~,H`3?%fb;1;o^IlCkdJ~G7dUqq|' );
define( 'NONCE_SALT',       'HBAc_G-pTwhwizD^cNP+!-d2VI<n?G{jkf4@N9iKPW2+in@L?..7v:un^K?$=]3i' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';

define('FS_METHOD', 'direct');