<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<link rel="stylesheet" href="{{asset('css/header.css')}}">
<header>
    <nav class="d-flex justify-content-between navbar navbar-expand-lg navbar-light wg-light">
        <div class="col-md-6">
            <div class="p-1" id="logo">
                <img src="images/Henriette-Logo.jpg" alt="logo">
            </div>
        </div>

        <div class="p-2">
            <div class="d-flex justify-content-end">
                <button class="navbar-toggler navbar-toggler-left" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="/home">Accueil <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/collection">Collections</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/boutique">Boutique</a>
                        </li>
                        @if(Auth::check() == false)
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Connection') }}</a>
                        </li>
                        @endif
                        @if(Auth::check())
                        <!-- IF USER LOGGED IN THESE ITEMS ARE DISPLAYED (GOKDAG) -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ URL::to('logout') }}">Logout</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/myaccount">MyAccount</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/cart">Panier</a>
                        </li>
                        @endif
                        <li class="nav-item">
                            <a class="nav-link" href="/contact">CONTACT</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script>
    //Active link gets the bold style
    $(document).ready(function() {
        $('li.active').removeClass('active');
        $('a[href="' + location.pathname + '"]').closest('li').addClass('active');
    });
</script>
