
@extends('layouts.app')
@extends('inc.header')
@section('content')

    <div class="container">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="/maak_wish">Create wens</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/update_wish">update wens</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/delete_wish">delete wens</a>
            </li>
        </ul>


            @if(Auth::user()->role == 0)
                @foreach($wishes as $wish)
                @if($wish->userId == Auth::user()->id)
                    <ul class="list_group">
                        <li class="list-group-item">De wens: {{$wish->wens}}</li>
                        <li class="list-group-item">De prijs: {{$wish->prijs}}</li>
                        <li class="list-group-item">Bericht: {{$wish->bericht}}</li>
                        <li class="list-group-item"><img src="{{asset('storage/' . $wish->foto)}}"></li>
                        <li class="list-group-item">Link: <a href="{{$wish->link}}">{{$wish->link}}</a></li>
                    </ul>
                    @endif
                @endforeach
            @elseif(Auth::user()->role == 1)
                @foreach($wishes as $wish)
                    <ul class="list_group">
                        <li class="list-group-item">De wens: {{$wish->wens}}</li>
                        <li class="list-group-item">De prijs: {{$wish->prijs}}</li>
                        <li class="list-group-item">Bericht: {{$wish->bericht}}</li>
                        <li class="list-group-item"><img src="{{asset('storage/' . $wish->foto)}}"></li>
                        <li class="list-group-item">Link: <a href="{{$wish->link}}">{{$wish->link}}</a></li>
                    </ul>
                @endforeach
            @endif



    </div>


@endsection

