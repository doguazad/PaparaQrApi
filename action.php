<?php

     if (isset($_POST['basket'])) {
    

$accountNumber = htmlspecialchars($_POST['AccId']);
$amount = htmlspecialchars($_POST['Amount']);
$description = htmlspecialchars($_POST['Desc']);
$Char = strlen($description);
$currency = "currency=0";

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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="author" content="doguazad , GezegenDigital">
    <meta name="generator" content="doguazad">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API CREATED </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:ital,wght@1,500&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        h2{
            font-family: 'Merriweather Sans', sans-serif;
        }
    </style>
</head>
<body>
    <center>
        <div class="container">
<br>
            <h2>API CREATED</h2>
            <br>
            <div class="row">
            <div class="col-md-4">  
                  <div class="card border-dark mb-3" style="max-width: 18rem;">
                 <div class="card-header">QR Code</div>
                 <div class="card-body text-dark">
                    <img src="https://api.qrserver.com/v1/create-qr-code/?size=259x259&data=<?php echo $link;?>&currency=0"
                     width="259" height="259" class="card-img-top" alt="QR Code Loading...">
                 </div>
                  </div>
            </div>
            <div class="col-md-4"><div class="card border-success mb-3" style="max-width: 18rem;">
                <div class="card-header">Link Deatils</div>
                <div class="card-body">
                  <h5 class="card-title">Shipping Information</h5>
                  <p class="card-text">

                    • Recipient Papara Number: <b><?php echo $accountNumber;     ?></b> <hr>
                    • Amount Money to Send: <br> <b><?php echo $amount; echo "&nbsp;";       ?> ₺</b> <hr>
                    • Statement to Submit: <br> <b><?php echo $description; ?></b>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-4"><div class="card border-primary mb-3" style="max-width: 18rem;">
                <div class="card-header">Manual Routing</div>
                <div class="card-body">
                  <h5 class="card-title">Create Url</h5>
                  <p class="card-text">If you want to pay with a link instead of scanning the QR code, you can
                        <a href="<?php echo $link;?>&currency=0" target="_blank"><b><i>click the link here to pay</i></b></a>.</p>
                  
                </div>

              </div>
            </div>
              
            </div>
            </div>
            <br><br>
            <img src="https://merchant-api.papara.com/assets/img/paparaDeveloperLogo.png?v=1" alt="Logo loading...">
    </center>
</body>
</html>