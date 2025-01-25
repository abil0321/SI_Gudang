<?php $this->load->view('partials/sidebar'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">  
    <section class="content-header">  
        <h1>Master Kategori</h1>  
    </section>  
    <section class="content">  
        <div class="row">  
            <div class="col-md-12">  
                <div class="box">  
                    <div class="box-header">  
                        <h3 class="box-title">Data Kategori</h3>  
                        <div class="pull-right">  
                            <a href="<?php echo site_url('kategori/create') ?>" class="btn btn-primary">Tambah Kategori</a>  
                        </div>  
                    </div>  
                    <div class="box-body">  
                        <table class="table table-striped table-bordered" style="width:100%">  
                            <thead>  
                                <tr>  
                                    <th>ID</th>  
                                    <th>Kategori</th>  
                                    <th>Action</th>  
                                </tr>  
                            </thead>  
                            <tbody>  
                                <?php foreach ($kategoris as $kategori): ?>  
                                    <tr>  
                                        <td><?php echo $kategori->id ?></td>  
                                        <td><?php echo $kategori->kategori ?></td>  
                                        <td>  
                                            <a href="<?php echo site_url('kategori/edit/' . $kategori->id) ?>" class="btn btn-sm btn-primary">Edit</a>  
                                            <a href="<?php echo site_url('kategori/delete/' . $kategori->id) ?>" class="btn btn-sm btn-danger">Delete</a>  
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
<!-- /.content-wrapper -->
