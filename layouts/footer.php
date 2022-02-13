<footer style="background-color: #81d742 !important;">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<h4>GIỚI THIỆU</h4>
				<ul>
					<li>HTT shop xin chào</li>
					<li><i class="bi bi-mailbox2"></i>hothithuytien14122000@gmail.com</li>
					<li><i class="bi bi-telephone-fill"></i> 0337705797</li>
					<li><i class="bi bi-map-fill"></i>Phú Lương - Phú Vang - Thừa Thiên Huế</li>
					<li>Nhà phân phối độc quyền các thương hiệu đồng hồ, kính mắt, bút ký nổi tiếng thế giới: Epos Swiss, Atlantic Swiss, Diamond D, Philippe Auguste, Jacques Lemans, Citizen, Aries Gold, dây da đồng hồ, dây đồng hồ đeo tay.</li>
				</ul>
			</div>
			<div class="col-md-4">
				<h4>SẢN PHẨM MỚI NHẤT</h4>
				<ul>
					<li>HTT shop xin chào</li>
					<li>Email: hothithuytien14122000@gmail.com</li>
					<li>Phone: 0337705797</li>
					<li>Nhà phân phối độc quyền các thương hiệu đồng hồ, kính mắt, bút ký nổi tiếng thế giới: Epos Swiss, Atlantic Swiss, Diamond D, Philippe Auguste, Jacques Lemans, Citizen, Aries Gold, dây da đồng hồ, dây đồng hồ đeo tay.</li>
				</ul>
			</div>
			<div class="col-md-4">
				<h4>TIN TỨC MỚI NHẤT</h4>
				<ul>
					<li>HTT shop xin chào</li>
					<li>hothithuytien14122000@gmail.com</li>
					<li>Phone: 0337705797</li>
					<li>Nhà phân phối độc quyền các thương hiệu đồng hồ, kính mắt, bút ký nổi tiếng thế giới: Epos Swiss, Atlantic Swiss, Diamond D, Philippe Auguste, Jacques Lemans, Citizen, Aries Gold, dây da đồng hồ, dây đồng hồ đeo tay.</li>
				</ul>
			</div>
		</div>
	</div>
	<div style="background-color: #3f9609; width: 100%; text-align: center; padding: 20px;">
	Copyright © 2008-2020 HTTSHOP Watch.
	</div>
</footer>

<?php
if(!isset($_SESSION['cart'])) {
	$_SESSION['cart'] = [];
}
$count = 0;
// var_dump($_SESSION['cart']);
foreach($_SESSION['cart'] as $item) {
	$count += $item['num'];
}
?>
<script type="text/javascript">
	function addCart(productId, num) {
		$.post('api/ajax_request.php', {
			'action': 'cart',
			'id': productId,
			'num': num
		}, function(data) {
			location.reload()
		})
	}
</script>
<!-- Cart start -->
<span class="cart_icon">
	<span class="cart_count"><?=$count?></span>
	<a href="cart.php"><img src="https://cdn-icons-png.flaticon.com/512/3737/3737173.png"></a>
</span>
<!-- Cart stop -->
</body>
</html>