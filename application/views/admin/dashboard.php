
<section class="stu_mid_sec">
         <div class="top_con admin_container">
            <div class="left_wrap1 col-lg-3 col-md-3 col-sm-3 col-xs-3">
               <div class="stu_sec_left">
                  <div class="bg-layer"></div>
                  <ul class="nav nav-tabs">
                  <li class="dash-ico nav-link active"><a  data-toggle="tab" href="#UReg_tab">User Registration</a><i  class="fa fa-caret-down" style="display: none;"></i></li>
                  <li class="hist-ico nav-link"><a data-toggle="tab" href="#Edit_tab">Edit User</a><i  class="fa fa-caret-down" style="display: none;"></i></li>
                  <li class="exam-ico nav-link"><a data-toggle="tab" href="#CreIns_tab">Create Institute</a><i  class="fa fa-caret-down" style="display: none;"></i></li>
                  <li class="repo-ico nav-link"><a data-toggle="tab" href="#CreSchool_tab">Create School</a><i  class="fa fa-caret-down" style="display: none;"></i></li>
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
                  <!-- User Registration starts here -->
                  <div id="UReg_tab" class="tab-pane fade in active">
                     <h2 class="col-lg-12 col-md-12 col-sm-12 col-xs-12">User Registration</h2>
                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					 <form action="user/register" method="post" enctype="multipart/form-data" id="regForm">
                        <div class="adm_inputs_wrap">
                           <label class="col-lg-3 col-md-3 col-sm-12 col-xs-12">User Name <span class="mandatory">*</span></label>
                           <input class="col-lg-6 col-md-6 col-sm-12 col-xs-12" type="text" class="input-fields form-control" placeholder="User Name" id="Username" name="Username" required="">
                        </div>
                         <div class="adm_inputs_wrap">
                           <label class="col-lg-3 col-md-3 col-sm-12 col-xs-12">Password</label>
                           <input class="col-lg-6 col-md-6 col-sm-12 col-xs-12" type="text" class="input-fields form-control" placeholder="Password" id="Password" name="Password" required="">
                        </div>
                        <div class="adm_inputs_wrap">
                           <label class="col-lg-3 col-md-3 col-sm-12 col-xs-12">Conform Password</label>
                           <input class="col-lg-6 col-md-6 col-sm-12 col-xs-12" type="text" class="input-fields form-control" placeholder="Your Password" id="Con_Pwd" name="Con_Pwd" required="">
                        </div>
                        <div class="adm_inputs_wrap">
                           <label class="col-lg-3 col-md-3 col-sm-12 col-xs-12">Role</label>
                           <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 drop_down">
                              <div class="form-group">
                                 <select class="dropdown form-control" id="sel1">
                                    <option>Admin</option>
                                    <option>Manager</option>
                                    <option>Question Preparation</option>
                                    <option>Student</option>
                                    <option>Parent</option>
                                 </select>
                              </div>
                           </div>
                        </div>
                       
                        <div class="adm_inputs_wrap">
                           <label class="col-lg-3 col-md-3 col-sm-12 col-xs-12">First Name</label>
                           <input class="col-lg-6 col-md-6 col-sm-12 col-xs-12" type="text" class="input-fields form-control" placeholder="First Name" id="FirstName" name="FirstName" >
                        </div>
                        <div class="adm_inputs_wrap">
                           <label class="col-lg-3 col-md-3 col-sm-12 col-xs-12">Last Name</label>
                           <input class="col-lg-6 col-md-6 col-sm-12 col-xs-12" type="text" class="input-fields form-control" placeholder="Last Name" id="LastName" name="LastName" >
                        </div>
                       
                        
                        <div class="adm_inputs_wrap">
                           <label class="col-lg-3 col-md-3 col-sm-12 col-xs-12">Address</label>
                           <textarea rows="3" cols="12" class="col-lg-6 col-md-6 col-sm-12 col-xs-12"></textarea>
                        </div>
                       
                        <div class="custom-file-upload">
                        <label class="col-lg-3 col-md-3 col-sm-12 col-xs-12">User Image</label>
                        
                           <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                           <img id="profilePic" src="#" class="hide"  />
                        <label for="file-upload" class="custom-file-upload-label">
                        <i class="fa fa-cloud-upload"></i> Upload Image
                        
                        </label>
                        
                        <input id="file-upload" type="file" onchange="readURL(this);" name="userimage">
                        
                        </div>
                     </div>
                        <div class="col-md-12">
                           <button  class="signin-btn" onclick="submitForm('regForm');">Submit</button>
                        </div>
						</form>
                     </div>
                  </div>
                 
                  
                  
                  
                
                  
                 
                 

               </div>
            </div>
         </div>
         </div>
      </section>
      <!-- Center Container ends-->
      <footer class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
         <p>Copyright © 2018</p>
      </footer>
      <!-- SCRIPTS -->
    