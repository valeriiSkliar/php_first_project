<?php include('components/html5.inc.php')?>
<?php include('components/navbar.inc.php')?>


<?php
/**
 * category page template
 */    

 $cat = getCategory($categoryURI);
 $result = getCategoryArticles($cat[0]['id']);

     $out = '';

    $out .= '<div class="row m-4 mt-5 py-5">';
    $out .= '<div class="col-1">';
    $out .= '</div>';
    $out .= '<div class="col-10">';
    $out .= '<p>Category : '.$cat[0]['title'].'</p>';
    $out .= '<p>Description : '.$cat[0]['description'].'</p>';
    $out .= '</div>';
    $out .= '<div class="col-1">';
    $out .= '</div>';
    $out .= '</div>';

    for ($i=0; $i < count($result); $i++) { 
        $out .= '<div class="row m-4 mt-2 py-2">';
        $out .= '<div class="col-1">';
        $out .= '<img class="w-100" src="/static/images/'.$result[$i]['image'].'" width=30%>';

        $out .= '</div>';
        $out .= '<div class="col-10">';
        $out .= '<h4>'.$result[$i]['title'].'</h4>';
        $out .= '<p>'.$result[$i]['descr_min'].'</p>';
        $out .= '<div><a href="/article/'.$result[$i]['url'].'">Read more</a></div>';
        $out .= '</div>';
        $out .= '<div class="col-1">';
        $out .= '</div>';
        $out .= '</div>';
    }

 echo $out;