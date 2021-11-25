<html>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script>
        // When the user clicks on the user link, bring up user popup
        function showUserPopup() {
            $(document).ready(function() {
                var modal = document.querySelector('.modal');  // assuming you have only 1
                var html = document.querySelector('html');
                modal.classList.add('is-active');
                html.classList.add('is-clipped');
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
    <style type="text/css">
        body {
            background-color: #f6f6f8;
        }

        .topNav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        .topNav li {
            float: left;
        }


        .topNav li h1 {
            display: inline-block;
            padding: 0px 10px;
            color: black;
            text-align: center;
        }

        .topNav li a {
            font-size: 20px;
            display: inline-block;
            color: black;
            text-align: center;
            padding: 25px 10px;
            text-decoration: none;
        }

        .topNav h2 {
            padding: 30px 10px;
        }

        /* Change the link color to #111 (black) on hover */
        .topNav li a:hover {
            color: #c60021;
        }
    </style>
    <div class="topNav">
        <ul>
            <li>
                <h2>Database 4750 Project</h2>
            </li>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="database.php">Interact with the Database</a></li>
            <li><a href="#" id="open-model" onclick="showUserPopup();">User</a></li>
        </ul>
    </div>

    <div class="modal">
        <div class="modal-background"></div>
        <div class="modal-card">
            <header class="modal-card-head">
            <p class="modal-card-title">Modal title</p>
            <button class="delete" aria-label="close" onclick="removeUserPopup();"></button>
            </header>
            <section class="modal-card-body">
            <!-- Content ... -->
            </section>
            <footer class="modal-card-foot">
            <button class="button is-success">Save changes</button>
            <button class="button">Cancel</button>
            </footer>
        </div>
    </div>

</html>