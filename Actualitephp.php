<!DOCTYPE SQL>
<html>
<head>
<title> Icam </title>
<link rel="icon" href="640px-Logo_ICAM_-_2008.svg (1).png">
</head>
<body>
<style>
tp_thermic(class = "cell-border compact hover order-column")
    li {
	list-style:none !important; /*On enlève les puces de la liste */
	color:rgb(255, 255, 255);
	padding:10px;
	font-size:20px;
	text-decoration:none;
	}
	nav ul {
	background-color:rgb(255, 255, 255);
	padding:0;
	margin:0;
	}
	 
	nav ul li {
	list-style: none;
	line-height:44px;
	float:left;
	background-color:rgba(255, 255, 255, 0)
	}
	 
	nav ul li a {
	color:rgb(87, 87, 87);
	padding:10px;
	font-size:20px;
	text-decoration:none;
	}
	 
	li a:hover {
	border-bottom:6px rgba(255, 200, 2, 0.895) solid;
	}
	
	nav ul li ul { 
	display:none; /* Rend le menu déroulant caché par défaut */
	} 
	 
	nav ul li:hover ul { /* Affiche la dropNav au survol de la souris avec la class .drop */
	z-index:99999;
	display:list-item !important;
	position:absolute;
	margin-top:5px;
	margin-left:-10px;
		}
	 
	nav ul li:hover ul li {
	float:none;
	}
	#barre_fixe
	{
	position: fixed;
	top: 0px;
	width: 100%;
	border-bottom :6px solid black;
	background: rgb(254, 254, 253);
	border-color: red yellow rgba(255, 200, 2, 0.895) blue;
	margin:0px;
	z-index:99999;




			}
	

</style>
	<title>Positionner une barre fixe</title>
	</head>
		<div id="barre_fixe">
			<nav>
				<ul>
					<!-- Début du sous-menu déroulant -->
					<li><a href="Code1.html"><img src="barre-orizontale.png" style="float:left;" alt="Ngela" width="40" height="45"></a></a>
				
						<ul>
							
							<li><a href="#">Lien A</a></li>
							<li><a href="#">Drop 3</a></li>
							<li><a href="#">Drop 3</a></li>
							<li><a href="#">Drop 3</a></li>
							<li><a href="#">Drop 3</a></li>
							<li><a href="#">Drop 2</a></li>
							<li><a href="#">Drop 3</a></li>
							<li><a href="#">Drop 2</a></li>
							<li><a href="#">Drop 3</a></li>
						</ul>
					</li>
					<!-- Fin du sous-menu déroulant -->
						</ul>
			</nav>
			<img src="IMAGE VIDE.png" style="float:left;" alt="" width="15" height="20"></a>
			<a href="Code1.html"><img src="logo icam.png" style="float:left;" alt="Ngela" width="130" height="70"></a>	  

		
	    <br>       </br>
		
		<style>	
			
      .button {
        background-color: rgba(255, 140, 0, 0.797);
        border: 1mm ridge rgba(255, 200, 2, 0.895);
        color: #fdfefe;
        padding: 20px 34px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 20px;
        margin: 4px 2px;
        cursor: pointer;
      }
    </style>
    </body>
    </head>
    <body>

	<img src="IMAGE VIDE.png" style="float:left;" alt="" width="750" height="50"></a>
	<a href="Code1.html" class="button">Acceuil</a>
    <a href="https://www.ecologie.gouv.fr/diagnostic-performance-energetique-dpe#scroll-nav__4" target="_blank"><img src="maison ernergie 3.png" style="float:right;" alt="Ngela" width="80" height="60"></a>

	</style>
</div>
    <br>       </br>
    <br>       </br>
    <br>       </br>
 <p style="color:rgba(255, 140, 0, 0.797)";><FONT size="16pt"><b>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;Mesures</b></FONT>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tp_thermic";

// Create connection
	 {try
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM releve_temp";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> Ambiance interieure 1: ". $row["Amb_Int1"]. ",   Paroi_Int: ". $row["Paroi_Int"].", HR_Int: " . $row["HR_Int"] .", Amb_Int2: " . $row["Amb_Int2"] . ",Amb_Ext1: ". $row["Amb_Ext1"]. ",   Paroi_Ext: ". $row["Paroi_Ext"].", HR_Ext: " . $row["HR_Ext"] .", Amb_Ext2: " . $row["Amb_Ext2"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>



    </body>
