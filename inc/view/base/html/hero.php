      <h1 class="hero__title title"><?=$text['hero']['title']?></h1>
      <div class="hero__about media">
        <div class="media__left">
          <img src="<?=$text['hero']['image']?>" alt="<?=$text['hero']['title']?>" class="hero__logo media__image">
        </div>
        <div class="hero__text media__text"><?=$text['hero']['text']?></div>
      </div>
      <div class="hero__specs">
<?foreach ($text['hero']['content'] as $i => $spec) { ?>
        <div class="hero__spec spec">
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
if($text['hero']['next'] !== '') {
$next = date("d-m-Y", strtotime($text['shelude']['courses'][0]['date']));
$next = explode("-", $next);
?>
      <div class="hero__next next">
        <div class="next__text"><?=$text['hero']['next']?></div>
        <div class="next__date">
          <span class="next__day"><?=$next[0]?></span>
          <span class="next__month"><?=$next[1]?></span>
          <span class="next__year"><?=$next[2]?></span> 
        </div>
      </div>
<?}?>
      <div class="hero__call">
        <div class="hero__media"><img src="<?=$text['hero']['image_big']?>" alt=""></div>
        <div class="hero__action">
          <form action="#" class="form form_vertical" id="form-hero">
<?if(isset($text['hero']['form']['text']['line1']) && $text['hero']['form']['text']['line1'] != '') {?>
            <div class="hero__form-title form__title"><?=$text['hero']['form']['text']['line1']?></div>
<?}?>
<?if(isset($text['hero']['form']['text']['line2']) && $text['hero']['form']['text']['line2'] != '') {?>
            <div class="hero__form-title_line form__title_line"><?=$text['hero']['form']['text']['line2']?></div>
<?}?>
<?if(isset($text['hero']['form']['name']) && $text['hero']['form']['name'] != '') {?>
            <label for="hero-name" class="label"><?=$text['hero']['form']['name']?></label>
<?}?>
            <input type="text" id="hero-name" name="name" class="text text_block" placeholder="<?=$text['hero']['form']['name-placeholder']?>">
<?if(isset($text['hero']['form']['name']) && $text['hero']['form']['name'] != '') {?>
            <label for="hero-phone" class="label"><?=$text['hero']['form']['phone']?></label>
<?}?>
            <input type="tel" id="hero-phone" name="tel" class="text text_block" placeholder="<?=$text['hero']['form']['phone-placeholder']?>">
            <input type="submit" class="button button_block" value="<?=$text['hero']['form']['button']?>">
          </form>
        </div>
      </div>