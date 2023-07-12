@extends('layout')

@section('content')


<div class="create-form">
    <h2>
        Create new Listing
    </h2>
    <form method="POST" action="/listings" enctype="multipart/form-data" >
        @csrf
        <div class="input-field">
            <label for="company">Company Name</label>
            <input type="text" name="company" value="{{old('company')}}" >
            @error('company')
                <p class="input-error"> {{$message}} </p>
            @enderror
        </div>
        <div class="input-field">
            <label for="title">Job Title</label>
            <input type="text" name="title" value="{{old('title')}}" >   
            @error('title')
                <p class="input-error"> {{$message}} </p>
            @enderror 
        </div>
        <div class="input-field">
            <label for="location">Company Location</label>
            <input type="text" name="location" value="{{old('location')}}" >
            @error('location')
                <p class="input-error"> {{$message}} </p>
            @enderror
        </div>
        <div class="input-field">
            <label for="website">Company Website</label>
            <input type="text" name="website" value="{{old('website')}}" >
            @error('website')
                <p class="input-error"> {{$message}} </p>
            @enderror
        </div>
        <div class="input-field">
            <label for="email">Company email</label>
            <input type="text" name="email" value="{{old('email')}}">
            @error('email')
                <p class="input-error"> {{$message}} </p>
            @enderror
        </div>
        <div class="input-field">
            <label for="tags">Gig Tags</label>
            <input type="text" name="tags" placeholder="seperate tags by comma" value="{{old('tags')}}">
            @error('tags')
                <p class="input-error"> {{$message}} </p>
            @enderror
        </div>
        <div class="input-field">
            <label for="logo">Company logo</label>
            <input type="file" name="logo" >
            @error('logo')
                <p class="input-error"> {{$message}} </p>
            @enderror
        </div>
        <div class="input-field">
            <label for="description">Job Description</label>
            <textarea name="description" id="" cols="30" rows="10"> {{old('description')}} </textarea>
            @error('description')
                <p class="input-error"> {{$message}} </p>
            @enderror
        </div>
        <div class="button-field">
            <input type="submit" value="Create GiG">
        </div>
    </form> 
</div>
@endsection