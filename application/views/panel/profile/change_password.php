<?php $this->load->view('/panel/templates/header'); ?>
<?php $this->load->view('/panel/templates/navbar'); ?>
<?php $this->load->view('/panel/templates/sidebar'); ?>
<div class="container-fluid mb-5">
	<h1>Ayarlar Güvenlik Sayfası</h1>
	<nav aria-label="breadcrumb" role="navigation">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="/admin/ayarlar">Listele</a></li>
			<li class="breadcrumb-item"><a href="/admin/ayarlar/olustur">Ekle</a></li>
			<li class="breadcrumb-item"><a href="/admin/ayarlar/profil/<?= $this->session->admin['id']; ?>">Profil</a></li>
			<li class="breadcrumb-item"><a href="/admin/ayarlar/guvenlik/<?= $this->session->admin['id']; ?>">Güvenlik</a></li>
		</ol>
	</nav>
	<?php $attr=array('class'=>'mt-5 ml-5'); echo form_open("admin/ayarlar/guvenlik/$admin->id/guncelle", $attr); ?>
		<div class="form-group">
			<input type="hidden" name="id" value="<?= $admin->id; ?>">
		</div>
		<div class="form-group row">
			<label for="name" class="col-2 col-form-label">Eski Parola</label>
			<div class="form-row col-6">
				<input type="password" class="form-control" name="oldpassword" aria-describedby="oldpasswordHelp" size="12">
				<small id="oldpasswordHelp" class="form-text text-danger"><?= form_error('oldpassword', '<div class="error">', '</div>'); ?></small>
			</div>
			<small id="oldpasswordHelp" class="form-text text-danger"><?= $this->session->flashdata('fail_oldpassword'); ?></small>
		</div>
		<div class="form-group row">
			<label for="email" class="col-2 col-form-label">Yeni Parola</label>
			<div class="form-row col-6">
				<input type="password" class="form-control" name="newpassword" aria-describedby="newpasswordHelp" size="12">
				<small id="newpasswordHelp" class="form-text text-danger"><?= form_error('newpassword', '<div class="error">', '</div>'); ?></small>
			</div>
		</div>
		<div class="form-group row mb-5">
			<label for="email" class="col-2 col-form-label">Parolayı Doğrulayın</label>
			<div class="form-row col-6">
				<input type="password" class="form-control" name="newpasswordconf" aria-describedby="newpasswordconfHelp" size="12">
				<small id="newpasswordconfHelp" class="form-text text-danger"><?= form_error('newpasswordconf', '<div class="error">', '</div>'); ?></small>
			</div>
		</div>
		<div class="form-row">
			<div class="col-md-2">
				<input class="btn btn-danger btn-block" type="submit" value="Şifre Belirle">
			</div>
			<div class="col-6">
				<label class="form-text text-success col-form-label"><?php echo $this->session->flashdata('success_password'); ?></label>
			</div>
		</div>
	</form>
</div>
<?php $this->load->view('/panel/templates/footer'); ?>