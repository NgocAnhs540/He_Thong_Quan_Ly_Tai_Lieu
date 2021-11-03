<?php
session_start();
include('../config/connection.php');
$sql = "SELECT * FROM `upload`";
$res=mysqli_query($con,$sql) or die(mysqli_error($con));
include_once '../config/connection.php';
$sql = "SELECT * FROM `upload`";
$res = mysqli_query($con, $sql) or die(mysqli_error($con));
?>
<html>

<head>
	<style type="text/css">
		#viewdata table {
			border: 1px solid #aaa;
		}

		#viewdata th {
			background: #aaa;
		}

		#viewdata td {
			background: #efefef;
		}

		#viewdata th,
		td {
			padding: 5px;
			text-align: left;
		}

		input#search {
			width: 30%;
			height: 25px;
		}

	</style>
	<input type="text" id="search" onkeyup="searchForName()" placeholder="Tìm kiếm theo tên.." title="Nhập vào một cái tên">

	<table id="viewdata">
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Size(Kb)</th>
			<th>Times</th>
			<th>Delete</th>
			<th>Download</th>
		</tr>
		<?php
		   $conn = new mysqli('localhost','root','','doc_db');
		   $sql = "SELECT * FROM upload";
		   $result = $con->query($sql);
        $i = 1; 
		while ($row = mysqli_fetch_assoc($res)) {
			$path = ($_SESSION['type'] == 'Admin') ? "./" : "../";
			
			echo "
			  <tr> 
			  <td>".$i++."</td>
			  <td>".$row['name']." </td>
			  <td>".number_format(($row['size']/1024),2)."  </td>
			  <td>".$row['Times']."</td>
			 <td><a href='View/delete.php?data=" . $row['id'] . "' class='del_doc'>delete</a></td>
			<td><a href='View/download.php?id=" . $row['id'] . "'>download</a></td>
			
			</tr>";
			}
		mysqli_close($con);
		?>
	</table>

	<script>
		function searchForName() {
			var input, filter, table, tr, td, i, txtValue;
			input = document.getElementById("search");
			filter = input.value.toUpperCase();
			table = document.getElementById("viewdata");
			tr = table.getElementsByTagName("tr");
			for (i = 0; i < tr.length; i++) {
				td = tr[i].getElementsByTagName("td")[1];
				if (td) {
					txtValue = td.textContent || td.innerText;
					if (txtValue.toUpperCase().indexOf(filter) > -1) {
						tr[i].style.display = "";
					} else {
						tr[i].style.display = "none";
					}
				}
			}
		}

		$(document).ready(function() {
			$('.del_doc').click(function(e) {
				e.preventDefault();
				var loc = $(this).attr('href');
				$.ajax({
					url: loc,
					error: err => {
						alert("An error occured");
						console.log(err)
					},
					success: function(resp) {
						if (resp == 1) {
							alert("File successfully deleted");
							getPage('<?php echo $path ?>View/View.php')
						}
					}
				})
			})
		})
	</script>