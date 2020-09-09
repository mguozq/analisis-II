<?php
//=========== ARCHIVOS NECESARIOS PARA REQUERIR INFROMACION ============
require_once "../../../controladores/cotizaciones.controlador.php";
require_once "../../../modelos/cotizaciones.modelo.php";

require_once "../../../controladores/clientes.controlador.php";
require_once "../../../modelos/clientes.modelo.php";

require_once "../../../controladores/usuarios.controlador.php";
require_once "../../../modelos/usuarios.modelo.php";

require_once "../../../controladores/productos.controlador.php";
require_once "../../../modelos/productos.modelo.php";

require_once "../../../controladores/ajustes.controlador.php";
require_once "../../../modelos/ajustes.modelo.php";
//=======================================================================



class ImprimirCotizacion{

public $codigo;

public function traerCotizacion(){

//TRAER INFORMACION DE LA PROFORMA
$itemProform = "codigo";
$valorProform = $this->codigo;
$respuestaVenta = ControladorCotizaciones::ctrMostrarCotizaciones($itemProform, $valorProform);
//===============================================================================================

//TRAER INFORMACION DE LA TIENDA
$itemTienda = "id";
$valorTienda = 1;
$respuestaTienda = ControladorAjustes::ctrMostrarDatosTienda($itemTienda, $valorTienda);
//===============================================================================================


//VARIABLES CON INFORMACION DE LA PROFORMA
$fecha = substr($respuestaVenta["fecha"],0,-8);
$productos = json_decode($respuestaVenta["productos"], true);
$neto = number_format($respuestaVenta["neto"],2);
$impuesto = number_format($respuestaVenta["impuesto"],2);
$total = number_format($respuestaVenta["total"],2);
//===============================================================================================

//EXTRACCION DE INFORMACION DEL CLIENTE
$itemCliente = "id";
$valorCliente = $respuestaVenta["id_cliente"];
$respuestaCliente = ControladorClientes::ctrMostrarClientes($itemCliente, $valorCliente);
//===============================================================================================


//EXTRACCION DE INFORMACION DEL VENDEDOR
$itemVendedor = "id";
$valorVendedor = $respuestaVenta["id_vendedor"];
$respuestaVendedor = ControladorUsuarios::ctrMostrarUsuarios($itemVendedor, $valorVendedor);
//===============================================================================================




//REQUERIR CLASE PDF_TCPDF
require_once('tcpdf_include.php');
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$pdf->startPageGroup();
$pdf->AddPage();




//------------------------------------------------- PRIMER BLOQUE --------------------------------------------
$bloque1 = <<<EOF

  <table>
  <tr><td style="text-align:center">COTIZACION</td></tr>
    <tr>

      <td style="font-size:7px;background-color:white; width:30px; text-align:center; color:black"><br><br><br>$respuestaTienda[no_tienda]</td>
      <td style="font-size:7px;background-color:white; width:970px; text-align:center; color:red"><br><br>CODIGO.<br>$valorProform</td>

    </tr>
  </table>

EOF;
$pdf->writeHTML($bloque1, false, false, false, false, '');
//----------------------------------------------------- FIN PRIMER BLOQUE -----------------------------------------------

//----------------------------------------------------- SEGUNDO BLOQUE --------------------------------------------------
$bloque2 = <<<EOF



<table style="font-size:7px; padding:5px 10px;">

  <tr>
    <td style="border: 1px solid #666; background-color:white; width:390px">
      Cliente: $respuestaCliente[nombre]
    </td>
    <td style="border: 1px solid #666; background-color:white; width:150px; text-align:right">
      Fecha: $fecha
    </td>
  </tr>

  <tr>
    <td style="border: 1px solid #666; background-color:white; width:540px">Vendedor: $respuestaVendedor[nombre]</td>
  </tr>

  <tr>
    <td style="border-bottom: 1px solid #666; background-color:white; width:540px"></td>
  </tr>

</table>
EOF;
$pdf->writeHTML($bloque2, false, false, false, false, '');
//-----------------------------------------------------FIN SEGUNDO BLOQUE ------------------------------------------------



//----------------------------------------------------- TERCER BLOQUE --------------------------------------------------
$bloque3 = <<<EOF
<table style="font-size:7px; padding:5px 10px;">
  <tr>
    <td style="border: 1px solid #666; background-color:white; width:80px; text-align:center">Cantidad</td>
    <td style="border: 1px solid #666; background-color:white; width:260px; text-align:center">Producto</td>
    <td style="border: 1px solid #666; background-color:white; width:100px; text-align:center">Valor Unit.</td>
    <td style="border: 1px solid #666; background-color:white; width:100px; text-align:center">Valor Total</td>

  </tr>
</table>
EOF;
$pdf->writeHTML($bloque3, false, false, false, false, '');
//-----------------------------------------------------FIN TERCER BLOQUE ------------------------------------------------


foreach ($productos as $key => $value) {

$itemProducto = "id";
$valorProducto = $value["id"];
$orden = "id";
$respuestaProducto = ControladorProductos::ctrMostrarProductos($itemProducto, $valorProducto, $orden);

$precioUnitario = number_format($value["precioReal"],2);
$precioTotal = number_format($value["precioTotal"],2);

//----------------------------------------------------- CUARTO BLOQUE --------------------------------------------------
$bloque4 = <<<EOF
<table style="font-size:7px; padding:5px 5px; color:#333">

    <tr>

      <td style="border: 1px solid #fff; color:#333; background-color:white; width:80px; text-align:center">
      $value[cantidad]
      </td>

      <td style="border: 1px solid #fff; color:#333; background-color:white; width:260px; text-align:center">
      $respuestaProducto[descripcion]
      </td>

      <td style="border: 1px solid #fff; color:#333; background-color:white; width:100px; text-align:left">Q
      $precioUnitario
      </td>

      <td style="border: 1px solid #fff; color:#333; background-color:white; width:100px; text-align:left">Q
      $precioTotal
      </td>


    </tr>
</table>
EOF;
$pdf->writeHTML($bloque4, false, false, false, false, '');
//-----------------------------------------------------FIN CUARTO BLOQUE ------------------------------------------------

}






//----------------------------------------------------- QUINTO BLOQUE --------------------------------------------------
$bloque5 = <<<EOF
	<table style="font-size:7px; padding:5px 10px;">

    <tr>
      <td style="color:#333; background-color:white; width:340px; text-align:center"></td>
      <td style="border-bottom: 1px solid #666; background-color:white; width:100px; text-align:center"></td>
      <td style="border-bottom: 1px solid #666; color:#333; background-color:white; width:100px; text-align:center"></td>
    </tr>

    <tr>
      <td style="border-right: 1px solid #666; color:#333; background-color:white; width:340px; text-align:center"></td>
      <td style="border: 1px solid #666;  background-color:white; width:100px; text-align:center">Total:</td>
      <td style="border: 1px solid #666; color:#333; background-color:white; width:100px; text-align:center">Q $total</td>
    </tr>


  </table>
EOF;
$pdf->writeHTML($bloque5, false, false, false, false, '');
//-----------------------------------------------------FIN QUINTO BLOQUE ------------------------------------------------


//SALIDA ARCHIVO
$pdf->Output('cotizacion.pdf');
}

}

$proform = new ImprimirCotizacion();
$proform -> codigo = $_GET["codigo"];
$proform -> traerCotizacion();












?>
