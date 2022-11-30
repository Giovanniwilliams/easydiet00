<?php
    //init_set('display_errors',0);
    error_reporting(0);
	include("ConexaoC.php");
	$msg=" ";
	$rows="";
	$msgCadastrado = " ";
 
	$msgCadastroErro = " ";

	
	$quantidade1 = " ";
	$quantidade2 = " ";
	$quantidade3 = " ";
	$quantidade4 = " ";
	$quantidade5 = " "; 
	$quantidade6 = " ";
	$quantidade7 = " ";
	$quantidade8 = " ";
	$quantidade9 = " ";
	
    $total = " ";
    $total2 = " ";
    $total3 = " ";

  

		if($_SERVER["REQUEST_METHOD"]==="POST"){    
			try    {        

			$quantidade1 = $_POST["quantidade1"]; 
			$quantidade2 = $_POST["quantidade2"];
			$quantidade3 = $_POST["quantidade3"];
			$quantidade4 = $_POST["quantidade4"];
			$quantidade5 = $_POST["quantidade5"];
			$quantidade6 = $_POST["quantidade6"];
			$quantidade7 = $_POST["quantidade7"];
			$quantidade8 = $_POST["quantidade8"];
			$quantidade9 = $_POST["quantidade9"];
			
			$consulta = $pdo->query("SELECT * FROM dados WHERE alimento = 'Arroz'");
	        $consulta->execute();
	        
	        $consulta2 = $pdo->query("SELECT * FROM dados WHERE alimento = 'Frango Grelhado'");
	        $consulta2->execute();
	
	        $consulta3 = $pdo->query("SELECT * FROM dados WHERE alimento = 'Feijão'");
	        $consulta3->execute();
	        
	        $consulta4 = $pdo->query("SELECT * FROM dados WHERE alimento = 'Batata'");
	        $consulta4->execute();
	        
	        $consulta5 = $pdo->query("SELECT * FROM dados WHERE alimento = 'Frango Grelhado'");
	        $consulta5->execute();
	
	        $consulta6 = $pdo->query("SELECT * FROM dados WHERE alimento = 'Feijão'");
	        $consulta6->execute();
	        
	        $consulta7 = $pdo->query("SELECT * FROM dados WHERE alimento = 'Macarrão'");
	        $consulta7->execute();
	        
	        $consulta8 = $pdo->query("SELECT * FROM dados WHERE alimento = 'Filé de Pescada'");
	        $consulta8->execute();
	        
	        $consulta9 = $pdo->query("SELECT * FROM dados WHERE alimento = 'Batata'");
	        $consulta9->execute();
	        
	        
	     while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)){ 
	
		 
		     $quantidadeA = $linha['energia'];
		
       }
         while ($linha = $consulta2->fetch(PDO::FETCH_ASSOC)){ 
	
		 
		     $quantidadeB = $linha['energia'];
		
       }
       while ($linha = $consulta3->fetch(PDO::FETCH_ASSOC)){ 
	
		 
		     $quantidadeC = $linha['energia'];
		
       }
       
        while ($linha = $consulta4->fetch(PDO::FETCH_ASSOC)){ 
	
		 
		     $quantidadeD = $linha['energia'];
		
       }
       
       while ($linha = $consulta5->fetch(PDO::FETCH_ASSOC)){ 
	
		 
		     $quantidadeE = $linha['energia'];
		
       }
       
       while ($linha = $consulta6->fetch(PDO::FETCH_ASSOC)){ 
	
		 
		     $quantidadeF = $linha['energia'];
		
       }
       
       while ($linha = $consulta7->fetch(PDO::FETCH_ASSOC)){ 
	
		 
		     $quantidadeG = $linha['energia'];
		
       }
       
       while ($linha = $consulta8->fetch(PDO::FETCH_ASSOC)){ 
	
		 
		     $quantidadeH = $linha['energia'];
		
       }
       
       while ($linha = $consulta9->fetch(PDO::FETCH_ASSOC)){ 
	
		 
		     $quantidadeI = $linha['energia'];
		
       }
			
		$x =(($quantidade1*$quantidadeA)/100);
		$z =(($quantidade2*$quantidadeB)/100);
		$y =(($quantidade3*$quantidadeC)/100);
	    $total =$x+$y+$z;
	    
	    $x2 =(($quantidade4*$quantidadeD)/100);
	    $y2 =(($quantidade5*$quantidadeE)/100);
	    $z2 =(($quantidade6*$quantidadeF)/100);
	    $total2 =$x2+$y2+$z2;
	    
	    $x3 =(($quantidade7*$quantidadeG)/100);
	    $y3 =(($quantidade8*$quantidadeH)/100);
	    $z3 =(($quantidade9*$quantidadeI)/100);
	    $total3 =$x3+$y3+$z3;
			       
	    
				}   
						 catch(PDOException $e)    
						 {        
						 	$msgCadastroErro= "<span id='error' style='color: red;'>O cadastro não foi efetivado!</span>";    
						 }}


             
	?>
