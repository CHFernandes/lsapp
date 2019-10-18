<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
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
                <br />

                @if(isset(Auth::user()->email))
                    <script>alert("setado");
                    window.location="{{ url('main/successlogin') }}"</script>
                @endif

                @if($message = Session::get('error'))
                    <div class="alert alert-danger alert-block">
                        <button type="button" class="close" data-dismiss="alert">x</button>
                        <strong>{{$message}}</strong>
                    </div>
                @endif

                @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ url('main/checklogin') }}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="E-Mail"/>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Senha"/>
                    </div>
                    <div class="text-center">
                        <input type="submit" name="login" class="btn btn-primary" value="Login"/>
                    </div>
                </form>
                <form method="GET" action="{{ url('main/create') }}">
                    {{ csrf_field() }}
                    <div class="text-center">
                        <input type="submit" name="register" class="btn btn-link" value="Não está cadastrado? Registre-se agora!"/>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>