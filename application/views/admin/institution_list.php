<!--User List starts here -->
                  
<h2 class="col-lg-12 col-md-12 col-sm-12 col-xs-12">Institutions</h2>
                     
                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div id="table-search-input">
                           <div class="input-group col-md-6">
                              <input type="text" class="form-control input-lg" placeholder="Search" />
                              <span class="input-group-btn">
                              <button class="btn btn-info btn-lg" type="button">
                              <i class="fa fa-search-plus"></i>
                              </button>
                              </span>
                           </div>
						   <div class="col-md-3 pull-right">
                              
                              <span class="input-group-btn">
                              <button class="btn btn-info btn-lg" type="button" onclick="createNew('admin/create_institute','institutions_tab');">
                              <i class="fa fa-search-plus">Create New</i>
                              </button>
                              </span>
                           </div>
                        </div>
                        <div class="user-table">
                           <table class="table table-bordered table-striped">
                              <thead>
                                 <tr>
                                    <th scope="col">S.No</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Code</th>
                                    <th scope="col">Total Schools</th>
                                    <th scope="col">Actions</th>
                                 </tr>
                              </thead>
                              <tbody>
                              <?php 
                                $i=1;
                              foreach($institution_list as $institution) { ?>

                              
                                 <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $institution['institution_name'];?></td>
                                    <td><?php echo $institution['institution_code'];?></td>
                                    <td>9</td>
                                    <td class="sub-table">
                                       <table class="table table-bordered table-striped">
                                          <tbody>
                                             <tr>
                                                <td><a href="#" data-toggle="dropdown" title="View"><i class="fa fa-eye"></i></a></td>
                                                <td><a href="#" data-toggle="dropdown" title="Edit"><i class="fa fa-pencil-square-o"></i></a></td>
                                                <td><a href="#" data-toggle="dropdown" title="Delete"><i class="fa fa-trash"></i></a></td>
                                             </tr>
                                          </tbody>
                                       </table>
                                    </td>
                                 </tr>
                               <?php 
                            
                                $i++;

                                } 
                            
                            ?>  
                                 
                              </tbody>
                           </table>
                        </div>
                     </div>
                  