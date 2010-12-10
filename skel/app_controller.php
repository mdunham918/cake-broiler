<?php

class AppController extends Controller {
	var $components = array('Session', 'DebugKit.Toolbar');
	var $helpers = array('Html', 'Form', 'Session', 'Text');
}
