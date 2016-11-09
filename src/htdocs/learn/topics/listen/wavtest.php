<?php
      //	Author:	Tiffany Kalin
      //	Contact:
      //	Last	modified:	11/3/2016
      if	(!isset($TEMPLATE))	{
      $TITLE	=	'Wav File Test';
      $NAVIGATION	= true;
      include	'template.inc.php';
      }
?>
<p>
	If this works you should have a control panel below this test and if you click
  on the play button (usually a sideways triangle) you should hear a noise. If
  not you need to <a href="setup.php">install</a> a plugin to play
  wav files in your browser.
</p>
<h3>Test Sound</h3>
<p>
	<audio controls>
		<source src="wavs/pst.wav" type="audio/wav"/>
	Your browser does not support the audio element.
	</audio>
</p>
<p>
	If it does work you can <a href="index.php">continue</a> with
  "Listening to Earthquakes."
</p>
