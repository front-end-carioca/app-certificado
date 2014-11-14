<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta property="og:locale" content="pt_BR">
    <meta property="og:url" content="http://frontendcarioca.com.br/">
    <meta property="og:title" content="Front End Carioca - Certificado">
    <meta property="og:site_name" content="front_end_carioca">
    <meta property="og:description" content="Sistema para gerar certificados de participação">
    <meta property="og:image" content="http://frontendcarioca.com.br/images/logotipo.jpg">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="800">
    <meta property="og:image:height" content="600">
    <meta property="og:type" content="website">
    <meta name="description" content="Front-End Carioca - Rio de janeiro">
    <meta name="viewport" content="width=device-width">

    <link rel="shortcut icon" href="assets/image/favicon.ico">
    <link rel="stylesheet" href="assets/css/style.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">

    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/script.min.js"></script>
	<title>:: Certificado Front End Carioca ::</title>
</head>
<body>
    <!-- modal de avisos -->
    <div id="Modal">
        <div id="Holdcertificado">
            <div id="Holdbody">
                <div id="logotipo">
                    <img src="assets/image/logotipo.jpg" alt="Front End Carioca">
                    <div id="load"></div>
                </div><!-- logotipo END -->
                
                <div id="resposta">
                    <p>
                        Olá, <span id="Name"></span>, obrigado por participar do Front End Carioca. Você está 
                        prestes a gerar o seu certificado no formado PDF.</p>
                    <p>
                        Seu RG é: <span id="rg"></span>. Para emitir seu certificado, clique no botão abaixo!
                    </p>
                    <form method="post" action="conection/certificado.php">
                        <input type="submit" name="gerar" id="gerar" value="Obter Certificado">
                    </form>
                    <div class="clear"></div>
                </div><!-- resposta END -->
            </div><!-- Holdbody END -->
        </div><!-- Holdcertificado -->
    </div><!-- Modal END -->

    <!-- Documentos para a app -->
	<div class="wrap-content">
        <div class="main container">
            <main class="main container animated fadeIn" role="main">
                <h1 class="logo animated flip"><img src="assets/image/logo-cristo.png" alt="Front End Carioca"></h1>
                <div id="mensagem" class="mensagem animated fadeIn">
                    <h2>Certificado de participação ao<br><span>Front End Carioca</span></h2>
                    <h2 class="edicao">1° Edição 2014</h2>
                    <h3>Digite seu email para obter o certificado:</h3>
                </div>
                <form id="form-checkin" method="post" class="animated fadeInUp">
                    <input id="email" class="btn btn-lg" name="email" type="email" placeholder="Digite seu Email" required="required">
                    <div id="alerts"></div>
                </form>
                <button id="checkin" class="animated fadeInUp" value="Check-In">obter certificado</button>
            </main>
        </div><!-- container END -->
    </div><!-- wrap-content END -->
    <div id="result"></div>
</body>
</html>