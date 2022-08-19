<div class="row">
	<div class="col-12">
		<div class="block">
			<div class="block-header block-header-default">
				<h3 class="block-title">Info Pendaftaran Kursus Bahasa Pemrograman</h3>
			</div>
			<div class="block-content">
				&nbsp;&nbsp;&nbsp;
				<a type="button" href="<?=base_url()?>" data-toggle="modal" data-target="#tambah_info_kursus" class="btn btn-primary text-white">
					Tambah Kursus <i class="fa fa-plus opacity-25"></i>
				</a>
				<br><br>
				<table class="table table-vcenter">
					<thead>
					<tr>
						<th class="text-center" style="width: 50px;">No.</th>
						<th>Nama Kursus</th>
						<th>Keterangan Kursus</th>
						<th class="d-none d-sm-table-cell" style="width: 15%;">Tanggal Kursus</th>
						<th class="d-none d-sm-table-cell" style="width: 15%;">Status</th>
						<th class="d-none d-sm-table-cell" style="width: 15%;">Aksi</th>
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
									<span class="badge badge-success"><?=$info['status_kursus']?></span>
									<?php
								}
								else{
									?>
									<span class="badge badge-danger"><?=$info['status_kursus']?></span>
									<?php
								}
								?>
							</td>
							<td>
								<a href="<?=base_url('source/delete_kursus')?>?id=<?=$info['id_info']?>"><i class="fa fa-trash opacity-25 text-danger"></i></a>
								&nbsp;&nbsp;&nbsp;
								<a type="button" href="<?=base_url()?>" data-toggle="modal" data-target="#info_kursus<?= $info['id_info'] ?>">
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
<div class="modal fade" id="tambah_info_kursus" tabindex="-1" role="dialog" aria-labelledby="tambah_info_kursus" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-fromleft modal-dialog-popout" role="document">
		<div class="modal-content">
			<div class="block block-themed block-transparent mb-0">
				<div class="block-header bg-primary-dark">
					<h3 class="block-title">Kursus</h3>
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
									<h3 class="block-title"><b>Tambah Kursus</b></h3>
								</div>
								<div class="block-content">
									<form action="<?=base_url('source/tambah_kursus')?>" method="post">
										<div class="form-group">
											<label for="example-nf-nama_kursus">Nama Kursus</label>
											<input type="text" name="example-nf-nama_kursus" class="form-control" id="example-nf-nama_kursus">
										</div>
										<div class="form-group">
											<label for="example-nf-keterangan_kursus">Keterangan Kursus</label>
											<textarea type="text" name="example-nf-keterangan_kursus" class="form-control" id="example-nf-keterangan_kursus"></textarea>
										</div>
										<div class="form-group">
											<label for="example-nf-start">Mulai Kursus</label>
											<input type="date" name="example-nf-start" class="form-control" id="example-nf-start">
										</div>
										<div class="form-group">
											<label for="example-nf-end">Berakhir Kursus</label>
											<input type="date" name="example-nf-end" class="form-control" id="example-nf-end">
										</div>
										<div class="form-group">
											<label for="example-nf-status">Status Kursus</label>
											<select name="example-nf-status" class="form-control" id="example-nf-status">
												<option value="">Pilih Status Kursus</option>
												<option value="buka">buka</option>
												<option value="tutup">tutup</option>
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
<?php
$this->db->select("*");
$this->db->from("kursus_info");
$kursus = $this->db->get()->result_array();
foreach ($kursus as $detail) : ?>
	<div class="modal fade" id="info_kursus<?= $detail['id_info'] ?>" tabindex="0" role="dialog" aria-labelledby="info_kursus" aria-hidden="true">
		<div class="modal-dialog modal-lg modal-dialog-fromleft modal-dialog-popout" role="document">
			<div class="modal-content">
				<div class="block block-themed block-transparent mb-0">
					<div class="block-header bg-primary-dark">
						<h3 class="block-title">Kursus</h3>
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
										<h3 class="block-title"><b>Edit Kursus</b></h3>
									</div>
									<div class="block-content">
										<form action="<?=base_url('source/update_kursus')?>" method="post">
											<div class="form-group">
												<label for="example-nf-nama_kursus">Nama Kursus</label>
												<input type="hidden" name="example-nf-id_info" class="form-control" id="example-nf-id_info" value="<?= $detail['id_info'] ?>">
												<input type="text" name="example-nf-nama_kursus" class="form-control" id="example-nf-nama_kursus" value="<?= $detail['nama_kursus'] ?>">
											</div>
											<div class="form-group">
												<label for="example-nf-keterangan_kursus">Keterangan Kursus</label>
												<textarea type="text" name="example-nf-keterangan_kursus" class="form-control" id="example-nf-keterangan_kursus"><?= $detail['keterangan_kursus'] ?></textarea>
											</div>
											<div class="form-group">
												<label for="example-nf-start">Mulai Kursus</label>
												<input type="date" name="example-nf-start" class="form-control" id="example-nf-start" value="<?= $detail['mulai_kursus'] ?>">
											</div>
											<div class="form-group">
												<label for="example-nf-end">Berakhir Kursus</label>
												<input type="date" name="example-nf-end" class="form-control" id="example-nf-end" value="<?= $detail['berakhir_kursus'] ?>">
											</div>
											<div class="form-group">
												<label for="example-nf-status">Status Kursus</label>
												<select name="example-nf-status" class="form-control" id="example-nf-status">
													<option value="<?=$detail['status_kursus']?>"><?=$detail['status_kursus']?></option>
													<option value="buka">buka</option>
													<option value="tutup">tutup</option>
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
