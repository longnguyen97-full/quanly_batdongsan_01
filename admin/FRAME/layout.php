<!DOCTYPE html>
<html>
<style>
	table{
		border: thick;
		border-collapse: collapse;
	}
	
	/* table */
	.table-row1--column1{
		background-color: #65D799;
	}

	.table-row1--column2{
		background: linear-gradient(120deg, #56ca8b 20%, #67D499 55%, #7BE0AA 90%);	
	}
	.table-row2--column1{
		background-color: #ffffff;
		padding-right: 20px;
	}
	.table-row2--column2{
		background-color: #f3f4f8;
	}
	#div-content{
		background-color: #f3f4f8;
	}
	#div-content table{
		background-color: #ffffff;
		box-shadow: 0px 1px 1px 0px;
	}
	
	/*Create logo for DASHBOARD*/
	.logo__oval{
		width: 5px;
		height: 5px;
		background: #ffffff;
		border-radius: 25px;
		position: absolute;
		padding: 20px 20px 20px 20px;
		box-shadow: -5px 5px #888888;
		margin: 0px 0px 0px 20px;
		z-index: 0;
	}
	.logo__halfoval{
		width: 5px;
		height: 5px;
		background: #f3f4f8;
		border-radius: 25px;
		position: absolute;
		padding: 20px 20px 20px 20px;
		margin: 5px 0px 0px 35px;
		z-index: 1;
	}
	
	/*Create buttons*/
	button {
		margin-top: 5px;
		margin-bottom: 5px;
		padding-bottom: 6px;
		padding-top: 6px;
		border-top-left-radius: 5px;
		border-bottom-right-radius: 5px;
		outline: none;
		border: 1px solid gray;
	}
	button:hover {
		background: lightgray;
	}
	
</style>
	
<style>
	.parent{
		border-radius: 2px;
		animation-name: selectedbtn;
		animation-duration: 0.4s;
	}
	@keyframes selectedbtn{
		from{background: white;}
		to{background: darkgray;}
	}
	
	/*Adjust topmenubar*/
	#span-btn{
		margin-right: 5px;
		animation-name: showing;
		animation-duration: 0.4s;
	}
	@keyframes showing{
		from{visibility: hidden; opacity: 0;}
		to{visibility: visible; opacity: 1;}
	}

</style>
	
<script>	
	function blink(){
		$('.#span-btn').fadeOut(500).fadeIn(500, blink);
	}
</script>
	
</html>

		
