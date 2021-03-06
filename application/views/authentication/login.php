<div class="login-box">
	<div class="login-logo">
		<img src="<?php echo base_url("assets/upload/images/peta_jabar.png"); ?>" border="0" width=200 height=100/>
	</div>
	<!-- /.login-logo -->
	<div class="login-box-body">
		<p class="login-box-msg text-bold"> Silahkan Masukkan Email dan Password</p>
		<form method="post" action="<?php echo base_url('index.php/auth/login'); ?>" role="login">
			<div class="form-group has-feedback">
				<input type="email" name="email" class="form-control" required minlength="5" placeholder="Email" />
				<span class="glyphicon  glyphicon-envelope form-control-feedback"></span>
			</div>
			<div class="form-group has-feedback">
				<input type="password" name="password" class="form-control" required minlength="5" placeholder="Password" />
				<span class="glyphicon glyphicon-lock form-control-feedback"></span>
			</div>

			<div class="row">
				<div class="checkbox icheck col-xs-12 col-sm-6 col-md-6">
					<label>
                        <?php echo form_checkbox('remember_code', '1', false, 'id="remember_code"');?>
                        Ingat Saya
                    </label>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6" style="padding-bottom: 5px">
					<button type="submit" name="submit" value="login" class="btn btn-primary btn-block btn-flat"><i class="fa fa-sign-in" aria-hidden="true"></i> Masuk</button>
				</div>
			</div>
			<a href="<?php echo base_url('index.php/auth/login/#');?>"> Lupa Kata Sandi?</a><br>
			<a href="<?php echo base_url('index.php/auth/register');?>"> Register</a>
		</form>
	</div>
	<div id="myalert">
		<?php echo $this->session->flashdata('alert', true)?>
	</div>
</div>

<script>
	$(function() {
		$('input').iCheck({
			checkboxClass: 'icheckbox_square-blue',
			radioClass: 'iradio_square-blue',
			increaseArea: '20%' // optional
		});
	});
	$('#myalert').delay('slow').slideDown('slow').delay(4100).slideUp(600);
</script>
