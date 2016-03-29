
<?php
include ('../' . 'base' . '/' . 'config.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
    <head>
        <title><?php print $Author ?> - <?php print $subTitle ?></title>
        <?php
        include ('../' . 'src' . '/' . 'inc' . '/' . 'meta.php');
        ?>
        <?php
        require ('../' . 'src' . '/' . 'inc' . '/' . 'analytics.php');
        ?>
    </head>
    <body class="legal">
        <div id="main">
            <div id="nav-legal">
                <?php
                require ('../' . 'src' . '/' . 'inc' . '/' . 'nav.php');
                ?>
            </div>
            <div id="description">
                <h1> <?php print $Title; ?></h1>
            </div>
        </div>
        <?php
        include ('../' . 'src' . '/' . 'inc' . '/' . 'legal_note.php');
        ?>

        </div>
        <?php
        include ('../' . 'src' . '/' . 'inc' . '/' . 'footer.php');
        ?>

</html>