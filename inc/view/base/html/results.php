
  <div class="results block" id="results">
    <div class="container">
      <h2 class="results__title title"><?=$text['results']['title']?></h2>
<?foreach ($text['results']['content'] as $i => $result) { ?>
      <div class="results__result media">
        <img src="<?=$result['image']?>" alt="<?=$result['title']?>" class="media__image">
        <div class="media__text">
          <div class="media__title"><?=$result['title']?></div>
          <div class="media__content"><?=$result['text']?></div>
        </div>
      </div>
<?}?>
    </div>
  </div>