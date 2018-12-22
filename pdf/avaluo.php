<?php

require ('../common/lib/pdf/fpdf.php');

//recordar que usamos la herencia ya sobreescribir los metodos no definidos en la clase superior FPDF
class PDF extends FPDF {

    //Cabecera de página
    function Header() {
        $pdf = new PDF();
        $this->SetFont('Arial', 'B', 10);
        //$this->SetTextColor(21, 137, 156);
        $this->SetTextColor(0, 0, 0);

        $this->SetFillColor(255, 255, 255);
        $this->Rect(6, 5, 197, 282, "FD");


        //Título
        $this->SetFillColor(200, 220, 255);
        $this->Rect(21, 10, 170, 15, "FD");
        $this->Cell(0, 10, 'ARQ.  JULIETA SALAS SALAMANCA', 0, 0, 'C');

        $this->SetFont('Arial', 'B', 7);
        $this->Cell(-192, 20, 'PERITO EVALUADOR', 0, 0, 'C');
        //Salto de línea
        $this->Ln(25);
    }

    //Pie de página
    function Footer() {
        //Posición: a 1,5 cm del final
        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 8);
        $this->Cell(0, 15, 'OFICINA: EL ALTO  -  CALLE 4 ESQ. JORGE CARRASCO  Nª  225 EDIF. KOLLASUYO OF. 101  TEL: 2823704 CEL.: 71288305', 0, 0, 'C');
        //Arial italic 8
        $this->SetFont('Arial', 'I', 8);

        //Número de página
        $this->Cell(0, 20, 'Página ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }

}

require '../common/lib/config.php';
require '../common/lib/Base_Datos.php';
require '../common/lib/Conexion.php';
require '../common/lib/numerosALetras.class.php';
require '../common/lib/Cliente_Controlador.php';
require '../common/lib/Tabla0_Controlador.php';
require '../common/lib/Tabla1_Controlador.php';
require '../common/lib/Tabla2_Controlador.php';
require '../common/lib/Tabla3_Controlador.php';
require '../common/lib/Tabla4_Controlador.php';
require '../common/lib/Tabla5_Controlador.php';
require '../common/lib/Tabla6_Controlador.php';
require '../common/lib/Tabla62_Controlador.php';
require '../common/lib/Tabla7_Controlador.php';
require '../common/lib/Tabla8_Controlador.php';
require '../common/lib/Tabla9_Controlador.php';
require '../common/lib/Tabla10_Controlador.php';
require '../common/lib/Tabla11_Controlador.php';
require '../common/lib/Tabla112_Controlador.php';
require '../common/lib/Tabla113_Controlador.php';
require '../common/lib/Tabla114_Controlador.php';
require '../common/lib/Tabla115_Controlador.php';
require '../common/lib/Tabla116_Controlador.php';
require '../common/lib/Tabla117_Controlador.php';
require '../common/lib/Tabla18_Controlador.php';
require '../common/lib/Tabla119_Controlador.php';
//require '../common/lib/Cliente_Controlador.php';

$objConexion = new Conexion;
$objTabla0Controlador = new Tabla0__Controlador;
$objTabla1Controlador = new Tabla1__Controlador;
$objTabla2Controlador = new Tabla2__Controlador;
$objTabla3Controlador = new Tabla3__Controlador;
$objTabla4Controlador = new Tabla4__Controlador;
$objTabla5Controlador = new Tabla5__Controlador;
$objTabla6Controlador = new Tabla6__Controlador;
$objTabla62Controlador = new Tabla62__Controlador;
$objTabla7Controlador = new Tabla7__Controlador;
$objTabla8Controlador = new Tabla8__Controlador;
$objTabla9Controlador = new Tabla9__Controlador;
$objTabla10Controlador = new Tabla10__Controlador;
$objTabla11Controlador = new Tabla11__Controlador;
$objTabla112Controlador = new Tabla112__Controlador;
$objTabla113Controlador = new Tabla113__Controlador;
$objTabla114Controlador = new Tabla114__Controlador;
$objTabla115Controlador = new Tabla115__Controlador;
$objTabla116Controlador = new Tabla116__Controlador;
$objTabla117Controlador = new Tabla117__Controlador;
$objTabla18Controlador = new Tabla18__Controlador;
$objTabla119Controlador = new Tabla119__Controlador;
//$objClienteControladorControlador = new Cliente_Controlador;


$objConexion->conectarse_Admin();
$arrayTabla0 = $objTabla0Controlador->getArrayDatosTabla0($_GET['CodigoAvaluo']);
$arrayTabla1 = $objTabla1Controlador->getArrayDatosTabla1($_GET['CodigoAvaluo']);
$arrayTabla2 = $objTabla2Controlador->getArrayDatosTabla2($_GET['CodigoAvaluo']);
$arrayTabla3 = $objTabla3Controlador->getArrayDatosTabla3($_GET['CodigoAvaluo']);
$arrayTabla4 = $objTabla4Controlador->getArrayDatosTabla4($_GET['CodigoAvaluo']);
$arrayTabla5 = $objTabla5Controlador->getArrayDatosTabla5($_GET['CodigoAvaluo']);
$arrayTabla6 = $objTabla6Controlador->getArrayDatosTabla6($_GET['CodigoAvaluo']);
$arrayTabla62 = $objTabla62Controlador->getArrayDatosTabla62($_GET['CodigoAvaluo']);
$arrayTabla7 = $objTabla7Controlador->getArrayDatosTabla7($_GET['CodigoAvaluo']);
$arrayTabla8 = $objTabla8Controlador->getArrayDatosTabla8($_GET['CodigoAvaluo']);
$arrayTabla9 = $objTabla9Controlador->getArrayDatosTabla9($_GET['CodigoAvaluo']);
$arrayTabla10 = $objTabla10Controlador->getArrayDatosTabla10($_GET['CodigoAvaluo']);
$arrayTabla11 = $objTabla11Controlador->getArrayDatosTabla11($_GET['CodigoAvaluo']);
$arrayTabla112 = $objTabla112Controlador->getArrayDatosTabla112($_GET['CodigoAvaluo']);
$arrayTabla113 = $objTabla113Controlador->getArrayDatosTabla113($_GET['CodigoAvaluo']);
$arrayTabla114 = $objTabla114Controlador->getArrayDatosTabla114($_GET['CodigoAvaluo']);
$arrayTabla115 = $objTabla115Controlador->getArrayDatosTabla115($_GET['CodigoAvaluo']);
$arrayTabla116 = $objTabla116Controlador->getArrayDatosTabla116($_GET['CodigoAvaluo']);
$arrayTabla117 = $objTabla117Controlador->getArrayDatosTabla117($_GET['CodigoAvaluo']);
$arrayTabla18 = $objTabla18Controlador->getArrayDatosTabla18($_GET['CodigoAvaluo']);
$arrayTabla119 = $objTabla119Controlador->getArrayDatosTabla119($_GET['CodigoAvaluo']);

//$foto6= $objClienteControladorControlador->getFoto6($_GET['CodigoAvaluo']);


$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 12);

//parte superior izquierda
$sFecha = date("d");
$sFecha2 = date("F");
if ($sFecha2 == "January") {
    $sFecha2 = "Enero";
}
if ($sFecha2 == "February") {
    $sFecha2 = "Febrero";
}
if ($sFecha2 == "March") {
    $sFecha2 = "Marzo";
}
if ($sFecha2 == "April") {
    $sFecha2 = "Abril";
}
if ($sFecha2 == "May") {
    $sFecha2 = "Mayo";
}
if ($sFecha2 == "June") {
    $sFecha2 = "Junio";
}
if ($sFecha2 == "July") {
    $sFecha2 = "Julio";
}
if ($sFecha2 == "August") {
    $sFecha2 = "Agosto";
}
if ($sFecha2 == "September") {
    $sFecha2 = "Septiembre";
}
if ($sFecha2 == "October") {
    $sFecha2 = "Octubre";
}
if ($sFecha2 == "November") {
    $sFecha2 = "Noviembre";
}
if ($sFecha2 == "December") {
    $sFecha2 = "Diciembre";
}
$sFecha3 = date("Y");
$sFechat = $sFecha . " de " . $sFecha2 . " " . $sFecha3;
//$pdf->Text(129, 35, $arrayTabla1['Ciudad'] . ", " . $sFechat);/*PONIA LA CIUDAD DONDE PERTENECE EL AVALUO*/
$pdf->Text(129, 35, "La Paz, " . $sFechat);

$pdf->SetFont('Arial', 'B', 12);
$pdf->Text(24, 45, 'Señor :');
$pdf->SetFont('Arial', '', 12);
$pdf->Text(24, 52, $arrayTabla119['Nombre']);
$pdf->Text(24, 57, $arrayTabla119['Empresa']);
//$pdf->Text(24, 59, $arrayTabla1['Solicitante']);



$pdf->SetFont('Arial', '', 40);
$pdf->SetTextColor(21, 137, 156);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('Arial', 'B', 12);
$pdf->Text(24, 66, 'Presente .-');
$pdf->SetFont('Arial', 'B', 10);


$pdf->SetY(80);
$pdf->SetX(44);
//$pdf->Multicell(160, 4, $arrayTabla115['Conclusion'], 0, 'J');
//$pdf->Multicell(160, 4, "Ref. : Avaluo Inmueble Ubicado en " . $arrayTabla1['Direccion'] . " de la ciudad de " . $arrayTabla1['Ciudad'] . '');
$pdf->Multicell(116, 4, "Ref ." . $arrayTabla119['Titulo']);

$pdf->SetFont('Arial', '', 9);

/* if($tamano>129)
  {
  $pdf->SetFont('Arial', '', 12);
  $parte1=substr($cartaTexto, 0, 93);
  $parte2=substr($cartaTexto, 93, 93);
  $parte3=substr($cartaTexto, 187, 93);
  $parte4=substr($cartaTexto, 280, 93);
  $parte5=substr($cartaTexto, 372, 93);
  $parte6=substr($cartaTexto, 466, 93);
  $pdf->Text(24, 89, $parte1);
  $pdf->Text(24, 93, $parte2);
  $pdf->Text(24, 97, $parte3);
  $pdf->Text(24, 101, $parte4);
  $pdf->Text(24, 105, $parte5);
  $pdf->Text(24, 109, $parte6);
  } */
$pdf->SetY(94);
$pdf->SetX(25);
$pdf->Multicell(159, 5, $arrayTabla119['Carta'], 0, 'J');
$pdf->SetFont('courier', '', 8);
//colocamos el puntero debajo de toda la parte superior
$pdf->SetY(116);

$pdf->SetFont('Arial', 'B', 14);
$pdf->Text(84, 149, "RESUMEN EJECUTIVO");


$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(24, 169, 'PROPIETARIO :');
$pdf->SetFont('Arial', '', 9);
$pdf->Text(80, 169, strtoupper($arrayTabla1['Propietario']));
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(24, 174, 'TIPO INMUEBLE :');
$pdf->SetFont('Arial', '', 9);
$pdf->Text(80, 174, strtoupper($arrayTabla0['Tipo_Inmueble']));
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(24, 179, 'URBANIZACIÓN :');
$pdf->SetFont('Arial', '', 9);
$pdf->Text(80, 179, strtoupper($arrayTabla1['Urbanizacion']));
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(24, 184, 'DIRECCIÓN :');
$pdf->SetFont('Arial', '', 9);
$pdf->Text(80, 184, strtoupper($arrayTabla1['Direccion']));
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(24, 189, 'CIUDAD :');
$pdf->SetFont('Arial', '', 9);
$pdf->Text(80, 189, strtoupper($arrayTabla1['Ciudad']));
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(24, 194, 'MATRICULA DE DD.RR. :');
$pdf->SetFont('Arial', '', 9);
$pdf->Text(80, 194, strtoupper($arrayTabla1['Folio_Real']));
$pdf->SetFont('Arial', 'B', 14);
$pdf->Text(84, 209, "TABLA DE VALORES");

