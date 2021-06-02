
$(".add-button").click(function () {
  reset_form();
  showFormOverlay();

  $(".add-new-data").animate({
    width: "650px"
  }, {
    duration: 500,

  });
});



$(".edit-icon").click(function () {
  showFormOverlay();
  var events_id = $(this).attr('data-id');
  $(".edit-current-data").animate({
    width: "650px"
  }, {
    duration: 500,
  });

  var basepath = $("#basepath").val();

  $.get( basepath + 'instructor/getevents/' + events_id, function(data){

    $(".loading-container").fadeOut();
    $(".form-content-box").fadeIn();

    var store;

    if(typeof data.events != 'undefined'){
      events = data.events;

      /****** time cals ********/
      var stime = events.eventStarttime.split(":");
      var etime = events.eventEndtime.split(":");
      /****** time cals ********/

      $("#edit-events_note").val(events.note);
      $("#edit-events_eventStartdate").val(events.eventStartdate);
      $("#edit-event_stime").val(events.eventStarttime);
      $("#edit-event_etime").val(events.eventEndtime);

      $("#edit-events_eventResource option").each(function() {
        if($(this).val() == events.eventResource) {
          $(this).attr("selected","selected");
        }
      });

      jQuery("#edit-colorpicker").spectrum({
        showPalette: true,
        showSelectionPalette: true,
        togglePaletteMoreText: 'more',
        togglePaletteLessText: 'less',
        color: events.eventColor,
        palette: [
          ["#000","#444","#666","#999","#ccc","#eee","#f3f3f3","#fff"],
          ["#f00","#f90","#ff0","#0f0","#0ff","#00f","#90f","#f0f"],
          ["#f4cccc","#fce5cd","#fff2cc","#d9ead3","#d0e0e3","#cfe2f3","#d9d2e9","#ead1dc"],
          ["#ea9999","#f9cb9c","#ffe599","#b6d7a8","#a2c4c9","#9fc5e8","#b4a7d6","#d5a6bd"],
          ["#e06666","#f6b26b","#ffd966","#93c47d","#76a5af","#6fa8dc","#8e7cc3","#c27ba0"],
          ["#c00","#e69138","#f1c232","#6aa84f","#45818e","#3d85c6","#674ea7","#a64d79"],
          ["#900","#b45f06","#bf9000","#38761d","#134f5c","#0b5394","#351c75","#741b47"],
          ["#600","#783f04","#7f6000","#274e13","#0c343d","#073763","#20124d","#4c1130"]
        ]
      });

      $("#edit-events_lag option").each(function() {
        if($(this).val() == events.lag) {
          $(this).attr("selected","selected");
        }
      });

      $("#edit-events_ledare option").each(function() {
        if($(this).val() == events.ledare) {
          $(this).attr("selected","selected");
        }
      });

      $("#events_id").val(events_id);

      $(".save-changes").removeClass('disable').removeAttr('disabled');
    }
  });
});

function reset_form() {
  $(".error").each(function(){
    $(this).removeClass('error');
  });
  $("#events_note").val('');
  $("#events_eventStartdate").val('');
  // $("#events_eventEnddate").val('');
  $("#events_eventResource").val('');
  $("#events_lag").val('');
  $("#events_ledare").val('');
  $("#event_stime").val('');
  $("#event_etime").val('');


  jQuery("#colorpicker").spectrum({
    preferredFormat: "hex3",
    showInput: true,
    showPalette: true,
    showSelectionPalette: true,
    togglePaletteMoreText: 'more',
    togglePaletteLessText: 'less',
    color: '#f00',
    palette: [
      ["#000","#444","#666","#999","#ccc","#eee","#f3f3f3","#fff"],
      ["#f00","#f90","#ff0","#0f0","#0ff","#00f","#90f","#f0f"],
      ["#f4cccc","#fce5cd","#fff2cc","#d9ead3","#d0e0e3","#cfe2f3","#d9d2e9","#ead1dc"],
      ["#ea9999","#f9cb9c","#ffe599","#b6d7a8","#a2c4c9","#9fc5e8","#b4a7d6","#d5a6bd"],
      ["#e06666","#f6b26b","#ffd966","#93c47d","#76a5af","#6fa8dc","#8e7cc3","#c27ba0"],
      ["#c00","#e69138","#f1c232","#6aa84f","#45818e","#3d85c6","#674ea7","#a64d79"],
      ["#900","#b45f06","#bf9000","#38761d","#134f5c","#0b5394","#351c75","#741b47"],
      ["#600","#783f04","#7f6000","#274e13","#0c343d","#073763","#20124d","#4c1130"]
    ]
  });
}

