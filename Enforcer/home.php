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
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule=""
      src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.js"
    ></script>
    <script src="/instascan.min.js"></script>
    <title>Enforcer</title>
</head>
<body>
  <?php include('../php/get_profile.php');?>
    <main>
        <section class="section-hero">
            <div class="hero hero--enforcer">
                <div class="hero-text">
                  <h1 class="heading-primary-small">
                      Enforcer:
                  </h1>
                  <h3 class="heading-tertiary-small">
                  <?php echo $fname . " " . $lname?>
                  </h3>
                </div>
                <form action="" method="POST">
                  
                  <div class="cta-form">
                    <div>
                      <label for="violation">VIOLATIONS</label>
                          <select id="violation" >
                              <option value="">Please choose one option:</option>
                          </select>
                      </div>
                    <div>
                      <div class="icon-container">
                        <ion-icon class="icon-qr" name="qr-code-outline"></ion-icon>
                      </div>
                      <label>
                        <button class="btn btn--scan">Scan Client Number</button>
                      </label>
                      <video id="preview"></video>
                      
                      <input
                        type="text" id="qr"
                        required
                      />
                    </div>
                    <button type="submit" name="login" class="btn btn--form">Submit</button>
                    </div>
                  </div>
                </form>
            </div>
        </section>
    </main>
</body>
<script src="js/script.js"></script>
<script type="text/javascript">
let scanner = new Instascan.Scanner({ video: document.getElementById('preview') });
scanner.addListener('scan', function (content) {
  console.log(content);
  document.getElementById("qr").value = content;
  });
  Instascan.Camera.getCameras().then(function (cameras) {
  if (cameras.length > 0) {
  scanner.start(cameras[1]);
                            
  } else {
    console.error('No cameras found.');
    }
  }).catch(function (e) {
    console.error(e);
  });
</script>
</html>