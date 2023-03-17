<?php 

$paragraph = $_GET['paragraph'];
$bad_word = $_GET['badword'];

$censored = str_replace($bad_word, '***', $paragraph)

?>


<p> <?php echo $paragraph ?> </p>
<p> <?php echo $bad_word ?> </p>
<p> <?php echo $censored.' '.strlen($censored) ?> </p>
