<?php 
    require_once("temple_nav.php");
    if ($auth  == true) {
        header('location: ../view/home.php');
    }
?>
    <main>
    <div class="container mt-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="mb-3 text-center">
                <h3 class="font-weight-bold">Registrate</h3>
            </div>
            <form action="../controllers/register_controller.php" method="post" class="shadow p-4"> 
                <div class="mb-3">
                    <label for="name">Ingrese su nombre</label>
                    <input type="text" class="form-control" name="name" id="name" required>
                </div>

                <div class="mb-3">
                    <label for="surname">Ingrese apellido</label>
                    <input type="text" class="form-control" name="surname" id="surname" required>
                </div>
                                 
                <div class="mb-3">
                    <label for="mail">Ingrese un gmail</label>
                    <input type="mail" class="form-control" name="mail" id="mail" required>
                </div>

                <div class="mb-3">
                    <label for="Password">Contraseña</label>
                    <input type="password" class="form-control" name="password" id="Password" require>
                </div>


                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Crear usuario</button>
                </div>
                
            </form>
        </div>
    </div>
</div>
    </main>
</body>
</html>