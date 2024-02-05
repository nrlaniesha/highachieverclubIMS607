<?php
include "db_conn.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>High Achievers' Club</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
</style>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h3 class="w3-padding-64"><b>HAC<br>UiTMCK</b></h3>
  </div>
  <div class="w3-bar-block">
    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a> 
    <a href="#showcase" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Committee</a> 
    <a href="#services" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Membership</a> 
    <a href="#designers" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Activities</a> 
    <a href="#packages" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Achievments</a> 
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Contact</a>
    <a href="admin/index.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Administrator</a>
  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>
  <span>Company Name</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <!-- Header -->
  <div class="w3-container" style="margin-top:80px" id="showcase">
    <h1 class="w3-jumbo"><b>High Achievers' Club UiTMCK</b></h1>
    <h1 class="w3-xxxlarge w3-text-red"><b>Committee</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
  </div>
  
  <!-- First Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center" id="sha">
    <div class="w3-quarter">
      <img src="/pmis/shaa.jpg" alt="Sha" style="width:100%">
      <h3>NURUL ANIESHA SHAHJAHAN KAMAL</h3>
      <p>(President)</p>
    </div>
    <div class="w3-quarter">
      <img src="/pmis/anis.jpg" alt="Steak" style="width:100%">
      <h3>NUR ANIS ALIA MOHD NOOR</h3>
      <p>(Vice President)</p>
    </div>
    <div class="w3-quarter">
      <img src="/pmis/imey.jpg" alt="Cherries" style="width:100%">
      <h3>IMAN AMALIN AZMIN</h3>
      <p>(Secretary)</p>
    </div>
    <div class="w3-quarter">
      <img src="/pmis/sis.jpg" alt="Pasta and Wine" style="width:100%">
      <h3>TENGKU AZILAH AKMA TENGKU JELANI</h3>
      <p>(Treasurer)</p>
    </div>
  </div>
  
  <!-- Services -->
  <div class="w3-container" id="services" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Membership.</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>

  
  <p align="center"><h3>Membership form for HAC 2024</h3></p>
    <a href="add-new.php" class="btn btn-dark mb-3">Add New</a>

    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Email</th>
          <th scope="col">Gender</th>
        </tr>
      </thead>
      <tbody>
   
        <?php
        $sql = "SELECT * FROM `members`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["id"] ?></td>
            <td><?php echo $row["first_name"] ?></td>
            <td><?php echo $row["last_name"] ?></td>
            <td><?php echo $row["email"] ?></td>
            <td><?php echo $row["gender"] ?></td>
            <td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>

  
  <!-- Designers -->
  <div class="w3-container" id="designers" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Activities.</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>"Unlock your potential with the premier club of achievers!"</p>
    <p>The High Achievers Club at UiTMCK needs to organize top-quality activities to attract and retain ambitious members, build a positive reputation, support members' goals, foster engagement, and create a meaningful impact in the community. By offering excellent activities aligned with members' aspirations, the club can maintain its standard of excellence and fulfill its mission effectively.
    </p>
    <p><b>Here are some of our most outstanding activities</b>:</p>
  </div>

  <!-- The Team -->
  <div class="w3-row-padding w3-grayscale">
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <div class="w3-container">
          <h3>Workshops and Seminars</h3>
          <p>Members attend workshops and seminars focused on skill-building, leadership development, time management, goal setting, and other relevant topics to enhance their abilities.</p>
        </div>
      </div>
    </div>
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <div class="w3-container">
          <h3>Mentoring Programs</h3>
          <p> High achievers participate in mentoring programs where they receive guidance, support, and advice from experienced mentors within the club or external mentors.</p>
        </div>
      </div>
    </div>
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <div class="w3-container">
          <h3>Guest Speaker Events</h3>
          <p>The club invites successful individuals from various fields to share their experiences, insights, and advice with members, inspiring and motivating them to achieve their goals.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Packages / Pricing Tables -->
  <div class="w3-container" id="packages" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Achievements.</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>Welcome to the Achievement Section of the High Achievers' Club! Here, we celebrate the remarkable accomplishments of our members and highlight their outstanding contributions to personal and professional growth.</p>
  </div>

  <div class="w3-row-padding">
    <div class="w3-half w3-margin-bottom">
      <ul class="w3-ul w3-light-grey w3-center">
        <li class="w3-dark-grey w3-xlarge w3-padding-32">Event Achievements</li>
        <li class="w3-padding-16">2021-Hosted the inaugural Leadership Summit, featuring renowned speakers and industry leaders to inspire and empower members.
</li>
        <li class="w3-padding-16">2022-Successfully organized a virtual networking event, connecting members with professionals from various industries.</li>
        <li class="w3-padding-16">2023-Conducted a comprehensive career development workshop, providing members with valuable insights and resources for professional growth.</li>
    </div>
        
    <div class="w3-half">
      <ul class="w3-ul w3-light-grey w3-center">
        <li class="w3-red w3-xlarge w3-padding-32">Member Recognition Achievements</li>
        <li class="w3-padding-16">2021-Recognized outstanding member contributions with the inaugural "Member of the Year" award.</li>
        <li class="w3-padding-16">2022-Presented academic excellence awards to members who achieved remarkable academic milestones.</li>
        <li class="w3-padding-16">2023-Acknowledged members who demonstrated exceptional leadership skills and contributions to the club.
</li>
      </ul>
    </div>
  </div>
  
  <!-- Contact -->
  <div class="w3-container" id="contact" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Contact.</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>"Join our vibrant community of high achievers! Elevate your potential and connect with like-minded individuals by becoming a part of our esteemed club today."</p>
    <form action="/action_page.php" target="_blank">
      <div class="w3-section">
        <label>Name</label>
        <input class="w3-input w3-border" type="text" name="Name" required>
      </div>
      <div class="w3-section">
        <label>Email</label>
        <input class="w3-input w3-border" type="text" name="Email" required>
      </div>
      <div class="w3-section">
        <label>Message</label>
        <input class="w3-input w3-border" type="text" name="Message" required>
      </div>
      <button type="submit" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom">Send Message</button>
    </form>  
  </div>

<!-- End page content -->
</div>

<!-- W3.CSS Container -->
<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right">Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-opacity">w3.css</a></p></div>

<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
</script>

</body>
</html>
