<html>

<script>

    var currComputingID = "";
    function updateFormChange() {
            var tableValue = $('#attributeSelector').val();
            if (tableValue === 'computing_id') {
                $('#Computing_ID').show();
                $('#First_Name').hide();
                $('#Last_Name').hide();
                $('#Age').hide();
                $('#Grad_Year').hide();
            }
            else if ( tableValue === 'first_name') {
                $('#Computing_ID').hide();
                $('#First_Name').show();
                $('#Last_Name').hide();
                $('#Age').hide();
                $('#Grad_Year').hide();
            }
            else if ( tableValue === 'last_name') {
                $('#Computing_ID').hide();
                $('#First_Name').hide();
                $('#Last_Name').show();
                $('#Age').hide();
                $('#Grad_Year').hide();
            }
            else if ( tableValue === 'age') {
                $('#Computing_ID').hide();
                $('#First_Name').hide();
                $('#Last_Name').hide();
                $('#Age').show();
                $('#Grad_Year').hide();
            }
            else if ( tableValue === 'grad_year') {
                $('#Computing_ID').hide();
                $('#First_Name').hide();
                $('#Last_Name').hide();
                $('#Age').hide();
                $('#Grad_Year').show();
            }
    }

    function updateEntry() {
        $(document).ready(function() {
            var ajaxurl = 'components/database/update.php',
            data = {
                'computing_id': currComputingID,
                'attribute': $('#attributeSelector').val(),
                'attribute_value': $('#' + $('#attributeSelector').val() + "Input").val(),
            };
            $.post(ajaxurl, data, function(response) {
            });
            alert("Item was updated successfully");
        });
    }
        
    // When the user clicks on the user link, bring up user popup
    function showUserPopup( ) {
        $(document).ready(function() {
            $('.btn').unbind().click(function() {
                currComputingID = $(this).val();
                $('#UpdateModalTitle').html("Update Athlete (" + currComputingID + ")");
                var modal = document.querySelector('.modal');  // assuming you have only 1
                var html = document.querySelector('html');
                modal.classList.add('is-active');
                html.classList.add('is-clipped');
            });
        });
    }

    // When the user clicks the x button, popup closes
    function removeUserPopup() {
        $(document).ready(function() {
            var modal = document.querySelector('.modal');  // assuming you have only 1
            var html = document.querySelector('html');
            modal.classList.remove('is-active');
            html.classList.remove('is-clipped');
        });
    }
</script>

<div style="    
        margin-left: auto;
        margin-right: auto;
	    overflow: auto;">
        <h5 class="title is-5">Update data from our Database!</h5>
        <?php
            $SERVER = 'mysql01.cs.virginia.edu';
            $USERNAME = 'kkz6dh';
            $PASSWORD = 'Dbproject!';
            $DATABASE = 'kkz6dh_';

            // Create connection
            $conn = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE);

            if (mysqli_connect_errno()) {
                echo ("Can't connect to MySQL Server. Error code: " .  mysqli_connect_error());
                return null;
            }

            $sql = 'CALL selectAthleteLeague()';
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                echo "<table class=\"table is-bordered is-striped is-narrow is-hoverable is-fullwidth\" style=\"  width: 50%;\">";
                echo "<th>Name</th><th>Team</th><th>League</th><th>Update?</th>";
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["first_name"] . " " . $row["last_name"] . "</td>";
                    echo "<td>" . $row["team_name"] . "</td>";
                    echo "<td>" . $row["league_name"] . "</td>";
                    echo "<td> <button class=\"btn\" id=\"updateButton\" onclick=\"showUserPopup()\" value = " . $row["computing_id"] . ">Update</button></td>";
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "0 results";
            }
            $conn->close();
        ?>
    </div>


    <div class="modal">
        <div id = "UpdateAthlete" >
            <div class="modal-background"></div>
            <div class="modal-card">
                <header class="modal-card-head">
                    <p class="modal-card-title" id="UpdateModalTitle">Update Athlete</p>
                    <button class="delete" aria-label="close" onclick="removeUserPopup();"></button>
                </header>

                <!-- Card Body -->
                <section class="modal-card-body">
                <label class="label">Attribute</label>

                <div style="padding-bottom: 1%; display: inline-block">
                    <div class="select is-rounded" style="float: left;">
                        <select id="attributeSelector">
                            <option value = "computing_id">Computing ID</option>
                            <option value = "first_name">First Name</option>
                            <option value = "last_name">Last Name</option>
                            <option value = "age">Age</option>
                            <option value = "grad_year">Graduation Year</option>
                            
                        </select>
                    </div>
                    <button id="selectAttribute" style="float:right" onclick="updateFormChange();">Select</button>
                </div>

                <form onsubmit="updateEntry();" method ="post">
                    <div id="Computing_ID" style="display:none;">
                        <div class="field">
                            <label class="label">Computing ID</label>
                            <div class="control">
                                <input class="input" id="computing_idInput" type="text" name="computing_id" placeholder="Computing ID">
                            </div>
                        </div>
                    </div>

                    <div id ="First_Name" style="display:none;">
                        <div class="field">
                            <label class="label">First Name</label>
                            <div class="control">
                                <input class="input" id="first_nameInput" type="text" name="first_name" placeholder="First Name">
                            </div>
                        </div>
                    </div>

                    <div id="Last_Name" style="display:none;">
                        <div class="field">
                            <label class="label">Last Name</label>
                            <div class="control">
                                <input class="input" id="last_nameInput" type="text" name="last_name" placeholder="Last Name">
                            </div>
                        </div>
                    </div>

                    <div id="Age" style="display:none;">
                        <div class="field">
                            <label class="label">Age</label>
                            <div class="control">
                                <input class="input" id="ageInput" type="text" name="age" placeholder="Age">
                            </div>
                        </div>
                    </div>

                    <div id="Grad_Year" style="display:none;">
                        <div class="field">
                            <label class="label">Graduation Year</label>
                            <div class="control">
                                <input class="input" id="grad_yearInput" type="text" name="grad_year" placeholder="Graduation Year">
                            </div>
                        </div>
                    </div>
                        <input class="button is-success" id="submitUpdateForm" type="submit"> </input>
                </form>
                
                </section>
            </div>
        </div>
    </div>
</html>