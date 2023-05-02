<?php
interface DbHandler {
    public function connect();

    public function disconnect();

    public function get_data($fields = array(), $start = 0);
    public function get_record_by_id($id);

    

    public function save($new_values);

    public function filter($column, $column_value);
    public function update($edited_values, $id);
    public function delete($id);

   
    
}