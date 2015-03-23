<?
$date = date("Y-m", strtotime($text['shelude']['courses'][0]['date']));

$sd = explode("-", $date);

$year  = $sd[0];
$month = $sd[1];

$dates = [];
foreach ($text['shelude']['courses'] as $i => $course) {
  // если текущее начало курса в том же месяце, что и первое начало курса, то выводить
  if(date("Y-m", strtotime($course['date'])) == date("Y-m", strtotime($text['shelude']['courses'][0]['date']))) {
    $dates[$i] = date("d", strtotime($course['date']));
  }
}

// Вычисляем число дней в текущем месяце
$dayofmonth = date('t',
                    mktime(0, 0, 0, $month, 1, $year));
// Счётчик для дней месяца
$day_count = 1;

// 1. Первая неделя
$num = 0;
for($i = 0; $i < 7; $i++) {
  // Вычисляем номер дня недели для числа
  $dayofweek = date('w',
                    mktime(0, 0, 0, $month, $day_count, date('Y')));
  // Приводим к числа к формату 1 - понедельник, ..., 6 - суббота
  $dayofweek = $dayofweek - 1;
  if($dayofweek == -1) $dayofweek = 6;

  if($dayofweek == $i) {
    // Если дни недели совпадают,
    // заполняем массив $week
    // числами месяца
    $week[$num][$i] = $day_count;
    if($day_count == 1) $week[$num][$i] = $day_count . ' ' . $text['shelude']['months'][$month-1]['short'];
    $day_count++;
  } else {
    $week[$num][$i] = "";
  }
}

// 2. Последующие недели месяца
while(true) {
  $num++;
  for($i = 0; $i < 7; $i++) {
    $week[$num][$i] = $day_count;
    $day_count++;
    // Если достигли конца месяца - выходим
    // из цикла
    if($day_count > $dayofmonth) break;
  }
  // Если достигли конца месяца - выходим
  // из цикла
  if($day_count > $dayofmonth) break;
}

// 3. Выводим содержимое массива $week
// в виде календаря
// Выводим таблицу
?>  
  <div class="shelude block" id="shelude">
    <div class="container">
      <div class="shelude__title title"><?=$text['shelude']['title']?></div>
      <div class="calendar">
        <div class="calendar__th_header"><?=$text['shelude']['months'][$month-1]['full'].' '.$year?></div>
        <div class="calendar__thead">
          <div class="calendar__tr">
            <div class="calendar__th">Пн</div>
            <div class="calendar__th">Вт</div>
            <div class="calendar__th">Ср</div>
            <div class="calendar__th">Чт</div>
            <div class="calendar__th">Пт</div>
            <div class="calendar__th">Сб</div>
            <div class="calendar__th">Вс</div>
          </div>
        </div>
        <div class="calendar__tbody">
<?for($weeks = 0; $weeks < count($week); $weeks++) {?>
          <div class="calendar__tr">
<?  for($days = 0; $days < 7; $days++) {
      if(!empty($week[$weeks][$days])) {?>
<?      if($days == 5 || $days == 6) {?>
            <div class="calendar__td calendar__td_inactive">
<?      } else {?>
            <div class="calendar__td">
<?      } ?>
              <?=$week[$weeks][$days]?>
<?      foreach ($dates as $i => $value) {
          if($value == $week[$weeks][$days]) { 
            $course = $text['shelude']['courses'][$i];?>

              <div class="calendar__line">
                <?=$course['title']?>
                <div class="calendar__popover popover popover_<?=$course['position']?>">
                  <div class="popover__date"><?=$course['date-text']?></div>
                  <div class="popover__time"><?=$course['time']?></div>
                  <div class="popover__place"><?=$course['place']?></div>
                  <div class="popover__count"><?=$course['count']?></div>
                  <div class="popover__action">
                    <a href="#join" class="popover__button button"><?=$course['button']?></a>
                  </div>
                </div>
              </div>
<?      } ?>
<?    }?>

            </div>
<?    } else { // если даты нету и в поле пустота ?>
            <div class="calendar__td"></div>
<?    } ?>

<?  } ?>
          </div>
<?  } ?>
        </div>
      </div>
    </div>
  </div>