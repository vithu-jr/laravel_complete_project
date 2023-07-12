@extends('layout')

@section('content')
    @include('partials._hero')
    <section class="listings-card" >
        @foreach ($listings as $listing)
            <x-listing-card :listing="$listing" />
        @endforeach
    </section> 
    <!-- <section class="pagination">
        <div class="listing-links">
            {{$listings->links()}}
        </div>
    </section>   -->
@endsection