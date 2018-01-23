<?php $this->load->view('/panel/templates/header'); ?>
<?php $this->load->view('/panel/templates/navbar'); ?>
<?php $this->load->view('/panel/templates/sidebar'); ?>
<div class="container-fluid mt-4 mb-5">
	<h1>İndex Sayfası</h1>
    <nav aria-label="breadcrumb" role="navigation">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin/kullanicilar">Listele</a></li>
            <li class="breadcrumb-item"><a href="/admin/kullanicilar/olustur">Ekle</a></li>
        </ol>
    </nav>
	<table id="user_table" class="table table-hover table-striped table-bordered dt-responsive nowrap" width="100%" cellspacing="0">
		<thead class="table-info">
			<tr>
				<th>İşlemler</th>
				<th>İsim</th>
				<th>Email</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($user as $row): ?>
			<tr>
				<td>
					<a class="text-info" href="<?= site_url('/admin/kullanicilar/'.$row->id.'/detay'); ?>" title="Detay"><i class="fas fa-info-circle"></i></a>
					 - 
					<a class="text-success" href="<?= site_url('/admin/kullanicilar/'.$row->id.'/duzenle'); ?>" title="Düzenle"><i class="fas fa-edit"></i></a>
					 - 
					<a class="text-danger" href="<?= site_url('/admin/kullanicilar/'.$row->id.'/sil'); ?>" title="Sil" onclick="return confirm('Kullanıcıyı silmek istediğinize emin misiniz?')" ><i class="fas fa-minus-circle"></i></a>
				</td>
				<td><?= $row->name;  ?></td>
				<td><?= $row->email;  ?></td>
			</tr>
			<?php endforeach ?>
		</tbody>
	</table>
</div>
<?php $this->load->view('/panel/templates/footer'); ?>