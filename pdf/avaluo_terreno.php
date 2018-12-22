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
        $this->Cell(0, 15, 'OFICINA: EL ALTO  - CALLE 4 ESQ. JORGE CARRASCO  Nª  225 EDIF. KOLLASUYO OF. 101  TEL: 2823704 CEL.: 71288305', 0, 0, 'C');
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
$pdf->Image('../fotos/13.png', 64, 100, 95, 75);
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
$pdf->Image('../fotos/13.png', 64, 100, 95, 75);












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
$pdf->Image('../fotos/13.png', 64, 100, 95, 75);

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
$pdf->Image('../fotos/13.png', 64, 100, 95, 75);
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
//************************TABLA 6_2**********************************
//*****************************TABLA 7**********************************
$pdf->SetFont('Arial', 'B', 12);
$pdf->SetTextColor(0, 0, 0);
$pdf->Text(21, 195, '6.- CALCULO DEL VALOR CATASTRAL DEL TERRENO.-');
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
$pdf->Image('../fotos/13.png', 64, 100, 95, 75);
//*****************************TABLA 8**********************************
//*****************************TABLA 9**********************************
$pdf->SetFont('Arial', 'B', 12);
$pdf->Text(21, 40, '7.- CALCULO DEL VALOR TÉCNICO COMERCIAL DEL TERRENO.- ');
$pdf->SetFont('Arial', '', 9);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(255, 255, 255);
$pdf->Rect(21, 45, 170, 50, "FD");

$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(24, 50, 'SUPERFICIE DEL TERRENO : ');
$pdf->SetFont('Arial', '', 9);
$pdf->line(21, 51, '191', '51');
$pdf->Text(154, 50, number_format($arrayTabla9['Superficie_Terreno'], 2));
$pdf->Text(180, 50, 'MT2');

$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(24, 55, 'VALOR COMERCIAL POR MT2. : ');
$pdf->SetFont('Arial', '', 9);
$pdf->line(21, 56, '191', '56');
$pdf->Text(154, 55, number_format($arrayTabla9['Valor_Comercial_Mt2'], 2));
$pdf->Text(180, 55, '$US.');


$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(24, 60, 'FACTOR DE INCLINACIÓN : ');
$pdf->SetFont('Arial', '', 9);
$pdf->line(21, 61, '191', '61');
$pdf->Text(154, 60, number_format($arrayTabla9['Factor_Inclinacion'], 2));
$pdf->Text(180, 60, '%');

$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(24, 65, 'FACTOR DE FORMA : ');
$pdf->SetFont('Arial', '', 9);
$pdf->line(21, 66, '191', '66');
$pdf->Text(154, 65, number_format($arrayTabla9['Factor_Forma'], 2));
$pdf->Text(180, 65, '%');

$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(24, 70, 'FACTOR DE SERVICIOS : ');
$pdf->SetFont('Arial', '', 9);
$pdf->line(21, 71, '191', '71');
$pdf->Text(154, 70, number_format($arrayTabla9['Factor_Servicios'], 2));
$pdf->Text(180, 70, '%');

$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(24, 75, 'FACTOR DE COMERCIABILIDAD : ');
$pdf->SetFont('Arial', '', 9);
$pdf->line(21, 76, '191', '76');
$pdf->Text(154, 75, number_format($arrayTabla9['Factor_Comerciabilidad'], 2));
$pdf->Text(180, 75, '%');

$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(24, 80, 'VALOR COMERCIAL MT2 TOTAL : ');
$pdf->SetFont('Arial', '', 9);
$pdf->line(21, 81, '191', '81');
$pdf->Text(154, 80, number_format($arrayTabla9['Valor_Comercial_Mt2_Total'], 2));
$pdf->Text(180, 80, '$US.');

$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(24, 85, 'VALOR TOTAL COMERCIAL DEL TERRENO : ');
$pdf->SetFont('Arial', '', 9);
$pdf->line(21, 86, '191', '86');
$pdf->Text(154, 85, number_format($arrayTabla9['Valor_Total_Comercial_Terreno'], 2));
$pdf->Text(180, 85, '$US.');

$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(255, 255, 255);
$pdf->Rect(21, 90, 170, 5, "FD");

$total = $arrayTabla9['Valor_Total_Comercial_Terreno'];
$V = new EnLetras();
$con_letra = strtoupper($V->ValorEnLetras($total, " 00/100 DÓLARES"));
$pdf->Text(24, 94, $con_letra);
//$pdf->Text(21, 154, "Tipo de cambio : Bolivianos " . $arrayTabla0['Tipo_Cambio']);
//*****************************TABLA 10**********************************
//$pdf->Text(21, 209, "Tipo de cambio : Bolivianos " . $arrayTabla0['Tipo_Cambio']);
//*****************TABLA 11***********************

