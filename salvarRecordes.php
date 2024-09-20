<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Captura os dados enviados via POST
    $nome = $_POST['nome'];
    $pontuacao = $_POST['pontuacao'];

    // Define o caminho do arquivo onde os recordes serão salvos
    $arquivo = fopen(__DIR__ . '/recordes.txt', 'a');

    // Verifica se o arquivo foi aberto corretamente
    if ($arquivo === false) {
        die("Erro ao abrir o arquivo de recordes.");
    }

    // Escreve o nome e a pontuação no arquivo
    $linha = "$nome:$pontuacao\n";
    if (fwrite($arquivo, $linha) === false) {
        die("Erro ao salvar o recorde.");
    }

    // Fecha o arquivo
    fclose($arquivo);

    // Confirmação de sucesso
    echo "Recorde salvo com sucesso!";
}
?>
