<?php
   $teamMembers = array(
        array(
            "name"=>"Bill Mahoney",
            "position"=>"Product Owner",
            "img"=>"bill.png"
        ),
        array(
            "name"=>"Saba Cabrera",
            "position"=>"Art Director",
            "img"=>"saba.png"
        ),
        array(
            "name"=>"Shae Le",
            "position"=>"Tech Lead",
            "img"=>"shae.png"
        ),
        array(
            "name"=>"Skylah Lu",
            "position"=>"UX Designer",
            "img"=>"skylah.png"
        ),
        array(
            "name"=>"Griff Richards",
            "position"=>"Developer",
            "img"=>"griff.png"
        ),
        array(
            "name"=>"Stan John",
            "position"=>"Developer",
            "img"=>"stan.png"
        )
   );
?>
<!doctype html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="author" content="Eric Thomas">
   <meta name="description" content="Eric Thomas recreation of the DevChallenges Team page challenge">
   <meta name="keywords" content="404, error, devchallenges">
   <title> Creative Team </title>
    
   <link rel="shortcut icon" href="img/icon.png">    
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/team.css">
   
   <script src="js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <header class="row">
            <br>
            <div class="col-xs-12 col-md-7">
              <h1>
                  The creative crew
              </h1>
           </div>
           <div class="col-xs-12 col-sm-8 col-md-5">
               <h3>
                   Who We Are
               </h3>
               <p>
                    We are a team of creatively diverse, driven, innovative individuals working in various locations from the world.
               </p>
           </div>
           <div class="col-sm-12 col-md-3"> &nbsp; </div>
        </header>
        <div class="clear"> &nbsp; </div>
        <section class="row">
            <?php foreach($teamMembers as $member) { ?>
                <div class="col-xs-6 col-md-4 member">
                    <div class="portrait">
                        <img src="img/<?php echo $member['img']; ?>" alt="<?php echo $member['name']; ?> portrait">
                        <span class="position">
                            <?php echo $member['position']; ?>
                        </span>
                    </div>
                    <div>
                        <p class="name">
                            <?php echo $member['name']; ?>
                        </p>
                        <br><br>
                    </div>
                </div>
            <?php } ?>
        </section>
        <div class="clear"> &nbsp; </div>
        <footer class="row">
            <div class="col-sm-12 center-text">
                created by <a href="https://github.com/ETstudios" target="_blank">FaeWilds</a> - <a href="https://devchallenges.io/" target="_blank">devChallenges.io</a>
            </div>
        </footer>
    </div>
</body>
</html>