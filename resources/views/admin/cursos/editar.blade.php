@extends('layout.site')

@section('titulo', 'Cursos')
    

@section('conteudo')
    
    <div class="container">
    <h3 class="center">Editando  Cursos</h3>
    <div class="row">
        
        <form action="{{ route('admin.cursos.atualizar',$registro->id)}}" method="post" enctype="multipart/form-data">
            
            @csrf
            <input type="hidden" name="_method" value="put">
            @include('admin.cursos._form')

            <button class="btn deep-orange">Atualizar</button>
        </form>

    
    </div>

   

    </div>
       
@endsection