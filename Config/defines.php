<?php
// Ścieżka do biblioteki MK(php)
define('MK_PATH',		realpath(dirname(__FILE__) . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR));

// Konfiguracja startowa aplikacji
define('MK_LANG',			'pl');
define('MK_DEFAULT_LANG',	'pl');
define('MK_LOCALE_TIME',	'pl_PL.UTF-8');
define('MK_LOCALE_NUMERIC',	'en_US');
define('MK_TIMEZONE',		'Europe/Warsaw');
define('MK_HTML_HEADER',	'Content-Type: text/html; charset=utf-8');
define('MK_COOKIES_PATH',	dirname(((isset($_SERVER['REQUEST_URI'])) ? $_SERVER['REQUEST_URI'] : 'localhost').'?'));
define('MK_IS_CLI',			defined('STDIN') ? true : false);

// Konfigruacja zgłaszania i zapisywania błędów
define('MK_DEVELOPER',			defined('APP_DEVELOPER') ? APP_DEVELOPER : false);
define('MK_ERROR_JS_ENABLED',	defined('APP_ERROR_JS_ENABLED') ? APP_ERROR_JS_ENABLED : true);
define('MK_DEBUG_FIREPHP',		isset($_SESSION['DEBUG_FIREPHP']) && !MK_IS_CLI ? true : false);

// Ścieżki do plików wykorzystywanych przez aplikację
define('APP_FILE_LOCK',		'under_construction.txt');
define('MTM_FILE_LIST',		'/var/lib/mtm/task.list');
define('MTM_FILE_LOG',		'/var/log/mtm/mtm.log');
define('MTM_FILE_LOCK',		'/tmp/mtm_task.lock');

// Ścieżki do aplikacji zewnętrznych
define('EXEC_MINIFY',		'/opt/yuicompressor-2.4.6/build/yuicompressor-2.4.6.jar');

// Domyślna konfiguracja systemu
define('DB_DEFAULT_LIMIT',			40);
define('DB_DEFAULT_START',			0);
define('DB_DEFAULT_SORT_DIRECTION',	'ASC');
define('DB_DEFAULT_SORT_COLUMN',	null);

// Cacheowanie wsdl'i
define('WSDL_CACHE_ENABLE',			false);


/**
 * Stałe wymagane, aby niektóre części MK(php) działały:
 *	define('SESSION_SAVE_HANDLER,	'files');		// Sesje zapisywane w plikach
 *	//define('SESSION_SAVE_HANDLER,	'memcache');	// Sesje zapisywane w pamięci
 *	define('DIR_SESSION',			APP_PATH.DIRECTORY_SEPARATOR.'temp'.DIRECTORY_SEPARATOR.'session');			// dla SESSION_SAVE_HANDLER = 'files'
 *	//define('DIR_SESSION',			'tcp://127.0.0.1:11211?persistent=1&weight=1&timeout=1&retry_interval=15');	// dla SESSION_SAVE_HANDLER = 'memcache'
 *	define('APP_NAME',		'');	// Nazwa aplikacji
 *	define('DB_HOST',		'');	// Baza danych: hostname
 *	define('DB_PORT',		'');	// Baza danych: port
 *	define('DB_USER',		'');	// Baza danych: użytkownik
 *	define('DB_PASS',		'');	// Baza danych: hasło
 *	define('DB_NAME',		'');	// Baza danych: nazwa
 *	define('DB_DEBUG',		'');	// Baza danych: Czy debugować zapytania SQL?
 *
 * Stałe pomocnicze:
 *	define('APP_DEVELOPER',			false);
 *	define('APP_ERROR_JS_ENABLED',	true);
 *
 */