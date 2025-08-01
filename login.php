<?php // load header
/* login.php 
    * This file contains the login form for users to sign in to their accounts.
    * It includes validation messages and error handling.
    * After a short fronted validation in auth.js, this form submits to the auth.php formhandler for processing and login and session management logic
    * Input validation is done in auth.js to prevent the ugly default browser error messages. (e.g.when using the required attribute) 
*/
include_once 'assets/includes/header.php';

// Start session to read error messages
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<main>
    <div class="auth-container">
        <!-- Logo and Welcome Message -->
        <img src="assets/img/logo.svg" alt="Recipe Cloud Logo" class="logo" width="40" height="40">
        <h1>Welcome Back</h1>
        <p>Enter your credentials to access your account</p>
        <form id="login-form" method="POST" action="be-logic/formhandler/auth.php">
            <input type="hidden" name="action" value="login">
            <div class="input-group">
                <label for="login-username">Username</label>
                <div>
                    <input type="text" id="login-username" name="login-username" autocomplete="username" placeholder="JohnDoe" class="<?php echo isset($_SESSION['errors']['username']) ? 'error-input' : ''; ?>">
                    <?php if (isset($_SESSION['errors']['username'])) {
                        echo "<p class=\"error-message\">
                                    " . htmlspecialchars($_SESSION['errors']['username']) . "
                                </p>";
                        unset($_SESSION['errors']['username']);
                    } ?>
                </div>
            </div>
            <div class="input-group">
                <label for="login-password">Password</label>
                <div>
                    <input type="password" id="login-password" name="login-password" autocomplete="current-password" class="<?php echo isset($_SESSION['errors']['password']) ? 'error-input' : ''; ?>">
                    <button type="button" class="password-toggle" tabindex="-1" onclick="togglePasswordVisibility('login-password')">
                        <svg xmlns="http://www.w3.org/2000/svg" class="eye-icon" fill="none" width="16" height="16" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" display="none" class="eye-off-icon" width="16" height="16" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 0 0 1.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.451 10.451 0 0 1 12 4.5c4.756 0 8.773 3.162 10.065 7.498a10.522 10.522 0 0 1-4.293 5.774M6.228 6.228 3 3m3.228 3.228 3.65 3.65m7.894 7.894L21 21m-3.228-3.228-3.65-3.65m0 0a3 3 0 1 0-4.243-4.243m4.242 4.242L9.88 9.88" />
                        </svg>
                    </button>
                    <?php if (isset($_SESSION['errors']['password'])) {
                        echo "<p class=\"error-message\">
                                    " . htmlspecialchars($_SESSION['errors']['password']) . "
                                </p>";
                        unset($_SESSION['errors']['password']);
                    } ?>
                </div>
            </div>
            <button type="submit">Sign in</button>
        </form>
        <p class="auth-mode-switch">Don't have an account? <a href="register">Register</a></p>

    </div>
</main>
<?php // load footer
include_once 'assets/includes/footer.php';
?>