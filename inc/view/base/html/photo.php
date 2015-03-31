      <div class="fotorama" data-width="100%" data-nav="thumbs" data-allowfullscreen="true" data-fit="cover" data-loop="true" data-keyboard="true" data-arrows="true" data-click="true" data-swipe="true">
<?foreach ($text['photos']['content'] as $i => $photo) { ?>
        <a href="<?=$photo['image']?>" data-caption="<?=$photo['text']?>"><img src="<?=$photo['thumb']?>" height="64" width="96" alt=""></a>
<?}?>
      </div>