
  <div class="sertificates block">
    <div class="container">
    	<div class="title"></div>
      <div class="fotorama" data-width="100%" data-nav="thumbs" data-allowfullscreen="true" data-fit="cover" data-loop="true" data-keyboard="true" data-arrows="true" data-click="true" data-swipe="true">
<?foreach ($text['sertificates']['content'] as $i => $sertificate) { ?>
        <a href="<?=$sertificate['image']?>" data-caption="<?=$sertificate['text']?>"><img src="<?=$sertificate['thumb']?>" height="64" width="96" alt=""></a>
<?}?>
      </div>
    </div>
  </div>