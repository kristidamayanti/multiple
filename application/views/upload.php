<html>
<head>
	<title>multiple</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-theme.min.css">
	<title><?php echo $pageTitle; ?></title>
</head>
<body>
<div class="row">
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
            <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="<?php echo site_url('Multiple');?>">
                            <span class="glyphicon glyphicon-home" aria-hidden="true"></span></a>
                        </li>
                        <li><a href="<?php echo site_url('Multiple/gallery');?>">Gallery</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </div>
</div>
	
	<div class="row">
    	<div class="container">
		<div class="col-md-4 col-md-offset-4">
			<?php
			echo form_open_multipart('Multiple/doUpload');
			?>  
			<h2 style="color:#093">K-Link Image Gallery</h2>
			  <div class="form-group">
				<label for="exampleInputEmail1">Upload Images</label>
				<input type="file" name="userfile[]" class="form-control" size="20" multiple />
			  </div>
			<p align="right"><button class="btn btn-primary" type="submit" name="submit">Upload</button></p>
		</div>
		<div class="col-md-4">
			<?php
			if (isset($upload_data)): 
				foreach ($upload_data as $key => $val):
			?>
					<!-- thumbnails-->
					<div class="row">
						<div class="col-md-4">
							<a href="<?php echo base_url() . 'assets/images/' . $val["file_name"]; ?>" class="thumbnail">
								<?php
								$image_properties = array(
									'src' => 'assets/images/' . $val["file_name"],
									'class' => 'img-responsive',
								);
								echo img($image_properties);
								?>
							</a>
							<p align="center">
							<?php
							echo 'url : ' . base_url() . 'asset/images/' . $val["file_name"];
							?>
							</p>
						</div>
					</div>
					<?php
				endforeach;
				endif;
				?>
				<?php echo form_close() ?>

		</div>
        </div>
	</div>
 <!-- js needs -->
 <!-- Latest compiled and minified JavaScript -->
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

 </body>
 </html>
