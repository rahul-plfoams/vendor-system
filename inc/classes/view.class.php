<?php
class view
{
    public function form($method, $action, $fields)
    {
        echo "<form method=$method action=$action>";
        foreach ($fields as $field) {
            $this->inputs($field);
        }
        echo "</form>";
    }

    public function label($id)
    {
        return "<label for='$id'>$id</label>";
    }
    public function inputs($type, $name, $placeholder = "no placeholder", $id = "no id", $value = "no value")
    {
        echo "<input type=$type name=$name placeholder=$placeholder id=$id value=$value>";
    }
}
`