<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$servidor = 'localhost';
$usuario = 'root';
$senha = '290578';
$banco = 'dbalmoxarife';
// Conecta-se ao banco de dados MySQL
$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);
// Caso algo tenha dado errado, exibe uma mensagem de erro
if (mysqli_connect_errno()) {
    echo "Problemas para conectar no banco. Verifique os dados";
    die();
    
}
echo "Conectado com sucesso";
?>
