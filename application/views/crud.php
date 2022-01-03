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
    <style>
        small{
            color:red;
        }
    </style>
</head>
<body>
    <div class="main-container">
        <div class="card-container">
            <div class="heading-container">
                <h2>Nupay Crud</h2>
                <p>This is a crud operation setup. Anyone can use it for generating a note and can perform delete and edit any time.</p>
                <a href="<?php echo site_url('crud_control/contact'); ?>">Contact Us</a>
            </div>
            <div class="note-container">
                <div class="form-container">
                    <form action="<?php echo site_url('crud_control/insertData');?>" method="POST">
                        <input type="text" name="titleAtForm" placeholder="Enter Title"><br>
                        <small><i><?php echo form_error('titleAtForm');?></i></small>
                        <input type="text" name="noteAtForm" placeholder="Enter Your Note"><br>
                        <small><i><?php echo form_error('noteAtForm');?></i></small>
                        <input type="submit" name="submit" value="+ add"><br>
                    </form>
                </div>
                <div class="show-container">
                    <div class="main-show">
                        <table>
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Operation</th>
                            </tr>
                            <?php 
                            $ref_id = 0;
                            foreach($showData as $row){
                                    echo '<tr>
                                    <td>'.$row->title.'</td>
                                    <td>'.$row->note.'</td>
                                    <td class="btn-td"><a href="'. site_url("crud_control/updateData/$row->sn") .'" class="edit-btn btn">Edit</a>
                                        <a href="'. site_url("crud_control/deleteData/$row->sn") .'" class="delete-btn btn">Delete</a></td>';
                                }
                                ?>
                            </tr>
                        </table>
                    </div>
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