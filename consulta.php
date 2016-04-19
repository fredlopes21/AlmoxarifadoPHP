<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

echo 'Teste pagina consulta';

// Inclui o arquivo que faz a conexão ao banco de dados
require_once('conectaAlmox.php');

// Monta a consulta SQL para trazer as últimas 10 notícias ativas
$sql = 'SELECT * FROM tcontacorrente ';
    

// Executa a consulta OU mostra uma mensagem de erro
$resultado = $mysqli->query($sql) OR trigger_error($mysqli->error, E_USER_ERROR);

// Faz um loop, passando por todos os resultados encontrados
while ($noticia = $resultado->fetch_object()) {
  // Exibe a notícia dentro de um bloco HTML
  ?>

  <h2><?php echo $noticia->titulo; ?></h2>
  <?php echo $noticia->descricao; ?>

  [Leia mais &raquo;](noticia.php?id=<?php echo $noticia->id; ?>)


  <?php
} // while ($noticia = $resultado->fetch_object())

// Exibe o total de registros encontrados
echo "Registros encontrados: {$resultado->num_rows}
";

// Libera o resultado para liberar memória
$resultado->free();
?>