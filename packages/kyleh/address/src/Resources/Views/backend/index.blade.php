@extends('templates.base.standard')

@section('page')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Addressenlijst</h1>

                <ul>
                    @if(!empty($addresses))
                        @foreach($addresses as $address)
                            <li>
                                <strong>{{$address->name}}</strong> | {{$address->street}} {{$address->housenumber}} | {{$address->zipcode}} {{$address->place}} {{$address->country}}
                            </li>
                        @endforeach
                    @endif
                </ul>

                <a href="/address/create"><div class="btn btn-primary">Nieuw adres aanmaken</div></a>
            </div>
        </div>
    </div>
@stop
