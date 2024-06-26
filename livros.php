<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     require 'livro.php';
     $c1 = new livro;
     $c1 ->setGenero ("horror");
     $c1 ->setCor("preta");
     $c1 ->setCP("roxa");
     $c1-> setCapa("dura");
     $c1-> setPaginas(240);
    

     $c1->abrir();
     $c1->folhear();
     
     print_r($c1);
?>
<?php
    require 'livro2.php';
     echo "<br>";
     $c2 = new livro;
     $c2 ->getGenero1 ("korno");
     $c2 ->setCor("bege");
     $c2 ->setCP("amarela");
     $c2-> setCapa("dura");
     $c2-> setPaginas(240);
     $c2-> aberto == true;
     $c2->fechar();
     $c2->folhear();
     
     print_r($c2);
    ?>






























vc não viu nada da linha 28 à 30
</body>
</html>
