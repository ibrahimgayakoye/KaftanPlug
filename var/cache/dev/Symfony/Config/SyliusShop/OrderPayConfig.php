<?php

namespace Symfony\Config\SyliusShop;

require_once __DIR__.\DIRECTORY_SEPARATOR.'OrderPay'.\DIRECTORY_SEPARATOR.'PaymentRequestPayRouteParametersConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'OrderPay'.\DIRECTORY_SEPARATOR.'AfterPayRouteParametersConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'OrderPay'.\DIRECTORY_SEPARATOR.'FinalRouteParametersConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'OrderPay'.\DIRECTORY_SEPARATOR.'RetryRouteParametersConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class OrderPayConfig 
{
    private $paymentRequestPayRoute;
    private $paymentRequestPayRouteParameters;
    private $afterPayRoute;
    private $afterPayRouteParameters;
    private $finalRoute;
    private $finalRouteParameters;
    private $retryRoute;
    private $retryRouteParameters;
    private $_usedProperties = [];

    /**
     * @default 'sylius_shop_payment_request_pay'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function paymentRequestPayRoute($value): static
    {
        $this->_usedProperties['paymentRequestPayRoute'] = true;
        $this->paymentRequestPayRoute = $value;

        return $this;
    }

    /**
     * @default {"hash":"paymentRequest.getHash()"}
    */
    public function paymentRequestPayRouteParameters(array $value = []): \Symfony\Config\SyliusShop\OrderPay\PaymentRequestPayRouteParametersConfig
    {
        if (null === $this->paymentRequestPayRouteParameters) {
            $this->_usedProperties['paymentRequestPayRouteParameters'] = true;
            $this->paymentRequestPayRouteParameters = new \Symfony\Config\SyliusShop\OrderPay\PaymentRequestPayRouteParametersConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "paymentRequestPayRouteParameters()" has already been initialized. You cannot pass values the second time you call paymentRequestPayRouteParameters().');
        }

        return $this->paymentRequestPayRouteParameters;
    }

    /**
     * @default 'sylius_shop_order_after_pay'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function afterPayRoute($value): static
    {
        $this->_usedProperties['afterPayRoute'] = true;
        $this->afterPayRoute = $value;

        return $this;
    }

    /**
     * @default {"hash":"paymentRequest.getHash()"}
    */
    public function afterPayRouteParameters(array $value = []): \Symfony\Config\SyliusShop\OrderPay\AfterPayRouteParametersConfig
    {
        if (null === $this->afterPayRouteParameters) {
            $this->_usedProperties['afterPayRouteParameters'] = true;
            $this->afterPayRouteParameters = new \Symfony\Config\SyliusShop\OrderPay\AfterPayRouteParametersConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "afterPayRouteParameters()" has already been initialized. You cannot pass values the second time you call afterPayRouteParameters().');
        }

        return $this->afterPayRouteParameters;
    }

    /**
     * @default 'sylius_shop_order_thank_you'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function finalRoute($value): static
    {
        $this->_usedProperties['finalRoute'] = true;
        $this->finalRoute = $value;

        return $this;
    }

    public function finalRouteParameters(array $value = []): \Symfony\Config\SyliusShop\OrderPay\FinalRouteParametersConfig
    {
        if (null === $this->finalRouteParameters) {
            $this->_usedProperties['finalRouteParameters'] = true;
            $this->finalRouteParameters = new \Symfony\Config\SyliusShop\OrderPay\FinalRouteParametersConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "finalRouteParameters()" has already been initialized. You cannot pass values the second time you call finalRouteParameters().');
        }

        return $this->finalRouteParameters;
    }

    /**
     * @default 'sylius_shop_order_show'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function retryRoute($value): static
    {
        $this->_usedProperties['retryRoute'] = true;
        $this->retryRoute = $value;

        return $this;
    }

    /**
     * @default {"tokenValue":"order.getTokenValue()"}
    */
    public function retryRouteParameters(array $value = []): \Symfony\Config\SyliusShop\OrderPay\RetryRouteParametersConfig
    {
        if (null === $this->retryRouteParameters) {
            $this->_usedProperties['retryRouteParameters'] = true;
            $this->retryRouteParameters = new \Symfony\Config\SyliusShop\OrderPay\RetryRouteParametersConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "retryRouteParameters()" has already been initialized. You cannot pass values the second time you call retryRouteParameters().');
        }

        return $this->retryRouteParameters;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('payment_request_pay_route', $value)) {
            $this->_usedProperties['paymentRequestPayRoute'] = true;
            $this->paymentRequestPayRoute = $value['payment_request_pay_route'];
            unset($value['payment_request_pay_route']);
        }

        if (array_key_exists('payment_request_pay_route_parameters', $value)) {
            $this->_usedProperties['paymentRequestPayRouteParameters'] = true;
            $this->paymentRequestPayRouteParameters = new \Symfony\Config\SyliusShop\OrderPay\PaymentRequestPayRouteParametersConfig($value['payment_request_pay_route_parameters']);
            unset($value['payment_request_pay_route_parameters']);
        }

        if (array_key_exists('after_pay_route', $value)) {
            $this->_usedProperties['afterPayRoute'] = true;
            $this->afterPayRoute = $value['after_pay_route'];
            unset($value['after_pay_route']);
        }

        if (array_key_exists('after_pay_route_parameters', $value)) {
            $this->_usedProperties['afterPayRouteParameters'] = true;
            $this->afterPayRouteParameters = new \Symfony\Config\SyliusShop\OrderPay\AfterPayRouteParametersConfig($value['after_pay_route_parameters']);
            unset($value['after_pay_route_parameters']);
        }

        if (array_key_exists('final_route', $value)) {
            $this->_usedProperties['finalRoute'] = true;
            $this->finalRoute = $value['final_route'];
            unset($value['final_route']);
        }

        if (array_key_exists('final_route_parameters', $value)) {
            $this->_usedProperties['finalRouteParameters'] = true;
            $this->finalRouteParameters = new \Symfony\Config\SyliusShop\OrderPay\FinalRouteParametersConfig($value['final_route_parameters']);
            unset($value['final_route_parameters']);
        }

        if (array_key_exists('retry_route', $value)) {
            $this->_usedProperties['retryRoute'] = true;
            $this->retryRoute = $value['retry_route'];
            unset($value['retry_route']);
        }

        if (array_key_exists('retry_route_parameters', $value)) {
            $this->_usedProperties['retryRouteParameters'] = true;
            $this->retryRouteParameters = new \Symfony\Config\SyliusShop\OrderPay\RetryRouteParametersConfig($value['retry_route_parameters']);
            unset($value['retry_route_parameters']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['paymentRequestPayRoute'])) {
            $output['payment_request_pay_route'] = $this->paymentRequestPayRoute;
        }
        if (isset($this->_usedProperties['paymentRequestPayRouteParameters'])) {
            $output['payment_request_pay_route_parameters'] = $this->paymentRequestPayRouteParameters->toArray();
        }
        if (isset($this->_usedProperties['afterPayRoute'])) {
            $output['after_pay_route'] = $this->afterPayRoute;
        }
        if (isset($this->_usedProperties['afterPayRouteParameters'])) {
            $output['after_pay_route_parameters'] = $this->afterPayRouteParameters->toArray();
        }
        if (isset($this->_usedProperties['finalRoute'])) {
            $output['final_route'] = $this->finalRoute;
        }
        if (isset($this->_usedProperties['finalRouteParameters'])) {
            $output['final_route_parameters'] = $this->finalRouteParameters->toArray();
        }
        if (isset($this->_usedProperties['retryRoute'])) {
            $output['retry_route'] = $this->retryRoute;
        }
        if (isset($this->_usedProperties['retryRouteParameters'])) {
            $output['retry_route_parameters'] = $this->retryRouteParameters->toArray();
        }

        return $output;
    }

}
