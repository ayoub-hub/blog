<?php include("database.php")?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style type="text/css">
      form{ display:none;}
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Merienda&display=swap" rel="stylesheet">
	  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
	  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">
    <link href="blog.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <section id="Blog">
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
                 </ul>
              </div>
             </div>
        </nav>
      </section>
      <br>
      <br>
      <br>
      <section id="about">
            <?php
            
     
      $affiche_article="SELECT 
        article.id_article,
        article.titre_article,
        article.membre_article,
        article.corps_article,
        DATE_FORMAT(article.date_article,'%d/%m/%Y %H:%i:%S') as date_article,
        commentaire.totales_comm,
        DATE_FORMAT(commentaire.dernier_comm,'%d/%m/%Y %H:%i:%S'),
        commentaire.dernier_comm
      from article LEFT JOIN(
      select id_article,COUNT(id_comm) as totales_comm,
      MAX(date_comm) as dernier_comm
      from commentaire GROUP BY id_article
      )

      as commentaire ON article.id_article = commentaire.id_article";

      $resultaffiche=mysqli_query($db,$affiche_article);
      while($ligne=mysqli_fetch_assoc($resultaffiche))
   {
?>

     <div id="cree article" class="border border-primary" style=" padding:50px;" >
     <div method="POST">
     <?php echo "posted par ".$ligne['membre_article']; ?>  le:  <?php echo $ligne['date_article'];?> <br>
     <?php echo "Titre de l'article: ".$ligne['titre_article'];?><br/>
     <?php echo substr($ligne['corps_article'],0,50)."<br><br><button type='submit' name='va' class='btn btn-primary'>read more</button>
      <hr>**(".($ligne['totales_comm']== NULL ?0: $ligne['totales_comm']).") "?>
     <?php echo "<a href='#' id=".$ligne['id_article'].">commentaire(s) </a> dernier commentaire poste le :".($ligne['dernier_comm']== NULL ?' (aucun commentaire trouve)':$ligne['dernier_comm']) ;?><br>
     

</div>


     <div class="container">
                 leave a comment : <br>
                 <form method="POST" action="" id="form <?php echo $ligne['id_article']; ?>">  
                   <div class="form-groupe">
                     <label> Name: </label>
                     <input type="text" name="m" class="form-control" required>
                   </div>
                   
                   <div class="form-groupe">
                       commentaire :
                       <textarea name="comm" class="form-control" rows="10" required></textarea>
                  </div>
                  <button type="submit" name="execute" class="section-btn btn btn-primary">Submit</button>
                 </form>
                  <?php 
               if(isset($_POST['execute'])){
                   $membre=$_POST['m'];
                   $comment=$_POST['comm'];

                   $post1="INSERT INTO commentaire (membre_comm,corps_comm,date_comm) Values ('$membre','$comment',NOW())";
                   $result_post1=mysqli_query($db,$post1);
                   if($result_post1){
                       echo "insertion valider " ;
                   }else{
                       echo "insertion non valider";
                   }
               }
             ?>
             </div> 
    
   

</div>    

<?php } ?>

        </section>
      
      <section id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3 text-center">
                    <img  width="150px" height="100px" src="img/blog.jpg"> 
                    <p>Headquarter
                      212 Barrington Court
                      New York, ABC 1000
                      Copyright © 2020 Company Name  
                      Template by: PHPJabbers.com</p>
                </div>
                <div class="col-md-3 text-center">
                   <a href=""> Home</a><br> 
                   <a href="#"> blog</a><br>
                   <a href=""> Administrateur</a>
                </div>
                <div class="col-md-3 text-center">
                    <p>Quick Contact :</p>
                    <p> 
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M2.267.98a1.636 1.636 0 0 1 2.448.152l1.681 2.162c.309.396.418.913.296 1.4l-.513 2.053a.636.636 0 0 0 .167.604L8.65 9.654a.636.636 0 0 0 .604.167l2.052-.513a1.636 1.636 0 0 1 1.401.296l2.162 1.681c.777.604.849 1.753.153 2.448l-.97.97c-.693.693-1.73.998-2.697.658a17.47 17.47 0 0 1-6.571-4.144A17.47 17.47 0 0 1 .639 4.646c-.34-.967-.035-2.004.658-2.698l.97-.969z"/>
                        </svg>
                         +216 51163983  </p>
                      
                    <p> 
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
                        </svg>  
                    labidinabil321@gmail.com </p>     
                    <p>
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M12.166 8.94C12.696 7.867 13 6.862 13 6A5 5 0 0 0 3 6c0 .862.305 1.867.834 2.94.524 1.062 1.234 2.12 1.96 3.07A31.481 31.481 0 0 0 8 14.58l.208-.22a31.493 31.493 0 0 0 1.998-2.35c.726-.95 1.436-2.008 1.96-3.07zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                          <path fill-rule="evenodd" d="M8 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                        </svg>
                      rue mhamdia .. ayoub ghmougi</p>
                </div>
                <div class="col-md-3 text-center">
                   <p>Follow Us On : </p>
                   <p>  Facebook</p> 
                   <p> Instagram</p> 
                   <p> Twiter</p> 
                   <p> Linkedin</p> 

                </div>    

            </div>
        </div>
    </section>
    
      
                  




















    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js">
	</script> 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
	</script> 
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js">
	</script>
  <script src="jquery.js"></script>
    <script src="func.js"></script>

</body>
</html>      