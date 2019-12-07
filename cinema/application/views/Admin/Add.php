<?php include 'includes/header.php';  ?>
<div class="container">
	<div class="row">
	    
	    <div class="col-md-8 col-md-offset-2">
	        
			<h1>TONY CINEMA</h1>
				<h3>Add Movie</h3>
            <hr>
            <hr>
    		
    		    
            <?php echo form_open('Admin/addfilm'); ?>
    	               <label for="slug">Movie Name <span class="require">*</span> <small></small></label>
    	               <input type="text" class="form-control" name="film" />
    	               <span class="help-block">Field not entered!</span>
    	           </div>
    		    
    		    <div class="form-group">
    		        <label for="title">Time<span class="require">*</span></label>
    		        <input type="text" class="form-control" name="time" />
    		    </div>
    		    
    		    <div class="form-group">
    		        <label for=" movie description"> Movie Catagory</label>
    		        <textarea rows="1" class="form-control" name="cata" ></textarea>
    		    </div>
    		    
    		    <div class="form-group">
    		        <p><span class="require">*</span> - required fields</p>
    		    </div>
    		    
    		    <div class="form-group">
    		        <button type="submit" class="btn btn-primary">
    		            Submit
    		        </button>
    		        <button class="btn btn-default">
    		            Cancel
    		        </button>
    		    </div>
    		    
                <?php echo form_close(); ?>
		</div>
		
	</div>
</div>
<?php include 'includes/footer.php';  ?>

 