@extends('layouts.lyt_login')

@section('log')

<div class="page-header clear-filter" filter-color="orange">
        <div class="page-header-image" style="background-image:url(../assets/img/login.jpg)"></div>
        <div class="content">
          <div class="container">
            <div class="col-md-4 ml-auto mr-auto">
              <div class="card card-login card-plain">
                <form class="form" method="POST" action="{{ route('login') }}">
                    @csrf
                  <div class="card-header text-center">
                    <div class="logo-container">
                      <img src="{{URL::to('/')}}/assets/img/now-logo.png" alt="">
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="input-group no-border input-lg">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="now-ui-icons users_circle-08"></i>
                        </span>
                      </div>
                      <input type="email" id="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="Email Address" value="{{ old('email') }}" required autofocus>
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="input-group no-border input-lg">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="now-ui-icons text_caps-small"></i>
                        </span>
                      </div>
                      <input type="password" id="password" placeholder="Password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required/>
                      @if ($errors->has('password'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                  @endif
                    </div>
                  </div>
                  <div class="card-footer text-center">
                    <button type="submit" class="btn btn-primary btn-round btn-lg btn-block">Get Started</button>
                    <div class="pull-left">
                      
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                      
                    </div>
                    <div class="pull-right">
                      <h6>
                            <a class="link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                            </a>
                      </h6>
                    </div>
                </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <footer class="footer">
         
        </footer>
      </div>
     

@endsection
