$(function () {    

    // Выделение цветом нужного пункта меню
    var colorClicked = 'rgb(255, 193, 7)'; //оранжевый #FFC107
    var colorDefault = 'rgb(255, 255, 153)'  // бледно-желтый #FFFF99
    var colorHover = 'yellow'; 
    var linkDesk = ".header ul li a";
    var linkMob = '#header-mob li a';

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
    $(linkDesk + ',' + linkMob).click(function(event) {           
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
    $(".phone-field").mask("(+380) 99-999-99-99");
    $(".phone-field-mob").mask("(+380) 99 999 99 99", {placeholder: " " });
 
    

    // Модальное окно bootstrap
    $('#btn-fit').click(function() { 
        $('#modal-fit').modal('show'); 
    });
    $('#btn-fit-mob').click(function() { 
        $('#modal-fit-mob').modal('show'); 
    });
    

    //Прижать футер к низу
    if ($(document).height() <= $(window).height()) {
      $(".footer").addClass("fixed-bottom");
    }


});