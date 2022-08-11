<main id="main-container">

	<!-- Page Content -->
	<div class="content">
		<h2 class="content-heading">Kursus Anda</h2>
		<div class="row">
			<div class="col-12">
				<div class="block">
					<div class="block-header block-header-default">
						<h3 class="block-title">Tabel Kursus</h3>
					</div>
					<div class="block-content">
						<table class="table table-vcenter">
							<thead>
							<tr>
								<th class="text-center" style="width: 50px;">No.</th>
								<th>Nama</th>
								<th>NPM</th>
								<th>Kelas</th>
								<th>Berkas</th>
								<th>Nama Kursus</th>
								<th>Status Kursus</th>
							</tr>
							</thead>
							<tbody>
							<?php
							$no = 1;
							$this->db->select("*");
							$this->db->from("kursus_mahasiswa");
							$kursus = $this->db->get()->result_array();
							foreach ($kursus as $info): ?>
								<tr>
									<th class="text-center" scope="row"><?=$no++?></th>
									<td><?=$info['nama']?></td>
									<td><?=$info['npm']?></td>
									<td><?=$info['kelas']?></td>
									<td><a href="<?=base_url()?>upload/krs/<?=$info['berkas_krs']?>" target="_blank"><?=$info['berkas_krs']?></a></td>
									<td><?=$info['nama_kursus']?></td>
									<td class="d-none d-sm-table-cell">
										<?php
										if ($info['status_kursus'] == 'verifikasi'){
											?>
											<span class="badge badge-success">Sudah Diverifikasi</span>
											<?php
										}
										else{
											?>
											<span class="badge badge-danger">Belum Diverifikasi</span>
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
		</div>
		<!-- Progress Wizards -->
		<h2 class="content-heading">Daftar Kursus</h2>
		<div class="row">
			<div class="col-md-12">
				<!-- Progress Wizard -->
				<div class="js-wizard-simple block">
					<!-- Step Tabs -->
					<ul class="nav nav-tabs nav-tabs-block nav-fill" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" href="#wizard-progress-step1" data-toggle="tab">1. Info Mahasiswa</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#wizard-progress-step2" data-toggle="tab">2. Upload Persyaratan</a>
						</li>
					</ul>
					<!-- END Step Tabs -->

					<!-- Form -->
					<!-- <form action="" method="post"> -->
					<?php echo form_open_multipart('source/daftar_kursus');?>
					<!-- Wizard Progress Bar -->
					<div class="block-content block-content-sm">
						<div class="progress" data-wizard="progress" style="height: 8px;">
							<div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
					</div>
					<!-- END Wizard Progress Bar -->

					<!-- Steps Content -->
					<div class="block-content block-content-full tab-content" style="min-height: 265px;">
						<!-- Step 1 -->
						<div class="tab-pane active" id="wizard-progress-step1" role="tabpanel">
							<div class="form-group">
								<label for="wizard-progress-info-kursus">Jenis Kursus</label>
								<select class="js-select2 form-control" id="wizard-progress-info-kursus" name="wizard-progress-info-kursus" size="1">
									<option value="">Pilih Kursus</option>
									<?php
									$this->db->select('*');
									$this->db->from('kursus_info');
									$kursus = $this->db->get()->result_array();
									foreach ($kursus as $detail):
										?>
										<option value="<?=$detail['nama_kursus']?>"><?=$detail['nama_kursus']?></option>
									<?php endforeach?>
								</select>
							</div>
							<div class="form-group">
								<label for="wizard-progress-info-nama">Nama</label>
								<input class="form-control" type="text" id="wizard-progress-info-nama" name="wizard-progress-info-nama" value="<?=$this->auth_libs->user_login()->nama?>">
							</div>
							<div class="form-group">
								<label for="wizard-progress-jenis-npm">NPM</label>
								<input class="form-control" type="text" id="wizard-progress-jenis-npm" name="wizard-progress-jenis-npm" value="<?=$this->auth_libs->user_login()->npm?>">
							</div>
							<div class="form-group">
								<label for="wizard-progress-jenis-kelas">Kelas</label>
								<input class="form-control" type="text" id="wizard-progress-jenis-kelas" name="wizard-progress-jenis-kelas">
							</div>
						</div>
						<!-- END Step 1 -->

						<!-- Step 2 -->
						<div class="tab-pane" id="wizard-progress-step2" role="tabpanel">
							<span class="text-danger">jpg | png | pdf maks 2mb</span>
							<br><br>
							<div class="form-group">
								<label class="col-12" for="example-file-input-krs">KRS</label>
								<div class="col-12">
									<img src="#" id="krsIMG">
									<input type="file" id="example-file-input-krs" name="example-file-input-krs" onchange="krsURL(this);">
									<script type="text/javascript">
										function krsURL(input) {
											if (input.files && input.files[0]) {
												var reader = new FileReader();

												reader.onload = function (e) {
													$('#krsIMG').attr('src', e.target.result);
												}

												reader.readAsDataURL(input.files[0]);
											}
										}
									</script>
								</div>
							</div>
						</div>
						<!-- END Step 2 -->
					</div>
					<!-- END Steps Content -->

					<!-- Steps Navigation -->
					<div class="block-content block-content-sm block-content-full bg-body-light">
						<div class="row">
							<div class="col-6">
								<button type="button" class="btn btn-alt-secondary" data-wizard="prev">
									<i class="fa fa-angle-left mr-5"></i> Previous
								</button>
							</div>
							<div class="col-6 text-right">
								<button type="button" class="btn btn-alt-secondary" data-wizard="next">
									Next <i class="fa fa-angle-right ml-5"></i>
								</button>
								<button type="submit" class="btn btn-alt-primary d-none" data-wizard="finish">
									<i class="fa fa-check mr-5"></i> Submit
								</button>
							</div>
						</div>
					</div>
					<!-- END Steps Navigation -->
					</form>
					<!-- END Form -->
				</div>
				<!-- END Progress Wizard -->
			</div>
		</div>
	</div>
</main>
