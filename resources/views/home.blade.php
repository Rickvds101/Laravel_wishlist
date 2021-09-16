@extends('layouts.app')
@extends('inc.header')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Ga naar beheer om wensen te maken/veranderen/bekijken of te verwijderen<br>
                    Als je naar de database gaat kan je jezelf admin maken doormiddel van de<br>
                    <h5>role van 0 naar 1 te veranderen in de user tabel</h5> dan kan je iedereens wensen zien
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
