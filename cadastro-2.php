<?php
session_start();
	include("ConexaoC.php");
	$msg=" ";
	$rows="";
	$msgCadastrado = " ";
	$msgRAexiste = " ";
	$msgCadastroErro = " ";
	$msgSenha = " ";
	$email = "";
	$nome =  "";
	$senha =  "";
	$id="";
	$mensagem = "";

		if($_SERVER["REQUEST_METHOD"]==="POST"){    
			try    {        

			$nome = $_POST["nome"];        
			$telefone = $_POST["telefone"];        
			$email = $_POST["email"];        
			$mensagem = $_POST["mensagem"]; 
				if((trim($nome)=="")||(trim($email)=="")||(trim($telefone)=="")||(trim($mensagem)==""))        
					{            
						$msg= "<span id='warning' style='color: red;'>Preencha Todos os campos...</span>";        
					}               
				else{            
				         
							$stmt = $pdo->prepare("insert into contato(nome, telefone, email, mensagem) VALUES(:nome, :telefone, :email, :mensagem)");                
							$stmt->bindParam(':nome', $nome);                
							$stmt->bindParam(':telefone', $telefone);                
							$stmt->bindParam(':email', $email);   
							$stmt->bindParam(':mensagem', $mensagem);  
							$stmt->execute();                
							$msgCadastrado= "<span id='sucess' STYLE='color: chartreuse;'>Cadastrado</span>";            
						            
					             
						}
			    
			}   
			catch(PDOException $e)    
			    {        
			 	$msgCadastroErro= "<span id='error' style='color: red;'>O cadastro não foi efetivado!</span>";    
			 	}
	?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Cadastro</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.3.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/logo.png" alt="">
                  <span class="d-none d-lg-block">TrackingHorse</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Criar um conta</h5>
                    <p class="text-center small">Entre com seus dados</p>
                  </div>

                  <form class="row g-3 needs-validation" method="post"">
                    <div class="col-12">
                      <label for="yourName" class="form-label">Seu Nome Completo</label>
                      <input type="text" name="nome" class="form-control" id="yourName" required value="<?php echo $nome?>">
                      <div class="invalid-feedback">Digite seu nome</div>
                    </div>

                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Seu e-mail</label>
                      <input type="email" name="email" class="form-control" id="yourEmail" requiredvalue="<?php echo $email?>">
                      <div class="invalid-feedback">Entre com um e-mail valido</div>
                    </div>

            

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Senha</label>
                      <input type="password" name="senha" class="form-control" id="yourPassword" requiredvalue="<?php echo $senha?>">
                      <div class="invalid-feedback">Por favor coloque sua senha</div>
                    </div>

                  <div class="forn-row">                    
                      <?php                    
                        echo $msg;                    
                        echo $msgCadastrado;                    
                        echo $msgRAexiste;                    
                        echo $msgCadastroErro;                    
                        echo $msgSenha;                    
                      ?>                
                  </div>

    
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit" ">Criar conta</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Já é cadastrado? <a href="index.php">Login</a></p>
                    </div>
                  </form>

                </div>
              </div>

              <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>