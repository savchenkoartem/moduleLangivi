<!doctype html>
<html lang="ru">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style_1.css">

    <title>Cosmetics</title>
  </head>
  <body>
  
            <div class="modal fade" id="winModall" role="dialog" tabindex="-1">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content" style="background-color:whitesmoke;">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="container-fluid">
                      <div class="row px-3">
                        <div class="col-12 col-md-6">
                          <h4>Вы можете оставить отзыв или задать вопрос</h4>
                          <div class="popupCont">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis tempora excepturi sapiente a! Sunt iusto minus incidunt vero consequatur saepe fuga aspernatur, provident at, error eius nam repellat quas eligendi?</div>
                        </div>
                        <div class="col-12 col-md-6 align-items-md-end d-flex" style="flex-direction: column;align-items:flex-start;">
                          <form action="rewiews.php" method="POST" id="commentsForm">
                          <div class="namesOfForm">Ваше имя<br>
                            <input type="text" required class="comName" name="comName">
                            </div>
                            <div class="namesOfForm" style="padding-top: .5rem;">Ваш номер телефона<br>
                              <input type="number" required class="comPhone" name="comPhone">
                            </div>
                            <div class="namesOfFormArea" style="padding-top: .5rem;">Коментарии<br>
                              <textarea name="comMassage" id="comments" cols="30" rows="8"></textarea>
                            </div>
                            <div class="sendcom" style="padding: .5rem 0 1rem 0;align-self: flex-start;">
                            <button type="submit" class="makeCom" style="font-size: .8rem;">Отправить сообщение</button>
                            </div>
                            </form>
                        </div>
                      </div>
                    </div>
                  </div>
            
                </div>
              </div>



</div>
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
              <h2 class="text-light" style="font-size: 2.5em; text-align: center;font-weight: 400;margin-top: 55vh;">Подчеркнем вашу естественность и индивидуальность</h2>
              </div>
              </div>
            </div>
          

    </div>
    </div>
  </div>
  </header>
      <section id="navabout">
      <div class="container-fluid">
          <div class="row">
              <div class="col-12 col-md-6">
                      <div class="bg1 mx-auto" style="background-color: #E6DDDE;margin-top: 5rem;">
                      <img src="./img/iryna_d.jpg" alt="#" width="100%" height="100%" class="photo1">
                  </div>
                  </div>

          
                  <div class="col-12 col-md-5 d-flex" style="align-items: center;">
                      <div class="block2 mx-2" style="border-bottom: 3px solid #e6ddde;">
                      <h2>Ирина Деряга</h2>
                      <p style="color: #4F4F4F; font-size: .9rem;"><b>врач косметолог</b></p>
                      <div class="watsdo">повышение квалификации на различных курсах, тренингах и конгрессах, мастер- классах.
                          <p class="stazh">Стаж работы: 3 года</p>
                      </div>
                      </div>
                    
                      
                      </div>
                      </div>
</div>
   </section>
      
   <section id="navportfolio">
       <div class="container">
           <div class="row">
    <div class="col-11 col-lg-12 portfolio">портфолио</div>
</div>
<div class="row d-flex mt-3" style="justify-content: center;">

    <div class="col col-lg-9" id="guby">
        
        <div id="carouselControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="./img/lips_sravn.jpg" alt="first">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="./img/lips_sravn.jpg" alt="second">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          <p style="text-align: center;">Контурная пластика губ препаратом на основе гиалуроновой кислоты Stylage M</p>
    </div>
</div>
</div>
   </section> 
   
   <section id="navservices">
    <div class="container">
        <div class="row">
 <div class="col-11 col-lg-12 services">наши услуги</div>
</div>
<div class="row">
    <div class="col-12 col-md-6 cont">
        <h5>Ботулинотерапия</h5>
        <p class="content">Введение нейропротеина в ткани помогает расслабить часть мышечных волокон , из-за сокращения которых и появляются мимические заломы и морщины.<br>

           <span class="newStr"><b>Показания:</b> морщины шеи, подбородка, губ (кисетный морщины), спинки носа, уголков глаз «гусиные лапки» при смехе,  горизонтальные морщины на лбу и мимические межбровья, при нахмуривании , десневая  улыбка.
            
            </span></p>

    </div>
    <div class="col-12 col-md-6">
        <div class="rectphoto right" style="background-color: #E6DDDE ;">
            <img src="./img/Rectangle 12.jpg" alt="#" class="imgs" style="right: 100px;">
    </div>
    </div>
