<?php
    /*
     * Creates a click-through presentation from a directory of images
     * Each image is wrapped in a link tag and clicks through to the next image in alphabetical order
     * The last image loops back to link to the first
     * Uses JS to preload the next image in the series
     */

    require_once(dirname(__FILE__) . '/includes/autoload.inc.php');

    $dir = 'pages/';

    $images = new ImageList;
    $pages = $images->buildImageList(dirname(__FILE__) . '/' . $dir);

    if (isset($_GET['page']) && ($_GET['page'] >= 1) && ($_GET['page'] < sizeof($pages))):
        $page = $_GET['page'];
    else:
        $page = 0;
    endif;

    $nextpage = $page + 1;

    if (empty($pages)) {
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="./static/style.css">
        <title></title>
    </head>
    <body>
        <a href="index.php?page=<?php echo $nextpage; ?>">
            <img src="./<?php echo $dir . $pages[$page]; ?>" alt="" />
        </a>

        <script>
            function preloadNextImage() {
                images = new Array();
                images[<?php echo $nextpage; ?>] = new Image;
                images[<?php echo $nextpage; ?>].src = "<?php echo $pages[$nextpage]; ?>";
            }

            preloadNextImage();
        </script>
    </body>
</html>
