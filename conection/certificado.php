<?php
    // Iniciando uma sessão
    session_start();

    // criando uma constante para o PATH
    define('MPDF_PATH', '../MPDF/');

    // Incluindo a class
    include(MPDF_PATH. 'mpdf.php');

    // Iniciando o objeto e seus atributos
    $mpdf = new mPDF('utf-8','A4-L');
    
    // Inclui os arquivos HTML e CSS do certificado para PDF
    $sass = file_get_contents('../assets/css/mpdf.min.css');
    $html = file_get_contents('../document.php');
    
    // Subistitui as expressões pelos valores das variáveis
    $html = str_replace("{nome}", $_SESSION['nome'], $html);
    $html = str_replace("{rg}", $_SESSION['rg'], $html);

    // Ler o SASS e o HTML do PDF
    $mpdf -> WriteHTML($sass, 1);
    $mpdf -> WriteHTML($html, 2);

    // Libera o documento com o nome abaixo. OBS: a chave D é para Download
    $mpdf -> Output('certificado.pdf', 'D');

    // encerra a sessão
    session_destroy();
    exit();
?>