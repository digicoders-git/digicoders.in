<?php
if (!empty($table)) {

	$action = $table;
	//var_dump($action);
	switch ($action) {

		case "projects":
			//var_dump($userdata);
			?>
			<form action="<?= base_url() ?>Admin/ManageProject/Update" enctype="multipart/form-data" method="POST"
				id="project-form">
				<?php $csrf = array('name' => $this->security->get_csrf_token_name(), 'hash' => $this->security->get_csrf_hash()); ?>
				<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />

				<input value="<?= $userdata->id ?>" type="hidden" name="id" class="form-control" required placeholder="Project Id">

				<div class="form-group mb-3">
					<select name="type" class="form-control">
						<option selected disabled>Select Type</option>
						<option value="Website" <?php if ($userdata->type == 'Website') {
							echo "selected";
						} ?>>Website</option>
						<option value="Mobile App" <?php if ($userdata->type == 'Mobile App') {
							echo "selected";
						} ?>>Mobile App
						</option>
						<option value="Software" <?php if ($userdata->type == 'Software') {
							echo "selected";
						} ?>>Software </option>

					</select>
				</div>
				<div class="form-group mb-3">
					<input value="<?= $userdata->title ?>" type="text" name="project_name" class="form-control"
						placeholder="Project Title">
				</div>
				<div class="form-group mb-3">
					<input type="date" name="date" value="<?= $userdata->add_date ?>" class="form-control" placeholder="Date">
				</div>
				<div class="form-group mb-3">
					<input type="text" name="link" value="<?= $userdata->url ?>" class="form-control"
						placeholder="Enter Project Link">
				</div>
				<div class="form-group mb-3">
					<label class="form-label fw-bold">Link Status</label>
					<select name="link_status" class="form-control">
						<option value="true" <?php if (!isset($userdata->link_status) || $userdata->link_status == 'true' || $userdata->link_status == '1') { echo "selected"; } ?>>Link Active</option>
						<option value="false" <?php if (isset($userdata->link_status) && ($userdata->link_status == 'false' || $userdata->link_status == '0')) { echo "selected"; } ?>>Link Disabled</option>
					</select>
				</div>

				<div class="form-group mb-3 ">
					<div class="imgdata border">
						<!--<img src="<?//= base_url('public/uploads/projects/') . $userdata->image; ?>" alt="" style="height: 200px;">-->

						<input type="file" id="input-file-now"
							data-default-file="<?= base_url('public/uploads/projects/') . $userdata->image; ?>" name="image"
							class="dropify" />
					</div>
				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save changes</button>
				</div>
			</form>
			<?php

			break;

		// blog Start Here 
		case "blog":
			$img_file = !empty($userdata->img) ? $userdata->img : $userdata->image;
			$blog_content = !empty($userdata->content) ? $userdata->content : $userdata->full_discription;
			$blog_meta = !empty($userdata->meta_description) ? $userdata->meta_description : $userdata->short_discription;
			?>
			<form action="<?= base_url() ?>Admin/ManageBlog/Edit" enctype="multipart/form-data" method="POST" class="form" id="edit-blog-form">
				<?php $csrf = array('name' => $this->security->get_csrf_token_name(), 'hash' => $this->security->get_csrf_hash()); ?>
				<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
				<input value="<?= $userdata->id ?>" type="hidden" name="id" class="form-control" required />

				<div class="form-group mb-3">
					<label for="">Title</label>
					<input type="text" name="title" id="edit_blog_title" class="form-control" value="<?= htmlspecialchars($userdata->title ?? '', ENT_QUOTES, 'UTF-8') ?>" required />
				</div>
				<div class="form-group mb-3">
					<label for="">URL (Slug)</label>
					<input type="text" name="url" id="edit_blog_url" class="form-control" value="<?= htmlspecialchars($userdata->url ?? '', ENT_QUOTES, 'UTF-8') ?>" required />
				</div>
				<!-- 
				<div class="form-group mb-3">
					<label for="">Select Location</label>
					<select name="location" class="form-control">
						<option value="">Select Location</option>
						<option value="lucknow" <?= (isset($userdata->location) && $userdata->location == 'lucknow') ? 'selected' : '' ?>>Lucknow</option>
						<option value="kanpur" <?= (isset($userdata->location) && $userdata->location == 'kanpur') ? 'selected' : '' ?>>Kanpur</option>
						<option value="gorakhpur" <?= (isset($userdata->location) && $userdata->location == 'gorakhpur') ? 'selected' : '' ?>>Gorakhpur</option>
						<option value="bestsummertraining" <?= (isset($userdata->location) && $userdata->location == 'bestsummertraining') ? 'selected' : '' ?>>Best Summer Training</option>
						<option value="digitaldaur" <?= (isset($userdata->location) && $userdata->location == 'digitaldaur') ? 'selected' : '' ?>>Digital Daur</option>
						<option value="digicoderstechnologies" <?= (isset($userdata->location) && $userdata->location == 'digicoderstechnologies') ? 'selected' : '' ?>>Digicoders Technologies</option>
						<option value="digitalcoders" <?= (isset($userdata->location) && $userdata->location == 'digitalcoders') ? 'selected' : '' ?>>Digital Coders</option>
						<option value="softwarecompanyinlucknow" <?= (isset($userdata->location) && $userdata->location == 'softwarecompanyinlucknow') ? 'selected' : '' ?>>Software Company In Lucknow</option>
					</select>
				</div>
				-->
				<div class="form-group mb-3">
					<label for="">Meta Description</label>
					<textarea name="meta_description" class="form-control" rows="3"><?= htmlspecialchars($blog_meta ?? '', ENT_QUOTES, 'UTF-8') ?></textarea>
				</div>
				<div class="form-group mb-3">
					<label for="">Keywords</label>
					<input type="text" id="edit_blog_keyword_input" class="form-control" placeholder="e.g. PHP training (Press Enter)" />
					<div id="edit_blog_chips_container" class="mt-2 d-flex flex-wrap gap-2"></div>
					<input type="hidden" name="keywords" id="edit_blog_keywords_hidden" value="<?= !empty($userdata->keywords) ? htmlspecialchars($userdata->keywords, ENT_QUOTES, 'UTF-8') : '' ?>" />
				</div>
				<div class="form-group mb-3">
					<label for="">Content</label>
					<textarea name="content" cols="30" rows="5" class="form-control summernote"><?= $blog_content ?></textarea>
				</div>

				<!-- Blog FAQs Section -->
				<div class="card mb-3 border">
					<div class="card-header bg-light">
						<h6 class="mb-0">Blog FAQs</h6>
					</div>
					<div class="card-body">
						<div id="edit-faq-list">
							<?php
							$faqs = array();
							if (!empty($userdata->faqs)) {
								$faqs = json_decode($userdata->faqs, true);
							}
							if (!empty($faqs)) {
								foreach ($faqs as $index => $faq) {
									?>
									<div class="faq-row mb-3 pb-3 border-bottom">
										<div class="mb-2">
											<label class="form-label font-weight-bold">Question</label>
											<input type="text" name="faq_questions[]" class="form-control" value="<?= htmlspecialchars($faq['question'] ?? '', ENT_QUOTES, 'UTF-8') ?>" />
										</div>
										<div>
											<label class="form-label font-weight-bold">Answer</label>
											<textarea name="faq_answers[]" class="form-control" rows="2"><?= htmlspecialchars($faq['answer'] ?? '', ENT_QUOTES, 'UTF-8') ?></textarea>
										</div>
										<div class="text-end mt-2">
											<button type="button" class="btn btn-danger btn-sm edit-remove-faq-btn">Remove</button>
										</div>
									</div>
									<?php
								}
							} else {
								?>
								<div class="faq-row mb-3 pb-3 border-bottom">
									<div class="mb-2">
										<label class="form-label font-weight-bold">Question</label>
										<input type="text" name="faq_questions[]" class="form-control" placeholder="e.g. What is PHP?" />
									</div>
									<div>
										<label class="form-label font-weight-bold">Answer</label>
										<textarea name="faq_answers[]" class="form-control" rows="2" placeholder="e.g. PHP is a scripting language."></textarea>
									</div>
									<div class="text-end mt-2">
										<button type="button" class="btn btn-danger btn-sm edit-remove-faq-btn" style="display: none;">Remove</button>
									</div>
								</div>
								<?php
							}
							?>
						</div>
						<button type="button" class="btn btn-success btn-sm" id="edit-add-faq-row-btn"><i class="fa fa-plus"></i> Add FAQ</button>
					</div>
				</div>

				<div class="form-group mb-3">
					<label>Upload Image</label>
					<input type="file" data-default-file="<?= base_url('public/uploads/Blog/') . $img_file; ?>" id="input-file-now" name="image" class="dropify" />
				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary" id="submitBtn"><i class="fa fa-spinner fa-spin" style="display:none;" id="submitSpin"></i>&ensp;Update</button>
				</div>
			</form>
			<script>
				function generateEditSlug(text) {
					return text.toString().toLowerCase()
						.replace(/\s+/g, '-')
						.replace(/[^\w\-]+/g, '')
						.replace(/\-\-+/g, '-')
						.replace(/^-+/, '')
						.replace(/-+$/, '');
				}
				$('#edit_blog_title').on('keyup', function() {
					$('#edit_blog_url').val(generateEditSlug($(this).val()));
				});

				$(document).ready(function() {
					if (typeof initializeTagsInput === 'function') {
						initializeTagsInput('edit_blog_keyword_input', 'edit_blog_chips_container', 'edit_blog_keywords_hidden');
					}

					$('#edit-add-faq-row-btn').on('click', function() {
						var newRow = `
							<div class="faq-row mb-3 pb-3 border-bottom">
								<div class="mb-2">
									<label class="form-label font-weight-bold">Question</label>
									<input type="text" name="faq_questions[]" class="form-control" placeholder="e.g. What is PHP?" />
								</div>
								<div>
									<label class="form-label font-weight-bold">Answer</label>
									<textarea name="faq_answers[]" class="form-control" rows="2" placeholder="e.g. PHP is a scripting language."></textarea>
								</div>
								<div class="text-end mt-2">
									<button type="button" class="btn btn-danger btn-sm edit-remove-faq-btn">Remove</button>
								</div>
							</div>
						`;
						$('#edit-faq-list').append(newRow);
						toggleEditRemoveButtons();
					});

					$(document).on('click', '.edit-remove-faq-btn', function() {
						$(this).closest('.faq-row').remove();
						toggleEditRemoveButtons();
					});

					function toggleEditRemoveButtons() {
						var rows = $('#edit-faq-list .faq-row');
						if (rows.length <= 1) {
							rows.find('.edit-remove-faq-btn').hide();
						} else {
							rows.find('.edit-remove-faq-btn').show();
						}
					}
					toggleEditRemoveButtons();
				});
			</script>
			<?php

			break;
		// blog End Here 

		case "jobs":
			// var_dump($userdata);
			?>
			<form action="<?= base_url() ?>Admin/ManageJob/EditJob" method="POST" id="job-form">
				<?php $csrf = array('name' => $this->security->get_csrf_token_name(), 'hash' => $this->security->get_csrf_hash()); ?>
				<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
				<input value="<?= $userdata->id ?>" type="hidden" name="id" class="form-control" required>
				<div class="form-group">
					<div class="row">
						<div class="col-sm-6">
							<label for="" class="my-2 fw-bold">Job Title</label>
							<input type="text" name="title" class="form-control text-capitalize" value="<?= $userdata->title ?>"
								required placeholder="Job Title">
						</div>
						<div class="col-sm-6">
							<label for="" class="my-2 fw-bold">Job Profile</label>
							<input type="text" name="profile" class="form-control" value="<?= $userdata->job_profile ?>" required
								placeholder="Job Profile">
						</div>
						<div class="col-sm-6">
							<label for="" class="my-2 fw-bold">Location</label>
							<input type="text" name="location" class="form-control" value="<?= $userdata->location ?>" required
								placeholder="Location">
						</div>
						<div class="col-sm-6">
							<label for="" class="my-2 fw-bold">Salary(₹)</label>
							<input type="number" name="salary" class="form-control" value="<?= $userdata->salary ?>" required
								placeholder="Salary(₹)">
						</div>
						<div class="col-sm-6">
							<label for="" class="my-2 fw-bold">Eligibility</label>
							<input type="text" name="eligibility" class="form-control" value="<?= $userdata->eligibility ?>"
								required placeholder="Eligibility">
						</div>
						<div class="col-sm-6">
							<label for="" class="my-2 fw-bold">Skills</label>
							<input type="text" name="skill" class="form-control" value="<?= $userdata->skills ?>" required
								placeholder="Skill">
						</div>
						<div class="col-sm-12">
							<label for="" class="my-2 fw-bold">Experience</label>
							<input type="text" name="experience" class="form-control" value="<?= $userdata->experience ?>" required
								placeholder="Experience">
						</div>
						<div class="col-sm-12">
							<label for="" class="my-2 fw-bold">Discriptioin</label>
							<textarea name="discription" id="summernote" cols="30" rows="5" class="form-control"
								placeholder="Discriptioin..."><?= $userdata->description; ?></textarea>
						</div>

					</div>
				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save changes</button>
				</div>
			</form>

			<?php
			break;

		case "client":
			?>
			<form action="<?= base_url() ?>Admin/ManageClient/Edit" enctype="multipart/form-data" method="POST" id="client-form">
				<?php $csrf = array('name' => $this->security->get_csrf_token_name(), 'hash' => $this->security->get_csrf_hash()); ?>
				<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
				<input value="<?= $userdata->id ?>" type="hidden" name="id" class="form-control" required placeholder="Project Id">

				<div class="form-group mb-3">
					<label class="form-label fw-bold">Client Title / Name <span class="text-danger">*</span></label>
					<input value="<?= isset($userdata->title) ? htmlspecialchars($userdata->title) : '' ?>" type="text" name="title" class="form-control" placeholder="Enter Client Title / Name" required />
				</div>

				<div class='img-fluid borderd p-2 mb-3'>
					<label class="form-label fw-bold">Client Image</label>
					<input type="file" id="input-file-now"
						data-default-file="<?= base_url('public/uploads/client/') . $userdata->image; ?>" name="image"
						class="dropify" />
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save changes</button>
				</div>
			</form>
			<?php
			break;

		case "intern":
			?>
			<form action="<?= base_url() ?>Admin/Manageintern/Edit" method="POST" enctype="multipart/form-data">
				<?php $csrf = array('name' => $this->security->get_csrf_token_name(), 'hash' => $this->security->get_csrf_hash()); ?>
				<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
				<input type="hidden" class="form-control" value="<?= $userdata->id; ?>" name="id" />
				<div class="form-group mb-3">
					<input type="text" class="form-control" value="<?= $userdata->name ?>" name="name"
						placeholder="Enter Intern Name" />
				</div>
				<div class="form-group mb-3">
					<input type="text" name="role" value="<?= $userdata->role ?>" class="form-control" placeholder="Enter Role"
						name="role" />
				</div>
				<div class="img-fluid p-2 border">
					<input type="file" id="input-file-now"
						data-default-file="<?= base_url('public/uploads/expert/') . $userdata->image; ?>" name="image"
						class="dropify" />
				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save changes</button>
				</div>
			</form>
			<?php
			break;

		case "expert":
			// var_dump($userdata);
			?>
			<form action="<?= base_url() ?>Admin/ManageExpertList/Edit" enctype="multipart/form-data" method="POST"
				id="expert-form">
				<?php $csrf = array('name' => $this->security->get_csrf_token_name(), 'hash' => $this->security->get_csrf_hash()); ?>
				<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
				<input type="hidden" class="form-control" value="<?= $userdata->id; ?>" name="id" placeholder="Enter Expert Name" />
				<div class="form-group mb-3">
					<input type="text" class="form-control" value="<?= $userdata->name ?>" name="name"
						placeholder="Enter Expert Name" />
				</div>
				<div class="form-group mb-3">
					<input type="text" name="role" value="<?= $userdata->role ?>" class="form-control" placeholder="Enter Role" />
				</div>
				<div class="form-group mb-3">
					<input type="number" name="sequence" value="<?= $userdata->sequence ?>" class="form-control"
						placeholder="Enter Sequence" />
				</div>
				<div class="img-fluid p-2 border">
					<input type="file" id="input-file-now"
						data-default-file="<?= base_url('public/uploads/expert/') . $userdata->image; ?>" name="image"
						class="dropify" />
				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save changes</button>
				</div>
			</form>
			<?php
			break;

		case "productcost":
			?>
			<form action="<?= base_url() ?>Admin/OurProduct/Edit" method="POST" enctype="multipart/form-data"
				id="product-edit-form">
				<input type="hidden" class="form-control" value="<?= $userdata->id; ?>" name="id" />
				<div class="form-group mb-3">
					<input type="text" class="form-control" value="<?= $userdata->title ?>" name="name"
						placeholder="Enter Product Title" />
				</div>
				<div class="form-group mb-3">
					<input type="text" name="price" value="<?= $userdata->price ?>" class="form-control"
						placeholder="Enter Price" />
				</div>
				<div class="img-fluid p-2 border">
					<input type="file" id="input-file-now"
						data-default-file="<?= base_url('public/uploads/product/') . $userdata->img; ?>" name="image"
						class="dropify" />
				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save changes</button>
				</div>
			</form>
			<?php
			break;

		case "gallery":
			?>
			<form action="<?= base_url() ?>Admin/ManageGallery/Edit" enctype="multipart/form-data" method="POST" id="gallery-form">
				<?php $csrf = array('name' => $this->security->get_csrf_token_name(), 'hash' => $this->security->get_csrf_hash()); ?>
				<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
				<input type="hidden" class="form-control" value="<?= $userdata->id; ?>" name="id" placeholder="Enter Expert Name" />
				<div class="imgfluid p-2">
					<input type="file" id="input-file-now"
						data-default-file="<?= base_url('public/uploads/gallery/') . $userdata->image; ?>" name="image"
						class="dropify" required />
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save changes</button>
				</div>
			</form>
			<?php
			break;

		case "news":
			?>
			<form action="<?= base_url() ?>Admin/ManageNews/Edit" enctype="multipart/form-data" method="POST" id="news-list">
				<?php $csrf = array('name' => $this->security->get_csrf_token_name(), 'hash' => $this->security->get_csrf_hash()); ?>
				<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />

				<input type="hidden" name="id" id="" class="form-control" value="<?= $userdata->id ?>">
				<div class="img-fluid border p-2">
					<input type="file" id="input-file-now"
						data-default-file="<?= base_url('public/uploads/news/') . $userdata->image; ?>" name="image"
						class="dropify" />
				</div>
				<div class="modal-footer">
					<button type="button" id="submitBtn" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary"><i class="fa fa-spinner fa-spin d-none"
							id="submitSpin"></i>&ensp;Save changes</button>
				</div>
			</form>
			<?php
			break;

		case "seo_pages":
			?>
			<form action="<?= base_url() ?>Admin/editpage" method="POST" id="seo-page-form">
				<?php
				$csrf = array(
					'name' => $this->security->get_csrf_token_name(),
					'hash' => $this->security->get_csrf_hash()
				);
				?>
				<input type="hidden" name="<?= $csrf['name']; ?>" value="<?= $csrf['hash']; ?>" />
				<input value="<?= $userdata->id ?>" type="hidden" name="id" class="form-control" required>
				<div class="row">
					<div class="col-md-6 mb-3">
						<label for="service_name" class="form-label">Service Name *</label>
						<input type="text" class="form-control" id="service_name" name="service_name"
							value="<?= $userdata->service_name ?>" placeholder="Enter Service Name" required>
					</div>
					<div class="col-md-6 mb-3">
						<label for="state" class="form-label">State</label>
						<select id="state" class="form-select" name="state_name" required>
							<option value="">--Select State --</option>
							<?php foreach ($states as $row): ?>
								<option value="<?= $row->state_name ?>">
									<?= $row->state_name ?>
								</option>
							<?php endforeach; ?>
						</select>
					</div>

				</div>

				<div class="row">
					<div class="col-md-6 mb-3">
						<label for="city" class="form-label">City </label>
						<select class="form-select" id="city" name="city_name" required>
							<option value="">--Select City --</option>
						</select>
					</div>
					<div class="col-md-6 mb-3">
						<label for="title" class="form-label">Title</label>
						<select type="text" class="form-control" id="title" name="title" required>
							<option value="">--Select Title --</option>
							<option value="Web Development" <?= $userdata->title == 'Web Development' ? 'selected' : '' ?>>Web
								Development</option>
							<option value="Mobile App Development" <?= $userdata->title == 'Mobile App Development' ? 'selected' : '' ?>>Mobile App Development</option>
							<option value="Ecommerce Website Development" <?= $userdata->title == 'Ecommerce Website Development' ? 'selected' : '' ?>>Ecommerce Website Development</option>
							<option value="Software Development" <?= $userdata->title == 'Software Development' ? 'selected' : '' ?>>
								Software Development</option>
						</select>
					</div>


				</div>
				<div class="col-md-6 mb-3">
					<label for="heading" class="form-label">Heading</label>
					<input type="text" class="form-control" id="heading" name="heading" value="<?= $userdata->heading ?>"
						placeholder="Enter Heading" required>
				</div>
				<div class="mb-3">
					<label for="content" class="form-label">Content</label>
					<textarea class="form-control" id="content" name="content" rows="4" placeholder="Enter Content"
						required><?= $userdata->content ?></textarea>
				</div>

				<div class="mb-3">
					<label for="meta_description" class="form-label">Meta Description</label>
					<textarea class="form-control" id="meta_description" name="meta_description" rows="3"
						placeholder="Enter Meta Description" required><?= $userdata->meta_description ?></textarea>
				</div>

				<div class="row">
					<div class="col-md-6 mb-3">
						<label for="keywords" class="form-label">Keywords</label>
						<input type="text" class="form-control" id="keywords" name="keywords" value="<?= $userdata->keywords ?>"
							placeholder="Enter Keywords (comma separated)" required>
					</div>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save changes</button>
				</div>
			</form>
			<?php
			break;

		case "slider";
			?>
			<form action="<?= base_url() ?>Admin/ManageSlider/Edit" enctype="multipart/form-data" method="POST" id="expert-form">
				<?php
				$csrf = array(
					'name' => $this->security->get_csrf_token_name(),
					'hash' => $this->security->get_csrf_hash()
				);
				?>
				<input type="hidden" name="<?= $csrf['name']; ?>" value="<?= $csrf['hash']; ?>"   />
				<input type="hidden" name="id" value="<?= $userdata->id ?>">

				<div class="form-group mb-3">
					<input type="text" class="form-control" name="title" value="<?= $userdata->title ?>"
						placeholder="Enter title Name" required />
				</div>

				<div class="form-group mb-3">
					<input type="file" id="input-file-now" name="image" class="dropify"
						data-default-file="<?= base_url('public/uploads/sliders/') . $userdata->image; ?>" />
				</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save changes</button>
				</div>
			</form>

			<?php
			break;

		default:
			echo "No such form exist!";
			break;
	}
}

?>

<script>
	$('.dropify').dropify();
</script>


<script>
	$(document).ready(function () {

		// Dropify
		if ($('.dropify').length) {
			$('.dropify').dropify();
		}

		// State → City dropdown
		$('#state').on('change', function () {
			var state_name = $(this).val();

			if (state_name !== '') {
				$.ajax({
					url: "<?= base_url('Admin/getCitiesByState') ?>",
					type: "POST",
					data: {
						state_name: state_name,
						<?= $this->security->get_csrf_token_name(); ?>:
							"<?= $this->security->get_csrf_hash(); ?>"
					},
					dataType: "json",
					success: function (response) {
						$('#city').html('<option value="">Select City</option>');
						$.each(response, function (i, item) {
							$('#city').append(
								'<option value="' + item.city_name + '">' + item.city_name + '</option>'
							);
						});
					},
					error: function () {
						alert('City load error');
					}
				});
			} else {
				$('#city').html('<option value="">Select City</option>');
			}
		});

	});
</script>