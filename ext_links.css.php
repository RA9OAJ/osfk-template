body a::after {
	font-family: WebSymbols-Regular;
	font-size: 10px;
	color: red;
	vertical-align: super;
	content: "K"; 
}

body a[href^="/"]::after, body a[href^="#"]::after, body a[href*="localhost"]::after, body a[href*="<?php echo $_SERVER['SERVER_NAME']; ?>"]::after, 
body a[data-dismiss*="a"]::after, body a[href^="javascript"]::after, body a[href^="mailto:"]::after {
	content: none;
}

body a[href^="https://"]::after {
	color: #00c900;
}

body a[href*="youtube.com"]::after {
	vertical-align: initial;
	font-size: 18px;
	color: red;
	content: "y";
}
