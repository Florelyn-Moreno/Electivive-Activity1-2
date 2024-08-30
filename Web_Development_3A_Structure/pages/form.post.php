<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Simple Structure</title>
    <link rel="stylesheet" href="../css/custom.css">
</head>
<body>
    <header> 
        <h1> College of Information and Computing Sciences</h1>
        <h3> Bachelor of Science in Information Systems</h3>
        <div class="container">
            <a href="../index.html">Home</a>|
            <a href="about.html">About</a>|
            <a href="contactUs.html">Contact Us</a>|
            <a href="inquiry.html">Inquiry</a>|
            <a href="profile.html">Profile</a>
        </div>
    </header>
    <section>
        <nav>
            <ul class="navigation_menu">
                <li><a href="heading.html">Heading</a></li>
                <li><a href="tables.html">Tables</a></li>
                <li><a href="forms.html">Forms</a></li>
                <li><a href="list.html">HTML List</a></li>
                <li><a href="form.post.php">Form Post Method</a></li>
                <li><a href="images.html">Image</a></li>
            </ul>
        </nav>

        </section>
            <h2>Form Post Method Action</h2>
        <article>
                  <?php
                  if($_SERVER["REQUEST_METHOD"]=="POST"){
                    $fullname= htmlspecialchars($_POST['name']);
                    $yourAge= htmlspecialchars($_POST['age']);
                  
                    echo "<h2>Your name is: ".$fullname."</h2>";
                    echo "<h2>Your name is: ".$yourAge."</h2>";
                  }
                  ?>
        </article>
    </section>
    <footer> 
        <div>
            <h2>MarSU</h2>
        </div>
        <div class="footer_menu">
         <a href="about.html">About</a>|
         <a href="policy.html">Policy</a>|
         <a href="termsOfUse.html">Terms of Use</a>|
         <a href="privacy.html">Privacy</a>|
         <a href="faq.html">FAQ</a>|
         <a href="contactUs.html">Contact</a>
        </div>
        <div>
            <p> Copyright &copy 2024. <b>MarSU Sta. Cruz Campus BSIS Campus</b></p>
        </div>
    </footer>
</body>
</html>