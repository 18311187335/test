<?php
/*$array = array(
     array('name'=>'Jona','id'=>'5'),
     array('name'=>'Peter','id'=>'6'),
     array('name'=>'Lisa','id'=>'7')
    );
echo count($array)."\n";
echo count($array[1])."\n";
*/
//实现Counttable接口 可以重写count方法
class CountMe implements Countable{
    protected $_myCount = 3;
    public function count(){
        return $this->_myCount;
    }
}
$obj = new CountMe();
echo count($obj);
