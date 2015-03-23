
  <div class="contact-line" id="callback">
    <div class="container">
      <form action="#" class="form form_inline" id="form-phone">
        <div class="form__title form__title_line"><?=$text['form-phone']['title']?></div>
        <div class="form__box">
          <label for="contact-line-name" class="label"><?=$text['form-phone']['name']?></label>
          <input type="text" id="contact-line-name" name="name" class="text text_line" placeholder="<?=$text['form-phone']['name-placeholder']?>">
        </div>
        <div class="form__box">
          <label for="contact-line-phone" class="label"><?=$text['form-phone']['phone']?></label>
          <input type="tel" id="contact-line-phone" name="tel" class="text text_line" placeholder="<?=$text['form-phone']['phone-placeholder']?>">
        </div>
        <div class="form__box">
          <input type="submit" class="button button_line" value="<?=$text['form-phone']['button']?>">
        </div>
      </form>
    </div>
  </div>