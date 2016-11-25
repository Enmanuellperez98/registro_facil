<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Resgitro Facil - Tarea 9 - 10</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  </head>
  <body>
    <div class="container">
    <h1>Registro</h1>
      <div class="row">

        <form class="" action="<?php echo base_url('RegistroC/guardar')?>" method="post">
<div class="col col-md-6">

          <div class="form-group input-group">
            <span class="input-group-addon">Nombre</span>
            <input class="form-group" type="text" name="nombre" value="">
          </div>

          <div class="form-group input-group">
            <span class="input-group-addon">Descripcion</span>
            <input class="form-group" type="text" name="descripcion" value="">
          </div>

          <div class="form-group input-group">
            <span class="input-group-addon">Precio</span>
            <input class="form-group" type="text" name="precio" value="">
          </div>
            <div class="">
              <input type="submit" class="btn btn-default" name="" value="Guardar">
            </div>
        </form>

</div>
      </div>
      <h1>Registros</h1>
      <table class="table">
        <thead>
          <tr>

          <th>Nombre</th>
          <th>Descripcion</th>
          <th>Precio</th>

        </tr>
        </thead>


        <tbody>

<?php
            foreach ($registro as $linea) {
            echo "<tr>
            <td>{$linea->nombre}</td>
            <td>{$linea->descripcion}</td>
            <td>{$linea->precio}</td>

            <tr>";
            }


 ?>


        </tbody>
      </table>



    </div>









  </body>
</html>
