<?php $this->load->view('/panel/templates/header'); ?>
<?php $this->load->view('/panel/templates/navbar'); ?>
<?php $this->load->view('/panel/templates/sidebar'); ?>
<div class="container-fluid mt-4 mb-5">
	<h1>Ayarlar Show Sayfası</h1>
    <nav aria-label="breadcrumb" role="navigation">
        <ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="/admin/ayarlar">Listele</a></li>
			<li class="breadcrumb-item"><a href="/admin/ayarlar/olustur">Ekle</a></li>
			<li class="breadcrumb-item"><a href="/admin/ayarlar/profil/<?= $this->session->admin['id']; ?>">Profil</a></li>
			<li class="breadcrumb-item"><a href="/admin/ayarlar/guvenlik/<?= $this->session->admin['id']; ?>">Güvenlik</a></li>
        </ol>
    </nav>
	<form>
		<div class="form-row">
	    	<input type="hidden" name="id" value="<?= $setting->id; ?>">
		</div>
		<div class="form-row">
			<div class="form-group col-md-8">
				<label for="name">İsim</label>
       			<p class="form-control-static"><?= $setting->name; ?></p>
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-8">
				<label for="value">Değer</label>
       			<p class="form-control-static"><?= $setting->value; ?></p>
			</div>
		</div>
		<div class="form-row">
			<?php if($this->session->flashdata('validation')): ?>
				<div class="success text-success text-center"><strong><?php echo $this->session->flashdata('validation'); ?></strong></div>
			<?php endif; ?>
		</div>
		<div class="form-row">
			<div class="col-md-2">
				<a class="btn btn-primary btn-block" href="/admin/ayarlar" role="button">Geri</a>
			</div>
			<div class="col-md-2">
				<a class="btn btn-primary btn-block" href="/admin/ayarlar/<?= $setting->id; ?>/duzenle" role="button">Düzenle</a>
			</div>
		</div>
	</form>
</div>
<script>
(function() {
	'use strict';
	window.addEventListener('load', function() {
		var form = document.getElementById('needs-validation');
		form.addEventListener('submit', function(event) {
			if (form.checkValidity() === false) {
				event.preventDefault();
				event.stopPropagation();
			}
			form.classList.add('was-validated');
		}, false);
	}, false);
})();
</script>
<?php $this->load->view('/panel/templates/footer'); ?>