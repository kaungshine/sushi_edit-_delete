<?php
require 'header.php';
?>	
<main>
	<div class="container-fluid pt-4 pb-5">
		<div class="row">

			<!-- items -->
			<div class="col-md-7">
				<div class="shadow p-3">
					<ul class="nav nav-pills mb-3 nav-justified" id="pills-tab" role="tablist">
						<li class="nav-item" role="presentation">
							<a class="nav-link active text-danger" id="pills-sushi-tab" data-toggle="pill" href="#pills-sushi" role="tab" aria-controls="pills-sushi" aria-selected="true">Sushi</a>
						</li>
						<li class="nav-item" role="presentation">
							<a class="nav-link text-danger" id="pills-bentoboxes-tab" data-toggle="pill" href="#pills-bentoboxes" role="tab" aria-controls="pills-bentoboxes" aria-selected="false">Bento Boxes</a>
						</li>
						<li class="nav-item" role="presentation">
							<a class="nav-link text-danger" id="pills-ramen-tab" data-toggle="pill" href="#pills-ramen" role="tab" aria-controls="pills-ramen" aria-selected="false">Ramen</a>
						</li>
						<li class="nav-item" role="presentation">
							<a class="nav-link text-danger" id="pills-appetizers-tab" data-toggle="pill" href="#pills-appetizers" role="tab" aria-controls="pills-appetizers" aria-selected="false">Appetizers</a>
						</li>
						<li class="nav-item" role="presentation">
							<a class="nav-link text-danger" id="pills-rice-tab" data-toggle="pill" href="#pills-rice" role="tab" aria-controls="pills-rice" aria-selected="false">Rice</a>
						</li>
					</ul>
					<div class="tab-content" id="pills-tabContent">
						<!-- sushi -->
						<div class="tab-pane fade py-4 show active" id="pills-sushi" role="tabpanel" aria-labelledby="pills-sushi-tab">
							<div class="row">
								

								<!-- <div class="col-6 col-lg-4 mb-5">
									<div class="card">
										<span class="price badge badge-dark badge-pill">6400 Ks</span>
										<img src="img/2.jpg" class="card-img-top">
										<div class="card-body">
											<h5 class="card-title text-center mb-2">Sashimi</h5>
											<hr>
											<button class="btn btn-outline-danger btn-block btn-addtocart" data-id="2" data-name="Sashimi" data-price="6400">Add to Cart</button>
										</div>
									</div>
								</div>

								<div class="col-6 col-lg-4 mb-5">
									<div class="card">
										<span class="price badge badge-dark badge-pill">3200 Ks</span>
										<img src="img/3.png" class="card-img-top">
										<div class="card-body">
											<h5 class="card-title text-center mb-2">Uramaki</h5>
											<hr>
											<button class="btn btn-outline-danger btn-block btn-addtocart" data-id="3" data-name="Uramaki" data-price="3200">Add to Cart</button>
										</div>
									</div>
								</div>

								<div class="col-6 col-lg-4 mb-5">
									<div class="card">
										<span class="price badge badge-dark badge-pill">3600 Ks</span>
										<img src="img/4.jpg" class="card-img-top">
										<div class="card-body">
											<h5 class="card-title text-center mb-2">Sushi Roll</h5>
											<hr>
											<button class="btn btn-outline-danger btn-block btn-addtocart" data-id="4" data-name="Sushi Roll" data-price="3600">Add to Cart</button>
										</div>
									</div>
								</div>

								<div class="col-6 col-lg-4 mb-5">
									<div class="card">
										<span class="price badge badge-dark badge-pill">8500 Ks</span>
										<img src="img/5.jpg" class="card-img-top">
										<div class="card-body">
											<h5 class="card-title text-center mb-2">Sushi Set</h5>
											<hr>
											<button class="btn btn-outline-danger btn-block btn-addtocart" data-id="5" data-name="Sushi Set" data-price="8500">Add to Cart</button>
										</div>
									</div>
								</div>

								<div class="col-6 col-lg-4 mb-5">
									<div class="card">
										<span class="price badge badge-dark badge-pill">3200 Ks</span>
										<img src="img/6.jpg" class="card-img-top">
										<div class="card-body">
											<h5 class="card-title text-center mb-2">Tamago Roll</h5>
											<hr>
											<button class="btn btn-outline-danger btn-block btn-addtocart" data-id="6" data-name="Tamago Roll" data-price="3200">Add to Cart</button>
										</div>
									</div>
								</div> -->

							</div>
						</div>

						<!-- bento boxes -->
						<div class="tab-pane fade py-4" id="pills-bentoboxes" role="tabpanel" aria-labelledby="pills-bentoboxes-tab">
							<div class="row">

								<!-- <div class="col-6 col-lg-4 mb-5">
									<div class="card">
										<span class="price badge badge-dark badge-pill">2500 Ks</span>
										<img src="img/bento1.jpg" class="card-img-top">
										<div class="card-body">
											<h6 class="card-title text-center mb-2">Standard Lunch Box</h6>
											<hr>
											<button class="btn btn-outline-danger btn-block btn-addtocart" data-id="7" data-name="Standard Lunch Box" data-price="2500">Add to Cart</button>
										</div>
									</div>
								</div>

								<div class="col-6 col-lg-4 mb-5">
									<div class="card">
										<span class="price badge badge-dark badge-pill">5000 Ks</span>
										<img src="img/bento2.jpg" class="card-img-top">
										<div class="card-body">
											<h6 class="card-title text-center mb-2">Salmon Noodles</h6>
											<hr>
											<button class="btn btn-outline-danger btn-block btn-addtocart" data-id="8" data-name="Salmon Noodles" data-price="5000">Add to Cart</button>
										</div>
									</div>
								</div>

								<div class="col-6 col-lg-4 mb-5">
									<div class="card">
										<span class="price badge badge-dark badge-pill">7500 Ks</span>
										<img src="img/bento3.jpg" class="card-img-top">
										<div class="card-body">
											<h6 class="card-title text-center mb-2">Salmon Special</h6>
											<hr>
											<button class="btn btn-outline-danger btn-block btn-addtocart" data-id="9" data-name="Salmon Special" data-price="7500">Add to Cart</button>
										</div>
									</div>
								</div>

								<div class="col-6 col-lg-4 mb-5">
									<div class="card">
										<span class="price badge badge-dark badge-pill">6000 Ks</span>
										<img src="img/bento4.jpg" class="card-img-top">
										<div class="card-body">
											<h6 class="card-title text-center mb-2">Boat Sushi</h6>
											<hr>
											<button class="btn btn-outline-danger btn-block btn-addtocart" data-id="10" data-name="Boat Sushi" data-price="6000">Add to Cart</button>
										</div>
									</div>
								</div> -->

							</div>	
						</div>

						<!-- ramen -->
						<div class="tab-pane fade py-4" id="pills-ramen" role="tabpanel" aria-labelledby="pills-ramen-tab">
							<div class="row">

								<!-- <div class="col-6 col-lg-4 mb-5">
									<div class="card">
										<span class="price badge badge-dark badge-pill">2500 Ks</span>
										<img src="img/ramen1.jpg" class="card-img-top">
										<div class="card-body">
											<h6 class="card-title text-center mb-2">Plain Ramen</h6>
											<hr>
											<button class="btn btn-outline-danger btn-block btn-addtocart" data-id="11" data-name="Plain Ramen" data-price="2500">Add to Cart</button>
										</div>
									</div>
								</div>

								<div class="col-6 col-lg-4 mb-5">
									<div class="card">
										<span class="price badge badge-dark badge-pill">3000 Ks</span>
										<img src="img/ramen2.jpg" class="card-img-top">
										<div class="card-body">
											<h6 class="card-title text-center mb-2">Egg & Meat</h6>
											<hr>
											<button class="btn btn-outline-danger btn-block btn-addtocart" data-id="12" data-name="Egg & Meat" data-price="3000">Add to Cart</button>
										</div>
									</div>
								</div>

								<div class="col-6 col-lg-4 mb-5">
									<div class="card">
										<span class="price badge badge-dark badge-pill">4500 Ks</span>
										<img src="img/ramen3.jpg" class="card-img-top">
										<div class="card-body">
											<h6 class="card-title text-center mb-2">Soba Noodles</h6>
											<hr>
											<button class="btn btn-outline-danger btn-block btn-addtocart" data-id="13" data-name="Soba Noodles" data-price="4500">Add to Cart</button>
										</div>
									</div>
								</div>

								<div class="col-6 col-lg-4 mb-5">
									<div class="card">
										<span class="price badge badge-dark badge-pill">4000 Ks</span>
										<img src="img/ramen4.jpg" class="card-img-top">
										<div class="card-body">
											<h6 class="card-title text-center mb-2">Spicy Noodles</h6>
											<hr>
											<button class="btn btn-outline-danger btn-block btn-addtocart" data-id="14" data-name="Spicy Noodles" data-price="4000">Add to Cart</button>
										</div>
									</div>
								</div>

								<div class="col-6 col-lg-4 mb-5">
									<div class="card">
										<span class="price badge badge-dark badge-pill">4000 Ks</span>
										<img src="img/ramen5.jpg" class="card-img-top">
										<div class="card-body">
											<h6 class="card-title text-center mb-2">Udon Noodles</h6>
											<hr>
											<button class="btn btn-outline-danger btn-block btn-addtocart" data-id="15" data-name="Udon Noodles" data-price="4000">Add to Cart</button>
										</div>
									</div>
								</div> -->

							</div>
						</div>

						<!-- appetizers -->
						<div class="tab-pane fade py-4" id="pills-appetizers" role="tabpanel" aria-labelledby="pills-appetizers-tab">
							<div class="row">

								<!-- <div class="col-6 col-lg-4 mb-5">
									<div class="card">
										<span class="price badge badge-dark badge-pill">2000 Ks</span>
										<img src="img/a1.jpg" class="card-img-top">
										<div class="card-body">
											<h6 class="card-title text-center mb-2">Gyoza</h6>
											<hr>
											<button class="btn btn-outline-danger btn-block btn-addtocart" data-id="16" data-name="Gyoza" data-price="2000">Add to Cart</button>
										</div>
									</div>
								</div>

								<div class="col-6 col-lg-4 mb-5">
									<div class="card">
										<span class="price badge badge-dark badge-pill">1500 Ks</span>
										<img src="img/a2.jpg" class="card-img-top">
										<div class="card-body">
											<h6 class="card-title text-center mb-2">Fried Sweet Potato</h6>
											<hr>
											<button class="btn btn-outline-danger btn-block btn-addtocart" data-id="17" data-name="Fried Sweet Potato" data-price="1500">Add to Cart</button>
										</div>
									</div>
								</div>

								<div class="col-6 col-lg-4 mb-5">
									<div class="card">
										<span class="price badge badge-dark badge-pill">2500 Ks</span>
										<img src="img/a3.jpg" class="card-img-top">
										<div class="card-body">
											<h6 class="card-title text-center mb-2">Tempura</h6>
											<hr>
											<button class="btn btn-outline-danger btn-block btn-addtocart" data-id="18" data-name="Tempura" data-price="2500">Add to Cart</button>
										</div>
									</div>
								</div>

								<div class="col-6 col-lg-4 mb-5">
									<div class="card">
										<span class="price badge badge-dark badge-pill">2000 Ks</span>
										<img src="img/a4.jpg" class="card-img-top">
										<div class="card-body">
											<h6 class="card-title text-center mb-2">Tofu</h6>
											<hr>
											<button class="btn btn-outline-danger btn-block btn-addtocart" data-id="19" data-name="Tofu" data-price="2000">Add to Cart</button>
										</div>
									</div>
								</div> -->

							</div>
						</div>

						<!-- rice -->
						<div class="tab-pane fade py-4" id="pills-rice" role="tabpanel" aria-labelledby="pills-rice-tab">
							<div class="row">

								<!-- <div class="col-6 col-lg-4 mb-5">
									<div class="card">
										<span class="price badge badge-dark badge-pill">1000 Ks</span>
										<img src="img/rice1.jpg" class="card-img-top">
										<div class="card-body">
											<h6 class="card-title text-center mb-2">Rice and Sesame</h6>
											<hr>
											<button class="btn btn-outline-danger btn-block btn-addtocart" data-id="20" data-name="Rice and Sesame" data-price="1000">Add to Cart</button>
										</div>
									</div>
								</div>

								<div class="col-6 col-lg-4 mb-5">
									<div class="card">
										<span class="price badge badge-dark badge-pill">2000 Ks</span>
										<img src="img/rice2.jpg" class="card-img-top">
										<div class="card-body">
											<h6 class="card-title text-center mb-2">Fried Sticky Rice</h6>
											<hr>
											<button class="btn btn-outline-danger btn-block btn-addtocart" data-id="21" data-name="Fried Sticky Rice" data-price="2000">Add to Cart</button>
										</div>
									</div>
								</div>

								<div class="col-6 col-lg-4 mb-5">
									<div class="card">
										<span class="price badge badge-dark badge-pill">3000 Ks</span>
										<img src="img/rice3.jpg" class="card-img-top">
										<div class="card-body">
											<h6 class="card-title text-center mb-2">Miso and All</h6>
											<hr>
											<button class="btn btn-outline-danger btn-block btn-addtocart" data-id="22" data-name="Miso and All" data-price="3000">Add to Cart</button>
										</div>
									</div>
								</div> -->

							</div>
						</div>

					</div>
				</div>
			</div>

			<!-- payment -->
			<div class="col-md-5" id="div-voucher" style="display: none;">
				<div class="shadow p-3">
					<h5 class="text-center mb-3">Payment</h5>

					<!-- table -->
					<form>
						<div class="table-responsive">
							<table class="table table-bordered">
								<thead>
									<tr class="thead-light">
										<th>Name</th>
										<th>Qty</th>
										<th>Price</th>
										<th>Remove</th>
									</tr>
								</thead>
								<tbody id="payment">
										<!-- 
										<tr>
											<td>Grand Total</td>
											<td colspan="3">1600 Ks</td>
										</tr>
										<tr>
											<td>Paid</td>
											<td colspan="3">
												<input type="number" name="paid" class="form-control" placeholder="Paid Money">
											</td>
										</tr>
										<tr>
											<td>Charges</td>
											<td colspan="3">
												<input type="number" name="charges" class="form-control" placeholder="Charges Money" readonly>
											</td>
										</tr> -->
									</tbody>
									<tfoot></tfoot>
								</table>
							</div>
						</form>
					</div>
				</div>

			</div> <!-- row ends -->
		</div>
	</main>

	<div class="container mt-3" id="new_form">
		<h1 class="text-center">Add New Menu</h1>
		<form class="mt-5" method="POST" action="menu.php" enctype="multipart/form-data">
			<div class="form-group row">
				<label for="photo" class="col-sm-2 col-form-label">Photo</label>
				<div class="col-sm-10">
					<input type="file" id="photo" name="sushi_photo">
				</div>
			</div>
			<div class="form-group row">
				<label for="name" class="col-sm-2 col-form-label">Name</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="name" placeholder="Enter Name" name="sushi_name">
				</div>
			</div>
			<div class="form-group row">
				<label for="address" class="col-sm-2 col-form-label">Price</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="price" name="sushi_price">
				</div>
			</div>
			<div class="form-group row">
				<div class="col-sm-10">
					<button type="submit" class="btn btn-primary">SAVE</button>
				</div>
			</div>
		</form>
	</div>

	<div class="container mt-3" id="edit_form" style="display: none;">
		<h1 class="text-center">Edit Sushi Menu</h1>
		<form action="updatemenu.php" method="POST" enctype="multipart/form-data">
			<input type="hidden" name="edit_id" id="edit_id">
			<input type="hidden" name="edit_oldphoto" id="edit_oldphoto">
			<div class="row">
				<div class="col-sm-2">
					<label for="profile" class="col-form-label">Photo</label>
				</div>
				<div class="col-sm-10">
					<nav>
						<div class="nav nav-tabs" id="nav-tab" role="tablist">
							<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Old Photo</a>
							<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">New Photo</a>
						</div>
					</nav>
					<div class="tab-content" id="nav-tabContent">
						<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
							<img src="" id="edit_photo" style="width: 100px;" class="my-3">
						</div>
						<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
							<input type="file" id="profile" name="edit_newphoto" class="my-3">
						</div>
					</div>
				</div>
			</div>
			<div class="form-group row">
				<label for="name" class="col-sm-2 col-form-label">Name</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="edit_name" name="edit_name">
				</div>
			</div>
			<div class="form-group row">
				<label for="price" class="col-sm-2 col-form-label">Price</label>
				<div class="col-sm-10">
					<input type="number" class="form-control" id="edit_price" name="edit_price">
				</div>
			</div>
			<div class="form-group row py-3">
				<div class="col-sm-10">
					<button type="submit" class="btn btn-primary">Update</button>
				</div>
			</div>
		</form>
	</div>

	<div class="container">
		<table class="table">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Name</th>
					<th scope="col">Price</th>
				</tr>
			</thead>
			<tbody id="edit_table">

			</tbody>
		</table>
	</div>

	<?php
	require 'footer.php';
	?>
