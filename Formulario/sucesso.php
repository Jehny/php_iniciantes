<?php 
//UMA VARIÁVEL ESTA RECEBENDOOS DADOS DE CONEXAO
//COLOCA AI OS SEUS DADOS
$link = mysqli_connect("localhost", "root", "", "cadastro_php");

//SE ELE FOR DIFERENTE DE VERDADEIRO...
//É O Q DIZ A LINHA A BAIXO
if (!$link) {
    echo "Erro: CONEXAO com MySQL desabilitada." . PHP_EOL;
    //a funcao mysqli_connect_errno DIZ O ERRO DA CONEXAO
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Sucesso:Conexão estabelecida.";



//mysqli_close($link);

?>
