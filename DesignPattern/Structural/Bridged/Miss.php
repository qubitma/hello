<?php
namespace DesignPattern\Structure\Bridged;


class Miss implements IPeople
{

    public function buy()
    {
        print '女生购物';
    }
}