//****VALORES***
$pdf->SetFont('Arial', '', 12);
$pdf->SetFont('Arial', '', 9);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(200, 220, 255);
$pdf->Rect(21, 215, 170, 25, "FD");
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(24, 220, 'VALOR COMERCIAL : ');
$pdf->SetFont('Arial', '', 9);
$pdf->line(21, 221, '191', '221');
$pdf->Text(114, 220, number_format($arrayTabla117['Valor_Comercial'], 2));
$pdf->Text(138, 220, 'BS.');
$pdf->Text(154, 220, number_format($arrayTabla116['Valor_Comercial'], 2));
$pdf->Text(174, 220, '$US.');

$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(24, 225, 'VALOR NETO DE REALIZACIÓN O HIPOTECARIO : ');
$pdf->SetFont('Arial', '', 9);
$pdf->line(21, 226, '191', '226');
$pdf->Text(114, 225, number_format($arrayTabla117['Valor_Hipotecario'], 2));
$pdf->Text(138, 225, 'BS.');
$pdf->Text(154, 225, number_format($arrayTabla116['Valor_Hipotecario'], 2));
$pdf->Text(174, 225, '$US.');

$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(24, 230, 'VALOR CATASTRAL : ');
$pdf->SetFont('Arial', '', 9);
$pdf->line(21, 231, '191', '231');
$pdf->Text(114, 230, number_format($arrayTabla117['Valor_Catastral'], 2));
$pdf->Text(138, 230, 'BS.');
$pdf->Text(154, 230, number_format($arrayTabla116['Valor_Catastral'], 2));
$pdf->Text(174, 230, '$US.');

$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(24, 235, 'VALOR DE VENTA RÁPIDA O LIQUIDACIÓN : ');
$pdf->SetFont('Arial', '', 9);
$pdf->line(21, 236, '191', '236');
$pdf->Text(114, 235, number_format($arrayTabla117['Valor_Liquidacion'], 2));
$pdf->Text(138, 235, 'BS.');
$pdf->Text(154, 235, number_format($arrayTabla116['Valor_Liquidacion'], 2));
$pdf->Text(174, 235, '$US.');

$pdf->SetTextColor(0, 0, 0);
$pdf->Text(21, 245, "Tipo de cambio : Bolivianos " . $arrayTabla0['Tipo_Cambio']);

$pdf->SetFont('Arial', '', 8);
$pdf->Text(85, 265, 'ARQ. JULIETA SALAS SALAMANCA');
$pdf->Text(97, 270, 'REG. NAL. 3990');
$pdf->AddPage();












//parte superior izquierda
$pdf->SetFont('Arial', '', 45);
$pdf->SetTextColor(21, 137, 156);
$pdf->Text(41, 70, 'AVALUO TÉCNICO');
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('Arial', 'B', 12);
$pdf->Text(93, 75, strtoupper($arrayTabla1['Ciudad'] . ' - Bolivia'));

//parte superior derecha
$sFecha = date("Y/m/d");

//recuadro central
$pdf->SetFont('Arial', '', 9);
$pdf->SetFillColor(255, 255, 255);
$pdf->Rect(12, 89, 184, 30, "FD");
$pdf->SetFont('Arial', 'B', 12);
$pdf->Text(24, 95, 'SOLICITANTE :');
$pdf->SetFont('Arial', '', 9);
$pdf->Text(70, 95, strtoupper($arrayTabla1['Solicitante']));
$pdf->SetFont('Arial', 'B', 12);
$pdf->Text(24, 102, 'PROPIETARIO :');
$pdf->SetFont('Arial', '', 9);
$pdf->Text(70, 102, strtoupper($arrayTabla1['Propietario']));
$pdf->SetFont('Arial', 'B', 12);
$pdf->Text(24, 109, 'URBANIZACIÓN :');
$pdf->SetFont('Arial', '', 9);
$pdf->Text(70, 109, strtoupper($arrayTabla1['Urbanizacion']));
$pdf->SetFont('Arial', 'B', 12);
$pdf->Text(24, 116, 'CIUDAD :');
$pdf->SetFont('Arial', '', 9);
$pdf->Text(70, 116, strtoupper($arrayTabla1['Ciudad']));

$pdf->SetFont('courier', '', 8);
//colocamos el puntero debajo de toda la parte superior
$pdf->SetY(116);

//productos($arrayProducto);

$pdf->SetFont('Arial', '', 14);
$pdf->SetFillColor(255, 255, 255);
//$pdf->Rect(12, 140, 190, 93, "FD");


if ($arrayTabla0['Foto1'] != "") {
    $pdf->Image('../fotos/' . $arrayTabla0['Codigo_Avaluo'] . '/' . $arrayTabla0['Foto1'], 64, 150, 95, 75);
}
$pdf->SetFont('Arial', '', 9);
$pdf->Text(24, 145, $sFecha);

$pdf->SetFont('Arial', '', 14);
$pdf->Text(70, 250, 'ARQ. JULIETA SALAS SALAMANCA');
$pdf->Text(90, 255, 'REG. NAL. 3990');



$pdf->AddPage();

$pdf->Ln();
//*******************************TABLA 1********************************************

$pdf->Text(80, 36, 'AVALUO - TÉCNICO');
$pdf->SetFont('Arial', '', 9);
$pdf->SetFillColor(255, 255, 255);
$pdf->Rect(21, 50, 170, 12, "FD");
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(24, 55, 'FECHA DE REALIZACIÓN : ');
$pdf->SetFont('Arial', '', 9);
$pdf->Text(74, 55, $sFecha);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(24, 60, 'TIPO INMUEBLE : ');
$pdf->SetFont('Arial', '', 9);
$pdf->Text(74, 60, strtoupper($arrayTabla0['Tipo_Inmueble']));

$pdf->SetFont('Arial', 'B', 12);
//$pdf->SetTextColor(21, 137, 156);
$pdf->Text(21, 70, '1.- INFORMACION GENERAL.-');
$pdf->SetFont('Arial', '', 9);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(255, 255, 255);
$pdf->Rect(21, 75, 170, 65, "FD");
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(24, 80, 'SOLICITANTE  : ');
$pdf->SetFont('Arial', '', 9);
$pdf->Text(74, 80, strtoupper($arrayTabla1['Solicitante']));
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(24, 85, 'PROPIETARIO : ');
$pdf->SetFont('Arial', '', 9);
$pdf->Text(74, 85, strtoupper($arrayTabla1['Propietario']));
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(24, 90, 'CIUDAD : ');
$pdf->SetFont('Arial', '', 9);
$pdf->Text(74, 90, strtoupper($arrayTabla1['Ciudad']));
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(24, 95, 'ZONA : ');
$pdf->SetFont('Arial', '', 9);
$pdf->Text(74, 95, strtoupper($arrayTabla1['Zona']));
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(24, 100, 'URBANIZACIÓN : ');
$pdf->SetFont('Arial', '', 9);
$pdf->Text(74, 100, $arrayTabla1['Urbanizacion']);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(24, 105, 'DIRECCIÓN : ');
$pdf->SetFont('Arial', '', 9);
$pdf->Text(74, 105, $arrayTabla1['Direccion']);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(24, 110, 'MANZANA : ');
$pdf->SetFont('Arial', '', 9);
$pdf->Text(74, 110, $arrayTabla1['Manzana']);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(24, 115, 'LOTE : ');
$pdf->SetFont('Arial', '', 9);
$pdf->Text(74, 115, $arrayTabla1['Lote']);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(24, 120, 'TESTIMONIO : ');
$pdf->SetFont('Arial', '', 9);
$pdf->Text(74, 120, $arrayTabla1['Testimonio']);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(24, 125, 'FOLIO REAL : ');
$pdf->SetFont('Arial', '', 9);
$pdf->Text(74, 125, $arrayTabla1['Folio_Real']);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(24, 130, 'CÓDIGO CATASTRAL : ');
$pdf->SetFont('Arial', '', 9);
$pdf->Text(74, 130, $arrayTabla1['Codigo_Catastral']);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(24, 135, 'ÚLTIMO IMPUESTO : ');
$pdf->SetFont('Arial', '', 9);
$pdf->Text(74, 135, $arrayTabla1['Ultimo_Impuesto']);

$pdf->SetFillColor(255, 255, 255);
$pdf->Rect(21, 140, 170, 20, "FD");
$pdf->SetFont('Arial', 'B', 11);
$pdf->Text(24, 145, 'OBSERVACIONES : ');
$pdf->SetFont('Arial', '', 10);


$pdf->SetY(148);
$pdf->SetX(24);
$pdf->Multicell(159, 4, $arrayTabla1['Observaciones'], 0, 'J');

//*********************TABLA 2
$pdf->SetFont('Arial', 'B', 12);
//$pdf->SetTextColor(21, 137, 156);
$pdf->Text(21, 170, '2.- TABLA DE VALORES.-');
$pdf->SetFont('Arial', 'B', 9);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(200, 220, 255);
$pdf->Rect(21, 175, 170, 25, "FD");
$pdf->Text(24, 180, 'VALOR COMERCIAL : ');
$pdf->line(21, 181, '191', '181');
$pdf->SetFont('Arial', '', 9);
$pdf->Text(114, 180, number_format($arrayTabla117['Valor_Comercial'], 2));
$pdf->Text(137, 180, 'BS.');
$pdf->SetFont('Arial', '', 9);
$pdf->Text(154, 180, number_format($arrayTabla116['Valor_Comercial'], 2));
$pdf->Text(177, 180, '$US.');
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(24, 185, 'VALOR NETO DE REALIZACIÓN O HIPOTECARIO : ');
$pdf->line(21, 186, '191', '186');
$pdf->SetFont('Arial', '', 9);
$pdf->Text(114, 185, number_format($arrayTabla117['Valor_Hipotecario'], 2));
$pdf->Text(137, 185, 'BS.');
$pdf->SetFont('Arial', '', 9);
$pdf->Text(154, 185, number_format($arrayTabla116['Valor_Hipotecario'], 2));
$pdf->Text(177, 185, '$US.');

$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(24, 190, 'VALOR CATASTRAL : ');
$pdf->line(21, 191, '191', '191');
$pdf->SetFont('Arial', '', 9);
$pdf->Text(114, 190, number_format($arrayTabla117['Valor_Catastral'], 2));
$pdf->Text(137, 190, 'BS.');
$pdf->SetFont('Arial', '', 9);
$pdf->Text(154, 190, number_format($arrayTabla116['Valor_Catastral'], 2));
$pdf->Text(177, 190, '$US.');

$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(24, 195, 'VALOR DE VENTA RÁPIDA O LIQUIDACIÓN : ');
$pdf->line(21, 196, '191', '196');
$pdf->SetFont('Arial', '', 9);
$pdf->Text(114, 195, number_format($arrayTabla117['Valor_Liquidacion'], 2));
$pdf->Text(137, 195, 'BS.');
$pdf->SetFont('Arial', '', 9);
$pdf->Text(154, 195, number_format($arrayTabla116['Valor_Liquidacion'], 2));
$pdf->Text(177, 195, '$US.');

$pdf->Text(24, 203, "Tipo de cambio : Bolivianos " . $arrayTabla0['Tipo_Cambio']);

$pdf->SetTextColor(0, 0, 0);

//******************************TABLA 3*********************************

