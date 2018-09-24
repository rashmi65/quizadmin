
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
		
	<link rel="stylesheet" href="<?php echo base_url(); ?>ckeditor/samples/sample.css">
<script src="<?php echo base_url(); ?>ckeditor/ckeditor.js">  </script>
<script type="text/javascript">
CKEDITOR.replace( 'editor1', {
fullPage: true,
allowedContent: true,
extraPlugins: 'wysiwygarea'
});
</script>
			
				
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
								<li class="active"><span>Add-Question</span></li>
							</ol>
						</div>
						<!-- /Breadcrumb -->
					
					</div>
					<!-- /Title -->
					
				
					
		       <div class="row">
		  
        <div class="card-body">
		<?php if($this->session->flashdata('addquestion')){?>
   <div class="alert alert-success">      
    <?php echo $this->session->flashdata('addquestion')?>
 </div>
 <?php } ?>
	<form action="<?php echo site_url('admin/addquestion'); ?>" method="post"  enctype="multipart/form-data">
		<div class="form-group">
                <div class="col-md-6">
				                    <label for="firstName">Question</label>

                  <div class="form-label-group">
	<textarea id="editor1" name="Question" class="ckeditor" ></textarea> </td>                  
				<span class="text-danger"><?php echo form_error('Question'); ?></span>                 
                </div>
              
              </div>
        </div>
		    <div class="form-group">
                <div class="col-md-6">
				                    <label for="firstName">option1</label>

                  <div class="form-label-group">
				  <textarea id="editor1" name="option1" class="ckeditor" ></textarea>                   

				<span class="text-danger"><?php echo form_error('option1'); ?></span>                 
                </div>
              
              </div>
         </div>
		    <div class="form-group">
                <div class="col-md-6">
				                    <label for="firstName">option2</label>

                  <div class="form-label-group">
				  <textarea id="editor1" name="option2" class="ckeditor" ></textarea>                   
				<span class="text-danger"><?php echo form_error('option2'); ?></span>                 
                </div>
              
              </div>
         </div>
		    <div class="form-group">
                <div class="col-md-6">
				                    <label for="firstName">option3</label>

                  <div class="form-label-group">
				  <textarea id="editor1" name="option3" class="ckeditor" ></textarea>                   
				<span class="text-danger"><?php echo form_error('option3'); ?></span>                 
                </div>
              
              </div>
         </div>
		    <div class="form-group">
                <div class="col-md-6">
				                    <label for="firstName">option4</label>

                  <div class="form-label-group">
				  <textarea id="editor1" name="option4" class="ckeditor" ></textarea>                   
				<span class="text-danger"><?php echo form_error('option4'); ?></span>                 
                </div>
              
              </div>
         </div>
            <div class="form-group">
			        <div class="col-md-6">
								  <label for="inputEmail">Correct option</label>

              <div class="form-label-group">
		<textarea id="editor1" name="Correct" class="ckeditor" ></textarea>                   

					<span class="text-danger"><?php echo form_error('Correct'); ?></span>  
              </div>
			  </div>
            </div>
        <div class="clearfix"></div>
				<div class="col-md-6" style="padding:1em">
		<input class="btn btn-success  mr-10" type="submit" value="Add Question" name="save">
		<button type="button" class="btn btn-default">Cancel</button>
</div>
          </form>
        
        </div>

        </div>
					
					
				
				</div>
		
				<!-- Footer -->
				<?php include ('footer.php'); ?>

				<!-- /Footer -->
			
			</div>
			<!-- /Main Content -->
		
		</div>
		<!-- /#wrapper -->
		
		<!-- JavaScript -->
		
		
	</body>
</html>
