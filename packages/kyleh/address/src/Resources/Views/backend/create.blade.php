@extends('templates.base.standard')

@section('page')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                {!! Form::open(array('route' => 'addresses.store', 'class' => 'form')) !!}
                    <div class="form-group">
                        {!! Form::label('Naam') !!}
                        {!! Form::text('name', null,
                            array('required',
                                  'class'=>'form-control',
                                  'placeholder'=>'Naam')) !!}
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('Straat') !!}
                                {!! Form::text('street', null,
                                    array('required',
                                          'class'=>'form-control',
                                          'placeholder'=>'Straat')) !!}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('Huisnummer') !!}
                                {!! Form::text('housenumber', null,
                                    array('required',
                                          'class'=>'form-control',
                                          'placeholder'=>'Huisnummer')) !!}
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('Postcode') !!}
                        {!! Form::text('zipcode', null,
                            array('required',
                                  'class'=>'form-control',
                                  'placeholder'=>'Postcode')) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('Plaats') !!}
                        {!! Form::text('place', null,
                            array('required',
                                  'class'=>'form-control',
                                  'placeholder'=>'Plaats')) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('Land') !!}
                        {!! Form::text('country', null,
                            array('required',
                                  'class'=>'form-control',
                                  'placeholder'=>'Land')) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::submit('Verzenden',
                          array('class'=>'btn btn-primary')) !!}
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop
