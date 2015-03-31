<?foreach ($text['navbar'] as $i => $item) { ?>
<?  if($item['type']=='callback') {?>
      <a href="#top" class="navbar__item navbar__item_callback callback">
        <span class="callback__phone"><?=$item['phone']?></span>
        <span class="callback__text"><?=$item['callback']?></span>
      </a>
<?  }else{?>
      <a href="#<?=$item['anchor']?>" class="navbar__item <?if($item['type']=='button') {?>navbar__item_button<?}else{?>navbar__item_link<?}?>"><?=$item['text']?></a>
<?  }?>
<?}?>