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
    <script src="../instascan.min.js"></script>
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
                        <button onclick="hideShow()"><ion-icon class="icon-qr" name="qr-code-outline"></ion-icon></button>
                      </div>
                      <input
                        type="text" id="qr"
                        required
                      />
                    </div>
                    <video id="preview"></video>
                    <button type="submit" name="login" class="btn btn--form">Submit</button>
                      <button type="submit" name="logout" class="btn btn--log">
                          <ion-icon name="log-out-outline"></ion-icon>
                          Logout
                    </div>
                    </div>
                  </div>
                </form>
            </div>
        </section>
    </main>
</body>
<script src="js/script.js"></script>
<!-- For the show and hide video -->
<script>
  function hideShow() {
  var x = document.getElementById("preview");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>
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