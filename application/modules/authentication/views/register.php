<div class="register-box">
	<div class="register-logo">
		<img src="<?php echo base_url("assets/upload/images/peta_jabar.png"); ?>" border="0" width=200 height=100/>
	</div>

	<div class="register-box-body">
		<font color="green">
			<?php echo $this->session->flashdata('pesan'); ?>
		</font>
		<p class="login-box-msg">Register a new membership</p>
		<?php echo form_open('auth/check_register','') ;?>
		<div class="form-group has-feedback">
			<input type="text" name="first_name" class="form-control" required placeholder="Nama">
			<span class="glyphicon glyphicon-user form-control-feedback"></span>
			<?php echo form_error('first_name','<div class="text-danger"><small>','</small></div>') ;?>
		</div>
		<div class="form-group has-feedback">
			<input type="text" name="username" class="form-control" required placeholder="Username">
			<span class="glyphicon glyphicon-user form-control-feedback"></span>
			<?php echo form_error('username','<div class="text-danger"><small>','</small></div>') ;?>
		</div>
		<div class="form-group has-feedback">
			<input type="email" name="email" class="form-control" required placeholder="Email">
			<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
			<?php echo form_error('email','<div class="text-danger"><small>','</small></div>') ;?>
		</div>
		<div class="form-group has-feedback">
			<input type="password" name="password" class="form-control" required placeholder="Password">
			<span class="glyphicon glyphicon-lock form-control-feedback"></span>
			<?php echo form_error('password','<div class="text-danger"><small>','</small></div>') ;?>
		</div>
		<div class="row">
			<div class="col-xs-4">
		      <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
		      <?php echo form_close() ;?>
			</div>
		</div>
		<a href="<?php echo base_url('auth/login') ;?>" class="text-center">I already have a membership</a>
	</div>
</div>
