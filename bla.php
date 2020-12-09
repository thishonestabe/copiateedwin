

<?php 
$platos = array(0 => array("titulo" => 
"arepa", "comensales" => 2, 
"tipo" => "entrada", "ingredients" => 
array("queso", "jamon", "cebolla")), 1 => array("titulo" => "cachapa", "comensales" => 2, "tipo" => "principal", "ingredients" => array(array("nombre: " => "queso", "cantidad" => 2), array("nombre" => "jamon", "cantidad" => 3), array("nombre" => "cebolla", "cantidad" => 4))), 2 => array("titulo" => "tequeno", "comensales" => 1, "tipo" => "entrada", "ingredients" => array(array("nombre"=>"queso", "cantidad"=>2), array("nombre"=>"jamon","cantidad"=>3), array("nombre"=>"cebolla","cantidad"=>4))));
//var_dump($platos);
foreach ($platos as $valor) {
    
    echo '<div style="color: red">Plato: ' . $valor["titulo"] . '</div>';
    echo '<div style="color: blue">Comensales: ' . $valor["comensales"] . '</div>';
    echo '<div style="color: purple">Tipo: ' . $valor["tipo"] . '</div>';
    echo '<br/>';
    };
?>

<?php foreach ($platos as $valor) { ?>

    <?php foreach ($valor as $key => $value) { ?>
        <li><?php echo $key . ' : ' .$value ?></li>
    <?php }?>

    <br/>


    <li><?php echo 'titulo: ' . $valor['titulo'] ?></li>
    <li><?php echo 'comensales: ' . $valor['comensales'] ?></li>
    <li><?php echo 'tipo: ' . $valor['tipo'] ?></li>
    <li> <p>Ingedientes:</p>
    <?php foreach ($valor['ingredients'] as $ingrediente) { ?>
        <?php foreach ($ingrediente as $key2 => $value2) { ?>
        <li><?php echo $key2 . " : " . $value2 ?></li>
        
        <?php }?>
        
    <?php }?>
    </li>
    <br/>
<?php }?>
