<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
</head>
<body>
<div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form method="POST" action="{{ route('login') }}" class="sign-in-form">
            @csrf
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="email" name="email" placeholder="email" @error('email') is-invalid @enderror required/>
            {{--   @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror --}}
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" @error('password') is-invalid @enderror name="password" required autocomplete="new-password"/>
            </div>
            <button type="submit" class="btn solid">Login</button>
          </form>
          <form method="POST" action="{{ url('register') }}" class="sign-up-form">
            @csrf
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input id="name" type="text" placeholder="Username" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input id="email" type="text" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="new-password" />
            </div>
            <div class="input-field">
                <i class="fas fa-lock"></i>
                <input id="password-confirm" type="password" placeholder="Confirm Password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" value="{{ old('password-confirm') }}" required autocomplete="new-password" />
              </div>
            <button type="submit" class="btn">Sign Up</button>

          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Ingin Bergabung ?</h3>
            <p>
                Bergabung dengan Iklanku secara mudah dan cepat.
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="img/register2.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Ingin Terhubung ?</h3>
            <p>
                Iklanku membantu Anda terhubung dan berbagi informasi dengan orang lain untuk event Anda.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="{{ asset ('frontend/assets/images/log2.svg') }}" class="image" alt="" />
        </div>
      </div>
    </div>
</body>
<script src="{{ asset('js/login.js') }}"></script>
</html>


