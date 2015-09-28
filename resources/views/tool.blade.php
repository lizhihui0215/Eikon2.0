@extends('layouts.app')
@section('stylesheets')
@parent
<link rel="stylesheet" href="{{ asset('css/tool/style.css') }}">
@endsection
@section('content')
<div class="container">
  <div class="row" style="background-color: white;">
    <form class="" method="post">
      <div class="col-md-2" style="padding-top: 13px">
        <span>Access Token:</span>
      </div>
      <div class="col-md-10" style="padding-top: 10px">
        <div class="input-group input-group-sm">
          <input type="text" class="form-control" aria-label="..." name="token">
          <div class="input-group-btn">
            <button type="submit" class="btn btn-primary">Get Token</button>
          </div><!-- /btn-group -->
        </div><!-- /input-group -->
      </div>
    </form>
    <div class="col-md-12" style="padding-top: 10px">
      <div class="input-group input-group-sm">
        <div class="input-group-btn">
          <button type="button dropdown-toggle" data-toggle="dropdown" class="btn btn-default" aria-haspopup="true" aria-expanded="false">GET</button>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </div><!-- /btn-group -->
        <input type="text" class="form-control" aria-label="...">
        <div class="input-group-btn">
          <button type="button" class="btn btn-primary">Submit</button>
        </div>
      </div><!-- /input-group -->
    </div>
    <div class="col-md-3" >
      <div class="field-left">

      </div>

    </div>

    <div class="col-md-9">
      <div class="field-right">

      </div>
    </div>
  </div>


</div>



@endsection

@section('scripts')
@endsection
