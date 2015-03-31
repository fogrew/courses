      <form action="#" class="form form_inline">
        <div class="form__title form__title_line"><?=$text['form-email']['title']?></div>
        <div class="form__box">
          <label for="contact-line1-name" class="label"><?=$text['form-email']['name']?></label>
          <input type="text" id="contact-line1-name" name="name" class="text text_line" placeholder="<?=$text['form-email']['name-placeholder']?>">
        </div>
        <div class="form__box">
          <label for="contact-line1-email" class="label"><?=$text['form-email']['email']?></label>
          <input type="email" id="contact-line1-email" name="email" class="text text_line" placeholder="<?=$text['form-email']['email-placeholder']?>">
        </div>
        <div class="form__box">
          <input type="submit" class="button button_line" value="<?=$text['form-email']['button']?>">
        </div>
      </form>