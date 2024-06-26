<?php
class livro {
    public $genero;
    public $cor;
    public $corpagina;
    public $capa;
    public $paginas;
    public $aberto;
    /*metodos especiais (Getter e Setter) */

    public function __construct()
    {
        
    }
    public function getGenero1() {
        return $this->genero;
    }
    public function getCor1() {
        return $this->cor;
    }
    public function getCorpagina1() {
        return $this->corpagina;
    }
    public function getCapa1() {
        return $this->capa;
    }
    public function getPaginas1() {
        return $this->paginas;
    }
    
    public function setGenero($g) {
            $this ->genero = "horror";

    }
    public function setCor($c) {
            $this ->cor = "preta";

    }
    public function setCP($cp) {
            $this ->corpagina = "roxa";

    }
    public function setCapa($ca) {
            $this ->capa = "mole";

    }
    public function setPaginas($pa) {
            $this ->paginas = "698";

    }
    function folhear() {
        if($this->aberto == true) {
            echo "<p>O conhecimento é uma grande arma, perante a ignorância humana. <p>";
        } else {
            echo "<p>A ignorância nos permite viver sem o peso que ira nos esmagar. <p>";
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