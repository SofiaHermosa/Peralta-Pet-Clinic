Hi <?php echo $data['name'] ?>,
<br><br>

this is to inform you that <?php echo $data['inquirer'] ?> send an inquiry.<br><br>

Content:<br>

<?php echo base64_decode($data['content']); ?>



