
<?php include 'partials/_header.php';
include "connection.php";
?>
      
      
      
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
          <form action="uye2.php" method="post">  
          <div>
          <input type="text" name="username" placeholder="Tam isim" />
          </div>
         
          <div>
          <input type="email" name="email" placeholder="Email" />
          </div>
   
          <div>
          <input type="password" name="passwordd" placeholder="Şifre" />
          </div>

          <div>
          <input type="text" name="adress" class="message-box" placeholder="Adres" />
          </div>

          <div>
          <input type="text" name="phone" placeholder="Telefon numarası" />
          </div>

          <div class="d-flex ">
          <button>
          Üye Ol
          </button>
          <button>
          Giriş Yap
          </button>
        </form>
          </div>
          </div>
            </div>
            </div>
            </div>
            </section>
            <!-- üye ol end-->
            
            
            </body>
            
            </html>

<?php         include 'partials/_footer.php'?>