<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    </head>
    <body>


<?php if ( is_array($address) && count($address) > 0 ) : ?>

<h1>Address</h1>
        <table>
            <tr>
                <th>Full Name</th>
                <th>Email</th>
                <th>Address Line 1</th>
                <th>City</th>
                <th>State</th>
                <th>Zip</th>
                <th>Birthday</th>
            </tr>
        

<?php foreach( $address as $row ) : ?>
            <tr>
    <td><?php echo $row['fullname']; ?> </td>
    <td><?php echo $row['email']; ?> </td>
    <td><?php echo $row['addressline1']; ?> </td>
    <td><?php echo $row['city']; ?> </td>
    <td><?php echo $row['state']; ?> </td>
    <td><?php echo $row['zip']; ?> </td>
    <td><?php echo date("F j, Y",strtotime($row['birthday'])); ?> </td>
    </tr>
    
<?php endforeach; ?>
</table>
<?php endif; ?>

    </body>
</html>