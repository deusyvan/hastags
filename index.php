<?php
try {
    $pdo = new PDO("mysql:dbname=blog;host=localhost","admin","admin");
} catch (PDOException $e) {
    echo "ERRO: ".$e->getMessage();
    exit;
}

$sql = "SELECT caracteristicas FROM usuarios";
$sql = $pdo->query($sql);
if ($sql->rowCount() > 0) {
    $lista = $sql->fetchAll();
    
    $carac = array();
    
    foreach ($lista as $usuario) {
        $palavras = explode(",", $usuario['caracteristicas']);
        foreach ($palavras as $palavra) {
            $palavra = trim($palavra);
            
            if (isset($carac[$palavra])) {
                $carac[$palavra]++;
            } else {
                $carac[$palavra] = 1;
            }
        }
    }
    
   $palavras = array_keys($carac);
   $contagens = array_values($carac);
   
   $maior = max($contagens);
   
   $tamanhos = array(11, 15, 20, 30);
   
   for ($i = 0; $i < count($palavras); $i++) {
       $n = $contagens[$i] / $maior;
       $h = ceil($n * count($tamanhos));
       //Temos um nr entre 1 e 4 e vamos exibir
       echo "<p style='font-size:".$tamanhos[$h-1]."px'>".$palavras[$i]."</p>";
   }
    
    
    
    
}







