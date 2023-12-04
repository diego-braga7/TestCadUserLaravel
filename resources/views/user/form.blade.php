<!-- resources/views/cadastro.blade.php -->


@extends('layout')

@section('cabecalho')
Cadastro de Usuário
@endsection

@section('conteudo')

<div class="container">
<form method="post" action="/user/register">
    @csrf

    @error('name')
    <div class="alert alert-dark">
        {{ $message }}
     </div>
    @enderror
    @error('name')
    <div class="alert alert-dark">
        {{ $message }}
     </div>
    @enderror
    @error('email')
    <div class="alert alert-dark">
        {{ $message }}
     </div>
    @enderror
    @error('password')
    <div class="alert alert-dark">
        {{ $message }}
     </div>
    @enderror
    @error('password_confirmation')
    <div class="alert alert-dark">
        {{ $message }}
     </div>
    @enderror
    

    <label for="name">Nome:</label>
    <input type="text" name="name" value="{{ old('name') }}">
   

    <label for="email">E-mail:</label>
    <input type="text" name="email" value="{{ old('email') }}">
  

    <label for="password">Senha:</label>
    <input type="password" name="password">
   

    <label for="password_confirmation">Confirmação de Senha:</label>
    <input type="password" name="password_confirmation">
   

    <button type="submit">Cadastrar</button>
</form>
</div>
<script>
    var successMessage = "{{ session('success') }}";
    
    if (successMessage) {
        alert(successMessage);
    }
</script>

@endsection


