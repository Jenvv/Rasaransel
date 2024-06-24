 <style>
 	.name-container {
 		display: flex;
 		align-items: center;
 		place-content: center;
 	}

 	.edit-icon {
 		margin-left: 8px;
 	}
 </style>
 <main class="content">
 	<div class="container-fluid p-0">
 		<h1 class="h3 mb-3">Profil</h1>
 		<div class="row">
 			<div class="col-md-4 col-xl-3">
 				<div class="card mb-3">
 					<div class="card-header">
 						<h5 class="card-title mb-0">Detail Profil</h5>
 					</div>
 					<div class="card-body text-center">
 						<img src="<?= base_url('asset/fotoprofil/' . $users->photo) ?>" alt="<?= $users->nama ?>" class="img-fluid rounded-circle mb-2" width="128" height="128" />
 						<div class="name-container">
 							<h5 class="card-title mb-0"><?= $users->nama ?></h5>
 							<a href="<?= base_url('admin/cSetting/') ?>" data-toggle="tooltip" title="Ubah">
 								<span data-feather="edit" class="feather-sm edit-icon"></span>
 							</a>
 						</div>
 						<div class="text-muted mb-2"><?= $users->deskripsi ?></div>

 						<!-- <div>
		    							<a class="btn btn-primary btn-sm" href="#">Follow</a>
		    							<a class="btn btn-primary btn-sm" href="#"><span data-feather="message-square"></span> Message</a>
		    						</div> -->
 					</div>
 					<!-- <hr class="my-0" />
		    					<div class="card-body">
		    						<h5 class="h6 card-title">Skills</h5>
		    						<a href="#" class="badge badge-primary mr-1 my-1">HTML</a>
		    						<a href="#" class="badge badge-primary mr-1 my-1">JavaScript</a>
		    						<a href="#" class="badge badge-primary mr-1 my-1">Sass</a>
		    						<a href="#" class="badge badge-primary mr-1 my-1">Angular</a>
		    						<a href="#" class="badge badge-primary mr-1 my-1">Vue</a>
		    						<a href="#" class="badge badge-primary mr-1 my-1">React</a>
		    						<a href="#" class="badge badge-primary mr-1 my-1">Redux</a>
		    						<a href="#" class="badge badge-primary mr-1 my-1">UI</a>
		    						<a href="#" class="badge badge-primary mr-1 my-1">UX</a>
		    					</div> -->
 					<hr class="my-0" />
 					<div class="card-body">
 						<h5 class="h6 card-title">Tentang</h5>
 						<ul class="list-unstyled mb-0">
 							<li class="mb-1"><span data-feather="map-pin" class="feather-sm mr-1"></span><?= $users->alamat ?></li>
 							<li class="mb-1"><span data-feather="clock" class="feather-sm mr-1"></span>Bergabung Sejak <br>&ensp; &ensp; <span style="color: #A92828;"><?= time_since($users->created_at) ?></span></li>
 							<li class="mb-1"><span data-feather="shopping-bag" class="feather-sm mr-1"></span>Produk <span style="color: #A92828;"><?= count($produk) ?> </span> </li>
 						</ul>
 					</div>
 					<hr class="my-0" />
 					<div class="card-body">
 						<h5 class="h6 card-title">Media Sosial</h5>
 						<ul class="list-unstyled mb-0">
 							<li class="mb-1"><i class="align-middle mr-2" data-feather="twitter"></i> <a href="#">Twitter</a></li>
 							<li class="mb-1"><i class="align-middle mr-2" data-feather="facebook"></i> <a href="#">Facebook</a></li>
 							<li class="mb-1"><i class="align-middle mr-2" data-feather="instagram"></i> <a href="#">Instagram</a></li>
 						</ul>
 					</div>
 				</div>
 			</div>
 			<div class="col-md-8 col-xl-9">
 				<div class="card">
 					<div class="card-header">
 						<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
 							<li class="nav-item">
 								<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Home</a>
 							</li>
 							<?php foreach ($kategori as $key => $value) {
								?>
 								<li class="nav-item">
 									<a class="nav-link " id="pills-<?= str_replace(' ', '_', $value->kategori) ?>-tab" data-toggle="pill" href="#pills-<?= str_replace(' ', '_', $value->kategori) ?>" role="tab" aria-controls="pills-<?= str_replace(' ', '_', $value->kategori) ?>" aria-selected="false"><?= ucfirst(strtolower($value->kategori)) ?></a>
 								</li>
 							<?php } ?>
 							<!-- <li class="nav-item">
								<a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</a>
							</li> -->
 						</ul>
 					</div>
 					<div class="card-body h-50">
 						<hr />
 						<div class="tab-content" id="pills-tabContent">
 							<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
 								<div class="media">
 									<div class="media-body">
 										<div class="row no-gutters mt-1">
 											<?php foreach ($produk as $key => $value) { ?>
 												<div class="col-6 col-md-4 col-lg-4 col-xl-3">
 													<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom">
 														<img src="<?= base_url('asset/foto-produk/' . $value->foto) ?>" class="card-img-top pr-2" style="height: 100px; object-fit: cover; object-position: center center;" alt="Produk">
 													</div>
 													<button type="button" class="btn btn-sm btn-danger mt-1 mb-3" data-toggle="modal" data-target="#modal-<?= $value->id_produk ?>">
 														Detail
 													</button>
 												</div>
 												<!-- Modal -->
 												<div class="modal fade" id="modal-<?= $value->id_produk ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-<?= $value->id_produk ?>" aria-hidden="true">
 													<div class="modal-dialog" role="document">
 														<div class="modal-content">
 															<div class="modal-header">
 																<h5 class="modal-title" id="exampleModalLabel-<?= $value->id_produk ?>">Detail Produk</h5>
 																<button type="button" class="close" data-dismiss="modal" aria-label="Close">
 																	<span aria-hidden="true">&times;</span>
 																</button>
 															</div>
 															<div class="modal-body">
 																<div class="card">
 																	<img class="card-img-top" src="<?= base_url('asset/foto-produk/' . $value->foto) ?>" style="width: 50%;align-self:center;" alt="Produk">
 																	<div class="card-header">


 																		<h4 class="card-title mb-0"><strong><?= $value->nama_produk ?></strong></h4>
 																		<p class="card-text">Rp.<?= number_format($value->harga, 0) ?></p>
 																	</div>
 																	<div class="card-body">
 																		<p class="card-text"><?= $value->deskripsi ?></p>
 																	</div>
 																</div>
 															</div>
 															<div class="modal-footer">
 																<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
 																<a href="<?= base_url('admin/cproduk/update/' . $value->id_produk) ?>" class="btn btn-warning">Edit Produk</a>

 															</div>
 														</div>
 													</div>
 												</div>
 											<?php } ?>
 										</div>
 									</div>
 								</div>
 							</div>
 							<?php foreach ($kategori as $kategori_key => $kategori_value) { ?>
 								<div class="tab-pane fade" id="pills-<?= str_replace(' ', '_', $kategori_value->kategori) ?>" role="tabpanel" aria-labelledby="pills-<?= str_replace(' ', '_', $kategori_value->kategori) ?>-tab">
 									<div class="media">
 										<div class="media-body">
 											<div class="row no-gutters mt-1">
 												<?php foreach ($produk as $produk_key => $produk_value) { ?>
 													<?php if ($produk_value->id_kategori == $kategori_value->id_kategori) { ?>
 														<div class="col-6 col-md-4 col-lg-4 col-xl-3">
 															<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom">
 																<img src="<?= base_url('asset/foto-produk/' . $produk_value->foto) ?>" class="card-img-top pr-2" style="height: 100px; object-fit: cover; object-position: center center;" alt="Produk">
 															</div>
 															<button type="button" class="btn btn-sm btn-danger mt-1 mb-3" data-toggle="modal" data-target="#modal-<?= $produk_value->id_produk ?>">
 																Detail
 															</button>
 														</div>
 													<?php } ?>
 												<?php } ?>
 											</div>
 										</div>
 									</div>
 								</div>
 							<?php } ?>
 						</div>
 						<hr />
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>
 </main>