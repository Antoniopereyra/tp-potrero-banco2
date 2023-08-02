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
                <h3 class="font-weight-bold">Inicia Sección</h3>
            </div>
            <form action="../controllers/login_controller.php" method="post" class="shadow p-4">                  
                <div class="mb-3">
                    <label for="mail">Usuario</label>
                    <input type="email" class="form-control" name="mail" id="mail" placeholder="ejemplo">
                </div>

                <div class="mb-3">
                    <label for="Password">Contraseña</label>
                    <input type="password" class="form-control" name="password" id="Password" placeholder="*********">
                </div>


                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Iniciar</button>
                </div>
                
            </form>
        </div>
    </div>
</div>
    </main>
</body>
</html>