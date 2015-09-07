<?php
$obj = new SplQueue();
$obj->enqueue('a');
$obj->enqueue('b');
$obj->enqueue('c');
var_dump($obj);
echo "Buttom:".$obj->bottom()."\n";
echo "Top:".$obj->top()."\n";
//插入一个节点到队列里面的top位置
$obj->offsetSet(0,'A');
var_dump($obj);
$obj->rewind();
echo "current:".$obj->current()."\n";
while($obj->valid()){
    echo $obj->key()."=>".$obj->current()."\n";
    $obj->next();
}
echo "dequeue obj:".$obj->dequeue()."\n";
//dequeue操作从队列中提取buttom位置的节点并返回，同时从队列中删除
var_dump($obj);
