
<?php include 'partials/_header.php';
include "connection.php";



?>


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
            <form action="contact2.php" method="post">
              <div>
                <input type="text" placeholder="isim" name="namee"/>
              </div>
              <div>
                <input type="email" placeholder="Email" name="eposta"/>
              </div>
              <div>
                <input type="text" class="message-box" placeholder="Mesaj" name="textt" />
              </div>
              <div class="d-flex ">
                <button type="submit">
                  Gönder
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- end contact section -->

  </body>

</html>
<?php include 'partials/_footer.php'?>