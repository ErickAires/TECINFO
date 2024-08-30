
<?php
    $nota1 = 10;
    $nota2 = 8;
    $nota3 = 8;
    $nota4 = 8;
    $resultado = ($nota1 + $nota2 + $nota3 + $nota4)/4;

    if($resultado >= 7 && $resultado!= 10 ){
        echo "Aluno foi aprovado";
    }
    elseif($resultado == 0 ){
        echo "Estude mais, voce nao acertou nada!";
    }
    elseif ($resultado == 10){
        echo "Parabens! Aprovado com nota maxima.";
    }
    else {
        echo "O aluno foi reprovado.";
    }
    echo "<br>";
    $text = "Ola ";
    $text2 = "Mundo Cruel !";
    $text .= $text2;
    echo $text ;
echo "<br>";
    $color = "red"; 
    
    

?>