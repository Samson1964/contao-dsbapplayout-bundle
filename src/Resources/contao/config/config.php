<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @package   figcaption
 * @author    Frank Hoppe
 * @license   GNU/LGPL
 * @copyright Frank Hoppe 2021
 */

/**
 * -------------------------------------------------------------------------
 * Frontend-Hooks
 * -------------------------------------------------------------------------
 */

$GLOBALS['TL_HOOKS']['getPageLayout'][] = array('Schachbulle\ContaoDsbapplayoutBundle\Classes\AppLayout','getPageLayout');
