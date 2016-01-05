<?php

namespace peng\survey;

use yii;
use yii\base\Widget;

class SurveyWidget extends Widget{

	public function init() {
		parent::init();

	}

	public function run() {
		return $this->render('surveyrenderer');
	}
}

