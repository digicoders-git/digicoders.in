<aside class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="<?= base_url('public') ?>/assets/images/Digicoders-new-logo.png" class="logo-icon" alt="logo icon" style="width: 90%; weight: 50px;">
        </div>
        <div>
            <!-- <h4 class="logo-text">Onedash</h4> -->
        </div>
        <div class="toggle-icon ms-auto"> <i class="bi bi-list"></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="<?= base_url()?>Admin/Dashboard" class="">
                <div class="parent-icon"><i class="bi bi-house-fill"></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
           
        </li>
        <li>
            <a href="<?= base_url() ?>Admin/ManageJob" class="">
                <div class="parent-icon"><i class="bi bi-briefcase-fill"></i>
                </div>
                <div class="menu-title">All Job List</div> 
				&nbsp&nbsp<span class="badge badge-secondary" style="background-color:red; border-radius:5px; padding-right:15px"><center class="menu-title"><?=$data = $this->db->get('jobs')->num_rows(); ?></center></span>
				
            </a>
        
        </li>
        <li>
            <a href="<?= base_url() ?>Admin/ManageProject" class="">
                <div class="parent-icon"><i class="bi bi-cart-check-fill"></i>
                </div>
                <div class="menu-title">All Projects List</div>
				&nbsp&nbsp<span class="badge badge-secondary" style="background-color:red; border-radius:5px; padding-right:15px"><center class="menu-title"><?=$data = $this->db->get('projects')->num_rows(); ?></center></span>
				
            </a>
            
        </li>
		
		 <li>
            <a href="<?= base_url() ?>Admin/ManageBlog" class="">
                <div class="parent-icon"><i class="fa fa-rss" aria-hidden="true"></i>
                </div>
                <div class="menu-title">All Blog List</div>
				&nbsp&nbsp<span class="badge badge-secondary" style="background-color:red; border-radius:5px; padding-right:15px"><center class="menu-title"><?=$data = $this->db->get('blog')->num_rows(); ?></center></span>
				
            </a>
            
        </li>
        <li>
            <a class="" href="<?= base_url() ?>Admin/servicepage">
                <div class="parent-icon"> <i class="bi bi-newspaper"></i>
                </div>
                <div class="menu-title">Manage Service Page</div>
				&nbsp&nbsp<span class="badge badge-secondary" style="background-color:red; border-radius:5px; padding-right:15px"><center class="menu-title"><?=$data = $this->db->get('seo_pages')->num_rows(); ?></center></span>
            </a>
        </li>
          <li>
            <a class="" href="<?= base_url() ?>Admin/ManageSlider">
                <div class="parent-icon"> <i class="bi bi-newspaper"></i>
                </div>
                <div class="menu-title">Manage Sliders</div>
				&nbsp&nbsp<span class="badge badge-secondary" style="background-color:red; border-radius:5px; padding-right:15px"><center class="menu-title"><?=$data = $this->db->get('slider')->num_rows(); ?></center></span>
            </a>
        </li>
        <li>
            <a class="" href="<?= base_url() ?>Admin/ManageContact">
                <div class="parent-icon"> <i class="bi bi-person-lines-fill"></i>
                </div>
                <div class="menu-title">Contact List</div>
				&nbsp&nbsp<span class="badge badge-secondary" style="background-color:red; border-radius:5px; padding-right:15px"><center class="menu-title"><?=$data = $this->db->get('contact')->num_rows(); ?></center></span>
            </a>
        </li>
        <li>
            <a class="" href="<?= base_url() ?>Admin/ManageCareer">
                <div class="parent-icon"><i class="bi bi-award-fill"></i>
                </div>
                <div class="menu-title">Career List</div>
				&nbsp&nbsp<span class="badge badge-secondary" style="background-color:red; border-radius:5px; padding-right:15px"><center class="menu-title"><?=$data = $this->db->get('career')->num_rows(); ?></center></span>
            </a>
         
        </li>
        <li>
            <a class="" href="<?= base_url() ?>Admin/ManageCallBackReq">
                <div class=""><i class="bi bi-file-earmark-break-fill"></i>
                </div>
                <div class="menu-title">Call Back Request List</div>
				&nbsp&nbsp<span class="badge badge-secondary" style="background-color:red; border-radius:5px; padding-right:15px"><center class="menu-title"><?=$data = $this->db->get('call_request')->num_rows(); ?></center></span>
            </a>
         
        </li>
        <li>
            <a class="" href="<?= base_url() ?>Admin/ManageClient">
                <div class="parent-icon"><i class="bi bi-file-earmark-spreadsheet-fill"></i>
                </div>
                <div class="menu-title">Our Clients</div>
				&nbsp&nbsp<span class="badge badge-secondary" style="background-color:red; border-radius:5px; padding-right:15px"><center class="menu-title"><?=$data = $this->db->get('client')->num_rows(); ?></center></span>
            </a>        
        </li>
		<li>
            <a class="" href="<?= base_url() ?>Admin/OurProduct">
                <div class="parent-icon"><i class="bi bi-file-earmark-spreadsheet-fill"></i>
                </div>
                <div class="menu-title">Our Product</div>
				&nbsp&nbsp<span class="badge badge-secondary" style="background-color:red; border-radius:5px; padding-right:15px"><center class="menu-title"><?=$data = $this->db->get('productcost')->num_rows(); ?></center></span>
            </a>        
        </li>
        <li>
            <a class="" href="<?= base_url() ?>Admin/ManageExpertList">
                <div class="parent-icon"><i class="bi bi-lock-fill"></i>
                </div>
                <div class="menu-title">Our Expert List</div>
				&nbsp&nbsp<span class="badge badge-secondary" style="background-color:red; border-radius:5px; padding-right:15px"><center class="menu-title"><?=$data = $this->db->get('expert')->num_rows(); ?></center></span>
            </a>
          
        </li>
		  <li>
            <a class="" href="<?= base_url() ?>Admin/Manageintern">
                <div class="parent-icon"><i class="bi bi-lock-fill"></i>
                </div>
                <div class="menu-title">Intern List</div>
				&nbsp&nbsp<span class="badge badge-secondary" style="background-color:red; border-radius:5px; padding-right:15px"><center class="menu-title"><?=$data = $this->db->get('intern')->num_rows(); ?></center></span>
            </a>
          
        </li>
        <li>
            <a href="<?= base_url() ?>Admin/ManageEnquiry">
                <div class="parent-icon"><i class="bi bi-telephone-forward-fill"></i>
                </div>
                <div class="menu-title">Quick Enquiry List</div>
				&nbsp&nbsp<span class="badge badge-secondary" style="background-color:red; border-radius:5px; padding-right:15px"><center class="menu-title"><?=$data = $this->db->get('quick_enquiry')->num_rows(); ?></center></span>
            </a>
        </li>
        <li>
            <a href="<?= base_url() ?>Admin/ManageProposalReq">
                <div class="parent-icon"><i class="bi bi-collection-play-fill"></i>
                </div>
                <div class="menu-title">Request Proposal List</div>
				&nbsp&nbsp<span class="badge badge-secondary" style="background-color:red; border-radius:5px; padding-right:15px"><center class="menu-title"><?=$data = $this->db->get('proposal_req')->num_rows(); ?></center></span>
            </a>
        </li>
        <li>
            <a class="" href="<?= base_url() ?>Admin/ManageNews">
                <div class="parent-icon"><i class="bi bi-newspaper"></i>
                </div>
                <div class="menu-title">News List</div>
				&nbsp&nbsp<span class="badge badge-secondary" style="background-color:red; border-radius:5px; padding-right:15px"><center class="menu-title"><?=$data = $this->db->get('news')->num_rows(); ?></center></span>
            </a>
           
        </li>
        <li>
            <a href="<?= base_url() ?>Admin/ManageGallery">
                <div class="parent-icon"><i class="bi bi-image-fill"></i>
                </div>
                <div class="menu-title">Gallery</div>
				&nbsp&nbsp<span class="badge badge-secondary" style="background-color:red; border-radius:5px; padding-right:15px"><center class="menu-title"><?=$data = $this->db->get('gallery')->num_rows(); ?></center></span>
            </a>
        </li>
		
        <li>
            <a href="javascript:void(0)" onclick="logout('<?= base_url('Authentication/logout/logout')?>')">
                <div class="parent-icon"><i class="bi bi-box-arrow-right"></i>
                </div>
                <div class="menu-title">Logout</div>
            </a>
        </li>
        <!-- <li>
            <a href="#">
                <div class="parent-icon"><i class="bi bi-box-arrow-right"></i>
                <div class="menu-title">Logout</div>
            </a>
        </li> -->
    </ul>
    <!--end navigation-->
</aside>