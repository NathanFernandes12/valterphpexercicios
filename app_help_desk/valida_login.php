<?php 

$usuario_autenticado = false; 

$usuario_cadastrado = [
    [ 'email' => 'admin@senai.br', 
    'senha' => 12345
],
    [ 'email' => 'aluno@senai.br', 
    'senha' => "abcde"
],
    [ 'email' => 'suporte@senai.br', 
    'senha' => "1a2b3c"
],
]; 

foreach ($usuario_cadastrado as $user){
   if ( $user ['email'] == $_POST ['email'] && $user ['senha'] == $_POST ['senha'] ) { 
    $usuario_autenticado = true; 
   }
}

if ($usuario_autenticado == true) {
    header ('location: painel.php? '); 
} else {
    //echo "Usuário ou senha incorreto";
    header ('location: index.php? login= erro'); 
}


?>

    

