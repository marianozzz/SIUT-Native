<div class="row">
    <div class="col-md-6">
        <form id="registroForm" class="form-control mt-4">
        <div class="form-group">
            <label for="">Usuario</label>
            <input type="text" name="nombre" id="nombre"class="form-control">
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="email" name="correo" id="correo"class="form-control">
        </div>
        <div class="form-group">
            <label for="">Contraseña</label>
            <input type="password" name="password" id="password" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Repetir Contraseña</label>
            <input type="password" name="repeat" class="form-control">
        </div>
        <input type="submit" value="Registrarme" class="btn btn-primary mt-2">
        </form>
    </div>
</div>

<script>
        $(document).ready(function() {
            $("#registroForm").submit(function(event) {
                event.preventDefault();

                var nombre = $("#nombre").val();
                var correo = $("#correo").val();
                var password = $("#password").val();

                $.ajax({
                    type: "POST",
                    url: "auth/Register.php",
                    data: { nombre: nombre, correo: correo, password: password },
                    success: function(response) {
                        alert(response);
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });
            });
        });
    </script>