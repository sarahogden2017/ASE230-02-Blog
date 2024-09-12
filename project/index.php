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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blob Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>


<body>
  <h1 class="text-center">Blog Index</h1>
  <?php for($i=0;$i<count($blog_array);$i++) { ?>
    <div class="container border py-3 my-3">
      <h2><?=$blog_array[$i]['title'] ?></h2>
      <p><a href="detail.php?index=<?= $i ?>" class="btn btn-info" role="button">Go to blog</a></p>
    </div>
  <?php } ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
