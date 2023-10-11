<div class="content-wrapper">
<section class="content-header">
      <h1>
        Data Project
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Project</li>
      </ol>
    </section>
    <section class="content">
        <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"> <i class="fa fa-plus"></i> Tambah Data</button>
        <table  class="table table-striped">
            <tr>
                <th>No</th>
                <th>Project Name</th>
                <th>Client</th>
                <th colspan="2">Project Leader</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Progress</th>
                <th colspan="2">Action</th>
            </tr>
            <?php
            $no = 1;
            foreach ($project as $prj) : ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $prj->project_name ?></td>
                <td><?= $prj->client ?></td>
                <td><img src="<?= base_url();?>assets/img/<?php echo $prj->img; ?>" width="50px" height="50px" class="img-circle"></td>
                <td><?= $prj->project_leader ?></td>
                <td><?= $prj->start_date ?></td>
                <td><?= $prj->end_date ?></td>
                <td><div class="progress" style="height: 5px">
	            <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                </div>50%</td>
                <td onclick="javascript: return confirm('Anda yakin menghapus data?')"><?php echo anchor('project/hapus/'.$prj->id, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>')?></td>
                <td><?php echo anchor('project/edit/'.$prj->id,'<div class="btn btn-success btn-sm"><i class="fa fa-pencil"></i></div>')?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </section>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Form Input Data</h4>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php echo form_open_multipart('project/tambah_aksi'); ?> 
                <div class="form-group">
                    <label>Project Name</label>
                    <input type="text" name="project_name" class="form-control">
                </div>
                <div class="form-group">
                    <label>Client</label>
                    <input type="text" name="client" class="form-control">
                </div>
                <div class="form-group">
                    <label>Project Leader</label>
                    <input type="text" name="project_leader" class="form-control">
                </div>
                <div class="form-group">
                    <label>Start Date</label>
                    <input type="date" name="start_date" class="form-control">
                </div>
                <div class="form-group">
                    <label>End Date</label>
                    <input type="date" name="end_date" class="form-control">
                </div>
                <div class="form-group">
                    <label>Image</label>
                    <input type="file" name="img" class="form-control">
                </div>

                <button type="reset" class="btn btn-danger" >Reset</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
    <?php echo form_close(); ?>
      </div>
    </div>
  </div>
</div>
</div>