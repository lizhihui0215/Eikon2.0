@extends('layouts.app')
@section('stylesheets')
  @parent
  <link rel="stylesheet" href="{{ asset( 'css/login/site.css' ) }}" >
  <link rel="stylesheet" href="{{ asset( 'css/login/form-elements.css' ) }}" >
@endsection
@section('content')
<div class="top-content">

  <div class="inner-bg">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-sm-offset-2 text">
          <h1><strong>Eikon</strong></h1>
          <div class="description">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6 col-sm-offset-3 form-box">
          <div class="form-top">
            <div class="form-top-left">
              <h3>登录</h3>
              <p>输入用户名密码登录:</p>
            </div>
            <div class="form-top-right">
              <i class="fa fa-lock"></i>
            </div>
          </div>
          <div class="form-bottom">
            <form role="form" action="" method="post" class="login-form">
              <div class="form-group">
                <label class="sr-only" for="form-username">用户名</label>
                <input type="text" name="form-username" placeholder="用户名" class="form-username form-control" id="form-username">
              </div>
              <div class="form-group">
                <label class="sr-only" for="form-password">密码</label>
                <input type="password" name="form-password" placeholder="密码" class="form-password form-control" id="form-password">
              </div>
              <button type="submit" class="btn">Sign in!</button>
            </form>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6 col-sm-offset-3 social-login">
          <div class="social-login-buttons">
            <a class="btn btn-link-2" href="#">
              <i class="fa fa-facebook"></i> Facebook
            </a>
            <a class="btn btn-link-2" href="#">
              <i class="fa fa-twitter"></i> Twitter
            </a>
            <a class="btn btn-link-2" href="#">
              <i class="fa fa-google-plus"></i> Google Plus
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@section('scripts')

  <script src="{{ asset('js/login/jquery-1.11.1.min.js') }}" type="text/javascript"> </script>
  <script src="{{ asset('vendor/bootstrap/dist/js/bootstrap.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/login/jquery.backstretch.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/login/scripts.js') }}" type="text/javascript"></script>
@endsection