$pdf->SetFont('Arial', 'B', 12);
$pdf->Text(21, 210, '3.- CARACTERÍSTICAS DE LA ZONA Y DATOS URBANOS.-');
$pdf->SetFont('Arial', '', 9);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(255, 255, 255);
$pdf->Rect(21, 215, 170, 50, "FD");
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(24, 220, 'USO DE SUELO  : ');
$pdf->SetFont('Arial', '', 9);
$pdf->Text(74, 220, $arrayTabla3['Uso_Suelo']);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(24, 225, 'ANCHO DE VÍA  : ');
$pdf->SetFont('Arial', '', 9);
if ($arrayTabla3['Ancho_Via'] != "") {
    $pdf->Text(74, 225, number_format($arrayTabla3['Ancho_Via'], 2) . ' ML');
}
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(24, 230, 'MATERIAL DE  VÍA  : ');
$pdf->SetFont('Arial', '', 9);
$pdf->Text(74, 230, strtoupper($arrayTabla3['Material_Via']));
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(24, 235, 'TIPO DE VIA : ');
$pdf->SetFont('Arial', '', 9);
$pdf->Text(74, 235, strtoupper($arrayTabla3['Tipo_Via']));
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(24, 240, 'ACERAS : ');
$pdf->SetFont('Arial', '', 9);
$pdf->Text(74, 240, strtoupper($arrayTabla3['Aceras']));
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(24, 245, 'TRANSPORTE : ');
$pdf->SetFont('Arial', '', 9);
$pdf->Text(74, 245, strtoupper($arrayTabla3['Transporte']));
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(24, 250, 'DENSIDAD POBLACIÓN : ');
$pdf->SetFont('Arial', '', 9);
$pdf->Text(74, 250, strtoupper($arrayTabla3['Densidad_Poblacion']));


$pdf->SetFillColor(255, 255, 255);
$pdf->Rect(21, 255, 170, 22, "FD");
$pdf->SetFont('Arial', 'B', 11);
$pdf->Text(24, 260, 'DESCRIPCIÓN : ');
$pdf->SetFont('Arial', '', 10);

$pdf->SetY(263);
$pdf->SetX(24);
$pdf->Multicell(159, 4, $arrayTabla3['Descripcion'], 0, 'J');

$pdf->AddPage();
//***************************************TABLA 4***********************
$pdf->SetFont('Arial', 'B', 12);
$pdf->Text(21, 40, '4.- CARACTERÍSTICAS DEL TERRENO.-');
$pdf->SetFont('Arial', 'B', 9);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(255, 255, 255);
$pdf->Rect(21, 45, 170, 50, "FD");
$pdf->Text(24, 50, 'ACCESO, VIA  : ');
$pdf->SetFont('Arial', '', 9);
$pdf->Text(74, 50, $arrayTabla4['Acceso_Via']);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(24, 55, 'SUPERFICIE DEL TERRENO : ');
$pdf->SetFont('Arial', '', 9);
$pdf->Text(94, 55, 'M2 ');
$pdf->Text(74, 55, number_format($arrayTabla4['Superficie_Terreno'], 2));
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(24, 60, 'FRENTE : ');
$pdf->SetFont('Arial', '', 9);
if ($arrayTabla4['Frente'] != "") {
    $pdf->Text(74, 60, number_format($arrayTabla4['Frente'], 2));
}
$pdf->Text(94, 60, 'ML ');
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(24, 65, 'FONDO : ');
$pdf->SetFont('Arial', '', 9);
if ($arrayTabla4['Fondo'] != "") {
    $pdf->Text(74, 65, number_format($arrayTabla4['Fondo'], 2));
}
$pdf->Text(94, 65, 'ML ');
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(24, 70, 'SUPERFICIE CONSTRUIDA : ');
$pdf->SetFont('Arial', '', 9);
$pdf->Text(74, 70, number_format($arrayTabla4['Superficie_Construida'], 2));
$pdf->Text(94, 70, 'M2 ');
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(24, 75, 'FORMA : ');
$pdf->SetFont('Arial', '', 9);
$pdf->Text(74, 75, $arrayTabla4['Forma']);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(24, 80, 'TOPOGRAFÍA : ');
$pdf->SetFont('Arial', '', 9);
$pdf->Text(74, 80, $arrayTabla4['Topografia']);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(24, 85, 'RESISTENCIA DEL SUELO : ');
$pdf->SetFont('Arial', '', 9);
$pdf->Text(74, 85, $arrayTabla4['Resistencia_Suelo']);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(24, 90, 'COLINDANCIAS : ');
$pdf->SetFont('Arial', '', 9);

$pdf->SetY(87);
$pdf->SetX(74);
$pdf->SetFont('Arial', '', 8);
$pdf->Multicell(57, 3, 'Norte : ' . $arrayTabla4['COLINDANCIA_NORTE'], 0, 'J');

$pdf->SetY(87);
$pdf->SetX(135);
$pdf->Multicell(57, 3, 'Sur : ' . $arrayTabla4['COLINDANCIA_SUR'], 0, 'J');

$pdf->SetY(92);
$pdf->SetX(135);
$pdf->Multicell(57, 3, 'Este : ' . $arrayTabla4['COLINDANCIA_ESTE'], 0, 'J');
$pdf->SetY(92);
$pdf->SetX(74);
$pdf->Multicell(57, 3, 'Oeste : ' . $arrayTabla4['COLINDANCIA_OESTE'], 0, 'J');






//****************************TABLA 5****************************
$pdf->SetFont('Arial', 'B', 12);
/* $pdf->SetTextColor(21, 137, 156); */
$pdf->Text(21, 105, '5.- SERVICIOS BÁSICOS.-');
$pdf->SetFont('Arial', '', 9);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(255, 255, 255);
$pdf->Rect(21, 110, 170, 35, "FD");
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(44, 115, 'SERVICIOS  : ');
$pdf->Text(104, 115, 'EL INMUEBLE  : ');
$pdf->Text(154, 115, 'LA ZONA  : ');
$pdf->Text(24, 120, 'AGUA POTABLE ');
$pdf->SetFont('Arial', '', 9);
$pdf->Text(104, 120, $arrayTabla5['Agua_Zona']);
if ($arrayTabla5['Agua_Inmueble'] == 0) {
    $pdf->Text(154, 120, 'No');
} else {
    $pdf->Text(154, 120, 'Si');
}
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(24, 125, 'ENERGIA ELÉCTRICA');
$pdf->SetFont('Arial', '', 9);
$pdf->Text(104, 125, $arrayTabla5['Energia_Zona']);
if ($arrayTabla5['Energia_Inmueble'] == 0) {
    $pdf->Text(154, 125, 'No');
} else {
    $pdf->Text(154, 125, 'Si');
}
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(24, 130, 'SERVICIO TELEFÓNICO ');
$pdf->SetFont('Arial', '', 9);
$pdf->Text(104, 130, $arrayTabla5['Telefono_Zona']);
if ($arrayTabla5['Telefono_Inmueble'] != "Si") {
    $pdf->Text(154, 130, 'No');
} else {
    $pdf->Text(154, 130, 'Si');
}
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(24, 135, 'ALCANTARILLADO PÚBLICO ');
$pdf->SetFont('Arial', '', 9);
$pdf->Text(104, 135, $arrayTabla5['Alcantarillado_Zona']);
if ($arrayTabla5['Alcantarillado_Inmueble'] == 0) {
    $pdf->Text(154, 135, 'No');
} else {
    $pdf->Text(154, 135, 'Si');
}
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(24, 140, 'GAS DOMICILIARIO ');
$pdf->SetFont('Arial', '', 9);
$pdf->Text(104, 140, $arrayTabla5['Gas_Zona']);
if ($arrayTabla5['Gas_Inmueble'] == 0) {
    $pdf->Text(154, 140, 'No');
} else {
    $pdf->Text(154, 140, 'Si');
}
/* $pdf->Text(24, 145, 'INTERNET ');
  $pdf->Text(104, 145, $arrayTabla5['Internet']);
  if($arrayTabla5['Internet_Inmueble']==0)
  {
  $pdf->Text(154, 145, 'No');
  }
  else
  {
  $pdf->Text(154, 145, 'Si');
  }
  $pdf->Text(24, 150, 'CABLE ');
  $pdf->Text(104, 150, $arrayTabla5['Cable']);
  if($arrayTabla5['Cable_Inmueble']==0)
  {
  $pdf->Text(154, 150, 'No');
  }
  else
  {
  $pdf->Text(154, 150, 'Si');
  } */
$pdf->SetFillColor(255, 255, 255);
$pdf->Rect(21, 150, 170, 27, "FD");
$pdf->SetFont('Arial', 'B', 11);
$pdf->Text(24, 155, 'OBSERVACIONES : ');
$pdf->SetFont('Arial', '', 10);
$pdf->SetY(158);
$pdf->SetX(24);
$pdf->Multicell(159, 4, $arrayTabla5['Observaciones'], 0, 'J');

//***************************************TABLA 6***********************
$pdf->SetFont('Arial', 'B', 12);
$pdf->Text(21, 185, '6.- CARACTERÍSTICAS DE LA EDIFICACIÓN.-');
$pdf->SetFont('Arial', 'B', 12);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(255, 255, 255);
$pdf->Rect(21, 190, 170, 49, "FD");
$pdf->Text(24, 195, 'USO  : ');
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(24, 200, 'RESIDENCIAL  : ');
$pdf->SetFont('Arial', '', 9);
$pdf->Text(54, 200, $arrayTabla6['Residencial']);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(74, 200, 'OFICINA  : ');
$pdf->SetFont('Arial', '', 9);
$pdf->Text(94, 200, $arrayTabla6['Oficina']);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(114, 200, 'COMERCIAL  : ');
$pdf->SetFont('Arial', '', 9);
$pdf->Text(137, 200, $arrayTabla6['Comercial']);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(154, 200, 'OTROS  : ');
$pdf->SetFont('Arial', '', 9);
$pdf->Text(170, 200, $arrayTabla6['Otros_Uso']);

$pdf->SetFont('Arial', 'B', 12);
$pdf->Text(24, 205, 'OCUPACIÓN  : ');
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(24, 210, 'PROPIETARIOS  : ');
$pdf->SetFont('Arial', '', 9);
$pdf->Text(54, 210, $arrayTabla6['Propietarios']);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(74, 210, 'INQUILINOS  : ');
$pdf->SetFont('Arial', '', 9);
$pdf->Text(97, 210, $arrayTabla6['Inquilinos']);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(114, 210, 'OTROS  : ');
$pdf->SetFont('Arial', '', 9);
$pdf->Text(134, 210, $arrayTabla6['Otros_Ocupacion']);

$pdf->SetFont('Arial', 'B', 12);
$pdf->Text(24, 215, 'TIPO  : ');
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(24, 220, 'LUJO : ');
$pdf->SetFont('Arial', '', 9);
$pdf->Text(54, 220, $arrayTabla6['Lujo']);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(74, 220, 'SEMILUJO : ');
$pdf->SetFont('Arial', '', 9);
$pdf->Text(94, 220, $arrayTabla6['Semilujo']);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(114, 220, 'STANDART : ');
$pdf->SetFont('Arial', '', 9);
$pdf->Text(137, 220, $arrayTabla6['Standart']);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(154, 220, 'ECONÓMICO : ');
$pdf->SetFont('Arial', '', 9);
$pdf->Text(176, 220, $arrayTabla6['Economico']);

$pdf->SetFont('Arial', 'B', 12);
$pdf->Text(24, 225, 'ESTADO : ');
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(24, 230, 'BUENO : ');
$pdf->SetFont('Arial', '', 9);
$pdf->Text(54, 230, $arrayTabla6['Bueno']);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(74, 230, 'REGULAR : ');
$pdf->SetFont('Arial', '', 9);
$pdf->Text(94, 230, $arrayTabla6['Regular']);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(114, 230, 'MALO : ');
$pdf->SetFont('Arial', '', 9);
$pdf->Text(137, 230, $arrayTabla6['Malo']);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(154, 230, 'MUY MALO : ');
$pdf->SetFont('Arial', '', 9);
$pdf->Text(176, 230, $arrayTabla6['Muy_Malo']);

$pdf->SetFont('Arial', 'B', 12);
$pdf->Text(24, 235, 'ANTIGUEDAD : ');
$pdf->SetFont('Arial', '', 9);
$pdf->Text(60, 235, $arrayTabla6['Antiguedad']);

