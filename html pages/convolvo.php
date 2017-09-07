<?php if (isset($_GET["delete"]) && file_exists('ir/input/'.$_GET["delete"])) { unlink('ir/input/'.$_GET["delete"]); } ?>
<!doctype html>

<html>

<head>
<link href="https://fonts.googleapis.com/css?family=Crimson+Text|Playfair+Display|Raleway" rel="stylesheet">
<link type="text/css" href="http://dahi.manoa.hawaii.edu/silence/jplayer/src/skin/pink.flag/scss/jplayer.pink.flag.scss" rel="stylesheet" />
<link rel="stylesheet" href="http://dahi.manoa.hawaii.edu/silence/fontawesome/css/font-awesome.min.css">
<script type="text/javascript" src="http://dahi.manoa.hawaii.edu/silence/jplayer/lib/jquery.min.js"></script>
<script type="text/javascript" src="http://dahi.manoa.hawaii.edu/silence/jplayer/src/javascript/jplayer/jquery.jplayer.js"></script>
<script type="text/javascript">
 
</script>
<style>
@font-face
{
	font-family: 'Crimson Text', serif;
}
body
{
	background-color: #181617;
	margin-bottom: 25%;
}
#pagecontainer
{
	min-width: 1200px;
	background-color: inherit;
	margin: auto;
}
#title
{
	color: antiquewhite;
	font-size: 200%;
	text-align: center;
	font-family: Raleway;
}
.tableofcontents
{
	text-align: center;
	font-size: 25px;
	float: left;
	margin-left: 30px;
	min-width: 200px;
	width: 25%;
	opacity: 0.4;
	margin-top: 25px;
	position: relative;
	display: inline-block;
}
.tableofcontents-button
{
	background: inherit;
	color: peachpuff;
	border: none;
	padding: 0px;
	font-size: 18px;
	font-family: Raleway;
	font-weight: bold;
}
.tableofcontents-content
{
	display: none;
	position: relative;
	background: inherit;
	box-shadow: none;
	z-index: 1;
}
.tableofcontents-content a
{
	color: peachpuff;
	font-family: Playfair Display;
	padding: 5px;
	font-size: 14px;
	text-decoration: none;
	display: block;
}
.poemaudio-center
{
	text-align: center;
	font-size: 25px;
	margin-top: 300px;
	display: inline-block;
	position: relative;
	min-width: 500px;
	width: 45%;
}
.poemmap-right
{
	text-align: center;
	font-size: 25px;
	float: right;
	min-width: 200px;
	width: 25%;
	opacity: 0.4;
	margin-top: 25px;
	position: relative;
	display: inline-block;
}
.poemmap-button
{
	background: inherit;
	color: lightsteelblue;
	border: none;
	padding: 0px;
	font-size: 18px;
	font-family: Raleway;
	font-weight: bold;
}
.poemmap-content
{
	display: none;
	position: relative;
	background: inherit;
	box-shadow: none;
	z-index: 1;

}
.poemmap-content a
{
	color: lightsteelblue;
	font-family: Playfair Display;
	padding: 5px;
	font-size: 14px;
	text-decoration: none;
	display: block;
}
.sidenavmenu
{
	min-width: 200px;
	width: 5%;
}
#sidenavmenu a
{
	position: absolute;
	transition: 0.3s;
	padding: 10px;
	width: 200px;
	text-decoration: none;
	font-size: 16px;
	font-family: Raleway;
}


.tableofcontents:hover
{
	opacity: 1;

}
.tableofcontents:hover .tableofcontents-content
{
	display: block;
}
.poemmap-right:hover
{
	cursor: pointer;
	opacity: 1;
}
.poemmap-right:hover .poemmap-content
{
	display: block;
}

.fade-in
{
	opacity: 0.5;
	transition: opacity 0.5s ease-in;
}
.fade-in:hover
{
	opacity: 1;
}
#startlistening, #doubleright
{
	color: #fdedff;
	font-family: Raleway;
	font-size: 18px;
	opacity: 0.5;
}
#doubleright:hover 
{
	opacity: 0.85;
}
#sidenavmenu a:hover
{
	left: 0;
	cursor: pointer;
	opacity: 1;
}
#home
{
	top: 150px;
	left: -70px;
	color: #ffccc1;
	background-color: inherit;
	opacity: 0.5;
}
#convolution
{
	top: 210px;
	left: -140px;
	color: #ffccc1;
	background-color: inherit;
	opacity: 0.5;
}

#instructions {
	color: #fdedff;
	font-family: Raleway;
	font-size: 18px;	
}

.upload-btn-wrapper {
  position: relative;
  overflow: hidden;
  display: inline-block;
}

