<?php
$obj = new SplDoublyLinkedList();
$obj->push(1);//相当于 一个一个往后添
$obj->push(2);
$obj->push(3);
$obj->unshift(10);//元素添加到buttom
var_dump($obj);
$obj->rewind();//rewind用于把节点指针指向buttom
echo 'current node:'.$obj->current()."\n";//获取指点指针指向的节点  当前节点 指向下标0
$obj->next();
echo 'next node:'.$obj->current()."\n";
$obj->next();
$obj->next();//指向下一个节点 靠近top
$obj->prev();//指向上一个节点 靠近buttom
echo 'next node:'.$obj->current()."\n";
$obj->next();
$obj->next();
if($obj->current()){
    echo "current node:\n";
}else{
    echo "current node invalid \n";
}
$obj->rewind();
if($obj->valid()){//如果节点有效返回true
    echo "valid list \n";
}else{
    echo "invalid list \n";
}
//echo 'current node:'.$obj->current()."\n";
echo "Pop value:".$obj->pop()."\n";
var_dump($obj);
echo 'current node:'.$obj->current()."\n";//10
//echo "Pop value:".$obj->pop()."\n";
$obj->next();//1
$obj->next();//2(top)
$obj->pop();//把top位置的街此案从链表中删除
echo 'next node:'.$obj->current()."\n";//元素被删除  指向的内容是空
var_dump($obj);
$obj->shift();//删除bottom
var_dump($obj);

