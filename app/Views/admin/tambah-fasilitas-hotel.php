<!-- memanggil isi file dashboard.php di folder view/admin -->
<?=$this->extend('admin/dashboard2');?>
<!-- area putih halaman dashboard -->
<?=$this->section('konten');?>

     <h1><?=$JudulHalaman;?></h1>
     <?=$introText;?>

    <form method="POST" action="<?=site_url('/tambah-fasilitas-hotel');?>"enctype="multipart/form-data">

    <div class="form-group">
         <label class="font-weight-bold">Nama Fasilitas</label>
         <input type="text" name="txtNamaFasilitas" class="form-control"/>
    </div>

    <div class="form-group">
         <label class="font-weight-bold">Deskripsi Fasilitas</label>
         <textarea class="form-control" name="txtDeskripsiFasilitas" row="5"></textarea>
    </div>

    <div class="form-group">
         <label class="font-weight-bold">Foto Fasilitas</label>
         <input type="file" name="txtFotoFasilitas" class="form-control"/>
    </div>

    <div class="form-group">
    <button class="btn btn-warning btn-sm" OnClick="javascipt:history.back()">Batal</button>
        <button class="btn btn-primary">Simpan Data</button>
    </div>
    

    </form>

<?=$this->endSection();?>s