<?php

    $valor = '';
    $desde = '';
    $hasta = '';
    $respuesta = '';

    if( isset($_POST['convertir'])){
        $valor = $_POST['valor'];
        $desde = $_POST['desde'];
        $hasta = $_POST['hasta'];
        $resultado = convertirMetro($valor, $desde);

        if (!empty($hasta)) {
            $resultado = convertirHasta($resultado, $hasta);
        }
    }

    function convertirMetro($valor, $desdeConvertir){
        switch ($desdeConvertir) {
            case 'Milimetro':
                $respuesta = $valor / 1000;
                break;
            
            case 'Centimetro':
                $respuesta = $valor / 100;
                break;
            
            case 'Decimetro':
                $respuesta = $valor / 100;
                break;
            
            case 'Metro':
                $respuesta = $valor * 1;
                break;
            
            case 'Decametro':
                $respuesta = $valor * 10;
                break;
            
            case 'Hectometro':
                $respuesta = $valor * 100;
                break;
            
            case 'Kilometro':
                $respuesta = $valor * 1000;
                break;

            default:
                //$respuesta = 'Selecciona una medida de partida';              
                break;
        }
        return number_format($respuesta, 6);
        
    }

    function convertirHasta($respuestaDesde, $hasta){
        switch ($hasta) {
            case 'Milimetro':
                $respuesta = $respuestaDesde * 1000;
                break;
            
            case 'Centimetro':
                $respuesta = $respuestaDesde * 100;
                break;
            
            case 'Decimetro':
                $respuesta = $respuestaDesde * 100;
                break;
            
            case 'Metro':
                $respuesta = $respuestaDesde * 1;
                break;
            
            case 'Decametro':
                $respuesta = $respuestaDesde / 10;
                break;
            
            case 'Hectometro':
                $respuesta = $respuestaDesde / 100;
                break;
            
            case 'Kilometro':
                $respuesta = $respuestaDesde / 1000;
                break;

            default:
                //$respuesta = 'Selecciona una medida final';              
                break;
        }    
        return number_format($respuesta, 6);
    }

?>

<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Conversor de Longitud</title>
  </head>
  <body>
    <h1 class="text-center">Conversor de Longitud</h1>
    <div class="container">
        <form method="POST">
            <div class="row mt-12">
                <div class="col-sm-4">
                    <div class="">
                        <label for="resultado" class="form-label">VALOR:</label>
                        <input type="number" name="valor" class="form-control" value="<?php  if(isset($_POST['valor'])) echo $_POST['valor'] ?>">                
                    </div>
                </div>
                <div class="col-sm-4">
                    <label for="resultado" class="form-label">DESDE:</label>
                    <select class="form-select" name="desde">    
                        <option value="">--Selecciona un valor--</option>                       
                        <option value="Milimetro" <?php  if(isset($_POST['desde']) && $_POST['desde'] == 'Milimetro') { echo 'selected'; } ?>>Milímetro</option>
                        <option value="Centimetro" <?php  if(isset($_POST['desde']) && $_POST['desde'] == 'Centimetro') { echo 'selected'; } ?>>Centímetro</option>
                        <option value="Decimetro" <?php  if(isset($_POST['desde']) && $_POST['desde'] == 'Decimetro') { echo 'selected'; } ?>>Decímetro</option>
                        <option value="Metro" <?php  if(isset($_POST['desde']) && $_POST['desde'] == 'Metro') { echo 'selected'; } ?>>Metro</option>
                        <option value="Decametro" <?php  if(isset($_POST['desde']) && $_POST['desde'] == 'Decametro') { echo 'selected'; } ?>>Decámetro</option>
                        <option value="Hectometro" <?php  if(isset($_POST['desde']) && $_POST['desde'] == 'Hectometro') { echo 'selected'; } ?>>Hectómetro</option>
                        <option value="Kilometro" <?php  if(isset($_POST['desde']) && $_POST['desde'] == 'Kilometro') { echo 'selected'; } ?>>Kilómetro</option>
                    </select>
                </div>
                <div class="col-sm-4">
                    <label for="resultado" class="form-label">HASTA:</label>
                    <select class="form-select" name="hasta">
                        <option value="">--Selecciona un valor--</option>                       
                        <option value="Milimetro" <?php  if(isset($_POST['hasta']) && $_POST['hasta'] == 'Milimetro') { echo 'selected'; } ?>>Milímetro</option>
                        <option value="Centimetro" <?php  if(isset($_POST['hasta']) && $_POST['hasta'] == 'Centimetro') { echo 'selected'; } ?>>Centímetro</option>
                        <option value="Decimetro" <?php  if(isset($_POST['hasta']) && $_POST['hasta'] == 'Decimetro') { echo 'selected'; } ?>>Decímetro</option>
                        <option value="Metro" <?php  if(isset($_POST['hasta']) && $_POST['hasta'] == 'Metro') { echo 'selected'; } ?>>Metro</option>
                        <option value="Decametro" <?php  if(isset($_POST['hasta']) && $_POST['hasta'] == 'Decametro') { echo 'selected'; } ?>>Decámetro</option>
                        <option value="Hectometro" <?php  if(isset($_POST['hasta']) && $_POST['hasta'] == 'Hectometro') { echo 'selected'; } ?>>Hectómetro</option>
                        <option value="Kilometro" <?php  if(isset($_POST['hasta']) && $_POST['hasta'] == 'Kilometro') { echo 'selected'; } ?>>Kilómetro</option>
                    </select>              
                </div>
            </div>  
            <div class="row mt-4">
                <div class="col-sm-6">
                    <button type="submit" class="btn btn-primary w-100 py-4" name="convertir">CONVERTIR</button>
                </div>
                <div class="col-sm-6">
                    <div class="mb-3">
                        <label for="resultado" class="form-label">RESULTADO:</label>
                        <input type="text" class="form-control" name="resultado" value="<?php  if(isset($resultado)) echo $resultado ?>">                
                    </div>
                </div>
            </div> 
        </form>     
    </div>
  </body>
</html>