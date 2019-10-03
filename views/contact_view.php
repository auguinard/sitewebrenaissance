<!DOCTYPE html>
<html lang="en">
<head>
    <title><?= ucfirst($page) ?> - Rénaissance</title>
    <?php include_once 'views/includes/head.php'; ?>
    <?php include_once 'views/includes/headstyle.php'; ?> 
</head>
<body>
    <!--header-->
    <?php include_once 'views/includes/header.php'; ?>
    <!--header-->

              
      <section>
        <div class="">
          <img src="./assets/images/contact_us.png" style="width: 100%">
        </div>
      </section>

    
    <!--Main Layout-->
    <main>
      <div class="container-fluid mb-5">
        <!--Grid row-->
        <div class="row" style="margin-top: -100px;">
          <!--Grid column-->
          <div class="col-md-12 px-lg-5">
            <!--Card-->
            <div class="card pb-5 mx-md-3">
              <div class="card-body">
                
                <div class="container">
                  <section class="mb-4">
                    
                    <!--Section heading-->
                    <h2 class="h1-responsive font-weight-bold text-center my-4">Contactez-nous</h2>
                    <!--Section description-->
                    <p class="text-center w-responsive mx-auto mb-5">Avez-vous des questions? S'il vous plaît n'hésitez pas à nous contacter directement. Notre équipe reviendra vers vous au plus tard
                      quelques heures pour vous aider.</p>
                      
                      <div class="row">
                        
                        <!--Grid column-->
                        <div class="col-md-9 mb-md-0 mb-5">
                          <form id="contact-form" name="contact-form" action="mail.php" method="POST">
                            
                            <!--Grid row-->
                            <div class="row">
                              
                              <!--Grid column-->
                              <div class="col-md-6">
                                <div class="md-form mb-0">
                                  <input type="text" id="name" name="name" class="form-control">
                                  <label for="name" class="">Votre nom</label>
                                </div>
                              </div>
                              <!--Grid column-->
                              
                              <!--Grid column-->
                              <div class="col-md-6">
                                <div class="md-form mb-0">
                                  <input type="text" id="email" name="email" class="form-control">
                                  <label for="email" class="">Votre email</label>
                                </div>
                              </div>
                              <!--Grid column-->
                              
                            </div>
                            <!--Grid row-->
                            
                            <!--Grid row-->
                            <div class="row">
                              <div class="col-md-12">
                                <div class="md-form mb-0">
                                  <input type="text" id="subject" name="subject" class="form-control">
                                  <label for="subject" class="">Le sujet de votre message</label>
                                </div>
                              </div>
                            </div>
                            <!--Grid row-->
                            
                            <!--Grid row-->
                            <div class="row">
                              
                              <!--Grid column-->
                              <div class="col-md-12">
                                
                                <div class="md-form">
                                  <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                                  <label for="message">Votre message</label>
                                </div>
                                
                              </div>
                            </div>
                            <!--Grid row-->
                            
                          </form>
                          
                          <div class="text-center text-md-left">
                            <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Envoyer</a>
                          </div>
                          <div class="status"></div>
                        </div>
                        <!--Grid column-->
                        
                        <!--Grid column-->
                        <div class="col-md-3 text-center">
                          <ul class="list-unstyled mb-0">
                            <li><i class="fa fa-map fa-2x"></i>
                              <p>San Francisco, CA 94126, USA</p>
                            </li>
                            
                            <li><i class="fa fa-phone mt-4 fa-2x"></i>
                              <p>+ 01 234 567 89</p>
                            </li>
                            
                            <li><i class="fa fa-envelope mt-4 fa-2x"></i>
                              <p>contact@mdbootstrap.com</p>
                            </li>
                          </ul>
                        </div>
                        <!--Grid column-->
                        
                      </div>
                      
                    </section>
                    
                    
                    
                  </div>
                  <!--Grid column-->
                  
                </div>
                <!--Grid row-->
                
              </div>
              <!--/Card-->
            </div>
            <!--/Grid column-->
          </div>
          <!--/Grid row-->
        </div>
        
      </main>
      <!--Main Layout-->

    <!--footer-->
    <?php include_once 'views/includes/footer.php'; ?>
    <!--footer-->
    <?php include_once 'views/includes/scripts.php'; ?>
</body>
</html>