<?php $this->load->view('/panel/templates/header'); ?>
<?php $this->load->view('/panel/templates/navbar'); ?>
<?php $this->load->view('/panel/templates/sidebar'); ?>
<div class="container-fluid mt-4 mb-5">
	<h1>Show Sayfası</h1>
    <nav aria-label="breadcrumb" role="navigation">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin/bloglar">Listele</a></li>
            <li class="breadcrumb-item"><a href="/admin/bloglar/olustur">Ekle</a></li>
        </ol>
    </nav>
	<form>
		<div class="form-row">
			<div class="form-group col-md-4">
				<label for="staticUser">Ekleyen</label>
       			<p class="form-control-static"><?= $blog->admin; ?></p>
			</div>
			<div class="form-group col-md-8">
				<label for="staticTitle">Kategori</label>
				<p class="form-control-static"><?= $blog->category; ?></p>
			</div>
		</div>
		<div class="form-group">
			<label for="staticTitle">Başlık</label>
       		<p class="form-control-static"><?= $blog->title; ?></p>
		</div>
		<div class="form-group">
			<label for="staticContent">İçerik</label>
			<textarea readonly class="form-control-plaintext w-100" id="staticContent" rows="15"><?= $blog->content; ?></textarea>
		</div>
		<div class="form-row">
			<div class="col-md-2">
				<a class="btn btn-primary btn-block" href="/admin/bloglar" role="button">Geri</a>
			</div>
			<div class="col-md-2">
				<a class="btn btn-primary btn-block" href="/admin/bloglar/<?= $blog->id; ?>/duzenle" role="button">Düzenle</a>
			</div>
		</div>
	</form>
</div>
<?php $this->load->view('/panel/templates/footer'); ?>