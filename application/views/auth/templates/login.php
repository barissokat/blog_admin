<div class="container mt-5">
	<form action="/login" method="post">
		<div class="form-group">
			<div class="input-group input-group-lg">
				<input required type="email" class="form-control" name="email" aria-describedby="basic-addon1 emailHelp" placeholder="Email adresinizi giriniz" value="<?php echo set_value('email'); ?>">
				<span class="input-group-addon" id="basic-addon1"><i class="fas fa-envelope"></i></span>
			</div>
			<small id="emailHelp" class="form-text text-danger"><?= form_error('email', '<div class="error">', '</div>'); ?></small>
		</div>
		<div class="form-group">
			<div class="input-group input-group-lg">
				<input required type="password" class="form-control" name="password" aria-describedby="basic-addon2 passwordHelp" placeholder="Şifrenizi giriniz">
				<span class="input-group-addon" id="basic-addon2"><i class="fas fa-key"></i></span>
			</div>
			<small id="passwordHelp" class="form-text text-danger"><?= form_error('password', '<div class="error">', '</div>'); ?></small>
		</div>
		<div class="form-group">
			<input type="submit" class="btn btn-primary btn-block btn-lg" value="Giriş">
		</div>
		<div class="form-group">
			<?php if ($this->session->flashdata('notadmin')): ?>
				<button type="button" class="btn btn-danger btn-lg btn-block btn-lg"><strong><?= $this->session->flashdata('notadmin'); ?></strong></button>
			<?php endif ?>
		</div>
	</form>
</div>