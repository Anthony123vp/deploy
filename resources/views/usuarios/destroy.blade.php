<form action="{{ route('usuarios.destroy', $usuario->id_usuarios) }}" method="POST">
    @csrf
    @method('DELETE')
    
    <button type="submit">Desactivar Usuario</button>
</form>