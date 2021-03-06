


<div class="">
    <?php if($this->session->flashdata('success')): ?>
        <div class="alert alert-success alert-dismissable" role="alert">
            <strong>Added Successfully!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
        </div>
    <?php endif; ?>
    <div class="panel panel-default">
        <div class="panel-heading">
        <h3 class="panel-title">Add News</h3>
        </div>
        <div class="panel-body">
        <?php echo form_open_multipart('admins/createnews'); ?>
             
                    <div class="panel-body">
                                <?php if($this->session->flashdata('error')): ?>
                                <span class="text-danger">
                                <?php echo $this->session->flashdata('error'); ?>
                                </span>
                                <?php elseif($this->session->flashdata('errorfiletype')): ?>
                                <span class="text-danger">
                                <?php echo $this->session->flashdata('errorfiletype'); ?>
                                </span>
                                <?php endif; ?>
                                <div class="form-group">
                                <?php if($this->session->flashdata('error')): ?>
                                <span class="text-danger">*</span>
                                <?php endif; ?>
                                <label>News Title</label>
                                <input type="text" name="newstitle" class="form-control">
                                </div>
                                <div class="form-group">
                                <?php if($this->session->flashdata('error')): ?>
                                <span class="text-danger">*</span>
                                <?php endif; ?>
                                <label>News Body</label>
                                <textarea name="newsbody" class="form-control ckeditor" rows="10"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Upload Image</label>
                                    <input type="file" name="img" class="form-control-file" id="image_upload">
                                </div>
                                <div class="float-right">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            
                    </div>
                </div>
                
       
                <?php echo form_close(); ?>
           
        </div>
    </div>

