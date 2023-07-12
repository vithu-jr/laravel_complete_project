@props(['listing'])

<div class="card">
    <div class="left">
        <img class="hidden w-48 mr-6 md:block" src="{{$listing->logo ? asset('storage/'. $listing->logo) : asset('images/no-image.png')}}" >
    </div>
    <div class="right">
        
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