<?
ini_set ('display_errors', 0);
header('Content-type: text/html; charset=utf-8');
if(isset($_GET['dev'])) {
	ini_set ('display_errors', 1);
}

if($_SERVER['REQUEST_URI']=='/index.php'){header("Location: /");exit;}

// load texts
foreach ($blocks as $key => $block) {
	$base_text = 'inc/text/' . LANG . '/base/' . $block . '.php';
	$page_text = 'inc/text/' . LANG . '/' . PAGE . '/' . $block . '.php';

	if(is_readable($base_text)) {
		include $base_text;
	} else {
		echo '<script>console.error("Базовый текст блока '.$block.' для страницы '.PAGE.' отсутствует");</script>';
	}

	if(is_readable($page_text)) {
		include $page_text;
	}
}	

// load view
foreach ($blocks as $key => $block) {
	$base_view = 'inc/view/base/html/'.$block.'.php';
	$page_view = 'inc/view/'.$config['site']['view'].'/html/'.$block.'.php';

	if(is_readable($base_view)) {
		$viewer[$block] = $base_view;
	} else if(!is_readable($page_view)) {
		echo '<script>console.error("Базовый шаблон блока '.$block.' отсутствует.");</script>';
	}
	if(is_readable($page_view)) {
		$viewer[$block] = $page_view;
	}
	include $viewer[$block];
}	

$base_scripts = 'inc/view/base/html/scripts.php';
$page_scripts = 'inc/view/'.$config['site']['view'].'/html/scripts.php';
if(is_readable($base_scripts)) {
	$viewer['scripts'] = $base_scripts;
} else if(!is_readable($page_scripts)) {
	echo '<script>console.error("Скрипты из базового шаблона отсутствуют.");</script>';
}
if(is_readable($page_scripts)) {
	$viewer['scripts'] = $page_scripts;
}
include $viewer['scripts'];