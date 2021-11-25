<html>
<!--latest jquery Library file-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    function tableInsertChange() {
        $("#tableSelector").change(function() {
            var tableValue = $('#tableSelector').val();
            if (tableValue === 'ath') {
                $('#athleteInsert').show();
                $('#sportInsert').hide();
                $('#teamInsert').hide();
            }
            else if ( tableValue === 'sport') {
                $('#athleteInsert').hide();
                $('#sportInsert').show();
                $('#teamInsert').hide();
            }
            else if ( tableValue === 'team') {
                $('#athleteInsert').hide();
                $('#sportInsert').hide();
                $('#teamInsert').show();
            }

        });
    }
</script>

<h5 class="title is-5">Insert to Data into our Database!</h5>
<form>
<label class="label">Table</label>
    <div style="padding-bottom: 1%;">
        <div class="select is-rounded">
            <select id="tableSelector" onchange="tableInsertChange();">
                <option value = "ath">Athlete</option>
                <option value = "sport">Sport</option>
                <option value = "team">Team</option>
            </select>
        </div>
    </div>
</form>

<div id="athleteInsert">
    <form action="components/database/inserting/insertAthlete.php" method="post">
        <div class="field">
            <label class="label">Computing ID</label>
            <div class="control">
                <input class="is-small" size="50" type=" text" name="computing_id" placeholder="Computing ID">
            </div>
        </div>

        <div class="field">
            <label class="label">First Name</label>
            <div class="control">
                <input class="is-small" size="50" name="first_name" placeholder="First Name">
            </div>
        </div>

        <div class="field">
            <label class="label">Last Name</label>
            <div class="control">
                <input class="is-small" size="50" name="last_name" placeholder="Last Name">
            </div>
        </div>


        <div class="field">
            <label class="label">Age</label>
            <div class="control">
                <input class="is-small" size="50" type="int" name="age" placeholder="21">
            </div>
        </div>

        <div class="field">
            <label class="label">Graduation Year</label>
            <div class="control">
                <input class="is-small" size="50" type="int" name="grad_year" placeholder="2021">
            </div>
        </div>

        <!-- 
        <div class="control">
            <label class="label">Currently Playing</label>
            <label class="radio">
                <input type="radio" name="answer">
                Yes
            </label>
            <label class="radio">
                <input type="radio" name="answer">
                No
            </label>
        </div>
        -->


        <div class="field">
            <label class="label">Team ID</label>
            <div class="control">
                <input class="is-small" size="50" name="team_id" placeholder="Team ID">
            </div>
        </div>


        <div class="field is-grouped">
            <div class="control">
                <button class="button is-link" type="submit">Submit</button>
            </div>
            <div class="control">
                <button class="button is-link is-light">Cancel</button>
            </div>
        </div>
    </form>

</div>

<div id="sportInsert" style="display:none;">
    <form action="components/database/inserting/insertSport.php" method="post">
        <div class="field">
            <label class="label">Sport ID</label>
            <div class="control">
                <input class="is-small" size="50" name="sport_id" placeholder="Sport ID">
            </div>
        </div>

        <div class="field">
            <label class="label">Sport Name</label>
            <div class="control">
                <input class="is-small" size="50" name="sport_name" placeholder="Sport Name">
            </div>
        </div>


        <div class="field is-grouped">
            <div class="control">
                <button class="button is-link" type="submit">Submit</button>
            </div>
            <div class="control">
                <button class="button is-link is-light">Cancel</button>
            </div>
        </div>
    </form>
</div>

<div id="teamInsert" style="display: none;">
    <form action="components/database/inserting/insertTeam.php" method="post">
        <div class="field">
            <label class="label">Team ID</label>
            <div class="control">
                <input class="is-small" size="50" name="team_id" placeholder="Team ID">
            </div>
        </div>

        <div class="field">
            <label class="label">Team Name</label>
            <div class="control">
                <input class="is-small" size="50" name="team_name" placeholder="Team Name">
            </div>
        </div>


        <div class="field">
            <label class="label">Division</label>
            <div class="control">
                <input class="is-small" size="50" name="division" placeholder="Division">
            </div>
        </div>


        <div class="field">
            <label class="label">League ID</label>
            <div class="control">
                <input class="is-small" size="50" name="league_id" placeholder="League ID">
            </div>
        </div>


        <div class="field is-grouped">
            <div class="control">
                <button class="button is-link" type="submit">Submit</button>
            </div>
            <div class="control">
                <button class="button is-link is-light">Cancel</button>
            </div>
        </div>
    </form>
</div>

</html>