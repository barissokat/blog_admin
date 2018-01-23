<?php $this->load->view('/panel/templates/header'); ?>
<?php $this->load->view('/panel/templates/navbar'); ?>
<?php $this->load->view('/panel/templates/sidebar'); ?>
<div class="container-fluid mt-4 mb-5">
	<h1>Edit Sayfası</h1>
    <nav aria-label="breadcrumb" role="navigation">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin/kategoriler">Listele</a></li>
            <li class="breadcrumb-item"><a href="/admin/kategoriler/olustur">Ekle</a></li>
        </ol>
    </nav>
	<?php echo form_open("admin/kategoriler/$category->id/guncelle"); ?>
		<div class="form-row">
	    	<input type="hidden" name="id" value="<?= $category->id; ?>">
		</div>
		<div class="form-row">
			<div class="form-group col-md-8">
				<label for="name">İsim</label>
       			<input type="text" class="form-control" name="name" id="name" aria-describedby="valueHelp" placeholder="Kategori için isim giriniz" value="<?= $category->name; ?>">
				<small id="valueHelp" class="form-text text-muted"><?= form_error('name', '<div class="error text-danger small text-danger small">', '</div>'); ?></small>
			</div>
		</div>
		<div class="form-row">
			<div class="col-md-2">
				<a class="btn btn-primary btn-block" href="/admin/kategoriler/<?= $category->id; ?>/detay" role="button">Geri</a>
			</div>
			<div class="col-md-2">
				<input class="btn btn-danger btn-block" type="submit" value="Kaydet">
			</div>
		</div>
	</form>
</div>
<?php $this->load->view('/panel/templates/footer'); ?>