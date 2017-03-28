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

        <a href="index.php">View All Addresses</a>

        <div class="container">
            <h1>Add Address</h1>
            <form class="form-horizontal" action="#" method="post">
                <div class="form-group">
                    Full Name: <input name="fullname" class="form-control" value="<?php echo $fullName; ?>" /> <br />
                    Email: <input name="email" class="form-control" value="<?php echo $email; ?>" /> <br />
                    Address: <input name="addressline1" class="form-control" value="<?php echo $address; ?>" /> <br />
                    City: <input name="city" class="form-control" value="<?php echo $city; ?>" /> <br /> 
                    State:
                    <div class="dropdown">
                        <select name="state">
                            <?php foreach ($states as $key => $value): ?> 
                                <option value="<?php echo $key; ?>" <?php if ($state == $key): ?> selected="selected" <?php endif; ?>><?php echo $value; ?></option>
                            <?php endforeach; ?>
                        </select> </div> <br /> 
                    Zip: <input name="zip" class="form-control" value="<?php echo $zip; ?>" /> <br />
                    Birthday: <input name="birthday" type ="date" class="form-control" value="<?php echo $birthday; ?>" /> <br />
                    <input type="submit" value="Submit" class="btn btn-primary" />
                </div>
            </form>
        </div>
    </body>
</html>
