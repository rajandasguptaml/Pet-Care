<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
  
  padding-top:100px:
  padding-bottom:10px:
  
}

.card {
  padding-top:100px:
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.3);
  margin: 8px;
}
.card:hover{
  box-shadow: 0 10px 10px 0 rgba(255, 0, 0, 0.3);
  margin: 8px;
  
}

.dash-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
  
}

.container {
  padding:50px;
  border: 1px solid grey;
}

	

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
  
}

.a {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  text-decoration:none;
}

.a:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
.but{
	padding:5px 10px 5px 10px;
	background-color:black;
	color:#fff;
	class-decoration:none;
}
.but:hover{
	padding:5px 10px 5px 10px;
	background-color:grey;
	color:#000;
	class-decoration:none;
}

</style>


<div id="dash"></div>
<div class="dash-section">
  <h1>USER DASHBOARD</h1> 
</div>


<h2 style="text-align:center"></h2>

<div class="blogr">
  

  <div class="column">
    <div class="card">
      <div class="container">
        <h2>PRODUCT & PETS</h2>
        <p class="title"></p>
		<div class="name">
		
			<table> 
				<tr>
					<td> <h5>1.Freeze-Dried Mini Nibs For Cats</h5> </td>
					<td><p><a href=".\user\product\proadd.php" class="but">EDIT</a> </td></p>
					
				</tr> 
			
				<tr>
					<td> <h5>2.Omega-Gold Plus Salmon Oil</h5> </td>
					<td><p><a href=".\user\product\proadd.php" class="but">EDIT</a> </td></p>
					
				</tr> 
			
				<tr>
					<td> <h5>3.Omega-Gold Plus Salmon Oil</h5> </td>
					<td><p><a href=".\user\product\proadd.php" class="but">EDIT</a> </td></p>
					
				</tr> 
			
				<tr>
					<td> <h5>4.Freeze Dried Chicken Littles </h5> </td>
					<td><p><a href=".\user\product\proadd.php" class="but">EDIT</a> </td></p>
				
				</tr> 
			</table>
        
		</div>
        
        <p><a href=".\user\product\proadd.php" class="a"> ADD NEW</a></p>
      </div>
    </div>
  </div>
  
  
  <div class="column">
    <div class="card">
      <div class="container">
        <h2>BLOG & TIPS</h2>
        <p class="title"></p>
		<div class="name">
		
			<table> 
				<tr>
					<td> <h5>1.BLOG-1</h5> </td>
					<td><p><a href=".\user\blog\blogedit.php" class="but">EDIT</a> </td></p>
				
				</tr> 
			
				<tr>
					<td> <h5>2.BLOG-2</h5> </td>
					<td><p><a href=".\user\blog\blogedit.php" class="but">EDIT</a> </td></p>
			
				</tr> 
			
				<tr>
					<td> <h5>3.BLOG-3</h5> </td>
					<td><p><a href=".\user\blog\blogedit.php" class="but">EDIT</a> </td></p>
				
				</tr> 
			
				<tr>
					<td> <h5>4.BLOG-4 </h5> </td>
					<td><p><a href=".\user\blog\blogedit.php" class="but">EDIT</a> </td></p>
				
				</tr> 
			</table>
        
		</div>     
        <p><a href=".\user\blog\blognew.php" class="a">ADD NEW</a></p>
      </div>
    </div>
  </div>
  
  
  
  <div class="column">
    <div class="card">
      <div class="container">
        <h2>ADD TO CART</h2>
        <p class="title"></p>
		<div class="name">
		
			<table> 
				<tr>
					<td> <h5>1.PRODUCT-1</h5> </td>
					<td><p><a href=".\user\addtocart\addnew.php" class="but">EDIT</a> </td></p>
					<td><a class="but">DELETE</a> </td>
				</tr> 
			
				<tr>
					<td> <h5>2.PRODUCT-2</h5> </td>
					<td><p><a href=".\user\addtocart\addnew.php" class="but">EDIT</a> </td></p>
				<td><a class="but">DELETE</a> </td>
				</tr> 
			
				<tr>
					<td> <h5>3.PRODUCT-3</h5> </td>
					<td><p><a href=".\user\addtocart\addnew.php" class="but">EDIT</a> </td></p>
					<td><a class="but">DELETE</a> </td>
				</tr> 
			
				<tr>
					<td> <h5>4.PRODUCT-4 </h5> </td>
					<td><p><a href=".\user\addtocart\addnew.php" class="but">EDIT</a> </td></p>
					<td><a class="but">DELETE</a> </td>
				</tr> 
			</table>
        
		</div>     
        <p><a href=".\user\addtocart\addupdate.php" class="a">ADD NEW</a></p>
      </div>
    </div>
  </div>
  
  
  
  
  