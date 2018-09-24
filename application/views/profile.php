
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
            <div class="container-fluid pt-25">
					
		
				
				<!-- Row -->
					<div class="row">
							<div class="col-md-6">
								<div class="panel panel-default">
									<h1 class="panel-heading">Admin profile details</h1>
									<div class="panel-body">
								<?php	foreach($users as $user) 
      { ?>
	  <?php if($this->session->flashdata('updateprofile')){?>
   <div class="alert alert-success">      
    <?php echo $this->session->flashdata('updateprofile')?>
 </div>
 <?php } ?>
<?php echo form_open('admin/updateprofile'); ?>
											
											<div class="hr-dashed"></div>
											<div class="form-group">
												<label class="col-sm-2 control-label" style="color:black">Username </label>
												<div class="col-sm-10">
													<input type="text" style="color:black" value="<?php  echo $user->username;  ?>
" disabled class="form-control"><span class="help-block m-b-none">
													Username can't be changed.</span> </div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label" style="color:black">Email</label>
												<div class="col-sm-10">
	<input type="email" class="form-control" name="email" id="emailid" value="<?php  echo $user->email;  ?>" required="required">
						 
												</div>
											</div>
<div class="form-group">
											</div>



												<div class="col-sm-8 col-sm-offset-2" style="margin:1em">
													<button class="btn btn-default" type="reset">Cancel</button>
													<input class="btn btn-success  mr-10" type="submit" name="update" value="Update Profile">
												</div>
											</div>
<?php echo form_close(); ?>

	  <?php } ?>
									</div>
								</div>
							
								<div class="col-md-6">
								<div class="panel panel-default">
									<h1 class="panel-heading">Change Password</h1>
									<div class="panel-body">

<?php echo form_open('admin/adprofile'); ?>
<?php  
                          echo '<label class="text-success">'.$this->session->flashdata

("success").'</label>';  
                     ?> 
					<span class="text-danger"><?php echo validation_errors(''); ?></span>
											<div class="form-group">
												<label class="col-sm-4 control-label" style="color:black" >old Password </label>
												<div class="col-sm-8">
                                <input type="password" class="form-control"  name="currentpass" id="pass">

							</div>
											</div>
											<div class="form-group">
												<label class="col-sm-4 control-label" style="color:black">New Password</label>
												<div class="col-sm-8">
                                <input type="password" class="form-control"  name="password"  id="pass1">

											</div>
											</div>
<div class="form-group">
									<label class="col-sm-4 control-label" style="color:black">Confirm Password</label>

									<div class="col-sm-8">
					<input type="password"  class="form-control"  name="Confirm"  id="pass2">

												</div>
											</div>



												<div class="col-sm-8" style="margin:1em">
													<button class="btn btn-default" type="reset">Cancel</button>
                                <input type="submit" value="change password" class="btn btn-success  mr-10" name="changepass" id="change"  >
											</div>

<?php echo form_close(); ?>
								</div>
							</div>
						</div>
					</div>
			</div> 
				
					
				
				</div>
				<!-- /Row -->
			
			</div>
			<!-- Footer -->
							<?php include ('footer.php'); ?>

			<!-- /Footer -->
			
		</div>
        <!-- /Main Content -->

    </div>
    <!-- /#wrapper -->
	
	</body>

</html>
