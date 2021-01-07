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
    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <link href="blog.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
 


    
  
    <section id="creer">
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
                    <a class="nav-link" href="compte.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                      <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    </svg></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="compte.php">logout</a>
                  </li>
                 </ul>
              </div>
             </div>
        </nav>
      </section>
      <br><br><br>
      <h1 style="text-align: center;">Blog Posts</h1>
      <br><br>

      <section id="creer">
        <div class="container" >
          <h1>Create a post:</h1>
           <form action="" method="POST" >
             <div class="form-groupe">
               <label> name: </label>
               <input type="text" name="n1" class="form-control" required >
             </div>
             <div class="form-groupe">
                <label> titre: </label>
                <input type="text" name="titre" class="form-control" required >
              </div>
             <div class="form-groupe">
               <label> Text: </label>
               <textarea name="contenu" class="form-control" rows="10" autocomplete="off" required></textarea>
            </div>
            <button type="submit" name="btpost" class="section-btn btn btn-primary">Submit</button>   
            

             
<?php 
               if(isset($_POST['btpost'])){
                   $name=$_POST['n1'];
                   $titre=$_POST['titre'];
                   $contenu=$_POST['contenu'];

                   $post="INSERT INTO article (membre_article,titre_article,corps_article,date_article) Values ('$name','$titre','$contenu',NOW())";
                   $result_post=mysqli_query($db,$post);
                   if($result_post){
                       echo "insertion valider " ;
                   }else{
                       echo "insertion non valider";
                   }
               }
             ?>
         </div>
            </form>
            
      



             

























     
      
                  

<!------------------------------------------cdkeditor--------------------------------->
             <script>
                CKEDITOR.replace( 'contenu' );
            </script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js">
    </script> 
  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
 
	</script> 
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js">
	</script>
</body>
</html>      