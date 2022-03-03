<div class="table-responsive">
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col"> ID</th>
      <th scope="col"><i class="bi bi-file-person-fill">NAME </i> </th>
      <th scope="col"><i class="bi bi-envelope-check-fill">EMAIL </i> </th>
      <th scope="col"> PASSWORD</th>
      <th scope="col"> ESTADO</th>
      <th scople="col"> CREADO</th>
      <th scople="col"> MODIFICADO </th>
    </tr>
  </thead>
  <tbody>
  <?php
 //var_dump($filas);
 for($i=0;$i<count($filas);$i++){
    $id =  $filas[$i]['user_id'];
   $nombre =  $filas[$i]['user_name'];
   $email =  $filas[$i]['user_email'];
   $password = $filas[$i]['user_password'];
   $estado = $filas[$i]['user_state'];
    $crear = $filas[$i]['user_time_create'];
    $modificar = $filas[$i]['usuario_time_updated'];
    ?>
    <tr>
<td> <?php echo $id ?> </td>
<td> <?php echo $nombre ?> </td>
<td> <?php echo $email ?> </td>
<td> <?php echo $password ?> </td>
<td> <?php echo $estado ?> </td>
<td> <?php echo $crear ?> </td>
<td> <?php echo $modificar ?> </td>
 </tr>
    <?php
 }
    ?>
  </tbody>
</table>
</div>





