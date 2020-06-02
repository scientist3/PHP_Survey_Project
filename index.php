<head>
</head>
<body>


  <!-- STUDENT -->
  <!-- !!!!!!!! -->
<div>
  <form class="student_registration" action="student_loggingIn.php" method="post">

  <!-- Form Name -->
  <h1>Anmeldung Student</h1>

  <!-- Text input-->
  <div class="form-group">
    <label class="control-label" for="textinput">Matrikelnummer</label>
    <div class="input">
    <input id="textinput" name="mnr_student" type="text" placeholder="MNR" class="form-control input-md" />
    </div>
  </div>

  <!-- Button (Double) -->
  <div class="form-group">
    <div class="button">
      <button id="button_safe_student" name="save_student">Anmelden</button>
    </div>
  </div>

</form>
</div>


    <!-- ANWENDER -->
    <!-- !!!!!!!! -->
<div>
  <form class="anwender_registration" action="anwender_reg.php" method="post">

  <h1>Registrierung Anwender</h1>

    <!-- Anwendername -->
  <div class="form-group">
    <label class="control-label" for="textinput">Username</label>
    <div class="input">
    <input id="textinput" name="username_anwender" type="text" placeholder="Username" class="form-control input-md">
    </div>
  </div>

    <!-- Password input-->
  <div class="form-group">
    <label class="control-label" for="passwordinput">Password</label>
    <div class="input">
      <input id="passwordinput" name="password_anwender" type="password" placeholder="password" class="form-control input-md">
    </div>
  </div>

  <!-- Button Abschicken -->
  <div class="form-group">
    <div class="button">
      <button id="button_safe_anwender" name="save_anwender">Speichern</button>
    </div>
  </div>

</form>
</div>

<!-- ANWENDER Anmeldung -->
<!-- !!!!!!!! -->
<div>
<form class="anwender_login" action="anwender_loggingIn.php" method="post">

<h1>Anmeldung Anwender</h1>

<!-- Anwendername -->
<div class="form-group">
<label class="control-label" for="textinput">Username</label>
<div class="input">
<input id="textinput" name="username_anwender_anmeldung" type="text" placeholder="Username" class="form-control input-md">
</div>
</div>

<!-- Password input-->
<div class="form-group">
<label class="control-label" for="passwordinput">Password</label>
<div class="input">
  <input id="passwordinput" name="password_anwender_anmeldung" type="password" placeholder="password" class="form-control input-md">
</div>
</div>

<!-- Button Abschicken -->
<div class="form-group">
<div class="button">
  <button id="button_safe_anwender" name="anwender_anmeldung">Anmelden</button>
</div>
</div>

</form>
</div>

</body>
