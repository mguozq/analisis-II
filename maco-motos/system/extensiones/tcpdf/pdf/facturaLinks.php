<?php
//=========== ARCHIVOS NECESARIOS PARA REQUERIR INFROMACION ============
require_once "../../../controladores/ventas.controlador.php";
require_once "../../../modelos/ventas.modelo.php";

require_once "../../../controladores/clientes.controlador.php";
require_once "../../../modelos/clientes.modelo.php";

require_once "../../../controladores/usuarios.controlador.php";
require_once "../../../modelos/usuarios.modelo.php";

require_once "../../../controladores/productos.controlador.php";
require_once "../../../modelos/productos.modelo.php";

require_once "../../../controladores/ajustes.controlador.php";
require_once "../../../modelos/ajustes.modelo.php";
//=======================================================================



class ImprimirFacturaLinks{

public $codigo;

public function traerFacturaLinks(){

//TRAER INFORMACION DE LA PROFORMA
$itemProform = "codigo";
$valorProform = $this->codigo;
$respuestaVenta = ControladorVentas::ctrMostrarVentas($itemProform, $valorProform);
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
$pdf->setPrintHeader(false);
$pdf->AddPage();




//------------------------------------------------- PRIMER BLOQUE --------------------------------------------
$bloque1 = <<<EOF

  <table>
  <tr><td style="text-align:center"></td></tr>
    <tr>


      <td style="font-size:10px;background-color:white; width:970px; text-align:center; color:red"><br><br><br><br> $fecha</td>
      <td style="font-size:7px;background-color:white; width:970px; text-align:center; color:red"><br><br><br><br><br><br><br></td>


    </tr>
  </table>

EOF;
$pdf->writeHTML($bloque1, false, false, false, false, '');
//----------------------------------------------------- FIN PRIMER BLOQUE -----------------------------------------------

//----------------------------------------------------- SEGUNDO BLOQUE --------------------------------------------------
$bloque2 = <<<EOF



<table style="font-size:8px; padding:3px 11px;">

  <tr>
    <td style="border: 0px solid #ffffff; background-color:white; width:146px; text-align:right">$respuestaCliente[nombre]</td>
  </tr>

  <tr>
    <td style="border: 0px solid #ffffff; background-color:white; width:142px; text-align:right">$respuestaCliente[direccion]</td>
    <td style="border: 0px solid #ffffff; background-color:white; width:400px; text-align:right">$respuestaCliente[documento]</td>
  </tr>


</table>
EOF;
$pdf->writeHTML($bloque2, false, false, false, false, '');
//-----------------------------------------------------FIN SEGUNDO BLOQUE ------------------------------------------------



//----------------------------------------------------- TERCER BLOQUE --------------------------------------------------
$bloque3 = <<<EOF
<table style="font-size:7px; padding:5px 10px; color:white">
  <tr>
    <td style="border: 1px solid #ffffff; background-color:white; width:40px; text-align:center">Cantidad</td>
    <td style="border: 1px solid #ffffff; background-color:white; width:300px; text-align:center">Producto</td>
    <td style="border: 1px solid #ffffff; background-color:white; width:190px; text-align:center">Valor Total</td>

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
<table style="font-size:8px; padding:1px 0px; color:#333">

    <tr>

      <td style="border: 1px solid #fff; color:#333; background-color:white; width:54px; text-align:center">$value[cantidad]</td>

      <td style="border: 1px solid #fff; color:#333; background-color:white; width:445px; text-align:left">$respuestaProducto[descripcion]</td>

      <td style="border: 1px solid #fff; color:#333; background-color:white; width:192px; text-align:left">Q $precioTotal</td>


    </tr>
</table>
EOF;
$pdf->writeHTML($bloque4, false, false, false, false, '');
//-----------------------------------------------------FIN CUARTO BLOQUE ------------------------------------------------

}


//----------------------------------------------------- QUINTO BLOQUE --------------------------------------------------
$pdf->SetAutoPageBreak(TRUE, 0);
$pdf->SetFooterMargin(0);
$pdf->SetFont('Courier','',8);
$pdf->SetXY(187, 117);
$pdf->Cell(15, 6, $total, 0 , 1);


//SALIDA ARCHIVO
$pdf->Output('links.pdf');
}

}



$documento = new ImprimirFacturaLinks();
$documento -> codigo = $_GET["codigo"];
$documento -> traerFacturaLinks();












?>
