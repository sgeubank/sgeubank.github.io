<?php
/**
* Plugin: jQuery AJAX-ZOOM, /axZm/zoomConfigCustom.inc.php
* Copyright: Copyright (c) 2010-2021 Vadim Jacobi
* License Agreement: https://www.ajax-zoom.com/index.php?cid=download
* Version: 5.4.10
* Date: 2021-03-27
* Review: 2021-03-27
* URL: https://www.ajax-zoom.com
* Documentation: https://www.ajax-zoom.com/index.php?cid=docs


////////////////////////////////////////////////////////////////
////////////////// Configuration settings //////////////////////
////////////////////////////////////////////////////////////////

If you want to know more about how you can set configuration settings and where,
please see here:

https://www.ajax-zoom.com/index.php?cid=blog&article=options_config&lang=en
*/

if (!isset($axZmH)) {
    exit;
}

////////////////////////////////////////////////////////////////
////////// you can copy / uncomment some options here //////////
////////////////////////////////////////////////////////////////
// $zoom['config']['licenceKey'] = 'demo';
// $zoom['config']['licenceType'] = 'Basic';
// $zoom['config']['iMagick'] = true;
// $zoom['config']['imPath'] = '/usr/bin/convert';
// $zoom['config']['memory_limit'] = '8512M';

/*
$zoom['config']['licenses'] = array(
    'yourDomainName.com' => array(
        'licenceType' => 'Basic',
        'licenceKey' => 'demo'
    ),
    'otherDomainName.com' => array(
        'licenceType' => 'Basic',
        'licenceKey' => 'demo'
    )
);
*/

if ($_GET['example'] == 1) {
    // example2.php
    $zoom['config']['zoomMapRest'] = false;
    $zoom['config']['gallerySlideNaviOnlyFullScreen'] = true;
}

elseif ($_GET['example'] == 2) {
    // example2.php, example26.php
    $zoom['config']['galleryFullPicDim'] = '100x100';
    $zoom = $axZmH->autoSetGalleryThumbCss($zoom, 'full');

    $zoom['config']['help'] = false;
    $zoom['config']['zoomMapAnimate'] = false;
    $zoom['config']['zoomMapVis'] = false;
    $zoom['config']['gallerySlideNavi'] = false;
}

$zoom['config']['zoomMapContainment'] = '#axZm_zoomAll';
$zoom['config']['displayNavi'] = true;
$zoom['config']['cornerRadius'] = 0;
$zoom['config']['innerMargin'] = 0;
$zoom['config']['dragMap'] = false;
$zoom['config']['fullScreenNaviBar'] = true;
$zoom['config']['fullScreenApi'] = true;
$zoom['config']['useGallery'] = false;
$zoom['config']['zoomMapRest'] = false;
$zoom['config']['pic'] = $zoom['config']['installPath'].'/storymap-ft-sill-to-ft-riley/images/'; // string

// Folder where initial images will be written
// They will be named as pictureFileName+'_'+$zoom['config']['picDim']+'.jpg'
// This folder should not be password protected!
// With a slash at the end!
$zoom['config']['thumbs'] = 'axZm/pic/zoomthumb/'; // string

// Folder where to write temporary zoomed images
// This folder should not be password protected!
// With a slash at the end!
$zoom['config']['temp'] = 'axZm/pic/temp/'; // string

// Folder where to write the thumbs for gallery images
// They will be named as pictureFileName+'_'+$zoom['config']['galleryPicDim']+'.jpg'
// or                    pictureFileName+'_'+$zoom['config']['galleryFullPicDim']+'.jpg' if they differ in size
$zoom['config']['gallery'] = 'axZm/pic/zoomgallery/'; // string

// Folder where thumbnails generated with the PHP API method $axZm->rawThumb() can be optionally cached.
// Please make sure PHP can write to this directory (chmod)!
$zoom['config']['tempCache'] = 'axZm/pic/cache/';

// Path where map images are stored when mapOwnImage is set to some size.
$zoom['config']['mapPath'] = 'axZm/pic/zoommap/';

// 5.0.9+ Path for json files, see also $zoom['config']['jsonInfo']
$zoom['config']['jsonPath'] = 'axZm/pic/json/';

