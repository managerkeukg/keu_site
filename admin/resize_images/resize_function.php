<?php
function resizeimg($filename, $smallimage, $w, $h) //filename direction width height
  { 
     // identifyong coefficient of resizing 
    $ratio = $w/$h; 
    // get previous ratios 
    $size_img = getimagesize($filename); 
    // if sizes are small than nothing to do 
    if (($size_img[0]<$w) && ($size_img[1]<$h)) return true; 
    // get coefficient of resizing 
    $src_ratio=$size_img[0]/$size_img[1]; 

    // save proportions 
    if ($ratio<$src_ratio) 
    { 
      $h = $w/$src_ratio; 
    } 
    else 
    { 
      $w = $h*$src_ratio; 
    } 
    // create empty images 
    $dest_img = imagecreatetruecolor($w, $h);   
    $white = imagecolorallocate($dest_img, 255, 255, 255);        
    if ($size_img[2]==2)  $src_img = imagecreatefromjpeg($filename);                       
    else if ($size_img[2]==1) $src_img = imagecreatefromgif($filename);                       
    else if ($size_img[2]==3) $src_img = imagecreatefrompng($filename); 

    // масштабируем изображение     функцией imagecopyresampled() 
    // $dest_img - small one
    // $src_img - prev image
    // $w - width 
    // $h - height        
    // $size_img[0] - width
    // $size_img[1] - height 
    imagecopyresampled($dest_img, $src_img, 0, 0, 0, 0, $w, $h, $size_img[0], $size_img[1]);                 
    // save an image
    if ($size_img[2]==2)  imagejpeg($dest_img, $smallimage);                       
    else if ($size_img[2]==1) imagegif($dest_img, $smallimage);                       
    else if ($size_img[2]==3) imagepng($dest_img, $smallimage); 
    imagedestroy($dest_img); 
    imagedestroy($src_img); 
    return true;
}  
?>