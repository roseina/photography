
@if($errors->any())
    @if( ($errors->first('alert-success') || $errors->first('alert-danger')))
      @foreach (['danger', 'warning', 'success', 'info'] as $msg)
        @if($errors->has('alert-' . $msg))
        <div class="alert alert-{{ $msg }}">
              <p style=" color: green;">{{ $errors->first('alert-' . $msg) }}<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
        </div>
        @endif
      @endforeach

    @else
      <div class="alert alert-danger" role="alert">
        @foreach($errors->all() as $error)
            <p class="" style=" color:red;"><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span>&nbsp;{{$error}}</p>
        @endforeach
      </div>
    @endif
@endif
