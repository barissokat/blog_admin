<?php $this->load->view('/panel/templates/header'); ?>
<?php $this->load->view('/panel/templates/navbar'); ?>
<?php $this->load->view('/panel/templates/sidebar'); ?>
<div class="container-fluid mb-5">
	<h1>Ayarlar Profil Sayfası</h1>
	<nav aria-label="breadcrumb" role="navigation">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="/admin/ayarlar">Listele</a></li>
			<li class="breadcrumb-item"><a href="/admin/ayarlar/olustur">Ekle</a></li>
			<li class="breadcrumb-item"><a href="/admin/ayarlar/profil/<?= $this->session->admin['id']; ?>">Profil</a></li>
			<li class="breadcrumb-item"><a href="/admin/ayarlar/guvenlik/<?= $this->session->admin['id']; ?>">Güvenlik</a></li>
		</ol>
	</nav>
	<?php $attr=array('class'=>'mt-5 ml-5'); echo form_open("admin/ayarlar/profil/$admin->id/guncelle", $attr); ?>
		<div class="form-group">
			<input type="hidden" name="id" value="<?= $admin->id; ?>">
		</div>
		<div class="form-group row">
			<label for="name" class="col-2 col-form-label">Kullanıcı Adı</label>
			<div class="form-row col-6">
				<input required type="text" class="form-control" name="name" aria-describedby="nameHelp" placeholder="Kullanıcı adı giriniz" value="<?= $admin->name; ?>" size="10">
				<small id="nameHelp" class="form-text text-danger"><?= form_error('name', '<div class="error">', '</div>'); ?></small>
			</div>
			<label class="form-text text-success col-4 col-form-label"><?= $this->session->flashdata('success_name'); ?></label>
		</div>
		<div class="form-group row mb-5">
			<label for="email" class="col-2 col-form-label">Email</label>
			<div class="form-row col-6">
				<input required type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Email adresi giriniz" value="<?= $admin->email; ?>" size="100">
				<small id="emailHelp" class="form-text text-danger"><?= form_error('email', '<div class="error">', '</div>'); ?></small>
			</div>
			<?php if ($this->session->flashdata('success_email')): ?>
				<label class="form-text text-success col-4 col-form-label"><?= $this->session->flashdata('success_email'); ?></label>
			<?php elseif ($this->session->flashdata('fail_email')): ?>
				<label class="form-text text-danger col-4 col-form-label"><?= $this->session->flashdata('fail_email'); ?></label>
			<?php endif ?>
		</div>
		<div class="form-row">
			<div class="col-md-2">
				<input class="btn btn-danger btn-block" type="submit" value="Değişiklikleri Kaydet">
			</div>
		</div>
	</form>
</div>
<?php $this->load->view('/panel/templates/footer'); ?>