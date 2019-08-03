@extends('layouts.app')

@section('content')
<div class="container contrasena">
    <div class="row">
        <div class="col-12 col-md-6 pt-10">
            <div class="card" data-aos="fade-up-right" data-aos-duration="1000">
                <div class="card-header">Restablecer contraseña</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Reestablecer contraseña
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="hidden-xs col-md-6 pd-0">
            <img class="login_image" data-aos="fade-left" data-aos-duration="1000" src="{{asset('/images/contrasena-image.jpg')}}" alt="Victoria image">
        </div>
    </div>
</div>
@endsection
