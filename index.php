<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <script type="text/javascript" src="script.js"></script>
    </head>
    <body>
        <h1>The Shoppies</h1>

        <div class="container">
            <form id="searchform" method="post" onsubmit="search(); return false;">
                <label for="searchbar">search</label>
                <input type="text" id="searchbar" placeholder="search...">
            </form>
        </div>
        <br>
        <div class="container">
            nominations
            <button>nominate</button>
        </div>
        <br>
        <div class="container">
            results
            <button>remove</button>
        </div>
        <br>
        <?php
            if(isset($_POST['submit'])){
                echo '<script>alert("submit php")</script>';
            } 
            else {
                echo "didnt work";
            }
        ?>
        <code id="response" class="container"></code>
    </body>
</html>