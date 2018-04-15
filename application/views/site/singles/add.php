<div class="col-md-12" style="margin-top:30px;">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <?php echo anchor('/', 'Home'); ?>
    </li>
    <li class="breadcrumb-item">
      <?php echo anchor('/singles', 'Singles'); ?>
    </li>
    <li class="breadcrumb-item active">Add</li>
  </ol>

  <div class="card border-primary">
    <div class="card-header">Form Singles</div>
    <div class="card-body">

      <?php echo form_open('singles/create', ['method'=>'POST', 'enctype'=>'multipart/form-data']); ?>

        <!-- Name -->
        <div class="form-group">
          <label for="">Name</label>
          <input type="text" class="form-control" id="" placeholder="" name="name" required>
          <p class="help-block"></p>
        </div>

        <!-- Reason -->
        <div class="form-group">
          <label for="">Reason</label>
          <textarea name="reason" rows="8" cols="80" class="form-control" required></textarea>
          <p class="help-block"></p>
        </div>

        <!-- Foto -->
        <div class="form-group">
          <label for="">Your Photo</label>
          <input type="file" class="form-control" id="" placeholder="" name="foto" required>
          <p class="help-block"> <i>* Your photo must be JPG or PNG</i> </p>
        </div>

        <div class="form-group">
          <button type="submit" name="submit" value="submit" class="btn btn-primary">Save</button>
        </div>

      <?php echo form_close(); ?>

    </div>
  </div>
</div>
