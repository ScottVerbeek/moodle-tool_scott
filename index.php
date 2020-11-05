<?php

require_once(__DIR__ . '/../../../config.php');
require_once($CFG->libdir.'/adminlib.php');

// Set up the page
$title = get_string('pluginname', 'tool_scott');
$pagetitle = $title;
$url = new moodle_url('/admin/tool/scott/index.php');
$PAGE->set_url($url);
$PAGE->set_title($title);
$PAGE->set_heading($title);

$output = $PAGE->get_renderer('tool_scott');

echo $output->header();
echo $output->heading($pagetitle);

$renderable = new \tool_scott\output\index_page('Some text', 'This is the header');
echo $output->render($renderable);

echo $output->footer();