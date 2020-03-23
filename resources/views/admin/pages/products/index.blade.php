@extends('admin.layouts.app')
@section('title', 'Gestão de produtos')

@section('content')
    <h1> Product List</h1>
    @if (isset($products))
        @foreach ($products as $product)
            
            <p class="@if($loop->last) teste @endif">{{$product}}</p>
        @endforeach
    @endif
    <hr>
    @forelse ($products as $product)
        <p class="@if($loop->first) teste @endif">{{$product}}</p>
    @empty
        
    @endforelse
    {{ $teste }} 
@endsection

@push('styles')
    <style>
        .teste {
            background: red;
        }
    </style>
@endpush