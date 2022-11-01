<?php


class CartItem
{
    private Product $product;
    private int $quantity;

    // TODO Generate getters and setters of properties

    public function __construct(\Product $product, $quantity)
    {
        $this->product = $product;
        $this->quantity = $quantity;
    }
    

    public function increaseQuantity($amount = 1)
    {

        if ($this->getQuantity() + $amount > $this->getProduct()->getAvailableQuantity()){
            throw new Exception("Product quantity can not be more than ".$this->getProduct()->getAvailableQuantity());

            //TODO $quantity must be increased by one.
        // Bonus: $quantity must not become more than whatever is Product::$availableQuantity
    }
    $this->quantity += $amount;
}

    public function decreaseQuantity($amount =1)
    {
        if ($this->getQuantity() - $amount < 1){
            throw new Exception("Product quantity can not be less than 1");

            //TODO $quantity must be increased by one.
        // Bonus: $quantity must not become more than whatever is Product::$availableQuantity
    }
    $this->quantity -= $amount;
        //TODO $quantity must be increased by one.
        // Bonus: Quantity must not become less than 1
    }

        /**
         * Get the value of product
         */ 
        public function getProduct()
        {
                return $this->product;
        }

        /**
         * Set the value of product
         *
         * @return  self
         */ 
        public function setProduct($product)
        {
                $this->product = $product;

                return $this;
        }

        /**
         * Get the value of quantity
         */ 
        public function getQuantity()
        {
                return $this->quantity;
        }

        /**
         * Set the value of quantity
         *
         * @return  self
         */ 
        public function setQuantity($quantity)
        {
                $this->quantity = $quantity;

                return $this;
        }
}