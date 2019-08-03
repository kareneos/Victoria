@extends('layouts.app')

@section('content')
    <div class="flex-center position-ref full-height">
        <div class="welcome">
            <div class="jumbotron jumbotron-fluid mb-0 pd-0">
                <div class="container-fluid text-center">
                    <div class="row align-items-center">
                        <div class="col-12 col-md-6">
                            <div data-aos="fade-up-right" data-aos-duration="1000">
                                <img class="welcome_title" src="{{asset('/images/victoria-orange.png')}}" alt="Victoria">
                                <p class="welcome_text">Bienvenida al directorio de Victoria 147</p> 
                                <a class="welcome_btn welcome_btn--register hvr-float" href="{{url('/register')}}">REGÍSTRATE</a>
                                <a class="welcome_btn welcome_btn--login hvr-float" href="{{url('/login')}}">INICIA SESIÓN</a>
                            </div>
                        </div>
                        <div class="hidden-xs col-md-6 pd-0">
                            <img class="welcome_image" data-aos="fade-left" data-aos-duration="1000" src="{{asset('/images/welcome-image.jpg')}}" alt="Victoria image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    @if (Route::has('login'))
        @auth
            <script>
                window.location.href = "/home";
            </script>
        @endauth
    @endif
    <script>
        $('.navbar').css('display', 'none');
    </script>
@endsection