<?php
namespace App\Components;

use App\Menu;

/**
 *
 */
class MenuRecusive
{
    private $html;
    public function __construct()
    {
        $this->html = '';
    }
    public function MenuRecusiveAdd($parent_id = 0, $subMark = '')
    {
        $data = Menu::where('parent_id', $parent_id)->get();
        foreach ($data as $item) {
            $this->html .= '<option value="' . $item->id . '">' . $subMark . $item->name . '</option>';
            $this->MenuRecusiveAdd($item->id, $subMark . '&nbsp&nbsp&nbsp&nbsp');
        }
        return $this->html;
    }
    public function MenuRecusiveEdit($parentIdMenuEdit, $parentId = 0, $subMark = '')
    {
        $data = Menu::where('parent_id', $parentId)->get();
        foreach ($data as $item) {
            if ($parentIdMenuEdit == $item->id) {
                $this->html .= '<option selected value="' . $item->id . '">' . $subMark . $item->name . '</option>';

            } else {
                $this->html .= '<option value="' . $item->id . '">' . $subMark . $item->name . '</option>';

            }
            $this->MenuRecusiveEdit($parentIdMenuEdit, $subMark . '&nbsp&nbsp&nbsp&nbsp');
        }
        return $this->html;
    }
}
