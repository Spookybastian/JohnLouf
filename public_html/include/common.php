<!-- Paths used here must be relative to public_html because that's where these functions will be called from -->

<?php function writeHead($title) { ?>
    <meta charset = 'UTF-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php echo "<title>{$title}</title>" ?>

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="resources/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="resources/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="resources/favicon-16x16.png">
    <link rel="manifest" href="resources/site.webmanifest">
    <link rel="mask-icon" href="resources/safari-pinned-tab.svg" color="#000000">
    <link rel="shortcut icon" href="resources/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="resources/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Monoton&family=Roboto+Condensed&family=Roboto:wght@300;400&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    
    <!-- Custom CSS-->
    <link href='resources/style.css' type='text/css' rel='stylesheet'>
<?php } ?>


<?php function writeNavbar() { ?>
    <div class="px-2 py-3 m-0 text-center text-md-start d-flex flex-column align-items-center justify-content-between flex-md-row align-items-md-end sticky-top">
            <h1 class="d-inline-block px-0 pt-0 pb-2 pb-md-0 m-0">JOHN LOUFARDAKIS</h1>
            <p class="d-inline-block p-0 m-0">
                <?php
                // This function returns an HTML <a> element in string form.
                function constructNavLink($name, $href, $classes) {

                    // If this is the page being pointed to, 
                    // override to scroll up and mark as active.
                    if (str_contains($_SERVER['PHP_SELF'], $href)) {
                        $href = '#top';
                        $classes .= ' ' . 'active';
                    }

                    return "<a href='{$href}' class='{$classes}'>{$name}</a>";
                }

                echo constructNavLink('PORTFOLIO', 'index.php', 'navlink');
                echo constructNavLink('SOCIALS', 'socials.php', 'navlink mx-5');
                echo constructNavLink('CONTACT', 'contact.php', 'navlink');
                ?>
            </p>
    </div>
<?php } ?>


<?php function writeFooter() { ?>
    <p class="pt-5 pb-1 px-2 m-0">&copy; John Loufardakis 2023</p>
    <a target="_blank" href="https://kouridakis.org" class="pt-0 pb-3 px-2 m-0 attribution">&lt;/&gt; Sebastian Kouridakis</a>

    <script 
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" 
        crossorigin="anonymous">
    </script>
<?php } ?>