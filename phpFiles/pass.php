<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style15.css">
    <title>Login Page</title>
</head>
<body>
    <div class="login-container">
        <div class="avatar-container">
            <img src="Animal.jpg" alt="Animal Avatar" id="avatar" class="avatar">
            <div class="eyes" id="left-eye"></div>
            <div class="eyes" id="right-eye"></div>
        </div>
        <form id="login-form">
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" oninput="handleInput('email')" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" oninput="handleInput('password')" required>

            <button type="submit">Login</button>
        </form>
    </div>
    <script src="script.js"></script>



<script>
function handleInput(inputType) {
    const leftEye = document.getElementById('left-eye');
    const rightEye = document.getElementById('right-eye');

    if (inputType === 'email') {
        // Eyes open when typing email
        leftEye.style.height = '0px';
        rightEye.style.height = '0px';
    } else if (inputType === 'password') {
        // Eyes close when typing password
        leftEye.style.height = '20px';
        rightEye.style.height = '20px';
    }
}
</script>
</body>
</html>