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
    
    echo "<pre>";
    print_r($carac);
}
