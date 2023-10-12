Absolutely! Let's update the README to reflect the recent changes in class and interface names, as well as the usage examples with `StripeGateway` and `BraintreeGateway`.

---

# Object-Oriented Principles in PHP

## Introduction

This repository explores object-oriented principles in PHP, focusing on object composition and abstractions. It includes classes and an interface: `Subscription`, `StripeGateway`, `BraintreeGateway`, and `GatewayInterface`, illustrating the usage of these principles.

## Class Details

### Subscription Class

The `Subscription` class represents a subscription in a system that integrates with various payment gateways. It defines methods for subscription-related operations and relies on a `GatewayInterface` object for gateway interactions.

```php
class Subscription {

    protected GatewayInterface $gateway;

    public function __construct(GatewayInterface $gateway) {
        $this->gateway = $gateway;
    }

    public function create() {
        // Implementation for subscription creation
    }

    public function cancel() {
        // Perform cancellation logic
        $this->gateway->findCustomer();
        $this->gateway->findSubscriptionByCustomer();
    }

    public function invoice() {
        // Implementation for generating an invoice
    }

    public function swap($newPlan) {
        // Implementation for changing subscription plan
    }
}
```

### GatewayInterface

The `GatewayInterface` defines the behavior for a gateway, including methods to find a customer and find a subscription by customer.

```php
interface GatewayInterface {

    // Behavior: Find a customer
    public function findCustomer();

    // Behavior: Find a subscription by customer
    public function findSubscriptionByCustomer();
}
```

### StripeGateway Class

The `StripeGateway` class implements the `GatewayInterface` and encapsulates behavior related to the Stripe payment gateway.

```php
class StripeGateway implements GatewayInterface {

    public function findCustomer() {
        // Implementation for finding a customer in Stripe
    }

    public function findSubscriptionByCustomer() {
        // Implementation for finding a subscription by customer in Stripe
    }
}
```

### BraintreeGateway Class

The `BraintreeGateway` class implements the `GatewayInterface` and encapsulates behavior related to the Braintree payment gateway.

```php
class BraintreeGateway implements GatewayInterface {

    public function findCustomer() {
        // Implementation for finding a customer in Braintree
    }

    public function findSubscriptionByCustomer() {
        // Implementation for finding a subscription by customer in Braintree
    }
}
```

## Usage

To use the `Subscription` class with different gateways, follow these steps:

1. Instantiate a gateway object: `StripeGateway` or `BraintreeGateway`.
2. Use the gateway object to create a `Subscription` object, passing the gateway instance to the `Subscription` constructor.
3. Perform subscription-related actions such as creation, cancellation, invoicing, or plan swapping using the appropriate methods of the `Subscription` object.

Example Usage with Stripe Gateway:

```php
<?php
// Include necessary files and functions
$basePath = "C:\\Users\\braz9\\Desktop\\projects\\laracasts\\object-oriented-principles-php\\07\\";
require_once $basePath . "functions.php";
require_once $basePath . "Subscription.php";
require_once $basePath . "StripeGateway.php";

// Instantiate StripeGateway
$stripeGateway = new StripeGateway();

// Instantiate Subscription with the StripeGateway instance
$subscription = new Subscription($stripeGateway);

// Cancel a subscription
$subscription->cancel();
?>
```

Example Usage with Braintree Gateway:

```php
<?php
// Include necessary files and functions
$basePath = "C:\\Users\\braz9\\Desktop\\projects\\laracasts\\object-oriented-principles-php\\07\\";
require_once $basePath . "functions.php";
require_once $basePath . "Subscription.php";
require_once $basePath . "BraintreeGateway.php";

// Instantiate BraintreeGateway
$braintreeGateway = new BraintreeGateway();

// Instantiate Subscription with the BraintreeGateway instance
$subscription = new Subscription($braintreeGateway);

// Cancel a subscription
$subscription->cancel();
?>
```

In this updated README, we've incorporated the recent changes in class and interface names and provided example usage for both `StripeGateway` and `BraintreeGateway`. The layout and structure have been maintained for clarity.
