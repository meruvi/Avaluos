<?php

/* * *****************************************************************
 * Clase: CCalculo
 * @copyright 2010
 * ***************************************************************** */

////////////////////////////////////////////////////////////////////
class CIndex {

    function InformacionPrincipio() {
        $sHTM = '';
        $sHTM.='<article class="post"><p>TABLA TOTAL DE VALORES</p>
  <table width="100%">
    <tr>
      <td width="57%">Solicitante:</td>
      <td width="19%"><input type="text" name="SOLICITANTE" id="SOLICITANTE" /></td>
    </tr>
    <tr>
      <td>Propietario:</td>
      <td><input type="text" name="PROPIETARIO" id="PROPIETARIO" /></td>
    </tr>
    <tr>
      <td>Inmueble Avaluado:</td>
      <td>
	 <select name="INMUEBLEAVALUO" id="INMUEBLEAVALUO">';
        $sHTM .='<option value="Terreno">Terreno</option>';
        $sHTM .='<option value="Vivienda">Vivienda</option>';
        $sHTM .='<option value="Comercio">Comercio</option>';
        $sHTM .='<option value="Departamento">Departamento</option>';
        $sHTM .='<option value="Fabrica">Fabrica</option>';
         $sHTM .='<option value="Garaje">Garaje</option>';
        $sHTM .='</select>
	  
	  </td>
    </tr>
    <tr>
      <td>Urbanizacion: </td>
      <td><input type="text" name="URBANIZACION" id="URBANIZACION" /></td>
    </tr>

     <tr>
      <td>Jurisdiccion: </td>
      <td><input type="text" name="JURISDICCION" id="JURISDICCION" /></td>
    </tr>
    
	
    </tr>
	<tr>
	<td>
	FOTO SATELITAL
	</td>
		  	<td>
	<input type="file" name="SubirFoto6" class="botonFoto" />
	</td>
	</tr>
		<tr>
      <td></td>
      <td><input type="submit" value="Siguiente" class="botonImprimir"/></td>
    </tr>
  </table>
  </article>';
        return $sHTM;
    }

    function AvaluosRealizado() {
        $objConexion = new Conexion;
        $objConexion->conectarse_Admin();
        $objClienteControladorControlador = new Cliente_Controlador;
        $arrayTabla1 = $objClienteControladorControlador->getArrayDatosTabla1Realizados();


        $sHTM = '';
        foreach ($arrayTabla1 as $key => $value) {



$tipo = $objClienteControladorControlador->getTipo($arrayTabla1[$key]['Codigo_Avaluo']);
            $sHTM .='<p><a href="Avaluo.php?CodigoAvaluo=' . $arrayTabla1[$key]['Codigo_Avaluo'] . '&Tipo=' . $tipo . '">' . $arrayTabla1[$key]['Propietario'] . '</a></p>	';
        }
        return $sHTM;
    }

}

?>