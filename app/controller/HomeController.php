<?php

namespace SimpleFw\App\Controller;


use SimpleFw\Core\Mvc\Controller;
use SimpleFw\Core\Http\Request;
use SimpleFw\App\Model\LanguageModel;
use SimpleFw\App\Model\CodeTypeModel;
use SimpleFw\App\Model\CodeModel;

class HomeController extends Controller
{
	public function indexAction()
	{
        $code_type = new CodeTypeModel();
		$lat_code_types = $code_type->getLatestTypes();
        
        /*$code = new CodeModel();
		$lat_codes = $code->getLatestCodes();*/

        $language = new LanguageModel();
        $lat_languages = $language->getLatestLanguages();
        
		return array('lat_languages' => $lat_languages, 'lat_code_types' => $lat_code_types);
	}
	

}	

?>
