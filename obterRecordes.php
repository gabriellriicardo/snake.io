<?php
$arquivo = __DIR__ . '/recordes.txt';
if (file_exists($arquivo)) {
    $conteudo = file_get_contents($arquivo);
    echo nl2br($conteudo);
} else {
    echo "Nenhum recorde encontrado.";
}
?>
