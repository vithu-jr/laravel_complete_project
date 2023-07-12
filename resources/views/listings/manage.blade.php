@extends('layout')
@section('content')
    <div class="manage_listings">
        <h2>
            Listings Created by {{auth()->user()->name}}
        </h2>
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Company</th>
                    <th>Location</th>
                    <th>Created at</th>
                    <th colspan="2" >Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($listings as $listing)
                    <tr>
                        <td>
                            {{$listing->id}}
                        </td>
                        <td>
                            <a id="show" href="/listings/{{$listing['id']}}">
                                {{$listing->title}}
                            </a>
                        </td>
                        <td>
                            {{$listing->company}}
                        </td>
                        <td>
                            {{$listing->location}}
                        </td>   
                        <td>
                            {{$listing->created_at}}
                        </td>
                        <td>
                            <a id="edit" href="/listings/{{$listing->id}}/edit">
                                Edit
                            </a>
                        </td>
                        <td>
                            <form method="POST" action="/listings/{{$listing->id}}">
                                @csrf
                                @method('DELETE')
                                    <button type="submit"> Delete </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection