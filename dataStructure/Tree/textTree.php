<?php
/**
 * Created by PhpStorm.
 * User: xxx
 * Date: 2019/11/29
 * Time: 9:36
 */

namespace dataStructure\Tree;

class textTree
{
    public function dispose($node, $num = 0)
    {
        var_dump($node);exit();
        if ($node->data) {
            echo str_repeat('-', $num) . $node->data . PHP_EOL;
            foreach ($node->children as $k =>$v){
                if ($v->children != '') {
                    $this->dispose($v, $num +1);
                }
            }

        }
    }


}

require 'textNode.php';
$node = new textNode('ceo');
$node1 = new textNode('cfo');
$node2 = new textNode('cto');
$node3 = new textNode('Senior Architect');
$node4 = new textNode('SoftwareEngineer');
$node5 = new textNode('userInterFace Designer');
$node6 = new textNode('qualityAssurance Engineer');
$node7 = new textNode('cmo');
$node8 = new textNode('coo');
$node3->addTree($node4);
$node2->addTree($node3);
$node2->addTree($node5);
$node2->addTree($node6);
$node->addTree($node1);
$node->addTree($node2);
$node->addTree($node7);
$node->addTree($node8);
$tree = NEW textTree();
$tree->dispose($node);