<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>EasyDiet</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
  <div class="hero_area sub_pages">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
          <a class="navbar-brand" href="index.html">
            <img src="images/logo.png" alt="" /><span>
              EasyDiet
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="fruit.html"> Dietas</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="service.html"> Serviços </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.html">Contato</a>
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
              </form>
            </div>
            <div class="quote_btn-container ml-0 ml-lg-4 d-flex justify-content-center">
              <a href="">
                Agende uma consulta
              </a>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->

  </div>


  <!-- fruits section -->

  <section class="fruit_section layout_padding-top">
     <div class="container">
      <h2 class="custom_heading">Dietas</h2>
            
            <div class="accordion-body">
                            <form class="row g-3 needs-validation" method="post"">
                                
<?php								
	$consulta = $pdo->query("SELECT * FROM dados WHERE alimento = 'Arroz'");
	$consulta->execute();
	
	$consulta2 = $pdo->query("SELECT * FROM dados WHERE alimento = 'Frango Grelhado'");
	$consulta2->execute();
	
	$consulta3 = $pdo->query("SELECT * FROM dados WHERE alimento = 'Feijão'");
	$consulta3->execute();
	?>
	<form method ="post"">
	<div>
    <p>Refeiçao 1</p><br><br>
		<?php while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)){ ?>
		<br>
		    <?php echo "{$linha['alimento']}<br />";
		    $quantidade = $linha['energia'];
		    
		    ?>
			<label for="quantidade">Quantidade (g) :</label>
            <input type="number" id="quantidade1" name="quantidade1" min="100" max="500">
            
         <?php } ?> 
        <?php while ($linha = $consulta2->fetch(PDO::FETCH_ASSOC)){ ?>
		<br>
		    <?php echo "{$linha['alimento']}<br />"; ?>
			<label for="quantidade">Quantidade (g) :</label>
            <input type="number" id="quantidade" name="quantidade2" min="100" max="500">
											
   <?php } ?>
   
   <?php while ($linha = $consulta3->fetch(PDO::FETCH_ASSOC)){ ?>
		<br>
		    <?php echo "{$linha['alimento']}<br />"; ?>
			<label for="quantidade">Quantidade (g) :</label>
            <input type="number" id="quantidade" name="quantidade3" min="100" max="500">
											
   <?php } ?>
   	</div>
   	
   	<div>
   	<?php								
	$consulta4 = $pdo->query("SELECT * FROM dados WHERE alimento = 'Batata'");
	$consulta4->execute();
	
	$consulta5 = $pdo->query("SELECT * FROM dados WHERE alimento = 'Frango Grelhado'");
	$consulta5->execute();
	
	$consulta6 = $pdo->query("SELECT * FROM dados WHERE alimento = 'Feijão'");
	$consulta6->execute();
	
	?>
    <p>Refeiçao 2</p><br><br>
		<?php while ($linha = $consulta4->fetch(PDO::FETCH_ASSOC)){ ?>
		<br>
		    <?php echo "{$linha['alimento']}<br />";
		   
		    ?>
			<label for="quantidade">Quantidade (g) :</label>
            <input type="number" id="quantidade4" name="quantidade4" min="0" max="500">
            
         <?php } ?> 
        <?php while ($linha = $consulta5->fetch(PDO::FETCH_ASSOC)){ ?>
		<br>
		    <?php echo "{$linha['alimento']}<br />"; ?>
			<label for="quantidade">Quantidade (g) :</label>
            <input type="number" id="quantidade5" name="quantidade5" min="0" max="500">
											
   <?php } ?>
   
   <?php while ($linha = $consulta6->fetch(PDO::FETCH_ASSOC)){ ?>
		<br>
		    <?php echo "{$linha['alimento']}<br />"; ?>
			<label for="quantidade">Quantidade (g) :</label>
            <input type="number" id="quantidade6" name="quantidade6" min="0" max="500">
											
   <?php } ?>
   	</div>
   	
   	<?php								
	$consulta7 = $pdo->query("SELECT * FROM dados WHERE alimento = 'Macarrão'");
	$consulta7->execute();
	
	$consulta8 = $pdo->query("SELECT * FROM dados WHERE alimento = 'Filé de Pescada'");
	$consulta8->execute();
	
	$consulta9 = $pdo->query("SELECT * FROM dados WHERE alimento = 'Batata'");
	$consulta9->execute();
	?>
	<form method ="post"">
	<div>
    <p>Refeiçao 3</p><br><br>
		<?php while ($linha = $consulta7->fetch(PDO::FETCH_ASSOC)){ ?>
		<br>
		    <?php echo "{$linha['alimento']}<br />";
		    $quantidade = $linha['energia'];
		    
		    ?>
			<label for="quantidade">Quantidade (g) :</label>
            <input type="number" id="quantidade1" name="quantidade7" min="100" max="500">
            
         <?php } ?> 
        <?php while ($linha = $consulta8->fetch(PDO::FETCH_ASSOC)){ ?>
		<br>
		    <?php echo "{$linha['alimento']}<br />"; ?>
			<label for="quantidade">Quantidade (g) :</label>
            <input type="number" id="quantidade" name="quantidade8" min="100" max="500">
											
   <?php } ?>
   
   <?php while ($linha = $consulta9->fetch(PDO::FETCH_ASSOC)){ ?>
		<br>
		    <?php echo "{$linha['alimento']}<br />"; ?>
			<label for="quantidade">Quantidade (g) :</label>
            <input type="number" id="quantidade" name="quantidade9" min="100" max="500">
											
   <?php } ?>
   	</div>
   	
                                                
                                                
                                            <div class="forn-row">                    
                                                <?php                    
                                                    echo $msg;                    
                                                                
                                                    echo $msgCadastroErro;                    
                                                ?>                
                                            </div>

                                
                                                <div class="col-12"><br><br>
                                                <button class="btn btn-primary w-100" type="submit" ">Cadastrar</button>
                                                </div>
                                                <br>
                                            <?php 
                                            if($_SERVER["REQUEST_METHOD"]==="POST"){    
			                                    try    { echo "Total de Calorias da Refeição 1: ";
			                                             echo $total;
			                                             ?><br>
			                                             <?php
			                                             echo "Total de Calorias da Refeição 2: ";
			                                             echo $total2;
			                                             ?><br>
			                                             <?php
			                                             echo "Total de Calorias da Refeição 3: ";
			                                             echo $total3;
			                                        
			                                    }
			                                     catch(PDOException $e)    
                        						 {        
                        						 	$msgCadastroErro= "<span id='error' style='color: red;'>O cadastro não foi efetivado!</span>";    
                        						 }}

			                                    
			                                    ?>    
                                </form>  
                                
                               

                    </div

    </div>
  </section>

  <!-- end fruits section -->


  <section class="info_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <h5>
            Fruits
          </h5>
          <ul>
            <li>
              randomised
            </li>
            <li>
              words which
            </li>
            <li>
              don't look even
            </li>
            <li>
              slightly
            </li>
            <li>
              believable. If you
            </li>
            <li>
              are going to use
            </li>
            <li>
              a passage of
            </li>
            <li>
              Lorem Ipsum,
            </li>
          </ul>
        </div>
        <div class="col-md-3">
          <h5>
            Services
          </h5>
          <ul>
            <li>
              randomised
            </li>
            <li>
              words which
            </li>
            <li>
              don't look even
            </li>
            <li>
              slightly
            </li>
            <li>
              believable. If you
            </li>
            <li>
              are going to use
            </li>
            <li>
              a passage of
            </li>
            <li>
              Lorem Ipsum,
            </li>
          </ul>
        </div>
        <div class="col-md-3">
          <h5>
            List
          </h5>
          <ul>
            <li>
              randomised
            </li>
            <li>
              words which
            </li>
            <li>
              don't look even
            </li>
            <li>
              slightly
            </li>
            <li>
              believable. If you
            </li>
            <li>
              are going to use
            </li>
            <li>
              a passage of
            </li>
            <li>
              Lorem Ipsum,
            </li>
          </ul>
        </div>
        <div class="col-md-3">
          <div class="social_container">
            <h5>
              Follow Us
            </h5>
            <div class="social-box">
              <a href="">
                <img src="images/fb.png" alt="">
              </a>

              <a href="">
                <img src="images/twitter.png" alt="">
              </a>
              <a href="">
                <img src="images/linkedin.png" alt="">
              </a>
              <a href="">
                <img src="images/instagram.png" alt="">
              </a>
            </div>
          </div>
          <div class="subscribe_container">
            <h5>
              Subscribe Now
            </h5>
            <div class="form_container">
              <form action="">
                <input type="email">
                <button type="submit">
                  Subscribe
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>




  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>

  <script>
    // This example adds a marker to indicate the position of Bondi Beach in Sydney,
    // Australia.
    function initMap() {
      var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 11,
        center: {
          lat: 40.645037,
          lng: -73.880224
        },
      });

      var image = 'images/maps-and-flags.png';
      var beachMarker = new google.maps.Marker({
        position: {
          lat: 40.645037,
          lng: -73.880224
        },
        map: map,
        icon: image
      });
    }
  </script>
  <!-- google map js -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap">
  </script>
  <!-- end google map js -->
</body>

</html>