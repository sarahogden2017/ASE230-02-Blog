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
    ],
    [
        'title'=>'Top 3 Video Games of 2024',
	'content'=>'Here are the top 3 video games of 2024:<br>
	<b>Astro Bot</b><br>
	This game puts you in the body of a robot named Astro and has you explore a variety of planets to rescue Astro\'s lost robot friends. A creative game with amazing graphics! Astro Bot introduces new gameplay ideas and makes hundreds of references and homages to many other video games.<br>
	<b>Star Wars Outlaws</b><br>
	In this game, you play as Kay Vess, oung scoundrel with a price on her head looking for a big score. This gorgeous game relies on a combination of stealthy sneaking and blaster combat.<br>
	<b>Price of Persia The Lost Crown</b><br>
	This game is a reboot, but pulls from some of the best side-scrolling video games. You are put in the role of Sargon, an Immortal tasked with rescuing a prince. The controls are very intuitive and responds instantly.<br>',
	'author'=>'Kayla Saunders',
	'date'=>'09/12/2024',
    ],
]
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?=$blog_array[$i]['title']?></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>

    <body>
        <h1> <?=$blog_array[$i]['title']?> </h1>
        <h2> By: <?=$blog_array[$i]['author']?> </h2>
        <h3> Published: <?=$blog_array[$i]['date']?> </h3>
        <p> <?=$blog_array[$i]['content']?> </p>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>