$pdf->SetFont('Arial', 'B', 12);
$pdf->Text(21, 105, '8.- TOTALES.-');
$pdf->SetFont('Arial', 'B', 11);
$pdf->Text(29, 115, '•	AVALUÓ TÉCNICO COMERCIAL FINAL DEL INMUEBLE.-');
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(255, 255, 255);
$pdf->Rect(21, 119, 170, 19, "FD");
$pdf->Text(24, 124, '');
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(90, 124, 'VALOR UNITARIO');
$pdf->line(21, 125, '191', '125');
$pdf->Text(132, 124, 'SUPERFICIE');
$pdf->Text(170, 124, 'TOTAL');

$pdf->SetTextColor(0, 0, 0);
$pdf->Text(24, 129, 'VALOR DEL TERRENO');
$pdf->line(21, 130, '191', '130');
$pdf->Text(24, 134, 'VALOR DE LA CONSTRUCCIÓN');
$pdf->SetFont('Arial', '', 9);
$pdf->Text(90, 129, number_format($arrayTabla11['Valor_Unitario_T'], 2));
$pdf->Text(132, 129, number_format($arrayTabla11['Superficie_T'], 2));
$pdf->Text(170, 129, number_format($arrayTabla11['Total_T'], 2));
$pdf->Text(90, 134, number_format($arrayTabla11['Valor_Unitario_C'], 2));
$pdf->Text(132, 134, number_format($arrayTabla11['Superficie_C'], 2));
$pdf->Text(170, 134, number_format($arrayTabla11['Total_C'], 2));
$pdf->SetFillColor(255, 255, 255);
$pdf->Rect(21, 142, 170, 5, "FD");
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(24, 146, 'VALOR COMERCIAL TOTAL: 	');
$pdf->SetFont('Arial', '', 9);
$pdf->Text(150, 146, '$US.');
$pdf->Text(170, 146, number_format($arrayTabla11['Valor_Comercial_Total'], 2));
$pdf->Text(21, 152, "Tipo de cambio : Bolivianos " . $arrayTabla0['Tipo_Cambio']);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetTextColor(0, 0, 0);
//*****************TABLA 112***********************

$pdf->SetFont('Arial', '', 12);
$pdf->SetFont('Arial', 'B', 11);
$pdf->Text(29, 165, '•	VALOR HIPOTECARIO.-');
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(255, 255, 255);
$pdf->Rect(21, 169, 170, 19, "FD");
$pdf->Text(24, 49, '');
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(90, 174, 'VALOR COMERCIAL');
$pdf->line(21, 175, '191', '175');
$pdf->Text(132, 174, 'PORCENTAJE');
$pdf->Text(170, 174, 'TOTAL');

$pdf->SetTextColor(0, 0, 0);
$pdf->Text(24, 179, 'VALOR DEL TERRENO');
$pdf->line(21, 180, '191', '180');
$pdf->Text(24, 184, 'VALOR DE LA CONSTRUCCIÓN');
$pdf->SetFont('Arial', '', 9);
$pdf->Text(90, 179, number_format($arrayTabla112['Valor_Comercial_T'], 2));
$pdf->Text(132, 179, number_format($arrayTabla112['Porcentaje_T'], 2));
$pdf->Text(170, 179, number_format($arrayTabla112['Total_T'], 2));
$pdf->Text(90, 184, number_format($arrayTabla112['Valor_Comercial_C'], 2));
$pdf->Text(132, 184, number_format($arrayTabla112['Porcentaje_C'], 2));
$pdf->Text(170, 184, number_format($arrayTabla112['Total_C'], 2));
$pdf->SetFillColor(255, 255, 255);
$pdf->Rect(21, 192, 170, 5, "FD");
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(24, 196, 'VALOR HIPOTECARIO : ');
$pdf->SetFont('Arial', '', 9);
$pdf->Text(150, 196, '$US.');
$pdf->Text(170, 196, number_format($arrayTabla112['Valor_Hipotecario'], 2));
//$pdf->Text(21, 77, "Tipo de cambio : Bolivianos " . $arrayTabla0['Tipo_Cambio']);
$pdf->SetTextColor(0, 0, 0);
//*****************TABLA 113***********************

$pdf->SetFont('Arial', '', 12);
$pdf->SetFont('Arial', 'B', 11);
$pdf->Text(29, 206, '•	AVALUÓ CATASTRAL FINAL DEL INMUEBLE.-');
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(255, 255, 255);
$pdf->Rect(21, 210, 170, 19, "FD");
$pdf->Text(24, 210, '');
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(90, 215, 'VALOR UNITARIO');
$pdf->line(21, 216, '191', '216');
$pdf->Text(132, 215, 'SUPERFICIE');
$pdf->Text(170, 215, 'TOTAL');

