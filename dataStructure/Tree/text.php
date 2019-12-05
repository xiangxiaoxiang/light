<?php
/**
 * Created by PhpStorm.
 * User: xxx
 * Date: 2019/11/28
 * Time: 17:24
 */

namespace dataStructure\Tree;

//城市递归
class text
{
    public $myList = [
        ['area_parent_id' => 0, 'id' => 1, 'area_name' => '河北',],
        ['area_parent_id' => 0, 'id' => 2, 'area_name' => '山东',],
        ['area_parent_id' => 0, 'id' => 3, 'area_name' => '辽宁',],
        ['area_parent_id' => 2, 'id' => 4, 'area_name' => '济南',],
        ['area_parent_id' => 2, 'id' => 5, 'area_name' => '德州',],
        ['area_parent_id' => 3, 'id' => 6, 'area_name' => '沈阳',],
        ['area_parent_id' => 3, 'id' => 7, 'area_name' => '大连',],
        ['area_parent_id' => 4, 'id' => 8, 'area_name' => '济南县1',],
        ['area_parent_id' => 5, 'id' => 9, 'area_name' => '德州县1',],
        ['area_parent_id' => 5, 'id' => 10, 'area_name' => '德州县2',]
    ];
    public $type = 0;

    public function city($list, $num = 0)
    {
        foreach ($list as $key => $value) {
            if ($value['area_parent_id'] == 0) {
                $this->type = $value['id'];
                echo str_repeat('-', $num) . $value['area_name'] . PHP_EOL;
            } else {
                if ($value['area_parent_id'] == $this->type) {
                    echo str_repeat('-', 2) . $value['area_name'] . PHP_EOL;
                }

            }
        }


    }

    /**
     *
     * 递归城市排序
     * @param $list
     * @param int $num
     * @param int $type
     */
    public function cityMore($list, $num = 0,$type=0)
    {
        foreach ($list as $key => $value) {
            if ($value['area_parent_id'] == $type) {
                $type = $value['id'];
                echo str_repeat('-', $num) . $value['area_name'] . PHP_EOL;
                $this->cityMore($list, $num + 1, $type);
                $type=0;

            }
        }

    }




}

/*城市递归
 * $tree = New text();
$tree->cityMore($tree->myList);
*/

