<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin/ajax/product-taxons/update' => [[['_route' => 'sylius_admin_ajax_product_taxons_update_position', '_controller' => 'sylius.controller.product_taxon::updateProductTaxonsPositionsAction', '_format' => 'json', '_sylius' => ['permission' => true]], null, ['PUT' => 0], null, false, false, null]],
        '/admin/ajax/product-variants/update' => [[['_route' => 'sylius_admin_ajax_product_variants_update_position', '_controller' => 'sylius.controller.product_variant::updatePositionsAction', '_format' => 'json', '_sylius' => ['permission' => true]], null, ['PUT' => 0], null, false, false, null]],
        '/admin' => [[['_route' => 'sylius_admin_dashboard', '_controller' => 'sylius_admin.controller.dashboard'], null, null, null, true, false, null]],
        '/admin/users' => [[['_route' => 'sylius_admin_admin_user_index', '_controller' => 'sylius.controller.admin_user::indexAction', '_sylius' => ['grid' => 'sylius_admin_admin_user', 'section' => 'admin', 'template' => '@SyliusAdmin\\shared\\crud/index.html.twig', 'permission' => true]], null, ['GET' => 0], null, true, false, null]],
        '/admin/users/new' => [[['_route' => 'sylius_admin_admin_user_create', '_controller' => 'sylius.controller.admin_user::createAction', '_sylius' => ['form' => ['type' => 'Sylius\\Bundle\\AdminBundle\\Form\\Type\\AdminUserType'], 'section' => 'admin', 'template' => '@SyliusAdmin\\shared\\crud/create.html.twig', 'redirect' => 'sylius_admin_admin_user_index', 'permission' => true]], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/users/bulk-delete' => [[['_route' => 'sylius_admin_admin_user_bulk_delete', '_controller' => 'sylius.controller.admin_user::bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
        '/admin/catalog-promotions' => [[['_route' => 'sylius_admin_catalog_promotion_index', '_controller' => 'sylius.controller.catalog_promotion::indexAction', '_sylius' => ['grid' => 'sylius_admin_catalog_promotion', 'section' => 'admin', 'template' => '@SyliusAdmin\\shared\\crud/index.html.twig', 'permission' => true]], null, ['GET' => 0], null, true, false, null]],
        '/admin/catalog-promotions/new' => [[['_route' => 'sylius_admin_catalog_promotion_create', '_controller' => 'sylius.controller.catalog_promotion::createAction', '_sylius' => ['form' => ['type' => 'Sylius\\Bundle\\AdminBundle\\Form\\Type\\CatalogPromotionType'], 'section' => 'admin', 'template' => '@SyliusAdmin\\shared\\crud/create.html.twig', 'redirect' => 'sylius_admin_catalog_promotion_update', 'permission' => true]], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/channels' => [[['_route' => 'sylius_admin_channel_index', '_controller' => 'sylius.controller.channel::indexAction', '_sylius' => ['grid' => 'sylius_admin_channel', 'section' => 'admin', 'template' => '@SyliusAdmin\\shared\\crud/index.html.twig', 'permission' => true]], null, ['GET' => 0], null, true, false, null]],
        '/admin/channels/new' => [[['_route' => 'sylius_admin_channel_create', '_controller' => 'sylius.controller.channel::createAction', '_sylius' => ['form' => ['type' => 'Sylius\\Bundle\\AdminBundle\\Form\\Type\\ChannelType'], 'section' => 'admin', 'template' => '@SyliusAdmin\\shared\\crud/create.html.twig', 'redirect' => 'sylius_admin_channel_update', 'permission' => true]], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/channels/bulk-delete' => [[['_route' => 'sylius_admin_channel_bulk_delete', '_controller' => 'sylius.controller.channel::bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
        '/admin/countries' => [[['_route' => 'sylius_admin_country_index', '_controller' => 'sylius.controller.country::indexAction', '_sylius' => ['grid' => 'sylius_admin_country', 'section' => 'admin', 'template' => '@SyliusAdmin\\shared\\crud/index.html.twig', 'permission' => true]], null, ['GET' => 0], null, true, false, null]],
        '/admin/countries/new' => [[['_route' => 'sylius_admin_country_create', '_controller' => 'sylius.controller.country::createAction', '_sylius' => ['form' => ['type' => 'Sylius\\Bundle\\AdminBundle\\Form\\Type\\CountryType'], 'section' => 'admin', 'template' => '@SyliusAdmin\\shared\\crud/create.html.twig', 'redirect' => 'sylius_admin_country_update', 'permission' => true]], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/countries/bulk-delete' => [[['_route' => 'sylius_admin_country_bulk_delete', '_controller' => 'sylius.controller.country::bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
        '/admin/currencies' => [[['_route' => 'sylius_admin_currency_index', '_controller' => 'sylius.controller.currency::indexAction', '_sylius' => ['grid' => 'sylius_admin_currency', 'section' => 'admin', 'template' => '@SyliusAdmin\\shared\\crud/index.html.twig', 'permission' => true]], null, ['GET' => 0], null, true, false, null]],
        '/admin/currencies/new' => [[['_route' => 'sylius_admin_currency_create', '_controller' => 'sylius.controller.currency::createAction', '_sylius' => ['form' => ['type' => 'Sylius\\Bundle\\AdminBundle\\Form\\Type\\CurrencyType'], 'section' => 'admin', 'template' => '@SyliusAdmin\\shared\\crud/create.html.twig', 'redirect' => 'sylius_admin_currency_index', 'permission' => true]], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/customers' => [[['_route' => 'sylius_admin_customer_index', '_controller' => 'sylius.controller.customer::indexAction', '_sylius' => ['grid' => 'sylius_admin_customer', 'section' => 'admin', 'template' => '@SyliusAdmin\\shared\\crud/index.html.twig', 'permission' => true]], null, ['GET' => 0], null, true, false, null]],
        '/admin/customers/new' => [[['_route' => 'sylius_admin_customer_create', '_controller' => 'sylius.controller.customer::createAction', '_sylius' => ['form' => ['type' => 'Sylius\\Bundle\\AdminBundle\\Form\\Type\\CustomerType'], 'section' => 'admin', 'template' => '@SyliusAdmin\\shared\\crud/create.html.twig', 'redirect' => 'sylius_admin_customer_update', 'permission' => true]], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/orders-statistics' => [[['_route' => 'sylius_admin_customer_orders_statistics', '_controller' => 'sylius_admin.controller.customer_statistics::renderAction', '_sylius' => ['section' => 'admin', 'permission' => true]], null, ['GET' => 0], null, false, false, null]],
        '/admin/customer-groups' => [[['_route' => 'sylius_admin_customer_group_index', '_controller' => 'sylius.controller.customer_group::indexAction', '_sylius' => ['grid' => 'sylius_admin_customer_group', 'section' => 'admin', 'template' => '@SyliusAdmin\\shared\\crud/index.html.twig', 'permission' => true]], null, ['GET' => 0], null, true, false, null]],
        '/admin/customer-groups/new' => [[['_route' => 'sylius_admin_customer_group_create', '_controller' => 'sylius.controller.customer_group::createAction', '_sylius' => ['form' => ['type' => 'Sylius\\Bundle\\AdminBundle\\Form\\Type\\CustomerGroupType'], 'section' => 'admin', 'template' => '@SyliusAdmin\\shared\\crud/create.html.twig', 'redirect' => 'sylius_admin_customer_group_update', 'permission' => true]], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/customer-groups/bulk-delete' => [[['_route' => 'sylius_admin_customer_group_bulk_delete', '_controller' => 'sylius.controller.customer_group::bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
        '/admin/exchange-rates' => [[['_route' => 'sylius_admin_exchange_rate_index', '_controller' => 'sylius.controller.exchange_rate::indexAction', '_sylius' => ['grid' => 'sylius_admin_exchange_rate', 'section' => 'admin', 'template' => '@SyliusAdmin\\shared\\crud/index.html.twig', 'permission' => true]], null, ['GET' => 0], null, true, false, null]],
        '/admin/exchange-rates/new' => [[['_route' => 'sylius_admin_exchange_rate_create', '_controller' => 'sylius.controller.exchange_rate::createAction', '_sylius' => ['form' => ['type' => 'Sylius\\Bundle\\AdminBundle\\Form\\Type\\ExchangeRateType'], 'section' => 'admin', 'template' => '@SyliusAdmin\\shared\\crud/create.html.twig', 'redirect' => 'sylius_admin_exchange_rate_update', 'permission' => true]], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/exchange-rates/bulk-delete' => [[['_route' => 'sylius_admin_exchange_rate_bulk_delete', '_controller' => 'sylius.controller.exchange_rate::bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
        '/admin/inventory' => [[['_route' => 'sylius_admin_inventory_index', '_controller' => 'sylius.controller.product_variant::indexAction', '_sylius' => ['template' => '@SyliusAdmin/inventory/index.html.twig', 'grid' => 'sylius_admin_inventory', 'section' => 'admin', 'permission' => true]], null, ['GET' => 0], null, true, false, null]],
        '/admin/locales' => [[['_route' => 'sylius_admin_locale_index', '_controller' => 'sylius.controller.locale::indexAction', '_sylius' => ['grid' => 'sylius_admin_locale', 'section' => 'admin', 'template' => '@SyliusAdmin\\shared\\crud/index.html.twig', 'permission' => true]], null, ['GET' => 0], null, true, false, null]],
        '/admin/locales/new' => [[['_route' => 'sylius_admin_locale_create', '_controller' => 'sylius.controller.locale::createAction', '_sylius' => ['form' => ['type' => 'Sylius\\Bundle\\AdminBundle\\Form\\Type\\LocaleType'], 'section' => 'admin', 'template' => '@SyliusAdmin\\shared\\crud/create.html.twig', 'redirect' => 'sylius_admin_locale_index', 'permission' => true]], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/orders' => [[['_route' => 'sylius_admin_order_index', '_controller' => 'sylius.controller.order::indexAction', '_sylius' => ['grid' => 'sylius_admin_order', 'section' => 'admin', 'template' => '@SyliusAdmin\\shared\\crud/index.html.twig', 'permission' => true]], null, ['GET' => 0], null, true, false, null]],
        '/admin/payments' => [[['_route' => 'sylius_admin_payment_index', '_controller' => 'sylius.controller.payment::indexAction', '_sylius' => ['grid' => 'sylius_admin_payment', 'section' => 'admin', 'template' => '@SyliusAdmin\\shared\\crud/index.html.twig', 'permission' => true]], null, ['GET' => 0], null, true, false, null]],
        '/admin/payment-methods' => [[['_route' => 'sylius_admin_payment_method_index', '_controller' => 'sylius.controller.payment_method::indexAction', '_sylius' => ['grid' => 'sylius_admin_payment_method', 'section' => 'admin', 'template' => '@SyliusAdmin\\shared\\crud/index.html.twig', 'permission' => true]], null, ['GET' => 0], null, true, false, null]],
        '/admin/payment-methods/bulk-delete' => [[['_route' => 'sylius_admin_payment_method_bulk_delete', '_controller' => 'sylius.controller.payment_method::bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
        '/admin/products' => [[['_route' => 'sylius_admin_product_index', '_controller' => 'sylius.controller.product::indexAction', '_sylius' => ['grid' => 'sylius_admin_product', 'section' => 'admin', 'template' => '@SyliusAdmin\\shared\\crud/index.html.twig', 'permission' => true]], null, ['GET' => 0], null, true, false, null]],
        '/admin/products/new' => [[['_route' => 'sylius_admin_product_create', '_controller' => 'sylius.controller.product::createAction', '_sylius' => ['form' => ['type' => 'Sylius\\Bundle\\AdminBundle\\Form\\Type\\ProductType'], 'section' => 'admin', 'template' => '@SyliusAdmin\\shared\\crud/create.html.twig', 'redirect' => 'sylius_admin_product_update', 'permission' => true]], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/products/new/simple' => [[['_route' => 'sylius_admin_product_create_simple', '_controller' => 'sylius.controller.product::createAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'factory' => ['method' => 'createWithVariant'], 'form' => ['type' => 'Sylius\\Bundle\\AdminBundle\\Form\\Type\\ProductType'], 'template' => '@SyliusAdmin/shared/crud/create.html.twig', 'redirect' => 'sylius_admin_product_update', 'vars' => ['route' => ['name' => 'sylius_admin_product_create_simple']]]], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/product-association-types' => [[['_route' => 'sylius_admin_product_association_type_index', '_controller' => 'sylius.controller.product_association_type::indexAction', '_sylius' => ['grid' => 'sylius_admin_product_association_type', 'section' => 'admin', 'template' => '@SyliusAdmin\\shared\\crud/index.html.twig', 'permission' => true]], null, ['GET' => 0], null, true, false, null]],
        '/admin/product-association-types/new' => [[['_route' => 'sylius_admin_product_association_type_create', '_controller' => 'sylius.controller.product_association_type::createAction', '_sylius' => ['form' => ['type' => 'Sylius\\Bundle\\AdminBundle\\Form\\Type\\ProductAssociationTypeType'], 'section' => 'admin', 'template' => '@SyliusAdmin\\shared\\crud/create.html.twig', 'redirect' => 'sylius_admin_product_association_type_update', 'permission' => true]], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/product-association-types/bulk-delete' => [[['_route' => 'sylius_admin_product_association_type_bulk_delete', '_controller' => 'sylius.controller.product_association_type::bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
        '/admin/product-attributes' => [[['_route' => 'sylius_admin_product_attribute_index', '_controller' => 'sylius.controller.product_attribute::indexAction', '_sylius' => ['grid' => 'sylius_admin_product_attribute', 'section' => 'admin', 'template' => '@SyliusAdmin\\shared\\crud/index.html.twig', 'permission' => true]], null, ['GET' => 0], null, true, false, null]],
        '/admin/product-attributes/bulk-delete' => [[['_route' => 'sylius_admin_product_attribute_bulk_delete', '_controller' => 'sylius.controller.product_attribute::bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
        '/admin/product-options' => [[['_route' => 'sylius_admin_product_option_index', '_controller' => 'sylius.controller.product_option::indexAction', '_sylius' => ['grid' => 'sylius_admin_product_option', 'section' => 'admin', 'template' => '@SyliusAdmin\\shared\\crud/index.html.twig', 'permission' => true]], null, ['GET' => 0], null, true, false, null]],
        '/admin/product-options/new' => [[['_route' => 'sylius_admin_product_option_create', '_controller' => 'sylius.controller.product_option::createAction', '_sylius' => ['form' => ['type' => 'Sylius\\Bundle\\AdminBundle\\Form\\Type\\ProductOptionType'], 'section' => 'admin', 'template' => '@SyliusAdmin\\shared\\crud/create.html.twig', 'redirect' => 'sylius_admin_product_option_update', 'permission' => true]], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/product-options/bulk-delete' => [[['_route' => 'sylius_admin_product_option_bulk_delete', '_controller' => 'sylius.controller.product_option::bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
        '/admin/product-reviews' => [[['_route' => 'sylius_admin_product_review_index', '_controller' => 'sylius.controller.product_review::indexAction', '_sylius' => ['grid' => 'sylius_admin_product_review', 'section' => 'admin', 'template' => '@SyliusAdmin\\shared\\crud/index.html.twig', 'permission' => true]], null, ['GET' => 0], null, true, false, null]],
        '/admin/product-reviews/bulk-delete' => [[['_route' => 'sylius_admin_product_review_bulk_delete', '_controller' => 'sylius.controller.product_review::bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
        '/admin/promotions' => [[['_route' => 'sylius_admin_promotion_index', '_controller' => 'sylius.controller.promotion::indexAction', '_sylius' => ['grid' => 'sylius_admin_promotion', 'section' => 'admin', 'template' => '@SyliusAdmin\\shared\\crud/index.html.twig', 'permission' => true]], null, ['GET' => 0], null, true, false, null]],
        '/admin/promotions/new' => [[['_route' => 'sylius_admin_promotion_create', '_controller' => 'sylius.controller.promotion::createAction', '_sylius' => ['form' => ['type' => 'Sylius\\Bundle\\AdminBundle\\Form\\Type\\PromotionType'], 'section' => 'admin', 'template' => '@SyliusAdmin\\shared\\crud/create.html.twig', 'redirect' => 'sylius_admin_promotion_update', 'permission' => true]], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/promotions/bulk-delete' => [[['_route' => 'sylius_admin_promotion_bulk_delete', '_controller' => 'sylius.controller.promotion::bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
        '/admin/login' => [[['_route' => 'sylius_admin_login', '_controller' => 'sylius.controller.security::loginAction', '_sylius' => ['template' => '@SyliusAdmin/security/login.html.twig', 'permission' => true, 'logged_in_route' => 'sylius_admin_dashboard']], null, ['GET' => 0], null, false, false, null]],
        '/admin/login-check' => [[['_route' => 'sylius_admin_login_check', '_controller' => 'sylius.controller.security::checkAction'], null, ['POST' => 0], null, false, false, null]],
        '/admin/logout' => [[['_route' => 'sylius_admin_logout'], null, ['GET' => 0], null, false, false, null]],
        '/admin/forgotten-password' => [
            [['_route' => 'sylius_admin_render_reset_password_page', '_controller' => 'sylius_admin.controller.account.render_request_password_reset_page'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'sylius_admin_request_password_reset', '_controller' => 'sylius_admin.controller.account.request_password_reset'], null, ['POST' => 0], null, false, false, null],
        ],
        '/admin/shipments' => [[['_route' => 'sylius_admin_shipment_index', '_controller' => 'sylius.controller.shipment::indexAction', '_sylius' => ['grid' => 'sylius_admin_shipment', 'section' => 'admin', 'template' => '@SyliusAdmin\\shared\\crud/index.html.twig', 'permission' => true]], null, ['GET' => 0], null, true, false, null]],
        '/admin/shipping-categories' => [[['_route' => 'sylius_admin_shipping_category_index', '_controller' => 'sylius.controller.shipping_category::indexAction', '_sylius' => ['grid' => 'sylius_admin_shipping_category', 'section' => 'admin', 'template' => '@SyliusAdmin\\shared\\crud/index.html.twig', 'permission' => true]], null, ['GET' => 0], null, true, false, null]],
        '/admin/shipping-categories/new' => [[['_route' => 'sylius_admin_shipping_category_create', '_controller' => 'sylius.controller.shipping_category::createAction', '_sylius' => ['form' => ['type' => 'Sylius\\Bundle\\AdminBundle\\Form\\Type\\ShippingCategoryType'], 'section' => 'admin', 'template' => '@SyliusAdmin\\shared\\crud/create.html.twig', 'redirect' => 'sylius_admin_shipping_category_update', 'permission' => true]], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/shipping-categories/bulk-delete' => [[['_route' => 'sylius_admin_shipping_category_bulk_delete', '_controller' => 'sylius.controller.shipping_category::bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
        '/admin/shipping-methods' => [[['_route' => 'sylius_admin_shipping_method_index', '_controller' => 'sylius.controller.shipping_method::indexAction', '_sylius' => ['grid' => 'sylius_admin_shipping_method', 'section' => 'admin', 'template' => '@SyliusAdmin\\shared\\crud/index.html.twig', 'permission' => true]], null, ['GET' => 0], null, true, false, null]],
        '/admin/shipping-methods/new' => [[['_route' => 'sylius_admin_shipping_method_create', '_controller' => 'sylius.controller.shipping_method::createAction', '_sylius' => ['form' => ['type' => 'Sylius\\Bundle\\AdminBundle\\Form\\Type\\ShippingMethodType'], 'section' => 'admin', 'template' => '@SyliusAdmin\\shared\\crud/create.html.twig', 'redirect' => 'sylius_admin_shipping_method_update', 'permission' => true]], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/shipping-methods/bulk-delete' => [[['_route' => 'sylius_admin_shipping_method_bulk_delete', '_controller' => 'sylius.controller.shipping_method::bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
        '/admin/taxons/new' => [[['_route' => 'sylius_admin_taxon_create', '_controller' => 'sylius.controller.taxon::createAction', '_sylius' => ['form' => ['type' => 'Sylius\\Bundle\\AdminBundle\\Form\\Type\\TaxonType'], 'section' => 'admin', 'template' => '@SyliusAdmin\\shared\\crud/create.html.twig', 'redirect' => 'sylius_admin_taxon_update', 'permission' => true]], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/taxons/bulk-delete' => [[['_route' => 'sylius_admin_taxon_bulk_delete', '_controller' => 'sylius.controller.taxon::bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
        '/admin/taxons' => [[['_route' => 'sylius_admin_taxon_index', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction', 'route' => 'sylius_admin_taxon_create', 'permanent' => true], null, ['GET' => 0], null, true, false, null]],
        '/admin/tax-categories' => [[['_route' => 'sylius_admin_tax_category_index', '_controller' => 'sylius.controller.tax_category::indexAction', '_sylius' => ['grid' => 'sylius_admin_tax_category', 'section' => 'admin', 'template' => '@SyliusAdmin\\shared\\crud/index.html.twig', 'permission' => true]], null, ['GET' => 0], null, true, false, null]],
        '/admin/tax-categories/new' => [[['_route' => 'sylius_admin_tax_category_create', '_controller' => 'sylius.controller.tax_category::createAction', '_sylius' => ['form' => ['type' => 'Sylius\\Bundle\\AdminBundle\\Form\\Type\\TaxCategoryType'], 'section' => 'admin', 'template' => '@SyliusAdmin\\shared\\crud/create.html.twig', 'redirect' => 'sylius_admin_tax_category_update', 'permission' => true]], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/tax-categories/bulk-delete' => [[['_route' => 'sylius_admin_tax_category_bulk_delete', '_controller' => 'sylius.controller.tax_category::bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
        '/admin/tax-rates' => [[['_route' => 'sylius_admin_tax_rate_index', '_controller' => 'sylius.controller.tax_rate::indexAction', '_sylius' => ['grid' => 'sylius_admin_tax_rate', 'section' => 'admin', 'template' => '@SyliusAdmin\\shared\\crud/index.html.twig', 'permission' => true]], null, ['GET' => 0], null, true, false, null]],
        '/admin/tax-rates/new' => [[['_route' => 'sylius_admin_tax_rate_create', '_controller' => 'sylius.controller.tax_rate::createAction', '_sylius' => ['form' => ['type' => 'Sylius\\Bundle\\AdminBundle\\Form\\Type\\TaxRateType'], 'section' => 'admin', 'template' => '@SyliusAdmin\\shared\\crud/create.html.twig', 'redirect' => 'sylius_admin_tax_rate_update', 'permission' => true]], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/tax-rates/bulk-delete' => [[['_route' => 'sylius_admin_tax_rate_bulk_delete', '_controller' => 'sylius.controller.tax_rate::bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
        '/admin/zones' => [[['_route' => 'sylius_admin_zone_index', '_controller' => 'sylius.controller.zone::indexAction', '_sylius' => ['grid' => 'sylius_admin_zone', 'section' => 'admin', 'template' => '@SyliusAdmin\\shared\\crud/index.html.twig', 'permission' => true]], null, ['GET' => 0], null, true, false, null]],
        '/admin/zones/bulk-delete' => [[['_route' => 'sylius_admin_zone_bulk_delete', '_controller' => 'sylius.controller.zone::bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
        '/api/v2/shop/addresses' => [
            [['_route' => 'sylius_api_shop_address_get_collection', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Addressing\\Address', '_api_operation_name' => 'sylius_api_shop_address_get_collection', '_format' => null], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'sylius_api_shop_address_post', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Addressing\\Address', '_api_operation_name' => 'sylius_api_shop_address_post', '_format' => null], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/v2/admin/catalog-promotions' => [
            [['_route' => 'sylius_api_admin_catalog_promotion_get_collection', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Promotion\\CatalogPromotion', '_api_operation_name' => 'sylius_api_admin_catalog_promotion_get_collection', '_format' => null], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'sylius_api_admin_catalog_promotion_post', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Promotion\\CatalogPromotion', '_api_operation_name' => 'sylius_api_admin_catalog_promotion_post', '_format' => null], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/v2/admin/channels' => [
            [['_route' => 'sylius_api_admin_channel_get_collection', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Channel\\Channel', '_api_operation_name' => 'sylius_api_admin_channel_get_collection', '_format' => null], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'sylius_api_admin_channel_post', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Channel\\Channel', '_api_operation_name' => 'sylius_api_admin_channel_post', '_format' => null], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/v2/shop/channels' => [[['_route' => 'sylius_api_shop_channel_get_collection', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Channel\\Channel', '_api_operation_name' => 'sylius_api_shop_channel_get_collection', '_format' => null], null, ['GET' => 0], null, false, false, null]],
        '/api/v2/admin/channel-pricing-log-entries' => [[['_route' => 'sylius_api_admin_channel_pricing_log_entry_get_collection', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Channel\\ChannelPricingLogEntry', '_api_operation_name' => 'sylius_api_admin_channel_pricing_log_entry_get_collection', '_format' => null], null, ['GET' => 0], null, false, false, null]],
        '/api/v2/admin/countries' => [
            [['_route' => 'sylius_api_admin_country_get_collection', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Addressing\\Country', '_api_operation_name' => 'sylius_api_admin_country_get_collection', '_format' => null], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'sylius_api_admin_country_post', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Addressing\\Country', '_api_operation_name' => 'sylius_api_admin_country_post', '_format' => null], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/v2/shop/countries' => [[['_route' => 'sylius_api_shop_country_get_collection', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Addressing\\Country', '_api_operation_name' => 'sylius_api_shop_country_get_collection', '_format' => null], null, ['GET' => 0], null, false, false, null]],
        '/api/v2/admin/currencies' => [
            [['_route' => 'sylius_api_admin_currency_get_collection', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Currency\\Currency', '_api_operation_name' => 'sylius_api_admin_currency_get_collection', '_format' => null], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'sylius_api_admin_currency_post', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Currency\\Currency', '_api_operation_name' => 'sylius_api_admin_currency_post', '_format' => null], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/v2/shop/currencies' => [[['_route' => 'sylius_api_shop_currency_get_collection', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Currency\\Currency', '_api_operation_name' => 'sylius_api_shop_currency_get_collection', '_format' => null], null, ['GET' => 0], null, false, false, null]],
        '/api/v2/admin/customers' => [
            [['_route' => 'sylius_api_admin_customer_get_collection', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Customer\\Customer', '_api_operation_name' => 'sylius_api_admin_customer_get_collection', '_format' => null], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'sylius_api_admin_customer_post', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Customer\\Customer', '_api_operation_name' => 'sylius_api_admin_customer_post', '_format' => null], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/v2/shop/customers' => [[['_route' => 'sylius_api_shop_customer_post', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Customer\\Customer', '_api_operation_name' => 'sylius_api_shop_customer_post', '_format' => null], null, ['POST' => 0], null, false, false, null]],
        '/api/v2/admin/customer-groups' => [
            [['_route' => 'sylius_api_admin_customer_group_get_collection', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Customer\\CustomerGroup', '_api_operation_name' => 'sylius_api_admin_customer_group_get_collection', '_format' => null], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'sylius_api_admin_customer_group_post', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Customer\\CustomerGroup', '_api_operation_name' => 'sylius_api_admin_customer_group_post', '_format' => null], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/v2/admin/exchange-rates' => [
            [['_route' => 'sylius_api_admin_exchange_rate_get_collection', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Currency\\ExchangeRate', '_api_operation_name' => 'sylius_api_admin_exchange_rate_get_collection', '_format' => null], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'sylius_api_admin_exchange_rate_post', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Currency\\ExchangeRate', '_api_operation_name' => 'sylius_api_admin_exchange_rate_post', '_format' => null], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/v2/shop/exchange-rates' => [[['_route' => 'sylius_api_shop_exchange_rate_get_collection', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Currency\\ExchangeRate', '_api_operation_name' => 'sylius_api_shop_exchange_rate_get_collection', '_format' => null], null, ['GET' => 0], null, false, false, null]],
        '/api/v2/admin/locales' => [
            [['_route' => 'sylius_api_admin_locale_get_collection', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Locale\\Locale', '_api_operation_name' => 'sylius_api_admin_locale_get_collection', '_format' => null], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'sylius_api_admin_locale_post', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Locale\\Locale', '_api_operation_name' => 'sylius_api_admin_locale_post', '_format' => null], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/v2/shop/locales' => [[['_route' => 'sylius_api_shop_locale_get_collection', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Locale\\Locale', '_api_operation_name' => 'sylius_api_shop_locale_get_collection', '_format' => null], null, ['GET' => 0], null, false, false, null]],
        '/api/v2/admin/orders' => [[['_route' => 'sylius_api_admin_order_get_collection', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\Order', '_api_operation_name' => 'sylius_api_admin_order_get_collection', '_format' => null], null, ['GET' => 0], null, false, false, null]],
        '/api/v2/shop/orders' => [
            [['_route' => 'sylius_api_shop_order_get_collection', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\Order', '_api_operation_name' => 'sylius_api_shop_order_get_collection', '_format' => null], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'sylius_api_shop_order_post', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\Order', '_api_operation_name' => 'sylius_api_shop_order_post', '_format' => null], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/v2/admin/payments' => [[['_route' => 'sylius_api_admin_payment_get_collection', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Payment\\Payment', '_api_operation_name' => 'sylius_api_admin_payment_get_collection', '_format' => null], null, ['GET' => 0], null, false, false, null]],
        '/api/v2/admin/payment-methods' => [
            [['_route' => 'sylius_api_admin_payment_method_get_collection', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Payment\\PaymentMethod', '_api_operation_name' => 'sylius_api_admin_payment_method_get_collection', '_format' => null], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'sylius_api_admin_payment_method_post', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Payment\\PaymentMethod', '_api_operation_name' => 'sylius_api_admin_payment_method_post', '_format' => null], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/v2/shop/payment-methods' => [[['_route' => 'sylius_api_shop_payment_method_get_collection', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Payment\\PaymentMethod', '_api_operation_name' => 'sylius_api_shop_payment_method_get_collection', '_format' => null], null, ['GET' => 0], null, false, false, null]],
        '/api/v2/admin/products' => [
            [['_route' => 'sylius_api_admin_product_post', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\Product', '_api_operation_name' => 'sylius_api_admin_product_post', '_format' => null], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'sylius_api_admin_product_get_collection', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\Product', '_api_operation_name' => 'sylius_api_admin_product_get_collection', '_format' => null], null, ['GET' => 0], null, false, false, null],
        ],
        '/api/v2/shop/products' => [[['_route' => 'sylius_api_shop_product_get_collection', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\Product', '_api_operation_name' => 'sylius_api_shop_product_get_collection', '_format' => null], null, ['GET' => 0], null, false, false, null]],
        '/api/v2/admin/product-associations' => [
            [['_route' => 'sylius_api_admin_product_association_get_collection', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductAssociation', '_api_operation_name' => 'sylius_api_admin_product_association_get_collection', '_format' => null], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'sylius_api_admin_product_association_post', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductAssociation', '_api_operation_name' => 'sylius_api_admin_product_association_post', '_format' => null], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/v2/admin/product-association-types' => [
            [['_route' => 'sylius_api_admin_product_association_type_get_collection', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductAssociationType', '_api_operation_name' => 'sylius_api_admin_product_association_type_get_collection', '_format' => null], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'sylius_api_admin_product_association_type_post', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductAssociationType', '_api_operation_name' => 'sylius_api_admin_product_association_type_post', '_format' => null], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/v2/shop/product-association-types' => [[['_route' => 'sylius_api_shop_product_association_type_get_collection', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductAssociationType', '_api_operation_name' => 'sylius_api_shop_product_association_type_get_collection', '_format' => null], null, ['GET' => 0], null, false, false, null]],
        '/api/v2/admin/product-attributes' => [
            [['_route' => 'sylius_api_admin_product_attribute_get_collection', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductAttribute', '_api_operation_name' => 'sylius_api_admin_product_attribute_get_collection', '_format' => null], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'sylius_api_admin_product_attribute_post', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductAttribute', '_api_operation_name' => 'sylius_api_admin_product_attribute_post', '_format' => null], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/v2/admin/product-options' => [
            [['_route' => 'sylius_api_admin_product_option_get_collection', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductOption', '_api_operation_name' => 'sylius_api_admin_product_option_get_collection', '_format' => null], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'sylius_api_admin_product_option_post', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductOption', '_api_operation_name' => 'sylius_api_admin_product_option_post', '_format' => null], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/v2/shop/product-options' => [[['_route' => 'sylius_api_shop_product_option_collection_get', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductOption', '_api_operation_name' => 'sylius_api_shop_product_option_collection_get', '_format' => null], null, ['GET' => 0], null, false, false, null]],
        '/api/v2/shop/product-option-values' => [[['_route' => 'sylius_api_shop_product_option_value_get_collection', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductOptionValue', '_api_operation_name' => 'sylius_api_shop_product_option_value_get_collection', '_format' => null], null, ['GET' => 0], null, false, false, null]],
        '/api/v2/admin/product-reviews' => [[['_route' => 'sylius_api_admin_product_review_get_collection', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductReview', '_api_operation_name' => 'sylius_api_admin_product_review_get_collection', '_format' => null], null, ['GET' => 0], null, false, false, null]],
        '/api/v2/shop/product-reviews' => [
            [['_route' => 'sylius_api_shop_product_review_get_collection', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductReview', '_api_operation_name' => 'sylius_api_shop_product_review_get_collection', '_format' => null], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'sylius_api_shop_product_review_post', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductReview', '_api_operation_name' => 'sylius_api_shop_product_review_post', '_format' => null], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/v2/admin/product-taxons' => [
            [['_route' => 'sylius_api_admin_product_taxon_get_collection', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductTaxon', '_api_operation_name' => 'sylius_api_admin_product_taxon_get_collection', '_format' => null], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'sylius_api_admin_product_taxon_post', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductTaxon', '_api_operation_name' => 'sylius_api_admin_product_taxon_post', '_format' => null], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/v2/admin/product-variants' => [
            [['_route' => 'sylius_api_admin_product_variant_get_collection', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductVariant', '_api_operation_name' => 'sylius_api_admin_product_variant_get_collection', '_format' => null], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'sylius_api_admin_product_variant_post', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductVariant', '_api_operation_name' => 'sylius_api_admin_product_variant_post', '_format' => null], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/v2/shop/product-variants' => [[['_route' => 'sylius_api_shop_product_variant_get_collection', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductVariant', '_api_operation_name' => 'sylius_api_shop_product_variant_get_collection', '_format' => null], null, ['GET' => 0], null, false, false, null]],
        '/api/v2/admin/promotions' => [
            [['_route' => 'sylius_api_admin_promotion_get_collection', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Promotion\\Promotion', '_api_operation_name' => 'sylius_api_admin_promotion_get_collection', '_format' => null], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'sylius_api_admin_promotion_post', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Promotion\\Promotion', '_api_operation_name' => 'sylius_api_admin_promotion_post', '_format' => null], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/v2/admin/shipments' => [[['_route' => 'sylius_api_admin_shipment_get_collection', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Shipping\\Shipment', '_api_operation_name' => 'sylius_api_admin_shipment_get_collection', '_format' => null], null, ['GET' => 0], null, false, false, null]],
        '/api/v2/admin/shipping-categories' => [
            [['_route' => 'sylius_api_admin_shipping_category_get_collection', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Shipping\\ShippingCategory', '_api_operation_name' => 'sylius_api_admin_shipping_category_get_collection', '_format' => null], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'sylius_api_admin_shipping_category_post', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Shipping\\ShippingCategory', '_api_operation_name' => 'sylius_api_admin_shipping_category_post', '_format' => null], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/v2/admin/shipping-methods' => [
            [['_route' => 'sylius_api_admin_shipping_method_get_collection', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Shipping\\ShippingMethod', '_api_operation_name' => 'sylius_api_admin_shipping_method_get_collection', '_format' => null], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'sylius_api_admin_shipping_method_post', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Shipping\\ShippingMethod', '_api_operation_name' => 'sylius_api_admin_shipping_method_post', '_format' => null], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/v2/shop/shipping-methods' => [[['_route' => 'sylius_api_shop_shipping_method_get_collection', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Shipping\\ShippingMethod', '_api_operation_name' => 'sylius_api_shop_shipping_method_get_collection', '_format' => null], null, ['GET' => 0], null, false, false, null]],
        '/api/v2/admin/tax-categories' => [
            [['_route' => 'sylius_api_admin_tax_category_get_collection', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Taxation\\TaxCategory', '_api_operation_name' => 'sylius_api_admin_tax_category_get_collection', '_format' => null], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'sylius_api_admin_tax_category_post', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Taxation\\TaxCategory', '_api_operation_name' => 'sylius_api_admin_tax_category_post', '_format' => null], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/v2/admin/tax-rates' => [
            [['_route' => 'sylius_api_admin_tax_rate_get_collection', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Taxation\\TaxRate', '_api_operation_name' => 'sylius_api_admin_tax_rate_get_collection', '_format' => null], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'sylius_api_admin_tax_rate_post', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Taxation\\TaxRate', '_api_operation_name' => 'sylius_api_admin_tax_rate_post', '_format' => null], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/v2/admin/taxons' => [
            [['_route' => 'sylius_api_admin_taxon_post', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Taxonomy\\Taxon', '_api_operation_name' => 'sylius_api_admin_taxon_post', '_format' => null], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'sylius_api_admin_taxon_get_collection', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Taxonomy\\Taxon', '_api_operation_name' => 'sylius_api_admin_taxon_get_collection', '_format' => null], null, ['GET' => 0], null, false, false, null],
        ],
        '/api/v2/shop/taxons' => [[['_route' => 'sylius_api_shop_taxon_get_collection', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Taxonomy\\Taxon', '_api_operation_name' => 'sylius_api_shop_taxon_get_collection', '_format' => null], null, ['GET' => 0], null, false, false, null]],
        '/api/v2/admin/zones' => [
            [['_route' => 'sylius_api_admin_zone_get_collection', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Addressing\\Zone', '_api_operation_name' => 'sylius_api_admin_zone_get_collection', '_format' => null], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'sylius_api_admin_zone_post', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Addressing\\Zone', '_api_operation_name' => 'sylius_api_admin_zone_post', '_format' => null], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/v2/shop/contact' => [[['_route' => 'sylius_api_shop_contact_post_send_contact_request', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'Sylius\\Bundle\\ApiBundle\\Command\\SendContactRequest', '_api_operation_name' => 'sylius_api_shop_contact_post_send_contact_request', '_format' => null], null, ['POST' => 0], null, false, false, null]],
        '/api/v2/admin/statistics' => [[['_route' => 'sylius_api_admin_statistics', '_controller' => 'sylius_api.controller.get_statistics'], null, ['GET' => 0], null, false, false, null]],
        '/admin/mollie/methods/test' => [[['_route' => 'sylius_mollie_admin_test_api_keys', '_controller' => 'sylius_mollie.controller.admin.test_api_keys'], null, ['GET' => 0], null, false, false, null]],
        '/admin/mollie/methods/change-position' => [[['_route' => 'sylius_mollie_admin_mollie_method_change_position', '_controller' => 'sylius_mollie.controller.admin.change_position_payment_method'], null, ['GET' => 0], null, false, false, null]],
        '/admin/mollie/logger' => [[['_route' => 'sylius_mollie_admin_mollie_logger_index', '_controller' => 'sylius_mollie.controller.mollie_logger::indexAction', '_sylius' => ['grid' => 'sylius_mollie_plugin_mollie_logger', 'section' => 'admin', 'template' => '@SyliusAdmin\\shared\\crud/index.html.twig', 'permission' => true, 'vars' => ['hook_prefix' => 'sylius_mollie.admin.logger']]], null, ['GET' => 0], null, true, false, null]],
        '/admin/mollie/logger/new' => [[['_route' => 'sylius_mollie_admin_mollie_logger_create', '_controller' => 'sylius_mollie.controller.mollie_logger::createAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\shared\\crud/create.html.twig', 'redirect' => 'sylius_mollie_admin_mollie_logger_update', 'permission' => true, 'vars' => ['hook_prefix' => 'sylius_mollie.admin.logger']]], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/mollie/email-template' => [[['_route' => 'sylius_mollie_admin_template_mollie_email_index', '_controller' => 'sylius_mollie.controller.template_mollie_email::indexAction', '_sylius' => ['grid' => 'sylius_mollie_plugin_template_mollie_email', 'section' => 'admin', 'template' => '@SyliusAdmin\\shared\\crud/index.html.twig', 'permission' => true, 'vars' => ['hook_prefix' => 'sylius_mollie.admin.email_template']]], null, ['GET' => 0], null, true, false, null]],
        '/admin/mollie/email-template/new' => [[['_route' => 'sylius_mollie_admin_template_mollie_email_create', '_controller' => 'sylius_mollie.controller.template_mollie_email::createAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\shared\\crud/create.html.twig', 'redirect' => 'sylius_mollie_admin_template_mollie_email_update', 'permission' => true, 'vars' => ['hook_prefix' => 'sylius_mollie.admin.email_template']]], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/mollie/email-template/bulk-delete' => [[['_route' => 'sylius_mollie_admin_template_mollie_email_bulk_delete', '_controller' => 'sylius_mollie.controller.template_mollie_email::bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['hook_prefix' => 'sylius_mollie.admin.email_template'], 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
        '/admin/product-types' => [[['_route' => 'sylius_mollie_admin_product_type_index', '_controller' => 'sylius_mollie.controller.product_type::indexAction', '_sylius' => ['grid' => 'sylius_mollie_plugin_admin_product_type', 'section' => 'admin', 'template' => '@SyliusAdmin\\shared\\crud/index.html.twig', 'permission' => true]], null, ['GET' => 0], null, true, false, null]],
        '/admin/product-types/new' => [[['_route' => 'sylius_mollie_admin_product_type_create', '_controller' => 'sylius_mollie.controller.product_type::createAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\shared\\crud/create.html.twig', 'redirect' => 'sylius_mollie_admin_product_type_index', 'permission' => true]], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/product-types/bulk-delete' => [[['_route' => 'sylius_mollie_admin_product_type_bulk_delete', '_controller' => 'sylius_mollie.controller.product_type::bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
        '/admin/onboarding-wizard/status' => [[['_route' => 'sylius_mollie_admin_onboarding_wizard_status', '_controller' => 'sylius_mollie.controller.admin.onboarding_wizard.status'], null, ['GET' => 0], null, false, false, null]],
        '/admin/onboarding-wizard/completed' => [[['_route' => 'sylius_mollie_admin_onboarding_wizard_completed', '_controller' => 'sylius_mollie.controller.admin.onboarding_wizard.completed'], null, ['POST' => 0], null, false, false, null]],
        '/admin/mollie/subscription' => [[['_route' => 'sylius_mollie_admin_mollie_subscription_index', '_controller' => 'sylius_mollie.controller.mollie_subscription::indexAction', '_sylius' => ['grid' => 'sylius_mollie_plugin_mollie_subscription', 'section' => 'admin', 'template' => '@SyliusAdmin\\shared\\crud/index.html.twig', 'permission' => true]], null, ['GET' => 0], null, true, false, null]],
        '/paypal-webhook/api' => [[['_route' => 'sylius_paypal_webhook_refund_order', '_controller' => 'sylius_paypal.controller.webhook.refund_order'], null, ['POST' => 0], null, true, false, null]],
        '/payment/capture/session-token' => [[['_route' => 'payum_capture_do_session', '_controller' => 'Payum\\Bundle\\PayumBundle\\Controller\\CaptureController::doSessionTokenAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'sylius_shop_default_locale', '_controller' => 'sylius_shop.controller.locale_switch::switchAction'], null, ['GET' => 0], null, false, false, null]],
        '/.well-known/change-password' => [[['_route' => 'sylius_shop_request_password_reset_token_redirect', 'route' => 'sylius_shop_request_password_reset_token', 'permanent' => false, '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction'], null, ['GET' => 0], null, false, false, null]],
        '/_wdt/styles' => [[['_route' => '_wdt_stylesheet', '_controller' => 'web_profiler.controller.profiler::toolbarStylesheetAction'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/translations(?:/([\\w]+)(?:\\.(js|json))?)?(*:84)'
                .'|/media/cache/resolve/(?'
                    .'|([A-z0-9_-]*)/rc/([^/]++)/(.+)(*:145)'
                    .'|([A-z0-9_-]*)/(.+)(*:171)'
                .')'
                .'|/a(?'
                    .'|dmin/(?'
                        .'|ajax/autocomplete/([^/]++)(*:219)'
                        .'|impersonate(?:/([^/]++))?(*:252)'
                        .'|([^/]++)/_components/([^/]++)(?:/([^/]++))?(*:303)'
                        .'|users/([^/]++)(?'
                            .'|/(?'
                                .'|edit(*:336)'
                                .'|remove\\-avatar(*:358)'
                            .')'
                            .'|(*:367)'
                        .')'
                        .'|c(?'
                            .'|atalog\\-promotions/(?'
                                .'|([^/]++)(?'
                                    .'|/edit(*:418)'
                                    .'|(*:426)'
                                .')'
                                .'|bulk\\-delete(*:447)'
                                .'|([^/]++)(?'
                                    .'|/variants(*:475)'
                                    .'|(*:483)'
                                .')'
                            .')'
                            .'|hannels/([^/]++)(?'
                                .'|/edit(*:517)'
                                .'|(*:525)'
                            .')'
                            .'|ountries/([^/]++)/edit(*:556)'
                            .'|ustomer(?'
                                .'|s/(?'
                                    .'|([^/]++)(?'
                                        .'|/edit(*:595)'
                                        .'|(*:603)'
                                    .')'
                                    .'|bulk\\-delete(*:624)'
                                    .'|([^/]++)/orders(*:647)'
                                .')'
                                .'|\\-groups/([^/]++)(?'
                                    .'|/edit(*:681)'
                                    .'|(*:689)'
                                .')'
                            .')'
                        .')'
                        .'|exchange\\-rates/([^/]++)(?'
                            .'|/edit(*:732)'
                            .'|(*:740)'
                        .')'
                        .'|locales/([^/]++)(*:765)'
                        .'|orders/([^/]++)(?'
                            .'|(*:791)'
                            .'|/(?'
                                .'|history(*:810)'
                                .'|edit(*:822)'
                                .'|cancel(*:836)'
                                .'|payment(?'
                                    .'|s/([^/]++)/(?'
                                        .'|complete(*:876)'
                                        .'|refund(*:890)'
                                    .')'
                                    .'|\\-link(*:905)'
                                .')'
                                .'|shipment/([^/]++)/ship(*:936)'
                                .'|resend\\-confirmation\\-email(*:971)'
                            .')'
                        .')'
                        .'|p(?'
                            .'|ayment(?'
                                .'|s/([^/]++)/(?'
                                    .'|complete(*:1016)'
                                    .'|payment\\-requests(?'
                                        .'|(*:1045)'
                                        .'|/([^/]++)(*:1063)'
                                    .')'
                                .')'
                                .'|\\-methods/(?'
                                    .'|([^/]++)(?'
                                        .'|/edit(*:1103)'
                                        .'|(*:1112)'
                                    .')'
                                    .'|new/([^/]++)(*:1134)'
                                .')'
                                .'|/refund/([^/]++)(*:1160)'
                            .')'
                            .'|ro(?'
                                .'|duct(?'
                                    .'|s/(?'
                                        .'|([^/]++)(?'
                                            .'|/edit(*:1203)'
                                            .'|(*:1212)'
                                        .')'
                                        .'|bulk\\-delete(*:1234)'
                                        .'|([^/]++)(?'
                                            .'|(*:1254)'
                                            .'|/variants(?'
                                                .'|/(?'
                                                    .'|generate(*:1287)'
                                                    .'|([^/]++)/channel\\-pricing/([^/]++)/channel\\-pricing\\-log\\-entries(*:1361)'
                                                    .'|new(*:1373)'
                                                    .'|([^/]++)/edit(*:1395)'
                                                    .'|bulk\\-delete(*:1416)'
                                                    .'|([^/]++)(*:1433)'
                                                .')'
                                                .'|(*:1443)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|\\-(?'
                                        .'|a(?'
                                            .'|ssociation\\-types/([^/]++)(?'
                                                .'|/edit(*:1498)'
                                                .'|(*:1507)'
                                            .')'
                                            .'|ttributes/([^/]++)(?'
                                                .'|/(?'
                                                    .'|edit(*:1546)'
                                                    .'|new(*:1558)'
                                                .')'
                                                .'|(*:1568)'
                                            .')'
                                        .')'
                                        .'|options/([^/]++)(?'
                                            .'|/edit(*:1603)'
                                            .'|(*:1612)'
                                        .')'
                                        .'|review(?'
                                            .'|s/([^/]++)(?'
                                                .'|/edit(*:1649)'
                                                .'|(*:1658)'
                                            .')'
                                            .'|/([^/]++)/(?'
                                                .'|accept(*:1687)'
                                                .'|reject(*:1702)'
                                            .')'
                                        .')'
                                        .'|types/([^/]++)(?'
                                            .'|/edit(*:1735)'
                                            .'|(*:1744)'
                                        .')'
                                    .')'
                                .')'
                                .'|motions/([^/]++)(?'
                                    .'|/(?'
                                        .'|edit(*:1783)'
                                        .'|archive(*:1799)'
                                        .'|coupons(?'
                                            .'|(*:1818)'
                                            .'|/(?'
                                                .'|new(*:1834)'
                                                .'|([^/]++)/edit(*:1856)'
                                                .'|generate(*:1873)'
                                                .'|bulk\\-delete(*:1894)'
                                                .'|([^/]++)(*:1911)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|(*:1923)'
                                .')'
                            .')'
                        .')'
                        .'|tax(?'
                            .'|ons/(?'
                                .'|([^/]++)(?'
                                    .'|/(?'
                                        .'|products(?'
                                            .'|(*:1974)'
                                            .'|/bulk\\-delete(*:1996)'
                                        .')'
                                        .'|edit(*:2010)'
                                    .')'
                                    .'|(*:2020)'
                                .')'
                                .'|new/([^/]++)(*:2042)'
                            .')'
                            .'|\\-(?'
                                .'|categories/([^/]++)(?'
                                    .'|/edit(*:2084)'
                                    .'|(*:2093)'
                                .')'
                                .'|rates/([^/]++)(?'
                                    .'|/edit(*:2125)'
                                    .'|(*:2134)'
                                .')'
                            .')'
                        .')'
                        .'|forgotten\\-password/([^/]++)(?'
                            .'|(*:2177)'
                        .')'
                        .'|sh(?'
                            .'|ip(?'
                                .'|ments/([^/]++)(?'
                                    .'|(*:2214)'
                                    .'|/(?'
                                        .'|ship(*:2231)'
                                        .'|resend\\-confirmation\\-email(*:2267)'
                                    .')'
                                .')'
                                .'|ping\\-(?'
                                    .'|categories/([^/]++)(?'
                                        .'|/edit(*:2314)'
                                        .'|(*:2323)'
                                    .')'
                                    .'|methods/([^/]++)(?'
                                        .'|/(?'
                                            .'|edit(*:2360)'
                                            .'|archive(*:2376)'
                                        .')'
                                        .'|(*:2386)'
                                    .')'
                                .')'
                            .')'
                            .'|op\\-user/([^/]++)(*:2415)'
                        .')'
                        .'|zones/(?'
                            .'|([^/]++)(?'
                                .'|/edit(*:2450)'
                                .'|(*:2459)'
                            .')'
                            .'|(country|province|zone)/new(*:2496)'
                        .')'
                        .'|mollie(?'
                            .'|/(?'
                                .'|methods/(\\d+)/all(*:2536)'
                                .'|logger/(?'
                                    .'|([^/]++)(?'
                                        .'|/edit(*:2571)'
                                        .'|(*:2580)'
                                    .')'
                                    .'|bulk\\-delete(*:2602)'
                                    .'|([^/]++)(*:2619)'
                                .')'
                                .'|email\\-template/([^/]++)(?'
                                    .'|/edit(*:2661)'
                                    .'|(*:2670)'
                                .')'
                                .'|subscription/([^/]++)(?'
                                    .'|(*:2704)'
                                    .'|/(?'
                                        .'|cancel(*:2723)'
                                        .'|pause(*:2737)'
                                        .'|resume(*:2752)'
                                    .')'
                                .')'
                            .')'
                            .'|\\-payment\\-methods/delete\\-logo/([^/]++)(*:2804)'
                        .')'
                    .')'
                    .'|pi/v2(?'
                        .'|/(?'
                            .'|docs(?:\\.([^/]++))?(*:2846)'
                            .'|\\.well\\-known/genid/([^/]++)(*:2883)'
                            .'|validation_errors/([^/]++)(*:2918)'
                        .')'
                        .'|(?:/(index)(?:\\.([^/]++))?)?(*:2956)'
                        .'|/(?'
                            .'|contexts/([^.]+)(?:\\.(jsonld))?(*:3000)'
                            .'|errors/(\\d+)(?:\\.([^/]++))?(*:3036)'
                            .'|validation_errors/([^/]++)(?'
                                .'|(*:3074)'
                            .')'
                            .'|admin/(?'
                                .'|ad(?'
                                    .'|dress(?'
                                        .'|es/([^/]++)(?'
                                            .'|(*:3120)'
                                            .'|/log\\-entries(*:3142)'
                                        .')'
                                        .'|\\-log\\-entries/([^/\\.]++)(?:\\.([^/]++))?(*:3192)'
                                    .')'
                                    .'|justments/([^/]++)(*:3220)'
                                    .'|ministrators(?'
                                        .'|(?:\\.([^/]++))?(*:3259)'
                                        .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                            .'|(*:3297)'
                                        .')'
                                        .'|(?:\\.([^/]++))?(*:3322)'
                                        .'|/(?'
                                            .'|([^/\\.]++)(?:\\.([^/]++))?(*:3360)'
                                            .'|reset\\-password(?'
                                                .'|(*:3387)'
                                                .'|/([^/]++)(*:3405)'
                                            .')'
                                            .'|([^/]++)/avatar\\-image(?'
                                                .'|(*:3440)'
                                            .')'
                                            .'|token(*:3455)'
                                        .')'
                                    .')'
                                .')'
                                .'|order(?'
                                    .'|s/([^/]++)(?'
                                        .'|/(?'
                                            .'|adjustments(*:3503)'
                                            .'|resend\\-confirmation\\-email(*:3539)'
                                            .'|cancel(*:3554)'
                                            .'|payments(*:3571)'
                                            .'|shipments(*:3589)'
                                        .')'
                                        .'|(*:3599)'
                                    .')'
                                    .'|\\-item(?'
                                        .'|s/([^/]++)(?'
                                            .'|/adjustments(*:3643)'
                                            .'|(*:3652)'
                                        .')'
                                        .'|\\-units/([^/]++)(?'
                                            .'|/adjustments(*:3693)'
                                            .'|(*:3702)'
                                        .')'
                                    .')'
                                .')'
                                .'|sh(?'
                                    .'|ip(?'
                                        .'|ments/([^/]++)(?'
                                            .'|/(?'
                                                .'|adjustments(*:3756)'
                                                .'|resend\\-confirmation\\-email(*:3792)'
                                                .'|ship(*:3805)'
                                            .')'
                                            .'|(*:3815)'
                                        .')'
                                        .'|ping\\-(?'
                                            .'|categories/([^/]++)(?'
                                                .'|(*:3856)'
                                            .')'
                                            .'|method(?'
                                                .'|s/([^/]++)(?'
                                                    .'|(*:3888)'
                                                    .'|/(?'
                                                        .'|archive(*:3908)'
                                                        .'|restore(*:3924)'
                                                        .'|translations/([^/]++)(*:3954)'
                                                    .')'
                                                    .'|(*:3964)'
                                                .')'
                                                .'|\\-rules/([^/\\.]++)(?:\\.([^/]++))?(*:4007)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|op\\-users/([^/]++)(*:4037)'
                                .')'
                                .'|c(?'
                                    .'|atalog\\-promotions/([^/]++)(?'
                                        .'|(*:4081)'
                                        .'|/(?'
                                            .'|actions/([^/]++)(*:4110)'
                                            .'|scopes/([^/]++)(*:4134)'
                                            .'|translations/([^/]++)(*:4164)'
                                        .')'
                                    .')'
                                    .'|hannel(?'
                                        .'|s/([^/]++)(?'
                                            .'|(*:4197)'
                                        .')'
                                        .'|\\-pricing\\-log\\-entries/([^/]++)(*:4239)'
                                    .')'
                                    .'|ountries/([^/]++)(?'
                                        .'|(*:4269)'
                                        .'|/provinces(?'
                                            .'|/([^/]++)(?'
                                                .'|(*:4303)'
                                            .')'
                                            .'|(*:4313)'
                                        .')'
                                    .')'
                                    .'|u(?'
                                        .'|rrencies/([^/]++)(*:4345)'
                                        .'|stomer(?'
                                            .'|s/([^/]++)(?'
                                                .'|(*:4376)'
                                                .'|/(?'
                                                    .'|statistics(*:4399)'
                                                    .'|user(*:4412)'
                                                .')'
                                                .'|(*:4422)'
                                            .')'
                                            .'|\\-groups/([^/]++)(?'
                                                .'|(*:4452)'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                                .'|p(?'
                                    .'|ro(?'
                                        .'|duct(?'
                                            .'|\\-(?'
                                                .'|variants/([^/]++)(?'
                                                    .'|/(?'
                                                        .'|channel\\-pricings/([^/]++)(*:4536)'
                                                        .'|translations/([^/]++)(*:4566)'
                                                    .')'
                                                    .'|(*:4576)'
                                                .')'
                                                .'|a(?'
                                                    .'|ssociation(?'
                                                        .'|s/([^/]++)(?'
                                                            .'|(*:4616)'
                                                        .')'
                                                        .'|\\-types/([^/]++)(?'
                                                            .'|(*:4645)'
                                                            .'|/translations/([^/]++)(*:4676)'
                                                        .')'
                                                    .')'
                                                    .'|ttribute(?'
                                                        .'|s/([^/]++)(?'
                                                            .'|(*:4711)'
                                                            .'|/translations/([^/]++)(*:4742)'
                                                        .')'
                                                        .'|\\-values/([^/]++)(*:4769)'
                                                    .')'
                                                .')'
                                                .'|option(?'
                                                    .'|s/([^/]++)(?'
                                                        .'|(*:4802)'
                                                        .'|/(?'
                                                            .'|translations/([^/]++)(*:4836)'
                                                            .'|values(?'
                                                                .'|/([^/]++)(*:4863)'
                                                                .'|(*:4872)'
                                                            .')'
                                                        .')'
                                                    .')'
                                                    .'|\\-values/([^/]++)/translations/([^/]++)(*:4923)'
                                                .')'
                                                .'|reviews/([^/]++)(?'
                                                    .'|(*:4952)'
                                                    .'|/(?'
                                                        .'|accept(*:4971)'
                                                        .'|reject(*:4986)'
                                                    .')'
                                                    .'|(*:4996)'
                                                .')'
                                                .'|taxons/([^/]++)(?'
                                                    .'|(*:5024)'
                                                .')'
                                            .')'
                                            .'|s/([^/]++)(?'
                                                .'|(*:5048)'
                                                .'|/(?'
                                                    .'|images(?'
                                                        .'|(*:5070)'
                                                        .'|/([^/]++)(?'
                                                            .'|(*:5091)'
                                                        .')'
                                                        .'|(*:5101)'
                                                    .')'
                                                    .'|translations/([^/]++)(*:5132)'
                                                .')'
                                            .')'
                                        .')'
                                        .'|motions/([^/]++)(?'
                                            .'|(*:5163)'
                                            .'|/(?'
                                                .'|a(?'
                                                    .'|rchive(*:5186)'
                                                    .'|ctions/([^/]++)(*:5210)'
                                                .')'
                                                .'|r(?'
                                                    .'|estore(*:5230)'
                                                    .'|ules/([^/]++)(*:5252)'
                                                .')'
                                                .'|coupons(?'
                                                    .'|(*:5272)'
                                                    .'|/(?'
                                                        .'|([^/]++)(*:5293)'
                                                        .'|generate(*:5310)'
                                                        .'|([^/]++)(?'
                                                            .'|(*:5330)'
                                                        .')'
                                                    .')'
                                                    .'|(*:5341)'
                                                .')'
                                                .'|translations/([^/]++)(*:5372)'
                                            .')'
                                            .'|(*:5382)'
                                        .')'
                                    .')'
                                    .'|ayment(?'
                                        .'|s/([^/]++)(?'
                                            .'|(*:5415)'
                                            .'|/(?'
                                                .'|complete(*:5436)'
                                                .'|refund(*:5451)'
                                                .'|payment\\-requests(*:5477)'
                                            .')'
                                        .')'
                                        .'|\\-(?'
                                            .'|methods/([^/]++)(?'
                                                .'|(*:5512)'
                                                .'|/translations/([^/]++)(*:5543)'
                                            .')'
                                            .'|requests/([^/]++)(*:5570)'
                                        .')'
                                    .')'
                                .')'
                                .'|exchange\\-rates/([^/]++)(?'
                                    .'|(*:5609)'
                                .')'
                                .'|gateway\\-configs/([^/]++)(*:5644)'
                                .'|locales/([^/]++)(?'
                                    .'|(*:5672)'
                                .')'
                                .'|tax(?'
                                    .'|\\-(?'
                                        .'|categories/([^/]++)(?'
                                            .'|(*:5715)'
                                        .')'
                                        .'|rates/([^/]++)(?'
                                            .'|(*:5742)'
                                        .')'
                                    .')'
                                    .'|on(?'
                                        .'|s/([^/]++)(?'
                                            .'|(*:5771)'
                                            .'|/images(?'
                                                .'|(*:5790)'
                                                .'|/([^/]++)(?'
                                                    .'|(*:5811)'
                                                .')'
                                                .'|(*:5821)'
                                            .')'
                                        .')'
                                        .'|/([^/]++)/translations/([^/]++)(*:5863)'
                                    .')'
                                .')'
                                .'|zones/([^/]++)(?'
                                    .'|(*:5891)'
                                .')'
                            .')'
                            .'|shop/(?'
                                .'|a(?'
                                    .'|d(?'
                                        .'|dresses/([^/]++)(?'
                                            .'|(*:5937)'
                                        .')'
                                        .'|justments/([^/]++)(*:5965)'
                                    .')'
                                    .'|ccount/orders/([^/]++)/payments/([^/]++)(*:6015)'
                                .')'
                                .'|order(?'
                                    .'|s/([^/]++)(?'
                                        .'|/(?'
                                            .'|adjustments(*:6061)'
                                            .'|items(?'
                                                .'|/([^/]++)(?'
                                                    .'|/adjustments(*:6102)'
                                                    .'|(*:6111)'
                                                    .'|(*:6120)'
                                                .')'
                                                .'|(*:6130)'
                                            .')'
                                            .'|payment(?'
                                                .'|s/([^/]++)(?'
                                                    .'|/(?'
                                                        .'|configuration(*:6180)'
                                                        .'|methods(*:6196)'
                                                    .')'
                                                    .'|(*:6206)'
                                                .')'
                                                .'|\\-requests(*:6226)'
                                            .')'
                                            .'|shipments/([^/]++)(?'
                                                .'|(*:6257)'
                                                .'|/methods(*:6274)'
                                            .')'
                                            .'|complete(*:6292)'
                                        .')'
                                        .'|(*:6302)'
                                    .')'
                                    .'|\\-item\\-units/([^/]++)(*:6334)'
                                .')'
                                .'|c(?'
                                    .'|atalog\\-promotions/([^/]++)(*:6375)'
                                    .'|hannels/([^/]++)(*:6400)'
                                    .'|ountries/([^/]++)(?'
                                        .'|(*:6429)'
                                        .'|/provinces/([^/]++)(*:6457)'
                                    .')'
                                    .'|u(?'
                                        .'|rrencies/([^/]++)(*:6488)'
                                        .'|stomers/(?'
                                            .'|([^/]++)(?'
                                                .'|(*:6519)'
                                                .'|/password(*:6537)'
                                            .')'
                                            .'|reset\\-password(?'
                                                .'|(*:6565)'
                                                .'|/([^/]++)(*:6583)'
                                            .')'
                                            .'|verify(?'
                                                .'|(*:6602)'
                                                .'|/([^/]++)(*:6620)'
                                            .')'
                                            .'|token(*:6635)'
                                        .')'
                                    .')'
                                .')'
                                .'|exchange\\-rates/([^/]++)(*:6671)'
                                .'|locales/([^/]++)(*:6696)'
                                .'|p(?'
                                    .'|ayment\\-(?'
                                        .'|methods/([^/]++)(*:6736)'
                                        .'|requests/([^/]++)(?'
                                            .'|(*:6765)'
                                        .')'
                                    .')'
                                    .'|ro(?'
                                        .'|duct(?'
                                            .'|s(?'
                                                .'|/([^/]++)(?'
                                                    .'|(*:6804)'
                                                    .'|/(?'
                                                        .'|attributes(*:6827)'
                                                        .'|images(?'
                                                            .'|(*:6845)'
                                                            .'|/([^/]++)(*:6863)'
                                                        .')'
                                                    .')'
                                                .')'
                                                .'|\\-by\\-slug/([^/]++)(*:6894)'
                                            .')'
                                            .'|\\-(?'
                                                .'|a(?'
                                                    .'|ssociation(?'
                                                        .'|s/([^/]++)(*:6936)'
                                                        .'|\\-types/([^/]++)(*:6961)'
                                                    .')'
                                                    .'|ttribute(?'
                                                        .'|s/([^/]++)(*:6992)'
                                                        .'|\\-values/([^/]++)(*:7018)'
                                                    .')'
                                                .')'
                                                .'|options/([^/]++)(?'
                                                    .'|(*:7048)'
                                                    .'|/values/([^/]++)(*:7073)'
                                                .')'
                                                .'|reviews/([^/]++)(*:7099)'
                                                .'|taxons/([^/]++)(*:7123)'
                                                .'|variants/([^/]++)(*:7149)'
                                            .')'
                                        .')'
                                        .'|motion\\-coupons/([^/]++)(*:7184)'
                                    .')'
                                .')'
                                .'|sh(?'
                                    .'|ipping\\-methods/([^/]++)(*:7224)'
                                    .'|op\\-users/([^/]++)(*:7251)'
                                .')'
                                .'|taxon(?'
                                    .'|s(?'
                                        .'|/([^/]++)(?'
                                            .'|(*:7285)'
                                            .'|/images(?'
                                                .'|(*:7304)'
                                                .'|/([^/]++)(*:7322)'
                                            .')'
                                        .')'
                                        .'|\\-by\\-slug/(.+)(*:7348)'
                                    .')'
                                    .'|\\-tree/([^/]++)/(?'
                                        .'|branch(*:7383)'
                                        .'|path(*:7396)'
                                    .')'
                                .')'
                                .'|\\.well\\-known/genid/([^/\\.]++)(?:\\.([^/]++))?(*:7452)'
                            .')'
                            .'|\\.well\\-known/genid/([^/\\.]++)(?:\\.([^/]++))?(*:7507)'
                        .')'
                    .')'
                .')'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/(?'
                    .'|a(?'
                        .'|ccount/order/([^/]++)/subscription\\-mollie/cancel(*:7652)'
                        .'|pple\\-pay\\-payment(*:7679)'
                    .')'
                    .'|order/([^/]++)/subscription\\-mollie/cancel(*:7731)'
                    .'|payment\\-fee\\-calculate/([^/]++)/([^/]++)(*:7781)'
                    .'|no\\-payment\\-fee\\-calculate(*:7817)'
                    .'|mollie/apple\\-direct/(?'
                        .'|validation(*:7860)'
                        .'|complete(*:7877)'
                    .')'
                    .'|c(?'
                        .'|reate\\-payment(*:7905)'
                        .'|omplete\\-payment(*:7930)'
                    .')'
                    .'|get\\-code(*:7949)'
                    .'|remove\\-code(*:7970)'
                    .'|update\\-payment(*:7994)'
                    .'|thank\\-you(*:8013)'
                    .'|fetch\\-translations(*:8041)'
                .')'
                .'|/admin/(?'
                    .'|download/payouts\\-report/([^/]++)(*:8094)'
                    .'|enable\\-seller/([^/]++)(*:8126)'
                .')'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)(?'
                    .'|/(?'
                        .'|p(?'
                            .'|ay(?'
                                .'|\\-(?'
                                    .'|with\\-paypal/([^/]++)/([^/]++)(*:8263)'
                                    .'|pal\\-(?'
                                        .'|order\\-payment\\-page/([^/]++)/c(?'
                                            .'|reate(*:8319)'
                                            .'|omplete(*:8335)'
                                        .')'
                                        .'|payment\\-error(*:8359)'
                                    .')'
                                .')'
                                .'|pal\\-add\\-to\\-cart/([^/]++)(*:8397)'
                                .'|ment\\-request/pay/([^/]++)(*:8432)'
                            .')'
                            .'|ro(?'
                                .'|cess\\-pay\\-pal\\-order(*:8468)'
                                .'|ducts/([^/]++)(?'
                                    .'|(*:8494)'
                                    .'|/reviews(?'
                                        .'|(*:8514)'
                                        .'|/new(*:8527)'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|c(?'
                            .'|reate\\-pay\\-pal\\-order(?'
                                .'|/([^/]++)(*:8578)'
                                .'|\\-from\\-cart/([^/]++)(*:8608)'
                            .')'
                            .'|o(?'
                                .'|mplete\\-pay\\-pal\\-order/([^/]++)(*:8654)'
                                .'|ntact(*:8668)'
                            .')'
                            .'|a(?'
                                .'|ncel\\-pay\\-pal\\-(?'
                                    .'|order(*:8706)'
                                    .'|payment(*:8722)'
                                    .'|checkout\\-payment(*:8748)'
                                .')'
                                .'|rt(?'
                                    .'|(*:8763)'
                                    .'|/checkout(*:8781)'
                                .')'
                            .')'
                            .'|heckout(?'
                                .'|(*:8802)'
                                .'|/(?'
                                    .'|address(*:8822)'
                                    .'|select\\-(?'
                                        .'|shipping(*:8850)'
                                        .'|payment(*:8866)'
                                    .')'
                                    .'|complete(*:8884)'
                                .')'
                            .')'
                        .')'
                        .'|update\\-pay\\-pal\\-order(*:8919)'
                        .'|order/(?'
                            .'|([^/]++)/cancel\\-last\\-pay\\-pal\\-payment(*:8977)'
                            .'|thank\\-you(*:8996)'
                            .'|([^/]++)/pay(*:9017)'
                            .'|after\\-pay(?:/([^/]++))?(*:9050)'
                            .'|([^/]++)(*:9067)'
                        .')'
                        .'|_components/([^/]++)(?:/([^/]++))?(*:9111)'
                        .'|log(?'
                            .'|in(?'
                                .'|(*:9131)'
                                .'|\\-check(*:9147)'
                            .')'
                            .'|out(*:9160)'
                        .')'
                        .'|json\\-login\\-check(*:9188)'
                        .'|register(?'
                            .'|(*:9208)'
                            .'|\\-after\\-checkout/([^/]++)(*:9243)'
                            .'|/thank\\-you(*:9263)'
                        .')'
                        .'|forgotten\\-password(?'
                            .'|(*:9295)'
                            .'|/([^/]++)(*:9313)'
                        .')'
                        .'|verify(?'
                            .'|(*:9332)'
                            .'|/([^/]++)(*:9350)'
                        .')'
                        .'|taxons/(.+(?<!/))(*:9377)'
                        .'|account(?'
                            .'|/(?'
                                .'|_components/([^/]++)(?:/([^/]++))?(*:9434)'
                                .'|orders(?'
                                    .'|(*:9452)'
                                    .'|/([^/]++)(*:9470)'
                                .')'
                                .'|address\\-book(?'
                                    .'|(*:9496)'
                                    .'|/(?'
                                        .'|add(*:9512)'
                                        .'|([^/]++)(?'
                                            .'|/(?'
                                                .'|edit(*:9540)'
                                                .'|set\\-as\\-default(*:9565)'
                                            .')'
                                            .'|(*:9575)'
                                        .')'
                                    .')'
                                .')'
                                .'|dashboard(*:9596)'
                                .'|profile/edit(*:9617)'
                                .'|change\\-password(*:9642)'
                            .')'
                            .'|(*:9652)'
                        .')'
                        .'|switch\\-(?'
                            .'|currency/([^/]++)(*:9690)'
                            .'|locale/([^/]++)(*:9714)'
                        .')'
                    .')'
                    .'|(*:9725)'
                .')'
                .'|/payment(?'
                    .'|/(?'
                        .'|authorize/([^/]++)(*:9768)'
                        .'|capture/([^/]++)(*:9793)'
                        .'|notify/(?'
                            .'|unsafe/([^/]++)(*:9827)'
                            .'|([^/]++)(*:9844)'
                        .')'
                    .')'
                    .'|\\-(?'
                        .'|methods/([^/]++)(*:9876)'
                        .'|requests/([^/]++)(*:9902)'
                    .')'
                .')'
                .'|/_(?'
                    .'|wdt/([^/]++)(*:9930)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:9973)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:10011)'
                                .'|router(*:10027)'
                                .'|exception(?'
                                    .'|(*:10049)'
                                    .'|\\.css(*:10064)'
                                .')'
                            .')'
                            .'|(*:10076)'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        84 => [[['_route' => 'bazinga_jstranslation_js', '_controller' => 'bazinga.jstranslation.controller::getTranslationsAction', 'domain' => 'messages', '_format' => 'js'], ['domain', '_format'], ['GET' => 0], null, false, true, null]],
        145 => [[['_route' => 'liip_imagine_filter_runtime', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterRuntimeAction'], ['filter', 'hash', 'path'], ['GET' => 0], null, false, true, null]],
        171 => [[['_route' => 'liip_imagine_filter', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterAction'], ['filter', 'path'], ['GET' => 0], null, false, true, null]],
        219 => [[['_route' => 'sylius_admin_entity_autocomplete', '_controller' => 'ux.autocomplete.entity_autocomplete_controller'], ['alias'], null, null, false, true, null]],
        252 => [[['_route' => 'sylius_admin_impersonate_user', '_controller' => 'sylius_admin.controller.impersonate_user::impersonateAction', 'username' => '$username'], ['username'], null, null, false, true, null]],
        303 => [[['_route' => 'sylius_admin_live_component', '_live_action' => 'get'], ['_locale', '_live_component', '_live_action'], null, null, false, true, null]],
        336 => [[['_route' => 'sylius_admin_admin_user_update', '_controller' => 'sylius.controller.admin_user::updateAction', '_sylius' => ['form' => ['type' => 'Sylius\\Bundle\\AdminBundle\\Form\\Type\\AdminUserType'], 'section' => 'admin', 'template' => '@SyliusAdmin\\shared\\crud/update.html.twig', 'redirect' => 'sylius_admin_admin_user_index', 'permission' => true]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        358 => [[['_route' => 'sylius_admin_admin_user_remove_avatar', '_controller' => 'sylius_admin.controller.remove_avatar'], ['id'], ['PUT' => 0], null, false, false, null]],
        367 => [[['_route' => 'sylius_admin_admin_user_delete', '_controller' => 'sylius.controller.admin_user::deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true]], ['id'], ['DELETE' => 0], null, false, true, null]],
        418 => [[['_route' => 'sylius_admin_catalog_promotion_update', '_controller' => 'sylius.controller.catalog_promotion::updateAction', '_sylius' => ['form' => ['type' => 'Sylius\\Bundle\\AdminBundle\\Form\\Type\\CatalogPromotionType'], 'section' => 'admin', 'template' => '@SyliusAdmin\\shared\\crud/update.html.twig', 'redirect' => 'sylius_admin_catalog_promotion_update', 'permission' => true]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        426 => [[['_route' => 'sylius_admin_catalog_promotion_show', '_controller' => 'sylius.controller.catalog_promotion::showAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\shared\\crud/show.html.twig', 'permission' => true]], ['id'], ['GET' => 0], null, false, true, null]],
        447 => [[['_route' => 'sylius_admin_catalog_promotion_bulk_delete', '_controller' => 'sylius.controller.catalog_promotion::bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], [], ['DELETE' => 0], null, false, false, null]],
        475 => [[['_route' => 'sylius_admin_catalog_promotion_product_variant_index', '_controller' => 'sylius.controller.product_variant::indexAction', '_sylius' => ['section' => 'admin', 'grid' => 'sylius_admin_product_variant_with_catalog_promotion', 'template' => '@SyliusAdmin/catalog_promotion/product_variant/index.html.twig', 'permission' => true, 'vars' => ['catalogPromotion' => 'expr:service(\'sylius.repository.catalog_promotion\').find($id)']]], ['id'], ['GET' => 0], null, false, false, null]],
        483 => [[['_route' => 'sylius_admin_catalog_promotion_delete', '_controller' => 'sylius_admin.controller.remove_catalog_promotion', '_sylius' => ['section' => 'admin', 'permission' => true, 'alias' => 'catalog_promotion']], ['code'], ['DELETE' => 0], null, false, true, null]],
        517 => [[['_route' => 'sylius_admin_channel_update', '_controller' => 'sylius.controller.channel::updateAction', '_sylius' => ['form' => ['type' => 'Sylius\\Bundle\\AdminBundle\\Form\\Type\\ChannelType'], 'section' => 'admin', 'template' => '@SyliusAdmin\\shared\\crud/update.html.twig', 'redirect' => 'sylius_admin_channel_update', 'permission' => true]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        525 => [[['_route' => 'sylius_admin_channel_delete', '_controller' => 'sylius.controller.channel::deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true]], ['id'], ['DELETE' => 0], null, false, true, null]],
        556 => [[['_route' => 'sylius_admin_country_update', '_controller' => 'sylius.controller.country::updateAction', '_sylius' => ['form' => ['type' => 'Sylius\\Bundle\\AdminBundle\\Form\\Type\\CountryType'], 'section' => 'admin', 'template' => '@SyliusAdmin\\shared\\crud/update.html.twig', 'redirect' => 'sylius_admin_country_update', 'permission' => true]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        595 => [[['_route' => 'sylius_admin_customer_update', '_controller' => 'sylius.controller.customer::updateAction', '_sylius' => ['form' => ['type' => 'Sylius\\Bundle\\AdminBundle\\Form\\Type\\CustomerType'], 'section' => 'admin', 'template' => '@SyliusAdmin\\shared\\crud/update.html.twig', 'redirect' => 'sylius_admin_customer_update', 'permission' => true]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        603 => [[['_route' => 'sylius_admin_customer_show', '_controller' => 'sylius.controller.customer::showAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\shared\\crud/show.html.twig', 'permission' => true]], ['id'], ['GET' => 0], null, false, true, null]],
        624 => [[['_route' => 'sylius_admin_customer_bulk_delete', '_controller' => 'sylius.controller.customer::bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], [], ['DELETE' => 0], null, false, false, null]],
        647 => [[['_route' => 'sylius_admin_customer_order_index', '_controller' => 'sylius.controller.order::indexAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'template' => '@SyliusAdmin/shared/crud/index.html.twig', 'grid' => 'sylius_admin_customer_order']], ['id'], ['GET' => 0], null, false, false, null]],
        681 => [[['_route' => 'sylius_admin_customer_group_update', '_controller' => 'sylius.controller.customer_group::updateAction', '_sylius' => ['form' => ['type' => 'Sylius\\Bundle\\AdminBundle\\Form\\Type\\CustomerGroupType'], 'section' => 'admin', 'template' => '@SyliusAdmin\\shared\\crud/update.html.twig', 'redirect' => 'sylius_admin_customer_group_update', 'permission' => true]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        689 => [[['_route' => 'sylius_admin_customer_group_delete', '_controller' => 'sylius.controller.customer_group::deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true]], ['id'], ['DELETE' => 0], null, false, true, null]],
        732 => [[['_route' => 'sylius_admin_exchange_rate_update', '_controller' => 'sylius.controller.exchange_rate::updateAction', '_sylius' => ['form' => ['type' => 'Sylius\\Bundle\\AdminBundle\\Form\\Type\\ExchangeRateType'], 'section' => 'admin', 'template' => '@SyliusAdmin\\shared\\crud/update.html.twig', 'redirect' => 'sylius_admin_exchange_rate_update', 'permission' => true]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        740 => [[['_route' => 'sylius_admin_exchange_rate_delete', '_controller' => 'sylius.controller.exchange_rate::deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true]], ['id'], ['DELETE' => 0], null, false, true, null]],
        765 => [[['_route' => 'sylius_admin_locale_delete', '_controller' => 'sylius.controller.locale::deleteAction', '_sylius' => ['section' => 'admin', 'redirect' => 'sylius_admin_locale_index', 'permission' => true]], ['id'], ['DELETE' => 0], null, false, true, null]],
        791 => [[['_route' => 'sylius_admin_order_show', '_controller' => 'sylius.controller.order::showAction', '_sylius' => ['section' => 'admin', 'repository' => ['method' => 'findOrderById', 'arguments' => ['$id']], 'permission' => true, 'template' => '@SyliusAdmin/shared/crud/show.html.twig']], ['id'], ['GET' => 0], null, false, true, null]],
        810 => [[['_route' => 'sylius_admin_order_history', '_controller' => 'sylius.controller.order::showAction', '_sylius' => ['section' => 'admin', 'repository' => ['method' => 'findOrderById', 'arguments' => ['$id']], 'permission' => true, 'template' => '@SyliusAdmin/order/history.html.twig']], ['id'], ['GET' => 0], null, false, false, null]],
        822 => [[['_route' => 'sylius_admin_order_update', '_controller' => 'sylius.controller.order::updateAction', '_sylius' => ['section' => 'admin', 'repository' => ['method' => 'findOrderById', 'arguments' => ['$id']], 'permission' => true, 'template' => '@SyliusAdmin/shared/crud/update.html.twig', 'form' => ['type' => 'Sylius\\Bundle\\AdminBundle\\Form\\Type\\OrderType', 'options' => ['validation_groups' => ['sylius_shipping_address_update']]]]], ['id'], ['GET' => 0, 'PUT' => 1], null, false, false, null]],
        836 => [[['_route' => 'sylius_admin_order_cancel', '_controller' => 'sylius.controller.order::applyStateMachineTransitionAction', '_sylius' => ['repository' => ['method' => 'findOrderById', 'arguments' => ['$id']], 'permission' => true, 'state_machine' => ['graph' => 'sylius_order', 'transition' => 'cancel'], 'redirect' => 'sylius_admin_order_show']], ['id'], ['PUT' => 0], null, false, false, null]],
        876 => [[['_route' => 'sylius_admin_order_payment_complete', '_controller' => 'sylius.controller.payment::applyStateMachineTransitionAction', '_sylius' => ['event' => 'complete', 'permission' => true, 'repository' => ['method' => 'findOneByOrderId', 'arguments' => ['id' => '$id', 'orderId' => '$orderId']], 'state_machine' => ['graph' => 'sylius_payment', 'transition' => 'complete'], 'redirect' => ['route' => 'sylius_admin_order_show', 'parameters' => ['id' => '$orderId']]]], ['orderId', 'id'], ['PUT' => 0], null, false, false, null]],
        890 => [[['_route' => 'sylius_admin_order_payment_refund', '_controller' => 'sylius.controller.payment::applyStateMachineTransitionAction', '_sylius' => ['permission' => true, 'repository' => ['method' => 'findOneByOrderId', 'arguments' => ['id' => '$id', 'orderId' => '$orderId']], 'state_machine' => ['graph' => 'sylius_payment', 'transition' => 'refund'], 'redirect' => ['route' => 'sylius_admin_order_show', 'parameters' => ['id' => '$orderId']], 'flash' => 'sylius.payment.refunded']], ['orderId', 'id'], ['PUT' => 0], null, false, false, null]],
        905 => [[['_route' => 'sylius_mollie_admin_payment_link_generate', '_controller' => 'sylius_mollie.controller.admin.generate_payment_link', '_sylius' => ['section' => 'admin', 'permission' => true]], ['orderNumber'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        936 => [[['_route' => 'sylius_admin_order_shipment_ship', '_controller' => 'sylius.controller.shipment::updateAction', '_sylius' => ['event' => 'ship', 'repository' => ['method' => 'findOneByOrderId', 'arguments' => ['id' => '$id', 'orderId' => '$orderId']], 'state_machine' => ['graph' => 'sylius_shipment', 'transition' => 'ship'], 'redirect' => ['route' => 'sylius_admin_order_show', 'parameters' => ['id' => '$orderId']], 'section' => 'admin', 'permission' => true, 'form' => 'Sylius\\Bundle\\AdminBundle\\Form\\Type\\ShipmentShipType', 'vars' => ['route' => ['parameters' => ['orderId' => '$orderId', 'id' => '$id']]]]], ['orderId', 'id'], ['PUT' => 0], null, false, false, null]],
        971 => [[['_route' => 'sylius_admin_order_resend_confirmation_email', '_controller' => 'sylius_admin.controller.resend_order_confirmation_email'], ['id'], ['GET' => 0], null, false, false, null]],
        1016 => [[['_route' => 'sylius_admin_payment_complete', '_controller' => 'sylius.controller.payment::applyStateMachineTransitionAction', '_sylius' => ['event' => 'complete', 'section' => 'admin', 'permission' => true, 'state_machine' => ['graph' => 'sylius_payment', 'transition' => 'complete'], 'redirect' => 'sylius_admin_payment_index', 'flash' => 'sylius.payment.completed']], ['id'], ['PUT' => 0], null, false, false, null]],
        1045 => [[['_route' => 'sylius_admin_payment_request_index', '_controller' => 'sylius.controller.payment_request::indexAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'template' => '@SyliusAdmin/shared/crud/index.html.twig', 'grid' => 'sylius_admin_payment_request']], ['paymentId'], ['GET' => 0], null, true, false, null]],
        1063 => [[['_route' => 'sylius_admin_payment_request_show', '_controller' => 'sylius.controller.payment_request::showAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'template' => '@SyliusAdmin/shared/crud/show.html.twig', 'repository' => ['method' => 'findOneByPaymentId', 'arguments' => ['hash' => '$hash', 'paymentId' => '$paymentId']]]], ['paymentId', 'hash'], ['GET' => 0], null, false, true, null]],
        1103 => [[['_route' => 'sylius_admin_payment_method_update', '_controller' => 'sylius.controller.payment_method::updateAction', '_sylius' => ['form' => ['type' => 'Sylius\\Bundle\\AdminBundle\\Form\\Type\\PaymentMethodType'], 'section' => 'admin', 'template' => '@SyliusAdmin\\shared\\crud/update.html.twig', 'redirect' => 'sylius_admin_payment_method_update', 'permission' => true]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        1112 => [[['_route' => 'sylius_admin_payment_method_delete', '_controller' => 'sylius.controller.payment_method::deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true]], ['id'], ['DELETE' => 0], null, false, true, null]],
        1134 => [[['_route' => 'sylius_admin_payment_method_create', '_controller' => 'sylius.controller.payment_method::createAction', '_sylius' => ['section' => 'admin', 'factory' => ['method' => 'createWithGateway', 'arguments' => ['gatewayFactory' => '$factory']], 'form' => ['type' => 'Sylius\\Bundle\\AdminBundle\\Form\\Type\\PaymentMethodType'], 'template' => '@SyliusAdmin/shared/crud/create.html.twig', 'redirect' => 'sylius_admin_payment_method_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_payment_methods_available_to_your_customers', 'templates' => ['form' => '@SyliusAdmin/PaymentMethod/_form.html.twig'], 'route' => ['parameters' => ['factory' => '$factory']]]]], ['factory'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1160 => [[['_route' => 'payum_refund_do', '_controller' => 'Payum\\Bundle\\PayumBundle\\Controller\\RefundController::doAction'], ['payum_token'], null, null, false, true, null]],
        1203 => [[['_route' => 'sylius_admin_product_update', '_controller' => 'sylius.controller.product::updateAction', '_sylius' => ['form' => ['type' => 'Sylius\\Bundle\\AdminBundle\\Form\\Type\\ProductType'], 'section' => 'admin', 'template' => '@SyliusAdmin\\shared\\crud/update.html.twig', 'redirect' => 'sylius_admin_product_update', 'permission' => true]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        1212 => [[['_route' => 'sylius_admin_product_show', '_controller' => 'sylius.controller.product::showAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\shared\\crud/show.html.twig', 'permission' => true]], ['id'], ['GET' => 0], null, false, true, null]],
        1234 => [[['_route' => 'sylius_admin_product_bulk_delete', '_controller' => 'sylius.controller.product::bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], [], ['DELETE' => 0], null, false, false, null]],
        1254 => [[['_route' => 'sylius_admin_product_delete', '_controller' => 'sylius.controller.product::deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true]], ['id'], ['DELETE' => 0], null, false, true, null]],
        1287 => [[['_route' => 'sylius_admin_product_variant_generate', '_controller' => 'sylius.controller.product::updateAction', '_sylius' => ['template' => '@SyliusAdmin/product/generate_variants.html.twig', 'section' => 'admin', 'permission' => true, 'redirect' => ['route' => 'sylius_admin_product_variant_index', 'parameters' => ['productId' => '$productId']], 'form' => ['type' => 'Sylius\\Bundle\\AdminBundle\\Form\\Type\\ProductGenerateVariantsType'], 'repository' => ['method' => 'find', 'arguments' => ['$productId']], 'flash' => 'sylius.product_variant.generate']], ['productId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1361 => [[['_route' => 'sylius_admin_channel_pricing_log_entry_index', '_controller' => 'sylius.controller.channel_pricing_log_entry::indexAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'template' => '@SyliusAdmin/channel_pricing_log_entry/index.html.twig', 'grid' => 'sylius_admin_channel_pricing_log_entry', 'vars' => ['product_variant' => 'expr:service(\'sylius.repository.product_variant\').find($variantId)']]], ['productId', 'variantId', 'channelPricingId'], ['GET' => 0], null, false, false, null]],
        1373 => [[['_route' => 'sylius_admin_product_variant_create', '_controller' => 'sylius.controller.product_variant::createAction', '_sylius' => ['factory' => ['method' => 'createForProduct', 'arguments' => ['expr:notFoundOnNull(service(\'sylius.repository.product\').find($productId))']], 'template' => '@SyliusAdmin/shared/crud/create.html.twig', 'grid' => 'sylius_admin_product_variant', 'form' => ['type' => 'Sylius\\Bundle\\AdminBundle\\Form\\Type\\ProductVariantType'], 'section' => 'admin', 'redirect' => ['route' => 'sylius_admin_product_variant_index', 'parameters' => ['productId' => '$productId']], 'permission' => true, 'vars' => ['route' => ['parameters' => ['productId' => '$productId']]]]], ['productId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1395 => [[['_route' => 'sylius_admin_product_variant_update', '_controller' => 'sylius.controller.product_variant::updateAction', '_sylius' => ['template' => '@SyliusAdmin/shared/crud/update.html.twig', 'grid' => 'sylius_admin_product_variant', 'form' => ['type' => 'Sylius\\Bundle\\AdminBundle\\Form\\Type\\ProductVariantType'], 'section' => 'admin', 'redirect' => ['route' => 'sylius_admin_product_variant_index', 'parameters' => ['productId' => '$productId']], 'permission' => true, 'repository' => ['method' => 'findOneByIdAndProductId', 'arguments' => ['id' => '$id', 'productId' => '$productId']], 'vars' => ['route' => ['parameters' => ['id' => '$id', 'productId' => '$productId']]]]], ['productId', 'id'], ['GET' => 0, 'PUT' => 1], null, false, false, null]],
        1416 => [[['_route' => 'sylius_admin_product_variant_bulk_delete', '_controller' => 'sylius.controller.product_variant::bulkDeleteAction', '_sylius' => ['section' => 'admin', 'redirect' => ['route' => 'sylius_admin_product_variant_index', 'parameters' => ['productId' => '$productId']], 'permission' => true, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], ['productId'], ['DELETE' => 0], null, false, false, null]],
        1433 => [[['_route' => 'sylius_admin_product_variant_delete', '_controller' => 'sylius.controller.product_variant::deleteAction', '_sylius' => ['section' => 'admin', 'redirect' => ['route' => 'sylius_admin_product_variant_index', 'parameters' => ['productId' => '$productId']], 'permission' => true, 'repository' => ['method' => 'findOneByIdAndProductId', 'arguments' => ['id' => '$id', 'productId' => '$productId']]]], ['productId', 'id'], ['DELETE' => 0], null, false, true, null]],
        1443 => [[['_route' => 'sylius_admin_product_variant_index', '_controller' => 'sylius.controller.product_variant::indexAction', '_sylius' => ['template' => '@SyliusAdmin/shared/crud/index.html.twig', 'grid' => 'sylius_admin_product_variant', 'section' => 'admin', 'permission' => true, 'vars' => ['product' => 'expr:service(\'sylius.repository.product\').find($productId)', 'route' => ['parameters' => ['productId' => '$productId']]]]], ['productId'], ['GET' => 0], null, true, false, null]],
        1498 => [[['_route' => 'sylius_admin_product_association_type_update', '_controller' => 'sylius.controller.product_association_type::updateAction', '_sylius' => ['form' => ['type' => 'Sylius\\Bundle\\AdminBundle\\Form\\Type\\ProductAssociationTypeType'], 'section' => 'admin', 'template' => '@SyliusAdmin\\shared\\crud/update.html.twig', 'redirect' => 'sylius_admin_product_association_type_update', 'permission' => true]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        1507 => [[['_route' => 'sylius_admin_product_association_type_delete', '_controller' => 'sylius.controller.product_association_type::deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true]], ['id'], ['DELETE' => 0], null, false, true, null]],
        1546 => [[['_route' => 'sylius_admin_product_attribute_update', '_controller' => 'sylius.controller.product_attribute::updateAction', '_sylius' => ['form' => ['type' => 'Sylius\\Bundle\\AdminBundle\\Form\\Type\\ProductAttributeType'], 'section' => 'admin', 'template' => '@SyliusAdmin\\shared\\crud/update.html.twig', 'redirect' => 'sylius_admin_product_attribute_update', 'permission' => true]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        1558 => [[['_route' => 'sylius_admin_product_attribute_create', '_controller' => 'sylius.controller.product_attribute::createAction', '_sylius' => ['section' => 'admin', 'factory' => ['method' => 'createTyped', 'arguments' => ['type' => '$type']], 'form' => ['type' => 'Sylius\\Bundle\\AdminBundle\\Form\\Type\\ProductAttributeType'], 'template' => '@SyliusAdmin/shared/crud/create.html.twig', 'redirect' => 'sylius_admin_product_attribute_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_attributes_of_your_products', 'route' => ['parameters' => ['type' => '$type']]]]], ['type'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1568 => [[['_route' => 'sylius_admin_product_attribute_delete', '_controller' => 'sylius.controller.product_attribute::deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true]], ['id'], ['DELETE' => 0], null, false, true, null]],
        1603 => [[['_route' => 'sylius_admin_product_option_update', '_controller' => 'sylius.controller.product_option::updateAction', '_sylius' => ['form' => ['type' => 'Sylius\\Bundle\\AdminBundle\\Form\\Type\\ProductOptionType'], 'section' => 'admin', 'template' => '@SyliusAdmin\\shared\\crud/update.html.twig', 'redirect' => 'sylius_admin_product_option_update', 'permission' => true]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        1612 => [[['_route' => 'sylius_admin_product_option_delete', '_controller' => 'sylius.controller.product_option::deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true]], ['id'], ['DELETE' => 0], null, false, true, null]],
        1649 => [[['_route' => 'sylius_admin_product_review_update', '_controller' => 'sylius.controller.product_review::updateAction', '_sylius' => ['form' => ['type' => 'Sylius\\Bundle\\AdminBundle\\Form\\Type\\ProductReviewType'], 'section' => 'admin', 'template' => '@SyliusAdmin\\shared\\crud/update.html.twig', 'redirect' => 'sylius_admin_product_review_update', 'permission' => true]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        1658 => [[['_route' => 'sylius_admin_product_review_delete', '_controller' => 'sylius.controller.product_review::deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true]], ['id'], ['DELETE' => 0], null, false, true, null]],
        1687 => [[['_route' => 'sylius_admin_product_review_accept', '_controller' => 'sylius.controller.product_review::applyStateMachineTransitionAction', '_sylius' => ['permission' => true, 'state_machine' => ['graph' => 'sylius_product_review', 'transition' => 'accept'], 'redirect' => 'sylius_admin_product_review_index', 'flash' => 'sylius.review.accept']], ['id'], ['PUT' => 0], null, false, false, null]],
        1702 => [[['_route' => 'sylius_admin_product_review_reject', '_controller' => 'sylius.controller.product_review::applyStateMachineTransitionAction', '_sylius' => ['permission' => true, 'state_machine' => ['graph' => 'sylius_product_review', 'transition' => 'reject'], 'redirect' => 'sylius_admin_product_review_index', 'flash' => 'sylius.review.reject']], ['id'], ['PUT' => 0], null, false, false, null]],
        1735 => [[['_route' => 'sylius_mollie_admin_product_type_update', '_controller' => 'sylius_mollie.controller.product_type::updateAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\shared\\crud/update.html.twig', 'redirect' => 'sylius_mollie_admin_product_type_index', 'permission' => true]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        1744 => [[['_route' => 'sylius_mollie_admin_product_type_delete', '_controller' => 'sylius_mollie.controller.product_type::deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true]], ['id'], ['DELETE' => 0], null, false, true, null]],
        1783 => [[['_route' => 'sylius_admin_promotion_update', '_controller' => 'sylius.controller.promotion::updateAction', '_sylius' => ['form' => ['type' => 'Sylius\\Bundle\\AdminBundle\\Form\\Type\\PromotionType'], 'section' => 'admin', 'template' => '@SyliusAdmin\\shared\\crud/update.html.twig', 'redirect' => 'sylius_admin_promotion_update', 'permission' => true]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        1799 => [[['_route' => 'sylius_admin_promotion_archive', '_controller' => 'sylius.controller.promotion::updateAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'form' => ['type' => 'Sylius\\Bundle\\ResourceBundle\\Form\\Type\\ArchivableType'], 'redirect' => ['route' => 'sylius_admin_promotion_index', 'parameters' => []]]], ['id'], ['PATCH' => 0], null, false, false, null]],
        1818 => [[['_route' => 'sylius_admin_promotion_coupon_index', '_controller' => 'sylius.controller.promotion_coupon::indexAction', '_sylius' => ['template' => '@SyliusAdmin/shared/crud/index.html.twig', 'grid' => 'sylius_admin_promotion_coupon', 'section' => 'admin', 'permission' => true, 'vars' => ['promotion' => 'expr:service(\'sylius.repository.promotion\').find($promotionId)']]], ['promotionId'], ['GET' => 0], null, true, false, null]],
        1834 => [[['_route' => 'sylius_admin_promotion_coupon_create', '_controller' => 'sylius.controller.promotion_coupon::createAction', '_sylius' => ['factory' => ['method' => 'createForPromotion', 'arguments' => ['expr:notFoundOnNull(service(\'sylius.repository.promotion\').find($promotionId))']], 'template' => '@SyliusAdmin/shared/crud/create.html.twig', 'grid' => 'sylius_admin_promotion_coupon', 'form' => ['type' => 'Sylius\\Bundle\\AdminBundle\\Form\\Type\\PromotionCouponType'], 'section' => 'admin', 'redirect' => ['route' => 'sylius_admin_promotion_coupon_index', 'parameters' => ['promotionId' => '$promotionId']], 'permission' => true, 'vars' => ['route' => ['parameters' => ['promotionId' => '$promotionId']]]]], ['promotionId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1856 => [[['_route' => 'sylius_admin_promotion_coupon_update', '_controller' => 'sylius.controller.promotion_coupon::updateAction', '_sylius' => ['template' => '@SyliusAdmin/shared/crud/update.html.twig', 'grid' => 'sylius_admin_promotion_coupon', 'form' => ['type' => 'Sylius\\Bundle\\AdminBundle\\Form\\Type\\PromotionCouponType'], 'section' => 'admin', 'redirect' => ['route' => 'sylius_admin_promotion_coupon_index', 'parameters' => ['promotionId' => '$promotionId']], 'permission' => true, 'vars' => ['route' => ['parameters' => ['id' => '$id', 'promotionId' => '$promotionId']]]]], ['promotionId', 'id'], ['GET' => 0, 'PUT' => 1], null, false, false, null]],
        1873 => [[['_route' => 'sylius_admin_promotion_coupon_generate', '_controller' => 'sylius.controller.promotion_coupon::generateAction', '_sylius' => ['template' => '@SyliusAdmin/promotion_coupon/generate.html.twig', 'form' => ['type' => 'Sylius\\Bundle\\AdminBundle\\Form\\Type\\PromotionCouponGeneratorInstructionType'], 'section' => 'admin', 'redirect' => ['route' => 'sylius_admin_promotion_coupon_index', 'parameters' => ['promotionId' => '$promotionId']], 'permission' => true, 'vars' => ['route' => ['parameters' => ['promotionId' => '$promotionId']]]]], ['promotionId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1894 => [[['_route' => 'sylius_admin_promotion_coupon_bulk_delete', '_controller' => 'sylius.controller.promotion_coupon::bulkDeleteAction', '_sylius' => ['section' => 'admin', 'redirect' => ['route' => 'sylius_admin_promotion_coupon_index', 'parameters' => ['promotionId' => '$promotionId']], 'permission' => true, 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], ['promotionId'], ['DELETE' => 0], null, false, false, null]],
        1911 => [[['_route' => 'sylius_admin_promotion_coupon_delete', '_controller' => 'sylius.controller.promotion_coupon::deleteAction', '_sylius' => ['section' => 'admin', 'redirect' => ['route' => 'sylius_admin_promotion_coupon_index', 'parameters' => ['promotionId' => '$promotionId']], 'permission' => true]], ['promotionId', 'id'], ['DELETE' => 0], null, false, true, null]],
        1923 => [[['_route' => 'sylius_admin_promotion_delete', '_controller' => 'sylius.controller.promotion::deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true]], ['id'], ['DELETE' => 0], null, false, true, null]],
        1974 => [[['_route' => 'sylius_admin_product_taxon_index', '_controller' => 'sylius.controller.product_taxon::indexAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'grid' => 'sylius_admin_product_taxon', 'template' => '@SyliusAdmin/product_taxon/index.html.twig']], ['taxonId'], ['GET' => 0], null, true, false, null]],
        1996 => [[['_route' => 'sylius_admin_product_taxon_bulk_delete_products', '_controller' => 'sylius.controller.product::bulkDeleteAction', '_sylius' => ['section' => 'admin', 'redirect' => 'referer', 'permission' => true, 'paginate' => false, 'repository' => ['method' => 'findByProductTaxonIds', 'arguments' => ['$ids']]]], ['taxonId'], ['DELETE' => 0], null, false, false, null]],
        2010 => [[['_route' => 'sylius_admin_taxon_update', '_controller' => 'sylius.controller.taxon::updateAction', '_sylius' => ['form' => ['type' => 'Sylius\\Bundle\\AdminBundle\\Form\\Type\\TaxonType'], 'section' => 'admin', 'template' => '@SyliusAdmin\\shared\\crud/update.html.twig', 'redirect' => 'sylius_admin_taxon_update', 'permission' => true]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        2020 => [[['_route' => 'sylius_admin_taxon_delete', '_controller' => 'sylius.controller.taxon::deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true]], ['id'], ['DELETE' => 0], null, false, true, null]],
        2042 => [[['_route' => 'sylius_admin_taxon_create_for_parent', '_controller' => 'sylius.controller.taxon::createAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'template' => '@SyliusAdmin/shared/crud/create.html.twig', 'redirect' => 'sylius_admin_taxon_update', 'form' => ['type' => 'Sylius\\Bundle\\AdminBundle\\Form\\Type\\TaxonType'], 'factory' => ['method' => 'createForParent', 'arguments' => ['expr:notFoundOnNull(service("sylius.repository.taxon").find($id))']]]], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        2084 => [[['_route' => 'sylius_admin_tax_category_update', '_controller' => 'sylius.controller.tax_category::updateAction', '_sylius' => ['form' => ['type' => 'Sylius\\Bundle\\AdminBundle\\Form\\Type\\TaxCategoryType'], 'section' => 'admin', 'template' => '@SyliusAdmin\\shared\\crud/update.html.twig', 'redirect' => 'sylius_admin_tax_category_update', 'permission' => true]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        2093 => [[['_route' => 'sylius_admin_tax_category_delete', '_controller' => 'sylius.controller.tax_category::deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true]], ['id'], ['DELETE' => 0], null, false, true, null]],
        2125 => [[['_route' => 'sylius_admin_tax_rate_update', '_controller' => 'sylius.controller.tax_rate::updateAction', '_sylius' => ['form' => ['type' => 'Sylius\\Bundle\\AdminBundle\\Form\\Type\\TaxRateType'], 'section' => 'admin', 'template' => '@SyliusAdmin\\shared\\crud/update.html.twig', 'redirect' => 'sylius_admin_tax_rate_update', 'permission' => true]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        2134 => [[['_route' => 'sylius_admin_tax_rate_delete', '_controller' => 'sylius.controller.tax_rate::deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true]], ['id'], ['DELETE' => 0], null, false, true, null]],
        2177 => [
            [['_route' => 'sylius_admin_render_password_reset', '_controller' => 'sylius_admin.controller.account.render_reset_password_page'], ['token'], ['GET' => 0], null, false, true, null],
            [['_route' => 'sylius_admin_password_reset', '_controller' => 'sylius_admin.controller.account.reset_password'], ['token'], ['POST' => 0], null, false, true, null],
        ],
        2214 => [[['_route' => 'sylius_admin_shipment_show', '_controller' => 'sylius.controller.shipment::showAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\shared\\crud/show.html.twig', 'permission' => true]], ['id'], ['GET' => 0], null, false, true, null]],
        2231 => [[['_route' => 'sylius_admin_shipment_ship', '_controller' => 'sylius.controller.shipment::updateAction', '_sylius' => ['event' => 'ship', 'section' => 'admin', 'permission' => true, 'state_machine' => ['graph' => 'sylius_shipment', 'transition' => 'ship'], 'redirect' => 'sylius_admin_shipment_index', 'flash' => 'sylius.shipment.shipped', 'form' => 'Sylius\\Bundle\\AdminBundle\\Form\\Type\\ShipmentShipType']], ['id'], ['PUT' => 0], null, false, false, null]],
        2267 => [[['_route' => 'sylius_admin_shipment_resend_confirmation_email', '_controller' => 'sylius_admin.controller.resend_shipment_confirmation_email'], ['id'], ['GET' => 0], null, false, false, null]],
        2314 => [[['_route' => 'sylius_admin_shipping_category_update', '_controller' => 'sylius.controller.shipping_category::updateAction', '_sylius' => ['form' => ['type' => 'Sylius\\Bundle\\AdminBundle\\Form\\Type\\ShippingCategoryType'], 'section' => 'admin', 'template' => '@SyliusAdmin\\shared\\crud/update.html.twig', 'redirect' => 'sylius_admin_shipping_category_update', 'permission' => true]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        2323 => [[['_route' => 'sylius_admin_shipping_category_delete', '_controller' => 'sylius.controller.shipping_category::deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true]], ['id'], ['DELETE' => 0], null, false, true, null]],
        2360 => [[['_route' => 'sylius_admin_shipping_method_update', '_controller' => 'sylius.controller.shipping_method::updateAction', '_sylius' => ['form' => ['type' => 'Sylius\\Bundle\\AdminBundle\\Form\\Type\\ShippingMethodType'], 'section' => 'admin', 'template' => '@SyliusAdmin\\shared\\crud/update.html.twig', 'redirect' => 'sylius_admin_shipping_method_update', 'permission' => true]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        2376 => [[['_route' => 'sylius_admin_shipping_method_archive', '_controller' => 'sylius.controller.shipping_method::updateAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'form' => ['type' => 'Sylius\\Bundle\\ResourceBundle\\Form\\Type\\ArchivableType'], 'redirect' => ['route' => 'sylius_admin_shipping_method_index', 'parameters' => []]]], ['id'], ['PATCH' => 0], null, false, false, null]],
        2386 => [[['_route' => 'sylius_admin_shipping_method_delete', '_controller' => 'sylius.controller.shipping_method::deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true]], ['id'], ['DELETE' => 0], null, false, true, null]],
        2415 => [[['_route' => 'sylius_admin_shop_user_delete', '_controller' => 'sylius.controller.shop_user::deleteAction', '_sylius' => ['section' => 'admin', 'redirect' => ['route' => 'sylius_admin_customer_show', 'parameters' => ['id' => '$customerId']], 'permission' => true]], ['id'], ['DELETE' => 0], null, false, true, null]],
        2450 => [[['_route' => 'sylius_admin_zone_update', '_controller' => 'sylius.controller.zone::updateAction', '_sylius' => ['form' => ['type' => 'Sylius\\Bundle\\AdminBundle\\Form\\Type\\ZoneType'], 'section' => 'admin', 'template' => '@SyliusAdmin\\shared\\crud/update.html.twig', 'redirect' => 'sylius_admin_zone_update', 'permission' => true]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        2459 => [[['_route' => 'sylius_admin_zone_delete', '_controller' => 'sylius.controller.zone::deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true]], ['id'], ['DELETE' => 0], null, false, true, null]],
        2496 => [[['_route' => 'sylius_admin_zone_create', '_controller' => 'sylius.controller.zone::createAction', '_sylius' => ['section' => 'admin', 'factory' => ['method' => 'createTyped', 'arguments' => ['type' => '$type']], 'form' => ['type' => 'Sylius\\Bundle\\AdminBundle\\Form\\Type\\ZoneType'], 'template' => '@SyliusAdmin/shared/crud/create.html.twig', 'redirect' => 'sylius_admin_zone_update', 'permission' => true, 'vars' => ['route' => ['parameters' => ['type' => '$type']]]]], ['type'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2536 => [[['_route' => 'sylius_mollie_admin_mollie_methods', '_controller' => 'sylius_mollie.controller.admin.methods'], ['id'], ['GET' => 0], null, false, false, null]],
        2571 => [[['_route' => 'sylius_mollie_admin_mollie_logger_update', '_controller' => 'sylius_mollie.controller.mollie_logger::updateAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\shared\\crud/update.html.twig', 'redirect' => 'sylius_mollie_admin_mollie_logger_update', 'permission' => true, 'vars' => ['hook_prefix' => 'sylius_mollie.admin.logger']]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        2580 => [[['_route' => 'sylius_mollie_admin_mollie_logger_show', '_controller' => 'sylius_mollie.controller.mollie_logger::showAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\shared\\crud/show.html.twig', 'permission' => true, 'vars' => ['hook_prefix' => 'sylius_mollie.admin.logger']]], ['id'], ['GET' => 0], null, false, true, null]],
        2602 => [[['_route' => 'sylius_mollie_admin_mollie_logger_bulk_delete', '_controller' => 'sylius_mollie.controller.mollie_logger::bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['hook_prefix' => 'sylius_mollie.admin.logger'], 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], [], ['DELETE' => 0], null, false, false, null]],
        2619 => [[['_route' => 'sylius_mollie_admin_mollie_logger_delete', '_controller' => 'sylius_mollie.controller.mollie_logger::deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['hook_prefix' => 'sylius_mollie.admin.logger']]], ['id'], ['DELETE' => 0], null, false, true, null]],
        2661 => [[['_route' => 'sylius_mollie_admin_template_mollie_email_update', '_controller' => 'sylius_mollie.controller.template_mollie_email::updateAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\shared\\crud/update.html.twig', 'redirect' => 'sylius_mollie_admin_template_mollie_email_update', 'permission' => true, 'vars' => ['hook_prefix' => 'sylius_mollie.admin.email_template']]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        2670 => [[['_route' => 'sylius_mollie_admin_template_mollie_email_delete', '_controller' => 'sylius_mollie.controller.template_mollie_email::deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['hook_prefix' => 'sylius_mollie.admin.email_template']]], ['id'], ['DELETE' => 0], null, false, true, null]],
        2704 => [[['_route' => 'sylius_mollie_admin_mollie_subscription_show', '_controller' => 'sylius_mollie.controller.mollie_subscription::showAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\shared\\crud/show.html.twig', 'permission' => true]], ['id'], ['GET' => 0], null, false, true, null]],
        2723 => [[['_route' => 'sylius_mollie_admin_mollie_subscription_cancel', '_controller' => 'sylius_mollie.controller.admin.mollie_subscription::applyStateMachineTransitionAction', '_sylius' => ['permission' => true, 'state_machine' => ['graph' => 'mollie_subscription_payment_graph_manual', 'transition' => 'cancel'], 'redirect' => 'referer']], ['id'], ['PUT' => 0], null, false, false, null]],
        2737 => [[['_route' => 'sylius_mollie_admin_mollie_subscription_pause', '_controller' => 'sylius_mollie.controller.admin.mollie_subscription::applyStateMachineTransitionAction', '_sylius' => ['permission' => true, 'state_machine' => ['graph' => 'mollie_subscription_payment_graph_manual', 'transition' => 'pause'], 'redirect' => 'referer']], ['id'], ['PUT' => 0], null, false, false, null]],
        2752 => [[['_route' => 'sylius_mollie_admin_mollie_subscription_resume', '_controller' => 'sylius_mollie.controller.admin.mollie_subscription::applyStateMachineTransitionAction', '_sylius' => ['permission' => true, 'state_machine' => ['graph' => 'mollie_subscription_payment_graph_manual', 'transition' => 'resume'], 'redirect' => 'referer']], ['id'], ['PUT' => 0], null, false, false, null]],
        2804 => [[['_route' => 'sylius_mollie_admin_mollie_method_delete_logo', '_controller' => 'sylius_mollie.controller.admin.delete_payment_method_image'], ['methodName'], ['DELETE' => 0], null, false, true, null]],
        2846 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        2883 => [[['_route' => 'api_genid', '_controller' => 'api_platform.action.not_exposed', '_api_respond' => 'true'], ['id'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        2918 => [[['_route' => 'api_validation_errors', '_controller' => 'api_platform.action.not_exposed'], ['id'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        2956 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        3000 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        3036 => [[['_route' => '_api_errors', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'ApiPlatform\\State\\ApiResource\\Error', '_api_operation_name' => '_api_errors', '_format' => null], ['status', '_format'], ['GET' => 0], null, false, true, null]],
        3074 => [
            [['_route' => '_api_validation_errors_problem', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'ApiPlatform\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_problem', '_format' => null], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_validation_errors_hydra', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'ApiPlatform\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_hydra', '_format' => null], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_validation_errors_jsonapi', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'ApiPlatform\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_jsonapi', '_format' => null], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_validation_errors_xml', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'ApiPlatform\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_xml', '_format' => null], ['id'], ['GET' => 0], null, false, true, null],
        ],
        3120 => [
            [['_route' => 'sylius_api_admin_address_get', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Addressing\\Address', '_api_operation_name' => 'sylius_api_admin_address_get', '_format' => null], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'sylius_api_admin_address_put', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Addressing\\Address', '_api_operation_name' => 'sylius_api_admin_address_put', '_format' => null], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        3142 => [[['_route' => 'sylius_api_admin_address_address_log_entry_get_collection', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'Sylius\\Component\\Addressing\\Model\\AddressLogEntry', '_api_operation_name' => 'sylius_api_admin_address_address_log_entry_get_collection', '_format' => null], ['id'], ['GET' => 0], null, false, false, null]],
        3192 => [[['_route' => 'sylius_api_admin_address_log_entry_get', '_controller' => 'api_platform.action.not_exposed', '_stateless' => null, '_api_resource_class' => 'Sylius\\Component\\Addressing\\Model\\AddressLogEntry', '_api_operation_name' => 'sylius_api_admin_address_log_entry_get', '_format' => null], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        3220 => [[['_route' => 'sylius_api_admin_adjustment_get', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\Adjustment', '_api_operation_name' => 'sylius_api_admin_adjustment_get', '_format' => null], ['id'], ['GET' => 0], null, false, true, null]],
        3259 => [[['_route' => 'sylius_api_admin_admin_user_post', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User\\AdminUser', '_api_operation_name' => 'sylius_api_admin_admin_user_post', '_format' => null], ['_format'], ['POST' => 0], null, false, true, null]],
        3297 => [
            [['_route' => 'sylius_api_admin_admin_user_put', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User\\AdminUser', '_api_operation_name' => 'sylius_api_admin_admin_user_put', '_format' => null], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'sylius_api_admin_admin_user_delete', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User\\AdminUser', '_api_operation_name' => 'sylius_api_admin_admin_user_delete', '_format' => null], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        3322 => [[['_route' => 'sylius_api_admin_admin_user_get_collection', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User\\AdminUser', '_api_operation_name' => 'sylius_api_admin_admin_user_get_collection', '_format' => null], ['_format'], ['GET' => 0], null, false, true, null]],
        3360 => [[['_route' => 'sylius_api_admin_admin_user_get', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User\\AdminUser', '_api_operation_name' => 'sylius_api_admin_admin_user_get', '_format' => null], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        3387 => [[['_route' => 'sylius_api_admin_reset_password_post', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'Sylius\\Bundle\\ApiBundle\\Command\\Admin\\Account\\ResetPassword', '_api_operation_name' => 'sylius_api_admin_reset_password_post', '_format' => null], [], ['POST' => 0], null, false, false, null]],
        3405 => [[['_route' => 'sylius_api_admin_reset_password_patch', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'Sylius\\Bundle\\ApiBundle\\Command\\Admin\\Account\\ResetPassword', '_api_operation_name' => 'sylius_api_admin_reset_password_patch', '_format' => null], ['token'], ['PATCH' => 0], null, false, true, null]],
        3440 => [
            [['_route' => 'sylius_api_admin_admin_user_avatar_image_post', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User\\AvatarImage', '_api_operation_name' => 'sylius_api_admin_admin_user_avatar_image_post', '_format' => null], ['id'], ['POST' => 0], null, false, false, null],
            [['_route' => 'sylius_api_admin_admin_user_avatar_image_delete', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User\\AvatarImage', '_api_operation_name' => 'sylius_api_admin_admin_user_avatar_image_delete', '_format' => null], ['id'], ['DELETE' => 0], null, false, false, null],
            [['_route' => 'sylius_api_admin_admin_user_avatar_image_get', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User\\AvatarImage', '_api_operation_name' => 'sylius_api_admin_admin_user_avatar_image_get', '_format' => null], ['id'], ['GET' => 0], null, false, false, null],
        ],
        3455 => [[['_route' => 'sylius_api_admin_authentication_token'], [], ['POST' => 0], null, false, false, null]],
        3503 => [[['_route' => 'sylius_api_admin_order_adjustment_get_collection', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\Adjustment', '_api_operation_name' => 'sylius_api_admin_order_adjustment_get_collection', '_format' => null], ['tokenValue'], ['GET' => 0], null, false, false, null]],
        3539 => [[['_route' => 'sylius_api_admin_order_post_resend_confirmation_email', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\Order', '_api_operation_name' => 'sylius_api_admin_order_post_resend_confirmation_email', '_format' => null], ['tokenValue'], ['POST' => 0], null, false, false, null]],
        3554 => [[['_route' => 'sylius_api_admin_order_patch_cancel', '_controller' => 'sylius_api.applicator.order_state_machine_transition::cancel', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\Order', '_api_operation_name' => 'sylius_api_admin_order_patch_cancel', '_format' => null], ['tokenValue'], ['PATCH' => 0], null, false, false, null]],
        3571 => [[['_route' => 'sylius_api_admin_order_payment_get_collection', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Payment\\Payment', '_api_operation_name' => 'sylius_api_admin_order_payment_get_collection', '_format' => null], ['tokenValue'], ['GET' => 0], null, false, false, null]],
        3589 => [[['_route' => 'sylius_api_admin_order_shipment_get_collection', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Shipping\\Shipment', '_api_operation_name' => 'sylius_api_admin_order_shipment_get_collection', '_format' => null], ['tokenValue'], ['GET' => 0], null, false, false, null]],
        3599 => [[['_route' => 'sylius_api_admin_order_get', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\Order', '_api_operation_name' => 'sylius_api_admin_order_get', '_format' => null], ['tokenValue'], ['GET' => 0], null, false, true, null]],
        3643 => [[['_route' => 'sylius_api_admin_order_item_adjustment_get_collection', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\Adjustment', '_api_operation_name' => 'sylius_api_admin_order_item_adjustment_get_collection', '_format' => null], ['id'], ['GET' => 0], null, false, false, null]],
        3652 => [[['_route' => 'sylius_api_admin_order_item_get', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\OrderItem', '_api_operation_name' => 'sylius_api_admin_order_item_get', '_format' => null], ['id'], ['GET' => 0], null, false, true, null]],
        3693 => [[['_route' => 'sylius_api_admin_order_item_unit_adjustment_get_collection', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\Adjustment', '_api_operation_name' => 'sylius_api_admin_order_item_unit_adjustment_get_collection', '_format' => null], ['id'], ['GET' => 0], null, false, false, null]],
        3702 => [[['_route' => 'sylius_api_admin_order_item_unit_get', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\OrderItemUnit', '_api_operation_name' => 'sylius_api_admin_order_item_unit_get', '_format' => null], ['id'], ['GET' => 0], null, false, true, null]],
        3756 => [[['_route' => 'sylius_api_admin_shipment_adjustment_get_collection', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\Adjustment', '_api_operation_name' => 'sylius_api_admin_shipment_adjustment_get_collection', '_format' => null], ['id'], ['GET' => 0], null, false, false, null]],
        3792 => [[['_route' => 'sylius_api_admin_shipment_post_resend_confirmation_email', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Shipping\\Shipment', '_api_operation_name' => 'sylius_api_admin_shipment_post_resend_confirmation_email', '_format' => null], ['id'], ['POST' => 0], null, false, false, null]],
        3805 => [[['_route' => 'sylius_api_admin_shipment_patch_ship', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Shipping\\Shipment', '_api_operation_name' => 'sylius_api_admin_shipment_patch_ship', '_format' => null], ['id'], ['PATCH' => 0], null, false, false, null]],
        3815 => [[['_route' => 'sylius_api_admin_shipment_get', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Shipping\\Shipment', '_api_operation_name' => 'sylius_api_admin_shipment_get', '_format' => null], ['id'], ['GET' => 0], null, false, true, null]],
        3856 => [
            [['_route' => 'sylius_api_admin_shipping_category_get', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Shipping\\ShippingCategory', '_api_operation_name' => 'sylius_api_admin_shipping_category_get', '_format' => null], ['code'], ['GET' => 0], null, false, true, null],
            [['_route' => 'sylius_api_admin_shipping_category_put', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Shipping\\ShippingCategory', '_api_operation_name' => 'sylius_api_admin_shipping_category_put', '_format' => null], ['code'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'sylius_api_admin_shipping_category_delete', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Shipping\\ShippingCategory', '_api_operation_name' => 'sylius_api_admin_shipping_category_delete', '_format' => null], ['code'], ['DELETE' => 0], null, false, true, null],
        ],
        3888 => [
            [['_route' => 'sylius_api_admin_shipping_method_get', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Shipping\\ShippingMethod', '_api_operation_name' => 'sylius_api_admin_shipping_method_get', '_format' => null], ['code'], ['GET' => 0], null, false, true, null],
            [['_route' => 'sylius_api_admin_shipping_method_put', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Shipping\\ShippingMethod', '_api_operation_name' => 'sylius_api_admin_shipping_method_put', '_format' => null], ['code'], ['PUT' => 0], null, false, true, null],
        ],
        3908 => [[['_route' => 'sylius_api_admin_shipping_method_patch_archive', '_controller' => 'sylius_api.applicator.archiving_shipping_method::archive', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Shipping\\ShippingMethod', '_api_operation_name' => 'sylius_api_admin_shipping_method_patch_archive', '_format' => null], ['code'], ['PATCH' => 0], null, false, false, null]],
        3924 => [[['_route' => 'sylius_api_admin_shipping_method_patch_restore', '_controller' => 'sylius_api.applicator.archiving_shipping_method::restore', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Shipping\\ShippingMethod', '_api_operation_name' => 'sylius_api_admin_shipping_method_patch_restore', '_format' => null], ['code'], ['PATCH' => 0], null, false, false, null]],
        3954 => [[['_route' => 'sylius_api_admin_shipping_method_shipping_method_translation_get_collection', '_controller' => 'api_platform.action.not_exposed', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Shipping\\ShippingMethodTranslation', '_api_operation_name' => 'sylius_api_admin_shipping_method_shipping_method_translation_get_collection', '_format' => null], ['code', 'localeCode'], ['GET' => 0], null, false, true, null]],
        3964 => [[['_route' => 'sylius_api_admin_shipping_method_delete', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Shipping\\ShippingMethod', '_api_operation_name' => 'sylius_api_admin_shipping_method_delete', '_format' => null], ['code'], ['DELETE' => 0], null, false, true, null]],
        4007 => [[['_route' => 'sylius_api_admin_shipping_method_rule_get', '_controller' => 'api_platform.action.not_exposed', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Shipping\\ShippingMethodRule', '_api_operation_name' => 'sylius_api_admin_shipping_method_rule_get', '_format' => null], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        4037 => [[['_route' => 'sylius_api_admin_shop_user_get', '_controller' => 'api_platform.action.not_exposed', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User\\ShopUser', '_api_operation_name' => 'sylius_api_admin_shop_user_get', '_format' => null], ['id'], ['GET' => 0], null, false, true, null]],
        4081 => [
            [['_route' => 'sylius_api_admin_catalog_promotion_get', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Promotion\\CatalogPromotion', '_api_operation_name' => 'sylius_api_admin_catalog_promotion_get', '_format' => null], ['code'], ['GET' => 0], null, false, true, null],
            [['_route' => 'sylius_api_admin_catalog_promotion_put', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Promotion\\CatalogPromotion', '_api_operation_name' => 'sylius_api_admin_catalog_promotion_put', '_format' => null], ['code'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'sylius_api_admin_catalog_promotion_delete', '_controller' => 'sylius_api.controller.remove_catalog_promotion', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Promotion\\CatalogPromotion', '_api_operation_name' => 'sylius_api_admin_catalog_promotion_delete', '_format' => null], ['code'], ['DELETE' => 0], null, false, true, null],
        ],
        4110 => [[['_route' => 'sylius_api_admin_catalog_promotion_catalog_promotion_action_get', '_controller' => 'api_platform.action.not_exposed', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Promotion\\CatalogPromotionAction', '_api_operation_name' => 'sylius_api_admin_catalog_promotion_catalog_promotion_action_get', '_format' => null], ['code', 'id'], ['GET' => 0], null, false, true, null]],
        4134 => [[['_route' => 'sylius_api_admin_catalog_promotion_catalog_promotion_scope_get', '_controller' => 'api_platform.action.not_exposed', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Promotion\\CatalogPromotionScope', '_api_operation_name' => 'sylius_api_admin_catalog_promotion_catalog_promotion_scope_get', '_format' => null], ['code', 'id'], ['GET' => 0], null, false, true, null]],
        4164 => [[['_route' => 'sylius_api_admin_catalog_promotion_catalog_promotion_translation_get', '_controller' => 'api_platform.action.not_exposed', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Promotion\\CatalogPromotionTranslation', '_api_operation_name' => 'sylius_api_admin_catalog_promotion_catalog_promotion_translation_get', '_format' => null], ['code', 'localeCode'], ['GET' => 0], null, false, true, null]],
        4197 => [
            [['_route' => 'sylius_api_admin_channel_get', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Channel\\Channel', '_api_operation_name' => 'sylius_api_admin_channel_get', '_format' => null], ['code'], ['GET' => 0], null, false, true, null],
            [['_route' => 'sylius_api_admin_channel_put', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Channel\\Channel', '_api_operation_name' => 'sylius_api_admin_channel_put', '_format' => null], ['code'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'sylius_api_admin_channel_delete', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Channel\\Channel', '_api_operation_name' => 'sylius_api_admin_channel_delete', '_format' => null], ['code'], ['DELETE' => 0], null, false, true, null],
        ],
        4239 => [[['_route' => 'sylius_api_admin_channel_pricing_log_entry_get', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Channel\\ChannelPricingLogEntry', '_api_operation_name' => 'sylius_api_admin_channel_pricing_log_entry_get', '_format' => null], ['id'], ['GET' => 0], null, false, true, null]],
        4269 => [
            [['_route' => 'sylius_api_admin_country_get', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Addressing\\Country', '_api_operation_name' => 'sylius_api_admin_country_get', '_format' => null], ['code'], ['GET' => 0], null, false, true, null],
            [['_route' => 'sylius_api_admin_country_put', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Addressing\\Country', '_api_operation_name' => 'sylius_api_admin_country_put', '_format' => null], ['code'], ['PUT' => 0], null, false, true, null],
        ],
        4303 => [
            [['_route' => 'sylius_api_admin_country_province_get', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Addressing\\Province', '_api_operation_name' => 'sylius_api_admin_country_province_get', '_format' => null], ['countryCode', 'provinceCode'], ['GET' => 0], null, false, true, null],
            [['_route' => 'sylius_api_admin_country_province_put', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Addressing\\Province', '_api_operation_name' => 'sylius_api_admin_country_province_put', '_format' => null], ['countryCode', 'provinceCode'], ['PUT' => 0], null, false, true, null],
        ],
        4313 => [[['_route' => 'sylius_api_admin_country_province_get_collection', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Addressing\\Province', '_api_operation_name' => 'sylius_api_admin_country_province_get_collection', '_format' => null], ['code'], ['GET' => 0], null, false, false, null]],
        4345 => [[['_route' => 'sylius_api_admin_currency_get', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Currency\\Currency', '_api_operation_name' => 'sylius_api_admin_currency_get', '_format' => null], ['code'], ['GET' => 0], null, false, true, null]],
        4376 => [[['_route' => 'sylius_api_admin_customer_get', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Customer\\Customer', '_api_operation_name' => 'sylius_api_admin_customer_get', '_format' => null], ['id'], ['GET' => 0], null, false, true, null]],
        4399 => [[['_route' => 'sylius_api_admin_customer_get_statistics', '_controller' => 'sylius_api.controller.get_customer_statistics', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Customer\\Customer', '_api_operation_name' => 'sylius_api_admin_customer_get_statistics', '_format' => null], ['id'], ['GET' => 0], null, false, false, null]],
        4412 => [[['_route' => 'sylius_api_admin_customer_delete', '_controller' => 'sylius_api.controller.remove_customer_shop_user', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Customer\\Customer', '_api_operation_name' => 'sylius_api_admin_customer_delete', '_format' => null], ['id'], ['DELETE' => 0], null, false, false, null]],
        4422 => [[['_route' => 'sylius_api_admin_customer_put', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Customer\\Customer', '_api_operation_name' => 'sylius_api_admin_customer_put', '_format' => null], ['id'], ['PUT' => 0], null, false, true, null]],
        4452 => [
            [['_route' => 'sylius_api_admin_customer_group_get', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Customer\\CustomerGroup', '_api_operation_name' => 'sylius_api_admin_customer_group_get', '_format' => null], ['code'], ['GET' => 0], null, false, true, null],
            [['_route' => 'sylius_api_admin_customer_group_put', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Customer\\CustomerGroup', '_api_operation_name' => 'sylius_api_admin_customer_group_put', '_format' => null], ['code'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'sylius_api_admin_customer_group_delete', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Customer\\CustomerGroup', '_api_operation_name' => 'sylius_api_admin_customer_group_delete', '_format' => null], ['code'], ['DELETE' => 0], null, false, true, null],
        ],
        4536 => [[['_route' => 'sylius_api_admin_product_variant_channel_pricing_get', '_controller' => 'api_platform.action.not_exposed', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Channel\\ChannelPricing', '_api_operation_name' => 'sylius_api_admin_product_variant_channel_pricing_get', '_format' => null], ['code', 'channelCode'], ['GET' => 0], null, false, true, null]],
        4566 => [[['_route' => 'sylius_api_admin_product_variant_product_variant_translation_get_collection', '_controller' => 'api_platform.action.not_exposed', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductVariantTranslation', '_api_operation_name' => 'sylius_api_admin_product_variant_product_variant_translation_get_collection', '_format' => null], ['code', 'localeCode'], ['GET' => 0], null, false, true, null]],
        4576 => [
            [['_route' => 'sylius_api_admin_product_variant_get', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductVariant', '_api_operation_name' => 'sylius_api_admin_product_variant_get', '_format' => null], ['code'], ['GET' => 0], null, false, true, null],
            [['_route' => 'sylius_api_admin_product_variant_put', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductVariant', '_api_operation_name' => 'sylius_api_admin_product_variant_put', '_format' => null], ['code'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'sylius_api_admin_product_variant_delete', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductVariant', '_api_operation_name' => 'sylius_api_admin_product_variant_delete', '_format' => null], ['code'], ['DELETE' => 0], null, false, true, null],
        ],
        4616 => [
            [['_route' => 'sylius_api_admin_product_association_get', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductAssociation', '_api_operation_name' => 'sylius_api_admin_product_association_get', '_format' => null], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'sylius_api_admin_product_association_put', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductAssociation', '_api_operation_name' => 'sylius_api_admin_product_association_put', '_format' => null], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'sylius_api_admin_product_association_delete', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductAssociation', '_api_operation_name' => 'sylius_api_admin_product_association_delete', '_format' => null], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        4645 => [
            [['_route' => 'sylius_api_admin_product_association_type_get', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductAssociationType', '_api_operation_name' => 'sylius_api_admin_product_association_type_get', '_format' => null], ['code'], ['GET' => 0], null, false, true, null],
            [['_route' => 'sylius_api_admin_product_association_type_put', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductAssociationType', '_api_operation_name' => 'sylius_api_admin_product_association_type_put', '_format' => null], ['code'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'sylius_api_admin_product_association_type_delete', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductAssociationType', '_api_operation_name' => 'sylius_api_admin_product_association_type_delete', '_format' => null], ['code'], ['DELETE' => 0], null, false, true, null],
        ],
        4676 => [[['_route' => 'sylius_api_admin_product_association_type_product_association_type_translation_get_collection', '_controller' => 'api_platform.action.not_exposed', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductAssociationTypeTranslation', '_api_operation_name' => 'sylius_api_admin_product_association_type_product_association_type_translation_get_collection', '_format' => null], ['code', 'localeCode'], ['GET' => 0], null, false, true, null]],
        4711 => [
            [['_route' => 'sylius_api_admin_product_attribute_get', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductAttribute', '_api_operation_name' => 'sylius_api_admin_product_attribute_get', '_format' => null], ['code'], ['GET' => 0], null, false, true, null],
            [['_route' => 'sylius_api_admin_product_attribute_put', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductAttribute', '_api_operation_name' => 'sylius_api_admin_product_attribute_put', '_format' => null], ['code'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'sylius_api_admin_product_attribute_delete', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductAttribute', '_api_operation_name' => 'sylius_api_admin_product_attribute_delete', '_format' => null], ['code'], ['DELETE' => 0], null, false, true, null],
        ],
        4742 => [[['_route' => 'sylius_api_admin_product_attribute_product_attribute_translation_get_collection', '_controller' => 'api_platform.action.not_exposed', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductAttributeTranslation', '_api_operation_name' => 'sylius_api_admin_product_attribute_product_attribute_translation_get_collection', '_format' => null], ['code', 'localeCode'], ['GET' => 0], null, false, true, null]],
        4769 => [[['_route' => 'sylius_api_admin_product_attribute_value_get', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductAttributeValue', '_api_operation_name' => 'sylius_api_admin_product_attribute_value_get', '_format' => null], ['id'], ['GET' => 0], null, false, true, null]],
        4802 => [
            [['_route' => 'sylius_api_admin_product_option_get', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductOption', '_api_operation_name' => 'sylius_api_admin_product_option_get', '_format' => null], ['code'], ['GET' => 0], null, false, true, null],
            [['_route' => 'sylius_api_admin_product_option_put', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductOption', '_api_operation_name' => 'sylius_api_admin_product_option_put', '_format' => null], ['code'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'sylius_api_admin_product_option_delete', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductOption', '_api_operation_name' => 'sylius_api_admin_product_option_delete', '_format' => null], ['code'], ['DELETE' => 0], null, false, true, null],
        ],
        4836 => [[['_route' => 'sylius_api_admin_product_option_product_option_translation_get_collection', '_controller' => 'api_platform.action.not_exposed', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductOptionTranslation', '_api_operation_name' => 'sylius_api_admin_product_option_product_option_translation_get_collection', '_format' => null], ['code', 'localeCode'], ['GET' => 0], null, false, true, null]],
        4863 => [[['_route' => 'sylius_api_admin_product_option_product_option_value_get', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductOptionValue', '_api_operation_name' => 'sylius_api_admin_product_option_product_option_value_get', '_format' => null], ['optionCode', 'code'], ['GET' => 0], null, false, true, null]],
        4872 => [[['_route' => 'sylius_api_admin_product_option_product_option_value_get_collection', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductOptionValue', '_api_operation_name' => 'sylius_api_admin_product_option_product_option_value_get_collection', '_format' => null], ['code'], ['GET' => 0], null, false, false, null]],
        4923 => [[['_route' => 'sylius_api_admin_product_option_value_product_option_value_translation_get_collection', '_controller' => 'api_platform.action.not_exposed', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductOptionValueTranslation', '_api_operation_name' => 'sylius_api_admin_product_option_value_product_option_value_translation_get_collection', '_format' => null], ['code', 'localeCode'], ['GET' => 0], null, false, true, null]],
        4952 => [
            [['_route' => 'sylius_api_admin_product_review_get', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductReview', '_api_operation_name' => 'sylius_api_admin_product_review_get', '_format' => null], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'sylius_api_admin_product_review_put', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductReview', '_api_operation_name' => 'sylius_api_admin_product_review_put', '_format' => null], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        4971 => [[['_route' => 'sylius_api_admin_product_review_patch_accept', '_controller' => 'sylius_api.applicator.product_review_state_machine_transition::accept', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductReview', '_api_operation_name' => 'sylius_api_admin_product_review_patch_accept', '_format' => null], ['id'], ['PATCH' => 0], null, false, false, null]],
        4986 => [[['_route' => 'sylius_api_admin_product_review_patch_reject', '_controller' => 'sylius_api.applicator.product_review_state_machine_transition::reject', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductReview', '_api_operation_name' => 'sylius_api_admin_product_review_patch_reject', '_format' => null], ['id'], ['PATCH' => 0], null, false, false, null]],
        4996 => [[['_route' => 'sylius_api_admin_product_review_delete', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductReview', '_api_operation_name' => 'sylius_api_admin_product_review_delete', '_format' => null], ['id'], ['DELETE' => 0], null, false, true, null]],
        5024 => [
            [['_route' => 'sylius_api_admin_product_taxon_get', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductTaxon', '_api_operation_name' => 'sylius_api_admin_product_taxon_get', '_format' => null], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'sylius_api_admin_product_taxon_put', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductTaxon', '_api_operation_name' => 'sylius_api_admin_product_taxon_put', '_format' => null], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'sylius_api_admin_product_taxon_delete', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductTaxon', '_api_operation_name' => 'sylius_api_admin_product_taxon_delete', '_format' => null], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        5048 => [
            [['_route' => 'sylius_api_admin_product_put', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\Product', '_api_operation_name' => 'sylius_api_admin_product_put', '_format' => null], ['code'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'sylius_api_admin_product_delete', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\Product', '_api_operation_name' => 'sylius_api_admin_product_delete', '_format' => null], ['code'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'sylius_api_admin_product_get', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\Product', '_api_operation_name' => 'sylius_api_admin_product_get', '_format' => null], ['code'], ['GET' => 0], null, false, true, null],
        ],
        5070 => [[['_route' => 'sylius_api_admin_product_product_image_post', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\Product', '_api_operation_name' => 'sylius_api_admin_product_product_image_post', '_format' => null], ['code'], ['POST' => 0], null, false, false, null]],
        5091 => [
            [['_route' => 'sylius_api_admin_product_product_image_put', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductImage', '_api_operation_name' => 'sylius_api_admin_product_product_image_put', '_format' => null], ['code', 'id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'sylius_api_admin_product_product_image_delete', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductImage', '_api_operation_name' => 'sylius_api_admin_product_product_image_delete', '_format' => null], ['code', 'id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'sylius_api_admin_product_product_image_get', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductImage', '_api_operation_name' => 'sylius_api_admin_product_product_image_get', '_format' => null], ['code', 'id'], ['GET' => 0], null, false, true, null],
        ],
        5101 => [[['_route' => 'sylius_api_admin_product_product_image_get_collection', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductImage', '_api_operation_name' => 'sylius_api_admin_product_product_image_get_collection', '_format' => null], ['code'], ['GET' => 0], null, false, false, null]],
        5132 => [[['_route' => 'sylius_api_admin_product_product_translation_get_collection', '_controller' => 'api_platform.action.not_exposed', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductTranslation', '_api_operation_name' => 'sylius_api_admin_product_product_translation_get_collection', '_format' => null], ['code', 'localeCode'], ['GET' => 0], null, false, true, null]],
        5163 => [
            [['_route' => 'sylius_api_admin_promotion_get', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Promotion\\Promotion', '_api_operation_name' => 'sylius_api_admin_promotion_get', '_format' => null], ['code'], ['GET' => 0], null, false, true, null],
            [['_route' => 'sylius_api_admin_promotion_put', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Promotion\\Promotion', '_api_operation_name' => 'sylius_api_admin_promotion_put', '_format' => null], ['code'], ['PUT' => 0], null, false, true, null],
        ],
        5186 => [[['_route' => 'sylius_api_admin_promotion_patch_archive', '_controller' => 'Sylius\\Bundle\\ApiBundle\\Applicator\\ArchivingPromotionApplicatorInterface::archive', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Promotion\\Promotion', '_api_operation_name' => 'sylius_api_admin_promotion_patch_archive', '_format' => null], ['code'], ['PATCH' => 0], null, false, false, null]],
        5210 => [[['_route' => 'sylius_api_admin_promotion_promotion_action_get', '_controller' => 'api_platform.action.not_exposed', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Promotion\\PromotionAction', '_api_operation_name' => 'sylius_api_admin_promotion_promotion_action_get', '_format' => null], ['code', 'id'], ['GET' => 0], null, false, true, null]],
        5230 => [[['_route' => 'sylius_api_admin_promotion_patch_restore', '_controller' => 'Sylius\\Bundle\\ApiBundle\\Applicator\\ArchivingPromotionApplicatorInterface::restore', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Promotion\\Promotion', '_api_operation_name' => 'sylius_api_admin_promotion_patch_restore', '_format' => null], ['code'], ['PATCH' => 0], null, false, false, null]],
        5252 => [[['_route' => 'sylius_api_admin_promotion_promotion_rule_get', '_controller' => 'api_platform.action.not_exposed', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Promotion\\PromotionRule', '_api_operation_name' => 'sylius_api_admin_promotion_promotion_rule_get', '_format' => null], ['code', 'id'], ['GET' => 0], null, false, true, null]],
        5272 => [[['_route' => 'sylius_api_admin_promotion_promotion_coupon_get_collection', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Promotion\\PromotionCoupon', '_api_operation_name' => 'sylius_api_admin_promotion_promotion_coupon_get_collection', '_format' => null], ['promotionCode'], ['GET' => 0], null, false, false, null]],
        5293 => [[['_route' => 'sylius_api_admin_promotion_promotion_coupon_get', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Promotion\\PromotionCoupon', '_api_operation_name' => 'sylius_api_admin_promotion_promotion_coupon_get', '_format' => null], ['promotionCode', 'couponCode'], ['GET' => 0], null, false, true, null]],
        5310 => [[['_route' => 'sylius_api_admin_promotion_promotion_coupon_post_generate', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Promotion\\PromotionCoupon', '_api_operation_name' => 'sylius_api_admin_promotion_promotion_coupon_post_generate', '_format' => null], ['promotionCode'], ['POST' => 0], null, false, false, null]],
        5330 => [
            [['_route' => 'sylius_api_admin_promotion_promotion_coupon_put', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Promotion\\PromotionCoupon', '_api_operation_name' => 'sylius_api_admin_promotion_promotion_coupon_put', '_format' => null], ['promotionCode', 'couponCode'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'sylius_api_admin_promotion_promotion_coupon_delete', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Promotion\\PromotionCoupon', '_api_operation_name' => 'sylius_api_admin_promotion_promotion_coupon_delete', '_format' => null], ['promotionCode', 'couponCode'], ['DELETE' => 0], null, false, true, null],
        ],
        5341 => [[['_route' => 'sylius_api_admin_promotion_promotion_coupon_post', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Promotion\\PromotionCoupon', '_api_operation_name' => 'sylius_api_admin_promotion_promotion_coupon_post', '_format' => null], ['promotionCode'], ['POST' => 0], null, false, false, null]],
        5372 => [[['_route' => 'sylius_api_admin_promotion_promotion_translation_get_collection', '_controller' => 'api_platform.action.not_exposed', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Promotion\\PromotionTranslation', '_api_operation_name' => 'sylius_api_admin_promotion_promotion_translation_get_collection', '_format' => null], ['code', 'localeCode'], ['GET' => 0], null, false, true, null]],
        5382 => [[['_route' => 'sylius_api_admin_promotion_delete', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Promotion\\Promotion', '_api_operation_name' => 'sylius_api_admin_promotion_delete', '_format' => null], ['code'], ['DELETE' => 0], null, false, true, null]],
        5415 => [[['_route' => 'sylius_api_admin_payment_get', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Payment\\Payment', '_api_operation_name' => 'sylius_api_admin_payment_get', '_format' => null], ['id'], ['GET' => 0], null, false, true, null]],
        5436 => [[['_route' => 'sylius_api_admin_payment_patch_complete', '_controller' => 'sylius_api.applicator.payment_state_machine_transition::complete', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Payment\\Payment', '_api_operation_name' => 'sylius_api_admin_payment_patch_complete', '_format' => null], ['id'], ['PATCH' => 0], null, false, false, null]],
        5451 => [[['_route' => 'sylius_api_admin_payment_patch_refund', '_controller' => 'sylius_api.applicator.payment_state_machine_transition::refund', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Payment\\Payment', '_api_operation_name' => 'sylius_api_admin_payment_patch_refund', '_format' => null], ['id'], ['PATCH' => 0], null, false, false, null]],
        5477 => [[['_route' => 'sylius_api_admin_payment_payment_request_get_collection', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Payment\\PaymentRequest', '_api_operation_name' => 'sylius_api_admin_payment_payment_request_get_collection', '_format' => null], ['paymentId'], ['GET' => 0], null, false, false, null]],
        5512 => [
            [['_route' => 'sylius_api_admin_payment_method_get', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Payment\\PaymentMethod', '_api_operation_name' => 'sylius_api_admin_payment_method_get', '_format' => null], ['code'], ['GET' => 0], null, false, true, null],
            [['_route' => 'sylius_api_admin_payment_method_put', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Payment\\PaymentMethod', '_api_operation_name' => 'sylius_api_admin_payment_method_put', '_format' => null], ['code'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'sylius_api_admin_payment_method_delete', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Payment\\PaymentMethod', '_api_operation_name' => 'sylius_api_admin_payment_method_delete', '_format' => null], ['code'], ['DELETE' => 0], null, false, true, null],
        ],
        5543 => [[['_route' => 'sylius_api_admin_payment_method_payment_method_translation_get', '_controller' => 'api_platform.action.not_exposed', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Payment\\PaymentMethodTranslation', '_api_operation_name' => 'sylius_api_admin_payment_method_payment_method_translation_get', '_format' => null], ['code', 'localeCode'], ['GET' => 0], null, false, true, null]],
        5570 => [[['_route' => 'sylius_api_admin_payment_request_get', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Payment\\PaymentRequest', '_api_operation_name' => 'sylius_api_admin_payment_request_get', '_format' => null], ['hash'], ['GET' => 0], null, false, true, null]],
        5609 => [
            [['_route' => 'sylius_api_admin_exchange_rate_get', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Currency\\ExchangeRate', '_api_operation_name' => 'sylius_api_admin_exchange_rate_get', '_format' => null], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'sylius_api_admin_exchange_rate_put', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Currency\\ExchangeRate', '_api_operation_name' => 'sylius_api_admin_exchange_rate_put', '_format' => null], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'sylius_api_admin_exchange_rate_delete', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Currency\\ExchangeRate', '_api_operation_name' => 'sylius_api_admin_exchange_rate_delete', '_format' => null], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        5644 => [[['_route' => 'sylius_api_admin_gateway_config_get', '_controller' => 'api_platform.action.not_exposed', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Payment\\GatewayConfig', '_api_operation_name' => 'sylius_api_admin_gateway_config_get', '_format' => null], ['id'], ['GET' => 0], null, false, true, null]],
        5672 => [
            [['_route' => 'sylius_api_admin_locale_get', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Locale\\Locale', '_api_operation_name' => 'sylius_api_admin_locale_get', '_format' => null], ['code'], ['GET' => 0], null, false, true, null],
            [['_route' => 'sylius_api_admin_locale_delete', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Locale\\Locale', '_api_operation_name' => 'sylius_api_admin_locale_delete', '_format' => null], ['code'], ['DELETE' => 0], null, false, true, null],
        ],
        5715 => [
            [['_route' => 'sylius_api_admin_tax_category_get', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Taxation\\TaxCategory', '_api_operation_name' => 'sylius_api_admin_tax_category_get', '_format' => null], ['code'], ['GET' => 0], null, false, true, null],
            [['_route' => 'sylius_api_admin_tax_category_put', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Taxation\\TaxCategory', '_api_operation_name' => 'sylius_api_admin_tax_category_put', '_format' => null], ['code'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'sylius_api_admin_tax_category_delete', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Taxation\\TaxCategory', '_api_operation_name' => 'sylius_api_admin_tax_category_delete', '_format' => null], ['code'], ['DELETE' => 0], null, false, true, null],
        ],
        5742 => [
            [['_route' => 'sylius_api_admin_tax_rate_get', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Taxation\\TaxRate', '_api_operation_name' => 'sylius_api_admin_tax_rate_get', '_format' => null], ['code'], ['GET' => 0], null, false, true, null],
            [['_route' => 'sylius_api_admin_tax_rate_put', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Taxation\\TaxRate', '_api_operation_name' => 'sylius_api_admin_tax_rate_put', '_format' => null], ['code'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'sylius_api_admin_tax_rate_delete', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Taxation\\TaxRate', '_api_operation_name' => 'sylius_api_admin_tax_rate_delete', '_format' => null], ['code'], ['DELETE' => 0], null, false, true, null],
        ],
        5771 => [
            [['_route' => 'sylius_api_admin_taxon_put', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Taxonomy\\Taxon', '_api_operation_name' => 'sylius_api_admin_taxon_put', '_format' => null], ['code'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'sylius_api_admin_taxon_delete', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Taxonomy\\Taxon', '_api_operation_name' => 'sylius_api_admin_taxon_delete', '_format' => null], ['code'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'sylius_api_admin_taxon_get', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Taxonomy\\Taxon', '_api_operation_name' => 'sylius_api_admin_taxon_get', '_format' => null], ['code'], ['GET' => 0], null, false, true, null],
        ],
        5790 => [[['_route' => 'sylius_api_admin_taxon_taxon_image_post', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Taxonomy\\Taxon', '_api_operation_name' => 'sylius_api_admin_taxon_taxon_image_post', '_format' => null], ['code'], ['POST' => 0], null, false, false, null]],
        5811 => [
            [['_route' => 'sylius_api_admin_taxon_taxon_image_put', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Taxonomy\\TaxonImage', '_api_operation_name' => 'sylius_api_admin_taxon_taxon_image_put', '_format' => null], ['code', 'id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'sylius_api_admin_taxon_taxon_image_delete', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Taxonomy\\TaxonImage', '_api_operation_name' => 'sylius_api_admin_taxon_taxon_image_delete', '_format' => null], ['code', 'id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'sylius_api_admin_taxon_taxon_image_get', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Taxonomy\\TaxonImage', '_api_operation_name' => 'sylius_api_admin_taxon_taxon_image_get', '_format' => null], ['code', 'id'], ['GET' => 0], null, false, true, null],
        ],
        5821 => [[['_route' => 'sylius_api_admin_taxon_taxon_image_get_collection', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Taxonomy\\TaxonImage', '_api_operation_name' => 'sylius_api_admin_taxon_taxon_image_get_collection', '_format' => null], ['code'], ['GET' => 0], null, false, false, null]],
        5863 => [[['_route' => 'sylius_api_admin_taxon_taxon_translation_get_collection', '_controller' => 'api_platform.action.not_exposed', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Taxonomy\\TaxonTranslation', '_api_operation_name' => 'sylius_api_admin_taxon_taxon_translation_get_collection', '_format' => null], ['code', 'localeCode'], ['GET' => 0], null, false, true, null]],
        5891 => [
            [['_route' => 'sylius_api_admin_zone_get', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Addressing\\Zone', '_api_operation_name' => 'sylius_api_admin_zone_get', '_format' => null], ['code'], ['GET' => 0], null, false, true, null],
            [['_route' => 'sylius_api_admin_zone_put', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Addressing\\Zone', '_api_operation_name' => 'sylius_api_admin_zone_put', '_format' => null], ['code'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'sylius_api_admin_zone_delete', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Addressing\\Zone', '_api_operation_name' => 'sylius_api_admin_zone_delete', '_format' => null], ['code'], ['DELETE' => 0], null, false, true, null],
        ],
        5937 => [
            [['_route' => 'sylius_api_shop_address_get', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Addressing\\Address', '_api_operation_name' => 'sylius_api_shop_address_get', '_format' => null], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'sylius_api_shop_address_put', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Addressing\\Address', '_api_operation_name' => 'sylius_api_shop_address_put', '_format' => null], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'sylius_api_shop_address_delete', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Addressing\\Address', '_api_operation_name' => 'sylius_api_shop_address_delete', '_format' => null], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        5965 => [[['_route' => 'sylius_api_shop_adjustment_get', '_controller' => 'api_platform.action.not_exposed', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\Adjustment', '_api_operation_name' => 'sylius_api_shop_adjustment_get', '_format' => null], ['id'], ['GET' => 0], null, false, true, null]],
        6015 => [[['_route' => 'sylius_api_shop_order_payment_patch_account', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\Order', '_api_operation_name' => 'sylius_api_shop_order_payment_patch_account', '_format' => null], ['tokenValue', 'paymentId'], ['PATCH' => 0], null, false, true, null]],
        6061 => [[['_route' => 'sylius_api_shop_order_adjustment_get_collection', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\Adjustment', '_api_operation_name' => 'sylius_api_shop_order_adjustment_get_collection', '_format' => null], ['tokenValue'], ['GET' => 0], null, false, false, null]],
        6102 => [[['_route' => 'sylius_api_shop_order_order_item_adjustment_get_collection', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\Adjustment', '_api_operation_name' => 'sylius_api_shop_order_order_item_adjustment_get_collection', '_format' => null], ['tokenValue', 'id'], ['GET' => 0], null, false, false, null]],
        6111 => [
            [['_route' => 'sylius_api_shop_order_order_item_patch', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\Order', '_api_operation_name' => 'sylius_api_shop_order_order_item_patch', '_format' => null], ['tokenValue', 'orderItemId'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'sylius_api_shop_order_order_item_delete', '_controller' => 'sylius_api.controller.delete_order_item', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\Order', '_api_operation_name' => 'sylius_api_shop_order_order_item_delete', '_format' => null], ['tokenValue', 'orderItemId'], ['DELETE' => 0], null, false, true, null],
        ],
        6120 => [[['_route' => 'sylius_api_shop_order_order_item_get', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\OrderItem', '_api_operation_name' => 'sylius_api_shop_order_order_item_get', '_format' => null], ['tokenValue', 'id'], ['GET' => 0], null, false, true, null]],
        6130 => [
            [['_route' => 'sylius_api_shop_order_order_item_post', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\Order', '_api_operation_name' => 'sylius_api_shop_order_order_item_post', '_format' => null], ['tokenValue'], ['POST' => 0], null, false, false, null],
            [['_route' => 'sylius_api_shop_order_order_item_get_collection', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\OrderItem', '_api_operation_name' => 'sylius_api_shop_order_order_item_get_collection', '_format' => null], ['tokenValue'], ['GET' => 0], null, false, false, null],
        ],
        6180 => [[['_route' => 'sylius_api_shop_order_payment_get_configuration', '_controller' => 'sylius_api.controller.payment.get_payment_configuration', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\Order', '_api_operation_name' => 'sylius_api_shop_order_payment_get_configuration', '_format' => null], ['tokenValue', 'paymentId'], ['GET' => 0], null, false, false, null]],
        6196 => [[['_route' => 'sylius_api_shop_order_payment_payment_method_get_collection', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Payment\\PaymentMethod', '_api_operation_name' => 'sylius_api_shop_order_payment_payment_method_get_collection', '_format' => null], ['tokenValue', 'paymentId'], ['GET' => 0], null, false, false, null]],
        6206 => [
            [['_route' => 'sylius_api_shop_order_payment_patch', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\Order', '_api_operation_name' => 'sylius_api_shop_order_payment_patch', '_format' => null], ['tokenValue', 'paymentId'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'sylius_api_shop_order_payment_get', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Payment\\Payment', '_api_operation_name' => 'sylius_api_shop_order_payment_get', '_format' => null], ['tokenValue', 'paymentId'], ['GET' => 0], null, false, true, null],
        ],
        6226 => [[['_route' => 'sylius_api_show_payment_request_post', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Payment\\PaymentRequest', '_api_operation_name' => 'sylius_api_show_payment_request_post', '_format' => null], ['tokenValue'], ['POST' => 0], null, false, false, null]],
        6257 => [
            [['_route' => 'sylius_api_shop_order_shipment_patch', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\Order', '_api_operation_name' => 'sylius_api_shop_order_shipment_patch', '_format' => null], ['tokenValue', 'shipmentId'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'sylius_api_shop_order_shipment_get', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Shipping\\Shipment', '_api_operation_name' => 'sylius_api_shop_order_shipment_get', '_format' => null], ['tokenValue', 'shipmentId'], ['GET' => 0], null, false, true, null],
        ],
        6274 => [[['_route' => 'sylius_api_shop_order_shipment_shipping_method_get_collection', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Shipping\\ShippingMethod', '_api_operation_name' => 'sylius_api_shop_order_shipment_shipping_method_get_collection', '_format' => null], ['tokenValue', 'shipmentId'], ['GET' => 0], null, false, false, null]],
        6292 => [[['_route' => 'sylius_api_shop_order_patch_complete', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\Order', '_api_operation_name' => 'sylius_api_shop_order_patch_complete', '_format' => null], ['tokenValue'], ['PATCH' => 0], null, false, false, null]],
        6302 => [
            [['_route' => 'sylius_api_shop_order_get', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\Order', '_api_operation_name' => 'sylius_api_shop_order_get', '_format' => null], ['tokenValue'], ['GET' => 0], null, false, true, null],
            [['_route' => 'sylius_api_shop_order_put', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\Order', '_api_operation_name' => 'sylius_api_shop_order_put', '_format' => null], ['tokenValue'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'sylius_api_shop_order_delete', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\Order', '_api_operation_name' => 'sylius_api_shop_order_delete', '_format' => null], ['tokenValue'], ['DELETE' => 0], null, false, true, null],
        ],
        6334 => [[['_route' => 'sylius_api_shop_order_item_unit_get', '_controller' => 'api_platform.action.not_exposed', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\OrderItemUnit', '_api_operation_name' => 'sylius_api_shop_order_item_unit_get', '_format' => null], ['id'], ['GET' => 0], null, false, true, null]],
        6375 => [[['_route' => 'sylius_api_shop_catalog_promotion_get', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Promotion\\CatalogPromotion', '_api_operation_name' => 'sylius_api_shop_catalog_promotion_get', '_format' => null], ['code'], ['GET' => 0], null, false, true, null]],
        6400 => [[['_route' => 'sylius_api_shop_channel_get', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Channel\\Channel', '_api_operation_name' => 'sylius_api_shop_channel_get', '_format' => null], ['code'], ['GET' => 0], null, false, true, null]],
        6429 => [[['_route' => 'sylius_api_shop_country_get', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Addressing\\Country', '_api_operation_name' => 'sylius_api_shop_country_get', '_format' => null], ['code'], ['GET' => 0], null, false, true, null]],
        6457 => [[['_route' => 'sylius_api_shop_country_province_get', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Addressing\\Province', '_api_operation_name' => 'sylius_api_shop_country_province_get', '_format' => null], ['countryCode', 'provinceCode'], ['GET' => 0], null, false, true, null]],
        6488 => [[['_route' => 'sylius_api_shop_currency_get', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Currency\\Currency', '_api_operation_name' => 'sylius_api_shop_currency_get', '_format' => null], ['code'], ['GET' => 0], null, false, true, null]],
        6519 => [
            [['_route' => 'sylius_api_shop_customer_get', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Customer\\Customer', '_api_operation_name' => 'sylius_api_shop_customer_get', '_format' => null], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'sylius_api_shop_customer_put', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Customer\\Customer', '_api_operation_name' => 'sylius_api_shop_customer_put', '_format' => null], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        6537 => [[['_route' => 'sylius_api_shop_customer_put_password', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Customer\\Customer', '_api_operation_name' => 'sylius_api_shop_customer_put_password', '_format' => null], ['id'], ['PUT' => 0], null, false, false, null]],
        6565 => [[['_route' => 'sylius_api_shop_customer_post_reset_password', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'Sylius\\Bundle\\ApiBundle\\Command\\Account\\ResetPassword', '_api_operation_name' => 'sylius_api_shop_customer_post_reset_password', '_format' => null], [], ['POST' => 0], null, false, false, null]],
        6583 => [[['_route' => 'sylius_api_shop_customer_patch_reset_password', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'Sylius\\Bundle\\ApiBundle\\Command\\Account\\ResetPassword', '_api_operation_name' => 'sylius_api_shop_customer_patch_reset_password', '_format' => null], ['token'], ['PATCH' => 0], null, false, true, null]],
        6602 => [[['_route' => 'sylius_api_shop_customer_post_verify', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'Sylius\\Bundle\\ApiBundle\\Command\\Account\\VerifyShopUser', '_api_operation_name' => 'sylius_api_shop_customer_post_verify', '_format' => null], [], ['POST' => 0], null, false, false, null]],
        6620 => [[['_route' => 'sylius_api_shop_customer_patch_verify', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'Sylius\\Bundle\\ApiBundle\\Command\\Account\\VerifyShopUser', '_api_operation_name' => 'sylius_api_shop_customer_patch_verify', '_format' => null], ['token'], ['PATCH' => 0], null, false, true, null]],
        6635 => [[['_route' => 'sylius_api_shop_authentication_token'], [], ['POST' => 0], null, false, false, null]],
        6671 => [[['_route' => 'sylius_api_shop_exchange_rate_get', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Currency\\ExchangeRate', '_api_operation_name' => 'sylius_api_shop_exchange_rate_get', '_format' => null], ['id'], ['GET' => 0], null, false, true, null]],
        6696 => [[['_route' => 'sylius_api_shop_locale_get', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Locale\\Locale', '_api_operation_name' => 'sylius_api_shop_locale_get', '_format' => null], ['code'], ['GET' => 0], null, false, true, null]],
        6736 => [[['_route' => 'sylius_api_shop_payment_method_get', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Payment\\PaymentMethod', '_api_operation_name' => 'sylius_api_shop_payment_method_get', '_format' => null], ['code'], ['GET' => 0], null, false, true, null]],
        6765 => [
            [['_route' => 'sylius_api_show_payment_request_get', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Payment\\PaymentRequest', '_api_operation_name' => 'sylius_api_show_payment_request_get', '_format' => null], ['hash'], ['GET' => 0], null, false, true, null],
            [['_route' => 'sylius_api_show_payment_request_put', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Payment\\PaymentRequest', '_api_operation_name' => 'sylius_api_show_payment_request_put', '_format' => null], ['hash'], ['PUT' => 0], null, false, true, null],
        ],
        6804 => [[['_route' => 'sylius_api_shop_product_get', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\Product', '_api_operation_name' => 'sylius_api_shop_product_get', '_format' => null], ['code'], ['GET' => 0], null, false, true, null]],
        6827 => [[['_route' => 'sylius_api_shop_product_product_attribute_value_get_collection', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductAttributeValue', '_api_operation_name' => 'sylius_api_shop_product_product_attribute_value_get_collection', '_format' => null], ['code'], ['GET' => 0], null, false, false, null]],
        6845 => [[['_route' => 'sylius_api_shop_product_product_image_get_collection', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductImage', '_api_operation_name' => 'sylius_api_shop_product_product_image_get_collection', '_format' => null], ['code'], ['GET' => 0], null, false, false, null]],
        6863 => [[['_route' => 'sylius_api_shop_product_product_image_get', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductImage', '_api_operation_name' => 'sylius_api_shop_product_product_image_get', '_format' => null], ['code', 'id'], ['GET' => 0], null, false, true, null]],
        6894 => [[['_route' => 'sylius_api_shop_product_get_by_slug', '_controller' => 'sylius_api.controller.get_product_by_slug', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\Product', '_api_operation_name' => 'sylius_api_shop_product_get_by_slug', '_format' => null], ['slug'], ['GET' => 0], null, false, true, null]],
        6936 => [[['_route' => 'sylius_api_shop_product_association_get', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductAssociation', '_api_operation_name' => 'sylius_api_shop_product_association_get', '_format' => null], ['id'], ['GET' => 0], null, false, true, null]],
        6961 => [[['_route' => 'sylius_api_shop_product_association_type_get', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductAssociationType', '_api_operation_name' => 'sylius_api_shop_product_association_type_get', '_format' => null], ['code'], ['GET' => 0], null, false, true, null]],
        6992 => [[['_route' => 'sylius_api_shop_product_attribute_get', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductAttribute', '_api_operation_name' => 'sylius_api_shop_product_attribute_get', '_format' => null], ['code'], ['GET' => 0], null, false, true, null]],
        7018 => [[['_route' => 'sylius_api_shop_product_attribute_value_get', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductAttributeValue', '_api_operation_name' => 'sylius_api_shop_product_attribute_value_get', '_format' => null], ['id'], ['GET' => 0], null, false, true, null]],
        7048 => [[['_route' => 'sylius_api_shop_product_option_get', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductOption', '_api_operation_name' => 'sylius_api_shop_product_option_get', '_format' => null], ['code'], ['GET' => 0], null, false, true, null]],
        7073 => [[['_route' => 'sylius_api_shop_product_option_product_option_value_get', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductOptionValue', '_api_operation_name' => 'sylius_api_shop_product_option_product_option_value_get', '_format' => null], ['optionCode', 'code'], ['GET' => 0], null, false, true, null]],
        7099 => [[['_route' => 'sylius_api_shop_product_review_get', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductReview', '_api_operation_name' => 'sylius_api_shop_product_review_get', '_format' => null], ['id'], ['GET' => 0], null, false, true, null]],
        7123 => [[['_route' => 'sylius_api_shop_product_taxon_get', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductTaxon', '_api_operation_name' => 'sylius_api_shop_product_taxon_get', '_format' => null], ['id'], ['GET' => 0], null, false, true, null]],
        7149 => [[['_route' => 'sylius_api_shop_product_variant_get', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductVariant', '_api_operation_name' => 'sylius_api_shop_product_variant_get', '_format' => null], ['code'], ['GET' => 0], null, false, true, null]],
        7184 => [[['_route' => 'sylius_api_shop_promotion_promotion_coupon_get', '_controller' => 'api_platform.action.not_exposed', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Promotion\\PromotionCoupon', '_api_operation_name' => 'sylius_api_shop_promotion_promotion_coupon_get', '_format' => null], ['code'], ['GET' => 0], null, false, true, null]],
        7224 => [[['_route' => 'sylius_api_shop_shipping_method_get', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Shipping\\ShippingMethod', '_api_operation_name' => 'sylius_api_shop_shipping_method_get', '_format' => null], ['code'], ['GET' => 0], null, false, true, null]],
        7251 => [[['_route' => 'sylius_api_shop_shop_user_get', '_controller' => 'api_platform.action.not_exposed', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User\\ShopUser', '_api_operation_name' => 'sylius_api_shop_shop_user_get', '_format' => null], ['id'], ['GET' => 0], null, false, true, null]],
        7285 => [[['_route' => 'sylius_api_shop_taxon_get', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Taxonomy\\Taxon', '_api_operation_name' => 'sylius_api_shop_taxon_get', '_format' => null], ['code'], ['GET' => 0], null, false, true, null]],
        7304 => [[['_route' => 'sylius_api_shop_taxon_taxon_image_get_collection', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Taxonomy\\TaxonImage', '_api_operation_name' => 'sylius_api_shop_taxon_taxon_image_get_collection', '_format' => null], ['code'], ['GET' => 0], null, false, false, null]],
        7322 => [[['_route' => 'sylius_api_shop_taxon_taxon_image_get', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Taxonomy\\TaxonImage', '_api_operation_name' => 'sylius_api_shop_taxon_taxon_image_get', '_format' => null], ['code', 'id'], ['GET' => 0], null, false, true, null]],
        7348 => [[['_route' => 'sylius_api_shop_taxon_get_by_slug', '_controller' => 'sylius_api.controller.get_taxon_by_slug', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Taxonomy\\Taxon', '_api_operation_name' => 'sylius_api_shop_taxon_get_by_slug', '_format' => null], ['slug'], ['GET' => 0], null, false, true, null]],
        7383 => [[['_route' => 'sylius_api_shop_taxon_get_tree_branch', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Taxonomy\\Taxon', '_api_operation_name' => 'sylius_api_shop_taxon_get_tree_branch', '_format' => null], ['code'], ['GET' => 0], null, false, false, null]],
        7396 => [[['_route' => 'sylius_api_shop_taxon_get_tree_path', '_controller' => 'api_platform.action.placeholder', '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Taxonomy\\Taxon', '_api_operation_name' => 'sylius_api_shop_taxon_get_tree_path', '_format' => null], ['code'], ['GET' => 0], null, false, false, null]],
        7452 => [[['_route' => '_api_shop/.well-known/genid/{id}{._format}_get', '_controller' => 'api_platform.action.not_exposed', '_stateless' => null, '_api_resource_class' => 'Sylius\\Bundle\\ApiBundle\\Command\\SendContactRequest', '_api_operation_name' => '_api_shop/.well-known/genid/{id}{._format}_get', '_format' => null], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        7507 => [[['_route' => '_api_/.well-known/genid/{id}{._format}_get', '_controller' => 'api_platform.action.not_exposed', '_stateless' => null, '_api_resource_class' => 'Sylius\\Bundle\\ApiBundle\\Command\\Account\\VerifyShopUser', '_api_operation_name' => '_api_/.well-known/genid/{id}{._format}_get', '_format' => null], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        7652 => [[['_route' => 'sylius_mollie_shop_cancel_subscription_mollie', '_controller' => 'sylius_mollie.controller.admin.mollie_subscription::applyStateMachineTransitionAction', '_sylius' => ['repository' => ['method' => 'findOneByOrderIdAsString', 'arguments' => ['$orderId']], 'state_machine' => ['graph' => 'mollie_subscription_payment_graph_manual', 'transition' => 'cancel'], 'redirect' => 'referer', 'flash' => 'sylius_mollie.subscription.cancelled']], ['_locale', 'orderId'], ['PUT' => 0], null, false, false, null]],
        7679 => [[['_route' => 'sylius_mollie_shop_apple_pay_payment', '_controller' => 'sylius_mollie_plugin.controller.action.shop.apple_pay_create_payment'], ['_locale'], ['POST' => 0], null, false, false, null]],
        7731 => [[['_route' => 'sylius_mollie_shop_cancel_order_subscription', '_controller' => 'sylius_mollie.controller.admin.mollie_subscription::applyStateMachineTransitionAction', '_sylius' => ['repository' => ['method' => 'findOneActiveByOrderToken', 'arguments' => ['$orderToken']], 'state_machine' => ['graph' => 'mollie_subscription_payment_graph_manual', 'transition' => 'cancel'], 'redirect' => 'referer', 'flash' => 'sylius_mollie.subscription.cancelled']], ['_locale', 'orderToken'], ['PUT' => 0], null, false, false, null]],
        7781 => [[['_route' => 'sylius_mollie_shop_payment_fee_calculate', '_controller' => 'sylius_mollie.controller.shop.payment_fee_calculate'], ['_locale', 'gatewayName', 'methodId'], null, null, false, true, null]],
        7817 => [[['_route' => 'sylius_mollie_shop_no_payment_fee_calculate', '_controller' => 'sylius_mollie.controller.shop.no_payment_fee_calculate'], ['_locale'], null, null, false, false, null]],
        7860 => [[['_route' => 'sylius_mollie_shop_apple_pay_validation', '_controller' => 'sylius_mollie.controller.shop.apple_pay_validation'], ['_locale'], ['POST' => 0], null, false, false, null]],
        7877 => [[['_route' => 'sylius_mollie_shop_checkout_apple_complete', '_controller' => 'sylius_mollie.controller.shop.order::updateAppleOrderAction', '_sylius' => ['event' => 'complete', 'flash' => false, 'repository' => ['method' => 'findCartForSummary', 'arguments' => ['expr:service(\'sylius.context.cart\').getCart().getId()']], 'state_machine' => ['graph' => 'sylius_order_checkout', 'transition' => 'complete']]], ['_locale'], ['POST' => 0, 'GET' => 1], null, false, false, null]],
        7905 => [[['_route' => 'sylius_mollie_shop_qr_code', '_controller' => 'sylius_mollie.controller.shop.qr_code::createPayment'], ['_locale'], null, null, false, false, null]],
        7930 => [[['_route' => 'sylius_mollie_shop_payum', '_controller' => 'sylius_mollie.controller.shop.payum'], ['_locale'], null, null, false, false, null]],
        7949 => [[['_route' => 'sylius_mollie_shop_get_qr_code', '_controller' => 'sylius_mollie.controller.shop.qr_code::fetchQrCodeFromOrder'], ['_locale'], null, null, false, false, null]],
        7970 => [[['_route' => 'sylius_mollie_shop_remove_qr_code', '_controller' => 'sylius_mollie.controller.shop.qr_code::removeQrCodeFromOrder'], ['_locale'], null, null, false, false, null]],
        7994 => [[['_route' => 'sylius_mollie_shop_payment_webhook', '_controller' => 'sylius_mollie.controller.shop.payment_webhook'], ['_locale'], null, null, false, false, null]],
        8013 => [[['_route' => 'sylius_mollie_shop_thank_you_page_redirect', '_controller' => 'sylius_mollie.controller.shop.page_redirect::thankYouAction'], ['_locale'], null, null, false, false, null]],
        8041 => [[['_route' => 'sylius_mollie_shop_credit_card_translation', '_controller' => 'sylius_mollie.controller.shop.credit_card_translation::fetchTranslations'], ['_locale'], null, null, false, false, null]],
        8094 => [[['_route' => 'sylius_paypal_admin_download_payouts_report', '_controller' => 'sylius_paypal.controller.download_payouts_report'], ['id'], ['GET' => 0], null, false, true, null]],
        8126 => [[['_route' => 'sylius_paypal_admin_enable_seller', '_controller' => 'sylius_paypal.controller.enable_seller'], ['id'], ['POST' => 0], null, false, true, null]],
        8263 => [[['_route' => 'sylius_paypal_shop_pay_with_paypal_form', '_controller' => 'sylius_paypal.controller.pay_with_paypal_form'], ['_locale', 'orderToken', 'paymentId'], ['GET' => 0], null, false, true, null]],
        8319 => [[['_route' => 'sylius_paypal_shop_create_paypal_order_from_payment_page', '_controller' => 'sylius_paypal.controller.create_paypal_order_from_payment_page'], ['_locale', 'id'], ['POST' => 0], null, false, false, null]],
        8335 => [[['_route' => 'sylius_paypal_shop_complete_paypal_order_from_payment_page', '_controller' => 'sylius_paypal.controller.complete_paypal_order_from_payment_page'], ['_locale', 'id'], ['POST' => 0], null, false, false, null]],
        8359 => [[['_route' => 'sylius_paypal_shop_payment_error', '_controller' => 'sylius_paypal.controller.paypal_payment_on_error'], ['_locale'], ['POST' => 0], null, false, false, null]],
        8397 => [[['_route' => 'sylius_paypal_shop_add_to_cart', '_controller' => 'sylius_paypal.controller.add_to_cart', '_sylius' => ['factory' => ['method' => 'createForProduct', 'arguments' => ['expr:notFoundOnNull(service(\'sylius.repository.product\').find($productId))']], 'form' => ['type' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Order\\AddToCartType', 'options' => ['product' => 'expr:notFoundOnNull(service(\'sylius.repository.product\').find($productId))']]]], ['_locale', 'productId'], ['POST' => 0], null, false, true, null]],
        8432 => [[['_route' => 'sylius_shop_payment_request_pay', '_controller' => 'sylius_shop.controller.payment_request_pay'], ['_locale', 'hash'], null, null, false, true, null]],
        8468 => [[['_route' => 'sylius_paypal_shop_process_paypal_order', '_controller' => 'sylius_paypal.controller.process_paypal_order'], ['_locale'], ['POST' => 0], null, true, false, null]],
        8494 => [[['_route' => 'sylius_shop_product_show', '_controller' => 'sylius.controller.product::showAction', '_sylius' => ['template' => '@SyliusShop/product/show.html.twig', 'repository' => ['method' => 'findOneByChannelAndSlug', 'arguments' => ['expr:service(\'sylius.context.channel\').getChannel()', 'expr:service(\'sylius.context.locale\').getLocaleCode()', '$slug']]]], ['_locale', 'slug'], ['GET' => 0], null, false, true, null]],
        8514 => [[['_route' => 'sylius_shop_product_review_index', '_controller' => 'sylius.controller.product_review::indexAction', '_sylius' => ['template' => '@SyliusShop/product_review/index.html.twig', 'repository' => ['method' => 'findAcceptedByProductSlugAndChannel', 'arguments' => ['$slug', 'expr:service(\'sylius.context.locale\').getLocaleCode()', 'expr:service(\'sylius.context.channel\').getChannel()']]]], ['_locale', 'slug'], ['GET' => 0], null, true, false, null]],
        8527 => [[['_route' => 'sylius_shop_product_review_create', '_controller' => 'sylius.controller.product_review::createAction', '_sylius' => ['template' => '@SyliusShop/product_review/create.html.twig', 'form' => ['type' => 'Sylius\\Bundle\\ShopBundle\\Form\\Type\\Product\\ProductReviewType', 'options' => ['validation_groups' => ['sylius', 'sylius_review']]], 'factory' => ['method' => 'createForSubjectWithReviewer', 'arguments' => ['expr:notFoundOnNull(service(\'sylius.repository.product\').findOneByChannelAndSlug(service(\'sylius.context.channel\').getChannel(), service(\'sylius.context.locale\').getLocaleCode(), $slug))', 'expr:service(\'sylius.context.customer\').getCustomer()']], 'redirect' => ['route' => 'sylius_shop_product_show', 'parameters' => ['slug' => '$slug']], 'flash' => 'sylius.review.wait_for_the_acceptation']], ['_locale', 'slug'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        8578 => [[['_route' => 'sylius_paypal_shop_create_paypal_order', '_controller' => 'sylius_paypal.controller.create_paypal_order'], ['_locale', 'token'], ['POST' => 0], null, false, true, null]],
        8608 => [[['_route' => 'sylius_paypal_shop_create_paypal_order_from_cart', '_controller' => 'sylius_paypal.controller.create_paypal_order_from_cart'], ['_locale', 'id'], ['POST' => 0, 'GET' => 1], null, false, true, null]],
        8654 => [[['_route' => 'sylius_paypal_shop_complete_paypal_order', '_controller' => 'sylius_paypal.controller.complete_paypal_order'], ['_locale', 'token'], ['POST' => 0], null, false, true, null]],
        8668 => [[['_route' => 'sylius_shop_contact_request', '_controller' => 'sylius_shop.controller.contact::requestAction', '_sylius' => ['redirect' => 'sylius_shop_homepage']], ['_locale'], ['GET' => 0, 'POST' => 1], null, true, false, null]],
        8706 => [[['_route' => 'sylius_paypal_shop_cancel_order', '_controller' => 'sylius_paypal.controller.cancel_paypal_order'], ['_locale'], ['POST' => 0], null, false, false, null]],
        8722 => [[['_route' => 'sylius_paypal_shop_cancel_payment', '_controller' => 'sylius_paypal.controller.cancel_paypal_payment'], ['_locale'], ['POST' => 0], null, false, false, null]],
        8748 => [[['_route' => 'sylius_paypal_shop_cancel_checkout_payment', '_controller' => 'sylius_paypal.controller.cancel_paypal_checkout_payment'], ['_locale'], ['POST' => 0], null, false, false, null]],
        8763 => [[['_route' => 'sylius_shop_cart_summary', '_controller' => 'sylius.controller.order::summaryAction', '_sylius' => ['template' => '@SyliusShop/cart/index.html.twig', 'form' => 'Sylius\\Bundle\\ShopBundle\\Form\\Type\\CartType']], ['_locale'], ['GET' => 0], null, true, false, null]],
        8781 => [[['_route' => 'sylius_shop_cart_checkout', '_controller' => 'sylius.controller.order::saveAction', '_sylius' => ['template' => '@SyliusShop/cart/index.html.twig', 'redirect' => 'sylius_shop_checkout_start', 'form' => 'Sylius\\Bundle\\ShopBundle\\Form\\Type\\CartType', 'flash' => false]], ['_locale'], ['PATCH' => 0], null, false, false, null]],
        8802 => [[['_route' => 'sylius_shop_checkout_start', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction', 'route' => 'sylius_shop_checkout_address'], ['_locale'], ['GET' => 0], null, true, false, null]],
        8822 => [[['_route' => 'sylius_shop_checkout_address', '_controller' => 'sylius.controller.order::updateAction', '_sylius' => ['event' => 'address', 'flash' => false, 'template' => '@SyliusShop/checkout/address.html.twig', 'form' => ['type' => 'Sylius\\Bundle\\ShopBundle\\Form\\Type\\Checkout\\AddressType', 'options' => ['customer' => 'expr:service(\'sylius.context.customer\').getCustomer()']], 'repository' => ['method' => 'findCartForAddressing', 'arguments' => ['expr:service(\'sylius.context.cart\').getCart().getId()']], 'state_machine' => ['graph' => 'sylius_order_checkout', 'transition' => 'address']]], ['_locale'], ['GET' => 0, 'PUT' => 1], null, false, false, null]],
        8850 => [[['_route' => 'sylius_shop_checkout_select_shipping', '_controller' => 'sylius.controller.order::updateAction', '_sylius' => ['event' => 'select_shipping', 'flash' => false, 'template' => '@SyliusShop/checkout/select_shipping.html.twig', 'form' => 'Sylius\\Bundle\\ShopBundle\\Form\\Type\\Checkout\\SelectShippingType', 'repository' => ['method' => 'findCartForSelectingShipping', 'arguments' => ['expr:service(\'sylius.context.cart\').getCart().getId()']], 'state_machine' => ['graph' => 'sylius_order_checkout', 'transition' => 'select_shipping']]], ['_locale'], ['GET' => 0, 'PUT' => 1], null, false, false, null]],
        8866 => [[['_route' => 'sylius_shop_checkout_select_payment', '_controller' => 'sylius.controller.order::updateAction', '_sylius' => ['event' => 'payment', 'flash' => false, 'template' => '@SyliusShop/checkout/select_payment.html.twig', 'form' => 'Sylius\\Bundle\\ShopBundle\\Form\\Type\\Checkout\\SelectPaymentType', 'repository' => ['method' => 'findCartForSelectingPayment', 'arguments' => ['expr:service(\'sylius.context.cart\').getCart().getId()']], 'state_machine' => ['graph' => 'sylius_order_checkout', 'transition' => 'select_payment']]], ['_locale'], ['GET' => 0, 'PUT' => 1], null, false, false, null]],
        8884 => [[['_route' => 'sylius_shop_checkout_complete', '_controller' => 'sylius.controller.order::updateAction', '_sylius' => ['event' => 'complete', 'flash' => false, 'template' => '@SyliusShop/checkout/complete.html.twig', 'repository' => ['method' => 'findCartForSummary', 'arguments' => ['expr:service(\'sylius.context.cart\').getCart().getId()']], 'state_machine' => ['graph' => 'sylius_order_checkout', 'transition' => 'complete'], 'redirect' => ['route' => 'sylius_shop_order_pay', 'parameters' => ['tokenValue' => 'resource.tokenValue']], 'form' => ['type' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Checkout\\CompleteType', 'options' => ['validation_groups' => 'sylius_checkout_complete']]]], ['_locale'], ['GET' => 0, 'PUT' => 1], null, false, false, null]],
        8919 => [[['_route' => 'sylius_paypal_shop_update_paypal_order', '_controller' => 'sylius_paypal.controller.update_paypal_order'], ['_locale'], ['POST' => 0], null, false, false, null]],
        8977 => [[['_route' => 'sylius_paypal_shop_cancel_last_payment', '_controller' => 'sylius_paypal.controller.cancel_last_paypal_payment'], ['_locale', 'token'], ['GET' => 0], null, false, false, null]],
        8996 => [[['_route' => 'sylius_shop_order_thank_you', '_controller' => 'sylius.controller.order::thankYouAction', '_sylius' => ['template' => '@SyliusShop/order/thank_you.html.twig']], ['_locale'], ['GET' => 0], null, false, false, null]],
        9017 => [[['_route' => 'sylius_shop_order_pay', '_controller' => 'sylius_shop.controller.order_pay::payAction', '_sylius' => ['redirect' => ['route' => 'sylius_shop_order_after_pay']]], ['_locale', 'tokenValue'], ['GET' => 0], null, false, false, null]],
        9050 => [[['_route' => 'sylius_shop_order_after_pay', 'hash' => null, '_controller' => 'sylius_shop.controller.order_pay::afterPayAction'], ['_locale', 'hash'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        9067 => [[['_route' => 'sylius_shop_order_show', '_controller' => 'sylius.controller.order::updateAction', '_sylius' => ['template' => '@SyliusShop/order/show.html.twig', 'repository' => ['method' => 'findOneBy', 'arguments' => [['tokenValue' => '$tokenValue']]], 'form' => ['type' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Checkout\\SelectPaymentType', 'options' => ['validation_groups' => ['sylius_order_pay']]], 'redirect' => ['route' => 'sylius_shop_order_pay', 'parameters' => ['tokenValue' => 'resource.tokenValue']], 'flash' => false]], ['_locale', 'tokenValue'], ['GET' => 0, 'PUT' => 1], null, false, true, null]],
        9111 => [[['_route' => 'sylius_shop_live_component', '_live_action' => 'get'], ['_locale', '_live_component', '_live_action'], null, null, false, true, null]],
        9131 => [[['_route' => 'sylius_shop_login', '_controller' => 'sylius.controller.security::loginAction', '_sylius' => ['template' => '@SyliusShop/account/login.html.twig', 'logged_in_route' => 'sylius_shop_account_dashboard']], ['_locale'], ['GET' => 0], null, false, false, null]],
        9147 => [[['_route' => 'sylius_shop_login_check', '_controller' => 'sylius.controller.security::checkAction'], ['_locale'], ['POST' => 0], null, false, false, null]],
        9160 => [[['_route' => 'sylius_shop_logout'], ['_locale'], ['GET' => 0], null, false, false, null]],
        9188 => [[['_route' => 'sylius_shop_json_login_check', '_controller' => 'sylius.controller.security::jsonLoginCheck'], ['_locale'], ['POST' => 0], null, false, false, null]],
        9208 => [[['_route' => 'sylius_shop_register', '_controller' => 'sylius.controller.customer::createAction', '_sylius' => ['template' => '@SyliusShop/account/register.html.twig', 'form' => 'Sylius\\Bundle\\ShopBundle\\Form\\Type\\CustomerRegistrationType', 'event' => 'register', 'redirect' => ['route' => 'sylius_shop_register_thank_you'], 'flash' => 'sylius.customer.register']], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        9243 => [[['_route' => 'sylius_shop_register_after_checkout', '_controller' => 'sylius.controller.customer::createAction', '_sylius' => ['form' => 'Sylius\\Bundle\\ShopBundle\\Form\\Type\\CustomerRegistrationType', 'factory' => ['method' => ['expr:service("sylius.factory.customer_after_checkout")', 'createAfterCheckout'], 'arguments' => ['expr:service("sylius.repository.order").findOneByTokenValue($tokenValue)']], 'template' => '@SyliusShop/account/register.html.twig', 'event' => 'register', 'redirect' => ['route' => 'sylius_shop_register_thank_you'], 'flash' => 'sylius.customer.register']], ['_locale', 'tokenValue'], ['GET' => 0], null, false, true, null]],
        9263 => [[['_route' => 'sylius_shop_register_thank_you', '_controller' => 'sylius_shop.controller.register_thank_you::thankYouAction'], ['_locale'], ['GET' => 0], null, false, false, null]],
        9295 => [[['_route' => 'sylius_shop_request_password_reset_token', '_controller' => 'sylius.controller.shop_user::requestPasswordResetTokenAction', '_sylius' => ['template' => '@SyliusShop/account/forgotten_password.html.twig', 'redirect' => 'sylius_shop_login']], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        9313 => [[['_route' => 'sylius_shop_password_reset', '_controller' => 'sylius.controller.shop_user::resetPasswordAction', '_sylius' => ['template' => '@SyliusShop/account/reset_password.html.twig', 'redirect' => 'sylius_shop_login']], ['_locale', 'token'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        9332 => [[['_route' => 'sylius_shop_user_request_verification_token', '_controller' => 'sylius.controller.shop_user::requestVerificationTokenAction', '_sylius' => ['redirect' => 'sylius_shop_account_dashboard']], ['_locale'], ['POST' => 0], null, false, false, null]],
        9350 => [[['_route' => 'sylius_shop_user_verification', '_controller' => 'sylius.controller.shop_user::verifyAction', '_sylius' => ['redirect' => 'sylius_shop_account_dashboard']], ['_locale', 'token'], ['GET' => 0], null, false, true, null]],
        9377 => [[['_route' => 'sylius_shop_product_index', '_controller' => 'sylius.controller.product::indexAction', '_sylius' => ['template' => '@SyliusShop/product/index.html.twig', 'grid' => 'sylius_shop_product']], ['_locale', 'slug'], ['GET' => 0], null, false, true, null]],
        9434 => [[['_route' => 'sylius_shop_account_live_component', '_live_action' => 'get'], ['_locale', '_live_component', '_live_action'], null, null, false, true, null]],
        9452 => [[['_route' => 'sylius_shop_account_order_index', '_controller' => 'sylius.controller.order::indexAction', '_sylius' => ['section' => 'shop_account', 'template' => '@SyliusShop/account/order/index.html.twig', 'grid' => 'sylius_shop_account_order']], ['_locale'], ['GET' => 0], null, true, false, null]],
        9470 => [[['_route' => 'sylius_shop_account_order_show', '_controller' => 'sylius.controller.order::showAction', '_sylius' => ['section' => 'shop_account', 'template' => '@SyliusShop/account/order/show.html.twig', 'repository' => ['method' => 'findOneByNumberAndCustomer', 'arguments' => ['$number', 'expr:service(\'sylius.context.customer\').getCustomer()']]]], ['_locale', 'number'], ['GET' => 0], null, false, true, null]],
        9496 => [[['_route' => 'sylius_shop_account_address_book_index', '_controller' => 'sylius.controller.address::indexAction', '_sylius' => ['section' => 'shop_account', 'template' => '@SyliusShop/account/address_book/index.html.twig', 'paginate' => false, 'repository' => ['method' => 'findByCustomer', 'arguments' => ['expr:service(\'sylius.context.customer\').getCustomer()']]]], ['_locale'], ['GET' => 0], null, true, false, null]],
        9512 => [[['_route' => 'sylius_shop_account_address_book_create', '_controller' => 'sylius.controller.address::createAction', '_sylius' => ['form' => ['type' => 'Sylius\\Bundle\\ShopBundle\\Form\\Type\\AddressType'], 'section' => 'shop_account', 'template' => '@SyliusShop/account/address_book/create.html.twig', 'factory' => ['method' => 'createForCustomer', 'arguments' => ['expr:service(\'sylius.context.customer\').getCustomer()']], 'redirect' => ['route' => 'sylius_shop_account_address_book_index', 'parameters' => []], 'flash' => 'sylius.customer.add_address']], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        9540 => [[['_route' => 'sylius_shop_account_address_book_update', '_controller' => 'sylius.controller.address::updateAction', '_sylius' => ['form' => ['type' => 'Sylius\\Bundle\\ShopBundle\\Form\\Type\\AddressType'], 'section' => 'shop_account', 'template' => '@SyliusShop/account/address_book/update.html.twig', 'repository' => ['method' => 'findOneByCustomer', 'arguments' => ['$id', 'expr:service(\'sylius.context.customer\').getCustomer()']], 'redirect' => ['route' => 'sylius_shop_account_address_book_index', 'parameters' => []]]], ['_locale', 'id'], ['GET' => 0, 'PUT' => 1], null, false, false, null]],
        9565 => [[['_route' => 'sylius_shop_account_address_book_set_as_default', '_controller' => 'sylius.controller.customer::updateAction', '_sylius' => ['section' => 'shop_account', 'form' => ['type' => 'Sylius\\Bundle\\ShopBundle\\Form\\Type\\CustomerDefaultAddressType', 'options' => ['customer' => 'expr:service(\'sylius.context.customer\').getCustomer()']], 'repository' => ['method' => 'find', 'arguments' => ['expr:service(\'sylius.context.customer\').getCustomer()']], 'redirect' => ['route' => 'sylius_shop_account_address_book_index', 'parameters' => []], 'flash' => 'sylius.customer.set_address_as_default']], ['_locale', 'id'], ['GET' => 0, 'PATCH' => 1], null, false, false, null]],
        9575 => [[['_route' => 'sylius_shop_account_address_book_delete', '_controller' => 'sylius.controller.address::deleteAction', '_sylius' => ['section' => 'shop_account', 'repository' => ['method' => 'findOneByCustomer', 'arguments' => ['$id', 'expr:service(\'sylius.context.customer\').getCustomer()']], 'redirect' => 'sylius_shop_account_address_book_index']], ['_locale', 'id'], ['DELETE' => 0], null, false, true, null]],
        9596 => [[['_route' => 'sylius_shop_account_dashboard', '_controller' => 'sylius.controller.customer::showAction', '_sylius' => ['template' => '@SyliusShop/account/dashboard.html.twig', 'repository' => ['method' => 'find', 'arguments' => ['expr:service(\'sylius.context.customer\').getCustomer()']]]], ['_locale'], ['GET' => 0], null, false, false, null]],
        9617 => [[['_route' => 'sylius_shop_account_profile_update', '_controller' => 'sylius.controller.customer::updateAction', '_sylius' => ['template' => '@SyliusShop/account/profile_update.html.twig', 'form' => 'Sylius\\Bundle\\ShopBundle\\Form\\Type\\CustomerProfileType', 'repository' => ['method' => 'find', 'arguments' => ['expr:service(\'sylius.context.customer\').getCustomer()']], 'redirect' => ['route' => 'sylius_shop_account_profile_update', 'parameters' => []]]], ['_locale'], ['GET' => 0, 'PUT' => 1], null, false, false, null]],
        9642 => [[['_route' => 'sylius_shop_account_change_password', '_controller' => 'sylius.controller.shop_user::changePasswordAction', '_sylius' => ['form' => 'Sylius\\Bundle\\ShopBundle\\Form\\Type\\UserChangePasswordType', 'template' => '@SyliusShop/account/change_password.html.twig', 'redirect' => 'sylius_shop_account_dashboard']], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        9652 => [[['_route' => 'sylius_shop_account_root', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction', 'route' => 'sylius_shop_account_dashboard', 'permanent' => true], ['_locale'], ['GET' => 0], null, true, false, null]],
        9690 => [[['_route' => 'sylius_shop_switch_currency', '_controller' => 'sylius_shop.controller.currency_switch::switchAction'], ['_locale', 'code'], ['GET' => 0], null, false, true, null]],
        9714 => [[['_route' => 'sylius_shop_switch_locale', '_controller' => 'sylius_shop.controller.locale_switch::switchAction'], ['_locale', 'code'], ['GET' => 0], null, false, true, null]],
        9725 => [[['_route' => 'sylius_shop_homepage', 'template' => '@SyliusShop/homepage/index.html.twig', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction'], ['_locale'], ['GET' => 0], null, true, true, null]],
        9768 => [[['_route' => 'payum_authorize_do', '_controller' => 'Payum\\Bundle\\PayumBundle\\Controller\\AuthorizeController::doAction'], ['payum_token'], null, null, false, true, null]],
        9793 => [[['_route' => 'payum_capture_do', '_controller' => 'Payum\\Bundle\\PayumBundle\\Controller\\CaptureController::doAction'], ['payum_token'], null, null, false, true, null]],
        9827 => [[['_route' => 'payum_notify_do_unsafe', '_controller' => 'Payum\\Bundle\\PayumBundle\\Controller\\NotifyController::doUnsafeAction'], ['gateway'], null, null, false, true, null]],
        9844 => [[['_route' => 'payum_notify_do', '_controller' => 'Payum\\Bundle\\PayumBundle\\Controller\\NotifyController::doAction'], ['payum_token'], null, null, false, true, null]],
        9876 => [[['_route' => 'sylius_payment_method_notify', '_controller' => 'sylius.controller.payment_method_notify'], ['code'], null, null, false, true, null]],
        9902 => [[['_route' => 'sylius_payment_request_notify', '_controller' => 'sylius.controller.payment_request_notify'], ['hash'], null, null, false, true, null]],
        9930 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        9973 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        10011 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        10027 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        10049 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        10064 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        10076 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
