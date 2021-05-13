
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
  var lag_id = $(this).attr('data-id');
  $(".edit-current-data").animate({
    width: "650px"
  }, {
    duration: 500,
  });

  var basepath = $("#basepath").val();

  $.get( basepath + 'admin/getlag/' + lag_id, function(data){

    $(".loading-container").fadeOut();
    $(".form-content-box").fadeIn();

    var store;

    if(typeof data.lag != 'undefined'){
      lag = data.lag;

      $("#edit-lag_name").val(lag.name);
      $("#edit-lag_area").val(lag.area);
      $("#edit-lag_legs").val(lag.legs);
      (lag.apply_type == "Visa") ? $("#edit-lag_apply_type option[value='Visa']").attr("selected", "selected") : $("#edit-lag_apply_type option[value='Passport']").attr("selected", "selected");
      (lag.register_type == "Registerd") ? $("#edit-lag_register_type option[value='Registerd']").attr("selected", "selected") : $("#edit-lag_register_type option[value='Not-registerd']").attr("selected", "selected");

      $("#edit-lag_apply_type_img").attr("src", basepath + "uploads/lagvisafile/" + lag.visafile);

      (lag.apply_type == "Visa") ? $('#edit-lag_apply_type_div').show(300) : '';

      $("#lag_id").val(lag_id);

      $(".save-changes").removeClass('disable').removeAttr('disabled');
    }
  });
});

function reset_form() {
  $(".error").each(function(){
    $(this).removeClass('error');
  });
  $("#lag_name").val('');
  $("#lag_area").val('');
  $("#lag_legs").val('');
  $("#edit-lag_apply_type").val('');
  $("#edit-lag_register_type").val('');
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

  var lag_name = $("#"+ type +"lag_name").val();
  var lag_area = $("#"+ type +"lag_area").val();
  var lag_legs = $("#"+ type +"lag_legs").val();
  var lag_apply_type = $("#"+ type +"lag_apply_type").val();
  var lag_register_type = $("#"+ type +"lag_register_type").val();


  if(lag_name == '') {
    errors.push("#"+ type +"lag_name");
  }

  if(lag_area == '') {
    errors.push("#"+ type +"lag_area");
  }

  if(lag_legs == '') {
    errors.push("#"+ type +"lag_legs");
  }

  if(lag_apply_type == '') {
    errors.push("#"+ type +"lag_apply_type");
  }

  if(lag_register_type == '') {
    errors.push("#"+ type +"lag_register_type");
  }

  if(errors.length>0){
    for(i=0; i < errors.length; i++){
      $(errors[i]).addClass('error');
    }
    return false;
  }

  return true;
}