$pdf->SetFillColor(255, 255, 255);
$pdf->Rect(21, 239, 170, 25, "FD");
$pdf->SetFont('Arial', 'B', 11);
$pdf->Text(24, 245, 'DESCRIPCIÓN : ');
$pdf->SetFont('Arial', '', 10);



$pdf->SetY(248);
$pdf->SetX(24);
$pdf->Multicell(159, 4, $arrayTabla6['Descripcion'], 0, 'J');


$pdf->SetFont('Arial', '', 9);
$pdf->SetFillColor(255, 255, 255);
$pdf->Rect(21, 265, 170, 12, "FD");
$pdf->Text(24, 270, 'NUMERO DE AMBIENTES : ');
$pdf->Text(74, 270, $arrayTabla6['Numero_Ambientes']);
$pdf->Text(24, 275, 'NUMERO DE BLOQUES : ');
$pdf->Text(74, 275, $arrayTabla6['Numero_Bloques']);

//************************TABLA 6_2**********************************
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 9);
$pdf->SetFillColor(255, 255, 255);
$pdf->Rect(21, 36, 180, 5, "FD");
;
$pdf->Text(74, 40, 'DATOS TÉCNICOS DE LA CONSTRUCCIÓN');

$pdf->SetFont('Arial', '', 6);
$pdf->SetFillColor(255, 255, 255);
$pdf->Rect(21, 41, 180, 5, "FD");
$pdf->SetTextColor(21, 137, 156);
$pdf->Text(24, 45, 'OBRA GRUESA');
$pdf->Text(52, 45, 'B1');
$pdf->Text(60, 45, 'B2');
$pdf->Text(68, 45, 'B3');
$pdf->Text(77, 45, 'ACABADOS REVESTIMIENTO');
$pdf->Text(120, 45, 'B1');
$pdf->Text(128, 45, 'B2');
$pdf->Text(136, 45, 'B3');
$pdf->Text(146, 45, 'FACHADA');
$pdf->Text(176, 45, 'B1');
$pdf->Text(184, 45, 'B2');
$pdf->Text(192, 45, 'B3');

$pdf->SetFillColor(255, 255, 255);
$pdf->Rect(21, 46, 180, 5, "FD");
$pdf->SetTextColor(221, 0, 0);
$pdf->Text(24, 50, 'ESTRUCTURA');
$pdf->Text(52, 50, '%');
$pdf->Text(60, 50, '%');
$pdf->Text(68, 50, '%');
$pdf->Text(77, 50, 'PISOS');
$pdf->Text(120, 50, '%');
$pdf->Text(128, 50, '%');
$pdf->Text(136, 50, '%');
$pdf->SetTextColor(0, 0, 0);
$pdf->Text(146, 50, 'MATERIALES ESPECIALES');
$pdf->Text(176, 50, $arrayTabla62['MATERIALES7_B1']);
$pdf->Text(184, 50, $arrayTabla62['MATERIALES7_B2']);
$pdf->Text(192, 50, $arrayTabla62['MATERIALES7_B3']);

$pdf->SetFillColor(255, 255, 255);
$pdf->Rect(21, 51, 180, 5, "FD");
$pdf->Text(24, 55, 'Hº Aº PILOTAJE');
$pdf->Text(52, 55, $arrayTabla62['PILOTAJE1_B1']);
$pdf->Text(60, 55, $arrayTabla62['PILOTAJE1_B2']);
$pdf->Text(68, 55, $arrayTabla62['PILOTAJE1_B3']);
$pdf->Text(77, 55, 'TIERRA');
$pdf->Text(120, 55, $arrayTabla62['TIERRA4_B1']);
$pdf->Text(128, 55, $arrayTabla62['TIERRA4_B2']);
$pdf->Text(136, 55, $arrayTabla62['TIERRA4_B3']);
$pdf->Text(146, 55, 'MÁRMOL');
$pdf->Text(176, 55, $arrayTabla62['MARMOL7_B1']);
$pdf->Text(184, 55, $arrayTabla62['MARMOL7_B2']);
$pdf->Text(192, 55, $arrayTabla62['MARMOL7_B3']);

$pdf->SetFillColor(255, 255, 255);
$pdf->Rect(21, 56, 180, 5, "FD");
$pdf->Text(24, 60, 'HºAº RADIER');
$pdf->Text(52, 60, $arrayTabla62['RADIER1_B1']);
$pdf->Text(60, 60, $arrayTabla62['RADIER1_B2']);
$pdf->Text(68, 60, $arrayTabla62['RADIER1_B3']);
$pdf->Text(77, 60, 'CERÁMICA ESMALTADA');
$pdf->Text(120, 60, $arrayTabla62['CERAMICA4_B1']);
$pdf->Text(128, 60, $arrayTabla62['CERAMICA4_B2']);
$pdf->Text(136, 60, $arrayTabla62['CERAMICA4_B3']);
$pdf->Text(146, 60, 'CERÁMICA ESMALTADA');
$pdf->Text(176, 60, $arrayTabla62['CERAMICA7_B1']);
$pdf->Text(184, 60, $arrayTabla62['CERAMICA7_B2']);
$pdf->Text(192, 60, $arrayTabla62['CERAMICA7_B3']);

$pdf->SetFillColor(255, 255, 255);
$pdf->Rect(21, 61, 180, 5, "FD");
$pdf->Text(24, 65, 'HORMIGÓN ARMADO');
$pdf->Text(52, 65, $arrayTabla62['HORMIGON1_B1']);
$pdf->Text(60, 65, $arrayTabla62['HORMIGON1_B2']);
$pdf->Text(68, 65, $arrayTabla62['HORMIGON1_B3']);
$pdf->Text(77, 65, 'CERÁMICA ROJA ');
$pdf->Text(120, 65, $arrayTabla62['CERAMICAROJA4_B1']);
$pdf->Text(128, 65, $arrayTabla62['CERAMICAROJA4_B2']);
$pdf->Text(136, 65, $arrayTabla62['CERAMICAROJA4_B3']);
$pdf->Text(146, 65, 'PLACAS DE PIEDRA');
$pdf->Text(176, 65, $arrayTabla62['PLACAS7_B1']);
$pdf->Text(184, 65, $arrayTabla62['PLACAS7_B2']);
$pdf->Text(192, 65, $arrayTabla62['PLACAS7_B3']);

$pdf->SetFillColor(255, 255, 255);
$pdf->Rect(21, 66, 180, 5, "FD");
$pdf->Text(24, 70, 'METÁLICA');
$pdf->Text(52, 70, $arrayTabla62['HORMIGON1_B1']);
$pdf->Text(60, 70, $arrayTabla62['HORMIGON1_B2']);
$pdf->Text(68, 70, $arrayTabla62['HORMIGON1_B3']);
$pdf->Text(77, 70, 'ALFOMBRADO');
$pdf->Text(120, 70, $arrayTabla62['ALFOMBRADO4_B1']);
$pdf->Text(128, 70, $arrayTabla62['ALFOMBRADO4_B2']);
$pdf->Text(136, 70, $arrayTabla62['ALFOMBRADO4_B3']);
$pdf->Text(146, 70, 'CEMENTO +CAL+ARENA');
$pdf->Text(176, 70, $arrayTabla62['CEMENTO7_B1']);
$pdf->Text(184, 70, $arrayTabla62['CEMENTO7_B2']);
$pdf->Text(192, 70, $arrayTabla62['CEMENTO7_B3']);

$pdf->SetFillColor(255, 255, 255);
$pdf->Rect(21, 71, 180, 5, "FD");
$pdf->Text(24, 75, 'PIEDRA PORTANTE');
$pdf->Text(52, 75, $arrayTabla62['PIEDRA1_B1']);
$pdf->Text(60, 75, $arrayTabla62['PIEDRA1_B2']);
$pdf->Text(68, 75, $arrayTabla62['PIEDRA1_B3']);
$pdf->Text(77, 75, 'ENTABLONADO');
$pdf->Text(120, 75, $arrayTabla62['ENTABLONADO4_B1']);
$pdf->Text(128, 75, $arrayTabla62['ENTABLONADO4_B2']);
$pdf->Text(136, 75, $arrayTabla62['ENTABLONADO4_B3']);
$pdf->Text(146, 75, 'PIEDRA O LADRILLO VISTO');
$pdf->Text(176, 75, $arrayTabla62['PIEDRA7_B1']);
$pdf->Text(184, 75, $arrayTabla62['PIEDRA7_B2']);
$pdf->Text(192, 75, $arrayTabla62['PIEDRA7_B3']);

$pdf->SetFillColor(255, 255, 255);
$pdf->Rect(21, 76, 180, 5, "FD");
$pdf->Text(24, 80, 'LADRILLO PORTANTE');
$pdf->Text(52, 80, $arrayTabla62['LADRILLO1_B1']);
$pdf->Text(60, 80, $arrayTabla62['LADRILLO1_B2']);
$pdf->Text(68, 80, $arrayTabla62['LADRILLO1_B3']);
$pdf->Text(77, 80, 'PARQUET');
$pdf->Text(120, 80, $arrayTabla62['PARQUET4_B1']);
$pdf->Text(128, 80, $arrayTabla62['PARQUET4_B2']);
$pdf->Text(136, 80, $arrayTabla62['PARQUET4_B3']);
$pdf->Text(146, 80, 'BARRO+CAL+ADOBE');
$pdf->Text(176, 80, $arrayTabla62['CAL7_B1']);
$pdf->Text(184, 80, $arrayTabla62['CAL7_B2']);
$pdf->Text(192, 80, $arrayTabla62['CAL7_B3']);

$pdf->SetFillColor(255, 255, 255);
$pdf->Rect(21, 81, 180, 5, "FD");
$pdf->Text(24, 85, 'ADOBE PORTANTE');
$pdf->Text(52, 85, $arrayTabla62['ADOBE1_B1']);
$pdf->Text(60, 85, $arrayTabla62['ADOBE1_B2']);
$pdf->Text(68, 85, $arrayTabla62['ADOBE1_B3']);
$pdf->Text(77, 85, 'MACHIEMBRADO');
$pdf->Text(120, 85, $arrayTabla62['MACHIMBRADO4_B1']);
$pdf->Text(128, 85, $arrayTabla62['MACHIMBRADO4_B2']);
$pdf->Text(136, 85, $arrayTabla62['MACHIMBRADO4_B3']);
$pdf->Text(146, 85, '');
$pdf->Text(176, 85, '');
$pdf->Text(184, 85, '');
$pdf->Text(192, 85, '');

$pdf->SetFillColor(255, 255, 255);
$pdf->Rect(21, 86, 180, 5, "FD");
$pdf->Text(24, 90, '');
$pdf->Text(52, 90, '');
$pdf->Text(60, 90, '');
$pdf->Text(68, 90, '');
$pdf->Text(77, 90, 'CEMENTO');
$pdf->Text(120, 90, $arrayTabla62['CEMENTO4_B1']);
$pdf->Text(128, 90, $arrayTabla62['CEMENTO4_B2']);
$pdf->Text(136, 90, $arrayTabla62['CEMENTO4_B3']);
$pdf->SetTextColor(221, 0, 0);
$pdf->Text(146, 90, 'PUERTA');
$pdf->Text(176, 90, '%');
$pdf->Text(184, 90, '%');
$pdf->Text(192, 90, '%');

$pdf->SetFillColor(255, 255, 255);
$pdf->Rect(21, 91, 180, 5, "FD");
$pdf->Text(24, 95, 'MUROS');
$pdf->Text(52, 95, '%');
$pdf->Text(60, 95, '%');
$pdf->Text(68, 95, '%');
$pdf->SetTextColor(0, 0, 0);
$pdf->Text(77, 95, 'MOSAICO');
$pdf->Text(120, 95, $arrayTabla62['MOSAICO4_B1']);
$pdf->Text(128, 95, $arrayTabla62['MOSAICO4_B2']);
$pdf->Text(136, 95, $arrayTabla62['MOSAICO4_B3']);
$pdf->Text(146, 95, 'MADERA 1º CLASE');
$pdf->Text(176, 95, $arrayTabla62['MADERA8_B1']);
$pdf->Text(184, 95, $arrayTabla62['MADERA8_B2']);
$pdf->Text(192, 95, $arrayTabla62['MADERA8_B3']);

