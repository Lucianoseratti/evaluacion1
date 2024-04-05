<?php include("header.php")?>
<section class="servicios_contenido">
    <h1>Servicios</h1>
    <div class="servicios_botonera">
        <ul>
            <li><a href="servicios.php?servicio=cm">Comunity Management</a></li>
            <li><a href="servicios.php?servicio=pm">Paid Media</a></li>
            <li><a href="servicios.php?servicio=ec">E-commerce</a></li>
            <li><a href="servicios.php">Cerrar opciones</a></li>
        </ul>

    </div>

</section>
<?php
$servicios="";
$descripcion="";
$img="";
if (isset($_GET["servicio"])){
    switch($_GET["servicio"]){
    case"cm":
        $servicios= "Comunity Management";
        $descripcion= "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vel blanditiis hic odit labore explicabo impedit aliquam nostrum commodi sed tenetur minus quis beatae, praesentium repellat laboriosam nam nobis est exercitationem.";
        $img="./Assets/comunity.jpeg";
        break;
    case"pm":
        $servicios= "Paid Media";
        $descripcion= "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vel blanditiis hic odit labore explicabo impedit aliquam nostrum commodi sed tenetur minus quis beatae, praesentium repellat laboriosam nam nobis est exercitationem.";
        $img="./Assets/paid-media.png";
        break;
    case"ec":
        $servicios= "E-commerce";
        $descripcion= "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vel blanditiis hic odit labore explicabo impedit aliquam nostrum commodi sed tenetur minus quis beatae, praesentium repellat laboriosam nam nobis est exercitationem.";
        $img="./Assets/ecomerce.jpeg";
        break;

    }    
    
?>
<div class="servicios_descripcion">
    <h2><?php echo $servicios ?></h2>
    <p class="desc"><?php echo $descripcion ?></p>
    <div class="contenedor_img">
        <img class="img" src="<?php echo $img;?>" alt="<?php echo $servicios ?>">

    </div>
</div>
<?php } ?>
<?php include("footer.php")?>
