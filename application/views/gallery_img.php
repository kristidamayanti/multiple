<html>
<head>
	<title>multiple</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-theme.min.css">

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
	
<div class="row mt">
    <div class="container">
		<div class="col-lg-12">
			<div class="form-panel">
				<h4 style="color:#093; margin-bottom:40px;" class="mb text-center" ><i class="fa fa-angle-right"></i>Gallery</h4>
					<div class="row">	
						<div class="col-md-12">
							<div class="row">
							<?php
							if(isset($hasil))
							{
								foreach($hasil as $row) :
							?>
								<div class="col-xs-8 col-md-3">
									<a style="min-height:200px;" href="<?php echo base_url().'assets/images/'.$row->image;?>" class="thumbnail">
									  <img style="max-height:180px;" src="<?php echo base_url().'assets/images/'.$row->image;?>" alt="..." class="img-responsive">
									</a>
									<div class="col-md-12" style="height:120px;">
										<p class="united"><?php echo 'url : ' . base_url() . 'asset/images/'.$row->image;?></p>
									</div>
								</div>
							<?php 
								endforeach;
								
							}
							else
							{
								echo '<div class="col-xs-6 col-md-3">';
								echo 'no data';
								echo '</div>';
							}
							
							
							?>
							</div>
						</div><!-- col-md-12-->
						<div class="col-md-12">
							<?php 
							echo 
							'<p class="text-center">';
							echo $pagination;
							echo '</p>';
							?>
						</div>
					</div>
			</div>
		</div><!-- col-lg-12-->      	
	</div>
</div><!-- /row -->   
 <!-- js needs -->
 <!-- Latest compiled and minified JavaScript -->
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

 </body>
 </html>
