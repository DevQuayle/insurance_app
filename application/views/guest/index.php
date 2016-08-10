<div  class="w3-card-2 l12 m12 s12 " id="login_container" >
<div class ="panel panel-primary" style="font-size:20px;"> <div class="panel-heading">Logowanie </div></div>

<?php
	$attributes = array('class' => 'w3-container');
	echo form_open("auth/login",$attributes);
?>

  <div class="w3-group"> 
    <input name="identity" class="w3-input" type="text" required>
    <label class="w3-label">Login</label>
  </div>
  <div class="w3-group"> 
    <input name="password" class="w3-input" type="password" required>
    <label class="w3-label">Hasło</label>
  </div>
  <input id="login_button" type="submit" class="w3-btn blue" value="Zaloguj" />
<?php echo form_close();?>
</div>
<?php 
	if(isset($_SESSION['message']))
		echo '<div  class="w3-card-2 l12 m12 s12 red " id="error_box" > ' . $_SESSION['message']. '</div>';
?>

