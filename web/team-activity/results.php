Welcome <?php echo $_POST["name"]; ?> <br>
Click here to send yourself an <a href="mailto:<?php echo $_POST["email"]; ?>">email</a><br>
Your major is <?php echo $_POST["major"]; ?> <br>
This is your comment <?php echo $_POST["comment"]; ?><br>
Here are the countries you've visited:
<ul>
    <?php $countries = $_POST['country'];
    foreach($countries as $country) {
       if ($country === 'na'){
               echo "<li>North America</li>";
       }elseif ($country === 'sa'){
           echo "<li>South America</li>";
       }elseif ($country === 'eu'){
           echo "<li>Europe</li>";
       }elseif ($country === 'as'){
           echo "<li>Asia</li>";
       }elseif ($country === 'au'){
           echo "<li>Australia</li>";
       }elseif ($country === 'af'){
           echo "<li>Africa</li>";
       }elseif ($country === 'an'){
           echo "<li>Antarctica</li>";
       }
    } ?>
</ul>