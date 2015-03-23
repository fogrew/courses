
  <div class="footer block" id="join">
    <div class="container">
      <form action="#" class="form form_vertical" id="form-footer">
        <div class="form__title"><?=$text['footer']['title']?></div>
        <label for="footer-name" class="label"><?=$text['footer']['form']['name']?></label>
        <input type="text" id="footer-name" name="name" class="text text_block" placeholder="<?=$text['footer']['form']['name-placeholder']?>">
        <label for="footer-phone" class="label"><?=$text['footer']['form']['phone']?></label>
        <input type="tel" id="footer-phone" name="tel" class="text text_block" placeholder="<?=$text['footer']['form']['phone-placeholder']?>">
        <label for="footer-email" class="label"><?=$text['footer']['form']['email']?></label>
        <input type="email" id="footer-email" name="email" class="text text_block" placeholder="<?=$text['footer']['form']['email-placeholder']?>">
        <label for="footer-text" class="label"><?=$text['footer']['form']['message']?></label>
        <textarea id="footer-text" name="message" class="textarea" cols="30" rows="10" placeholder="<?=$text['footer']['form']['message-placeholder']?>"></textarea>
        <input type="submit" class="button button_block" value="<?=$text['footer']['form']['button']?>">
      </form>
    </div>
  </div>