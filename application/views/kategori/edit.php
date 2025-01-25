
<div class="content-wrapper">  
    <section class="content-header">  
        <h1>Edit Kategori</h1>  
    </section>  
    <section class="content">  
        <div class="row">  
            <div class="col-md-12">  
                <div class="box">  
                    <div class="box-header">  
                        <h3 class="box-title">Form Edit Kategori</h3>  
                    </div>  
                    <div class="box-body">  
                        <?php echo form_open('kategori/edit/' . $kategori->id); ?>  
                            <div class="form-group">  
                                <label for="kategori">Kategori</label>  
                                <input type="text" class="form-control" id="kategori" name="kategori" value="<?php echo $kategori->kategori ?>" placeholder="Masukkan nama kategori">  
                            </div>  
                            <button type="submit" class="btn btn-primary">Simpan</button>  
                            <a href="<?php echo site_url('kategori') ?>" class="btn btn-danger">Batal</a>  
                        <?php echo form_close(); ?>  
                    </div>  
                </div>  
            </div>  
        </div>  
    </section>  
</div>  

