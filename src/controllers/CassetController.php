<?php namespace Mmanos\Casset;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;

/**
 * Casset controller.
 * 
 * @author Mark Manos
 */
class CassetController extends Controller
{
	/**
	 * Index action.
	 *
	 * @return mixed
	 */
	public function getIndex($type = null)
	{
		$container = Input::get('c');
		$files = Input::get('files', '');
		
		if (empty($type) || !in_array($type, array('style', 'script'))) {
			App::abort(404);
		}
		
		if (empty($container)) {
			App::abort(404);
		}
		
		$files = json_decode(base64_decode($files), true);
		if (empty($files) || !is_array($files)) {
			App::abort(404);
		}
		
		foreach ($files as $file) {
			Facades\Casset::container($container)->add(
				array_get($file, 'source'),
				array(),
				array_get($file, 'dependencies', array())
			);
		}
		
		$response = Response::make(Facades\Casset::container($container)->content($type));
		
		if ('style' == $type) {
			$response->headers->set('Content-Type', 'text/css');
		}
		else {
			
			$response->headers->set('Content-Type', 'application/json');
		}
		
		return $response;
	}
}
