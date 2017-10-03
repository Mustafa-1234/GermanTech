<?php include 'header.php';?>
  <div class="main-content">
      <form class="formRegister" method="post" action="#">
          <div class="formRegisterEmail">
            <div class="formBg">
              <div class="formTitleRow">
                <h1>Create an account</h1>
            </div>
            <div class="formRow">
              <label>
                <span>Name</span>
                <input type="text" name="name">
              </label>
            </div>
            <div class="formRow">
              <label>
                <span>Email</span>
                <input type="email" name="email">
              </label>
            </div>
            <div class="formRow">
              <label>
                <span>Password</span>
                <input type="password" name="password">
              </label>
            </div>
            <div class="formRow">
              <label class="formCheckBox">
                <input type="checkbox" name="checkbox" checked>
                <span>I agree to the <a href="#">terms and conditions</a></span>
              </label>
            </div>
            <div class="formRow">
              <button type="submit">Register</button>
            </div>
          </div>
        </div>
        <div class="formSocial">
          <div class="formRow formTitleRow">
            <span class="formTitle">Sign in with</span>
          </div>
          <a href="https://www.gmail.com/" class="formGoogle">Google</a>
          <a href="https://www.facebook.com/" class="formFacebook">Facebook</a>
          <a href="https://www.twitter.com/" class="formTwitter">Twitter</a>
        </div>
      </form>
    </div>
  </div>
</body>
<script>
   $('#toggle').click(function() {
    $(this).toggleClass('active');
    $('#overlay').toggleClass('open');
});
</script>
</html>
