@extends('layout.site')

@section('titulo', 'Cursos')
    

@section('conteudo')
    
    <div class="container">
    <h3 class="center">Entrar</h3>
    <div class="row">
        
        <form action="{{ route('site.login.entrar')}}" method="post" enctype="multipart/form-data">
            
            @csrf

            <div class="input-field">
                <input type="text" name="email" id="email">
                <label>E-mail</label>
            </div>

            <div class="input-field">
                <input type="password" name="senha" id="senha">
                <label>Password</label>
            </div>
            

            <button class="btn deep-orange">Login</button>
        </form>

    
    </div>

   

    </div>
       
@endsection