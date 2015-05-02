<?
$sale = explode('-',$text['shelude']['courses'][0]['date']);
$sale = date("Y-m-d",mktime(0,0,0,$sale[1],$sale[2]-$text['prices']['sale'],$sale[0]));
?>
      <div class="price__title title"><?=$text['prices']['title']?></div>
      <div class="price__list price-list">
<?foreach ($text['prices']['content'] as $i => $price) { ?>
        <div class="price-list__item price-item">
          <div class="price-item__cost cost">
            <div class="cost__old"><?=$price['cost']['old']?></div>
            <div class="cost__new"><?=$price['cost']['new']?></div>
            <div class="cost__currency"><?=$price['cost']['currency']?></div>
          </div>
          <div class="price-item__title"><?=$price['title']?></div>
          <div class="price-item__text"><?=$price['text']?><?=date("d.m.Y", strtotime($sale))?></div>
        </div>
<?}?>
      </div>
      <div class="price__calc calc">
        <div class="calc__text"><?=$text['prices']['calc']['title']?>
          <select name="calc" class="calc__select">
<?foreach ($text['prices']['calc']['select'] as $i => $select) { ?>
            <option value="<?=$select['value']?>" data-price="<?=$select['price']?>" <?=$i==0?'selected':''?>><?=$select['text']?></option>
<?}?>
          </select>
        </div>
        <div class="calc__value">
          <div class="calc__value-text"><?=$text['prices']['calc']['select'][0]['price']?></div>
          <img src="i/calc/<?=$text['prices']['calc']['select'][0]['value']?>.png" height="58" width="58" alt="" class="calc__value-image">
        </div>
      </div>
      <div class="price__sale">
        <?foreach ($text['prices']['sales'] as $i => $sale) { ?><strong><?=$sale['sale']?></strong> <?=$sale['text']?><?if(++$i < count($text['prices']['sales'])){?><br><?}}?>
      </div>