<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @SyliusPayPalPlugin/pay_with_paypal.html.twig */
class __TwigTemplate_1de0fe3102fad87e9f1772c66fdf889d extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusPayPalPlugin/pay_with_paypal.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusPayPalPlugin/pay_with_paypal.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
    <head>
        <title>";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius_paypal.pay_with_paypal"), "html", null, true);
        yield "</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        ";
        // line 7
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("shop-entry", null, "shop");
        yield "
        ";
        // line 8
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 179
        yield "    </head>
    <body>
    <div id=\"paypal-payment-container\" class=\"ui segment loadable\">
        <div class=\"back-button-container\">
            <a href=\"";
        // line 183
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_order_show", ["tokenValue" => (isset($context["order_token"]) || array_key_exists("order_token", $context) ? $context["order_token"] : (function () { throw new RuntimeError('Variable "order_token" does not exist.', 183, $this->source); })())]), "html", null, true);
        yield "\" class=\"back-button\">
                ";
        // line 184
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius_paypal.back_to_store"), "html", null, true);
        yield "
            </a>
        </div>
        <div class=\"container\">
            ";
        // line 188
        yield from $this->load("@SyliusShop/shared/flashes.html.twig", 188)->unwrap()->yield($context);
        // line 189
        yield "            <div class=\"header padding\"><img draggable=\"false\" id=\"sylius-logo\" src=\"https://paypal.sylius.com/assets/img/logo.png\" alt=\"logo\"/></div>
            <div id=\"tabs\" class=\"ui top attached tabular menu\">
                <div class=\"active item\" data-tab=\"paypal\">PayPal</div>
                <div class=\"item\" data-tab=\"card\">";
        // line 192
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius_paypal.credit_card"), "html", null, true);
        yield "</div>
            </div>
            <div class=\"ui bottom attached active tab segment\" data-tab=\"paypal\">
                <div class=\"button-container padding\">
                    <div id=\"paypal-button-container\"></div>
                </div>
            </div>
            <div class=\"ui bottom attached tab segment\" data-tab=\"card\">
                <div class=\"button-container padding\">
                    <div id=\"advanced-cards-container\"></div>
                    <form id=\"advanced-cards-form\">
                        <label for=\"card-number\">";
        // line 203
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius_paypal.credit_card_number"), "html", null, true);
        yield "</label>
                        <div id=\"card-number\" class=\"input\"><div id=\"card-image\"></div></div>
                        <label for=\"expiration-date\">";
        // line 205
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius_paypal.expiration_date"), "html", null, true);
        yield "</label>
                        <div id=\"expiration-date\" class=\"input\"></div>
                        <label for=\"cvv\">";
        // line 207
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius_paypal.cvv"), "html", null, true);
        yield "</label>
                        <div id=\"cvv\" class=\"input\"></div>
                        <label for='card-holder-name'>";
        // line 209
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.form.credit_card.cardholder_name"), "html", null, true);
        yield "</label>
                        <br/><input type='text' id='card-holder-name' name='card-holder-name' autocomplete='off' placeholder='";
        // line 210
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.form.credit_card.cardholder_name"), "html", null, true);
        yield "' value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["billing_address"]) || array_key_exists("billing_address", $context) ? $context["billing_address"] : (function () { throw new RuntimeError('Variable "billing_address" does not exist.', 210, $this->source); })()), "fullName", [], "any", false, false, false, 210), "html", null, true);
        yield "\"/>
                        <div class=\"checkbox-grid\">
                            <input type=\"checkbox\" id=\"billing-info\" checked />
                            <label for=\"billing-info\">";
        // line 213
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius_paypal.billing_info"), "html", null, true);
        yield "</label>
                        </div>
                        <div id=\"billing-container\" class=\"hidden\">
                            <br/><label for='card-billing-address-street'>";
        // line 216
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.billing_address"), "html", null, true);
        yield "</label>
                            <br/><input type='text' id='card-billing-address-street' name='card-billing-address-street' autocomplete='off' placeholder='";
        // line 217
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.street"), "html", null, true);
        yield "' value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["billing_address"]) || array_key_exists("billing_address", $context) ? $context["billing_address"] : (function () { throw new RuntimeError('Variable "billing_address" does not exist.', 217, $this->source); })()), "street", [], "any", false, false, false, 217), "html", null, true);
        yield "\"/>
                            <input type='text' id='card-billing-address-city' name='card-billing-address-city' autocomplete='off' placeholder='";
        // line 218
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.city"), "html", null, true);
        yield "' value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["billing_address"]) || array_key_exists("billing_address", $context) ? $context["billing_address"] : (function () { throw new RuntimeError('Variable "billing_address" does not exist.', 218, $this->source); })()), "city", [], "any", false, false, false, 218), "html", null, true);
        yield "\"/>
                            <input type='text' id='card-billing-address-state' name='card-billing-address-state' autocomplete='off' placeholder='";
        // line 219
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.state"), "html", null, true);
        yield "' value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('sylius_province_name')->getCallable()((isset($context["billing_address"]) || array_key_exists("billing_address", $context) ? $context["billing_address"] : (function () { throw new RuntimeError('Variable "billing_address" does not exist.', 219, $this->source); })())), "html", null, true);
        yield "\"/>
                            <input type='text' id='card-billing-address-zip' name='card-billing-address-zip' autocomplete='off' placeholder='";
        // line 220
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.postcode"), "html", null, true);
        yield "' value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["billing_address"]) || array_key_exists("billing_address", $context) ? $context["billing_address"] : (function () { throw new RuntimeError('Variable "billing_address" does not exist.', 220, $this->source); })()), "postcode", [], "any", false, false, false, 220), "html", null, true);
        yield "\"/>
                            <input type='text' id='card-billing-address-country' name='card-billing-address-country' autocomplete='off' placeholder='";
        // line 221
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.country"), "html", null, true);
        yield "' value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["billing_address"]) || array_key_exists("billing_address", $context) ? $context["billing_address"] : (function () { throw new RuntimeError('Variable "billing_address" does not exist.', 221, $this->source); })()), "countryCode", [], "any", false, false, false, 221), "html", null, true);
        yield "\" />
                        </div>
                        <button value=\"submit\" id=\"submit\" class=\"ui button yellow fluid\">";
        // line 223
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius_paypal.pay_with_card"), "html", null, true);
        yield "</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </body>
    ";
        // line 230
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("shop-entry", null, "shop");
        yield "
    <script src=\"https://www.paypal.com/sdk/js?components=hosted-fields,buttons,funding-eligibility&locale=";
        // line 231
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 231, $this->source); })()), "html", null, true);
        yield "&currency=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currency"]) || array_key_exists("currency", $context) ? $context["currency"] : (function () { throw new RuntimeError('Variable "currency" does not exist.', 231, $this->source); })()), "html", null, true);
        yield "&vault=false&client-id=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["client_id"]) || array_key_exists("client_id", $context) ? $context["client_id"] : (function () { throw new RuntimeError('Variable "client_id" does not exist.', 231, $this->source); })()), "html", null, true);
        yield "&merchant-id=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["merchant_id"]) || array_key_exists("merchant_id", $context) ? $context["merchant_id"] : (function () { throw new RuntimeError('Variable "merchant_id" does not exist.', 231, $this->source); })()), "html", null, true);
        yield "&intent=capture\" data-partner-attribution-id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["partner_attribution_id"]) || array_key_exists("partner_attribution_id", $context) ? $context["partner_attribution_id"] : (function () { throw new RuntimeError('Variable "partner_attribution_id" does not exist.', 231, $this->source); })()), "html", null, true);
        yield "\" data-enable-3ds data-client-token=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["client_token"]) || array_key_exists("client_token", $context) ? $context["client_token"] : (function () { throw new RuntimeError('Variable "client_token" does not exist.', 231, $this->source); })()), "html", null, true);
        yield "\"></script>
    <script>
        let createPayPalOrderUrl = \"";
        // line 233
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_paypal_shop_create_paypal_order", ["token" => (isset($context["order_token"]) || array_key_exists("order_token", $context) ? $context["order_token"] : (function () { throw new RuntimeError('Variable "order_token" does not exist.', 233, $this->source); })())]), "html", null, true);
        yield "\";
        let completePayPalOrderUrl = \"";
        // line 234
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_paypal_shop_complete_paypal_order", ["token" => (isset($context["order_token"]) || array_key_exists("order_token", $context) ? $context["order_token"] : (function () { throw new RuntimeError('Variable "order_token" does not exist.', 234, $this->source); })())]), "html", null, true);
        yield "\"
        let errorPayPalPaymentUrl = \"";
        // line 235
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_paypal_shop_payment_error");
        yield "\";
        let availableCountries = ";
        // line 236
        yield json_encode((isset($context["available_countries"]) || array_key_exists("available_countries", $context) ? $context["available_countries"] : (function () { throw new RuntimeError('Variable "available_countries" does not exist.', 236, $this->source); })()));
        yield ";
        let cancelPayPalPaymentUrl = \"";
        // line 237
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_paypal_shop_cancel_checkout_payment");
        yield "\";
        let updatePayPalOrderUrl = \"";
        // line 238
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_paypal_shop_update_paypal_order");
        yield "\";
        let validForm = false;
        let invalidFormMessage = \"";
        // line 240
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius_paypal.invalid_form"), "html", null, true);
        yield "\";
        let cancelPreviousPaymentUrl = \"";
        // line 241
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_paypal_shop_cancel_last_payment", ["token" => (isset($context["order_token"]) || array_key_exists("order_token", $context) ? $context["order_token"] : (function () { throw new RuntimeError('Variable "order_token" does not exist.', 241, $this->source); })())]), "html", null, true);
        yield "\";

        window.addEventListener(\"beforeunload\", function(event) {
            fetch (cancelPreviousPaymentUrl, {
                method: 'get'
            })
        });

        paypal.Buttons({
            locale: '";
        // line 250
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 250, $this->source); })()), "html", null, true);
        yield "',
            style: { label: 'pay' },
            createOrder: function(data, actions) {
                return fetch(createPayPalOrderUrl, {
                    method: 'post'
                }).then(res => {
                    document.querySelector('#paypal-payment-container').classList.add('loading');
                    document.querySelector('#paypal-button-container').classList.add('low-opacity');
                    return res.json();
                }).then(data => data.orderID);
            },
            onApprove: function(data, actions) {
                return fetch(completePayPalOrderUrl, {
                    method: 'post'
                }).then(res => res.json()).then(details => window.location.href = details.return_url);
            },
            onError: function (error) {
                return fetch(errorPayPalPaymentUrl, {
                    method: 'post',
                    headers: {},
                    body: error
                }).then(window.location.reload());
            },
            onShippingChange: function(data, actions) {
                if (!availableCountries.filter(country => country === data.shipping_address.country_code).length) {
                    return actions.reject();
                }

                return fetch(updatePayPalOrderUrl, {
                    method: 'post',
                    headers: { 'content-type': 'application/json' },
                    body: JSON.stringify(data)
                }).then(res => {
                    if (!res || res.error) {
                        return actions.reject();
                    }

                    return actions.resolve();
                });
            },
            onCancel: function (data, actions) {
                return fetch(cancelPayPalPaymentUrl, {
                    method: 'post',
                    headers: { 'content-type': 'application/json' },
                    body: JSON.stringify({ payPalOrderId: data.orderID })
                }).then(window.location.reload());
            }
        }).render('#paypal-button-container');

        //once we add onshippingchange button doesnt render anymore
        paypal.getFundingSources().forEach(function(fundingSource) {
            var button = paypal.Buttons({
                fundingSource: fundingSource,
                createOrder: function(data, actions) {
                    return fetch(createPayPalOrderUrl, {
                        method: 'post'
                    }).then(res => {
                        document.querySelector('#paypal-payment-container').classList.add('loading');
                        document.querySelector('#paypal-button-container').classList.add('low-opacity');
                        return res.json();
                    }).then(data => data.orderID);
                },
                onApprove: function(data, actions) {
                    return fetch(completePayPalOrderUrl, {
                        method: 'post'
                    }).then(res => res.json()).then(details => window.location.href = details.return_url);
                },
                onError: function (err) {
                    return fetch(errorPayPalPaymentUrl, {
                        method: 'post',
                        headers: { 'content-type': 'application/json' },
                        body: JSON.stringify(err)
                    }).then(window.location.reload());
                },
                onCancel: function (data, actions) {
                    return fetch(cancelPayPalPaymentUrl, {
                        method: 'post',
                        headers: { 'content-type': 'application/json' },
                        body: JSON.stringify({ payPalOrderId: data.orderID })
                    }).then(window.location.reload());
                }
            });

            if (button.isEligible() && fundingSource != 'paypal' && fundingSource != 'card') {
                button.render('#paypal-button-container');
            }
        });

        if (paypal.HostedFields.isEligible() === true) {
            let processingOrderId;

            paypal.HostedFields.render({
                createOrder: function(data, actions) {
                    document.querySelector('#paypal-payment-container').classList.add('loading');
                    document.querySelector('#paypal-button-container').classList.add('low-opacity');

                    return fetch(createPayPalOrderUrl, {
                        method: 'POST'
                    }).then(function(res) {
                        return res.json();
                    }).then(function(data) {
                        processingOrderId = data.orderID;

                        return data.orderID;
                    });
                },
                styles: {
                    'input': {
                        'font-size': '14px',
                        'font-family': 'Product Sans',
                        'color': '#3a3a3a',
                    },
                    ':focus': {
                        'color': '#000'
                    }
                },
                fields: {
                    number: {
                        selector: '#card-number',
                        placeholder: '";
        // line 369
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius_paypal.credit_card_number"), "html", null, true);
        yield "',
                        required: 'required',
                    },
                    cvv: {
                        selector: '#cvv',
                        placeholder: '123',
                        required: 'required',
                    },
                    expirationDate: {
                        selector: '#expiration-date',
                        placeholder: 'MM/YYYY',
                        required: 'required',
                    }
                }
            }).then(hostedFields => {
                hostedFields.on('validityChange', function (event) {
                    let field = event.fields[event.emittedBy];

                    if (field.isValid) {
                        field.container.classList.remove('invalid-field');
                    } else if (field.isPotentiallyValid) {
                        field.container.classList.add('invalid-field');
                    } else {
                        field.container.classList.add('invalid-field');
                    }
                });

                hostedFields.on('cardTypeChange', function (event) {
                    if (event.cards.length === 1) {
                        document.querySelector('#advanced-cards-form').classList = [];
                        document.querySelector('#advanced-cards-form').classList.add(event.cards[0].type);
                        document.querySelector('#card-image').classList = [];
                        document.querySelector('#card-image').classList.add(event.cards[0].type);
                        // Change the CVV length for AmericanExpress cards
                        if (event.cards[0].code.size === 4) {
                            hostedFieldsInstance.setAttribute({
                                field: 'cvv',
                                attribute: 'placeholder',
                                value: '1234'
                            });
                        }
                    } else {
                        hostedFields.setAttribute({
                            field: 'cvv',
                            attribute: 'placeholder',
                            value: '123'
                        });
                        document.querySelector('#card-image').classList = [];
                        document.querySelector('#advanced-cards-form').classList = [];
                    }
                });

                document.querySelector('#advanced-cards-form').addEventListener('submit', event => {
                    event.preventDefault();

                    let state = hostedFields.getState();
                    let formValid = Object.keys(state.fields).every(function (key) {
                        if (!state.fields[key].isValid) state.fields[key].container.classList.add('invalid-field');
                        else state.fields[key].container.classList.remove('invalid-field')
                        return state.fields[key].isValid;
                    });

                    if (formValid) {
                        hostedFields.submit({
                            contingencies: ['SCA_ALWAYS'],
                            cardholderName: document.getElementById('card-holder-name').value,
                            billingAddress: {
                                streetAddress: document.getElementById('card-billing-address-street').value,
                                region: document.getElementById('card-billing-address-state').value,
                                locality: document.getElementById('card-billing-address-city').value,
                                postalCode: document.getElementById('card-billing-address-zip').value,
                                countryCodeAlpha2: document.getElementById('card-billing-address-country').value
                            }
                        }).then(payload => {
                            if (payload.authenticationReason == 'SUCCESSFUL' && payload.authenticationStatus == 'YES') {
                                return fetch(completePayPalOrderUrl, {
                                    method: 'post'
                                }).then(function(res) {
                                    return res.json();
                                }).then(function(data) {
                                    if (data.status == 'processing') {
                                        return fetch(cancelPayPalPaymentUrl, {
                                            method: 'post',
                                            headers: { 'content-type': 'application/json' },
                                            body: JSON.stringify({ payPalOrderId: data.orderID })
                                        }).then(window.location.reload());
                                    }

                                    window.location.href = data.return_url;
                                });
                            }


                            return fetch(errorPayPalPaymentUrl, {
                                method: 'post',
                                headers: { 'content-type': 'application/json' },
                                body: JSON.stringify('Invalid 3D Secure authentication.')
                            }).then(function(data) {
                                return fetch(cancelPayPalPaymentUrl, {
                                    method: 'post',
                                    headers: { 'content-type': 'application/json' },
                                    body: JSON.stringify({ payPalOrderId: processingOrderId })
                                }).then(window.location.reload());
                            });
                        });
                    } else {
                        alert(invalidFormMessage);
                    }
                });
            });
        }

        document.querySelector('#billing-info').addEventListener('change', e => {
            document.querySelector('#billing-container').classList.toggle('hidden');
        })

        \$(document).ready(function() {
            \$('#tabs').tab()
        });
    </script>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        yield "            <style>
                .container {
                    padding: 30px;
                    align-items: center;
                    display: grid;
                    justify-content: center;
                    grid-template-rows: 30vh auto;
                    width: 400px;
                    margin: auto;
                    font-family: 'Roboto', verdana, sans-serif;
                }

                #sylius-logo {
                    width: 100%;
                }

                .padding {
                    padding: 10px;
                }

                .back-button-container {
                    position: absolute;
                    padding: 20px;
                    top: 0;
                    left: 0;
                }

                .back-button {
                    cursor: pointer;
                    display: inline-block;
                    min-height: 1em;
                    outline: 0;
                    border: none;
                    vertical-align: baseline;
                    color: rgba(0,0,0,.6);
                    font-family: Lato,'Helvetica Neue',Arial,Helvetica,sans-serif;
                    padding: .78571429em 1.5em .78571429em;
                    text-transform: none;
                    text-shadow: none;
                    font-weight: 700;
                    line-height: 1em;
                    font-style: normal;
                    text-align: center;
                    text-decoration: none;
                    border-radius: .28571429rem;
                    background-color: #1abb9c;
                    color: #fff;
                    margin:auto;
                }

                #paypal-payment-container {
                    min-height: 100%;
                    height: auto;
                    width: 100%;
                }

                .input {
                    height: 30px;
                    padding: 5px;
                    margin-bottom: 10px;
                }

                .low-opacity {
                    opacity: 0.9;
                }

                .hidden {
                    display: none;
                }

                input, .input {
                    font-size: 14px;
                    font-family: 'Product Sans', sans-serif;
                    color: #3a3a3a;
                    cursor: auto;
                    width: 100%;
                    padding: 5px;
                    height: 30px;
                    margin-bottom: 5px;
                    margin-top: 2px;
                    border: 1px solid lightgray;
                    -webkit-transition: border-color 160ms;
                    transition: border-color 160ms;
                    border-radius: 5px;
                }

                input:focus, .input:focus {
                    outline: none;
                    border-color: #777;
                }

                .braintree-hosted-fields-focused {
                    border-color: #777;
                }

                .braintree-hosted-fields-invalid {
                    border-color: tomato;
                }

                .braintree-hosted-fields-valid {
                    border-color: limegreen;
                }

                .checkbox-grid {
                    display: grid;
                    grid-template-columns: 20px auto;
                    align-items: center;
                    grid-gap: 10px;
                    grid-template-rows: 30px;
                    margin-bottom: 5px;
                }

                #card-image {
                    position: absolute;
                    top: 3.1em;
                    right: 1.7em;
                    width: 44px;
                    height: 28px;
                    background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/346994/card_sprite.png);
                    background-size: 86px 458px;
                    border-radius: 1px;
                    background-position: -100px 0;
                    background-repeat: no-repeat;
                    margin-bottom: 1em;
                }

                #card-image.visa {
                     background-position: 0 -398px;
                }

                #card-image.master-card {
                     background-position: 0 -281px;
                }

                #card-image.american-express {
                     background-position: 0 -370px;
                }

                #card-image.discover {
                     background-position: 0 -163px;
                }

                #card-image.maestro {
                     background-position: 0 -251px;
                }

                #card-image.jcb {
                     background-position: 0 -221px;
                }

                #card-image.diners-club {
                     background-position: 0 -133px;
                }

                #billing-info {
                    height: 20px;
                    margin: 0;
                }

                label {
                    padding: 2px;
                    margin-bottom: 2px;
                }

                #paypal-button-container {
                    display: grid;
                    grid-gap: 10px;
                }
            </style>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@SyliusPayPalPlugin/pay_with_paypal.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  510 => 9,  497 => 8,  364 => 369,  242 => 250,  230 => 241,  226 => 240,  221 => 238,  217 => 237,  213 => 236,  209 => 235,  205 => 234,  201 => 233,  186 => 231,  182 => 230,  172 => 223,  165 => 221,  159 => 220,  153 => 219,  147 => 218,  141 => 217,  137 => 216,  131 => 213,  123 => 210,  119 => 209,  114 => 207,  109 => 205,  104 => 203,  90 => 192,  85 => 189,  83 => 188,  76 => 184,  72 => 183,  66 => 179,  64 => 8,  60 => 7,  54 => 4,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <title>{{ 'sylius_paypal.pay_with_paypal'|trans }}</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        {{ encore_entry_link_tags('shop-entry', null, 'shop') }}
        {% block stylesheets %}
            <style>
                .container {
                    padding: 30px;
                    align-items: center;
                    display: grid;
                    justify-content: center;
                    grid-template-rows: 30vh auto;
                    width: 400px;
                    margin: auto;
                    font-family: 'Roboto', verdana, sans-serif;
                }

                #sylius-logo {
                    width: 100%;
                }

                .padding {
                    padding: 10px;
                }

                .back-button-container {
                    position: absolute;
                    padding: 20px;
                    top: 0;
                    left: 0;
                }

                .back-button {
                    cursor: pointer;
                    display: inline-block;
                    min-height: 1em;
                    outline: 0;
                    border: none;
                    vertical-align: baseline;
                    color: rgba(0,0,0,.6);
                    font-family: Lato,'Helvetica Neue',Arial,Helvetica,sans-serif;
                    padding: .78571429em 1.5em .78571429em;
                    text-transform: none;
                    text-shadow: none;
                    font-weight: 700;
                    line-height: 1em;
                    font-style: normal;
                    text-align: center;
                    text-decoration: none;
                    border-radius: .28571429rem;
                    background-color: #1abb9c;
                    color: #fff;
                    margin:auto;
                }

                #paypal-payment-container {
                    min-height: 100%;
                    height: auto;
                    width: 100%;
                }

                .input {
                    height: 30px;
                    padding: 5px;
                    margin-bottom: 10px;
                }

                .low-opacity {
                    opacity: 0.9;
                }

                .hidden {
                    display: none;
                }

                input, .input {
                    font-size: 14px;
                    font-family: 'Product Sans', sans-serif;
                    color: #3a3a3a;
                    cursor: auto;
                    width: 100%;
                    padding: 5px;
                    height: 30px;
                    margin-bottom: 5px;
                    margin-top: 2px;
                    border: 1px solid lightgray;
                    -webkit-transition: border-color 160ms;
                    transition: border-color 160ms;
                    border-radius: 5px;
                }

                input:focus, .input:focus {
                    outline: none;
                    border-color: #777;
                }

                .braintree-hosted-fields-focused {
                    border-color: #777;
                }

                .braintree-hosted-fields-invalid {
                    border-color: tomato;
                }

                .braintree-hosted-fields-valid {
                    border-color: limegreen;
                }

                .checkbox-grid {
                    display: grid;
                    grid-template-columns: 20px auto;
                    align-items: center;
                    grid-gap: 10px;
                    grid-template-rows: 30px;
                    margin-bottom: 5px;
                }

                #card-image {
                    position: absolute;
                    top: 3.1em;
                    right: 1.7em;
                    width: 44px;
                    height: 28px;
                    background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/346994/card_sprite.png);
                    background-size: 86px 458px;
                    border-radius: 1px;
                    background-position: -100px 0;
                    background-repeat: no-repeat;
                    margin-bottom: 1em;
                }

                #card-image.visa {
                     background-position: 0 -398px;
                }

                #card-image.master-card {
                     background-position: 0 -281px;
                }

                #card-image.american-express {
                     background-position: 0 -370px;
                }

                #card-image.discover {
                     background-position: 0 -163px;
                }

                #card-image.maestro {
                     background-position: 0 -251px;
                }

                #card-image.jcb {
                     background-position: 0 -221px;
                }

                #card-image.diners-club {
                     background-position: 0 -133px;
                }

                #billing-info {
                    height: 20px;
                    margin: 0;
                }

                label {
                    padding: 2px;
                    margin-bottom: 2px;
                }

                #paypal-button-container {
                    display: grid;
                    grid-gap: 10px;
                }
            </style>
        {% endblock %}
    </head>
    <body>
    <div id=\"paypal-payment-container\" class=\"ui segment loadable\">
        <div class=\"back-button-container\">
            <a href=\"{{ path('sylius_shop_order_show', {'tokenValue': order_token}) }}\" class=\"back-button\">
                {{ 'sylius_paypal.back_to_store'|trans }}
            </a>
        </div>
        <div class=\"container\">
            {% include '@SyliusShop/shared/flashes.html.twig' %}
            <div class=\"header padding\"><img draggable=\"false\" id=\"sylius-logo\" src=\"https://paypal.sylius.com/assets/img/logo.png\" alt=\"logo\"/></div>
            <div id=\"tabs\" class=\"ui top attached tabular menu\">
                <div class=\"active item\" data-tab=\"paypal\">PayPal</div>
                <div class=\"item\" data-tab=\"card\">{{ 'sylius_paypal.credit_card'|trans }}</div>
            </div>
            <div class=\"ui bottom attached active tab segment\" data-tab=\"paypal\">
                <div class=\"button-container padding\">
                    <div id=\"paypal-button-container\"></div>
                </div>
            </div>
            <div class=\"ui bottom attached tab segment\" data-tab=\"card\">
                <div class=\"button-container padding\">
                    <div id=\"advanced-cards-container\"></div>
                    <form id=\"advanced-cards-form\">
                        <label for=\"card-number\">{{ 'sylius_paypal.credit_card_number'|trans }}</label>
                        <div id=\"card-number\" class=\"input\"><div id=\"card-image\"></div></div>
                        <label for=\"expiration-date\">{{ 'sylius_paypal.expiration_date'|trans }}</label>
                        <div id=\"expiration-date\" class=\"input\"></div>
                        <label for=\"cvv\">{{ 'sylius_paypal.cvv'|trans }}</label>
                        <div id=\"cvv\" class=\"input\"></div>
                        <label for='card-holder-name'>{{ 'sylius.form.credit_card.cardholder_name'|trans }}</label>
                        <br/><input type='text' id='card-holder-name' name='card-holder-name' autocomplete='off' placeholder='{{ 'sylius.form.credit_card.cardholder_name'|trans }}' value=\"{{ billing_address.fullName }}\"/>
                        <div class=\"checkbox-grid\">
                            <input type=\"checkbox\" id=\"billing-info\" checked />
                            <label for=\"billing-info\">{{ 'sylius_paypal.billing_info'|trans }}</label>
                        </div>
                        <div id=\"billing-container\" class=\"hidden\">
                            <br/><label for='card-billing-address-street'>{{ 'sylius.ui.billing_address'|trans }}</label>
                            <br/><input type='text' id='card-billing-address-street' name='card-billing-address-street' autocomplete='off' placeholder='{{ 'sylius.ui.street'|trans }}' value=\"{{ billing_address.street }}\"/>
                            <input type='text' id='card-billing-address-city' name='card-billing-address-city' autocomplete='off' placeholder='{{ 'sylius.ui.city'|trans }}' value=\"{{ billing_address.city }}\"/>
                            <input type='text' id='card-billing-address-state' name='card-billing-address-state' autocomplete='off' placeholder='{{ 'sylius.ui.state'|trans }}' value=\"{{ billing_address|sylius_province_name }}\"/>
                            <input type='text' id='card-billing-address-zip' name='card-billing-address-zip' autocomplete='off' placeholder='{{ 'sylius.ui.postcode'|trans }}' value=\"{{ billing_address.postcode }}\"/>
                            <input type='text' id='card-billing-address-country' name='card-billing-address-country' autocomplete='off' placeholder='{{ 'sylius.ui.country'|trans }}' value=\"{{ billing_address.countryCode }}\" />
                        </div>
                        <button value=\"submit\" id=\"submit\" class=\"ui button yellow fluid\">{{ 'sylius_paypal.pay_with_card'|trans }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </body>
    {{ encore_entry_script_tags('shop-entry', null, 'shop') }}
    <script src=\"https://www.paypal.com/sdk/js?components=hosted-fields,buttons,funding-eligibility&locale={{ locale }}&currency={{ currency }}&vault=false&client-id={{ client_id }}&merchant-id={{ merchant_id }}&intent=capture\" data-partner-attribution-id=\"{{ partner_attribution_id }}\" data-enable-3ds data-client-token=\"{{ client_token }}\"></script>
    <script>
        let createPayPalOrderUrl = \"{{ path('sylius_paypal_shop_create_paypal_order', {'token': order_token}) }}\";
        let completePayPalOrderUrl = \"{{ path('sylius_paypal_shop_complete_paypal_order', {'token': order_token }) }}\"
        let errorPayPalPaymentUrl = \"{{ path('sylius_paypal_shop_payment_error') }}\";
        let availableCountries = {{ available_countries|json_encode|raw }};
        let cancelPayPalPaymentUrl = \"{{ path('sylius_paypal_shop_cancel_checkout_payment') }}\";
        let updatePayPalOrderUrl = \"{{ path('sylius_paypal_shop_update_paypal_order') }}\";
        let validForm = false;
        let invalidFormMessage = \"{{ 'sylius_paypal.invalid_form'|trans }}\";
        let cancelPreviousPaymentUrl = \"{{ path('sylius_paypal_shop_cancel_last_payment', {'token': order_token}) }}\";

        window.addEventListener(\"beforeunload\", function(event) {
            fetch (cancelPreviousPaymentUrl, {
                method: 'get'
            })
        });

        paypal.Buttons({
            locale: '{{ locale }}',
            style: { label: 'pay' },
            createOrder: function(data, actions) {
                return fetch(createPayPalOrderUrl, {
                    method: 'post'
                }).then(res => {
                    document.querySelector('#paypal-payment-container').classList.add('loading');
                    document.querySelector('#paypal-button-container').classList.add('low-opacity');
                    return res.json();
                }).then(data => data.orderID);
            },
            onApprove: function(data, actions) {
                return fetch(completePayPalOrderUrl, {
                    method: 'post'
                }).then(res => res.json()).then(details => window.location.href = details.return_url);
            },
            onError: function (error) {
                return fetch(errorPayPalPaymentUrl, {
                    method: 'post',
                    headers: {},
                    body: error
                }).then(window.location.reload());
            },
            onShippingChange: function(data, actions) {
                if (!availableCountries.filter(country => country === data.shipping_address.country_code).length) {
                    return actions.reject();
                }

                return fetch(updatePayPalOrderUrl, {
                    method: 'post',
                    headers: { 'content-type': 'application/json' },
                    body: JSON.stringify(data)
                }).then(res => {
                    if (!res || res.error) {
                        return actions.reject();
                    }

                    return actions.resolve();
                });
            },
            onCancel: function (data, actions) {
                return fetch(cancelPayPalPaymentUrl, {
                    method: 'post',
                    headers: { 'content-type': 'application/json' },
                    body: JSON.stringify({ payPalOrderId: data.orderID })
                }).then(window.location.reload());
            }
        }).render('#paypal-button-container');

        //once we add onshippingchange button doesnt render anymore
        paypal.getFundingSources().forEach(function(fundingSource) {
            var button = paypal.Buttons({
                fundingSource: fundingSource,
                createOrder: function(data, actions) {
                    return fetch(createPayPalOrderUrl, {
                        method: 'post'
                    }).then(res => {
                        document.querySelector('#paypal-payment-container').classList.add('loading');
                        document.querySelector('#paypal-button-container').classList.add('low-opacity');
                        return res.json();
                    }).then(data => data.orderID);
                },
                onApprove: function(data, actions) {
                    return fetch(completePayPalOrderUrl, {
                        method: 'post'
                    }).then(res => res.json()).then(details => window.location.href = details.return_url);
                },
                onError: function (err) {
                    return fetch(errorPayPalPaymentUrl, {
                        method: 'post',
                        headers: { 'content-type': 'application/json' },
                        body: JSON.stringify(err)
                    }).then(window.location.reload());
                },
                onCancel: function (data, actions) {
                    return fetch(cancelPayPalPaymentUrl, {
                        method: 'post',
                        headers: { 'content-type': 'application/json' },
                        body: JSON.stringify({ payPalOrderId: data.orderID })
                    }).then(window.location.reload());
                }
            });

            if (button.isEligible() && fundingSource != 'paypal' && fundingSource != 'card') {
                button.render('#paypal-button-container');
            }
        });

        if (paypal.HostedFields.isEligible() === true) {
            let processingOrderId;

            paypal.HostedFields.render({
                createOrder: function(data, actions) {
                    document.querySelector('#paypal-payment-container').classList.add('loading');
                    document.querySelector('#paypal-button-container').classList.add('low-opacity');

                    return fetch(createPayPalOrderUrl, {
                        method: 'POST'
                    }).then(function(res) {
                        return res.json();
                    }).then(function(data) {
                        processingOrderId = data.orderID;

                        return data.orderID;
                    });
                },
                styles: {
                    'input': {
                        'font-size': '14px',
                        'font-family': 'Product Sans',
                        'color': '#3a3a3a',
                    },
                    ':focus': {
                        'color': '#000'
                    }
                },
                fields: {
                    number: {
                        selector: '#card-number',
                        placeholder: '{{ 'sylius_paypal.credit_card_number'|trans }}',
                        required: 'required',
                    },
                    cvv: {
                        selector: '#cvv',
                        placeholder: '123',
                        required: 'required',
                    },
                    expirationDate: {
                        selector: '#expiration-date',
                        placeholder: 'MM/YYYY',
                        required: 'required',
                    }
                }
            }).then(hostedFields => {
                hostedFields.on('validityChange', function (event) {
                    let field = event.fields[event.emittedBy];

                    if (field.isValid) {
                        field.container.classList.remove('invalid-field');
                    } else if (field.isPotentiallyValid) {
                        field.container.classList.add('invalid-field');
                    } else {
                        field.container.classList.add('invalid-field');
                    }
                });

                hostedFields.on('cardTypeChange', function (event) {
                    if (event.cards.length === 1) {
                        document.querySelector('#advanced-cards-form').classList = [];
                        document.querySelector('#advanced-cards-form').classList.add(event.cards[0].type);
                        document.querySelector('#card-image').classList = [];
                        document.querySelector('#card-image').classList.add(event.cards[0].type);
                        // Change the CVV length for AmericanExpress cards
                        if (event.cards[0].code.size === 4) {
                            hostedFieldsInstance.setAttribute({
                                field: 'cvv',
                                attribute: 'placeholder',
                                value: '1234'
                            });
                        }
                    } else {
                        hostedFields.setAttribute({
                            field: 'cvv',
                            attribute: 'placeholder',
                            value: '123'
                        });
                        document.querySelector('#card-image').classList = [];
                        document.querySelector('#advanced-cards-form').classList = [];
                    }
                });

                document.querySelector('#advanced-cards-form').addEventListener('submit', event => {
                    event.preventDefault();

                    let state = hostedFields.getState();
                    let formValid = Object.keys(state.fields).every(function (key) {
                        if (!state.fields[key].isValid) state.fields[key].container.classList.add('invalid-field');
                        else state.fields[key].container.classList.remove('invalid-field')
                        return state.fields[key].isValid;
                    });

                    if (formValid) {
                        hostedFields.submit({
                            contingencies: ['SCA_ALWAYS'],
                            cardholderName: document.getElementById('card-holder-name').value,
                            billingAddress: {
                                streetAddress: document.getElementById('card-billing-address-street').value,
                                region: document.getElementById('card-billing-address-state').value,
                                locality: document.getElementById('card-billing-address-city').value,
                                postalCode: document.getElementById('card-billing-address-zip').value,
                                countryCodeAlpha2: document.getElementById('card-billing-address-country').value
                            }
                        }).then(payload => {
                            if (payload.authenticationReason == 'SUCCESSFUL' && payload.authenticationStatus == 'YES') {
                                return fetch(completePayPalOrderUrl, {
                                    method: 'post'
                                }).then(function(res) {
                                    return res.json();
                                }).then(function(data) {
                                    if (data.status == 'processing') {
                                        return fetch(cancelPayPalPaymentUrl, {
                                            method: 'post',
                                            headers: { 'content-type': 'application/json' },
                                            body: JSON.stringify({ payPalOrderId: data.orderID })
                                        }).then(window.location.reload());
                                    }

                                    window.location.href = data.return_url;
                                });
                            }


                            return fetch(errorPayPalPaymentUrl, {
                                method: 'post',
                                headers: { 'content-type': 'application/json' },
                                body: JSON.stringify('Invalid 3D Secure authentication.')
                            }).then(function(data) {
                                return fetch(cancelPayPalPaymentUrl, {
                                    method: 'post',
                                    headers: { 'content-type': 'application/json' },
                                    body: JSON.stringify({ payPalOrderId: processingOrderId })
                                }).then(window.location.reload());
                            });
                        });
                    } else {
                        alert(invalidFormMessage);
                    }
                });
            });
        }

        document.querySelector('#billing-info').addEventListener('change', e => {
            document.querySelector('#billing-container').classList.toggle('hidden');
        })

        \$(document).ready(function() {
            \$('#tabs').tab()
        });
    </script>
</html>
", "@SyliusPayPalPlugin/pay_with_paypal.html.twig", "/Users/abdourahamanegayakoyeibrahim/Desktop/KaftanPlug/vendor/sylius/paypal-plugin/templates/pay_with_paypal.html.twig");
    }
}
