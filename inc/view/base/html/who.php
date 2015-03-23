
  <div class="who block">
    <div class="container">
      <h2 class="who__title title"><?=$text['who']['title']?></h2>
<?foreach ($text['who']['media'] as $i => $who) { ?>
      <div class="who__mark media">
        <img src="<?=$who['image']?>" alt="<?=$who['text']?>" class="who__image media__image">
        <div class="who__text media__text">
          <div class="media__content"><?=$who['text']?></div>
        </div>
      </div>
<?}?>
    </div>
  </div>