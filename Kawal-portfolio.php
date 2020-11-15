<!DOCTYPE html>
<html lang="en">
<title>Software Engineer Portfolio</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
.w3-third img{margin-bottom: -6px; opacity: 0.8; cursor: pointer}
.w3-third img:hover{opacity: 1}
</style>
<body class="w3-content" style="max-width:1600px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-light-grey w3-bar-block w3-white w3-animate-left w3-collapse w3-top w3-center w3-border-right" style="z-index:3;width:300px;font-weight:bold" id="mySidebar"><br>
  <h3 class="w3-padding-16 w3-center w3-text-teal"><b>Kanwal</b></h3>
  <h5 class="w3-padding-16 w3-center">Software Engineer</h5>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-hide-large">CLOSE</a>
  <a href="#" onclick="w3_close()" class="w3-bar-item w3-button">Portfolio</a>
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">About Me</a>
  <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">Contact</a>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-light-grey w3-top w3-hide-large w3-white w3-xlarge w3-padding-16  w3-border-bottom">
  <span class="w3-left w3-padding">Kanwal</span>
  <a href="javascript:void(0)" class="w3-right w3-button w3-teal" onclick="w3_open()">☰</a>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

  <!-- Push down content on small screens -->
  <div class="w3-hide-large" style="margin-top:83px"></div>
  <div class="w3-container w3-center w3-padding-32" id="portfolio">
    <h3><b>Portfolio</b></h3>
  <!-- Photo grid -->
  <div class="w3-row">
    <div class="w3-card w3-center w3-margin-top" style="width:95%">
      <header class="w3-container w3-padding w3-teal w3-left-align">
        <h4>Weather Forcast</h4>
      </header>
      <img src="/img/weather-forcast.png" class="w3-border w3-margin" style="width:80%" alt="Weather Forcast">
      <div class="w3-container w3-left-align" style="width:90%">
        <p>
          <h5>Find out temperature, humidity, and weather conditions.</h5>
          This ReactJS web app is developed for weather forecasting, it is fetching data from openweathermap. The user has to enter the correct city and country name, and the app will display Temperature, Humidity, and Weather Conditions.<br/><br/>
          It will also display the city's main image retrieved from Wikipedia using a  wiki API, and if there is no image match then the default image will display.
        </p>
        <h5><b>Technologies: </b>ReactJS, API, Form, ES6 & SASS</h5>
        <div class="w3-bar w3-margin-bottom">
          <a href='https://weather-forecast-eleganthtml.netlify.app/' target='_blank'><button class="w3-btn w3-ripple w3-teal">Link</button></a>
          <a href='https://github.com/eleganthtml/weather-forecast' target='_blank'><button class="w3-btn w3-ripple w3-teal">Github</button></a>
        </div>
      </div>
    </div>

    <div class="w3-card w3-center w3-margin-top" style="width:95%">
      <header class="w3-container w3-padding w3-teal w3-left-align">
        <h4>The Most Livable Cities</h4>
      </header>
      <img src="/img/the-most-livable-cities.png" class="w3-border w3-margin" style="width:80%" alt="The Most Livable Cities in the world">
      <div class="w3-container w3-left-align" style="width:90%">
        <p>This react app displays the most livable cities and overall rating in the world. The rating is based on Stability, Healthcare, Environment, Education & Infrastructure. The data is stored in a js file from where it is fetched and displayed.
        </p>
        <h5><b>Technologies: </b>ReactJS, ES6, SASS</h5>
        <div class="w3-bar w3-margin-bottom">
          <a href='https://the-most-livable-city-eleganthtml.netlify.app/' target='_blank'><button class="w3-btn w3-ripple w3-teal">Link</button></a>
          <a href='https://github.com/eleganthtml/the-most-livable-city' target='_blank'><button class="w3-btn w3-ripple w3-teal">Github</button></a>
        </div>
      </div>
    </div>

    <div class="w3-card w3-center w3-margin-top" style="width:95%">
      <header class="w3-container w3-padding w3-teal w3-left-align">
        <h4>React Redux Game</h4>
      </header>
      <img src="/img/react-redux-game.png" class="w3-border w3-margin" style="width:80%" alt="React Redux Game">
      <div class="w3-container w3-left-align" style="width:90%">
        <p>
          This game is to search for a treasure box in the forest. Users could use arrow keys to move the character. The character could pass through a few trees to reach at the treasure.
        </p>
        <h5><b>Technologies: </b>ReactJS, Redux, ES6, and SASS</h5>
        <div class="w3-bar w3-margin-bottom">
          <a href='https://react-redux-game-eleganthtml.netlify.app/' target='_blank'><button class="w3-btn w3-ripple w3-teal">Link</button></a>
          <a href='https://github.com/eleganthtml/react-redux-game' target='_blank'><button class="w3-btn w3-ripple w3-teal">Github</button></a>
        </div>
      </div>
    </div>

    <div class="w3-card w3-center w3-margin-top" style="width:95%">
      <header class="w3-container w3-padding w3-teal w3-left-align">
        <h4>City Pizza</h4>
      </header>
      <img src="/img/city-pizza.png" class="w3-border w3-margin" style="width:80%" alt="City Pizza">
      <div class="w3-container w3-left-align" style="width:90%">
        <p>
          This is a static website using React Router for navigating from one page to another.
        </p>
        <h5><b>Technologies: </b>ReactJS, Router, and ES6</h5>
        <div class="w3-bar w3-margin-bottom">
          <a href='https://city-pizza-eleganthtml.netlify.app/' target='_blank'><button class="w3-btn w3-ripple w3-teal">Link</button></a>
          <a href='https://github.com/eleganthtml/city-pizza' target='_blank'><button class="w3-btn w3-ripple w3-teal">Github</button></a>
        </div>
      </div>
    </div>
  </div>
