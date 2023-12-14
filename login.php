<?php
  session_start();
  if (isset($_SESSION['username'])) {
    header('Location: home.php');
    exit;
  }
  if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    // set username and password
    if($username == 'raniaaa' && $password == 'apriliaaaa') {
      $_SESSION['username'] = $username;
      // redirect to dashboard page
      header('Location: home.php');      
      exit;
    } else {
      $error = 'Invalid username or password';
    }
  }
?>

<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <div class="row justify-content-center mt-5">
      <div class="col-md-4">
        <form method="POST" class="bg-light p-4 rounded">
          <h1 class="text-center mb-4">Login</h1>
          <?php if(isset($error)): ?>
            <div class="alert alert-danger"><?= $error ?></div>
          <?php endif; ?>
          <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" class="form-control" name="username" id="username" required>
          </div>
          <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" name="password" id="password" required>
          </div>
          <div class="form-group">
            <input type="submit" name="submit" value="Login" class="btn btn-dark btn-block">
          </div>
        </form>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
