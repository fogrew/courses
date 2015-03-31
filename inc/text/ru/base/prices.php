<? $i = 0; $j = 0; $n = 0;

$text['prices']['title'] = 'Цены';
$text['prices']['sale']  = 7;

$text['prices']['content'][$i]['title']              = 'Для физических лиц';
$text['prices']['content'][$i]['text']               = 'скидка 30% до ';
$text['prices']['content'][$i]['cost']['old']        = '11 000';
$text['prices']['content'][$i]['cost']['new']        = '8 200';
$text['prices']['content'][$i++]['cost']['currency'] = 'р.';

$text['prices']['content'][$i]['title']              = 'Для юридических лиц';
$text['prices']['content'][$i]['text']               = 'скидка 30% до ';
$text['prices']['content'][$i]['cost']['old']        = '11 500';
$text['prices']['content'][$i]['cost']['new']        = '8 600';
$text['prices']['content'][$i++]['cost']['currency'] = 'р.';


$text['prices']['calc']['title']                = 'Расчёт цены в';

$text['prices']['calc']['select'][$j]['value']  = 'pizza';
$text['prices']['calc']['select'][$j]['price']  = '12';
$text['prices']['calc']['select'][$j++]['text'] = 'пиццах';

$text['prices']['calc']['select'][$j]['value']  = 'metro';
$text['prices']['calc']['select'][$j]['price']  = '264';
$text['prices']['calc']['select'][$j++]['text'] = 'жетонах метро';

$text['prices']['calc']['select'][$j]['value']  = 'coffee';
$text['prices']['calc']['select'][$j]['price']  = '54';
$text['prices']['calc']['select'][$j++]['text'] = 'стаканах кофе';

$text['prices']['calc']['select'][$j]['value']  = 'cinema';
$text['prices']['calc']['select'][$j]['price']  = '13';
$text['prices']['calc']['select'][$j++]['text'] = 'походов в кино';


$text['prices']['sales'][$n]['sale']   = 'Скидка 5%';
$text['prices']['sales'][$n++]['text'] = 'при 100% оплате курса';

$text['prices']['sales'][$n]['sale']   = 'Скидка 10%';
$text['prices']['sales'][$n++]['text'] = 'при записи на курс при записи на курс SEO и курс <a href="adwords.php" title="курс Google AdWords">Google AdWords</a> или <a href="direct.php" title="курс Google AdWords">Yandex Директ</a>';

$text['prices']['sales'][$n]['sale']   = 'Скидка 15%';
$text['prices']['sales'][$n++]['text'] = 'при записи на курс SEO и <a href="ppc.php" title="курс контекстной рекламы">контекстной рекламы</a>';