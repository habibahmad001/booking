<!-- Add form -->
<div class="add-new-form add-new-data">
  <div class="form-header">
    <h3>Create New Hallar</h3>
    <div class="close-icon"></div>
  </div>
  <form method="POST" action="{{ URL::to( BASE_PATH . "admin/hallar_add") }}" enctype="multipart/form-data" onSubmit="return validate('');">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" id="email_exist">
    <div class="form-height-control">
      <div style="color:red" id="form-errors">
      </div>

      <div class="form-line">
        <input type="text" name="hallar_name" id="hallar_name" placeholder="Name" >
      </div>

      <div class="form-line">
        <input type="text" name="hallar_price" id="hallar_price" placeholder="Price" >
      </div>

      <div class="form-line">
        <select name="hallar_apply_type" id="hallar_apply_type" class="form-container" onchange="javascript:($(this).val() == 'Visa') ? $('#hallar_apply_type_div').show(300) : $('#hallar_apply_type_div').hide(300);">
          <option value="">--- Select One ---</option>
          <option value="Visa">Visa</option>
          <option value="Passport">Passport</option>
        </select>
      </div>

      <div class="form-line hideimagedefault" id="hallar_apply_type_div">
        <input type="file" name="hallar_visafile" id="hallar_visafile">
        <img src="https://via.placeholder.com/150" name="hallar_apply_type_img" id="hallar_apply_type_img" class="admin_image_border" />
      </div>

      <div class="form-line">
        <select name="hallar_register_type" id="hallar_register_type" class="form-container">
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