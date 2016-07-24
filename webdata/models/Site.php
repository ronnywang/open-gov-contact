<?php

class SiteRow extends Pix_Table
{
    public function getForm()
    {
        return json_decode(file_get_contents(__DIR__ . '/../../form-data/' . $this->name . '.json'));
    }
}

class Site extends Pix_Table
{
    public function init()
    {
        $this->_name = 'site';
        $this->_primary = 'id';

        $this->_columns['id'] = array('type' => 'int', 'auto_increment' => true);
        $this->_columns['name'] = array('type' => 'varchar', 'size' => 32);
    }

    public function importFromFiles()
    {
        foreach (glob(__DIR__ . '/../../form-data/*.json') as $json_file) {
            preg_match('#/([^/]*)\.json$#', $json_file, $matches);
            $name = $matches[1];
            if (!$obj = json_decode(file_get_contents($json_file))) {
                throw new Exception("Invalid JSON file {$json_file}");
            }
            if (!Site::find_by_name($name)) {
                Site::insert(array(
                    'name' => $name,
                ));
            }
        }
    }
}
