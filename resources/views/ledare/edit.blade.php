<div class="add-new-form edit-current-data">
  <div class="form-header">
    <h3>Edit Ledare</h3>
    <div class="close-icon"></div>
  </div>
  <form method="post" action="{{ URL::to("/admin/update-ledare") }}" enctype="multipart/form-data" onSubmit="return validate('edit-');">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="ledare_id" id="ledare_id">
    <input type="hidden" id="edit-email_exist">
    <div class="form-height-control">
      <div class="loading-container">
        <img src="{{asset('images/loading.gif')}}" />
      </div>
      <div style="color:red" id="form-errors">
      </div>
      <div class="form-content-box">

        <div class="form-line">
          <input type="text" name="ledare_name" id="edit-ledare_name" placeholder="Name" >
        </div>

        <div class="form-line">
          <select name="ledare_Kont_type" id="edit-ledare_Kont_type" class="form-container" onchange="javascript:($(this).val() == 'Visa') ? $('#edit-ledare_kontfile_div').show(300) : $('#edit-ledare_kontfile_div').hide(300);">
            <option>--- Select One ---</option>
            <option value="Visa">Visa</option>
            <option value="Passport">Passport</option>
          </select>
        </div>

        <div class="form-line hideimagedefault" id="edit-ledare_kontfile_div">
          <input type="file" name="ledare_kontfile" id="ledare_kontfile">
          <img src="https://via.placeholder.com/150" name="ledare_kontfile_img" id="edit-ledare_kontfile_img" class="admin_image_border" />
        </div>

        <div class="form-line">
          <select name="ledare_lagb_type" id="edit-ledare_lagb_type" class="form-container" onchange="javascript:($(this).val() == 'Visa') ? $('#edit-ledare_lagb_div').show(300) : $('#edit-ledare_lagb_div').hide(300);">
            <option>--- Select One ---</option>
            <option value="Visa">Visa</option>
            <option value="Passport">Passport</option>
          </select>
        </div>

        <div class="form-line hideimagedefault" id="edit-ledare_lagb_div">
          <input type="file" name="ledare_lagbdfile" id="ledare_lagbdfile">
          <img src="https://via.placeholder.com/150" name="ledare_lagbdfile_img" id="edit-ledare_lagbdfile_img" class="admin_image_border" />
        </div>

        <div class="form-line">
          <select name="ledare_tillg_type" id="edit-ledare_tillg_type" class="form-container" onchange="javascript:($(this).val() == 'Visa') ? $('#edit-ledare_tillg_div').show(300) : $('#edit-ledare_tillg_div').hide(300);">
            <option>--- Select One ---</option>
            <option value="Visa">Visa</option>
            <option value="Passport">Passport</option>
          </select>
        </div>

        <div class="form-line hideimagedefault" id="edit-ledare_tillg_div">
          <input type="file" name="ledare_tillgfile" id="ledare_tillgfile">
          <img src="https://via.placeholder.com/150" name="ledare_tillgfile_img" id="edit-ledare_tillgfile_img" class="admin_image_border" />
        </div>

        <div class="form-line">
          <select name="ledare_register_type" id="edit-ledare_register_type" class="form-container">
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
