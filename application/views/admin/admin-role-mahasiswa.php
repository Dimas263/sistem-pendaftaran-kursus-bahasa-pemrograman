<div class="row">
	<div class="col-12">
		<div class="block">
			<div class="block-header block-header-default">
				<h3 class="block-title">Daftar Mahasiswa yang mengikuti Kursus</h3>
			</div>
			<div class="block-content">
				&nbsp;&nbsp;&nbsp;
				<a type="button" href="<?=base_url()?>" data-toggle="modal" data-target="#tambah_data_mahasiswa" class="btn btn-primary text-white">
					Tambah Mahasiswa <i class="fa fa-plus opacity-25"></i>
				</a>
				<br><br>
				<table class="table table-vcenter">
					<thead>
					<tr>
						<th class="text-center" style="width: 50px;">No.</th>
						<th>Nama</th>
						<th>NPM</th>
						<th>Kelas</th>
						<th>Berkas</th>
						<th class="d-none d-sm-table-cell" style="width: 15%;">Nama Kursus</th>
						<th class="d-none d-sm-table-cell" style="width: 15%;">Status</th>
						<th class="d-none d-sm-table-cell" style="width: 15%;">Aksi</th>
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
							<td class="d-none d-sm-table-cell">
								<span><?=$info['nama_kursus']?></span>
							</td>
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
							<td>
								<a href="<?=base_url('source/delete_mahasiswa')?>?id=<?=$info['id_mahasiswa']?>"><i class="fa fa-trash opacity-25 text-danger"></i></a>
								&nbsp;&nbsp;&nbsp;
								<a type="button" href="<?=base_url()?>" data-toggle="modal" data-target="#info_mahasiswa<?= $info['npm'] ?>">
									<i class="fa fa-pencil opacity-25 text-success"></i>
								</a>
							</td>
						</tr>
					<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<?php
$this->db->select("*");
$this->db->from("kursus_mahasiswa");
$kursus = $this->db->get()->result_array();
foreach ($kursus as $detail) : ?>
	<div class="modal fade" id="info_mahasiswa<?= $info['npm'] ?>" tabindex="0" role="dialog" aria-labelledby="info_mahasiswa" aria-hidden="true">
		<div class="modal-dialog modal-lg modal-dialog-fromleft modal-dialog-popout" role="document">
			<div class="modal-content">
				<div class="block block-themed block-transparent mb-0">
					<div class="block-header bg-primary-dark">
						<h3 class="block-title">Mahasiswa</h3>
						<div class="block-options">
							<button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
								<i class="si si-close"></i>
							</button>
						</div>
					</div>
					<div class="block-content">
						<div class="row">
							<div class="col-md-12">
								<div class="block block-content">
									<div class="block-header block-header-default">
										<h3 class="block-title"><b>Edit Data Mahasiswa</b></h3>
									</div>
									<div class="block-content">
										<form action="<?=base_url('source/update_mahasiswa')?>" method="post">
											<div class="form-group">
												<label for="example-nf-nama">Nama</label>
												<input type="hidden" name="example-nf-id_mhs" class="form-control" id="example-nf-id_mhs" value="<?= $detail['id_mahasiswa'] ?>">
												<input type="text" name="example-nf-nama" class="form-control" id="example-nf-nama" value="<?= $detail['nama'] ?>">
											</div>
											<div class="form-group">
												<label for="example-nf-npm">NPM</label>
												<input type="text" name="example-nf-npm" class="form-control" id="example-nf-npm" value="<?= $detail['npm'] ?>">
											</div>
											<div class="form-group">
												<label for="example-nf-kelas">Kelas</label>
												<input type="text" name="example-nf-kelas" class="form-control" id="example-nf-kelas" value="<?= $detail['kelas'] ?>">
											</div>
											<div class="form-group">
												<label for="example-nf-nama-kursus">Nama Kursus</label>
												<input type="text" name="example-nf-nama-kursus" class="form-control" id="example-nf-nama-kursus" value="<?= $detail['nama_kursus'] ?>">
											</div>
											<div class="form-group">
												<label for="example-nf-status">Status Kursus</label>
												<select name="example-nf-status" class="form-control" id="example-nf-status">
													<option value="<?=$detail['status_kursus']?>"><?=$detail['status_kursus']?></option>
													<option value="verifikasi">Sudah Diverifikasi</option>
													<option value="unverifikasi">Belum Diverifikasi</option>
												</select>
											</div>
											<div class="form-group">
												<button type="submit" name="submit" class="block-content block-content-full block-content-sm btn btn-alt-primary">Submit</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
<?php endforeach ?>
<div class="modal fade" id="tambah_data_mahasiswa" tabindex="-1" role="dialog" aria-labelledby="tambah_data_mahasiswa" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-fromleft modal-dialog-popou" role="document">
		<div class="modal-content">
			<div class="block block-themed block-transparent mb-0">
				<div class="block-header bg-primary-dark">
					<h3 class="block-title">Mahasiswa</h3>
					<div class="block-options">
						<button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
							<i class="si si-close"></i>
						</button>
					</div>
				</div>
				<div class="block-content">
					<div class="row">
						<div class="col-md-12">
							<div class="block block-content">
								<div class="block-header block-header-default">
									<h3 class="block-title"><b>Tambah Mahasiswa</b></h3>
								</div>
								<div class="block-content">
									<?php echo form_open_multipart('source/tambah_mahasiswa');?>
										<div class="form-group">
											<label for="example-nf-nama">Nama</label>
											<input type="hidden" name="example-nf-id_mhs" class="form-control" id="example-nf-id_mhs" placeholder="masukan id...">
											<input type="text" name="example-nf-nama" class="form-control" id="example-nf-nama" placeholder="masukan nama..."">
										</div>
										<div class="form-group">
											<label for="example-nf-npm">NPM</label>
											<input type="text" name="example-nf-npm" class="form-control" id="example-nf-npm" placeholder="masukan npm...">
										</div>
										<div class="form-group">
											<label for="example-nf-kelas">Kelas</label>
											<input type="text" name="example-nf-kelas" class="form-control" id="example-nf-kelas" placeholder="masukan kelas..">
										</div>
										<div class="form-group">
											<label for="wizard-progress-info-kursus">Jenis Kursus</label>
											<select class="js-select2 form-control" id="example-nf-nama-kursus" name="example-nf-nama-kursus" size="1">
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
											<label class="col-12" for="example-file-input-krs">KRS <span class="text-danger">jpg | png | pdf maks 2mb</span></label>
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
										<div class="form-group">
											<label for="example-nf-status">Status Kursus</label>
											<select name="example-nf-status" class="form-control" id="example-nf-status">
												<option value="">Pilih Status</option>
												<option value="verifikasi">Sudah Diverifikasi</option>
												<option value="unverifikasi">Belum Diverifikasi</option>
											</select>
										</div>
										<div class="form-group">
											<button type="submit" name="submit" class="block-content block-content-full block-content-sm btn btn-alt-primary">Submit</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
