<?php $this->load->view('/panel/templates/header'); ?>
<?php $this->load->view('/panel/templates/navbar'); ?>
<?php $this->load->view('/panel/templates/sidebar'); ?>
<div class="container-fluid mt-4 mb-5">
	<h1>Show Sayfası</h1>
    <nav aria-label="breadcrumb" role="navigation">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin/kullanicilar">Listele</a></li>
            <li class="breadcrumb-item"><a href="/admin/kullanicilar/olustur">Ekle</a></li>
        </ol>
    </nav>
	<form>
		<div class="form-row">
	    	<input type="hidden" name="id" value="<?= $user->id; ?>">
		</div>
		<div class="form-row">
			<div class="form-group col-md-8">
				<label for="name">İsim</label>
       			<p class="form-control-static"><?= $user->name; ?></p>
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-8">
				<label for="value">Değer</label>
       			<p class="form-control-static"><?= $user->email; ?></p>
			</div>
		</div>
		<div class="form-row">
			<?php if($this->session->flashdata('validation')): ?>
				<div class="success text-success text-center"><strong><?php echo $this->session->flashdata('validation'); ?></strong></div>
			<?php endif; ?>
		</div>
		<div class="form-row">
			<div class="col-md-2">
				<a class="btn btn-primary btn-block" href="/admin/kullanicilar" role="button">Geri</a>
			</div>
			<div class="col-md-2">
				<a class="btn btn-primary btn-block" href="/admin/kullanicilar/<?= $user->id; ?>/duzenle" role="button">Düzenle</a>
			</div>
		</div>
	</form>
</div>
<?php $this->load->view('/panel/templates/footer'); ?>