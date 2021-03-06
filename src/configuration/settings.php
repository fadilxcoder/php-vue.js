<?php

/*
 *  +------------------------------------------+
 *  ¦                 |\__/|                   ¦
 *  ¦                / - - \                   ¦
 *  ¦               /_.~ ~,_\                  ¦
 *  ¦                  \@/                     ¦
 *  ¦------------------------------------------¦
 *  ¦           HELIFOX PHP FRAMEWORK          ¦
 *  ¦------------------------------------------¦
 *  ¦      www.facebook.com/fadil.xcoder       ¦
 *  +------------------------------------------+
 *
 *  HELIFOX MVC FRAMEWORK
 *
 *  A Light & Cunning MVC Framework, built for PHP developers to create web apps.
 *
 * Copyright (c) Wednesday, 13 September 2017 ~ DAY OF THE PROGRAMMER ~ Fadil Rosun-Mungur ~ FADILXCODER
 *
*/

/*
*   Define the base url of the project
*/

define('URL', 'http://vue-php.local/');
define('ROUTING_URL', 'http://vue-php.local/');

// define('URL', 'http://localhost:8881/');
// define('ROUTING_URL', 'http://localhost:8881?url=');

// define('URL', 'http://iox.000webhostapp.com/php-vue-js/');
// define('ROUTING_URL', 'http://iox.000webhostapp.com/php-vue-js/');

/*
*   Database configuration. Set ACTIVATE to TRUE if project will be using MySQL DATABASE and fill connection details.
*/
define('ACTIVATE',  'TRUE');

define('HOST',      'localhost');
define('USERNAME',  'root');
define('PASSWORD',  '');
define('DATABASE',  'vue_php_database');

// define('HOST',      'database');
// define('USERNAME',  'myuser');
// define('PASSWORD',  'secret');
// define('DATABASE',  'mydb');

// define('HOST',      'localhost');
// define('USERNAME',  'id2234615_jqm_usr');
// define('PASSWORD',  '2sP4TtqNPW8KfuD');
// define('DATABASE',  'id2234615_jqm_db');

/*
* DEFINE ENVIRONMENT, Allowed environments variables : development / production
*/
define('ENVIRONMENT',  'development');

/*
* ARGON2I COST FACTORS CONFIGURATION
*
*************  Please note that ARGON2I needs python 3.4 installed *********************
*
* Default values of argon2i are below :
*
* MEMORY_COST           : PASSWORD_ARGON2_DEFAULT_MEMORY_COST
* TIME_COST             : PASSWORD_ARGON2_DEFAULT_TIME_COST
* PARALLELISM_FACTOR    : PASSWORD_ARGON2_DEFAULT_THREADS
*
* Personalized setting is below.
*/
define('MEMORY_COST', '2048');
define('TIME_COST', '11');
define('PARALLELISM_FACTOR', '7');

/*
* SET TIMEZONE DECLARATION
*/
date_default_timezone_set('Indian/Mauritius');


/*
*   Your other personal configurations go below..
*/
