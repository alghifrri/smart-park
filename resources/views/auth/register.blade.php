<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register Form</title>
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
          <form class="card-body cardbody-color p-lg-5" method="POST" action="{{ route('register') }}">
            @csrf
            <h2 class="text-center text-dark mb-4">REGISTER</h2>
            <div class="text-center mb-4">
              <img src="{{ asset('images/logo.jpg') }}" class="img-fluid profile-image-pic img-thumbnail rounded-circle" alt="profile">
            </div>
            <div class="mb-3">
              <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Name" value="{{ old('name') }}" required autocomplete="name" autofocus>
              @error('name')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
            <div class="mb-3">
              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email Address" value="{{ old('email') }}" required autocomplete="email">
              @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
            <div class="mb-3">
              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="new-password">
              @error('password')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
            <div class="mb-3">
              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
            </div>
            <div class="text-center"><button type="submit" class="btn btn-color px-5 mb-5 w-100">Register</button></div>
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
