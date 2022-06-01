<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/styles.css">
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule=""
      src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.js"
    ></script>
    <title>Online Ticketing</title>
</head>
<body>
  <?php
  include "db/connect.php";
  ?>
    <main>
        <section class="section-hero">
            <div class="hero">
                  <img src="weblogo.png" class="logo" alt="logo">
                <div class="hero-text">
                  <h1 class="heading-primary">
                      Online Traffic Ticketing Portal
                  </h1>
                </div>
                <form action="">
                  <div class="check">
                    <label class="form-control">
                      <input type="radio" name="checkbox"  />
                        Client
                    </label>
                    <label class="form-control">
                      <input type="radio" name="checkbox" checked/>
                        Admin
                    </label>
                    <label class="form-control">
                      <input type="radio" name="checkbox" />
                      Enforcer
                    </label>
                  </div>
                  <div class="cta-form">
                    <div>
                      <label for="number">Client Number/Username:</label>
                      <input 
                      id="client"
                      type="text"
                      required
                      >
                    </div>
                    <div>
                      <label for="password">Password:</label>
                      <input
                        id="password"
                        type="password"
                        required
                      />
                    </div>
                    <button class="btn btn--form" onclick="login()">Log in</button>
                    </div>
                  </div>
                </form>
            </div>
        </section>
    </main>
</body>
<script src="js/script.js"></script>
</html>