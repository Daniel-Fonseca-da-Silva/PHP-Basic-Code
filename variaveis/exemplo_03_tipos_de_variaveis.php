<?echo
  // tipos básicos de variáveis

  $nome = "Daniel";
  $site = 'www.site.com';

  $ano = 1993;
  $salario = 5500.99;
  $bloqueado = false;
  ////////////////////////////////////////

  // tipos compostos de variáveis

  $frutas = array("abacaxi", "laranja", "manga");

  //echo $frutas[2];

  $nascimento = new DateTime();

  //var_dump($nascimento);
  /////////////////////////////////////

  // tipos especiais de variáveis

  $arquivo = fopen("exemplo_03.php", "r");// leitura de arquivo

  //var_dump($arquivo);

  $nulo = NULL; // cria variável com valor nulo


?>
