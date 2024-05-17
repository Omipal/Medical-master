<?php 
/*
* Template Name: Register Page
*/
get_header(); 
// if(isset($_REQUEST['submit'])){
//   global $wpdb;

//   $username = $wpdb->escape($_REQUEST['username']);
//   $email = $wpdb->escape($_REQUEST['email']);
//   $password = $wpdb->escape($_REQUEST['password']);
//   $password_conf = $wpdb->escape($_REQUEST['password_conf']);

//   $errors = array();

//   if(empty($username)

// }
?>

<main>
<div class="container">
  <div class="row">
    <div class="col-md-8 offset-md-4">
      <h3>Create an account</h3>
      <form action="" class="mx-auto" method="post">
      <label for="username">Username</label>
      <input type="text" name="username" id="username" placeholder="Username"  autocomplete="off"><br>
      <label for="email">Email Address</label>
      <input type="text" name="email" id="email" placeholder="Email"  autocomplete="off"><br>
      <label for="password">password</label>
      <input type="password" name="password" id="password" placeholder="Password"  autocomplete="off"><br>
      <label for="password_conf">Conferm Password</label>
      <input type="password" name="password_conf" id="password_conf" placeholder="Conferm Password"  autocomplete="off"><br>
      <input type="submit" name="submit" id="submit" value="Register">
      </form>
    </div>
  </div>
</div> 
</main>
<?php get_footer(); ?>