<!doctype html>
<?php 

$lang="en-us";
$ext="en";

if (isset($_GET['lang'])){
	if ($_GET['lang']=="fr"){
		$lang="fr";
		$ext="fr";
	}
}

$file='translate\values-'.$ext.'.php';
include($file);
?>

<html lang="<?php echo $lang;?>">
<head>
  <meta charset="utf-8">
  <title>QUIZZ HTML5</title>
  <link href="css/style.css" rel="Stylesheet" type="text/css"/>
</head>
<body>
	<h1><?php echo $elements["title1"];?></h1>
	
	<form method="POST" action="solution.php"  name="quiz-html">
		<ol type="1">
			<?php foreach ($elements["Questions"] as $question){?>
				<li><p>
					<?php echo $question["Question"];?>
					<ul>
						<?php foreach ($question["Answers"] as $answer){?>
						<li><input type="radio" value="<?php echo $answer["id"];?>" name="q<?php echo $question["id"];?>"/><label><?php echo $answer["text"];?></label>
						</li>
						<?php }?>
					</ul>
				</p></li>
			<?php 
			}?>
		</ol>
		<input type="button" value="Submit" name="btn">   
	</form>
</body>
</html>