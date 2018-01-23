<?php $this->load->view('/panel/templates/header'); ?>
<?php $this->load->view('/panel/templates/navbar'); ?>
<?php $this->load->view('/panel/templates/sidebar'); ?>
<div class="container-fluid mt-4 mb-5">
    <h1>Category Page</h1>
    <nav aria-label="breadcrumb" role="navigation">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin/kategoriler">Listele</a></li>
            <li class="breadcrumb-item"><a href="/admin/kategoriler/olustur">Ekle</a></li>
        </ol>
    </nav>
    <table id="category_table" class="table table-hover table-striped table-bordered dt-responsive nowrap" width="100%" cellspacing="0">
        <thead class="table-info">
            <tr>
                <th>İşlemler</th>
                <th>İsim</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($category as $row): ?>
            <tr>
                <td>
                    <a class="text-info" href="<?= site_url('/admin/kategoriler/'.$row->id.'/detay'); ?>" title="Detay"><i class="fas fa-info-circle"></i></a>
                     - 
                    <a class="text-success" href="<?= site_url('/admin/kategoriler/'.$row->id.'/duzenle'); ?>" title="Düzenle"><i class="fas fa-edit"></i></a>
                     - 
                    <a class="text-danger" href="<?= site_url('/admin/kategoriler/'.$row->id.'/sil'); ?>" title="Sil" onclick="return confirm('Kategoriyi silmek istediğinize emin misiniz?')" ><i class="fas fa-minus-circle"></i></a>
                </td>
                <td><?= $row->name;  ?></td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
<?php $this->load->view('/panel/templates/footer'); ?>