<!-- Add form -->
<div class="add-new-form add-new-data">
  <div class="form-header">
    <h3>Create New Events</h3>
    <div class="close-icon"></div>
  </div>
  <form method="POST" action="{{ URL::to( BASE_PATH . "instructor/events_add") }}" enctype="multipart/form-data" onSubmit="return validate('');">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" id="email_exist">
    <div class="form-height-control">
      <div style="color:red" id="form-errors">
      </div>

      <div class="form-line">
        <label>Event Title</label>
        <input type="text" name="events_note" id="events_note" placeholder="Title" >
      </div>

      <div class="form-line">
        <label>Event Start Date</label>
        <input type="text" name="events_eventStartdate" id="events_eventStartdate" placeholder="2021-08-20" >
      </div>

      <div class="form-line">
        <label>Event Start Time</label>
        <input id="event_stime" name="event_stime" type="text" class="form-control" data-zdp_readonly_element="false">
      </div>

      <!--div class="form-line datefield">
        <label>Event End Date</label>
        <input type="text" name="events_eventEnddate" id="events_eventEnddate" placeholder="2021-08-25" >
      </div-->

      <div class="form-line">
        <label>Event End Time</label>
        <input id="event_etime" name="event_etime" type="text" class="form-control" data-zdp_readonly_element="false">
      </div>

      <div class="form-line">
        <label>Select Colour</label><br />
        <input id='colorpicker' name="eventcolour" />
      </div>

      <div class="form-line">
        <label>Event Location</label>
        <select name="events_eventResource" id="events_eventResource" class="form-container">
          <option value="">--- Select One ---</option>
          <option value="15">Studio 1</option>
          <option value="16">Studio 2</option>
          <option value="17">Studio 3</option>
          <option value="90">Studio 4</option>
        </select>
      </div>

      <div class="form-line">
        <label>Event Lag</label>
        <select name="events_lag" id="events_lag" class="form-container">
          <option value="">--- Select Lag ---</option>
          @if(count(App\Lag::all()) > 0)
            @foreach(App\Lag::all() as $v)
              <option value="{!! $v->id !!}">{!! $v->name !!}</option>
            @endforeach
          @endif
        </select>
      </div>

      <div class="form-line">
        <label>Event Ledare</label>
        <select name="events_ledare" id="events_ledare" class="form-container">
          <option value="">--- Select Ledare ---</option>
          @if(count(App\Ledare::all()) > 0)
            @foreach(App\Ledare::all() as $v)
              <option value="{!! $v->id !!}">{!! $v->name !!}</option>
            @endforeach
          @endif
        </select>
      </div>

    </div>
    <div class="form-footer">
      <a href="javascript:void(0)" class="cancel-button">Cancel</a>
      <input type="submit" class="save-changes" value="Save Changes" />
    </div>
  </form>
</div>