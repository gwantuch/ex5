<?php include('elements/header.php');?>
<div class="container">
	<div class="page-header">
   <h1> the Login View </h1>
   <?php if(isset($error)) { ?>
		 <div class="alert alert-danger">
			<?php echo $error;?>
		 </div>
	 <?php }  ?>

	 <div class="row">
	 		<div class="span8">
	 			<form action="<?php echo BASE_URL?>login/do_login<?php echo $task?>" method="post" onsubmit="editor.post()">
	 				<label>Username/ Email</label>
	 				<input type="text" class="span6" id="email" name="email" value="<?=$_POST['email']?>">
	 				<label>Password</label>
	 				<input type="text" class="span6" name="password" value="<?=$_POST['password']?>">
	 				<br/>

	 				<button id="submit" type="submit" class="btn btn-primary" >Submit</button>
	 			</form>

	 		</div>

  </div>
</div>
<?php include('elements/footer.php');?>
