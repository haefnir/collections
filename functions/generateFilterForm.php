<?php
/** Turns the types array into a pair of dropdowns for filtering
 *
 * @param array $types
 * @return string
 */
function generateFilterForm(array $types): string{


    $toBeDisplayed = "<form method='get'><select name='type1'><option ";
    if (!isset($_GET['type1']) || $_GET['type1'] == 0){
        $toBeDisplayed.= "selected='selected' ";
}
    $toBeDisplayed .= "value='0'>Type</option>";

    foreach($types as $type){
        $toBeDisplayed .= "<option value='{$type['id']}' ";
        if(isset($_GET['type1'])) {
            if ($_GET['type1'] == $type['id']) {
                $toBeDisplayed .= "selected='selected' ";
            }
        }
        $toBeDisplayed .= ">{$type['name']}</option>";
    }
    $toBeDisplayed .= "</select><select name='type2'><option ";
    if (!isset($_GET['type2']) || $_GET['type2'] == 0){
        $toBeDisplayed .= "selected='selected' ";
    }
    $toBeDisplayed .= "value='0'>Type</option>";
    foreach($types as $type){
        $toBeDisplayed .= "<option value='{$type['id']}' ";
        if(isset($_GET['type1'])) {
            if ($_GET['type2'] == $type['id']) {
                $toBeDisplayed .= "selected='selected' ";
            }
        }
        $toBeDisplayed .= ">{$type['name']}</option>";
    }
    $toBeDisplayed .= "</select><input type='submit' value='Filter'/></form>";

    return $toBeDisplayed;
}