<link rel="stylesheet" href="Styles/heightlights.css">

<?php


$p1 = "Commercial Property";
$p2 = "IT/ITES Office Space, Retail Shops & Studio Apartments";
$p3 = "3 Side Open With Massive Frontage Of 900 Meters";
$p4 = "Largest Business Hub In Delhi Ncr";
$p5 = "Location: Noida Extension";


?>

<div id="parant-container">
  <div>

    <h2 class="high-heading">Highlights</h2>

    <?php
    for ($i = 1; $i <= 5; $i++) {
      echo '<div class="high-container" >'
        . ${"p" . $i} . "<br>" .
        "</div>";
    }
    ?>
  </div>
  <div>

    <h2 class="high-heading">Featured Video</h2>
    <iframe width="600" height="400" src="https://www.youtube.com/embed/ckFIeWsbTsg" title="YouTube video player"
      frameborder="0"
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
      allowfullscreen class="video-box"></iframe>
  </div>

</div>