<!DOCTYPE html>
<html>
    <head>
        <title>Logado</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <style type="text/css">
            .box{
                width: 600px;
                margin: 0 auto;
            }
        </style>
    </head>
    <body style="background-image: url({{ asset('img/background.png') }}); background-size:cover;">
        <div style="margin: 0 auto; margin-top: 15%;">
            <div class="modal-content container box" style="background-color: #182038; opacity:.80; ">
            <br>
            
                @if(isset(Auth::user()->email))
                    <div class="alert alert-danger success-block">
                    <strong>Bem-Vindo {{ Auth::user()->email }}!</strong>
                    <br />
                    <a href="{{ url('/main/logout') }}">Sair</a>
                    </div>
                @else
                    <script>window.location = "/main" </script>
                @endif

            <br />
            </div>
        </div>
    </body>
</html>