<?php
session_start();
include_once '../connection.php';
$sql = "SELECT * FROM upload";
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
			width: 230px;
			height: 25px;
		}
	</style>
	<input type="text" id="search" onkeyup="searchForName()" placeholder="Tìm kiếm theo tên.." title="Nhập vào một cái tên">

	<table id="viewdata">
		<tr>
			<th>STT</th>
			<th>Tên</th>
			<th>Kích thước</th>

			<th colspan=2>Hành động</th>
		</tr>
		<?php
		$i = 1;

		while ($row = mysqli_fetch_assoc($res)) {
			echo "<tr><td>";
			echo $i;
			echo "</td><td>";
			echo $row['name'];
			echo "</td><td>";
			echo number_format(($row['size'] / 1024), 2) . " Kb";
			$path = ($_SESSION['type'] == 'Admin') ? "./" : "../";
			echo "
<td><a href='" . $path . "View/delete.php?data=" . $row['id'] . "' class='del_doc'>Xóa</a></td>
<td><a href='" . $path . "View/download.php?id=" . $row['id'] . "'>Tải xuống</a></td></tr>";
			$i++;
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
						alert("Một lỗi đã xảy ra");
						console.log(err)
					},
					success: function(resp) {
						if (resp == 1) {
							alert("Tài liệu được xóa thành công");
							getPage('<?php echo $path ?>View/View.php')
						}
					}
				})
			})
		})
	</script>