      <h2 class="reviews__title title"><?=$text['reviews']['title']?></h2>
      <div class="reviews__tabs tabs" role="tablist">
        <button class="tabs__tab tabs__tab_active" role="tab" data-toggle="tab"><?=$text['reviews']['tabs']['video']?></button>
        <button class="tabs__tab" role="tab" data-toggle="tab"><?=$text['reviews']['tabs']['text']?></button>
        <button class="tabs__tab" role="tab" data-toggle="tab"><?=$text['reviews']['tabs']['audio']?></button>
      </div>
      <div class="reviews__tabs-content tabs-content" role="tabpanel">
        <div class="tabs-content__tacontent tabs-content__tacontent_active" role="tabpanel">
          <div class="fotorama" data-width="100%" data-height="480">
<?foreach ($text['reviews']['content']['video'] as $i => $video) { ?>
            <a href="<?=$video['link']?>"><?=$video['text']?></a>
<?}?>
          </div>
        </div>
        <div class="tabs-content__tacontent" role="tabpanel">
          <div class="fotorama" data-width="100%" data-height="200" data-loop="true" data-autoplay="8000">
<?$br = 3;?>
<?foreach ($text['reviews']['content']['text'] as $i => $review) { ?>
<?  if($i % $br == 0) {?>
            <div class="reviews__slide">
<?  }?>
              <div class="reviews__review thumb">
                <div class="thumb__content">
                  <div class="thumb__title"><?=$review['author']?></div>
                  <div class="thumb__text"><?=$review['text']?></div>
                </div>
              </div>
<?  if(($i+1) % $br == 0) {?>
            </div>
<?  }?>
<?}?>
          </div>
        </div>
        <div class="tabs-content__tacontent" role="tabpanel">
<?foreach ($text['reviews']['content']['audio'] as $i => $audio) { ?>
          <div class="media__content"><?=$audio['text']?></div>
          <audio controls>
            <source src="<?=$audio['link']?>" type="audio/wav"><a href="<?=$audio['link']?>"></a></audio>
<?}?>
        </div>
      </div>
      
<?foreach ($text['reviews']['content']['text'] as $i => $review) { ?>
  <div class="modal" id="">
    <div class="media">
      <div class="media__title"></div>
      <div class="media__text"></div>
    </div>
  </div>
<?}?>