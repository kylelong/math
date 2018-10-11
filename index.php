<!DOCTYPE html>
<html>
<head>
	<title>Math</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style type="text/css">
	p{
		display: inline;
	}
	#content{
		position: absolute;
		top:200px;
		right:48%;
	}
	#cotent p{
		text-align: center;
	}
	#n1{
		color: #6699ff;
	}
	#n2{
		color:#32CD32;
	}
	#n1, #n2, #symbol{
		font-family: 'Helvetica Neue', sans-serif; 
		font-size: 50px;
		font-weight: bold;
		letter-spacing: -1px; 

	}
	#symbol{
		color: #d3d3d3;
	}
	input{
		border: 0;
		outline: 0;
		background: transparent;
		-webkit-appearance: none;
		-webkit-border-radius:0px;
		border-radius: 0;

	}
	form{
		position: absolute;
		top: 300px;
		left: 40%;
	}
	#answer{
		background: transparent;
		border: none;
		outline: 0;
		border-bottom: 2px #4169E1 solid;
		width: 200px;
		font-family: 'Helvetica Neue', sans-serif; 
		font-size: 20px;
		font-weight: bold;
		 color:#32CD32;
	}
#result{
	font-family: 'Helvetica Neue', sans-serif; 
		font-size: 20px;
		font-weight: bold;
		text-align: center;
}
#score{
	font-family: 'Helvetica Neue', sans-serif; 
		font-size: 20px;
		font-weight: bold;
		text-align: center;
		color: #d3d3d3;
}
@media(max-width: 640px){
	#content{
		position: absolute;
		top:100px;
		right:20%;
	}
	form{
		position: absolute;
		top: 200px;
		left: 15%;
	}
}
</style>
</head>
<body>
	<div id="content">
		<p id="n1"></p>
		<p id="symbol">+</p>
		<p id="n2"></p>
	</div>
	<form>
		<input type="text" name="answer" id="answer"><br> <br>
		<p id="result"></p> <br>
		<p id="score"> Score: 0</p>
	</form>
	<script type="text/javascript">
		var score = 0;
		function setMath(){
			var num1 = Math.floor((Math.random() * 500) + 1);
			var num2 = Math.floor((Math.random() * 500) + 1);
			var n1 = document.getElementById("n1");
			var n2 = document.getElementById("n2");
			n1.textContent = num1
			n2.textContent = num2;
			var correct  = parseInt(n1.textContent) + parseInt(n2.textContent);
			var input = document.getElementById("answer");
			var answer = document.getElementById("answer").textContent;
			input.addEventListener("keypress", function(e){
				var key = e.which || e.keyCode;
				if(key == 13){
					answer = document.getElementById("answer").value;
					//console.log(correct);
					if(answer == correct){
						document.getElementById("result").textContent = "Correct";
						document.getElementById("result").style.color = "#32CD32";
						score++;
						document.getElementById("answer").value = "";
						document.getElementById("score").textContent = "Score: " + score;
						setMath();

					}else{
						document.getElementById("result").textContent = "Incorrect. Please try again";
						document.getElementById("result").style.color = "red";
						
						// score--;
						// document.getElementById("score").textContent = "Score: " + score;
					}
    		  e.preventDefault();
    		}
    	}, false)
		}
		   	window.onload = setMath;


</script>
</body>
</html>
