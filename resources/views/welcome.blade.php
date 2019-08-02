@extends('layouts.app')

@section('content')
    <div class="flex-center position-ref full-height">
        <div class="welcome">
            <div class="jumbotron jumbotron-fluid d-flex align-items-center justify-content-center mb-0">
                <div class="container text-center">
                    <img class="welcome_image" src="{{asset('/images/victoria-white.png')}}" alt="Victoria">
                    <p>Bienvenida a la Red Social de Victoria 147</p> 
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
@endsection