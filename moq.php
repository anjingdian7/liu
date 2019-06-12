<!DOCTYPE html>
<html>
<head>

	<style type="text/css">
		.MyfirstFlash	{
			width:200px;
			height:100px;
			background:red; 
			animation:myfirst 5s;
			-moz-animation:myfirst 5s; /* Firefox */
			-webkit-animation:myfirst 5s; /* Safari and Chrome */
			-o-animation:myfirst 5s; /* Opera */
		    }

		@keyframes myfirst
		{
		0%   {background:red;}
		25%  {background:yellow;}
		50%  {background:blue;}
		100% {background:green;}
		}
	</style>
</head>
<body>
	<div class="MyfirstFlash"></div>
</body>
</html>