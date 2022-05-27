<?php
    $meses = ["Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro"];
    $num = 5;

    if($num>=1 and $num<=12){
        $num = ($num -1);
        echo "O mês selecionado é: $meses[$num]";
    }
    else{
        echo "<script>alert('DIGITE UM NÚMERO ENTRE 1 E 12')</script>";  
    };
?>