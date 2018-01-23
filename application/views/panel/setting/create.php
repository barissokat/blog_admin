<?php $this->load->view('/panel/templates/header'); ?>
<?php $this->load->view('/panel/templates/navbar'); ?>
<?php $this->load->view('/panel/templates/sidebar'); ?>
<div class="container-fluid mt-4 mb-5">
	<h1>Ayarlar Create Sayfası</h1>
    <nav aria-label="breadcrumb" role="navigation">
        <ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="/admin/ayarlar">Listele</a></li>
			<li class="breadcrumb-item"><a href="/admin/ayarlar/olustur">Ekle</a></li>
			<li class="breadcrumb-item"><a href="/admin/ayarlar/profil/<?= $this->session->admin['id']; ?>">Profil</a></li>
			<li class="breadcrumb-item"><a href="/admin/ayarlar/guvenlik/<?= $this->session->admin['id']; ?>">Güvenlik</a></li>
        </ol>
    </nav>
	<?php echo form_open('admin/ayarlar/olustur'); ?>
		<div class="form-row">
			<div class="form-group col-md-8">
				<label for="name">İsim</label>
				<input required type="text" class="form-control" name="name" id="name" aria-describedby="nameHelp" placeholder="Ayar için isim giriniz" value="<?php echo set_value('name'); ?>">
				<small id="nameHelp" class="form-text text-danger"><?php echo form_error('name', '<div class="error">', '</div>'); ?></small>
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-8">
				<label for="value">Değer</label>
				<input required type="text" class="form-control" name="value" id="value" aria-describedby="valueHelp" placeholder="Ayarın görüntüleneceği değeri giriniz" value="<?php echo set_value('value'); ?>">
				<small id="valueHelp" class="form-text text-danger"><?php echo form_error('value', '<div class="error">', '</div>'); ?></small>
			</div>
		</div>
		<div class="form-row">
			<div class="col-md-2">
				<a class="btn btn-primary btn-block" href="/admin/ayarlar" role="button">Geri</a>
			</div>
			<div class="col-md-2">
				<input class="btn btn-danger btn-block" type="submit" value="Oluştur">
			</div>
		</div>
		<div class="form-row">
			<?php if($this->session->flashdata('validation')): ?>
				<div class="success text-success text-center"><strong><?php echo $this->session->flashdata('validation'); ?></strong></div>
			<?php endif; ?>
		</div>
	</form>
</div>
<?php $this->load->view('/panel/templates/footer'); ?>