<?php

class tenis {
    public $tamanho;
    public $cor;
    public $marca;
    public $formato;
    public $modelo;

    public function Experimentartenis(){
        return "o tenis escolhido é:" .$this -> tenis;
    }
    public function amarrar(){

    }
    public function descalcar(){

    }
    public function alcar(){

    }
   
}

//pularlinha


class casa {
    public $tamanho;
    public $cor;
    public $endereco;
    public $numerodequartos;
    public $numerodeandares;

    public function morar(){

    }
    public function limpar(){

    }
    public function dormir(){

    }
   
}

//pularlinha


class futebol {
    public $lugar;
    public $durabilidade;
    public $circunferencia;
    public $material;
   

    public function chutar(){

    }
    public function cair(){

    }
    public function correr(){

    }
   
}

//pularlinha


class bicicleta {
    public $tamanho;
    public $cor;
    public $marca;
    public $material;
    public $quantidademarcha;

    public function pedalar(){

    }
    public function buzinar(){

    }
    public function acelerar(){

    }
   
}

//pularlinha


class livro {
    public $titulo;
    public $autor;
    public $genero;
    public $quantidadedepaginas;
    public $anopublicado;

    public function ler(){

    }
    public function marcarpaginas(){

    }
    public function abrir(){

    }
   
}

//pularlinha

class contabancaria {
    public $saldo;
    public $numerodaConta;
    public $nomedotitular;

    public function exibirsaldo(){
        return "o saldo é R$" .$this -> saldo;
    }
    public function depositar(){

    }
    public function sacar(){

    }
    public function exibir (){

    }


$contadaIsabela = new contabancaria();
$contadaIsabela -> saldo = 130;
$contadaIsabela -> numerodaConta = 476345,;
$contadaIsabela -> titular = "Isabela";
}


?>





