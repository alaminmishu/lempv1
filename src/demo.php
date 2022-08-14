<?php 
require_once('db.php');

$stmt = $conn->prepare("SELECT firstname, lastname FROM Persons");
$stmt->execute();
// $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
$results = $stmt->fetchAll();

?>
 
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.css" />
<table id="tblUser" style="width:25%">
    <thead>
        <th>First Name</th>
        <th>Last Name</th>
    </thead>
    <tbody>
        <?php foreach ($results as $person) { ?>
            <tr>
                <td><?php echo $person['firstname']; ?></td>
                <td><?php echo $person['lastname']; ?></td>
            </tr>
        <?php
    }?>
    </tbody>
</table>
 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.js"></script>
<script>
jQuery(document).ready(function($) {
    $('#tblUser').DataTable();
} );
</script>