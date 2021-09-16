@extends('layouts.app')

@extends('inc.header')
@section('content')

    <form action="delete_wish/delete" method="post">
        @csrf
        <select name="lijst_posts">
        @if(count($wishes) > 0)
                @if(Auth::user()->role == 0)
                    @foreach($wishes as $wish)
                        @if($wish->userId == Auth::user()->id)
                            <option value="{{$wish->wens}}">{{$wish->wens}}</option>
                        @endif
                    @endforeach
                @elseif(Auth::user()->role == 1)
                    @foreach($wishes as $wish)
                        <option value="{{$wish->wens}}">{{$wish->wens}}</option>
                    @endforeach
                @endif
        @endif
        </select>
        <button type="submit">delete</button>
    </form>
@endsection
