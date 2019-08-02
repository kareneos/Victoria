@extends('layout.master')

@section('content')
    <!-- NAVIGATION BAR -->
    @include('includes.navigation')
    <div class="container mt-10 mb-7 register">
        <div class="row">
            <div class="col-md-6">
                <h3>Sign Up</h3>
                <form action="#" method="post">
                    <div class="form-group">
                        <label for="email">Your E-Mail</label>
                        <input class="form-control" type="text" name="email" id="email">
                    </div>
                    <div class="form-group">
                        <label for="first_name">Name</label>
                        <input class="form-control" type="text" name="name" id="name">
                    </div>
                    <div class="form-group">
                        <label for="password">Your Password</label>
                        <input class="form-control" type="password" name="password" id="password">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <input type="hidden" name="_token" >
                </form>
            </div>

            <div class="col-md-6">
                <h3>Sign In</h3>
                <form method="post">
                    <div class="form-group">
                        <label for="email">Your E-Mail</label>
                        <input class="form-control" type="text" name="email" id="email">
                    </div>
                    <div class="form-group">
                        <label for="password">Your Password</label>
                        <input class="form-control" type="password" name="password" id="password">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <input type="hidden" name="_token" value="{{ Session::token() }}">
                </form>
            </div>
        </div>
    </div>
    

    <!-- FOOTER -->
    @include('includes.footer')
@endsection

@section('js')
@endsection