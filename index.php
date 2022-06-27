<?php
include "lang.php";
$br = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2);
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
<html lang="<?php echo $br; ?>" itemscope itemtype="http://schema.org/Article" class="h-100">
<?php  include "meta.php";      ?>
  <body class="d-flex h-100 text-center text-white bg-dark">
    
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="mb-auto">
    <div>
      <img id="devlogo" 
      src="https://merchant-api.papara.com/assets/img/paparaDeveloperLogo.png?v=1" alt="">

    </div>
  </header>

  <main class="px-3">
    <h1><?php
    if ($br == "en") {
        echo $char[0];
    }
    elseif ($br == "tr") {
	  echo $char[1];
    }
    else {
	echo $char[0];
}?></h1>
    <p class="lead"><?php
    if ($br == "en") {
        echo $char[2];
    }
    elseif ($br == "tr") {
	  echo $char[3];
    }
    else {
	echo $char[2];
}?></p>
    <p class="lead">
      <a type="button"  data-bs-toggle="modal" data-bs-target="#exampleModal" style="color:black;"
       class="btn btn-lg btn-secondary fw-bold border-white bg-white"><?php
    if ($br == "en") {
        echo $char[4];
    }
    elseif ($br == "tr") {
	  echo $char[5];
    }
    else {
	echo $char[4];
}?></a>
    </p>

  </main>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="color:black ;"><?php
    if ($br == "en") {
        echo $char[6];
    }
    elseif ($br == "tr") {
	  echo $char[7];
    }
    else {
	echo $char[6];
}?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" style="color: black;">
      <div class="mb-3">
          <form action="action" name="basket" method="POST">
  <label for="exampleFormControlInput1" class="form-label"><?php
    if ($br == "en") {
        echo $char[8];
    }
    elseif ($br == "tr") {
	  echo $char[9];
    }
    else {
	echo $char[8];
}?></label>
  <input type="number" class="form-control" required name="AccId" maxlength="10" placeholder="<?php
    if ($br == "en") {
        echo $char[10];
    }
    elseif ($br == "tr") {
	  echo $char[11];
    }
    else {
	echo $char[10];
}?>:1920223691">
</div>
<div class="mb-3">
<label for="exampleFormControlInput1" class="form-label"><?php
    if ($br == "en") {
        echo $char[12];
    }
    elseif ($br == "tr") {
	  echo $char[13];
    }
    else {
	echo $char[12];
}?></label>
  <input type="number" name="Amount" class="form-control" max="95" min="5" required  placeholder="<?php
    if ($br == "en") {
        echo $char[14];
    }
    elseif ($br == "tr") {
	  echo $char[15];
    }
    else {
	echo $char[14];
}?>">
</div>
<div class="">
<label for="exampleFormControlInput1" class="form-label"><?php
    if ($br == "en") {
        echo $char[16];
    }
    elseif ($br == "tr") {
	  echo $char[17];
    }
    else {
	echo $char[16];
}?></label>
  <input type="text" class="form-control" name="Desc" maxlength="50" placeholder="<?php
    if ($br == "en") {
        echo $char[18];
    }
    elseif ($br == "tr") {
	  echo $char[19];
    }
    else {
	echo $char[18];
}?>">
</div>
<hr>
<div class="g-recaptcha" data-sitekey="6LfPPqEgAAAAAHfnSKTzo72zSHUTehv_8nqt-8ik"></div>
      </div>
      <div class="modal-footer">
        <button type="submit" name="basket" class="btn btn-outline-dark"><?php
    if ($br == "en") {
        echo $char[20];
    }
    elseif ($br == "tr") {
	  echo $char[21];
    }
    else {
	echo $char[20];
}?></button></form>
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
        <p><a class="text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">More Information</a>

<div style="color:black" class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasTopLabel">More Information</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="https://papara-api.suppart.site/privacy">Privacy Policy</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="https://github.com/doguazad/PaparaQRApi">Github</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="https://papara.com">Papara.com</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="https://papara-api.suppart.site/test.html">Draft</a>
  </li>
</ul>
  </div>
</div></p>
<div class="g-recaptcha"
      data-sitekey="6LdcSqEgAAAAAHij59Xo9hKzTqNxtbAFZzIdDDnx"
      data-callback="onSubmit"
      data-size="invisible"
      theme="dark">
</div>
  </footer>
</div>


    
  </body>
</html>
