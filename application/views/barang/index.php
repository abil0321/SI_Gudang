<?php $this->load->view('partials/sidebar'); ?>
<div class="content-wrapper">  
    <section class="content-header">  
        <h1>Master Barang</h1>  
    </section>  
    <section class="content">  
        <div class="row">  
            <div class="col-md-12">  
                <div class="box">  
                    <div class="box-header">  
                        <h3 class="box-title">Data Barang</h3>  
                        <div class="pull-right">  
                            <a href="<?php echo site_url('barang/create') ?>" class="btn btn-primary">Tambah Barang</a>  
                        </div>  
                    </div>  
                    <div class="box-body">  
                        <table class="table table-striped table-bordered" style="width:100%">  
                            <thead>  
                                <tr>  
                                    <th>ID</th>  
                                    <th>Kategori</th>  
                                    <th>Barang</th>  
                                    <th>Stok</th>  
                                    <th>Action</th>  
                                </tr>  
                            </thead>  
                            <tbody>  
                                <?php foreach ($barangs as $key => $barang): ?>  
                                    <tr>  
                                        <td><?php echo $key + 1 ?></td>  
                                        <td><?php echo $barang->kategori ?></td>  
                                        <td><?php echo $barang->barang ?></td>  
                                        <td><?php echo $barang->stok ?></td>  
                                        <td>  
                                            <a href="<?php echo site_url('barang/edit/' . $barang->barang_id) ?>" class="btn btn-sm btn-primary">Edit</a>  
                                            <a href="<?php echo site_url('barang/delete/' . $barang->barang_id) ?>" class="btn btn-sm btn-danger">Delete</a>  
                                        </td>  
                                    </tr>  
                                <?php endforeach; ?>  
                            </tbody>  
                        </table>  
                    </div>  
                </div>  
            </div>  
        </div>  
    </section>  
</div>  

