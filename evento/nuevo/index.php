<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ESCOM - TITULOS</title>
   
    <script src="/titulosEscom/js/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="/titulosEscom/js/materialize.min.js" type="text/javascript"></script>
    <script src="/titulosEscom/js/sweetalert2.all.js" type="text/javascript"></script>
    <script src="/titulosEscom/js/papaparse.min.js" type="text/javascript"></script>
    <script src="/titulosEscom/js/nuevoEvento.js" type="text/javascript"> </script>
    
    
    <link rel="stylesheet" href="/titulosEscom/css/materialize.min.css">
    <link rel="stylesheet" href="/titulosEscom/css/font-awesome.min.css">

    
  </head>
  <body>
        <form id="formUpl">
            <label for="archivo">Archivo:</label>
            <input type="file" id="archivoEstudiantes" name="archivoEstudiantes">
            <br>
            <label for="usuario">Usuario</label>
            <input type="text" id="usuario" name="usuario"><br>
            <button type="submit">Subir</button>
        </form>
      
      <div id="loader" class="preloader-wrapper big active">
        <div class="spinner-layer spinner-blue-only">
          <div class="circle-clipper left">
            <div class="circle"></div>
          </div><div class="gap-patch">
            <div class="circle"></div>
          </div><div class="circle-clipper right">
            <div class="circle"></div>
          </div>
        </div>
      </div>
  </body>
</html>
