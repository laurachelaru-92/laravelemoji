@extends('layouts.page')

@section('title')
    See emoji infos
@endsection

@section('page-content')
    <ul>
        <li>{{$emoji->character}}</li>
        <li>{{$emoji->slug}}</li>
        <li>{{$emoji->unicodeName}}</li>
        <li>{{$emoji->codePoint}}</li>
        <li>{{$emoji->group}}</li>
        <li>{{$emoji->subGroup}}</li>
    </ul>
    <div>
        <a href="{{route('emoji.index')}}">Back</a>
    </div>
@endsection