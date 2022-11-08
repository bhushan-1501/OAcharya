<?php

    include_once('../includes/config.php');
    if(! empty($_POST["city"]))
    {
        $query="SELECT * FROM pandits WHERE city = '" . $_POST["city"] . "' and status='Approved'";
        $ret=mysqli_query($con,$query);
    }
?>
<option value disabled selected> Select pandit</option>
<?php
    foreach($ret as $pandit)
    {
       ?>
       <option value="<?php echo $pandit["pandit_id"]; ?>"><?php  echo $pandit["fullname"]; ?></option> 
        <?php
    }
?>