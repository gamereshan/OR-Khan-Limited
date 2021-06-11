<nav class="navbar nav-scrolled navbar-dark fixed-top scrolling-navbar navbar-expand-md shadow-sm navbar-collapse">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}" style="color: white">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler"  type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('appointments') }}">{{__('Appointments')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('contact') }}">{{__('Contact Us')}}</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" id="logout" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
<style>
    a{
        font-weight: bolder;
        color: white;
    }
    .navbar{
        background-color: transparent;
    }
    .navbar-light .navbar-nav .nav-link{
        font-size: large;
    }
    .dropdown-menu{
        color: transparent;
        background-color: rgba(0,0,0,0.6);
        color: white;
    }
    .dropdown-item:hover{
        color: red;
    }
    #logout-form{
        background-color: transparent;
    }
    #navbarSupportedContent{
        background:transparent;
    }
    .navbar-nav{
        list-style-type: none;
        padding: 2px;
    }
    .nav-item{
        display: inline;
        justify-content: space-between;
    }
    .nav-link{
    }
    .navbar-dark .navbar-nav .nav-link{
        color: white;
        font-size: 16px;
    }
    .navbar-dark .navbar-nav .nav-link:hover{
        color: red;
    }
    .nav-link:hover{
        background-color: rgba(0, 0, 0, 0.24);
        justify-content: space-between;
        border-radius: 50px 15px;
    }
    .navbar-collapse {
        flex-basis: 100%;
        flex-grow: 1;
        align-items: center;
    }

    li{
        justify-content: space-around;
    }
    .dropdown-item{
        background-color: transparent;
    }
</style>

<script>
    let progress = document.getElementById('progressbar');
    let totalheight = document.body.scrollHeight - window.innerHeight;
    window.innerHeight;
    window.onscroll = function (){
        let progressHeight = (window.pageYOffset / totalheight) *100;
        progress.style.height = progressHeight + "%";
    }


    $(document).ready(function(){
        $(window).scroll(function(){
            var scroll = $(window).scrollTop();
            if (scroll > 20) {
                $(".navbar").css("background" , "rgba(0,0,0,0.6)");

            }
        })
    })
</script>
