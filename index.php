<?php

require_once(__DIR__ . '/../../../config.php');
require_once($CFG->libdir.'/adminlib.php');

defined('MOODLE_INTERNAL') || die();

// Set up the page
$title = $pagetitle = get_string('pluginname', 'tool_scott');
$homepageurl = new moodle_url('/admin/tool/scott/index.php');
$PAGE->set_url($homepageurl);
$PAGE->set_title($title);
$PAGE->set_pagelayout('admin');
$PAGE->set_heading($title);
$previewnode = $PAGE->navigation->add($title, $url, navigation_node::TYPE_COURSE);
// Extending main navigation structure
$previewnode->add('Child 1', new moodle_url('/admin/tool/scott/index.php', array('id'=>'1')));
$previewnode->add('Child 2', new moodle_url('/admin/tool/scott/index.php', array('id'=>'2')));
$previewnode->add('Child 3', new moodle_url('/admin/tool/scott/index.php', array('id'=>'3')));
$previewnode->add('Child 4', new moodle_url('/admin/tool/scott/index.php', array('id'=>'4')));

$output = $PAGE->get_renderer('tool_scott');
$renderable = new \tool_scott\output\index_page('Some text', 'This is the header');

echo $output->header();
echo $output->heading($pagetitle);
echo $output->render($renderable);

echo $output->footer();