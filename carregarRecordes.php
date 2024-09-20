<?php
    // Verifica se o arquivo de recordes existe
    if (file_exists('recordes.txt')) {
        // Lê o conteúdo do arquivo
        $conteudo = file('recordes.txt', FILE_IGNORE_NEW_LINES);

        // Cria um array para os recordes
        $recordes = [];

        // Converte o conteúdo do arquivo em um array associativo
        foreach ($conteudo as $linha) {
            list($nome, $pontuacao) = explode(':', $linha);
            $recordes[] = ['nome' => $nome, 'pontuacao' => $pontuacao];
        }

        // Ordena os recordes pela pontuação em ordem decrescente
        usort($recordes, function($a, $b) {
            return $b['pontuacao'] - $a['pontuacao'];
        });

        // Retorna os recordes em formato JSON
        echo json_encode($recordes);
    } else {
        echo json_encode([]);
    }
?>
