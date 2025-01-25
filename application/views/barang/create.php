<?php $this->load->view('partials/sidebar'); ?>
<div class="content-wrapper">  
    <section class="content-header">  
        <h1>Tambah Barang</h1>  
    </section>  
    <section class="content">  
        <div class="row">  
            <div class="col-md-12">  
                <div class="box">  
                    <div class="box-header">  
                        <h3 class="box-title">Form Tambah Barang</h3>  
                    </div>  
                    <div class="box-body">  
                        <?php echo form_open('barang/create'); ?>  
                            <div class="form-group">  
                                <label for="kategori_id">Kategori</label>  
                                <select name="kategori_id" class="form-control">  
                                    <option value="">--Pilih Kategori--</option>  
                                    <?php foreach ($kategoris as $kategori): ?>  
                                        <option value="<?php echo $kategori->id ?>"><?php echo $kategori->kategori ?></option>  
                                    <?php endforeach; ?>  
                                </select>  
                            </div>  
                            <div class="form-group">  
                                <label for="barang">Barang</label>  
                                <input type="text" class="form-control" id="barang" name="barang" placeholder="Masukkan nama barang">  
                            </div>  
                            <div class="form-group">  
                                <label for="stok">Stok</label>  
                                <input type="number" class="form-control" id="stok" name="stok" placeholder="Masukkan jumlah stok">  
                            </div>  
                            <button type="submit" class="btn btn-primary">Simpan</button>  
                            <a href="<?php echo site_url('barang') ?>" class="btn btn-danger">Batal</a>  
                        <?php echo form_close(); ?>  
                    </div>  
                </div>  
            </div>  
        </div>  
    </section>  
</div>  

