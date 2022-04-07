<?php
/** Turns the types array into a pair of dropdowns for filtering
 *
 * @param array $types
 * @return string
 */
function generateFilterForm(array $types): string{
    $toBeDisplayed = '<form method="get"><select name="type1"><option select="selected" value="0">Type</option>';

    foreach($types as $type){
        $toBeDisplayed .= "<option value='{$type['id']}'>{$type['name']}</option>";
    }
    $toBeDisplayed .= "</select><select name='type2'><option select='selected' value='0'>Type</option>";

    foreach($types as $type){
        $toBeDisplayed .= "<option value='{$type['id']}'>{$type['name']}</option>";
    }
    $toBeDisplayed .= "</select><input type='submit' value='Filter'/></form>";

    return $toBeDisplayed;
}