
***
<?php include('header.php'); ?>

***
<h1>Hello <?php echo isset($sender)?$sender:''; ?></h1>
 The above line handles both the dynamic and the static GET routes that we implemented in the getRoutes.php file.

***

<h2>Send a greeting</h2>
<form method='POST' action='/fa/greet' class="col-md-4">
    <label>Name</label><br>
    <input name='name' class="form-control" placeholder='Who do you want to greet?' value="<?php echo isset($receiver)?$receiver:''; ?>"><br>
    <label>Greeting</label><br> 	
    <input name='greeting'class="form-control" placeholder='Your greeting message'><br>
    <input type='submit' value='Greet!' class="btn btn-success">
</form>



<?php include('footer.php'); ?>