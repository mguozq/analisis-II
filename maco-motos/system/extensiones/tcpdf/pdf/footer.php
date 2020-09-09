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
require "../../../controladores/conversor.php";
//=======================================================================



class ImprimirFactura1{

public $codigo;

public function traerFactura1(){

//TRAER INFORMACION DE LA PROFORMA
$itemVenta = "codigo";
$valorVenta = $this->codigo;
$respuestaVenta = ControladorVentas::ctrMostrarVentas($itemVenta, $valorVenta);
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
$pdf->AddPage('P', 'A5');



//------------------------------------------------- PRIMER BLOQUE --------------------------------------------
$bloque1 = <<<EOF
<br>
<br>
  <table>
  <tr><td style="font-size:6px;color:gray">$valorVenta</td></tr>
    <tr>


      <td style="background-color:white; width:70px">
        <div style="font-size:4.5px; text-align:right; line-height:6px;">

            <br>

        </div>
      </td>

      <td style="background-color:white; width:70px">
        <div style="font-size:4.5px; text-align:right; line-height:6px;">

          <br>

        </div>
      </td>

      <td style="background-color:white; font-size:5.5px; width:50px; text-align:center; color:red"><br><br><br></td>

    </tr>
  </table>

EOF;
$pdf->writeHTML($bloque1, false, false, false, false, '');
//----------------------------------------------------- FIN PRIMER BLOQUE -----------------------------------------------

//----------------------------------------------------- SEGUNDO BLOQUE --------------------------------------------------
$bloque2 = <<<EOF

<table>
  <tr>
    <td style="width:540px"><img src="images/back.jpg"></td>
  </tr>
</table>
<br>
<br>

<table style="font-size:9px; padding:3px 0px;">

  <tr>
    <td style="border: 0px solid #ffffff; background-color:white; width:60px"></td>
    <td style="border: 0px solid #ffffff; background-color:white; width:150px"></td>
  </tr>

  <tr>
    <td style="border: 0px solid #ffffff; background-color:white; width:15px"></td>
    <td style="border: 0px solid #ffffff; background-color:white; width:60px"></td>
    <td style="border: 0px solid #ffffff; background-color:white; width:60px">$fecha</td>
    <td style="width:540px"><img src="images/backFact2.jpg"></td>
  </tr>

  <tr>
    <td style="border: 0px solid #ffffff; background-color:white; width:15px"></td>
    <td style="border: 0px solid #ffffff; background-color:white; width:60px"></td>
    <td style="border: 0px solid #ffffff; background-color:white; width:150px;">$respuestaCliente[nombre]</td>
  </tr>

  <tr>
    <td style="border: 0px solid #ffffff; background-color:white; width:15px"></td>
    <td style="border: 0px solid #ffffff; background-color:white; width:60px"></td>
    <td style="border: 0px solid #ffffff; background-color:white; width:240px">$respuestaCliente[direccion]</td>
  </tr>

</table>

<table style="font-size:9px; padding:-5px 5px">
<tr>
  <td style="border: 0px solid #ffffff; background-color:white; width:270px"></td>
  <td style="border: 0px solid #ffffff; background-color:white; width:60px">$respuestaCliente[documento]</td>
</tr>
</table>


EOF;
$pdf->writeHTML($bloque2, false, false, false, false, '');
//-----------------------------------------------------FIN SEGUNDO BLOQUE ------------------------------------------------



//----------------------------------------------------- TERCER BLOQUE --------------------------------------------------
$bloque3 = <<<EOF
<table style="font-size:6px; padding:10px 1px">
  <tr>

    <td style="border: 0px solid #ffffff; background-color:white; width:40px; text-align:center"></td>
    <td style="border: 0px solid #ffffff; background-color:white; width:215px; text-align:center"></td>
    <td style="border: 0px solid #ffffff; background-color:white; width:50px; text-align:center"></td>
    <td style="border: 0px solid #ffffff; background-color:white; width:50px; text-align:center"></td>

  </tr>
</table>
<br>
EOF;
$pdf->writeHTML($bloque3, false, false, false, false, '');
//-----------------------------------------------------FIN TERCER BLOQUE ------------------------------------------------


foreach ($productos as $key => $value) {

$itemProducto = "id";
$valorProducto = $value["id"];
$orden = "id";
$respuestaProducto = ControladorProductos::ctrMostrarProductos($itemProducto, $valorProducto, $orden);

if($respuestaProducto != ""){
  $marca = " (".$respuestaProducto["marca"].")";
}else{
  $marca = "";
}

$precioUnitario = number_format($value["precioReal"],2);
$precioTotal = number_format($value["precioTotal"],2);

//----------------------------------------------------- CUARTO BLOQUE --------------------------------------------------
$bloque4 = <<<EOF
<table style="font-size:8px; padding:2px 1px; color:#ffffff">

    <tr>
      <td style="border: 1px solid #ffffff; background-color:white; width:10px"></td>
      <td style="border: 0px solid #ffffff; color:#333; background-color:white; width:40px; text-align:center">
      $value[cantidad]
      </td>
      <td style="border: 1px solid #ffffff; background-color:white; width:6px"></td>
      <td style="border: 0px solid #ffffff; color:#333; background-color:white; width:200px">
      $respuestaProducto[descripcion]
      </td>

      <td style="border: 0px solid #ffffff; color:#333; background-color:white; width:50px; text-align:center">Q
      $precioUnitario
      </td>

      <td style="border: 0px solid #ffffff; color:#333; background-color:white; width:50px; text-align:center">Q
      $precioTotal
      </td>


    </tr>
</table>
EOF;
$pdf->writeHTML($bloque4, false, false, false, false, '');
//-----------------------------------------------------FIN CUARTO BLOQUE ------------------------------------------------

}


$pdf->SetAutoPageBreak(TRUE, 0);
$pdf->SetFooterMargin(0);
$pdf->SetFont('Courier','',8);
$pdf->SetXY(115, 195);
$pdf->Cell(15, 6, $total, 0 , 1);


//SALIDA ARCHIVO
$pdf->Output('factura.pdf');
}

}

$proform = new ImprimirFactura1();
$proform -> codigo = $_GET["codigo"];
$proform -> traerFactura1();












?>
