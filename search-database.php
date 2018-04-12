<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Entrepreneur Collection</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">	
<link rel="stylesheet" type="text/css" href="CSS/CSS Style.css">
<link rel="stylesheet" type="text/css" href="CSS/Gallery Css.css">
<link rel="stylesheet" type="text/css" href="CSS/Overlay.css">
<link rel="stylesheet" type="text/css" href="CSS/Header & Footer.css">
<link rel="stylesheet" type="text/css" href="CSS/Modal.css">
<link rel="stylesheet" type="text/css" href="CSS/slick.css">
<link rel="stylesheet" type="text/css" href="CSS/sidebar.css">
<style type="text/css"> 

</style>   
</head>
<body>
   <div class="navbar">
	<ul>
		<b>
            <li><a href="\Entrepreneurs Collection\directory.html">EC</a></li>
            <li><a href="Categories/Books.html">Books</a></li>
            <li><a href="Categories/Courses.html">Courses</a></li>
            <li><a href="Categories/Podcasts.html">Podcasts</a></li>
            <li><a href="Categories/Shows.html">Shows</a></li>
            <li><a href="Categories/Business Sites.html">Websites</a></li>
            <li><a href="Categories/Business Tools.html">Web Tools</a></li>
            <li><a href="Categories/Youtube Channels.html">YouTube Channels</a></li>
            <li><form action="search-database.php" method="post"><input type="text" style="color:lime; width:25%; height: 12px; z-index: 0" name="search" placeholder="Search.."></form></li>
	    </b>
	</ul>	
</div>
<div>	
	<body background="Images/Backgrounds/gg.jpg" style="margin: auto">
    <img src="Images/Backgrounds/bbng.jpg" style="position:absolute; width:100%;height:160px;top:125px;left:0px;z-index: 1; opacity:.95">
            </div>

<div><h2 style="top:21px; left:0px; position:fixed; background-color: silver; width:100%; text-align: center;font-size: 35px; color:white; z-index:99; opacity:.95">Search Results</h2></div>

<div>
    <h2 style="top:70px; left:0px;font-family:calibri; color:black; z-index: 1; background-color: white; background-size: contain; width:100%;text-align: center">Books (11 results)</h2>
    </div>
    
<div>
<h2 style="top:270px; left:0px;z-index: 1; width:100%;text-align: center"><button type="button" style="font-family:calibri; background-color: white; color:black;font-size:20px">Refine Search For Books</button></h2>
    </div>
    
<div>
<h2 style="top:310px; left:0px;font-family:calibri; color:black; z-index: 1; background-color: white; background-size: contain; width:100%;text-align: center">Websites
</div>    

<div class="gallery" width:100%; style="top:125px; left:40px">	
	<?php 
//load database connection
    $host = "localhost";
    $user = "root";
    $password = "";
    $database_name = "books";
    $pdo = new PDO("mysql:host=$host;dbname=$database_name", $user, $password, array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ));
// Search from MySQL database table
$search=$_POST['search'];
$query = $pdo->prepare("select * from personalfinance where title LIKE '%$search%' OR author1 LIKE '%$search%' OR category2 LIKE '%$search%' OR category3 LIKE '%$search%'  LIMIT 0 , 12");
$query->bindValue(1, "%$search%", PDO::PARAM_STR);
$query->execute();
// Display search result
         if (!$query->rowCount() == 0) {				
            while ($results = $query->fetch()) {	
                echo $results['img'];
                
				
            }
				echo "<p>";		
        } else {
            echo '<h4 style="color:black; font-family:calibri; background-color:silver; font-size:30px; width:100%">No results...</h4>';
        }

?>
        </div>                
        
</body>
</html>