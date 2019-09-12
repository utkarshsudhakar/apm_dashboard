<html>
  	<head>
    	<meta http-equiv="content-type" content="text/html;charset=utf-8">
    	<title>PSST Dashboard</title>
		
		<style>
		
			
		
					body
			{
			  	font: 10px arial;
			}
			
			svg
			{
				
				
				background: #1B9088;
				border-radius: 35px;
				box-shadow: 3px 4px 5px #7cbcb3;
				
			}
			
			nav
			{
				
				
				background: #1b242c;
				height: 50px;
				margin-top: -10px;
				border-radius: 5px;
				margin-bottom:20;
			}
			.nav-items
			{
				
				
				height: 50px;
				padding: 15px 15px;
				font-size: 18px;
				line-height: 20px;
				font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
				color:#fff;
				display:inline-block;
				text-decoration:none;
			}
			.nav-items:hover{
				height:18px;
				background:#3b4045;
				border-bottom:4px solid #5fb000;
				
				
			}
			.title{
		
		display: inline;
		margin-left: 15%;
		margin-top: -5px;
		background: #1b242c;
		font-size: 20px;
		color: #ffffff;
		padding:8px;
		border-radius:10px;
		box-shadow: 5px 5px 5px grey;
		
		}
			
		</style>
		
		<script>
		var changeTab =function(value,object){  
								
				for(i=1;i<6;i++)
				{
					
					if(i==parseInt(value))
						document.getElementById('t'+i).style.display="inline";
					else
						document.getElementById('t'+i).style.display="none";
				}
				
				
				
				
			
				
				
				
									
							
		</script>
		<link rel="shortcut icon" type="image/png" href="favicon.png"/>
	
		
	</head>
	
	<body onload="initialize()">
	<nav>
	<a href="#" class='nav-items' onclick="changeTab('1',this)" style="margin-left:45%"> Summary	</a><a href="#" class='nav-items' onclick="changeTab('2',this)"> ALM Machine	</a>  <a href="#" class='nav-items' onclick='changeTab("3",this)'> PC Machine	</a><a href="#" class='nav-items' onclick='changeTab("4",this)'> DB Machine	</a><a href="#" class='nav-items' onclick='changeTab("5",this)'> CI Machines	</a>
	<img src="logo.png" style="height: 45px;margin-left: 2px;float: left;margin-top:3px">
	</nav>
	

	<div style="display:none" id="t1">
	<div style="margin-bottom:75px">
		
		</div>
		
		
		</div>
		
		
	
		
	</body>
	
</html>