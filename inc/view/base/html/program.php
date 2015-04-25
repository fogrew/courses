      <h2 class="program__title title"><?=$text['program']['title']?></h2>
      <div class="program__annotation"><?=$text['program']['annotation']?> — <a href="<?=$text['program']['download']['link']?>"><?=$text['program']['download']['text']?></a></div>
      <div class="program__marks">
<?foreach ($text['program']['content'] as $i => $program) {?>
        <div class="program__mark media">
          <div class="media__text">
            <div class="media__title"><?=$program['title']?></div>
<?  if (isset($program['text']) && is_array($program['text'])) {?>
            <div class="media__text">
              <ul>
<?    foreach ($program['text'] as $j => $item) { ?>
                <li><?=$item['item']?></li>
<?    }?>
              </ul>
              <div class="program__links">
                <a href="<?=$program['theory']?>" data-fancybox-type="iframe" class="various"><?=$text['program']['more']['theory']?></a> | <a href="<?=$program['practic']?>" data-fancybox-type="iframe" class="various"><?=$text['program']['more']['practic']?></a>
              </div>
            </div>
<?  }?>
          </div>
        </div>
<?  if(++$i == $text['program']['load']['count']) {?>
      </div>
      <div class="program__marks program__marks_hidden">
<?  }?>
<?}?>
      </div>
      <div class="load-more">
        <button class="button load-more__button"><?=$text['program']['load']['text']?></button>
      </div>