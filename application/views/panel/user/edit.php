<?php $this->load->view('/panel/templates/header'); ?>
<?php $this->load->view('/panel/templates/navbar'); ?>
<?php $this->load->view('/panel/templates/sidebar'); ?>
<div class="container-fluid mt-4 mb-5">
	<h1>Edit Sayfası</h1>
    <nav aria-label="breadcrumb" role="navigation">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin/kullanicilar">Listele</a></li>
            <li class="breadcrumb-item"><a href="/admin/kullanicilar/olustur">Ekle</a></li>
        </ol>
    </nav>
	<?php echo form_open("admin/kullanicilar/$user->id/guncelle"); ?>
		<div class="form-row">
	    	<input type="hidden" name="id" value="<?= $user->id; ?>">
		</div>
		<div class="form-row">
			<div class="form-group col-md-8">
				<label for="name">İsim</label>
       			<input required type="text" class="form-control" name="name" aria-describedby="nameHelp" placeholder="Kullanıcı için isim giriniz" value="<?= $user->name; ?>">
				<small id="nameHelp" class="form-text text-danger"><?= form_error('name', '<div class="error">', '</div>'); ?></small>
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-8">
				<label for="email">Email</label>
       			<input required type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Kullanıcı için email giriniz" value="<?= $user->email; ?>">
				<small id="emailHelp" class="form-text text-danger"><?= form_error('email', '<div class="error">', '</div>'); ?></small>
			</div>
		</div>
		<?php if ($this->session->flashdata('success_info')): ?>
		<div class="form-row">
			<div class="col-md-4">
				<button type="button" class="btn btn-success btn-block"><strong><?= $this->session->flashdata('success_info'); ?></strong></button>
			</div>
		</div>
		<?php elseif ($this->session->flashdata('error_info')): ?>
			<div class="form-row">
				<div class="col-md-4">
					<button type="button" class="btn btn-danger btn-block"><strong><?= $this->session->flashdata('error_info'); ?></strong></button>
				</div>
			</div>
		<?php endif ?>
		<br>
		<nav aria-label="breadcrumb" role="navigation">
	        <ol class="breadcrumb">
	            <li class="breadcrumb-item">Parola Güncelleme</li>
	        </ol>
	    </nav>
		<div class="form-row">
			<div class="form-group col-md-8">
				<label for="password">Parola</label>
       			<input type="password" class="form-control" name="password" id="password" aria-describedby="passwordHelp" placeholder="Kullanıcı için parola giriniz.">
				<small id="passwordHelp" class="form-text text-danger"><?= form_error('password', '<div class="error">', '</div>'); ?></small>
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-8">
				<label for="passwordconf">Parola Doğrulama</label>
       			<input type="password" class="form-control" name="passwordconf" id="passwordconf" aria-describedby="passwordconfHelp" placeholder="Parolayı tekrar giriniz.">
				<small id="passwordconfHelp" class="form-text text-danger"><?= form_error('passwordconf', '<div class="error">', '</div>'); ?></small>
			</div>
		</div>
		<?php if ($this->session->flashdata('success_password')): ?>
		<div class="form-row">
			<div class="col-md-4">
				<button type="button" class="btn btn-success btn-block"><strong><?= $this->session->flashdata('success_password'); ?></strong></button>
			</div>
		</div>
		<?php elseif ($this->session->flashdata('error_password')): ?>
			<div class="form-row">
				<div class="col-md-4">
					<button type="button" class="btn btn-danger btn-block"><strong><?= $this->session->flashdata('error_password'); ?></strong></button>
				</div>
			</div>
		<?php endif ?>
		<br>
		<div class="form-row">
			<div class="col-md-2">
				<a class="btn btn-primary btn-block" href="/admin/kullanicilar/<?= $user->id; ?>/detay" role="button">Geri</a>
			</div>
			<div class="col-md-2">
				<input class="btn btn-danger btn-block" type="submit" value="Kaydet">
			</div>
		</div>
	</form>
</div>
<?php $this->load->view('/panel/templates/footer'); ?>