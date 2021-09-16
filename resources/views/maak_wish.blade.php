@extends('layouts.app')
@extends('inc.header')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Maak een wens</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>

                        @endif

                        @include('inc.messages')






                            <form method="post" action="/maak_wish/submit" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="formGroupExampleInput">wens</label>
                                    <input name="wens" type="text" class="form-control" id="formGroupExampleInput">
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Foto</label>
                                    <input type="file" name="foto">
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Prijs</label>
                                    <input name="prijs" type="text" class="form-control" id="formGroupExampleInput2">
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Link</label>
                                    <input name="link" type="text" class="form-control" id="formGroupExampleInput2">
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Bericht</label>
                                    <input name="bericht" type="text" class="form-control" id="formGroupExampleInput2" style="height: 150px">
                                </div>
                                <div class="form-group">
                                    <input name="userId" value="{{Auth::user()->id}}" type="hidden" class="form-control" id="formGroupExampleInput2" style="height: 150px">
                                </div>

                                <button type="submit">Verzend</button>
                            </form>




                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
