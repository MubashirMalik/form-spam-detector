<html>
    <head>

        <link rel="stylesheet" href="style.css">

    </head>

    <body>
        
        <form action="script.php" method="post">
            <h2>Provide Feedback!</h2><hr>

            <label>Full Name</label> 
            <input type="text" name="fname">

            <label>Email</label>
            <input type="email" name="email">

            <input type="text" name="hidden-input" id="hidden-input">

            <label>Your Message</label>
            <textarea name="message" cols="30" rows="10">Your feedback..</textarea>

            <button type="submit" name="submit-btn">Submit</button>
        </form>

    </body>
</html>