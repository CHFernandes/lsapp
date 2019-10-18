<!DOCTYPE html>
<html>
    <head>
        <title>Registrar-se</title>
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
                    <script>window.location="/main/successlogin"</script>
                @endif

                <form method="POST" action="{{ url('/main/store') }}">

                    {{ csrf_field() }}
                
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Nome completo">
                    </div>

                    <div class="form-group">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                    </div>
         
                    <div class="form-group">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Senha">
                    </div>
         
                    <div class="text-center">
                        <button style="cursor:pointer" type="submit" class="btn btn-primary">Registrar-se</button>
                    </div>
                </form>
                <br>
            </div>
        </div>
    </body>
</html>