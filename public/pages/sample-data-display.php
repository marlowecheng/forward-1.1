<?php 
    require('../../src/init.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Read Mentee Data</h1>
    <?php foreach($mentors as $mentor):?>
            <?php  
            
                echo $mentor->name . '<br>';
                echo $mentor->image_url . '<br>';
                echo $mentor->user_bio . '<br>';
                echo $mentor->job_title . '<br>';
                echo $mentor->specialization[0] . '<br>';
            
            ?>
    <?php endforeach;?>

    <?php foreach($projects as $project):?>
            <?php  
            
                echo $project->name . '<br>';
                echo $project->tags[0] . '<br>';
                echo $project->author_name . '<br>';
                
            
            ?>
    <?php endforeach;?>
    
    <?php foreach($mentees as $mentee):?>
            <?php echo $mentee->name . '<br>' ?>
            <?php echo $mentee->image_url . '<br>' ?>
            <?php echo $mentee->user_bio . '<br>' ?>
            <?php echo $mentee->target_areas . '<br>' ?>
    <?php endforeach;?>
</body>
</html>