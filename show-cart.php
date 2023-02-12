<?php 

	include 'header.php';

	
 ?>

		<div class="container mt-5">
			<div class="row">
				

				<div class="col-lg-9">
					<table class="table">
						  <thead>
						    <tr>
						      <th scope="col">#</th>
						      <th scope="col">Name</th>
						      <th scope="col">iamge</th>
						      <th scope="col">quantity</th>
						      <th scope="col">price</th>
						      <th scope="col">totalprice</th>
						      <th></th>
						    </tr>
						  </thead>
						  <tbody>
						    <?php foreach ($cart as $key => $value): ?>
						    	 <tr>
								      <th scope="row">3</th>
								      <td><?php echo $value['name'] ?></td>
								      <td><img src="uploads/<?php echo $value['image'] ?>" alt="" width="50px"></td>
								      <td>
								      	<form action="cart.php" method="GET" >
								      		<input type="text" name="quantity" value="<?php echo $value['quantity'] ?>">
								      		<input type="hidden" name="id" value="<?php echo $value['id'] ?>">
								      		<input type="hidden" name="action" value="update">
								      		<button type="submit" class="btn btn-success">Update</button>
								      	</form>
								      	
								       </td>
								      <td><?php echo $value['price'] ?></td>
								      <td><?php echo $value['price'] *  $value['quantity']  ?></td>
								      <td><a href="cart.php?id=<?php echo $value['id'] ?>&action=delete" class="btn btn-danger">DELETE</a></td>
								     
							    </tr>
						    <?php endforeach ?>
						   
						  </tbody>
						</table>

						<a href="checkout.php" class="btn btn-success">Đặt hàng</a>
				</div>
			</div>
		</div>
<?php include 'footer.php' ?>