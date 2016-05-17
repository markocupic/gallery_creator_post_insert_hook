<?php

$GLOBALS['TL_DCA']['tl_gallery_creator_pictures']['fields']['cameraModel'] = array(
    'label'            => &$GLOBALS['TL_LANG']['tl_gallery_creator_pictures']['cameraModel'],
    'exclude'          => true,
    'inputType'        => 'text',
    'eval'             => array('tl_class' => 'clr'),
    'sql'              => "varchar(64) NOT NULL default ''",
);

// Adapt Palette
$GLOBALS['TL_DCA']['tl_gallery_creator_pictures']['palettes']['default'] = str_replace('title', 'title,cameraModel', $GLOBALS['TL_DCA']['tl_gallery_creator_pictures']['palettes']['default']);
