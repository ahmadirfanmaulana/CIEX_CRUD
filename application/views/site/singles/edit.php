<div class="col-md-12" style="margin-top:30px;">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <?php echo anchor('/', 'Home'); ?>
    </li>
    <li class="breadcrumb-item">
      <?php echo anchor('/singles', 'Singles'); ?>
    </li>
    <li class="breadcrumb-item active">Edit</li>
  </ol>

  <div class="card border-primary">
    <div class="card-header">Form Edit Singles</div>
    <div class="card-body">

      <?php echo form_open('singles/update', ['method'=>'POST', 'enctype'=>'multipart/form-data']); ?>

        <!-- Input Hidden for ID -->
        <input type="hidden" class="form-control" id="" placeholder="" name="id" value="<?php echo $single->id; ?>">

        <!-- Name -->
        <div class="form-group">
          <label for="">Name</label>
          <input type="text" class="form-control" id="" placeholder="" name="name" value="<?php echo $single->name; ?>">
          <p class="help-block"></p>
        </div>

        <!-- Reason -->
        <div class="form-group">
          <label for="">Reason</label>
          <textarea name="reason" rows="8" cols="80" class="form-control"><?php echo $single->reason; ?></textarea>
          <p class="help-block"></p>
        </div>

        <!-- Foto -->
        <div class="form-group">
          <label for="">Your Photo</label>
          <br>
          <img src="<?php echo base_url('upload/img/' . $single->foto); ?>" alt="" style="width:150px;" class="img-thumbnail">
          <br><br>
          <input type="file" class="form-control" id="" placeholder="" name="foto">
          <!-- input hidden for last foto -->
          <input type="hidden" name="last_foto" value="<?php echo $single->foto; ?>">
          <p class="help-block"> <i>* Your photo must be JPG or PNG</i> </p>
        </div>

        <div class="form-group">
          <button type="submit" name="submit" value="submit" class="btn btn-primary">Update</button>
        </div>

      <?php echo form_close(); ?>

    </div>
  </div>
</div>
