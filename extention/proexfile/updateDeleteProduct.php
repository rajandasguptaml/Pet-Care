<?php include '../include/header.php';?>
<?php require_once '../controllers/udProductController.php';




?>


<div class="ProductAddContainer">
            <fieldset>
                <form action="" method="post">
                    <table class="productTable">
                    <tr>
                        <td>
                            <span>Category</span>
                        </td>
                        <td>
                            <input type="text" placeholder="Category Name" name="newCategory"> 
                            <span> <?php echo $err_newCategory; ?></span>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <span>Product</span>
                        </td>
                        <td>
                            <input type="text" placeholder="New Product Name" name="newProduct"> 
                            <span> <?php echo $err_newProduct; ?></span>
                        </td>
                    </tr>

                        <tr>
						    <td>
                                <span>Price</span>
                            </td>
                            <td>
                                <input type="text" placeholder="Enter Price" name="price">
                                <span><?php echo $err_price; ?></span>
                            </td>
				        </tr>

                        <tr>
						    <td>
                                <span>Discount</span>
                            </td>
                            <td>
                                <select name="discount">
                                    <option value="">Choose</option>
                                    
                                    <?php
                                        for($i=0;$i<=100;$i++){
                                            echo "<option>{$i}</option>";	
                                        }
                                    ?>
                                </select>
                                <span> <?php echo $err_discount; ?></span>
                            </td>
				        </tr>

                        <tr>
						    <td align="center">
                                <input type="submit" name="update" value="Update">
                            </td>
                            <td align="center">
                                <input type="submit" name="delete" value="Delete">
                            </td>
				        </tr>

                    </table>
                </form>
            </fieldset>
        </div>