$pdf->SetTextColor(0, 0, 0);
$pdf->Text(24, 219, 'VALOR DEL TERRENO');
$pdf->line(21, 220, '191', '220');
$pdf->Text(24, 224, 'VALOR DE LA CONSTRUCCIÓN');
$pdf->SetFont('Arial', '', 9);
$pdf->Text(90, 219, number_format($arrayTabla113['Valor_Unitario_T'], 2));
$pdf->Text(132, 219, number_format($arrayTabla113['Superficie_T'], 2));
$pdf->Text(170, 219, number_format($arrayTabla113['Total_T'], 2));
$pdf->Text(90, 224, number_format($arrayTabla113['Valor_Unitario_C'], 2));
$pdf->Text(132, 224, number_format($arrayTabla113['Superficie_C'], 2));
$pdf->Text(170, 224, number_format($arrayTabla113['Total_C'], 2));
$pdf->SetFillColor(255, 255, 255);
$pdf->Rect(21, 233, 170, 5, "FD");
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(24, 237, 'VALOR CATASTRAL TOTAL:  ');
$pdf->SetFont('Arial', '', 9);
$pdf->Text(150, 237, 'Bs.');
$pdf->Text(170, 237, number_format($arrayTabla113['Valor_Catastral_Total_Bs'], 2));
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(255, 255, 255);
$pdf->Rect(21, 241, 170, 5, "FD");
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(24, 245, 'VALOR CATASTRAL DÓLARES AMERICANOS: ');
$pdf->SetFont('Arial', '', 9);
$pdf->Text(150, 245, '$US.');
$pdf->Text(170, 245, number_format($arrayTabla113['Valor_Catastral_Total'], 2));
$pdf->Text(21, 251, "Tipo de cambio : Bolivianos " . $arrayTabla0['Tipo_Cambio']);
$pdf->SetTextColor(0, 0, 0);
$pdf->AddPage();
$pdf->Image('../fotos/13.png', 64, 100, 95, 75);
//*****************TABLA 114***********************

$pdf->SetFont('Arial', '', 12);
$pdf->SetFont('Arial', 'B', 11);
$pdf->Text(29, 40, '•	VALOR DE LIQUIDACIÓN O VENTA RÁPIDA.-');
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(255, 255, 255);
$pdf->Rect(21, 45, 170, 19, "FD");
$pdf->Text(24, 50, '');
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(90, 50, 'VALOR COMERCIAL');
$pdf->line(21, 51, '191', '51');
$pdf->Text(132, 50, 'PORCENTAJE');
$pdf->Text(170, 50, 'TOTAL');

$pdf->SetTextColor(0, 0, 0);
$pdf->Text(24, 55, 'VALOR DEL TERRENO');
$pdf->line(21, 56, '191', '56');
$pdf->Text(24, 60, 'VALOR DE LA CONSTRUCCIÓN');
$pdf->SetFont('Arial', '', 9);
$pdf->Text(90, 55, number_format($arrayTabla114['Valor_Comercial_T'], 2));
$pdf->Text(132, 55, number_format($arrayTabla114['Porcentaje_T'], 2));
$pdf->Text(170, 55, number_format($arrayTabla114['Total_T'], 2));
$pdf->Text(90, 60, number_format($arrayTabla114['Valor_Comercial_C'], 2));
$pdf->Text(132, 60, number_format($arrayTabla114['Porcentaje_C'], 2));
$pdf->Text(170, 60, number_format($arrayTabla114['Total_C'], 2));
$pdf->SetFillColor(255, 255, 255);
$pdf->Rect(21, 68, 170, 5, "FD");
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(24, 72, 'VALOR DE LIQUIDACIÓN O VENTA RÁPIDA:');
$pdf->SetFont('Arial', '', 9);
$pdf->Text(150, 72, '$US.');
$pdf->Text(170, 72, number_format($arrayTabla114['Valor_Liquidacion_Venta_Rapida'], 2));
//$pdf->Text(21, 178, "Tipo de cambio : Bolivianos " . $arrayTabla0['Tipo_Cambio']);
$pdf->SetTextColor(0, 0, 0);


//*****************TABLA 115***********************

$pdf->SetFont('Arial', 'B', 12);
$pdf->Text(21, 87, 'CONCLUSIONES.-');
$pdf->SetFillColor(255, 255, 255);
$pdf->Rect(21, 92, 170, 35, "FD");
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('Arial', '', 9);

