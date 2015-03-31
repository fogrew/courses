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
	['meta'],
	['header',''],
	['hero','screen'],
	['navbar',''],
	['features','screen'],
	['form-phone','line bright'],
	['results','screen'],
	['who','screen light'],
	['form-mail','line bright'],
	['stats','screen'],
	['photo','screen'],
	['reviews','screen light'],
	['prices','screen'],
	['shelude','screen light'],
	['program','screen bright'],
	['sertificates','screen'],
	['clients','screen light'],
	['faq','screen'],
	['map',''],
	['footer','screen'],
	['prespoiler'],
	['spoiler','screen bright'],
	['scripts']
];

$config['site']['view'] = 'seo';

// run blocks
require 'inc/core/engine/index.php';