<?php
$stack = new SplStack();
$stack->push('a');
$stack->push('b');
$stack->push('c');
var_dump($stack);
echo "Buttom:".$stack->bottom()."\n";
echo "Top:".$stack->top()."\n";
$stack->offsetSet(0,'C');//堆栈的offset=1是靠近top位置
var_dump($stack);
$stack->rewind();//堆栈的rewind回到top
echo 'current:'.$stack->current()."\n";
$stack->next();
echo 'current:'.$stack->current()."\n";
$stack->prev();
echo 'current:'.$stack->current()."\n";
//遍历堆栈
$stack->rewind();
while($stack->valid()){
    echo $stack->key()."=>".$stack->current()."\n";
    $stack->next();
}
$popObj = $stack->pop();
echo "Poped obj:".$popObj."\n";
var_dump($stack);

