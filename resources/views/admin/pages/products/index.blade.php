@extends('admin.layouts.app')
@section('title', 'Gestão de produtos')

@section('content')
    <h1>Exibindo Produtos</h1>
    <a href="{{ route('products.create') }}">Cadastrar</a>
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