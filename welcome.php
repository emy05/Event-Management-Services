<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title >Welcome</title>
    <style>
        
        #FrontImg{  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;}
           #headfront{
            text-align: center;
            font-family: 'Nunito', sans-serif;
           }
           .logo{
    font-weight: bolder;
    color: #6c5ce7;
    font-size: 2.5rem;
}
    </style>
</head>
<body id="headfront" bgcolor="#b2b879">
    <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?>
     <h2 id="headfront" class="logo"><span>W</span>elcome to <span>E</span>xquisite Events</h2>
    <a href="http://127.0.0.1:5500/Event_Organizer/webpages.html">
    <img src="https://www.weddingsutra.com/images/Vendor_Images/Wedding_Planners/Version-Events-and-Weddings/version-events-weddings-01.jpg" alt="Paris" width="800" height="500" id="FrontImg">
        </a>
    <a href="logout.php">Logout</a>
</body>
</html>