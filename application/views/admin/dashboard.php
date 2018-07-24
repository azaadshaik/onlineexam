
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
                        <div class="adm_inputs_wrap adm_checkbox">
                           <label class="col-lg-3 col-md-3 col-sm-12 col-xs-12">Status</label>
                           <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 drop_down">
                              <label class="checkbox-inline"><input type="checkbox" checked="checked" value="">Active</label>
                              <label class="checkbox-inline"><input type="checkbox" value="">In Active</label>
                           </div>
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
                  <!-- Edit User starts here -->
                  <div id="Edit_tab" class="tab-pane fade">
                     <h2 class="col-lg-12 col-md-12 col-sm-12 col-xs-12">Edit User</h2>
                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="adm_inputs_wrap">
                           <label class="col-lg-3 col-md-3 col-sm-12 col-xs-12">User Name *</label>
                           <input class="col-lg-6 col-md-6 col-sm-12 col-xs-12" type="text" class="input-fields form-control" placeholder="User Name" id="Username" name="Username" readonly>
                        </div>
                        <div class="adm_inputs_wrap">
                           <label class="col-lg-3 col-md-3 col-sm-12 col-xs-12">User Password</label>
                           <input class="col-lg-6 col-md-6 col-sm-12 col-xs-12" type="password" class="input-fields form-control"  id="UserPassword" name="UserPassword" >
                        </div>
                        <div class="adm_inputs_wrap">
                           <label class="col-lg-3 col-md-3 col-sm-12 col-xs-12">Confirm Password</label>
                           <input class="col-lg-6 col-md-6 col-sm-12 col-xs-12" type="password" class="input-fields form-control"  id="ConfPassword" name="ConfPassword" >
                        </div>
                        <div class="adm_inputs_wrap">
                           <label class="col-lg-3 col-md-3 col-sm-12 col-xs-12">Phone No</label>
                           <input class="col-lg-6 col-md-6 col-sm-12 col-xs-12" type="text" class="input-fields form-control" id="PhoneNo" name="PhoneNo" >
                        </div>
                        <div class="adm_inputs_wrap">
                           <label class="col-lg-3 col-md-3 col-sm-12 col-xs-12">Address</label>
                           <textarea rows="3" cols="12" class="col-lg-6 col-md-6 col-sm-12 col-xs-12"></textarea>
                        </div>
                        <div class="col-md-12">
                           <button class="signin-btn">Submit</button>
                        </div>
                     </div>
                  </div>
                  <!-- Create Institute starts here -->
                  <div id="CreIns_tab" class="tab-pane fade">
                     <h2 class="col-lg-12 col-md-12 col-sm-12 col-xs-12">Create Institute</h2>
                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="adm_inputs_wrap">
                           <label class="col-lg-3 col-md-3 col-sm-12 col-xs-12">Institution Name</label>
                           <input class="col-lg-6 col-md-6 col-sm-12 col-xs-12" type="text" class="input-fields form-control" placeholder="Institution Name" id="institutionName" name="institutionName">
                        </div>
                        <div class="adm_inputs_wrap">
                           <label class="col-lg-3 col-md-3 col-sm-12 col-xs-12">Institution Code</label>
                           <input class="col-lg-6 col-md-6 col-sm-12 col-xs-12" type="text" class="input-fields form-control" placeholder="Institution Code" id="InstitutionCode" name="InstitutionCode" >
                        </div>
                        <div class="adm_inputs_wrap">
                           <label class="col-lg-3 col-md-3 col-sm-12 col-xs-12">Address</label>
                           <textarea rows="3" cols="12" class="col-lg-6 col-md-6 col-sm-12 col-xs-12"></textarea>
                        </div>
                        <div class="col-md-12">
                           <button class="signin-btn">Submit</button>
                        </div>
                     </div>
                  </div>
                  <!-- Create School starts here -->
                  <div id="CreSchool_tab" class="tab-pane fade">
                     <h2 class="col-lg-12 col-md-12 col-sm-12 col-xs-12">Create School</h2>
                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="adm_inputs_wrap">
                           <label class="col-lg-3 col-md-3 col-sm-12 col-xs-12">School Name</label>
                           <input class="col-lg-6 col-md-6 col-sm-12 col-xs-12" type="text" class="input-fields form-control" placeholder="School Name" id="SchoolName" name="SchoolName">
                        </div>
                        <div class="adm_inputs_wrap">
                           <label class="col-lg-3 col-md-3 col-sm-12 col-xs-12">School Code</label>
                           <input class="col-lg-6 col-md-6 col-sm-12 col-xs-12" type="text" class="input-fields form-control" placeholder="School Code" id="SchoolCode" name="SchoolCode" >
                        </div>
                        <div class="adm_inputs_wrap">
                           <label class="col-lg-3 col-md-3 col-sm-12 col-xs-12">School Institution</label>
                           <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 drop_down">
                              <div class="form-group">
                                 <select class="dropdown form-control" id="sel1">
                                    <option>Nalanda</option>
                                    <option>Google</option>
                                    <option>Bhashyam</option>
                                    <option>RSR</option>
                                 </select>
                              </div>
                           </div>
                        </div>
                         <div class="adm_inputs_wrap">
                           <label class="col-lg-3 col-md-3 col-sm-12 col-xs-12">School State</label>
                           <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 drop_down">
                              <div class="form-group">
                                 <select class="dropdown form-control" id="sel1">
                                    <option>Andhra Pradesh</option>
                                    <option>Telangana</option>
                                    <option>Tamilnadu</option>
                                    <option>Karnataka</option>
                                 </select>
                              </div>
                           </div>
                        </div>
                        <div class="adm_inputs_wrap">
                           <label class="col-lg-3 col-md-3 col-sm-12 col-xs-12">School District</label>
                           <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 drop_down">
                              <div class="form-group">
                                 <select class="dropdown form-control" id="sel1">
                                    <option>Nellore</option>
                                    <option>Kadapa</option>
                                    <option>Kurnool</option>
                                    <option>Anantapur</option>
                                 </select>
                              </div>
                           </div>
                        </div>
                       
                        <div class="adm_inputs_wrap">
                           <label class="col-lg-3 col-md-3 col-sm-12 col-xs-12">School Address</label>
                           <textarea rows="3" cols="12" class="col-lg-6 col-md-6 col-sm-12 col-xs-12"></textarea>
                        </div>
                        <div class="adm_inputs_wrap">
                           <label class="col-lg-3 col-md-3 col-sm-12 col-xs-12">Contact Number</label>
                           <input class="col-lg-6 col-md-6 col-sm-12 col-xs-12" type="text" placeholder="Contact Number" id="ContactNumber" name="ContactNumber">
                        </div>
                        <div class="adm_inputs_wrap">
                           <label class="col-lg-3 col-md-3 col-sm-12 col-xs-12">School Principal</label>
                           <input class="col-lg-6 col-md-6 col-sm-12 col-xs-12" type="text" placeholder="Principal Name" id="PrincipalName" name="PrincipalName">
                        </div>
                        <div class="adm_inputs_wrap adm_checkbox">
                           <label class="col-lg-3 col-md-3 col-sm-12 col-xs-12">School Status</label>
                           <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 drop_down">
                              <label class="checkbox-inline"><input type="checkbox" checked="checked" value="">Active</label>
                              <label class="checkbox-inline"><input type="checkbox" value="">In Active</label>
                           </div>
                        </div>
                        <div class="col-md-12">
                           <button class="signin-btn">Submit</button>
                        </div>
                     </div>
                  </div>
                  <!-- Map Class to School starts here -->
                  <div id="MapClass_School" class="tab-pane fade">
                     <h2 class="col-lg-12 col-md-12 col-sm-12 col-xs-12">Map Class to School</h2>
                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="adm_inputs_wrap">
                           <label class="col-lg-3 col-md-3 col-sm-12 col-xs-12">Select School</label>
                           <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 drop_down">
                              <div class="form-group">
                                 <select class="dropdown form-control" id="sel1">
                                    <option>Nalanda</option>
                                    <option>Google</option>
                                    <option>Bhashyam</option>
                                    <option>RSR</option>
                                 </select>
                              </div>
                           </div>
                        </div>
                        <div class="adm_inputs_wrap adm_checkbox">
                           <label class="col-lg-3 col-md-3 col-sm-12 col-xs-12">Class</label>
                           <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 drop_down">
                              <label class="checkbox-inline"><input type="checkbox" checked value="">7 <sup>th</sup> Class</label>
                              <div class="stu_inn_checker"><label class="checkbox-inline"><input type="checkbox" value="">A</label>
                                 <label class="checkbox-inline"><input type="checkbox" value="">B</label>
                                 <label class="checkbox-inline"><input type="checkbox" value="">C</label>
                                 <label class="checkbox-inline"><input type="checkbox" value="">D</label>
                              </div>
                              <label class="checkbox-inline"><input type="checkbox" value="">8 <sup>th</sup> Class</label>
                              <label class="checkbox-inline"><input type="checkbox" value="">9 <sup>th</sup> Class</label>
                              <label class="checkbox-inline"><input type="checkbox" value="">10 <sup>th</sup> Class</label>
                              <label class="checkbox-inline"><input type="checkbox" value="">11 <sup>th</sup> Class</label>
                              <label class="checkbox-inline"><input type="checkbox" value="">12 <sup>th</sup> Class</label>
                           </div>
                        </div>
                        <div class="col-md-12">
                           <button class="signin-btn">Submit</button>
                        </div>
                     </div>
                  </div>
                  
                  <!--Create Subject starts here -->
                  <div id="CreateSub_tab" class="tab-pane fade">
                     <h2 class="col-lg-12 col-md-12 col-sm-12 col-xs-12">Create Subject</h2>
                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                       
                        <div class="adm_inputs_wrap">
                           <label class="col-lg-3 col-md-3 col-sm-12 col-xs-12">Subject Code</label>
                           <input class="col-lg-6 col-md-6 col-sm-12 col-xs-12" type="text" placeholder="Subject Code" id="SubjectCode" name="Subject Code">
                        </div>
                       
                        <div class="col-md-12">
                           <button class="signin-btn">Submit</button>
                        </div>
                     </div>
                  </div>
                  <!--Create Topics starts here -->
                  <div id="CreateTopic_tab" class="tab-pane fade">
                     <h2 class="col-lg-12 col-md-12 col-sm-12 col-xs-12">Create Topic</h2>
                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="adm_inputs_wrap">
                           <label class="col-lg-3 col-md-3 col-sm-12 col-xs-12">Topic Name</label>
                           <input class="col-lg-6 col-md-6 col-sm-12 col-xs-12" type="text" placeholder="Topic Name" id="TopicName" name="TopicName">
                        </div>
                        <div class="adm_inputs_wrap">
                           <label class="col-lg-3 col-md-3 col-sm-12 col-xs-12">Topic Subject</label>
                           <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 drop_down">
                              <div class="form-group">
                                 <select class="dropdown form-control" id="sel1">
                                    <option>Multiplication and Division of Integers</option>
                                    <option>Properties of Integers</option>
                                    <option>Properties of multiplication of integers</option>
                                    <option>Word problems including integers</option>
                                    <option>Triangles</option>
                                 </select>
                              </div>
                           </div>
                        </div>
                        <div class="adm_inputs_wrap">
                           <label class="col-lg-3 col-md-3 col-sm-12 col-xs-12">Topic Code</label>
                           <input class="col-lg-6 col-md-6 col-sm-12 col-xs-12" type="text" placeholder="Topic Code" id="TopicCode" name="TopicCode">
                        </div>
                        <div class="col-md-12">
                           <button class="signin-btn">Submit</button>
                        </div>
                     </div>
                  </div>
                  <!--Upload Topics starts here -->
                  <div id="UploadTopic_tab" class="tab-pane fade">
                     <h2 class="col-lg-12 col-md-12 col-sm-12 col-xs-12">Upload Topics</h2>
                     <div class="adm_inputs_wrap">
                        <label class="col-lg-3 col-md-3 col-sm-12 col-xs-12">Select Subject</label>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 drop_down">
                           <div class="form-group">
                              <select class="dropdown form-control" id="sel1">
                                 <option>Multiplication and Division of Integers</option>
                                 <option>Properties of Integers</option>
                                 <option>Properties of multiplication of integers</option>
                                 <option>Word problems including integers</option>
                                 <option>Triangles</option>
                              </select>
                           </div>
                        </div>
                     </div>
                     <div class="custom-file-upload">
                        <label for="file-upload" class="custom-file-upload-label">
                        <i class="fa fa-cloud-upload"></i> Upload Topic
                        </label>
                        <input id="file-upload" type="file"/>
                     </div>
                     <div class="col-md-12">
                        <button class="signin-btn">Submit</button>
                     </div>
                    
                  </div>
                  <!--Upload Questions starts here -->
                  <div id="Upload_Questions" class="tab-pane fade">
                     <h2 class="col-lg-12 col-md-12 col-sm-12 col-xs-12">Upload Questions</h2>
                      <div class="adm_inputs_wrap">
                        <label class="col-lg-3 col-md-3 col-sm-12 col-xs-12">Select Code</label>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 drop_down">
                           <div class="form-group">
                              <select class="dropdown form-control" id="sel1">
                                 <option>#12345</option>
                                 <option>#25645</option>
                                  <option>#84854</option>
                                   <option>#67546</option>
                                    <option>#85745</option>
                              </select>
                           </div>
                        </div>
                     </div>
                    

                     <div class="custom-file-upload">
                        <label for="file-upload" class="custom-file-upload-label">
                        <i class="fa fa-cloud-upload"></i> Upload Topic
                        </label>
                        <input id="file-upload" type="file"/>
                     </div>
                     <div class="col-md-12">
                        <button class="signin-btn">Submit</button>
                     </div>
                    
                  </div>

                   <!--Image Questions starts here -->
                  <div id="Image_Questions" class="tab-pane fade">
                     <h2 class="col-lg-12 col-md-12 col-sm-12 col-xs-12">Create Image Questions</h2>
                     <div class="adm_inputs_wrap">
                        <label class="col-lg-3 col-md-3 col-sm-12 col-xs-12">Select Code</label>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 drop_down">
                           <div class="form-group">
                              <select class="dropdown form-control" id="sel1">
                                 <option>#12345</option>
                                 <option>#25645</option>
                                  <option>#84854</option>
                                   <option>#67546</option>
                                    <option>#85745</option>
                              </select>
                           </div>
                        </div>
                     </div>
                    
                     <div class="adm_inputs_wrap">
                           <label class="col-lg-3 col-md-3 col-sm-12 col-xs-12">Question Text</label>
                           <textarea rows="2" cols="12" class="col-lg-6 col-md-6 col-sm-12 col-xs-12"></textarea><span class="Option_cls">(Optional)</span>
                        </div>

                     <div class="custom-file-upload">
                        <label class="col-lg-3 col-md-3 col-sm-12 col-xs-12">Question Image</label>
                           
                           <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <label for="file-upload" class="custom-file-upload-label">
                        <i class="fa fa-cloud-upload"></i> Upload Image
                        </label>
                        <input id="file-upload" type="file"/>
                        </div>
                     </div>
                      <div class="custom-file-upload options-wrap">
                        <label class="col-lg-3 col-md-3 col-sm-12 col-xs-12">Option1</label>
                           
                           <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 padding0">
                        <label for="file-upload" class="custom-file-upload-label">
                        <i class="fa fa-cloud-upload"></i> Upload Image
                        </label>
                        <input id="file-upload" type="file"/>
                        </div> <span class="seperator">Or</span>
                        <input class="col-lg-3 col-md-3 col-sm-12 col-xs-12" type="text" placeholder="Text" id="TopicCode" name="TopicCode">
                     </div>
                     <div class="custom-file-upload options-wrap">
                        <label class="col-lg-3 col-md-3 col-sm-12 col-xs-12">Option2</label>
                           
                           <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 padding0">
                        <label for="file-upload" class="custom-file-upload-label">
                        <i class="fa fa-cloud-upload"></i> Upload Image
                        </label>
                        <input id="file-upload" type="file"/>
                        </div> <span class="seperator">Or</span>
                        <input class="col-lg-3 col-md-3 col-sm-12 col-xs-12" type="text" placeholder="Text" id="TopicCode" name="TopicCode">
                     </div>
                     <div class="custom-file-upload options-wrap">
                        <label class="col-lg-3 col-md-3 col-sm-12 col-xs-12">Option3</label>
                           
                           <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 padding0">
                        <label for="file-upload" class="custom-file-upload-label">
                        <i class="fa fa-cloud-upload"></i> Upload Image
                        </label>
                        <input id="file-upload" type="file"/>
                        </div> <span class="seperator">Or</span>
                        <input class="col-lg-3 col-md-3 col-sm-12 col-xs-12" type="text" placeholder="Text" id="TopicCode" name="TopicCode">
                     </div>
                     <div class="custom-file-upload options-wrap">
                        <label class="col-lg-3 col-md-3 col-sm-12 col-xs-12">Option4</label>
                           
                           <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 padding0">
                        <label for="file-upload" class="custom-file-upload-label">
                        <i class="fa fa-cloud-upload"></i> Upload Image
                        </label>
                        <input id="file-upload" type="file"/>
                        </div> <span class="seperator">Or</span>
                        <input class="col-lg-3 col-md-3 col-sm-12 col-xs-12" type="text" placeholder="Text" id="TopicCode" name="TopicCode">
                     </div>
                    
                     <div class="adm_inputs_wrap">
                           <label class="col-lg-3 col-md-3 col-sm-12 col-xs-12">Average Time</label>
                           <input class="col-lg-6 col-md-6 col-sm-12 col-xs-12" type="text" placeholder="Number in Mins" id="AvgTime" name="AvgTime">
                        </div>
                     <div class="col-md-12">
                        <button class="signin-btn">Submit</button>
                     </div>
                    
                  </div>

                   <!--Image Questions starts here -->
                  <div id="Create_Question_Paper" class="tab-pane fade">
                     <h2 class="col-lg-12 col-md-12 col-sm-12 col-xs-12">Create Question Paper</h2>
                     
                    
                    <div class="adm_inputs_wrap">
                           <label class="col-lg-3 col-md-3 col-sm-12 col-xs-12">Question Paper Name <span class="mandatory">*</span></label>
                           <input class="col-lg-6 col-md-6 col-sm-12 col-xs-12" type="text" placeholder="Question Paper Name" id="Question_Paper_Name" name="Question_Paper_Name" required="">
                        </div>

                        <div class="adm_inputs_wrap">
                           <label class="col-lg-3 col-md-3 col-sm-12 col-xs-12">Select Class</label>
                           <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 drop_down">
                              <div class="form-group">
                                 <select class="dropdown form-control" id="sel1">
                                    <option>6<sup>th</sup> Class</option>
                                    <option>7<sup>th</sup> Class</option>
                                    <option>8<sup>th</sup> Class</option>
                                    <option>9<sup>th</sup> Class</option>
                                    <option>10<sup>th</sup> Class</option>
                                    <option>11<sup>th</sup> Class</option>
                                     <option>12<sup>th</sup> Class</option>
                                 </select>
                              </div>
                           </div>
                        </div>

                        <div class="adm_inputs_wrap">
                        <label class="col-lg-3 col-md-3 col-sm-12 col-xs-12">Select Subject</label>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 drop_down">
                           <div class="form-group">
                              <select class="dropdown form-control" id="sel1">
                                 <option>Multiplication and Division of Integers</option>
                                 <option>Properties of Integers</option>
                                 <option>Properties of multiplication of integers</option>
                                 <option>Word problems including integers</option>
                                 <option>Triangles</option>
                              </select>
                           </div>
                        </div>
                     </div>

                     <div class="adm_inputs_wrap">
                           <label class="col-lg-3 col-md-3 col-sm-12 col-xs-12">Select Topic</label>
                           <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 drop_down">
                              <div class="form-group">
                                 <select class="dropdown form-control" id="sel1">
                                    <option>Topic 1</option>
                                    <option>Topic 2</option>
                                    <option>Topic 3</option>
                                    <option>Topic 4</option>
                                    <option>Topic 5</option>
                                 </select>
                              </div>
                           </div>
                        </div>
                    
                     
                     <div class="col-md-12">
                        <button class="signin-btn">Submit</button>
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
    