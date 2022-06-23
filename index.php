<?php
if (@$_GET['value'] == "null") {
    echo "<script>alert('You left one or more required fields blank. Try Again')</script>";
}
elseif (@$_GET['value'] == "id") {
    echo "<script>alert('You entered an invalid Papara number.Try Again')</script>";
}
elseif (@$_GET['value'] == "amount") {
    echo "<script>alert('Please enter a value between 5-95')</script>";
}
elseif (@$_GET['value'] == "Description") {
    echo "<script>alert('You entered an invalid description.Try Again')</script>";
}
?>
<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <meta name="theme-color" content="#712cf9">
    <title>Papara Qr Api</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/cover/">
    <link rel="stylesheet" href="style.css">
  </head>
  <body class="d-flex h-100 text-center text-white bg-dark">
    
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="mb-auto">
    <div>
      <h3 class="float-md-start mb-0"><img width="440" height="60" 
      src="https://merchant-api.papara.com/assets/img/paparaDeveloperLogo.png?v=1" alt=""></h3>

    </div>
  </header>

  <main class="px-3">
    <h1>Papara Qr Payment Api</h1>
    <p class="lead">Simple papara payment api that you can use without the need for an activation key.</p>
    <p class="lead">
      <a type="button"  data-bs-toggle="modal" data-bs-target="#exampleModal" style="color:black;"
       class="btn btn-lg btn-secondary fw-bold border-white bg-white">Start</a>
    </p>

  </main>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="color:black ;">Test Papara QR Api</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" style="color: black;">
      <div class="mb-3">
          <form action="action.php" name="basket" method="POST">
  <label for="exampleFormControlInput1" class="form-label">Recipient Papara Number</label>
  <input type="number" class="form-control" required name="AccId" maxlength="10" placeholder="ex:1920223691">
</div>
<div class="mb-3">
<label for="exampleFormControlInput1" class="form-label">Amount</label>
  <input type="number" name="Amount" class="form-control" max="95" min="5" required  placeholder="Choose a value from 5-95">
</div>
<div class="">
<label for="exampleFormControlInput1" class="form-label">Description (optional)</label>
  <input type="text" class="form-control" name="Desc" maxlength="50" placeholder="max: 50 char">
</div>
      </div>
      <div class="modal-footer">
        <button type="submit" name="basket" class="btn btn-outline-dark">Get A Link</button></form>
      </div>
    </div>
  </div>
</div>
<div role="alert" aria-live="assertive" aria-atomic="true" class="toast" data-bs-autohide="false">
  <div class="toast-header">
    <img src="..." class="rounded me-2" alt="...">
    <strong class="me-auto">Bootstrap</strong>
    <small>11 mins ago</small>
    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
  </div>
  <div class="toast-body">
    Hello, world! This is a toast message.
  </div>
</div>
  <footer class="mt-auto text-white-50">
    <p>Developer <a href="https://github.com/doguazad" class="text-white">doguazad</a>, API by 
    <a href="https://merchant-api.papara.com/" class="text-white">papara.com</a>.</p>
  </footer>
</div>


    
  </body>
</html>
