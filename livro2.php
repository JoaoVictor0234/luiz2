<?php
class livro1 {
    var $genero;
    var $cor;
    var $corpagina;
    var $capa;
    var $paginas;
    var $aberto;
    function folhear() {
        if($this->aberto == true) {
            echo "<p>Nos maiores sorrisos encontramos as maiores dores. <p>";
        } else {
            echo "<p>é só um livro de comédia mesmo. <p>";
        }
    }
    function abrir() {
        $this->aberto = true;
    }
    function fechar() {
        $this->aberto = false;
    }
}
?>