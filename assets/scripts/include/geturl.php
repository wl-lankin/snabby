<?php
	include 'lang.php';
	include '../../lang/'.$setlang.'.php';

	require_once('../../../includes/load-yourls.php' );

	//$page = YOURLS_SITE . '/index.php' ;
	if ( isset( $_REQUEST['url'] ) && $_REQUEST['url'] != '' && $_REQUEST['url'] != 'http://' ) {
		$url = $_REQUEST['url'];
		$url_headers = @get_headers($url);
		if(!$url_headers || strpos($headers[0], '404')) {
			$data[] = array('stat'	=> 'fail',
							'input' => $lang['error-1']);
			echo json_encode($data);
		} else {
			$keyword = isset( $_REQUEST['keyword'] ) ? $_REQUEST['keyword'] : '' ;
			$title   = isset( $_REQUEST['title'] ) ?  $_REQUEST['title'] : '' ;
			//error_log(json_encode($return).PHP_EOL, 3, 'response.log');
			$return  = yourls_add_new_link( $url, $keyword, $title );
			// Stop here if bookmarklet with a JSON callback function ("instant" bookmarklets)
			if( isset( $_GET['jsonp'] ) && $_GET['jsonp'] == 'yourls' ) {
				$short = $return['shorturl'] ? $return['shorturl'] : '';
				$message = "Short URL (Ctrl+C to copy)";
				header('Content-type: application/json');
				echo yourls_apply_filter( 'bookmarklet_jsonp', "yourls_callback({'short_url':'$short','message':'$message'});" );
				die();
			}
			$data[] = array('stat'	=> isset( $return['status'] ) ? $return['status'] : '',
							'input' => isset( $return['shorturl'] ) ? $return['shorturl'] : '');
			echo json_encode($data);
		}
	} else {
		$data[] = array('stat'	=> 'fail',
						'input' => $lang['error-1']);
		echo json_encode($data);
	}
