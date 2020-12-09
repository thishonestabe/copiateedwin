

<?php 
$platos = array(0 => array("titulo" => 
"arepa", "comensales" => 2, 
"tipo" => "entrada", "ingredients" => 
array("queso", "jamon", "cebolla")), 1 => array("titulo" => "cachapa", "comensales" => 2, "tipo" => "principal", "ingredients" => array("queso", "jamon", "cebolla")), 2 => array("titulo" => "tequeno", "comensales" => 1, "tipo" => "entrada", "ingredients" => array("queso", "jamon", "cebolla")));
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
        <li><?php echo $ingrediente ?></li>
    <?php }?>
    </li>
    <br/>
<?php }?>
