<!-- Add form -->
<div class="add-new-form add-new-data">
  <div class="form-header">
    <h3>Create New Lag</h3>
    <div class="close-icon"></div>
  </div>
  <form method="POST" action="{{ URL::to("/admin/lag_add") }}" enctype="multipart/form-data" onSubmit="return validate('');">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" id="email_exist">
    <div class="form-height-control">
      <div style="color:red" id="form-errors">
      </div>

      <div class="form-line">
        <input type="text" name="lag_name" id="lag_name" placeholder="Name" >
      </div>

      <div class="form-line">
        <input type="text" name="lag_area" id="lag_area" placeholder="Anpassade Priser" >
      </div>

      <div class="form-line">
        <input type="text" name="lag_legs" id="lag_legs" placeholder="Lagiedare" >
      </div>

      <div class="form-line">
        <select name="lag_apply_type" id="lag_apply_type" class="form-container" onchange="javascript:($(this).val() == 'Visa') ? $('#lag_apply_type_div').show(300) : $('#lag_apply_type_div').hide(300);">
          <option value="">--- Select One ---</option>
          <option value="Visa">Visa</option>
          <option value="Passport">Passport</option>
        </select>
      </div>

      <div class="form-line hideimagedefault" id="lag_apply_type_div">
        <input type="file" name="lag_visafile" id="lag_visafile">
        <img src="https://via.placeholder.com/150" name="lag_apply_type_img" id="lag_apply_type_img" class="admin_image_border" />
      </div>

      <div class="form-line">
        <select name="lag_register_type" id="lag_register_type" class="form-container">
          <option value="">--- Select One ---</option>
          <option value="Registerd">Registerd</option>
          <option value="Not-registerd">Not-registerd</option>
        </select>
      </div>


    </div>
    <div class="form-footer">
      <a href="javascript:void(0)" class="cancel-button">Cancel</a>
      <input type="submit" class="save-changes" value="Save Changes" />
    </div>
  </form>
</div>