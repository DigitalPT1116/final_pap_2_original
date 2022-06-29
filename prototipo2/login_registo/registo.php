<?php include('server.php') ?>

<html>
  <head>
    <link rel="icon" href="../assets/images/gym.svg">
    <title>DIGITAL PT</title>

  </head>

<body>

<div class="wrapper">
<form name="frmUser" method="post" action="" align="center">
<form action="registo.php" method="post">

    <div class="form-group">
    <h1 align="center">Registo utilizador</h1>

    <div class="form-group">
    <input type="text" name="username"  value="<?php echo $username; ?>"placeholder="username" required />
    </div>

    <div class="form-group">
    <input type="text" name="fullname" value="<?php echo $fullname; ?>" placeholder="fullname" required />
    </div>

    <div class="form-group">
    <input type="date" name="dateofbirth" value="<?php echo $dateofbirth; ?>" placeholder="dateofbirth" required />
    </div>

    <div class="form-group">
    <input type="email" name="email" value="<?php echo $email; ?>" placeholder="email" required />
    </div>

    <div class="form-group">
    <input type="password" name="password" value="<?php echo $password; ?>" placeholder="password" required />
    </div>
    
    <br>

        <div class="form-group">
        <input type="submit" name="submit" value="Registar" >
        <input type="reset">
</div>

    </div>
</form>
</form>
</body>
<style>
      body{ font: 14px sans-serif; }
        .wrapper{ width: 860px; padding: 200px; margin: auto; }

body {
    background-color: #303641;
}

h1 {
color: #fff
}
    input[type=text] {
  width: 40%;
  padding: 0.375rem 0.75rem;
  margin: 8px 0;
  box-sizing: border-box;
  border-radius: 0.25rem;
  border: 1px solid #ed563b;
}

input[type=password] {
  width: 40%;
  padding: 0.375rem 0.75rem;
  margin: 8px 0;
  box-sizing: border-box;
  border-radius: 0.25rem;
  border: 1px solid #ed563b;
}

input[type=email] {
  width: 40%;
  padding: 0.375rem 0.75rem;
  margin: 8px 0;
  box-sizing: border-box;
  border-radius: 0.25rem;
  border: 1px solid #ed563b;
}

input[type=date] {
  width: 40%;
  padding: 0.375rem 0.75rem;
  margin: 8px 0;
  box-sizing: border-box;
  border-radius: 0.25rem;
  border: 1px solid #ed563b;
}

label {
    display: inline-block;
    margin-bottom: 0.5rem;
    color: #fff;
    font: 17px sans-serif;
    text-transform: uppercase;
}

input[type=submit] {
   
    width: 20%;
    height: calc(1.5em + 0.75rem + 2px);
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ed563b;
    border-radius: 0.25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    background-color: #ed563b;
    color: #fff;
}

input[type=reset] {
   
   width: 20%;
   height: calc(1.5em + 0.75rem + 2px);
   padding: 0.375rem 0.75rem;
   font-size: 1rem;
   font-weight: 400;
   line-height: 1.5;
   color: #495057;
   background-color: #fff;
   background-clip: padding-box;
   border: 1px solid #ed563b;
   border-radius: 0.25rem;
   transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
   background-color: #ed563b;
    color: #fff;
}
</style>
</html>