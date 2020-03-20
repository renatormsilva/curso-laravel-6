<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $produtos = ['p1', 'p2', 'p3'];
        return $produtos;
    }

    public function show($id)
    {
        return " Os produtos são: {$id}";
    }

    public function create()
    {
        return "Criação de produtos";
    }

    public function edit($id)
    {
        return " Os produtos editados são: {$id}";
    }
    
    public function store($id)
    {
        return "Cadastrar novo produto {$id}";
    }

    public function update($id)
    {
        return "Editando o produto {$id}";
    }

    public function destroy($id)
    {
        return " Deletar um produto  {$id}";
    }
}
