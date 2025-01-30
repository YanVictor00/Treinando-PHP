<?php

//primeiro olá mundo
$_ = "Olá, mundo";
print('_')


//mais um olá
echo "Olá mudo!  \u{1F30E}";


//info do server
phpinfo();


//Reprocessamento ,  Soma de itens, c
        date_default_timezone_set("America/Sao_Paulo");
        echo "Hoje é dia " . date("d/M/Y");
        echo " e a hora atual é " . date("g:i:s");



//Variáveis e Constantes
        $name = "Yan";
        $lastName = "Rocha";
        const COUNTRY = "Estados Unidos";
        echo "My name is $name $lastName and i want to know " . COUNTRY;


//Variáveis primitivas 
        
        $_int = 7;
        $_str = "Aoba";
        $_float = 33.3;
        $_bool = true;
                $_coercao = (string) $_int; //transforma variáveis
                        var_dump($_coercao); //mostra o valor da variável 



//Váriaveis compostas

        $_matriz = ["yan", 7];

        class Pessoa{
                private string $nome;
        }
        $p = new Pessoa;
                var_dump($_matriz);


?>