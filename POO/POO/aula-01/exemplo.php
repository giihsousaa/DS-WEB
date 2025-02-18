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
        echo "amarrar tenis";
    }
    
    public function descalcar(){
        echo "descalcar tenis";
    }
    public function calcar(){
        echo "calcar tenis";
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
        echo "morar na casa";
    }
    public function limpar(){
        echo "limpar casa";
    }
    public function dormir(){
        echo "dormir na casa";
    }
   
}

//pularlinha


class futebol {
    public $lugar;
    public $durabilidade;
    public $circunferencia;
    public $material;
   

    public function chutar(){
        echo "chutar bola";
    }
    public function cair(){
        echo "jogador cair";
    }
    public function correr(){
        echo "correr";
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
        echo "pedalar bicicleta";
    }
    public function buzinar(){
        echo "buzinar a bicicleta";
    }
    public function acelerar(){
        echo "acelerar bicicleta";
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
        echo "ler livro";
    }
    public function marcarpaginas(){
        echo "marcar pagina";
    }
    public function abrir(){
        echo "abrir livro";
    }
    
   
}



class contabancaria {
    public $saldo;
    public $numerodaConta;
    public $nomedotitular;

    
    public function exibirSaldo(){
        return "o saldo é R$ " .$this -> saldo.  ",00";

    }
    public function depositar($deposito){
            $this->saldo += $deposito;
            return "Este é o novo saldo" .$this->saldo;
    }
    
    public function sacar($saque){
        $this->saldo -= $saque;
        return "Este é o novo saldo" .$this->saldo;

    }
   

}


$contadaIsabela = new contabancaria();
$contadaIsabela -> saldo = 130;
$contadaIsabela -> numerodaConta = 476345;
$contadaIsabela -> titular = "Isabela";

    echo "O saldo da conta é:", $contadaIsabela->saldo;



?>





