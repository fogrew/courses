      <div class="similar__title"><?=$text['similar']['title']?></div>
<?foreach ($text['similar']['content'] as $i => $similar) {?>
      <div class="similar__content">
        <img src="<?=$similar['image']?>" alt="<?=$similar['title']['line1']?> <?=$similar['title']['line2']?>" class="similar__image">
        <div class="similar__head head">
          <div class="head__one"><?=$similar['title']['line1']?></div>
          <div class="head__two"><?=$similar['title']['line2']?></div>
        </div>
        <div class="similar__links">
<?  foreach ($similar['text'] as $j => $item) {?>
          <a href="<?=$item['link']?>" class="similar__link"><?=$item['item']?></a>
<?  }?>
        </div>
      </div>
<?}?>