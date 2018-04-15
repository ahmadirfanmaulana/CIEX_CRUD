<div class="col-md-12" style="margin-top:30px;">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <?php echo anchor('/', 'Home'); ?>
    </li>
    <li class="breadcrumb-item">
      <?php echo anchor('/singles', 'Singles'); ?>
    </li>
    <li class="breadcrumb-item active">Delete</li>
  </ol>

  <div class="card border-primary">
    <div class="card-header">Confirm Delete</div>
    <div class="card-body">

      <?php echo form_open('singles/trashing', ['method'=>'POST']); ?>

        <!-- Input Hidden for ID -->
        <input type="hidden" class="form-control" id="" placeholder="" name="id" value="<?php echo $single->id; ?>">

        <!-- Input Hidden for Foto -->
        <input type="hidden" class="form-control" id="" placeholder="" name="foto" value="<?php echo $single->foto; ?>">

        <h4>Do you want to delete this data single ?</h4>
        <table class="table-striped table-bordered table">
          <tr>
            <th>Foto</th>
            <td>:</td>
            <td>
              <img src="<?php echo base_url('upload/img/'.$single->foto); ?>" alt="" class="img-thumbnail" style="width:150px;">
            </td>
          </tr>
          <tr>
            <th>Name</th>
            <td>:</td>
            <td>
              <?php echo $single->name; ?>
            </td>
          </tr>
          <tr>
            <th>Reason</th>
            <td>:</td>
            <td>
              <?php echo $single->reason; ?>
            </td>
          </tr>
        </table>
        <div class="form-group">
          <button type="submit" name="submit" value="submit" class="btn btn-danger">Delete</button>
        </div>

      <?php echo form_close(); ?>

    </div>
  </div>
</div>
