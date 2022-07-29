<?php

if($_GET) {
	$title = isset($_GET['page']) ? ' ' . $_GET['page'] : 'Campaign Essentials';
} else {
	$title = 'Simpli Connect';
}

?>

<?php

if($_GET) {
	$data = isset($_GET['page']) ? ' ' . $_GET['page'] : 'Data';
} else {
	$data = 'Data';
}

?>

							<!--begin::Page title-->
							<div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-20 py-3 py-lg-0 me-3">
								<!--begin::Heading-->
								<h1 class="d-flex flex-column text-dark fw-bolder my-1">
									<span class="text-white fs-1"><?php echo $title; ?></span>
									<small class="text-gray-600 fs-6 fw-normal pt-2"><?php echo $data; ?> simplifed for you</small>
								</h1>
								<!--end::Heading-->
							</div>
							<!--end::Page title=-->
							