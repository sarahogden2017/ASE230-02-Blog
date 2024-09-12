<!-- TO DO -->
<!-- Create an array to hold blog posts -->
<!-- Display only the blog selected from index -->
<!-- Use Bootstrap to make it look nice -->

<?php
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
  <?php for($i=0;$i<count($blog_array);$i++) { ?>
  <h2><?=$blog_array[$i]['title']></h2>
  <p><a href="detail.php?index=<?= $i ?>">Go to blog</a></p>
   <? } ?>
</body>
</html>
