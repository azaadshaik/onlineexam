

<section class="Signin-sec">
<div class="container">
   
<div class="signin-inner">
<div class="alert-danger"><?php echo $this->session->flashdata('message');?></div>
               <div class="col-lg-3 col-md-2 col-sm-2"></div>
               <div class="col-lg-6 col-md-8 col-sm-8">
			   <form method="post" >
                  <div class="sign-bgcolor">
                     <div class="col-lg-12 col-md-12 col-sm-12"><h3>New user registration</h3></div>
                     <div class="col-md-12 Username-wrap">
                        <input type="text" class="input-fields form-control" placeholder="Username" id="username" name="username" required="">
                        <span class="user-alert" style="display: none;">Please Enter Correct User Name</span>
                     </div>
                     <div class="col-md-12">
                        <input type="Password" class="input-fields form-control" placeholder="Password" id="password" name="password" required="">
                        <span class="user-alert" style="display: none;">Please Enter Correct Password</span>
                     </div>
                     <div class="col-md-12">
                        <input type="text" class="input-fields form-control" placeholder="First name" id="firstname" name="firstname" required="">
                        <span class="user-alert" style="display: none;">Please Enter Correct Password</span>
                     </div>
                     <div class="col-md-12">
                        <input type="text" class="input-fields form-control" placeholder="Last name" id="lastname" name="lastname" required="">
                        <span class="user-alert" style="display: none;">Please Enter Correct Password</span>
                     </div>
                     <div class="col-md-12">
                       
                        <select name="userrole" class="input-fields form-control">
                        <option value="">Select Role</option> 
                        <?php
                           
                         foreach($this->data['roles'] as $value){
                             echo '<option value="'.$value["role_id"].'">'.$value["role_name"].'</option>';
                         }
                        ?>
                        </select>
                        
                        <span class="user-alert" style="display: none;">Please Enter Correct Password</span>
                     </div>

                     
                     <div class="col-md-12">
                        <button class="signin-btn">Register</button>
                     </div>
                  </div>
				  </form>
               </div>
               <div class="col-lg-3 col-md-2 col-sm-2"></div>
            </div>
         
</div>
</section>