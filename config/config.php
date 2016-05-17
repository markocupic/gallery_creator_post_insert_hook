<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2016 Leo Feyer
 *
 * @package   my_gallery_creator
 * @author    Marko Cupic
 * @license   GNU/LGPL
 * @copyright Marko Cupic 2016
 */

/** HOOKS */
$GLOBALS['TL_HOOKS']['galleryCreatorImagePostInsert'][] = array('GalleryCreator\GalleryCreatorHooks', 'postInsert');
