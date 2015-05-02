      <div class="about__content media">
        <div class="media__left">
          <img src="<?=$text['about']['image']?>" alt="<?=$text['about']['title']?>" class="about__logo media__image">
        </div>
        <div class="about__text media__text"><?=$text['about']['text']?></div>
      </div>
      <div class="about__specs">
<?foreach ($text['about']['content'] as $i => $spec) {?>
        <div class="about__spec spec">
          <div class="spec__content media">
            <div class="spec__image media__image">
              <img src="<?=$spec['image']?>" alt="<?=$spec['title']?>">
            </div>
            <div class="spec__text media__text">
              <div class="media__accent"><?=$spec['title']?></div>
              <div class="media__unit"><?=$spec['text']?></div>
            </div>
          </div>
        </div>
<?}?>
      </div>
<?
if ($text['about']['next'] !== '') {
	$next = date("d-m-Y", strtotime($text['shelude']['courses'][0]['date']));
	$next = explode("-", $next);
	?>
      <div class="about__next next">
        <div class="next__text"><?=$text['about']['next']?></div>
        <div class="next__date">
          <span class="next__day"><?=$next[0]?></span>
          <span class="next__month"><?=$next[1]?></span>
          <span class="next__year"><?=$next[2]?></span>
        </div>
      </div>
<?}?>