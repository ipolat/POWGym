<!DOCTYPE html>
<html>
<?php 
  session_start();
  if(!$_SESSION['auth'])
  {header("location: uye.php"); 
  }
?>
    
<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>POWgym</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <span>
              PowGym
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                <li class="nav-item ">
                  <a class="nav-link" href="index.php">Ana sayfa <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="why.php"> Neden Biz? </a>
                </li>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="trainer.php"> Trainers</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="urun.php"> Ürünler</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.php"> İletişim</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="uye.php"> Üye Ol</a>
                </li>
              </ul>
              <div class="user_option">
                <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                  <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
                </form>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class=" slider_section position-relative">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
              <div class="col-lg-10 col-md-11 mx-auto">
                <div class="detail-box">
                  <div>
                    <h3>
                      Fitness
                    </h3>
                    <h2>
                      
                    </h2>
                    <h1>
                      PowGym
                    </h1>
                    <p>
                      Burada sağlığınızı korumayı, en deneyimli ve yetenekli hocalardan bizzat yüz yüze öğreneceksiniz.
                    </p>
                    <div class="">
                      <a href="#index">
                        Neden biz?
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="col-lg-10 col-md-11 mx-auto">
                <div class="detail-box">
                  <div>
                    <h3>
                      Fitness
                    </h3>
                    <h2>
                      Ürünler
                    </h2>
                    <h1>
                      PowGym
                    </h1>
                    <p>
                      En kaliteli fitness araçları ve protein destekleri için;
                    </p>
                    <div class="">
                      <a href="#urun">
                        Ürünler
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="col-lg-10 col-md-11 mx-auto">
                <div class="detail-box">
                  <div>
                    <h3>
                      Fitness
                    </h3>
                    <h2>
                      Trainers
                    </h2>
                    <h1>
                      PowGym
                    </h1>
                    <p>
                      Gelişmiş Trainer kadromuz ile başarınızı kovalamaya hazırız.
                    </p>
                    <div class="">
                      <a href="#trainer">
                          Trainers
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="col-lg-10 col-md-11 mx-auto">
                <div class="detail-box">
                  <div>
                    <h3>
                      Fitness
                    </h3>
                    <h2>
                      İletişim
                    </h2>
                    <h1>
                      PowGym
                    </h1>
                    <p>
                      İletişim de sağlıklı olmak kadar bir tık uzağınızda.
                    </p>
                    <div class="">
                      <a href="#iletisim">
                        İletişim
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="col-lg-10 col-md-11 mx-auto">
                <div class="detail-box">
                  <div>
                    <h3>
                      Fitness
                    </h3>
                    <h2>
                      Üye Ol
                    </h2>
                    <h1>
                      PowGym
                    </h1>
                    <p>
                      Daha fazla tembellik yok! Durmak yok! Ertelemek Yasak! Kendin için hemen üye ol.
                    </p>
                    <div class="">
                      <a href="#uye">
                        Üye ol / Giriş yap
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        </ol>
      </div>
    </section>
    <!-- end slider section -->
  </div>


  <!-- Us section -->

  <section class="us_section layout_padding" id="index">
    <div class="container" >
      <div class="heading_container">
        <h2>
          Neden biz?
        </h2>
      </div>

      <div class="us_container ">
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="box">
              <div class="img-box">
                <img src="images/u-1.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Kaliteli Ekipman
                </h5>
                <p>
                 Merak etmeyin ekipmanlarımız da en az sizin kadar kaliteli!
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="box">
              <div class="img-box">
                <img src="images/u-4.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Destek Öğün
                </h5>
                <p>
                  Biraz proteine kimse hayır diyemez değil mi?
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="box">
              <div class="img-box">
                <img src="images/u-2.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Sağlıklı bir Diyet Planı
                </h5>
                <p>
                 İşin diğer yarısı da yemede bitiyor.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="box">
              <div class="img-box">
                <img src="images/u-3.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Düzenli eğitim
                </h5>
                <p>
                  Hızınıza hız gücünüze güç katan bir program...
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end us section -->


  <!-- heathy section -->

  <section class="heathy_section layout_padding" id="urun">
    <div class="container">

      <div class="row">
        <div class="col-md-12 mx-auto">
          <div class="detail-box">
            <h2>
              SAĞLIKLI ZİHİN, SAĞLIKLI VÜCUT
            </h2>
            <p>
              Sağlıklı bir diyet, protein alımı, dakik bir program ve durmanın yasak olduğu bir düzen. Bunlar hem tam olarak bizim vaad ettiklerimiz olmakla birlikte
              hem de sizin sağlığınızın en büyük anahtarı. Bu yaz girebileceğiniz vücudu düşünün ve ertelemeye bir son verip kayıt olun. Unutmayın biz sizi düşünüyoruz.
            </p>
 
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- end heathy section -->

  <!-- trainer section -->

  <section class="trainer_section layout_padding" id="trainer">
    <div class="container">
      <div class="heading_container">
        <h2>
          Fitness Trainers
        </h2>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6 mx-auto">
          <div class="box">
            <div class="name">
              <h5>
                Smirth Jon
              </h5>
            </div>
            <div class="img-box">
              <img src="images/t1.jpg" alt="">
            </div>
            <div class="social_box">
              <a href="https://www.google.com/search?sca_esv=5fd2585313e87e19&sxsrf=ACQVn0-I42G9LzC5crYqtuET0vm5rNwH8w:1713397208508&q=merhaba+hocam&source=lnms&uds=AMwkrPvswS92c7VMQrYYRTqoTsMwsKzDG6LUa9A_fyBrFNr4vjX97JilpZ9S7RQNpPj_aXZabPw5iBC1dwJtEnrd0PIFBxCdFS-bLkHEmtoZmUFgugdOIO4BiN3caEVKrc1rI2igJE3tJZ7R0s7SjPdBYBl0TzfaXQ9ufoLupnFenp9LGoT2FTZ3qPngu-_ol8IzReYubd4D9wqzZEFKia-XEp3rW6DkCt0uMrwybQ3OBiOeLORsw4hXUNCYHc28-G8pwh9rIeuqN2wo3-HrNgrjx4OxRXn1AZY0cEMg2jinSLcgcR2tJd4JYbA8znUXNFXb_HfIT46-&sa=X&ved=2ahUKEwjBouP_tcqFAxV6Q_EDHblgD_UQ0pQJegQIEBAB&biw=1366&bih=641&dpr=1">
                <img src="images/facebook-logo.png" alt="">
              </a>
              <a href="https://www.google.com/search?q=nas%C4%B1ls%C4%B1n%C4%B1z+iyi+misiniz&oq=nas%C4%B1ls%C4%B1n%C4%B1z+iyi+misiniz&gs_lcrp=EgZjaHJvbWUqCggAEAAY4wIYgAQyCggAEAAY4wIYgAQyBwgBEC4YgAQyBwgCEAAYgAQyBwgDEAAYgAQyCAgEEAAYFhgeMggIBRAAGBYYHjIICAYQABgWGB7SAQgzNzgyajBqOagCALACAA&sourceid=chrome&ie=UTF-8">
                <img src="images/twitter.png" alt="">
              </a>
              <a href="https://www.google.com/search?q=afiyettesinizdir+in%C5%9Fallah&oq=afiyettesinizdir+in%C5%9Fallah&gs_lcrp=EgZjaHJvbWUyBggAEEUYOTIHCAEQABiABDIHCAIQABiABDIHCAMQABiABNIBCDYyMjRqMGo5qAIAsAIA&sourceid=chrome&ie=UTF-8">
                <img src="images/instagram-logo.png" alt="">
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mx-auto">
          <div class="box">
            <div class="name">
              <h5>
                Jane Doe
              </h5>
            </div>
            <div class="img-box">
              <img src="images/t2.jpg" alt="">
            </div>
            <div class="social_box">
              <a href="https://www.google.com/search?q=ben+de+iyiyim+hocam&oq=ben+de+iyiyim+hocam&gs_lcrp=EgZjaHJvbWUyBggAEEUYOTIHCAEQLhiABDIHCAIQABiABDIHCAMQABiABDIHCAQQABiABDIHCAUQABiABDIHCAYQABiABDIHCAcQABiABDIHCAgQABiABNIBCDM5MzFqMGo5qAIAsAIA&sourceid=chrome&ie=UTF-8">
                <img src="images/facebook-logo.png" alt="">
              </a>
              <a href="https://www.google.com/search?q=kusura+bakmay%C4%B1n&oq=kusura+bakmay%C4%B1n&gs_lcrp=EgZjaHJvbWUyBggAEEUYOTIHCAEQABiABDIHCAIQABiABDIHCAMQABiABDIHCAQQABiABDIHCAUQABiABDIHCAYQABiABDIHCAcQABiABDIHCAgQABiABDIHCAkQABiABNIBCTExMzk4ajBqOagCALACAA&sourceid=chrome&ie=UTF-8">
                <img src="images/twitter.png" alt="">
              </a>
              <a href="https://www.google.com/search?q=hepsine+koyacak+link+bulamad%C4%B1m&oq=hepsine+koyacak+link+bulamad%C4%B1m&gs_lcrp=EgZjaHJvbWUyBggAEEUYOdIBCDQ3MjlqMGo5qAIAsAIA&sourceid=chrome&ie=UTF-8">
                <img src="images/instagram-logo.png" alt="">
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mx-auto">
          <div class="box">
            <div class="name">
              <h5>
                John Doe
              </h5>
            </div>
            <div class="img-box">
              <img src="images/t3.jpg" alt="">
            </div>
            <div class="social_box">
              <a href="https://www.google.com/search?q=ben+de+b%C3%B6yle&sca_esv=5fd2585313e87e19&sxsrf=ACQVn085gVkNgPMtw0ptxlatioYAWR6bgQ%3A1713397543900&ei=J18gZuzINoeUxc8P9cSlgA8&udm=&ved=0ahUKEwis-Nmft8qFAxUHSvEDHXViCfAQ4dUDCBA&uact=5&oq=ben+de+b%C3%B6yle&gs_lp=Egxnd3Mtd2l6LXNlcnAiDWJlbiBkZSBiw7Z5bGUyBRAuGIAEMgUQABiABDIGEAAYFhgeMgYQABgWGB4yBhAAGBYYHjIGEAAYFhgeMgYQABgWGB4yBhAAGBYYHjIGEAAYFhgeMgYQABgWGB4yFBAuGIAEGJcFGNwEGN4EGOAE2AEBSKYVUJUBWMsDcAJ4AZABAJgB9QGgAeEEqgEFMC4yLjG4AQPIAQD4AQGYAgSgAooDwgIKEAAYsAMY1gQYR5gDAIgGAZAGCLoGBggBEAEYFJIHAzIuMqAH1Ro&sclient=gws-wiz-serp">
                <img src="images/facebook-logo.png" alt="">
              </a>
              <a href="https://www.google.com/search?q=bir+%C3%A7%C3%B6z%C3%BCm+buldum&oq=bir+%C3%A7%C3%B6z%C3%BCm+buldum&gs_lcrp=EgZjaHJvbWUyBggAEEUYOTIHCAEQIRigATIHCAIQIRigATIHCAMQIRifBTIHCAQQIRifBTIHCAUQIRifBTIHCAYQIRifBdIBCDQ4MTVqMGo5qAIAsAIA&sourceid=chrome&ie=UTF-8">
                <img src="images/twitter.png" alt="">
              </a>
              <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">
                <img src="images/instagram-logo.png" alt="">
              </a>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end trainer section -->


