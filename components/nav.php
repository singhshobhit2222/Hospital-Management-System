<nav class="navbar bg-warning">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li <?php if(strpos($_SERVER['PHP_SELF'],"index.php")) { echo 'class="active"';}?>><a href="index.php">Home</a></li>
        <li <?php if(strpos($_SERVER['PHP_SELF'],"dd.php")) { echo 'class="active"';}?>><a href="#" data-toggle="dropdown">Doctors' Details</a>   <ul class="dropdown-menu">
          <li><a href="dd.php?type=Physician">Physician</a></li>
          <li><a href="dd.php?type=EyeSpecialist">Eye Specialist</a></li>
          <li><a href="dd.php?type=Cardiologist">Cardiologist</a></li>
          <li><a href="dd.php?type=Neurologist">Neurologist</a></li>
          <li><a href="dd.php?type=Physiothrapist">Physiothrapist</a></li>
        </ul></li>
        <li <?php if(strpos($_SERVER['PHP_SELF'],"pharmacy.php")) { echo 'class="active"';}?>><a href="pharmacy.php">Pharmacy</a></li>
        <li <?php if(strpos($_SERVER['PHP_SELF'],"laboratory.php")) { echo 'class="active"';}?>><a href="laboratory.php">Laboratory</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <?php if (!isset($_SESSION['log'])) { ?>
          <li <?php if(strpos($_SERVER['PHP_SELF'],"register.php")) { echo 'class="active"';}?> class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <span class="glyphicon glyphicon-user"></span> Register<span class="caret"></span>
            <ul class="dropdown-menu dropdown-menu-right">
              <li><a href="register.php?type=doc">Doctor Registration</a></li>
              <li><a href="register.php?type=pat">Patient Registration</a></li>
              <li><a href="register.php?type=stf">Staff Registration</a></li>
            </ul>
          </a></li>
          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <span class="glyphicon glyphicon-log-in"></span> Login <span class="caret"></span>
            <ul class="dropdown-menu dropdown-menu-right">
              <li><a href="#" data-toggle="modal" data-target="#doctorLogin">Doctor Login</a></li>
              <li><a href="#" data-toggle="modal" data-target="#patientLogin">Patient Login</a></li>
              <li><a href="#" data-toggle="modal" data-target="#staffLogin">Staff Login</a></li>
              <li class="divider"></li>
              <li><a href="#" data-toggle="modal" data-target="#adminLogin">Admin Login</a></li>
            </ul>
          </a></li>
      <?php } else { ?>
          <li><a href="actions/logout.php?logout"><span class="glyphicon glyphicon-off"></span> Logout</a></li>
      <?php } ?>
      </ul>
    </div>
  </div>
</nav>