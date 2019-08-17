<?php
class couponGenerator {
  private $carCoupon;
  
  // Get only objects that belong to the interface.  
  public function __construct(carCouponGenerator $carCoupon)
  {
    $this->carCoupon = $carCoupon;
  }
   
  // Use the object's methods to generate the coupon. 
  public function getCoupon()
  {
    $discount = $this->carCoupon->addSeasonDiscount();
    $discount = $this->carCoupon->addStockDiscount();
    
    return $coupon = "Get {$discount}% off the price of your new car.";
  }
}

$car = "bmw";
$carObj = couponObjectGenerator($car);
$couponGenerator = new couponGenerator($carObj);
echo $couponGenerator->getCoupon();
  
//echo "<hr />";
//    
//$car = "mercedes";
//$carObj = couponObjectGenerator($car);
//$couponGenerator = new couponGenerator($carObj);
//echo $couponGenerator->getCoupon();