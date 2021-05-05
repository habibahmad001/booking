<div class="add-new-form edit-current-data">
  <div class="form-header">
    <h3>Edit Hallar</h3>
    <div class="close-icon"></div>
  </div>
  <form method="post" action="/admin/update-hallar" enctype="multipart/form-data" onSubmit="return validate('edit-');">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="hallar_id" id="hallar_id">
    <input type="hidden" id="edit-email_exist">
    <div class="form-height-control">
      <div class="loading-container">
        <img src="{{asset('images/loading.gif')}}" />
      </div>
      <div style="color:red" id="form-errors">
      </div>
      <div class="form-content-box">

        <div class="form-line">
          <input type="text" name="hallar_name" id="edit-hallar_name" placeholder="Name" >
        </div>

        <div class="form-line">
          <input type="text" name="hallar_price" id="edit-hallar_price" placeholder="Price" >
        </div>

        <div class="form-line">
          <select name="hallar_apply_type" id="edit-hallar_apply_type" class="form-container" onchange="javascript:($(this).val() == 'Visa') ? $('#edit-hallar_apply_type_div').show(300) : $('#edit-hallar_apply_type_div').hide(300);">
            <option>--- Select One ---</option>
            <option value="Visa">Visa</option>
            <option value="Passport">Passport</option>
          </select>
        </div>

        <div class="form-line hideimagedefault" id="edit-hallar_apply_type_div">
          <input type="file" name="hallar_visafile" id="edit-hallar_visafile">
          <img src="https://via.placeholder.com/150" name="hallar_apply_type_img" id="edit-hallar_apply_type_img" class="admin_image_border" />
        </div>

        <div class="form-line">
          <select name="hallar_register_type" id="edit-hallar_register_type" class="form-container">
            <option>--- Select One ---</option>
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
