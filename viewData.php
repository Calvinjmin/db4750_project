<html>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script>
	function viewData() {
		$(document).ready(function() {
			$('#tableDropdown').change(function() {
				var table_name = $("#tableDropdown").val();
				$.ajax({

					type: "POST",
					url: "retrieveData.php",
					data: {
						'table_name': table_name
					},
					success: function(returnedData) {
						$('#response').html(returnedData);
					}
				});
			});
		});
	}
</script>

<body>
	<div style="width: 95%;   	
	margin-left: auto;
  	margin-right: auto;">
		<div style="padding: 0;">
			<h5 class="title is-5" style="float: left; padding-right: 1%;">Select a Table to View</h5>
			<form id="databaseViewForm">
				<div class="select is-primary is-small is-rounded">
					<select id="tableDropdown" onchange='viewData()' style="float: left;">
						<option selected='selected' selected disabled hidden>Nothing...</option>
						<option value="athlete">Athlete</option>
						<option value="awards">Awards</option>
						<option value="belongs">Belongs</option>
						<option value="competes">Competes</option>
						<option value="draft">Draft</option>
						<option value="drafted">Drafted</option>
						<option value="league">League</option>
						<option value="plays_for">Plays For</option>
						<option value="plays_in">Plays In</option>
						<option value="post_season">Post Season</option>
						<option value="recieves">Receives</option>
						<option value="sport">Sport</option>
						<option value="team">Team</option>
						<option value="within">Within</option>
					</select>
				</div>

			</form>
		</div>
	</div>

	<div id="response" style="    
  margin-left: auto;
  margin-right: auto;
	width: 80%;">
	</div>
</body>

</html>