<?php

require_once(__DIR__ . '/../../../config.php');
require_once($CFG->libdir.'/adminlib.php');

defined('MOODLE_INTERNAL') || die();

function mydbtestfunction() {
    global $DB;
 
    // You can access the database via the $DB method calls here.
    $user = $DB->get_record('user', ['id' => '1']);
    return $user;
}

// Set up the page
$title = get_string('pluginname', 'tool_scott');
$pagetitle = $title;
$url = new moodle_url('/admin/tool/scott/index.php', array('id' => '0'));
$PAGE->set_url($url);
$PAGE->set_title($title);
$PAGE->set_pagelayout('admin');
$PAGE->set_heading($title);

// Extending main navigation structure
$previewnode = $PAGE->navigation->add($title, $url, navigation_node::TYPE_COURSE);
$previewnode->add('Child 1', new moodle_url('/admin/tool/scott/index.php', array('id'=>'1')));
$previewnode->add('Child 2', new moodle_url('/admin/tool/scott/index.php', array('id'=>'2')));
$previewnode->add('Child 3', new moodle_url('/admin/tool/scott/index.php', array('id'=>'3')));
$previewnode->add('Child 4', new moodle_url('/admin/tool/scott/index.php', array('id'=>'4')));

// Extending settings navigation
$settingsnode = $PAGE->settingsnav->add($title, $url, navigation_node::TYPE_COURSE);


$output = $PAGE->get_renderer('tool_scott');

echo $output->header();
echo $output->heading($pagetitle);

$renderable = new \tool_scott\output\index_page('Some text', 'This is the header');
var_dump(mydbtestfunction());
echo $output->footer();