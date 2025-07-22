<main class="form-signin w-100 m-auto">
    <form action="loginf.php" method="post">
      <h1 class="h3 mb-3 fw-normal">Login</h1>
      <div class="form-floating"> 
        <input type="username" class="form-control" name="username" id="username" placeholder="name@example.com"> 
        <label for="username">username</label> 
      </div>
      <div class="form-floating"> 
        <input type="password" class="form-control" id="password" name="password" placeholder="password"> 
        <label for="password">Password</label> 
      </div>
      <div class="form-check text-start my-3"> 
        <input class="form-check-input" type="checkbox" value="remember-me" id="checkDefault"> 
        <label class="form-check-label" for="checkDefault">
          Remember me
        </label> 
      </div> 
      <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
    </form>
  </main>

