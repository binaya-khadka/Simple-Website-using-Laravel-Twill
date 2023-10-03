@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
        'name' => 'description',
        'label' => 'Descriptionss',
        'maxlength' => 100,
    ])
@stop