$pdf->SetFillColor(255, 255, 255);
$pdf->Rect(21, 96, 180, 5, "FD");
$pdf->Text(24, 100, 'HORMIGÓN ARMADO');
$pdf->Text(52, 100, $arrayTabla62['HORMIGON2_B1']);
$pdf->Text(60, 100, $arrayTabla62['HORMIGON2_B2']);
$pdf->Text(68, 100, $arrayTabla62['HORMIGON2_B3']);
$pdf->Text(77, 100, 'LOSA');
$pdf->Text(120, 100, $arrayTabla62['LOSA4_B1']);
$pdf->Text(128, 100, $arrayTabla62['LOSA4_B2']);
$pdf->Text(136, 100, $arrayTabla62['LOSA4_B3']);
$pdf->Text(146, 100, 'ALUMINIOS');
$pdf->Text(176, 100, $arrayTabla62['ALUMINIOS8_B1']);
$pdf->Text(184, 100, $arrayTabla62['ALUMINIOS8_B2']);
$pdf->Text(192, 100, $arrayTabla62['ALUMINIOS8_B3']);

$pdf->SetFillColor(255, 255, 255);
$pdf->Rect(21, 101, 180, 5, "FD");
$pdf->Text(24, 105, 'PIEDRA');
$pdf->Text(52, 105, $arrayTabla62['PIEDRA2_B1']);
$pdf->Text(60, 105, $arrayTabla62['PIEDRA2_B2']);
$pdf->Text(68, 105, $arrayTabla62['PIEDRA2_B3']);
$pdf->SetTextColor(221, 0, 0);
$pdf->Text(77, 105, 'CIELOS');
$pdf->Text(120, 105, '%');
$pdf->Text(128, 105, '%');
$pdf->Text(136, 105, '%');
$pdf->SetTextColor(0, 0, 0);
$pdf->Text(146, 105, 'MADERA 2º CLASE');
$pdf->Text(176, 105, $arrayTabla62['MADERASEGUNDA8_B1']);
$pdf->Text(184, 105, $arrayTabla62['MADERASEGUNDA8_B2']);
$pdf->Text(192, 105, $arrayTabla62['MADERASEGUNDA8_B3']);

$pdf->SetFillColor(255, 255, 255);
$pdf->Rect(21, 106, 180, 5, "FD");
$pdf->Text(24, 110, 'LADRILLO GAMBOTE');
$pdf->Text(52, 110, $arrayTabla62['LADRILLO2_B1']);
$pdf->Text(60, 110, $arrayTabla62['LADRILLO2_B2']);
$pdf->Text(68, 110, $arrayTabla62['LADRILLO2_B3']);
$pdf->Text(77, 110, 'MATERIALES ESPECIALES');
$pdf->Text(120, 110, $arrayTabla62['MATERIALES5_B1']);
$pdf->Text(128, 110, $arrayTabla62['MATERIALES5_B2']);
$pdf->Text(136, 110, $arrayTabla62['MATERIALES5_B3']);
$pdf->Text(146, 110, 'METÁLICA');
$pdf->Text(176, 110, $arrayTabla62['METALICA8_B1']);
$pdf->Text(184, 110, $arrayTabla62['METALICA8_B2']);
$pdf->Text(192, 110, $arrayTabla62['METALICA8_B3']);

$pdf->SetFillColor(255, 255, 255);
$pdf->Rect(21, 111, 180, 5, "FD");
$pdf->Text(24, 115, 'BLOQUE DE CEMENTO');
$pdf->Text(52, 115, $arrayTabla62['BLOQUE2_B1']);
$pdf->Text(60, 115, $arrayTabla62['BLOQUE2_B2']);
$pdf->Text(68, 115, $arrayTabla62['BLOQUE2_B3']);
$pdf->Text(77, 115, 'MADERA');
$pdf->Text(120, 115, $arrayTabla62['MADERA5_B1']);
$pdf->Text(128, 115, $arrayTabla62['MADERA5_B2']);
$pdf->Text(136, 115, $arrayTabla62['MADERA5_B3']);
$pdf->Text(146, 115, '');
$pdf->Text(176, 115, '');
$pdf->Text(184, 115, '');
$pdf->Text(192, 115, '');

$pdf->SetFillColor(255, 255, 255);
$pdf->Rect(21, 116, 180, 5, "FD");
$pdf->Text(24, 120, 'LADRILLO HUECO');
$pdf->Text(52, 120, $arrayTabla62['LADRILLOHUECO2_B1']);
$pdf->Text(60, 120, $arrayTabla62['LADRILLOHUECO2_B2']);
$pdf->Text(68, 120, $arrayTabla62['LADRILLOHUECO2_B3']);
$pdf->Text(77, 120, 'YESO CON PINTURA');
$pdf->Text(120, 120, $arrayTabla62['YESO5_B1']);
$pdf->Text(128, 120, $arrayTabla62['YESO5_B2']);
$pdf->Text(136, 120, $arrayTabla62['YESO5_B3']);
$pdf->SetTextColor(221, 0, 0);
$pdf->Text(146, 120, 'VENTANAS');
$pdf->Text(176, 120, '%');
$pdf->Text(184, 120, '%');
$pdf->Text(192, 120, '%');

$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(255, 255, 255);
$pdf->Rect(21, 121, 180, 5, "FD");
$pdf->Text(24, 125, 'ADOBE ');
$pdf->Text(52, 125, $arrayTabla62['ADOBE2_B1']);
$pdf->Text(60, 125, $arrayTabla62['ADOBE2_B2']);
$pdf->Text(68, 125, $arrayTabla62['ADOBE2_B3']);
$pdf->Text(77, 125, 'COTENCIO');
$pdf->Text(120, 125, $arrayTabla62['COTENCIO5_B1']);
$pdf->Text(128, 125, $arrayTabla62['COTENCIO5_B2']);
$pdf->Text(136, 125, $arrayTabla62['COTENCIO5_B3']);
$pdf->Text(146, 125, 'MADERA 1º CLASE');
$pdf->Text(176, 125, $arrayTabla62['MADERA9_B1']);
$pdf->Text(184, 125, $arrayTabla62['MADERA9_B2']);
$pdf->Text(192, 125, $arrayTabla62['MADERA9_B3']);

$pdf->SetFillColor(255, 255, 255);
$pdf->Rect(21, 126, 180, 5, "FD");
$pdf->Text(24, 130, 'MADERA');
$pdf->Text(52, 130, $arrayTabla62['MADERA2_B1']);
$pdf->Text(60, 130, $arrayTabla62['MADERA2_B2']);
$pdf->Text(68, 130, $arrayTabla62['MADERA2_B3']);
$pdf->SetTextColor(221, 0, 0);
$pdf->Text(77, 130, 'MUROS INTERIORES');
$pdf->Text(120, 130, '%');
$pdf->Text(128, 130, '%');
$pdf->Text(136, 130, '%');
$pdf->SetTextColor(0, 0, 0);
$pdf->Text(146, 130, 'ALUMINIOS');
$pdf->Text(176, 130, $arrayTabla62['ALUMINIOS9_B1']);
$pdf->Text(184, 130, $arrayTabla62['ALUMINIOS9_B2']);
$pdf->Text(192, 130, $arrayTabla62['ALUMINIOS9_B3']);

$pdf->SetFillColor(255, 255, 255);
$pdf->Rect(21, 131, 180, 5, "FD");
$pdf->SetTextColor(221, 0, 0);
$pdf->Text(24, 135, 'CUBIERTAS');
$pdf->Text(52, 135, '%');
$pdf->Text(60, 135, '%');
$pdf->Text(68, 135, '%');
$pdf->SetTextColor(0, 0, 0);
$pdf->Text(77, 135, 'MATERIALES ESPECIALES');
$pdf->Text(120, 135, $arrayTabla62['MATERIALES6_B1']);
$pdf->Text(128, 135, $arrayTabla62['MATERIALES6_B2']);
$pdf->Text(136, 135, $arrayTabla62['MATERIALES6_B3']);
$pdf->Text(146, 135, 'MADERA 2º CLASE');
$pdf->Text(176, 135, $arrayTabla62['MADERASEGUNDA9_B1']);
$pdf->Text(184, 135, $arrayTabla62['MADERASEGUNDA9_B2']);
$pdf->Text(192, 135, $arrayTabla62['MADERASEGUNDA9_B3']);

$pdf->SetFillColor(255, 255, 255);
$pdf->Rect(21, 136, 180, 5, "FD");
$pdf->Text(24, 140, 'HORMIGÓN ARMADO');
$pdf->Text(52, 140, $arrayTabla62['HORMIGON3_B1']);
$pdf->Text(60, 140, $arrayTabla62['HORMIGON3_B2']);
$pdf->Text(68, 140, $arrayTabla62['HORMIGON3_B3']);
$pdf->Text(77, 140, 'MÁRMOL');
$pdf->Text(120, 140, $arrayTabla62['MARMOS6_B1']);
$pdf->Text(128, 140, $arrayTabla62['MARMOS6_B2']);
$pdf->Text(136, 140, $arrayTabla62['MARMOS6_B3']);
$pdf->Text(146, 140, 'METÁLICA');
$pdf->Text(176, 140, $arrayTabla62['METALICAS9_B1']);
$pdf->Text(184, 140, $arrayTabla62['METALICAS9_B2']);
$pdf->Text(192, 140, $arrayTabla62['METALICAS9_B3']);

$pdf->SetFillColor(255, 255, 255);
$pdf->Rect(21, 141, 180, 5, "FD");
$pdf->Text(24, 145, 'TEJA');
$pdf->Text(52, 145, $arrayTabla62['TEJA3_B1']);
$pdf->Text(60, 145, $arrayTabla62['TEJA3_B2']);
$pdf->Text(68, 145, $arrayTabla62['TEJA3_B3']);
$pdf->Text(77, 145, 'CERÁMICA ESMALTADA');
$pdf->Text(120, 145, $arrayTabla62['CERAMICA6_B1']);
$pdf->Text(128, 145, $arrayTabla62['CERAMICA6_B2']);
$pdf->Text(136, 145, $arrayTabla62['CERAMICA6_B3']);
$pdf->Text(146, 145, '');
$pdf->Text(176, 145, '');
$pdf->Text(184, 145, '');
$pdf->Text(192, 145, '');

$pdf->SetFillColor(255, 255, 255);
$pdf->Rect(21, 146, 180, 5, "FD");
$pdf->Text(24, 150, 'TEJA ASFALTICA');
$pdf->Text(52, 150, $arrayTabla62['TEJA3_B1']);
$pdf->Text(60, 150, $arrayTabla62['TEJA3_B2']);
$pdf->Text(68, 150, $arrayTabla62['TEJA3_B3']);
$pdf->Text(77, 150, 'MOSAICO');
$pdf->Text(120, 150, $arrayTabla62['MOSAICO6_B1']);
$pdf->Text(128, 150, $arrayTabla62['MOSAICO6_B2']);
$pdf->Text(136, 150, $arrayTabla62['MOSAICO6_B3']);
$pdf->Text(146, 150, '');
$pdf->Text(176, 150, '');
$pdf->Text(184, 150, '');
$pdf->Text(192, 150, '');

