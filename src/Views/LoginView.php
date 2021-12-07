<?php

namespace App\Views;


class LoginView
{
  public function __construct()
  { 
    echo ('<h3>LOG IN</h3><form method="post" action="" name="signin-form">
    <div class="form-element">
        <label>Username</label>
        <input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
    </div>
    <div class="form-element">
        <label>Password</label>
        <input type="password" name="password" required />
    </div>
    <button type="submit" name="login" value="login">Log In</button><br>
    <a href="/register">Register</a>
</form>');
}
}
