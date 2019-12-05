<?php
/**
 * Created by PhpStorm.
 * User: xxx
 * Date: 2019/11/29
 * Time: 9:59
 */

namespace dataStructure\Tree {

    class textNode
    {
        public $data = [];

        public $children = [];

        public function __construct($node=null)
        {
            $this->data = $node;

        }

        public function addTree($treeNode)
        {
            $this->children[] = $treeNode;

        }
    }
}