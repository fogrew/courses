
  <div class="clients block">
    <div class="container">
    	<div class="title"><?=$text['clients']['title']?></div>
      <div class="owl-carousel">
<?foreach ($text['clients']['content'] as $i => $client) { ?>
        <img class="owl-lazy" data-src="<?=$client['image']?>" alt="">
<?}?>
      </div>
    </div>
  </div>