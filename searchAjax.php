<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		
	</head>
	<body>
		<div>
			<br />
			<br />
			<br />
			<div >
				<div >
					<span >Search</span>
					<input type="text" name="search_text" id="search_text" placeholder="Search by Name" class="form-control" />
					<button onclick="copyText()"> Add name</button>
				</div>
			</div>
			<br />
			<div id="result"></div>
		</div>
		<div ></div>
		<br />
		<p id="searched">Searched:</p>
		<br />
		<br />
		<br />
        <button><a href="server.php">Back</a></button>
	</body>
</html>


<script>
$(document).ready(function(){
	load_data();
	function load_data(query)
	{
		$.ajax({
			url:"searchName.php",
			method:"post",
			data:{query:query},
			success:function(data)
			{
				$('#result').html(data);
			}
		});
	}
	
	$('#search_text').keyup(function(){
		var search = $(this).val();
		if(search != '')
		{
			load_data(search);
		}
		else
		{
			load_data();			
		}
	});
});
</script>
<script>
function copyText() {
  var copyText = document.getElementById("search_text");

  var para = document.createElement("p");
  var node = document.createTextNode(copyText.value);
  para.appendChild(node);
  var element = document.getElementById("searched");
  element.appendChild(para);
}
</script>




