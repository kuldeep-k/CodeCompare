<?php

namespace SimpleFw\App\Controller;

use SimpleFw\Core\Mvc\Controller;
use SimpleFw\Core\Http\Request;
use SimpleFw\App\Model\LanguageModel;
use SimpleFw\App\Model\CodeTypeModel;
use SimpleFw\App\Model\CodeModel;

class CodeTypeController extends Controller
{
	public function viewAction()
	{
        $code_type_model = new CodeTypeModel();
		$lat_code_types = $code_type_model->getLatestTypes();
        
        $language_model = new LanguageModel();
        $lat_languages = $language_model->getLatestLanguages();

        $code_type = $code_type_model->getCodeType((int)$_GET['id']);

		return array('code_type' => $code_type, 'lat_languages' => $lat_languages, 'lat_code_types' => $lat_code_types);

	}
	

}	

?>
