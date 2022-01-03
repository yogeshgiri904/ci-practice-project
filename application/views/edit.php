<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('css/style.css');?>">
    <title>Nupay Crud</title>
</head>
<body>
    <div class="main-container">
        <div class="card-container">
            <div class="heading-container">
                <h2>Nupay Crud</h2>
                <p>This is a crud opration setup. Anyone can use it for generating a note and can perform delete and edit any time.</p>
                <a href="<?php echo site_url('crud_control/contact'); ?>">Contact Us</a>
            </div>
            <div class="note-container">
                <div class="form-container">
                        <?php
                            foreach($getData as $row){
                                echo '<form action="" method="POST">
                                <input type="text" name="title" placeholder="Enter Title" value="'.$row['title'].'"><br>
                                <input type="text" name="note" placeholder="Enter Your Note" value="'.$row['note'].'"><br>';
                            }
                        ?>
                        <input type="submit" name="submit" value="Update"><br>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
<!-- <script>
    document.getElementById('edit').addEventListener('click',()=>{
        document.getElementById('model').style.display = 'block';
    })
    document.getElementById('close').addEventListener('click',()=>{
        document.getElementById('model').style.display = 'none';
    })
</script> -->