
  <div class="faq block">
    <div class="container">
      <div class="faq__mark">
        <div class="title"><?=$text['faq']['title']?></div>
<?foreach ($text['faq']['content'] as $i => $answer) { ?>
        <div class="media">
          <div class="media__text">
            <div class="media__title"><?=$answer['title']?></div>
            <div class="media__content"><?=$answer['text']?></div>
          </div>
        </div>
<?}?>
      </div>
    </div>
  </div>