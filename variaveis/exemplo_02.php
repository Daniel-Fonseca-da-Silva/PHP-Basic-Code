<?echo
  /* comentário de bloco*/

  /*
  $anoNascimento = 1993;
  $nomeCompleto = "Daniel F S"
  */

  // variáveis
  $nome1 = "Daniel";

  echo "<br/>";
  echo "<br/>";

  $sobreNome = "Fonseca";

  $nomeCompleto = $nome1." ".$sobreNome; // concatenando variáveis com ponto

  echo $nomeCompleto;

  exit; // Para a execução do código

  // comandos

  echo $nome1; // mostra nome da variável

  echo "<br/>"; // quebra linha

  //unset($nome1); // Limpa a variável

  if(isset($nome1)) // Verifica se a variável existe
  {
    echo $nome1; // mostra variável limpa
  }



  // Comentário de linha

?>
