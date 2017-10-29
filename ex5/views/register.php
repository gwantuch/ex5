
<?php include('elements/header.php');?>


<div class="container">
	<div class="page-header">

   <h1> the Add User View </h1>
  </div>
  <?php if($message){?>
    <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">×</button>
    	<?php echo $message?>
    </div>
  <?php }?>
  <div class="row">
      <div class="span8">
        <form action="<?php echo BASE_URL?>register/<?php echo $task?>" method="post" onsubmit="editor.post()">
          <label>First Name</label>
          <input type="text" class="span6" name="post_fname" value="<?php echo $fname?>">
					<label>Last Name</label>
          <input type="text" class="span6" name="post_lname" value="<?php echo $lname?>">
					<label>Email</label>
          <input type="text" class="span6" name="post_email" value="<?php echo $email?>">
					<label>Password</label>
          <input type="text" class="span6" name="post_password" value="<?php echo $password?>">
    			<br/>
          <input type="hidden" name="uID" value="<?php echo $uID?>"/>
          <button id="submit" type="submit" class="btn btn-primary" >Submit</button>
        </form>

      </div>
    </div>
</div>
<?php include('elements/admin_footer.php');?>
