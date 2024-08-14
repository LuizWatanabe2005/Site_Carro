<?php

/* print_r($_POST);*/

/* Abre um arquivo chamado "arquivo.hd". Os dados vão ser adicionados no final do arquivo sem apagar o conteúdo existente */ 
$arquivo = fopen('arquivo.hd','a');

/* Substitui todos os caracteres '#' por '-' nos campos, "separando" eles */
$titulo=str_replace('#', '-', $_POST['titulo']);
$categoria=str_replace('#', '-', $_POST['categoria']);
$descricao=str_replace('#', '-', $_POST['descricao']);

/* Cria uma string '$texto' que concatena os valores do '$titulo', '$categoria' e '$descricao' e adiciona uma quebra de linha no final */
$texto = $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;

/* Escreve o conteúdo de '$texto' no arquivo 'arquivo.hd' */
fwrite($arquivo, $texto);

/* echo $texto; */

/* fecha o arquivo */
fclose($arquivo);

/* redireciona o navegador para a página 'abrir_chamado.php' */
header('Location: abrir_chamado.php');

?>