</div>
<div class="row">

    <div class="col-12 col-md-6">
        <div class="col-12 rectphoto left" style="background-color: #C1C9D0;">
            <img src="./img/Rectangle 14.jpg" alt="#" class="imgs" style="left: 100px;">
    </div>
    </div>

    <div class="col-12 col-md-6 cont">
        <h5>Ботулинотерапия</h5>
        <p class="content">Введение нейропротеина в ткани помогает расслабить часть мышечных волокон , из-за сокращения которых и появляются мимические заломы и морщины.<br>

           <span class="newStr"><b>Показания:</b> морщины шеи, подбородка, губ (кисетный морщины), спинки носа, уголков глаз «гусиные лапки» при смехе,  горизонтальные морщины на лбу и мимические межбровья, при нахмуривании , десневая  улыбка.
            
            </span></p>

    </div>
    
</div>

<div class="row">
    <div class="col-12 col-md-6 cont">
        <h5>Ботулинотерапия</h5>
        <p class="content">Введение нейропротеина в ткани помогает расслабить часть мышечных волокон , из-за сокращения которых и появляются мимические заломы и морщины.<br>

           <span class="newStr"><b>Показания:</b> морщины шеи, подбородка, губ (кисетный морщины), спинки носа, уголков глаз «гусиные лапки» при смехе,  горизонтальные морщины на лбу и мимические межбровья, при нахмуривании , десневая  улыбка.
            
            </span></p>

    </div>
    <div class="col-12 col-md-6">
        <div class="rectphoto right" style="background-color: #D8DCDD ;">
            <img src="./img/Rectangle 16.jpg" alt="#" class="imgs" style="right: 100px;">
    </div>
    </div>
</div>

<div class="row">

    <div class="col-12 col-md-6">
        <div class="col-12 rectphoto left" style="background-color:#C1C9D0;">
            <img src="./img/Rectangle 18.jpg" alt="#" class="imgs" style="left: 100px;">
    </div>
    </div>

    <div class="col-12 col-md-6 cont">
        <h5>Ботулинотерапия</h5>
        <p class="content">Введение нейропротеина в ткани помогает расслабить часть мышечных волокон , из-за сокращения которых и появляются мимические заломы и морщины.<br>

           <span class="newStr"><b>Показания:</b> морщины шеи, подбородка, губ (кисетный морщины), спинки носа, уголков глаз «гусиные лапки» при смехе,  горизонтальные морщины на лбу и мимические межбровья, при нахмуривании , десневая  улыбка.
            
            </span></p>

    </div>
  

</div>

<div class="row">
  <div class="col-12 col-md-6 cont">
      <h5>Ботулинотерапия</h5>
      <p class="content">Введение нейропротеина в ткани помогает расслабить часть мышечных волокон , из-за сокращения которых и появляются мимические заломы и морщины.<br>

         <span class="newStr"><b>Показания:</b> морщины шеи, подбородка, губ (кисетный морщины), спинки носа, уголков глаз «гусиные лапки» при смехе,  горизонтальные морщины на лбу и мимические межбровья, при нахмуривании , десневая  улыбка.
          
          </span></p>

  </div>
  <div class="col-12 col-md-6">
      <div class="rectphoto right" style="background-color: #E6DDDE;">
          <img src="./img/Rectangle 20.jpg" alt="#" class="imgs" style="right: 100px;">
  </div>
  </div>
</div>

</div>
   </section>

   <section id="price">
<div class="container-fluid">
<div class="row mt-5">
<div class="col-12 col-md-6 d-flex" style="background-color: #D8DCDD;justify-content: center;">
<div class="col py-3" style="width: 80%; height: 80%;">
  <h5 style="text-align: center;">Косметику, которую мы используем:</h5>
 <p class="content">Косметические средства Dr. Spiller созданы на основе единственной в мире запатентованной ламеллярной эмульсии, которая по составу повторяет
    строение естественных барьерных структур здоровой кожи.</p>
    
    <ul>
      <li class="headLi">Решают следующие проблемы:</li>
      <li>преждевременное старение и антивозрастной уход </li>
      <li>повышенная чувствительность, купероз, розация</li>
      <li>угревая болезнь и её последствия</li>
      <li>обезвоженность</li>
      <li>гиперпигментация</li>

    </ul>
