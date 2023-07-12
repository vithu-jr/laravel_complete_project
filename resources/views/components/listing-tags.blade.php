@props(['tagsCsv'])

@php 
    $tags = explode(',',$tagsCsv)
@endphp

<ul class="tags">
    @foreach($tags as $tag)
            <li class="tag"> 
                <a href="/?tag={{$tag}}"> {{$tag}} </a>
            </li>
    @endforeach
</ul>
