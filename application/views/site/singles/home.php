<div class="col-md-12" style="margin-top:30px;">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <?php echo anchor('/', 'Home'); ?>
    </li>
    <li class="breadcrumb-item active">Singles</li>
  </ol>

  <div class="card border-primary">
    <div class="card-header">List Singles</div>
    <div class="card-body">
      <?php echo anchor('singles/add', '+ New', ['class'=>'btn btn-primary']); ?>
      <br><br>
      <table class="table table-striped table-bordered">
        <thead>
          <tr>
            <th class="text-center">No</th>
            <th class="text-center">Photo</th>
            <th class="text-center">Name</th>
            <th class="text-center">Reason</th>
            <th class="text-center">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          if ($singles->num_rows() > 1) {
            $no = 1;
            foreach ($singles->result() as $single) {
              ?>
              <tr>
                <td class="text-center"><?php echo $no; ?></td>
                <td class="text-center">
                  <img src="<?php echo base_url('upload/img/' . $single->foto); ?>" alt="" style="width:50px;">
                </td>
                <td><?php echo $single->name; ?></td>
                <td><?php echo $single->reason; ?></td>
                <td class="text-center">
                  <?php echo anchor('singles/edit/' . $single->id, 'Edit', ['class'=>'btn btn-info btn-sm']); ?>
                  <?php echo anchor('singles/delete/' . $single->id, 'Delete', ['class'=>'btn btn-danger btn-sm']); ?>
                </td>
              </tr>
              <?php
              $no++;
            }
          }
          else {
            ?>
            <tr>
              <td class="text-center" colspan="5">
                Empty Data Singles
              </td>
            </tr>
            <?php
          }
           ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
