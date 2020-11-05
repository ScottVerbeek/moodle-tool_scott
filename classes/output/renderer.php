<?php

namespace tool_scott\output;

use plugin_renderer_base;

class renderer extends plugin_renderer_base
{
    public function render_index_page($page)
    {
        $data = $page->export_for_template($this);
        return parent::render_from_template('tool_scott/index_page', $data);
    }
}