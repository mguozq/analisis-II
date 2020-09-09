<?php
//=========== ARCHIVOS NECESARIOS PARA REQUERIR INFROMACION ============
require_once "../../../controladores/notas.controlador.php";
require_once "../../../modelos/notas.modelo.php";

require_once "../../../controladores/sucursales.controlador.php";
require_once "../../../modelos/sucursales.modelo.php";

require_once "../../../controladores/usuarios.controlador.php";
require_once "../../../modelos/usuarios.modelo.php";

require_once "../../../controladores/productos.controlador.php";
require_once "../../../modelos/productos.modelo.php";

require_once "../../../controladores/ajustes.controlador.php";
require_once "../../../modelos/ajustes.modelo.php";

require_once "../../../controladores/CifrasEnLetras.php";
//=======================================================================



class NotaSalida{

public $codigo;

public function imprimirNotaSalida(){

//TRAER INFORMACION DE LA PROFORMA
$itemNotas = "codigo";
$valorNota = $this->codigo;
$respuestanota = ControladorNotas::ctrMostrarNotas($itemNotas, $valorNota);
//===============================================================================================

//TRAER INFORMACION DE LA TIENDA
$itemTienda = "id";
$valorTienda = 1;
$respuestaTienda = ControladorAjustes::ctrMostrarDatosTienda($itemTienda, $valorTienda);
//===============================================================================================

//VARIABLES CON INFORMACION DE LA PROFORMA
$fecha = substr($respuestanota["fecha"],0,-8);
$productos = json_decode($respuestanota["productos"], true);
$neto = number_format($respuestanota["neto"],2);
$impuesto = number_format($respuestanota["impuesto"],2);
$total = number_format($respuestanota["total"],2);
$totalALetras = (float)$respuestanota["total"];
$totalEnLetras = CifrasEnLetras::convertirEurosEnLetras($totalALetras);
//===============================================================================================

//EXTRACCION DE INFORMACION DE LA SUCURSAL
$itemSucursal = "id";
$valorSucursal = $respuestanota["id_sucursal"];
$respuestaSucursal = ControladorSucursales::ctrMostrarSucursales($itemSucursal, $valorSucursal);
//===============================================================================================


//EXTRACCION DE INFORMACION DEL VENDEDOR
$itemVendedor = "id";
$valorVendedor = $respuestanota["id_vendedor"];
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
  <tr><td style="text-align:center">NOTA DE SALIDA</td></tr>
    <tr>

      <td style="font-size:7px;background-color:white; width:240px; text-align:left; color:black"><br><br><br>$respuestaTienda[no_tienda] ($respuestaTienda[nombre])</td>
      <td style="font-size:7px;background-color:white; width:490px; text-align:center; color:red"><br><br>CODIGO.<br>$valorNota</td>

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
    Enviado a sucursal: $respuestaSucursal[nombreTienda]
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
      <td style="border-bottom: 1px solid #666; background-color:white; width:110px; text-align:center"></td>
      <td style="border-bottom: 1px solid #666; background-color:white; width:330px; text-align:center"></td>
      <td style="border-bottom: 1px solid #666; color:#333; background-color:white; width:100px; text-align:center"></td>
    </tr>

    <tr>
      <td style="border: 1px solid #666;  background-color:white; width:110px; text-align:center">TOTAL: (Numero y Letras)</td>
      <td style="border: 1px solid #666;  background-color:white; width:330px; text-align:center">$totalEnLetras</td>
      <td style="border: 1px solid #666; color:#333; background-color:white; width:100px; text-align:center">Q $total</td>
    </tr>


  </table>
EOF;
$pdf->writeHTML($bloque5, false, false, false, false, '');
//-----------------------------------------------------FIN QUINTO BLOQUE ------------------------------------------------


//SALIDA ARCHIVO
$pdf->Output('proformaVenta.pdf');
}

}

$nota = new NotaSalida();
$nota -> codigo = $_GET["codigo"];
$nota -> imprimirNotaSalida();












?>