$pdf->SetY(95);
$pdf->SetX(24);
$pdf->Multicell(160, 4, $arrayTabla115['Conclusion'], 0, 'J');
$pdf->SetY(100);
$pdf->SetX(24);
$pdf->Multicell(160, 4, $arrayTabla115['Conclusion2'], 0, 'J');
$pdf->SetY(105);
$pdf->SetX(24);
$pdf->Multicell(160, 4, $arrayTabla115['Conclusion3'], 0, 'J');
$pdf->SetY(110);
$pdf->SetX(24);
$pdf->Multicell(160, 4, $arrayTabla115['Conclusion4'], 0, 'J');
$pdf->SetY(115);
$pdf->SetX(24);
$pdf->Multicell(160, 4, $arrayTabla115['Conclusion5'], 0, 'J');
$pdf->SetY(120);
$pdf->SetX(24);
$pdf->Multicell(160, 4, $arrayTabla115['Conclusion6'], 0, 'J');


//*****************TABLA 116***********************
$pdf->SetFont('Arial', 'B', 12);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetTextColor(0, 0, 0);
$pdf->Text(21, 136, 'TABLA TOTAL DE VALORES EN BOLIVIANOS Y DÓLARES AMERICANOS.-');
$pdf->SetFont('Arial', 'B', 9);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(200, 220, 255);
$pdf->Rect(21, 140, 170, 25, "FD");
$pdf->SetTextColor(0, 0, 0);
$pdf->Text(24, 145, 'VALOR COMERCIAL : ');
$pdf->SetFont('Arial', '', 9);
$pdf->line(21, 146, '191', '146');
$pdf->SetTextColor(0, 0, 0);
$pdf->Text(156, 145, number_format($arrayTabla116['Valor_Comercial'], 2));
$pdf->SetTextColor(0, 0, 0);
$pdf->Text(178, 145, '$US.');

$pdf->Text(110, 145, number_format($arrayTabla117['Valor_Comercial'], 2));
$pdf->Text(137, 145, 'BS.');

$pdf->SetTextColor(0, 0, 0);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(24, 150, 'VALOR NETO DE REALIZACIÓN O HIPOTECARIO : ');
$pdf->SetFont('Arial', '', 9);
$pdf->line(21, 151, '191', '151');
$pdf->SetTextColor(0, 0, 0);
$pdf->Text(156, 150, number_format($arrayTabla116['Valor_Hipotecario'], 2));
$pdf->SetTextColor(0, 0, 0);
$pdf->Text(178, 150, '$US.');

$pdf->Text(110, 150, number_format($arrayTabla117['Valor_Hipotecario'], 2));
$pdf->Text(137, 150, 'BS.');

$pdf->SetTextColor(0, 0, 0);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(24, 155, 'VALOR CATASTRAL : ');
$pdf->SetFont('Arial', '', 9);
$pdf->line(21, 156, '191', '156');
$pdf->SetTextColor(0, 0, 0);
$pdf->Text(156, 155, number_format($arrayTabla116['Valor_Catastral'], 2));
$pdf->SetTextColor(0, 0, 0);
$pdf->Text(178, 155, '$US.');

$pdf->Text(110, 155, number_format($arrayTabla117['Valor_Catastral'], 2));
$pdf->Text(137, 155, 'BS.');

$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(24, 160, 'VALOR DE VENTA RÁPIDA O LIQUIDACIÓN : ');
$pdf->SetFont('Arial', '', 9);
$pdf->line(21, 161, '191', '161');
$pdf->SetTextColor(0, 0, 0);
$pdf->Text(156, 160, number_format($arrayTabla116['Valor_Liquidacion'], 2));
$pdf->SetTextColor(0, 0, 0);
$pdf->Text(178, 160, '$US.');


$pdf->Text(110, 160, number_format($arrayTabla117['Valor_Liquidacion'], 2));
$pdf->Text(137, 160, 'BS.');
$pdf->Text(21, 170, "Tipo de cambio : Bolivianos " . $arrayTabla0['Tipo_Cambio']);
$pdf->SetTextColor(0, 0, 0);

$pdf->AddPage();
$pdf->Image('../fotos/13.png', 64, 100, 95, 75);

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

$pdf->Image('../fotos/13.png', 64, 100, 100, 100);
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
//$pdf->Image('../fotos/13.png', 64, 100, 95, 75);
//$pdf->Write(5, round($arrayProforma['Precio_Transporte'], 2) . ' €');
$pdf->Ln();

//productos($arrayProducto);

$pdf->SetFont('Arial', '', 21);
$pdf->SetFillColor(255, 255, 255);
$pdf->Rect(12, 30, 190, 231, "FD");

$pdf->Text(80, 45, 'VISTA AÉREA');
$pdf->Image('../fotos/13.png', 64, 100, 95, 75);
//$pdf->Image('../fotos/13.png', 20, 20, 200, 150);
if ($arrayTabla18['Foto'] != "") {
    $pdf->Image('../fotos/' . $arrayTabla0['Codigo_Avaluo'] . '/' . $arrayTabla18['Foto'], 20, 50, 175, 120);
}




$pdf->Output($arrayTabla1['Propietario'] . '-' . $arrayTabla1['Urbanizacion'] . '.pdf', 'I');
