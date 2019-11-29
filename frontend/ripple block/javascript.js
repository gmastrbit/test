var ripple = $('.ripple'), // "капля"
  rippleSize = screenProp(), // размер капли
  posLeft = 0,
  posTop = 0;

ripple.outerWidth(rippleSize * 2).outerHeight(rippleSize * 2); // задаем капле размер в 2 раза больше размера экрана, чтобы "покрыть" всю видимую область страницы

$('.gradient').click(function(e) { // клик на градиент
  // $('body').addClass('fixed'); // блокируем прокрутку экрана
  posLeft = e.pageX - rippleSize - $(window).scrollLeft(); // положение капли слева
  posTop = e.pageY - rippleSize - $(window).scrollTop(); // положение капли сверху
  var gradient = $(this).attr('data-gradient-css'); // получаем код градиента
  ripple.addClass('ripple--active').css({ // добавляем класс для увеличения и прописываем стили
    'left': posLeft + 'px',
    'top': posTop + 'px',
    'background-image': gradient
  });
  setTimeout(function() { // после увеличения
    ripple.addClass('ripple--complete'); // добавляем класс, который выровнит каплю точно по краям экрана
  }, 500); // время анимации увеличения
});

ripple.on('click', function() { // при клике на каплю
  if (ripple.hasClass('ripple--complete')) { // если анимация закончилась
    $('body').removeClass('fixed'); // возвращаем странице прокрутку
    ripple.removeClass('ripple--complete ripple--active'); // удаляем классы
  }
});

$(window).on('resize', function() { // при ресайзе окна
  rippleSize = screenProp(); // пересчитываем размер капли
  ripple.outerWidth(rippleSize * 2).outerHeight(rippleSize * 2); // и задаем ей полученные значения
});

// функция для определения максимального значения из высоты и ширины экрана
function screenProp() {
  if ($(window).width() > $(window).height()) {
    return $(window).width();
  } else {
    return $(window).height();
  }
}