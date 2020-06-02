<!DOCTYPE html>
<html>
<?php 
	include 'includes/head.php';
 ?>
<body style="background-color: #ebebeb">
	<?php 
		include 'includes/header.php';
	 ?>
	
	<!-- <div>
		<img src="resourse/image/messi.jpg" alt="" style=" margin: 0 auto;" class="mx-auto d-block">
	</div> -->
	<main class="container">
		<div class="block-left">
			<div class="container">
				<!-- <div class="row">
				<div class="col-9">	 -->
					<div class="search-container" style="background-color: white;">
						<div class="search-tab">
							<div class="btn-group" style="margin-bottom: 10px; padding-top: 10px;">
								<button type="button" class="btn btn-primary">Tất cả xe</button>
					    		<button type="button" class="btn btn-primary">Xe cũ</button>
					    		<button type="button" class="btn btn-primary">Xe mới</button>
							</div>
						</div>
						<div class="search-form-body">
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<select name="cars" class="form-control custom-select-sm	">
										    <option selected>Hãng xe</option>
										    <option value="volvo">Volvo</option>
										    <option value="fiat">Fiat</option>
										    <option value="audi">Audi</option>
										</select>	
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<select name="cars" class="form-control custom-select-sm">
										    <option selected>Moel</option>
										    <option value="volvo">Volvo</option>
										    <option value="fiat">Fiat</option>
										    <option value="audi">Audi</option>
										</select>	
									</div>
								</div>
								<div class="col-md-2">
									<div class="form-group">
										<select name="cars" class="form-control custom-select-sm">
										    <option selected>Người bán</option>
										    <option value="volvo">Volvo</option>
										    <option value="fiat">Fiat</option>
										    <option value="audi">Audi</option>
										</select>	
									</div>
								</div>
								<div class="col-md-2">
									<div class="form-group">
										<select name="cars" class="custom-select-sm form-control">
										    <option selected>Tỉnh thành</option>
										    <option value="volvo">Volvo</option>
										    <option value="fiat">Fiat</option>
										    <option value="audi">Audi</option>
										</select>	
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
									<div class="input-group">
										<input class="form-control" type="text" name="" value="" placeholder="Từ giá">
										<input class="form-control" type="text" name="" value="" placeholder="Đến giá">	
									</div>	
									</div>
								</div>	
								
								<div class="col-md-4">
									<div class="form-group">
									<div class="input-group">
										<input class="form-control" type="text" name="" value="" placeholder="Từ Năm">
										<input class="form-control" type="text" name="" value="" placeholder="Đến Năm">	
									</div>	
									</div>
								</div>	
								<div class="col-md-4">
									<div class="form-group">
									<div class="input-group">
										<input class="form-control" type="text" name="" value="" placeholder="Từ Km">
										<input class="form-control" type="text" name="" value="" placeholder="Đến Km">	
									</div>	
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-2">
									<div class="form-group">
										<select name="cars" class="custom-select-sm form-control">
										    <option selected>Xuất sứ</option>
										    <option value="volvo">Volvo</option>
										    <option value="fiat">Fiat</option>
										    <option value="audi">Audi</option>
										  </select>
									</div>
								</div>
								<div class="col-md-2">
									<div class="form-group">
										<select name="cars" class="custom-select-sm form-control">
										    <option selected>Màu sắc</option>
										    <option value="volvo">Volvo</option>
										    <option value="fiat">Fiat</option>
										    <option value="audi">Audi</option>
										  </select>
									</div>
								</div>
								<div class="col-md-2">
									<div class="form-group">
										<select name="cars" class="custom-select-sm form-control">
										    <option selected>Hộp số</option>
										    <option value="volvo">Volvo</option>
										    <option value="fiat">Fiat</option>
										    <option value="audi">Audi</option>
										  </select>
									</div>
								</div><div class="col-md-2">
									<div class="form-group">
										<select name="cars" class="custom-select-sm form-control">
										    <option selected>Nhiên liệu</option>
										    <option value="volvo">Volvo</option>
										    <option value="fiat">Fiat</option>
										    <option value="audi">Audi</option>
										  </select>
									</div>
								</div><div class="col-md-2">
									<div class="form-group">
										<select name="cars" class="custom-select-sm form-control">
										    <option selected>Dòng xe</option>
										    <option value="volvo">Volvo</option>
										    <option value="fiat">Fiat</option>
										    <option value="audi">Audi</option>
										  </select>
									</div>
								</div><div class="col-md-2">
									<div class="form-group">
										<select name="cars" class="custom-select-sm form-control">
										    <option selected>Dẫn Động</option>
										    <option value="volvo">Volvo</option>
										    <option value="fiat">Fiat</option>
										    <option value="audi">Audi</option>
										  </select>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<button type="" class="form-control">Xem 200 xe đang bán</button>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<span class="form-control">Lưu tìm kiếm</span>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<button type="" class="form-control">Xóa tìm kiếm</button>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-2">
									<a href="" title="" style="color: black;">Ferrari</a>
								</div>
								<div class="col-sm-2">
									<a href="" title="" style="color: black;">Ferrari</a>
								</div>
								<div class="col-sm-2">
									<a href="" title="" style="color: black;">Ferrari</a>
								</div>
								<div class="col-sm-2">
									<a href="" title="" style="color: black;">Ferrari</a>
								</div>
								<div class="col-sm-2">
									<a href="" title="" style="color: black;">Ferrari</a>
								</div>
								<div class="col-sm-2">
									<a href="" title="" style="color: black;">Ferrari</a>
								</div>
							</div>	
						</div>
					</div>	
					
					
				
					<div class="block-search" >
						<form>
							<div class="form-row">
								<div class="form-group col-md-4">
									<div class="btn-group">
										<button type="button" class="btn btn-primary">Tất cả</button>
						    			<button type="button" class="btn btn-primary">Cá nhân</button>
						    			<button type="button" class="btn btn-primary">Showroom</button>
									</div>
								</div>
							
							<div class="form-group col-md-4">
								
										<select name="cars" class="form-control custom-select-sm">
										    <option selected>Sắp xếp</option>
										    <option value="volvo">Volvo</option>
										    <option value="fiat">Fiat</option>
										    <option value="audi">Audi</option>
										</select>	
									
							</div>

								<div class="form-group col-md-4">
									
										<select name="cars" class="form-control custom-select-sm">
										    <option selected>Thời gian đăng</option>
										    <option value="volvo">Volvo</option>
										    <option value="fiat">Fiat</option>
										    <option value="audi">Audi</option>
										</select>	
									
								</div>
								
							</div>
						</form>
					</div>
					<div class="list-cars">
						<div class="car-items">
							<div class="car-image">
								<img src="resourse/image/no-image.png" width="280" height="187" class="mx-auto">								
							</div>
							<div class="car-items-content" >
								<div class="car-items-content-title">
									<div class="title-left">
										<h4><a href="detail.php" title="" style="color: black;">Xe kawazaki Z400 2017 xe mới trong nước tự động</a></h4>
									</div>
								</div>
							</div>
						</div>
						<div class="car-items">
							<div class="car-image">
								<img src="resourse/image/no-image.png" width="280" height="187" class="mx-auto">								
							</div>
							<div class="car-items-content" >
								<div class="car-items-content-title">
									<div class="title-left">
										<h4><a href="detail.php" title="" style="color: black;">Xe kawazaki Z400 2017 xe mới trong nước tự động</a></h4>
									</div>
								</div>
							</div>
						</div>
						<div class="car-items">
							<div class="car-image">
								<img src="resourse/image/no-image.png" width="280" height="187" class="mx-auto">								
							</div>
							<div class="car-items-content" >
								<div class="car-items-content-title">
									<div class="title-left">
										<h4><a href="detail.php" title="" style="color: black;">Xe kawazaki Z400 2017 xe mới trong nước tự động</a></h4>
									</div>
								</div>
							</div>
						</div>
						<div class="car-items">
							<div class="car-image">
								<img src="resourse/image/no-image.png" width="280" height="187" class="mx-auto">								
							</div>
							<div class="car-items-content" >
								<div class="car-items-content-title">
									<div class="title-left">
										<h4><a href="detail.php" title="" style="color: black;">Xe kawazaki Z400 2017 xe mới trong nước tự động</a></h4>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="block-paginate ">
						<div class="row">
							<div class="col-md-6">
								<ul class="pagination">
								  <li class="page-item"><a class="page-link" href="#">1</a></li>
								  <li class="page-item active"><a class="page-link" href="#">2</a></li>
								  <li class="page-item"><a class="page-link" href="#">3</a></li>
								  <li class="page-item"><a class="page-link" href="#">4</a></li>
								</ul>
							</div>
							<div class="col-md-6">
								<ul class="pagination">
								  <li class="page-item"><a class="page-link" href="#">Previous</a></li>
								  
								  <li class="page-item"><a class="page-link" href="#">Next</a></li>
								</ul>
							</div>			
						</div>
					</div>
			
			</div>
		</div>	
		<!-- 	</div>
		</div> -->
	<div class="block-right" style="padding-top: 100px;">
		<div class="widget-block widget-white">
			Quảng cáo
		</div>
	</div>
</main>
	
	
	<?php include 'includes/footer.php'; ?>

	<!-- </div>
		 -->
		
</body>
	
	
</html>