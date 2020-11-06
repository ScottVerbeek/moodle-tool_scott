<?php
require_once(__DIR__ . '/../../../config.php');
function xmldb_tool_scott_upgrade($oldversion)
{
    global $DB;

    $dbman = $DB->get_manager();

    if ($oldversion < 2020110503) {

        // Define field id to be added to tool_scott.
        $table = new xmldb_table('tool_scott');
        $field = new xmldb_field('id', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, XMLDB_SEQUENCE, null, null);

        // Conditionally launch add field id.
        if (!$dbman->field_exists($table, $field)) {
            $dbman->add_field($table, $field);
        }

        // Scott savepoint reached.
        upgrade_plugin_savepoint(true, 2020110503, 'tool', 'scott');
    }
};
