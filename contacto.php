<?php 
 require_once 'template/header.php';
 ?>
  <main id="contacto">
    <div class="container">
      <h1>Contacto</h1>
      <div class="contact">
        <div class="contact-info contact-map">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1558.4929153412706!2d-54.678648339467195!3d-25.49777476608108!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94f685c8e9519d4f%3A0xe7491d848aec6d4e!2sPlaza%20City!5e0!3m2!1sen!2spy!4v1656191816203!5m2!1sen!2spy"
            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="contact-info contact-form">
          <h3>Ponte en contacto con nosotros</h3>
          <form>
            <div class="row">
              <div class="col">
                <div class="form-input">
                  <label for="name">Nombre:</label>
                  <input type="text">
                </div>
                <div class="form-input">
                  <label for="tel">Tel.:</label>
                  <input type="tel">
                </div>
              </div>
              <div class="col">
                <div class="form-input">
                  <label for="surname">Apellido:</label>
                  <input type="text">
                </div>
                <div class="form-input">
                  <label for="email">Email:</label>
                  <input type="email">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label for="mensaje">Mensaje:</label>
                <textarea name="mensaje" id="" cols="30" rows="10"></textarea>
              </div>
            </div>
            <input type="submit" value="Enviar" class="btn btn-2">
          </form>
        </div>
      </div>
      
      
    </div>
  </main>
<?php 
 require_once 'template/footer.php';
 ?>