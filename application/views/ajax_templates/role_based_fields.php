<?php

/*echo "<pre>";
print_r($role_code);
print_r($institutions);
die;*/
switch($role_code){
    case 'teacher':
    ?>
        <div class="adm_inputs_wrap">
            <label class="col-lg-3 col-md-3 col-sm-12 col-xs-12">Institution</label>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 drop_down">
                <div class="form-group">
                    <select class="dropdown form-control" id="institution" name="institution" onchange="loadSchools(this.value);">
                    <option value="0">Select Institution</option>
                    <?php
                        foreach($institutions as $institution){
                            echo "<option value=".$institution['institution_id'].">".$institution['institution_name']."</option>";
                        }
                    ?>
                    
                    </select>
                </div>
            </div>
        </div>
        <div class="adm_inputs_wrap">
            <label class="col-lg-3 col-md-3 col-sm-12 col-xs-12">School</label>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 drop_down">
                <div class="form-group">
                    <select class="dropdown form-control" disabled id="school" name="school" onchange="loadClasses(this.value);">
                    <option value="0">Select School</option>
                    <?php
                        foreach($schools as $school){
                            echo "<option value=".$school['school_id'].">".$institution['school_name']."</option>";
                        }
                    ?>
                    
                    </select>
                </div>
            </div>
        </div>


    <?php
    break;
    case 'student':
    break;
    case 'parent':
    break;
    default:
    break;
}
exit;