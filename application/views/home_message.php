<!doctype html>
<html lang="en">
<head>
    <meta name="tipo_contenido"  content="text/html;" http-equiv="content-type" charset="utf-8">

    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.min.css' ?>" />



    <link rel="stylesheet" href="<?php echo base_url().'assets/css/my-styles.css' ?>"/>

    <title><?php echo $title; ?></title>
</head>
<body>

<div class="container">

    <div>

        <div class="col-md-6 col-md-offset-3 mastop marco">
    <h1 class="text-center h1-big">Bienvenido a Silca Nomina</h1>

            <p class="text-center text-success">Por favor inicie session para continuar: </p>

            <div class="">

                <form action="">
                    <div class="form-group">
                    <label for="email_user" class="sr-only">Usuario</label>
                    <input class="form-control" type="text" name="email_user" placeholder="Nombre de Usuario">
                    </div>
                    <div class="form-group">
                        <label for="password_user" class="sr-only"></label>
                        <input class="form-control" type="password" name="password_user" placeholder="Password" >
                    </div>
                    <div class="inner text-center">
                        <button type="submit"  class="btn btn-primary">Entrar</button>
                    </div

                </form>
            </div>

        </div>
    </div>
</div>






<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-1.11.3.min.js';?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.min.js';?>"></script>
</body>
</html>