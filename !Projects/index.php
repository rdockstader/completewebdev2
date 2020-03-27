<?php

    //Email from contact form
if($_POST) {
    $emailTo = "rydocdevelopment@gmail.com";
    $subject = $_POST["contact-form-subject"];
    $body = htmlspecialchars($_POST["contact-form-body"])."\r\n\r\n"."From: ".$_POST["contact-form-email"];
    $header = "from: noreply@rydocdevelopment.com";
    
    //echo($body);
    
    mail($emailTo, $subject, $body, $header);
}

?>



<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous"> 
        <link rel="stylesheet" href="style.css">

        
        
    </head>
    <body data-spy="scroll" data-target="#mainnb" data-offset="150">
        <!--SCROLLSPY IS SETUP IN THE BODY TAG -->
        <!-- NAVBAR -->
        <nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse fixed-top" id="mainnb">
          <button class="navbar-toggler navbar-toggler-right " type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <a class="navbar-brand" href="#">RyDoc Development</a>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav" role="tablist">
              <li class="nav-item">
                <a class="nav-link" href="#home" id="home-button">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#my-sites" id="my-sites-button">My Sites</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#previous-versions" id="prev-versions-button">Previous Versions</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#other-projects" id="other-projects-button">Other Projects</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about-me" id="about-me-button">About Me</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact-me" id="contact-me-button">Contact Me</a>
              </li>
            </ul>
          </div>
        </nav>
        <!-- JUMBOTRON -->
        <div class="jumbotron top" id="home">
          <h1 class="display-3">RyDoc Development</h1>
          <p class="lead">Helping  you to get your professional website up, and in the view of as many people as possible</p>
          <hr class="my-4">
          <p>Click Here to Contact me</p>
          <p class="lead">
            <a class="btn btn-primary btn-lg" href="#contact-me" role="button">Contact Me</a>
          </p>
        </div>
        <!-- Main Content -->
        <div class="container">
            <div id="my-sites">
                <h3 class="content-header">My Sites</h3>
                <div class="row">
                    <div class="col-xl-4">
                        <div class="card" style="width: 20rem;">
                          <img class="card-img-top" src="JonsVintageSleds/Images/snowmobile-placeholder.png" alt="Card image cap">
                          <div class="card-block">
                            <h4 class="card-title">Jon's Vintage Sleds</h4>
                            <p class="card-text">This was my first attempt at a full site, with adverstising capability. This was built entirely in HTML/CSS/JS with no framework</p>
                            <a href="/JonsVintageSleds/home.html" target="_blank" class="btn btn-primary">Visit the Template Site</a>
                          </div>
                        </div>
                    </div>
                    <!--<div class="col-xl-4">
                        <div class="card" style="width: 20rem;">
                          <img class="card-img-top" src="Images/Global/card.jpg" alt="Card image cap">
                          <div class="card-block">
                            <h4 class="card-title">Card title</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                          </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card" style="width: 20rem;">
                          <img class="card-img-top" src="Images/Global/card.jpg" alt="Card image cap">
                          <div class="card-block">
                            <h4 class="card-title">Card title</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                          </div>
                        </div>
                    </div>-->
                </div>
            <div id="previous-versions">
                <h3 class="content-header">Previous Versions</h3>
                <p class="lead">This site is constantly being updated, check here for previous site versions</p>
                 <div class="row">
                    <div class="col-xl-4">
                        <div class="card" style="width: 20rem;">
                          <img class="card-img-top" src="Images/Global/header-background.jpg" alt="Card image cap">
                          <div class="card-block">
                            <h4 class="card-title">Version 1.0</h4>
                            <p class="card-text">This was the very first live version of this website. It was built without a framework of any kind.</p>
                            <a href="1.0/home.html" target="_blank" class="btn btn-primary">View version 1.0</a>
                          </div>
                        </div>
                    </div>
                    <!--<div class="col-xl-4">
                        <div class="card" style="width: 20rem;">
                          <img class="card-img-top" src="Images/Global/card.jpg" alt="Card image cap">
                          <div class="card-block">
                            <h4 class="card-title">Card title</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                          </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card" style="width: 20rem;">
                          <img class="card-img-top" src="Images/Global/card.jpg" alt="Card image cap">
                          <div class="card-block">
                            <h4 class="card-title">Card title</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                          </div>
                        </div>
                    </div>-->
                </div>
            </div>
            </div>
            <div id="other-projects">
                <h3 class="content-header">Other Projects</h3>
                    <div class="card other-project-card">
                      <h3 class="card-header">Android/iOS App</h3>
                      <div class="card-block">
                        <h4 class="card-title">Simplify Budgetting App</h4>
                        <p class="card-text">Simplify you life with my Budgeting app. Designed to Make your life and money management easier </p>
                        <a href="/BudgetApp" class="btn btn-primary">Go somewhere</a>
                      </div>
                    </div>
                    <!--<div class="card other-project-card">
                      <h3 class="card-header">Featured</h3>
                      <div class="card-block">
                        <h4 class="card-title">Special title treatment</h4>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                      </div>
                    </div>
                    <div class="card other-project-card">
                      <h3 class="card-header">Featured</h3>
                      <div class="card-block">
                        <h4 class="card-title">Special title treatment</h4>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                      </div>
                </div>   -->         
            </div>
            <div id="about-me">
                <h3  class="content-header">About Me</h3>
                <img src="/Images/aboutMe/Headshot.jpg" id="headshot">                
                <p class="lead">
                    Ryan Dockstader
                </p>
                <p> Hey guys! My name is Ryan, and I'm a web developer. As of right now, I'm still trying to build my portfolio, and my experience. I have a pretty broad experience in Development in general, going back about 3 years now. I started out coding for arduino, and fell in love with it. Since then I've been coding in every language I can get my hands on!
                </p>
                <p>
                    I'm currently proficent in:
                    
                </p>
                <ul>
                    <li>C++</li>
                    <li>Java</li>
                    <li>Groovy</li>
                    <li>HTML</li>
                    <li>CSS</li>
                    <li>JavaScript</li>
                </ul>
                <p>As well as various web development frameworks. Let me know if you have any questions in the form below.</p>
            </div>
            <div id="contact-me">
                <h3  class="content-header">Contact Me</h3>
                <p>Email: <email>rydocdevelopment@gmail.com</email> </p>
                <p>Phone: (435) 554-8810</p>
                <p> Follow me on my Blog: <a href="http://ryanthetechie.wordpress.com" target="_blank">Ryan The Techie</a></p>
                <div id="social-media">
                    <p id="social-media-header">Social Media: </p>
                    <a class="social-media-link" id="twitter" href="https://twitter.com/RyanTheTechie" target="_blank"><img class="social-media-icon" src="Images/Global/socialMedia/twitter-circle.png"> </a>
                    <a class="social-media-link" id="youtube" href="https://www.youtube.com/channel/UCilhz9QAJ582fQchwfx8YyQ" target="_blank"><img class="social-media-icon" src="Images/Global/socialMedia/youtube-circle.png"></a>
                    <a class="social-media-link" id="linked-in" href="https://www.linkedin.com/in/ryan-dockstader-606718105/" target="_blank"><img class="social-media-icon" src="Images/Global/socialMedia/linkedin-circle.png"></a>
                </div>
                <hr>
                <div class="spacer"></div>
                <form method="post">
                    <div class="form-group row">
                      <label for="email" class="col-2 col-form-label">Email:</label>
                      <div class="col-4">
                        <input class="form-control" type="email" id="email" name="contact-form-email">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="subject" class="col-2 col-form-label">Subject:</label>
                      <div class="col-4">
                        <input class="form-control" type="text" id="subject" name="contact-form-subject">
                        </div>
                    </div>
                    <div class="form-group row">
                      <label for="body" class="col-2 col-form-label">Body:</label>
                      <div class="col-5">
                        <textarea class="form-control" id="exampleTextarea" rows="10" name="contact-form-body"></textarea>
                      </div>
                    </div>
                    <!--<div class="form-check">
                        <label class="form-check-label">
                          <input type="checkbox" checked class="form-check-input">
                          Subscribe to my blog
                        </label>
                      </div>-->
                      <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
        <script src="script.js" type="text/javascript"></script>
    </body>
</html>