<?php $this->load->view('/panel/templates/header'); ?>
<?php $this->load->view('/panel/templates/navbar'); ?>
<?php $this->load->view('/panel/templates/sidebar'); ?>
<div class="container-fluid mt-4 mb-5">
	<h1>Create Sayfası</h1>
    <nav aria-label="breadcrumb" role="navigation">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin/bloglar">Listele</a></li>
            <li class="breadcrumb-item"><a href="/admin/bloglar/olustur">Ekle</a></li>
        </ol>
    </nav>
	<?php echo form_open('admin/bloglar/olustur'); ?>
		<div class="form-group">
			<label for="category">Blog kategorisi</label>
			<select required class="form-control" id="category" name="category">
				<option value="">Seçiniz</option>
				<?php foreach ($category as $row) {
					echo '<option value="'.$row->id.'">'.$row->name.'</option>';
				} ?>
			</select>
			<small id="nameHelp" class="form-text text-danger"><?php echo form_error('category', '<div class="error">', '</div>'); ?></small>
		</div>
		<div class="form-group">
			<label for="title">Başlık</label>
			<input required type="text" class="form-control" id="title" name="title" aria-describedby="titleHelp" placeholder="Blog başlığı">
			<small id="titleHelp" class="form-text text-danger"><?php echo form_error('title', '<div class="error">', '</div>'); ?></small>
		</div>
		<div class="form-group">
			<label for="content">İçerik</label>
			<textarea required class="form-control w-100" id="content" name="content" aria-describedby="contentHelp" rows="7"></textarea>
			<small id="nameHelp" class="form-text text-danger"><?php echo form_error('content', '<div class="error">', '</div>'); ?></small>
		</div>
		<div class="form-row">
			<div class="col-md-2">
				<a class="btn btn-primary btn-block" href="/admin/bloglar" role="button">Geri</a>
			</div>
			<div class="col-md-2">
				<input class="btn btn-danger btn-block" type="submit" value="Oluştur">
			</div>
		</div>
	</form>
</div>
<?php $this->load->view('/panel/templates/footer'); ?>