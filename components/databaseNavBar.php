<style>
    .verticalNav ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        padding-left: 1%;
        width: 25%;
        height: 100%;
        position: fixed;
        overflow: auto;
    }

    .verticalNav li a {
        display: block;
        color: #000;
        padding: 8px 16px;
        text-decoration: none;
        font-size: 17px;
    }

    /* Change the link color on hover */
    .verticalNav a:hover {
        color: #c60021;
    }
</style>


<!--latest jquery Library file-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $(".showHideDiv").click(function() {
            var clickedBtnId = $(this).attr('id');
            if (clickedBtnId === 'insert') {
                $('#insert_div').show();
                $('#delete_div').hide();
                $('#update_div').hide();
                $('#export_div').hide();
            } else if (clickedBtnId === 'delete') {
                $('#insert_div').hide();
                $('#delete_div').show();
                $('#update_div').hide();
                $('#export_div').hide();
            } else if (clickedBtnId === 'update') {
                $('#insert_div').hide();
                $('#delete_div').hide();
                $('#update_div').show();
                $('#export_div').hide();
            } else if (clickedBtnId === 'export') {
                $('#insert_div').hide();
                $('#delete_div').hide();
                $('#update_div').hide();
                $('#export_div').show();
            }
        });
    });
</script>

<body>
    <div class="verticalNav">
        <ul>
            <li>
                <h2>Funtionality</h2>
            </li>
            <li><button class="showHideDiv" id="insert">Insert Data</button></li>
            <li><button class="showHideDiv" id="delete">Delete Data</button></li>
            <li><button class="showHideDiv" id="update">Update Data</button></li>
            <li><button class="showHideDiv" id="export">Export Data</button></li>
        </ul>
    </div>

    <div id="ajax_exchange" style="margin-left:10%;height:100%;">
        <!--Insert Container -->
        <div id="insert_div" class="role" name="Insert Container">
            <?php include "database/insertData.php" ?>
        </div>
        <!--Delete Container -->
        <div id="delete_div" class="role" name="Delete Container" style="display:none;">
            <?php include "database/deleteData.php" ?>
        </div>
        <!--Update Container -->
        <div id="update_div" class="role" name="Update Container" style="display:none;">
            <h1>Search </h1>
        </div>
        <!--Export Container -->
        <div id="export_div" class="role" name="Export Container" style="display:none;">
            <h1>Export </h1>
        </div>
    </div>
</body>