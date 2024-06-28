<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon"> <!-- Favicon -->
  <style>
    .btn-color {
      background-color: #0e1c36;
      color: #fff;
    }

    .profile-image-pic {
      height: 150px;
      width: 150px;
      object-fit: cover;
    }

    .cardbody-color {
      background-color: #ffffff; /* Set to white */
    }

    .full-height {
      height: 100vh;
    }

    .centered {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100%;
    }

    a {
      text-decoration: none;
    }
  </style>
</head>
<body>
  <div class="container full-height">
    <div class="row centered">
      <div class="col-md-8 col-lg-6">
        <div class="card">
          <form class="card-body cardbody-color p-lg-5" action="{{ route('login') }}" method="POST">
            @csrf
            <h2 class="text-center text-dark mb-4">LOGIN</h2>
            <div class="text-center mb-4">
              <img src="{{ asset('images/logo.jpg') }}" class="img-fluid profile-image-pic img-thumbnail rounded-circle" alt="profile">
            </div>
            <div class="mb-3">
              <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Email Address" value="{{ old('email') }}" required autocomplete="email" autofocus>
              @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
            <div class="mb-3">
              <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password" required autocomplete="current-password">
              @error('password')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
            <div class="form-check mb-3">
              <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
              <label class="form-check-label" for="remember">
                {{ __('Remember Me') }}
              </label>
            </div>
            <div class="text-center"><button type="submit" class="btn btn-color px-5 mb-5 w-100">Login</button></div>
            <div id="emailHelp" class="form-text text-center mb-5 text-dark">
              Not Registered? <a href="{{ route('register') }}" class="text-dark fw-bold">Create an Account</a>
            </div>
            @if (Route::has('password.request'))
              <div class="text-center">
                <a class="btn btn-link text-dark fw-bold" href="{{ route('password.request') }}">
                  {{ __('Forgot Your Password?') }}
                </a>
              </div>
            @endif
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap JS and dependencies -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
