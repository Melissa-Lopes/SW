<?php
   $idade = 16;
   $habilitacao = FALSE;
   if ("$idade<18"){
       //comandos para verdadeiro
       echo "Você não possui idade suficiente para dirigir";
   }
   else 
   //comandos para verdadeiro
   if ("$idade=>18"){
    echo "Você pussui idade suficiente para dirigir!";
   }
   else 
   //comandos para verdadeiro
   if ("$habilitacao = TRUE"){
       echo "Você pode dirigir.";
   }
   else
   //comandos para falso
   if ($habilitacao = FALSE){
   echo "Você não pode dirigir";
   }
   $teste = "";
   if ($habilitacao = TRUE){
       $teste = "SIM";   
   }
   else {
       $teste = "NÃO";
   }
   echo "<br>";
   echo "Sua idade é: $idade <br>";
   echo "Tem habilitação : $teste <br>";
   echo "<br>";







?>