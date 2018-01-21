<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    <body>
        <?php include('header.php');?>
        <div id="main">
            <main>
                <img id="picClick" src="puppy.jpg" alt="Crochet Dog toy">
                <section id="display"></section>
                <h2>Crocheting</h2>
                <p>Crocheting is something that I find to be very relaxing and very enjoyable. I love how accomplished I feel when I have finished some complex project and have given it to the intend recipient. It makes me smile to see how much they enjoy it.</p>
            </main>
        </div>
        <?php include('footer.php');?>
        
        
        <script>
            document.getElementById("picClick").onclick = function() {myFunction()};

            function myFunction() {
                document.getElementById("display").innerHTML = "I crochet this dog without a pattern.";
            }
        </script>
        
    </body>
</html>