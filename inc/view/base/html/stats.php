      <h2 class="stats__title title"><?=$text['stats']['title']?></h2>
<?foreach ($text['stats']['media'] as $i => $stat) { ?>
      <div class="stats__stat media">
        <img src="<?=$stat['image']?>" alt="<?=$stat['title']?>" class="stats__image media__image">
        <div class="media__text">
          <div class="stats__accent media__accent"><?=$stat['title']?></div>
          <div class="media__unit"><?=$stat['text']?></div>
        </div>
      </div>
<?}?>