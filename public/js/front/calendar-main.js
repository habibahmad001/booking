$(function(){

  var basepath = $("#basepath").val();

  $.get( basepath + 'geteventslist', function(data){

    var even = [];

    if(typeof data.events != 'undefined'){
      events = data.events;
      lagarr = data.eventslag;
      ledarearr = data.eventsledare;
      userarr = data.eventsuser;

      for(var i=0; i<events.length; i++) {

        var singleevent = {};
        var notetxt = "";

        notetxt = lagarr[events[i].lag] + ": " + userarr[events[i].UserId] + "\n" + "Ledare: " + ledarearr[events[i].ledare];

        singleevent = {
          uid		: events[i].EventId,
          begins	: events[i].eventStartdate+' '+events[i].eventStarttime,
          ends	: events[i].eventStartdate+' '+events[i].eventEndtime,
          color	: events[i].eventColor,
          resource: events[i].eventResource,
          title	: events[i].note,
          notes	: notetxt
        };
        even.push(singleevent);
      }
    }
    console.log(even);

    $('#calendar').cal({

      // resources : {
      //   '15' : 'Location 1',
      //   '16' : 'Location 2',
      //   '17' : 'Location 3',
      //   '90' : 'Location 4'
      // },

      resources   :false,

      allowresize		: true,
      allowmove		: true,
      allowselect		: true,
      allowremove		: true,
      allownotesedit	: true,

      eventselect : function( uid ){
        console.log( 'Selected event: '+uid );
      },

      eventremove : function( uid ){
        console.log( 'Removed event: '+uid );
      },


      eventnotesedit : function( uid ){
        console.log( 'Edited Notes for event: '+uid );
      },

      // Load events as .ics
      events : //'http://staff.digitalfusion.co.nz.local/time/calendar/leave/'
      even
    });
  });

});


function callcal() {

  var basepath = $("#basepath").val();

  var ids = [];

  $("input[name='filterName']").each(function(){
    if($(this).prop("checked")) {
      ids.push($(this).val());
    }
  });

  // console.log(ids);

  $.get( basepath + 'geteventonid/' + ids.toString(), function(data){
    // console.log(data);
    var idnum = Math.floor(Math.random() * 1000);
    $("#calcont").append('<div id="calendar'+idnum+'" class="evecalendar"></div>');

    var even = [];

    if(typeof data.events != 'undefined'){
      events = data.events;
      lagarr = data.eventslag;
      ledarearr = data.eventsledare;
      userarr = data.eventsuser;

      for(var i=0; i<events.length; i++) {

        var singleevent = {};
        var notetxt = "";

        notetxt = lagarr[events[i].lag] + ": " + userarr[events[i].UserId] + "\n" + "Ledare: " + ledarearr[events[i].ledare];

        singleevent = {
          uid		: events[i].EventId,
          begins	: events[i].eventStartdate+' '+events[i].eventStarttime,
          ends	: events[i].eventStartdate+' '+events[i].eventEndtime,
          color	: events[i].eventColor,
          resource: events[i].eventResource,
          title	: events[i].note,
          notes	: notetxt
        };
        even.push(singleevent);
      }
    }
    console.log(even);

    $('#calendar'+idnum).cal({

      // resources : {
      //   '15' : 'Location 1',
      //   '16' : 'Location 2',
      //   '17' : 'Location 3',
      //   '90' : 'Location 4'
      // },

      resources   :false,

      allowresize		: true,
      allowmove		: true,
      allowselect		: true,
      allowremove		: true,
      allownotesedit	: true,

      eventselect : function( uid ){
        console.log( 'Selected event: '+uid );
      },

      eventremove : function( uid ){
        console.log( 'Removed event: '+uid );
      },


      eventnotesedit : function( uid ){
        console.log( 'Edited Notes for event: '+uid );
      },

      // Load events as .ics
      events : //'http://staff.digitalfusion.co.nz.local/time/calendar/leave/'
      even
    });
  });
}

$(document).ready(function() {
  $('#calendar-demo').dcalendar();
});