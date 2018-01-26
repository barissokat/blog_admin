<?php $this->load->view('/panel/templates/header'); ?>
<?php $this->load->view('/panel/templates/navbar'); ?>
<?php $this->load->view('/panel/templates/sidebar'); ?>
<div class="container-fluid mt-4 mb-5">
    <h1>Blog Page</h1>
    <nav aria-label="breadcrumb" role="navigation">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin/bloglar">Listele</a></li>
            <li class="breadcrumb-item"><a href="/admin/bloglar/olustur">Ekle</a></li>
        </ol>
    </nav>
    <table id="blog_table" class="table table-hover table-striped table-bordered dt-responsive nowrap" width="100%" cellspacing="0">
        <thead class="table-info">
            <tr>
                <th>İşlemler</th>
                <th>Ekleyen</th>
                <th>Başlık</th>
                <th>Kategori</th>
                <th>İçerik</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($blog as $row): ?>
            <tr>
                <td>
                    <a class="text-info" href="<?= site_url('/admin/bloglar/'.$row->id.'/detay'); ?>" title="Detay"><i class="fas fa-info-circle"></i></a>
                     - 
                    <a class="text-success" href="<?= site_url('/admin/bloglar/'.$row->id.'/duzenle'); ?>" title="Düzenle"><i class="fas fa-edit"></i></a>
                     - 
                    <a class="text-danger" href="<?= site_url('/admin/bloglar/'.$row->id.'/sil'); ?>" title="Sil" onclick="return confirm('Ayarı silmek istediğinize emin misiniz?')" ><i class="fas fa-minus-circle"></i></a>
                </td>
                <td><?= $row->admin;  ?></td>
                <td><?= $row->title;  ?></td>
                <td><?= $row->category;  ?></td>
                <td><?= word_limiter($row->content, 10);  ?></td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
<?php $this->load->view('/panel/templates/footer'); ?>