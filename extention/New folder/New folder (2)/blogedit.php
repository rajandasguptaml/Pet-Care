<?php

include "database.php";


$err_title = null;
$err_author = null;
$err_category = null;
$err_details = null;

if (isset($_POST['submit'])) {

    $title      = $_POST['b_title'];
    $category   = $_POST['b_category'];
    $details    = $_POST['details'];        //md5 for password encript.
    $author     = $_POST['author'];

    $error  = array();

    if (empty($title)) {
        $error['u'] = "Enter Blog Intro";
    } elseif (empty($author)) {
        $error['u'] = "Enter Your Name";
    } elseif (empty($category)) {
        $error['u'] = "Enter Blog Category";
    } elseif (empty($details)) {
        $error['u'] = "Tell Me About Blog";
    }

    if (count($error) == 0) {
        $insertsql = "INSERT INTO blog(title, category, blog_details, author)
        VALUES ('$title', '$category', '$details', '$author')";

        if ($connect->query($insertsql)) {
            $success = "Data Inserted Successfully";
        } else {
            die($connect->error);
        }
    }
}

if (isset($error['u'])) {
    $er = $error['u'];
    $show = "<h4 style='text-align:center; background-color: #F2DEDE; color: #a94442; border-color: #ebccd1; width: 50%; padding-block: 10px'>$er</h4>";
} else {
    $show = "";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
        }

        html {
            box-sizing: border-box;
        }

        *,
        *:before,
        *:after {
            box-sizing: inherit;
        }

        .column {
            float: left;
            width: 50%;
            margin-bottom: 16px;
            padding: 0 8px;
        }

        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            margin: 8px;
        }

        .signup-section {
            padding: 50px;
            text-align: center;
            background-color: #474e5d;
            color: white;

        }

        .container {
            padding: 0 16px;
        }

        .container::after,
        .row::after {
            content: "";
            clear: both;
            display: table;
        }

        .title {
            color: grey;
        }

        .button {
            border: none;
            outline: 0;
            display: inline-block;
            padding: 8px;
            color: white;
            background-color: #000;
            text-align: center;
            cursor: pointer;
            width: 100%;
        }

        .button:hover {
            background-color: #555;
        }

        ul {
            display: flex;
            flex-wrap: wrap;
            justify-content: end;
        }

        ul li {
            list-style: none;
            margin-right: 15px;
        }

        ul li a {
            text-decoration: none;
            color: #444;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: 500;
        }

        @media screen and (max-width: 650px) {
            .column {
                width: 100%;
                display: block;
            }
        }
    </style>
</head>

<body>
    <header>
        <nav>
            <ul>
                
            </ul>
        </nav>
    </header>
    <div id="signup"></div>
    <div class="signup-section">
        <h1>CREATE NEW BLOG </h1>
        <p></p>
        <p></p>
    </div>
    <h2 style="text-align:center"></h2>
    <div class="row">
        <div class="column">
            <div class="card">
                <div class="container">
                    <?php echo $show ?>
                    <form action="blogedit.php" method="post">
                        <table>
                            <tr>
                                <td><Span>Blog Intro</Span></td>
                                <td>: <input type="text" placeholder="Name" name="b_title">
                                    <span><?php echo $err_title; ?></span>
                                </td>
                            </tr>
                            <tr>
                                <td><span>Author</span></td>
                                <td>: <input type="text" placeholder="Username" name="author">
                                    <span><?php echo $err_author; ?></span>
                                </td>
                                </td>
                            </tr>

                            <tr>
                                <td>Catagory</td>
                                <td>:
                                    </select>
                                    <select name="b_category">
                                        <option>Catagory</option>

                                        <?php
                                        $month = array("Medical Health", "Pet & Pet Supplies", "Pet Medicine", "Other");
                                        foreach ($month as $v) {
                                            echo "<option>$v</option>";
                                        }
                                        ?>
                                    </select>

                                    <span> <?php echo $err_category; ?> </span>

                            </tr>

                            <tr>
                                <td><span>Blog Content </span></td>
                                <td>:<textarea name="details"></textarea>
                                    <span> <?php echo $err_details  ?> </span>
                                </td>
                            </tr>
                            <tr>
                                <td align="center" colspan="2"><input type="submit" name="submit" value="SUBMIT"></td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>