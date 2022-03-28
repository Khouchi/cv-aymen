<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactez-moi !</title>
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>   
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">    

      <ul class="navbar-nav me-auto mb-2 mb-lg-0">


        
        <li class="nav-item">
            <a  class="nav-link active " aria-current="page" href="../index.html">Aymen CV </a>
          </li>



          <li class="nav-item">
            <a class="nav-link" href="../index.html">Langages & Formation </a>
          </li>



          <li class="nav-item">
            <a class="nav-link" href="../index.html">Parcours</a>
          </li>


    
      <li class="nav-item">
        <a class="nav-link" href="#contact">Contact</a>
      </li>
    </ul>
</div>
</div>
</nav>
</header>

    <div class="container">
        <div class="divider"></div>
        <div class="heading">
            <h2>Contactez-moi</h2>
        </div>
        <form id="contact-form" method="post" action="php/contact.php" role="form">
            <div class="row">
                <div class="col-lg-6">
                    <label for="firstname" class="form-label">Prénom <span class="blue">*</span></label>
                    <input id="firstname" type="text" name="firstname" class="form-control" placeholder="Votre prénom" >
                    <p class="comments"></p>
                </div>
                <div class="col-lg-6">
                    <label for="name" class="form-label">Nom <span class="blue">*</span></label>
                    <input id="name" type="text" name="name" class="form-control" placeholder="Votre Nom" ">
                    <p class="comments"></p>
                </div>
                <div class="col-lg-6">
                    <label for="email" class="form-label">Email <span class="blue">*</span></label>
                    <input id="email" type="email" name="email" class="form-control" placeholder="Votre Email" ">
                    <p class="comments"></p>
                </div>
                <div class="col-lg-6">
                    <label for="phone" class="form-label">Téléphone</label>
                    <input id="phone" type="tel" name="phone" class="form-control" placeholder="Votre Téléphone" ">
                    <p class="comments"></p>
                </div>
                <div>
                    <label for="message" class="form-label">Message <span class="blue">*</span></label>
                    <textarea id="message" name="message" class="form-control" placeholder="Votre Message" rows="8" ></textarea>
                    <p class="comments"></p>
                </div>
                <div>
                    <p class="blue"><strong>* Ces informations sont requises.</strong></p>
                </div>
                <div>
                    <input type="submit" class="button1" value="Envoyer">
                </div>    
            </div>
        </form>
    </div>
   <!-- footer -->

   <footer class="footer">
      <div class="divFooter" style="text-align: center;">
        <a href="#">Retour haut de page</a>
    </div>
        <div class="container text-center text-md-start mt-5">
          <!-- Grid row -->
          <div class="row mt-3">
            <!-- Grid column -->
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
              <!-- Content -->
              <h6 class="text-uppercase fw-bold mb-4">
                <i class="fas fa-gem me-3"></i>Profil
              </h6>
              <p>
                Je poursuis mon projet professionnel avec enthousiasme et 
                détermination, grâce à ma formation au centre ADRAR j’ai pu 
                acquérir une base solide dans les langages de programmation.
              </p>
            </div>
            

            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold mb-4">
                Langues
              </h6>
              <p>
                <a href="#!" class="text-reset">Anglais</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Allemand</a>
              </p>
              
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div id="contact" class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
              <p><i class="fas fa-home me-3"></i> Montpellier, France </p>
              <p>
                <i class="fas fa-envelope me-3"></i>
                khouchi-1991@outlook.fr
              </p>
              <p><i class="fas fa-phone me-3"></i> +33 789 013 383</p>
              <p><i class="fas fa-phone me-3"></i> +33 656 846 167</p>
            </div>
            <!-- Grid column -->
          </div>
          <!-- Grid row -->
        </div>
    </footer>
    <script src="https://kit.fontawesome.com/cb35c347cc.js" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>