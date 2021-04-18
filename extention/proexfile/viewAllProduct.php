<?php include '../include/header.php';?>

<?php require_once '../controllers/addProductController.php';
 
    $products= getAllProduct();
  
    ?>

<div>
	<h3 class="text">All Product Details</h3>
	<table>
		<thead>
			<th>ID</th>
			<th> Category </th>
			<th>Product</th>
			<th>Price</th>
			<th>Discount</th>
			
		</thead>
		<tbody>
			<?php
				foreach($products as $product){
					
					echo "<tr>";
						echo "<td>".$product["id"]."</td>";
						echo "<td>".$product["category"]."</td>";
                        echo "<td>".$product["product"]."</td>";
                        echo "<td>".$product["price"]."</td>";
                        echo "<td>".$product["discount"]."</td>";
						echo '<td><a href="updateDeleteProduct.php?id='.$product["id"].'" class="btn">Update/Delete</a></td>';
						
					echo "</tr>";
				}
			?>

			
		</tbody>
	</table>
</div>

