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
		    						<img src="<?= base_url('asset/fotoprofil/' . $users->photo) ?>" alt="Christina Mason" class="img-fluid rounded-circle mb-2" width="128" height="128" />
		    						<h5 class="card-title mb-0"><?= $users->nama ?></h5>
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
		    							<li class="mb-1"><span data-feather="map-pin" class="feather-sm mr-1"></span> <?= $users->alamat ?></li>
		    							<li class="mb-1"><span data-feather="clock" class="feather-sm mr-1"></span> Bergabung Sejak <?= time_since($users->created_at) ?></li>

		    							<!-- <li class="mb-1"><span data-feather="briefcase" class="feather-sm mr-1"></span> Works at <a href="#">GitHub</a></li> -->
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

		    						<h5 class="card-title mb-0">Aktivitas</h5>
		    					</div>
		    					<div class="card-body h-100">

		    						<div class="media">
		    							<img src="<?= base_url('asset/fotoprofil/' . $users->photo) ?>" width="36" height="36" class="rounded-circle mr-2" alt="Vanessa Tucker">
		    							<div class="media-body">
		    								<small class="float-right text-navy">5m ago</small>
		    								<strong>Vanessa Tucker</strong> started following <strong>Christina Mason</strong><br />
		    								<small class="text-muted">Today 7:51 pm</small><br />

		    							</div>
		    						</div>

		    						<hr />
		    						<div class="media">
		    							<img src="<?= base_url('asset/fotoprofil/' . $users->photo) ?>" width="36" height="36" class="rounded-circle mr-2" alt="Charles Hall">
		    							<div class="media-body">
		    								<small class="float-right text-navy">30m ago</small>
		    								<strong>Charles Hall</strong> posted something on <strong>Christina Mason</strong>'s timeline<br />
		    								<small class="text-muted">Today 7:21 pm</small>

		    								<div class="border text-sm text-muted p-2 mt-1">
		    									Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus
		    									pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante.
		    								</div>

		    								<a href="#" class="btn btn-sm btn-danger mt-1"><i class="feather-sm" data-feather="heart"></i> Like</a>
		    							</div>
		    						</div>

		    						<hr />
		    						<div class="media">
		    							<img src="<?= base_url('asset/fotoprofil/' . $users->photo) ?>" width="36" height="36" class="rounded-circle mr-2" alt="Christina Mason">
		    							<div class="media-body">
		    								<small class="float-right text-navy">1h ago</small>
		    								<strong>Christina Mason</strong> posted a new blog<br />

		    								<small class="text-muted">Today 6:35 pm</small>
		    							</div>
		    						</div>

		    						<hr />
		    						<div class="media">
		    							<img src="<?= base_url('asset/fotoprofil/' . $users->photo) ?>" width="36" height="36" class="rounded-circle mr-2" alt="William Harris">
		    							<div class="media-body">
		    								<small class="float-right text-navy">3h ago</small>
		    								<strong>William Harris</strong> posted two photos on <strong>Christina Mason</strong>'s timeline<br />
		    								<small class="text-muted">Today 5:12 pm</small>

		    								<div class="row no-gutters mt-1">
		    									<div class="col-6 col-md-4 col-lg-4 col-xl-3">
		    										<img src="<?= base_url('asset/fotoprofil/' . $users->photo) ?>" class="img-fluid pr-2" alt="Unsplash">
		    									</div>
		    									<div class="col-6 col-md-4 col-lg-4 col-xl-3">
		    										<img src="<?= base_url('asset/fotoprofil/' . $users->photo) ?>" class="img-fluid pr-2" alt="Unsplash">
		    									</div>
		    								</div>

		    								<a href="#" class="btn btn-sm btn-danger mt-1"><i class="feather-sm" data-feather="heart"></i> Like</a>
		    							</div>
		    						</div>

		    						<hr />
		    						<div class="media">
		    							<img src="<?= base_url('asset/fotoprofil/' . $users->photo) ?>" width="36" height="36" class="rounded-circle mr-2" alt="William Harris">
		    							<div class="media-body">
		    								<small class="float-right text-navy">1d ago</small>
		    								<strong>William Harris</strong> started following <strong>Christina Mason</strong><br />
		    								<small class="text-muted">Yesterday 3:12 pm</small>

		    								<div class="media mt-1">
		    									<a class="pr-3" href="#">
		    										<img src="<?= base_url('asset/fotoprofil/' . $users->photo) ?>" width="36" height="36" class="rounded-circle mr-2" alt="Christina Mason">
		    									</a>
		    									<div class="media-body">
		    										<div class="border text-sm text-muted p-2 mt-1">
		    											Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus.
		    										</div>
		    									</div>
		    								</div>
		    							</div>
		    						</div>

		    						<hr />
		    						<div class="media">
		    							<img src="<?= base_url('asset/fotoprofil/' . $users->photo) ?>" width="36" height="36" class="rounded-circle mr-2" alt="Christina Mason">
		    							<div class="media-body">
		    								<small class="float-right text-navy">1d ago</small>
		    								<strong>Christina Mason</strong> posted a new blog<br />
		    								<small class="text-muted">Yesterday 2:43 pm</small>
		    							</div>
		    						</div>

		    						<hr />
		    						<div class="media">
		    							<img src="<?= base_url('asset/fotoprofil/' . $users->photo) ?>" width="36" height="36" class="rounded-circle mr-2" alt="Charles Hall">
		    							<div class="media-body">
		    								<small class="float-right text-navy">1d ago</small>
		    								<strong>Charles Hall</strong> started following <strong>Christina Mason</strong><br />
		    								<small class="text-muted">Yesterdag 1:51 pm</small>
		    							</div>
		    						</div>

		    						<hr />
		    						<a href="#" class="btn btn-primary btn-block">Load more</a>
		    					</div>
		    				</div>
		    			</div>
		    		</div>

		    	</div>
		    </main>