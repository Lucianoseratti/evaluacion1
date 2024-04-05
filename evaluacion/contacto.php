<?php include("header.php")?>
<section class="contacto_contenido">
    <h2>Contacto</h2> <br><br>
    
    <h4>Si estas interesado en adquirir nuestros servicios, envianos una consulta que te contactamos a la brevdad</h4><br><br>
    <form action="enviar_consulta.php" method="post">
        <label for="nombre">Empresa</label>
        <input type="text" name="nombre" class="contacto_input">
        <label for="contacto">Contacto</label>
        <input type="text" name="contacto" class="contacto_input">
        <label for="email">Email</label>
        <input type="email" name="email" class="contacto_input">
        <label for="mensaje">Mensaje</label>
        <textarea name="mensaje" id="" cols="30" rows="10"class="contacto_input"></textarea>
        <input type="submit" value="Enviar Consulta"class="contacto_btn">
    </form>

</section>

<?php include("footer.php")?>