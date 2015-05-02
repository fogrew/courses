<?
// load view
foreach ($blocks as $key => $block) {
  $base_view = 'inc/view/base/html/'.$block[0].'.php';
  $page_view = 'inc/view/'.VIEW.'/html/'.$block[0].'.php';

  if(is_readable($base_view)) {
    $viewer[$block[0]] = $base_view;
  } else if(!is_readable($page_view)) {
    echo '<script>console.error("Базовый шаблон блока '.$block.' отсутствует.");</script>';
  }
  if(is_readable($page_view)) {
    $viewer[$block[0]] = $page_view;
  }
  if(isset($block[1])) {
    $block_class = explode(' ', $block[1]);
    $classes = $block[0].' block';
    foreach ($block_class as $i => $class) {
      if($class != '') {
        $classes = $classes.' block_'.$class;
      }
    } ?>

  <div class="<?=$classes?>" id="<?=$block[0]?>">
<?  if($block[0] != 'map') {?>
    <div class="container">
<?  }?>
<?  }
  include $viewer[$block[0]];
  if(isset($block[1])) { ?>
<?  if($block[0] != 'map') {?>

    </div>
<?  }?>
  </div>
<?  }
} 