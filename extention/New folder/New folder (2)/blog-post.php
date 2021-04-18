<?php

include "database.php";

$selectsql = "SELECT * FROM blog";
$read = $connect->query($selectsql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Document</title>

    <style>
        ul{
            display: flex;
            flex-wrap: wrap;
            justify-content: end;
        }

        ul li{
            list-style: none;
            margin-right: 15px;
        }

        ul li a{
            text-decoration: none;
            color: #444;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: 500;
        }
    </style>
</head>

<body>

    <header class="py-3 bg-light">
        <nav>
            <ul class="text-center">
                <li><a href="blogedit.php">Home</a></li>
                <li><a href="blogedit.php">Create Blog</a></li>
                <li><a href="blog-post.php">Blog Post</a></li>
            </ul>
        </nav>
    </header>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <table class="table table-striped">
                    <tr>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Category</th>
                        <th>Details</th>
                        <th>Action</th>
                    </tr>
                    <?php
                    if ($read->num_rows > 0) {
                    ?>
                        <?php while ($read_single = $read->fetch_assoc()) { ?>
                            <tr>
                                <td><?php echo $read_single['title'] ?></td>
                                <td><?php echo $read_single['author'] ?></td>
                                <td><?php echo $read_single['category'] ?></td>
                                <td><?php echo $read_single['blog_details'] ?></td>
                                <td>
                                    <a href="edit.php?id=<?php echo $read_single['id'] ?>">Update</a>
                                </td>
                            </tr>
                        <?php } ?>
                    <?php } else { ?>
                        <tr>
                            <td colspan="4">No data found</td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>

</html>