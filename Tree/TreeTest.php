<?php
require_once 'Tree.php';

class TreeTest
{

    public $id = 'id';

    public $pId = 'pId';

    public $child = 'child';

    public function testBuildTree()
    {
        $items = [];

        for ($i = 0; $i < 10; $i++) {
            $pId = $i % 5;
            $items[] = [
                $this->id => $i + 1,
                $this->pId => $pId,
                'name' => 'name' . ($i + 1),
            ];
        }

        $tree =  new Tree($items, $this->id, $this->pId, $this->child);
        print_r($tree->buildTree());
        echo PHP_EOL, 'memory size : ', number_format(memory_get_usage()), PHP_EOL;

    }
}


(new TreeTest())->testBuildTree();
