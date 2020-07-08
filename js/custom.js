$(document).ready(function(){

	$('.btn-plus').click(function(){
		num = $('.number').val();
		$('.number').val(++num);
	})

	$('.btn-minus').click(function(){
		num = $('.number').val();
		if (num >= 1) {
			$('.number').val(--num);
		}
	});

	getMenulist();

	$('#edit_table').on('click','.edit', function(){
		var id = $(this).data('id');

		$.get('menulist.json', function(response){
			var menuObjArray = JSON.parse(response);
			var name = menuObjArray[id].sushi_name;
			var price = menuObjArray[id].sushi_price;
			var photo = menuObjArray[id].sushi_photo;

			$('#edit_name').val(name);
			$('#edit_price').val(price);

			$('#edit_photo').attr('src',photo);

			$('#edit_id').val(id);
			$('#edit_oldphoto').val(photo);
		})


		$('#new_form').hide();
		$('#edit_form').show();
	})
	function getMenulist(){
		$.get('menulist.json', function (response) {
			if(response){
				console.log(typeof(response));

				var menuObjArray = JSON.parse(response);
				var html = ''; var j = 1;

				$.each(menuObjArray,function(i,v){
					html += `<tr>
					<td>${j++}</td>
					<td>${v.sushi_name}</td>
					<td>${v.sushi_price}</td>
					<td>
					<button class="btn btn-outline-info"><i class="fas fa-info-circle"></i></button>
					<button class="btn btn-outline-warning edit" data-id="${i}"><i class="fas fa-edit"></i></button>
					<button class="btn btn-outline-danger delete" data-id="${i}"><i class="fas fa-trash"></i></button>
					</td>
					</tr>`
				})
				$('#edit_table').html(html);

			}
		})
	}
	$('#edit_table').on('click','.delete', function(){
		var id = $(this).data('id');

		var ans = confirm('Are You Sure want to delete');
		console.log('Clicked');
		if(ans){
			$.post(
				'deletemenu.php', {id:id},function(data){
					getMenulist();
			}).done(function(){
				//Code Here

				let menuString = localStorage.getItem('menulist');
				let menuArray = JSON.parse(menuString);

				$.each(menuArray, function(i, v) {
					if (i == id) {
						menuArray.splice(i, 1);
					}
				});

				let menuData = JSON.stringify(menuArray);
				localStorage.setItem('menulist', menuData);

				showTable();
			})
		}
	})
	// if localstorage exists, table will show, its div is given id
	function showTable() {
		let menuString = localStorage.getItem('menulist');
		if (menuString) {

			$('#div-voucher').show();
			
			// ** show in html 
			let menuArray = JSON.parse(menuString);
			if (menuArray != 0) {	

				let total = 0;
				let tbodyData = '', tfootData = '';
				
				// looping 
				$.each(menuArray, function(i, v) {
					let name = v.name;
					let price = v.price;
					let qty = v.qty;
					let subtotal = price * qty;

					total += subtotal;

					// in plus and minus button data-id is set with array index
					tbodyData += `<tr>
													<td>${name}<br><em class="text-muted font-weight-light">${price} Ks</em></td>
													<td>
														<button type="button" class="btn-minus btn btn-sm btn-secondary" data-id="${i}">&#45;</button>
														<span class="mx-2">${qty}</span>
														<button type="button" class="btn-plus btn btn-sm btn-secondary" data-id="${i}">&#43;</button>
													</td>
													<td>${subtotal} Ks</td>
													<td align="center">
														<button type="button" class="btn btn-danger btn-sm btn-remove" data-id="${i}">&times;</button>
													</td>
												<tr>`;

				});	// looping end
				
				tfootData += `<tr>
												<td colspan="4">
													<button type="button" class="btn btn-light btn-block" id="btn-checkout">Check Out</button>
												</td>
											</tr>`;

				$('#payment').html(tbodyData);
				$('tfoot').html(tfootData);

			} else { 

				// although array is existed and value is empty
				$('#div-voucher').hide();
			
			}

		} else {
			$('#div-voucher').hide();
		}
	}
	initial();
	function initial(argument) {
		$.get('menulist.json', function(response){
			if(response){
				// obj
				var sushiObjArray = JSON.parse(response);
				var html = '';
				console.log(sushiObjArray);
				$.each(sushiObjArray, function(i, v){
					html+=getCards(i, v);
					$('div#pills-sushi div.row').html(html);
				});
			}});
	};
	function getCards(i, v){
		html = `
		<div class="col-6 col-lg-4 mb-5">
		<div class="card">
		<span class="price badge badge-dark badge-pill">${v.sushi_price} Ks</span>
		<img src="${v.sushi_photo}" class="card-img-top">
		<div class="card-body">
		<h5 class="card-title text-center mb-2">${v.sushi_name}</h5>
		<hr>
		<button class="btn btn-outline-danger btn-block btn-addtocart" data-id="${i}" data-name="${v.sushi_name}" 
		data-price=${v.sushi_price}>Add to Cart</button>
		</div>
		</div>
		</div>
		`;
		return html;
	}
});