@extends('layouts.master')

@section('title')
    Comics
@endsection

@php
    $comics = config('comics');
    // dd($comics);
@endphp

@section('contenuto')
    <div class="container comics">
        <x-current-title></x-current-title>

        <div class="row row-cols-6 g-3">
            @foreach ($comics as $comic)
                <div class="col">
                    <x-card>
                        <x-slot name="thumb">{{ $comic['thumb'] }}</x-slot>
                        <x-slot name="title">{{ $comic['title'] }}</x-slot>
                    </x-card>
                </div>
            @endforeach
        </div>
    </div>
@endsection
