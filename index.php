<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['send'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = mysqli_real_escape_string($conn, $_POST['number']);
   $msg = mysqli_real_escape_string($conn, $_POST['message']);

   $select_message = mysqli_query($conn, "SELECT * FROM `contact_form` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');
   
   if(mysqli_num_rows($select_message) > 0){
      $message[] = 'message sent already!';
   }else{
      mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, message) VALUES('$name', '$email', '$number', '$msg')") or die('query failed');
      $message[] = 'message sent successfully!';
   }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Profile:Tamal Kanti Mazumder</title>
   <link rel="icon" href="favicon.png" sizes="16x16" type="image/png">
   
   <link href="css/pace-theme-corner-indicator.css" rel="stylesheet">
   <script src="js/pace.min.js"></script>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

   <!-- aos css link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php

if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message" data-aos="zoom-out">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}

?>

<!-- header section starts  -->

<header class="header">

   <div id="menu-btn" class="fas fa-bars"></div>

   <a href="#home" class="logo">Portfolio</a>

   <nav class="navbar">
      <a href="#home" class="active">home</a>
      <a href="#about">about</a>
      <a href="#services">Knowledge</a>
      <a href="#contact">contact</a>
   </nav>

   <div class="follow">
      <a href="https://www.facebook.com/tamal.mazumder.52" class="fab fa-facebook-f"></a>
      <a href="https://www.instagram.com/tamal.mazumder/" class="fab fa-instagram"></a>
      <a href="https://www.linkedin.com/in/tamal-kanti-mazumder-707198175/" class="fab fa-linkedin"></a>
      <a href="https://www.github.com/striketm98" class="fab fa-github"></a>
   </div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

   <div class="image" data-aos="fade-left">
      <img src="images/tamal.png" alt="">
   </div>

   <div class="content">
      <h3 data-aos="fade-up"><i class="fa-solid fa-code"></i> hi,Every_One! <br><i class="fa-solid fa-dollar-sign"></i> echo "I am Tamal"</h3>
      <span data-aos="fade-up">DevOps | Cyber Security | Developer</span>
      <p data-aos="fade-up">Technically-sound software Engineer effective in analyzing relevant information and guiding product cycle from conception to completion</p>
      <a data-aos="fade-up" href="#about" class="btn">about me</a>
   </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

   <h1 class="heading" data-aos="fade-up"> <span><img src="images/profile.png" alt=" "></span> </h1>

   <div class="biography">

      <p data-aos="fade-up">Passionate about implementing and launching new projects. Ability to translate business requirements into technical solutions.Manages and design effort and guides installation process for on-schedule product launches. Consults with internal and external clients and employee’s additional system resources to review and enhance configuration for optimal customer satisfaction</p>

      <div class="bio">
         <h3 data-aos="zoom-in"> <span><img src="images/id-card.png" alt=""> </span> Tamal Kanti Mazumder </h3>
         <h3 data-aos="zoom-in"> <span><img src="images/email.png" alt=""> </span> tamal.mazumder4398@gmail.com </h3>
         <h3 data-aos="zoom-in"> <span><img src="images/placeholder.png" alt=""></span> Uttarpara, india </h3>
         <h3 data-aos="zoom-in"> <span><img src="images/smartphone.png" alt=""></span> +91-6291-55-7480 </h3>
         <h3 data-aos="zoom-in"> <span><img src="images/age.png" alt=""></span> 24 Years </h3>
         <h3 data-aos="zoom-in"> <span><img src="images/experience.png" alt=""></span> +0.7 Years </h3>
      </div>

      <a href="https://www.onedrive.live.com/?authkey=%21APDfNobVkZB2qx8&cid=1289B44233670CA2&id=1289B44233670CA2%219224&parId=root&o=OneUp" class="btn" data-aos="fade-up">View CV</a>

   </div>
   
   <div class="skills" data-aos="fade-up">

      <h1 class="heading"> <span>skills</span> </h1>

      <div class="progress">
         <div class="bar" data-aos="fade-left"> <h3><span><i class="fa-brands fa-html5"></i>HTML</span> <span>95%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span><i class="fa-brands fa-css3"></i>CSS</span> <span>80%</span></h3> </div>
         <div class="bar" data-aos="fade-left"> <h3><span><i class="fa-brands fa-js"></i>JavaScript</span> <span>65%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span><i class="fa-brands fa-php"></i>PHP</span><span>80%</span></h3> </div>
         <div class="bar" data-aos="fade-left"> <h3><span><i class="fa-brands fa-python"></i>PYTHON</span> <span>70%</span></h3> </div>
         <div class="bar" data-aos="fade-left"> <h3><span><i class="fa-brands fa-linux"></i>Linux</span> <span>80%</span></h3> </div>
         <div class="bar" data-aos="fade-left"> <h3><span><i class="fa-solid fa-database"></i>Database</span> <span>40%</span></h3> </div>
      </div>

   </div>

   <div class="edu-exp">

      <h1 class="heading" data-aos="fade-up"> <span>education & experience</span> </h1>

      <div class="row">

         <div class="box-container">

            <h3 class="title" data-aos="fade-right">education</h3>

            <div class="box" data-aos="fade-right">
               <span>( 2016 - 2020 )</span>
               <h3>Bachelore of Technology</h3>
               <p>Techno India, Saltlake | Mulana Abul Kalam Azad University.</p>
            </div>

         </div>

         <div class="box-container">

            <h3 class="title" data-aos="fade-left">experience</h3>

            <div class="box" data-aos="fade-left">
               <span>( 2022 - Present )</span>
               <h3>Asistant System Engineer</h3>
               <p>Cyber Security | Tata Consultancy Service Ltd.</p>
            </div>

            <div class="box" data-aos="fade-left">
               <span>( 2021 - 2022 )</span>
               <h3>Technical Support Engineer</h3>
               <p>Devops | Optimize It systmes Pvt Ltd.</p>
            </div>

         </div>

      </div>

   </div>

</section>

<!-- about section ends -->

<!-- services section starts  -->

<section class="services" id="services">

   <h1 class="heading" data-aos="fade-up"> <span>Knowledge</span> </h1>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <i class="fa-solid fa-terminal"></i>
         <h3>shell scripting</h3>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fa-brands fa-ubuntu"></i>
         <h3>Ubuntu</h3>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fa-brands fa-docker"></i>
         <h3>Docker</h3>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fa-brands fa-aws"></i>
         <h3>amazon web service</h3>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fa-brands fa-git"></i>
         <h3>git</h3>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fab fa-wordpress"></i>
         <h3>wordpress</h3>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fa-brands fa-python"></i>
         <h3>Python</h3>
      </div>

   </div>

</section>

<!-- services section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

   <h1 class="heading" data-aos="fade-up"> <span>contact me</span> </h1>

   <form action="" method="post">
      <div class="flex">
         <input data-aos="fade-right" type="text" name="name" placeholder="enter your name" class="box" required>
         <input data-aos="fade-left" type="email" name="email" placeholder="enter your email" class="box" required>
      </div>
      <input data-aos="fade-up" type="number" min="0" name="number" placeholder="enter your number" class="box" required>
      <textarea data-aos="fade-up" name="message" class="box" required placeholder="enter your message" cols="30" rows="10"></textarea>
      <input type="submit" data-aos="zoom-in" value="send message" name="send" class="btn">
   </form>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-phone"></i>
         <h3>Mobile</h3>
         <p>+91-6291-55-7480</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-envelope"></i>
         <h3>email</h3>
         <p>tamal.mazumder4398@gmail.com</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-map-marker-alt"></i>
         <h3>address</h3>
         <p>Uttarpara, india - 712258</p>
      </div>

   </div>

</section>

<!-- contact section ends -->

<div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>TAMAL KANTI MAZUMDER</span> </div>












<!-- custom js file link  -->
<script src="js/script.js"></script>

<!-- aos js link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script>

   AOS.init({
      duration:800,
      delay:300
   });

</script>
   
</body>
</html>