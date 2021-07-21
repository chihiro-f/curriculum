<?php

#税込み金額を取得
class b_tax{
    public $b_price;
    public function b($price,$perc){
        $b_price = $price * (1 + ($perc/100)) ;
        echo '税抜き価格のとき、税込み価格は'.$b_price.'円です'.PHP_EOL;
        return $b_price;
    }
}

#税抜き金額を取得
class w_tax{
    public $w_price;
    public function w($price,$perc){
        $w_price =  $price / (1 + ($perc/100) );
        echo '税込み価格のとき、税抜き価格は'.floor($w_price).'円です'.PHP_EOL;
    }
}

$Price = (int) $argv[1];
$Perc = (int) $argv[2];

echo $Price.'円が'.PHP_EOL;

$B = new b_tax();
$W = new w_tax();
$B->b($Price,$Perc);
$W->w($Price,$Perc);

?>