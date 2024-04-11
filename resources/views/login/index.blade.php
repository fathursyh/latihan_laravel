@extends('layouts.main')
@section('body')

    @if (session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
      </div>
    @endif
    @if (session()->has('loginError'))
    <div class="alert alert-danger" role="alert">
        {{ session('loginError') }}
      </div>
    @endif
    <div class="row d-flex justify-content-center mt-5 pt-5">
        <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center mb-4">Login User</h5>
                    <form action="/login" method="post" name="loginForm" autocomplete="off">
                        @csrf
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control my-2 @error('email')
                                is-invalid
                            @enderror" id="email" placeholder="Enter email"
                                name="email" required autofocus value="{{ old('email') }}"
                                onfocus="moveCursorToEnd(this)">
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control mt-2" id="password" placeholder="Password"
                                name="password" value="" required>
                        </div>
                        <div class="w-100 mt-4 d-flex" style="justify-content: center">
                          <button type="submit" class="btn btn-primary btn-block w-25" >Login</button>
                        </div>
                    </form>
                    <div class="text-center mt-3">
                        <p>Not a member? <a href="/register">Register</a></p>
                        {{-- <p id="errorLogin" class="text-center mt-1 hideContent"> EMAIL OR PASSWORD IS WRONG</p> --}}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
