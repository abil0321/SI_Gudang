<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar">
		<!-- Sidebar user panel -->
		<div class="user-panel">
			<div class="pull-left image">
				<img src="<?php echo base_url('assets/dist/img/user2-160x160.jpg') ?>" class="img-circle" alt="User Image">
			</div>
			<div class="pull-left info">
				<p>Data Gudang</p>
				<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
			</div>
		</div>
		<!-- search form -->
		<form class="sidebar-form">
			<div class="input-group">
				<input type="text" name="find" class="form-control" placeholder="Search...">
				<span class="input-group-btn">
					<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
					</button>
				</span>
			</div>
		</form>
		<!-- /.search form -->
		<!-- sidebar menu: : style can be found in sidebar.less -->
		<ul class="sidebar-menu" data-widget="tree">
			<li class="header">MAIN NAVIGATION</li>
			
			<li><a href="<?php echo site_url('barang') ?>"><i class="fa fa-book"></i> <span>Barang</span></a></li>
			<li><a href="<?php echo site_url('kategori') ?>"><i class="fa fa-book"></i> <span>Kategori</span></a></li>
		</ul>
	</section>
	<!-- /.sidebar -->
</aside>
