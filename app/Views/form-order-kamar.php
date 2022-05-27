<?=$this->extend('Dashboard');?>
<?=$this->section('konten');?>

<div class="row">
	<div class="col-md-6">

    	<form method="POST" action="<?=site_url('/order');?>">

    	<div class="form-group">
        	<label class="font-weight-bold">Nama Pemesan</label>
        	<input class="form-control" type="text" name="txtNamaPemesan" autocomplete="off"/>
        	<input class="form-control" type="hidden" name="txtIdKamar" value="<?=(isset($detailkamar['id_kamar']) ? $detailkamar['id_kamar'] :null);?>" autocomplete="off"/>
    	</div>

    	<div class="form-group">
        	<label class="font-weight-bold">Nomor Handphone</label>
        	<input class="form-control" type="text" name="txtNoHandphone" autocomplete="off"/>
    	</div>

    	<div class="form-group">
        	<label class="font-weight-bold">Email</label>
        	<input class="form-control" type="email" name="txtEmail" autocomplete="off"/>
    	</div>

    	<div class="form-group">
        	<label class="font-weight-bold">Nama Tamu</label>
        	<input class="form-control" type="text" name="txtNamaTamu" autocomplete="off"/>
    	</div>

    	<div class="form-group">
        	<label class="font-weight-bold">Jml Kamar Dipesan</label>
        	<input class="form-control" type="text" name="txtJmlKamarDipesan" autocomplete="off"/>
    	</div>

    	<div class="form-group">
        	<label class="font-weight-bold">Tanggal Cek In</label>
        	<input class="form-control" type="date" name="txtTglCekIn" autocomplete="off"/>
    	</div>

    	<div class="form-group">
        	<label class="font-weight-bold">Tanggal Cek Out</label>
        	<input class="form-control" type="date" name="txtTglCekOut" autocomplete="off"/>
    	</div>

    	<div class="form-group">

        	<button type="submit" class="btn btn-primary btn-sm font-weight-bold">Simpan</button>
    	</div>

    	</form>
	</div>

	<div class="col-md-6">

   <?php if (isset($detailkamar)) { ?>
	<div class="card mb-4 shadow-sm">
  	<div class="card-header bg-info">
    	<h4 class="my-0 font-weight-normal"><?=ucwords($detailkamar['tipe_kamar']);?></h4>
  	</div>
  	<img src="<?=base_url('/uploads/'.$detailkamar['foto_kamar']);?>" class="card-img-top" style="height:250px">

  	<div class="card-body">
    	<h1 class="card-title pricing-card-title">Rp <?=number_format($detailkamar['harga_kamar'],0,',','.');?> <small class="text-muted">/ mlm</small></h1>
    	<ul class="list-unstyled mt-3 mb-4">
      	<li><?=$detailkamar['jml_kamar'];?> Kamar Tersedia</li>
   	 <li><b>Fasilitas Kamar</b> <br/>    
   			 <?php
                	$fasilitas=listFasilitasKamar($detailkamar['id_kamar']);
                	if(isset($fasilitas)){
                    	foreach($fasilitas as $rowFasilitas){
                        	echo '<div class="badge badge-info mr-1">
                        	'.$rowFasilitas['nama_fasilitas'].'</div>';
                    	}
                	}
   			 ?>
   			 <li>
    	</ul>
  	</div>
	</div>

	<?php } ?>           	 

	</div>
</div>

<?=$this->endSection();?>
