<?php if($this->session->flashdata('success')): ?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <strong>Updated Successfully!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
        </div>
        <?php endif;?>
        <?php if($this->session->flashdata('deletesuccess')): ?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <strong>Deleted Successfully!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
        </div>
        <?php endif;?>
         <!--DataTables announcement-->
         <div class="card mb-3">
        <div class="card-header">
            <i class="fa fa-table"></i> Projects</div>
        <div class="card-body">
            <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>Title</th>
                    <th>Objective</th>
                    <th>Description</th>
                    <th>Location</th>
                    <th>Budget</th>
                    <th>Fund Source</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>Title</th>
                    <th>Objective</th>
                    <th>Description</th>
                    <th>Location</th>
                    <th>Budget</th>
                    <th>Fund Source</th>
                    <th>Action</th>
                </tr>
                </tfoot>
                <tbody>
                
                <?php foreach($projects as $project): ?>
                    <tr>
                    <td style="width: 20%"><?php echo $project['title'] ?></td>
                    <td style="width: 50%"><?php echo $project['objective']; ?></td>
                    <td style="width: 20%"><?php echo word_limiter($project['description'], 5); ?></td>
                    <td style="width: 50%"><?php echo $project['location']; ?></td>
                    <td style="width: 20%"><?php echo $project['budget'] ?></td>
                    <td style="width: 50%"><?php echo $project['fund_source']; ?></td>
                    <td style="width: 30%" align="center">
                        <a href="<?php echo base_url('Admin_Pages/editproject/'.$project['id']);?>" class="mt-1 ml-1 mb-1 btn btn-info btn-sm" role="button" aria-pressed="true"><i class="fa fa-fw fa-edit"></i> Edit</a>
                        <button type="button" class="mt-1 ml-1 mb-1 btn btn-danger btn-sm confirm-delete" data-url="<?php echo site_url('admins/deleteproject/')?>" data-id="<?php echo $project['id']; ?>"><i class="fa fa-fw fa-trash-o"></i> Delete</button>
                     </td>
                    </tr>
                <?php endforeach; ?>
                
                </tbody>
            </table>
            </div>
        </div>
        
        </div>
        <!-- Delete Modal-->
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete Record</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        </div>
                        <div class="modal-body">Are you sure you want to delete this record?</div>
                        <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a style="color:white" class="btn btn-primary" id="btnConfirm">Confirm</a>
                        
                        </div>
                    </div>
                    </div>
        </div>

        