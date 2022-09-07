<?php require_once  './products.php'?>

<?php    require_once  './functions.php'?>
<?php    require_once  'templeate_shop/detail.php'?>
<div id="box"></div>
<?php include_once 'inc_shop/header.php'?>
<div class="wrapper">
   <?php include_once 'inc_shop/sidebar.php'?>
<main class="comp-nond">

        <div class="adm" style="background: #FFE4E1;">
        <form action="action_page.php">
        <div class="container">
        <h1 style="margin: 20px 0 0 20px; ">Зарегистрироваться</h1>
        <p class="reg-text1" style="background: #FFE4E1;">Пожалуйста, заполните эту форму, чтобы создать учетную запись.</p>
       
        <label style="margin:10px;" for="email"><b>Email</b></label>
        <input style="margin:10px;" type="text" placeholder="Enter Email" name="email" required>
        
        <br>
        <label style="margin:10px;" for="psw"><b>Password</b></label>
        <input style="margin:10px;" type="password" placeholder="Enter Password" name="psw" required>
       
        <br>
    <label style="margin:10px;" for="psw-repeat"><b>Repeat Password</b></label>
    <input style="margin:10px;" type="password" placeholder="Repeat Password" name="psw-repeat" required>
    <br>

    <p class="reg-text2" style="background: #FFE4E1;">By creating an account you agree to our <a href="#" style="color: blue; font-size: 17px;">Terms & Privacy</a>.</p>
    <button type="submit" class="registerbtn" style="margin: 0 0 10px 150px;">Зарегистрироваться</button>
  </div>

  <div class="container signin">
    <p class="reg-text3" style="background: #FFE4E1;">Already have an account? <a href="#" style="color: blue; font-size: 17px;">Sign in</a>.</p>
  </div>
</form> 
        </div>
</main>
</div>

<?php include_once 'inc_shop/footer.php'?>

