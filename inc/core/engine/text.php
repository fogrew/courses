<?
// load texts
foreach ($blocks as $key => $block) {
  $base_text = 'inc/text/' . LANG . '/base/' . $block[0] . '.php';
  $page_text = 'inc/text/' . LANG . '/' . TEXT . '/' . $block[0] . '.php';

  if(is_readable($base_text)) {
    include $base_text;
  } else if($block[0] != 'scripts'){
    echo '<script>console.error("Базовый текст блока '.$block[0].' для страницы '.TEXT.' отсутствует");</script>';
  }

  if(is_readable($page_text)) {
    include $page_text;
  }
}