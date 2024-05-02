<?php

defined('MOODLE_INTERNAL') || die();

function local_testplugin_extend_navigation(global_navigation $navigation) {
    $node = navigation_node::create(get_string('pluginname', 'local_testplugin'),
                                    new moodle_url('/local/testplugin/index.php'),
                                    navigation_node::TYPE_CUSTOM, null, null,
                                    new pix_icon('icon', '', 'local_testplugin'));
    $navigation->add_node($node);
}

function local_testplugin_init() {
    global $PAGE;
    $PAGE->set_context(context_system::instance());
    $PAGE->set_url(new moodle_url('/local/testplugin/index.php'));
    $PAGE->set_title(get_string('pluginname', 'local_testplugin'));
    $PAGE->set_heading(get_string('pluginname', 'local_testplugin'));
}
