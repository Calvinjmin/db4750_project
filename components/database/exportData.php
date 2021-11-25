<script>
    function athleteExportData() {
        var conf = confirm("Export the athlete table to CSV?");
            if(conf == true)
            {
                window.open("components/database/exporting/athleteExport.php", '_blank');
            }
    }
    function awardsExportData() {
        var conf = confirm("Export the awards table to CSV?");
            if(conf == true)
            {
                window.open("components/database/exporting/awardsExport.php", '_blank');
            }
    }
</script>
<html>
    <h5 class="title is-5">Export from our Database!</h5>
    <table class="table">
        <tr><th>Table</th><th>Export?</th></tr>
        <tr>
            <td>Athlete Export</td>
            <td><button class="button is-success is-light is-small is-rounded" onclick="athleteExportData();">Export</button></td>
        </tr>
        <tr>
            <td>Awards Export</td>
            <td><button class="button is-success is-light is-small is-rounded" onclick="awardsExportData();">Export</button></td>
        </tr>
    </table>
</html>