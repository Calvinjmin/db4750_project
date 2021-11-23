<html>
<form action="components/database/insert.php" method="post">
    <label class="label">Table</label>
    <div class="select">
        <select>
            <option>Athlete</option>
            <option>Sport</option>
            <option>Team</option>
        </select>
    </div>

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

</html>