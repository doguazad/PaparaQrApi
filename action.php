<?php
include "lang.php";


     if (isset($_POST['basket'])) {


     

    






$accountNumber = htmlspecialchars($_POST['AccId']);
$amount = htmlspecialchars($_POST['Amount']);
$description = htmlspecialchars($_POST['Desc']);
$Char = strlen($description);
$currency = "currency=0";
$IpAdress = $_SERVER['REMOTE_ADDR'];
$Browser = $_SERVER['HTTP_USER_AGENT'];
$BrowserLang = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
$date = date('d/m/Y',);

        if ($accountNumber == "" || $amount == "") {
           header("Location:index.php?value=null");
        }
        elseif ($accountNumber > 9999999999 || $accountNumber < 1000000000) {
           header("Location:index.php?value=id");
        }

        elseif ($amount > 95 || $amount < 5) {
           header("Location:index.php?value=amount");
        }
        elseif ($Char > 50) {
            header("Location:index.php?value=desc");
        }
           else {
               
        $link = "https://papara.com/personal/qr?amount=".$amount."&accountNumber=".$accountNumber."&description=".$description."";
           }

     }
     else {
          header("Location:index.php?value=none");
     }
?>
<!DOCTYPE html>
<html lang="<?php 

$br = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2);

echo $br;


?>">
<?php include "meta.php";    ?>
<body>
    <center>
        <div class="container">
<br>
            <h2><?php
    if ($br == "en") {
        echo $char[22];
    }
    elseif ($br == "tr") {
	  echo $char[23];
    }
    else {
	echo $char[22];
}?></h2>
            <br>
            <div class="row">
            <div class="col-md-4">  
                  <div class="card border-dark mb-3" style="max-width: 18rem;">
                 <div class="card-header"><?php
    if ($br == "en") {
        echo $char[24];
    }
    elseif ($br == "tr") {
	  echo $char[25];
    }
    else {
	echo $char[24];
}?></div>
                 <div class="card-body text-dark">
                    <img src="https://api.qrserver.com/v1/create-qr-code/?size=259x259&data=<?php echo $link;?>&currency=0"
                     width="259" height="259" class="card-img-top" alt="QR Code Loading...">
                 </div>
                  </div>
            </div>
            <div class="col-md-4"><div class="card border-success mb-3" style="max-width: 18rem;">
                <div class="card-header"><?php
    if ($br == "en") {
        echo $char[26];
    }
    elseif ($br == "tr") {
	  echo $char[27];
    }
    else {
	echo $char[26];
}?></div>
                <div class="card-body">
                  <h5 class="card-title"><?php
    if ($br == "en") {
        echo $char[28];
    }
    elseif ($br == "tr") {
	  echo $char[29];
    }
    else {
	echo $char[28];
}?></h5>
                  <p class="card-text">

                    <?php
    if ($br == "en") {
        echo $char[30];
    }
    elseif ($br == "tr") {
	  echo $char[31];
    }
    else {
	echo $char[30];
}?> <b><?php echo $accountNumber;     ?></b> <hr>
                    <?php
    if ($br == "en") {
        echo $char[32];
    }
    elseif ($br == "tr") {
	  echo $char[33];
    }
    else {
	echo $char[32];
}?> <br> <b><?php echo $amount; echo "&nbsp;";       ?> ₺</b> <hr>
                    <?php
    if ($br == "en") {
        echo $char[34];
    }
    elseif ($br == "tr") {
	  echo $char[35];
    }
    else {
	echo $char[34];
}?> <br> <b>
                        <?php if ($description == "") {
                                 echo "null";
                               } 
                              else{
                                 echo $description;
                               }
                    ?></b>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-4"><div class="card border-primary mb-3" style="max-width: 18rem;">
                <div class="card-header"><?php
    if ($br == "en") {
        echo $char[36];
    }
    elseif ($br == "tr") {
	  echo $char[37];
    }
    else {
	echo $char[36];
}?></div>
                <div class="card-body">
                  <h5 class="card-title"><?php
    if ($br == "en") {
        echo $char[38];
    }
    elseif ($br == "tr") {
	  echo $char[39];
    }
    else {
	echo $char[38];
}?></h5>
                  <p class="card-text"><?php
    if ($br == "en") {
        echo $char[40];
    }
    elseif ($br == "tr") {
	  echo $char[41];
    }
    else {
	echo $char[40];
}?>
                        <a href="<?php  echo $link;?>&currency=0" target="_blank"><b><i><?php
    if ($br == "en") {
        echo $char[42];
    }
    elseif ($br == "tr") {
	  echo $char[43];
    }
    else {
	echo $char[42];
}?></i></b></a>.</p>
                  
                </div>
                <div class="card-footer bg-transparent border-primary">
                    <h5 class="card-title"><?php
    if ($br == "en") {
        echo $char[44];
    }
    elseif ($br == "tr") {
	  echo $char[45];
    }
    else {
	echo $char[44];
}?></h5>
                    <p class="card-text">

                        <?php
    if ($br == "en") {
        echo $char[46];
    }
    elseif ($br == "tr") {
	  echo $char[47];
    }
    else {
	echo $char[46];
}?> <b><?php echo  $date;   ?></b> <hr>
                        <?php
    if ($br == "en") {
        echo $char[48];
    }
    elseif ($br == "tr") {
	  echo $char[49];
    }
    else {
	echo $char[48];
}?> <b><?php echo $IpAdress;    ?></b>


                    </p>

                </div>
              </div>
            </div>
              
            </div>
            </div>
            <br><br>
            <img src="https://merchant-api.papara.com/assets/img/paparaDeveloperLogo.png?v=1" id="devlogo" alt="Logo loading...">
    </center>
</body>
</html>
