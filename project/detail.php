<!-- TO DO -->
<!-- Create an array to hold blog posts -->
<!-- Display only the blog selected from index -->
<!-- Use Bootstrap to make it look nice -->

<?php

$i=$_GET['index'];

$blog_array= [
  [ // for each blog provide the following
    'title'=>'The best comfort foods',
    'content'=>'blah blah blah',
    'author'=>'Milo Adams',
    'date'=>'09/12/2024',
  ]
]
?>

<!DOCTYPE html>
<html lang="en"> 
<head>
  
</head>
<body>
<h1> <?=$blog_array[$i]['title']?> </h1>
<h2> <?=$blog_array[$i]['author']?> </h2>
  
</body>
</html>
