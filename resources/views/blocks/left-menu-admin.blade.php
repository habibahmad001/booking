<div class="left-menu">
  <ul class="">

    <!--li @if(collect(request()->segments())->last()=='home') class="active" @endif>
      <a href="{{ URL::to('/admin/home') }}">
        <div class="icon">D</div>
        <div class="icon-detail">Dashboard</div>
      </a>
    </li-->

    <li @if(collect(request()->segments())->last()=='hallar') class="active" @endif>
      <a href="{{ URL::to('/admin/hallar') }}">
        {{--manage-rules--}}
        <div class="icon">H</div>
        <div class="icon-detail">Hallar</div>
      </a>
    </li>

    <li @if(collect(request()->segments())->last()=='lag') class="active" @endif>
      <a href="{{ URL::to('/admin/lag') }}">
        {{--manage-rules--}}
        <div class="icon">L</div>
        <div class="icon-detail">Lag</div>
      </a>
    </li>

    <li @if(collect(request()->segments())->last()=='ledare') class="active" @endif>
      <a href="{{ URL::to('/admin/ledare') }}">
        {{--manage-rules--}}
        <div class="icon">L</div>
        <div class="icon-detail">Ledare</div>
      </a>
    </li>

  </ul>
</div>
