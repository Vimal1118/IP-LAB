<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>User Registration</title>
<style>
{
box-sizing: border-box;
margin: 0;
padding: 0;
}
body {
font-family: Arial, sans-serif;
min-height: 100vh;
display: flex;
justify-content: center;
align-items: center;
background: linear-gradient(135deg, #dbeafe, #ede9fe);
padding: 20px;
}
.container {
width: 100%;
max-width: 450px;
background: white;
padding: 35px;
border-radius: 18px;
box-shadow: 0 15px 35px rgba(0, 0, 0, 0.12);
}
h1 {
text-align: center;
color: #4f46e5;
margin-bottom: 8px;
}
.subtitle {
text-align: center;
color: #6b7280;
margin-bottom: 25px;
font-size: 14px;
}
.form-group {
margin-bottom: 18px;
}
label {
display: block;
margin-bottom: 7px;
font-weight: bold;
color: #374151;
}
input {
width: 100%;
padding: 12px 14px;
border: 1px solid #d1d5db;
border-radius: 9px;
font-size: 15px;
outline: none;
transition: 0.3s;
}
input:focus {
border-color: #6366f1;
box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.15);
}
button {
width: 100%;
padding: 13px;
border: none;
border-radius: 9px;
background: linear-gradient(135deg, #4f46e5, #7c3aed);
color: white;
font-size: 16px;
font-weight: bold;
cursor: pointer;
transition: 0.3s;
}
button:hover {
transform: translateY(-2px);
box-shadow: 0 8px 18px rgba(79, 70, 229, 0.3);
}
.footer {
text-align: center;
margin-top: 20px;
color: #9ca3af;
font-size: 12px;
}
</style>
</head>
<body>
<div class="container">
<h1>Registration</h1>
<p class="subtitle">
Create your account with secure validation
</p>
<form method="POST" action="validate.php">
<div class="form-group">
<label for="email">Email Address</label>
<input
type="email"
id="email"
name="email"
placeholder="example@gmail.com"
required>
</div>
<div class="form-group">
<label for="password">Password</label>
<input
type="password"
id="password"
name="password"
placeholder="Enter your password"
required>
</div>
<div class="form-group">
<label for="ccnumber">Credit Card Number</label>
<input
type="text"
id="ccnumber"
name="ccnumber"
placeholder="16-digit card number"
maxlength="16"
required>
</div>
<div class="form-group">
<label for="phone">Phone Number</label>
<input
type="text"
id="phone"
name="phone"
placeholder="10-digit phone number"
maxlength="10"
required>
</div>
<button type="submit">
Register
</button>
</form>
<div class="footer">
Server-Side Validation using PHP
</div>
</div>
</body>
</html>

<?php
$errors = array();
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';
$ccnumber = $_POST['ccnumber'] ?? '';
$phone = $_POST['phone'] ?? '';
/* Email Validation /
if (!preg_match("/^[\w.-]+@[\w.-]+.\w{2,4}$/", $email)) {
$errors[] = "Invalid email format.";
}
/* Password Validation /
if (!preg_match("/^.{6,}$/", $password)) {
$errors[] = "Password must contain at least 6 characters.";
}
/* Credit Card Validation /
if (!preg_match("/^[0-9]{16}$/", $ccnumber)) {
$errors[] = "Credit card number must contain exactly 16 digits.";
}
/* Phone Number Validation /
if (!preg_match("/^[0-9]{10}$/", $phone)) {
$errors[] = "Phone number must contain exactly 10 digits.";
}
?>