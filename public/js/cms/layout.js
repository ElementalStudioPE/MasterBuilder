(function($){
  var initLayout = function() {
  	
    var fechaActual = new Date();
    var id = "";

    $('input[type=text].inputDate').click(function(){
      id= $(this).attr('id');
    });
    
    $('.inputDate').each(function(){
      $(this).DatePicker({
        format:'Y-m-d',
        date: fechaActual,
        //current: fechaActual,
        starts: 1,
        position: 'right',
        onBeforeShow: function(){
          $('#'+id).DatePickerSetDate(fechaActual, true);
        },
        onChange: function(formated, dates){
          $('#'+id).val(formated);
        }
      });
    });

    var state = false;
    $('#widgetField>a').bind('click', function(){
    	$('#widgetCalendar').stop().animate({height: state ? 0 : $('#widgetCalendar div.datepicker').get(0).offsetHeight}, 500);
    	state = !state;
    	return false;
    });
    $('#widgetCalendar div.datepicker').css('position', 'absolute');
  };

  var alltabs = $('div.tab');
  var tabs = $('#tabs');
  alltabs.eq(0).show();
  tabs.find('li:first').addClass('on');
  
  $('#tabs a').click(function(){
    alltabs.hide()
    tabs.find('li').removeClass('on')
    $(this).parent().toggleClass('on')
    var tabref = $(this).attr('rel')
    $(tabref).fadeIn(500)
    this.blur()
    return false;
  });

  EYE.register(initLayout, 'init');
})(jQuery)
