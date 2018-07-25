
<section class="stu_mid_sec">
         <div class="top_con admin_container">
            <div class="left_wrap1 col-lg-3 col-md-3 col-sm-3 col-xs-3">
               <div class="stu_sec_left">
                  <div class="bg-layer"></div>
                  <ul class="nav nav-tabs">
                  <li class="dash-ico nav-link active"><a  data-toggle="tab" href="#UReg_tab"  data-url="user/register">User Registration</a><i  class="fa fa-caret-down" style="display: none;"></i></li>
                  <li class="hist-ico nav-link"><a data-toggle="tab" href="#Edit_tab">Edit User</a><i  class="fa fa-caret-down" style="display: none;"></i></li>
                  <li class="exam-ico nav-link"><a data-toggle="tab" href="#CreIns_tab" data-url="admin/create_institute">Create Institute</a><i  class="fa fa-caret-down" style="display: none;"></i></li>
                  <li class="repo-ico nav-link"><a data-toggle="tab" href="#CreSchool_tab" data-url="admin/create_school">Create School</a><i  class="fa fa-caret-down" style="display: none;"></i></li>
                  <li class="repo-ico nav-link"><a data-toggle="tab" href="#MapClass_School">Map Class to School</a><i  class="fa fa-caret-down" style="display: none;"></i></li>
              
                  <li class="repo-ico nav-link"><a data-toggle="tab" href="#CreateSub_tab">Create Subject</a><i  class="fa fa-caret-down" style="display: none;"></i></li>
                  <li class="repo-ico nav-link"><a data-toggle="tab" href="#CreateTopic_tab">Create Topic</a><i  class="fa fa-caret-down" style="display: none;"></i></li>
                  <li class="repo-ico nav-link"><a data-toggle="tab" href="#UploadTopic_tab">Upload Topic</a><i  class="fa fa-caret-down" style="display: none;"></i></li>
                  <li class="repo-ico nav-link"><a data-toggle="tab" href="#Upload_Questions">Upload Questions</a><i  class="fa fa-caret-down" style="display: none;"></i></li>
                   <li class="repo-ico nav-link"><a data-toggle="tab" href="#Image_Questions">Create Image Questions</a><i  class="fa fa-caret-down" style="display: none;"></i></li>
                   <li class="repo-ico nav-link"><a data-toggle="tab" href="#Create_Question_Paper">Create Question Paper</a><i  class="fa fa-caret-down" style="display: none;"></i></li>
               </div>
            </div>

           <div class="right_wrap1 col-lg-8 col-md-8 col-sm-8 col-xs-8 pull-right">
            <div class="tab-content">
            <div class="alert-danger"><?php echo $this->session->flashdata('message');?></div>
            <!-- User Registration-->
            <div id="UReg_tab" class="tab-pane fade in active">
                  
            </div>
            <!-- Institution-->
            <div id="CreIns_tab" class="tab-pane fade">
            </div>
            <div id="CreSchool_tab" class="tab-pane fade">
            </div>

            </div>
           </div> 
            
         </div>
         </div>
      </section>
