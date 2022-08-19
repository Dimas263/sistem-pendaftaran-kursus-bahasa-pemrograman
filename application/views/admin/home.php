<?php
$Role = ucfirst($this->auth_libs->user_login()->role);
if ($Role == 'Admin'){
	?>
	<div align="center">
		<br><br><br>
		<div class="content">
			<div class="col-md-6">
				<a class="block block-link-shadow overflow-hidden" href="<?=base_url('source/admin_kursus')?>">
					<div class="block-content block-content-full">
						<div class="text-right">
							<i class="si si-book-open fa-2x text-body-bg-dark"></i>
						</div>
						<div class="row py-20">
							<div class="col-6 text-right border-r">
								<div class="js-appear-enabled animated fadeInLeft" data-toggle="appear" data-class="animated fadeInLeft">
									<div class="font-size-sm font-w600 text-primary">Menu</div>
									<div class="font-size-h3 font-w600 text-uppercase text-muted">Kursus</div>
								</div>
							</div>
							<div class="col-6">
								<div class="js-appear-enabled animated fadeInRight" data-toggle="appear" data-class="animated fadeInRight">
									<div class="font-size-h3 font-w600"><?php
										$query = $this->db->get('kursus_info');
										echo $query->num_rows();
										?>
									</div>
									<div class="font-size-sm font-w600 text-uppercase text-muted">Data</div>
								</div>
							</div>
						</div>
					</div>
				</a>
			</div>
		</div>
		<div class="content">
			<div class="col-md-6">
				<a class="block block-link-shadow overflow-hidden" href="<?=base_url('source/admin_mahasiswa')?>">
					<div class="block-content block-content-full">
						<div class="text-right">
							<i class="si si-users fa-2x text-body-bg-dark"></i>
						</div>
						<div class="row py-20">
							<div class="col-6 text-right border-r">
								<div class="js-appear-enabled animated fadeInLeft" data-toggle="appear" data-class="animated fadeInLeft">
									<div class="font-size-sm font-w600 text-primary">Menu</div>
									<div class="font-size-h3 font-w600 text-uppercase text-muted">Mahasiswa</div>
								</div>
							</div>
							<div class="col-6">
								<div class="js-appear-enabled animated fadeInRight" data-toggle="appear" data-class="animated fadeInRight">
									<div class="font-size-h3 font-w600"><?php
										$query = $this->db->get('kursus_mahasiswa');
										echo $query->num_rows();
										?>
									</div>
									<div class="font-size-sm font-w600 text-uppercase text-muted">Data</div>
								</div>
							</div>
						</div>
					</div>
				</a>
			</div>
		</div>
	</div>
	<?php
}
elseif ($Role == 'Mahasiswa'){
	redirect(base_url('source/kursus'));
}
else{
	echo "Hidden";
}
?>
