<?php include_once('../includes/header.php'); ?>

<?php include_once('../includes/nav.php'); ?>

<main class="wrapper main-content" role="main">

    <div class="grid">

        <div class="grid-item large--one-third push--large--one-third text-center">

            <div class="note form-success" id="resetSuccess" style="display:none;">
                We've sent you an email with a link to update your password.
            </div>

            <form method="post" action="/account/login" id="customer_login" accept-charset="UTF-8"><input type="hidden"
                    name="form_type" value="customer_login"><input type="hidden" name="utf8" value="✓">

                <h1>Login</h1>





                <label for="customer_email" class="hidden-label">Email</label>
                <input type="email" value="" name="customer[email]" id="customer_email" placeholder="Email"
                    autocorrect="off" autocapitalize="off" autofocus="">



                <label for="customer_password" class="hidden-label">Password</label>
                <input type="password" value="" name="customer[password]" id="customer_password" placeholder="Password">

                <p>
                    <a href="#" onclick="showRecoverPasswordForm();return false;">Forgot your password?</a>
                </p>



                <p>
                    <input type="submit" class="btn" value="Sign In">
                </p>
                or <a href="/">Return to Store</a>

            </form>



            <div id="recover_password" style="display: none;">

                <h2>Reset your password</h2>
                <p>We will send you an email to reset your password.</p>

                <form method="post" action="/account/recover" accept-charset="UTF-8"><input type="hidden"
                        name="form_type" value="recover_customer_password"><input type="hidden" name="utf8" value="✓">







                    <label for="recover-email" class="hidden-label">Email</label>
                    <input type="email" value="" name="email" id="recover-email" placeholder="Email" autocorrect="off"
                        autocapitalize="off">

                    <p>
                        <input type="submit" class="btn" value="Submit">
                    </p>
                    or <a href="#" onclick="hideRecoverPasswordForm();return false;">Cancel</a>

                </form>

            </div>



        </div>

    </div>



    <script>
        /*
    Show/hide the recover password form when requested.
  */
        function showRecoverPasswordForm() {
            document.getElementById('recover_password').style.display = 'block';
            document.getElementById('customer_login').style.display = 'none';
        }

        function hideRecoverPasswordForm() {
            document.getElementById('recover_password').style.display = 'none';
            document.getElementById('customer_login').style.display = 'block';
        }

        // Allow deep linking to the recover password form
        if (window.location.hash == '#recover') {
            showRecoverPasswordForm()
        }

        // reset_success is only true when the reset form is
    </script>


</main>

<?php include_once('../includes/footer.php'); ?>