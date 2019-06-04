/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(function() {

  $('#calendar').fullCalendar({
    defaultView: 'month',
    columnHeader: true,
    defaultDate: '2019-01-12',
        locale: 'es',
        header:
        {
            left: 'month,agendaWeek,agendaDay,listMonth',
            center: 'prevYear title nextYear',
            right: 'Actualizar,prev,next today'
        },
    customButtons: {
       Actualizar: {
         text: 'Actualizar',
         click: function(){
           
           var v = $('#calendar').fullCalendar('getDate');
            alert(v.format('DD-MM-YYYY'));
    }
       }
    },  
            buttonText: {
            today: 'Hoy',
            month: 'Mes',
            week: 'Semana',
            day: 'Día',
            list: 'Lista'
        },
    titleFormat: 'DD MMMM YYYY',
      defaultDate: new Date(),
      navLinks: true, 
      editable: true,
      eventLimit: true, 
    defaultRangeSeparator: ' - ',
    //eventRender: function(eventObj, $el) {
    //  $el.popover({
    //    title: eventObj.title,
    //    content: eventObj.nota,
    //    trigger: 'hover',
        // placement: 'top'
    //    container: 'body'
    //  });
    //},
    themeSystem: 'jquery-ui', 
    selectable: true,
    //selectHelper:true,
    handleWindowResize: true,
    dayClick: function (fecha, jsEvent, view) {
      alert(fecha.format('DD-MM-YYYY'));
      $('#calendar').fullCallendar('gotoDate',fecha);
    },
    events: [
      {
        title: 'BLOQUE:1',
        description: 'CUPOS[2/4]',
        start: '2019-01-01',
		nota: 'libre'
      },
      {
        title: 'BLOQUE:2',
        description: 'CUPOS[2/4]',
        start: '2019-01-07',
        end: '2019-01-10',
		nota: 'libre'
      },
      {
        id: 999,
        title: 'BLOQUE:3',
        description: 'CUPOS[2/4]',
        start: '2019-01-09T16:00:00',
		nota: 'libre'
      },
      {
        id: 998,
        title: 'BLOQUE:4',
        description: 'CUPOS[2/4]',
        start: '2019-01-16T16:00:00',
		nota: 'libre'
      },
      {
        title: 'BLOQUE:5',
        description: 'CUPOS[2/4]',
        start: '2019-01-11',
        end: '2019-01-13',
		nota: 'libre'
      },
      {
        title: 'BLOQUE:6',
        description: 'CUPOS[2/4]',
        start: '2019-01-12T10:30:00',
        end: '2019-01-12T12:30:00',
		nota: 'libre'
      },
      {
        title: 'BLOQUE:7',
        description: 'CUPOS[2/4]',
        start: '2019-01-12T12:00:00',
		nota: 'libre'
      },
      {
        title: 'BLOQUE:8',
        description: 'CUPOS[2/4]',
        start: '2019-01-12T14:30:00',
		nota: 'libre'
      },
      {
        title: 'BLOQUE:8',
        description: 'CUPOS[2/4]',
        start: '2019-01-13T07:00:00',
		nota: 'libre'
      },
      {
        title: 'BLOQUE:9',
        description: 'CUPOS[2/4]',
        url: 'http://google.com/',
        start: '2019-01-28',
		nota: 'libre'
      }
    ]
  });

});
