<?php

/**
 * English strings for ewantvideo.
 *
 * @package    mod_ewantvideo
 * @copyright  2013 Jonas Nockert <jonasnockert@gmail.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['modulename'] = 'videofile2';
$string['modulenameplural'] = 'Videofiles';
$string['modulename_help'] = 'Use the videofile2 module for adding html5 videos with flash fallback (using video.js). This module also allows for multi-language captions.';

$string['ewantvideo:addinstance'] = 'Add a new videofile2';
$string['ewantvideo:view'] = 'View videofile2';

$string['pluginadministration'] = 'Videofile administration';
$string['pluginname'] = 'ewant Video';

$string['ewantvideo_defaults_heading'] = 'Default values for videofile2 settings';
$string['ewantvideo_defaults_text'] = 'The values you set here define the default values that are used in the videofile2 settings form when you create a new videofile2.';
$string['width_explain'] = 'Specifies the default width of the video player.';
$string['height_explain'] = 'Specifies the default height of the video player.';
$string['responsive_explain'] = 'Specifies if responsive mode should be set as default or not.';
$string['limitdimensions_explain'] = 'Specifies if width and height should be used as maximum size during responsive mode.';

$string['filearea_captions'] = 'Captions';
$string['filearea_posters'] = 'Posters';
$string['filearea_videos'] = 'Videos';

$string['video_fieldset'] = 'Video';

$string['width'] = 'Width';
$string['width_help'] = 'Enter the width of the video here (e.g. 800 for a width of 800 pixels).';
$string['height'] = 'Height';
$string['height_help'] = 'Enter the height of the video here (e.g. 500 for a height of 500 pixels).';
$string['responsive'] = 'Responsive?';
$string['responsive_help'] = "Check to make the video automatically resize with the browser window size.\n\nUse the width and height fields to define the video proportions (e.g. 16/9 or 800/450).";
$string['responsive_label'] = '';
$string['limitdimensions'] = 'Limit size in responsive mode?';

$string['videos'] = 'Videos';
$string['videos_help'] = "Add the video file here.\n\nYou can add alternative formats in order to be sure it can play regardless of which browser is being used (usually .mp4, .ogv and .webm covers it.)";
$string['posters'] = 'Poster Image';
$string['posters_help'] = 'Add an image here that will be displayed before the video begins playing.';
$string['captions'] = 'Captions';
$string['captions_help'] = "Add transcriptions of the dialogue in WebVTT format here.\n\nYou can add several files in order to provide multilingual captions. The file names, without extensions, will be used for the video caption option titles. If the files are named according to ISO 6392 (e.g. eng.vtt and swe.vtt) the options will be shown as the corresponding full language names according to the user's language preferences (e.g. English and Swedish, assuming the user's preferred language is set to English).";

$string['err_positive'] = 'You must enter a positive number here.';

$string['video_not_playing'] = 'Video not playing? Try {$a}.';


$string['trackview'] = 'Tracking view?';
$string['trackview_explain'] = 'Specifies if trackview mode should be set as default or not.';
$string['trackview_help'] = "Check to record user watch video with log.";
$string['trackview_label'] = '';

$string['videotype'] = 'Video Type';
$string['youtube'] = 'Youtube';
$string['youku'] = 'YouKu';
$string['taiwanurl'] = 'Taiwan URL';
$string['chinaurl'] = 'Mainland URL';
$string['streaming'] = 'Streaming';
$string['twstreaming'] = 'Taiwan Streaming';
$string['cnstreaming'] = 'Mainland Streaming';

$string['err_required'] = 'You must supply a video.';