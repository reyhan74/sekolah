<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Glassmorphism Login Form | CodingNepal</title>
  <link rel="stylesheet" href="{{ asset('/css/login.css') }}">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
  <div class="wrapper">
    <form action="{{ route('login.submit') }}" method="POST">
      @csrf

      <h2>
        <img src="{{ asset('/img/login/logo_cb.png') }}" height="120px" width="120px">
      </h2>

      <div class="input-field">
        <input type="text" name="username" value="{{ old('username') }}" required>
        <label>username</label>
      </div>

      <div class="input-field">
        <input type="password" name="password" required>
        <label>password</label>
      </div>

      <div class="forget">
        <label for="remember">
          <input type="checkbox" id="remember">
          <p>Remember me</p>
        </label>
        <a href="#">Forgot password?</a>
      </div>

      <button type="submit">Log In</button>

      <div class="register">
        <p>Siswa baru harap register! 
            <a href="{{ url('/registration-form/regis') }}">Register</a>
        </p>
      </div>
    </form>
  </div>

  <script>
    @if (session('error'))
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: '{{ session('error') }}',
        });
    @endif

    @if (session('success'))
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: '{{ session('success') }}',
        });
    @endif

    @if ($errors->any())
        Swal.fire({
            icon: 'error',
            title: 'Validation Error',
            html: `{!! implode('<br>', $errors->all()) !!}`
        });
    @endif
  </script>
</body>
</html>
