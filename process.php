
<?php
inclade ("index0.html" );
?>
<html>
<head>
<title>select</title>
</head>
<body>

<table border="1"> <tr><td> Right </tr></td> <tr><td> Forward </tr></td> <tr><td> Left </tr></td>
<?php
$sql = "select * from test " ;
$result = $conn ->query($sql);
if($result->num_rows>0){
    while($row = $result->fetch_assoc()){

    ?>
    <tr><td><?php echo $row ['Right'] ?>  <tr><td><?php echo $row ['Forward'] ?>  <tr><td><?php echo $row ['Left'] ?> </tr></td>
    <?php}}?>
    </table>
    </body>
    </head>