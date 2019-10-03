<!DOCTYPE html>
<html lang="en">
<head>
    <title><?= ucfirst($page) ?> - Rénaissance</title>
    <?php include_once 'views/includes/head.php'; ?>
</head>
<body>
    <!--header-->
    <?php include_once 'views/includes/header.php'; ?>
    <!--header-->

    <main  class="pt-3">
  <div class="main">
    <section class="signup">
      <!-- <img src="images/signup-bg.jpg" alt=""> -->
      <div class="container" id="container">
        <!-- Material form login -->
        <br><br><br><br><br>
        <div class="card">
          <h5 class="card-header white-text text-center py-4" style="background-color: #ffffff !important; color: #000000 !important;">
            <strong>Remplissez se formulaire correctement pour adhérer</strong>
          </h5>
          <!--Card content-->
          <div class="card-body px-lg-5 pt-0">
            <form class="text-center" style="color: #757575;" action="#!">
              <!-- Email -->
              <div class="row">
                <div class="col">
                  <div class="md-form">
                    <input type="text" id="fullname" class="form-control">
                    <label for="fullname">Nom & Prénom</label>
                  </div>
                </div>
                <div class="col">
                  <div class="md-form">
                    <input type="text" id="phone" class="form-control">
                    <label for="phone">Téléphone</label>
                  </div>
                </div>
              </div>
              
              <!-----ligne 2--->
              <div class="row">
                <div class="col">
                  <div class="md-form">
                    <input type="text" id="naissance" class="form-control">
                    <label for="naissance">Date de naissance</label>
                  </div>
                </div>
                <div class="col">
                  <div class="md-form">
                    <input type="email" id="email" class="form-control">
                    <label for="email">E-mail</label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="md-form">
                    <input type="text" id="domicile" class="form-control">
                    <label for="domicile">Domicile</label>
                  </div>
                </div>
                <div class="col">
                  <div class="md-form">
                    <input type="text" id="profession" class="form-control">
                    <label for="profession">Profession</label>
                  </div>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col">
                  <div class="md-form">
                    <input type="text" id="pays" class="form-control">
                    <label for="pays">Pays </label>
                  </div>
                </div>
                <div class="col">
                  <div class="md-form">
                    <input type="text" id="commune" class="form-control">
                    <label for="commune">Commune</label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="md-form">
                    <input type="text" id="ville" class="form-control">
                    <label for="ville">Ville</label>
                  </div>
                </div>
                <div class="col">
                  <div class="md-form">
                    <input type="text" id="quartier" class="form-control">
                    <label for="quartier">Quartier</label>
                  </div>
                </div>
              </div>
              <!-- Password -->
              <button class="btn btn-outline-blue-grey btn-block my-4 waves-effect z-depth-0" type="submit">Soumettre</button>
            </form>
            <!-- Form -->
            
          </div>
          
        </div>
        <!-- Material form login -->
      </div>
    </section>
    
  </div>
</main>
<br><br><br><br><br>
        

    <!--footer-->
    <?php include_once 'views/includes/footer.php'; ?>
    <!--footer-->
    <?php include_once 'views/includes/scripts.php'; ?>
</body>
</html>