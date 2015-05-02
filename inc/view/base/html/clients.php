    	<div class="title"><?=$text['clients']['title']?></div>
      <div class="owl-carousel">
<?foreach ($text['clients']['content'] as $i => $client) { ?>
        <img class="owl-lazy" src="data:image/png;base64,R0lGODlhAQABAIABAAAAAP///yH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?=$client['image']?>" alt="<?=$client['alt']?>" title="<?=$client['title']?>">
<?}?>
      </div><!-- 1px.png before onload ^__^ w3c, hello! -->