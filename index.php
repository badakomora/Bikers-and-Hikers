<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Bikers & Hikers</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Open+Sans:wght@400;700&display=swap" rel="stylesheet"> 
    <link href='https://fonts.googleapis.com/css?family=Dancing Script' rel='stylesheet'>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link href='https://fonts.googleapis.com/css?family=Dancing Script' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    body {
    font-family: 'Open Sans', sans-serif;
    text-align: center;
    margin: 0;
}

#hero {
    width: 100%;
    margin: 0 auto 72px;
}

#hero img {
    margin-bottom: 72px;
}

h1 {
    font-family: 'Inter', sans-serif;
    font-size: 49px;
    line-height: 56px;
    font-weight: normal;
    margin-bottom: 32px;
}

h1 span {
    font-weight: bold;
}
.links a{
    color: black;
    margin: 10px;
}

.logo a{
    color: black;
}

span, a {
    color: #FF9900;
}

p, #footer {
    color: #7D7987;
    font-size:14px;
    line-height:28px;
}

#footer a + a {
  margin-left: 28px;
}

.line {
    width:30%;
    height: 0;
    margin: 0 auto 8px;
    border: 1px solid #ECEFF2;
}

#balls {
    position: fixed;
    bottom: 0px;
    right: 0px;
}

@media screen and (max-width: 600px) {
    body {
        font-size:30px;
    }

    #hero {
        margin: 0;
    }

    h1 {
        font-size: 29px;
        line-height: 30px;
    }

    .line {
        width:60%;
    }
}
</style>
<body>
   
   <div id="hero">
   <br>
   <div class="header" style="display:flex;justify-content:space-around;">
    <div class="logo">
        <a href="#" class="navbar-brand" style="font-family:'Dancing Script';font-size: 30px;"><b>Bikers & Hikers</b></a>
    </div>
    <div class="links ">
        <a href="index.php">Home</a>
        <a href="contact.php">contacts</a>
        <a href="about.php">About</a>
        <button class="btn btn-secondary">
        <a href="./frontend/" class="text-white">Sign in</a>
        </button>
    </div>
   </div>
   <br><br>
    <div class="flex" style="display:flex;justify-content:space-around;">
        <div class="img" style="width:50%">
            <img 
            src="https://www.vaastbikes.com/media/wysiwyg/vaast/VaastMainCarouselImageV2-1.jpg" 
            alt="Desenho de uma pessoa vestindo camisa amarela em uma sala com móveis" width="100%">
        </div>
        <div class="p" style="width:50%;">
            <h1>Bikers & Hikers<span> is here</span> for you!</h1>

            <p>
                Bikers & Hikers is a <strong>bicycle brand </strong>that had humble beginnings, <br/>
                starting its life in a barn in 1976.<span> 
            </p>
            <p>create posts and make comments for free. creating an account is free.</p>
        </div>
    </div>

    
    </div>
<br>
    <div id="footer">
    <div class="line"></div>   
        <a 
            target="_blank"
            href="https://www.instagram.com">Phone:+254752627890
        </a>

        <a 
            target="_blank"
            href="https://www.instagram.com">Email: Bikersandhikers@gmail.com
        </a>

        <a 
            href="mailto:contato@moveisparavoce.com">Bikers & Hikers
        </a>
    </div>

    <img 
        id="balls"
        src="https://raw.githubusercontent.com/malunaridev/Rocketseat-Explorer/641f4bc4430cd57358d4110be6818f98639d237a/project-01/images/circulos.svg" 
        alt="Círculos alaranjados no canto direito inferior da tela"/> 
<br>
</body>
</html>