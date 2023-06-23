<?php
/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2023 Leo Feyer
 *
 * @license LGPL-3.0+
 */

namespace Schachbulle\ContaoDsbapplayoutBundle\Classes;

/**
 * Klasse für Ausgabe des Layouts für die DSB-App
 *
 * @author Fank Hoppe
 */

class AppLayout
{
	public function getPageLayout(\PageModel $objPage, \LayoutModel &$objLayout, \PageRegular $objPageRegular)
	{
		if(!\Input::get('appId') && !\Input::get('deviceId'))
			return;

		// create default layout
		$objAjaxLayout = new \LayoutModel();
		$objAjaxLayout->pid = $objLayout->pid;
		$objAjaxLayout->rows = '1rw';
		$objAjaxLayout->cols = '1cl';
		$objAjaxLayout->orderExt = '';
		$objAjaxLayout->modules = 'a:1:{i:0;a:3:{s:3:"mod";s:1:"0";s:3:"col";s:4:"main";s:6:"enable";s:1:"1";}}';
		$objAjaxLayout->template = 'fe_page_app';
		$objAjaxLayout->doctype = $objLayout->doctype;
		$objAjaxLayout->defaultImageDensities = $objLayout->defaultImageDensities;

		$objLayout = $objAjaxLayout;

		// Do not cache
		$objPage->cache = false;
	}
}