</div>

  <!-- Modal for full size images on click-->
  <div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
    <span class="w3-button w3-black w3-xlarge w3-display-topright">×</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <img id="img01" class="w3-image">
      <p id="caption"></p>
    </div>
  </div>

  <!-- About section -->
  <div class="w3-container w3-dark-grey w3-center w3-text-light-grey w3-padding-32" id="about">
    <h3><b>About Me</b></h3>
    <div class="w3-content w3-justify" style="max-width:600px">
      <h4>Kanwal</h4>
      <p>
      	Enthusiastic Software Engineer with more than 10 years of experience participating in the complete development lifecycle of successfully launched web applications. In previous roles, I raised the productivity of the sales team by 15%; and enhanced management's decision making power by 20%.
      </p>
      <hr class="w3-opacity">
      <h4 class="w3-padding-16">Technical Skills</h4>
      <p class="w3-wide">PHP5</p>
      <div class="w3-white">
        <div class="w3-container w3-padding-small w3-center w3-teal" style="width:85%"></div>
      </div>
      <p class="w3-wide">MySQL</p>
      <div class="w3-white">
        <div class="w3-container w3-padding-small w3-center w3-teal" style="width:85%"></div>
      </div>
      <p class="w3-wide">Javascript</p>
      <div class="w3-white">
        <div class="w3-container w3-padding-small w3-center w3-teal" style="width:85%"></div>
      </div>
      <p class="w3-wide">HTML5</p>
      <div class="w3-white">
        <div class="w3-container w3-padding-small w3-center w3-teal" style="width:85%"></div>
      </div>
      <p class="w3-wide">CSS3</p>
      <div class="w3-white">
        <div class="w3-container w3-padding-small w3-center w3-teal" style="width:85%"></div>
      </div>
      <p class="w3-wide">SASS</p>
      <div class="w3-white">
        <div class="w3-container w3-padding-small w3-center w3-teal" style="width:65%"></div>
      </div>
      <p class="w3-wide">SEO</p>
      <div class="w3-white">
        <div class="w3-container w3-padding-small w3-center w3-teal" style="width:60%"></div>
      </div>
      <p class="w3-wide">ES6</p>
      <div class="w3-white">
        <div class="w3-container w3-padding-small w3-center w3-teal" style="width:40%"></div>
      </div>
      <p class="w3-wide">ReactJS</p>
      <div class="w3-white">
        <div class="w3-container w3-padding-small w3-center w3-teal" style="width:50%"></div>
      </div>
      <p class="w3-wide">Node</p>
      <div class="w3-white">
        <div class="w3-container w3-padding-small w3-center w3-teal" style="width:33%"></div>
      </div>
      <hr class="w3-opacity">
    </div>
  </div>

  <!-- Contact section -->
  <div class="w3-container w3-dark-grey w3-padding-32 w3-padding-large" id="contact">
    <div class="w3-content" style="max-width:600px">
      <h3 class="w3-center"><b>Contact Me</b></h3>
      <?PHP
      if(isset($_POST['submit']) && $_POST['phone'] == ''){
        $to = "Kanwal.engineer@gmail.com";
        $from = $_POST['Email'];
        $name = $_POST['Name'];
        $subject = "Form submission";
        $message = $name . " wrote the following:" . "\n\n" . $_POST['Message'] . "From" . $from;

        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // More headers
        mail($to,$subject,$message,$headers);
      }
      ?>
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" target="_blank" method="post">
        <div class="w3-section">
          <label>Name</label>
          <input class="w3-input w3-border" type="text" name="Name" required>
        </div>
        <div class="w3-section">
          <label>Email</label>
          <input class="w3-input w3-border" type="email" name="Email" required>
        </div>
        <div class="w3-section">
          <label>Message</label>
          <input class="w3-input w3-border" type="text" name="Message" required>
        </div>
        <div class="w3-section" style="visibility:hidden">
          <label>Phone</label>
          <input class="w3-input w3-border" type="text" name="phone">
        </div>
        <button type="submit" class="w3-button w3-teal w3-margin-bottom">Send Message</button>
      </form>
    </div>
  </div>
  <div class="w3-dark-grey w3-center w3-padding-24">Kanwal &#169; 2020</div>

<!-- End page content -->
</div>

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
</script>


</body>
</html>
