<form action="/registro" method="post" enctype="multipart/form-data">
    @csrf
    <br><br>
    Nombre de usuario: <input type="text" name="nombre_usuario" id="">
    <br><br>
    Nombre: <input type="text" name="nombre" id="">
    <br><br>
    Apellidos: <input type="text" name="apellidos" id="">
    <br><br>
    Correo: <input type="text" name="correo" id="">
    <br><br>
    @error('correo')
    Acho, el mail esta mal puesto.
    <br><br>
    @enderror
    Experiencia: <select id="" name="experiencia">
        <option value="Principiante">Principiante</option>
        <option value="Amateur">Amateur</option>
        <option value="Experimentado">Experimentado</option>
        <option value="Profesional novato">Profesional novato</option>
        <option value="Profesional experimentado">Profesional experimentado</option>
    </select>
    <br><br>
    Contraseña: <input type="password" name="contrasena" id="">
    <br><br>
    <br><br>
    Foto: <input type="file" name="image" id="">
    <br><br>
    <button type="submit">Enviar</button>
</form>
