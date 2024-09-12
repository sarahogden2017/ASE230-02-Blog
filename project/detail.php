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
<h2> By: <?=$blog_array[$i]['author']?> </h2>
<h3> By: <?=$blog_array[$i]['date']?> </h3>
<p> <?=$blog_array[$i]['content']?> </p>
</body>
</html>
