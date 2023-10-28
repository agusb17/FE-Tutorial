<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
</head>

<style>
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
    height: 550px;
    /* Increased height for additional fields */
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
    height: 550px;
    /* Adjusted height for additional fields */
    z-index: 1;
    transform-origin: bottom right;
    animation: animate 6s linear infinite;
}

/* ... (existing styles for animations) ... */

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
    margin-bottom: 20px;
    /* Added margin for better spacing */
}

.box form .inputBox {
    position: relative;
    width: 100%;
    margin-top: 20px;
    /* Adjusted margin for better spacing */
}

.box form .inputBox input {
    width: calc(100% - 20px);
    padding: 10px;
    background: transparent;
    outline: none;
    border: none;
    box-shadow: none;
    color: #fff;
    font-size: 1em;
    letter-spacing: 0.05em;
    transition: 0.5s;
    z-index: 10;
    border-bottom: 1px solid #8f8f8f;
    /* Added bottom border */
}

.box form .inputBox label {
    position: absolute;
    left: 10px;
    top: 50%;
    transform: translateY(-50%);
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
    color: #45f3ff;
    /* Changed color for active/focused state */
}

.box form .inputBox i {
    position: absolute;
    left: 0;
    bottom: 0;
    width: 100%;
    height: 2px;
    background: #45f3ff;
    /* Changed color for active/focused state */
    border-radius: 4px;
    overflow: hidden;
    transition: 0.5s;
}

.box form .inputBox input:valid~i,
.box form .inputBox input:focus~i {
    height: 100%;
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
    transition: color 0.3s;
}

.box form .links a:hover,
.box form .links a:nth-child(2) {
    color: #45f3ff;
    /* Changed color for hover state */
}

.box form input[type="submit"] {
    border: none;
    outline: none;
    padding: 12px 25px;
    background: #45f3ff;
    /* Changed color for the submit button */
    cursor: pointer;
    font-size: 1em;
    border-radius: 4px;
    font-weight: 600;
    width: 100%;
    margin-top: 20px;
    /* Adjusted margin for better spacing */
    transition: background 0.3s;
}

.box form input[type="submit"]:hover {
    background: #fff;
    /* Changed color on hover for the submit button */
}

.box form input[type="submit"]:active {
    opacity: 0.8;
}
</style>


<body>
    <div class="box">
        <form>
            <h2>Register</h2>
            <div class="inputBox">
                <input type="text" required="required" />
                <label>First Name</label>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="text" required="required" />
                <label>Last Name</label>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="text" required="required" />
                <label>Email</label>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="password" required="required" />
                <label>Password</label>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="password" required="required" />
                <label>Confirm Password</label>
                <i></i>
            </div>
            <div class="links">
                <a href="#">Forgot Password</a>
                <a href="index">Sign In</a>
            </div>
            <input type="submit" value="Register" />
        </form>
    </div>
</body>

</html>