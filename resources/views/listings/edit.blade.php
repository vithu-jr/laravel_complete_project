<!-- this page is to edit the lisitng -->
@extends('layout')

@section('content')
<div class="create-form">
    <h2>
        Create new Listing
    </h2>
    <form method="POST" action="/listings/{{$listing->id}}" enctype="multipart/form-data" >
        @csrf
        @method('PUT')
        <input type="hidden" name="id" value="{{$listing->id}}">
        <div class="input-field">
            <label for="company">Company Name</label>
            <input type="text" name="company" value="{{$listing->company}}" >
            @error('company')
                <p class="input-error"> {{$message}} </p>
            @enderror
        </div>
        <div class="input-field">
            <label for="title">Job Title</label>
            <input type="text" name="title" value="{{$listing->title}}" >   
            @error('title')
                <p class="input-error"> {{$message}} </p>
            @enderror 
        </div>
        <div class="input-field">
            <label for="location">Company Location</label>
            <input type="text" name="location" value="{{$listing->location}}" >
            @error('location')
                <p class="input-error"> {{$message}} </p>
            @enderror
        </div>
        <div class="input-field">
            <label for="website">Company Website</label>
            <input type="text" name="website" value="{{$listing->website}}" >
            @error('website')
                <p class="input-error"> {{$message}} </p>
            @enderror
        </div>
        <div class="input-field">
            <label for="email">Company email</label>
            <input type="text" name="email" value="{{$listing->email}}">
            @error('email')
                <p class="input-error"> {{$message}} </p>
            @enderror
        </div>
        <div class="input-field">
            <label for="tags">Gig Tags</label>
            <input type="text" name="tags" placeholder="seperate tags by comma" value="{{$listing->tags}}">
            @error('tags')
                <p class="input-error"> {{$message}} </p>
            @enderror
        </div>
        <div class="input-field">
            <label for="logo">Company logo</label>
            <input type="file" name="logo">
            <img class="hidden w-48 mr-6 md:block" src="{{$listing->logo ? asset('storage/'. $listing->logo) : asset('images/no-image.png')}}" alt="">
            @error('logo')
                <p class="input-error"> {{$message}} </p>
            @enderror
        </div>
        <div class="input-field">
            <label for="description">Job Description</label>
            <textarea name="description" id="" cols="30" rows="10"> {{$listing->description}} </textarea>
            @error('description')
                <p class="input-error"> {{$message}} </p>
            @enderror
        </div>
        <div class="button-field">
            <input type="submit" value="Upadate GiG">
        </div>
    </form> 
</div>
@endsection