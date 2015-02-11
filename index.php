<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="stylesheet" href="cssproto.css" type="text/css">

<html>
    <body>
        
        
<?php
    //参考
    //http://developer.yahoo.co.jp/webapi/shopping/shopping/v1/itemsearch.html
    //http://css-eblog.com/csstechnique/post-14.html
    
    require_once './search.php';

    $text = "vaio";
    $return = search($text);
    
    /*
    echo '<pre>';;
    var_dump($return);
    echo '</pre>';
    */
    $return = $return[Result][Hit];
    
    //参考
    //http://jim-do-it-yourself.jimdo.com/4-%E3%83%97%E3%83%81-%E3%82%AB%E3%82%B9%E3%82%BF%E3%83%9E%E3%82%A4%E3%82%BA/html%E3%81%AE%E3%81%8A%E5%8B%89%E5%BC%B7-%E6%9E%A0%E3%82%92%E3%81%A4%E3%81%91%E3%82%8B/
    
    foreach($return as $result){
        ?>
        <div style="padding: 10px; margin-bottom: 10px; border: 1px solid #333333;">
        <?php
        $URL = $result[Url];
        $NAME = $result[Name];
        $IMG = $result[Image][Medium];
        $exp = $result[Headline];
        $store_name = $result[Store][Name];
        printf("<p><img src=".$IMG.">");
        printf("<a href=\"".$URL."\"class=\"toolTip\">".$NAME);
        printf("<span>".$exp."</span>");
        printf("</a>");
        printf("</p>");
        printf("<p>".$store_name."</p>");
        printf("</div>");
        
    };
    
?>

<!-- Begin Yahoo! JAPAN Web Services Attribution Snippet -->
<a href="http://developer.yahoo.co.jp/about">
<img src="http://i.yimg.jp/images/yjdn/yjdn_attbtn2_105_17.gif" width="105" height="17" title="Webサービス by Yahoo! JAPAN" alt="Webサービス by Yahoo! JAPAN" border="0" style="margin:15px 15px 15px 15px"></a>
<!-- End Yahoo! JAPAN Web Services Attribution Snippet -->
    </body>
</html>