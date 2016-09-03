<body>

<?php


  $variavel1=' :-]';
#comentario dessa linha
//comentario dessa linha
  $variavel2="Marlysson é legal{$variavel1}";

  $variavel3=array(
    'Maçã','Banana','Pêra', 'Quiabo', 'Chuchu'
  );

  $variavel4=array(
    0=> 'Maçã',1=> 'Banana',2=> 'Pêra', 3=> 'Quiabo', 4=> 'Chuchu'
  );

/*
linha1
linha2
linha3
*/
  echo $variavel2;

  echo'<br>';

  echo implode(',',$variavel3);

  echo'<br>';

  echo $variavel4[0];

  require'printer.php';



  foreach($array as $indice => $valor){
    echo "<pre>";
    var_dump($array($indice,$valor));
    echo"</pre>";
  }


?>


</body>
