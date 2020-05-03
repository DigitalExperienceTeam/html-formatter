<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css" type="text/css" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HTML Corrector</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="style.css" type="text/css" />
    
</head>
<body>
        <h1>HTML Corrector</h1>
    <p><strong>Copy the correct html from the field below.</strong></p>

<?php

$oldtext = $_POST['oldtext'];

$site = $_POST['site'];

$replacement = '';

$h1 = '/<h1[^>]*>/';

$h2 = '/<h2[^>]*>/';

$h3 = '/<h3[^>]*>/';

$h4 = '/<h4[^>]*>/';

$h5 = '/<h5[^>]*>/';

$h6 = '/<h6[^>]*>/';

$pextra ='/<p[^>]*="[^>]*">/';

$p ='<p>';

$style = '/ style="[^>]*"/';

$span = '/<span[^>]*>/';

$div = '/<div[^>]*>/';

$strong = '/<strong[^>]*>/';

$span2 = '/<[^>]*span>/';

$div2 = '/<[^>]*div>/';

$strong2 = '/<[^>]*strong>/';

$u = '/<u>/';

$u2 = '/<\\/u>/';

$i = '/<i>/';

$i2 = '/<\\/i>/';

$type ='/type="[^>]*"/';

$listpar = '/<li><p>/';

$list = '<li>';

$listpar2 = '/<[^>]*li><[^>]*p>/';

$list2 = '</li>';

$a = '/<a/';

$target = '<a title="TITLE HERE" target="_blank"';


$sccblank = '/target="_blank" href="http:\/\/www.southampton.gov.uk/';

$scc = 'href="http://www.southampton.gov.uk';


$sccsblank = '/target="_blank" href="https:\/\/www.southampton.gov.uk/';

$sccs = 'href="https://www.southampton.gov.uk';


$myblank = '/target="_blank" href="https:\/\/my.southampton.gov.uk/';

$my = 'href="https://my.southampton.gov.uk';

$ssblank = '/target="_blank" href="https:\/\/staffstuff.southampton.gov.uk/';

$ss = 'href="https://staffstuff.southampton.gov.uk/';

$siblank ='/target="_blank" href="http:\/\/staffinfo.southampton.gov.uk/';

$si ='href="http://staffinfo.southampton.gov.uk/';

$sisblank ='/target="_blank" href="https:\/\/staffinfo.southampton.gov.uk/';

$sis ='href="https://staffinfo.southampton.gov.uk/';

$emptypar = '/<p>&#160;<\/p>/';

$emptypar2 = '/<p>&nbsp;<\/p>/';


$oldtext = str_replace(array("\n", "\r"), '', $oldtext);

$oldtext = preg_replace($style, $replacement, $oldtext);

$oldtext = preg_replace(array($h1, $h2, $h3, $h4, $h5, $h6, $pextra), $p, $oldtext);

$oldtext = preg_replace(array($span, $span2, $div, $div2, $strong, $strong2, $u, $u2, $i, $i2, $type), $replacement, $oldtext);

$oldtext = preg_replace($listpar, $list, $oldtext);

$oldtext = preg_replace($listpar2, $list2, $oldtext);

$oldtext = preg_replace($a, $target, $oldtext);

if ($site=="scc"){
    $oldtext = preg_replace($sccblank, $scc, $oldtext);

$oldtext = preg_replace($sccsblank, $sccs, $oldtext);

$oldtext = preg_replace($myblank, $my, $oldtext);
}

else {
    
   $oldtext = preg_replace($ssblank, $ss, $oldtext);

$oldtext = preg_replace($siblank, $si, $oldtext);

$oldtext = preg_replace($sisblank, $sis, $oldtext);

}



$oldtext = preg_replace(array($emptypar, $emptypar2), $replacement, $oldtext);

$newtext = $oldtext;


print "<textarea class=\"code\" rows=\"20\" >Code will appear here</textarea>";

print "<div class=\"formatted\">$newtext</div>";



 echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

 <script type="text/javascript">
            $(document).ready(function() {
            $(\'body *:empty\').remove();
            var title;
            $(\'.formatted a\').each(function( index ) {
  title = $(this).text();

      if ($(this).text()=="[WM1]"){
          $(this).remove();
      }

  $(this).attr("title", title);
   
   
          });
          
  var code = $(\'.formatted\').html();
   
  $(\'.code\').text(code);
   

       
   
});



            
  

      </script>';
      ?>
     
<p><button><a href="/index.html">Back</a></button></p>

</body>
</html>


