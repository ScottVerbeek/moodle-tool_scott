<?php

namespace tool_scott\output;

use renderable;
use renderer_base;
use stdClass;
use templatable;
class index_page implements renderable, templatable
{
    var $sometext = null;
    var $heading = null;
    
    public function __construct(string $sometext, $heading)
    {
        $this->sometext = $sometext;
        $this->heading = $heading;
    }


    public function export_for_template(renderer_base $output)
    {
        $data = new stdClass();
        $data->sometext = $this->sometext;
        $data->heading = $this->heading;
        return $data;
    }
}