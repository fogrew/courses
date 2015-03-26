<?
/*
 ********************************
 * Fogrew Landing Page CMS
 * License: GNU
 * Author:  Andrew Gurylev
 * Site:    http://gurylev.com/
 ********************************
 */

// define block in this page
$blocks = [
	'meta',
	'header',
	'hero',
	'navbar',
	'features',
	'form-phone',
	'results',
	'who',
	'form-mail',
	'stats',
	'photo',
	'reviews',
	'prices',
	'shelude',
	'program',
	'clients',
	'faq',
	'sertificates',
	'map',
	'footer',
	'similar',
	'spoiler'
];

// setup configs
require 'inc/config/index.php';

$config['site']['view'] = 'design';
$config['site']['text'] = 'design';

// define globals variables
require 'inc/core/engine/globals.php';
// run blocks
require 'inc/core/engine/index.php';