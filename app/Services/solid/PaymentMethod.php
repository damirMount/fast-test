<?php

namespace App\Services;

interface PaymentMethod {
    public function processPayment($amount);
}

class CreditCardPayment implements PaymentMethod {
    public function processPayment($amount) {
        // Process payment with credit card
    }
}

class PayPalPayment implements PaymentMethod {
    public function processPayment($amount) {
        // Process payment with PayPal
    }
}

class ShoppingCart {
    private $paymentMethod;

    public function __construct(PaymentMethod $paymentMethod) {
        $this->paymentMethod = $paymentMethod;
    }

    public function checkout($amount) {
        $this->paymentMethod->processPayment($amount);
    }
}

// Client code
$creditCardPayment = new CreditCardPayment();
$shoppingCart = new ShoppingCart($creditCardPayment);
$shoppingCart->checkout(100.00);

$payPalPayment = new PayPalPayment();
$shoppingCart = new ShoppingCart($payPalPayment);
$shoppingCart->checkout(100.00);

