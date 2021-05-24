<?php  

	$conn = mysqli_connect("remotemysql.com","QplMSY0GNC","G94dFdEzMl","QplMSY0GNC");

	$search_item = $_POST["prod_name"];

	$sql = "SELECT DISTINCT(Product) FROM ajax_autocomplete_textbox WHERE Product LIKE '$search_item%'";
	$res = mysqli_query($conn,$sql);

	$output = "";

	if(mysqli_num_rows($res) > 0)
	{
		while($row = mysqli_fetch_assoc($res))
		{
			$output.="<li class='dropdown-item'>".$row['Product']."</li>";
		}
	}

	else
	{
	}

	echo $output;
?>
