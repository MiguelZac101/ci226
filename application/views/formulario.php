<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    </head>
    <body>
         
<div class="container">
    
    <h1>form</h1> 
  <!-- Content here -->
<?php 
if($respuesta){
?>
  <div class="alert alert-success" role="alert">
          <?php echo $respuesta; ?>
      </div>
<?php
}
?>

        <form action="<?php echo base_url();?>formulario" method="post">
            <div class="form-group">
                <label for="inputNombre">Nombre</label>
                <input type="text" class="form-control" id="inputNombre">
                <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
            </div>                        
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
</div>

      
    </body>
</html>