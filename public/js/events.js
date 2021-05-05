
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

  $.get('/instructor/getevents/' + events_id, function(data){

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
      // $("#edit-events_eventEnddate").val(events.eventEnddate);

      $("#edit-events_eventResource option").each(function() {
        if($(this).val() == events.eventResource) {
          $(this).attr("selected","selected");
        }
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

      $("#edit-events_time_h option").each(function() {
        if($(this).val() == stime[0]) {
          $(this).attr("selected","selected");
        }
      });

      $("#edit-events_time_m option").each(function() {
        if($(this).val() == stime[1]) {
          $(this).attr("selected","selected");
        }
      });

      $("#edit-events_time_sec option").each(function() {
        if($(this).val() == stime[2]) {
          $(this).attr("selected","selected");
        }
      });

      $("#edit-events_time_eh option").each(function() {
        if($(this).val() == etime[0]) {
          $(this).attr("selected","selected");
        }
      });

      $("#edit-events_time_em option").each(function() {
        if($(this).val() == etime[1]) {
          $(this).attr("selected","selected");
        }
      });

      $("#edit-events_time_esec option").each(function() {
        if($(this).val() == etime[2]) {
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
  $("#events_time_h").val('');
  $("#events_time_m").val('');
  $("#events_time_sec").val('');
  $("#events_time_eh").val('');
  $("#events_time_em").val('');
  $("#events_time_esec").val('');
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
  var events_time_h = $("#"+ type +"events_time_h").val();
  var events_time_m = $("#"+ type +"events_time_m").val();
  var events_time_sec = $("#"+ type +"events_time_sec").val();
  var events_time_eh = $("#"+ type +"events_time_eh").val();
  var events_time_em = $("#"+ type +"events_time_em").val();
  var events_time_esec = $("#"+ type +"events_time_esec").val();


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

  if(events_time_h == '') {
    errors.push("#"+ type +"events_time_h");
  }

  if(events_time_m == '') {
    errors.push("#"+ type +"events_time_m");
  }

  if(events_time_sec == '') {
    errors.push("#"+ type +"events_time_sec");
  }

  if(events_time_eh == '') {
    errors.push("#"+ type +"events_time_eh");
  }

  if(events_time_em == '') {
    errors.push("#"+ type +"events_time_em");
  }

  if(events_time_esec == '') {
    errors.push("#"+ type +"events_time_esec");
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
  $( "#events_eventStartdate, #edit-events_eventStartdate" ).datepicker({
    showOn: "button",
    buttonImage: "../images/calendar.gif",
    buttonImageOnly: true,
    buttonText: "Select date",
    dateFormat: "yy-mm-dd"
  });
});