<?php

namespace SimpleFw\App\Controller;


use SimpleFw\Core\Mvc\Controller;
use SimpleFw\Core\Http\Request;
use SimpleFw\App\Model\LanguageModel;
use SimpleFw\App\Model\CodeTypeModel;
use SimpleFw\App\Model\CodeModel;

class LanguageController extends Controller
{
	public function viewAction()
	{
        $code_type = new CodeTypeModel();
		$lat_code_types = $code_type->getLatestTypes();
        
        $language_model = new LanguageModel();
        $lat_languages = $language_model->getLatestLanguages();

        $language = $language_model->getLanguage((int)$_GET['id']);

		return array('language' => $language, 'lat_languages' => $lat_languages, 'lat_code_types' => $lat_code_types);

	}
	

}	

?>
