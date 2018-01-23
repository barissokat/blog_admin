<?php $this->load->view('/panel/templates/header'); ?>
<?php $this->load->view('/panel/templates/navbar'); ?>
<?php $this->load->view('/panel/templates/sidebar'); ?>
<div class="container-fluid mt-4 mb-5">
	<h1>Create Sayfası</h1>
    <nav aria-label="breadcrumb" role="navigation">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin/kullanicilar">Listele</a></li>
            <li class="breadcrumb-item"><a href="/admin/kullanicilar/olustur">Ekle</a></li>
        </ol>
    </nav>
	<?php echo form_open('admin/kullanicilar/olustur'); ?>
		<div class="form-row">
			<div class="form-group col-md-8">
				<label for="name">İsim</label>
				<input required type="text" class="form-control" name="name" aria-describedby="nameHelp" placeholder="Kullanıcı için isim giriniz" value="<?php echo set_value('name'); ?>">
				<small id="nameHelp" class="form-text text-danger"><?php echo form_error('name', '<div class="error">', '</div>'); ?></small>
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-8">
				<label for="value">Email</label>
				<input required type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Kullanıcı için eposta giriniz" value="<?php echo set_value('email'); ?>">
				<small id="emailHelp" class="form-text text-danger"><?php echo form_error('email', '<div class="error">', '</div>'); ?></small>
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-8">
				<label for="value">Parola</label>
				<input required type="password" class="form-control" name="password" aria-describedby="passwordHelp" placeholder="Kullanıcı için şifre giriniz">
				<small id="passwordHelp" class="form-text text-danger"><?php echo form_error('password', '<div class="error">', '</div>'); ?></small>
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-8">
				<label for="passwordconf">Parola Doğrulama</label>
       			<input required type="password" class="form-control" name="passwordconf" aria-describedby="passwordconfHelp" placeholder="Parolayı tekrar giriniz.">
				<small id="passwordconfHelp" class="form-text text-danger"><?= form_error('passwordconf', '<div class="error">', '</div>'); ?></small>
			</div>
		</div>
		<div class="form-row">
			<div class="col-md-2">
				<a class="btn btn-primary btn-block" href="/admin/kullanicilar" role="button">Geri</a>
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