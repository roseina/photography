<ul class="nav nav-tabs">
  @php $a=0; @endphp
  @foreach($flags as $flag)
  <input type="hidden" name="flags[]" value="{{$flag->id}}">  
  @if( ($loop->first && !Session::has('flag')) || ( Session::has('flag') && Session::get('flag') == $flag->id ) )
  <li class="active">
    @else
    <li>
      @endif
      <a data-toggle="tab" href="#{{ucfirst($flag->short_code)}}" id="langtab">
        <img src="{{asset('/uploads/language')}}/flag/{{$flag->flag}}" height="20" width="20" style="float:left; margin-right:5px;">{{ucfirst($flag->short_code)}}
      </a>
    </li>
    <!-- <li><a data-toggle="tab" href="#Nepali">Nepali</a></li> -->
    @endforeach
  </ul>

  <div class="tab-content" style="border:solid 1px #dddddd; border-top:none;">
    @php $b=0; @endphp
    @foreach($flags as $flag)
    @if( ($loop->first && !Session::has('flag')) || ( Session::has('flag') && Session::get('flag') == $flag->id ) )
    <div id="{{ucfirst($flag->slug)}}" class="tab-pane fade in active">{{Session::forget('flag')}}
      @else
      <div id="{{ucfirst($flag->slug)}}" class="tab-pane fade">
        @endif
        <div class="panel-body">
          @include('backend.pages.createTabForm',['flag'=>$flag])
        </div>
      </div>
      @endforeach    
    </div>          