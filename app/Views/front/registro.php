<!-- Formulario de registro -->
<div class="container mt-2 mb-5 d-flex justify-content-center">
    <div class="card" style="width: 50%;" id="registro">
        <div class="card-header text-center">
            <h2>Registrarse</h2>
        </div>
        <form>
            <div class="card-body justify-content-center" media="(max-width:768px)">
                <div class="form mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input id="nombre" name="nombre" type="text" class="form-control registro-input" placeholder="Ingrese su nombre" required onblur="this.value = this.value.toUpperCase()">
                </div>

                <div class="form mb-3">
                    <label for="apellido" class="form-label">Apellido</label>
                    <input id="apellido" type="text" name="apellido" class="form-control registro-input" placeholder="Ingrese su apellido" required onblur="this.value = this.value.toUpperCase()">
                </div>

                <div class="form mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input id="email" name="email" type="email" class="form-control registro-input" placeholder="correo@dominio.com" required
                    pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}">

                <div class="form mb-3">
                    <label for="usuario" class="form-label">Usuario</label>
                    <input id="usuario" type="text" name="usuario" class="form-control" placeholder="Nombre de usuario">
                </div>

                <div class="form mb-3">
                    <label for="pass" class="form-label">Contraseña</label>
                    <input id="pass" name="pass" type="password" class="form-control registro-input" placeholder="contraseña" required
                    pattern=".{6,8}" title="La contraseña debe tener entre 6 y 8 caracteres">
                </div>

                <input type="submit" value="Guardar" class="btn btn-success">
                <a href="principal.html" class="btn btn-danger">Cancelar</a>
                <input type="reset" value="Borrar" class="btn btn-secondary">
            </div>
        </form>
    </div>
</div>