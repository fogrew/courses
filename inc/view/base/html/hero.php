      <h1 class="hero__title title"><?=$text['hero']['title']?></h1>
<?foreach ($text['hero']['thinks'] as $i => $thinks) {?>
      <div class="hero__thinks thinks thinks_<?=$thinks['style']?>">
<?foreach ($thinks['think'] as $j => $think) {?>
        <div class="thinks__think"><?if(isset($think['image'])) {?><img src="<?=$think['image']?>" class="thinks__image" alt="<?=$think['text']?>"><?}?><?=$think['text']?></div>
<?}?>
      </div>
<?}?>
      <div class="hero__call">
        <div class="hero__media"><img src="<?=$text['hero']['image']?>" alt=""></div>
        <div class="hero__action">
          <form action="#" class="form form_vertical" id="form-hero">
<?if (isset($text['hero']['form']['text']['line1']) && $text['hero']['form']['text']['line1'] != '') {?>
            <div class="hero__form-title form__title"><?=$text['hero']['form']['text']['line1']?></div>
<?}?>
<?if (isset($text['hero']['form']['text']['line2']) && $text['hero']['form']['text']['line2'] != '') {?>
            <div class="hero__form-title_line form__title_line"><?=$text['hero']['form']['text']['line2']?></div>
<?}?>
<?if (isset($text['hero']['form']['name']) && $text['hero']['form']['name'] != '') {?>
            <label for="hero-name" class="label"><?=$text['hero']['form']['name']?></label>
<?}?>
            <input type="text" id="hero-name" name="name" class="text text_block" placeholder="<?=$text['hero']['form']['name-placeholder']?>">
<?if (isset($text['hero']['form']['name']) && $text['hero']['form']['name'] != '') {?>
            <label for="hero-phone" class="label"><?=$text['hero']['form']['phone']?></label>
<?}?>
            <input type="tel" id="hero-phone" name="tel" class="text text_block" placeholder="<?=$text['hero']['form']['phone-placeholder']?>">
            <input type="submit" class="button button_block" value="<?=$text['hero']['form']['button']?>">
          </form>
        </div>
      </div>