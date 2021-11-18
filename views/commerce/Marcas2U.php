<!--Se invoca de la clase Commerce un método que recibe por parámetros el nombre del titulo de la página y un numero que sera el enzabezado que se desea y que imprimira la parte superior de la página-->
<?php
require_once('../../core/helpers/Comercial.php');
Commerce::headerCommerce( 'Marcas con sus productos', 3 );
?>
<!--Se crea el encabezado de la página-->
<div class="center-align" id="CajaSlider">
    <h3 style="text-align: center;" id="h3_encabezado">Marcas con productos</h3>
</div>

<!--Se crea el contenedor del carrusel de productos de cada marca de la página-->
<div class="principal" id="CajaPrincipalMarcas2">
    <div class="row">
        <div class="col l12 m12 s12">
            <div class="card-panel z-depth-5 center-align CajaScrollMarcas2U" id="CajaSlider">
            </div>
        </div>
    </div>
</div>

<!--Se crea la ventana para dar detalles de la cantidad de producto al momento de comprar,
y obtener precios segun la cantidad de producto a comprar con descuento aplicado-->
<div id="save-modal" class="modal">
    <div class="modal-content">
            <h4 id="modal-title" class="center-align"></h4>
        <form method="POST" autocomplete="off" id="Form_compra" name="Form_compra" enctype="multipart/form-data" onsubmit="return validarCompras();">
            <input class="hide" type="text" id="id_productos" name="id_productos"/>
            <input class="hide" type="text" id="precio" name="precio"/>
            <input class="hide" type="text" id="cantidad" name="cantidad"/>
            <div class="row">
                <div class="input-field col l6 s12 m6">
                    <i class="material-icons prefix">monetization_on</i>
                    <input id="txt_precio" name="txt_precio" type="text" class="validate" autocomplete = "off" onkeypress="return false" oncopy="return false" oncut="return false" onpaste="return false" oncut="return false" onpaste="return false"/>
                </div>
                <div class="input-field col l6 s12 m6">
                    <i id="icono_promocion" name="icono_promocion" class="material-icons prefix">card_giftcard</i>
                    <input id="txt_promocion" name="txt_promocion" type="text" class="validate" autocomplete = "off" onkeypress="return false" oncopy="return false" oncut="return false" onpaste="return false" oncut="return false" onpaste="return false"/>
                </div>
                <div class="input-field col l6 s12 m6">
                    <i class="material-icons prefix">shopping_cart</i>
                    <input id="txt_cantidad" type="number" name="txt_cantidad" onkeypress="return ValidarEscritura(event, 'num', this)" class="validate" min="1" step="any" oncopy="return false" oncut="return false" onpaste="return false" oncut="return false" onpaste="return false" required/>
                    <label for="txt_cantidad">Cantidad</label>
                </div>
            </div>
            <div class="row center-align">
                <a href="#" class="btn waves-effect grey tooltipped modal-close" data-tooltip="Cancelar"><i class="material-icons">cancel</i></a>
                <button type="submit" class="btn waves-effect blue tooltipped" data-tooltip="Guardar"><i class="material-icons">save</i></button>
            </div>
        </form>
    </div>
</div>

<!--Se invoca de la clase Commerce un método que recibe por parámetros el nombre del archivo JS y que imprimira la parte inferior de la página-->
<?php
require_once('../../core/helpers/Comercial.php');
Commerce::footerCommerce( 'Marcas2U' );
?>