function validateEmailExist(type) {
  var email = $("#"+type+"email").val();
  var email_rgx = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  if(email_rgx.test(email)) {
    var user_id = $("#user_id").val();
    $.get('/email-exist?id=' + user_id +'&email=' + email, function(data){
      if(data.exist) {
        $("#"+type+"email_exist").val('1');
        $("#"+type+"email-exist").css('color','#ff0000');
        $("#"+type+"email-exist").html('E-mail already exists.');
      } else {
        $("#"+type+"email-exist").html('');
        $("#"+type+"email_exist").val('');
      }
    })

  }
}

function validate(type) {
  $(".error").each(function(){
    $(this).removeClass('error');
  });
  var errors = [];

  var events_note = $("#"+ type +"events_note").val();
  var events_eventStartdate = $("#"+ type +"events_eventStartdate").val();
  var events_eventEnddate = $("#"+ type +"events_eventEnddate").val();
  var events_eventResource = $("#"+ type +"events_eventResource").val();
  var events_lag = $("#"+ type +"events_lag").val();
  var events_ledare = $("#"+ type +"events_ledare").val();
  var event_stime = $("#"+ type +"event_stime").val();
  var event_etime = $("#"+ type +"event_etime").val();


  if(events_note == '') {
    errors.push("#"+ type +"events_note");
  }

  if(events_eventStartdate == '') {
    errors.push("#"+ type +"events_eventStartdate");
  }

  // if(events_eventEnddate == '') {
  //   errors.push("#"+ type +"events_eventEnddate");
  // }


  if(events_eventResource == '') {
    errors.push("#"+ type +"events_eventResource");
  }

  if(events_lag == '') {
    errors.push("#"+ type +"events_lag");
  }

  if(events_ledare == '') {
    errors.push("#"+ type +"events_ledare");
  }

  if(event_stime == '') {
    errors.push("#"+ type +"event_stime");
  }

  if(event_etime == '') {
    errors.push("#"+ type +"event_etime");
  }

  if(errors.length>0){
    for(i=0; i < errors.length; i++){
      $(errors[i]).addClass('error');
    }
    return false;
  }

  return true;
}

$( function() {
  // $( "#events_eventStartdate, #edit-events_eventStartdate" ).datepicker({
  //   showOn: "button",
  //   buttonImage: "../images/calendar.gif",
  //   buttonImageOnly: true,
  //   buttonText: "Select date",
  //   dateFormat: "yy-mm-dd"
  // });

  jQuery('#event_stime, #edit-event_stime').Zebra_DatePicker({
    format: 'H:i:s'
  });

  jQuery('#event_etime, #edit-event_etime').Zebra_DatePicker({
    format: 'H:i:s'
  });

  jQuery('#events_eventStartdate, #edit-events_eventStartdate').Zebra_DatePicker({
    format: 'Y-m-d',
    show_week_number: 'Wk'
  });

  jQuery("#colorpicker").spectrum({
    preferredFormat: "hex3",
    showInput: true,
    showPalette: true,
    showSelectionPalette: true,
    togglePaletteMoreText: 'more',
    togglePaletteLessText: 'less',
    color: '#f00',
    palette: [
      ["#000","#444","#666","#999","#ccc","#eee","#f3f3f3","#fff"],
      ["#f00","#f90","#ff0","#0f0","#0ff","#00f","#90f","#f0f"],
      ["#f4cccc","#fce5cd","#fff2cc","#d9ead3","#d0e0e3","#cfe2f3","#d9d2e9","#ead1dc"],
      ["#ea9999","#f9cb9c","#ffe599","#b6d7a8","#a2c4c9","#9fc5e8","#b4a7d6","#d5a6bd"],
      ["#e06666","#f6b26b","#ffd966","#93c47d","#76a5af","#6fa8dc","#8e7cc3","#c27ba0"],
      ["#c00","#e69138","#f1c232","#6aa84f","#45818e","#3d85c6","#674ea7","#a64d79"],
      ["#900","#b45f06","#bf9000","#38761d","#134f5c","#0b5394","#351c75","#741b47"],
      ["#600","#783f04","#7f6000","#274e13","#0c343d","#073763","#20124d","#4c1130"]
    ]
  });
});