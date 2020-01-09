<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="theme-color" content="#3ed2a7">
	
	<link rel="shortcut icon" href="<?php echo base_url().'assets/logo-gkjw-png.png'?>" />
	
	<title>GKJW Sukun | Warta Jemaat</title>

	<link rel="stylesheet" href="https://use.typekit.net/qxb8htk.css">
	
	<link rel="stylesheet" href="<?php echo base_url().'assets/vendors/liquid-icon/liquid-icon.min.css'?>" />
	<link rel="stylesheet" href="<?php echo base_url().'assets/vendors/font-awesome/css/font-awesome.min.css'?>" />
	<link rel="stylesheet" href="<?php echo base_url().'assets/css/theme-vendors.min.css'?>" />
	<link rel="stylesheet" href="<?php echo base_url().'assets/css/theme.min.css'?>" />
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<script async src="assets/jquery-3.4.1.min.js"></script>
	<script async src="assets/vendors/modernizr.min.js"></script>
	<style type="text/css">
		.padding-fix{
				padding-right: 0 !important;
		}

		.padding-custom{
			padding-right: 5px !important;
			padding-left: 5px !important;
		}

		.modal {
			display: none; /* Hidden by default */
			position: fixed; /* Stay in place */
			z-index: 100 !important; /* Sit on top */
			left: 0;
			top: 0;
			float:center;
			width: 100%; /* Full width */
			height: 100%; /* Full height */
			overflow: auto; /* Enable scroll if needed */
			background-color: rgb(0,0,0); /* Fallback color */
			background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
			-webkit-animation-name: fadeIn; /* Fade in the background */
			-webkit-animation-duration: 0.4s;
			animation-name: fadeIn;
			animation-duration: 0.4s
		}

		.modal-backdrop{
			z-index:10 !important;
		}

		/* Modal Content */
		.modal-content {
			position: fixed;
			bottom: 0;
			margin: 0px auto;
			left: 0;
			right: 0;
			padding:16px;
			background-color: #ffffff;
			z-index: 2000;
			-webkit-animation-name: slideIn;
			-webkit-animation-duration: 0.4s;
			animation-name: slideIn;
			animation-duration: 0.4s
		}

		/* The Close Button */
		.close {
			color: white;
			float: right;
			font-size: 28px;
			font-weight: bold;
		}

		.close:hover,
		.close:focus {
			color: #000;
			text-decoration: none;
			cursor: pointer;
		}

		.modal-header {
			padding: 2px 0px;
			color: white;
		}

		.modal-body {padding: 2px 0px;}

		.modal-footer {
			padding: 2px 0px;
			color: black;
		}

		/* Add Animation */
		@-webkit-keyframes slideIn {
			from {bottom: -300px; opacity: 0} 
			to {bottom: 0; opacity: 1}
		}

		@keyframes slideIn {
			from {bottom: -300px; opacity: 0}
			to {bottom: 0; opacity: 1}
		}

		@-webkit-keyframes fadeIn {
			from {opacity: 0} 
			to {opacity: 1}
		}

		@keyframes fadeIn {
			from {opacity: 0} 
			to {opacity: 1}
		}
	</style>
