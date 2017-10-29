<?php include('elements/header.php');?>

<div class="container">
	<div class="page-header">
   <h1>Add Post</h1>
  </div>

  <?php if($message){?>
    <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">×</button>
    	<?php echo $message?>
    </div>
  <?php }?>

  <div class="row">
      <div class="span8">
					<form action="<?php echo BASE_URL?>addpost/<?php echo $task?>" method="post" onsubmit="editor.post()">
	          <label>Title</label>
	          <input type="text" class="span6" name="post_title" value="<?php echo $title?>">

          <label for="category">Category</label>
          <select class="input-sm" name="post_categoryID" id="post_categoryID" required="category">
          <option value="">-- Select Category --</option>

          <?php
            foreach($categories as $key => $value){
              if($category == $key){
				  echo "<option selected value='".$key."'>".$value."</option>" . "\n";
              }
              else {
				  echo "<option value='".$key."'>".$value."</option>" . "\n";
              }

			}
          ?>

          </select>

					<label>Content</label>
					<textarea id="tinyeditor" name="post_content" style="width:556px;height: 200px"><?php echo $content?></textarea>
    			<br />
          <input type="hidden" name="pID" value="<?php echo $pID?>"/>

          <button id="submit" type="submit" class="btn btn-primary" >Submit</button>
        </form>


      </div>
    </div>
</div>
<?php include('elements/footer.php');?>