$pdf->SetFillColor(255, 255, 255);
$pdf->Rect(21, 151, 180, 5, "FD");
$pdf->Text(24, 155, 'PLACA SHINGLE');
$pdf->Text(52, 155, $arrayTabla62['PLACA3_B1']);
$pdf->Text(60, 155, $arrayTabla62['PLACA3_B2']);
$pdf->Text(68, 155, $arrayTabla62['PLACA3_B3']);
$pdf->Text(77, 155, 'MADERA');
$pdf->Text(120, 155, $arrayTabla62['MADERA6_B1']);
$pdf->Text(128, 155, $arrayTabla62['MADERA6_B2']);
$pdf->Text(136, 155, $arrayTabla62['MADERA6_B3']);
$pdf->Text(146, 155, '');
$pdf->Text(176, 155, '');
$pdf->Text(184, 155, '');
$pdf->Text(192, 155, '');

$pdf->SetFillColor(255, 255, 255);
$pdf->Rect(21, 156, 180, 5, "FD");
$pdf->Text(24, 160, 'CALAMINAS ZINC');
$pdf->Text(52, 160, $arrayTabla62['CALAMINA3_B1']);
$pdf->Text(60, 160, $arrayTabla62['CALAMINA3_B2']);
$pdf->Text(68, 160, $arrayTabla62['CALAMINA3_B3']);
$pdf->Text(77, 160, 'YESO CON PINTURA');
$pdf->Text(120, 160, $arrayTabla62['YESO6_B1']);
$pdf->Text(128, 160, $arrayTabla62['YESO6_B2']);
$pdf->Text(136, 160, $arrayTabla62['YESO6_B3']);
$pdf->Text(146, 160, '');
$pdf->Text(176, 160, '');
$pdf->Text(184, 160, '');
$pdf->Text(192, 160, '');

$pdf->SetFillColor(255, 255, 255);
$pdf->Rect(21, 161, 180, 5, "FD");
$pdf->Text(24, 165, 'CALAMINA PLÁSTICA');
$pdf->Text(52, 165, $arrayTabla62['CALAMINAPLASTICA3_B1']);
$pdf->Text(60, 165, $arrayTabla62['CALAMINAPLASTICA3_B2']);
$pdf->Text(68, 165, $arrayTabla62['CALAMINAPLASTICA3_B3']);
$pdf->Text(77, 165, 'CEMENTO CON OCRE');
$pdf->Text(120, 165, $arrayTabla62['CEMENTO6_B1']);
$pdf->Text(128, 165, $arrayTabla62['CEMENTO6_B2']);
$pdf->Text(136, 165, $arrayTabla62['CEMENTO6_B3']);
$pdf->Text(146, 165, '');
$pdf->Text(176, 165, '');
$pdf->Text(184, 165, '');
$pdf->Text(192, 165, '');

$pdf->SetFillColor(255, 255, 255);
$pdf->Rect(21, 166, 180, 5, "FD");
$pdf->Text(24, 170, 'LOSA');
$pdf->Text(52, 170, $arrayTabla62['LOSA5_B1']);
$pdf->Text(60, 170, $arrayTabla62['LOSA5_B2']);
$pdf->Text(68, 170, $arrayTabla62['LOSA5_B3']);
$pdf->Text(77, 170, 'BARRO CON CAL');
$pdf->Text(120, 170, $arrayTabla62['METALICA1_B1']);
$pdf->Text(128, 170, $arrayTabla62['METALICA1_B2']);
$pdf->Text(136, 170, $arrayTabla62['METALICA1_B3']);
$pdf->Text(146, 170, '');
$pdf->Text(176, 170, '');
$pdf->Text(184, 170, '');
$pdf->Text(192, 170, '');

$pdf->SetFillColor(255, 255, 255);
$pdf->Rect(21, 171, 180, 5, "FD");
$pdf->Text(24, 175, 'OBSERVACIONES : ');
$pdf->Text(52, 175, '');
$pdf->Text(60, 175, '');
$pdf->Text(68, 175, '');
$pdf->Text(77, 175, '');
$pdf->Text(120, 175, '');
$pdf->Text(128, 175, '');
$pdf->Text(136, 175, '');
$pdf->Text(146, 175, '');
$pdf->Text(176, 175, '');
$pdf->Text(184, 175, '');
$pdf->Text(192, 175, '');


//*****************************TABLA 7**********************************
$pdf->SetFont('Arial', 'B', 12);
$pdf->SetTextColor(0, 0, 0);
$pdf->Text(21, 195, '7.- CALCULO DEL VALOR CATASTRAL DEL TERRENO.-');
$pdf->SetFont('Arial', 'B', 9);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(255, 255, 255);
$pdf->Rect(21, 200, 180, 40, "FD");

$pdf->SetTextColor(0, 0, 0);
$pdf->Text(24, 205, 'SUPERFICIE DEL LOTE : ');
$pdf->SetFont('Arial', '', 9);
$pdf->line(21, 206, '201', '206');
$pdf->Text(154, 205, number_format($arrayTabla7['Superficie_Lote'], 2));
$pdf->Text(180, 205, 'MT2');

$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(24, 210, 'VALOR IMPOSITIVO POR METRO CUADRADO : ');
$pdf->SetFont('Arial', '', 9);
$pdf->line(21, 211, '201', '211');
$pdf->Text(154, 210, number_format($arrayTabla7['Valor_Impositivo_Mt2'], 2));
$pdf->Text(180, 210, 'BS.');

$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(24, 215, 'FACTOR DE INCLINACIÓN : ');
$pdf->SetFont('Arial', '', 9);
$pdf->line(21, 216, '201', '216');
$pdf->Text(154, 215, number_format($arrayTabla7['Factor_Inclinacion'], 2));
$pdf->Text(180, 215, '%');

$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(24, 220, 'FACTOR DE FORMA : ');
$pdf->SetFont('Arial', '', 9);
$pdf->line(21, 221, '201', '221');
$pdf->Text(154, 220, number_format($arrayTabla7['Factor_Forma'], 2));
$pdf->Text(180, 220, '%');

$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(24, 225, 'FACTOR DE SERVICIOS : ');
$pdf->SetFont('Arial', '', 9);
$pdf->line(21, 226, '201', '226');
$pdf->Text(154, 225, number_format($arrayTabla7['Factor_Servicios'], 2));
$pdf->Text(180, 225, '%');

$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(24, 230, 'VALOR IMPOSITIVO MT2. TOTAL : ');
$pdf->SetFont('Arial', '', 9);
$pdf->line(21, 231, '201', '231');
$pdf->Text(154, 230, number_format($arrayTabla7['Valor_Impositivo_Mt2_Total'], 2));
$pdf->Text(180, 230, 'BS.');

$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(24, 235, 'VALOR CATASTRAL TOTAL : ');
$pdf->SetFont('Arial', '', 9);
$pdf->line(21, 236, '201', '236');
$pdf->Text(154, 235, number_format($arrayTabla7['Valor_Catastral_Total'], 2));
$pdf->Text(180, 235, 'BS.');

$pdf->SetTextColor(0, 0, 0);
$pdf->Rect(21, 240, 180, 5, "FD");

$total = $arrayTabla7['Valor_Catastral_Total'];
$V = new EnLetras();
$con_letra = strtoupper($V->ValorEnLetras($total, " 00/100 Bolivianos"));
$pdf->Text(24, 244, $con_letra);

$pdf->AddPage();
//*****************************TABLA 8**********************************
$pdf->SetFont('Arial', 'B', 12);
$pdf->Text(21, 40, '8.- CALCULO DEL VALOR CATASTRAL DE LA CONSTRUCCIÓN.- ');
//$pdf->line(21, 41, '191','41');
$pdf->SetFont('Arial', '', 9);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(255, 255, 255);
$pdf->Rect(21, 45, 170, 30, "FD");

$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(24, 50, 'VALOR CATASTRAL MT2.CONSTRUIDO : ');
$pdf->SetFont('Arial', '', 9);
$pdf->line(21, 51, '191', '51');
$pdf->Text(154, 50, number_format($arrayTabla8['Valor_Catastral_Mt2_Construido'], 2));
$pdf->Text(180, 50, 'BS.');

$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(24, 55, 'FACTOR DE DEPRECIACIÓN : ');
$pdf->SetFont('Arial', '', 9);
$pdf->line(21, 56, '191', '56');
$pdf->Text(154, 55, number_format($arrayTabla8['Factor_Depreciacion'], 2));
$pdf->Text(180, 55, '%');


$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(24, 60, 'SUPERFICIE CONSTRUIDA : ');
$pdf->SetFont('Arial', '', 9);
$pdf->line(21, 61, '191', '61');
$pdf->Text(154, 60, number_format($arrayTabla8['Superficie_Construida'], 2));
$pdf->Text(180, 60, 'MT2');

$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(24, 65, 'VALOR CATASTRAL TOTAL MT2. : ');
$pdf->SetFont('Arial', '', 9);
$pdf->line(21, 66, '191', '66');
$pdf->Text(154, 65, number_format($arrayTabla8['Valor_Catastral_Mt2_Total'], 2));
$pdf->Text(180, 65, 'BS.');

$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(24, 70, 'VALOR CATASTRAL TOTAL : ');
$pdf->SetFont('Arial', '', 9);
$pdf->line(21, 71, '191', '71');
$pdf->Text(154, 70, number_format($arrayTabla8['Valor_Catastral_Total'], 2));
$pdf->Text(180, 70, 'BS.');

$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(255, 255, 255);
$pdf->Rect(21, 75, 170, 5, "FD");

$total = $arrayTabla8['Valor_Catastral_Total'];
$V = new EnLetras();
$con_letra = strtoupper($V->ValorEnLetras($total, " 00/100 Bolivianos"));
$pdf->Text(24, 79, $con_letra);

$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(255, 255, 255);
$pdf->Rect(21, 80, 170, 5, "FD");
$pdf->SetFont('Arial', '', 6);
//$pdf->Text(24, 83, 'EL VALOR CATASTRAL ESTA BAJO LOS PARÁMETROS DEL GOBIERNO MUNICIPAL');
$pdf->SetFont('Arial', '', 9);

//*****************************TABLA 9**********************************
$pdf->SetFont('Arial', 'B', 12);
$pdf->Text(21, 95, '9.- CALCULO DEL VALOR TÉCNICO COMERCIAL DEL TERRENO.- ');
$pdf->SetFont('Arial', '', 9);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(255, 255, 255);
$pdf->Rect(21, 100, 170, 50, "FD");

$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(24, 105, 'SUPERFICIE DEL TERRENO : ');
$pdf->SetFont('Arial', '', 9);
$pdf->line(21, 106, '191', '106');
$pdf->Text(154, 105, number_format($arrayTabla9['Superficie_Terreno'], 2));
$pdf->Text(180, 105, 'MT2');

$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(24, 110, 'VALOR COMERCIAL POR MT2. : ');
$pdf->SetFont('Arial', '', 9);
$pdf->line(21, 111, '191', '111');
$pdf->Text(154, 110, number_format($arrayTabla9['Valor_Comercial_Mt2'], 2));
$pdf->Text(180, 110, '$US.');


$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(24, 115, 'FACTOR DE INCLINACIÓN : ');
$pdf->SetFont('Arial', '', 9);
$pdf->line(21, 116, '191', '116');
$pdf->Text(154, 115, number_format($arrayTabla9['Factor_Inclinacion'], 2));
$pdf->Text(180, 115, '%');

$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(24, 120, 'FACTOR DE FORMA : ');
$pdf->SetFont('Arial', '', 9);
$pdf->line(21, 121, '191', '121');
$pdf->Text(154, 120, number_format($arrayTabla9['Factor_Forma'], 2));
$pdf->Text(180, 120, '%');

$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(24, 125, 'FACTOR DE SERVICIOS : ');
$pdf->SetFont('Arial', '', 9);
$pdf->line(21, 126, '191', '126');
$pdf->Text(154, 125, number_format($arrayTabla9['Factor_Servicios'], 2));
$pdf->Text(180, 125, '%');

