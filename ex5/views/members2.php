
<?php include('elements/header.php');?>


<?php if( is_array($user) ) {?>

<div class="container">
<div class="page-header">



<h1><?php echo $title;?></h1>
  </div>

	<?php foreach($user as $p){?>
    <h3><a href="<?php echo BASE_URL?>members/<?php echo $p['uID'];?>" Email="<?php echo $p['email'];?>"><?php echo $p['email'];?></a></h3>
		<p><?php echo $p['first_name'];?><?php echo $p['last_name'];?></p>
	<p><?php echo $p['email'];?></p>
<?php }?>
</div>

<?php }?>


<?php include('elements/footer.php');?>
