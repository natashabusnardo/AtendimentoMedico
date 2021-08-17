<!DOCTYPE html>
<html lang="pt-br">
<head>
</head>
<body>
    <header>
        <?php include 'menu.php'; ?>
    </header>
    <main>
        <div class="container-fluid">
            <div id="mainSlider" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#mainSlider" data-slide-to="0" class="active"></li>
                    <li data-target="#mainSlider" data-slide-to="1"></li>
                    <li data-target="#mainSlider" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src ="../img/banner-home-1.png" class="d-block w-100" alt="Atendimentos">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Alta tecnologia</h2>
                            <p>Médicos especialistas a um clique de distância!</p>
                            <a href="view/login.php" class="main-btn">Login</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src ="../img/banner-home-2.jpg" class = "d-block w-100" alt="Portal Médico">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Portal médico</h2>
                            <p>Acesse o portal para verificar seu histórico de atendimentos.</p>
                            <a href="view/login.php" class="main-btn">Login</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src ="../img/banner-home-3.jpg" class = "d-block w-100" alt="Portal do Paciente">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Portal do Paciente</h2>
                            <p>Acesse o portal para verificar seu histórico de atendimentos.</p>
                            <a href="view/login.php" class="main-btn">Login</a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#mainSlider" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#mainSlider" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div id="about-area">
        <div class="container">
            <div class="row">
              <div class="col-12"> 
                <h3 class="main-title">Sobre nós</h3>
              </div>
              <div class="col-md-6">
                <img class="img-fluid" src="../img/sobre.png" alt="Agência hDC">
              </div>
              <div class="col-md-6">
                <h3 class="about-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
                <p>Curabitur sed turpis quis elit malesuada imperdiet.</p>
                <p>Donec finibus a lorem in fringilla. Suspendisse eget justo lectus.</p>
                <p>Sed non ex a massa auctor ultricies id ullamcorper orci. Etiam aliquam iaculis pretium.</p>
                <p>Veja outros diferenciais:</p>
                <ul id="about-list">
                  <li><i class="fas fa-check"></i> Phasellus laoreet ipsum ac orci egestas, vehicula vehicula turpis fermentum</li>
                  <li><i class="fas fa-check"></i> Nunc eget consequat velit</li>
                  <li><i class="fas fa-check"></i> Aliquam erat volutpat</li>
                  <li><i class="fas fa-check"></i> In eget placerat mi</li>
                  <li><i class="fas fa-check"></i> In et hendrerit arcu</li>
                </ul>
              </div>
            </div>
          </div>
      </div>
    </main>
    <!-- Rodapé -->
  <footer>
    <div id="contact-area">
      <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h3 class="main-title">Entre em contato conosco</h3>
            </div>
            <div class="col-md-4 contact-box">
              <i class="fas fa-phone"></i>
              <p><span class="contact-tile">Ligue para:</span> (66)66666-6666</p>
              <p><span class="contact-tile">Horários:</span> 8:00 - 19:00</p>
            </div>
            <div class="col-md-4 contact-box">
              <i class="fas fa-envelope"></i>
              <p><span class="contact-tile">Envie um email:</span> natashabusnardo@gmail.com</p>
            </div>
            <div class="col-md-4 contact-box">
              <i class="fas fa-map-marker-alt"></i>
              <p><span class="contact-tile">Venha tomar um café:</span> Rua Lorem Ipsum - 1314</p>
            </div>
            <div class="col-md-6" id="msg-box">
              <p>Ou nos deixe uma mensagem:</p>
            </div>
            <div class="col-md-6" id="contact-form">
              <form action="">
                <input type="text" class="form-control" placeholder="E-mail" name="email">
                <input type="text" class="form-control" placeholder="Assunto" name="subject">
                <textarea class="form-control" rows="3" placeholder="Sua mensagem..." name="message"></textarea>
                <input type="submit" class="main-btn">
              </form>
            </div>
          </div>
      </div>
    </div>
    <div id="copy-area">
      <div class="container">
        <div class="row">
            <div class="col-md-12">
              <p>Desenvolvido por Natasha Busnardo</a> &copy; 2021</p>
            </div>
        </div>
      </div>
    </div>
  </footer>
    <script src="js/scripts.js"></script>   
</body>
</html>