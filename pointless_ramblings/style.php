<?php
	$colors = array(
		array(
			'r' => 212,
			'g' => 74,
			'b' => 133
		),
		array(
			'r' => 106,
			'g' => 68,
			'b' => 161
		),
		array(
			'r' => 25,
			'g' => 150,
			'b' => 181
		),
	);
	$num = mt_rand( 0, count( $colors ) - 1 );
	$rgbacolor = 'rgba( ' . $colors[$num]['r'] . ', ' . $colors[$num]['g'] . ', ' . $colors[$num]['b'] . ', 1 )';

	//random colors!
	//$rgbacolor = 'background: rgba( ' . mt_rand( 0, 255 ) . ', ' . mt_rand( 0, 255 ) . ', ' . mt_rand( 0, 255 ) . ', 1 );';

	header( 'Content-Type: text/css' );
?>

body {
	background: #F9F9F9;
	margin: 0;
	font-family: 'Pontano Sans', Arial;
	font-size: 16px;
	line-height: 24px;
	color: #444;
}

img {
	border: none;
}

a {
	text-decoration: none;
}
a:hover {
	color: #1A1B1B;
	text-decoration: underline;
}

h1, h3 {
	font-family: 'Trocchi', Arial;
	font-weight: normal;
	font-size: 28px;
	margin: 40px 0 0 0;
}
	h1 a, h3 a {
		color: #1A1B1b;
		border-bottom: 1px dashed #666;
	}
	h1 a:hover, h3 a:hover {
		color: <?php echo $rgbacolor; ?>;
		text-decoration: none;
	}

div.wrap {
	margin: 0 auto;
	width: 1070px;
}
	div.wrap h2.title {
		font-family: 'Trocchi', Arial;
		font-weight: normal;
		font-size: 48px;
		text-align: left;
		float: left;
		margin: 75px 0 0 0;
		width: 260px;
		line-height: 50px;
	}
		div.wrap h2.title a {
			display: block;
			color: #fff;
			width: 250px;
			text-decoration: none;
			padding: 180px 50px 50px 50px;
			background: <?php echo $rgbacolor; ?> url( img/keepcalm.png ) 50px 50px no-repeat;
			border: 5px solid <?php echo $rgbacolor; ?>;
		}
		div.wrap h2.title a:hover {
			color: <?php echo $rgbacolor; ?>;
			background: #fff  url( img/keepcalm_hover.png ) 50px 50px no-repeat;
		}

	div.wrap div#content {
		float: right;
		width: 680px;
		margin-top: 90px;
		min-height: 500px;
	}
	div.wrap div#sidebar {
		float: left;
		width: 260px;
		padding: 20px 50px;
	}
		div.wrap div#sidebar img.subscribe {
			float: left;
			padding-right: 5px;
			margin-top: 3px;
			width: 16px;
			height: 16px;
		}

	div.post div.meta {
		margin-top: 9px;
	}