@extends('layout')
@section('content')
    <div class="user-reg-form">
        <h3>
            New user registration form
        </h3>
        <form method="POST" action="/users" autocomplete="off">
            @csrf   
            <div class="input-fields">
                <label for="name">Name</label>
                <input type="text" name="name" value="{{old('name')}}">
                @error('name')
                    <p class="input-error"> {{$message}} </p>
                @enderror
            </div>
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
            <div class="input-fields">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" name="password_confirmation" value="">
            </div>
            <div class="button-field">
                <input type="submit" value="create">
            </div>
            <div class="input-field">
                <label for="">Already Have an Account</label>
                <a href="/login">Login</a>
            </div>
        </form>
    </div>
@endsection