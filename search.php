<?php
function search($search){
    	
	//参考
        //http://www.goinkyo.jp/isaoa/?i=2010/06/15-222120
        
        $request_url = "http://shopping.yahooapis.jp/ShoppingWebService/V1/itemSearch";
        $appid = "dj0zaiZpPWNEckFvakZ3dmd1bSZzPWNvbnN1bWVyc2VjcmV0Jng9N2M-";
        
        $appid = rawurlencode($appid);
        $search = rawurlencode($search);
        
        $url =  $request_url."?appid=$appid&query=$search";
        $response = simplexml_load_file($url);
        //参考
        //http://blog.code-life.net/blog/2011/12/15/convert-xml-to-associative-array-in-php/
        $response = json_decode(json_encode($response), true);
        
	
	return $response;
	
	}

?>