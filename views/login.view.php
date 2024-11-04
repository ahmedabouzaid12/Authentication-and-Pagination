<?php if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<?php require_once ('inc/header.php')?>
<?php if(isset($_SESSION['user_logged_in'])){
    header('Location: ' . BASE_URL . 'index.php?page=home'); 
    exit;
} ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= BASE_URL.'public/' ?>style.css">
    <title>Document</title>
    <style>
        .text-danger {
            color: red; 
            font-weight: bold;
            margin-top: 5px; 
        }
        body {
        background-color: #a19c9c; /* Set background color */
        color: black; /* Ensure text color is black */
    }
    </style>
</head>
<body>
    <!--ring div starts here-->
    <form action="<?= BASE_URL."index.php?page=validat-login"?>" method="POST">
        <div class="ring">
            <i style="--clr:#00ff0a;"></i>
            <i style="--clr:#ff0057;"></i>
            <i style="--clr:#fffd44;"></i>
            <div class="login">
                <h2>Login</h2>

                <!-- Display login error message -->
                <?php if (isset($_SESSION['errors']) && isset($_SESSION['errors']['login'])): ?>
                    <span class="text-danger"><?php echo $_SESSION['errors']['login']; ?></span>
                    <?php unset($_SESSION['errors']['login']); ?> <!-- Unset after displaying -->
                <?php endif; ?>

                <div class="inputBx">
                    <input type="text" name="email" placeholder="Email">
                    <?php if (isset($_SESSION['errors']) && isset($_SESSION['errors']['email'])): ?>
                        <span class="text-danger"><?php echo $_SESSION['errors']['email']; ?></span>
                        <?php unset($_SESSION['errors']['email']); ?> <!-- Unset after displaying -->
                    <?php endif; ?>
                </div>
                <div class="inputBx">
                    <input type="phone" name="phone" placeholder="Your Phone">
                    <?php if (isset($_SESSION['errors']) && isset($_SESSION['errors']['phone'])): ?>
                        <span class="text-danger"><?php echo $_SESSION['errors']['phone']; ?></span>
                        <?php unset($_SESSION['errors']['phone']); ?> <!-- Unset after displaying -->
                    <?php endif; ?>
                </div>
                <div class="inputBx">
                    <input id="submitButton" type="submit" value="Sign in">
                </div>
                <div class="links">
                    <a href="#">Forget Password</a>
                    <a href="#">Signup</a>
                </div>
            </div>
        </div>
    </form>
    <!--ring div ends here-->
</body>
</html>
