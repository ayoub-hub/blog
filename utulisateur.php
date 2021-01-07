<?php include("database.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Merienda&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">
    <link href="blog.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <!---------------------------------------------Navbar ---------------------------------->
    <section id="compte">
        <nav class="navbar navbar-expand-lg navbar-light fixed-top">
            <div class="container">
              <a class="navbar-brand" href="blog.html">Blog WebSite</a>
              <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbarSupportedContent" data-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto ">
                  <li class="nav-item">
                    <a class="nav-link " href="blog.html">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Administrateur</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="compte.html"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                      <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    </svg></a>
                  </li>
                 </ul>
              </div>
             </div>
        </nav>
      </section>
      <br>
      <br>
      <br>
      <br>
    <!-----------------------utulisateur------------------>
   <section id="utulisateur">
     <div class="container">
       <h1>S'incrire </h1>
        <form action="utulisateur.php" method="POST">
           <!-----display validation errro her----->
           <?php include('errors.php');?>
          <div class="form-groupe">
            <label> name: </label>
            <input type="text" name="username" class="form-control" value="<?php echo $username; ?>" >
          </div>
          <div class="form-groupe">
            <label> Email: </label>
            <input type="text" name="email" class="form-control" value="<?php echo $email; ?>"  >
          </div>
          <div class="form-groupe">
            <label> Mot de passe: </label>
            <input type="password" name="pass1" class="form-control" >
          </div>
          <div class="form-groupe">
            <label> Confirmez mot de passe: </label>
            <input type="password" name="pass2" class="form-control" >
          </div>
          <div class="form-groupe">
            <input type="submit" name="btlogin" value="register" > 
          </div>
        </form>
</div>
</section> 


















    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js">
	</script> 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
	</script> 
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js">
	</script>
</body>
</html>      