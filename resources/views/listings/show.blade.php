@extends('layout')

@section('content')
   <div class="listing-card">

        <div class="top spacing">
            <div class="top-left">
                <img class="hidden w-48 mr-6 md:block" src="{{$listing->logo ? asset('storage/'. $listing->logo) : asset('images/no-image.png')}}" >
            </div>
            <div class="top-right">
                <a href="/listings/{{$listing['id']}}">
                    <h3>{{$listing['title']}}</h3>
                </a>
                <h4>
                    {{$listing['company']}} - {{$listing['location']}}
                </h4>
                <div>
                    <x-listing-tags :tagsCsv="$listing->tags" />
                </div>
            </div>
        </div>

        <p class="spacing">
            {{$listing['description']}}
        </p>

        <div class="span spacing">
            <span id="email">
               {{$listing['email']}}
            </span>
        </div>

        <div class="span spacing">
            <span id="website">
                <a href="{{$listing['website']}}">Visit website</a>
            </span>

            <span>
                <button id="listing-action" >Apply</button>
            </span>
        </div>
   </div>
   @auth
   <div class="actions">
        
        
        
   </div> 
   @endauth
   
@endsection

