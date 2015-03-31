
  <div class="navbar" role="navigation">
    <div class="container">
<?foreach ($text['navbar'] as $i => $item) { ?>
<?  if($item['type']=='callback') {?>
      <a href="#top" class="navbar__item navbar__item_callback callback">
        <span class="callback__phone"><?=$item['phone']?></span>
        <span class="callback__text"><?=$item['callback']?></span>
      </a>
<?  }else{?>
      <a href="#<?=$item['anchor']?>" class="navbar__item <?if($item['type']=='join') {?>navbar__item_join<?}else{?>navbar__item_link<?}?>"><?=$item['text']?></a>
<?  }?>
<?}?>
    </div>
  </div>