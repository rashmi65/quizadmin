
<?php if (!isset($_SESSION['username'])) {
    redirect(base_url());
} ?>
<?php include ('header.php'); ?>

<body>
		<!-- Top Menu Items -->
   <?php include ('topbar.php'); ?>
   		<!-- /Top Menu Items -->
		
				<!-- Left Sidebar Menu -->
				<?php include ('sidebar.php'); ?>

						<!-- /Left Sidebar Menu -->
		
	

		
		<!-- Main Content -->
		<div class="page-wrapper">
			<div class="container-fluid">
				
				<!-- Title -->
				<div class="row heading-bg">
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
					</div>
					<!-- Breadcrumb -->
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
					  <ol class="breadcrumb">
						<li><a href="index.html">Dashboard</a></li>
						<li><a href="#"><span>Upload</span></a></li>
						<li class="active"><span>Upload Excel file</span></li>
					  </ol>
					</div>
					<!-- /Breadcrumb -->
				</div>
							<?php if($this->session->flashdata('successfile')){?>
   <div class="alert alert-success">      
    <?php echo $this->session->flashdata('successfile')?>
 </div>
 <?php } ?>
				<div>									
<?php echo form_open_multipart('exceldatainsert/ExcelDataAdd');?>                      
<label>Excel File:</label>                        
<input class="form-control" type="file" name="userfile" />				                   
<input type="submit" value="upload" class="btn btn-info btn-rounded" style="margin:1em" name="upload" />

</form>	
<h2 style="color:orange">Uploaded Sheet Must Be in this Format</h2><a href="<?php echo site_url('admin/downloadfile')?>">Click On The Link to download the file</a>
</div>
				<!-- /Title -->
				
				
				
			
			</div>
					<?php include ('footer.php'); ?>

		
			
		</div>
		<!-- /Main Content -->

    </div>
    <!-- /#wrapper -->
	
	<!-- JavaScript -->


	  <!-- jQuery -->
    <script src="<?php echo base_url(); ?>vendors/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    
	<!-- Data table JavaScript -->
	<script src="<?php echo base_url(); ?>vendors/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
	<script src="<?php echo base_url(); ?>dist/js/dataTables-data.js"></script>
	
	
</body>

</html>
