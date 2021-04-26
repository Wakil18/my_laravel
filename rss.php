<?php

  include_once 'template/head.php';
  include_once 'template/header.php';       //        <!-- Top Header_Area -->
  include_once 'template/nav-bar.php';    //	   <!-- Header_Area -->
?>

<br><br>

<?php
    $rss = simplexml_load_file('https://www.realwire.com/rss/?id=632')
?>

<h1 style="color:Green; text-transform: capitalize;" > <?=$rss->channel->title?> <h1><br>


<?php

    foreach ($rss->channel->item as $item){
        echo '<h4><a href="' . $item-> link . '"> <br><br>' . $item-> title . "<a><h4> <br>";
        echo "<p>" . $item->description . "</p>";
    }

?>

<?php
    include_once 'template/footer.php';  //   <!-- Footer Area -->
?>