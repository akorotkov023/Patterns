<?php

/*
 Условия:
1. Html меню должно быть валидным, т.е. не содержать пустых тегов (например <ul></ul>)
и иметь определенную вложенность. Пример валидного меню:
<ul>
  <li>MVC
     <ul>
        <li>Laravel</li>
     </ul>
  </li>
</ul>

2. Сложность алгоритма должна быть 2n,
где n - количество элементов массива.
Т.е. количество циклов перебора массива не должна превышать двукратного числа элементов массива.

 */


$items = [
    ['id' => 1, 'title' => 'MVC', 'parent' => 0],
    ['id' => 2, 'title' => 'Laravel', 'parent' => 1],
    ['id' => 3, 'title' => 'Yii', 'parent' => 1],
    ['id' => 4, 'title' => 'Symfony', 'parent' => 1],
    ['id' => 5, 'title' => 'Bitrix', 'parent' => 0],
    ['id' => 6, 'title' => 'Blade', 'parent' => 2],
    ['id' => 7, 'title' => 'Mix', 'parent' => 2],
    ['id' => 8, 'title' => 'Widget', 'parent' => 3],
];

$counter = 0;
function buildMenu(array $items): array
{
    global $counter;
    $children = [];

    foreach ($items as $item) {
        $counter++;
        $children[$item['parent']][] = $item;
        echo memory_get_usage().PHP_EOL;
    }

    $buildTree = function($parentId) use (&$buildTree, $children, &$counter) {
        $branch = [];
        if (isset($children[$parentId])) {
            foreach ($children[$parentId] as $child) {
                $counter++;
                $child['children'] = $buildTree($child['id']);
                $branch[] = $child;
            }
        }
        return $branch;
    };

    return $buildTree(0);
}

$treeItems = buildMenu($items);

var_dump('<pre>', $treeItems);
echo 'Количество итераций = ' . $counter;
