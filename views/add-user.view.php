<?php 
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<?php require_once ('inc/header.php')?>
<link rel="stylesheet" href="<?= BASE_URL.'public/' ?>style.css">

<style>
    .text-danger {
        color: red; 
        font-weight: bold;
        margin-top: 5px; 
    }
    .text-success {
        color: green;
        font-weight: bold;
        margin-top: 5px;
    }
    body {
        background-color: #a19c9c; /* Set background color */
        color: black; /* Ensure text color is black */
    }
    .login h2 {
        color: white; 
    }
    .login .links a {
        color: black; /* Change link color to black */
    }
    
    .inputBx input[type="submit"] {
        width: 100%;
        background: #0078ff;
        background: linear-gradient(45deg, #ff357a, #fff172);
        border: none;
        cursor: pointer;
    }
    .inputBx input {
        position: relative;
        width: 100%;
        padding: 6px 10px !important; 
        background: transparent;
        border: 2px solid #fff;
        border-radius: 40px;
        font-size: 0.9em !important; 
        color: #fff;
        box-shadow: none;
        outline: none;
    }
</style>
</head>
<body>
    <form action="<?= BASE_URL."index.php?page=validate-user"?>" method="POST">
        <div class="ring">
            <i style="--clr:#00ff0a;"></i>
            <i style="--clr:#ff0057;"></i>
            <i style="--clr:#fffd44;"></i>
            <div class="login">
                <h2>Add User</h2>

                <!-- Display success message -->
                <?php if (isset($_SESSION['success'])): ?>
                    <span class="text-success"><?php echo $_SESSION['success']; ?></span>
                    <?php unset($_SESSION['success']); ?> <!-- Unset after displaying -->
                <?php endif; ?>

                <div class="inputBx">
                    <input type="text" name="name" placeholder="Your Name">
                    <?php if (isset($_SESSION['errors']) && isset($_SESSION['errors']['name'])): ?>
                        <span class="text-danger"><?php echo $_SESSION['errors']['name']; ?></span>
                        <?php unset($_SESSION['errors']['name']); ?> <!-- Unset after displaying -->
                    <?php endif; ?>
                </div>
                <div class="inputBx">
                    <input type="text" name="email" placeholder="Email">
                    <?php if (isset($_SESSION['errors']) && isset($_SESSION['errors']['email'])): ?>
                        <span class="text-danger"><?php echo $_SESSION['errors']['email']; ?></span>
                        <?php unset($_SESSION['errors']['email']); ?> <!-- Unset after displaying -->
                    <?php endif; ?>
                </div>
                <div class="inputBx">
                    <input type="password" name="password" placeholder="Password">
                    <?php if (isset($_SESSION['errors']) && isset($_SESSION['errors']['password'])): ?>
                        <span class="text-danger"><?php echo $_SESSION['errors']['password']; ?></span>
                        <?php unset($_SESSION['errors']['password']); ?> <!-- Unset after displaying -->
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
</body>
</html>
