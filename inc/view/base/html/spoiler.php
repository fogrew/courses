      <div class="spoiler__marks">
<?foreach ($text['spoiler']['content'] as $i => $spoiler) {?>
        <div class="spoiler__mark media">
          <div class="media__text">
            <div class="media__title"><?=$spoiler['title']?></div>
            <div class="media__text">
              <ul>
<?  foreach ($spoiler['text'] as $j => $item) {?>
                <li><?=$item['item']?></li>
<?  }?>
              </ul>
            </div>
          </div>
        </div>
<?}?>
      </div>