$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(24, 130, 'FACTOR DE COMERCIABILIDAD : ');
$pdf->SetFont('Arial', '', 9);
$pdf->line(21, 131, '191', '131');
$pdf->Text(154, 130, number_format($arrayTabla9['Factor_Comerciabilidad'], 2));
$pdf->Text(180, 130, '%');

$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(24, 135, 'VALOR COMERCIAL MT2 TOTAL : ');
$pdf->SetFont('Arial', '', 9);
$pdf->line(21, 136, '191', '136');
$pdf->Text(154, 135, number_format($arrayTabla9['Valor_Comercial_Mt2_Total'], 2));
$pdf->Text(180, 135, '$US.');

$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(24, 140, 'VALOR TOTAL COMERCIAL DEL TERRENO : ');
$pdf->SetFont('Arial', '', 9);
$pdf->line(21, 141, '191', '141');
$pdf->Text(154, 140, number_format($arrayTabla9['Valor_Total_Comercial_Terreno'], 2));
$pdf->Text(180, 140, '$US.');

$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(255, 255, 255);
$pdf->Rect(21, 145, 170, 5, "FD");

$total = $arrayTabla9['Valor_Total_Comercial_Terreno'];
$V = new EnLetras();
$con_letra = strtoupper($V->ValorEnLetras($total, " 00/100 DÓLARES"));
$pdf->Text(24, 149, $con_letra);
//$pdf->Text(21, 154, "Tipo de cambio : Bolivianos " . $arrayTabla0['Tipo_Cambio']);
//*****************************TABLA 10**********************************
$pdf->SetFont('Arial', 'B', 12);
$pdf->Text(21, 165, '10.- CALCULO DEL VALOR TECNICO COMERCIAL DE LA CONSTRUCCION.- ');
$pdf->SetFont('Arial', '', 9);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(255, 255, 255);
$pdf->Rect(21, 170, 170, 30, "FD");

$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(24, 175, 'SUPERFICIE CONSTRUIDA : ');
$pdf->SetFont('Arial', '', 9);
$pdf->line(21, 176, '191', '176');
$pdf->Text(154, 175, number_format($arrayTabla10['Superficie_Construida'], 2));
$pdf->Text(180, 175, 'MT2');

$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(24, 180, 'VALOR COMERCIAL MT2.CONSTRUIDO : ');
$pdf->SetFont('Arial', '', 9);
$pdf->line(21, 181, '191', '181');
$pdf->Text(154, 180, number_format($arrayTabla10['Valor_Comercial_Mt2_Construido'], 2));
$pdf->Text(180, 180, '$US.');


$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(24, 185, 'FACTOR DE DEPRECIACIÓN : ');
$pdf->SetFont('Arial', '', 9);
$pdf->line(21, 186, '191', '186');
$pdf->Text(154, 185, number_format($arrayTabla10['Factor_Depreciacion'], 2));
$pdf->Text(180, 185, '%');

$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(24, 190, 'VALOR TOTAL DE LA CONSTRUCCIÓN MT2. : ');
$pdf->SetFont('Arial', '', 9);
$pdf->line(21, 191, '191', '191');
$pdf->Text(154, 190, number_format($arrayTabla10['Valor_Total_Construccion_Mt2'], 2));
$pdf->Text(180, 190, '$US.');

$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(24, 195, 'VALOR TOTAL DE LA CONSTRUCCIÓN : ');
$pdf->SetFont('Arial', '', 9);
$pdf->line(21, 196, '191', '196');
$pdf->Text(154, 195, number_format($arrayTabla10['Valor_Total_Construccion'], 2));
$pdf->Text(180, 195, '$US.');

$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(255, 255, 255);
$pdf->Rect(21, 200, 170, 5, "FD");

$total = $arrayTabla10['Valor_Total_Construccion'];
$V = new EnLetras();
$con_letra = strtoupper($V->ValorEnLetras($total, " 00/100 DÓLARES"));
$pdf->Text(24, 204, $con_letra);

//$pdf->Text(21, 209, "Tipo de cambio : Bolivianos " . $arrayTabla0['Tipo_Cambio']);
//*****************TABLA 11***********************

$pdf->SetFont('Arial', 'B', 12);
$pdf->Text(21, 218, '11.- TOTALES.-');
$pdf->SetFont('Arial', 'B', 11);
$pdf->Text(29, 225, '•	AVALUÓ TÉCNICO COMERCIAL FINAL DEL INMUEBLE.-');
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(255, 255, 255);
$pdf->Rect(21, 229, 170, 19, "FD");
$pdf->Text(24, 234, '');
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(90, 234, 'VALOR UNITARIO');
$pdf->line(21, 235, '191', '235');
$pdf->Text(132, 234, 'SUPERFICIE');
$pdf->Text(170, 234, 'TOTAL');

$pdf->SetTextColor(0, 0, 0);
$pdf->Text(24, 239, 'VALOR DEL TERRENO');
$pdf->line(21, 240, '191', '240');
$pdf->Text(24, 244, 'VALOR DE LA CONSTRUCCIÓN');
$pdf->SetFont('Arial', '', 9);
$pdf->Text(90, 239, number_format($arrayTabla11['Valor_Unitario_T'], 2));
$pdf->Text(132, 239, number_format($arrayTabla11['Superficie_T'], 2));
$pdf->Text(170, 239, number_format($arrayTabla11['Total_T'], 2));
$pdf->Text(90, 244, number_format($arrayTabla11['Valor_Unitario_C'], 2));
$pdf->Text(132, 244, number_format($arrayTabla11['Superficie_C'], 2));
$pdf->Text(170, 244, number_format($arrayTabla11['Total_C'], 2));
$pdf->SetFillColor(255, 255, 255);
$pdf->Rect(21, 252, 170, 5, "FD");
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(24, 256, 'VALOR COMERCIAL TOTAL: 	');
$pdf->SetFont('Arial', '', 9);
$pdf->Text(150, 256, '$US.');
$pdf->Text(170, 256, number_format($arrayTabla11['Valor_Comercial_Total'], 2));
$pdf->Text(21, 262, "Tipo de cambio : Bolivianos " . $arrayTabla0['Tipo_Cambio']);
$pdf->SetTextColor(0, 0, 0);
$pdf->AddPage();
$pdf->SetTextColor(0, 0, 0);
//*****************TABLA 112***********************

$pdf->SetFont('Arial', '', 12);
$pdf->SetFont('Arial', 'B', 11);
$pdf->Text(29, 39, '•	VALOR HIPOTECARIO.-');
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(255, 255, 255);
$pdf->Rect(21, 44, 170, 19, "FD");
$pdf->Text(24, 49, '');
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(90, 49, 'VALOR COMERCIAL');
$pdf->line(21, 50, '191', '50');
$pdf->Text(132, 49, 'PORCENTAJE');
$pdf->Text(170, 49, 'TOTAL');

$pdf->SetTextColor(0, 0, 0);
$pdf->Text(24, 54, 'VALOR DEL TERRENO');
$pdf->line(21, 56, '191', '56');
$pdf->Text(24, 59, 'VALOR DE LA CONSTRUCCIÓN');
$pdf->SetFont('Arial', '', 9);
$pdf->Text(90, 54, number_format($arrayTabla112['Valor_Comercial_T'], 2));
$pdf->Text(132, 54, number_format($arrayTabla112['Porcentaje_T'], 2));
$pdf->Text(170, 54, number_format($arrayTabla112['Total_T'], 2));
$pdf->Text(90, 59, number_format($arrayTabla112['Valor_Comercial_C'], 2));
$pdf->Text(132, 59, number_format($arrayTabla112['Porcentaje_C'], 2));
$pdf->Text(170, 59, number_format($arrayTabla112['Total_C'], 2));
$pdf->SetFillColor(255, 255, 255);
$pdf->Rect(21, 67, 170, 5, "FD");
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(24, 71, 'VALOR HIPOTECARIO : ');
$pdf->SetFont('Arial', '', 9);
$pdf->Text(150, 71, '$US.');
$pdf->Text(170, 71, number_format($arrayTabla112['Valor_Hipotecario'], 2));
//$pdf->Text(21, 77, "Tipo de cambio : Bolivianos " . $arrayTabla0['Tipo_Cambio']);
$pdf->SetTextColor(0, 0, 0);
//*****************TABLA 113***********************

$pdf->SetFont('Arial', '', 12);
$pdf->SetFont('Arial', 'B', 11);
$pdf->Text(29, 86, '•	AVALUÓ CATASTRAL FINAL DEL INMUEBLE.-');
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(255, 255, 255);
$pdf->Rect(21, 91, 170, 19, "FD");
$pdf->Text(24, 96, '');
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(90, 96, 'VALOR UNITARIO');
$pdf->line(21, 97, '191', '97');
$pdf->Text(132, 96, 'SUPERFICIE');
$pdf->Text(170, 96, 'TOTAL');

$pdf->SetTextColor(0, 0, 0);
$pdf->Text(24, 101, 'VALOR DEL TERRENO');
$pdf->line(21, 102, '191', '102');
$pdf->Text(24, 106, 'VALOR DE LA CONSTRUCCIÓN');
$pdf->SetFont('Arial', '', 9);
$pdf->Text(90, 101, number_format($arrayTabla113['Valor_Unitario_T'], 2));
$pdf->Text(132, 101, number_format($arrayTabla113['Superficie_T'], 2));
$pdf->Text(170, 101, number_format($arrayTabla113['Total_T'], 2));
$pdf->Text(90, 106, number_format($arrayTabla113['Valor_Unitario_C'], 2));
$pdf->Text(132, 106, number_format($arrayTabla113['Superficie_C'], 2));
$pdf->Text(170, 106, number_format($arrayTabla113['Total_C'], 2));
$pdf->SetFillColor(255, 255, 255);
$pdf->Rect(21, 113, 170, 5, "FD");
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(24, 117, 'VALOR CATASTRAL TOTAL:  ');
$pdf->SetFont('Arial', '', 9);
$pdf->Text(150, 117, 'Bs.');
$pdf->Text(170, 117, number_format($arrayTabla113['Valor_Catastral_Total_Bs'], 2));
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(255, 255, 255);
$pdf->Rect(21, 121, 170, 5, "FD");
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(24, 125, 'VALOR CATASTRAL DÓLARES AMERICANOS: ');
$pdf->SetFont('Arial', '', 9);
$pdf->Text(150, 125, '$US.');
$pdf->Text(170, 125, number_format($arrayTabla113['Valor_Catastral_Total'], 2));
$pdf->Text(21, 131, "Tipo de cambio : Bolivianos " . $arrayTabla0['Tipo_Cambio']);
$pdf->SetTextColor(0, 0, 0);

//*****************TABLA 114***********************

$pdf->SetFont('Arial', '', 12);
$pdf->SetFont('Arial', 'B', 11);
$pdf->Text(29, 140, '•	VALOR DE LIQUIDACIÓN O VENTA RÁPIDA.-');
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(255, 255, 255);
$pdf->Rect(21, 145, 170, 19, "FD");
$pdf->Text(24, 150, '');
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(90, 150, 'VALOR COMERCIAL');
$pdf->line(21, 151, '191', '151');
$pdf->Text(132, 150, 'PORCENTAJE');
$pdf->Text(170, 150, 'TOTAL');

