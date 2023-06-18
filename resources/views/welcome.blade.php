<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>El Mahroussa-tech</title>
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('resources\css\login.scss') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

<style>

</style>
</head>
<body>
    <div class="text-center logo-container"> </div>
    <div id="container">
        <h3 class="text-center">El Mahroussa-tech </h3>
        <div class="tabs">
            <div class="tab tab-link current" data-tab="tab-1">Connexion</div>
            <div class="tab tab-link" data-tab="tab-2">S'inscrire</div>
        </div>
        <form class="tab-content current login" id="tab-1" action="{{ route('auth') }}" method="POST">
            @csrf
            <div class="form-div">
                <div class="input-area">
                    <input class="input" type="email" name="email" placeholder="Email" />
                    <div class="input-icon fa fa-user"></div>
                </div>
            </div>
            <div class="form-div">
                <div class="input-area">
                    <input class="input" type="password" name="password" placeholder="Mot de passe" />
                    <div class="input-icon fa fa-lock"></div>
                </div>
            </div>
            <div class="form-footer">
                <button> <span>Mot de passe oublié?</span><span class="fa fa-question"></span></button>
                <button> <span>Connexion</span><span class="fa fa-sign-in"></span></button>
            </div>
        </form>
        <form class="tab-content register" id="tab-2" action=" {{route('register') }}" method="POST">
            @csrf
            <div class="form-div">
                <div class="input-area">
                    <input class="input" name="name" id="name" type="text" placeholder="Nom" />
                    <div class="input-icon fa fa-user"></div>
                </div>
            </div>
            <div class="form-div">
                <div class="input-area">
                    <input class="input" name="email" id="email" type="email" placeholder="Email" />
                    <div class="input-icon fa fa-envelope"></div>
                </div>
            </div>
            <div class="form-div">
                <div class="input-area">
                    <input class="input" type="password" name="password" id="password" placeholder="Password" />
                    <div class="input-icon fa fa-lock"></div>
                </div>
            </div>
            <div class="form-footer">
                <button> <span>S'inscrire</span><span class="fa fa-user-plus"></span></button>
            </div>
        </form>
    </div>
    <script>document.querySelectorAll('.tab').forEach(tab => {
        const tabId = tab.getAttribute('data-tab');

        tab.addEventListener('click', e => {
            document.querySelectorAll('.tab, .tab-content').forEach(e => e.classList.remove('current'));
            tab.classList.add('current');
            document.querySelector(`#${tabId}`).classList.add('current');
        })
    })</script>
</body>
</html>
