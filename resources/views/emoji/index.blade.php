@extends('layouts.page')

@section('title')
    Homemoji
@endsection

@section('page-content')
    <div id="index-wrapper">
        <a id="add-new" href="{{route('emoji.create')}}">Add new</a>
        <ul>
            @foreach ($emoji as $item)
                <li>
                    <a class="emoji-face" href="{{route('emoji.show', $item)}}">{{$item->character}}</a>
                    <a class="edit" href="{{route('emoji.edit', $item)}}">Edit</a>
                    <form action="{{route('emoji.destroy', $item->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input class="delete" type="submit" value="Delete">
                    </form>
                </li>    
            @endforeach
        </ul>
    </div>
@endsection