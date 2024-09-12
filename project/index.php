<!-- TO DO -->
<!-- Create an array to hold blog posts -->
<!-- Display only the blog selected from index -->
<!-- Use Bootstrap to make it look nice -->

<?php
$blog_array= [
    [ // for each blog provide the following
        'title'=>'The best comfort foods',
        'content'=> "There's nothing quite like a comforting meal to soothe the soul. 
        Whether you're feeling down, celebrating a victory, or simply craving something familiar, comfort foods have a unique ability to make us feel at home.<br> 
        Here are some of the most beloved comfort foods that never fail to hit the spot:<br>
        Mac and Cheese:<br>
        Creamy, cheesy, and oh-so-satisfying, mac and cheese is a classic comfort food that's loved by people of all ages.<br>
        Soup: <br>
        A warm bowl of soup is the perfect way to warm up on a chilly day. Whether it's chicken noodle, tomato, or chili, there's a soup for every taste.<br>
        Pizza: <br>
        A cheesy, saucy slice of pizza is always a crowd-pleaser. <br><br>
        What are your favorite comfort foods? Share your thoughts in the comments below!",
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
      <h2><?=$blog_array[$i]['title'] ?></h2>
      <p><a href="detail.php?index=<?= $i ?>">Go to blog</a></p>
    <?php } ?>
</body>
</html>