.upload-btn-wrapper input[type=file] {
  font-size: 100px;
  position: absolute;
  left: 0;
  top: 0;
  opacity: 0;
}

.btn
{
	color: peachpuff;
	border: 1px solid;
	padding: 10px;
	font-size: 18px;
	font-family: Raleway;
	font-weight: bold;
}
</style>
<meta charset="UTF-8">

<title>Archive of Silence: Convolution</title>
</head>
<body>
<div id="pagecontainer">
	<div id="title">

	<h1>A R C H I V E &nbsp o f &nbsp S I L E N C E </h1>
    <h2>CON-VOLV-O</h2></div>

		<div class="sidenav" id="sidenavmenu">
			<a href="http://dahi.manoa.hawaii.edu/silence/index.html" class="fade-in" id="home">H o m e &nbsp &nbsp
			<i class="fa fa-home fa-2x" aria-hidden="true"></i></a>
			<a href="http://dahi.manoa.hawaii.edu/silence/Convolution_Home.html" class="fade-in" id="convolution">C o n v o l u t i o n &nbsp &nbsp<i class="fa fa-music fa-2x" aria-hidden="true"></i></a>
		</div>
	
		<div class="tableofcontents">
			<button class="tableofcontents-button fade-in">T a b l e &nbsp O f &nbsp C o n t e n t s</button>
			<div class="tableofcontents-content">
				<a class="fade-in" id="author_statement" href="http://dahi.manoa.hawaii.edu/silence/Author_Statement.html">Author's Statement</a>
				<a class= "fade-in" id="def_archive" href="http://dahi.manoa.hawaii.edu/silence/Definition_Archive.html">Definition: Archive</a>
				<a class= "fade-in" id="def_silence" href="http://dahi.manoa.hawaii.edu/silence/Definition_Silence.html">Definition: Silence</a>
				<a class= "fade-in" id="def_4D" href="http://dahi.manoa.hawaii.edu/silence/Definition_4D.html">Definition: 4D</a>
				<a class= "fade-in" id="essay" href="http://dahi.manoa.hawaii.edu/silence/Essay.html">Essay</a>
				<a class= "fade-in" id="convolvo" href="http://dahi.manoa.hawaii.edu/silence/convolvo.php">Convolute a Sound</a>
				<a class= "fade-in" id="references" href="http://dahi.manoa.hawaii.edu/silence/References.html">References</a>
				<a class= "fade-in" id="appendix" href="http://dahi.manoa.hawaii.edu/silence/Appendix.html">Appendix: Text Definition of Poems</a>
		</div>
		</div>
		<div id="instructions" class="poemaudio-center">
			<p>Starting here you can upload an audio file and, via convolution, "place" it in any of the spaces that the poems were recorded in.</p>
            <p>STEP 1: Upload a WAV file.</p>
            <div class="upload-btn-wrapper"></div>
	 		<form name="uploadaudio" id="uploadaudio" enctype="multipart/form-data" method="post" action="convolvo-preview.php">
            <input name="soundinput" id="soundinput" class="btn" type="file" /><br /><br>
<button onclick='document.forms[0].submit();' class="btn" >UPLOAD</button>

</form>

		</div>
		<div class="poemmap-right">
			<button class="poemmap-button fade-in">P o e m  &nbsp M a p</button>
			<div class="poemmap-content">
				<a class= "fade-in" id="kuy712" href="http://dahi.manoa.hawaii.edu/silence/KUY_712*.html">KUY 712</a>
				<a class= "fade-in" id="kuystair" href="http://dahi.manoa.hawaii.edu/silence/KUY_stairwell_floors_1-7.html">KUY stairwell, floors 1-7</a>
				<a class= "fade-in" id="bilger" href="http://dahi.manoa.hawaii.edu/silence/Bilger_courtyard.html">Bilger Courtyard</a>
				<a class= "fade-in" id="hamilton" href="http://dahi.manoa.hawaii.edu/silence/Hamilton_Library_stairwell.html">Hamilton Library stairwell</a>
				<a class= "fade-in" id="sinclair" href="http://dahi.manoa.hawaii.edu/silence/Sinclair_Library_reading_room.html">Sinclair Library reading room</a>
				<a class= "fade-in" id="bachman" href="http://dahi.manoa.hawaii.edu/silence/Bachman_Hall_foyer.html">Bachman Hall foyer</a>
				<a class= "fade-in" id="moore" href="http://dahi.manoa.hawaii.edu/silence/Moore_Hall_birds_5pm.html">Moore hall, birds 5pm</a>
				<a class= "fade-in" id="tesla" href="http://dahi.manoa.hawaii.edu/silence/hypothetical_archive_tesla.html">Hypothetical Archive: Tesla</a>
			</div>
		</div>
</div>
</body>
</html>