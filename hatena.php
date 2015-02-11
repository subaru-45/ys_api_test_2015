<?php
function hatena_keyword( $request_url , $method ,$array){
	
	//$api_key = 'qBEXXl1BGZyR2blEwRo2UHtIF';
	//$api_secret = rawurlencode('pnG7gGzi6nft3qKMHP56ZlI5WPLVx7OXgK0x4p8NBqt31b0O7D');
	//[アクセストークン]と[アクセストークンシークレット] ([アクセストークンシークレット]はついでにURLエンコード)

	
	//参考
        //http://www.goinkyo.jp/isaoa/?i=2010/06/15-222120
        
        $request = xmlrpc_encode_request($method, $array, array('encoding' => 'UTF-8', 'escaping'=>'markup'));
        $context = stream_context_create( 
                array(
                   'http' => array(
                       'method' => "POST", 
                       'header' => "Content-Type: text/xml",
                       'content' => $request,
                    )
                )
            );
	
	$response = @file_get_contents(
                    $request_url,
                    false,
                    $context
	);
	
	$response = xmlrpc_decode($response);
        
	
	return $response;
	
	}

?>