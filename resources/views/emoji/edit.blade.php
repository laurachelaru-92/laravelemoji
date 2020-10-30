@extends('layouts.page')

@section('title')
    Edit
@endsection

@section('page-content')
    <div id="edit-wrapper">
        <form action="{{route("emoji.update", $emoji->id)}}" method="POST">
            @csrf
            @method("PUT")

            <input type="text" name="slug" placeholder="slug" value="{{$emoji->slug}}">
            <input type="text" name="character" placeholder="character" value="{{$emoji->character}}">
            <input type="text" name="unicodeName" placeholder="unicodeName" value="{{$emoji->unicodeName}}">
            <input type="text" name="codePoint" placeholder="codePoint" value="{{$emoji->codePoint}}">
            <input type="text" name="group" placeholder="group" value="{{$emoji->group}}">
            <input type="text" name="subGroup" placeholder="subGroup" value="{{$emoji->subGroup}}">

            <input type="submit" value="save">


        </form>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div>
            <a href="{{route('emoji.index')}}">Back</a>
        </div>
    </div>
@endsection
