<html>
    <head>
        <title>MIAM</title>
        <link rel="stylesheet" type="text/css" href="miam.css" />
    </head>


    <body>
        <div class="nav"></div>
        <div class="content">
            <div class="side">
            </div>
            <div class="main">
                <h2>MIAM</h2>
                <p>MIAM</p>
            </div>

            <?php
                // check if isset
                if (isset($_GET['miam'])) {
                    // check if miam is equal to 1
                    if ($_GET['miam'] == "miam") {
                        echo '<div class="miam">tiens vas-y mange</div>';
                        $flag = "IsiLabs{M14M_L3S_C00K13S}";
                        $flag = base64_encode($flag);
                        setcookie('miam', $flag, time() + 3600);
                    }
                    else {
                        echo '<div class="miam">try something else</div>';
                    }
                    
                }
                else {
                    echo '<div class="miam">missing required GET parameter</div>';
                }
            ?>
        </div>
    </body>

</html>