</head>
<body style="background-color:#f8f9fa">
	
	<div id="wrap">

		<main id="content" class="content" style="background-color:#f8f9fa">

			<section class="vc_row">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 col-lg-offset-2 col-md-12 col-sm-12 pt-30 mb-20">
							<div class="row mb-20" style="padding:0px 8px">
								<div class="col-md-12 col-sm-12">
									<h2>
										<?php echo TanggalIndo($first['tanggal']);?>
									</h2>
								</div>

								<?php foreach($head as $data){?>
									<div class="col-md-3 col-sm-6 col-6 padding-custom mshmodal" 
											style="margin-bottom:-15px" 
											link="<?php echo base_url().'upload/media/'.$data['file']?>"
											judul="<?php echo $data['nama']?>"
											time="<?php echo $data['upload']?>"
											>
										<div class="iconbox text-center iconbox-shadow-hover iconbox-xl iconbox-heading-sm iconbox-filled border-athens-gray border-radius-3 pt-30 pb-30" style="padding:30px 5% !important">
											<div class="contents">
												<img src="./assets/
												<?php 
												if($data['type']=='pdf') echo 'pdf.svg'; 
												if($data['type']=='doc'|| $data['type']=='docx') echo 'docs.svg';
												if($data['type']=='xls'|| $data['type']=='xlsx') echo 'xls.svg';?>">
												<br>
												<b>
													<h3 class="font-weight-normal mt-10 mb-10"><?php echo $data['nama']?></h3>
												</b>
											</div><!-- /.contents -->
										</div><!-- /.iconbbox -->
									</div><!-- /.col-md-3 col-sm-6 col-6 col-6 padding-custom -->
								<?php }?>
							</div>

							<?php
							$this->db->limit(20,1);
							$this->db->order_by('tanggal','desc');
							$this->db->group_by('tanggal');
							$get = $this->db->get('media');

							foreach ($get->result() as $data) {
								?>
								<h3>
									<?php echo TanggalIndo($data->tanggal)?>
								</h3>
								<div class="row padding-custom mb-30" style="padding:0px 8px !important">
									<?php 
									$list = $this->db->get_where('media',array('tanggal' => $data->tanggal))->result();

									foreach ($list as $list) {
										?>

										<ul class="lqd-column col-12 w3-ul iconbox-shadow-hover iconbox-xl iconbox-heading-sm iconbox-filled border-athens-gray border-radius-3 list  " style="margin-bottom:5px;padding-left:0px !important;padding-right:0px !important" 
											link="<?php echo base_url().'upload/media/'.$list->file?>"
											judul="<?php echo $list->nama?>"
											time="<?php echo $list->upload?>"
											>
											<li class="w3-bar" style="padding: 0px !important">
												<img src="./assets/
												<?php 
												if($list->type=='pdf') echo 'pdf.svg'; 
												if($list->type=='doc'|| $list->type=='docx') echo 'docs.svg';
												if($list->type=='xls'|| $list->type=='xlsx') echo 'xls.svg';?>
												" class="w3-bar-item " style="width:80px">
												<div class="w3-bar-item" style="padding-left:0px">
													<span style="font-size:24px"><?php echo $list->nama?></span><br>
													<span>Upload on <?php echo $list->upload?> </span>
												</div>
												<a href="<?php echo base_url().'upload/media/'.$list->file?>" download>
													<span class="w3-bar-item w3-button w3-white w3-xlarge w3-right w3-hide-small" style=" padding: 21px 21px;">
														<img src="./assets/download.svg" style="font-size:24px">
													</span>
												</a>
												<?php if($list->type == 'pdf'){?>
													<a href="<?php echo base_url().'upload/media/'.$list->file?>" target="_blank">
														<span class="w3-bar-item w3-button w3-white w3-xlarge w3-right w3-hide-small" style=" padding: 21px 21px;">
															<img src="./assets/eye.svg" style="font-size:24px">
														</span>
													</a>
												<?php }?>
											</li>
										</ul>

										<?php
									} ?>
								</div>
								<?php
							} ?>
						</div><!-- /.row -->
					</div><!-- /.container -->
				</section>
				<section class="vc_row">
					<div class="row">
						<div class="lqd-column col-md-12">

						</div>
					</div>
				</section>
			</main>

		</div><!-- /#wrap -->

		<div id="myModal" class="modal">

			<!-- Modal content -->
			<div class="modal-content modal-lg d-flex justify-content-center">
				<div class="modal-header">
					<h2>Download</h2>
					<span class="close">&times;</span>
				</div>
				<div class="modal-body">
					<ul class="lqd-column col-12 w3-ul " style="margin-bottom:5px;padding-left:0px !important;padding-right:0px !important">
						<li class="w3-bar" style="padding: 0px !important">
							<img src="<?php echo base_url().'/assets/pdf.svg'?>" class="w3-bar-item" style="width:80px;padding-left:0px">
							<div class="w3-bar-item" style="padding-left:0px">
								<span style="font-size:32px" class="modal-title">Title</span><br>
								<span style="font-size:18px" class="modal-time">time</span>
							</div>
						</li>
					</ul>

				</div>
				<div class="modal-footer pt-10">
					<a class="col-md-6 col-6 w3-round w3-button w3-medium w3-green link-download" download>Download</a>
					</a>
					<a class="col-md-6 col-6 w3-round w3-button w3-medium w3-blue link-see" target="_blank">
						Lihat
					</a>
				</div>
			</div>

		</div>

		<script>
			$(document).ready(function(){
				$(".mshmodal").click(function(){
					var link = $(this).attr('link');
					var judul = $(this).attr('judul');
					var time = $(this).attr('time');
					$('.link-download').attr("href",link);
					$('.link-see').attr("href",link);
					$('.modal-title').html(judul);
					$('.modal-time').html(time);
					$("#myModal").modal('show');
				});
			});

			function myFunction(x) {
				if (x.matches) { 
					$(".list").addClass("mshmodal");
				} else {
					$(".list").removeClass("mshmodal");
				}
			}

			var x = window.matchMedia("(max-width: 600px)");
			myFunction(x); // Call listener function at run time
			x.addListener(myFunction); // Attach listener function on state changes
		</script>

		<style>


			.btns-secondary {
				color: #fff;
				background-color: #6c757d;
				border-color: #6c757d;
			}

			.btns-primary {
				color: #fff;
				background-color: #007bff;
				border-color: #007bff;
			}
		</style>


		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url().'/assets/vendors/jquery.min.js'?>"></script>
		<script src="<?php echo base_url().'/assets/js/theme-vendors.js'?>"></script>
		<script src="<?php echo base_url().'/assets/js/theme.min.js'?>"></script>
		<script src="<?php echo base_url().'/assets/js/liquidAjaxMailchimp.min.js'?>"></script>

	</body>
	</html>