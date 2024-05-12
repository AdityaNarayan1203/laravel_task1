<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;

    }

    #anc {
      text-decoration: none;

    }

    #box1 {
      background-color: #eee;
      box-shadow: 2px 3px 5px black;
      border-radius: 25px;
      padding: 15px;
      max-width: 500px;
      margin: 0 auto;
      min-height: 350px;
    }
  </style>
</head>

<body>
  <main class="container-sm">
    <div class="col-sm-12">
      @if(Session::get('logout'))
      <div class="alert alert-success">
        {{Session :: get('logout')}}
      </div>
      @endif
      @if(Session::get('fail'))
      <div class="alert alert-danger">
        {{Session :: get('fail')}}
      </div>
      @endif
    </div>
    <div id="box1">
      <div class="text-center">
        <h2>Login</h2>
      </div>
      <br>
      <form action="login_check" method="post">
        @csrf
        <div>

          <div class="form-group py-4">
            <label>Email:</label>
            <input type="text" class="form-control" name="email">
            <span>@error('email'){{ $message }} @enderror</span>
          </div>
          <div class="form-group py-4">
            <label>Password:</label>
            <input type="password" class="form-control" name="password">
            <span>@error('password'){{ $message }} @enderror</span>
          </div>

        </div>
        <br>
        <div>
          <span>
            <button type="submit" class="btn btn-secondary ml-5">Login</button>
            <a href="/" class="btn btn-info ml-5">Go to Register</a>
          </span>


        </div>

      </form>
    </div>


  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>