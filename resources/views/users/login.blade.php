@extends('layout')
@section('content')
    <div class="user-reg-form">
        <h3>
            User Login
        </h3>
        <form method="POST" action="/users/authenticate" autocomplete="off">
            @csrf   
            <div class="input-fields">
                <label for="email">Email</label>
                <input type="text" name="email" value="{{old('email')}}">
                @error('email')
                    <p class="input-error"> {{$message}} </p>
                @enderror
            </div>
            <div class="input-fields">
                <label for="password">Password</label>
                <input type="password" name="password" value="{{old('password')}}">
                @error('password')
                    <p class="input-error"> {{$message}} </p>
                @enderror
            </div>
            <div class="button-field">
                <input type="submit" value="Login">
            </div>
            <div class="input-field">
                <label for="">Don't have an Account</label>
                <a href="/create">Create one</a>
            </div>
        </form>
    </div>
@endsection