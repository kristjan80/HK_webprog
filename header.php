<!DOCTYPE html>
<html lang="et">
            
    <head>

        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, maximum-scale=1">

        <title> <?php echo get_bloginfo("name").' - RIF21';?> </title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>    
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
        <?php wp_head(); ?>

    </head>
     <header class="header-main">
        <nav class="main-nav">
                <ul>
                    <li>
                        <a href= <?php echo '"'.site_url().'"';?>> Esileht </a>
                    </li>
                    <li>
                        <a href="https://owasp.org/"> OWASP </a>
                    </li>
                    <li>
                        <a href="https://www.kali.org/"> Kali Linux </a>
                    </li>
                    <li>
                        <a href="https://ctf101.org/"> CTF </a>
                    </li>
                </ul>

                <?php ?>
                <h1 class="header-text"> <?php echo get_bloginfo("name");?></h1>
                <h2 class="header-subtext"> <?php echo get_bloginfo("description");?></h2>
            </nav>
    </header>
		

