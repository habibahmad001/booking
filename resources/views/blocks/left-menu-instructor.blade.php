<div class="left-menu">
  <ul class="">

    <li @if(collect(request()->segments())->last()=='events') class="active" @endif>
      <a href="{{ URL::to('/instructor/events') }}">
        <div class="icon">E</div>
        <div class="icon-detail">Events</div>
      </a>
    </li>

    <li @if(collect(request()->segments())->last()=='my_account') class="active" @endif>
      <a href="{{ URL::to('/instructor/my-account') }}">
        {{--manage-rules--}}
        <div class="icon">S</div>
        <div class="icon-detail">Settings</div>
      </a>
    </li>

    <li @if(collect(request()->segments())->last()=='logout') class="active" @endif>
      <a href="{{ URL::to('/logout') }}">
        {{--manage-rules--}}
        <div class="icon">L</div>
        <div class="icon-detail">Logout</div>
      </a>
    </li>

  </ul>
</div>
