<?
/*
 ********************************
 * Fogrew Landing Page CMS
 * License: GNU
 * Author:  Andrew Gurylev
 * Site:    http://gurylev.com/
 ********************************
 */

// setup configs
require 'inc/config/index.php';
// define globals variables
require 'inc/core/engine/globals.php';

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

$config['site']['view'] = 'seo';

// run blocks
require 'inc/core/engine/index.php';