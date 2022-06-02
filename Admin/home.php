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
    <link rel="stylesheet" href="../css/styles.css">
   
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule=""
      src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.js"
    ></script>
    <title>Admin Page</title>
</head>
<body>
    <?php include('../php/get_profile.php')?>
    <div class="wrapper">
        <div class="sidebar">
            <div class="profile">
                <!-- make the image responsive -->
                
                <img src="../images/<?php echo $fname ?>.jpg" alt="user-image">
                <h3 class="heading-tertiary"><?php echo $fname . " " . $lname;?></h3>
                <p>Admin</p>
            </div>
            <ul>
                <li class="selectedLink" name="profile">
                    <a href="#" class="active">
                        <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                        <span class="item">View Profile</span>
                    </a>
                </li>
                <li name="violations">
                    <a href="#">
                        <span class="icon"><ion-icon name="ticket-outline"></ion-icon></span>
                        <span class="item">View Violations</span>
                    </a>
                
                </li>
                <form id="logout" method="post">
                  <ion-icon name="log-out-outline"></ion-icon>
                    <button type="submit" name="logout" class="btn btn--logout">
                    <ion-icon name="log-out-outline"></ion-icon>
                        Logout</button>
                </form>
            </ul>
        </div>
        <div class="section">
            <div class="top_navbar">
                <div class="hamburger">
                    <a href="#">
                        <ion-icon name="filter-outline"></ion-icon>
                    </a>
                </div>
            </div>
            <div class="card active home" data-profile>
                <div class="title-user">Administrator Information</div>
                <div class="content">
                    <form action="">
                        <div class="user-details">
                            <div class="input-box">
                                <span class="details">Last Name</span>
                                <input type="text" value="<?php echo $lname?>" readonly>
                            </div>
                            <div class="input-box">
                                <span class="details">First Name</span>
                                <input type="text" value="<?php echo $fname?>" readonly>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="title-user">General Information</div>
                <div class="content">
                    <form action="">
                        <div class="user-details">
                            <div class="input-box">
                                <span class="details">Nationality</span>
                                <input type="text" value="<?php echo $nationality?>" readonly>
                            </div>
                            <div class="input-box">
                                <span class="details">Civil Status</span>
                                <input type="text" value="<?php echo $civilstatus?>" readonly>
                            </div>
                            <div class="input-box">
                                <span class="details">Date of Birth</span>
                                <input type="text" value="<?php echo $dob?>" readonly>
                            </div>
                            <div class="input-box">
                                <span class="details">Place of Birth</span>
                                <input type="text" value="<?php echo $pob?>" readonly>
                            </div>
                            <div class="input-box">
                                <span class="details">Educational Attainment</span>
                                <input type="text" value="<?php echo $educ?>" readonly>
                            </div>
                            <div class="input-box">
                                <span class="details">TIN</span>
                                <input type="text" value="<?php echo $tin?>" readonly>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card violations" data-violations>
                <div class="title-user">Violations</div>
                <table>
                    <thead>
                        <tr>
                            <th scope="col">Date</th>
                            <th scope="col">Violator</th>
                            <th scope="col">Violations</th>
                            <th scope="col">Offense</th>
                            <th scope="col">Enforcer</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td data-label="Date">06-01-2022</td>
                            <td data-label="Violator">Levi Adina</td>
                            <td data-label="Violations">Beating the redlight</td>
                            <td data-label="Offense">1st Offense</td>
                            <td data-label="Enforcer">Karl Erbin Viernes</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="./card.js"></script>
    <script>
        var hamburger = document.querySelector(".hamburger");
        hamburger.addEventListener("click", function(){
          document.querySelector("body").classList.toggle("active");
        })
      </script>
</body>
</html>