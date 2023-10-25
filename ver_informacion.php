<?php
include('includes/header.php'); 
include('includes/navbar.php');

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <title><h1>Información de la Persona</h1></title>
</head>
<body>
<div class="table-responsive">
        
    <?php
    $connection = mysqli_connect("localhost", "root", "", "adminpanel");

       $query = "SELECT * FROM personas";
       $query_run = mysqli_query($connection,$query);
    ?>
    <h1></h1>
    <h1>ㅤ</h1>
    <h2>ㅤDescripcion personal fisica</h2>
    <h1>ㅤ</h1>
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
               <th>ID</th>
               <th>Nombre</th>
               <th>Apellido</th>
               <th>Edad</th>
               <th>Sexo</th>
               <th>Peso</th>
               <th>Estatura</th>
               <th>Descripcion</th>
               <th>Fotografia</th>  
            </tr>
        </thead>
         <tbody>
            <?php
            if(mysqli_num_rows($query_run) > 0)
            {
                while($row = mysqli_fetch_assoc($query_run))
                {
                    ?>
                    
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['nombre']; ?></td>
                <td><?php echo $row['apellido']; ?></td>
                <td><?php echo $row['edad']; ?></td>
                <td><?php echo $row['sexo']; ?></td>
                <td><?php echo $row['peso']; ?></td>
                <td><?php echo $row['estatura']; ?></td>
                <td><?php echo $row['descripcion']; ?></td>
                <td><?php echo $row['fotografia']; ?></td>
                <td>
                    
                </td>
                
            </tr>
            <?php
                }
            }
            else {
                echo "No Record Found";
            }
            ?>

         </tbody>
        </table>
    </div>

  

</body>
</html>


<?php
    include('includes/scripts.php');
    include('includes/footer.php');
?>