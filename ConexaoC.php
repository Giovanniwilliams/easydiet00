<?php 
try {
  $pdo = new PDO('mysql:host=localhost;dbname=id19710069_easydiet4477', 'id19710069_thiago', '+7-dlm1}0iG833=?');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}

?>