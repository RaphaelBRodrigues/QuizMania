<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<?php


$databaseHost = 'sql111.epizy.com';
$databaseName = 'epiz_24555346_QuizMania';
$databaseUsername = 'epiz_24555346';
$databasePassword = '5gn6fStTC5wGi';
/*
$databaseHost = '127.0.0.1';
$databaseName = 'quizmania';
$databaseUsername = 'quizmania';
$databasePassword = 'quizmania';*/
$mysqli = mysqli_connect($databaseHost,
$databaseUsername,$databasePassword,$databaseName);
mysqli_query($mysqli,"SET NAMES 'utf8'");
mysqli_query($mysqli,'SET character_set_connection=utf8');
mysqli_query($mysqli,'SET character_set_client=utf8');
mysqli_query($mysqli,'SET character_set_results=utf8');
 ?>
