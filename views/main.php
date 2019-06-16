<html>
<head>
	<title>Shareboard</title>
	<link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/style.css">
</head>
<body>
<nav class="navbar">
    <span class="open-slide">
      <a href="#" onclick="openSlideMenu()">
        <svg width="20" height="40">
            <path d="M0,12 15,12" stroke="#fff" stroke-width="3"/>
            <path d="M0,18 15,18" stroke="#fff" stroke-width="3"/>
            <path d="M0,24 15,24" stroke="#fff" stroke-width="3"/>
        </svg>
      </a>
    </span>
		<ul class="navbar-nav">
      <li><a href="<?php echo ROOT_URL; ?>">Domů</a></li>
      <li><a href="<?php echo ROOT_URL; ?>rozvrh/">Rozvrh</a></li>
      <li><a href="<?php echo ROOT_URL; ?>shares/">Shares</a></li>
      <li><a href="<?php echo ROOT_URL; ?>brambory/">Brambory</a></li>
      <li><a href="<?php echo ROOT_URL; ?>calendar/">Kalendář</a></li>
      <li><a href="<?php echo ROOT_URL; ?>download/">Download</a></li>
      <div class="navbar-right">
      	<a href="<?php echo ROOT_URL; ?>users/register">Register</a>
      	<a href="<?php echo ROOT_URL; ?>users/login">Login</a>
     </div>
    </ul>
  </nav>
  <div id="side-menu" class="side-nav">
    <a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a>
    <a href="<?php echo ROOT_URL; ?>">Domů</a>
    <a href="<?php echo ROOT_URL; ?>rozvrh/">Rozvrh</a>
    <a href="<?php echo ROOT_URL; ?>shares/">Shares</a>
    <a href="<?php echo ROOT_URL; ?>brambory/">Brambory</a>
    <a href="<?php echo ROOT_URL; ?>calendar/">Kalendář</a>
    <a href="<?php echo ROOT_URL; ?>download/">Download</a>
    <a href="<?php echo ROOT_URL; ?>users/login">Login</a>
    <a href="<?php echo ROOT_URL; ?>users/register">Register</a>
  </div>
		

    <div class="container">

     <div class="row">
     	<?php require($view); ?>
     </div>

    </div><!-- /.container -->
</body>
<script>
  function openSlideMenu(){
    document.getElementById('side-menu').style.width = '200px';
    document.getElementById('main').style.marginLeft = '200px';
  }
  function closeSlideMenu(){
    document.getElementById('side-menu').style.width = '0';
    document.getElementById('main').style.marginLeft = '0';
  }
</script>
</html>