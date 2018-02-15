<?php


$output = "conv-".$_POST["reverb"]."-".$_POST["filename"];

exec("/usr/local/bin/fconvolver ir/config-files/".$_POST["reverb"].".conf"." ir/input/".$_POST["filename"]." ir/output/".$output);

$error = "";

if (!file_exists("ir/output/".$output)) {
	$error = "An error occurred during convolution. Not your fault.";
}
   
   
$sitenames = array("bachman" => "Bachman Hall", "bilger" => "Bilger Hall", "hamilton" => "Hamilton Library", "kuystairwell" => "Kuykendall stairwell", "moore" => "Moore Hall");
?>
<!doctype html>

<html>

<head>
<link href="https://fonts.googleapis.com/css?family=Crimson+Text|Playfair+Display|Raleway" rel="stylesheet">
<link type="text/css" href="http://dahi.manoa.hawaii.edu/silence/jplayer/src/skin/pink.flag/scss/jplayer.pink.flag.scss" rel="stylesheet" />
<link rel="stylesheet" href="http://dahi.manoa.hawaii.edu/silence/fontawesome/css/font-awesome.min.css">
<script type="text/javascript" src="http://dahi.manoa.hawaii.edu/silence/jplayer/lib/jquery.min.js"></script>
<script type="text/javascript" src="http://dahi.manoa.hawaii.edu/silence/jplayer/src/javascript/jplayer/jquery.jplayer.js"></script>
<script type="text/javascript">
 function listen() {
	<?php if ($error == ""): ?>
	document.getElementById("audiopreview").src = "http://dahi.manoa.hawaii.edu/silence/ir/output/<?php echo $output; ?>";
	document.getElementById("listen").style.display = "block";
	<?php endif; ?>
}

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

#title p {
	color: antiquewhite;
	font-size: 60%;
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
	opacity: 0.6;
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
	margin-top: 30px;
	display: inline-block;
	position: relative;
	min-width: 500px;
	width: 45%;
}
.poemaudio-center p
{
	margin-top: 10px;
}
.poemmap-right
{
	text-align: center;
	font-size: 25px;
	float: right;
	min-width: 200px;
	width: 25%;
	opacity: 0.6;
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
#sectiontitle
{
	font-size: 30px;
	font-family: Playfair Display;
	color: #fdedff;
	white-space: pre-wrap;
	margin-top: 25px;
}
.sidenav
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
	margin-top: 40px;
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
#convolvo_side
{
	top: 270px;
	left: -110px;
	color: #ffccc1;
	background-color: inherit;
	opacity: 0.5;
}
#instructions {
	color: #fdedff;
	font-family: Playfair Display;
	font-size: 16px;	
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
	background: #ff936a;
	color: peachpuff;
	border: 3px solid;
	border-radius: 10px;
	padding: 10px;
	font-size: 18px;
	font-family: Playfair Display;
	font-weight: bold;
}



#listen { display: none; }

</style>
<meta charset="UTF-8">

<title>Archive of Silence: Convolution Results</title>
</head>
<body>
<div id="pagecontainer">
	<div id="title">

	<h1>A R C H I V E &nbsp o f &nbsp S I L E N C E </h1>
	<p> B Y &nbsp J U L I A &nbsp W I E T I N G</p>
</div>

		<div class="sidenav" id="sidenavmenu">
			<a href="http://dahi.manoa.hawaii.edu/silence/index.html" class="fade-in" id="home">H o m e &nbsp &nbsp
			<i class="fa fa-home fa-2x" aria-hidden="true"></i></a>
			<a href="http://dahi.manoa.hawaii.edu/silence/Convolution_Home.html" class="fade-in" id="convolution">C o n v o l u t i o n &nbsp &nbsp<i class="fa fa-music fa-2x" aria-hidden="true"></i></a>
			<a href="http://dahi.manoa.hawaii.edu/silence/convolvo.php" class="fade-in" id="convolvo_side">C o n v o l v o &nbsp &nbsp <i class="fa fa-file-audio-o fa-2x" aria-hidden="true"></i></a>
		</div>
	
		<div class="tableofcontents">
			<button class="tableofcontents-button fade-in">T a b l e &nbsp O f &nbsp C o n t e n t s</button>
			<div class="tableofcontents-content">
				<a class= "fade-in" id="def_archive" href="http://dahi.manoa.hawaii.edu/silence/Definition_Archive.html">Definition: Archive</a>
			<a class= "fade-in" id="def_silence" href="http://dahi.manoa.hawaii.edu/silence/Definition_Silence.html">Definition: Silence</a>
			<a class= "fade-in" id="def_4D" href="http://dahi.manoa.hawaii.edu/silence/Definition_4D.html">Definition: 4D</a>
			<a class= "fade-in" id="essay" href="http://dahi.manoa.hawaii.edu/silence/Essay.html">Essay</a>
			<a class= "fade-in" id="convolvo" href="http://dahi.manoa.hawaii.edu/silence/convolvo.php">Convolute a Sound</a>
			<a class= "fade-in" id="references" href="http://dahi.manoa.hawaii.edu/silence/References.html">References</a>
			<a class= "fade-in" id="appendix" href="http://dahi.manoa.hawaii.edu/silence/Appendix.html">Appendix: Text Definition of Poems</a>
			<a class="fade-in" id="credits" href="http://dahi.manoa.hawaii.edu/silence/Credits.html">Credits</a>
		</div>
		</div>
		<div id="instructions" class="poemaudio-center">
		<a id="sectiontitle">C O N - V O L V - O</a><br><br><br>

			<?php if ($error == ""): ?>
<p>"<?php echo $_POST["filename"]; ?>" convoluted in <strong><?php echo $sitenames[$_POST["reverb"]]; ?></strong></p>
<p><button class="btn" onclick="listen();">L I S T E N</button></p>
<p id="listen"><iframe id="audiopreview" src="empty.html" style="width: 100%; height: 80px; border: 0px;"></iframe></p>
<p>Download your file from within the preview frame above.</p>
<p>N E X T &nbsp S T E P S:</p>
<p>Don't like what you hear?</p>
<p><button class="btn" onclick="if (confirm('Are you sure?')) { document.location.href='remove.php?filename=<?php echo $_POST["filename"]; ?>&output=<?php echo $output; ?>'; }">S T A R T &nbsp O V E R</button>
  <br> 
  (deletes input and output files).</p>
<p><button class="btn" onclick="document.location.href='convolvo-preview.php?filename=<?php echo $_POST["filename"]; ?>';">CH A N G E &nbsp R E V E R B</button> 
  <br>
  (preserves input file).</p>
<?php else: ?>
<p>N E X T &nbsp S T E P S: </p>
<p><?php echo $error; ?></p>
<p><button class="btn" onclick="document.location.href='convolvo.php?delete=<?php echo $_POST["filename"]; ?>';">S T A R T &nbsp O V E R</button></p>

<?php endif; ?>
            
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