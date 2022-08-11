<!-- Main Container -->
<main id="main-container" style="min-height: 718px;">

	<!-- Page Content -->
	<div class="content">
		<div class="row">
			<div class="col-12">
				<div class="block">
					<div class="block-header block-header-default">
						<h3 class="block-title">Info Pendaftaran Kursus Bahasa Pemrograman</h3>
					</div>
					<div class="block-content">
						<table class="table table-vcenter">
							<thead>
								<tr>
									<th class="text-center" style="width: 50px;">No.</th>
									<th>Nama Kursus</th>
									<th>Keterangan Kursus</th>
									<th class="d-none d-sm-table-cell" style="width: 15%;">Tanggal Kursus</th>
									<th class="d-none d-sm-table-cell" style="width: 15%;">Status</th>
								</tr>
							</thead>
							<tbody>
							<?php
							$no = 1;
							$this->db->select("*");
							$this->db->from("kursus_info");
							$kursus = $this->db->get()->result_array();
							foreach ($kursus as $info): ?>
								<tr>
									<th class="text-center" scope="row"><?=$no++?></th>
									<td><?=$info['nama_kursus']?></td>
									<td><?=$info['keterangan_kursus']?></td>
									<td class="d-none d-sm-table-cell">
										<span><?=$info['mulai_kursus']?> - <?=$info['berakhir_kursus']?></span>
									</td>
									<td class="d-none d-sm-table-cell">
										<?php
										if ($info['status_kursus'] == 'buka'){
											?>
											<span class="badge badge-success">Buka</span>
											<?php
										}
										else{
											?>
											<span class="badge badge-danger">Tutup</span>
											<?php
										}
										?>
									</td>
								</tr>
							<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="col-12">
				<div class="text-center">
					<!-- Menu -->
					<a href="<?=base_url('source/login')?>" class="btn btn-primary ml-5">
						<span class="d-none d-sm-inline">Daftar Kursus</span>
					</a>
					<!-- END Menu -->
				</div>
			</div>
		</div>

	</div>
	<!-- END Page Content -->

</main>
<!-- END Main Container -->
