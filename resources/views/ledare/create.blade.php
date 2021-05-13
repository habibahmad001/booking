<!-- Add form -->
<div class="add-new-form add-new-data">
  <div class="form-header">
    <h3>Create New Ledare</h3>
    <div class="close-icon"></div>
  </div>
  <form method="POST" action="{{ URL::to( BASE_PATH . "admin/ledare_add") }}" enctype="multipart/form-data" onSubmit="return validate('');">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" id="email_exist">
    <div class="form-height-control">
      <div style="color:red" id="form-errors">
      </div>

      <div class="form-line">
        <input type="text" name="ledare_name" id="ledare_name" placeholder="Name" >
      </div>

      <div class="form-line">
        <select name="ledare_Kont_type" id="ledare_Kont_type" class="form-container" onchange="javascript:($(this).val() == 'Visa') ? $('#ledare_kontfile_div').show(300) : $('#ledare_kontfile_div').hide(300);">
          <option value="">--- Select One ---</option>
          <option value="Visa">Visa</option>
          <option value="Passport">Passport</option>
        </select>
      </div>

      <div class="form-line hideimagedefault" id="ledare_kontfile_div">
        <input type="file" name="ledare_kontfile" id="ledare_kontfile">
        <img src="https://via.placeholder.com/150" name="ledare_kontfile_img" id="ledare_kontfile_img" class="admin_image_border" />
      </div>

      <div class="form-line">
        <select name="ledare_lagb_type" id="ledare_lagb_type" class="form-container" onchange="javascript:($(this).val() == 'Visa') ? $('#ledare_lagb_div').show(300) : $('#ledare_lagb_div').hide(300);">
          <option value="">--- Select One ---</option>
          <option value="Visa">Visa</option>
          <option value="Passport">Passport</option>
        </select>
      </div>

      <div class="form-line hideimagedefault" id="ledare_lagb_div">
        <input type="file" name="ledare_lagbdfile" id="ledare_lagbdfile">
        <img src="https://via.placeholder.com/150" name="ledare_lagbdfile_img" id="ledare_lagbdfile_img" class="admin_image_border" />
      </div>

      <div class="form-line">
        <select name="ledare_tillg_type" id="ledare_tillg_type" class="form-container" onchange="javascript:($(this).val() == 'Visa') ? $('#ledare_tillg_div').show(300) : $('#ledare_tillg_div').hide(300);">
          <option value="">--- Select One ---</option>
          <option value="Visa">Visa</option>
          <option value="Passport">Passport</option>
        </select>
      </div>

      <div class="form-line hideimagedefault" id="ledare_tillg_div">
        <input type="file" name="ledare_tillgfile" id="ledare_tillgfile">
        <img src="https://via.placeholder.com/150" name="ledare_tillgfile_img" id="ledare_tillgfile_img" class="admin_image_border" />
      </div>

      <div class="form-line">
        <select name="ledare_register_type" id="ledare_register_type" class="form-container">
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