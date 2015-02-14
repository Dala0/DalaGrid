<html 
	<head>
		<title>
			DalaGrid
        </title>
		<style>
			body {
				background-color: black;
				color: white;
			}
			div.tbox {
				width: 320px;
				padding: 32px;
				float: left;
				background-color: rgb<?php
				if (!isset($bgcr)) {
					$bgcr = 0;
				}
				
				if (isset($_REQUEST['bgcr'])) {
					$bgcr = $_REQUEST['bgcr'];
				}
			
				if (!isset($bgcg)) {
					$bgcg = 0;
				}
				
				if (isset($_REQUEST['bgcg'])) {
					$bgcg = $_REQUEST['bgcg'];
				}
				
				if (!isset($bgcb)) {
					$bgcb = 0;
				}
				
				if (isset($_REQUEST['bgcb'])) {
					$bgcb = $_REQUEST['bgcb'];
				}
				
				echo '('.$bgcr.','.$bgcg.','.$bgcb.');';
				?>
			}
			div.cbox {
				margin: 20px;
				float: left;
				font-family: Century Gothic, Arial, Helvetica, sans-serif;
			}
			div.ebox {
				width: 128px;
				float: left;
			}
			div.eholder {
				margin: 0px;
				padding: 10px;
				float: left;
				background-color: rgb<?php
				echo '('.$bgcr.','.$bgcg.','.$bgcb.');';
				?>
			}
			div.lholder {
				width: 2520px;
				margin: 0px;
				padding: 0px;
				float: left;
				background-color: rgb<?php
				echo '('.$bgcr.','.$bgcg.','.$bgcb.');';
				?>
			}
			div.pholder {
				width: 256px;
				margin: 0px;
				padding: 0px;
				float: left;
				background-color: rgb<?php
				echo '('.$bgcr.','.$bgcg.','.$bgcb.');';
				?>
			}
			div.plholder {
				width: 512px;
				margin: 0px;
				padding: 0px;
				float: left;
				background-color: rgb<?php
				echo '('.$bgcr.','.$bgcg.','.$bgcb.');';
				?>
			}
			div.csub {
				float: left;
				width: 80px;
				height: 40px;
			}
			div.csubh {
				float: left;
				font-weight: bold;
				width: 80px;
				height: 30px;
				font-size: 0.7em;	
			}
			div.csubhf {
				clear: left;
				float: left;
				font-weight: bold;
				width: 80px;
				height: 30px;
				font-size: 0.9em;
			}
			div.cb {
				clear: left;
				float: left;
				font-size: 0.8em;
			}
			div.ccolf {
				clear: left;
				float: left;
				width: 50px;
				height: 40px;
				
			}
			div.ccol {
				float: left;
				width: 50px;
				height: 40px;
			}
			
			div.ccolhf {
				clear: left;
				float: left;
				font-weight: bold;
				width: 50px;
				height: 30px;
			}
			div.ccolh {
				float: left;
				font-weight: bold;
				width: 50px;
				height: 30px;
				font-size: 0.6em;
			}
			div.hide {
				display:none;
			}
			div.square {
				width: 8px;
				height: 8px;
				float: left;
			}
			div.circle {
				width: 8px;
				height: 8px;
				-moz-border-radius: 4px;
				-webkit-border-radius: 4px;
				border-radius: 4px; 
				float: left;
				margin: 0px;
			}
			div.triangle {
				width: 0;
				height: 0;
				border-left: 8px solid transparent;
				float: left;
			}
			div.rtype {
			<?php
			if (($_REQUEST['rt'] == 'square') || ($_REQUEST['submited'] == 0)) {
				echo 'width: 8px; height: 8px; float: left;';
			}
			else if ($_REQUEST['rt'] == 'circle') {
				echo 'width: 6px; height: 6px; -moz-border-radius: 3px; -webkit-border-radius: 3px; border-radius: 3px; float: left; margin: 1px;';
			}
			else if ($_REQUEST['rt'] == 'triangle') {
				echo 'width: 0; height: 0; border-left: 8px solid transparent; float: left;';
			}
			else if ($_REQUEST['rt'] == 'triangle2') {
				echo 'width: 0; height: 0; border-right: 8px solid transparent; float: left;';
			}
			else if ($_REQUEST['rt'] == 'triangle3') {
				echo 'width: 0; height: 0; border-right: 8px solid transparent; float: left;';
			}
			else if ($_REQUEST['rt'] == 'triangle4') {
				echo 'width: 0; height: 0; border-left: 8px solid transparent; float: left;';
			}
			?>
			}
			
			.pholder div {
 				width:1px;
				height:1px;
				float:left;
			}
			.plholder div {
 				width:1px;
				height:1px;
				float:left;
			}
		</style>
		<script language="JavaScript">
			function ClampAll(chk)
			{

				document.colours.or11.checked = true ;
				document.colours.or12.checked = true ;
				document.colours.or13.checked = true ;
				document.colours.or14.checked = true ;
				document.colours.or15.checked = true ;
				document.colours.or16.checked = true ;
				document.colours.or17.checked = true ;
				document.colours.or18.checked = true ;
				
				document.colours.or21.checked = true ;
				document.colours.or22.checked = true ;
				document.colours.or23.checked = true ;
				document.colours.or24.checked = true ;
				document.colours.or25.checked = true ;
				document.colours.or26.checked = true ;
				document.colours.or27.checked = true ;
				document.colours.or28.checked = true ;
				
				document.colours.or31.checked = true ;
				document.colours.or32.checked = true ;
				document.colours.or33.checked = true ;
				document.colours.or34.checked = true ;
				document.colours.or35.checked = true ;
				document.colours.or36.checked = true ;
				document.colours.or37.checked = true ;
				document.colours.or38.checked = true ;
				
				document.colours.or41.checked = true ;
				document.colours.or42.checked = true ;
				document.colours.or43.checked = true ;
				document.colours.or44.checked = true ;
				document.colours.or45.checked = true ;
				document.colours.or46.checked = true ;
				document.colours.or47.checked = true ;
				document.colours.or48.checked = true ;
				
				document.colours.or51.checked = true ;
				document.colours.or52.checked = true ;
				document.colours.or53.checked = true ;
				document.colours.or54.checked = true ;
				document.colours.or55.checked = true ;
				document.colours.or56.checked = true ;
				document.colours.or57.checked = true ;
				document.colours.or58.checked = true ;
				
				document.colours.or61.checked = true ;
				document.colours.or62.checked = true ;
				document.colours.or63.checked = true ;
				document.colours.or64.checked = true ;
				document.colours.or65.checked = true ;
				document.colours.or66.checked = true ;
				document.colours.or67.checked = true ;
				document.colours.or68.checked = true ;
				
				document.colours.or71.checked = true ;
				document.colours.or72.checked = true ;
				document.colours.or73.checked = true ;
				document.colours.or74.checked = true ;
				document.colours.or75.checked = true ;
				document.colours.or76.checked = true ;
				document.colours.or77.checked = true ;
				document.colours.or78.checked = true ;
				
				document.colours.or81.checked = true ;
				document.colours.or82.checked = true ;
				document.colours.or83.checked = true ;
				document.colours.or84.checked = true ;
				document.colours.or85.checked = true ;
				document.colours.or86.checked = true ;
				document.colours.or87.checked = true ;
				document.colours.or88.checked = true ;
				
			}
			
			function UnClampAll(chk)
			{
				document.colours.or11.checked = false ;
				document.colours.or12.checked = false ;
				document.colours.or13.checked = false ;
				document.colours.or14.checked = false ;
				document.colours.or15.checked = false ;
				document.colours.or16.checked = false ;
				document.colours.or17.checked = false ;
				document.colours.or18.checked = false ;
				
				document.colours.or21.checked = false ;
				document.colours.or22.checked = false ;
				document.colours.or23.checked = false ;
				document.colours.or24.checked = false ;
				document.colours.or25.checked = false ;
				document.colours.or26.checked = false ;
				document.colours.or27.checked = false ;
				document.colours.or28.checked = false ;
				
				document.colours.or31.checked = false ;
				document.colours.or32.checked = false ;
				document.colours.or33.checked = false ;
				document.colours.or34.checked = false ;
				document.colours.or35.checked = false ;
				document.colours.or36.checked = false ;
				document.colours.or37.checked = false ;
				document.colours.or38.checked = false ;
				
				document.colours.or41.checked = false ;
				document.colours.or42.checked = false ;
				document.colours.or43.checked = false ;
				document.colours.or44.checked = false ;
				document.colours.or45.checked = false ;
				document.colours.or46.checked = false ;
				document.colours.or47.checked = false ;
				document.colours.or48.checked = false ;
				
				document.colours.or51.checked = false ;
				document.colours.or52.checked = false ;
				document.colours.or53.checked = false ;
				document.colours.or54.checked = false ;
				document.colours.or55.checked = false ;
				document.colours.or56.checked = false ;
				document.colours.or57.checked = false ;
				document.colours.or58.checked = false ;
				
				document.colours.or61.checked = false ;
				document.colours.or62.checked = false ;
				document.colours.or63.checked = false ;
				document.colours.or64.checked = false ;
				document.colours.or65.checked = false ;
				document.colours.or66.checked = false ;
				document.colours.or67.checked = false ;
				document.colours.or68.checked = false ;
				
				document.colours.or71.checked = false ;
				document.colours.or72.checked = false ;
				document.colours.or73.checked = false ;
				document.colours.or74.checked = false ;
				document.colours.or75.checked = false ;
				document.colours.or76.checked = false ;
				document.colours.or77.checked = false ;
				document.colours.or78.checked = false ;
				
				document.colours.or81.checked = false ;
				document.colours.or82.checked = false ;
				document.colours.or83.checked = false ;
				document.colours.or84.checked = false ;
				document.colours.or85.checked = false ;
				document.colours.or86.checked = false ;
				document.colours.or87.checked = false ;
				document.colours.or88.checked = false ;
			}
		</script>
	</head>
	<body>
    	<div class="tbox">
        <?php

		if (!isset($arr)) {
			$arr = 4000;
		}
		
		if (isset($_REQUEST['arr'])) {
			$arr = $_REQUEST['arr'];
		}
		
	//	if (!$_REQUEST['tiles'] == 1) {
	//		unset($_REQUEST['tiles']);
	//	}

		// Set colour group ranges

		if ($_REQUEST['or11'] == 1) {
			$r11 = $_REQUEST['r11'];
		}
		else {
			$r11 = rand(1, 255);
		}
		
		if ($_REQUEST['or21'] == 1) {
			$r21 = $_REQUEST['r21'];
		}
		else {
			$r21 = rand($r11, 255);
		}

		if ($_REQUEST['or31'] == 1) {
			$r31 = $_REQUEST['r31'];
		}
		else {
			$r31 = rand(1, 255);
		}
		
		if ($_REQUEST['or41'] == 1) {
			$r41 = $_REQUEST['r41'];
		}
		else {
			$r41 = rand($r31, 255);
		}
		
		if ($_REQUEST['or51'] == 1) {
			$r51 = $_REQUEST['r51'];
		}
		else {
			$r51 = rand(1, 255);
		}
		
		if ($_REQUEST['or61'] == 1) {
			$r61 = $_REQUEST['r61'];
		}
		else {
			$r61 = rand($r51, 255);
		}
		
		
		if ($_REQUEST['or12'] == 1) {
			$r12 = $_REQUEST['r12'];
		}
		else {
			$r12 = rand(1, 255);
		}
		
		if ($_REQUEST['or22'] == 1) {
			$r22 = $_REQUEST['r22'];
		}
		else {
			$r22 = rand($r12, 255);
		}
		
		if ($_REQUEST['or32'] == 1) {
			$r32 = $_REQUEST['r32'];
		}
		else {
			$r32 = rand(1, 255);
		}
		
		if ($_REQUEST['or42'] == 1) {
			$r42 = $_REQUEST['r42'];
		}
		else {
			$r42 = rand($r32, 255);
		}
		
		if ($_REQUEST['or52'] == 1) {
			$r52 = $_REQUEST['r52'];
		}
		else {
			$r52 = rand(1, 255);
		}
		
		if ($_REQUEST['or62'] == 1) {
			$r62 = $_REQUEST['r62'];
		}
		else {
			$r62 = rand($r52, 255);
		}

		
		if ($_REQUEST['or13'] == 1) {
			$r13 = $_REQUEST['r13'];
		}
		else {
			$r13 = rand(1, 255);
		}
		
		if ($_REQUEST['or23'] == 1) {
			$r23 = $_REQUEST['r23'];
		}
		else {
			$r23 = rand($r13, 255);
		}
		
		
		if ($_REQUEST['or33'] == 1) {
			$r33 = $_REQUEST['r33'];
		}
		else {
			$r33 = rand(1, 255);
		}
		
		if ($_REQUEST['or43'] == 1) {
			$r43 = $_REQUEST['r43'];
		}
		else {
			$r43 = rand($r33, 255);
		}
		
		if ($_REQUEST['or53'] == 1) {
			$r53 = $_REQUEST['r53'];
		}
		else {
			$r53 = rand(1, 255);
		}
		
		if ($_REQUEST['or63'] == 1) {
			$r63 = $_REQUEST['r63'];
		}
		else {
			$r63 = rand($r53, 255);
		}


		if ($_REQUEST['or14'] == 1) {
			$r14 = $_REQUEST['r14'];
		}
		else {
			$r14 = rand(1, 255);
		}
		
		if ($_REQUEST['or24'] == 1) {
			$r24 = $_REQUEST['r24'];
		}
		else {
			$r24 = rand($r14, 255);
		}
		
		if ($_REQUEST['or34'] == 1) {
			$r34 = $_REQUEST['r34'];
		}
		else {
			$r34 = rand(1, 255);
		}
		
		if ($_REQUEST['or44'] == 1) {
			$r44 = $_REQUEST['r44'];
		}
		else {
			$r44 = rand($r34, 255);
		}
		
		if ($_REQUEST['or54'] == 1) {
			$r54 = $_REQUEST['r54'];
		}
		else {
			$r54 = rand(1, 255);
		}
		
		if ($_REQUEST['or64'] == 1) {
			$r64 = $_REQUEST['r64'];
		}
		else {
			$r64 = rand($r54, 255);
		}
	
	
		if ($_REQUEST['or15'] == 1) {
			$r15 = $_REQUEST['r15'];
		}
		else {
			$r15 = rand(1, 255);
		}
		
		if ($_REQUEST['or25'] == 1) {
			$r25 = $_REQUEST['r25'];
		}
		else {
			$r25 = rand($r15, 255);
		}

		if ($_REQUEST['or35'] == 1) {
			$r35 = $_REQUEST['r35'];
		}
		else {
			$r35 = rand(1, 255);
		}
		
		if ($_REQUEST['or45'] == 1) {
			$r45 = $_REQUEST['r45'];
		}
		else {
			$r45 = rand($r35, 255);
		}
		
		if ($_REQUEST['or55'] == 1) {
			$r55 = $_REQUEST['r55'];
		}
		else {
			$r55 = rand(1, 255);
		}
		
		if ($_REQUEST['or65'] == 1) {
			$r65 = $_REQUEST['r65'];
		}
		else {
			$r65 = rand($r55, 255);
		}
	
	
		if ($_REQUEST['or16'] == 1) {
			$r16 = $_REQUEST['r16'];
		}
		else {
			$r16 = rand(1, 255);
		}
		
		if ($_REQUEST['or26'] == 1) {
			$r26 = $_REQUEST['r26'];
		}
		else {
			$r26 = rand($r16, 255);
		}

		if ($_REQUEST['or36'] == 1) {
			$r36 = $_REQUEST['r36'];
		}
		else {
			$r36 = rand(1, 255);
		}
		
		if ($_REQUEST['or46'] == 1) {
			$r46 = $_REQUEST['r46'];
		}
		else {
			$r46 = rand($r36, 255);
		}
		
		if ($_REQUEST['or56'] == 1) {
			$r56 = $_REQUEST['r56'];
		}
		else {
			$r56 = rand(1, 255);
		}
		
		if ($_REQUEST['or66'] == 1) {
			$r66 = $_REQUEST['r66'];
		}
		else {
			$r66 = rand($r56, 255);
		}
		
		
		if ($_REQUEST['or17'] == 1) {
			$r17 = $_REQUEST['r17'];
		}
		else {
			$r17 = rand(1, 255);
		}
		
		if ($_REQUEST['or27'] == 1) {
			$r27 = $_REQUEST['r27'];
		}
		else {
			$r27 = rand($r17, 255);
		}

		if ($_REQUEST['or37'] == 1) {
			$r37 = $_REQUEST['r37'];
		}
		else {
			$r37 = rand(1, 255);
		}
		
		if ($_REQUEST['or47'] == 1) {
			$r47 = $_REQUEST['r47'];
		}
		else {
			$r47 = rand($r37, 255);
		}
		
		if ($_REQUEST['or57'] == 1) {
			$r57 = $_REQUEST['r57'];
		}
		else {
			$r57 = rand(1, 255);
		}
		
		if ($_REQUEST['or67'] == 1) {
			$r67 = $_REQUEST['r67'];
		}
		else {
			$r67 = rand($r57, 255);
		}
		
		
		if ($_REQUEST['or18'] == 1) {
			$r18 = $_REQUEST['r18'];
		}
		else {
			$r18 = rand(1, 255);
		}
		
		if ($_REQUEST['or28'] == 1) {
			$r28 = $_REQUEST['r28'];
		}
		else {
			$r28 = rand($r18, 255);
		}

		if ($_REQUEST['or38'] == 1) {
			$r38 = $_REQUEST['r38'];
		}
		else {
			$r38 = rand(1, 255);
		}
		
		if ($_REQUEST['or48'] == 1) {
			$r48 = $_REQUEST['r48'];
		}
		else {
			$r48 = rand($r38, 255);
		}
		
		if ($_REQUEST['or58'] == 1) {
			$r58 = $_REQUEST['r58'];
		}
		else {
			$r58 = rand(1, 255);
		}
		
		if ($_REQUEST['or68'] == 1) {
			$r68 = $_REQUEST['r68'];
		}
		else {
			$r68 = rand($r58, 255);
		}

		// Set up colour groups
		
		$cn = 1;
		
		while ($cn < 9) {
		
			if ($_REQUEST['colour'.$cn] == 'white') {
				${'r1' . $cn} = 255;
				${'r2' . $cn} = 255;
				${'r3' . $cn} = 255;
				${'r4' . $cn} = 255;
				${'r5' . $cn} = 255;
				${'r6' . $cn} = 255;
				$_REQUEST['or1'.$cn] = 1;
				$_REQUEST['or2'.$cn] = 1;
				$_REQUEST['or3'.$cn] = 1;
				$_REQUEST['or4'.$cn] = 1;
				$_REQUEST['or5'.$cn] = 1;
				$_REQUEST['or6'.$cn] = 1;
			}	
		
			if ($_REQUEST['colour'.$cn] == 'black') {
				${"r1" . $cn} = 0;
				${'r2' . $cn} = 0;
				${'r3' . $cn} = 0;
				${'r4' . $cn} = 0;
				${'r5' . $cn} = 0;
				${'r6' . $cn} = 0;
				$_REQUEST['or1'.$cn] = 1;
				$_REQUEST['or2'.$cn] = 1;
				$_REQUEST['or3'.$cn] = 1;
				$_REQUEST['or4'.$cn] = 1;
				$_REQUEST['or5'.$cn] = 1;
				$_REQUEST['or6'.$cn] = 1;
			}
			
			if ($_REQUEST['colour'.$cn] == 'grey') {
				${'r1' . $cn} = 127;
				${'r2' . $cn} = 127;
				${'r3' . $cn} = 127;
				${'r4' . $cn} = 127;
				${'r5' . $cn} = 127;
				${'r6' . $cn} = 127;
				$_REQUEST['or1'.$cn] = 1;
				$_REQUEST['or2'.$cn] = 1;
				$_REQUEST['or3'.$cn] = 1;
				$_REQUEST['or4'.$cn] = 1;
				$_REQUEST['or5'.$cn] = 1;
				$_REQUEST['or6'.$cn] = 1;
			}
			
			if ($_REQUEST['colour'.$cn] == 'red') {
				${'r1' . $cn} = 255;
				${'r2' . $cn} = 255;
				${'r3' . $cn} = 0;
				${'r4' . $cn} = 0;
				${'r5' . $cn} = 0;
				${'r6' . $cn} = 0;
				$_REQUEST['or1'.$cn] = 1;
				$_REQUEST['or2'.$cn] = 1;
				$_REQUEST['or3'.$cn] = 1;
				$_REQUEST['or4'.$cn] = 1;
				$_REQUEST['or5'.$cn] = 1;
				$_REQUEST['or6'.$cn] = 1;
			}	
			
			if ($_REQUEST['colour'.$cn] == 'green') {
				${'r1' . $cn} = 0;
				${'r2' . $cn} = 0;
				${'r3' . $cn} = 255;
				${'r4' . $cn} = 255;
				${'r5' . $cn} = 0;
				${'r6' . $cn} = 0;
				$_REQUEST['or1'.$cn] = 1;
				$_REQUEST['or2'.$cn] = 1;
				$_REQUEST['or3'.$cn] = 1;
				$_REQUEST['or4'.$cn] = 1;
				$_REQUEST['or5'.$cn] = 1;
				$_REQUEST['or6'.$cn] = 1;
			}	
			
			if ($_REQUEST['colour'.$cn] == 'blue') {
				${'r1' . $cn} = 0;
				${'r2' . $cn} = 0;
				${'r3' . $cn} = 0;
				${'r4' . $cn} = 0;
				${'r5' . $cn} = 255;
				${'r6' . $cn} = 255;
				$_REQUEST['or1'.$cn] = 1;
				$_REQUEST['or2'.$cn] = 1;
				$_REQUEST['or3'.$cn] = 1;
				$_REQUEST['or4'.$cn] = 1;
				$_REQUEST['or5'.$cn] = 1;
				$_REQUEST['or6'.$cn] = 1;
			}	
			
			if ($_REQUEST['colour'.$cn] == 'purple') {
				${'r1' . $cn} = 128;
				${'r2' . $cn} = 128;
				${'r3' . $cn} = 0;
				${'r4' . $cn} = 0;
				${'r5' . $cn} = 128;
				${'r6' . $cn} = 128;
				$_REQUEST['or1'.$cn] = 1;
				$_REQUEST['or2'.$cn] = 1;
				$_REQUEST['or3'.$cn] = 1;
				$_REQUEST['or4'.$cn] = 1;
				$_REQUEST['or5'.$cn] = 1;
				$_REQUEST['or6'.$cn] = 1;
			}	
			
			if ($_REQUEST['colour'.$cn] == 'pink') {
				${'r1' . $cn} = 255;
				${'r2' . $cn} = 255;
				${'r3' . $cn} = 200;
				${'r4' . $cn} = 200;
				${'r5' . $cn} = 200;
				${'r6' . $cn} = 200;
				$_REQUEST['or1'.$cn] = 1;
				$_REQUEST['or2'.$cn] = 1;
				$_REQUEST['or3'.$cn] = 1;
				$_REQUEST['or4'.$cn] = 1;
				$_REQUEST['or5'.$cn] = 1;
				$_REQUEST['or6'.$cn] = 1;
			}	
			
			if ($_REQUEST['colour'.$cn] == 'orange') {
				${'r1' . $cn} = 255;
				${'r2' . $cn} = 255;
				${'r3' . $cn} = 127;
				${'r4' . $cn} = 127;
				${'r5' . $cn} = 0;
				${'r6' . $cn} = 0;
				$_REQUEST['or1'.$cn] = 1;
				$_REQUEST['or2'.$cn] = 1;
				$_REQUEST['or3'.$cn] = 1;
				$_REQUEST['or4'.$cn] = 1;
				$_REQUEST['or5'.$cn] = 1;
				$_REQUEST['or6'.$cn] = 1;
			}	
			
			if ($_REQUEST['colour'.$cn] == 'yellow') {
				${'r1' . $cn} = 255;
				${'r2' . $cn} = 255;
				${'r3' . $cn} = 255;
				${'r4' . $cn} = 255;
				${'r5' . $cn} = 0;
				${'r6' . $cn} = 0;
				$_REQUEST['or1'.$cn] = 1;
				$_REQUEST['or2'.$cn] = 1;
				$_REQUEST['or3'.$cn] = 1;
				$_REQUEST['or4'.$cn] = 1;
				$_REQUEST['or5'.$cn] = 1;
				$_REQUEST['or6'.$cn] = 1;
			}	
			
			if ($_REQUEST['colour'.$cn] == 'turquoise') {
				${'r1' . $cn} = 64;
				${'r2' . $cn} = 64;
				${'r3' . $cn} = 224;
				${'r4' . $cn} = 224;
				${'r5' . $cn} = 208;
				${'r6' . $cn} = 208;
				$_REQUEST['or1'.$cn] = 1;
				$_REQUEST['or2'.$cn] = 1;
				$_REQUEST['or3'.$cn] = 1;
				$_REQUEST['or4'.$cn] = 1;
				$_REQUEST['or5'.$cn] = 1;
				$_REQUEST['or6'.$cn] = 1;
			}
			
			if ($_REQUEST['colour'.$cn] == 'indigo') {
				${'r1' . $cn} = 75;
				${'r2' . $cn} = 75;
				${'r3' . $cn} = 0;
				${'r4' . $cn} = 0;
				${'r5' . $cn} = 130;
				${'r6' . $cn} = 130;
				$_REQUEST['or1'.$cn] = 1;
				$_REQUEST['or2'.$cn] = 1;
				$_REQUEST['or3'.$cn] = 1;
				$_REQUEST['or4'.$cn] = 1;
				$_REQUEST['or5'.$cn] = 1;
				$_REQUEST['or6'.$cn] = 1;
			}
			
			if ($_REQUEST['colour'.$cn] == 'brown') {
				${'r1' . $cn} = 150;
				${'r2' . $cn} = 150;
				${'r3' . $cn} = 75;
				${'r4' . $cn} = 75;
				${'r5' . $cn} = 0;
				${'r6' . $cn} = 0;
				$_REQUEST['or1'.$cn] = 1;
				$_REQUEST['or2'.$cn] = 1;
				$_REQUEST['or3'.$cn] = 1;
				$_REQUEST['or4'.$cn] = 1;
				$_REQUEST['or5'.$cn] = 1;
				$_REQUEST['or6'.$cn] = 1;
			}
			$cn++;
		}
			
		// Make the grid
		
		$gv = 1;
		
		while ($gv < 17) {
			$rv = 1;
			
			while ($rv < 17) {
				$num = rand(1, 8);
				if ($num == 1) {
					$red = rand($r11, $r21);
					$green = rand($r31, $r41);
					$blue = rand($r51, $r61);
					$grid[$gv][$rv] = array();
					$grid[$gv][$rv][1] = $red;
					$grid[$gv][$rv][2] = $green;
					$grid[$gv][$rv][3] = $blue;
				}
				else if ($num == 2) {
					$red = rand($r12, $r22);
					$green = rand($r32, $r42);
					$blue = rand($r52, $r62);
					$grid[$gv][$rv] = array();
					$grid[$gv][$rv][1] = $red;
					$grid[$gv][$rv][2] = $green;
					$grid[$gv][$rv][3] = $blue;
				}
				else if ($num == 3) {
					$red = rand($r13, $r23);
					$green = rand($r33, $r43);
					$blue = rand($r53, $r63);
					$grid[$gv][$rv] = array();
					$grid[$gv][$rv][1] = $red;
					$grid[$gv][$rv][2] = $green;
					$grid[$gv][$rv][3] = $blue;
				}
				else if ($num == 4) {
					$red = rand($r14, $r24);
					$green = rand($r34, $r44);
					$blue = rand($r54, $r64);
					$grid[$gv][$rv] = array();
					$grid[$gv][$rv][1] = $red;
					$grid[$gv][$rv][2] = $green;
					$grid[$gv][$rv][3] = $blue;
				}
				else if ($num == 5) {
					$red = rand($r15, $r25);
					$green = rand($r35, $r45);
					$blue = rand($r55, $r65);
					$grid[$gv][$rv] = array();
					$grid[$gv][$rv][1] = $red;
					$grid[$gv][$rv][2] = $green;
					$grid[$gv][$rv][3] = $blue;
		
				}
				else if ($num == 6) {
					$red = rand($r16, $r26);
					$green = rand($r36, $r46);
					$blue = rand($r56, $r66);
					$grid[$gv][$rv] = array();
					$grid[$gv][$rv][1] = $red;
					$grid[$gv][$rv][2] = $green;
					$grid[$gv][$rv][3] = $blue;
				}
				else if ($num == 7) {
					$red = rand($r17, $r27);
					$green = rand($r37, $r47);
					$blue = rand($r57, $r67);
					$grid[$gv][$rv] = array();
					$grid[$gv][$rv][1] = $red;
					$grid[$gv][$rv][2] = $green;
					$grid[$gv][$rv][3] = $blue;
				}
				else {
					$red = rand($r18, $r28);
					$green = rand($r38, $r48);
					$blue = rand($r58, $r68);
					$grid[$gv][$rv] = array();
					$grid[$gv][$rv][1] = $red;
					$grid[$gv][$rv][2] = $green;
					$grid[$gv][$rv][3] = $blue;
				}
				$rv++;
			}
			$gv++;
		}

 
		if ($_REQUEST['lines'] == 'one') {


			// Line drawing one colour
			
			$linevar = 1;
			$nublines = rand(3,16);
			
			while ($linevar <= $nublines) {
				$red = rand($r11, $r21);
				$green = rand($r31, $r41);
				$blue = rand($r51, $r61);
				$linesize = rand(3,6);
				$startline = rand(1,12);
				$startlinex = rand(1,16);
				$grid[$startline][$startlinex][1] = $red;
				$grid[$startline][$startlinex][2] = $green;
				$grid[$startline][$startlinex][3] = $blue;
				$grid[$startline+1][$startlinex][1] = $red;
				$grid[$startline+1][$startlinex][2] = $green;
				$grid[$startline+1][$startlinex][3] = $blue;
				$grid[$startline+2][$startlinex][1] = $red;
				$grid[$startline+2][$startlinex][2] = $green;
				$grid[$startline+2][$startlinex][3] = $blue;
				if ($linesize > 3) {
					$grid[$startline+3][$startlinex][1] = $red;
					$grid[$startline+3][$startlinex][2] = $green;
					$grid[$startline+3][$startlinex][3] = $blue;
				}
				if ($linesize > 4) {
					$grid[$startline+4][$startlinex][1] = $red;
					$grid[$startline+4][$startlinex][2] = $green;
					$grid[$startline+4][$startlinex][3] = $blue;
				}
				if ($linesize > 5) {
					$grid[$startline+5][$startlinex][1] = $red;
					$grid[$startline+5][$startlinex][2] = $green;
					$grid[$startline+5][$startlinex][3] = $blue;
				}
				$linevar++;
			
			}
		
		} else if ($_REQUEST['lines'] == 'random') {
		
		
			// Line drawing random colours
			
			$linevar = 1;
			$nublines = rand(3,16);
			
			while ($linevar <= $nublines) {
				$num = rand(1, 8);
				if ($num == 1) {
					$red = rand($r11, $r21);
					$green = rand($r31, $r41);
					$blue = rand($r51, $r61);
					$linesize = rand(3,6);
					$startline = rand(1,12);
					$startlinex = rand(1,16);
					$grid[$startline][$startlinex][1] = $red;
					$grid[$startline][$startlinex][2] = $green;
					$grid[$startline][$startlinex][3] = $blue;
					$grid[$startline+1][$startlinex][1] = $red;
					$grid[$startline+1][$startlinex][2] = $green;
					$grid[$startline+1][$startlinex][3] = $blue;
					$grid[$startline+2][$startlinex][1] = $red;
					$grid[$startline+2][$startlinex][2] = $green;
					$grid[$startline+2][$startlinex][3] = $blue;
					if ($linesize > 3) {
						$grid[$startline+3][$startlinex][1] = $red;
						$grid[$startline+3][$startlinex][2] = $green;
						$grid[$startline+3][$startlinex][3] = $blue;
					}
					if ($linesize > 4) {
						$grid[$startline+4][$startlinex][1] = $red;
						$grid[$startline+4][$startlinex][2] = $green;
						$grid[$startline+4][$startlinex][3] = $blue;
					}
					if ($linesize > 5) {
						$grid[$startline+5][$startlinex][1] = $red;
						$grid[$startline+5][$startlinex][2] = $green;
						$grid[$startline+5][$startlinex][3] = $blue;
					}
				}
				else if ($num == 2) {
					$red = rand($r12, $r22);
					$green = rand($r32, $r42);
					$blue = rand($r52, $r62);
					$linesize = rand(3,6);
					$startline = rand(1,12);
					$startlinex = rand(1,16);
					$grid[$startline][$startlinex][1] = $red;
					$grid[$startline][$startlinex][2] = $green;
					$grid[$startline][$startlinex][3] = $blue;
					$grid[$startline+1][$startlinex][1] = $red;
					$grid[$startline+1][$startlinex][2] = $green;
					$grid[$startline+1][$startlinex][3] = $blue;
					$grid[$startline+2][$startlinex][1] = $red;
					$grid[$startline+2][$startlinex][2] = $green;
					$grid[$startline+2][$startlinex][3] = $blue;
					if ($linesize > 3) {
						$grid[$startline+3][$startlinex][1] = $red;
						$grid[$startline+3][$startlinex][2] = $green;
						$grid[$startline+3][$startlinex][3] = $blue;
					}
					if ($linesize > 4) {
						$grid[$startline+4][$startlinex][1] = $red;
						$grid[$startline+4][$startlinex][2] = $green;
						$grid[$startline+4][$startlinex][3] = $blue;
					}
					if ($linesize > 5) {
						$grid[$startline+5][$startlinex][1] = $red;
						$grid[$startline+5][$startlinex][2] = $green;
						$grid[$startline+5][$startlinex][3] = $blue;
					}
				}
				else if ($num == 3) {
					$red = rand($r13, $r23);
					$green = rand($r33, $r43);
					$blue = rand($r53, $r63);
					$linesize = rand(3,6);
					$startline = rand(1,12);
					$startlinex = rand(1,16);
					$grid[$startline][$startlinex][1] = $red;
					$grid[$startline][$startlinex][2] = $green;
					$grid[$startline][$startlinex][3] = $blue;
					$grid[$startline+1][$startlinex][1] = $red;
					$grid[$startline+1][$startlinex][2] = $green;
					$grid[$startline+1][$startlinex][3] = $blue;
					$grid[$startline+2][$startlinex][1] = $red;
					$grid[$startline+2][$startlinex][2] = $green;
					$grid[$startline+2][$startlinex][3] = $blue;
					if ($linesize > 3) {
						$grid[$startline+3][$startlinex][1] = $red;
						$grid[$startline+3][$startlinex][2] = $green;
						$grid[$startline+3][$startlinex][3] = $blue;
					}
					if ($linesize > 4) {
						$grid[$startline+4][$startlinex][1] = $red;
						$grid[$startline+4][$startlinex][2] = $green;
						$grid[$startline+4][$startlinex][3] = $blue;
					}
					if ($linesize > 5) {
						$grid[$startline+5][$startlinex][1] = $red;
						$grid[$startline+5][$startlinex][2] = $green;
						$grid[$startline+5][$startlinex][3] = $blue;
					}
				}
				else if ($num == 4) {
					$red = rand($r14, $r24);
					$green = rand($r34, $r44);
					$blue = rand($r54, $r64);
					$linesize = rand(3,6);
					$startline = rand(1,12);
					$startlinex = rand(1,16);
					$grid[$startline][$startlinex][1] = $red;
					$grid[$startline][$startlinex][2] = $green;
					$grid[$startline][$startlinex][3] = $blue;
					$grid[$startline+1][$startlinex][1] = $red;
					$grid[$startline+1][$startlinex][2] = $green;
					$grid[$startline+1][$startlinex][3] = $blue;
					$grid[$startline+2][$startlinex][1] = $red;
					$grid[$startline+2][$startlinex][2] = $green;
					$grid[$startline+2][$startlinex][3] = $blue;
					if ($linesize > 3) {
						$grid[$startline+3][$startlinex][1] = $red;
						$grid[$startline+3][$startlinex][2] = $green;
						$grid[$startline+3][$startlinex][3] = $blue;
					}
					if ($linesize > 4) {
						$grid[$startline+4][$startlinex][1] = $red;
						$grid[$startline+4][$startlinex][2] = $green;
						$grid[$startline+4][$startlinex][3] = $blue;
					}
					if ($linesize > 5) {
						$grid[$startline+5][$startlinex][1] = $red;
						$grid[$startline+5][$startlinex][2] = $green;
						$grid[$startline+5][$startlinex][3] = $blue;
					}
				}
				else if ($num == 5) {
					$red = rand($r15, $r25);
					$green = rand($r35, $r45);
					$blue = rand($r55, $r65);
					$linesize = rand(3,6);
					$startline = rand(1,12);
					$startlinex = rand(1,16);
					$grid[$startline][$startlinex][1] = $red;
					$grid[$startline][$startlinex][2] = $green;
					$grid[$startline][$startlinex][3] = $blue;
					$grid[$startline+1][$startlinex][1] = $red;
					$grid[$startline+1][$startlinex][2] = $green;
					$grid[$startline+1][$startlinex][3] = $blue;
					$grid[$startline+2][$startlinex][1] = $red;
					$grid[$startline+2][$startlinex][2] = $green;
					$grid[$startline+2][$startlinex][3] = $blue;
					if ($linesize > 3) {
						$grid[$startline+3][$startlinex][1] = $red;
						$grid[$startline+3][$startlinex][2] = $green;
						$grid[$startline+3][$startlinex][3] = $blue;
					}
					if ($linesize > 4) {
						$grid[$startline+4][$startlinex][1] = $red;
						$grid[$startline+4][$startlinex][2] = $green;
						$grid[$startline+4][$startlinex][3] = $blue;
					}
					if ($linesize > 5) {
						$grid[$startline+5][$startlinex][1] = $red;
						$grid[$startline+5][$startlinex][2] = $green;
						$grid[$startline+5][$startlinex][3] = $blue;
					}
		
				}
				else if ($num == 6) {
					$red = rand($r16, $r26);
					$green = rand($r36, $r46);
					$blue = rand($r56, $r66);
					$linesize = rand(3,6);
					$startline = rand(1,12);
					$startlinex = rand(1,16);
					$grid[$startline][$startlinex][1] = $red;
					$grid[$startline][$startlinex][2] = $green;
					$grid[$startline][$startlinex][3] = $blue;
					$grid[$startline+1][$startlinex][1] = $red;
					$grid[$startline+1][$startlinex][2] = $green;
					$grid[$startline+1][$startlinex][3] = $blue;
					$grid[$startline+2][$startlinex][1] = $red;
					$grid[$startline+2][$startlinex][2] = $green;
					$grid[$startline+2][$startlinex][3] = $blue;
					if ($linesize > 3) {
						$grid[$startline+3][$startlinex][1] = $red;
						$grid[$startline+3][$startlinex][2] = $green;
						$grid[$startline+3][$startlinex][3] = $blue;
					}
					if ($linesize > 4) {
						$grid[$startline+4][$startlinex][1] = $red;
						$grid[$startline+4][$startlinex][2] = $green;
						$grid[$startline+4][$startlinex][3] = $blue;
					}
					if ($linesize > 5) {
						$grid[$startline+5][$startlinex][1] = $red;
						$grid[$startline+5][$startlinex][2] = $green;
						$grid[$startline+5][$startlinex][3] = $blue;
					}
				}
				else if ($num == 7) {
					$red = rand($r17, $r27);
					$green = rand($r37, $r47);
					$blue = rand($r57, $r67);
					$linesize = rand(3,6);
					$startline = rand(1,12);
					$startlinex = rand(1,16);
					$grid[$startline][$startlinex][1] = $red;
					$grid[$startline][$startlinex][2] = $green;
					$grid[$startline][$startlinex][3] = $blue;
					$grid[$startline+1][$startlinex][1] = $red;
					$grid[$startline+1][$startlinex][2] = $green;
					$grid[$startline+1][$startlinex][3] = $blue;
					$grid[$startline+2][$startlinex][1] = $red;
					$grid[$startline+2][$startlinex][2] = $green;
					$grid[$startline+2][$startlinex][3] = $blue;
					if ($linesize > 3) {
						$grid[$startline+3][$startlinex][1] = $red;
						$grid[$startline+3][$startlinex][2] = $green;
						$grid[$startline+3][$startlinex][3] = $blue;
					}
					if ($linesize > 4) {
						$grid[$startline+4][$startlinex][1] = $red;
						$grid[$startline+4][$startlinex][2] = $green;
						$grid[$startline+4][$startlinex][3] = $blue;
					}
					if ($linesize > 5) {
						$grid[$startline+5][$startlinex][1] = $red;
						$grid[$startline+5][$startlinex][2] = $green;
						$grid[$startline+5][$startlinex][3] = $blue;
					}
				}
				else {
					$red = rand($r18, $r28);
					$green = rand($r38, $r48);
					$blue = rand($r58, $r68);
					$linesize = rand(3,6);
					$startline = rand(1,12);
					$startlinex = rand(1,16);
					$grid[$startline][$startlinex][1] = $red;
					$grid[$startline][$startlinex][2] = $green;
					$grid[$startline][$startlinex][3] = $blue;
					$grid[$startline+1][$startlinex][1] = $red;
					$grid[$startline+1][$startlinex][2] = $green;
					$grid[$startline+1][$startlinex][3] = $blue;
					$grid[$startline+2][$startlinex][1] = $red;
					$grid[$startline+2][$startlinex][2] = $green;
					$grid[$startline+2][$startlinex][3] = $blue;
					if ($linesize > 3) {
						$grid[$startline+3][$startlinex][1] = $red;
						$grid[$startline+3][$startlinex][2] = $green;
						$grid[$startline+3][$startlinex][3] = $blue;
					}
					if ($linesize > 4) {
						$grid[$startline+4][$startlinex][1] = $red;
						$grid[$startline+4][$startlinex][2] = $green;
						$grid[$startline+4][$startlinex][3] = $blue;
					}
					if ($linesize > 5) {
						$grid[$startline+5][$startlinex][1] = $red;
						$grid[$startline+5][$startlinex][2] = $green;
						$grid[$startline+5][$startlinex][3] = $blue;
					}
				}
				$linevar++;
			
			}
		
		}
		
		if ($_REQUEST['hlines'] == 'one') {


			// Line drawing one colour
			
			$linevar = 1;
			$nublines = rand(3,16);
			
			while ($linevar <= $nublines) {
				$red = rand($r11, $r21);
				$green = rand($r31, $r41);
				$blue = rand($r51, $r61);
				$linesize = rand(3,6);
				$startline = rand(1,16);
				$startlinex = rand(1,12);
				$grid[$startline][$startlinex][1] = $red;
				$grid[$startline][$startlinex][2] = $green;
				$grid[$startline][$startlinex][3] = $blue;
				$grid[$startline][$startlinex+1][1] = $red;
				$grid[$startline][$startlinex+1][2] = $green;
				$grid[$startline][$startlinex+1][3] = $blue;
				$grid[$startline][$startlinex+2][1] = $red;
				$grid[$startline][$startlinex+2][2] = $green;
				$grid[$startline][$startlinex+2][3] = $blue;
				if ($linesize > 3) {
					$grid[$startline][$startlinex+3][1] = $red;
					$grid[$startline][$startlinex+3][2] = $green;
					$grid[$startline][$startlinex+3][3] = $blue;
				}
				if ($linesize > 4) {
					$grid[$startline][$startlinex+4][1] = $red;
					$grid[$startline][$startlinex+4][2] = $green;
					$grid[$startline][$startlinex+4][3] = $blue;
				}
				if ($linesize > 5) {
					$grid[$startline][$startlinex+5][1] = $red;
					$grid[$startline][$startlinex+5][2] = $green;
					$grid[$startline][$startlinex+5][3] = $blue;
				}
				$linevar++;
			
			}
		
		} else if ($_REQUEST['hlines'] == 'random') {
		
		
			// Line drawing random colours
			
			$linevar = 1;
			$nublines = rand(3,16);
			
			while ($linevar <= $nublines) {
				$num = rand(1, 8);
				if ($num == 1) {
					$red = rand($r11, $r21);
					$green = rand($r31, $r41);
					$blue = rand($r51, $r61);
					$linesize = rand(3,6);
					$startline = rand(1,16);
					$startlinex = rand(1,12);
					$grid[$startline][$startlinex][1] = $red;
					$grid[$startline][$startlinex][2] = $green;
					$grid[$startline][$startlinex][3] = $blue;
					$grid[$startline][$startlinex+1][1] = $red;
					$grid[$startline][$startlinex+1][2] = $green;
					$grid[$startline][$startlinex+1][3] = $blue;
					$grid[$startline][$startlinex+2][1] = $red;
					$grid[$startline][$startlinex+2][2] = $green;
					$grid[$startline][$startlinex+2][3] = $blue;
					if ($linesize > 3) {
						$grid[$startline][$startlinex+3][1] = $red;
						$grid[$startline][$startlinex+3][2] = $green;
						$grid[$startline][$startlinex+3][3] = $blue;
					}
					if ($linesize > 4) {
						$grid[$startline][$startlinex+4][1] = $red;
						$grid[$startline][$startlinex+4][2] = $green;
						$grid[$startline][$startlinex+4][3] = $blue;
					}
					if ($linesize > 5) {
						$grid[$startline][$startlinex+5][1] = $red;
						$grid[$startline][$startlinex+5][2] = $green;
						$grid[$startline][$startlinex+5][3] = $blue;
					}
				}
				else if ($num == 2) {
					$red = rand($r12, $r22);
					$green = rand($r32, $r42);
					$blue = rand($r52, $r62);
					$linesize = rand(3,6);
					$startline = rand(1,16);
					$startlinex = rand(1,12);
					$grid[$startline][$startlinex][1] = $red;
					$grid[$startline][$startlinex][2] = $green;
					$grid[$startline][$startlinex][3] = $blue;
					$grid[$startline][$startlinex+1][1] = $red;
					$grid[$startline][$startlinex+1][2] = $green;
					$grid[$startline][$startlinex+1][3] = $blue;
					$grid[$startline][$startlinex+2][1] = $red;
					$grid[$startline][$startlinex+2][2] = $green;
					$grid[$startline][$startlinex+2][3] = $blue;
					if ($linesize > 3) {
						$grid[$startline][$startlinex+3][1] = $red;
						$grid[$startline][$startlinex+3][2] = $green;
						$grid[$startline][$startlinex+3][3] = $blue;
					}
					if ($linesize > 4) {
						$grid[$startline][$startlinex+4][1] = $red;
						$grid[$startline][$startlinex+4][2] = $green;
						$grid[$startline][$startlinex+4][3] = $blue;
					}
					if ($linesize > 5) {
						$grid[$startline][$startlinex+5][1] = $red;
						$grid[$startline][$startlinex+5][2] = $green;
						$grid[$startline][$startlinex+5][3] = $blue;
					}
				}
				else if ($num == 3) {
					$red = rand($r13, $r23);
					$green = rand($r33, $r43);
					$blue = rand($r53, $r63);
					$linesize = rand(3,6);
					$startline = rand(1,16);
					$startlinex = rand(1,12);
					$grid[$startline][$startlinex][1] = $red;
					$grid[$startline][$startlinex][2] = $green;
					$grid[$startline][$startlinex][3] = $blue;
					$grid[$startline][$startlinex+1][1] = $red;
					$grid[$startline][$startlinex+1][2] = $green;
					$grid[$startline][$startlinex+1][3] = $blue;
					$grid[$startline][$startlinex+2][1] = $red;
					$grid[$startline][$startlinex+2][2] = $green;
					$grid[$startline][$startlinex+2][3] = $blue;
					if ($linesize > 3) {
						$grid[$startline][$startlinex+3][1] = $red;
						$grid[$startline][$startlinex+3][2] = $green;
						$grid[$startline][$startlinex+3][3] = $blue;
					}
					if ($linesize > 4) {
						$grid[$startline][$startlinex+4][1] = $red;
						$grid[$startline][$startlinex+4][2] = $green;
						$grid[$startline][$startlinex+4][3] = $blue;
					}
					if ($linesize > 5) {
						$grid[$startline][$startlinex+5][1] = $red;
						$grid[$startline][$startlinex+5][2] = $green;
						$grid[$startline][$startlinex+5][3] = $blue;
					}
				}
				else if ($num == 4) {
					$red = rand($r14, $r24);
					$green = rand($r34, $r44);
					$blue = rand($r54, $r64);
					$linesize = rand(3,6);
					$startline = rand(1,16);
					$startlinex = rand(1,12);
					$grid[$startline][$startlinex][1] = $red;
					$grid[$startline][$startlinex][2] = $green;
					$grid[$startline][$startlinex][3] = $blue;
					$grid[$startline][$startlinex+1][1] = $red;
					$grid[$startline][$startlinex+1][2] = $green;
					$grid[$startline][$startlinex+1][3] = $blue;
					$grid[$startline][$startlinex+2][1] = $red;
					$grid[$startline][$startlinex+2][2] = $green;
					$grid[$startline][$startlinex+2][3] = $blue;
					if ($linesize > 3) {
						$grid[$startline][$startlinex+3][1] = $red;
						$grid[$startline][$startlinex+3][2] = $green;
						$grid[$startline][$startlinex+3][3] = $blue;
					}
					if ($linesize > 4) {
						$grid[$startline][$startlinex+4][1] = $red;
						$grid[$startline][$startlinex+4][2] = $green;
						$grid[$startline][$startlinex+4][3] = $blue;
					}
					if ($linesize > 5) {
						$grid[$startline][$startlinex+5][1] = $red;
						$grid[$startline][$startlinex+5][2] = $green;
						$grid[$startline][$startlinex+5][3] = $blue;
					}
				}
				else if ($num == 5) {
					$red = rand($r15, $r25);
					$green = rand($r35, $r45);
					$blue = rand($r55, $r65);
					$linesize = rand(3,6);
					$startline = rand(1,16);
					$startlinex = rand(1,12);
					$grid[$startline][$startlinex][1] = $red;
					$grid[$startline][$startlinex][2] = $green;
					$grid[$startline][$startlinex][3] = $blue;
					$grid[$startline][$startlinex+1][1] = $red;
					$grid[$startline][$startlinex+1][2] = $green;
					$grid[$startline][$startlinex+1][3] = $blue;
					$grid[$startline][$startlinex+2][1] = $red;
					$grid[$startline][$startlinex+2][2] = $green;
					$grid[$startline][$startlinex+2][3] = $blue;
					if ($linesize > 3) {
						$grid[$startline][$startlinex+3][1] = $red;
						$grid[$startline][$startlinex+3][2] = $green;
						$grid[$startline][$startlinex+3][3] = $blue;
					}
					if ($linesize > 4) {
						$grid[$startline][$startlinex+4][1] = $red;
						$grid[$startline][$startlinex+4][2] = $green;
						$grid[$startline][$startlinex+4][3] = $blue;
					}
					if ($linesize > 5) {
						$grid[$startline][$startlinex+5][1] = $red;
						$grid[$startline][$startlinex+5][2] = $green;
						$grid[$startline][$startlinex+5][3] = $blue;
					}
		
				}
				else if ($num == 6) {
					$red = rand($r16, $r26);
					$green = rand($r36, $r46);
					$blue = rand($r56, $r66);
					$linesize = rand(3,6);
					$startline = rand(1,16);
					$startlinex = rand(1,12);
					$grid[$startline][$startlinex][1] = $red;
					$grid[$startline][$startlinex][2] = $green;
					$grid[$startline][$startlinex][3] = $blue;
					$grid[$startline][$startlinex+1][1] = $red;
					$grid[$startline][$startlinex+1][2] = $green;
					$grid[$startline][$startlinex+1][3] = $blue;
					$grid[$startline][$startlinex+2][1] = $red;
					$grid[$startline][$startlinex+2][2] = $green;
					$grid[$startline][$startlinex+2][3] = $blue;
					if ($linesize > 3) {
						$grid[$startline][$startlinex+3][1] = $red;
						$grid[$startline][$startlinex+3][2] = $green;
						$grid[$startline][$startlinex+3][3] = $blue;
					}
					if ($linesize > 4) {
						$grid[$startline][$startlinex+4][1] = $red;
						$grid[$startline][$startlinex+4][2] = $green;
						$grid[$startline][$startlinex+4][3] = $blue;
					}
					if ($linesize > 5) {
						$grid[$startline][$startlinex+5][1] = $red;
						$grid[$startline][$startlinex+5][2] = $green;
						$grid[$startline][$startlinex+5][3] = $blue;
					}
				}
				else if ($num == 7) {
					$red = rand($r17, $r27);
					$green = rand($r37, $r47);
					$blue = rand($r57, $r67);
					$linesize = rand(3,6);
					$startline = rand(1,16);
					$startlinex = rand(1,12);
					$grid[$startline][$startlinex][1] = $red;
					$grid[$startline][$startlinex][2] = $green;
					$grid[$startline][$startlinex][3] = $blue;
					$grid[$startline][$startlinex+1][1] = $red;
					$grid[$startline][$startlinex+1][2] = $green;
					$grid[$startline][$startlinex+1][3] = $blue;
					$grid[$startline][$startlinex+2][1] = $red;
					$grid[$startline][$startlinex+2][2] = $green;
					$grid[$startline][$startlinex+2][3] = $blue;
					if ($linesize > 3) {
						$grid[$startline][$startlinex+3][1] = $red;
						$grid[$startline][$startlinex+3][2] = $green;
						$grid[$startline][$startlinex+3][3] = $blue;
					}
					if ($linesize > 4) {
						$grid[$startline][$startlinex+4][1] = $red;
						$grid[$startline][$startlinex+4][2] = $green;
						$grid[$startline][$startlinex+4][3] = $blue;
					}
					if ($linesize > 5) {
						$grid[$startline][$startlinex+5][1] = $red;
						$grid[$startline][$startlinex+5][2] = $green;
						$grid[$startline][$startlinex+5][3] = $blue;
					}
				}
				else {
					$red = rand($r18, $r28);
					$green = rand($r38, $r48);
					$blue = rand($r58, $r68);
					$linesize = rand(3,6);
					$startline = rand(1,16);
					$startlinex = rand(1,12);
					$grid[$startline][$startlinex][1] = $red;
					$grid[$startline][$startlinex][2] = $green;
					$grid[$startline][$startlinex][3] = $blue;
					$grid[$startline][$startlinex+1][1] = $red;
					$grid[$startline][$startlinex+1][2] = $green;
					$grid[$startline][$startlinex+1][3] = $blue;
					$grid[$startline][$startlinex+2][1] = $red;
					$grid[$startline][$startlinex+2][2] = $green;
					$grid[$startline][$startlinex+2][3] = $blue;
					if ($linesize > 3) {
						$grid[$startline][$startlinex+3][1] = $red;
						$grid[$startline][$startlinex+3][2] = $green;
						$grid[$startline][$startlinex+3][3] = $blue;
					}
					if ($linesize > 4) {
						$grid[$startline][$startlinex+4][1] = $red;
						$grid[$startline][$startlinex+4][2] = $green;
						$grid[$startline][$startlinex+4][3] = $blue;
					}
					if ($linesize > 5) {
						$grid[$startline][$startlinex+5][1] = $red;
						$grid[$startline][$startlinex+5][2] = $green;
						$grid[$startline][$startlinex+5][3] = $blue;
					}
				}
				$linevar++;
			
			}
		
		}
		
		if ($_REQUEST['crosses'] == 'one') {


			// Cross drawing one colour
			
			$linevar = 1;
			$nublines = rand(3,16);
			
			while ($linevar <= $nublines) {
				$red = rand($r11, $r21);
				$green = rand($r31, $r41);
				$blue = rand($r51, $r61);
				$linesize = rand(3,6);
				$startline = rand(1,12);
				$startlinex = rand(1,16);
				$grid[$startline][$startlinex][1] = $red;
				$grid[$startline][$startlinex][2] = $green;
				$grid[$startline][$startlinex][3] = $blue;
				$grid[$startline+1][$startlinex][1] = $red;
				$grid[$startline+1][$startlinex][2] = $green;
				$grid[$startline+1][$startlinex][3] = $blue;
				$grid[$startline-1][$startlinex][1] = $red;
				$grid[$startline-1][$startlinex][2] = $green;
				$grid[$startline-1][$startlinex][3] = $blue;
				if ($linesize > 3) {
					$grid[$startline+2][$startlinex][1] = $red;
					$grid[$startline+2][$startlinex][2] = $green;
					$grid[$startline+2][$startlinex][3] = $blue;
					$grid[$startline-2][$startlinex][1] = $red;
					$grid[$startline-2][$startlinex][2] = $green;
					$grid[$startline-2][$startlinex][3] = $blue;
				}
				if ($linesize > 4) {
					$grid[$startline+3][$startlinex][1] = $red;
					$grid[$startline+3][$startlinex][2] = $green;
					$grid[$startline+3][$startlinex][3] = $blue;
					$grid[$startline-3][$startlinex][1] = $red;
					$grid[$startline-3][$startlinex][2] = $green;
					$grid[$startline-3][$startlinex][3] = $blue;
				}
				if ($linesize > 5) {
					$grid[$startline+4][$startlinex][1] = $red;
					$grid[$startline+4][$startlinex][2] = $green;
					$grid[$startline+4][$startlinex][3] = $blue;
					$grid[$startline-4][$startlinex][1] = $red;
					$grid[$startline-4][$startlinex][2] = $green;
					$grid[$startline-4][$startlinex][3] = $blue;
				}
				$grid[$startline][$startlinex+1][1] = $red;
				$grid[$startline][$startlinex+1][2] = $green;
				$grid[$startline][$startlinex+1][3] = $blue;
				$grid[$startline][$startlinex-1][1] = $red;
				$grid[$startline][$startlinex-1][2] = $green;
				$grid[$startline][$startlinex-1][3] = $blue;
				if ($linesize > 3) {
					$grid[$startline][$startlinex+2][1] = $red;
					$grid[$startline][$startlinex+2][2] = $green;
					$grid[$startline][$startlinex+2][3] = $blue;
					$grid[$startline][$startlinex-2][1] = $red;
					$grid[$startline][$startlinex-2][2] = $green;
					$grid[$startline][$startlinex-2][3] = $blue;
				}
				if ($linesize > 4) {
					$grid[$startline][$startlinex+3][1] = $red;
					$grid[$startline][$startlinex+3][2] = $green;
					$grid[$startline][$startlinex+3][3] = $blue;
					$grid[$startline][$startlinex-3][1] = $red;
					$grid[$startline][$startlinex-3][2] = $green;
					$grid[$startline][$startlinex-3][3] = $blue;
				}
				if ($linesize > 5) {
					$grid[$startline][$startlinex+4][1] = $red;
					$grid[$startline][$startlinex+4][2] = $green;
					$grid[$startline][$startlinex+4][3] = $blue;
					$grid[$startline][$startlinex-4][1] = $red;
					$grid[$startline][$startlinex-4][2] = $green;
					$grid[$startline][$startlinex-4][3] = $blue;
				}
				$linevar++;
			
			}
			
		} else if ($_REQUEST['crosses'] == 'random') {
		
		
			// Cross drawing random colours
			
			$linevar = 1;
			$nublines = rand(3,16);
			
			while ($linevar <= $nublines) {
				$num = rand(1, 8);
				if ($num == 1) {
					$red = rand($r11, $r21);
					$green = rand($r31, $r41);
					$blue = rand($r51, $r61);
					$linesize = rand(3,6);
					$startline = rand(1,12);
					$startlinex = rand(1,16);
					$grid[$startline][$startlinex][1] = $red;
					$grid[$startline][$startlinex][2] = $green;
					$grid[$startline][$startlinex][3] = $blue;
					$grid[$startline+1][$startlinex][1] = $red;
					$grid[$startline+1][$startlinex][2] = $green;
					$grid[$startline+1][$startlinex][3] = $blue;
					$grid[$startline-1][$startlinex][1] = $red;
					$grid[$startline-1][$startlinex][2] = $green;
					$grid[$startline-1][$startlinex][3] = $blue;
					if ($linesize > 3) {
						$grid[$startline+2][$startlinex][1] = $red;
						$grid[$startline+2][$startlinex][2] = $green;
						$grid[$startline+2][$startlinex][3] = $blue;
						$grid[$startline-2][$startlinex][1] = $red;
						$grid[$startline-2][$startlinex][2] = $green;
						$grid[$startline-2][$startlinex][3] = $blue;
					}
					if ($linesize > 4) {
						$grid[$startline+3][$startlinex][1] = $red;
						$grid[$startline+3][$startlinex][2] = $green;
						$grid[$startline+3][$startlinex][3] = $blue;
						$grid[$startline-3][$startlinex][1] = $red;
						$grid[$startline-3][$startlinex][2] = $green;
						$grid[$startline-3][$startlinex][3] = $blue;
					}
					if ($linesize > 5) {
						$grid[$startline+4][$startlinex][1] = $red;
						$grid[$startline+4][$startlinex][2] = $green;
						$grid[$startline+4][$startlinex][3] = $blue;
						$grid[$startline-4][$startlinex][1] = $red;
						$grid[$startline-4][$startlinex][2] = $green;
						$grid[$startline-4][$startlinex][3] = $blue;
					}
					$grid[$startline][$startlinex+1][1] = $red;
					$grid[$startline][$startlinex+1][2] = $green;
					$grid[$startline][$startlinex+1][3] = $blue;
					$grid[$startline][$startlinex-1][1] = $red;
					$grid[$startline][$startlinex-1][2] = $green;
					$grid[$startline][$startlinex-1][3] = $blue;
					if ($linesize > 3) {
						$grid[$startline][$startlinex+2][1] = $red;
						$grid[$startline][$startlinex+2][2] = $green;
						$grid[$startline][$startlinex+2][3] = $blue;
						$grid[$startline][$startlinex-2][1] = $red;
						$grid[$startline][$startlinex-2][2] = $green;
						$grid[$startline][$startlinex-2][3] = $blue;
					}
					if ($linesize > 4) {
						$grid[$startline][$startlinex+3][1] = $red;
						$grid[$startline][$startlinex+3][2] = $green;
						$grid[$startline][$startlinex+3][3] = $blue;
						$grid[$startline][$startlinex-3][1] = $red;
						$grid[$startline][$startlinex-3][2] = $green;
						$grid[$startline][$startlinex-3][3] = $blue;
					}
					if ($linesize > 5) {
						$grid[$startline][$startlinex+4][1] = $red;
						$grid[$startline][$startlinex+4][2] = $green;
						$grid[$startline][$startlinex+4][3] = $blue;
						$grid[$startline][$startlinex-4][1] = $red;
						$grid[$startline][$startlinex-4][2] = $green;
						$grid[$startline][$startlinex-4][3] = $blue;
					}
				}
				else if ($num == 2) {
					$red = rand($r12, $r22);
					$green = rand($r32, $r42);
					$blue = rand($r52, $r62);
					$linesize = rand(3,6);
					$startline = rand(1,12);
					$startlinex = rand(1,16);
					$grid[$startline][$startlinex][1] = $red;
					$grid[$startline][$startlinex][2] = $green;
					$grid[$startline][$startlinex][3] = $blue;
					$grid[$startline+1][$startlinex][1] = $red;
					$grid[$startline+1][$startlinex][2] = $green;
					$grid[$startline+1][$startlinex][3] = $blue;
					$grid[$startline-1][$startlinex][1] = $red;
					$grid[$startline-1][$startlinex][2] = $green;
					$grid[$startline-1][$startlinex][3] = $blue;
					if ($linesize > 3) {
						$grid[$startline+2][$startlinex][1] = $red;
						$grid[$startline+2][$startlinex][2] = $green;
						$grid[$startline+2][$startlinex][3] = $blue;
						$grid[$startline-2][$startlinex][1] = $red;
						$grid[$startline-2][$startlinex][2] = $green;
						$grid[$startline-2][$startlinex][3] = $blue;
					}
					if ($linesize > 4) {
						$grid[$startline+3][$startlinex][1] = $red;
						$grid[$startline+3][$startlinex][2] = $green;
						$grid[$startline+3][$startlinex][3] = $blue;
						$grid[$startline-3][$startlinex][1] = $red;
						$grid[$startline-3][$startlinex][2] = $green;
						$grid[$startline-3][$startlinex][3] = $blue;
					}
					if ($linesize > 5) {
						$grid[$startline+4][$startlinex][1] = $red;
						$grid[$startline+4][$startlinex][2] = $green;
						$grid[$startline+4][$startlinex][3] = $blue;
						$grid[$startline-4][$startlinex][1] = $red;
						$grid[$startline-4][$startlinex][2] = $green;
						$grid[$startline-4][$startlinex][3] = $blue;
					}
					$grid[$startline][$startlinex+1][1] = $red;
					$grid[$startline][$startlinex+1][2] = $green;
					$grid[$startline][$startlinex+1][3] = $blue;
					$grid[$startline][$startlinex-1][1] = $red;
					$grid[$startline][$startlinex-1][2] = $green;
					$grid[$startline][$startlinex-1][3] = $blue;
					if ($linesize > 3) {
						$grid[$startline][$startlinex+2][1] = $red;
						$grid[$startline][$startlinex+2][2] = $green;
						$grid[$startline][$startlinex+2][3] = $blue;
						$grid[$startline][$startlinex-2][1] = $red;
						$grid[$startline][$startlinex-2][2] = $green;
						$grid[$startline][$startlinex-2][3] = $blue;
					}
					if ($linesize > 4) {
						$grid[$startline][$startlinex+3][1] = $red;
						$grid[$startline][$startlinex+3][2] = $green;
						$grid[$startline][$startlinex+3][3] = $blue;
						$grid[$startline][$startlinex-3][1] = $red;
						$grid[$startline][$startlinex-3][2] = $green;
						$grid[$startline][$startlinex-3][3] = $blue;
					}
					if ($linesize > 5) {
						$grid[$startline][$startlinex+4][1] = $red;
						$grid[$startline][$startlinex+4][2] = $green;
						$grid[$startline][$startlinex+4][3] = $blue;
						$grid[$startline][$startlinex-4][1] = $red;
						$grid[$startline][$startlinex-4][2] = $green;
						$grid[$startline][$startlinex-4][3] = $blue;
					}

				}
				else if ($num == 3) {
					$red = rand($r13, $r23);
					$green = rand($r33, $r43);
					$blue = rand($r53, $r63);
					$linesize = rand(3,6);
					$startline = rand(1,12);
					$startlinex = rand(1,16);
					$grid[$startline][$startlinex][1] = $red;
					$grid[$startline][$startlinex][2] = $green;
					$grid[$startline][$startlinex][3] = $blue;
					$grid[$startline+1][$startlinex][1] = $red;
					$grid[$startline+1][$startlinex][2] = $green;
					$grid[$startline+1][$startlinex][3] = $blue;
					$grid[$startline-1][$startlinex][1] = $red;
					$grid[$startline-1][$startlinex][2] = $green;
					$grid[$startline-1][$startlinex][3] = $blue;
					if ($linesize > 3) {
						$grid[$startline+2][$startlinex][1] = $red;
						$grid[$startline+2][$startlinex][2] = $green;
						$grid[$startline+2][$startlinex][3] = $blue;
						$grid[$startline-2][$startlinex][1] = $red;
						$grid[$startline-2][$startlinex][2] = $green;
						$grid[$startline-2][$startlinex][3] = $blue;
					}
					if ($linesize > 4) {
						$grid[$startline+3][$startlinex][1] = $red;
						$grid[$startline+3][$startlinex][2] = $green;
						$grid[$startline+3][$startlinex][3] = $blue;
						$grid[$startline-3][$startlinex][1] = $red;
						$grid[$startline-3][$startlinex][2] = $green;
						$grid[$startline-3][$startlinex][3] = $blue;
					}
					if ($linesize > 5) {
						$grid[$startline+4][$startlinex][1] = $red;
						$grid[$startline+4][$startlinex][2] = $green;
						$grid[$startline+4][$startlinex][3] = $blue;
						$grid[$startline-4][$startlinex][1] = $red;
						$grid[$startline-4][$startlinex][2] = $green;
						$grid[$startline-4][$startlinex][3] = $blue;
					}
					$grid[$startline][$startlinex+1][1] = $red;
					$grid[$startline][$startlinex+1][2] = $green;
					$grid[$startline][$startlinex+1][3] = $blue;
					$grid[$startline][$startlinex-1][1] = $red;
					$grid[$startline][$startlinex-1][2] = $green;
					$grid[$startline][$startlinex-1][3] = $blue;
					if ($linesize > 3) {
						$grid[$startline][$startlinex+2][1] = $red;
						$grid[$startline][$startlinex+2][2] = $green;
						$grid[$startline][$startlinex+2][3] = $blue;
						$grid[$startline][$startlinex-2][1] = $red;
						$grid[$startline][$startlinex-2][2] = $green;
						$grid[$startline][$startlinex-2][3] = $blue;
					}
					if ($linesize > 4) {
						$grid[$startline][$startlinex+3][1] = $red;
						$grid[$startline][$startlinex+3][2] = $green;
						$grid[$startline][$startlinex+3][3] = $blue;
						$grid[$startline][$startlinex-3][1] = $red;
						$grid[$startline][$startlinex-3][2] = $green;
						$grid[$startline][$startlinex-3][3] = $blue;
					}
					if ($linesize > 5) {
						$grid[$startline][$startlinex+4][1] = $red;
						$grid[$startline][$startlinex+4][2] = $green;
						$grid[$startline][$startlinex+4][3] = $blue;
						$grid[$startline][$startlinex-4][1] = $red;
						$grid[$startline][$startlinex-4][2] = $green;
						$grid[$startline][$startlinex-4][3] = $blue;
					}

				}
				else if ($num == 4) {
					$red = rand($r14, $r24);
					$green = rand($r34, $r44);
					$blue = rand($r54, $r64);
					$linesize = rand(3,6);
					$startline = rand(1,12);
					$startlinex = rand(1,16);
					$grid[$startline][$startlinex][1] = $red;
					$grid[$startline][$startlinex][2] = $green;
					$grid[$startline][$startlinex][3] = $blue;
					$grid[$startline+1][$startlinex][1] = $red;
					$grid[$startline+1][$startlinex][2] = $green;
					$grid[$startline+1][$startlinex][3] = $blue;
					$grid[$startline-1][$startlinex][1] = $red;
					$grid[$startline-1][$startlinex][2] = $green;
					$grid[$startline-1][$startlinex][3] = $blue;
					if ($linesize > 3) {
						$grid[$startline+2][$startlinex][1] = $red;
						$grid[$startline+2][$startlinex][2] = $green;
						$grid[$startline+2][$startlinex][3] = $blue;
						$grid[$startline-2][$startlinex][1] = $red;
						$grid[$startline-2][$startlinex][2] = $green;
						$grid[$startline-2][$startlinex][3] = $blue;
					}
					if ($linesize > 4) {
						$grid[$startline+3][$startlinex][1] = $red;
						$grid[$startline+3][$startlinex][2] = $green;
						$grid[$startline+3][$startlinex][3] = $blue;
						$grid[$startline-3][$startlinex][1] = $red;
						$grid[$startline-3][$startlinex][2] = $green;
						$grid[$startline-3][$startlinex][3] = $blue;
					}
					if ($linesize > 5) {
						$grid[$startline+4][$startlinex][1] = $red;
						$grid[$startline+4][$startlinex][2] = $green;
						$grid[$startline+4][$startlinex][3] = $blue;
						$grid[$startline-4][$startlinex][1] = $red;
						$grid[$startline-4][$startlinex][2] = $green;
						$grid[$startline-4][$startlinex][3] = $blue;
					}
					$grid[$startline][$startlinex+1][1] = $red;
					$grid[$startline][$startlinex+1][2] = $green;
					$grid[$startline][$startlinex+1][3] = $blue;
					$grid[$startline][$startlinex-1][1] = $red;
					$grid[$startline][$startlinex-1][2] = $green;
					$grid[$startline][$startlinex-1][3] = $blue;
					if ($linesize > 3) {
						$grid[$startline][$startlinex+2][1] = $red;
						$grid[$startline][$startlinex+2][2] = $green;
						$grid[$startline][$startlinex+2][3] = $blue;
						$grid[$startline][$startlinex-2][1] = $red;
						$grid[$startline][$startlinex-2][2] = $green;
						$grid[$startline][$startlinex-2][3] = $blue;
					}
					if ($linesize > 4) {
						$grid[$startline][$startlinex+3][1] = $red;
						$grid[$startline][$startlinex+3][2] = $green;
						$grid[$startline][$startlinex+3][3] = $blue;
						$grid[$startline][$startlinex-3][1] = $red;
						$grid[$startline][$startlinex-3][2] = $green;
						$grid[$startline][$startlinex-3][3] = $blue;
					}
					if ($linesize > 5) {
						$grid[$startline][$startlinex+4][1] = $red;
						$grid[$startline][$startlinex+4][2] = $green;
						$grid[$startline][$startlinex+4][3] = $blue;
						$grid[$startline][$startlinex-4][1] = $red;
						$grid[$startline][$startlinex-4][2] = $green;
						$grid[$startline][$startlinex-4][3] = $blue;
					}

				}
				else if ($num == 5) {
					$red = rand($r15, $r25);
					$green = rand($r35, $r45);
					$blue = rand($r55, $r65);
					$linesize = rand(3,6);
					$startline = rand(1,12);
					$startlinex = rand(1,16);
					$grid[$startline][$startlinex][1] = $red;
					$grid[$startline][$startlinex][2] = $green;
					$grid[$startline][$startlinex][3] = $blue;
					$grid[$startline+1][$startlinex][1] = $red;
					$grid[$startline+1][$startlinex][2] = $green;
					$grid[$startline+1][$startlinex][3] = $blue;
					$grid[$startline-1][$startlinex][1] = $red;
					$grid[$startline-1][$startlinex][2] = $green;
					$grid[$startline-1][$startlinex][3] = $blue;
					if ($linesize > 3) {
						$grid[$startline+2][$startlinex][1] = $red;
						$grid[$startline+2][$startlinex][2] = $green;
						$grid[$startline+2][$startlinex][3] = $blue;
						$grid[$startline-2][$startlinex][1] = $red;
						$grid[$startline-2][$startlinex][2] = $green;
						$grid[$startline-2][$startlinex][3] = $blue;
					}
					if ($linesize > 4) {
						$grid[$startline+3][$startlinex][1] = $red;
						$grid[$startline+3][$startlinex][2] = $green;
						$grid[$startline+3][$startlinex][3] = $blue;
						$grid[$startline-3][$startlinex][1] = $red;
						$grid[$startline-3][$startlinex][2] = $green;
						$grid[$startline-3][$startlinex][3] = $blue;
					}
					if ($linesize > 5) {
						$grid[$startline+4][$startlinex][1] = $red;
						$grid[$startline+4][$startlinex][2] = $green;
						$grid[$startline+4][$startlinex][3] = $blue;
						$grid[$startline-4][$startlinex][1] = $red;
						$grid[$startline-4][$startlinex][2] = $green;
						$grid[$startline-4][$startlinex][3] = $blue;
					}
					$grid[$startline][$startlinex+1][1] = $red;
					$grid[$startline][$startlinex+1][2] = $green;
					$grid[$startline][$startlinex+1][3] = $blue;
					$grid[$startline][$startlinex-1][1] = $red;
					$grid[$startline][$startlinex-1][2] = $green;
					$grid[$startline][$startlinex-1][3] = $blue;
					if ($linesize > 3) {
						$grid[$startline][$startlinex+2][1] = $red;
						$grid[$startline][$startlinex+2][2] = $green;
						$grid[$startline][$startlinex+2][3] = $blue;
						$grid[$startline][$startlinex-2][1] = $red;
						$grid[$startline][$startlinex-2][2] = $green;
						$grid[$startline][$startlinex-2][3] = $blue;
					}
					if ($linesize > 4) {
						$grid[$startline][$startlinex+3][1] = $red;
						$grid[$startline][$startlinex+3][2] = $green;
						$grid[$startline][$startlinex+3][3] = $blue;
						$grid[$startline][$startlinex-3][1] = $red;
						$grid[$startline][$startlinex-3][2] = $green;
						$grid[$startline][$startlinex-3][3] = $blue;
					}
					if ($linesize > 5) {
						$grid[$startline][$startlinex+4][1] = $red;
						$grid[$startline][$startlinex+4][2] = $green;
						$grid[$startline][$startlinex+4][3] = $blue;
						$grid[$startline][$startlinex-4][1] = $red;
						$grid[$startline][$startlinex-4][2] = $green;
						$grid[$startline][$startlinex-4][3] = $blue;
					}

				}
				else if ($num == 6) {
					$red = rand($r16, $r26);
					$green = rand($r36, $r46);
					$blue = rand($r56, $r66);
					$linesize = rand(3,6);
					$startline = rand(1,12);
					$startlinex = rand(1,16);
					$grid[$startline][$startlinex][1] = $red;
					$grid[$startline][$startlinex][2] = $green;
					$grid[$startline][$startlinex][3] = $blue;
					$grid[$startline+1][$startlinex][1] = $red;
					$grid[$startline+1][$startlinex][2] = $green;
					$grid[$startline+1][$startlinex][3] = $blue;
					$grid[$startline-1][$startlinex][1] = $red;
					$grid[$startline-1][$startlinex][2] = $green;
					$grid[$startline-1][$startlinex][3] = $blue;
					if ($linesize > 3) {
						$grid[$startline+2][$startlinex][1] = $red;
						$grid[$startline+2][$startlinex][2] = $green;
						$grid[$startline+2][$startlinex][3] = $blue;
						$grid[$startline-2][$startlinex][1] = $red;
						$grid[$startline-2][$startlinex][2] = $green;
						$grid[$startline-2][$startlinex][3] = $blue;
					}
					if ($linesize > 4) {
						$grid[$startline+3][$startlinex][1] = $red;
						$grid[$startline+3][$startlinex][2] = $green;
						$grid[$startline+3][$startlinex][3] = $blue;
						$grid[$startline-3][$startlinex][1] = $red;
						$grid[$startline-3][$startlinex][2] = $green;
						$grid[$startline-3][$startlinex][3] = $blue;
					}
					if ($linesize > 5) {
						$grid[$startline+4][$startlinex][1] = $red;
						$grid[$startline+4][$startlinex][2] = $green;
						$grid[$startline+4][$startlinex][3] = $blue;
						$grid[$startline-4][$startlinex][1] = $red;
						$grid[$startline-4][$startlinex][2] = $green;
						$grid[$startline-4][$startlinex][3] = $blue;
					}
					$grid[$startline][$startlinex+1][1] = $red;
					$grid[$startline][$startlinex+1][2] = $green;
					$grid[$startline][$startlinex+1][3] = $blue;
					$grid[$startline][$startlinex-1][1] = $red;
					$grid[$startline][$startlinex-1][2] = $green;
					$grid[$startline][$startlinex-1][3] = $blue;
					if ($linesize > 3) {
						$grid[$startline][$startlinex+2][1] = $red;
						$grid[$startline][$startlinex+2][2] = $green;
						$grid[$startline][$startlinex+2][3] = $blue;
						$grid[$startline][$startlinex-2][1] = $red;
						$grid[$startline][$startlinex-2][2] = $green;
						$grid[$startline][$startlinex-2][3] = $blue;
					}
					if ($linesize > 4) {
						$grid[$startline][$startlinex+3][1] = $red;
						$grid[$startline][$startlinex+3][2] = $green;
						$grid[$startline][$startlinex+3][3] = $blue;
						$grid[$startline][$startlinex-3][1] = $red;
						$grid[$startline][$startlinex-3][2] = $green;
						$grid[$startline][$startlinex-3][3] = $blue;
					}
					if ($linesize > 5) {
						$grid[$startline][$startlinex+4][1] = $red;
						$grid[$startline][$startlinex+4][2] = $green;
						$grid[$startline][$startlinex+4][3] = $blue;
						$grid[$startline][$startlinex-4][1] = $red;
						$grid[$startline][$startlinex-4][2] = $green;
						$grid[$startline][$startlinex-4][3] = $blue;
					}

				}
				else if ($num == 7) {
					$red = rand($r17, $r27);
					$green = rand($r37, $r47);
					$blue = rand($r57, $r67);
					$linesize = rand(3,6);
					$startline = rand(1,12);
					$startlinex = rand(1,16);
					$grid[$startline][$startlinex][1] = $red;
					$grid[$startline][$startlinex][2] = $green;
					$grid[$startline][$startlinex][3] = $blue;
					$grid[$startline+1][$startlinex][1] = $red;
					$grid[$startline+1][$startlinex][2] = $green;
					$grid[$startline+1][$startlinex][3] = $blue;
					$grid[$startline-1][$startlinex][1] = $red;
					$grid[$startline-1][$startlinex][2] = $green;
					$grid[$startline-1][$startlinex][3] = $blue;
					if ($linesize > 3) {
						$grid[$startline+2][$startlinex][1] = $red;
						$grid[$startline+2][$startlinex][2] = $green;
						$grid[$startline+2][$startlinex][3] = $blue;
						$grid[$startline-2][$startlinex][1] = $red;
						$grid[$startline-2][$startlinex][2] = $green;
						$grid[$startline-2][$startlinex][3] = $blue;
					}
					if ($linesize > 4) {
						$grid[$startline+3][$startlinex][1] = $red;
						$grid[$startline+3][$startlinex][2] = $green;
						$grid[$startline+3][$startlinex][3] = $blue;
						$grid[$startline-3][$startlinex][1] = $red;
						$grid[$startline-3][$startlinex][2] = $green;
						$grid[$startline-3][$startlinex][3] = $blue;
					}
					if ($linesize > 5) {
						$grid[$startline+4][$startlinex][1] = $red;
						$grid[$startline+4][$startlinex][2] = $green;
						$grid[$startline+4][$startlinex][3] = $blue;
						$grid[$startline-4][$startlinex][1] = $red;
						$grid[$startline-4][$startlinex][2] = $green;
						$grid[$startline-4][$startlinex][3] = $blue;
					}
					$grid[$startline][$startlinex+1][1] = $red;
					$grid[$startline][$startlinex+1][2] = $green;
					$grid[$startline][$startlinex+1][3] = $blue;
					$grid[$startline][$startlinex-1][1] = $red;
					$grid[$startline][$startlinex-1][2] = $green;
					$grid[$startline][$startlinex-1][3] = $blue;
					if ($linesize > 3) {
						$grid[$startline][$startlinex+2][1] = $red;
						$grid[$startline][$startlinex+2][2] = $green;
						$grid[$startline][$startlinex+2][3] = $blue;
						$grid[$startline][$startlinex-2][1] = $red;
						$grid[$startline][$startlinex-2][2] = $green;
						$grid[$startline][$startlinex-2][3] = $blue;
					}
					if ($linesize > 4) {
						$grid[$startline][$startlinex+3][1] = $red;
						$grid[$startline][$startlinex+3][2] = $green;
						$grid[$startline][$startlinex+3][3] = $blue;
						$grid[$startline][$startlinex-3][1] = $red;
						$grid[$startline][$startlinex-3][2] = $green;
						$grid[$startline][$startlinex-3][3] = $blue;
					}
					if ($linesize > 5) {
						$grid[$startline][$startlinex+4][1] = $red;
						$grid[$startline][$startlinex+4][2] = $green;
						$grid[$startline][$startlinex+4][3] = $blue;
						$grid[$startline][$startlinex-4][1] = $red;
						$grid[$startline][$startlinex-4][2] = $green;
						$grid[$startline][$startlinex-4][3] = $blue;
					}

				}
				else {
					$red = rand($r18, $r28);
					$green = rand($r38, $r48);
					$blue = rand($r58, $r68);
					$linesize = rand(3,6);
					$startline = rand(1,12);
					$startlinex = rand(1,16);
					$grid[$startline][$startlinex][1] = $red;
					$grid[$startline][$startlinex][2] = $green;
					$grid[$startline][$startlinex][3] = $blue;
					$grid[$startline+1][$startlinex][1] = $red;
					$grid[$startline+1][$startlinex][2] = $green;
					$grid[$startline+1][$startlinex][3] = $blue;
					$grid[$startline-1][$startlinex][1] = $red;
					$grid[$startline-1][$startlinex][2] = $green;
					$grid[$startline-1][$startlinex][3] = $blue;
					if ($linesize > 3) {
						$grid[$startline+2][$startlinex][1] = $red;
						$grid[$startline+2][$startlinex][2] = $green;
						$grid[$startline+2][$startlinex][3] = $blue;
						$grid[$startline-2][$startlinex][1] = $red;
						$grid[$startline-2][$startlinex][2] = $green;
						$grid[$startline-2][$startlinex][3] = $blue;
					}
					if ($linesize > 4) {
						$grid[$startline+3][$startlinex][1] = $red;
						$grid[$startline+3][$startlinex][2] = $green;
						$grid[$startline+3][$startlinex][3] = $blue;
						$grid[$startline-3][$startlinex][1] = $red;
						$grid[$startline-3][$startlinex][2] = $green;
						$grid[$startline-3][$startlinex][3] = $blue;
					}
					if ($linesize > 5) {
						$grid[$startline+4][$startlinex][1] = $red;
						$grid[$startline+4][$startlinex][2] = $green;
						$grid[$startline+4][$startlinex][3] = $blue;
						$grid[$startline-4][$startlinex][1] = $red;
						$grid[$startline-4][$startlinex][2] = $green;
						$grid[$startline-4][$startlinex][3] = $blue;
					}
					$grid[$startline][$startlinex+1][1] = $red;
					$grid[$startline][$startlinex+1][2] = $green;
					$grid[$startline][$startlinex+1][3] = $blue;
					$grid[$startline][$startlinex-1][1] = $red;
					$grid[$startline][$startlinex-1][2] = $green;
					$grid[$startline][$startlinex-1][3] = $blue;
					if ($linesize > 3) {
						$grid[$startline][$startlinex+2][1] = $red;
						$grid[$startline][$startlinex+2][2] = $green;
						$grid[$startline][$startlinex+2][3] = $blue;
						$grid[$startline][$startlinex-2][1] = $red;
						$grid[$startline][$startlinex-2][2] = $green;
						$grid[$startline][$startlinex-2][3] = $blue;
					}
					if ($linesize > 4) {
						$grid[$startline][$startlinex+3][1] = $red;
						$grid[$startline][$startlinex+3][2] = $green;
						$grid[$startline][$startlinex+3][3] = $blue;
						$grid[$startline][$startlinex-3][1] = $red;
						$grid[$startline][$startlinex-3][2] = $green;
						$grid[$startline][$startlinex-3][3] = $blue;
					}
					if ($linesize > 5) {
						$grid[$startline][$startlinex+4][1] = $red;
						$grid[$startline][$startlinex+4][2] = $green;
						$grid[$startline][$startlinex+4][3] = $blue;
						$grid[$startline][$startlinex-4][1] = $red;
						$grid[$startline][$startlinex-4][2] = $green;
						$grid[$startline][$startlinex-4][3] = $blue;
					}

				}
				$linevar++;
			
			}
		
		}
		
		// Draw a large grid to the screen

		$gvar = 1;
		while ($gvar < 17) {
			$rvar = 1;
			while ($rvar < 17) {
				if (($_REQUEST['rt'] == 'square') || ($_REQUEST['submited'] == 0)) {
					echo '<div style="background:rgb('.$grid[$gvar][$rvar][1].',';
					echo $grid[$gvar][$rvar][2];
					echo ','.$grid[$gvar][$rvar][3].');width:20px;height:20px;float: left;">  </div>';
				}
				else if ($_REQUEST['rt'] == 'circle') {
					echo '<div style="background:rgb('.$grid[$gvar][$rvar][1].',';
					echo $grid[$gvar][$rvar][2];
					echo ','.$grid[$gvar][$rvar][3].');	width: 16px; height: 16px; -moz-border-radius: 8px; -webkit-border-radius: 8px; border-radius: 8px; float: left; margin: 2px;">  </div>';
				}
				else if ($_REQUEST['rt'] == 'triangle') {
					echo '<div style="border-top: 20px solid rgb('.$grid[$gvar][$rvar][1].',';
					echo $grid[$gvar][$rvar][2];
					echo ','.$grid[$gvar][$rvar][3].');	width: 0; height: 0; border-left: 20px solid transparent; float: left;">  </div>';
				}
				else if ($_REQUEST['rt'] == 'triangle2') {
					echo '<div style="border-top: 20px solid rgb('.$grid[$gvar][$rvar][1].',';
					echo $grid[$gvar][$rvar][2];
					echo ','.$grid[$gvar][$rvar][3].');	width: 0; height: 0; border-right: 20px solid transparent; float: left;">  </div>';
				}
				else if ($_REQUEST['rt'] == 'triangle3') {
					echo '<div style="border-bottom: 20px solid rgb('.$grid[$gvar][$rvar][1].',';
					echo $grid[$gvar][$rvar][2];
					echo ','.$grid[$gvar][$rvar][3].');	width: 0; height: 0; border-right: 20px solid transparent; float: left;">  </div>';
				}
				else if ($_REQUEST['rt'] == 'triangle4') {
					echo '<div style="border-bottom: 20px solid rgb('.$grid[$gvar][$rvar][1].',';
					echo $grid[$gvar][$rvar][2];
					echo ','.$grid[$gvar][$rvar][3].');	width: 0; height: 0; border-left: 20px solid transparent; float: left;">  </div>';
				}
				else if ($_REQUEST['rt'] == 'randomt') {
					$rrn = rand(1,4);
					if ($rrn == 1) {
						echo '<div style="border-top: 20px solid rgb('.$grid[$gvar][$rvar][1].',';
						echo $grid[$gvar][$rvar][2];
						echo ','.$grid[$gvar][$rvar][3].');	width: 0; height: 0; border-left: 20px solid transparent; float: left;">  </div>';
					}
					else if ($rrn == 2) {
						echo '<div style="border-top: 20px solid rgb('.$grid[$gvar][$rvar][1].',';
						echo $grid[$gvar][$rvar][2];
						echo ','.$grid[$gvar][$rvar][3].');	width: 0; height: 0; border-right: 20px solid transparent; float: left;">  </div>';
					}
					else if ($rrn == 3) {
						echo '<div style="border-bottom: 20px solid rgb('.$grid[$gvar][$rvar][1].',';
						echo $grid[$gvar][$rvar][2];
						echo ','.$grid[$gvar][$rvar][3].');	width: 0; height: 0; border-right: 20px solid transparent; float: left;">  </div>';
					}
					else {
						echo '<div style="border-bottom: 20px solid rgb('.$grid[$gvar][$rvar][1].',';
						echo $grid[$gvar][$rvar][2];
						echo ','.$grid[$gvar][$rvar][3].');	width: 0; height: 0; border-left: 20px solid transparent; float: left;">  </div>';
					}	
				}
				else if ($_REQUEST['rt'] == 'random') {
					$rrn = rand(1,3);
					if ($rrn == 1) {
						echo '<div style="background:rgb('.$grid[$gvar][$rvar][1].',';
						echo $grid[$gvar][$rvar][2];
						echo ','.$grid[$gvar][$rvar][3].');width:20px;height:20px;float: left;">  </div>';
					}
					else if ($rrn == 2) {
						echo '<div style="background:rgb('.$grid[$gvar][$rvar][1].',';
						echo $grid[$gvar][$rvar][2];
						echo ','.$grid[$gvar][$rvar][3].');	width: 20px; height: 20px; -moz-border-radius: 10px; -webkit-border-radius: 10px; border-radius: 10px; float: left; margin: 0px;">  </div>';
					}
					else {
						echo '<div style="border-top: 20px solid rgb('.$grid[$gvar][$rvar][1].',';
						echo $grid[$gvar][$rvar][2];
						echo ','.$grid[$gvar][$rvar][3].');	width: 0; height: 0; border-left: 20px solid transparent; float: left;">  </div>';
					}	
				}

				$rvar++;
			}
			$gvar++;
		}
		
		?>
        </div>	
        <form method=post enctype=multipart/form-data name="colours" id="colourform">
        	<div class="cbox">
				<div class="csubh">
                	Colour
                </div>
				<div class="csubh">
                	Low Red
                </div>
				<div class="csubh">
                	High Red
                </div>
				<div class="csubh">
                	Low Green
                </div>
				<div class="csubh">
                	High Green
                </div>
				<div class="csubh">
                	Low Blue
                </div>
				<div class="csubh">
                	High Blue
                </div>
                <div class="csubhf">
                	1
                </div>
                <div class="csub">
                    <input name="or11" type="checkbox" class="clampable" value="1" <?php if ($_REQUEST['or11'] == 1) {echo 'checked';}?>>
                    <input name="r11" type="text" value="<?php echo $r11;?>" size="3">
                </div>
                <div class="csub">
                    <input name="or21" type="checkbox" class="clampable" value="1" <?php if ($_REQUEST['or21'] == 1) {echo 'checked';}?>>
                    <input name="r21" type="text" value="<?php echo $r21;?>" size="3">
                </div>
                <div class="csub">
                    <input name="or31" type="checkbox" id="clampable" value="1" <?php if ($_REQUEST['or31'] == 1) {echo 'checked';}?>>
                    <input name="r31" type="text" value="<?php echo $r31;?>" size="3">
                </div>
				<div class="csub">
                    <input name="or41" type="checkbox" id="clampable" value="1" <?php if ($_REQUEST['or41'] == 1) {echo 'checked';}?>>
                    <input name="r41" type="text" value="<?php echo $r41;?>" size="3">
                </div>
                <div class="csub">
                    <input name="or51" type="checkbox" id="clampable" value="1" <?php if ($_REQUEST['or51'] == 1) {echo 'checked';}?>>
                    <input name="r51" type="text" value="<?php echo $r51;?>" size="3">
                </div>
                <div class="csub">
                    <input name="or61" type="checkbox" id="clampable" value="1" <?php if ($_REQUEST['or61'] == 1) {echo 'checked';}?>>
                    <input name="r61" type="text" value="<?php echo $r61;?>" size="3">
                </div>
                <div class="csubhf">
                	2
                </div>
                <div class="csub">
                    <input name="or12" type="checkbox" id="clampable" value="1" <?php if ($_REQUEST['or12'] == 1) {echo 'checked';}?>>
                    <input name="r12" type="text" value="<?php echo $r12;?>" size="3">
                </div>
                <div class="csub">
                    <input name="or22" type="checkbox" id="clampable" value="1" <?php if ($_REQUEST['or22'] == 1) {echo 'checked';}?>>
                    <input name="r22" type="text" value="<?php echo $r22;?>" size="3">
                </div>
                <div class="csub">
                    <input name="or32" type="checkbox" id="clampable" value="1" <?php if ($_REQUEST['or32'] == 1) {echo 'checked';}?>>
                    <input name="r32" type="text" value="<?php echo $r32;?>" size="3">
                </div>
				<div class="csub">
                    <input name="or42" type="checkbox" id="clampable" value="1" <?php if ($_REQUEST['or42'] == 1) {echo 'checked';}?>>
                    <input name="r42" type="text" value="<?php echo $r42;?>" size="3">
                </div>
                <div class="csub">
                    <input name="or52" type="checkbox" id="clampable" value="1" <?php if ($_REQUEST['or52'] == 1) {echo 'checked';}?>>
                    <input name="r52" type="text" value="<?php echo $r52;?>" size="3">
                </div>
                <div class="csub">
                    <input name="or62" type="checkbox" id="clampable" value="1" <?php if ($_REQUEST['or62'] == 1) {echo 'checked';}?>>
                    <input name="r62" type="text" value="<?php echo $r62;?>" size="3">
                </div>
                <div class="csubhf">
                	3
                </div>
                <div class="csub">
                    <input name="or13" type="checkbox" id="clampable" value="1" <?php if ($_REQUEST['or13'] == 1) {echo 'checked';}?>>
                    <input name="r13" type="text" value="<?php echo $r13;?>" size="3">
                </div>
                <div class="csub">
                    <input name="or23" type="checkbox" id="clampable" value="1" <?php if ($_REQUEST['or23'] == 1) {echo 'checked';}?>>
                    <input name="r23" type="text" value="<?php echo $r23;?>" size="3">
                </div>
                <div class="csub">
                    <input name="or33" type="checkbox" id="clampable" value="1" <?php if ($_REQUEST['or33'] == 1) {echo 'checked';}?>>
                    <input name="r33" type="text" value="<?php echo $r33;?>" size="3">
                </div>
				<div class="csub">
                    <input name="or43" type="checkbox" id="clampable" value="1" <?php if ($_REQUEST['or43'] == 1) {echo 'checked';}?>>
                    <input name="r43" type="text" value="<?php echo $r43;?>" size="3">
                </div>
                <div class="csub">
                    <input name="or53" type="checkbox" id="clampable" value="1" <?php if ($_REQUEST['or53'] == 1) {echo 'checked';}?>>
                    <input name="r53" type="text" value="<?php echo $r53;?>" size="3">
                </div>
                <div class="csub">
                    <input name="or63" type="checkbox" id="clampable" value="1" <?php if ($_REQUEST['or63'] == 1) {echo 'checked';}?>>
                    <input name="r63" type="text" value="<?php echo $r63;?>" size="3">
                </div>
                <div class="csubhf">
                	4
                </div>
                <div class="csub">
                    <input name="or14" type="checkbox" id="clampable" value="1" <?php if ($_REQUEST['or14'] == 1) {echo 'checked';}?>>
                    <input name="r14" type="text" value="<?php echo $r14;?>" size="3">
                </div>
                <div class="csub">
                    <input name="or24" type="checkbox" id="clampable" value="1" <?php if ($_REQUEST['or24'] == 1) {echo 'checked';}?>>
                    <input name="r24" type="text" value="<?php echo $r24;?>" size="3">
                </div>
                <div class="csub">
                    <input name="or34" type="checkbox" id="clampable" value="1" <?php if ($_REQUEST['or34'] == 1) {echo 'checked';}?>>
                    <input name="r34" type="text" value="<?php echo $r34;?>" size="3">
                </div>
				<div class="csub">
                    <input name="or44" type="checkbox" id="clampable" value="1" <?php if ($_REQUEST['or44'] == 1) {echo 'checked';}?>>
                    <input name="r44" type="text" value="<?php echo $r44;?>" size="3">
                </div>
                <div class="csub">
                    <input name="or54" type="checkbox" id="clampable" value="1" <?php if ($_REQUEST['or54'] == 1) {echo 'checked';}?>>
                    <input name="r54" type="text" value="<?php echo $r54;?>" size="3">
                </div>
                <div class="csub">
                    <input name="or64" type="checkbox" id="clampable" value="1" <?php if ($_REQUEST['or64'] == 1) {echo 'checked';}?>>
                    <input name="r64" type="text" value="<?php echo $r64;?>" size="3">
                </div>
                <div class="csubhf">
                	5
                </div>
                <div class="csub">
                    <input name="or15" type="checkbox" id="clampable" value="1" <?php if ($_REQUEST['or15'] == 1) {echo 'checked';}?>>
                    <input name="r15" type="text" value="<?php echo $r15;?>" size="3">
                </div>
                <div class="csub">
                    <input name="or25" type="checkbox" id="clampable" value="1" <?php if ($_REQUEST['or25'] == 1) {echo 'checked';}?>>
                    <input name="r25" type="text" value="<?php echo $r25;?>" size="3">
                </div>
                <div class="csub">
                    <input name="or35" type="checkbox" id="clampable" value="1" <?php if ($_REQUEST['or35'] == 1) {echo 'checked';}?>>
                    <input name="r35" type="text" value="<?php echo $r35;?>" size="3">
                </div>
				<div class="csub">
                    <input name="or45" type="checkbox" id="clampable" value="1" <?php if ($_REQUEST['or45'] == 1) {echo 'checked';}?>>
                    <input name="r45" type="text" value="<?php echo $r45;?>" size="3">
                </div>
                <div class="csub">
                    <input name="or55" type="checkbox" id="clampable" value="1" <?php if ($_REQUEST['or55'] == 1) {echo 'checked';}?>>
                    <input name="r55" type="text" value="<?php echo $r55;?>" size="3">
                </div>
                <div class="csub">
                    <input name="or65" type="checkbox" id="clampable" value="1" <?php if ($_REQUEST['or65'] == 1) {echo 'checked';}?>>
                    <input name="r65" type="text" value="<?php echo $r65;?>" size="3">
                </div>
                <div class="csubhf">
                	6
                </div>
                <div class="csub">
                    <input name="or16" type="checkbox" id="clampable" value="1" <?php if ($_REQUEST['or16'] == 1) {echo 'checked';}?>>
                    <input name="r16" type="text" value="<?php echo $r16;?>" size="3">
                </div>
                <div class="csub">
                    <input name="or26" type="checkbox" id="clampable" value="1" <?php if ($_REQUEST['or26'] == 1) {echo 'checked';}?>>
                    <input name="r26" type="text" value="<?php echo $r26;?>" size="3">
                </div>
                <div class="csub">
                    <input name="or36" type="checkbox" id="clampable" value="1" <?php if ($_REQUEST['or36'] == 1) {echo 'checked';}?>>
                    <input name="r36" type="text" value="<?php echo $r36;?>" size="3">
                </div>
				<div class="csub">
                    <input name="or46" type="checkbox" id="clampable" value="1" <?php if ($_REQUEST['or46'] == 1) {echo 'checked';}?>>
                    <input name="r46" type="text" value="<?php echo $r46;?>" size="3">
                </div>
                <div class="csub">
                    <input name="or56" type="checkbox" id="clampable" value="1" <?php if ($_REQUEST['or56'] == 1) {echo 'checked';}?>>
                    <input name="r56" type="text" value="<?php echo $r56;?>" size="3">
                </div>
                <div class="csub">
                    <input name="or66" type="checkbox" id="clampable" value="1" <?php if ($_REQUEST['or66'] == 1) {echo 'checked';}?>>
                    <input name="r66" type="text" value="<?php echo $r66;?>" size="3">
                </div>
                <div class="csubhf">
                	7
                </div>
                <div class="csub">
                    <input name="or17" type="checkbox" id="clampable" value="1" <?php if ($_REQUEST['or17'] == 1) {echo 'checked';}?>>
                    <input name="r17" type="text" value="<?php echo $r17;?>" size="3">
                </div>
                <div class="csub">
                    <input name="or27" type="checkbox" id="clampable" value="1" <?php if ($_REQUEST['or27'] == 1) {echo 'checked';}?>>
                    <input name="r27" type="text" value="<?php echo $r27;?>" size="3">
                </div>
                <div class="csub">
                    <input name="or37" type="checkbox" id="clampable" value="1" <?php if ($_REQUEST['or37'] == 1) {echo 'checked';}?>>
                    <input name="r37" type="text" value="<?php echo $r37;?>" size="3">
                </div>
				<div class="csub">
                    <input name="or47" type="checkbox" id="clampable" value="1" <?php if ($_REQUEST['or47'] == 1) {echo 'checked';}?>>
                    <input name="r47" type="text" value="<?php echo $r47;?>" size="3">
                </div>
                <div class="csub">
                    <input name="or57" type="checkbox" id="clampable" value="1" <?php if ($_REQUEST['or57'] == 1) {echo 'checked';}?>>
                    <input name="r57" type="text" value="<?php echo $r57;?>" size="3">
                </div>
                <div class="csub">
                    <input name="or67" type="checkbox" id="clampable" value="1" <?php if ($_REQUEST['or67'] == 1) {echo 'checked';}?>>
                    <input name="r67" type="text" value="<?php echo $r67;?>" size="3">
                </div>
                <div class="csubhf">
                	8
                </div>
                <div class="csub">
                    <input name="or18" type="checkbox" id="clampable" value="1" <?php if ($_REQUEST['or18'] == 1) {echo 'checked';}?>>
                    <input name="r18" type="text" value="<?php echo $r18;?>" size="3">
                </div>
                <div class="csub">
                    <input name="or28" type="checkbox" id="clampable" value="1" <?php if ($_REQUEST['or28'] == 1) {echo 'checked';}?>>
                    <input name="r28" type="text" value="<?php echo $r28;?>" size="3">
                </div>
                <div class="csub">
                    <input name="or38" type="checkbox" id="clampable" value="1" <?php if ($_REQUEST['or38'] == 1) {echo 'checked';}?>>
                    <input name="r38" type="text" value="<?php echo $r38;?>" size="3">
                </div>
				<div class="csub">
                    <input name="or48" type="checkbox" id="clampable" value="1" <?php if ($_REQUEST['or48'] == 1) {echo 'checked';}?>>
                    <input name="r48" type="text" value="<?php echo $r48;?>" size="3">
                </div>
                <div class="csub">
                    <input name="or58" type="checkbox" id="clampable" value="1" <?php if ($_REQUEST['or58'] == 1) {echo 'checked';}?>>
                    <input name="r58" type="text" value="<?php echo $r58;?>" size="3">
                </div>
                <div class="csub">
                    <input name="or68" type="checkbox" id="clampable" value="1" <?php if ($_REQUEST['or68'] == 1) {echo 'checked';}?>>
                    <input name="r68" type="text" value="<?php echo $r68;?>" size="3">
                </div>
                <div class="cb">
                    <input name="" type="submit" value="Generate">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="button" name="Clamp_All" value="Clamp All" onClick="ClampAll(document.colours)">&nbsp;&nbsp;&nbsp;
                    <input type="button" name="Un_ClampAll" value="Unclamp All" onClick="UnClampAll(document.colours)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   	Auto Refesh: <input name="ar" type="checkbox" value="1" <?php if ($_REQUEST['ar'] == 1) {echo 'checked';}?>>&nbsp;&nbsp;
                    Rate: <input name="arr" type="text" value="<?php echo $arr;?>" size="5">
                </div>
            </div>
            <div class="cbox">
				<div class="ccolh">
                	Red
                </div>
				<div class="ccolh">
                	Pink
                </div>
				<div class="ccolh">
                	Orange
                </div>
				<div class="ccolh">
                	Yellow
                </div>
				<div class="ccolh">
                	Green
                </div>
				<div class="ccolh">
                	Turquoise
                </div>
				<div class="ccolh">
                	Blue
                </div>
				<div class="ccolh">
                	Indigo
                </div>
				<div class="ccolh">
                	Purple
                </div>
				<div class="ccolh">
                	Brown
                </div>
				<div class="ccolh">
                	Black
                </div>
				<div class="ccolh">
                	Grey
                </div>
				<div class="ccolh">
                	White
                </div>
                <div class="ccolf">
                	<input name="colour1" type="radio" value="red">
                </div>
                <div class="ccol">
                    <input name="colour1" type="radio" value="pink">
                </div> 
                <div class="ccol">
                    <input name="colour1" type="radio" value="orange">
                </div> 
                <div class="ccol">
                    <input name="colour1" type="radio" value="yellow">
                </div> 
                <div class="ccol">
                    <input name="colour1" type="radio" value="green">
                </div> 
                <div class="ccol">
                    <input name="colour1" type="radio" value="turquoise">
                </div>  
                <div class="ccol">
                    <input name="colour1" type="radio" value="blue">
                </div>
                <div class="ccol">
                    <input name="colour1" type="radio" value="indigo">
                </div>
                <div class="ccol">
                    <input name="colour1" type="radio" value="purple">
                </div>
                <div class="ccol">
                    <input name="colour1" type="radio" value="brown">
                </div>
                <div class="ccol">
                	<input name="colour1" type="radio" value="black">
                </div>
                <div class="ccol">
                    <input name="colour1" type="radio" value="grey">
                </div> 
                <div class="ccol">
                    <input name="colour1" type="radio" value="white">
                </div>
                <div class="ccolf">
                	<input name="colour2" type="radio" value="red">
                </div>
                <div class="ccol">
                    <input name="colour2" type="radio" value="pink">
                </div> 
                <div class="ccol">
                    <input name="colour2" type="radio" value="orange">
                </div> 
                <div class="ccol">
                    <input name="colour2" type="radio" value="yellow">
                </div> 
                <div class="ccol">
                    <input name="colour2" type="radio" value="green">
                </div> 
                <div class="ccol">
                    <input name="colour2" type="radio" value="turquoise">
                </div>  
                <div class="ccol">
                    <input name="colour2" type="radio" value="blue">
                </div>
                <div class="ccol">
                    <input name="colour2" type="radio" value="indigo">
                </div>
                <div class="ccol">
                    <input name="colour2" type="radio" value="purple">
                </div>
                <div class="ccol">
                    <input name="colour2" type="radio" value="brown">
                </div>
                <div class="ccol">
                	<input name="colour2" type="radio" value="black">
                </div>
                <div class="ccol">
                    <input name="colour2" type="radio" value="grey">
                </div> 
                <div class="ccol">
                    <input name="colour2" type="radio" value="white">
                </div>
                <div class="ccolf">
                	<input name="colour3" type="radio" value="red">
                </div>
                <div class="ccol">
                    <input name="colour3" type="radio" value="pink">
                </div> 
                <div class="ccol">
                    <input name="colour3" type="radio" value="orange">
                </div> 
                <div class="ccol">
                    <input name="colour3" type="radio" value="yellow">
                </div> 
                <div class="ccol">
                    <input name="colour3" type="radio" value="green">
                </div> 
                <div class="ccol">
                    <input name="colour3" type="radio" value="turquoise">
                </div>  
                <div class="ccol">
                    <input name="colour3" type="radio" value="blue">
                </div>
                <div class="ccol">
                    <input name="colour3" type="radio" value="indigo">
                </div>
                <div class="ccol">
                    <input name="colour3" type="radio" value="purple">
                </div>
                <div class="ccol">
                    <input name="colour3" type="radio" value="brown">
                </div>
                <div class="ccol">
                	<input name="colour3" type="radio" value="black">
                </div>
                <div class="ccol">
                    <input name="colour3" type="radio" value="grey">
                </div> 
                <div class="ccol">
                    <input name="colour3" type="radio" value="white">
                </div>
                <div class="ccolf">
                	<input name="colour4" type="radio" value="red">
                </div>
                <div class="ccol">
                    <input name="colour4" type="radio" value="pink">
                </div> 
                <div class="ccol">
                    <input name="colour4" type="radio" value="orange">
                </div> 
                <div class="ccol">
                    <input name="colour4" type="radio" value="yellow">
                </div> 
                <div class="ccol">
                    <input name="colour4" type="radio" value="green">
                </div> 
                <div class="ccol">
                    <input name="colour4" type="radio" value="turquoise">
                </div>  
                <div class="ccol">
                    <input name="colour4" type="radio" value="blue">
                </div>
                <div class="ccol">
                    <input name="colour4" type="radio" value="indigo">
                </div>
                <div class="ccol">
                    <input name="colour4" type="radio" value="purple">
                </div>
                <div class="ccol">
                    <input name="colour4" type="radio" value="brown">
                </div>
                <div class="ccol">
                	<input name="colour4" type="radio" value="black">
                </div>
                <div class="ccol">
                    <input name="colour4" type="radio" value="grey">
                </div> 
                <div class="ccol">
                    <input name="colour4" type="radio" value="white">
                </div>
                <div class="ccolf">
                	<input name="colour5" type="radio" value="red">
                </div>
                <div class="ccol">
                    <input name="colour5" type="radio" value="pink">
                </div> 
                <div class="ccol">
                    <input name="colour5" type="radio" value="orange">
                </div> 
                <div class="ccol">
                    <input name="colour5" type="radio" value="yellow">
                </div> 
                <div class="ccol">
                    <input name="colour5" type="radio" value="green">
                </div> 
                <div class="ccol">
                    <input name="colour5" type="radio" value="turquoise">
                </div>  
                <div class="ccol">
                    <input name="colour5" type="radio" value="blue">
                </div>
                <div class="ccol">
                    <input name="colour5" type="radio" value="indigo">
                </div>
                <div class="ccol">
                    <input name="colour5" type="radio" value="purple">
                </div>
                <div class="ccol">
                    <input name="colour5" type="radio" value="brown">
                </div>
                <div class="ccol">
                	<input name="colour5" type="radio" value="black">
                </div>
                <div class="ccol">
                    <input name="colour5" type="radio" value="grey">
                </div> 
                <div class="ccol">
                    <input name="colour5" type="radio" value="white">
                </div>
                <div class="ccolf">
                	<input name="colour6" type="radio" value="red">
                </div>
                <div class="ccol">
                    <input name="colour6" type="radio" value="pink">
                </div> 
                <div class="ccol">
                    <input name="colour6" type="radio" value="orange">
                </div> 
                <div class="ccol">
                    <input name="colour6" type="radio" value="yellow">
                </div> 
                <div class="ccol">
                    <input name="colour6" type="radio" value="green">
                </div> 
                <div class="ccol">
                    <input name="colour6" type="radio" value="turquoise">
                </div>  
                <div class="ccol">
                    <input name="colour6" type="radio" value="blue">
                </div>
                <div class="ccol">
                    <input name="colour6" type="radio" value="indigo">
                </div>
                <div class="ccol">
                    <input name="colour6" type="radio" value="purple">
                </div>
                <div class="ccol">
                    <input name="colour6" type="radio" value="brown">
                </div>
                <div class="ccol">
                	<input name="colour6" type="radio" value="black">
                </div>
                <div class="ccol">
                    <input name="colour6" type="radio" value="grey">
                </div> 
                <div class="ccol">
                    <input name="colour6" type="radio" value="white">
                </div>
                <div class="ccolf">
                	<input name="colour7" type="radio" value="red">
                </div>
                <div class="ccol">
                    <input name="colour7" type="radio" value="pink">
                </div> 
                <div class="ccol">
                    <input name="colour7" type="radio" value="orange">
                </div> 
                <div class="ccol">
                    <input name="colour7" type="radio" value="yellow">
                </div> 
                <div class="ccol">
                    <input name="colour7" type="radio" value="green">
                </div> 
                <div class="ccol">
                    <input name="colour7" type="radio" value="turquoise">
                </div>  
                <div class="ccol">
                    <input name="colour7" type="radio" value="blue">
                </div>
                <div class="ccol">
                    <input name="colour7" type="radio" value="indigo">
                </div>
                <div class="ccol">
                    <input name="colour7" type="radio" value="purple">
                </div>
                <div class="ccol">
                    <input name="colour7" type="radio" value="brown">
                </div>
                <div class="ccol">
                	<input name="colour7" type="radio" value="black">
                </div>
                <div class="ccol">
                    <input name="colour7" type="radio" value="grey">
                </div> 
                <div class="ccol">
                    <input name="colour7" type="radio" value="white">
                </div>
                <div class="ccolf">
                	<input name="colour8" type="radio" value="red">
                </div>
                <div class="ccol">
                    <input name="colour8" type="radio" value="pink">
                </div> 
                <div class="ccol">
                    <input name="colour8" type="radio" value="orange">
                </div> 
                <div class="ccol">
                    <input name="colour8" type="radio" value="yellow">
                </div> 
                <div class="ccol">
                    <input name="colour8" type="radio" value="green">
                </div> 
                <div class="ccol">
                    <input name="colour8" type="radio" value="turquoise">
                </div>  
                <div class="ccol">
                    <input name="colour8" type="radio" value="blue">
                </div>
                <div class="ccol">
                    <input name="colour8" type="radio" value="indigo">
                </div>
                <div class="ccol">
                    <input name="colour8" type="radio" value="purple">
                </div>
                <div class="ccol">
                    <input name="colour8" type="radio" value="brown">
                </div>
                <div class="ccol">
                	<input name="colour8" type="radio" value="black">
                </div>
                <div class="ccol">
                    <input name="colour8" type="radio" value="grey">
                </div> 
                <div class="ccol">
                    <input name="colour8" type="radio" value="white">
                </div>
	       	</div>
            <div class="hide">
                <input name="colour1" type="radio" disabled value="fix">
                <input name="colour2" type="radio" disabled value="fix">
                <input name="colour3" type="radio" disabled value="fix">
                <input name="colour4" type="radio" disabled value="fix">
                <input name="colour5" type="radio" disabled value="fix">
                <input name="colour6" type="radio" disabled value="fix">
                <input name="colour7" type="radio" disabled value="fix">
                <input name="colour8" type="radio" disabled value="fix">
            </div>
            <div class="cbox">
                <div class="cb">
                	<strong>V Lines:</strong> Off<input name="lines" type="radio" value="off" <?php if (($_REQUEST['lines'] == 'off') || ($_REQUEST['submited'] == 0)) {echo 'checked';}?>> Colour 1<input name="lines" type="radio" value="one" <?php if ($_REQUEST['lines'] == 'one') {echo 'checked';}?>> Random<input name="lines" type="radio" value="random" <?php if ($_REQUEST['lines'] == 'random') {echo 'checked';}?>>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                	<strong>H Lines:</strong> Off<input name="hlines" type="radio" value="off" <?php if (($_REQUEST['hlines'] == 'off') || ($_REQUEST['submited'] == 0)) {echo 'checked';}?>> Colour 1<input name="hlines" type="radio" value="one" <?php if ($_REQUEST['hlines'] == 'one') {echo 'checked';}?>> Random<input name="hlines" type="radio" value="random" <?php if ($_REQUEST['hlines'] == 'random') {echo 'checked';}?>>
                </div>
            </div>
            <div class="cbox">
                <div class="cb">
                	<strong>Crosses:</strong> Off<input name="crosses" type="radio" value="off" <?php if (($_REQUEST['crosses'] == 'off') || ($_REQUEST['submited'] == 0)) {echo 'checked';}?>> Colour 1<input name="crosses" type="radio" value="one" <?php if ($_REQUEST['crosses'] == 'one') {echo 'checked';}?>> Random<input name="crosses" type="radio" value="random" <?php if ($_REQUEST['crosses'] == 'random') {echo 'checked';}?>>

                </div>
            </div>
            <div class="cbox">
                <div class="cb">
                	<strong>Render Type:</strong> Square<input name="rt" type="radio" value="square" <?php if (($_REQUEST['rt'] == 'square') || ($_REQUEST['submited'] == 0)) {echo 'checked';}?>> Circle<input name="rt" type="radio" value="circle" <?php if ($_REQUEST['rt'] == 'circle') {echo 'checked';}?>> Triangle<input name="rt" type="radio" value="triangle" <?php if ($_REQUEST['rt'] == 'triangle') {echo 'checked';}?>> Triangle 2<input name="rt" type="radio" value="triangle2" <?php if ($_REQUEST['rt'] == 'triangle2') {echo 'checked';}?>> Triangle 3<input name="rt" type="radio" value="triangle3" <?php if ($_REQUEST['rt'] == 'triangle3') {echo 'checked';}?>> Triangle 4<input name="rt" type="radio" value="triangle4" <?php if ($_REQUEST['rt'] == 'triangle4') {echo 'checked';}?>> Random Triangles<input name="rt" type="radio" value="randomt" <?php if ($_REQUEST['rt'] == 'randomt') {echo 'checked';}?>> Random<input name="rt" type="radio" value="random" <?php if ($_REQUEST['rt'] == 'random') {echo 'checked';}?>>
                </div>
            </div>
            <div class="cbox">
                <div class="cb">
                    <strong>Background Colour:</strong> Red <input name="bgcr" type="text" value="<?php echo $bgcr;?>" size="3"> Green <input name="bgcg" type="text" value="<?php echo $bgcg;?>" size="3"> Blue <input name="bgcb" type="text" value="<?php echo $bgcb;?>" size="3">
                </div>
            </div>
            <div class="cbox">
                <div class="cb">
                    Tile Preview: <input name="tiles" type="checkbox" value="1" <?php if ($_REQUEST['tiles'] == 1) {echo 'checked';}?>>
                    &nbsp;&nbsp;&nbsp;
                    Large Grid: <input name="lgrid" type="checkbox" value="1" <?php if (($_REQUEST['lgrid'] == 1) || ($_REQUEST['submited'] == 0)) {echo 'checked';}?>>
                    &nbsp;&nbsp;&nbsp;
                    Pixel Grid: <input name="pgrid" type="checkbox" value="1" <?php if (($_REQUEST['pgrid'] == 1)) {echo 'checked';}?>>
                    &nbsp;&nbsp;&nbsp;
                    Large Pixel Grid: <input name="lpgrid" type="checkbox" value="1" <?php if (($_REQUEST['lpgrid'] == 1)) {echo 'checked';}?>>
                </div>
            </div>
            <input name="submited" type="hidden" value="1">
        </form>
        <div class="eholder">
        <?php
			
			if ($_REQUEST['tiles'] == 1) {
			
				// Draw tiles of the grid
			
				$example = 1;
				while ($example < 65) {
					echo '<div class="ebox">';
					
					$gvar = 1;
					while ($gvar < 17) {
						$rvar = 1;
						while ($rvar < 17) {
							if (($_REQUEST['rt'] == 'square') || ($_REQUEST['submited'] == 0)) {
								echo '<div class="rtype" style="background:rgb('.$grid[$gvar][$rvar][1].',';
								echo $grid[$gvar][$rvar][2];
								echo ','.$grid[$gvar][$rvar][3].');">  </div>';
								//echo ','.$grid[$gvar][$rvar][3].');width:8px;height:8px;float: left;">  </div>';
							}
							else if ($_REQUEST['rt'] == 'circle') {
								echo '<div class="rtype" style="background:rgb('.$grid[$gvar][$rvar][1].',';
								echo $grid[$gvar][$rvar][2];
								echo ','.$grid[$gvar][$rvar][3].');">  </div>';
								//echo ','.$grid[$gvar][$rvar][3].');	width: 6.4px; height: 6.4px; -moz-border-radius: 3.2px; -webkit-border-radius: 3.2px; border-radius: 3.2px; float: left; margin: 0.8px;">  </div>';
							}
							else if ($_REQUEST['rt'] == 'triangle') {
								echo '<div class="rtype" style="border-top: 8px solid rgb('.$grid[$gvar][$rvar][1].',';
								echo $grid[$gvar][$rvar][2];
								echo ','.$grid[$gvar][$rvar][3].');">  </div>';
							}
							else if ($_REQUEST['rt'] == 'triangle2') {
								echo '<div class="rtype" style="border-top: 8px solid rgb('.$grid[$gvar][$rvar][1].',';
								echo $grid[$gvar][$rvar][2];
								echo ','.$grid[$gvar][$rvar][3].');">  </div>';
							}
							else if ($_REQUEST['rt'] == 'triangle3') {
								echo '<div class="rtype" style="border-bottom: 8px solid rgb('.$grid[$gvar][$rvar][1].',';
								echo $grid[$gvar][$rvar][2];
								echo ','.$grid[$gvar][$rvar][3].');">  </div>';
							}
							else if ($_REQUEST['rt'] == 'triangle4') {
								echo '<div class="rtype" style="border-bottom: 8px solid rgb('.$grid[$gvar][$rvar][1].',';
								echo $grid[$gvar][$rvar][2];
								echo ','.$grid[$gvar][$rvar][3].');">  </div>';
							}
							else if ($_REQUEST['rt'] == 'randomt') {
								$rrn = rand(1,4);
								if ($rrn == 1) {
									echo '<div style="border-top: 8px solid rgb('.$grid[$gvar][$rvar][1].',';
									echo $grid[$gvar][$rvar][2];
									echo ','.$grid[$gvar][$rvar][3].');	width: 0; height: 0; border-left: 8px solid transparent; float: left;">  </div>';
								}
								else if ($rrn == 2) {
									echo '<div style="border-top: 8px solid rgb('.$grid[$gvar][$rvar][1].',';
									echo $grid[$gvar][$rvar][2];
									echo ','.$grid[$gvar][$rvar][3].');	width: 0; height: 0; border-right: 8px solid transparent; float: left;">  </div>';
								}
								else if ($rrn == 3) {
									echo '<div style="border-bottom: 8px solid rgb('.$grid[$gvar][$rvar][1].',';
									echo $grid[$gvar][$rvar][2];
									echo ','.$grid[$gvar][$rvar][3].');	width: 0; height: 0; border-right: 8px solid transparent; float: left;">  </div>';
								}
								else {
									echo '<div style="border-bottom: 8px solid rgb('.$grid[$gvar][$rvar][1].',';
									echo $grid[$gvar][$rvar][2];
									echo ','.$grid[$gvar][$rvar][3].');	width: 0; height: 0; border-left: 8px solid transparent; float: left;">  </div>';
								}	
							}
							else if ($_REQUEST['rt'] == 'random') {
								$rrn = rand(1,3);
								if ($rrn == 1) {
									echo '<div class="square" style="background:rgb('.$grid[$gvar][$rvar][1].',';
									echo $grid[$gvar][$rvar][2];
									echo ','.$grid[$gvar][$rvar][3].');">  </div>';
								}
								else if ($rrn == 2) {
									echo '<div class="circle" style="background:rgb('.$grid[$gvar][$rvar][1].',';
									echo $grid[$gvar][$rvar][2];
									echo ','.$grid[$gvar][$rvar][3].');">  </div>';
								}
								else {
									echo '<div style="border-top: 8px solid rgb('.$grid[$gvar][$rvar][1].',';
									echo $grid[$gvar][$rvar][2];
									echo ','.$grid[$gvar][$rvar][3].');	width: 0; height: 0; border-left: 8px solid transparent; float: left;">  </div>';
								}	
							}
							//echo ','.$grid[$gvar][$rvar][3].');width:8px;height:8px;float: left;">  </div>';
							$rvar++;
						}
						$gvar++;
					}
					echo '</div>';
					$example++;
				}
			
			}
			?>
    	</div>
        <div class="lholder">
        <?php
		
			if (($_REQUEST['lgrid'] == 1) || ($_REQUEST['submited'] == 0)) {
			
				// Make the large grid
				
				$xgridextent = 127;
				$ygridextent = 65;
				
				$gv = 1;
				
				while ($gv < $ygridextent) {
					$rv = 1;
					
					while ($rv < $xgridextent) {
						$num = rand(1, 8);
						if ($num == 1) {
							$red = rand($r11, $r21);
							$green = rand($r31, $r41);
							$blue = rand($r51, $r61);
							$grid[$gv][$rv] = array();
							$grid[$gv][$rv][1] = $red;
							$grid[$gv][$rv][2] = $green;
							$grid[$gv][$rv][3] = $blue;
						}
						else if ($num == 2) {
							$red = rand($r12, $r22);
							$green = rand($r32, $r42);
							$blue = rand($r52, $r62);
							$grid[$gv][$rv] = array();
							$grid[$gv][$rv][1] = $red;
							$grid[$gv][$rv][2] = $green;
							$grid[$gv][$rv][3] = $blue;
						}
						else if ($num == 3) {
							$red = rand($r13, $r23);
							$green = rand($r33, $r43);
							$blue = rand($r53, $r63);
							$grid[$gv][$rv] = array();
							$grid[$gv][$rv][1] = $red;
							$grid[$gv][$rv][2] = $green;
							$grid[$gv][$rv][3] = $blue;
						}
						else if ($num == 4) {
							$red = rand($r14, $r24);
							$green = rand($r34, $r44);
							$blue = rand($r54, $r64);
							$grid[$gv][$rv] = array();
							$grid[$gv][$rv][1] = $red;
							$grid[$gv][$rv][2] = $green;
							$grid[$gv][$rv][3] = $blue;
						}
						else if ($num == 5) {
							$red = rand($r15, $r25);
							$green = rand($r35, $r45);
							$blue = rand($r55, $r65);
							$grid[$gv][$rv] = array();
							$grid[$gv][$rv][1] = $red;
							$grid[$gv][$rv][2] = $green;
							$grid[$gv][$rv][3] = $blue;
				
						}
						else if ($num == 6) {
							$red = rand($r16, $r26);
							$green = rand($r36, $r46);
							$blue = rand($r56, $r66);
							$grid[$gv][$rv] = array();
							$grid[$gv][$rv][1] = $red;
							$grid[$gv][$rv][2] = $green;
							$grid[$gv][$rv][3] = $blue;
						}
						else if ($num == 7) {
							$red = rand($r17, $r27);
							$green = rand($r37, $r47);
							$blue = rand($r57, $r67);
							$grid[$gv][$rv] = array();
							$grid[$gv][$rv][1] = $red;
							$grid[$gv][$rv][2] = $green;
							$grid[$gv][$rv][3] = $blue;
						}
						else {
							$red = rand($r18, $r28);
							$green = rand($r38, $r48);
							$blue = rand($r58, $r68);
							$grid[$gv][$rv] = array();
							$grid[$gv][$rv][1] = $red;
							$grid[$gv][$rv][2] = $green;
							$grid[$gv][$rv][3] = $blue;
						}
						$rv++;
					}
					$gv++;
				}
		
		 
				$xend = 126;
				$yend = 63;
				$nublines = rand(64,160);
		 
				if ($_REQUEST['lines'] == 'one') {
		
		
					// Line drawing one colour
					
					$linevar = 1;
					//$nublines = rand(3,16);
					
					while ($linevar <= $nublines) {
						$red = rand($r11, $r21);
						$green = rand($r31, $r41);
						$blue = rand($r51, $r61);
						$linesize = rand(3,6);
						$startline = rand(1,$yend);
						$startlinex = rand(1,$xend);
						$grid[$startline][$startlinex][1] = $red;
						$grid[$startline][$startlinex][2] = $green;
						$grid[$startline][$startlinex][3] = $blue;
						$grid[$startline+1][$startlinex][1] = $red;
						$grid[$startline+1][$startlinex][2] = $green;
						$grid[$startline+1][$startlinex][3] = $blue;
						$grid[$startline+2][$startlinex][1] = $red;
						$grid[$startline+2][$startlinex][2] = $green;
						$grid[$startline+2][$startlinex][3] = $blue;
						if ($linesize > 3) {
							$grid[$startline+3][$startlinex][1] = $red;
							$grid[$startline+3][$startlinex][2] = $green;
							$grid[$startline+3][$startlinex][3] = $blue;
						}
						if ($linesize > 4) {
							$grid[$startline+4][$startlinex][1] = $red;
							$grid[$startline+4][$startlinex][2] = $green;
							$grid[$startline+4][$startlinex][3] = $blue;
						}
						if ($linesize > 5) {
							$grid[$startline+5][$startlinex][1] = $red;
							$grid[$startline+5][$startlinex][2] = $green;
							$grid[$startline+5][$startlinex][3] = $blue;
						}
						$linevar++;
					
					}
				
				} else if ($_REQUEST['lines'] == 'random') {
				
				
					// Line drawing random colours
					
					$linevar = 1;
					//$nublines = rand(3,16);
					
					while ($linevar <= $nublines) {
						$num = rand(1, 8);
						if ($num == 1) {
							$red = rand($r11, $r21);
							$green = rand($r31, $r41);
							$blue = rand($r51, $r61);
							$linesize = rand(3,6);
							$startline = rand(1,$yend);
							$startlinex = rand(1,$xend);
							$grid[$startline][$startlinex][1] = $red;
							$grid[$startline][$startlinex][2] = $green;
							$grid[$startline][$startlinex][3] = $blue;
							$grid[$startline+1][$startlinex][1] = $red;
							$grid[$startline+1][$startlinex][2] = $green;
							$grid[$startline+1][$startlinex][3] = $blue;
							$grid[$startline+2][$startlinex][1] = $red;
							$grid[$startline+2][$startlinex][2] = $green;
							$grid[$startline+2][$startlinex][3] = $blue;
							if ($linesize > 3) {
								$grid[$startline+3][$startlinex][1] = $red;
								$grid[$startline+3][$startlinex][2] = $green;
								$grid[$startline+3][$startlinex][3] = $blue;
							}
							if ($linesize > 4) {
								$grid[$startline+4][$startlinex][1] = $red;
								$grid[$startline+4][$startlinex][2] = $green;
								$grid[$startline+4][$startlinex][3] = $blue;
							}
							if ($linesize > 5) {
								$grid[$startline+5][$startlinex][1] = $red;
								$grid[$startline+5][$startlinex][2] = $green;
								$grid[$startline+5][$startlinex][3] = $blue;
							}
						}
						else if ($num == 2) {
							$red = rand($r12, $r22);
							$green = rand($r32, $r42);
							$blue = rand($r52, $r62);
							$linesize = rand(3,6);
							$startline = rand(1,$yend);
							$startlinex = rand(1,$xend);
							$grid[$startline][$startlinex][1] = $red;
							$grid[$startline][$startlinex][2] = $green;
							$grid[$startline][$startlinex][3] = $blue;
							$grid[$startline+1][$startlinex][1] = $red;
							$grid[$startline+1][$startlinex][2] = $green;
							$grid[$startline+1][$startlinex][3] = $blue;
							$grid[$startline+2][$startlinex][1] = $red;
							$grid[$startline+2][$startlinex][2] = $green;
							$grid[$startline+2][$startlinex][3] = $blue;
							if ($linesize > 3) {
								$grid[$startline+3][$startlinex][1] = $red;
								$grid[$startline+3][$startlinex][2] = $green;
								$grid[$startline+3][$startlinex][3] = $blue;
							}
							if ($linesize > 4) {
								$grid[$startline+4][$startlinex][1] = $red;
								$grid[$startline+4][$startlinex][2] = $green;
								$grid[$startline+4][$startlinex][3] = $blue;
							}
							if ($linesize > 5) {
								$grid[$startline+5][$startlinex][1] = $red;
								$grid[$startline+5][$startlinex][2] = $green;
								$grid[$startline+5][$startlinex][3] = $blue;
							}
						}
						else if ($num == 3) {
							$red = rand($r13, $r23);
							$green = rand($r33, $r43);
							$blue = rand($r53, $r63);
							$linesize = rand(3,6);
							$startline = rand(1,$yend);
							$startlinex = rand(1,$xend);
							$grid[$startline][$startlinex][1] = $red;
							$grid[$startline][$startlinex][2] = $green;
							$grid[$startline][$startlinex][3] = $blue;
							$grid[$startline+1][$startlinex][1] = $red;
							$grid[$startline+1][$startlinex][2] = $green;
							$grid[$startline+1][$startlinex][3] = $blue;
							$grid[$startline+2][$startlinex][1] = $red;
							$grid[$startline+2][$startlinex][2] = $green;
							$grid[$startline+2][$startlinex][3] = $blue;
							if ($linesize > 3) {
								$grid[$startline+3][$startlinex][1] = $red;
								$grid[$startline+3][$startlinex][2] = $green;
								$grid[$startline+3][$startlinex][3] = $blue;
							}
							if ($linesize > 4) {
								$grid[$startline+4][$startlinex][1] = $red;
								$grid[$startline+4][$startlinex][2] = $green;
								$grid[$startline+4][$startlinex][3] = $blue;
							}
							if ($linesize > 5) {
								$grid[$startline+5][$startlinex][1] = $red;
								$grid[$startline+5][$startlinex][2] = $green;
								$grid[$startline+5][$startlinex][3] = $blue;
							}
						}
						else if ($num == 4) {
							$red = rand($r14, $r24);
							$green = rand($r34, $r44);
							$blue = rand($r54, $r64);
							$linesize = rand(3,6);
							$startline = rand(1,$yend);
							$startlinex = rand(1,$xend);
							$grid[$startline][$startlinex][1] = $red;
							$grid[$startline][$startlinex][2] = $green;
							$grid[$startline][$startlinex][3] = $blue;
							$grid[$startline+1][$startlinex][1] = $red;
							$grid[$startline+1][$startlinex][2] = $green;
							$grid[$startline+1][$startlinex][3] = $blue;
							$grid[$startline+2][$startlinex][1] = $red;
							$grid[$startline+2][$startlinex][2] = $green;
							$grid[$startline+2][$startlinex][3] = $blue;
							if ($linesize > 3) {
								$grid[$startline+3][$startlinex][1] = $red;
								$grid[$startline+3][$startlinex][2] = $green;
								$grid[$startline+3][$startlinex][3] = $blue;
							}
							if ($linesize > 4) {
								$grid[$startline+4][$startlinex][1] = $red;
								$grid[$startline+4][$startlinex][2] = $green;
								$grid[$startline+4][$startlinex][3] = $blue;
							}
							if ($linesize > 5) {
								$grid[$startline+5][$startlinex][1] = $red;
								$grid[$startline+5][$startlinex][2] = $green;
								$grid[$startline+5][$startlinex][3] = $blue;
							}
						}
						else if ($num == 5) {
							$red = rand($r15, $r25);
							$green = rand($r35, $r45);
							$blue = rand($r55, $r65);
							$linesize = rand(3,6);
							$startline = rand(1,$yend);
							$startlinex = rand(1,$xend);
							$grid[$startline][$startlinex][1] = $red;
							$grid[$startline][$startlinex][2] = $green;
							$grid[$startline][$startlinex][3] = $blue;
							$grid[$startline+1][$startlinex][1] = $red;
							$grid[$startline+1][$startlinex][2] = $green;
							$grid[$startline+1][$startlinex][3] = $blue;
							$grid[$startline+2][$startlinex][1] = $red;
							$grid[$startline+2][$startlinex][2] = $green;
							$grid[$startline+2][$startlinex][3] = $blue;
							if ($linesize > 3) {
								$grid[$startline+3][$startlinex][1] = $red;
								$grid[$startline+3][$startlinex][2] = $green;
								$grid[$startline+3][$startlinex][3] = $blue;
							}
							if ($linesize > 4) {
								$grid[$startline+4][$startlinex][1] = $red;
								$grid[$startline+4][$startlinex][2] = $green;
								$grid[$startline+4][$startlinex][3] = $blue;
							}
							if ($linesize > 5) {
								$grid[$startline+5][$startlinex][1] = $red;
								$grid[$startline+5][$startlinex][2] = $green;
								$grid[$startline+5][$startlinex][3] = $blue;
							}
				
						}
						else if ($num == 6) {
							$red = rand($r16, $r26);
							$green = rand($r36, $r46);
							$blue = rand($r56, $r66);
							$linesize = rand(3,6);
							$startline = rand(1,$yend);
							$startlinex = rand(1,$xend);
							$grid[$startline][$startlinex][1] = $red;
							$grid[$startline][$startlinex][2] = $green;
							$grid[$startline][$startlinex][3] = $blue;
							$grid[$startline+1][$startlinex][1] = $red;
							$grid[$startline+1][$startlinex][2] = $green;
							$grid[$startline+1][$startlinex][3] = $blue;
							$grid[$startline+2][$startlinex][1] = $red;
							$grid[$startline+2][$startlinex][2] = $green;
							$grid[$startline+2][$startlinex][3] = $blue;
							if ($linesize > 3) {
								$grid[$startline+3][$startlinex][1] = $red;
								$grid[$startline+3][$startlinex][2] = $green;
								$grid[$startline+3][$startlinex][3] = $blue;
							}
							if ($linesize > 4) {
								$grid[$startline+4][$startlinex][1] = $red;
								$grid[$startline+4][$startlinex][2] = $green;
								$grid[$startline+4][$startlinex][3] = $blue;
							}
							if ($linesize > 5) {
								$grid[$startline+5][$startlinex][1] = $red;
								$grid[$startline+5][$startlinex][2] = $green;
								$grid[$startline+5][$startlinex][3] = $blue;
							}
						}
						else if ($num == 7) {
							$red = rand($r17, $r27);
							$green = rand($r37, $r47);
							$blue = rand($r57, $r67);
							$linesize = rand(3,6);
							$startline = rand(1,$yend);
							$startlinex = rand(1,$xend);
							$grid[$startline][$startlinex][1] = $red;
							$grid[$startline][$startlinex][2] = $green;
							$grid[$startline][$startlinex][3] = $blue;
							$grid[$startline+1][$startlinex][1] = $red;
							$grid[$startline+1][$startlinex][2] = $green;
							$grid[$startline+1][$startlinex][3] = $blue;
							$grid[$startline+2][$startlinex][1] = $red;
							$grid[$startline+2][$startlinex][2] = $green;
							$grid[$startline+2][$startlinex][3] = $blue;
							if ($linesize > 3) {
								$grid[$startline+3][$startlinex][1] = $red;
								$grid[$startline+3][$startlinex][2] = $green;
								$grid[$startline+3][$startlinex][3] = $blue;
							}
							if ($linesize > 4) {
								$grid[$startline+4][$startlinex][1] = $red;
								$grid[$startline+4][$startlinex][2] = $green;
								$grid[$startline+4][$startlinex][3] = $blue;
							}
							if ($linesize > 5) {
								$grid[$startline+5][$startlinex][1] = $red;
								$grid[$startline+5][$startlinex][2] = $green;
								$grid[$startline+5][$startlinex][3] = $blue;
							}
						}
						else {
							$red = rand($r18, $r28);
							$green = rand($r38, $r48);
							$blue = rand($r58, $r68);
							$linesize = rand(3,6);
							$startline = rand(1,$yend);
							$startlinex = rand(1,$xend);
							$grid[$startline][$startlinex][1] = $red;
							$grid[$startline][$startlinex][2] = $green;
							$grid[$startline][$startlinex][3] = $blue;
							$grid[$startline+1][$startlinex][1] = $red;
							$grid[$startline+1][$startlinex][2] = $green;
							$grid[$startline+1][$startlinex][3] = $blue;
							$grid[$startline+2][$startlinex][1] = $red;
							$grid[$startline+2][$startlinex][2] = $green;
							$grid[$startline+2][$startlinex][3] = $blue;
							if ($linesize > 3) {
								$grid[$startline+3][$startlinex][1] = $red;
								$grid[$startline+3][$startlinex][2] = $green;
								$grid[$startline+3][$startlinex][3] = $blue;
							}
							if ($linesize > 4) {
								$grid[$startline+4][$startlinex][1] = $red;
								$grid[$startline+4][$startlinex][2] = $green;
								$grid[$startline+4][$startlinex][3] = $blue;
							}
							if ($linesize > 5) {
								$grid[$startline+5][$startlinex][1] = $red;
								$grid[$startline+5][$startlinex][2] = $green;
								$grid[$startline+5][$startlinex][3] = $blue;
							}
						}
						$linevar++;
					
					}
				
				}
			
				$xend = 126;
				$yend = 63;
				$nublines = rand(64,160);
			
			
				if ($_REQUEST['hlines'] == 'one') {
		
		
					// Line drawing one colour
					
					$linevar = 1;
					//$nublines = rand(3,16);
					
					while ($linevar <= $nublines) {
						$red = rand($r11, $r21);
						$green = rand($r31, $r41);
						$blue = rand($r51, $r61);
						$linesize = rand(3,6);
						$startline = rand(1,$yend);
						$startlinex = rand(1,$xend);
						$grid[$startline][$startlinex][1] = $red;
						$grid[$startline][$startlinex][2] = $green;
						$grid[$startline][$startlinex][3] = $blue;
						$grid[$startline][$startlinex+1][1] = $red;
						$grid[$startline][$startlinex+1][2] = $green;
						$grid[$startline][$startlinex+1][3] = $blue;
						$grid[$startline][$startlinex+2][1] = $red;
						$grid[$startline][$startlinex+2][2] = $green;
						$grid[$startline][$startlinex+2][3] = $blue;
						if ($linesize > 3) {
							$grid[$startline][$startlinex+3][1] = $red;
							$grid[$startline][$startlinex+3][2] = $green;
							$grid[$startline][$startlinex+3][3] = $blue;
						}
						if ($linesize > 4) {
							$grid[$startline][$startlinex+4][1] = $red;
							$grid[$startline][$startlinex+4][2] = $green;
							$grid[$startline][$startlinex+4][3] = $blue;
						}
						if ($linesize > 5) {
							$grid[$startline][$startlinex+5][1] = $red;
							$grid[$startline][$startlinex+5][2] = $green;
							$grid[$startline][$startlinex+5][3] = $blue;
						}
						$linevar++;
					
					}
				
				} else if ($_REQUEST['hlines'] == 'random') {
				
				
					// Line drawing random colours
					
					$linevar = 1;
					//$nublines = rand(3,16);
					
					while ($linevar <= $nublines) {
						$num = rand(1, 8);
						if ($num == 1) {
							$red = rand($r11, $r21);
							$green = rand($r31, $r41);
							$blue = rand($r51, $r61);
							$linesize = rand(3,6);
							$startline = rand(1,$yend);
							$startlinex = rand(1,$xend);
							$grid[$startline][$startlinex][1] = $red;
							$grid[$startline][$startlinex][2] = $green;
							$grid[$startline][$startlinex][3] = $blue;
							$grid[$startline][$startlinex+1][1] = $red;
							$grid[$startline][$startlinex+1][2] = $green;
							$grid[$startline][$startlinex+1][3] = $blue;
							$grid[$startline][$startlinex+2][1] = $red;
							$grid[$startline][$startlinex+2][2] = $green;
							$grid[$startline][$startlinex+2][3] = $blue;
							if ($linesize > 3) {
								$grid[$startline][$startlinex+3][1] = $red;
								$grid[$startline][$startlinex+3][2] = $green;
								$grid[$startline][$startlinex+3][3] = $blue;
							}
							if ($linesize > 4) {
								$grid[$startline][$startlinex+4][1] = $red;
								$grid[$startline][$startlinex+4][2] = $green;
								$grid[$startline][$startlinex+4][3] = $blue;
							}
							if ($linesize > 5) {
								$grid[$startline][$startlinex+5][1] = $red;
								$grid[$startline][$startlinex+5][2] = $green;
								$grid[$startline][$startlinex+5][3] = $blue;
							}
						}
						else if ($num == 2) {
							$red = rand($r12, $r22);
							$green = rand($r32, $r42);
							$blue = rand($r52, $r62);
							$linesize = rand(3,6);
							$startline = rand(1,$yend);
							$startlinex = rand(1,$xend);
							$grid[$startline][$startlinex][1] = $red;
							$grid[$startline][$startlinex][2] = $green;
							$grid[$startline][$startlinex][3] = $blue;
							$grid[$startline][$startlinex+1][1] = $red;
							$grid[$startline][$startlinex+1][2] = $green;
							$grid[$startline][$startlinex+1][3] = $blue;
							$grid[$startline][$startlinex+2][1] = $red;
							$grid[$startline][$startlinex+2][2] = $green;
							$grid[$startline][$startlinex+2][3] = $blue;
							if ($linesize > 3) {
								$grid[$startline][$startlinex+3][1] = $red;
								$grid[$startline][$startlinex+3][2] = $green;
								$grid[$startline][$startlinex+3][3] = $blue;
							}
							if ($linesize > 4) {
								$grid[$startline][$startlinex+4][1] = $red;
								$grid[$startline][$startlinex+4][2] = $green;
								$grid[$startline][$startlinex+4][3] = $blue;
							}
							if ($linesize > 5) {
								$grid[$startline][$startlinex+5][1] = $red;
								$grid[$startline][$startlinex+5][2] = $green;
								$grid[$startline][$startlinex+5][3] = $blue;
							}
						}
						else if ($num == 3) {
							$red = rand($r13, $r23);
							$green = rand($r33, $r43);
							$blue = rand($r53, $r63);
							$linesize = rand(3,6);
							$startline = rand(1,$yend);
							$startlinex = rand(1,$xend);
							$grid[$startline][$startlinex][1] = $red;
							$grid[$startline][$startlinex][2] = $green;
							$grid[$startline][$startlinex][3] = $blue;
							$grid[$startline][$startlinex+1][1] = $red;
							$grid[$startline][$startlinex+1][2] = $green;
							$grid[$startline][$startlinex+1][3] = $blue;
							$grid[$startline][$startlinex+2][1] = $red;
							$grid[$startline][$startlinex+2][2] = $green;
							$grid[$startline][$startlinex+2][3] = $blue;
							if ($linesize > 3) {
								$grid[$startline][$startlinex+3][1] = $red;
								$grid[$startline][$startlinex+3][2] = $green;
								$grid[$startline][$startlinex+3][3] = $blue;
							}
							if ($linesize > 4) {
								$grid[$startline][$startlinex+4][1] = $red;
								$grid[$startline][$startlinex+4][2] = $green;
								$grid[$startline][$startlinex+4][3] = $blue;
							}
							if ($linesize > 5) {
								$grid[$startline][$startlinex+5][1] = $red;
								$grid[$startline][$startlinex+5][2] = $green;
								$grid[$startline][$startlinex+5][3] = $blue;
							}
						}
						else if ($num == 4) {
							$red = rand($r14, $r24);
							$green = rand($r34, $r44);
							$blue = rand($r54, $r64);
							$linesize = rand(3,6);
							$startline = rand(1,$yend);
							$startlinex = rand(1,$xend);
							$grid[$startline][$startlinex][1] = $red;
							$grid[$startline][$startlinex][2] = $green;
							$grid[$startline][$startlinex][3] = $blue;
							$grid[$startline][$startlinex+1][1] = $red;
							$grid[$startline][$startlinex+1][2] = $green;
							$grid[$startline][$startlinex+1][3] = $blue;
							$grid[$startline][$startlinex+2][1] = $red;
							$grid[$startline][$startlinex+2][2] = $green;
							$grid[$startline][$startlinex+2][3] = $blue;
							if ($linesize > 3) {
								$grid[$startline][$startlinex+3][1] = $red;
								$grid[$startline][$startlinex+3][2] = $green;
								$grid[$startline][$startlinex+3][3] = $blue;
							}
							if ($linesize > 4) {
								$grid[$startline][$startlinex+4][1] = $red;
								$grid[$startline][$startlinex+4][2] = $green;
								$grid[$startline][$startlinex+4][3] = $blue;
							}
							if ($linesize > 5) {
								$grid[$startline][$startlinex+5][1] = $red;
								$grid[$startline][$startlinex+5][2] = $green;
								$grid[$startline][$startlinex+5][3] = $blue;
							}
						}
						else if ($num == 5) {
							$red = rand($r15, $r25);
							$green = rand($r35, $r45);
							$blue = rand($r55, $r65);
							$linesize = rand(3,6);
							$startline = rand(1,$yend);
							$startlinex = rand(1,$xend);
							$grid[$startline][$startlinex][1] = $red;
							$grid[$startline][$startlinex][2] = $green;
							$grid[$startline][$startlinex][3] = $blue;
							$grid[$startline][$startlinex+1][1] = $red;
							$grid[$startline][$startlinex+1][2] = $green;
							$grid[$startline][$startlinex+1][3] = $blue;
							$grid[$startline][$startlinex+2][1] = $red;
							$grid[$startline][$startlinex+2][2] = $green;
							$grid[$startline][$startlinex+2][3] = $blue;
							if ($linesize > 3) {
								$grid[$startline][$startlinex+3][1] = $red;
								$grid[$startline][$startlinex+3][2] = $green;
								$grid[$startline][$startlinex+3][3] = $blue;
							}
							if ($linesize > 4) {
								$grid[$startline][$startlinex+4][1] = $red;
								$grid[$startline][$startlinex+4][2] = $green;
								$grid[$startline][$startlinex+4][3] = $blue;
							}
							if ($linesize > 5) {
								$grid[$startline][$startlinex+5][1] = $red;
								$grid[$startline][$startlinex+5][2] = $green;
								$grid[$startline][$startlinex+5][3] = $blue;
							}
				
						}
						else if ($num == 6) {
							$red = rand($r16, $r26);
							$green = rand($r36, $r46);
							$blue = rand($r56, $r66);
							$linesize = rand(3,6);
							$startline = rand(1,$yend);
							$startlinex = rand(1,$xend);
							$grid[$startline][$startlinex][1] = $red;
							$grid[$startline][$startlinex][2] = $green;
							$grid[$startline][$startlinex][3] = $blue;
							$grid[$startline][$startlinex+1][1] = $red;
							$grid[$startline][$startlinex+1][2] = $green;
							$grid[$startline][$startlinex+1][3] = $blue;
							$grid[$startline][$startlinex+2][1] = $red;
							$grid[$startline][$startlinex+2][2] = $green;
							$grid[$startline][$startlinex+2][3] = $blue;
							if ($linesize > 3) {
								$grid[$startline][$startlinex+3][1] = $red;
								$grid[$startline][$startlinex+3][2] = $green;
								$grid[$startline][$startlinex+3][3] = $blue;
							}
							if ($linesize > 4) {
								$grid[$startline][$startlinex+4][1] = $red;
								$grid[$startline][$startlinex+4][2] = $green;
								$grid[$startline][$startlinex+4][3] = $blue;
							}
							if ($linesize > 5) {
								$grid[$startline][$startlinex+5][1] = $red;
								$grid[$startline][$startlinex+5][2] = $green;
								$grid[$startline][$startlinex+5][3] = $blue;
							}
						}
						else if ($num == 7) {
							$red = rand($r17, $r27);
							$green = rand($r37, $r47);
							$blue = rand($r57, $r67);
							$linesize = rand(3,6);
							$startline = rand(1,$yend);
							$startlinex = rand(1,$xend);
							$grid[$startline][$startlinex][1] = $red;
							$grid[$startline][$startlinex][2] = $green;
							$grid[$startline][$startlinex][3] = $blue;
							$grid[$startline][$startlinex+1][1] = $red;
							$grid[$startline][$startlinex+1][2] = $green;
							$grid[$startline][$startlinex+1][3] = $blue;
							$grid[$startline][$startlinex+2][1] = $red;
							$grid[$startline][$startlinex+2][2] = $green;
							$grid[$startline][$startlinex+2][3] = $blue;
							if ($linesize > 3) {
								$grid[$startline][$startlinex+3][1] = $red;
								$grid[$startline][$startlinex+3][2] = $green;
								$grid[$startline][$startlinex+3][3] = $blue;
							}
							if ($linesize > 4) {
								$grid[$startline][$startlinex+4][1] = $red;
								$grid[$startline][$startlinex+4][2] = $green;
								$grid[$startline][$startlinex+4][3] = $blue;
							}
							if ($linesize > 5) {
								$grid[$startline][$startlinex+5][1] = $red;
								$grid[$startline][$startlinex+5][2] = $green;
								$grid[$startline][$startlinex+5][3] = $blue;
							}
						}
						else {
							$red = rand($r18, $r28);
							$green = rand($r38, $r48);
							$blue = rand($r58, $r68);
							$linesize = rand(3,6);
							$startline = rand(1,$yend);
							$startlinex = rand(1,$xend);
							$grid[$startline][$startlinex][1] = $red;
							$grid[$startline][$startlinex][2] = $green;
							$grid[$startline][$startlinex][3] = $blue;
							$grid[$startline][$startlinex+1][1] = $red;
							$grid[$startline][$startlinex+1][2] = $green;
							$grid[$startline][$startlinex+1][3] = $blue;
							$grid[$startline][$startlinex+2][1] = $red;
							$grid[$startline][$startlinex+2][2] = $green;
							$grid[$startline][$startlinex+2][3] = $blue;
							if ($linesize > 3) {
								$grid[$startline][$startlinex+3][1] = $red;
								$grid[$startline][$startlinex+3][2] = $green;
								$grid[$startline][$startlinex+3][3] = $blue;
							}
							if ($linesize > 4) {
								$grid[$startline][$startlinex+4][1] = $red;
								$grid[$startline][$startlinex+4][2] = $green;
								$grid[$startline][$startlinex+4][3] = $blue;
							}
							if ($linesize > 5) {
								$grid[$startline][$startlinex+5][1] = $red;
								$grid[$startline][$startlinex+5][2] = $green;
								$grid[$startline][$startlinex+5][3] = $blue;
							}
						}
						$linevar++;
					
					}
				
				}
				
				if ($_REQUEST['crosses'] == 'one') {
		
		
					// Cross drawing one colour
					
					$linevar = 1;
					//$nublines = rand(3,16);
					
					while ($linevar <= $nublines) {
						$red = rand($r11, $r21);
						$green = rand($r31, $r41);
						$blue = rand($r51, $r61);
						$linesize = rand(3,6);
						$startline = rand(1,$yend);
						$startlinex = rand(1,$xend);
						$grid[$startline][$startlinex][1] = $red;
						$grid[$startline][$startlinex][2] = $green;
						$grid[$startline][$startlinex][3] = $blue;
						$grid[$startline+1][$startlinex][1] = $red;
						$grid[$startline+1][$startlinex][2] = $green;
						$grid[$startline+1][$startlinex][3] = $blue;
						$grid[$startline-1][$startlinex][1] = $red;
						$grid[$startline-1][$startlinex][2] = $green;
						$grid[$startline-1][$startlinex][3] = $blue;
						if ($linesize > 3) {
							$grid[$startline+2][$startlinex][1] = $red;
							$grid[$startline+2][$startlinex][2] = $green;
							$grid[$startline+2][$startlinex][3] = $blue;
							$grid[$startline-2][$startlinex][1] = $red;
							$grid[$startline-2][$startlinex][2] = $green;
							$grid[$startline-2][$startlinex][3] = $blue;
						}
						if ($linesize > 4) {
							$grid[$startline+3][$startlinex][1] = $red;
							$grid[$startline+3][$startlinex][2] = $green;
							$grid[$startline+3][$startlinex][3] = $blue;
							$grid[$startline-3][$startlinex][1] = $red;
							$grid[$startline-3][$startlinex][2] = $green;
							$grid[$startline-3][$startlinex][3] = $blue;
						}
						if ($linesize > 5) {
							$grid[$startline+4][$startlinex][1] = $red;
							$grid[$startline+4][$startlinex][2] = $green;
							$grid[$startline+4][$startlinex][3] = $blue;
							$grid[$startline-4][$startlinex][1] = $red;
							$grid[$startline-4][$startlinex][2] = $green;
							$grid[$startline-4][$startlinex][3] = $blue;
						}
						$grid[$startline][$startlinex+1][1] = $red;
						$grid[$startline][$startlinex+1][2] = $green;
						$grid[$startline][$startlinex+1][3] = $blue;
						$grid[$startline][$startlinex-1][1] = $red;
						$grid[$startline][$startlinex-1][2] = $green;
						$grid[$startline][$startlinex-1][3] = $blue;
						if ($linesize > 3) {
							$grid[$startline][$startlinex+2][1] = $red;
							$grid[$startline][$startlinex+2][2] = $green;
							$grid[$startline][$startlinex+2][3] = $blue;
							$grid[$startline][$startlinex-2][1] = $red;
							$grid[$startline][$startlinex-2][2] = $green;
							$grid[$startline][$startlinex-2][3] = $blue;
						}
						if ($linesize > 4) {
							$grid[$startline][$startlinex+3][1] = $red;
							$grid[$startline][$startlinex+3][2] = $green;
							$grid[$startline][$startlinex+3][3] = $blue;
							$grid[$startline][$startlinex-3][1] = $red;
							$grid[$startline][$startlinex-3][2] = $green;
							$grid[$startline][$startlinex-3][3] = $blue;
						}
						if ($linesize > 5) {
							$grid[$startline][$startlinex+4][1] = $red;
							$grid[$startline][$startlinex+4][2] = $green;
							$grid[$startline][$startlinex+4][3] = $blue;
							$grid[$startline][$startlinex-4][1] = $red;
							$grid[$startline][$startlinex-4][2] = $green;
							$grid[$startline][$startlinex-4][3] = $blue;
						}
						$linevar++;
					
					}
					
				} else if ($_REQUEST['crosses'] == 'random') {
				
				
					// Cross drawing random colours
					
					$linevar = 1;
					//$nublines = rand(3,16);
					
					while ($linevar <= $nublines) {
						$num = rand(1, 8);
						if ($num == 1) {
							$red = rand($r11, $r21);
							$green = rand($r31, $r41);
							$blue = rand($r51, $r61);
							$linesize = rand(3,6);
							$startline = rand(1,$yend);
							$startlinex = rand(1,$xend);
							$grid[$startline][$startlinex][1] = $red;
							$grid[$startline][$startlinex][2] = $green;
							$grid[$startline][$startlinex][3] = $blue;
							$grid[$startline+1][$startlinex][1] = $red;
							$grid[$startline+1][$startlinex][2] = $green;
							$grid[$startline+1][$startlinex][3] = $blue;
							$grid[$startline-1][$startlinex][1] = $red;
							$grid[$startline-1][$startlinex][2] = $green;
							$grid[$startline-1][$startlinex][3] = $blue;
							if ($linesize > 3) {
								$grid[$startline+2][$startlinex][1] = $red;
								$grid[$startline+2][$startlinex][2] = $green;
								$grid[$startline+2][$startlinex][3] = $blue;
								$grid[$startline-2][$startlinex][1] = $red;
								$grid[$startline-2][$startlinex][2] = $green;
								$grid[$startline-2][$startlinex][3] = $blue;
							}
							if ($linesize > 4) {
								$grid[$startline+3][$startlinex][1] = $red;
								$grid[$startline+3][$startlinex][2] = $green;
								$grid[$startline+3][$startlinex][3] = $blue;
								$grid[$startline-3][$startlinex][1] = $red;
								$grid[$startline-3][$startlinex][2] = $green;
								$grid[$startline-3][$startlinex][3] = $blue;
							}
							if ($linesize > 5) {
								$grid[$startline+4][$startlinex][1] = $red;
								$grid[$startline+4][$startlinex][2] = $green;
								$grid[$startline+4][$startlinex][3] = $blue;
								$grid[$startline-4][$startlinex][1] = $red;
								$grid[$startline-4][$startlinex][2] = $green;
								$grid[$startline-4][$startlinex][3] = $blue;
							}
							$grid[$startline][$startlinex+1][1] = $red;
							$grid[$startline][$startlinex+1][2] = $green;
							$grid[$startline][$startlinex+1][3] = $blue;
							$grid[$startline][$startlinex-1][1] = $red;
							$grid[$startline][$startlinex-1][2] = $green;
							$grid[$startline][$startlinex-1][3] = $blue;
							if ($linesize > 3) {
								$grid[$startline][$startlinex+2][1] = $red;
								$grid[$startline][$startlinex+2][2] = $green;
								$grid[$startline][$startlinex+2][3] = $blue;
								$grid[$startline][$startlinex-2][1] = $red;
								$grid[$startline][$startlinex-2][2] = $green;
								$grid[$startline][$startlinex-2][3] = $blue;
							}
							if ($linesize > 4) {
								$grid[$startline][$startlinex+3][1] = $red;
								$grid[$startline][$startlinex+3][2] = $green;
								$grid[$startline][$startlinex+3][3] = $blue;
								$grid[$startline][$startlinex-3][1] = $red;
								$grid[$startline][$startlinex-3][2] = $green;
								$grid[$startline][$startlinex-3][3] = $blue;
							}
							if ($linesize > 5) {
								$grid[$startline][$startlinex+4][1] = $red;
								$grid[$startline][$startlinex+4][2] = $green;
								$grid[$startline][$startlinex+4][3] = $blue;
								$grid[$startline][$startlinex-4][1] = $red;
								$grid[$startline][$startlinex-4][2] = $green;
								$grid[$startline][$startlinex-4][3] = $blue;
							}
						}
						else if ($num == 2) {
							$red = rand($r12, $r22);
							$green = rand($r32, $r42);
							$blue = rand($r52, $r62);
							$linesize = rand(3,6);
							$startline = rand(1,$yend);
							$startlinex = rand(1,$xend);
							$grid[$startline][$startlinex][1] = $red;
							$grid[$startline][$startlinex][2] = $green;
							$grid[$startline][$startlinex][3] = $blue;
							$grid[$startline+1][$startlinex][1] = $red;
							$grid[$startline+1][$startlinex][2] = $green;
							$grid[$startline+1][$startlinex][3] = $blue;
							$grid[$startline-1][$startlinex][1] = $red;
							$grid[$startline-1][$startlinex][2] = $green;
							$grid[$startline-1][$startlinex][3] = $blue;
							if ($linesize > 3) {
								$grid[$startline+2][$startlinex][1] = $red;
								$grid[$startline+2][$startlinex][2] = $green;
								$grid[$startline+2][$startlinex][3] = $blue;
								$grid[$startline-2][$startlinex][1] = $red;
								$grid[$startline-2][$startlinex][2] = $green;
								$grid[$startline-2][$startlinex][3] = $blue;
							}
							if ($linesize > 4) {
								$grid[$startline+3][$startlinex][1] = $red;
								$grid[$startline+3][$startlinex][2] = $green;
								$grid[$startline+3][$startlinex][3] = $blue;
								$grid[$startline-3][$startlinex][1] = $red;
								$grid[$startline-3][$startlinex][2] = $green;
								$grid[$startline-3][$startlinex][3] = $blue;
							}
							if ($linesize > 5) {
								$grid[$startline+4][$startlinex][1] = $red;
								$grid[$startline+4][$startlinex][2] = $green;
								$grid[$startline+4][$startlinex][3] = $blue;
								$grid[$startline-4][$startlinex][1] = $red;
								$grid[$startline-4][$startlinex][2] = $green;
								$grid[$startline-4][$startlinex][3] = $blue;
							}
							$grid[$startline][$startlinex+1][1] = $red;
							$grid[$startline][$startlinex+1][2] = $green;
							$grid[$startline][$startlinex+1][3] = $blue;
							$grid[$startline][$startlinex-1][1] = $red;
							$grid[$startline][$startlinex-1][2] = $green;
							$grid[$startline][$startlinex-1][3] = $blue;
							if ($linesize > 3) {
								$grid[$startline][$startlinex+2][1] = $red;
								$grid[$startline][$startlinex+2][2] = $green;
								$grid[$startline][$startlinex+2][3] = $blue;
								$grid[$startline][$startlinex-2][1] = $red;
								$grid[$startline][$startlinex-2][2] = $green;
								$grid[$startline][$startlinex-2][3] = $blue;
							}
							if ($linesize > 4) {
								$grid[$startline][$startlinex+3][1] = $red;
								$grid[$startline][$startlinex+3][2] = $green;
								$grid[$startline][$startlinex+3][3] = $blue;
								$grid[$startline][$startlinex-3][1] = $red;
								$grid[$startline][$startlinex-3][2] = $green;
								$grid[$startline][$startlinex-3][3] = $blue;
							}
							if ($linesize > 5) {
								$grid[$startline][$startlinex+4][1] = $red;
								$grid[$startline][$startlinex+4][2] = $green;
								$grid[$startline][$startlinex+4][3] = $blue;
								$grid[$startline][$startlinex-4][1] = $red;
								$grid[$startline][$startlinex-4][2] = $green;
								$grid[$startline][$startlinex-4][3] = $blue;
							}
		
						}
						else if ($num == 3) {
							$red = rand($r13, $r23);
							$green = rand($r33, $r43);
							$blue = rand($r53, $r63);
							$linesize = rand(3,6);
							$startline = rand(1,$yend);
							$startlinex = rand(1,$xend);
							$grid[$startline][$startlinex][1] = $red;
							$grid[$startline][$startlinex][2] = $green;
							$grid[$startline][$startlinex][3] = $blue;
							$grid[$startline+1][$startlinex][1] = $red;
							$grid[$startline+1][$startlinex][2] = $green;
							$grid[$startline+1][$startlinex][3] = $blue;
							$grid[$startline-1][$startlinex][1] = $red;
							$grid[$startline-1][$startlinex][2] = $green;
							$grid[$startline-1][$startlinex][3] = $blue;
							if ($linesize > 3) {
								$grid[$startline+2][$startlinex][1] = $red;
								$grid[$startline+2][$startlinex][2] = $green;
								$grid[$startline+2][$startlinex][3] = $blue;
								$grid[$startline-2][$startlinex][1] = $red;
								$grid[$startline-2][$startlinex][2] = $green;
								$grid[$startline-2][$startlinex][3] = $blue;
							}
							if ($linesize > 4) {
								$grid[$startline+3][$startlinex][1] = $red;
								$grid[$startline+3][$startlinex][2] = $green;
								$grid[$startline+3][$startlinex][3] = $blue;
								$grid[$startline-3][$startlinex][1] = $red;
								$grid[$startline-3][$startlinex][2] = $green;
								$grid[$startline-3][$startlinex][3] = $blue;
							}
							if ($linesize > 5) {
								$grid[$startline+4][$startlinex][1] = $red;
								$grid[$startline+4][$startlinex][2] = $green;
								$grid[$startline+4][$startlinex][3] = $blue;
								$grid[$startline-4][$startlinex][1] = $red;
								$grid[$startline-4][$startlinex][2] = $green;
								$grid[$startline-4][$startlinex][3] = $blue;
							}
							$grid[$startline][$startlinex+1][1] = $red;
							$grid[$startline][$startlinex+1][2] = $green;
							$grid[$startline][$startlinex+1][3] = $blue;
							$grid[$startline][$startlinex-1][1] = $red;
							$grid[$startline][$startlinex-1][2] = $green;
							$grid[$startline][$startlinex-1][3] = $blue;
							if ($linesize > 3) {
								$grid[$startline][$startlinex+2][1] = $red;
								$grid[$startline][$startlinex+2][2] = $green;
								$grid[$startline][$startlinex+2][3] = $blue;
								$grid[$startline][$startlinex-2][1] = $red;
								$grid[$startline][$startlinex-2][2] = $green;
								$grid[$startline][$startlinex-2][3] = $blue;
							}
							if ($linesize > 4) {
								$grid[$startline][$startlinex+3][1] = $red;
								$grid[$startline][$startlinex+3][2] = $green;
								$grid[$startline][$startlinex+3][3] = $blue;
								$grid[$startline][$startlinex-3][1] = $red;
								$grid[$startline][$startlinex-3][2] = $green;
								$grid[$startline][$startlinex-3][3] = $blue;
							}
							if ($linesize > 5) {
								$grid[$startline][$startlinex+4][1] = $red;
								$grid[$startline][$startlinex+4][2] = $green;
								$grid[$startline][$startlinex+4][3] = $blue;
								$grid[$startline][$startlinex-4][1] = $red;
								$grid[$startline][$startlinex-4][2] = $green;
								$grid[$startline][$startlinex-4][3] = $blue;
							}
		
						}
						else if ($num == 4) {
							$red = rand($r14, $r24);
							$green = rand($r34, $r44);
							$blue = rand($r54, $r64);
							$linesize = rand(3,6);
							$startline = rand(1,$yend);
							$startlinex = rand(1,$xend);
							$grid[$startline][$startlinex][1] = $red;
							$grid[$startline][$startlinex][2] = $green;
							$grid[$startline][$startlinex][3] = $blue;
							$grid[$startline+1][$startlinex][1] = $red;
							$grid[$startline+1][$startlinex][2] = $green;
							$grid[$startline+1][$startlinex][3] = $blue;
							$grid[$startline-1][$startlinex][1] = $red;
							$grid[$startline-1][$startlinex][2] = $green;
							$grid[$startline-1][$startlinex][3] = $blue;
							if ($linesize > 3) {
								$grid[$startline+2][$startlinex][1] = $red;
								$grid[$startline+2][$startlinex][2] = $green;
								$grid[$startline+2][$startlinex][3] = $blue;
								$grid[$startline-2][$startlinex][1] = $red;
								$grid[$startline-2][$startlinex][2] = $green;
								$grid[$startline-2][$startlinex][3] = $blue;
							}
							if ($linesize > 4) {
								$grid[$startline+3][$startlinex][1] = $red;
								$grid[$startline+3][$startlinex][2] = $green;
								$grid[$startline+3][$startlinex][3] = $blue;
								$grid[$startline-3][$startlinex][1] = $red;
								$grid[$startline-3][$startlinex][2] = $green;
								$grid[$startline-3][$startlinex][3] = $blue;
							}
							if ($linesize > 5) {
								$grid[$startline+4][$startlinex][1] = $red;
								$grid[$startline+4][$startlinex][2] = $green;
								$grid[$startline+4][$startlinex][3] = $blue;
								$grid[$startline-4][$startlinex][1] = $red;
								$grid[$startline-4][$startlinex][2] = $green;
								$grid[$startline-4][$startlinex][3] = $blue;
							}
							$grid[$startline][$startlinex+1][1] = $red;
							$grid[$startline][$startlinex+1][2] = $green;
							$grid[$startline][$startlinex+1][3] = $blue;
							$grid[$startline][$startlinex-1][1] = $red;
							$grid[$startline][$startlinex-1][2] = $green;
							$grid[$startline][$startlinex-1][3] = $blue;
							if ($linesize > 3) {
								$grid[$startline][$startlinex+2][1] = $red;
								$grid[$startline][$startlinex+2][2] = $green;
								$grid[$startline][$startlinex+2][3] = $blue;
								$grid[$startline][$startlinex-2][1] = $red;
								$grid[$startline][$startlinex-2][2] = $green;
								$grid[$startline][$startlinex-2][3] = $blue;
							}
							if ($linesize > 4) {
								$grid[$startline][$startlinex+3][1] = $red;
								$grid[$startline][$startlinex+3][2] = $green;
								$grid[$startline][$startlinex+3][3] = $blue;
								$grid[$startline][$startlinex-3][1] = $red;
								$grid[$startline][$startlinex-3][2] = $green;
								$grid[$startline][$startlinex-3][3] = $blue;
							}
							if ($linesize > 5) {
								$grid[$startline][$startlinex+4][1] = $red;
								$grid[$startline][$startlinex+4][2] = $green;
								$grid[$startline][$startlinex+4][3] = $blue;
								$grid[$startline][$startlinex-4][1] = $red;
								$grid[$startline][$startlinex-4][2] = $green;
								$grid[$startline][$startlinex-4][3] = $blue;
							}
		
						}
						else if ($num == 5) {
							$red = rand($r15, $r25);
							$green = rand($r35, $r45);
							$blue = rand($r55, $r65);
							$linesize = rand(3,6);
							$startline = rand(1,$yend);
							$startlinex = rand(1,$xend);
							$grid[$startline][$startlinex][1] = $red;
							$grid[$startline][$startlinex][2] = $green;
							$grid[$startline][$startlinex][3] = $blue;
							$grid[$startline+1][$startlinex][1] = $red;
							$grid[$startline+1][$startlinex][2] = $green;
							$grid[$startline+1][$startlinex][3] = $blue;
							$grid[$startline-1][$startlinex][1] = $red;
							$grid[$startline-1][$startlinex][2] = $green;
							$grid[$startline-1][$startlinex][3] = $blue;
							if ($linesize > 3) {
								$grid[$startline+2][$startlinex][1] = $red;
								$grid[$startline+2][$startlinex][2] = $green;
								$grid[$startline+2][$startlinex][3] = $blue;
								$grid[$startline-2][$startlinex][1] = $red;
								$grid[$startline-2][$startlinex][2] = $green;
								$grid[$startline-2][$startlinex][3] = $blue;
							}
							if ($linesize > 4) {
								$grid[$startline+3][$startlinex][1] = $red;
								$grid[$startline+3][$startlinex][2] = $green;
								$grid[$startline+3][$startlinex][3] = $blue;
								$grid[$startline-3][$startlinex][1] = $red;
								$grid[$startline-3][$startlinex][2] = $green;
								$grid[$startline-3][$startlinex][3] = $blue;
							}
							if ($linesize > 5) {
								$grid[$startline+4][$startlinex][1] = $red;
								$grid[$startline+4][$startlinex][2] = $green;
								$grid[$startline+4][$startlinex][3] = $blue;
								$grid[$startline-4][$startlinex][1] = $red;
								$grid[$startline-4][$startlinex][2] = $green;
								$grid[$startline-4][$startlinex][3] = $blue;
							}
							$grid[$startline][$startlinex+1][1] = $red;
							$grid[$startline][$startlinex+1][2] = $green;
							$grid[$startline][$startlinex+1][3] = $blue;
							$grid[$startline][$startlinex-1][1] = $red;
							$grid[$startline][$startlinex-1][2] = $green;
							$grid[$startline][$startlinex-1][3] = $blue;
							if ($linesize > 3) {
								$grid[$startline][$startlinex+2][1] = $red;
								$grid[$startline][$startlinex+2][2] = $green;
								$grid[$startline][$startlinex+2][3] = $blue;
								$grid[$startline][$startlinex-2][1] = $red;
								$grid[$startline][$startlinex-2][2] = $green;
								$grid[$startline][$startlinex-2][3] = $blue;
							}
							if ($linesize > 4) {
								$grid[$startline][$startlinex+3][1] = $red;
								$grid[$startline][$startlinex+3][2] = $green;
								$grid[$startline][$startlinex+3][3] = $blue;
								$grid[$startline][$startlinex-3][1] = $red;
								$grid[$startline][$startlinex-3][2] = $green;
								$grid[$startline][$startlinex-3][3] = $blue;
							}
							if ($linesize > 5) {
								$grid[$startline][$startlinex+4][1] = $red;
								$grid[$startline][$startlinex+4][2] = $green;
								$grid[$startline][$startlinex+4][3] = $blue;
								$grid[$startline][$startlinex-4][1] = $red;
								$grid[$startline][$startlinex-4][2] = $green;
								$grid[$startline][$startlinex-4][3] = $blue;
							}
		
						}
						else if ($num == 6) {
							$red = rand($r16, $r26);
							$green = rand($r36, $r46);
							$blue = rand($r56, $r66);
							$linesize = rand(3,6);
							$startline = rand(1,$yend);
							$startlinex = rand(1,$xend);
							$grid[$startline][$startlinex][1] = $red;
							$grid[$startline][$startlinex][2] = $green;
							$grid[$startline][$startlinex][3] = $blue;
							$grid[$startline+1][$startlinex][1] = $red;
							$grid[$startline+1][$startlinex][2] = $green;
							$grid[$startline+1][$startlinex][3] = $blue;
							$grid[$startline-1][$startlinex][1] = $red;
							$grid[$startline-1][$startlinex][2] = $green;
							$grid[$startline-1][$startlinex][3] = $blue;
							if ($linesize > 3) {
								$grid[$startline+2][$startlinex][1] = $red;
								$grid[$startline+2][$startlinex][2] = $green;
								$grid[$startline+2][$startlinex][3] = $blue;
								$grid[$startline-2][$startlinex][1] = $red;
								$grid[$startline-2][$startlinex][2] = $green;
								$grid[$startline-2][$startlinex][3] = $blue;
							}
							if ($linesize > 4) {
								$grid[$startline+3][$startlinex][1] = $red;
								$grid[$startline+3][$startlinex][2] = $green;
								$grid[$startline+3][$startlinex][3] = $blue;
								$grid[$startline-3][$startlinex][1] = $red;
								$grid[$startline-3][$startlinex][2] = $green;
								$grid[$startline-3][$startlinex][3] = $blue;
							}
							if ($linesize > 5) {
								$grid[$startline+4][$startlinex][1] = $red;
								$grid[$startline+4][$startlinex][2] = $green;
								$grid[$startline+4][$startlinex][3] = $blue;
								$grid[$startline-4][$startlinex][1] = $red;
								$grid[$startline-4][$startlinex][2] = $green;
								$grid[$startline-4][$startlinex][3] = $blue;
							}
							$grid[$startline][$startlinex+1][1] = $red;
							$grid[$startline][$startlinex+1][2] = $green;
							$grid[$startline][$startlinex+1][3] = $blue;
							$grid[$startline][$startlinex-1][1] = $red;
							$grid[$startline][$startlinex-1][2] = $green;
							$grid[$startline][$startlinex-1][3] = $blue;
							if ($linesize > 3) {
								$grid[$startline][$startlinex+2][1] = $red;
								$grid[$startline][$startlinex+2][2] = $green;
								$grid[$startline][$startlinex+2][3] = $blue;
								$grid[$startline][$startlinex-2][1] = $red;
								$grid[$startline][$startlinex-2][2] = $green;
								$grid[$startline][$startlinex-2][3] = $blue;
							}
							if ($linesize > 4) {
								$grid[$startline][$startlinex+3][1] = $red;
								$grid[$startline][$startlinex+3][2] = $green;
								$grid[$startline][$startlinex+3][3] = $blue;
								$grid[$startline][$startlinex-3][1] = $red;
								$grid[$startline][$startlinex-3][2] = $green;
								$grid[$startline][$startlinex-3][3] = $blue;
							}
							if ($linesize > 5) {
								$grid[$startline][$startlinex+4][1] = $red;
								$grid[$startline][$startlinex+4][2] = $green;
								$grid[$startline][$startlinex+4][3] = $blue;
								$grid[$startline][$startlinex-4][1] = $red;
								$grid[$startline][$startlinex-4][2] = $green;
								$grid[$startline][$startlinex-4][3] = $blue;
							}
		
						}
						else if ($num == 7) {
							$red = rand($r17, $r27);
							$green = rand($r37, $r47);
							$blue = rand($r57, $r67);
							$linesize = rand(3,6);
							$startline = rand(1,$yend);
							$startlinex = rand(1,$xend);
							$grid[$startline][$startlinex][1] = $red;
							$grid[$startline][$startlinex][2] = $green;
							$grid[$startline][$startlinex][3] = $blue;
							$grid[$startline+1][$startlinex][1] = $red;
							$grid[$startline+1][$startlinex][2] = $green;
							$grid[$startline+1][$startlinex][3] = $blue;
							$grid[$startline-1][$startlinex][1] = $red;
							$grid[$startline-1][$startlinex][2] = $green;
							$grid[$startline-1][$startlinex][3] = $blue;
							if ($linesize > 3) {
								$grid[$startline+2][$startlinex][1] = $red;
								$grid[$startline+2][$startlinex][2] = $green;
								$grid[$startline+2][$startlinex][3] = $blue;
								$grid[$startline-2][$startlinex][1] = $red;
								$grid[$startline-2][$startlinex][2] = $green;
								$grid[$startline-2][$startlinex][3] = $blue;
							}
							if ($linesize > 4) {
								$grid[$startline+3][$startlinex][1] = $red;
								$grid[$startline+3][$startlinex][2] = $green;
								$grid[$startline+3][$startlinex][3] = $blue;
								$grid[$startline-3][$startlinex][1] = $red;
								$grid[$startline-3][$startlinex][2] = $green;
								$grid[$startline-3][$startlinex][3] = $blue;
							}
							if ($linesize > 5) {
								$grid[$startline+4][$startlinex][1] = $red;
								$grid[$startline+4][$startlinex][2] = $green;
								$grid[$startline+4][$startlinex][3] = $blue;
								$grid[$startline-4][$startlinex][1] = $red;
								$grid[$startline-4][$startlinex][2] = $green;
								$grid[$startline-4][$startlinex][3] = $blue;
							}
							$grid[$startline][$startlinex+1][1] = $red;
							$grid[$startline][$startlinex+1][2] = $green;
							$grid[$startline][$startlinex+1][3] = $blue;
							$grid[$startline][$startlinex-1][1] = $red;
							$grid[$startline][$startlinex-1][2] = $green;
							$grid[$startline][$startlinex-1][3] = $blue;
							if ($linesize > 3) {
								$grid[$startline][$startlinex+2][1] = $red;
								$grid[$startline][$startlinex+2][2] = $green;
								$grid[$startline][$startlinex+2][3] = $blue;
								$grid[$startline][$startlinex-2][1] = $red;
								$grid[$startline][$startlinex-2][2] = $green;
								$grid[$startline][$startlinex-2][3] = $blue;
							}
							if ($linesize > 4) {
								$grid[$startline][$startlinex+3][1] = $red;
								$grid[$startline][$startlinex+3][2] = $green;
								$grid[$startline][$startlinex+3][3] = $blue;
								$grid[$startline][$startlinex-3][1] = $red;
								$grid[$startline][$startlinex-3][2] = $green;
								$grid[$startline][$startlinex-3][3] = $blue;
							}
							if ($linesize > 5) {
								$grid[$startline][$startlinex+4][1] = $red;
								$grid[$startline][$startlinex+4][2] = $green;
								$grid[$startline][$startlinex+4][3] = $blue;
								$grid[$startline][$startlinex-4][1] = $red;
								$grid[$startline][$startlinex-4][2] = $green;
								$grid[$startline][$startlinex-4][3] = $blue;
							}
		
						}
						else {
							$red = rand($r18, $r28);
							$green = rand($r38, $r48);
							$blue = rand($r58, $r68);
							$linesize = rand(3,6);
							$startline = rand(1,$yend);
							$startlinex = rand(1,$xend);
							$grid[$startline][$startlinex][1] = $red;
							$grid[$startline][$startlinex][2] = $green;
							$grid[$startline][$startlinex][3] = $blue;
							$grid[$startline+1][$startlinex][1] = $red;
							$grid[$startline+1][$startlinex][2] = $green;
							$grid[$startline+1][$startlinex][3] = $blue;
							$grid[$startline-1][$startlinex][1] = $red;
							$grid[$startline-1][$startlinex][2] = $green;
							$grid[$startline-1][$startlinex][3] = $blue;
							if ($linesize > 3) {
								$grid[$startline+2][$startlinex][1] = $red;
								$grid[$startline+2][$startlinex][2] = $green;
								$grid[$startline+2][$startlinex][3] = $blue;
								$grid[$startline-2][$startlinex][1] = $red;
								$grid[$startline-2][$startlinex][2] = $green;
								$grid[$startline-2][$startlinex][3] = $blue;
							}
							if ($linesize > 4) {
								$grid[$startline+3][$startlinex][1] = $red;
								$grid[$startline+3][$startlinex][2] = $green;
								$grid[$startline+3][$startlinex][3] = $blue;
								$grid[$startline-3][$startlinex][1] = $red;
								$grid[$startline-3][$startlinex][2] = $green;
								$grid[$startline-3][$startlinex][3] = $blue;
							}
							if ($linesize > 5) {
								$grid[$startline+4][$startlinex][1] = $red;
								$grid[$startline+4][$startlinex][2] = $green;
								$grid[$startline+4][$startlinex][3] = $blue;
								$grid[$startline-4][$startlinex][1] = $red;
								$grid[$startline-4][$startlinex][2] = $green;
								$grid[$startline-4][$startlinex][3] = $blue;
							}
							$grid[$startline][$startlinex+1][1] = $red;
							$grid[$startline][$startlinex+1][2] = $green;
							$grid[$startline][$startlinex+1][3] = $blue;
							$grid[$startline][$startlinex-1][1] = $red;
							$grid[$startline][$startlinex-1][2] = $green;
							$grid[$startline][$startlinex-1][3] = $blue;
							if ($linesize > 3) {
								$grid[$startline][$startlinex+2][1] = $red;
								$grid[$startline][$startlinex+2][2] = $green;
								$grid[$startline][$startlinex+2][3] = $blue;
								$grid[$startline][$startlinex-2][1] = $red;
								$grid[$startline][$startlinex-2][2] = $green;
								$grid[$startline][$startlinex-2][3] = $blue;
							}
							if ($linesize > 4) {
								$grid[$startline][$startlinex+3][1] = $red;
								$grid[$startline][$startlinex+3][2] = $green;
								$grid[$startline][$startlinex+3][3] = $blue;
								$grid[$startline][$startlinex-3][1] = $red;
								$grid[$startline][$startlinex-3][2] = $green;
								$grid[$startline][$startlinex-3][3] = $blue;
							}
							if ($linesize > 5) {
								$grid[$startline][$startlinex+4][1] = $red;
								$grid[$startline][$startlinex+4][2] = $green;
								$grid[$startline][$startlinex+4][3] = $blue;
								$grid[$startline][$startlinex-4][1] = $red;
								$grid[$startline][$startlinex-4][2] = $green;
								$grid[$startline][$startlinex-4][3] = $blue;
							}
		
						}
						$linevar++;
					
					}
				
				}
					
				// Draw a large grid
			
				$gvar = 1;
				while ($gvar < $ygridextent) {
					$rvar = 1;
					while ($rvar < $xgridextent) {
						if (($_REQUEST['rt'] == 'square') || ($_REQUEST['submited'] == 0)) {
							echo '<div style="background:rgb('.$grid[$gvar][$rvar][1].',';
							echo $grid[$gvar][$rvar][2];
							echo ','.$grid[$gvar][$rvar][3].');width:20px;height:20px;float: left;">  </div>';
						}
						else if ($_REQUEST['rt'] == 'circle') {
							echo '<div style="background:rgb('.$grid[$gvar][$rvar][1].',';
							echo $grid[$gvar][$rvar][2];
							echo ','.$grid[$gvar][$rvar][3].');	width: 16px; height: 16px; -moz-border-radius: 8px; -webkit-border-radius: 8px; border-radius: 8px; float: left; margin: 2px;">  </div>';
						}
						else if ($_REQUEST['rt'] == 'triangle') {
							echo '<div style="border-top: 20px solid rgb('.$grid[$gvar][$rvar][1].',';
							echo $grid[$gvar][$rvar][2];
							echo ','.$grid[$gvar][$rvar][3].');	width: 0; height: 0; border-left: 20px solid transparent; float: left;">  </div>';
						}
						else if ($_REQUEST['rt'] == 'triangle2') {
							echo '<div style="border-top: 20px solid rgb('.$grid[$gvar][$rvar][1].',';
							echo $grid[$gvar][$rvar][2];
							echo ','.$grid[$gvar][$rvar][3].');	width: 0; height: 0; border-right: 20px solid transparent; float: left;">  </div>';
						}
						else if ($_REQUEST['rt'] == 'triangle3') {
							echo '<div style="border-bottom: 20px solid rgb('.$grid[$gvar][$rvar][1].',';
							echo $grid[$gvar][$rvar][2];
							echo ','.$grid[$gvar][$rvar][3].');	width: 0; height: 0; border-right: 20px solid transparent; float: left;">  </div>';
						}
						else if ($_REQUEST['rt'] == 'triangle4') {
							echo '<div style="border-bottom: 20px solid rgb('.$grid[$gvar][$rvar][1].',';
							echo $grid[$gvar][$rvar][2];
							echo ','.$grid[$gvar][$rvar][3].');	width: 0; height: 0; border-left: 20px solid transparent; float: left;">  </div>';
						}
						else if ($_REQUEST['rt'] == 'randomt') {
							$rrn = rand(1,4);
							if ($rrn == 1) {
								echo '<div style="border-top: 20px solid rgb('.$grid[$gvar][$rvar][1].',';
								echo $grid[$gvar][$rvar][2];
								echo ','.$grid[$gvar][$rvar][3].');	width: 0; height: 0; border-left: 20px solid transparent; float: left;">  </div>';
							}
							else if ($rrn == 2) {
								echo '<div style="border-top: 20px solid rgb('.$grid[$gvar][$rvar][1].',';
								echo $grid[$gvar][$rvar][2];
								echo ','.$grid[$gvar][$rvar][3].');	width: 0; height: 0; border-right: 20px solid transparent; float: left;">  </div>';
							}
							else if ($rrn == 3) {
								echo '<div style="border-bottom: 20px solid rgb('.$grid[$gvar][$rvar][1].',';
								echo $grid[$gvar][$rvar][2];
								echo ','.$grid[$gvar][$rvar][3].');	width: 0; height: 0; border-right: 20px solid transparent; float: left;">  </div>';
							}
							else {
								echo '<div style="border-bottom: 20px solid rgb('.$grid[$gvar][$rvar][1].',';
								echo $grid[$gvar][$rvar][2];
								echo ','.$grid[$gvar][$rvar][3].');	width: 0; height: 0; border-left: 20px solid transparent; float: left;">  </div>';
							}	
						}
						else if ($_REQUEST['rt'] == 'random') {
							$rrn = rand(1,3);
							if ($rrn == 1) {
								echo '<div style="background:rgb('.$grid[$gvar][$rvar][1].',';
								echo $grid[$gvar][$rvar][2];
								echo ','.$grid[$gvar][$rvar][3].');width:20px;height:20px;float: left;">  </div>';
							}
							else if ($rrn == 2) {
								echo '<div style="background:rgb('.$grid[$gvar][$rvar][1].',';
								echo $grid[$gvar][$rvar][2];
								echo ','.$grid[$gvar][$rvar][3].');	width: 20px; height: 20px; -moz-border-radius: 10px; -webkit-border-radius: 10px; border-radius: 10px; float: left; margin: 0px;">  </div>';
							}
							else {
								echo '<div style="border-top: 20px solid rgb('.$grid[$gvar][$rvar][1].',';
								echo $grid[$gvar][$rvar][2];
								echo ','.$grid[$gvar][$rvar][3].');	width: 0; height: 0; border-left: 20px solid transparent; float: left;">  </div>';
							}	
						}
		
						$rvar++;
					}
					$gvar++;
				}
			
			}
			?>
        </div>
        <div class="pholder">
        <?php
		
			if ($_REQUEST['pgrid'] == 1) {
			
				// Make the pixel grid
				
				$xgridextent = 257;
				$ygridextent = 257;
				
				$gv = 1;
				
				while ($gv < $ygridextent) {
					$rv = 1;
					
					while ($rv < $xgridextent) {
						$num = rand(1, 8);
						if ($num == 1) {
							$red = rand($r11, $r21);
							$green = rand($r31, $r41);
							$blue = rand($r51, $r61);
							$grid[$gv][$rv] = array();
							$grid[$gv][$rv][1] = $red;
							$grid[$gv][$rv][2] = $green;
							$grid[$gv][$rv][3] = $blue;
						}
						else if ($num == 2) {
							$red = rand($r12, $r22);
							$green = rand($r32, $r42);
							$blue = rand($r52, $r62);
							$grid[$gv][$rv] = array();
							$grid[$gv][$rv][1] = $red;
							$grid[$gv][$rv][2] = $green;
							$grid[$gv][$rv][3] = $blue;
						}
						else if ($num == 3) {
							$red = rand($r13, $r23);
							$green = rand($r33, $r43);
							$blue = rand($r53, $r63);
							$grid[$gv][$rv] = array();
							$grid[$gv][$rv][1] = $red;
							$grid[$gv][$rv][2] = $green;
							$grid[$gv][$rv][3] = $blue;
						}
						else if ($num == 4) {
							$red = rand($r14, $r24);
							$green = rand($r34, $r44);
							$blue = rand($r54, $r64);
							$grid[$gv][$rv] = array();
							$grid[$gv][$rv][1] = $red;
							$grid[$gv][$rv][2] = $green;
							$grid[$gv][$rv][3] = $blue;
						}
						else if ($num == 5) {
							$red = rand($r15, $r25);
							$green = rand($r35, $r45);
							$blue = rand($r55, $r65);
							$grid[$gv][$rv] = array();
							$grid[$gv][$rv][1] = $red;
							$grid[$gv][$rv][2] = $green;
							$grid[$gv][$rv][3] = $blue;
				
						}
						else if ($num == 6) {
							$red = rand($r16, $r26);
							$green = rand($r36, $r46);
							$blue = rand($r56, $r66);
							$grid[$gv][$rv] = array();
							$grid[$gv][$rv][1] = $red;
							$grid[$gv][$rv][2] = $green;
							$grid[$gv][$rv][3] = $blue;
						}
						else if ($num == 7) {
							$red = rand($r17, $r27);
							$green = rand($r37, $r47);
							$blue = rand($r57, $r67);
							$grid[$gv][$rv] = array();
							$grid[$gv][$rv][1] = $red;
							$grid[$gv][$rv][2] = $green;
							$grid[$gv][$rv][3] = $blue;
						}
						else {
							$red = rand($r18, $r28);
							$green = rand($r38, $r48);
							$blue = rand($r58, $r68);
							$grid[$gv][$rv] = array();
							$grid[$gv][$rv][1] = $red;
							$grid[$gv][$rv][2] = $green;
							$grid[$gv][$rv][3] = $blue;
						}
						$rv++;
					}
					$gv++;
				}
		
		 
				$xend = 256;
				$yend = 256;
				$nublines = rand(256,640);
		 
				if ($_REQUEST['lines'] == 'one') {
		
		
					// Line drawing one colour
					
					$linevar = 1;
					//$nublines = rand(3,16);
					
					while ($linevar <= $nublines) {
						$red = rand($r11, $r21);
						$green = rand($r31, $r41);
						$blue = rand($r51, $r61);
						$linesize = rand(3,6);
						$startline = rand(1,$yend);
						$startlinex = rand(1,$xend);
						$grid[$startline][$startlinex][1] = $red;
						$grid[$startline][$startlinex][2] = $green;
						$grid[$startline][$startlinex][3] = $blue;
						$grid[$startline+1][$startlinex][1] = $red;
						$grid[$startline+1][$startlinex][2] = $green;
						$grid[$startline+1][$startlinex][3] = $blue;
						$grid[$startline+2][$startlinex][1] = $red;
						$grid[$startline+2][$startlinex][2] = $green;
						$grid[$startline+2][$startlinex][3] = $blue;
						if ($linesize > 3) {
							$grid[$startline+3][$startlinex][1] = $red;
							$grid[$startline+3][$startlinex][2] = $green;
							$grid[$startline+3][$startlinex][3] = $blue;
						}
						if ($linesize > 4) {
							$grid[$startline+4][$startlinex][1] = $red;
							$grid[$startline+4][$startlinex][2] = $green;
							$grid[$startline+4][$startlinex][3] = $blue;
						}
						if ($linesize > 5) {
							$grid[$startline+5][$startlinex][1] = $red;
							$grid[$startline+5][$startlinex][2] = $green;
							$grid[$startline+5][$startlinex][3] = $blue;
						}
						$linevar++;
					
					}
				
				} else if ($_REQUEST['lines'] == 'random') {
				
				
					// Line drawing random colours
					
					$linevar = 1;
					//$nublines = rand(3,16);
					
					while ($linevar <= $nublines) {
						$num = rand(1, 8);
						if ($num == 1) {
							$red = rand($r11, $r21);
							$green = rand($r31, $r41);
							$blue = rand($r51, $r61);
							$linesize = rand(3,6);
							$startline = rand(1,$yend);
							$startlinex = rand(1,$xend);
							$grid[$startline][$startlinex][1] = $red;
							$grid[$startline][$startlinex][2] = $green;
							$grid[$startline][$startlinex][3] = $blue;
							$grid[$startline+1][$startlinex][1] = $red;
							$grid[$startline+1][$startlinex][2] = $green;
							$grid[$startline+1][$startlinex][3] = $blue;
							$grid[$startline+2][$startlinex][1] = $red;
							$grid[$startline+2][$startlinex][2] = $green;
							$grid[$startline+2][$startlinex][3] = $blue;
							if ($linesize > 3) {
								$grid[$startline+3][$startlinex][1] = $red;
								$grid[$startline+3][$startlinex][2] = $green;
								$grid[$startline+3][$startlinex][3] = $blue;
							}
							if ($linesize > 4) {
								$grid[$startline+4][$startlinex][1] = $red;
								$grid[$startline+4][$startlinex][2] = $green;
								$grid[$startline+4][$startlinex][3] = $blue;
							}
							if ($linesize > 5) {
								$grid[$startline+5][$startlinex][1] = $red;
								$grid[$startline+5][$startlinex][2] = $green;
								$grid[$startline+5][$startlinex][3] = $blue;
							}
						}
						else if ($num == 2) {
							$red = rand($r12, $r22);
							$green = rand($r32, $r42);
							$blue = rand($r52, $r62);
							$linesize = rand(3,6);
							$startline = rand(1,$yend);
							$startlinex = rand(1,$xend);
							$grid[$startline][$startlinex][1] = $red;
							$grid[$startline][$startlinex][2] = $green;
							$grid[$startline][$startlinex][3] = $blue;
							$grid[$startline+1][$startlinex][1] = $red;
							$grid[$startline+1][$startlinex][2] = $green;
							$grid[$startline+1][$startlinex][3] = $blue;
							$grid[$startline+2][$startlinex][1] = $red;
							$grid[$startline+2][$startlinex][2] = $green;
							$grid[$startline+2][$startlinex][3] = $blue;
							if ($linesize > 3) {
								$grid[$startline+3][$startlinex][1] = $red;
								$grid[$startline+3][$startlinex][2] = $green;
								$grid[$startline+3][$startlinex][3] = $blue;
							}
							if ($linesize > 4) {
								$grid[$startline+4][$startlinex][1] = $red;
								$grid[$startline+4][$startlinex][2] = $green;
								$grid[$startline+4][$startlinex][3] = $blue;
							}
							if ($linesize > 5) {
								$grid[$startline+5][$startlinex][1] = $red;
								$grid[$startline+5][$startlinex][2] = $green;
								$grid[$startline+5][$startlinex][3] = $blue;
							}
						}
						else if ($num == 3) {
							$red = rand($r13, $r23);
							$green = rand($r33, $r43);
							$blue = rand($r53, $r63);
							$linesize = rand(3,6);
							$startline = rand(1,$yend);
							$startlinex = rand(1,$xend);
							$grid[$startline][$startlinex][1] = $red;
							$grid[$startline][$startlinex][2] = $green;
							$grid[$startline][$startlinex][3] = $blue;
							$grid[$startline+1][$startlinex][1] = $red;
							$grid[$startline+1][$startlinex][2] = $green;
							$grid[$startline+1][$startlinex][3] = $blue;
							$grid[$startline+2][$startlinex][1] = $red;
							$grid[$startline+2][$startlinex][2] = $green;
							$grid[$startline+2][$startlinex][3] = $blue;
							if ($linesize > 3) {
								$grid[$startline+3][$startlinex][1] = $red;
								$grid[$startline+3][$startlinex][2] = $green;
								$grid[$startline+3][$startlinex][3] = $blue;
							}
							if ($linesize > 4) {
								$grid[$startline+4][$startlinex][1] = $red;
								$grid[$startline+4][$startlinex][2] = $green;
								$grid[$startline+4][$startlinex][3] = $blue;
							}
							if ($linesize > 5) {
								$grid[$startline+5][$startlinex][1] = $red;
								$grid[$startline+5][$startlinex][2] = $green;
								$grid[$startline+5][$startlinex][3] = $blue;
							}
						}
						else if ($num == 4) {
							$red = rand($r14, $r24);
							$green = rand($r34, $r44);
							$blue = rand($r54, $r64);
							$linesize = rand(3,6);
							$startline = rand(1,$yend);
							$startlinex = rand(1,$xend);
							$grid[$startline][$startlinex][1] = $red;
							$grid[$startline][$startlinex][2] = $green;
							$grid[$startline][$startlinex][3] = $blue;
							$grid[$startline+1][$startlinex][1] = $red;
							$grid[$startline+1][$startlinex][2] = $green;
							$grid[$startline+1][$startlinex][3] = $blue;
							$grid[$startline+2][$startlinex][1] = $red;
							$grid[$startline+2][$startlinex][2] = $green;
							$grid[$startline+2][$startlinex][3] = $blue;
							if ($linesize > 3) {
								$grid[$startline+3][$startlinex][1] = $red;
								$grid[$startline+3][$startlinex][2] = $green;
								$grid[$startline+3][$startlinex][3] = $blue;
							}
							if ($linesize > 4) {
								$grid[$startline+4][$startlinex][1] = $red;
								$grid[$startline+4][$startlinex][2] = $green;
								$grid[$startline+4][$startlinex][3] = $blue;
							}
							if ($linesize > 5) {
								$grid[$startline+5][$startlinex][1] = $red;
								$grid[$startline+5][$startlinex][2] = $green;
								$grid[$startline+5][$startlinex][3] = $blue;
							}
						}
						else if ($num == 5) {
							$red = rand($r15, $r25);
							$green = rand($r35, $r45);
							$blue = rand($r55, $r65);
							$linesize = rand(3,6);
							$startline = rand(1,$yend);
							$startlinex = rand(1,$xend);
							$grid[$startline][$startlinex][1] = $red;
							$grid[$startline][$startlinex][2] = $green;
							$grid[$startline][$startlinex][3] = $blue;
							$grid[$startline+1][$startlinex][1] = $red;
							$grid[$startline+1][$startlinex][2] = $green;
							$grid[$startline+1][$startlinex][3] = $blue;
							$grid[$startline+2][$startlinex][1] = $red;
							$grid[$startline+2][$startlinex][2] = $green;
							$grid[$startline+2][$startlinex][3] = $blue;
							if ($linesize > 3) {
								$grid[$startline+3][$startlinex][1] = $red;
								$grid[$startline+3][$startlinex][2] = $green;
								$grid[$startline+3][$startlinex][3] = $blue;
							}
							if ($linesize > 4) {
								$grid[$startline+4][$startlinex][1] = $red;
								$grid[$startline+4][$startlinex][2] = $green;
								$grid[$startline+4][$startlinex][3] = $blue;
							}
							if ($linesize > 5) {
								$grid[$startline+5][$startlinex][1] = $red;
								$grid[$startline+5][$startlinex][2] = $green;
								$grid[$startline+5][$startlinex][3] = $blue;
							}
				
						}
						else if ($num == 6) {
							$red = rand($r16, $r26);
							$green = rand($r36, $r46);
							$blue = rand($r56, $r66);
							$linesize = rand(3,6);
							$startline = rand(1,$yend);
							$startlinex = rand(1,$xend);
							$grid[$startline][$startlinex][1] = $red;
							$grid[$startline][$startlinex][2] = $green;
							$grid[$startline][$startlinex][3] = $blue;
							$grid[$startline+1][$startlinex][1] = $red;
							$grid[$startline+1][$startlinex][2] = $green;
							$grid[$startline+1][$startlinex][3] = $blue;
							$grid[$startline+2][$startlinex][1] = $red;
							$grid[$startline+2][$startlinex][2] = $green;
							$grid[$startline+2][$startlinex][3] = $blue;
							if ($linesize > 3) {
								$grid[$startline+3][$startlinex][1] = $red;
								$grid[$startline+3][$startlinex][2] = $green;
								$grid[$startline+3][$startlinex][3] = $blue;
							}
							if ($linesize > 4) {
								$grid[$startline+4][$startlinex][1] = $red;
								$grid[$startline+4][$startlinex][2] = $green;
								$grid[$startline+4][$startlinex][3] = $blue;
							}
							if ($linesize > 5) {
								$grid[$startline+5][$startlinex][1] = $red;
								$grid[$startline+5][$startlinex][2] = $green;
								$grid[$startline+5][$startlinex][3] = $blue;
							}
						}
						else if ($num == 7) {
							$red = rand($r17, $r27);
							$green = rand($r37, $r47);
							$blue = rand($r57, $r67);
							$linesize = rand(3,6);
							$startline = rand(1,$yend);
							$startlinex = rand(1,$xend);
							$grid[$startline][$startlinex][1] = $red;
							$grid[$startline][$startlinex][2] = $green;
							$grid[$startline][$startlinex][3] = $blue;
							$grid[$startline+1][$startlinex][1] = $red;
							$grid[$startline+1][$startlinex][2] = $green;
							$grid[$startline+1][$startlinex][3] = $blue;
							$grid[$startline+2][$startlinex][1] = $red;
							$grid[$startline+2][$startlinex][2] = $green;
							$grid[$startline+2][$startlinex][3] = $blue;
							if ($linesize > 3) {
								$grid[$startline+3][$startlinex][1] = $red;
								$grid[$startline+3][$startlinex][2] = $green;
								$grid[$startline+3][$startlinex][3] = $blue;
							}
							if ($linesize > 4) {
								$grid[$startline+4][$startlinex][1] = $red;
								$grid[$startline+4][$startlinex][2] = $green;
								$grid[$startline+4][$startlinex][3] = $blue;
							}
							if ($linesize > 5) {
								$grid[$startline+5][$startlinex][1] = $red;
								$grid[$startline+5][$startlinex][2] = $green;
								$grid[$startline+5][$startlinex][3] = $blue;
							}
						}
						else {
							$red = rand($r18, $r28);
							$green = rand($r38, $r48);
							$blue = rand($r58, $r68);
							$linesize = rand(3,6);
							$startline = rand(1,$yend);
							$startlinex = rand(1,$xend);
							$grid[$startline][$startlinex][1] = $red;
							$grid[$startline][$startlinex][2] = $green;
							$grid[$startline][$startlinex][3] = $blue;
							$grid[$startline+1][$startlinex][1] = $red;
							$grid[$startline+1][$startlinex][2] = $green;
							$grid[$startline+1][$startlinex][3] = $blue;
							$grid[$startline+2][$startlinex][1] = $red;
							$grid[$startline+2][$startlinex][2] = $green;
							$grid[$startline+2][$startlinex][3] = $blue;
							if ($linesize > 3) {
								$grid[$startline+3][$startlinex][1] = $red;
								$grid[$startline+3][$startlinex][2] = $green;
								$grid[$startline+3][$startlinex][3] = $blue;
							}
							if ($linesize > 4) {
								$grid[$startline+4][$startlinex][1] = $red;
								$grid[$startline+4][$startlinex][2] = $green;
								$grid[$startline+4][$startlinex][3] = $blue;
							}
							if ($linesize > 5) {
								$grid[$startline+5][$startlinex][1] = $red;
								$grid[$startline+5][$startlinex][2] = $green;
								$grid[$startline+5][$startlinex][3] = $blue;
							}
						}
						$linevar++;
					
					}
				
				}
			
				$xend = 256;
				$yend = 256;
				$nublines = rand(256,640);
			
			
				if ($_REQUEST['hlines'] == 'one') {
		
		
					// Line drawing one colour
					
					$linevar = 1;
					//$nublines = rand(3,16);
					
					while ($linevar <= $nublines) {
						$red = rand($r11, $r21);
						$green = rand($r31, $r41);
						$blue = rand($r51, $r61);
						$linesize = rand(3,6);
						$startline = rand(1,$yend);
						$startlinex = rand(1,$xend);
						$grid[$startline][$startlinex][1] = $red;
						$grid[$startline][$startlinex][2] = $green;
						$grid[$startline][$startlinex][3] = $blue;
						$grid[$startline][$startlinex+1][1] = $red;
						$grid[$startline][$startlinex+1][2] = $green;
						$grid[$startline][$startlinex+1][3] = $blue;
						$grid[$startline][$startlinex+2][1] = $red;
						$grid[$startline][$startlinex+2][2] = $green;
						$grid[$startline][$startlinex+2][3] = $blue;
						if ($linesize > 3) {
							$grid[$startline][$startlinex+3][1] = $red;
							$grid[$startline][$startlinex+3][2] = $green;
							$grid[$startline][$startlinex+3][3] = $blue;
						}
						if ($linesize > 4) {
							$grid[$startline][$startlinex+4][1] = $red;
							$grid[$startline][$startlinex+4][2] = $green;
							$grid[$startline][$startlinex+4][3] = $blue;
						}
						if ($linesize > 5) {
							$grid[$startline][$startlinex+5][1] = $red;
							$grid[$startline][$startlinex+5][2] = $green;
							$grid[$startline][$startlinex+5][3] = $blue;
						}
						$linevar++;
					
					}
				
				} else if ($_REQUEST['hlines'] == 'random') {
				
				
					// Line drawing random colours
					
					$linevar = 1;
					//$nublines = rand(3,16);
					
					while ($linevar <= $nublines) {
						$num = rand(1, 8);
						if ($num == 1) {
							$red = rand($r11, $r21);
							$green = rand($r31, $r41);
							$blue = rand($r51, $r61);
							$linesize = rand(3,6);
							$startline = rand(1,$yend);
							$startlinex = rand(1,$xend);
							$grid[$startline][$startlinex][1] = $red;
							$grid[$startline][$startlinex][2] = $green;
							$grid[$startline][$startlinex][3] = $blue;
							$grid[$startline][$startlinex+1][1] = $red;
							$grid[$startline][$startlinex+1][2] = $green;
							$grid[$startline][$startlinex+1][3] = $blue;
							$grid[$startline][$startlinex+2][1] = $red;
							$grid[$startline][$startlinex+2][2] = $green;
							$grid[$startline][$startlinex+2][3] = $blue;
							if ($linesize > 3) {
								$grid[$startline][$startlinex+3][1] = $red;
								$grid[$startline][$startlinex+3][2] = $green;
								$grid[$startline][$startlinex+3][3] = $blue;
							}
							if ($linesize > 4) {
								$grid[$startline][$startlinex+4][1] = $red;
								$grid[$startline][$startlinex+4][2] = $green;
								$grid[$startline][$startlinex+4][3] = $blue;
							}
							if ($linesize > 5) {
								$grid[$startline][$startlinex+5][1] = $red;
								$grid[$startline][$startlinex+5][2] = $green;
								$grid[$startline][$startlinex+5][3] = $blue;
							}
						}
						else if ($num == 2) {
							$red = rand($r12, $r22);
							$green = rand($r32, $r42);
							$blue = rand($r52, $r62);
							$linesize = rand(3,6);
							$startline = rand(1,$yend);
							$startlinex = rand(1,$xend);
							$grid[$startline][$startlinex][1] = $red;
							$grid[$startline][$startlinex][2] = $green;
							$grid[$startline][$startlinex][3] = $blue;
							$grid[$startline][$startlinex+1][1] = $red;
							$grid[$startline][$startlinex+1][2] = $green;
							$grid[$startline][$startlinex+1][3] = $blue;
							$grid[$startline][$startlinex+2][1] = $red;
							$grid[$startline][$startlinex+2][2] = $green;
							$grid[$startline][$startlinex+2][3] = $blue;
							if ($linesize > 3) {
								$grid[$startline][$startlinex+3][1] = $red;
								$grid[$startline][$startlinex+3][2] = $green;
								$grid[$startline][$startlinex+3][3] = $blue;
							}
							if ($linesize > 4) {
								$grid[$startline][$startlinex+4][1] = $red;
								$grid[$startline][$startlinex+4][2] = $green;
								$grid[$startline][$startlinex+4][3] = $blue;
							}
							if ($linesize > 5) {
								$grid[$startline][$startlinex+5][1] = $red;
								$grid[$startline][$startlinex+5][2] = $green;
								$grid[$startline][$startlinex+5][3] = $blue;
							}
						}
						else if ($num == 3) {
							$red = rand($r13, $r23);
							$green = rand($r33, $r43);
							$blue = rand($r53, $r63);
							$linesize = rand(3,6);
							$startline = rand(1,$yend);
							$startlinex = rand(1,$xend);
							$grid[$startline][$startlinex][1] = $red;
							$grid[$startline][$startlinex][2] = $green;
							$grid[$startline][$startlinex][3] = $blue;
							$grid[$startline][$startlinex+1][1] = $red;
							$grid[$startline][$startlinex+1][2] = $green;
							$grid[$startline][$startlinex+1][3] = $blue;
							$grid[$startline][$startlinex+2][1] = $red;
							$grid[$startline][$startlinex+2][2] = $green;
							$grid[$startline][$startlinex+2][3] = $blue;
							if ($linesize > 3) {
								$grid[$startline][$startlinex+3][1] = $red;
								$grid[$startline][$startlinex+3][2] = $green;
								$grid[$startline][$startlinex+3][3] = $blue;
							}
							if ($linesize > 4) {
								$grid[$startline][$startlinex+4][1] = $red;
								$grid[$startline][$startlinex+4][2] = $green;
								$grid[$startline][$startlinex+4][3] = $blue;
							}
							if ($linesize > 5) {
								$grid[$startline][$startlinex+5][1] = $red;
								$grid[$startline][$startlinex+5][2] = $green;
								$grid[$startline][$startlinex+5][3] = $blue;
							}
						}
						else if ($num == 4) {
							$red = rand($r14, $r24);
							$green = rand($r34, $r44);
							$blue = rand($r54, $r64);
							$linesize = rand(3,6);
							$startline = rand(1,$yend);
							$startlinex = rand(1,$xend);
							$grid[$startline][$startlinex][1] = $red;
							$grid[$startline][$startlinex][2] = $green;
							$grid[$startline][$startlinex][3] = $blue;
							$grid[$startline][$startlinex+1][1] = $red;
							$grid[$startline][$startlinex+1][2] = $green;
							$grid[$startline][$startlinex+1][3] = $blue;
							$grid[$startline][$startlinex+2][1] = $red;
							$grid[$startline][$startlinex+2][2] = $green;
							$grid[$startline][$startlinex+2][3] = $blue;
							if ($linesize > 3) {
								$grid[$startline][$startlinex+3][1] = $red;
								$grid[$startline][$startlinex+3][2] = $green;
								$grid[$startline][$startlinex+3][3] = $blue;
							}
							if ($linesize > 4) {
								$grid[$startline][$startlinex+4][1] = $red;
								$grid[$startline][$startlinex+4][2] = $green;
								$grid[$startline][$startlinex+4][3] = $blue;
							}
							if ($linesize > 5) {
								$grid[$startline][$startlinex+5][1] = $red;
								$grid[$startline][$startlinex+5][2] = $green;
								$grid[$startline][$startlinex+5][3] = $blue;
							}
						}
						else if ($num == 5) {
							$red = rand($r15, $r25);
							$green = rand($r35, $r45);
							$blue = rand($r55, $r65);
							$linesize = rand(3,6);
							$startline = rand(1,$yend);
							$startlinex = rand(1,$xend);
							$grid[$startline][$startlinex][1] = $red;
							$grid[$startline][$startlinex][2] = $green;
							$grid[$startline][$startlinex][3] = $blue;
							$grid[$startline][$startlinex+1][1] = $red;
							$grid[$startline][$startlinex+1][2] = $green;
							$grid[$startline][$startlinex+1][3] = $blue;
							$grid[$startline][$startlinex+2][1] = $red;
							$grid[$startline][$startlinex+2][2] = $green;
							$grid[$startline][$startlinex+2][3] = $blue;
							if ($linesize > 3) {
								$grid[$startline][$startlinex+3][1] = $red;
								$grid[$startline][$startlinex+3][2] = $green;
								$grid[$startline][$startlinex+3][3] = $blue;
							}
							if ($linesize > 4) {
								$grid[$startline][$startlinex+4][1] = $red;
								$grid[$startline][$startlinex+4][2] = $green;
								$grid[$startline][$startlinex+4][3] = $blue;
							}
							if ($linesize > 5) {
								$grid[$startline][$startlinex+5][1] = $red;
								$grid[$startline][$startlinex+5][2] = $green;
								$grid[$startline][$startlinex+5][3] = $blue;
							}
				
						}
						else if ($num == 6) {
							$red = rand($r16, $r26);
							$green = rand($r36, $r46);
							$blue = rand($r56, $r66);
							$linesize = rand(3,6);
							$startline = rand(1,$yend);
							$startlinex = rand(1,$xend);
							$grid[$startline][$startlinex][1] = $red;
							$grid[$startline][$startlinex][2] = $green;
							$grid[$startline][$startlinex][3] = $blue;
							$grid[$startline][$startlinex+1][1] = $red;
							$grid[$startline][$startlinex+1][2] = $green;
							$grid[$startline][$startlinex+1][3] = $blue;
							$grid[$startline][$startlinex+2][1] = $red;
							$grid[$startline][$startlinex+2][2] = $green;
							$grid[$startline][$startlinex+2][3] = $blue;
							if ($linesize > 3) {
								$grid[$startline][$startlinex+3][1] = $red;
								$grid[$startline][$startlinex+3][2] = $green;
								$grid[$startline][$startlinex+3][3] = $blue;
							}
							if ($linesize > 4) {
								$grid[$startline][$startlinex+4][1] = $red;
								$grid[$startline][$startlinex+4][2] = $green;
								$grid[$startline][$startlinex+4][3] = $blue;
							}
							if ($linesize > 5) {
								$grid[$startline][$startlinex+5][1] = $red;
								$grid[$startline][$startlinex+5][2] = $green;
								$grid[$startline][$startlinex+5][3] = $blue;
							}
						}
						else if ($num == 7) {
							$red = rand($r17, $r27);
							$green = rand($r37, $r47);
							$blue = rand($r57, $r67);
							$linesize = rand(3,6);
							$startline = rand(1,$yend);
							$startlinex = rand(1,$xend);
							$grid[$startline][$startlinex][1] = $red;
							$grid[$startline][$startlinex][2] = $green;
							$grid[$startline][$startlinex][3] = $blue;
							$grid[$startline][$startlinex+1][1] = $red;
							$grid[$startline][$startlinex+1][2] = $green;
							$grid[$startline][$startlinex+1][3] = $blue;
							$grid[$startline][$startlinex+2][1] = $red;
							$grid[$startline][$startlinex+2][2] = $green;
							$grid[$startline][$startlinex+2][3] = $blue;
							if ($linesize > 3) {
								$grid[$startline][$startlinex+3][1] = $red;
								$grid[$startline][$startlinex+3][2] = $green;
								$grid[$startline][$startlinex+3][3] = $blue;
							}
							if ($linesize > 4) {
								$grid[$startline][$startlinex+4][1] = $red;
								$grid[$startline][$startlinex+4][2] = $green;
								$grid[$startline][$startlinex+4][3] = $blue;
							}
							if ($linesize > 5) {
								$grid[$startline][$startlinex+5][1] = $red;
								$grid[$startline][$startlinex+5][2] = $green;
								$grid[$startline][$startlinex+5][3] = $blue;
							}
						}
						else {
							$red = rand($r18, $r28);
							$green = rand($r38, $r48);
							$blue = rand($r58, $r68);
							$linesize = rand(3,6);
							$startline = rand(1,$yend);
							$startlinex = rand(1,$xend);
							$grid[$startline][$startlinex][1] = $red;
							$grid[$startline][$startlinex][2] = $green;
							$grid[$startline][$startlinex][3] = $blue;
							$grid[$startline][$startlinex+1][1] = $red;
							$grid[$startline][$startlinex+1][2] = $green;
							$grid[$startline][$startlinex+1][3] = $blue;
							$grid[$startline][$startlinex+2][1] = $red;
							$grid[$startline][$startlinex+2][2] = $green;
							$grid[$startline][$startlinex+2][3] = $blue;
							if ($linesize > 3) {
								$grid[$startline][$startlinex+3][1] = $red;
								$grid[$startline][$startlinex+3][2] = $green;
								$grid[$startline][$startlinex+3][3] = $blue;
							}
							if ($linesize > 4) {
								$grid[$startline][$startlinex+4][1] = $red;
								$grid[$startline][$startlinex+4][2] = $green;
								$grid[$startline][$startlinex+4][3] = $blue;
							}
							if ($linesize > 5) {
								$grid[$startline][$startlinex+5][1] = $red;
								$grid[$startline][$startlinex+5][2] = $green;
								$grid[$startline][$startlinex+5][3] = $blue;
							}
						}
						$linevar++;
					
					}
				
				}
				
				if ($_REQUEST['crosses'] == 'one') {
		
		
					// Cross drawing one colour
					
					$linevar = 1;
					//$nublines = rand(3,16);
					
					while ($linevar <= $nublines) {
						$red = rand($r11, $r21);
						$green = rand($r31, $r41);
						$blue = rand($r51, $r61);
						$linesize = rand(3,6);
						$startline = rand(1,$yend);
						$startlinex = rand(1,$xend);
						$grid[$startline][$startlinex][1] = $red;
						$grid[$startline][$startlinex][2] = $green;
						$grid[$startline][$startlinex][3] = $blue;
						$grid[$startline+1][$startlinex][1] = $red;
						$grid[$startline+1][$startlinex][2] = $green;
						$grid[$startline+1][$startlinex][3] = $blue;
						$grid[$startline-1][$startlinex][1] = $red;
						$grid[$startline-1][$startlinex][2] = $green;
						$grid[$startline-1][$startlinex][3] = $blue;
						if ($linesize > 3) {
							$grid[$startline+2][$startlinex][1] = $red;
							$grid[$startline+2][$startlinex][2] = $green;
							$grid[$startline+2][$startlinex][3] = $blue;
							$grid[$startline-2][$startlinex][1] = $red;
							$grid[$startline-2][$startlinex][2] = $green;
							$grid[$startline-2][$startlinex][3] = $blue;
						}
						if ($linesize > 4) {
							$grid[$startline+3][$startlinex][1] = $red;
							$grid[$startline+3][$startlinex][2] = $green;
							$grid[$startline+3][$startlinex][3] = $blue;
							$grid[$startline-3][$startlinex][1] = $red;
							$grid[$startline-3][$startlinex][2] = $green;
							$grid[$startline-3][$startlinex][3] = $blue;
						}
						if ($linesize > 5) {
							$grid[$startline+4][$startlinex][1] = $red;
							$grid[$startline+4][$startlinex][2] = $green;
							$grid[$startline+4][$startlinex][3] = $blue;
							$grid[$startline-4][$startlinex][1] = $red;
							$grid[$startline-4][$startlinex][2] = $green;
							$grid[$startline-4][$startlinex][3] = $blue;
						}
						$grid[$startline][$startlinex+1][1] = $red;
						$grid[$startline][$startlinex+1][2] = $green;
						$grid[$startline][$startlinex+1][3] = $blue;
						$grid[$startline][$startlinex-1][1] = $red;
						$grid[$startline][$startlinex-1][2] = $green;
						$grid[$startline][$startlinex-1][3] = $blue;
						if ($linesize > 3) {
							$grid[$startline][$startlinex+2][1] = $red;
							$grid[$startline][$startlinex+2][2] = $green;
							$grid[$startline][$startlinex+2][3] = $blue;
							$grid[$startline][$startlinex-2][1] = $red;
							$grid[$startline][$startlinex-2][2] = $green;
							$grid[$startline][$startlinex-2][3] = $blue;
						}
						if ($linesize > 4) {
							$grid[$startline][$startlinex+3][1] = $red;
							$grid[$startline][$startlinex+3][2] = $green;
							$grid[$startline][$startlinex+3][3] = $blue;
							$grid[$startline][$startlinex-3][1] = $red;
							$grid[$startline][$startlinex-3][2] = $green;
							$grid[$startline][$startlinex-3][3] = $blue;
						}
						if ($linesize > 5) {
							$grid[$startline][$startlinex+4][1] = $red;
							$grid[$startline][$startlinex+4][2] = $green;
							$grid[$startline][$startlinex+4][3] = $blue;
							$grid[$startline][$startlinex-4][1] = $red;
							$grid[$startline][$startlinex-4][2] = $green;
							$grid[$startline][$startlinex-4][3] = $blue;
						}
						$linevar++;
					
					}
					
				} else if ($_REQUEST['crosses'] == 'random') {
				
				
					// Cross drawing random colours
					
					$linevar = 1;
					//$nublines = rand(3,16);
					
					while ($linevar <= $nublines) {
						$num = rand(1, 8);
						if ($num == 1) {
							$red = rand($r11, $r21);
							$green = rand($r31, $r41);
							$blue = rand($r51, $r61);
							$linesize = rand(3,6);
							$startline = rand(1,$yend);
							$startlinex = rand(1,$xend);
							$grid[$startline][$startlinex][1] = $red;
							$grid[$startline][$startlinex][2] = $green;
							$grid[$startline][$startlinex][3] = $blue;
							$grid[$startline+1][$startlinex][1] = $red;
							$grid[$startline+1][$startlinex][2] = $green;
							$grid[$startline+1][$startlinex][3] = $blue;
							$grid[$startline-1][$startlinex][1] = $red;
							$grid[$startline-1][$startlinex][2] = $green;
							$grid[$startline-1][$startlinex][3] = $blue;
							if ($linesize > 3) {
								$grid[$startline+2][$startlinex][1] = $red;
								$grid[$startline+2][$startlinex][2] = $green;
								$grid[$startline+2][$startlinex][3] = $blue;
								$grid[$startline-2][$startlinex][1] = $red;
								$grid[$startline-2][$startlinex][2] = $green;
								$grid[$startline-2][$startlinex][3] = $blue;
							}
							if ($linesize > 4) {
								$grid[$startline+3][$startlinex][1] = $red;
								$grid[$startline+3][$startlinex][2] = $green;
								$grid[$startline+3][$startlinex][3] = $blue;
								$grid[$startline-3][$startlinex][1] = $red;
								$grid[$startline-3][$startlinex][2] = $green;
								$grid[$startline-3][$startlinex][3] = $blue;
							}
							if ($linesize > 5) {
								$grid[$startline+4][$startlinex][1] = $red;
								$grid[$startline+4][$startlinex][2] = $green;
								$grid[$startline+4][$startlinex][3] = $blue;
								$grid[$startline-4][$startlinex][1] = $red;
								$grid[$startline-4][$startlinex][2] = $green;
								$grid[$startline-4][$startlinex][3] = $blue;
							}
							$grid[$startline][$startlinex+1][1] = $red;
							$grid[$startline][$startlinex+1][2] = $green;
							$grid[$startline][$startlinex+1][3] = $blue;
							$grid[$startline][$startlinex-1][1] = $red;
							$grid[$startline][$startlinex-1][2] = $green;
							$grid[$startline][$startlinex-1][3] = $blue;
							if ($linesize > 3) {
								$grid[$startline][$startlinex+2][1] = $red;
								$grid[$startline][$startlinex+2][2] = $green;
								$grid[$startline][$startlinex+2][3] = $blue;
								$grid[$startline][$startlinex-2][1] = $red;
								$grid[$startline][$startlinex-2][2] = $green;
								$grid[$startline][$startlinex-2][3] = $blue;
							}
							if ($linesize > 4) {
								$grid[$startline][$startlinex+3][1] = $red;
								$grid[$startline][$startlinex+3][2] = $green;
								$grid[$startline][$startlinex+3][3] = $blue;
								$grid[$startline][$startlinex-3][1] = $red;
								$grid[$startline][$startlinex-3][2] = $green;
								$grid[$startline][$startlinex-3][3] = $blue;
							}
							if ($linesize > 5) {
								$grid[$startline][$startlinex+4][1] = $red;
								$grid[$startline][$startlinex+4][2] = $green;
								$grid[$startline][$startlinex+4][3] = $blue;
								$grid[$startline][$startlinex-4][1] = $red;
								$grid[$startline][$startlinex-4][2] = $green;
								$grid[$startline][$startlinex-4][3] = $blue;
							}
						}
						else if ($num == 2) {
							$red = rand($r12, $r22);
							$green = rand($r32, $r42);
							$blue = rand($r52, $r62);
							$linesize = rand(3,6);
							$startline = rand(1,$yend);
							$startlinex = rand(1,$xend);
							$grid[$startline][$startlinex][1] = $red;
							$grid[$startline][$startlinex][2] = $green;
							$grid[$startline][$startlinex][3] = $blue;
							$grid[$startline+1][$startlinex][1] = $red;
							$grid[$startline+1][$startlinex][2] = $green;
							$grid[$startline+1][$startlinex][3] = $blue;
							$grid[$startline-1][$startlinex][1] = $red;
							$grid[$startline-1][$startlinex][2] = $green;
							$grid[$startline-1][$startlinex][3] = $blue;
							if ($linesize > 3) {
								$grid[$startline+2][$startlinex][1] = $red;
								$grid[$startline+2][$startlinex][2] = $green;
								$grid[$startline+2][$startlinex][3] = $blue;
								$grid[$startline-2][$startlinex][1] = $red;
								$grid[$startline-2][$startlinex][2] = $green;
								$grid[$startline-2][$startlinex][3] = $blue;
							}
							if ($linesize > 4) {
								$grid[$startline+3][$startlinex][1] = $red;
								$grid[$startline+3][$startlinex][2] = $green;
								$grid[$startline+3][$startlinex][3] = $blue;
								$grid[$startline-3][$startlinex][1] = $red;
								$grid[$startline-3][$startlinex][2] = $green;
								$grid[$startline-3][$startlinex][3] = $blue;

							}
							if ($linesize > 5) {
								$grid[$startline+4][$startlinex][1] = $red;
								$grid[$startline+4][$startlinex][2] = $green;
								$grid[$startline+4][$startlinex][3] = $blue;
								$grid[$startline-4][$startlinex][1] = $red;
								$grid[$startline-4][$startlinex][2] = $green;
								$grid[$startline-4][$startlinex][3] = $blue;
							}
							$grid[$startline][$startlinex+1][1] = $red;
							$grid[$startline][$startlinex+1][2] = $green;
							$grid[$startline][$startlinex+1][3] = $blue;
							$grid[$startline][$startlinex-1][1] = $red;
							$grid[$startline][$startlinex-1][2] = $green;
							$grid[$startline][$startlinex-1][3] = $blue;
							if ($linesize > 3) {
								$grid[$startline][$startlinex+2][1] = $red;
								$grid[$startline][$startlinex+2][2] = $green;
								$grid[$startline][$startlinex+2][3] = $blue;
								$grid[$startline][$startlinex-2][1] = $red;
								$grid[$startline][$startlinex-2][2] = $green;
								$grid[$startline][$startlinex-2][3] = $blue;
							}
							if ($linesize > 4) {
								$grid[$startline][$startlinex+3][1] = $red;
								$grid[$startline][$startlinex+3][2] = $green;
								$grid[$startline][$startlinex+3][3] = $blue;
								$grid[$startline][$startlinex-3][1] = $red;
								$grid[$startline][$startlinex-3][2] = $green;
								$grid[$startline][$startlinex-3][3] = $blue;
							}
							if ($linesize > 5) {
								$grid[$startline][$startlinex+4][1] = $red;
								$grid[$startline][$startlinex+4][2] = $green;
								$grid[$startline][$startlinex+4][3] = $blue;
								$grid[$startline][$startlinex-4][1] = $red;
								$grid[$startline][$startlinex-4][2] = $green;
								$grid[$startline][$startlinex-4][3] = $blue;
							}
		
						}
						else if ($num == 3) {
							$red = rand($r13, $r23);
							$green = rand($r33, $r43);
							$blue = rand($r53, $r63);
							$linesize = rand(3,6);
							$startline = rand(1,$yend);
							$startlinex = rand(1,$xend);
							$grid[$startline][$startlinex][1] = $red;
							$grid[$startline][$startlinex][2] = $green;
							$grid[$startline][$startlinex][3] = $blue;
							$grid[$startline+1][$startlinex][1] = $red;
							$grid[$startline+1][$startlinex][2] = $green;
							$grid[$startline+1][$startlinex][3] = $blue;
							$grid[$startline-1][$startlinex][1] = $red;
							$grid[$startline-1][$startlinex][2] = $green;
							$grid[$startline-1][$startlinex][3] = $blue;
							if ($linesize > 3) {
								$grid[$startline+2][$startlinex][1] = $red;
								$grid[$startline+2][$startlinex][2] = $green;
								$grid[$startline+2][$startlinex][3] = $blue;
								$grid[$startline-2][$startlinex][1] = $red;
								$grid[$startline-2][$startlinex][2] = $green;
								$grid[$startline-2][$startlinex][3] = $blue;
							}
							if ($linesize > 4) {
								$grid[$startline+3][$startlinex][1] = $red;
								$grid[$startline+3][$startlinex][2] = $green;
								$grid[$startline+3][$startlinex][3] = $blue;
								$grid[$startline-3][$startlinex][1] = $red;
								$grid[$startline-3][$startlinex][2] = $green;
								$grid[$startline-3][$startlinex][3] = $blue;
							}
							if ($linesize > 5) {
								$grid[$startline+4][$startlinex][1] = $red;
								$grid[$startline+4][$startlinex][2] = $green;
								$grid[$startline+4][$startlinex][3] = $blue;
								$grid[$startline-4][$startlinex][1] = $red;
								$grid[$startline-4][$startlinex][2] = $green;
								$grid[$startline-4][$startlinex][3] = $blue;
							}
							$grid[$startline][$startlinex+1][1] = $red;
							$grid[$startline][$startlinex+1][2] = $green;
							$grid[$startline][$startlinex+1][3] = $blue;
							$grid[$startline][$startlinex-1][1] = $red;
							$grid[$startline][$startlinex-1][2] = $green;
							$grid[$startline][$startlinex-1][3] = $blue;
							if ($linesize > 3) {
								$grid[$startline][$startlinex+2][1] = $red;
								$grid[$startline][$startlinex+2][2] = $green;
								$grid[$startline][$startlinex+2][3] = $blue;
								$grid[$startline][$startlinex-2][1] = $red;
								$grid[$startline][$startlinex-2][2] = $green;
								$grid[$startline][$startlinex-2][3] = $blue;
							}
							if ($linesize > 4) {
								$grid[$startline][$startlinex+3][1] = $red;
								$grid[$startline][$startlinex+3][2] = $green;
								$grid[$startline][$startlinex+3][3] = $blue;
								$grid[$startline][$startlinex-3][1] = $red;
								$grid[$startline][$startlinex-3][2] = $green;
								$grid[$startline][$startlinex-3][3] = $blue;
							}
							if ($linesize > 5) {
								$grid[$startline][$startlinex+4][1] = $red;
								$grid[$startline][$startlinex+4][2] = $green;
								$grid[$startline][$startlinex+4][3] = $blue;
								$grid[$startline][$startlinex-4][1] = $red;
								$grid[$startline][$startlinex-4][2] = $green;
								$grid[$startline][$startlinex-4][3] = $blue;
							}
		
						}
						else if ($num == 4) {
							$red = rand($r14, $r24);
							$green = rand($r34, $r44);
							$blue = rand($r54, $r64);
							$linesize = rand(3,6);
							$startline = rand(1,$yend);
							$startlinex = rand(1,$xend);
							$grid[$startline][$startlinex][1] = $red;
							$grid[$startline][$startlinex][2] = $green;
							$grid[$startline][$startlinex][3] = $blue;
							$grid[$startline+1][$startlinex][1] = $red;
							$grid[$startline+1][$startlinex][2] = $green;
							$grid[$startline+1][$startlinex][3] = $blue;
							$grid[$startline-1][$startlinex][1] = $red;
							$grid[$startline-1][$startlinex][2] = $green;
							$grid[$startline-1][$startlinex][3] = $blue;
							if ($linesize > 3) {
								$grid[$startline+2][$startlinex][1] = $red;
								$grid[$startline+2][$startlinex][2] = $green;
								$grid[$startline+2][$startlinex][3] = $blue;
								$grid[$startline-2][$startlinex][1] = $red;
								$grid[$startline-2][$startlinex][2] = $green;
								$grid[$startline-2][$startlinex][3] = $blue;
							}
							if ($linesize > 4) {
								$grid[$startline+3][$startlinex][1] = $red;
								$grid[$startline+3][$startlinex][2] = $green;
								$grid[$startline+3][$startlinex][3] = $blue;
								$grid[$startline-3][$startlinex][1] = $red;
								$grid[$startline-3][$startlinex][2] = $green;
								$grid[$startline-3][$startlinex][3] = $blue;
							}
							if ($linesize > 5) {
								$grid[$startline+4][$startlinex][1] = $red;
								$grid[$startline+4][$startlinex][2] = $green;
								$grid[$startline+4][$startlinex][3] = $blue;
								$grid[$startline-4][$startlinex][1] = $red;
								$grid[$startline-4][$startlinex][2] = $green;
								$grid[$startline-4][$startlinex][3] = $blue;
							}
							$grid[$startline][$startlinex+1][1] = $red;
							$grid[$startline][$startlinex+1][2] = $green;
							$grid[$startline][$startlinex+1][3] = $blue;
							$grid[$startline][$startlinex-1][1] = $red;
							$grid[$startline][$startlinex-1][2] = $green;
							$grid[$startline][$startlinex-1][3] = $blue;
							if ($linesize > 3) {
								$grid[$startline][$startlinex+2][1] = $red;
								$grid[$startline][$startlinex+2][2] = $green;
								$grid[$startline][$startlinex+2][3] = $blue;
								$grid[$startline][$startlinex-2][1] = $red;
								$grid[$startline][$startlinex-2][2] = $green;
								$grid[$startline][$startlinex-2][3] = $blue;
							}
							if ($linesize > 4) {
								$grid[$startline][$startlinex+3][1] = $red;
								$grid[$startline][$startlinex+3][2] = $green;
								$grid[$startline][$startlinex+3][3] = $blue;
								$grid[$startline][$startlinex-3][1] = $red;
								$grid[$startline][$startlinex-3][2] = $green;
								$grid[$startline][$startlinex-3][3] = $blue;
							}
							if ($linesize > 5) {
								$grid[$startline][$startlinex+4][1] = $red;
								$grid[$startline][$startlinex+4][2] = $green;
								$grid[$startline][$startlinex+4][3] = $blue;
								$grid[$startline][$startlinex-4][1] = $red;
								$grid[$startline][$startlinex-4][2] = $green;
								$grid[$startline][$startlinex-4][3] = $blue;
							}
		
						}
						else if ($num == 5) {
							$red = rand($r15, $r25);
							$green = rand($r35, $r45);
							$blue = rand($r55, $r65);
							$linesize = rand(3,6);
							$startline = rand(1,$yend);
							$startlinex = rand(1,$xend);
							$grid[$startline][$startlinex][1] = $red;
							$grid[$startline][$startlinex][2] = $green;
							$grid[$startline][$startlinex][3] = $blue;
							$grid[$startline+1][$startlinex][1] = $red;
							$grid[$startline+1][$startlinex][2] = $green;
							$grid[$startline+1][$startlinex][3] = $blue;
							$grid[$startline-1][$startlinex][1] = $red;
							$grid[$startline-1][$startlinex][2] = $green;
							$grid[$startline-1][$startlinex][3] = $blue;
							if ($linesize > 3) {
								$grid[$startline+2][$startlinex][1] = $red;
								$grid[$startline+2][$startlinex][2] = $green;
								$grid[$startline+2][$startlinex][3] = $blue;
								$grid[$startline-2][$startlinex][1] = $red;
								$grid[$startline-2][$startlinex][2] = $green;
								$grid[$startline-2][$startlinex][3] = $blue;
							}
							if ($linesize > 4) {
								$grid[$startline+3][$startlinex][1] = $red;
								$grid[$startline+3][$startlinex][2] = $green;
								$grid[$startline+3][$startlinex][3] = $blue;
								$grid[$startline-3][$startlinex][1] = $red;
								$grid[$startline-3][$startlinex][2] = $green;
								$grid[$startline-3][$startlinex][3] = $blue;
							}
							if ($linesize > 5) {
								$grid[$startline+4][$startlinex][1] = $red;
								$grid[$startline+4][$startlinex][2] = $green;
								$grid[$startline+4][$startlinex][3] = $blue;
								$grid[$startline-4][$startlinex][1] = $red;
								$grid[$startline-4][$startlinex][2] = $green;
								$grid[$startline-4][$startlinex][3] = $blue;
							}
							$grid[$startline][$startlinex+1][1] = $red;
							$grid[$startline][$startlinex+1][2] = $green;
							$grid[$startline][$startlinex+1][3] = $blue;
							$grid[$startline][$startlinex-1][1] = $red;
							$grid[$startline][$startlinex-1][2] = $green;
							$grid[$startline][$startlinex-1][3] = $blue;
							if ($linesize > 3) {
								$grid[$startline][$startlinex+2][1] = $red;
								$grid[$startline][$startlinex+2][2] = $green;
								$grid[$startline][$startlinex+2][3] = $blue;
								$grid[$startline][$startlinex-2][1] = $red;
								$grid[$startline][$startlinex-2][2] = $green;
								$grid[$startline][$startlinex-2][3] = $blue;
							}
							if ($linesize > 4) {
								$grid[$startline][$startlinex+3][1] = $red;
								$grid[$startline][$startlinex+3][2] = $green;
								$grid[$startline][$startlinex+3][3] = $blue;
								$grid[$startline][$startlinex-3][1] = $red;
								$grid[$startline][$startlinex-3][2] = $green;
								$grid[$startline][$startlinex-3][3] = $blue;
							}
							if ($linesize > 5) {
								$grid[$startline][$startlinex+4][1] = $red;
								$grid[$startline][$startlinex+4][2] = $green;
								$grid[$startline][$startlinex+4][3] = $blue;
								$grid[$startline][$startlinex-4][1] = $red;
								$grid[$startline][$startlinex-4][2] = $green;
								$grid[$startline][$startlinex-4][3] = $blue;
							}
		
						}
						else if ($num == 6) {
							$red = rand($r16, $r26);
							$green = rand($r36, $r46);
							$blue = rand($r56, $r66);
							$linesize = rand(3,6);
							$startline = rand(1,$yend);
							$startlinex = rand(1,$xend);
							$grid[$startline][$startlinex][1] = $red;
							$grid[$startline][$startlinex][2] = $green;
							$grid[$startline][$startlinex][3] = $blue;
							$grid[$startline+1][$startlinex][1] = $red;
							$grid[$startline+1][$startlinex][2] = $green;
							$grid[$startline+1][$startlinex][3] = $blue;
							$grid[$startline-1][$startlinex][1] = $red;
							$grid[$startline-1][$startlinex][2] = $green;
							$grid[$startline-1][$startlinex][3] = $blue;
							if ($linesize > 3) {
								$grid[$startline+2][$startlinex][1] = $red;
								$grid[$startline+2][$startlinex][2] = $green;
								$grid[$startline+2][$startlinex][3] = $blue;
								$grid[$startline-2][$startlinex][1] = $red;
								$grid[$startline-2][$startlinex][2] = $green;
								$grid[$startline-2][$startlinex][3] = $blue;
							}
							if ($linesize > 4) {
								$grid[$startline+3][$startlinex][1] = $red;
								$grid[$startline+3][$startlinex][2] = $green;
								$grid[$startline+3][$startlinex][3] = $blue;
								$grid[$startline-3][$startlinex][1] = $red;
								$grid[$startline-3][$startlinex][2] = $green;
								$grid[$startline-3][$startlinex][3] = $blue;
							}
							if ($linesize > 5) {
								$grid[$startline+4][$startlinex][1] = $red;
								$grid[$startline+4][$startlinex][2] = $green;
								$grid[$startline+4][$startlinex][3] = $blue;
								$grid[$startline-4][$startlinex][1] = $red;
								$grid[$startline-4][$startlinex][2] = $green;
								$grid[$startline-4][$startlinex][3] = $blue;
							}
							$grid[$startline][$startlinex+1][1] = $red;
							$grid[$startline][$startlinex+1][2] = $green;
							$grid[$startline][$startlinex+1][3] = $blue;
							$grid[$startline][$startlinex-1][1] = $red;
							$grid[$startline][$startlinex-1][2] = $green;
							$grid[$startline][$startlinex-1][3] = $blue;
							if ($linesize > 3) {
								$grid[$startline][$startlinex+2][1] = $red;
								$grid[$startline][$startlinex+2][2] = $green;
								$grid[$startline][$startlinex+2][3] = $blue;
								$grid[$startline][$startlinex-2][1] = $red;
								$grid[$startline][$startlinex-2][2] = $green;
								$grid[$startline][$startlinex-2][3] = $blue;
							}
							if ($linesize > 4) {
								$grid[$startline][$startlinex+3][1] = $red;
								$grid[$startline][$startlinex+3][2] = $green;
								$grid[$startline][$startlinex+3][3] = $blue;
								$grid[$startline][$startlinex-3][1] = $red;
								$grid[$startline][$startlinex-3][2] = $green;
								$grid[$startline][$startlinex-3][3] = $blue;
							}
							if ($linesize > 5) {
								$grid[$startline][$startlinex+4][1] = $red;
								$grid[$startline][$startlinex+4][2] = $green;
								$grid[$startline][$startlinex+4][3] = $blue;
								$grid[$startline][$startlinex-4][1] = $red;
								$grid[$startline][$startlinex-4][2] = $green;
								$grid[$startline][$startlinex-4][3] = $blue;
							}
		
						}
						else if ($num == 7) {
							$red = rand($r17, $r27);
							$green = rand($r37, $r47);
							$blue = rand($r57, $r67);
							$linesize = rand(3,6);
							$startline = rand(1,$yend);
							$startlinex = rand(1,$xend);
							$grid[$startline][$startlinex][1] = $red;
							$grid[$startline][$startlinex][2] = $green;
							$grid[$startline][$startlinex][3] = $blue;
							$grid[$startline+1][$startlinex][1] = $red;
							$grid[$startline+1][$startlinex][2] = $green;
							$grid[$startline+1][$startlinex][3] = $blue;
							$grid[$startline-1][$startlinex][1] = $red;
							$grid[$startline-1][$startlinex][2] = $green;
							$grid[$startline-1][$startlinex][3] = $blue;
							if ($linesize > 3) {
								$grid[$startline+2][$startlinex][1] = $red;
								$grid[$startline+2][$startlinex][2] = $green;
								$grid[$startline+2][$startlinex][3] = $blue;
								$grid[$startline-2][$startlinex][1] = $red;
								$grid[$startline-2][$startlinex][2] = $green;
								$grid[$startline-2][$startlinex][3] = $blue;
							}
							if ($linesize > 4) {
								$grid[$startline+3][$startlinex][1] = $red;
								$grid[$startline+3][$startlinex][2] = $green;
								$grid[$startline+3][$startlinex][3] = $blue;
								$grid[$startline-3][$startlinex][1] = $red;
								$grid[$startline-3][$startlinex][2] = $green;
								$grid[$startline-3][$startlinex][3] = $blue;
							}
							if ($linesize > 5) {
								$grid[$startline+4][$startlinex][1] = $red;
								$grid[$startline+4][$startlinex][2] = $green;
								$grid[$startline+4][$startlinex][3] = $blue;
								$grid[$startline-4][$startlinex][1] = $red;
								$grid[$startline-4][$startlinex][2] = $green;

								$grid[$startline-4][$startlinex][3] = $blue;
							}
							$grid[$startline][$startlinex+1][1] = $red;
							$grid[$startline][$startlinex+1][2] = $green;
							$grid[$startline][$startlinex+1][3] = $blue;
							$grid[$startline][$startlinex-1][1] = $red;
							$grid[$startline][$startlinex-1][2] = $green;
							$grid[$startline][$startlinex-1][3] = $blue;
							if ($linesize > 3) {
								$grid[$startline][$startlinex+2][1] = $red;
								$grid[$startline][$startlinex+2][2] = $green;
								$grid[$startline][$startlinex+2][3] = $blue;
								$grid[$startline][$startlinex-2][1] = $red;
								$grid[$startline][$startlinex-2][2] = $green;
								$grid[$startline][$startlinex-2][3] = $blue;
							}
							if ($linesize > 4) {
								$grid[$startline][$startlinex+3][1] = $red;
								$grid[$startline][$startlinex+3][2] = $green;
								$grid[$startline][$startlinex+3][3] = $blue;
								$grid[$startline][$startlinex-3][1] = $red;
								$grid[$startline][$startlinex-3][2] = $green;
								$grid[$startline][$startlinex-3][3] = $blue;
							}
							if ($linesize > 5) {
								$grid[$startline][$startlinex+4][1] = $red;
								$grid[$startline][$startlinex+4][2] = $green;
								$grid[$startline][$startlinex+4][3] = $blue;
								$grid[$startline][$startlinex-4][1] = $red;
								$grid[$startline][$startlinex-4][2] = $green;
								$grid[$startline][$startlinex-4][3] = $blue;
							}
		
						}
						else {
							$red = rand($r18, $r28);
							$green = rand($r38, $r48);
							$blue = rand($r58, $r68);
							$linesize = rand(3,6);
							$startline = rand(1,$yend);
							$startlinex = rand(1,$xend);
							$grid[$startline][$startlinex][1] = $red;
							$grid[$startline][$startlinex][2] = $green;
							$grid[$startline][$startlinex][3] = $blue;
							$grid[$startline+1][$startlinex][1] = $red;
							$grid[$startline+1][$startlinex][2] = $green;
							$grid[$startline+1][$startlinex][3] = $blue;
							$grid[$startline-1][$startlinex][1] = $red;
							$grid[$startline-1][$startlinex][2] = $green;
							$grid[$startline-1][$startlinex][3] = $blue;
							if ($linesize > 3) {
								$grid[$startline+2][$startlinex][1] = $red;
								$grid[$startline+2][$startlinex][2] = $green;
								$grid[$startline+2][$startlinex][3] = $blue;
								$grid[$startline-2][$startlinex][1] = $red;
								$grid[$startline-2][$startlinex][2] = $green;
								$grid[$startline-2][$startlinex][3] = $blue;
							}
							if ($linesize > 4) {
								$grid[$startline+3][$startlinex][1] = $red;
								$grid[$startline+3][$startlinex][2] = $green;
								$grid[$startline+3][$startlinex][3] = $blue;
								$grid[$startline-3][$startlinex][1] = $red;
								$grid[$startline-3][$startlinex][2] = $green;
								$grid[$startline-3][$startlinex][3] = $blue;
							}
							if ($linesize > 5) {
								$grid[$startline+4][$startlinex][1] = $red;
								$grid[$startline+4][$startlinex][2] = $green;
								$grid[$startline+4][$startlinex][3] = $blue;
								$grid[$startline-4][$startlinex][1] = $red;
								$grid[$startline-4][$startlinex][2] = $green;
								$grid[$startline-4][$startlinex][3] = $blue;
							}
							$grid[$startline][$startlinex+1][1] = $red;
							$grid[$startline][$startlinex+1][2] = $green;
							$grid[$startline][$startlinex+1][3] = $blue;
							$grid[$startline][$startlinex-1][1] = $red;
							$grid[$startline][$startlinex-1][2] = $green;
							$grid[$startline][$startlinex-1][3] = $blue;
							if ($linesize > 3) {
								$grid[$startline][$startlinex+2][1] = $red;
								$grid[$startline][$startlinex+2][2] = $green;
								$grid[$startline][$startlinex+2][3] = $blue;
								$grid[$startline][$startlinex-2][1] = $red;
								$grid[$startline][$startlinex-2][2] = $green;
								$grid[$startline][$startlinex-2][3] = $blue;
							}
							if ($linesize > 4) {
								$grid[$startline][$startlinex+3][1] = $red;
								$grid[$startline][$startlinex+3][2] = $green;
								$grid[$startline][$startlinex+3][3] = $blue;
								$grid[$startline][$startlinex-3][1] = $red;
								$grid[$startline][$startlinex-3][2] = $green;
								$grid[$startline][$startlinex-3][3] = $blue;
							}
							if ($linesize > 5) {
								$grid[$startline][$startlinex+4][1] = $red;
								$grid[$startline][$startlinex+4][2] = $green;
								$grid[$startline][$startlinex+4][3] = $blue;
								$grid[$startline][$startlinex-4][1] = $red;
								$grid[$startline][$startlinex-4][2] = $green;
								$grid[$startline][$startlinex-4][3] = $blue;
							}
		
						}
						$linevar++;
					
					}
				
				}
					
				// Draw a pixel grid
			
				$gvar = 1;
				while ($gvar < $ygridextent) {
					$rvar = 1;
					while ($rvar < $xgridextent) {
						echo '<div style="background:rgb('.$grid[$gvar][$rvar][1].','.$grid[$gvar][$rvar][2].','.$grid[$gvar][$rvar][3].');">  </div>';
						$rvar++;
					}
					$gvar++;
				}
			
			}
			?>
        </div>
        <div class="plholder">
        <?php
		
			if ($_REQUEST['lpgrid'] == 1) {
			
				// Make the large pixel grid
				
				$xgridextent = 513;
				$ygridextent = 513;
				
				$gv = 1;
				
				while ($gv < $ygridextent) {
					$rv = 1;
					
					while ($rv < $xgridextent) {
						$num = rand(1, 8);
						if ($num == 1) {
							$red = rand($r11, $r21);
							$green = rand($r31, $r41);
							$blue = rand($r51, $r61);
							$grid[$gv][$rv] = array();
							$grid[$gv][$rv][1] = $red;
							$grid[$gv][$rv][2] = $green;
							$grid[$gv][$rv][3] = $blue;
						}
						else if ($num == 2) {
							$red = rand($r12, $r22);
							$green = rand($r32, $r42);
							$blue = rand($r52, $r62);
							$grid[$gv][$rv] = array();
							$grid[$gv][$rv][1] = $red;
							$grid[$gv][$rv][2] = $green;
							$grid[$gv][$rv][3] = $blue;
						}
						else if ($num == 3) {
							$red = rand($r13, $r23);
							$green = rand($r33, $r43);
							$blue = rand($r53, $r63);
							$grid[$gv][$rv] = array();
							$grid[$gv][$rv][1] = $red;
							$grid[$gv][$rv][2] = $green;
							$grid[$gv][$rv][3] = $blue;
						}
						else if ($num == 4) {
							$red = rand($r14, $r24);
							$green = rand($r34, $r44);
							$blue = rand($r54, $r64);
							$grid[$gv][$rv] = array();
							$grid[$gv][$rv][1] = $red;
							$grid[$gv][$rv][2] = $green;
							$grid[$gv][$rv][3] = $blue;
						}
						else if ($num == 5) {
							$red = rand($r15, $r25);
							$green = rand($r35, $r45);
							$blue = rand($r55, $r65);
							$grid[$gv][$rv] = array();
							$grid[$gv][$rv][1] = $red;
							$grid[$gv][$rv][2] = $green;
							$grid[$gv][$rv][3] = $blue;
				
						}
						else if ($num == 6) {
							$red = rand($r16, $r26);
							$green = rand($r36, $r46);
							$blue = rand($r56, $r66);
							$grid[$gv][$rv] = array();
							$grid[$gv][$rv][1] = $red;
							$grid[$gv][$rv][2] = $green;
							$grid[$gv][$rv][3] = $blue;
						}
						else if ($num == 7) {
							$red = rand($r17, $r27);
							$green = rand($r37, $r47);
							$blue = rand($r57, $r67);
							$grid[$gv][$rv] = array();
							$grid[$gv][$rv][1] = $red;
							$grid[$gv][$rv][2] = $green;
							$grid[$gv][$rv][3] = $blue;
						}
						else {
							$red = rand($r18, $r28);
							$green = rand($r38, $r48);
							$blue = rand($r58, $r68);
							$grid[$gv][$rv] = array();
							$grid[$gv][$rv][1] = $red;
							$grid[$gv][$rv][2] = $green;
							$grid[$gv][$rv][3] = $blue;
						}
						$rv++;
					}
					$gv++;
				}
		
		 
				$xend = 512;
				$yend = 512;
				$nublines = rand(1024,2560);
		 
				if ($_REQUEST['lines'] == 'one') {
		
		
					// Line drawing one colour
					
					$linevar = 1;
					//$nublines = rand(3,16);
					
					while ($linevar <= $nublines) {
						$red = rand($r11, $r21);
						$green = rand($r31, $r41);
						$blue = rand($r51, $r61);
						$linesize = rand(3,6);
						$startline = rand(1,$yend);
						$startlinex = rand(1,$xend);
						$grid[$startline][$startlinex][1] = $red;
						$grid[$startline][$startlinex][2] = $green;
						$grid[$startline][$startlinex][3] = $blue;
						$grid[$startline+1][$startlinex][1] = $red;
						$grid[$startline+1][$startlinex][2] = $green;
						$grid[$startline+1][$startlinex][3] = $blue;
						$grid[$startline+2][$startlinex][1] = $red;
						$grid[$startline+2][$startlinex][2] = $green;
						$grid[$startline+2][$startlinex][3] = $blue;
						if ($linesize > 3) {
							$grid[$startline+3][$startlinex][1] = $red;
							$grid[$startline+3][$startlinex][2] = $green;
							$grid[$startline+3][$startlinex][3] = $blue;
						}
						if ($linesize > 4) {
							$grid[$startline+4][$startlinex][1] = $red;
							$grid[$startline+4][$startlinex][2] = $green;
							$grid[$startline+4][$startlinex][3] = $blue;
						}
						if ($linesize > 5) {
							$grid[$startline+5][$startlinex][1] = $red;
							$grid[$startline+5][$startlinex][2] = $green;
							$grid[$startline+5][$startlinex][3] = $blue;
						}
						$linevar++;
					
					}
				
				} else if ($_REQUEST['lines'] == 'random') {
				
				
					// Line drawing random colours
					
					$linevar = 1;
					//$nublines = rand(3,16);
					
					while ($linevar <= $nublines) {
						$num = rand(1, 8);
						if ($num == 1) {
							$red = rand($r11, $r21);
							$green = rand($r31, $r41);
							$blue = rand($r51, $r61);
							$linesize = rand(3,6);
							$startline = rand(1,$yend);
							$startlinex = rand(1,$xend);
							$grid[$startline][$startlinex][1] = $red;
							$grid[$startline][$startlinex][2] = $green;
							$grid[$startline][$startlinex][3] = $blue;
							$grid[$startline+1][$startlinex][1] = $red;
							$grid[$startline+1][$startlinex][2] = $green;
							$grid[$startline+1][$startlinex][3] = $blue;
							$grid[$startline+2][$startlinex][1] = $red;
							$grid[$startline+2][$startlinex][2] = $green;
							$grid[$startline+2][$startlinex][3] = $blue;
							if ($linesize > 3) {
								$grid[$startline+3][$startlinex][1] = $red;
								$grid[$startline+3][$startlinex][2] = $green;
								$grid[$startline+3][$startlinex][3] = $blue;
							}
							if ($linesize > 4) {
								$grid[$startline+4][$startlinex][1] = $red;
								$grid[$startline+4][$startlinex][2] = $green;
								$grid[$startline+4][$startlinex][3] = $blue;
							}
							if ($linesize > 5) {
								$grid[$startline+5][$startlinex][1] = $red;
								$grid[$startline+5][$startlinex][2] = $green;
								$grid[$startline+5][$startlinex][3] = $blue;
							}
						}
						else if ($num == 2) {
							$red = rand($r12, $r22);
							$green = rand($r32, $r42);
							$blue = rand($r52, $r62);
							$linesize = rand(3,6);
							$startline = rand(1,$yend);
							$startlinex = rand(1,$xend);
							$grid[$startline][$startlinex][1] = $red;
							$grid[$startline][$startlinex][2] = $green;
							$grid[$startline][$startlinex][3] = $blue;
							$grid[$startline+1][$startlinex][1] = $red;
							$grid[$startline+1][$startlinex][2] = $green;
							$grid[$startline+1][$startlinex][3] = $blue;
							$grid[$startline+2][$startlinex][1] = $red;
							$grid[$startline+2][$startlinex][2] = $green;
							$grid[$startline+2][$startlinex][3] = $blue;
							if ($linesize > 3) {
								$grid[$startline+3][$startlinex][1] = $red;
								$grid[$startline+3][$startlinex][2] = $green;
								$grid[$startline+3][$startlinex][3] = $blue;
							}
							if ($linesize > 4) {
								$grid[$startline+4][$startlinex][1] = $red;
								$grid[$startline+4][$startlinex][2] = $green;
								$grid[$startline+4][$startlinex][3] = $blue;
							}
							if ($linesize > 5) {
								$grid[$startline+5][$startlinex][1] = $red;
								$grid[$startline+5][$startlinex][2] = $green;
								$grid[$startline+5][$startlinex][3] = $blue;
							}
						}
						else if ($num == 3) {
							$red = rand($r13, $r23);
							$green = rand($r33, $r43);
							$blue = rand($r53, $r63);
							$linesize = rand(3,6);
							$startline = rand(1,$yend);
							$startlinex = rand(1,$xend);
							$grid[$startline][$startlinex][1] = $red;
							$grid[$startline][$startlinex][2] = $green;
							$grid[$startline][$startlinex][3] = $blue;
							$grid[$startline+1][$startlinex][1] = $red;
							$grid[$startline+1][$startlinex][2] = $green;
							$grid[$startline+1][$startlinex][3] = $blue;
							$grid[$startline+2][$startlinex][1] = $red;
							$grid[$startline+2][$startlinex][2] = $green;
							$grid[$startline+2][$startlinex][3] = $blue;
							if ($linesize > 3) {
								$grid[$startline+3][$startlinex][1] = $red;
								$grid[$startline+3][$startlinex][2] = $green;
								$grid[$startline+3][$startlinex][3] = $blue;
							}
							if ($linesize > 4) {
								$grid[$startline+4][$startlinex][1] = $red;
								$grid[$startline+4][$startlinex][2] = $green;
								$grid[$startline+4][$startlinex][3] = $blue;
							}
							if ($linesize > 5) {
								$grid[$startline+5][$startlinex][1] = $red;
								$grid[$startline+5][$startlinex][2] = $green;
								$grid[$startline+5][$startlinex][3] = $blue;
							}
						}
						else if ($num == 4) {
							$red = rand($r14, $r24);
							$green = rand($r34, $r44);
							$blue = rand($r54, $r64);
							$linesize = rand(3,6);
							$startline = rand(1,$yend);
							$startlinex = rand(1,$xend);
							$grid[$startline][$startlinex][1] = $red;
							$grid[$startline][$startlinex][2] = $green;
							$grid[$startline][$startlinex][3] = $blue;
							$grid[$startline+1][$startlinex][1] = $red;
							$grid[$startline+1][$startlinex][2] = $green;
							$grid[$startline+1][$startlinex][3] = $blue;
							$grid[$startline+2][$startlinex][1] = $red;
							$grid[$startline+2][$startlinex][2] = $green;
							$grid[$startline+2][$startlinex][3] = $blue;
							if ($linesize > 3) {
								$grid[$startline+3][$startlinex][1] = $red;
								$grid[$startline+3][$startlinex][2] = $green;
								$grid[$startline+3][$startlinex][3] = $blue;
							}
							if ($linesize > 4) {
								$grid[$startline+4][$startlinex][1] = $red;
								$grid[$startline+4][$startlinex][2] = $green;
								$grid[$startline+4][$startlinex][3] = $blue;
							}
							if ($linesize > 5) {
								$grid[$startline+5][$startlinex][1] = $red;
								$grid[$startline+5][$startlinex][2] = $green;
								$grid[$startline+5][$startlinex][3] = $blue;
							}
						}
						else if ($num == 5) {
							$red = rand($r15, $r25);
							$green = rand($r35, $r45);
							$blue = rand($r55, $r65);
							$linesize = rand(3,6);
							$startline = rand(1,$yend);
							$startlinex = rand(1,$xend);
							$grid[$startline][$startlinex][1] = $red;
							$grid[$startline][$startlinex][2] = $green;
							$grid[$startline][$startlinex][3] = $blue;
							$grid[$startline+1][$startlinex][1] = $red;
							$grid[$startline+1][$startlinex][2] = $green;
							$grid[$startline+1][$startlinex][3] = $blue;
							$grid[$startline+2][$startlinex][1] = $red;
							$grid[$startline+2][$startlinex][2] = $green;
							$grid[$startline+2][$startlinex][3] = $blue;
							if ($linesize > 3) {
								$grid[$startline+3][$startlinex][1] = $red;
								$grid[$startline+3][$startlinex][2] = $green;
								$grid[$startline+3][$startlinex][3] = $blue;
							}
							if ($linesize > 4) {
								$grid[$startline+4][$startlinex][1] = $red;
								$grid[$startline+4][$startlinex][2] = $green;
								$grid[$startline+4][$startlinex][3] = $blue;
							}
							if ($linesize > 5) {
								$grid[$startline+5][$startlinex][1] = $red;
								$grid[$startline+5][$startlinex][2] = $green;
								$grid[$startline+5][$startlinex][3] = $blue;
							}
				
						}
						else if ($num == 6) {
							$red = rand($r16, $r26);
							$green = rand($r36, $r46);
							$blue = rand($r56, $r66);
							$linesize = rand(3,6);
							$startline = rand(1,$yend);
							$startlinex = rand(1,$xend);
							$grid[$startline][$startlinex][1] = $red;
							$grid[$startline][$startlinex][2] = $green;
							$grid[$startline][$startlinex][3] = $blue;
							$grid[$startline+1][$startlinex][1] = $red;
							$grid[$startline+1][$startlinex][2] = $green;
							$grid[$startline+1][$startlinex][3] = $blue;
							$grid[$startline+2][$startlinex][1] = $red;
							$grid[$startline+2][$startlinex][2] = $green;
							$grid[$startline+2][$startlinex][3] = $blue;
							if ($linesize > 3) {
								$grid[$startline+3][$startlinex][1] = $red;
								$grid[$startline+3][$startlinex][2] = $green;
								$grid[$startline+3][$startlinex][3] = $blue;
							}
							if ($linesize > 4) {
								$grid[$startline+4][$startlinex][1] = $red;
								$grid[$startline+4][$startlinex][2] = $green;
								$grid[$startline+4][$startlinex][3] = $blue;
							}
							if ($linesize > 5) {
								$grid[$startline+5][$startlinex][1] = $red;
								$grid[$startline+5][$startlinex][2] = $green;
								$grid[$startline+5][$startlinex][3] = $blue;
							}
						}
						else if ($num == 7) {
							$red = rand($r17, $r27);
							$green = rand($r37, $r47);
							$blue = rand($r57, $r67);
							$linesize = rand(3,6);
							$startline = rand(1,$yend);
							$startlinex = rand(1,$xend);
							$grid[$startline][$startlinex][1] = $red;
							$grid[$startline][$startlinex][2] = $green;
							$grid[$startline][$startlinex][3] = $blue;
							$grid[$startline+1][$startlinex][1] = $red;
							$grid[$startline+1][$startlinex][2] = $green;
							$grid[$startline+1][$startlinex][3] = $blue;
							$grid[$startline+2][$startlinex][1] = $red;
							$grid[$startline+2][$startlinex][2] = $green;
							$grid[$startline+2][$startlinex][3] = $blue;
							if ($linesize > 3) {
								$grid[$startline+3][$startlinex][1] = $red;
								$grid[$startline+3][$startlinex][2] = $green;
								$grid[$startline+3][$startlinex][3] = $blue;
							}
							if ($linesize > 4) {
								$grid[$startline+4][$startlinex][1] = $red;
								$grid[$startline+4][$startlinex][2] = $green;
								$grid[$startline+4][$startlinex][3] = $blue;
							}
							if ($linesize > 5) {
								$grid[$startline+5][$startlinex][1] = $red;
								$grid[$startline+5][$startlinex][2] = $green;
								$grid[$startline+5][$startlinex][3] = $blue;
							}
						}
						else {
							$red = rand($r18, $r28);
							$green = rand($r38, $r48);
							$blue = rand($r58, $r68);
							$linesize = rand(3,6);
							$startline = rand(1,$yend);
							$startlinex = rand(1,$xend);
							$grid[$startline][$startlinex][1] = $red;
							$grid[$startline][$startlinex][2] = $green;
							$grid[$startline][$startlinex][3] = $blue;
							$grid[$startline+1][$startlinex][1] = $red;
							$grid[$startline+1][$startlinex][2] = $green;
							$grid[$startline+1][$startlinex][3] = $blue;
							$grid[$startline+2][$startlinex][1] = $red;
							$grid[$startline+2][$startlinex][2] = $green;
							$grid[$startline+2][$startlinex][3] = $blue;
							if ($linesize > 3) {
								$grid[$startline+3][$startlinex][1] = $red;
								$grid[$startline+3][$startlinex][2] = $green;
								$grid[$startline+3][$startlinex][3] = $blue;
							}
							if ($linesize > 4) {
								$grid[$startline+4][$startlinex][1] = $red;
								$grid[$startline+4][$startlinex][2] = $green;
								$grid[$startline+4][$startlinex][3] = $blue;
							}
							if ($linesize > 5) {
								$grid[$startline+5][$startlinex][1] = $red;
								$grid[$startline+5][$startlinex][2] = $green;
								$grid[$startline+5][$startlinex][3] = $blue;
							}
						}
						$linevar++;
					
					}
				
				}
			
				$xend = 512;
				$yend = 512;
				$nublines = rand(1024,2560);
			
			
				if ($_REQUEST['hlines'] == 'one') {
		
		
					// Line drawing one colour
					
					$linevar = 1;
					//$nublines = rand(3,16);
					
					while ($linevar <= $nublines) {
						$red = rand($r11, $r21);
						$green = rand($r31, $r41);
						$blue = rand($r51, $r61);
						$linesize = rand(3,6);
						$startline = rand(1,$yend);
						$startlinex = rand(1,$xend);
						$grid[$startline][$startlinex][1] = $red;
						$grid[$startline][$startlinex][2] = $green;
						$grid[$startline][$startlinex][3] = $blue;
						$grid[$startline][$startlinex+1][1] = $red;
						$grid[$startline][$startlinex+1][2] = $green;
						$grid[$startline][$startlinex+1][3] = $blue;
						$grid[$startline][$startlinex+2][1] = $red;
						$grid[$startline][$startlinex+2][2] = $green;
						$grid[$startline][$startlinex+2][3] = $blue;
						if ($linesize > 3) {
							$grid[$startline][$startlinex+3][1] = $red;
							$grid[$startline][$startlinex+3][2] = $green;
							$grid[$startline][$startlinex+3][3] = $blue;
						}
						if ($linesize > 4) {
							$grid[$startline][$startlinex+4][1] = $red;
							$grid[$startline][$startlinex+4][2] = $green;
							$grid[$startline][$startlinex+4][3] = $blue;
						}
						if ($linesize > 5) {
							$grid[$startline][$startlinex+5][1] = $red;
							$grid[$startline][$startlinex+5][2] = $green;
							$grid[$startline][$startlinex+5][3] = $blue;
						}
						$linevar++;
					
					}
				
				} else if ($_REQUEST['hlines'] == 'random') {
				
				
					// Line drawing random colours
					
					$linevar = 1;
					//$nublines = rand(3,16);
					
					while ($linevar <= $nublines) {
						$num = rand(1, 8);
						if ($num == 1) {
							$red = rand($r11, $r21);
							$green = rand($r31, $r41);
							$blue = rand($r51, $r61);
							$linesize = rand(3,6);
							$startline = rand(1,$yend);
							$startlinex = rand(1,$xend);
							$grid[$startline][$startlinex][1] = $red;
							$grid[$startline][$startlinex][2] = $green;
							$grid[$startline][$startlinex][3] = $blue;
							$grid[$startline][$startlinex+1][1] = $red;
							$grid[$startline][$startlinex+1][2] = $green;
							$grid[$startline][$startlinex+1][3] = $blue;
							$grid[$startline][$startlinex+2][1] = $red;
							$grid[$startline][$startlinex+2][2] = $green;
							$grid[$startline][$startlinex+2][3] = $blue;
							if ($linesize > 3) {
								$grid[$startline][$startlinex+3][1] = $red;
								$grid[$startline][$startlinex+3][2] = $green;
								$grid[$startline][$startlinex+3][3] = $blue;
							}
							if ($linesize > 4) {
								$grid[$startline][$startlinex+4][1] = $red;
								$grid[$startline][$startlinex+4][2] = $green;
								$grid[$startline][$startlinex+4][3] = $blue;
							}
							if ($linesize > 5) {
								$grid[$startline][$startlinex+5][1] = $red;
								$grid[$startline][$startlinex+5][2] = $green;
								$grid[$startline][$startlinex+5][3] = $blue;
							}
						}
						else if ($num == 2) {
							$red = rand($r12, $r22);
							$green = rand($r32, $r42);
							$blue = rand($r52, $r62);
							$linesize = rand(3,6);
							$startline = rand(1,$yend);
							$startlinex = rand(1,$xend);
							$grid[$startline][$startlinex][1] = $red;
							$grid[$startline][$startlinex][2] = $green;
							$grid[$startline][$startlinex][3] = $blue;
							$grid[$startline][$startlinex+1][1] = $red;
							$grid[$startline][$startlinex+1][2] = $green;
							$grid[$startline][$startlinex+1][3] = $blue;
							$grid[$startline][$startlinex+2][1] = $red;
							$grid[$startline][$startlinex+2][2] = $green;
							$grid[$startline][$startlinex+2][3] = $blue;
							if ($linesize > 3) {
								$grid[$startline][$startlinex+3][1] = $red;
								$grid[$startline][$startlinex+3][2] = $green;
								$grid[$startline][$startlinex+3][3] = $blue;
							}
							if ($linesize > 4) {
								$grid[$startline][$startlinex+4][1] = $red;
								$grid[$startline][$startlinex+4][2] = $green;
								$grid[$startline][$startlinex+4][3] = $blue;
							}
							if ($linesize > 5) {
								$grid[$startline][$startlinex+5][1] = $red;
								$grid[$startline][$startlinex+5][2] = $green;
								$grid[$startline][$startlinex+5][3] = $blue;
							}
						}
						else if ($num == 3) {
							$red = rand($r13, $r23);
							$green = rand($r33, $r43);
							$blue = rand($r53, $r63);
							$linesize = rand(3,6);
							$startline = rand(1,$yend);
							$startlinex = rand(1,$xend);
							$grid[$startline][$startlinex][1] = $red;
							$grid[$startline][$startlinex][2] = $green;
							$grid[$startline][$startlinex][3] = $blue;
							$grid[$startline][$startlinex+1][1] = $red;
							$grid[$startline][$startlinex+1][2] = $green;
							$grid[$startline][$startlinex+1][3] = $blue;
							$grid[$startline][$startlinex+2][1] = $red;
							$grid[$startline][$startlinex+2][2] = $green;
							$grid[$startline][$startlinex+2][3] = $blue;
							if ($linesize > 3) {
								$grid[$startline][$startlinex+3][1] = $red;
								$grid[$startline][$startlinex+3][2] = $green;
								$grid[$startline][$startlinex+3][3] = $blue;
							}
							if ($linesize > 4) {
								$grid[$startline][$startlinex+4][1] = $red;
								$grid[$startline][$startlinex+4][2] = $green;
								$grid[$startline][$startlinex+4][3] = $blue;
							}
							if ($linesize > 5) {
								$grid[$startline][$startlinex+5][1] = $red;
								$grid[$startline][$startlinex+5][2] = $green;
								$grid[$startline][$startlinex+5][3] = $blue;
							}
						}
						else if ($num == 4) {
							$red = rand($r14, $r24);
							$green = rand($r34, $r44);
							$blue = rand($r54, $r64);
							$linesize = rand(3,6);
							$startline = rand(1,$yend);
							$startlinex = rand(1,$xend);
							$grid[$startline][$startlinex][1] = $red;
							$grid[$startline][$startlinex][2] = $green;
							$grid[$startline][$startlinex][3] = $blue;
							$grid[$startline][$startlinex+1][1] = $red;
							$grid[$startline][$startlinex+1][2] = $green;
							$grid[$startline][$startlinex+1][3] = $blue;
							$grid[$startline][$startlinex+2][1] = $red;
							$grid[$startline][$startlinex+2][2] = $green;
							$grid[$startline][$startlinex+2][3] = $blue;
							if ($linesize > 3) {
								$grid[$startline][$startlinex+3][1] = $red;
								$grid[$startline][$startlinex+3][2] = $green;
								$grid[$startline][$startlinex+3][3] = $blue;
							}
							if ($linesize > 4) {
								$grid[$startline][$startlinex+4][1] = $red;
								$grid[$startline][$startlinex+4][2] = $green;
								$grid[$startline][$startlinex+4][3] = $blue;
							}
							if ($linesize > 5) {
								$grid[$startline][$startlinex+5][1] = $red;
								$grid[$startline][$startlinex+5][2] = $green;
								$grid[$startline][$startlinex+5][3] = $blue;
							}
						}
						else if ($num == 5) {
							$red = rand($r15, $r25);
							$green = rand($r35, $r45);
							$blue = rand($r55, $r65);
							$linesize = rand(3,6);
							$startline = rand(1,$yend);
							$startlinex = rand(1,$xend);
							$grid[$startline][$startlinex][1] = $red;
							$grid[$startline][$startlinex][2] = $green;
							$grid[$startline][$startlinex][3] = $blue;
							$grid[$startline][$startlinex+1][1] = $red;
							$grid[$startline][$startlinex+1][2] = $green;
							$grid[$startline][$startlinex+1][3] = $blue;
							$grid[$startline][$startlinex+2][1] = $red;
							$grid[$startline][$startlinex+2][2] = $green;
							$grid[$startline][$startlinex+2][3] = $blue;
							if ($linesize > 3) {
								$grid[$startline][$startlinex+3][1] = $red;
								$grid[$startline][$startlinex+3][2] = $green;
								$grid[$startline][$startlinex+3][3] = $blue;
							}
							if ($linesize > 4) {
								$grid[$startline][$startlinex+4][1] = $red;
								$grid[$startline][$startlinex+4][2] = $green;
								$grid[$startline][$startlinex+4][3] = $blue;
							}
							if ($linesize > 5) {
								$grid[$startline][$startlinex+5][1] = $red;
								$grid[$startline][$startlinex+5][2] = $green;
								$grid[$startline][$startlinex+5][3] = $blue;
							}
				
						}
						else if ($num == 6) {
							$red = rand($r16, $r26);
							$green = rand($r36, $r46);
							$blue = rand($r56, $r66);
							$linesize = rand(3,6);
							$startline = rand(1,$yend);
							$startlinex = rand(1,$xend);
							$grid[$startline][$startlinex][1] = $red;
							$grid[$startline][$startlinex][2] = $green;
							$grid[$startline][$startlinex][3] = $blue;
							$grid[$startline][$startlinex+1][1] = $red;
							$grid[$startline][$startlinex+1][2] = $green;
							$grid[$startline][$startlinex+1][3] = $blue;
							$grid[$startline][$startlinex+2][1] = $red;
							$grid[$startline][$startlinex+2][2] = $green;
							$grid[$startline][$startlinex+2][3] = $blue;
							if ($linesize > 3) {
								$grid[$startline][$startlinex+3][1] = $red;
								$grid[$startline][$startlinex+3][2] = $green;
								$grid[$startline][$startlinex+3][3] = $blue;
							}
							if ($linesize > 4) {
								$grid[$startline][$startlinex+4][1] = $red;
								$grid[$startline][$startlinex+4][2] = $green;
								$grid[$startline][$startlinex+4][3] = $blue;
							}
							if ($linesize > 5) {
								$grid[$startline][$startlinex+5][1] = $red;
								$grid[$startline][$startlinex+5][2] = $green;
								$grid[$startline][$startlinex+5][3] = $blue;
							}
						}
						else if ($num == 7) {
							$red = rand($r17, $r27);
							$green = rand($r37, $r47);
							$blue = rand($r57, $r67);
							$linesize = rand(3,6);
							$startline = rand(1,$yend);
							$startlinex = rand(1,$xend);
							$grid[$startline][$startlinex][1] = $red;
							$grid[$startline][$startlinex][2] = $green;
							$grid[$startline][$startlinex][3] = $blue;
							$grid[$startline][$startlinex+1][1] = $red;
							$grid[$startline][$startlinex+1][2] = $green;
							$grid[$startline][$startlinex+1][3] = $blue;
							$grid[$startline][$startlinex+2][1] = $red;
							$grid[$startline][$startlinex+2][2] = $green;
							$grid[$startline][$startlinex+2][3] = $blue;
							if ($linesize > 3) {
								$grid[$startline][$startlinex+3][1] = $red;
								$grid[$startline][$startlinex+3][2] = $green;
								$grid[$startline][$startlinex+3][3] = $blue;
							}
							if ($linesize > 4) {
								$grid[$startline][$startlinex+4][1] = $red;
								$grid[$startline][$startlinex+4][2] = $green;
								$grid[$startline][$startlinex+4][3] = $blue;
							}
							if ($linesize > 5) {
								$grid[$startline][$startlinex+5][1] = $red;
								$grid[$startline][$startlinex+5][2] = $green;
								$grid[$startline][$startlinex+5][3] = $blue;
							}
						}
						else {
							$red = rand($r18, $r28);
							$green = rand($r38, $r48);
							$blue = rand($r58, $r68);
							$linesize = rand(3,6);
							$startline = rand(1,$yend);
							$startlinex = rand(1,$xend);
							$grid[$startline][$startlinex][1] = $red;
							$grid[$startline][$startlinex][2] = $green;
							$grid[$startline][$startlinex][3] = $blue;
							$grid[$startline][$startlinex+1][1] = $red;
							$grid[$startline][$startlinex+1][2] = $green;
							$grid[$startline][$startlinex+1][3] = $blue;
							$grid[$startline][$startlinex+2][1] = $red;
							$grid[$startline][$startlinex+2][2] = $green;
							$grid[$startline][$startlinex+2][3] = $blue;
							if ($linesize > 3) {
								$grid[$startline][$startlinex+3][1] = $red;
								$grid[$startline][$startlinex+3][2] = $green;
								$grid[$startline][$startlinex+3][3] = $blue;
							}
							if ($linesize > 4) {
								$grid[$startline][$startlinex+4][1] = $red;
								$grid[$startline][$startlinex+4][2] = $green;
								$grid[$startline][$startlinex+4][3] = $blue;
							}
							if ($linesize > 5) {
								$grid[$startline][$startlinex+5][1] = $red;
								$grid[$startline][$startlinex+5][2] = $green;
								$grid[$startline][$startlinex+5][3] = $blue;
							}
						}
						$linevar++;
					
					}
				
				}

				if ($_REQUEST['crosses'] == 'one') {
		
		
					// Cross drawing one colour
					
					$linevar = 1;
					//$nublines = rand(3,16);
					
					while ($linevar <= $nublines) {
						$red = rand($r11, $r21);
						$green = rand($r31, $r41);
						$blue = rand($r51, $r61);
						$linesize = rand(3,6);
						$startline = rand(1,$yend);
						$startlinex = rand(1,$xend);
						$grid[$startline][$startlinex][1] = $red;
						$grid[$startline][$startlinex][2] = $green;
						$grid[$startline][$startlinex][3] = $blue;
						$grid[$startline+1][$startlinex][1] = $red;
						$grid[$startline+1][$startlinex][2] = $green;
						$grid[$startline+1][$startlinex][3] = $blue;
						$grid[$startline-1][$startlinex][1] = $red;
						$grid[$startline-1][$startlinex][2] = $green;
						$grid[$startline-1][$startlinex][3] = $blue;
						if ($linesize > 3) {
							$grid[$startline+2][$startlinex][1] = $red;
							$grid[$startline+2][$startlinex][2] = $green;
							$grid[$startline+2][$startlinex][3] = $blue;
							$grid[$startline-2][$startlinex][1] = $red;
							$grid[$startline-2][$startlinex][2] = $green;
							$grid[$startline-2][$startlinex][3] = $blue;
						}
						if ($linesize > 4) {
							$grid[$startline+3][$startlinex][1] = $red;
							$grid[$startline+3][$startlinex][2] = $green;
							$grid[$startline+3][$startlinex][3] = $blue;
							$grid[$startline-3][$startlinex][1] = $red;
							$grid[$startline-3][$startlinex][2] = $green;
							$grid[$startline-3][$startlinex][3] = $blue;
						}
						if ($linesize > 5) {
							$grid[$startline+4][$startlinex][1] = $red;
							$grid[$startline+4][$startlinex][2] = $green;
							$grid[$startline+4][$startlinex][3] = $blue;
							$grid[$startline-4][$startlinex][1] = $red;
							$grid[$startline-4][$startlinex][2] = $green;
							$grid[$startline-4][$startlinex][3] = $blue;
						}
						$grid[$startline][$startlinex+1][1] = $red;
						$grid[$startline][$startlinex+1][2] = $green;
						$grid[$startline][$startlinex+1][3] = $blue;
						$grid[$startline][$startlinex-1][1] = $red;
						$grid[$startline][$startlinex-1][2] = $green;
						$grid[$startline][$startlinex-1][3] = $blue;
						if ($linesize > 3) {
							$grid[$startline][$startlinex+2][1] = $red;
							$grid[$startline][$startlinex+2][2] = $green;
							$grid[$startline][$startlinex+2][3] = $blue;
							$grid[$startline][$startlinex-2][1] = $red;
							$grid[$startline][$startlinex-2][2] = $green;
							$grid[$startline][$startlinex-2][3] = $blue;
						}
						if ($linesize > 4) {
							$grid[$startline][$startlinex+3][1] = $red;
							$grid[$startline][$startlinex+3][2] = $green;
							$grid[$startline][$startlinex+3][3] = $blue;
							$grid[$startline][$startlinex-3][1] = $red;
							$grid[$startline][$startlinex-3][2] = $green;
							$grid[$startline][$startlinex-3][3] = $blue;
						}
						if ($linesize > 5) {
							$grid[$startline][$startlinex+4][1] = $red;
							$grid[$startline][$startlinex+4][2] = $green;
							$grid[$startline][$startlinex+4][3] = $blue;
							$grid[$startline][$startlinex-4][1] = $red;
							$grid[$startline][$startlinex-4][2] = $green;
							$grid[$startline][$startlinex-4][3] = $blue;
						}
						$linevar++;
					
					}
					
				} else if ($_REQUEST['crosses'] == 'random') {
				
				
					// Cross drawing random colours
					
					$linevar = 1;
					//$nublines = rand(3,16);
					
					while ($linevar <= $nublines) {
						$num = rand(1, 8);
						if ($num == 1) {
							$red = rand($r11, $r21);
							$green = rand($r31, $r41);
							$blue = rand($r51, $r61);
							$linesize = rand(3,6);
							$startline = rand(1,$yend);
							$startlinex = rand(1,$xend);
							$grid[$startline][$startlinex][1] = $red;
							$grid[$startline][$startlinex][2] = $green;
							$grid[$startline][$startlinex][3] = $blue;
							$grid[$startline+1][$startlinex][1] = $red;
							$grid[$startline+1][$startlinex][2] = $green;
							$grid[$startline+1][$startlinex][3] = $blue;
							$grid[$startline-1][$startlinex][1] = $red;
							$grid[$startline-1][$startlinex][2] = $green;
							$grid[$startline-1][$startlinex][3] = $blue;
							if ($linesize > 3) {
								$grid[$startline+2][$startlinex][1] = $red;
								$grid[$startline+2][$startlinex][2] = $green;
								$grid[$startline+2][$startlinex][3] = $blue;
								$grid[$startline-2][$startlinex][1] = $red;
								$grid[$startline-2][$startlinex][2] = $green;
								$grid[$startline-2][$startlinex][3] = $blue;
							}
							if ($linesize > 4) {
								$grid[$startline+3][$startlinex][1] = $red;
								$grid[$startline+3][$startlinex][2] = $green;
								$grid[$startline+3][$startlinex][3] = $blue;
								$grid[$startline-3][$startlinex][1] = $red;
								$grid[$startline-3][$startlinex][2] = $green;
								$grid[$startline-3][$startlinex][3] = $blue;
							}
							if ($linesize > 5) {
								$grid[$startline+4][$startlinex][1] = $red;
								$grid[$startline+4][$startlinex][2] = $green;
								$grid[$startline+4][$startlinex][3] = $blue;
								$grid[$startline-4][$startlinex][1] = $red;
								$grid[$startline-4][$startlinex][2] = $green;
								$grid[$startline-4][$startlinex][3] = $blue;
							}
							$grid[$startline][$startlinex+1][1] = $red;
							$grid[$startline][$startlinex+1][2] = $green;
							$grid[$startline][$startlinex+1][3] = $blue;
							$grid[$startline][$startlinex-1][1] = $red;
							$grid[$startline][$startlinex-1][2] = $green;
							$grid[$startline][$startlinex-1][3] = $blue;
							if ($linesize > 3) {
								$grid[$startline][$startlinex+2][1] = $red;
								$grid[$startline][$startlinex+2][2] = $green;
								$grid[$startline][$startlinex+2][3] = $blue;
								$grid[$startline][$startlinex-2][1] = $red;
								$grid[$startline][$startlinex-2][2] = $green;
								$grid[$startline][$startlinex-2][3] = $blue;
							}
							if ($linesize > 4) {
								$grid[$startline][$startlinex+3][1] = $red;
								$grid[$startline][$startlinex+3][2] = $green;
								$grid[$startline][$startlinex+3][3] = $blue;
								$grid[$startline][$startlinex-3][1] = $red;
								$grid[$startline][$startlinex-3][2] = $green;
								$grid[$startline][$startlinex-3][3] = $blue;
							}
							if ($linesize > 5) {
								$grid[$startline][$startlinex+4][1] = $red;
								$grid[$startline][$startlinex+4][2] = $green;
								$grid[$startline][$startlinex+4][3] = $blue;
								$grid[$startline][$startlinex-4][1] = $red;
								$grid[$startline][$startlinex-4][2] = $green;
								$grid[$startline][$startlinex-4][3] = $blue;
							}
						}
						else if ($num == 2) {
							$red = rand($r12, $r22);
							$green = rand($r32, $r42);
							$blue = rand($r52, $r62);
							$linesize = rand(3,6);
							$startline = rand(1,$yend);
							$startlinex = rand(1,$xend);
							$grid[$startline][$startlinex][1] = $red;
							$grid[$startline][$startlinex][2] = $green;
							$grid[$startline][$startlinex][3] = $blue;
							$grid[$startline+1][$startlinex][1] = $red;
							$grid[$startline+1][$startlinex][2] = $green;
							$grid[$startline+1][$startlinex][3] = $blue;
							$grid[$startline-1][$startlinex][1] = $red;
							$grid[$startline-1][$startlinex][2] = $green;
							$grid[$startline-1][$startlinex][3] = $blue;
							if ($linesize > 3) {
								$grid[$startline+2][$startlinex][1] = $red;
								$grid[$startline+2][$startlinex][2] = $green;
								$grid[$startline+2][$startlinex][3] = $blue;
								$grid[$startline-2][$startlinex][1] = $red;
								$grid[$startline-2][$startlinex][2] = $green;
								$grid[$startline-2][$startlinex][3] = $blue;
							}
							if ($linesize > 4) {
								$grid[$startline+3][$startlinex][1] = $red;
								$grid[$startline+3][$startlinex][2] = $green;
								$grid[$startline+3][$startlinex][3] = $blue;
								$grid[$startline-3][$startlinex][1] = $red;
								$grid[$startline-3][$startlinex][2] = $green;
								$grid[$startline-3][$startlinex][3] = $blue;

							}
							if ($linesize > 5) {
								$grid[$startline+4][$startlinex][1] = $red;
								$grid[$startline+4][$startlinex][2] = $green;
								$grid[$startline+4][$startlinex][3] = $blue;
								$grid[$startline-4][$startlinex][1] = $red;
								$grid[$startline-4][$startlinex][2] = $green;
								$grid[$startline-4][$startlinex][3] = $blue;
							}
							$grid[$startline][$startlinex+1][1] = $red;
							$grid[$startline][$startlinex+1][2] = $green;
							$grid[$startline][$startlinex+1][3] = $blue;
							$grid[$startline][$startlinex-1][1] = $red;
							$grid[$startline][$startlinex-1][2] = $green;
							$grid[$startline][$startlinex-1][3] = $blue;
							if ($linesize > 3) {
								$grid[$startline][$startlinex+2][1] = $red;
								$grid[$startline][$startlinex+2][2] = $green;
								$grid[$startline][$startlinex+2][3] = $blue;
								$grid[$startline][$startlinex-2][1] = $red;
								$grid[$startline][$startlinex-2][2] = $green;
								$grid[$startline][$startlinex-2][3] = $blue;
							}
							if ($linesize > 4) {
								$grid[$startline][$startlinex+3][1] = $red;
								$grid[$startline][$startlinex+3][2] = $green;
								$grid[$startline][$startlinex+3][3] = $blue;
								$grid[$startline][$startlinex-3][1] = $red;
								$grid[$startline][$startlinex-3][2] = $green;
								$grid[$startline][$startlinex-3][3] = $blue;
							}
							if ($linesize > 5) {
								$grid[$startline][$startlinex+4][1] = $red;
								$grid[$startline][$startlinex+4][2] = $green;
								$grid[$startline][$startlinex+4][3] = $blue;
								$grid[$startline][$startlinex-4][1] = $red;
								$grid[$startline][$startlinex-4][2] = $green;
								$grid[$startline][$startlinex-4][3] = $blue;
							}
		
						}
						else if ($num == 3) {
							$red = rand($r13, $r23);
							$green = rand($r33, $r43);
							$blue = rand($r53, $r63);
							$linesize = rand(3,6);
							$startline = rand(1,$yend);
							$startlinex = rand(1,$xend);
							$grid[$startline][$startlinex][1] = $red;
							$grid[$startline][$startlinex][2] = $green;
							$grid[$startline][$startlinex][3] = $blue;
							$grid[$startline+1][$startlinex][1] = $red;
							$grid[$startline+1][$startlinex][2] = $green;
							$grid[$startline+1][$startlinex][3] = $blue;
							$grid[$startline-1][$startlinex][1] = $red;
							$grid[$startline-1][$startlinex][2] = $green;
							$grid[$startline-1][$startlinex][3] = $blue;
							if ($linesize > 3) {
								$grid[$startline+2][$startlinex][1] = $red;
								$grid[$startline+2][$startlinex][2] = $green;
								$grid[$startline+2][$startlinex][3] = $blue;
								$grid[$startline-2][$startlinex][1] = $red;
								$grid[$startline-2][$startlinex][2] = $green;
								$grid[$startline-2][$startlinex][3] = $blue;
							}
							if ($linesize > 4) {
								$grid[$startline+3][$startlinex][1] = $red;
								$grid[$startline+3][$startlinex][2] = $green;
								$grid[$startline+3][$startlinex][3] = $blue;
								$grid[$startline-3][$startlinex][1] = $red;
								$grid[$startline-3][$startlinex][2] = $green;
								$grid[$startline-3][$startlinex][3] = $blue;
							}
							if ($linesize > 5) {
								$grid[$startline+4][$startlinex][1] = $red;
								$grid[$startline+4][$startlinex][2] = $green;
								$grid[$startline+4][$startlinex][3] = $blue;
								$grid[$startline-4][$startlinex][1] = $red;
								$grid[$startline-4][$startlinex][2] = $green;
								$grid[$startline-4][$startlinex][3] = $blue;
							}
							$grid[$startline][$startlinex+1][1] = $red;
							$grid[$startline][$startlinex+1][2] = $green;
							$grid[$startline][$startlinex+1][3] = $blue;
							$grid[$startline][$startlinex-1][1] = $red;
							$grid[$startline][$startlinex-1][2] = $green;
							$grid[$startline][$startlinex-1][3] = $blue;
							if ($linesize > 3) {
								$grid[$startline][$startlinex+2][1] = $red;
								$grid[$startline][$startlinex+2][2] = $green;
								$grid[$startline][$startlinex+2][3] = $blue;
								$grid[$startline][$startlinex-2][1] = $red;
								$grid[$startline][$startlinex-2][2] = $green;
								$grid[$startline][$startlinex-2][3] = $blue;
							}
							if ($linesize > 4) {
								$grid[$startline][$startlinex+3][1] = $red;
								$grid[$startline][$startlinex+3][2] = $green;
								$grid[$startline][$startlinex+3][3] = $blue;
								$grid[$startline][$startlinex-3][1] = $red;
								$grid[$startline][$startlinex-3][2] = $green;
								$grid[$startline][$startlinex-3][3] = $blue;
							}
							if ($linesize > 5) {
								$grid[$startline][$startlinex+4][1] = $red;
								$grid[$startline][$startlinex+4][2] = $green;
								$grid[$startline][$startlinex+4][3] = $blue;
								$grid[$startline][$startlinex-4][1] = $red;
								$grid[$startline][$startlinex-4][2] = $green;
								$grid[$startline][$startlinex-4][3] = $blue;
							}
		
						}
						else if ($num == 4) {
							$red = rand($r14, $r24);
							$green = rand($r34, $r44);
							$blue = rand($r54, $r64);
							$linesize = rand(3,6);
							$startline = rand(1,$yend);
							$startlinex = rand(1,$xend);
							$grid[$startline][$startlinex][1] = $red;
							$grid[$startline][$startlinex][2] = $green;
							$grid[$startline][$startlinex][3] = $blue;
							$grid[$startline+1][$startlinex][1] = $red;
							$grid[$startline+1][$startlinex][2] = $green;
							$grid[$startline+1][$startlinex][3] = $blue;
							$grid[$startline-1][$startlinex][1] = $red;
							$grid[$startline-1][$startlinex][2] = $green;
							$grid[$startline-1][$startlinex][3] = $blue;
							if ($linesize > 3) {
								$grid[$startline+2][$startlinex][1] = $red;
								$grid[$startline+2][$startlinex][2] = $green;
								$grid[$startline+2][$startlinex][3] = $blue;
								$grid[$startline-2][$startlinex][1] = $red;
								$grid[$startline-2][$startlinex][2] = $green;
								$grid[$startline-2][$startlinex][3] = $blue;
							}
							if ($linesize > 4) {
								$grid[$startline+3][$startlinex][1] = $red;
								$grid[$startline+3][$startlinex][2] = $green;
								$grid[$startline+3][$startlinex][3] = $blue;
								$grid[$startline-3][$startlinex][1] = $red;
								$grid[$startline-3][$startlinex][2] = $green;
								$grid[$startline-3][$startlinex][3] = $blue;
							}
							if ($linesize > 5) {
								$grid[$startline+4][$startlinex][1] = $red;
								$grid[$startline+4][$startlinex][2] = $green;
								$grid[$startline+4][$startlinex][3] = $blue;
								$grid[$startline-4][$startlinex][1] = $red;
								$grid[$startline-4][$startlinex][2] = $green;
								$grid[$startline-4][$startlinex][3] = $blue;
							}
							$grid[$startline][$startlinex+1][1] = $red;
							$grid[$startline][$startlinex+1][2] = $green;
							$grid[$startline][$startlinex+1][3] = $blue;
							$grid[$startline][$startlinex-1][1] = $red;
							$grid[$startline][$startlinex-1][2] = $green;
							$grid[$startline][$startlinex-1][3] = $blue;
							if ($linesize > 3) {
								$grid[$startline][$startlinex+2][1] = $red;
								$grid[$startline][$startlinex+2][2] = $green;
								$grid[$startline][$startlinex+2][3] = $blue;
								$grid[$startline][$startlinex-2][1] = $red;
								$grid[$startline][$startlinex-2][2] = $green;
								$grid[$startline][$startlinex-2][3] = $blue;
							}
							if ($linesize > 4) {
								$grid[$startline][$startlinex+3][1] = $red;
								$grid[$startline][$startlinex+3][2] = $green;
								$grid[$startline][$startlinex+3][3] = $blue;
								$grid[$startline][$startlinex-3][1] = $red;
								$grid[$startline][$startlinex-3][2] = $green;
								$grid[$startline][$startlinex-3][3] = $blue;
							}
							if ($linesize > 5) {
								$grid[$startline][$startlinex+4][1] = $red;
								$grid[$startline][$startlinex+4][2] = $green;
								$grid[$startline][$startlinex+4][3] = $blue;
								$grid[$startline][$startlinex-4][1] = $red;
								$grid[$startline][$startlinex-4][2] = $green;
								$grid[$startline][$startlinex-4][3] = $blue;
							}
		
						}
						else if ($num == 5) {
							$red = rand($r15, $r25);
							$green = rand($r35, $r45);
							$blue = rand($r55, $r65);
							$linesize = rand(3,6);
							$startline = rand(1,$yend);
							$startlinex = rand(1,$xend);
							$grid[$startline][$startlinex][1] = $red;
							$grid[$startline][$startlinex][2] = $green;
							$grid[$startline][$startlinex][3] = $blue;
							$grid[$startline+1][$startlinex][1] = $red;
							$grid[$startline+1][$startlinex][2] = $green;
							$grid[$startline+1][$startlinex][3] = $blue;
							$grid[$startline-1][$startlinex][1] = $red;
							$grid[$startline-1][$startlinex][2] = $green;
							$grid[$startline-1][$startlinex][3] = $blue;
							if ($linesize > 3) {
								$grid[$startline+2][$startlinex][1] = $red;
								$grid[$startline+2][$startlinex][2] = $green;
								$grid[$startline+2][$startlinex][3] = $blue;
								$grid[$startline-2][$startlinex][1] = $red;
								$grid[$startline-2][$startlinex][2] = $green;
								$grid[$startline-2][$startlinex][3] = $blue;
							}
							if ($linesize > 4) {
								$grid[$startline+3][$startlinex][1] = $red;
								$grid[$startline+3][$startlinex][2] = $green;
								$grid[$startline+3][$startlinex][3] = $blue;
								$grid[$startline-3][$startlinex][1] = $red;
								$grid[$startline-3][$startlinex][2] = $green;
								$grid[$startline-3][$startlinex][3] = $blue;
							}
							if ($linesize > 5) {
								$grid[$startline+4][$startlinex][1] = $red;
								$grid[$startline+4][$startlinex][2] = $green;
								$grid[$startline+4][$startlinex][3] = $blue;
								$grid[$startline-4][$startlinex][1] = $red;
								$grid[$startline-4][$startlinex][2] = $green;
								$grid[$startline-4][$startlinex][3] = $blue;
							}
							$grid[$startline][$startlinex+1][1] = $red;
							$grid[$startline][$startlinex+1][2] = $green;
							$grid[$startline][$startlinex+1][3] = $blue;
							$grid[$startline][$startlinex-1][1] = $red;
							$grid[$startline][$startlinex-1][2] = $green;
							$grid[$startline][$startlinex-1][3] = $blue;
							if ($linesize > 3) {
								$grid[$startline][$startlinex+2][1] = $red;
								$grid[$startline][$startlinex+2][2] = $green;
								$grid[$startline][$startlinex+2][3] = $blue;
								$grid[$startline][$startlinex-2][1] = $red;
								$grid[$startline][$startlinex-2][2] = $green;
								$grid[$startline][$startlinex-2][3] = $blue;
							}
							if ($linesize > 4) {
								$grid[$startline][$startlinex+3][1] = $red;
								$grid[$startline][$startlinex+3][2] = $green;
								$grid[$startline][$startlinex+3][3] = $blue;
								$grid[$startline][$startlinex-3][1] = $red;
								$grid[$startline][$startlinex-3][2] = $green;
								$grid[$startline][$startlinex-3][3] = $blue;
							}
							if ($linesize > 5) {
								$grid[$startline][$startlinex+4][1] = $red;
								$grid[$startline][$startlinex+4][2] = $green;
								$grid[$startline][$startlinex+4][3] = $blue;
								$grid[$startline][$startlinex-4][1] = $red;
								$grid[$startline][$startlinex-4][2] = $green;
								$grid[$startline][$startlinex-4][3] = $blue;
							}
		
						}
						else if ($num == 6) {
							$red = rand($r16, $r26);
							$green = rand($r36, $r46);
							$blue = rand($r56, $r66);
							$linesize = rand(3,6);
							$startline = rand(1,$yend);
							$startlinex = rand(1,$xend);
							$grid[$startline][$startlinex][1] = $red;
							$grid[$startline][$startlinex][2] = $green;
							$grid[$startline][$startlinex][3] = $blue;
							$grid[$startline+1][$startlinex][1] = $red;
							$grid[$startline+1][$startlinex][2] = $green;
							$grid[$startline+1][$startlinex][3] = $blue;
							$grid[$startline-1][$startlinex][1] = $red;
							$grid[$startline-1][$startlinex][2] = $green;
							$grid[$startline-1][$startlinex][3] = $blue;
							if ($linesize > 3) {
								$grid[$startline+2][$startlinex][1] = $red;
								$grid[$startline+2][$startlinex][2] = $green;
								$grid[$startline+2][$startlinex][3] = $blue;
								$grid[$startline-2][$startlinex][1] = $red;
								$grid[$startline-2][$startlinex][2] = $green;
								$grid[$startline-2][$startlinex][3] = $blue;
							}
							if ($linesize > 4) {
								$grid[$startline+3][$startlinex][1] = $red;
								$grid[$startline+3][$startlinex][2] = $green;
								$grid[$startline+3][$startlinex][3] = $blue;
								$grid[$startline-3][$startlinex][1] = $red;
								$grid[$startline-3][$startlinex][2] = $green;
								$grid[$startline-3][$startlinex][3] = $blue;
							}
							if ($linesize > 5) {
								$grid[$startline+4][$startlinex][1] = $red;
								$grid[$startline+4][$startlinex][2] = $green;
								$grid[$startline+4][$startlinex][3] = $blue;
								$grid[$startline-4][$startlinex][1] = $red;
								$grid[$startline-4][$startlinex][2] = $green;
								$grid[$startline-4][$startlinex][3] = $blue;
							}
							$grid[$startline][$startlinex+1][1] = $red;
							$grid[$startline][$startlinex+1][2] = $green;
							$grid[$startline][$startlinex+1][3] = $blue;
							$grid[$startline][$startlinex-1][1] = $red;
							$grid[$startline][$startlinex-1][2] = $green;
							$grid[$startline][$startlinex-1][3] = $blue;
							if ($linesize > 3) {
								$grid[$startline][$startlinex+2][1] = $red;
								$grid[$startline][$startlinex+2][2] = $green;
								$grid[$startline][$startlinex+2][3] = $blue;
								$grid[$startline][$startlinex-2][1] = $red;
								$grid[$startline][$startlinex-2][2] = $green;
								$grid[$startline][$startlinex-2][3] = $blue;
							}
							if ($linesize > 4) {
								$grid[$startline][$startlinex+3][1] = $red;
								$grid[$startline][$startlinex+3][2] = $green;
								$grid[$startline][$startlinex+3][3] = $blue;
								$grid[$startline][$startlinex-3][1] = $red;
								$grid[$startline][$startlinex-3][2] = $green;
								$grid[$startline][$startlinex-3][3] = $blue;
							}
							if ($linesize > 5) {
								$grid[$startline][$startlinex+4][1] = $red;
								$grid[$startline][$startlinex+4][2] = $green;
								$grid[$startline][$startlinex+4][3] = $blue;
								$grid[$startline][$startlinex-4][1] = $red;
								$grid[$startline][$startlinex-4][2] = $green;
								$grid[$startline][$startlinex-4][3] = $blue;
							}
		
						}
						else if ($num == 7) {
							$red = rand($r17, $r27);
							$green = rand($r37, $r47);
							$blue = rand($r57, $r67);
							$linesize = rand(3,6);
							$startline = rand(1,$yend);
							$startlinex = rand(1,$xend);
							$grid[$startline][$startlinex][1] = $red;
							$grid[$startline][$startlinex][2] = $green;
							$grid[$startline][$startlinex][3] = $blue;
							$grid[$startline+1][$startlinex][1] = $red;
							$grid[$startline+1][$startlinex][2] = $green;
							$grid[$startline+1][$startlinex][3] = $blue;
							$grid[$startline-1][$startlinex][1] = $red;
							$grid[$startline-1][$startlinex][2] = $green;
							$grid[$startline-1][$startlinex][3] = $blue;
							if ($linesize > 3) {
								$grid[$startline+2][$startlinex][1] = $red;
								$grid[$startline+2][$startlinex][2] = $green;
								$grid[$startline+2][$startlinex][3] = $blue;
								$grid[$startline-2][$startlinex][1] = $red;
								$grid[$startline-2][$startlinex][2] = $green;
								$grid[$startline-2][$startlinex][3] = $blue;
							}
							if ($linesize > 4) {
								$grid[$startline+3][$startlinex][1] = $red;
								$grid[$startline+3][$startlinex][2] = $green;
								$grid[$startline+3][$startlinex][3] = $blue;
								$grid[$startline-3][$startlinex][1] = $red;
								$grid[$startline-3][$startlinex][2] = $green;
								$grid[$startline-3][$startlinex][3] = $blue;
							}
							if ($linesize > 5) {
								$grid[$startline+4][$startlinex][1] = $red;
								$grid[$startline+4][$startlinex][2] = $green;
								$grid[$startline+4][$startlinex][3] = $blue;
								$grid[$startline-4][$startlinex][1] = $red;
								$grid[$startline-4][$startlinex][2] = $green;

								$grid[$startline-4][$startlinex][3] = $blue;
							}
							$grid[$startline][$startlinex+1][1] = $red;
							$grid[$startline][$startlinex+1][2] = $green;
							$grid[$startline][$startlinex+1][3] = $blue;
							$grid[$startline][$startlinex-1][1] = $red;
							$grid[$startline][$startlinex-1][2] = $green;
							$grid[$startline][$startlinex-1][3] = $blue;
							if ($linesize > 3) {
								$grid[$startline][$startlinex+2][1] = $red;
								$grid[$startline][$startlinex+2][2] = $green;
								$grid[$startline][$startlinex+2][3] = $blue;
								$grid[$startline][$startlinex-2][1] = $red;
								$grid[$startline][$startlinex-2][2] = $green;
								$grid[$startline][$startlinex-2][3] = $blue;
							}
							if ($linesize > 4) {
								$grid[$startline][$startlinex+3][1] = $red;
								$grid[$startline][$startlinex+3][2] = $green;
								$grid[$startline][$startlinex+3][3] = $blue;
								$grid[$startline][$startlinex-3][1] = $red;
								$grid[$startline][$startlinex-3][2] = $green;
								$grid[$startline][$startlinex-3][3] = $blue;
							}
							if ($linesize > 5) {
								$grid[$startline][$startlinex+4][1] = $red;
								$grid[$startline][$startlinex+4][2] = $green;
								$grid[$startline][$startlinex+4][3] = $blue;
								$grid[$startline][$startlinex-4][1] = $red;
								$grid[$startline][$startlinex-4][2] = $green;
								$grid[$startline][$startlinex-4][3] = $blue;
							}
		
						}
						else {
							$red = rand($r18, $r28);
							$green = rand($r38, $r48);
							$blue = rand($r58, $r68);
							$linesize = rand(3,6);
							$startline = rand(1,$yend);
							$startlinex = rand(1,$xend);
							$grid[$startline][$startlinex][1] = $red;
							$grid[$startline][$startlinex][2] = $green;
							$grid[$startline][$startlinex][3] = $blue;
							$grid[$startline+1][$startlinex][1] = $red;
							$grid[$startline+1][$startlinex][2] = $green;
							$grid[$startline+1][$startlinex][3] = $blue;
							$grid[$startline-1][$startlinex][1] = $red;
							$grid[$startline-1][$startlinex][2] = $green;
							$grid[$startline-1][$startlinex][3] = $blue;
							if ($linesize > 3) {
								$grid[$startline+2][$startlinex][1] = $red;
								$grid[$startline+2][$startlinex][2] = $green;
								$grid[$startline+2][$startlinex][3] = $blue;
								$grid[$startline-2][$startlinex][1] = $red;
								$grid[$startline-2][$startlinex][2] = $green;
								$grid[$startline-2][$startlinex][3] = $blue;
							}
							if ($linesize > 4) {
								$grid[$startline+3][$startlinex][1] = $red;
								$grid[$startline+3][$startlinex][2] = $green;
								$grid[$startline+3][$startlinex][3] = $blue;
								$grid[$startline-3][$startlinex][1] = $red;
								$grid[$startline-3][$startlinex][2] = $green;
								$grid[$startline-3][$startlinex][3] = $blue;
							}
							if ($linesize > 5) {
								$grid[$startline+4][$startlinex][1] = $red;
								$grid[$startline+4][$startlinex][2] = $green;
								$grid[$startline+4][$startlinex][3] = $blue;
								$grid[$startline-4][$startlinex][1] = $red;
								$grid[$startline-4][$startlinex][2] = $green;
								$grid[$startline-4][$startlinex][3] = $blue;
							}
							$grid[$startline][$startlinex+1][1] = $red;
							$grid[$startline][$startlinex+1][2] = $green;
							$grid[$startline][$startlinex+1][3] = $blue;
							$grid[$startline][$startlinex-1][1] = $red;
							$grid[$startline][$startlinex-1][2] = $green;
							$grid[$startline][$startlinex-1][3] = $blue;
							if ($linesize > 3) {
								$grid[$startline][$startlinex+2][1] = $red;
								$grid[$startline][$startlinex+2][2] = $green;
								$grid[$startline][$startlinex+2][3] = $blue;
								$grid[$startline][$startlinex-2][1] = $red;
								$grid[$startline][$startlinex-2][2] = $green;
								$grid[$startline][$startlinex-2][3] = $blue;
							}
							if ($linesize > 4) {
								$grid[$startline][$startlinex+3][1] = $red;
								$grid[$startline][$startlinex+3][2] = $green;
								$grid[$startline][$startlinex+3][3] = $blue;
								$grid[$startline][$startlinex-3][1] = $red;
								$grid[$startline][$startlinex-3][2] = $green;
								$grid[$startline][$startlinex-3][3] = $blue;
							}
							if ($linesize > 5) {
								$grid[$startline][$startlinex+4][1] = $red;
								$grid[$startline][$startlinex+4][2] = $green;
								$grid[$startline][$startlinex+4][3] = $blue;
								$grid[$startline][$startlinex-4][1] = $red;
								$grid[$startline][$startlinex-4][2] = $green;
								$grid[$startline][$startlinex-4][3] = $blue;
							}
		
						}
						$linevar++;
					
					}
				
				}

				// Draw a pixel grid
			
				$gvar = 1;
				while ($gvar < $ygridextent) {
					$rvar = 1;
					while ($rvar < $xgridextent) {
						echo '<div style="background:rgb('.$grid[$gvar][$rvar][1].','.$grid[$gvar][$rvar][2].','.$grid[$gvar][$rvar][3].');">  </div>';
						$rvar++;
					}
					$gvar++;
				}
			
			}		
			
			if ($_REQUEST['ar'] == 1) 

			{?>
			
			<script type="text/javascript">
				window.setTimeout(subform,<?php echo $arr; ?>);

				function subform() {
				   document.getElementById('colourform').submit();
				}
			</script>
			 
			<?php 
			}
			
			echo '<br clear="all" /><pre>';
			
			
			
	/*	$grid = array
			  (
			  array(
				  array(),
				  ),
			  );
			  
*/
		
	/*
			$gv = 1;
			
			while ($gv < 17) {
				$rv = 1;
				
				while ($rv < 17) {
					$grid[$gv][$rv] = array();
					$grid[$gv][$rv][1] = $red;
					$grid[$gv][$rv][2] = $green;
					$grid[$gv][$rv][3] = $blue;
					$rv++;
				}
				$gv++;
			}
			 */
			//print_r($grid);
			
			echo '</pre>';
			?>
		</div>
	</body>
</html>
