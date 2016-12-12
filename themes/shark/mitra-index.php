<?php include "header.php"; ?>
<section id="page-banner">
	<div id="banner-image">
		<img src="assets/images/banner-mitra.jpg" alt="" />
	</div>
	<div id="banner-caption">
		<h1>Mitra</h1>
	</div>
</section>
<section class="page-without-sidebar content-padding">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="content-title">
					<h2>Mitra Kami</h2>
					<hr class="orange-line" />
				</div>
			</div>
		</div>
		<div class="page-content">
			<div class="row">
				<div class="col-md-4 col-sm-4">
				</div>
				<div class="col-md-8 col-sm-8">
					<div class="row">
						<div class="col-md-5 col-sm-5">
							<div class="select-wrapper">
								<select>
									<option>Select City</option>
									<option>Tangerang</option>
									<option>Kota Jakarta Barat</option>
									<option>Kota Jakarta Utara</option>
									<option>Kota Jakarta Pusat</option>
									<option>Kota Jakarta Timur</option>
									<option>Kota Jakarta Selatan</option>
								</select>
							</div>
						</div>
						<div class="col-md-5 col-sm-5">
							<div class="select-wrapper">
								<select>
									<option>Select State / Province</option>
									<option>Banten</option>
									<option>DKI Jakarta</option>
								</select>
							</div>
						</div>
						<div class="col-md-2 col-sm-2">
							<div class="btn-select">
								<a href="mitra-index.php">Go</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div id="partner-wrapper" class="content-padding">
					<?php foreach ($partner as $val) : ?>
						<div class="col-md-3 col-sm-3">
							<div class="partner-container">
								<div class="partner-name">
									<a href=""><h4><?php echo $val->partner_name; ?></h4></a>
								</div>
								<div class="partner-content">
									<p>Telp : <?php echo $val->partner_phone; ?><br/>
										Alamat : <?php echo $val->partner_addr; ?></p>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<div class="pagination-wrapper text-center">
						<?php echo $this->pagination->create_links(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php include "part-cta.php"; ?>
<?php include "footer.php"; ?>
