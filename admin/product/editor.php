<?php
	$title = 'Cập Nhật Sản Phẩm';
	$baseUrl = '../';
	require_once('../layouts/header.php');

	$id = $thumbnail = $title = $price  = $category_id =  '';
	require_once('form_save.php');

	$id = getGet('id');
	if($id != '' && $id > 0) {
		$sql = "select * from Product where id = '$id' and deleted = 0";
		$userItem = executeResult($sql, true);
		if($userItem != null) {
			$thumbnail = $userItem['thumbnail'];
			$title = $userItem['title'];
			$price = $userItem['price'];
		
			$category_id = $userItem['category_id'];
	
		} else {
			$id = 0;
		}
	} else {
		$id = 0;
	}

	$sql = "select * from Category";
	$categoryItems = executeResult($sql);
?>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<div class="row" style="margin-top: 20px;">
	<div class="col-md-12 table-responsive">
		<h3>Thêm/Sửa Sản Phẩm</h3>
		<div class="panel panel-primary">
			<div class="panel-body">
				<form method="post" enctype="multipart/form-data">
				<div class="row">
					<div class="col-md-9 col-12">
						<div class="form-group">
						  <label for="usr">Tên Sản Phẩm:</label>
						  <input required="true" type="text" class="form-control" id="usr" name="title" value="<?=$title?>">
						  <input type="text" name="id" value="<?=$id?>" hidden="true">
						</div>
					

						<button class="btn btn-success">Lưu Sản Phẩm</button>
					</div>
					<div class="col-md-3 col-12" style="border: solid grey 1px; padding-top: 10px; padding-bottom: 10px;">
						<div class="form-group">
						  <label for="thumbnail">Thumbnail:</label>
						  <input type="file" class="form-control" id="thumbnail" name="thumbnail" accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|image/*">
						  <img id="thumbnail_img" src="<?=fixUrl($thumbnail)?>" style="max-height: 160px; margin-top: 5px; margin-bottom: 15px;">
						</div>

						<div class="form-group">
						  <label for="usr">Danh Mục Sản Phẩm:</label>
						  <select class="form-control" name="category_id" id="category_id" required="true">
						  	<option value="">-- Chọn --</option>
						  	<?php
						  		foreach($categoryItems as $item) {
						  			if($item['id'] == $category_id) {
						  				echo '<option selected value="'.$item['id'].'">'.$item['name'].'</option>';
						  			} else {
						  				echo '<option value="'.$item['id'].'">'.$item['name'].'</option>';
						  			}
						  		}
						  	?>
						  </select>
						</div>
						<div class="form-group">
						  <label for="price">Giá:</label>
						  <input required="true" type="number" class="form-control" id="price" name="price" value="<?=$price?>">
						</div>
						
					</div>
				</div>
				</form>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	function updateThumbnail() {
		$('#thumbnail_img').attr('src', $('#thumbnail').val())
	}
</script>
<?php
	require_once('../layouts/footer.php');
?>