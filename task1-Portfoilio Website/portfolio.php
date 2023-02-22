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
      mysqli_query($conn, "INSERT INTO `contact_form`(`name`, `email`, `number`, `message`) VALUES('$name', '$email', '$number', '$msg')") or die('query failed');
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
   <title>Complete Responsive Personal Portfolio Website Design</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

   <!-- aos css link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="stylep.css">

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

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

   <div class="image" data-aos="fade-right">
      <img src="images/1user.jpg" alt="">
   </div>

   <div class="content">
      <h3 data-aos="fade-up">hi, i am Rutuja Ghosalkar</h3>
      <span data-aos="fade-up">STUDENT OF COMPUTER SCIENCE AND ENGINEERING</span>
      <!-- <p data-aos="fade-up">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis labore recusandae minima molestias aliquam nostrum.</p> -->
      <a data-aos="fade-up" href="#about" class="btn">about me</a>
   </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

   <h1 class="heading" data-aos="fade-up"> <span>biography</span> </h1>

   <div class="biography">

      <!-- <p data-aos="fade-up">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis tenetur amet ab optio minus est error libero adipisci numquam ratione.</p> -->

      <div class="bio">
         <h3 data-aos="zoom-in"> <span>name : </span> Rutuja Rajendra Ghosalkar</h3>
         <h3 data-aos="zoom-in"> <span>email : </span> rutughosalkar2002@gmail.com</h3>
         <h3 data-aos="zoom-in"> <span>address : </span> Ratnagiri, india </h3>
         <h3 data-aos="zoom-in"> <span>phone : </span> 7058133424 </h3>
         <h3 data-aos="zoom-in"> <span>age : </span> 20 years </h3>
         <h3 data-aos="zoom-in"> <span>designation : </span> Student </h3>
      </div>

      <!-- <a href="#" class="btn" data-aos="fade-up">download CV</a> -->

   </div>
   
   <div class="skills" data-aos="fade-up">

      <h1 class="heading"> <span>skills</span> </h1>

      <div class="progress">
         <div class="bar" data-aos="fade-left"> <h3><span>HTML & CSS</span> <span>95%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>C++</span> <span>83%</span></h3> </div>
         <div class="bar" data-aos="fade-left"> <h3><span>PHP</span> <span>75%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>Java & JavaScript</span> <span>84%</span></h3> </div>
      </div>

   </div>

   <div class="edu-exp">

      <h1 class="heading" data-aos="fade-up"> <span>education & experience</span> </h1>

      <div class="row">

         <div class="box-container">

            <h3 class="title" data-aos="fade-right">education</h3>

            <div class="box" data-aos="fade-right">
               <span>( 2017 - 2018 )</span>
               <h3>SSC with 93.20%</h3>
               
            </div>

            <div class="box" data-aos="fade-right">
               <span>( 2019 - 2020 )</span>
               <h3>HSC with 83.23%</h3>
            
            </div>

            <div class="box" data-aos="fade-right">
               <span>( 2020 - 2024)</span>
               <h3>Pursuing BE in compueter science</h3>
               
            </div>

         </div>

         <div class="box-container">

            <h3 class="title" data-aos="fade-left">experience</h3>

            <div class="box" data-aos="fade-left">
               <span>( 2021 - 2022 )</span>
               <h3>Air canvas project</h3>
            
            </div>

            <div class="box" data-aos="fade-left">
               <span>( 2021 - 2022 )</span>
               <h3>SIH project</h3>
               
            </div>

            <div class="box" data-aos="fade-left">
               <span>( 2022 - 2023 )</span>
               <h3>full-stack project on Unit converter</h3>
            
            </div>

         </div>

      </div>

   </div>

</section>

<!-- about section ends -->

<!-- services section starts  -->

<section class="services" id="services">

   <h1 class="heading" data-aos="fade-up"> <span>IDE</span> </h1>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
        
         <h3>Visual Studio</h3>
      
      </div>

      <div class="box" data-aos="zoom-in">
         
         <h3>Brackets</h3>
         
      </div>

      <div class="box" data-aos="zoom-in">
        
         <h3>ECLIPS</h3>
         
      </div>

      <div class="box" data-aos="zoom-in">
        
         <h3>Turbo c++</h3>
         
      </div>

      <div class="box" data-aos="zoom-in">
         
         <h3>MySQL Workbench</h3>
         
      </div>

      <div class="box" data-aos="zoom-in">
        
         <h3>sqlplus</h3>
      
      </div>

   </div>

</section>



<section class="portfolio" id="portfolio">

   <h1 class="heading" data-aos="fade-up"> <span>Hobbies</span> </h1>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <img src="images/music.jpg" alt="">
         <h3>Listning music</h3>
         
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/dance1.jpg" alt="">
         <h3>Dancing</h3>
        
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/read.jpg" alt="">
         <h3>Reading</h3>
      </div>

      

   </div>

</section>



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
         <h3>phone</h3>
         <p>7058133424</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-envelope"></i>
         <h3>email</h3>
         <p>rutughosalkar2002gmail.com</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-map-marker-alt"></i>
         <h3>address</h3>
         <p>Ratnagiri, india - 415709</p>
      </div>

   </div>

</section>



<?php echo date('Y'); ?> 
<script src="js/scriptp.js"></script>

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