<ul>
    @foreach ($emoji as $item)
        <li>
            <div>
                <a href="{{route('emoji.show', $item)}}">{{$item->character}}</a>
            </div>
        </li>    
    @endforeach
</ul>