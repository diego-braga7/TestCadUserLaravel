<!-- resources/views/cadastro.blade.php -->

<form method="post" action="/user/register">
    @csrf

    <label for="name">Nome:</label>
    <input type="text" name="name" value="{{ old('name') }}">
    @error('name')
        <div>{{ $message }}</div>
    @enderror

    <label for="email">E-mail:</label>
    <input type="text" name="email" value="{{ old('email') }}">
    @error('email')
        <div>{{ $message }}</div>
    @enderror

    <label for="password">Senha:</label>
    <input type="password" name="password">
    @error('password')
        <div>{{ $message }}</div>
    @enderror

    <label for="password_confirmation">Confirmação de Senha:</label>
    <input type="password" name="password_confirmation">
    @error('password_confirmation')
        <div>{{ $message }}</div>
    @enderror

    <button type="submit">Cadastrar</button>
</form>

<script>
    var successMessage = "{{ session('success') }}";
    
    if (successMessage) {
        alert(successMessage);
    }
</script>
