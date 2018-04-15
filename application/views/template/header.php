<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-minty.css'); ?>">

    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Single &amp; Reason</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <?php echo anchor('/', 'Home', ['class' => 'nav-link']); ?>
      </li>
      <li class="nav-item">
        <?php echo anchor('singles', 'Singles', ['class' => 'nav-link']); ?>
      </li>
    </ul>
    <?php echo form_open('singles/result', ['method'=>'post', 'class'=>"form-inline my-2 my-lg-0"]); ?>
      <input class="form-control mr-sm-2" type="text" placeholder="Search Single" name="keyword" value="<?php echo $this->input->post('keyword'); ?>">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit" value="submit" name="submit">Search</button>
    <?php echo form_close(); ?>
  </div>
</nav>

<div class="container">
  <div class="row">
