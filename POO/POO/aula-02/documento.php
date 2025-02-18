<?php


class pessoa{

    public $idade;
    public $nome;
}

class funcionario extends pessoa {

    protected $salario;

    public function setSalario($valor){
        $this->salario = $valor;
    }

    public function calcularBonus(){
        $this->salario = ($this->salario * 10) /100;
        return "O salário bonificado é: ".$this->salario;
    }
}
class gerente extends funcionario{

    public function calcularBonus(){
        $this->salario = ($this->salario * 20) /100 + $this->salario;
        return "O salário bonificado é: ".$this->salario;
    }  
}
class desenvolvedor extends funcionario{
    public function calcularBonus(){
        $this->salario = ($this->salario * 10) /100 + $this->salario;
        return "O salário bonificado é: ".$this->salario;
    }  
}

$ana = new gerente();

$ana->setSalario(2300);
echo $ana->calcularBonus();

$giovanna = new desenvolvedor();

$giovanna->setSalario(1320);
echo $giovanna->calcularBonus();

?>

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


<?php

abstract class Animal {
    public function fazerSom() {
       
    }

    public function mover() {
      
        echo "Se movendo... ";
    }
}

class Cachorro extends Animal {
    public function fazerSom() {
        echo "Au Au! ";
    }
    
    public function mover() {
  
        echo "Corre! ";
    }
}

$cachorro = new Cachorro();
$cachorro->fazerSom();  
$cachorro->mover();     

class Gato extends Animal {
    public function fazerSom() {
        echo "Miau Miau! ";
    }
    
    public function mover() {
       
        echo "Anda de forma silenciosa! ";
    }
}

$gato = new Gato();
$gato->fazerSom(); 
$gato->mover();     

class Passaro extends Animal {
    public function fazerSom() {
        echo "Piu Piu! ";
    }

    public function mover() {
        
        echo "Voa e anda. ";
        parent::mover();  
    }
}

$passaro = new Passaro();
$passaro->fazerSom();  
$passaro->mover();

?>

<?php

class Veiculo {
    public $marca = "Toyota";
    public $modelo = "Corola Cross";
    private $velocidade = "130km";




    public function getVelocidade() {
        return $this->velocidade;
    }



    public function setVelocidade($velocidade) {
        $this->velocidade = $velocidade;
    }



    public function exibirInformacoes() {
        echo "Marca: " . $this->marca . "\n";
        echo "Modelo: " . $this->modelo . "\n";
        echo "Velocidade: " . $this->velocidade . "\n";
    }
}






class Carro extends Veiculo {
    public function Acelerar() {
        return "Acelerar em 5km\n";
    }
}




class Moto extends Veiculo {
    public function Acelerar() {
        return "Acelerar em 10km\n";
    }
}





$carro = new Carro();
$moto = new Moto();




echo "Carro:\n";
$carro->exibirInformacoes();
echo $carro->Acelerar();

echo "\nMoto:\n";
$moto->exibirInformacoes();
echo $moto->Acelerar();

?>

<?php

abstract class Produto {
    public $nome = "Camisa";
    public $preco = 15.00;
    protected $estoque = 4;

    public function getPrecoFinal() {
        $precoFinal = $this->preco;


        if ($this->estoque < 5) {
            $precoFinal *= 0.90;
        }

        return $precoFinal;
    }
}

class Eletronico extends Produto {
    public function getPrecoFinal() {
        $precoFinal = parent::getPrecoFinal() * 0.90;
        return $precoFinal;
    }
}

class Roupa extends Produto {
    public function getPrecoFinal() {
        $precoFinal = parent::getPrecoFinal() * 0.80;
        return $precoFinal;
    }
}

echo "Eletrônico: R$ " . (new Eletronico())->getPrecoFinal() . "\n";
echo "Roupa: R$ " . (new Roupa())->getPrecoFinal() . "\n";
?>


<?php

class Documento {
    private $numero;

    public function setNumero($numero) {
        $this->numero = $numero;
    }

    public function getNumero() {
        return $this->numero;
    }
}

class CPF extends Documento {
    public function validar() {
     
        $cpf = preg_replace('/[^0-9]/', '', $this->getNumero());

   
        if (strlen($cpf) != 11 || preg_match('/^(.)\1*$/', $cpf)) {
            return false;
        }

        for ($t = 9; $t < 11; $t++) {
            $soma = 0;
            for ($i = 0; $i < $t; $i++) {
                $soma += $cpf[$i] * (($t + 1) - $i);
            }
            $digito = ($soma * 10) % 11;
            if ($digito == 10) $digito = 0;

            if ($cpf[$t] != $digito) {
                return false;
            }
        }

        return true;
    }
}


$cpf = new CPF();
$cpf->setNumero("532.084.998-25");


echo "CPF " . $cpf->getNumero() . " é " . ($cpf->validar() ? "Válido" : "Inválido") . "\n";

    
   