<!--- üye ol-->


  <section class="contact_section " id="uye">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 px-0">
          <div class="img-box">
            <img src="images/contact-img.jpg" alt="">
          </div>
        </div>
        <div class="col-lg-5 col-md-6">
          <div class="form_container pr-0 pr-lg-5 mr-0 mr-lg-2">
            <div class="heading_container">
              <h2>
                Üye olun
              </h2>
            </div>
            <form action="">
              <div>
                <input type="text" placeholder="Tam isim" />
              </div>
              <div>
                <input type="email" placeholder="Email" />
              </div>
              <div>
                <input type="password" placeholder="Şifre" />
              </div>
              <div>
                <input type="text" class="message-box" placeholder="Adres" />
              </div>
              <div>
                <input type="text" placeholder="Telefon numarası" />
              </div>
              <div class="d-flex ">
                <button>
                  Üye Ol
                </button>
                <button>
                  Giriş Yap
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- üye ol end-->

  <!-- contact section -->

  <section class="contact_section " id="iletisim">
    <div >
      <div>
        <div class="col-md-6 px-0">
          <div class="img-box">
            <img src="" alt="">
          </div>
        </div>
        <div class="col-lg-5 col-md-6">
          <div class="form_container pr-0 pr-lg-5 mr-0 mr-lg-2">
            <div class="heading_container">
              <h2>
                Bizimle iletişime geçin!
              </h2>
            </div>
            <form action="">
              <div>
                <input type="text" placeholder="isim" />
              </div>
              <div>
                <input type="email" placeholder="Email" />
              </div>
              <div>
                <input type="text" class="message-box" placeholder="Mesaj" />
              </div>
              <div class="d-flex ">
                <button>
                  Gönder
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>


  <?php         include 'partials/_footer.php'?>