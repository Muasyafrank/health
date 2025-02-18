<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>MedicalCare - Your Health is Our Priority</title>
  <style>
    /* Global Reset */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    /* Body & Typography */
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      line-height: 1.6;
    }

    /* Header */
    header {
      background-color: #007bff;
      padding: 20px;
      color: #fff;
    }
    .header-container {
      max-width: 1200px;
      margin: 0 auto;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }
    .logo {
      font-size: 1.8em;
      font-weight: bold;
    }
    .auth-buttons {
      display: flex;
      gap: 10px;
    }
    .auth-buttons a {
      text-decoration: none;
      padding: 8px 16px;
      border: 1px solid #fff;
      border-radius: 4px;
      color: #fff;
      transition: background-color 0.3s ease, color 0.3s ease;
    }
    .auth-buttons a:hover {
      background-color: #fff;
      color: #007bff;
    }

    /* Hero Section */
    .hero {
      background: url('home.png');
      background-position:center;
      background-repeat: no-repeat;
      height: 600px;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      color: black;
    }
    .hero-content h1 {
      font-size: 3em;
      margin-bottom: 20px;
    }
    .hero-content p {
      font-size: 1.2em;
      max-width: 600px;
      margin: 0 auto;
    }
  </style>
</head>
<body>
  <header>
    <div class="header-container">
      <div class="logo">DoctorCare</div>
      <div class="auth-buttons">
        <a href="index.php">Login</a>
        <a href="index.php">Sign Up</a>
      </div>
    </div>
  </header>

  <section class="hero">
    <div class="hero-content">
      <h1>Welcome to DoctorCare</h1>
      <p>
        Your health is our priority. Experience quality medical care with our dedicated team of professionals.
      </p>
    </div>
  </section>
</body>
</html>
