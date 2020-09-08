<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!--FONTS GOOGLE-->
    <link href="https://fonts.googleapis.com/css?family=Nunito|Open+Sans&display=swap" rel="stylesheet"> 
    <!--BOOTSTRAP-->
    <link rel="stylesheet" href="/css/message.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">    
</head>
<body class="fondo-mensaje">
    <div class="container cont-message ">
        <div class="row d-flex align-items-center" style="height: 100%">
            <div class="col-md-12">
                <h1 class="texto">Gracias por confiar en nosotros. <br> Nos podremos en contácto a la brevedad.</h1>
            </div>
        </div>
    </div>
<script src="/js/lib/jquery.js"></script>
<script src="/js/lib/bootstrap.min.js"></script>
    <script>
        function redireccionarPagina() {
            window.location = "/";
        }
        setTimeout("redireccionarPagina()", 3000);
    </script>
</body>
</html>