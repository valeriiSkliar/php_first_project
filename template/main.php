
<?php include('components/html5.inc.php')?>
<div class="container-fluid">
<?php include('components/navbar.inc.php')?>
</div>

<?php

/**
 * main page template
 */

   $query = 'SELECT * FROM info';
   $result = select($query);
$out = '';

$out .= '   <div class="container-fluid px-3">';

for ($i=0; $i < count($result); $i++) { 
   $out .= '      <div class="row my-4 py-5">';
   $out .= '            <div class="col-sm-12 col-lg-1"></div>';
   $out .= '            <div class="col-sm-12 col-lg-6 d-flex flex-column my-sm-4 px-4">';
   $out .= '                <h4 class="mb-sm-4">'.$result[$i]['title'].'</h4>';
   $out .= '                 <p class="mb-sm-4">'.$result[$i]['descr_min'].'</p>';
   $out .= '                 <div class=" align-self-end">';
   $out .= '                     <a class="btn btn-success" href="/article/'.$result[$i]['url'].'">Read more</a>';
   $out .= '                 </div>';
   $out .= '            </div>';
   $out .= '            <div class="col-sm-12 col-lg-4 py-3">';
   $out .= '               <img class="img-fluid" src="/static/images/'.$result[$i]['image'].'"';
   $out .= '            </div>';
   $out .= '      <div class="col-sm-12 col-lg-1"></div>';
   $out .= '   </div>';
   $out .= '   </div>';
   $out .= '   <hr class="my-3">';
}
   $out .= '</div>';

 echo $out;
 ?>
<?php include('components/footer.inc.php')?>
