
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
						<li><a href="#"><span>Question</span></a></li>
						<li class="active"><span>Manage Questions</span></li>
					  </ol>
					</div>
					<!-- /Breadcrumb -->
				</div>

				<!-- /Title -->
				
				<!-- Row -->
				<div class="row">
				<?php if($this->session->flashdata('question')){?>
   <div class="alert alert-success">      
    <?php echo $this->session->flashdata('question')?>
 </div>
 <?php } ?>
 <?php if($this->session->flashdata('updatequs')){?>
   <div class="alert alert-success">      
    <?php echo $this->session->flashdata('updatequs')?>
 </div>
 <?php } ?>
					<div class="col-sm-12">
						<div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">

								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<div class="table-wrap">
										<div class="table-responsive">
											<table id="datable_1" class="table table-hover display  pb-30" >
												<thead>
													<tr>
														 <th>Serial</th>
					  <th>Question</th>
					  <th>option1</th>
					  <th>option2</th>
					   <th>option3</th>
					  <th>option4</th>
					  <th>Correct Option</th>
					  <th>Action</th>

													</tr>
												</thead>
												<tfoot>
													<tr>
														 <th>Serial</th>
					  <th>Question</th>
					  <th>option1</th>
					  <th>option2</th>
					   <th>option3</th>
					  <th>option4</th>
					  <th>Correct Option</th>
					  <th>Action</th>
													</tr>
												</tfoot>
												<tbody>
												<?php   $cnt=1;
         foreach ($h as $row)  
         { 	
		 $id=$row['id']
            ?>		
													<tr>
														 <td><?php echo $cnt;;?></td>

                      <td><?php echo $row['question']?></td>  
            <td><?php echo $row['opt1']?></td>  
			            <td><?php echo $row['opt2']?></td>  
						 <td><?php echo $row['opt3']?></td>  
			            <td><?php echo $row['opt4']?></td>  
						<td><?php echo $row['correct_opt']?></td>  
			<td><a href="<?php echo base_url()?>admin/editquestion/<?php echo $id;?>" class="text-inverse pr-10" title="Edit" data-toggle="tooltip">
			<i class="zmdi zmdi-edit txt-warning"></i></a>
			<a href="<?php echo base_url()?>admin/deletequestion/<?php echo $id;?>" onclick="return confirm('Do you want to delete')" class="text-inverse" title="Delete" data-toggle="tooltip">
			<i class="zmdi zmdi-delete txt-danger"></i></a></td>

													</tr>
													 <?php  $cnt=$cnt+1;  }  
         ?>  
													
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>	
					</div>
				</div>
				<!-- /Row -->
				
			
			</div>
					<?php include ('footer.php'); ?>

		
			
		</div>
		<!-- /Main Content -->

    </div>
    <!-- /#wrapper -->
	
	<!-- JavaScript -->


	  <!-- jQuery -->
    <script src="<?=base_url()?>vendors/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    
	<!-- Data table JavaScript -->
	<script src="<?=base_url()?>vendors/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
	<script src="<?=base_url()?>dist/js/dataTables-data.js"></script>
	
	
</body>

</html>