</div>
</div>

<div class="col-12 col-md-6" style="background-image:url(./img/Rectangle\ 8.jpg);background-position: center center;background-size:cover; min-height: 50vh;">
 
 


</div>


</div>


</div>

 

   <div class="container">
     <div class="row mt-4">
       <div class="col-12">
         <h2 style="margin-bottom: 3rem;margin-top:2rem;font-weight: 600;">Прайс</h2>
<div class="window">
  <p class="nameOfservice">класическая косметология</p>
  <div class="but1"></div>
  <ul class="pricesServices">
    <li>Процедура глубокого очищения лица на косметике <span style="font-size: 1.2rem;"">Holy Land</span> <b>550</b></li>
    <li>Процедура глубокого очищения лица на косметике <span style="font-size: 1.2rem;">Dr. Spiller</span> <b>770</b></li>
  </ul>
</div>
<div class="window">
  <p class="nameOfservice">Контурная пластика</p>
  <div class="but1"></div>
  <ul class="pricesServices">
    <li>Процедура глубокого очищения лица на косметике <span style="font-size: 1.2rem;">Holy Land</span> <b>550</b></li>
    <li>Процедура глубокого очищения лица на косметике <span style="font-size: 1.2rem;">Dr. Spiller</span> <b>770</b></li>
  </ul>
</div>
<div class="window">
  <p class="nameOfservice">Биоревитализация</p>
  <div class="but1"></div>
  <ul class="pricesServices">
    <li>Процедура глубокого очищения лица на косметике <span style="font-size: 1.2rem;">Holy Land</span> <b>550</b></li>
    <li>Процедура глубокого очищения лица на косметике <span style="font-size: 1.2rem;">Dr. Spiller</span> <b>770</b></li>
  </ul>
</div>
<div class="window">
  <p class="nameOfservice">Мезотерапия</p>
  <div class="but1"></div>
  <ul class="pricesServices">
    <li>Процедура глубокого очищения лица на косметике <span style="font-size: 1.2rem;">Holy Land</span> <b>550</b></li>
    <li>Процедура глубокого очищения лица на косметике <span style="font-size: 1.2rem;">Dr. Spiller</span> <b>770</b></li>
  </ul>
</div>
<div class="window">
  <p class="nameOfservice">Ботулинотерапия</p>
  <div class="but1"></div>
  <ul class="pricesServices">
    <li>Процедура глубокого очищения лица на косметике <span style="font-size: 1.2rem;">Holy Land</span> <b>550</b></li>
    <li>Процедура глубокого очищения лица на косметике <span style="font-size: 1.2rem;">Dr. Spiller</span> <b>770</b></li>
  </ul>
</div>
<div class="window">
  <p class="nameOfservice">Лечение гипергидроза</p>
  <div class="but1"></div>
  <ul class="pricesServices">
    <li>Процедура глубокого очищения лица на косметике <span style="font-size: 1.2rem;">Holy Land</span> <b>550</b></li>
    <li>Процедура глубокого очищения лица на косметике <span style="font-size: 1.2rem;">Dr. Spiller</span> <b>770</b></li>
  </ul>
</div>
<div class="window">
  <p class="nameOfservice">Аппаратные методики</p>
  <div class="but1"></div>
  <ul class="pricesServices">
    <li>Процедура глубокого очищения лица на косметике <span style="font-size: 1.2rem;">Holy Land</span> <b>550</b></li>
    <li>Процедура глубокого очищения лица на косметике <span style="font-size: 1.2rem;">Dr. Spiller</span> <b>770</b></li>
  </ul>
</div>
<div class="window"></div>
       </div>
     </div>
   </div>
   </section>

   <section id="otzyv">
<div class="container">
<div class="row" style="margin-top: 5rem;">
<div class="col">
<div class="circle"></div>
<p style="font-size: 2.5rem; font-weight: 400;">1,000+ довольных клиентов </p>
</div>

</div>

</div>

   </section>

   <div class="container">
