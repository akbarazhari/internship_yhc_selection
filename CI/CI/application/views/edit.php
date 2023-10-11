<div class="content-wrapper">
    <section class="content">
        <h4>Edit Data</h4>
        <?php
        foreach ($project as $prj) { ?>
        <form action="<?php echo base_url().'project/update'; ?>" method="POST">
    
        <div class="form-group">
                <label>Project Name</label>
                <input type="hidden" name="id" class="form-control" value="<?php echo $prj->id?>">
                <input type="text" name="project_name" class="form-control" value="<?php echo $prj->project_name?>">
            </div>
            <div class="form-group">
                <label>Client</label>
                <input type="text" name="client" class="form-control" value="<?php echo $prj->client?>">
            </div>
            <div class="form-group">
                <label>Project Leader</label>
                <input type="text" name="project_leader" class="form-control" value="<?php echo $prj->project_leader?>">
            </div>
            <div class="form-group">
                <label>Start Date</label>
                <input type="date" name="start_date" class="form-control" value="<?php echo $prj->start_date?>">
            </div>
            <div class="form-group">
                <label>End Date</label>
                <input type="date" name="end_date" class="form-control" value="<?php echo $prj->end_date?>">
            </div>
            <button type="submit" class="btn btn-success">Save changes</button>
            <button type="reset" class="btn btn-warning">Reset</button>
        </form>
            

        <?php } ?>
    </section>
</div>