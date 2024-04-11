@extends('layouts.main')

@section('body')
    <div class="row d-flex justify-content-center mt-5 pt-5">
        <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center mb-4">Register</h5>
                    <form action="/register" method="post" name="loginForm" autocomplete="off">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control my-2 @error('name')
                                is-invalid
                            @enderror" id="name" placeholder="Enter name"
                                name="name" autofocus value="{{ old('name') }}">
                                <div class="invalid-feedback">
                                  Nama tidak boleh kosong.
                                </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control mt-2 @error('email')
                                is-invalid
                            @enderror" id="email" placeholder="Enter email"
                                name="email" value="{{ old('email') }}">
                                <div class="invalid-feedback">
                                  Email tidak valid.
                                </div>
                        </div>
                        <label for="username">username</label>
                        <input type="text" class="form-control my-2 @error('username')
                            is-invalid
                        @enderror" id="username" placeholder="Enter username"
                            name="username" value="{{ old('username') }}">
                            @error('username')
                            <div class="invalid-feedback">
                              {{ $message }}
                            </div>
                            @enderror
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control mt-2 @error('password')
                                is-invalid
                            @enderror" id="password" placeholder="Password"
                                name="password" value="{{ old('password') }}">
                        </div>
                        <div class="w-100 mt-4 d-flex" style="justify-content: center">
                            <button type="submit" class="btn btn-primary btn-block w-25">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
