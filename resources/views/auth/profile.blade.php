<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
  <title>Document</title>
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background: #eee;
    }

    #box {
      border: 2px solid black;
      box-shadow: 2px 3px 5px black;
      border-radius: 25px;
      padding: 15px;
      width: 80%;
      max-width: 500px;
      margin: 0 auto;

    }

    .fa {
      height: 100%;
    }

    .under {
      text-decoration: none;

    }

    .btn {
      margin-bottom: 10px;
    }
  </style>
</head>

<body>
  <main class="container-sm">
    <h1>Hello, {{ $user_data->name }}!</h1>
    <h2>Email - {{ $user_data->email }}</h2>
    <a href="logout" class="btn btn-outline-info">Logout</a>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>