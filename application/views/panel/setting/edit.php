<?php $this->load->view('/panel/templates/header'); ?>
<?php $this->load->view('/panel/templates/navbar'); ?>
<?php $this->load->view('/panel/templates/sidebar'); ?>
<div class="container-fluid mt-4 mb-5">
	<h1>Ayarlar Edit Sayfası</h1>
    <nav aria-label="breadcrumb" role="navigation">
        <ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="/admin/ayarlar">Listele</a></li>
			<li class="breadcrumb-item"><a href="/admin/ayarlar/olustur">Ekle</a></li>
			<li class="breadcrumb-item"><a href="/admin/ayarlar/profil/<?= $this->session->admin['id']; ?>">Profil</a></li>
			<li class="breadcrumb-item"><a href="/admin/ayarlar/guvenlik/<?= $this->session->admin['id']; ?>">Güvenlik</a></li>
        </ol>
    </nav>
	<?php echo form_open("admin/ayarlar/$setting->id/guncelle"); ?>
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
       			<input required type="text" class="form-control" name="value" id="value" aria-describedby="valueHelp" placeholder="Ayar için isim giriniz" value="<?= $setting->value; ?>">
				<small id="valueHelp" class="form-text text-danger"><?= form_error('value', '<div class="error">', '</div>'); ?><?= form_error('name', '<div class="error">', '</div>'); ?></small>
			</div>
		</div>
		<div class="form-row">
			<div class="col-md-2">
				<a class="btn btn-primary btn-block" href="/admin/ayarlar/<?= $setting->id; ?>/detay" role="button">Geri</a>
			</div>
			<div class="col-md-2">
				<input class="btn btn-danger btn-block" type="submit" value="Kaydet">
			</div>
		</div>
	</form>
</div>
<?php $this->load->view('/panel/templates/footer'); ?>