
<div class="row mt-4">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-primary">
               Iniciar Sesion
            </div>
            <div class="card-body bg-secondary">
                <form action="" method="post" class="form-control bg-secondary" id="formulario" onsubmit="return do_login();">
                    <div class="form-group">
                        <label for="emailid">Ingrese su email</label>
                        <input type="email" name="email" id="emailid" class="form-control" id="">
                    </div>
                    <div class="form-group">
                        <label for="password">Ingrese clave</label>
                        <input type="password" name="pass" id="password" class="form-control" id="">
                    </div>

                    <input type="submit" value="Ingresar" id="btn-ingresar" class="btn btn-success mt-4" >
                </form>
            </div>
            <div class="card-footer bg-primary">
            <p>Todos los derechos reservados</p>
            </div>
        </div>
    </div>
</div>
<script>
function do_login()
{
 var email=$("#emailid").val();
 var pass=$("#password").val();
 //console.log(email);
 //console.log(pass);
 if(email!="" && pass!="")
 {
 console.log(email);
 console.log(pass);
    // $("#loading_spinner").css({"display":"block"});
    $.ajax
    ({
    type:'post',
    url:'autenticador.php',
    data:{
    do_login:"do_login",
    email:email,
    password:pass
    },
    success:function(response)
        {
        if(response=="success")
            {
                window.location.href="index.php";
            }
        else
            {
               // $("#loading_spinner").css({"display":"none"});
                alert("Wrong Details");
            }
        }
    });
 }
 else
 {
  alert("Please Fill All The Details");
 }

 return false;
}
</script>

</script>