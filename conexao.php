<?php
  $host = '127.0.0.1';
  $db = 'sistema_crud';
  $user = 'root';
  $pass = '';

  try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8",$user,$pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    echo "CONETOU 👌";
  } catch (PDOException $e) {
          http_response_code(500);
          echo json_encode(['erro' => 'falha na conexão com o banco de dados']);
          echo "NÃO CONETOU 😭";
          exit;
  }
 ?>
