
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
  var ledare_id = $(this).attr('data-id');
  $(".edit-current-data").animate({
    width: "650px"
  }, {
    duration: 500,
  });

  var basepath = $("#basepath").val();

  $.get( basepath + 'admin/getledare/' + ledare_id, function(data){

    $(".loading-container").fadeOut();
    $(".form-content-box").fadeIn();

    var store;

    if(typeof data.ledare != 'undefined'){
      ledare = data.ledare;

      $("#edit-ledare_name").val(ledare.name);
      (ledare.Kont_type == "Visa") ? $("#edit-ledare_Kont_type option[value='Visa']").attr("selected", "selected") : $("#edit-ledare_Kont_type option[value='Passport']").attr("selected", "selected");
      (ledare.lagb_type == "Visa") ? $("#edit-ledare_lagb_type option[value='Visa']").attr("selected", "selected") : $("#edit-ledare_lagb_type option[value='Passport']").attr("selected", "selected");
      (ledare.tillg_type == "Visa") ? $("#edit-ledare_tillg_type option[value='Visa']").attr("selected", "selected") : $("#edit-ledare_tillg_type option[value='Passport']").attr("selected", "selected");
      (ledare.register_type == "Registerd") ? $("#edit-ledare_register_type option[value='Registerd']").attr("selected", "selected") : $("#edit-ledare_register_type option[value='Not-registerd']").attr("selected", "selected");

      $("#edit-ledare_kontfile_img").attr("src", basepath + "uploads/ledare/" + ledare.kontfile);
      $("#edit-ledare_lagbdfile_img").attr("src", basepath + "uploads/lagbd/" + ledare.lagbdfile);
      $("#edit-ledare_tillgfile_img").attr("src", basepath + "uploads/tillg/" + ledare.tillgfile);

      (ledare.Kont_type == "Visa") ? $('#edit-ledare_kontfile_div').show(300) : '';
      (ledare.lagb_type == "Visa") ? $('#edit-ledare_lagb_div').show(300) : '';
      (ledare.tillg_type == "Visa") ? $('#edit-ledare_tillg_div').show(300) : '';
      $("#ledare_id").val(ledare_id);

      $(".save-changes").removeClass('disable').removeAttr('disabled');
    }
  });
});

function reset_form() {
  $(".error").each(function(){
    $(this).removeClass('error');
  });
  $("#ledare_name").val('');
  $("#ledare_Kont_type").val('');
  $("#ledare_lagb_type").val('');
  $("#ledare_tillg_type").val('');
  $("#ledare_register_type").val('');
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

  var ledare_name = $("#"+ type +"ledare_name").val();
  var ledare_Kont_type = $("#"+ type +"ledare_Kont_type").val();
  var ledare_lagb_type = $("#"+ type +"ledare_lagb_type").val();
  var ledare_tillg_type = $("#"+ type +"ledare_tillg_type").val();
  var ledare_register_type = $("#"+ type +"ledare_register_type").val();


  if(ledare_name == '') {
    errors.push("#"+ type +"ledare_name");
  }

  if(ledare_Kont_type == '') {
    errors.push("#"+ type +"ledare_Kont_type");
  }

  if(ledare_lagb_type == '') {
    errors.push("#"+ type +"ledare_lagb_type");
  }


  if(ledare_tillg_type == '') {
    errors.push("#"+ type +"ledare_tillg_type");
  }

  if(ledare_register_type == '') {
    errors.push("#"+ type +"ledare_register_type");
  }

  if(errors.length>0){
    for(i=0; i < errors.length; i++){
      $(errors[i]).addClass('error');
    }
    return false;
  }

  return true;
}