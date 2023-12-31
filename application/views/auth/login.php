<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>

<style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Poppins:wght@100;200;400&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: #23242a;
}

.box {
    position: relative;
    width: 380px;
    height: 420px;
    background: #1c1c1c;
    border-radius: 8px;
    overflow: hidden;
}

.box::before,
.box::after,
.borderLine::before,
.borderLine::after {
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 380px;
    height: 420px;
    z-index: 1;
    transform-origin: bottom right;
    animation: animate 6s linear infinite;
}

.box::before,
.borderLine::before {
    background: linear-gradient(0deg, transparent, transparent, #45f3ff, #45f3ff, #45f3ff);
}

.box::after,
.borderLine::after {
    animation-delay: -3s;
    background: linear-gradient(0deg, transparent, transparent, #ff2770, #ff2770, #ff2770);
}

.borderLine,
.borderLine::before,
.borderLine::after {
    position: absolute;
    top: 0;
    inset: 0;
}

.borderLine::before {
    animation-delay: -1.5s;
}

.borderLine::after {
    animation-delay: -4.5s;
}

@keyframes animate {
    0% {
        transform: rotate(0deg);
    }

    100% {
        transform: rotate(360deg);
    }
}

.box form {
    position: absolute;
    inset: 4px;
    background: #222;
    padding: 50px 40px;
    border-radius: 8px;
    z-index: 2;
    display: flex;
    flex-direction: column;
}

.box form h2 {
    color: #fff;
    font-weight: 500;
    text-align: center;
    letter-spacing: 0.1em;
}

.box form .inputBox {
    position: relative;
    width: 300px;
    margin-top: 35px;
}

.box form .inputBox input {
    width: 100%;
    padding: 20px 10px;
    background: transparent;
    outline: none;
    border: none;
    box-shadow: none;
    color: #23242a;
    font-size: 1em;
    letter-spacing: 0.05em;
    transition: 0.5s;
    z-index: 10;
    cursor: text;
}

.box form .inputBox label {
    position: absolute;
    left: 10px;
    top: 10px;
    color: #8f8f8f;
    font-size: 1em;
    letter-spacing: 0.05em;
    transition: 0.5s;
    cursor: text;
}

.box form .inputBox input:valid~label,
.box form .inputBox input:focus~label {
    top: -20px;
    font-size: 0.75em;
    color: #fff;
}

.box form .inputBox i {
    position: absolute;
    left: 0;
    bottom: 0;
    width: 100%;
    height: 2px;
    background: #fff;
    border-radius: 4px;
    overflow: hidden;
    transition: 0.5s;
}

.box form .inputBox input:valid~i,
.box form .inputBox input:focus~i {
    height: 44px;
}

.box form .links {
    display: flex;
    justify-content: space-between;
    margin-top: 20px;
}

.box form .links a {
    font-size: 0.75em;
    color: #8f8f8f;
    text-decoration: none;
    cursor: pointer;
}

.box form .links a:hover,
.box form .links a:nth-child(2) {
    color: #fff;
}

.box form input[type="submit"] {
    border: none;
    outline: none;
    padding: 9px 25px;
    background: #fff;
    cursor: pointer;
    font-size: 0.9em;
    border-radius: 4px;
    font-weight: 600;
    width: 100px;
    margin-top: 10px;
}

.box form input[type="submit"]:active {
    opacity: 0.8;
}
</style>

<body>
    <div class="box">
        <form>
            <h2>Sign In</h2>
            <div class="inputBox">
                <input type="text" required="required" />
                <label>Username</label>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="password" required="required" />
                <label>Password</label>
                <i></i>
            </div>
            <input type="submit" value="Login" />
            <div class="links">
                <a href="#">Forgot Password</a>
                <a href="register">Sign In</a>
            </div>

        </form>
    </div>
</body>

</html>