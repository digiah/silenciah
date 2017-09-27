<?php
if (isset($_GET["filename"]) && file_exists("ir/input/".$_GET["filename"])) {
	unlink("ir/input/".$_GET["filename"]);
	if (file_exists("ir/output/".$_GET["output"])) {
		unlink("conv-ir/output/".$_GET["output"]);
	}
}
header("location: convolvo.php");
exit(0);
?>