$pdf->SetTextColor(0, 0, 0);
$pdf->Text(24, 155, 'VALOR DEL TERRENO');
$pdf->line(21, 156, '191', '156');
$pdf->Text(24, 160, 'VALOR DE LA CONSTRUCCIÓN');
$pdf->SetFont('Arial', '', 9);
$pdf->Text(90, 155, number_format($arrayTabla114['Valor_Comercial_T'], 2));
$pdf->Text(132, 155, number_format($arrayTabla114['Porcentaje_T'], 2));
$pdf->Text(170, 155, number_format($arrayTabla114['Total_T'], 2));
$pdf->Text(90, 160, number_format($arrayTabla114['Valor_Comercial_C'], 2));
$pdf->Text(132, 160, number_format($arrayTabla114['Porcentaje_C'], 2));
$pdf->Text(170, 160, number_format($arrayTabla114['Total_C'], 2));
$pdf->SetFillColor(255, 255, 255);
$pdf->Rect(21, 168, 170, 5, "FD");
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(24, 172, 'VALOR DE LIQUIDACIÓN O VENTA RÁPIDA:');
$pdf->SetFont('Arial', '', 9);
$pdf->Text(150, 172, '$US.');
$pdf->Text(170, 172, number_format($arrayTabla114['Valor_Liquidacion_Venta_Rapida'], 2));
//$pdf->Text(21, 178, "Tipo de cambio : Bolivianos " . $arrayTabla0['Tipo_Cambio']);
$pdf->SetTextColor(0, 0, 0);


//*****************TABLA 115***********************

$pdf->SetFont('Arial', 'B', 12);
$pdf->Text(21, 187, 'CONCLUSIONES.-');
$pdf->SetFillColor(255, 255, 255);
$pdf->Rect(21, 192, 170, 35, "FD");
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('Arial', '', 9);

$pdf->SetY(195);
$pdf->SetX(24);
$pdf->Multicell(160, 4, $arrayTabla115['Conclusion'], 0, 'J');
$pdf->SetY(200);
$pdf->SetX(24);
$pdf->Multicell(160, 4, $arrayTabla115['Conclusion2'], 0, 'J');
$pdf->SetY(205);
$pdf->SetX(24);
$pdf->Multicell(160, 4, $arrayTabla115['Conclusion3'], 0, 'J');
$pdf->SetY(210);
$pdf->SetX(24);
$pdf->Multicell(160, 4, $arrayTabla115['Conclusion4'], 0, 'J');
$pdf->SetY(215);
$pdf->SetX(24);
$pdf->Multicell(160, 4, $arrayTabla115['Conclusion5'], 0, 'J');
$pdf->SetY(220);
$pdf->SetX(24);
$pdf->Multicell(160, 4, $arrayTabla115['Conclusion6'], 0, 'J');


//*****************TABLA 116***********************
$pdf->SetFont('Arial', 'B', 12);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetTextColor(0, 0, 0);
$pdf->Text(21, 236, 'TABLA TOTAL DE VALORES EN BOLIVIANOS Y DÓLARES AMERICANOS.-');
$pdf->SetFont('Arial', 'B', 9);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(200, 220, 255);
$pdf->Rect(21, 240, 170, 25, "FD");
$pdf->SetTextColor(0, 0, 0);
$pdf->Text(24, 245, 'VALOR COMERCIAL : ');
$pdf->SetFont('Arial', '', 9);
$pdf->line(21, 246, '191', '246');
$pdf->SetTextColor(0, 0, 0);
$pdf->Text(156, 245, number_format($arrayTabla116['Valor_Comercial'], 2));
$pdf->SetTextColor(0, 0, 0);
$pdf->Text(178, 245, '$US.');

$pdf->Text(110, 245, number_format($arrayTabla117['Valor_Comercial'], 2));
$pdf->Text(137, 245, 'BS.');

$pdf->SetTextColor(0, 0, 0);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(24, 250, 'VALOR NETO DE REALIZACIÓN O HIPOTECARIO : ');
$pdf->SetFont('Arial', '', 9);
$pdf->line(21, 251, '191', '251');
$pdf->SetTextColor(0, 0, 0);
$pdf->Text(156, 250, number_format($arrayTabla116['Valor_Hipotecario'], 2));
$pdf->SetTextColor(0, 0, 0);
$pdf->Text(178, 250, '$US.');

$pdf->Text(110, 250, number_format($arrayTabla117['Valor_Hipotecario'], 2));
$pdf->Text(137, 250, 'BS.');

$pdf->SetTextColor(0, 0, 0);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(24, 255, 'VALOR CATASTRAL : ');
$pdf->SetFont('Arial', '', 9);
$pdf->line(21, 256, '191', '256');
$pdf->SetTextColor(0, 0, 0);
$pdf->Text(156, 255, number_format($arrayTabla116['Valor_Catastral'], 2));
$pdf->SetTextColor(0, 0, 0);
$pdf->Text(178, 255, '$US.');

$pdf->Text(110, 255, number_format($arrayTabla117['Valor_Catastral'], 2));
$pdf->Text(137, 255, 'BS.');

$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(24, 260, 'VALOR DE VENTA RÁPIDA O LIQUIDACIÓN : ');
$pdf->SetFont('Arial', '', 9);
$pdf->line(21, 261, '191', '261');
$pdf->SetTextColor(0, 0, 0);
$pdf->Text(156, 260, number_format($arrayTabla116['Valor_Liquidacion'], 2));
$pdf->SetTextColor(0, 0, 0);
$pdf->Text(178, 260, '$US.');


$pdf->Text(110, 260, number_format($arrayTabla117['Valor_Liquidacion'], 2));
$pdf->Text(137, 260, 'BS.');
$pdf->Text(21, 270, "Tipo de cambio : Bolivianos " . $arrayTabla0['Tipo_Cambio']);
$pdf->SetTextColor(0, 0, 0);

$pdf->AddPage();

//*****************TABLA 116_2***********************
//$pdf->SetFont('Arial', '', 12);
//$pdf->SetTextColor(0, 0, 0);
//$pdf->Text(21, 34, 'TABLA TOTAL DE VALORES EN BOLIVIANOS.-');
//$pdf->SetFont('Arial', '', 9);
//$pdf->SetTextColor(0, 0, 0);
//$pdf->SetFillColor(200, 220, 255);
//$pdf->Rect(21, 35, 170, 25, "FD");
//$pdf->SetTextColor(0, 0, 0);
//$pdf->Text(24, 40, 'VALOR COMERCIAL : ');
//$pdf->line(21, 41, '191','41');
//$pdf->SetTextColor(0, 0, 0);
//$pdf->Text(134, 40, number_format($arrayTabla117['Valor_Comercial'],2));
//$pdf->SetTextColor(0, 0, 0);
//$pdf->Text(170, 40, 'BS.');
//
//$pdf->SetTextColor(0, 0, 0);
//$pdf->Text(24,45, 'VALOR NETO DE REALIZACIÓN O HIPOTECARIO : ');
//$pdf->line(21, 46, '191','46');
//$pdf->SetTextColor(0, 0, 0);
//$pdf->Text(134, 45, number_format($arrayTabla117['Valor_Hipotecario'],2));
//$pdf->SetTextColor(0, 0, 0);
//$pdf->Text(170, 45, 'BS.');
//
//$pdf->SetTextColor(0, 0, 0);
//$pdf->SetTextColor(0, 0, 0);
//$pdf->Text(24, 50, 'VALOR CATASTRAL : ');
//$pdf->line(21, 51, '191','51');
//$pdf->SetTextColor(0, 0, 0);
//$pdf->Text(134, 50, number_format($arrayTabla117['Valor_Catastral'],2));
//$pdf->SetTextColor(0, 0, 0);
//$pdf->Text(170, 50, 'BS.');
//
//$pdf->SetTextColor(0, 0, 0);
//$pdf->Text(24, 55, 'VALOR DE VENTA RÁPIDA O LIQUIDACIÓN : ');
//$pdf->line(21, 56, '191','56');
//$pdf->SetTextColor(0, 0, 0);
//$pdf->Text(134, 55, number_format($arrayTabla117['Valor_Liquidacion'],2));
//$pdf->SetTextColor(0, 0, 0);
//$pdf->Text(170, 55, 'BS.');
//$pdf->SetTextColor(0, 0, 0);
///////FOTOGRAFÍAS/////////////777
//$pdf->AddPage();
//$pdf->Write(5, round($arrayProforma['Precio_Transporte'], 2) . ' €');
$pdf->Ln();

//productos($arrayProducto);

$pdf->SetFont('Arial', '', 14);
$pdf->SetFillColor(255, 255, 255);
$pdf->Rect(12, 30, 190, 231, "FD");

$pdf->Text(71, 45, 'FOTOGRAFÍAS DE REFERENCIA');
if ($arrayTabla0['Foto1'] != "") {
    $pdf->Image('../fotos/' . $arrayTabla0['Codigo_Avaluo'] . '/' . $arrayTabla0['Foto1'], 20, 50, 80, 60);
}
if ($arrayTabla0['Foto2'] != "") {
    $pdf->Image('../fotos/' . $arrayTabla0['Codigo_Avaluo'] . '/' . $arrayTabla0['Foto2'], 115, 50, 80, 60);
}
if ($arrayTabla0['Foto3'] != "") {
    $pdf->Image('../fotos/' . $arrayTabla0['Codigo_Avaluo'] . '/' . $arrayTabla0['Foto3'], 20, 115, 80, 60);
}
if ($arrayTabla0['Foto4'] != "") {
    $pdf->Image('../fotos/' . $arrayTabla0['Codigo_Avaluo'] . '/' . $arrayTabla0['Foto4'], 115, 115, 80, 60);
}
if ($arrayTabla0['Foto5'] != "") {
    $pdf->Image('../fotos/' . $arrayTabla0['Codigo_Avaluo'] . '/' . $arrayTabla0['Foto5'], 20, 180, 80, 60);
}
if ($arrayTabla0['Foto7'] != "") {
    $pdf->Image('../fotos/' . $arrayTabla0['Codigo_Avaluo'] . '/' . $arrayTabla0['Foto7'], 115, 180, 80, 60);
}


$pdf->AddPage();
$pdf->Image('../fotos/13.png', 64, 100, 95, 75);
//$pdf->Write(5, round($arrayProforma['Precio_Transporte'], 2) . ' €');
$pdf->Ln();
$pdf->Text(71, 45, 'FOTOGRAFÍAS DE REFERENCIA');

if ($arrayTabla0['Foto8'] != "") {
    $pdf->Image('../fotos/' . $arrayTabla0['Codigo_Avaluo'] . '/' . $arrayTabla0['Foto8'], 20, 50, 80, 60);
}
if ($arrayTabla0['Foto9'] != "") {
    $pdf->Image('../fotos/' . $arrayTabla0['Codigo_Avaluo'] . '/' . $arrayTabla0['Foto9'], 115, 50, 80, 60);
}
if ($arrayTabla0['Foto10'] != "") {
    $pdf->Image('../fotos/' . $arrayTabla0['Codigo_Avaluo'] . '/' . $arrayTabla0['Foto10'], 20, 115, 80, 60);
}
if ($arrayTabla0['Foto11'] != "") {
    $pdf->Image('../fotos/' . $arrayTabla0['Codigo_Avaluo'] . '/' . $arrayTabla0['Foto11'], 115, 115, 80, 60);
}
if ($arrayTabla0['Foto12'] != "") {
    $pdf->Image('../fotos/' . $arrayTabla0['Codigo_Avaluo'] . '/' . $arrayTabla0['Foto12'], 20, 180, 80, 60);
}
if ($arrayTabla0['Foto13'] != "") {
    $pdf->Image('../fotos/' . $arrayTabla0['Codigo_Avaluo'] . '/' . $arrayTabla0['Foto13'], 115, 180, 80, 60);
}

$pdf->AddPage();
//$pdf->Write(5, round($arrayProforma['Precio_Transporte'], 2) . ' €');
$pdf->Ln();

//productos($arrayProducto);

$pdf->SetFont('Arial', '', 21);
$pdf->SetFillColor(255, 255, 255);
$pdf->Rect(12, 30, 190, 231, "FD");

$pdf->Text(80, 45, 'VISTA AÉREA');
if ($arrayTabla18['Foto'] != "") {
    $pdf->Image('../fotos/' . $arrayTabla0['Codigo_Avaluo'] . '/' . $arrayTabla18['Foto'], 20, 50, 175, 120);
}




$pdf->Output($arrayTabla1['Propietario'] . '-' . $arrayTabla1['Urbanizacion'] . '.pdf', 'I');
