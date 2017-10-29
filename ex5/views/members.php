
<?php include('elements/header.php');?>
<?php
if( is_array($user) ) {
	extract($user);?>

<div class="container">
	<div class="page-header">

<h1><?php echo $title;?></h1>
  </div>

		<p><?php echo $first_name." ".$last_name;?></p>
		<p><?php echo $email;?></p>

</div>
<?php }?>

<?php if( is_array($users) ) {?>

<div class="container">
<div class="page-header">

<h1><?php echo $title;?></h1>
  </div>

	<?php foreach($users as $p){?>
		<h3><a href="<?php echo BASE_URL?>members/view/<?php echo $p['email'];?>" Email="<?php echo $p['email'];?>"><?php echo $p['email'];?></a></h3>
		<p><?php echo $p['first_name']." ".$p['last_name'];?></p>
	<p><?php echo $p['email'];?></p>
<?php }?>
</div>

<?php }?>


<?php include('elements/footer.php');?>
