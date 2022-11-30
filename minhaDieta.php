 <?php
	include("ConexaoC.php");
	$msg=" ";
	$rows="";
	$msgCadastrado = " ";

	$msgCadastroErro = " ";

	
	$proteina1 = " ";
	$proteina2 = " ";
	$proteina3 = " ";
	$carboidrato1 =  " ";
	$carboidrato2 =  " ";
	$carboidrato3 =  " ";
	
	$legumes1 =  " ";
	$legumes2 =  " ";
	$legumes1 =  " ";
  

		if($_SERVER["REQUEST_METHOD"]==="POST"){    
			try    {        

			$proteina1 = $_POST["proteina1"]; 
			$carboidrato1 = $_POST["carboidrato1"];   
			$legumes1 = $_POST["legumes1"];     
			$proteina2 = $_POST["proteina2"]; 
			$carboidrato2 = $_POST["carboidrato2"];   
			$legumes2 = $_POST["legumes2"]; 
			$proteina3 = $_POST["proteina3"]; 
			$carboidrato3 = $_POST["carboidrato3"];   
			$legumes3 = $_POST["legumes3"];
			       
					               
							$stmt = $pdo->prepare("insert into refeicao1(proteina, carboidrato, legumes) VALUES(:proteina1, :carboidrato1, :legumes1)");                
							$stmt->bindParam(':proteina1', $proteina1);                
							$stmt->bindParam(':carboidrato1', $carboidrato1);                
							$stmt->bindParam(':legumes1', $legumes1);    
							$stmt->execute(); 
							
							$stmt = $pdo->prepare("insert into refeicao2(proteina, carboidrato, legumes) VALUES(:proteina2, :carboidrato2, :legumes2)");                
							$stmt->bindParam(':proteina2', $proteina2);                
							$stmt->bindParam(':carboidrato2', $carboidrato2);                
							$stmt->bindParam(':legumes2', $legumes2);    
							$stmt->execute(); 
							
					    	$stmt = $pdo->prepare("insert into refeicao3(proteina, carboidrato, legumes) VALUES(:proteina3, :carboidrato3, :legumes3)");                
							$stmt->bindParam(':proteina3', $proteina3);                
							$stmt->bindParam(':carboidrato3', $carboidrato3);                
							$stmt->bindParam(':legumes3', $legumes3);    
							$stmt->execute(); 
							$msgCadastrado= "<span id='sucess' STYLE='color: chartreuse;'>Cadastrado</span>";            
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
                                
                                                
                                                <div><br><br>Refeição 1</div>
                                                <div class="col-12">

                                                <label class="form-label">Proteína</label>
                                                  <select class="form-select" aria-label="Default select example" name="proteina1">
                                        
                                                    <option value="Filet Mignon">Filet Mignon</option>
                                                    <option value="Frango">Frango</option>
                                                    <option value="Carne Moida">Carne Moida</option>
                                                  </select>
                                          
                                                </div>
                                                
                                                <div class="col-12">

                                                <label class="form-label">Carboidrato</label>
                                                  <select class="form-select" aria-label="Default select example" name="carboidrato1">
                                        
                                                    <option value="Arroz">Arroz</option>
                                                    <option value="Arroz Integral">Arroz Integral</option>
                                                    <option value="Macarrao">Macarrão</option>
                                                  </select>
                                          
                                                </div>
                                                
                                                <div class="col-12">

                                                <label class="form-label">Legumes</label>
                                                  <select class="form-select" aria-label="Default select example" name="legumes1">
                                        
                                                    <option value="mix1">Batata, Cenoura, Abobrinha</option>
                                                    <option value="mix2">Batata Doce</option>
                                                    <option value="mix3">Pure</option>
                                                  </select>
                                          
                                                </div>

                                                <div><br><br>Refeição 2</div>
                                                <div class="col-12">

                                                <label class="form-label">Proteína</label>
                                                  <select class="form-select" aria-label="Default select example" name="proteina2">
                                        
                                                    <option value="Filet Mignon">Filet Mignon</option>
                                                    <option value="Frango">Frango</option>
                                                    <option value="Carne Moida">Carne Moida</option>
                                                  </select>
                                          
                                                </div>
                                                
                                                <div class="col-12">

                                                <label class="form-label">Carboidrato</label>
                                                  <select class="form-select" aria-label="Default select example" name="carboidrato2">
                                        
                                                    <option value="Arroz">Arroz</option>
                                                    <option value="Arroz Integral">Arroz Integral</option>
                                                    <option value="Macarrao">Macarrão</option>
                                                  </select>
                                          
                                                </div>
                                                
                                                <div class="col-12">

                                                <label class="form-label">Legumes</label>
                                                  <select class="form-select" aria-label="Default select example" name="legumes2">
                                        
                                                    <option value="mix1">Batata, Cenoura, Abobrinha</option>
                                                    <option value="mix2">Batata Doce</option>
                                                    <option value="mix3">Pure</option>
                                                  </select>
                                          
                                                </div>
                                                
                                                <div><br><br>Refeição 3</div>
                                                <div class="col-12">

                                                <label class="form-label">Proteína</label>
                                                  <select class="form-select" aria-label="Default select example" name="proteina3">
                                        
                                                    <option value="Filet Mignon">Filet Mignon</option>
                                                    <option value="Frango">Frango</option>
                                                    <option value="Carne Moida">Carne Moida</option>
                                                  </select>
                                          
                                                </div>
                                                
                                                <div class="col-12">

                                                <label class="form-label">Carboidrato</label>
                                                  <select class="form-select" aria-label="Default select example" name="carboidrato3">
                                        
                                                    <option value="Arroz">Arroz</option>
                                                    <option value="Arroz Integral">Arroz Integral</option>
                                                    <option value="Macarrao">Macarrão</option>
                                                  </select>
                                          
                                                </div>
                                                
                                                <div class="col-12">

                                                <label class="form-label">Legumes</label>
                                                  <select class="form-select" aria-label="Default select example" name="legumes3">
                                        
                                                    <option value="mix1">Batata, Cenoura, Abobrinha</option>
                                                    <option value="mix2">Batata Doce</option>
                                                    <option value="mix3">Pure</option>
                                                  </select>
                                          
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