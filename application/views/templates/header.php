<!DOCTYPE html>
<html>
<head>
	<title>CI Blog</title>
	<link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
</head>
<body>
<!-- Grey with black text -->
<nav class="navbar navbar-expand-sm bg-light navbar-light">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="<?php echo base_url();?>home">Active</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url();?>">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url();?>about">About</a>
    </li>
    <li class="nav-item">
      <a class="nav-link disabled" href="#">Disabled</a>
    </li>
  </ul>
</nav>

<!-- Black with white text -->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">...</nav>

<!-- Blue with white text -->
<nav class="navbar navbar-expand-sm bg-primary navbar-dark">...</nav>