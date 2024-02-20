/*
Entregador de delivery ganha 80 reais por dia porém ainda
Tem as gorjetas dos cliente.

$con = mysqli_connect("localhost", "root", "1234356", "lucas");

$res = mysqli_execute_query($con, "SELECT * FROM teste");

mysqli_close($con);
*/

<?php

   $valorDia = 80;
   $gorjetas = 40;
   $diaria = $valorDia + $gorjetas;

   echo "segunda-feira : $diaria";

   //phpinfo();
?>