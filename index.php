<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Курс по современной вёрстки HTML + CSS</title>
  <meta name="description" content="courses" />
  <meta name="keywords" content="courses" />

  <meta name="viewport" content="width=1000">

  <link rel="stylesheet" href="./style/style.css" />
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.2/fotorama.css">
</head>
<body class="wrapper" id="top">

  <div class="preheader">
    <div class="container">
      <div class="preheader__feedback feedback">
        <div class="feedback__title">Контактный телефон</div>
        <div class="feedback__phone">(812) 915-83-13</div>
        <button class="feedback__action button">Обратный звонок</button>
      </div>
      <img src="i/logo.png" height="110" width="110" alt="ПГУПС" class="preheader__logo">
      <div class="preheader__title">
        Институт повышения квалификации и перпеподготовки<br>
        Петербургский государственный университет<br>
        путей сообщения Императора Александра I</div>
    </div>
  </div>

  <div class="hero">
    <div class="container">
      <h1 class="hero__title title">Курс: Adobe Photoshop</h1>
      <div class="hero__about media">
        <img src="i/ps.jpg" height="100" width="100" alt="" class="hero__logo media__image">
        <div class="hero__text media__text">Курс полностью практический. Намного интереснее изучать Фотошоп на примерах реальных задач. С самого первого занятия Вы начнёте применять полученные знания на практике. Курс полностью систематизирован. Вы начнёте изучать возможности программы Фотошоп на простых примерах, но от занятия к занятию задания становятся всё сложнее.</div>
      </div>
      <div class="hero__specs">
        <div class="hero__spec spec">
          <div class="spec__content media">
            <img src="i/i1.png" height="104" width="104" alt="" class="spec__image media__image">
            <div class="spec__text media__text">
              <div class="media__accent">10</div>
              <div class="media__unit">занятий</div>
            </div>
          </div>
        </div>
        <div class="hero__spec spec">
          <div class="spec__content media">
            <img src="i/i2.png" height="104" width="104" alt="" class="spec__image media__image">
            <div class="spec__text media__text">
              <div class="media__accent">32</div>
              <div class="media__unit">ак. часа</div>
            </div>
          </div>
        </div>
        <div class="hero__spec spec">
          <div class="spec__content media">
            <img src="i/i3.png" height="104" width="104" alt="" class="spec__image media__image">
            <div class="spec__text media__text">
              <div class="media__accent"></div>
              <div class="media__unit">Возраст<br>значения<br>не имеет</div>
            </div>
          </div>
        </div>
      </div>
      <div class="hero__call">
        <div class="hero__media"><img src="i/video.jpg" height="315" width="608" alt=""></div>
        <div class="hero__action">
          <form action="/" class="form form_vertical">
            <label for="hero-name" class="label">Ваше имя</label>
            <input type="text" id="hero-name" class="text text_block" placeholder="Имя">
            <label for="hero-phone" class="label">Ваш контактный телефон</label>
            <input type="tel" id="hero-phone" class="text text_block" placeholder="+7">
            <input type="submit" class="button button_block" value="Заказать звонок">
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="navbar" role="navigation">
    <div class="container">
      <a href="#features" class="navbar__link">Почему мы</a>
      <a href="#results" class="navbar__link">Гарантии</a>
      <a href="#reviews" class="navbar__link">Отзывы</a>
      <a href="#top" class="navbar__callback callback">
        <span class="callback__phone">(812) 915-83-13</span>
        <span class="callback__text">обратный звонок</span>
      </a>
      <a href="#price" class="navbar__link">Цены</a>
      <a href="#shelude" class="navbar__link">Расписание</a>
      <a href="#join" class="navbar__join">Записаться</a>
    </div>
  </div>

  <div class="features" id="features">
    <div class="container">
      <div class="features__title title">Почему мы</div>
      <div class="thumb">
        <img src="i/features/1.svg" height="69" width="82" alt="" class="thumb__image">
        <div class="thumb__content">
          <div class="thumb__title">Обучение от специалистов</div>
          <div class="thumb__text">Вас обучают не&nbsp;теоретики, а&nbsp;практики с&nbsp;постоянной работой в&nbsp;области дизайна</div>
        </div>
      </div>
      <div class="thumb">
        <img src="i/features/2.svg" height="65" width="85" alt="" class="thumb__image">
        <div class="thumb__content">
          <div class="thumb__title">Решение индивидуальных задач</div>
          <div class="thumb__text">Вас обучают не&nbsp;теоретики, а&nbsp;практики с&nbsp;постоянной работой в&nbsp;области дизайна</div>
        </div>
      </div>
      <div class="thumb">
        <img src="i/features/3.svg" height="70" width="64" alt="" class="thumb__image">
        <div class="thumb__content">
          <div class="thumb__title">Группы 5-10 человек</div>
          <div class="thumb__text">Маленькие группы позволят пройти обучение, общаясь с&nbsp;учениками, не&nbsp;теряя внимания преподавателя.</div>
        </div>
      </div>
      <div class="thumb">
        <img src="i/features/4.svg" height="87" width="87" alt="" class="thumb__image">
        <div class="thumb__content">
          <div class="thumb__title">Практический опыт</div>
          <div class="thumb__text">На протяжении курсов дается практический опыт в&nbsp;виде домашнего задания</div>
        </div>
      </div>
      <div class="thumb">
        <img src="i/ico5.png" height="75" width="75" alt="" class="thumb__image">
        <div class="thumb__content">
          <div class="thumb__title">Доступность информации</div>
          <div class="thumb__text">Наши преподаватели излагают материал в&nbsp;доступной для понимания форме</div>
        </div>
      </div>
      <div class="thumb">
        <img src="i/features/6.svg" height="68" width="75" alt="" class="thumb__image">
        <div class="thumb__content">
          <div class="thumb__title">Дружественная атмосфера</div>
          <div class="thumb__text">Занятия построены таким образом, что Вы получаете удовольствие от&nbsp;обучения</div>
        </div>
      </div>
    </div>
  </div>

  <div class="contact-line">
    <div class="container">
      <form action="/" class="form form_inline">
        <div class="form__box">
          <label for="hero-name" class="label">Ваше имя</label>
          <input type="text" id="contact-line-name" class="text text_line" placeholder="Имя">
        </div>
        <div class="form__box">
          <label for="hero-phone" class="label">Ваш контактный телефон</label>
          <input type="tel" id="contact-line-phone" class="text text_line" placeholder="E-mail">
        </div>
        <div class="form__box">
          <input type="submit" class="button button_line" value="Отправить заявку">
        </div>
      </form>
    </div>
  </div>

  <div class="results" id="results">
    <div class="container">
      <h2 class="results__title title">Результат и гарантии</h2>
      <div class="results__result media">
        <img src="i/result1.png" height="109" width="109" alt="" class="media__image">
        <div class="media__text">
          <div class="media__title">Пропустили занятие?</div>
          <div class="media__content">Пройдите пропущенное занятие с другой группой</div>
        </div>
      </div>
      <div class="results__result media">
        <img src="i/result2.png" height="109" width="109" alt="" class="media__image">
        <div class="media__text">
          <div class="media__title">Изменились планы?</div>
          <div class="media__content">Смените группу или верните деньги</div>
        </div>
      </div>
      <div class="results__result media">
        <img src="i/result3.png" height="109" width="109" alt="" class="media__image">
        <div class="media__text">
          <div class="media__title">Остались вопросы?</div>
          <div class="media__content">Пройдите курс повторно бесплатно</div>
        </div>
      </div>
      <div class="results__result media">
        <img src="i/result4.png" height="109" width="109" alt="" class="media__image">
        <div class="media__text">
          <div class="media__title">Не понравилось обучение?</div>
          <div class="media__content">До середины курса Вы можете вернуть все Ваши деньги, но Вы никогда не сможете больше воспользоваться услугами нашей компании.</div>
        </div>
      </div>
    </div>
  </div>

  <div class="who">
    <div class="container">
      <h2 class="who__title title">Для кого курс</h2>
      <div class="who__mark media">
        <img src="i/sp.png" height="43" width="43" alt="" class="media__image">
        <div class="who__text media__text">
          <div class="media__content">Для будущих графических дизайнеров, желающих овладеть искусством обработки фотографий;</div>
        </div>
      </div>
      <div class="who__mark media">
        <img src="i/sp.png" height="43" width="43" alt="" class="media__image">
        <div class="who__text media__text">
          <div class="media__content">Для творческих людей, желающих создавать прекрасные фото-коллажи;</div>
        </div>
      </div>
      <div class="who__mark media">
        <img src="i/sp.png" height="43" width="43" alt="" class="media__image">
        <div class="who__text media__text">
          <div class="media__content">Для работников сферы маркетинга, рекламы и дизайна;</div>
        </div>
      </div>
      <div class="who__mark media">
        <img src="i/sp.png" height="43" width="43" alt="" class="media__image">
        <div class="who__text media__text">
          <div class="media__content">Для тех, кто связан с проектирование интерьера и экстерьера;</div>
        </div>
      </div>
      <div class="who__mark media">
        <img src="i/sp.png" height="43" width="43" alt="" class="media__image">
        <div class="who__text media__text">
          <div class="media__content">Для фотографов, желающих радовать своих клиентов качественно выполненной работой;</div>
        </div>
      </div>
    </div>
  </div>

  <div class="contact-line">
    <div class="container">
      <form action="/" class="form form_inline">
        <div class="form__box">
          <label for="hero-name" class="label">Ваше имя</label>
          <input type="text" id="contact-line1-name" class="text text_line" placeholder="Имя">
        </div>
        <div class="form__box">
          <label for="hero-phone" class="label">Ваш контактный телефон</label>
          <input type="tel" id="contact-line1-phone" class="text text_line" placeholder="E-mail">
        </div>
        <div class="form__box">
          <input type="submit" class="button button_line" value="Отправить заявку">
        </div>
      </form>
    </div>
  </div>

  <div class="stats">
    <div class="container">
      <h2 class="stats__title title">Статистика</h2>
      <div class="stats__stat media">
        <img src="i/stat1.png" height="109" width="109" alt="" class="media__image">
        <div class="media__text">
          <div class="stats__accent media__accent">100</div>
          <div class="media__unit">человек, обученных в группах</div>
        </div>
      </div>
      <div class="stats__stat media">
        <img src="i/stat2.png" height="109" width="109" alt="" class="media__image">
        <div class="media__text">
          <div class="stats__accent media__accent">50</div>
          <div class="media__unit">человек, обученных индивидуально</div>
        </div>
      </div>
      <div class="stats__stat media">
        <img src="i/stat3.png" height="109" width="109" alt="" class="media__image">
        <div class="media__text">
          <div class="stats__accent media__accent">1000</div>
          <div class="media__unit">часов, потраченных на обучение</div>
        </div>
      </div>
      <div class="stats__stat media">
        <img src="i/stat4.png" height="109" width="109" alt="" class="media__image">
        <div class="media__text">
          <div class="stats__accent media__accent">100%</div>
          <div class="media__unit">довольных клиентов</div>
        </div>
      </div>
    </div>
  </div>

  <div class="photo">
    <div class="container">
      <div class="fotorama" data-width="100%" data-nav="thumbs" data-allowfullscreen="true" data-fit="cover" data-loop="true" data-keyboard="true" data-arrows="true" data-click="true" data-swipe="true">
        <a href="i/photo/photo1.jpg" data-caption="Компьютерный класс 2-2 ИПКП ПГУПС"><img src="i/photo/thumb1.jpg" height="64" width="96" alt=""></a>
        <a href="i/photo/photo2.jpg" data-caption="Компьютерный класс 2-2 ИПКП ПГУПС"><img src="i/photo/thumb2.jpg" height="64" width="96" alt=""></a>
        <a href="i/photo/photo3.jpg" data-caption="Курсы Adobe Photoshop. Занятие в компьютерном классе 2-2"><img src="i/photo/thumb3.jpg" height="64" width="96" alt=""></a>
        <a href="i/photo/photo4.jpg" data-caption="Курсы Adobe Photoshop"><img src="i/photo/thumb4.jpg" height="64" width="96" alt=""></a>
        <a href="i/photo/photo5.jpg" data-caption="Институт повышения квалификации"><img src="i/photo/thumb5.jpg" height="64" width="85" alt=""></a>
        <a href="i/photo/photo6.jpg" data-caption="Компьютерный класс 2-2"><img src="i/photo/thumb6.jpg" height="64" width="96" alt=""></a>
      </div>
    </div>
  </div>

  <div class="reviews" id="reviews">
    <div class="container">
      <h2 class="reviews__title title">Отзывы</h2>
      <div class="reviews__tabs tabs" role="tablist">
        <button class="tabs__tab tabs__tab_active" role="tab" data-toggle="tab">Текстовые</button>
        <button class="tabs__tab" role="tab" data-toggle="tab">Фото</button>
        <button class="tabs__tab" role="tab" data-toggle="tab">Аудио</button>
      </div>
      <div class="reviews__tabs-content tabs-content" role="tabpanel">
        <div class="tabs-content__tacontent tabs-content__tacontent_active">
          <div class="reviews__review review thumb">
            <img src="" alt="" class="thumb__image">
            <div class="thumb__content">
              <div class="thumb__title">e.puzikov@mail.ru</div>
              <div class="thumb__text">Приятно учиться у специалистов графического дизайна. Спасибо Наталье за то, что поделилась с нами своим опытом.</div>
            </div>
          </div>
          <div class="reviews__review review thumb">
            <img src="" alt="" class="thumb__image">
            <div class="thumb__content">
              <div class="thumb__title">smoleneee@yandex.ru</div>
              <div class="thumb__text">Замечательный преподаватель Ольга! Фотошоп оказался очень простым. Теперь могу делать всё что угодно!</div>
            </div>
          </div>
          <div class="reviews__review review thumb">
            <img src="" alt="" class="thumb__image">
            <div class="thumb__content">
              <div class="thumb__title">violin77@list.ru</div>
              <div class="thumb__text">Отличные курсы и преподаватели! Успехов Вам и побольше учеников!</div>
            </div>
          </div>
        </div>
        <div class="tabs-content__tacontent" role="tabpanel">
          
        </div>
        <div class="tabs-content__tacontent" role="tabpanel">
          
        </div>
      </div>
    </div>
  </div>

  <div class="price" id="price">
    <div class="container">
      <div class="price__title title">Цены</div>
      <div class="price__list price-list">
        <div class="price-list__item price-item">
          <div class="price-item__cost cost">
            <div class="cost__old">11 000</div>
            <div class="cost__new">8 200</div>
            <div class="cost__currency">р.</div>
          </div>
          <div class="price-item__title">Для физических лиц</div>
          <div class="price-item__text">скидка 30% до 19.01.2015</div>
        </div>
        <div class="price-list__item price-item">
          <div class="price-item__cost cost">
            <div class="cost__old">11 500</div>
            <div class="cost__new">8 600</div>
            <div class="cost__currency">р.</div>
          </div>
          <div class="price-item__title">Для юридических лиц</div>
          <div class="price-item__text">скидка 30% до 19.01.2015</div>
        </div>
      </div>
      <div class="price__calc calc">
        <div class="calc__text">Расчёт цены в <span>пиццах</span></div>
        <div class="calc__value">
          <div class="calc__value-text">20,5</div>
          <img src="i/pizza.png" height="58" width="55" alt="" class="calc__value-image">
        </div>
      </div>
      <div class="price__sale">5% при 100% оплате курса — 10% при записи на курс SEO — 15% при записи на курс SEO и контекстной рекламы</div>
    </div>
  </div>

  <div class="shelude" id="shelude">
    <div class="container">
      <div class="shelude__title title">Расписание</div>
      <div class="calendar">
        <div class="calendar__th_header">Февраль 2015</div>
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
          <div class="calendar__tr">
            <div class="calendar__td calendar__td_inactive">26</div>
            <div class="calendar__td calendar__td_inactive">27</div>
            <div class="calendar__td calendar__td_inactive">28</div>
            <div class="calendar__td calendar__td_inactive"><span class="calendar__now">29</span></div>
            <div class="calendar__td calendar__td_inactive">30</div>
            <div class="calendar__td calendar__td_inactive">31</div>
            <div class="calendar__td calendar__td_inactive">1 февр.</div>
          </div>
          <div class="calendar__tr">
            <div class="calendar__td">2</div>
            <div class="calendar__td">3</div>
            <div class="calendar__td">4</div>
            <div class="calendar__td">5</div>
            <div class="calendar__td">6</div>
            <div class="calendar__td calendar__td_inactive">7</div>
            <div class="calendar__td calendar__td_inactive">8</div>
          </div>
          <div class="calendar__tr">
            <div class="calendar__td">9</div>
            <div class="calendar__td">10</div>
            <div class="calendar__td">11<div class="calendar__line calendar__line_disabled">Начало 1 группы</div></div>
            <div class="calendar__td">12</div>
            <div class="calendar__td">13</div>
            <div class="calendar__td calendar__td_inactive">14</div>
            <div class="calendar__td calendar__td_inactive">15</div>
          </div>
          <div class="calendar__tr">
            <div class="calendar__td">16</div>
            <div class="calendar__td">17</div>
            <div class="calendar__td">18</div>
            <div class="calendar__td">19</div>
            <div class="calendar__td">20</div>
            <div class="calendar__td calendar__td_inactive">21</div>
            <div class="calendar__td calendar__td_inactive">22</div>
          </div>
          <div class="calendar__tr">
            <div class="calendar__td">23</div>
            <div class="calendar__td">24</div>
            <div class="calendar__td">25</div>
            <div class="calendar__td">26<div class="calendar__line">Начало 2 группы</div></div>
            <div class="calendar__td">27</div>
            <div class="calendar__td calendar__td_inactive">28</div>
            <div class="calendar__td calendar__td_inactive">1 марта</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="program">
    <div class="container">
      <h2 class="program__title title">Программа курса</h2>
      <div class="program__annotation">8 занятий (32 ак. часа)</div>
      <div class="program__marks">
        <div class="program__mark media">
          <img src="" alt="" class="media__image">
          <div class="media__text">
            <div class="media__title">Введение</div>
            <div class="media__text">
              <ul>
                <li>Понятие растровой графики</li>
                <li>Преимущества и особенности работы в программе</li>
                <li>Форматы файлов растровой графики</li>
                <li>Задачи, решаемые при помощи Adobe Photoshop</li>
                <li>Общее знакомство с программой</li>
                <li>Интерфейс программы</li>
                <li>Виды и назначения рабочей среды</li>
                <li>Рабочая область, палитры, меню и инструменты</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="program__mark media">
          <img src="" alt="" class="media__image">
          <div class="media__text">
            <div class="media__title">ВЫДЕЛЕНИЕ ОБЛАСТЕЙ</div>
            <div class="media__text">
              <ul>
                <li>Понятие растровой графики</li>
                <li>Преимущества и особенности работы в программе</li>
                <li>Форматы файлов растровой графики</li>
                <li>Задачи, решаемые при помощи Adobe Photoshop</li>
                <li>Общее знакомство с программой</li>
                <li>Интерфейс программы</li>
                <li>Виды и назначения рабочей среды</li>
                <li>Рабочая область, палитры, меню и инструменты</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="program__mark media">
          <img src="" alt="" class="media__image">
          <div class="media__text">
            <div class="media__title">ИНСТРУМЕНТЫ РИСОВАНИЯ</div>
            <div class="media__text">
              <ul>
                <li>Понятие растровой графики</li>
                <li>Преимущества и особенности работы в программе</li>
                <li>Форматы файлов растровой графики</li>
                <li>Задачи, решаемые при помощи Adobe Photoshop</li>
                <li>Общее знакомство с программой</li>
                <li>Интерфейс программы</li>
                <li>Виды и назначения рабочей среды</li>
                <li>Рабочая область, палитры, меню и инструменты</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="program__mark media">
          <img src="" alt="" class="media__image">
          <div class="media__text">
            <div class="media__title">СЛОИ</div>
            <div class="media__text">
              <ul>
                <li>Понятие растровой графики</li>
                <li>Преимущества и особенности работы в программе</li>
                <li>Форматы файлов растровой графики</li>
                <li>Задачи, решаемые при помощи Adobe Photoshop</li>
                <li>Общее знакомство с программой</li>
                <li>Интерфейс программы</li>
                <li>Виды и назначения рабочей среды</li>
                <li>Рабочая область, палитры, меню и инструменты</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="load-more">
        <button class="button load-more__button">Посмотреть ещё</button>
      </div>

      <div class="program__marks_hidden">
        <div class="program__mark media">
          <img src="" alt="" class="media__image">
          <div class="media__text">
            <div class="media__title">Введение</div>
            <div class="media__text">
              <ul>
                <li>Понятие растровой графики</li>
                <li>Преимущества и особенности работы в программе</li>
                <li>Форматы файлов растровой графики</li>
                <li>Задачи, решаемые при помощи Adobe Photoshop</li>
                <li>Общее знакомство с программой</li>
                <li>Интерфейс программы</li>
                <li>Виды и назначения рабочей среды</li>
                <li>Рабочая область, палитры, меню и инструменты</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="program__mark media">
          <img src="" alt="" class="media__image">
          <div class="media__text">
            <div class="media__title">Введение</div>
            <div class="media__text">
              <ul>
                <li>Понятие растровой графики</li>
                <li>Преимущества и особенности работы в программе</li>
                <li>Форматы файлов растровой графики</li>
                <li>Задачи, решаемые при помощи Adobe Photoshop</li>
                <li>Общее знакомство с программой</li>
                <li>Интерфейс программы</li>
                <li>Виды и назначения рабочей среды</li>
                <li>Рабочая область, палитры, меню и инструменты</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="program__mark media">
          <img src="" alt="" class="media__image">
          <div class="media__text">
            <div class="media__title">Введение</div>
            <div class="media__text">
              <ul>
                <li>Понятие растровой графики</li>
                <li>Преимущества и особенности работы в программе</li>
                <li>Форматы файлов растровой графики</li>
                <li>Задачи, решаемые при помощи Adobe Photoshop</li>
                <li>Общее знакомство с программой</li>
                <li>Интерфейс программы</li>
                <li>Виды и назначения рабочей среды</li>
                <li>Рабочая область, палитры, меню и инструменты</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="program__mark media">
          <img src="" alt="" class="media__image">
          <div class="media__text">
            <div class="media__title">Введение</div>
            <div class="media__text">
              <ul>
                <li>Понятие растровой графики</li>
                <li>Преимущества и особенности работы в программе</li>
                <li>Форматы файлов растровой графики</li>
                <li>Задачи, решаемые при помощи Adobe Photoshop</li>
                <li>Общее знакомство с программой</li>
                <li>Интерфейс программы</li>
                <li>Виды и назначения рабочей среды</li>
                <li>Рабочая область, палитры, меню и инструменты</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="map">
    <div id="ymap2" style="height: 500px; width: 100%;"></div>
    <script>(function(A,o,f,s,B,c){if(!A.response){return}var m=window.location.protocol==="file:"?"http:":"",a=m+c+"2.0/",j={MAP:"yandex#map",SATELLITE:"yandex#satellite",HYBRID:"yandex#hybrid",PMAP:"yandex#publicMap"},r=A.response.map,t=["package.map","package.controls","package.geoObjects"],u=o[0]?o[0]+"px":"100%",p=o[1]?o[1]+"px":"100%",y=String(Number(new Date))+String(Math.round(Math.random()*1000000)),l="ymaps"+y,b="fid"+y,C=r.lang||"ru-RU",d=a+"?lang="+C+"&coordorder=longlat&load="+t.join(",")+"&wizard=constructor&onload="+b+"&ns="+B,e=document.getElementsByTagName("script"),z,h=f.match(/\/\/(.+)$/),q=h&&h[1],n,k;if(q){for(var x=e.length-1;x>-1;x--){z=e[x];if(z.src.indexOf(q)!==-1&&!z.ctorInited){z.ctorInited=true;break}}if(z){w(function(){if(s){k=document.getElementById(s)}n=g();if(k){k.appendChild(n)}else{z.parentNode.insertBefore(n,z)}v(n);if(z.parentNode){z.parentNode.removeChild(z)}})}}function g(){var i=document.createElement("ymaps");i.setAttribute("id",l);i.style.display="block";i.style.width=u;i.style.height=p;return i}function v(G){var F=window[B],E=new F.Map(G,{center:r.center,zoom:r.zoom,type:j[r.type]},{autoFitToViewport:"always",geoObjectStrokeOpacity:1,geoObjectFillOpacity:1,geoObjectStrokeColor:"ff0000e6",geoObjectStrokeWidth:5,geoObjectFillColor:"ff000099",geoObjectIconContentLayout:F.templateLayoutFactory.createClass("$[properties.number]"),geoObjectBalloonContentBodyLayout:F.templateLayoutFactory.createClass("$[properties.name]")}),M=r.geoObjects,Q=r.styles,P=["yandex#map","yandex#satellite","yandex#hybrid"];if(r.lang==="ru-RU"||r.lang==="uk-UA"){P.push("yandex#publicMap")}for(var H in Q){if(Q.hasOwnProperty(H)){F.option.presetStorage.add("ctor#"+H,Q[H])}}var N="zoomControl";var L="smallZoomControl";var K=E.container.getSize()[1]<270?L:N;E.controls.add(K).add("mapTools").add(new F.control.TypeSelector(P));E.events.add("sizechange",function(R){var i=R.get("newSize")[1];if(K===L&&i>=270){E.controls.remove(K).add(K=N)}if(K===N&&i<270){E.controls.remove(K).add(K=L)}});for(var J=0,O=M.length;J<O;J++){var I=M[J],D=I.style;E.geoObjects.add(new F.GeoObject({geometry:I.geometry,properties:{name:I.name,number:I.number}},{preset:D.indexOf("#")===0?"ctor"+D:D}))}}function w(F){var E=window[B];if(E){E.load(t,F)}else{window[b]=function(){setTimeout(F,0);window[b]=null};var D=document.getElementsByTagName("head")[0],i=document.createElement("script");i.charset="utf-8";i.src=d;D.insertBefore(i,D.firstChild)}}}({"response":{"map":{"type":"MAP","styles":"","boundedBy":[[30.322983,59.95603],[30.322983,59.95603]],"center":[30.322983,59.95603],"size":[600,450],"zoom":17,"lang":"ru-RU","sid":"1Zuvtb6zrNds2jbG5VywmyBZ1ngs9Cck","created":"1414519810","updated":"1414519810","geoObjects":[{"geometry":{"type":"Point","coordinates":[30.322983,59.95603]},"name":"ПГУП, Кронверкский проспект, 9, Санкт-Петербург, Россия","style":"twirl#lightblueDotIcon","number":""}],"name":"Без названия","description":""}}},[null,null],'http://api-maps.yandex.ru/services/constructor/1.0/js/?sid=0IZWmyhvne2FjD2rdZKPJAWckxxm-4SR&id=ymap','ymap2','ymaps_ctor','//api-maps.yandex.ru/'));
    </script>
  </div>

  <div class="footer" id="join">
    <div class="container">
      <form action="/" class="form form_vertical">
        <label for="footer-name" class="label">Ваше имя</label>
        <input type="text" id="footer-name" class="text text_block" placeholder="Имя">
        <label for="footer-phone" class="label">Ваш контактный телефон</label>
        <input type="tel" id="footer-phone" class="text text_block" placeholder="+7">
        <label for="footer-text" class="label">Ваще сообщение</label>
        <textarea id="footer-text" class="textarea" cols="30" rows="10" placeholder="Воу"></textarea>
        <input type="submit" class="button button_block" value="Записаться на курс">
      </form>
      <div class="after">
        <div class="after__title">После прохождения курса "Adobe Photoshop" вас могут заинтересовать</div>
        
        <div class="after__similars">
          <div class="after__similar similar">
            <div class="similar__content">
              <img src="i/design.png" height="58" width="62" alt="" class="similar__image">
              <div class="similar__head head">
                <div class="head__one">Дизайн</div>
                <div class="head__two">сайтов</div>
              </div>
              <div class="similar__links">
                <a href="" class="similar__link">Курсы Adobe Illustrator</a>
                <a href="" class="similar__link">Курсы CorelDraw</a>
                <a href="" class="similar__link">Курсы графического дизайна</a>
                <a href="" class="similar__link">Курсы создания дизайна сайта</a>
              </div>
            </div>
            <div class="similar__content">
              <img src="i/make.png" height="50" width="62" alt="" class="similar__image">
              <div class="similar__head head">
                <div class="head__one">Вёрстка</div>
                <div class="head__two">сайтов</div>
              </div>
              <div class="similar__links">
                <a href="" class="similar__link">Вёрстка сайтов</a>
                <a href="" class="similar__link">Вёрстка Landing page</a>
                <a href="" class="similar__link">Отзывчивая вёрстка</a>
                <a href="" class="similar__link">Вёрстка под Wordpress</a>
              </div>
            </div>
            <div class="similar__content">
              <img src="i/seo.png" height="50" width="63" alt="" class="similar__image">
              <div class="similar__head head">
                <div class="head__one">Продвижение</div>
                <div class="head__two">сайтов</div>
              </div>
              <div class="similar__links">
                <a href="" class="similar__link">Первичная оптимизация</a>
                <a href="" class="similar__link">Продвижение по позициям</a>
                <a href="" class="similar__link">Продвижение по траффику</a>
                <a href="" class="similar__link">Комплексное продвижение</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  


<script src="//code.jquery.com/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.2/fotorama.js"></script>
<script src="./js/main.js"></script>
</body>
</html>