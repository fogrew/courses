      <div class="faq__mark">
        <div class="title"><?=$text['faq']['title']?></div>
<?foreach ($text['faq']['content'] as $i => $answer) { ?>
        <div class="media">
          <div class="media__text accordion">
            <div class="media__title accordion__title"><?=$answer['title']?></div>
            <div class="media__content accordion__text"><?=$answer['text']?></div>
          </div>
        </div>
<?}?>
        <div class="media">
          <div class="media__text">
            <div class="media__title"><?=$text['faq']['allow-show']['title']?></div>
            <div class="media__content"><?=$text['faq']['allow-show']['text']?></div>
          </div>
        </div>
      </div>