<?php 
    require_once("temple_nav.php");

?>
    <main>
        <section class="info_description">
            <h1>En banco S.A hace crecer tu dinero</h1>
            <p>aqui puedes ahorrar tu dinero de manera segura, y ademas obtendras grandes beneficios por ser nuestro cliente.</p>
        </section> 
        <div class="container-fluid d-flex flex-wrap">
        <?php foreach ($cards as $card) {
         ?>
            <div class="card__">
                <div class="container_img_card_">
                    <img src="<?php echo($card["img"]); ?>" alt="...">
                </div>
                <div class="container_info_card_">
                    <h2><?php echo($card["name"]); ?></h2>
                    <p><?php echo($card["description"]); ?></p>
                    <a href="#">Click para mas información!</a>
                </div>
            </div>
            
        <?php } ?>


        </div>
 
    </main>


    <footer class="bg-dark text-white p-4">
        <div class="container">
        <h2 class="text-center">Redes Sociales</h2>
            <ul class="list-unstyled d-flex justify-content-center m-2">
            <li><a href="https://www.linkedin.com/in/your-name"><i class="fab fa-linkedin fa-2x text-white px-2"></i></a></li>
            <li><a href="https://www.instagram.com/your-username"><i class="fab fa-instagram fa-2x text-white px-2"></i></a></li>
            <li><a href="mailto:your-email"><i class="far fa-envelope fa-2x text-white px-2"></i></a></li>
            <li><a href="https://github.com/your-username"><i class="fab fa-github fa-2x text-white px-2"></i></a></li>
            </ul>
            <p class="text-center">Copyright &copy; 2023 Your Website</p>
        </div>
   </footer>











    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>