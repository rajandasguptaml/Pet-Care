<?php

include "database.php";


$err_title = null;
$err_author = null;
$err_category = null;
$err_details = null;

if (isset($_POST['submit'])) {

    $update_id  = $_POST['update_id'];
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
        $insertsql = "UPDATE blog set id = $update_id, title = '$title', category = '$category', blog_details = '$details', author = '$author' ";

        echo "<script>alert('Updated Successfully')</script>";

        if ($connect->query($insertsql)) {
            header("location:./blog-post.php");
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

//select data using edit id
if (isset($_GET['id'])) {

    // echo $_GET['id'];

    $update_id = $_GET['id'];

    $s_data = "SELECT id, title, category, blog_details, author FROM blog WHERE id = $update_id";

    $s_result = $connect->query($s_data);

    if ($s_result->num_rows > 0) {

        while ($s_single_data = $s_result->fetch_assoc()) {

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
                            <li><a href="blogedit.php">Home</a></li>
                            <li><a href="blogedit.php">Create Blog</a></li>
                            <li><a href="blog-post.php">Blog Post</a></li>
                        </ul>
                    </nav>
                </header>
                <div id="signup"></div>
                <div class="signup-section">
                    <h1>Update BLOG POST</h1>
                    <p></p>
                    <p></p>
                </div>
                <h2 style="text-align:center"></h2>
                <div class="row">
                    <div class="column">
                        <div class="card">
                            <div class="container">
                                <?php echo $show ?>
                                <form action="edit.php" method="post">
                                    <table>
                                        <input type="hidden" class="form-control update_id" id="update_id" name="update_id" value="<?php echo $s_single_data['id']; ?>" required>
                                        <tr>
                                            <td><Span>Blog Intro</Span></td>
                                            <td>: <input type="text" placeholder="Name" name="b_title" value="<?php echo $s_single_data['title']; ?>">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><span>Author</span></td>
                                            <td>: <input type="text" placeholder="Username" name="author" value="<?php echo $s_single_data['author']; ?>">
                                            </td>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Catagory</td>
                                            <td>:
                                                <select name="b_category" value="<?php echo $s_single_data['author'] ?>">
                                                    <!-- <option>Catagory</option> -->

                                                    <?php
                                                    $month = array("Medical Health", "Pet & Pet Supplies", "Pet Medicine", "Other");
                                                    foreach ($month as $v) {
                                                        echo "<option>$v</option>";
                                                    }
                                                    ?>
                                                </select>
                                        </tr>

                                        <tr>
                                            <td><span>Blog Content </span></td>
                                            <td>:<input name="details" value="<?php echo $s_single_data['blog_details']; ?>">
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

<?php
        }
    }
}
?>