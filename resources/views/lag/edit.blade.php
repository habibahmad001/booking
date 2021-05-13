<div class="add-new-form edit-current-data">
  <div class="form-header">
    <h3>Edit CMS</h3>
    <div class="close-icon"></div>
  </div>
  <form method="post" action="{{ URL::to( BASE_PATH . "admin/update-lag") }}" enctype="multipart/form-data" onSubmit="return validate('edit-');">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="lag_id" id="lag_id">
    <input type="hidden" id="edit-email_exist">
    <div class="form-height-control">
      <div class="loading-container">
        <img src="{{asset('images/loading.gif')}}" />
      </div>
      <div style="color:red" id="form-errors">
      </div>
      <div class="form-content-box">

        <div class="form-line">
          <input type="text" name="lag_name" id="edit-lag_name" placeholder="Name" >
        </div>

        <div class="form-line">
          <input type="text" name="lag_area" id="edit-lag_area" placeholder="Anpassade Priser" >
        </div>

        <div class="form-line">
          <input type="text" name="lag_legs" id="edit-lag_legs" placeholder="Lagiedare" >
        </div>

        <div class="form-line">
          <select name="lag_apply_type" id="edit-lag_apply_type" class="form-container" onchange="javascript:($(this).val() == 'Visa') ? $('#edit-lag_apply_type_div').show(300) : $('#edit-lag_apply_type_div').hide(300);">
            <option value="">--- Select One ---</option>
            <option value="Visa">Visa</option>
            <option value="Passport">Passport</option>
          </select>
        </div>

        <div class="form-line hideimagedefault" id="edit-lag_apply_type_div">
          <input type="file" name="lag_visafile" id="edit-lag_visafile">
          <img src="https://via.placeholder.com/150" name="lag_apply_type_img" id="edit-lag_apply_type_img" class="admin_image_border" />
        </div>

        <div class="form-line">
          <select name="lag_register_type" id="edit-lag_register_type" class="form-container">
            <option value="">--- Select One ---</option>
            <option value="Registerd">Registerd</option>
            <option value="Not-registerd">Not-registerd</option>
          </select>
        </div>
       
      </div>
    </div>
    <div class="form-footer">
      <a href="javascript:void(0)" class="cancel-button">Cancel</a>
      <input type="submit" class="save-changes disable" value="Save Changes" disabled="disabled" />
    </div>
  </form>
</div>
