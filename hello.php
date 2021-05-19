<?php 
$name = $_POST['name'];
$phone=$_POST['phone'];
$massage=$_POST['massage'];
$name=htmlspecialchars($name);
$phone=htmlspecialchars($phone);
$name=urldecode(trim($name));
$phone=urldecode(trim($phone));
mail("savchenko.artem1@gmail.com", "Заявка с сайта", "ФИО:".$name.". tel: ".$phone ,"From: example2@mail.ru \r\n");

?>
<!doctype html>
<html lang="ru">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style_1.css">

    <title>Cosmetics</title>
  </head>
  <body id="body2">
<header>
<div class="container-fluid" style="background-image: url(img/close-up-medical-botox-injection-lips-facial-treatment\ 1\ \(1\).jpg); background-repeat: no-repeat; background-size: cover; background-position:center center;">
    <div class="row" style="height: 100vh;">
      <div class="col"> 
        <nav class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand" href="#" style="font-family: Red Rose; font-size: 1.8em;">IRINA.BEAUTY</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainMenu" aria-controls="mainMenu" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
           
            <div class="collapse navbar-collapse"  id="mainMenu">
              <ul class="nav navbar-nav d-flex" id="navigate">
               <li><a class="nav-item nav-link" href="#navabout">О Докторе </a></li>
                <li><a class="nav-item nav-link" href="#navportfolio">Портфолио</a></li>
               <li><a class="nav-item nav-link" href="#navservices">Услуги</a></li>
           
               <li><a class="nav-item nav-link" href="#navcontacts">Контакты</a></li>
               <li><a class="nav-item nav-link" id="phone" href="tel:+380677022474">067-702-74-24</a></li>
              </ul>
              </div>
              </nav>
            
              <div class="container">
                  <div class="row" style="justify-content: center;">
                      <div class="col col-md-7">
              <h2 class="text-light" style="font-size: 3em; text-align: center;font-weight: 400;margin-top: 10vh;">Спасибо <?php echo $name?> Ваш запрос отправлен и будет обратботан в ближайшее время!</h2>
              </div>
              </div>
            </div>
          

    </div>
    </div>
  </div>
  </header>

<script type="text/javascript">
setTimeout('location.replace("/index.php")', 3500);
</script> 
</body>
</html>

