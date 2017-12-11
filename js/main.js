$(function () {    

    // Выделение цветом нужного пункта меню
    var colorClicked = 'rgb(255, 193, 7)'; //оранжевый #FFC107
    var colorDefault = 'rgb(255, 255, 153)';  // бледно-желтый #FFFF99
    var colorHover = '#FFFF66'; 
    var linkDesk = ".header ul li a";
    var linkMob = '#header-mob li a';
    var linkFooter = '.footer a';
    var colorFooterDefault = 'rgb(122, 122, 122)';
    var colorFooterHover = '#fff';

    var changeColor = function (event) {
        event.preventDefault();
        for (var i = 0; i < $('.header ul li a').length; i++) {
            if ( $(linkDesk).eq(i).text() !== $(event.target).text() ) {
                $(linkDesk).css('color', colorDefault);                
            } else $(linkDesk).css('color', '#colorClicked'); 
        }
    }

    $(linkDesk).click(changeColor);   


    // Прокручивание до нужного раздела 
    $(linkDesk + ',' + linkMob + ',' + linkFooter).click(function(event) {           
        $(this).css('color', colorClicked);
        var fixed_offset = 55;
        $('html,body').stop().animate({ scrollTop: $(this.hash).offset().top - fixed_offset}, 1,
            function(){
                $('.collapse').collapse('hide');
        });
        event.preventDefault();
    });


    // Подсветка цветом пункта меню при наведении мыши
    $(linkDesk + ',' + linkMob).mouseover(function(event) {
        for (var i = 0; i < $(linkDesk).length; i++) {
            if ( $(linkDesk).eq(i).css('color') !== colorClicked ) { 
                $(event.target).css('color', colorHover);
            } 
        }
    });


    // Изменение цвета пункта меню при убирании мыши 
    $(linkDesk + ',' + linkMob).mouseleave(function(event) {
        if ($(this).css('color') !== colorClicked ) {
            $(this).css('color', colorDefault);
        }      
    });
   

    // Маска ввода номера телефона
    $(".phone-field-desk").mask("(+380) 99-999-99-99");
    $(".phone-field-mob").mask("(+380) 99 999 99 99", { placeholder: " " }); 
    

    // Модальное окно bootstrap
    // Кнопка "Получить консультацию"
    $('#btn-get-consult-desk').click(function() { 
        $('.headers-wrap').hide(); // когда появляется попап, заголовки исчезают
        $('#modal-form-desk').modal('show'); 
    });
    $('#btn-get-consult-mob').click(function() {         
        $('#modal-form-mob').modal('show'); 
    });
    //Кнопка "Узнать больше" - "Эконом"
    $('#btn-econom-desk').click(function() { 
        $('#tariff-field-desk').val('Эконом');
        $('#modal-form-desk').modal('show'); 
    });
    $('#btn-econom-mob').click(function() { 
        $('#tariff-field-mob').val('Эконом');
        $('#modal-form-mob').modal('show'); 
    });
    //Кнопка "Узнать больше" - "Стандарт"
    $('#btn-standard-desk').click(function() { 
        $('#tariff-field-desk').val('Стандарт');
        $('#modal-form-desk').modal('show'); 
    });
    $('#btn-standard-mob').click(function() { 
        $('#tariff-field-mob').val('Стандарт');
        $('#modal-form-mob').modal('show'); 
    });
    //Кнопка "Узнать больше" - "Премиум"
    $('#btn-premium-desk').click(function() { 
        $('#tariff-field-desk').val('Премиум');
        $('#modal-form-desk').modal('show'); 
    });
    $('#btn-premium-mob').click(function() { 
        $('#tariff-field-mob').val('Премиум');
        $('#modal-form-mob').modal('show'); 
    });

    // Кнопка "Обратный звонок"
    $('#btn-callback-desk').click(function() { 
        $(this).css('margin-right', '30px');
        $('.headers-wrap').hide(); // когда появляется попап, заголовки исчезают
        $('#modal-callback-desk').modal('show'); 
    });
    $('#btn-callback-mob').click(function() {
        $('#btn-get-consult-mob').hide(); // когда появляется попап, кнопка "Получить консультацию" исчезает       
        $('#modal-callback-mob').modal('show'); 
    });
    // Кнопка "Обратный звонок" - в футере
    $('#btn-callback-footer-desk').click(function() { 
        $('#modal-callback-desk').modal('show'); 
    });
    $('#btn-callback-footer-mob').click(function() { 
        $('#modal-callback-mob').modal('show'); 
    });
    // Кнопка "Заказать выезд специалиста" - в футере
    $('#btn-get-consult-footer-desk').click(function() { 
        $('#modal-form-desk').modal('show'); 
    });
    $('#btn-get-consult-footer-mob').click(function() { 
        $('#modal-form-mob').modal('show'); 
    });
    // Модальное окно bootstrap


    // Фокус на поле "Телефон"
    // Кнопка "Получить консультацию"
    $('#modal-form-desk').on('shown.bs.modal', function() {
      $('#btn-callback-desk').css('margin-right', '30px');
      $('#phone-field-desk').trigger('focus');
    });
    $('#modal-form-mob').on('shown.bs.modal', function() {
      $('#phone-field-mob').trigger('focus');
    });
    // Кнопка "Обратный звонок"
    $('#modal-callback-desk').on('shown.bs.modal', function() {
      $('#phone-callback-field-desk').trigger('focus');
    });
    $('#modal-callback-mob').on('shown.bs.modal', function() {
      $('#phone-callback-field-mob').trigger('focus');
    });
    // Фокус на поле "Телефон"


    // Когда закрываем модальное окно, заголовки появляются (в версии для десктопа)
    $('#modal-form-desk .close').click(function() { 
        $('#btn-callback-desk').css('margin-right', '14px');
        $('.headers-wrap').show();
    });
    $('#modal-callback-desk .close').click(function() { 
        $('#btn-callback-desk').css('margin-right', '14px');
        $('.headers-wrap').show();
    });
    $('#modal-callback-mob .close').click(function() { 
        $('#btn-get-consult-mob').show();
    });


    //Прижать футер к низу
    if ($(document).height() <= $(window).height()) {
      $(".footer").addClass("fixed-bottom");
    }

    // Сделать фон navbar при прокрутке (десктоп и мобайл)
    // А также цвет ссылок в футере чтобы не менялся
    $(window).scroll(function() {
      if ( $(window).scrollTop() !== 0) {
        $("#navbar").css("backgroundColor", "#000");
      } else $("#navbar").css("backgroundColor", "transparent");    
      $('.footer a').css('color', colorFooterDefault);  
    }); 
    $(window).scroll(function() {
      if ( $(window).scrollTop() !== 0) {
        $("#navbar-mob").css("backgroundColor", "#000");
      }    
    }); 

    // Спрятать заголовки на мобильном при нажатии на меню-гамбургер
    $('.navbar-toggler').click(function() { 
        if ( $('.headers-wrap').css('display') == 'block') {
            $('.headers-wrap').hide();
        } else $('.headers-wrap').show();
    });

    // Подсветка нужным цветом ссылок в футере
    $('.footer a').mouseover(function() {
        $(this).css('color', "#fff");   
    });
    $('.footer a').mouseleave(function() {
        $(this).css('color', colorFooterDefault);   
    }); 


    // Появление "Перейти на сайт" в портфолио и затемнение портфолио
    // № 1
    $('#img-fluid-1.img-fluid').parent().mouseover(function() {
        $('#img-overlay-1.img-overlay').css('display', 'flex');
        $('#img-overlay-1.img-overlay').css('align-items', 'center');
    });
    $('#img-fluid-1.img-fluid').parent().mouseleave(function() {
        $('#img-overlay-1.img-overlay').hide();
    });
    // № 2
    $('#img-fluid-2.img-fluid').parent().mouseover(function() {
        $('#img-overlay-2.img-overlay').css('display', 'flex');
        $('#img-overlay-2.img-overlay').css('align-items', 'center');
    });
    $('#img-fluid-2.img-fluid').parent().mouseleave(function() {
        $('#img-overlay-2.img-overlay').hide();
    });
    // № 3
    $('#img-fluid-3.img-fluid').parent().mouseover(function() {
        $('#img-overlay-3.img-overlay').css('display', 'flex');
        $('#img-overlay-3.img-overlay').css('align-items', 'center');
    });
    $('#img-fluid-3.img-fluid').parent().mouseleave(function() {
        $('#img-overlay-3.img-overlay').hide();
    });
    // № 4
    $('#img-fluid-4.img-fluid').parent().mouseover(function() {
        $('#img-overlay-4.img-overlay').css('display', 'flex');
        $('#img-overlay-4.img-overlay').css('align-items', 'center');
    });
    $('#img-fluid-4.img-fluid').parent().mouseleave(function() {
        $('#img-overlay-4.img-overlay').hide();
    });
    // № 5
    $('#img-fluid-5.img-fluid').parent().mouseover(function() {
        $('#img-overlay-5.img-overlay').css('display', 'flex');
        $('#img-overlay-5.img-overlay').css('align-items', 'center');
    });
    $('#img-fluid-5.img-fluid').parent().mouseleave(function() {
        $('#img-overlay-5.img-overlay').hide();
    });
    // № 6
    $('#img-fluid-6.img-fluid').parent().mouseover(function() {
        $('#img-overlay-6.img-overlay').css('display', 'flex');
        $('#img-overlay-6.img-overlay').css('align-items', 'center');
    });
    $('#img-fluid-6.img-fluid').parent().mouseleave(function() {
        $('#img-overlay-6.img-overlay').hide();
    });
    // № 7
    $('#img-fluid-7.img-fluid').parent().mouseover(function() {
        $('#img-overlay-7.img-overlay').css('display', 'flex');
        $('#img-overlay-7.img-overlay').css('align-items', 'center');
    });
    $('#img-fluid-7.img-fluid').parent().mouseleave(function() {
        $('#img-overlay-7.img-overlay').hide();
    });
    // № 8
    $('#img-fluid-8.img-fluid').parent().mouseover(function() {
        $('#img-overlay-8.img-overlay').css('display', 'flex');
        $('#img-overlay-8.img-overlay').css('align-items', 'center');
    });
    $('#img-fluid-8.img-fluid').parent().mouseleave(function() {
        $('#img-overlay-8.img-overlay').hide();
    });
    // № 9
    $('#img-fluid-9.img-fluid').parent().mouseover(function() {
        $('#img-overlay-9.img-overlay').css('display', 'flex');
        $('#img-overlay-9.img-overlay').css('align-items', 'center');
    });
    $('#img-fluid-9.img-fluid').parent().mouseleave(function() {
        $('#img-overlay-9.img-overlay').hide();
    });

});