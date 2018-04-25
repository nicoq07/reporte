<?php 

$dat = $_FILES['dat'];
$procesar = $_POST['procesar'];

if (!empty($procesar))
{
    if (!empty($dat) && $dat['error'] == 0)
    {
        $ruta = 'archivos/dat'.date('d-m-Y').'.txt';
        $checkCopy= copy($dat['tmp_name'],$ruta);
        
        if(!$checkCopy) { echo "Error copiando el archivo, reintente por favor"; die; }
        
       $reporte = procesarDat($ruta);
        
       if(!$reporte) { echo "Error generando el reporte, reintente por favor"; die; }
       
       mostrarReporte($reporte);
    }
}

function procesarDat($ruta)
{
    $array_lineas = leerDat($ruta);
    if (!$array_lineas) { return false;}
    
    foreach ($array_lineas as $linea)
    {
        
    }
    
}

function leerDat($ruta)
{
    $lineas = null;
    $fh = fopen($ruta,'r');
    while ($line = fgets($fh))
    {
        $lineas = $line;
    }
    fclose($fh);
    
    if (!empty($lineas))
    {
        return $lineas;
    }
    return false;
}


function mostrarReporte($reporte)
{
    
}

?>