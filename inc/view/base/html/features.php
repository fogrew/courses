      <div class="features__title title"><?=$text['features']['title']?></div>
<?foreach ($text['features']['content'] as $i => $feature) { ?>
      <div class="thumb">
        <img src="<?=$feature['image']?>" height="65" alt="<?=$feature['title']?>" class="thumb__image">
        <div class="thumb__content">
          <div class="thumb__title"><?=$feature['title']?></div>
          <div class="thumb__text"><?=$feature['text']?></div>
        </div>
      </div>
<?}?>