<!DOCTYPE html>
<!-- Document created by Fred Nora -->
<!-- Credits: A. de Regt -->

<html lang="en">

<head>
<meta charset="UTF-8">
<title>Search</title>
<meta 
    name="viewport" 
    content="width=device-width, initial-scale=1.0">
<meta 
    name="description" 
    content="Seek Balance Organization">
<meta 
    name="author" 
    content="Fred Nora">

<style>

.popup_container {
             
    /*position: absolute;*/
    margin: 3rem auto;
    padding: 2rem;
    max-width: 640px;
    /*transform: translate(-50%, -50%);*/
    /*border-radius: .33rem;*/
    border-radius: 1rem;
    padding: 10px;
    /*background-color: lightyellow;*/
    background: rgba(255,255,255,0.97);
    /*box-shadow: 10px 10px lightgray;*/
    box-shadow: 0 8px 32px rgba(44,123,123,0.13);
    text-align: center;

    border: solid lightgray 1px;
}
.popup_container h1 {
    font-size: 2.2rem;
    font-weight: 700;
    color: #2e7d32;
    margin-bottom: 1.2rem;
    letter-spacing: .03em;
}

/* Customized button for this popup */
.button {
    font-size: 1rem;
    font-weight: 600;
    text-decoration: auto;
    text-align: center;
    margin-top: 1.5rem;
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    border: solid black 1px;
    border-radius: 0.5rem;
    padding: 0.8rem 1.2rem;
    color: black;
    cursor: pointer;
}
.button:hover {
    background-color: lightgray;
}
.button img {
    vertical-align: middle;
}

/*
.noicon {
    padding-left: 30px;
}
.iconpos {
}
*/

</style>

<!-- Prefetch -->
<link rel="dns-prefetch" href="https://github.com/"/>

<!-- Cool links -->
<link href="../assets/img/rabbit00.png" rel="icon" type="image/x-icon">
<link href="../assets/css/gramado.css" rel="stylesheet">
</head>

<body>

    <!-- Navigation bar -->
    <nav class="gramado-nav">
        <!-- <img class="gramado-logo" src="../assets/img/rabbit00.png" alt="Logo"> -->
        <ul>
            <!-- 1: Developer -->
            <li><a href="developer/index.html">Developer</a></li>
            <!-- 2: Business person -->
            <li><a href="business/index.html">Business</a></li>
            <!-- 3: Sales person -->
            <li><a href="online/index.html">Online communication</a></li>
            <!-- 4: User -->
            <li><a href="user/index.html">User</a></li>
        </ul>
    </nav>

    <!-- popup_container module -->
    <div class="popup_container">
    <img class="gramado-logo" src="../assets/img/rabbit00.png" alt="Logo">
    <h1>Seek Balance Organization</h1>

    <?php
        $cwd = getcwd();
        $filename_list = scandir($cwd);
        foreach ($filename_list as $filename)
        {
            /* Only directory names with alphanumeric elements */
            if ( is_dir($filename) && 
                 ctype_alnum($filename) &&
                 $filename != 'assets')
            {
    ?>
                <!-- Link -->
                <a href="/<?php echo $filename; ?>/index.html"><?php echo $filename; ?>/</a>
                <br/>
    <?php
            }
        }
    ?>

        <!-- Button -->
        <br/>
        <a 
            class="button" 
            href="https://github.com/seekbalance/seekbalance.github.io">
            <img class="iconpos" 
                width="20" 
                height="20" 
                src="https://github.com/fluidicon.png"> See code at GitHub
        </a>

        <br/>
        <br/>

    </div>

<!-- Cool scripts -->
<script src="../assets/js/gramado.js"></script>
</body>

</html>