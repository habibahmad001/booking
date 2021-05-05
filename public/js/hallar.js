
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
  var hallar_id = $(this).attr('data-id');
  $(".edit-current-data").animate({
    width: "650px"
  }, {
    duration: 500,
  });

  $.get('/admin/gethallar/' + hallar_id, function(data){

    $(".loading-container").fadeOut();
    $(".form-content-box").fadeIn();

    var store;

    if(typeof data.hallar != 'undefined'){
      hallar = data.hallar;

      $("#edit-hallar_name").val(hallar.name);
      $("#edit-hallar_price").val(hallar.price);
      (hallar.apply_type == "Visa") ? $("#edit-hallar_apply_type option[value='Visa']").attr("selected", "selected") : $("#edit-hallar_apply_type option[value='Passport']").attr("selected", "selected");
      (hallar.register_type == "Registerd") ? $("#edit-hallar_register_type option[value='Registerd']").attr("selected", "selected") : $("#edit-hallar_register_type option[value='Not-registerd']").attr("selected", "selected");

      $("#edit-hallar_apply_type_img").attr("src", "/uploads/visafile/" + hallar.visafile);

      (hallar.apply_type == "Visa") ? $('#edit-hallar_apply_type_div').show(300) : '';

      $("#hallar_id").val(hallar_id);

      $(".save-changes").removeClass('disable').removeAttr('disabled');
    }
  });
});

function reset_form() {
  $(".error").each(function(){
    $(this).removeClass('error');
  });
  $("#hallar_name").val('');
  $("#hallar_price").val('');
  $("#edit-hallar_apply_type").val('');
  $("#edit-hallar_register_type").val('');
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

  var hallar_name = $("#"+ type +"hallar_name").val();
  var hallar_price = $("#"+ type +"hallar_price").val();
  var hallar_apply_type = $("#"+ type +"hallar_apply_type").val();
  var hallar_register_type = $("#"+ type +"hallar_register_type").val();


  if(hallar_name == '') {
    errors.push("#"+ type +"hallar_name");
  }

  if(hallar_price == '') {
    errors.push("#"+ type +"hallar_price");
  }

  if(hallar_apply_type == '') {
    errors.push("#"+ type +"hallar_apply_type");
  }

  if(hallar_register_type == '') {
    errors.push("#"+ type +"hallar_register_type");
  }

  if(errors.length>0){
    for(i=0; i < errors.length; i++){
      $(errors[i]).addClass('error');
    }
    return false;
  }

  return true;
}