<div class="row" style="margin-top: 1.5rem;">

  <div class="col col-md-3 review">
    <div class="card text-left p-3" style="min-height: 13rem;">
      <div class="photoReviews"><img src="./icons/Oval (2).png" alt="#"></div>
      <blockquote class="blockquote mb-0">
        <p style="font-size: 1rem;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat.</p>
        <footer class="blockquote-footer">
          <small>
            - @thepatwalls
          </small>
        </footer>
      </blockquote>
    </div>
  </div>
  <div class="col-6 col-md-3 review">
    <div class="card text-left p-3" style="min-height: 13rem;">
      <div class="photoReviews"><img src="./icons/Oval.png" alt="#"></div>
      <blockquote class="blockquote mb-0">
        <p style="font-size: 1rem;">Lorem , consectetur adipiscing elit. Integer posuere erat.</p>
        <footer class="blockquote-footer">
          <small>
            - @thepatwalls
          </small>
        </footer>
      </blockquote>
    </div>
  </div>
  <div class="col-6 col-md-3 review">
    <div class="card text-left p-3" style="min-height: 13rem;">
      <div class="photoReviews"><img src="./icons/Oval (5).png" alt="#"></div>
      <blockquote class="blockquote mb-0">
        <p style="font-size: 1rem;">Lorem ipsum dolor sit amet,  elit. Integer posuere erat.</p>
        <footer class="blockquote-footer">
          <small>
            - @thepatwalls
          </small>
        </footer>
      </blockquote>
    </div>
  </div>
  <div class="col-6 col-md-3 review">
    <div class="card text-left p-3" style="min-height: 13rem;">
      <div class="photoReviews"><img src="./icons/Oval (4).png" alt="#"></div>
      <blockquote class="blockquote mb-0">
        <p style="font-size: 1rem;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. erat.</p>
        <footer class="blockquote-footer">
          <small>
            - @thepatwalls
          </small>
        </footer>
      </blockquote>
    </div>
  </div>

</div>

  <div class="col-12 text-center" style="margin-top: 3rem;">
    <button class="makeRew" data-target="#winModall" data-toggle="modal">Оставить отзыв</button>
  </div>
   </div>

   <section id="navcontacts">
<div class="container-fluid">
<div class="row">
<div class="col">
  <form action="hello.php" method="post" id="myForm" style="opacity: 100%;">
<h5 style="padding-bottom: 0;">Вы можете оставить отзыв или задать вопрос</h5>
<p style="font-size: 0.8rem;font-weight: 400;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus </p>
<div class="col-12 flex-md-row col-md-12 d-flex flex-column" style="justify-content: space-around;">
<div class="con">
<div class="namesOfForm">Ваше имя<br>
<input type="text" required class="inpName" name="name">
</div>
<div class="namesOfForm">Ваш номер телефона<br>
  <input type="number" required class="inpPhone" placeholder="+380" name="phone">
</div>
</div>
<div class="namesOfFormArea">Коментарии<br>
  <textarea placeholder="Интересует контурная пластика губ..." required name="massage" id="massage" cols="30" rows="5"></textarea>
</div>
</div>
<div class="submit">
<input type="submit" class="makeRew" id="submit" value="Отправить">
</div>
</form>



</div>


</div>
</div>
   </section>
   <footer>
<div class="container-fluid">
<div class="row" style="position: relative;">
<div class="col-12" style="height: 130px;background-color: #E6DDDE;">
 <div class="yourCompany" style="font-size: .7rem;font-weight: 500;">©2021 Yourcompany</div> 
 <div class="doctor">IRINA.BEAUTY</div>

<nav>
  <ul class="footerMenu">
    <li><a href="#navabout">О Докторе</a></li>
    <li><a href="#navportfolio">Портфолио</a></li>
    <li><a href="#navservices">Услуги</a></li>
    <li><a href="#navcontacts">Контакты</a></li>
  </ul>
</nav>


<a href="https://www.facebook.com/" target="_blank" id="facebook"><img src="./icons/Icon/Social/Path.svg" alt="#"></a>

</div>

</div>

</div>

   </footer>
                  

   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
   <script src=" https://code.jquery.com/jquery-3.3.1.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="script.js"></script>
  </body>
</html>