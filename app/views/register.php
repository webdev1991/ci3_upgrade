<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Register</title>
</head>
<body>

	<div class="container" style="width:800px">
		<?php
			$msg = $this->session->flashdata('msg');
			if ($msg != "") {
				echo "<div class='alert alert-success'>$msg</div>";
			}

		?>

		<div class="table">
			<h4 align="center">Register</h4><br/>
			<div class="box">
				<form class="registerForm" id="registerForm" action="<?php echo base_url().'Auth/register'?>" method="post" enctype="multipart/form-data">

					<div class="form-group">
						<label for="name">First name</label>
						<input type="text" name="first_name" id="first_name" class="form-control" value="<?php echo set_value('first_name')?>" placeholder="First name">
						<p class="text-danger"><?php echo strip_tags(form_error('first_name'));?></p>
										
					</div>

					<div class="form-group">
						<label for="name">Last name</label>
						<input type="text" name="last_name" id="last_name" class="form-control" value="<?php echo set_value('last_name')?>" placeholder="Last name">
						<p class="text-danger"><?php echo strip_tags(form_error('last_name'));?></p>						
					</div>

					<div class="form-group">
						<label for="name">Email</label>
						<input type="text" name="email" id="email" class="form-control" value="<?php echo set_value('email')?>" placeholder="Email">
						<p class="text-danger"><?php echo strip_tags(form_error('email'));?></p>						
					</div>

					<div class="form-group">
						<label for="name">Phone</label>
						<input type="text" name="phone" id="phone" class="form-control" value="<?php echo set_value('phone')?>" placeholder="Phone">
						<p class="text-danger"><?php echo strip_tags(form_error('phone'));?></p>						
					</div>

					<div class="form-group">
						<label for="name">Password</label>
						<input type="text" name="password" id="password" class="form-control" value="<?php echo set_value('password')?>" placeholder="Password">
						<p class="text-danger"><?php echo strip_tags(form_error('password'));?></p>						
					</div>

					
					<div class="form-group">
						<input type="submit" name="submit" id="submit" class="btn btn-success" value="submit">						
					</div>
					
				</form>
				
			</div>
			
		</div>
	</div>

</body>
</html>

