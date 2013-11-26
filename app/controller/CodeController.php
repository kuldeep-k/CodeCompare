<?php

namespace SimpleFw\App\Controller;


use SimpleFw\Core\Mvc\Controller;
use SimpleFw\Core\Http\Request;
use SimpleFw\App\Model\LanguageModel;
use SimpleFw\App\Model\CodeTypeModel;
use SimpleFw\App\Model\CodeModel;

class CodeController extends Controller
{
	public function indexAction()
	{
        $code_type = new CodeTypeModel();
		$lat_code_types = $code_type->getLatestTypes();
        
        $language_model = new LanguageModel();
        $lat_languages = $language_model->getLatestLanguages();

        $code_model = new CodeModel();
        $codes = $code_model->findAll((int)$_GET['language_id']);
        print_r($codes);

		return array('codes' => $codes, 'lat_languages' => $lat_languages, 'lat_code_types' => $lat_code_types);

	}
	

}	

?>
