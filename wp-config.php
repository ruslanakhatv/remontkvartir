<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'remonts');

/** Имя пользователя MySQL */
define('DB_USER', 'remonts');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'remonts');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '19(` ;_ZhQ7k6rTpm~i0uf`{3Un3q&;s3`(7Yj}yQw?11$`Fn6l0$7SeaOKb|T*-');
define('SECURE_AUTH_KEY',  'c~M>89|jCXn`#*j$Yu3GDn_=7bCG.vRZAs#zDC|1U2qZ3#TcTi4BR^(=e6#4:[<6');
define('LOGGED_IN_KEY',    'VeB`sVo,/R`(n|={/^cn3!9763]YAzPhstZxR1{W9xcTdTdB,(-6<K}_?Ead^~{y');
define('NONCE_KEY',        'KO;BL2~4ETJ*9,@rMS.@Hp*=~1iW_*stnx%7wfF`^{04aqYE|]od&<i9uO3^DiVc');
define('AUTH_SALT',        'n47ZlgGg}iKt1F2.Va>t8X$]8Fp<2mp%P`tI)<K<-KR3W`BdN!Qjw`K=e=R4Drz>');
define('SECURE_AUTH_SALT', '@;7U96JP(;eM>??SGLjcXYna#&GA@l>BjM>F-Ja.Wp`ZfcwH[6,D`CbQlo4]P-q3');
define('LOGGED_IN_SALT',   '2sFt(AULSL1eA3Xi1yoz5S&s1Y(v/v-h3d}8E_/WvOUQ{yyds_jFXb3}ncC0_gZx');
define('NONCE_SALT',       '(0OfK -x,+D K.A vs9y|9r#NWw($Ew.XWi?1m6rF&HL5CyW8Xmv.Yfm%o(I83>T');

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
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
