<?php
    //iniciando a captura do conteudo para gerar o pdf
    ob_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF</title>
</head>
<body>
    <h1>Olá mundo</h1>
</body>
</html>

<?php
    //pegando as informações e armazenado em uma variavel
    $html = ob_get_contents();
    //limpando a operação
    ob_end_clean();
    //puxando o arquivo para pdf
    require_once __DIR__ . '/vendor/autoload.php';

    //instanciando a classe mpdf 
    $mpdf = new \Mpdf\Mpdf();
    //executando a classe
    $mpdf->WriteHTML($html);
    //exibindo na tela o resultado do armazenamento
    //se não for definido nada dentro dos parenteses por padrão somente exibe na tela
    //se for definido ('arquivo.pdf', 'D') faz download automaticamente
     //se for definido ('arquivo.pdf', 'F') salva no servidor
    $mpdf->Output();


?>