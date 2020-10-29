<ul>
    @foreach ($emoji as $item)
        <li>
            <div>
                <a href="{{route('emoji.show', $item)}}">{{$item->character}}</a>
                 <a href="{{route('emoji.edit', $item)}}">Edit</a>
            </div>
        </li>    
    @endforeach
</ul>