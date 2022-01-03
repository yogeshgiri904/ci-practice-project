<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo base_url('css/style.css');?>">
    <style>
        p{
            text-align: left;
        }
    </style>
</head>
<body>
<div class="form-container">
    <form action="<?php echo site_url('crud_control/gstControl');?>" method="POST">
        <input type="text" name="amount" placeholder="Enter Actual Cost"><br>
        <input type="text" name="tax" placeholder="Enter GST Percentage"><br>
        <input type="submit" name="calc" value="Calculate"><br>
    </form>
    <p><?php echo "ACTUAL COST: Rs.".round($ans['amount'],2);?></p>
    <p><?php echo "GST PERCENT: ".$ans['tax']." %";?></p>
    <p><?php echo "TOTAL COST: Rs.".round($ans['total'],2);?></p>

</div>
</body>
</html>