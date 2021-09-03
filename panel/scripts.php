
<?php 

//==== Strip .php extension from requested URI  
function strip_php_extension()  
{  
  $uri = $_SERVER['REQUEST_URI'];  
  $ext = substr(strrchr($uri, '.'), 1);  
  if ($ext == 'php')  
  {  
    $url = substr($uri, 0, strrpos($uri, '.'));  
    redirect($url);  
  }
  
}  

//==== Redirect. Try PHP header redirect, then Java, then http redirect
function redirect($url)  
{  
  if (!headers_sent())  
  {  
    /* If headers not yet sent => do php redirect */  
    header('Location: '.$url);  
    exit;  
  }  
  else  
  {
    /* If headers already sent => do javaScript redirect */  
    echo '<script type="text/javascript">';  
    echo 'window.location.href="'.$url.'";';  
    echo '</script>';  

    /* If javaScript is disabled => do html redirect */  
    echo '<noscript>';  
    echo '<meta http-equiv="refresh" content="0; url='.$url.'" />';  
    echo '</noscript>';  
    exit;  
  }  
} 

?>