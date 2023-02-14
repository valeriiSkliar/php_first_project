<?php include('components/html5.inc.php')?>

<?php

/**
 * article page template
 */

$result = getArticle($url);
 $out = '';

 for ($i=0; $i < count($result); $i++) { 
    $out .= '<div class="articleContainer w-100 h-100 d-flex flex-column">';
    $out .= '  <div class="row m-4">';
    $out .= '  <div class="col-1">';
    $out .= '  </div>';
    $out .= '  <h4 class="mx-5 text-dark pe-5">'.$result[$i]['title'].'</h4>';
    $out .= '  <div class="image-container row m-4">';
    $out .= '     <img class="col-sm-10 col-lg-4 col-xxl-4 img-fluid articleMainImage" alt="img" src="/static/images/'.$result[$i]['image'].'" width=30%>';
    $out .= '     <div class="overlay col-sm-10 col-lg-6 col-xxl-6">';
    $out .= '        <div class="textContent text-justify mt-5">';
    $out .= '           <p class="mx-3">'.$result[$i]['description'].'</p>';
    $out .= '        </div>';
    $out .= '     </div>';
    $out .= '  </div>';
    $out .= '  <div class="col-1">';
    $out .= '  </div>';
    $out .= '</div>';
    $out .= '</div>';
 }
  echo $out;
?>

<?php 
include('components/navbar.inc.php');
include('components/footer.inc.php');
?>
