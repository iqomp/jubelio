<?php
return array (
  'Journal' => 
  array (
    'GetAccountLookup' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/accounts/lookup/all',
      'args' => 
      array (
      ),
    ),
    'GetAllJournal' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/journal/',
      'args' => 
      array (
        0 => 'query',
      ),
      'query' => 
      array (
        'page' => 1,
        'pageSize' => 12,
      ),
    ),
    'GetJournalById' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/journal/{id}',
      'args' => 
      array (
        0 => 'id',
      ),
    ),
    'GetAllManualJournal' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/journal/manual-journal/',
      'args' => 
      array (
        0 => 'query',
      ),
      'query' => 
      array (
        'page' => 1,
        'pageSize' => 12,
      ),
    ),
    'CreateEditManualJournal' => 
    array (
      'auth' => true,
      'method' => 'POST',
      'path' => '/journal/manual-journal/',
      'args' => 
      array (
        0 => 'body',
      ),
    ),
  ),
  'CashBank' => 
  array (
    'GetPayments' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/cashbank/payments/',
      'args' => 
      array (
        0 => 'query',
      ),
      'query' => 
      array (
        'page' => 1,
        'pageSize' => 12,
      ),
    ),
    'GetPaymentById' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/cashbank/payments/id',
      'args' => 
      array (
      ),
    ),
    'GetReceives' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/cashbank/receives/',
      'args' => 
      array (
        0 => 'query',
      ),
      'query' => 
      array (
        'page' => 1,
        'pageSize' => 12,
      ),
    ),
    'GetReceiveById' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/cashbank/receives/id',
      'args' => 
      array (
      ),
    ),
  ),
  'Contact' => 
  array (
    'GetContactCategory' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/contact/category/',
      'args' => 
      array (
        0 => 'query',
      ),
      'query' => 
      array (
        'page' => 1,
        'pageSize' => 12,
      ),
    ),
    'GetAllContacts' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/contacts/',
      'args' => 
      array (
        0 => 'query',
      ),
      'query' => 
      array (
        'page' => 1,
        'pageSize' => 12,
      ),
    ),
    'CreateEditContact' => 
    array (
      'auth' => true,
      'method' => 'POST',
      'path' => '/contacts/',
      'args' => 
      array (
        0 => 'body',
      ),
    ),
    'DeleteContact' => 
    array (
      'auth' => true,
      'method' => 'DELETE',
      'path' => '/contacts/',
      'args' => 
      array (
        0 => 'body',
      ),
    ),
    'GetContact' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/contacts/{id}',
      'args' => 
      array (
        0 => 'id',
      ),
    ),
    'GetCustomersandVendors' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/contacts/customers-suppliers/',
      'args' => 
      array (
        0 => 'query',
      ),
      'query' => 
      array (
        'page' => 1,
        'pageSize' => 12,
      ),
    ),
    'GetCustomers' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/contacts/customers/',
      'args' => 
      array (
        0 => 'query',
      ),
      'query' => 
      array (
        'page' => 1,
        'pageSize' => 12,
      ),
    ),
    'GetVendors' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/contacts/suppliers/',
      'args' => 
      array (
        0 => 'query',
      ),
      'query' => 
      array (
        'page' => 1,
        'pageSize' => 12,
      ),
    ),
  ),
  'Couriers' => 
  array (
    'GetAllCouriers' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/couriers',
      'args' => 
      array (
      ),
    ),
    'GetCourier' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/couriers/{id}',
      'args' => 
      array (
        0 => 'id',
      ),
    ),
    'GetTenantCourier' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/couriers/tenant/{id}',
      'args' => 
      array (
        0 => 'id',
      ),
    ),
  ),
  'Inventory' => 
  array (
    'GetAllProductsStock' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/inventory/',
      'args' => 
      array (
        0 => 'query',
      ),
      'query' => 
      array (
        'page' => 1,
        'pageSize' => 12,
      ),
    ),
    'GetInventoryProductStockHistory' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/inventory/activity/',
      'args' => 
      array (
        0 => 'query',
      ),
      'query' => 
      array (
        'page' => 1,
        'pageSize' => 12,
        'itemId' => NULL,
      ),
    ),
    'GetAllStockAdjustments' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/inventory/adjustments/',
      'args' => 
      array (
        0 => 'query',
      ),
      'query' => 
      array (
        'page' => 1,
        'pageSize' => 12,
      ),
    ),
    'CreateEditStockAdjustment' => 
    array (
      'auth' => true,
      'method' => 'POST',
      'path' => '/inventory/adjustments/',
      'args' => 
      array (
        0 => 'body',
      ),
    ),
    'DeleteStockAdjustment' => 
    array (
      'auth' => true,
      'method' => 'DELETE',
      'path' => '/inventory/adjustments/',
      'args' => 
      array (
        0 => 'body',
      ),
    ),
    'GetStockAdjustment' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/inventory/adjustments/{id}',
      'args' => 
      array (
        0 => 'id',
      ),
    ),
    'GetItemCatalog' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/inventory/catalog/id',
      'args' => 
      array (
        0 => 'id',
      ),
    ),
    'GetItemBatchNumber' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/inventory/items/{id}/batch-number',
      'args' => 
      array (
        0 => 'id',
      ),
    ),
    'GetItemCostandStock' => 
    array (
      'auth' => true,
      'method' => 'POST',
      'path' => '/inventory/items/to-adjust/',
      'args' => 
      array (
        0 => 'body',
      ),
    ),
    'GetItemsToSell' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/inventory/items/to-sell/',
      'args' => 
      array (
      ),
    ),
    'CreateEditAmountAdjustment' => 
    array (
      'auth' => true,
      'method' => 'POST',
      'path' => '/inventory/revaluations/',
      'args' => 
      array (
        0 => 'body',
      ),
    ),
    'MarkItemTransferasPrinted' => 
    array (
      'auth' => true,
      'method' => 'POST',
      'path' => '/inventory/transfer/mark-printed',
      'args' => 
      array (
        0 => 'body',
      ),
    ),
    'CreateEditStockTransfer' => 
    array (
      'auth' => true,
      'method' => 'POST',
      'path' => '/inventory/transfers/',
      'args' => 
      array (
        0 => 'body',
      ),
    ),
    'DeleteStockTransfer' => 
    array (
      'auth' => true,
      'method' => 'DELETE',
      'path' => '/inventory/transfers/',
      'args' => 
      array (
        0 => 'body',
      ),
    ),
    'GetStockTransfer' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/inventory/transfers/{id}',
      'args' => 
      array (
        0 => 'id',
      ),
    ),
    'GetStockTransferIn' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/inventory/transfers/in',
      'args' => 
      array (
        0 => 'query',
      ),
      'query' => 
      array (
        'page' => 1,
        'pageSize' => 12,
      ),
    ),
    'GetStockTransferOut' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/inventory/transfers/out',
      'args' => 
      array (
        0 => 'query',
      ),
      'query' => 
      array (
        'page' => 1,
        'pageSize' => 12,
      ),
    ),
    'GetStockTransferTransit' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/inventory/transfers/transit',
      'args' => 
      array (
        0 => 'query',
      ),
      'query' => 
      array (
        'page' => 1,
        'pageSize' => 12,
      ),
    ),
  ),
  'ProductListing' => 
  array (
    'ProductListing' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/inventory/catalog/for-listing/{id}',
      'args' => 
      array (
        0 => 'id',
      ),
    ),
    'SaveProductListing' => 
    array (
      'auth' => true,
      'method' => 'POST',
      'path' => '/inventory/catalog/listing',
      'args' => 
      array (
        0 => 'body',
      ),
    ),
    'UploadProductListing' => 
    array (
      'auth' => true,
      'method' => 'POST',
      'path' => '/inventory/catalog/upload',
      'args' => 
      array (
        0 => 'body',
      ),
    ),
    'ChannelCategories' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/inventory/categories/channel-categories/{parent_id}',
      'args' => 
      array (
        0 => 'parent_id',
        1 => 'query',
      ),
      'query' => 
      array (
        'id' => NULL,
      ),
    ),
    'UploadFailed' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/inventory/items/errors/',
      'args' => 
      array (
        0 => 'query',
      ),
      'query' => 
      array (
        'page' => 1,
        'pageSize' => 12,
      ),
    ),
    'GetShopeeLogistics' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/shopee/logistics',
      'args' => 
      array (
        0 => 'query',
      ),
      'query' => 
      array (
        'store_id' => NULL,
      ),
    ),
    'GetTokopediaShowcases' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/tokopedia/showcases',
      'args' => 
      array (
        0 => 'query',
      ),
      'query' => 
      array (
        'store_id' => NULL,
      ),
    ),
  ),
  'Product' => 
  array (
    'CreateEditProduct' => 
    array (
      'auth' => true,
      'method' => 'POST',
      'path' => '/inventory/catalog/id',
      'args' => 
      array (
        0 => 'body',
      ),
    ),
    'GetStoreCategories' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/inventory/categories/{channel_id}/store-categories/{store_id}',
      'args' => 
      array (
        0 => 'channel_id',
        1 => 'store_id',
      ),
    ),
    'GetAttributesValues' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/inventory/categories/{id}/attribute-values/',
      'args' => 
      array (
        0 => 'id',
      ),
    ),
    'GetCategoryAttributes' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/inventory/categories/{id}/attributes/',
      'args' => 
      array (
        0 => 'id',
      ),
    ),
    'GetCategoryVariants' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/inventory/categories/{id}/variations/',
      'args' => 
      array (
        0 => 'id',
      ),
    ),
    'GetCategoryMappingtoMarketplace' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/inventory/categories/category-map/{id}',
      'args' => 
      array (
        0 => 'id',
      ),
    ),
    'GetAllCategories' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/inventory/categories/item-categories/',
      'args' => 
      array (
      ),
    ),
    'GetCategoryInformation' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/inventory/categories/item-categories/information/{id}/',
      'args' => 
      array (
        0 => 'id',
      ),
    ),
    'UploadProductImages' => 
    array (
      'auth' => true,
      'method' => 'POST',
      'path' => '/inventory/images/',
      'args' => 
      array (
        0 => 'body',
      ),
    ),
    'GetAllBundles' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/inventory/item-bundles/',
      'args' => 
      array (
        0 => 'query',
      ),
      'query' => 
      array (
        'page' => 1,
        'pageSize' => 12,
      ),
    ),
    'GetAllProductGroups' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/inventory/items/',
      'args' => 
      array (
        0 => 'query',
      ),
      'query' => 
      array (
        'page' => 1,
        'pageSize' => 12,
      ),
    ),
    'DeleteProduct' => 
    array (
      'auth' => true,
      'method' => 'DELETE',
      'path' => '/inventory/items/',
      'args' => 
      array (
        0 => 'body',
      ),
    ),
    'CreateEditProductBundle' => 
    array (
      'auth' => true,
      'method' => 'POST',
      'path' => '/inventory/items/',
      'args' => 
      array (
        0 => 'body',
      ),
    ),
    'GetProduct' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/inventory/items/{id}',
      'args' => 
      array (
        0 => 'id',
      ),
    ),
    'GetProductStocksbyIds' => 
    array (
      'auth' => true,
      'method' => 'POST',
      'path' => '/inventory/items/all-stocks/',
      'args' => 
      array (
        0 => 'body',
      ),
    ),
    'GetProductbySku' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/inventory/items/by-sku/{sku}',
      'args' => 
      array (
        0 => 'sku',
      ),
    ),
    'GetAllChannelAttributes' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/inventory/items/channel-category-attributes/',
      'args' => 
      array (
        0 => 'query',
      ),
      'query' => 
      array (
        'id' => NULL,
        'channel_id' => NULL,
      ),
    ),
    'GetAllChannelCategoryTree' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/inventory/items/channel-category-tree/',
      'args' => 
      array (
        0 => 'query',
      ),
      'query' => 
      array (
        'id' => NULL,
        'channel_id' => NULL,
      ),
    ),
    'GetProductGroup' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/inventory/items/group/{id}',
      'args' => 
      array (
        0 => 'id',
      ),
    ),
    'GetProductPricesbyIds' => 
    array (
      'auth' => true,
      'method' => 'POST',
      'path' => '/inventory/items/prices',
      'args' => 
      array (
        0 => 'body',
      ),
    ),
    'GetAllProductPrices' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/inventory/price-list/',
      'args' => 
      array (
        0 => 'query',
      ),
      'query' => 
      array (
        'page' => 1,
        'pageSize' => 12,
      ),
    ),
    'EditProductPrices' => 
    array (
      'auth' => true,
      'method' => 'POST',
      'path' => '/inventory/price-list/',
      'args' => 
      array (
        0 => 'body',
      ),
    ),
    'GetAllPromotions' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/inventory/promotions/',
      'args' => 
      array (
        0 => 'query',
      ),
      'query' => 
      array (
        'page' => 1,
        'pageSize' => 12,
      ),
    ),
    'CreateEditPromotion' => 
    array (
      'auth' => true,
      'method' => 'POST',
      'path' => '/inventory/promotions/',
      'args' => 
      array (
        0 => 'body',
      ),
    ),
    'DeletePromotion' => 
    array (
      'auth' => true,
      'method' => 'DELETE',
      'path' => '/inventory/promotions/',
      'args' => 
      array (
        0 => 'body',
      ),
    ),
    'GetPromotion' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/inventory/promotions/{id}',
      'args' => 
      array (
        0 => 'id',
      ),
    ),
    'GetAllBrands' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/inventory/search-brands/',
      'args' => 
      array (
        0 => 'query',
      ),
      'query' => 
      array (
        'page' => 1,
        'pageSize' => 12,
      ),
    ),
    'UploadProductImage' => 
    array (
      'auth' => true,
      'method' => 'POST',
      'path' => '/inventory/upload-image',
      'args' => 
      array (
        0 => 'body',
      ),
    ),
    'GetAllVariations' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/variations',
      'args' => 
      array (
        0 => 'query',
      ),
      'query' => 
      array (
        'page' => 1,
        'pageSize' => 12,
      ),
    ),
  ),
  'Sales' => 
  array (
    'SetItemtoNotReturn' => 
    array (
      'auth' => true,
      'method' => 'POST',
      'path' => '/inventory/items/complete-return/',
      'args' => 
      array (
        0 => 'body',
      ),
    ),
    'RejectReturnRequest' => 
    array (
      'auth' => true,
      'method' => 'POST',
      'path' => '/inventory/items/reject-return/',
      'args' => 
      array (
        0 => 'body',
      ),
    ),
    'SetItemtoReturn' => 
    array (
      'auth' => true,
      'method' => 'POST',
      'path' => '/inventory/items/to-return/',
      'args' => 
      array (
        0 => 'body',
      ),
    ),
    'GetAllSales' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/sales/',
      'args' => 
      array (
        0 => 'query',
      ),
      'query' => 
      array (
        'page' => 1,
        'pageSize' => 12,
      ),
    ),
    'DeleteSalesReturnInvoice' => 
    array (
      'auth' => true,
      'method' => 'DELETE',
      'path' => '/sales/',
      'args' => 
      array (
        0 => 'body',
      ),
    ),
    'GetAllInvoices' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/sales/invoices/',
      'args' => 
      array (
        0 => 'query',
      ),
      'query' => 
      array (
        'page' => 1,
        'pageSize' => 12,
      ),
    ),
    'CreateEditInvoice' => 
    array (
      'auth' => true,
      'method' => 'POST',
      'path' => '/sales/invoices/',
      'args' => 
      array (
        0 => 'body',
      ),
    ),
    'GetInvoice' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/sales/invoices/{id}',
      'args' => 
      array (
        0 => 'id',
      ),
    ),
    'GetAllDueInvoices' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/sales/invoices/overdue/',
      'args' => 
      array (
        0 => 'query',
      ),
      'query' => 
      array (
        'page' => 1,
        'pageSize' => 12,
      ),
    ),
    'GetAllInvoicesBasedonStore' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/sales/invoices/summary/',
      'args' => 
      array (
        0 => 'query',
      ),
      'query' => 
      array (
        'page' => 1,
        'pageSize' => 12,
      ),
    ),
    'GetAllOutstandingInvoices' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/sales/invoices/unpaid/',
      'args' => 
      array (
        0 => 'query',
      ),
      'query' => 
      array (
        'page' => 1,
        'pageSize' => 12,
      ),
    ),
    'GetAllSalesOrders' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/sales/orders/',
      'args' => 
      array (
        0 => 'query',
      ),
      'query' => 
      array (
        'page' => 1,
        'pageSize' => 12,
      ),
    ),
    'CreateEditSalesOrder' => 
    array (
      'auth' => true,
      'method' => 'POST',
      'path' => '/sales/orders/',
      'args' => 
      array (
        0 => 'body',
      ),
    ),
    'DeleteSalesOrder' => 
    array (
      'auth' => true,
      'method' => 'DELETE',
      'path' => '/sales/orders/',
      'args' => 
      array (
        0 => 'body',
      ),
    ),
    'GetSalesOrder' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/sales/orders/{id}',
      'args' => 
      array (
        0 => 'id',
      ),
    ),
    'GetAllCancelledSalesOrders' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/sales/orders/cancel/',
      'args' => 
      array (
        0 => 'query',
      ),
      'query' => 
      array (
        'page' => 1,
        'pageSize' => 12,
      ),
    ),
    'GetAllCompletedSalesOrders' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/sales/orders/completed/',
      'args' => 
      array (
        0 => 'query',
      ),
      'query' => 
      array (
        'page' => 1,
        'pageSize' => 12,
      ),
    ),
    'DeteleCancelleditems' => 
    array (
      'auth' => true,
      'method' => 'POST',
      'path' => '/sales/orders/delete-canceled',
      'args' => 
      array (
        0 => 'body',
      ),
    ),
    'GetFailedSalesOrders' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/sales/orders/failed/',
      'args' => 
      array (
        0 => 'query',
      ),
      'query' => 
      array (
        'page' => 1,
        'pageSize' => 12,
      ),
    ),
    'MarkSalesOrderasComplete' => 
    array (
      'auth' => true,
      'method' => 'POST',
      'path' => '/sales/orders/mark-as-complete',
      'args' => 
      array (
        0 => 'body',
      ),
    ),
    'GetAllReadytoProcessSalesOrders' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/sales/orders/ready-to-pick/',
      'args' => 
      array (
        0 => 'query',
      ),
      'query' => 
      array (
        'page' => 1,
        'pageSize' => 12,
      ),
    ),
    'GetReturnedSalesOrders' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/sales/orders/returned-list/',
      'args' => 
      array (
        0 => 'query',
      ),
      'query' => 
      array (
        'page' => 1,
        'pageSize' => 12,
      ),
    ),
    'UpdateSalesOrderAWB' => 
    array (
      'auth' => true,
      'method' => 'POST',
      'path' => '/sales/orders/save-airwaybill/',
      'args' => 
      array (
        0 => 'body',
      ),
    ),
    'UpdateSalesOrderReceivedDate' => 
    array (
      'auth' => true,
      'method' => 'POST',
      'path' => '/sales/orders/save-received-date',
      'args' => 
      array (
        0 => 'body',
      ),
    ),
    'SetSalesOrderasPaid' => 
    array (
      'auth' => true,
      'method' => 'POST',
      'path' => '/sales/orders/set-as-paid',
      'args' => 
      array (
        0 => 'body',
      ),
    ),
    'GetAllPacklist' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/sales/unfullfilled/',
      'args' => 
      array (
      ),
    ),
    'GetPacklist' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/sales/packlists/{id}',
      'args' => 
      array (
        0 => 'id',
      ),
    ),
    'ConvertSalesOrdertoInvoicewithPayment' => 
    array (
      'auth' => true,
      'method' => 'POST',
      'path' => '/sales/packlists/create-invoice-payment',
      'args' => 
      array (
        0 => 'body',
      ),
    ),
    'ConvertSalesOrdertoInvoice' => 
    array (
      'auth' => true,
      'method' => 'POST',
      'path' => '/sales/packlists/create-invoice',
      'args' => 
      array (
        0 => 'body',
      ),
    ),
    'GetShippedSalesOrders' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/sales/packlists/shipped/',
      'args' => 
      array (
        0 => 'query',
      ),
      'query' => 
      array (
        'page' => 1,
        'pageSize' => 12,
      ),
    ),
    'GetAllInvoicePayments' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/sales/payments/',
      'args' => 
      array (
        0 => 'query',
      ),
      'query' => 
      array (
        'page' => 1,
        'pageSize' => 12,
      ),
    ),
    'CreateEditInvoicePayment' => 
    array (
      'auth' => true,
      'method' => 'POST',
      'path' => '/sales/payments/',
      'args' => 
      array (
        0 => 'body',
      ),
    ),
    'DeleteInvoicePayment' => 
    array (
      'auth' => true,
      'method' => 'DELETE',
      'path' => '/sales/payments/',
      'args' => 
      array (
        0 => 'body',
      ),
    ),
    'GetInvoicePayment' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/sales/payments/{id}',
      'args' => 
      array (
        0 => 'id',
      ),
    ),
    'CreateEditPickList' => 
    array (
      'auth' => true,
      'method' => 'POST',
      'path' => '/sales/picklists/',
      'args' => 
      array (
        0 => 'body',
      ),
    ),
    'GetPicklist' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/sales/picklists/{id}',
      'args' => 
      array (
        0 => 'id',
      ),
    ),
    'GetAllPicklist' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/sales/picklists/confirm-pick/',
      'args' => 
      array (
        0 => 'query',
      ),
      'query' => 
      array (
        'page' => 1,
        'pageSize' => 12,
      ),
    ),
    'GetListItemtoPick' => 
    array (
      'auth' => true,
      'method' => 'POST',
      'path' => '/sales/picklists/items-to-pick/',
      'args' => 
      array (
        0 => 'body',
      ),
    ),
    'RequestAWBOrder' => 
    array (
      'auth' => true,
      'method' => 'POST',
      'path' => '/sales/request-awb-order/',
      'args' => 
      array (
        0 => 'body',
      ),
    ),
    'GetAllSalesReturnSettlements' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/sales/return-settlements/',
      'args' => 
      array (
        0 => 'query',
      ),
      'query' => 
      array (
        'page' => 1,
        'pageSize' => 12,
      ),
    ),
    'DeleteSalesReturnSettlement' => 
    array (
      'auth' => true,
      'method' => 'DELETE',
      'path' => '/sales/return-settlements/',
      'args' => 
      array (
        0 => 'body',
      ),
    ),
    'GetAllSalesReturnSettlementInvoice' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/sales/return-settlements/invoices/',
      'args' => 
      array (
        0 => 'query',
      ),
      'query' => 
      array (
        'page' => 1,
        'pageSize' => 12,
      ),
    ),
    'CreateEditSalesReturnSettlementInvoice' => 
    array (
      'auth' => true,
      'method' => 'POST',
      'path' => '/sales/return-settlements/invoices/',
      'args' => 
      array (
        0 => 'body',
      ),
    ),
    'GetSalesReturnSettlementInvoice' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/sales/return-settlements/invoices/{id}',
      'args' => 
      array (
        0 => 'id',
      ),
    ),
    'GetAllSalesReturnSettlementRefund' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/sales/return-settlements/refunds/',
      'args' => 
      array (
        0 => 'query',
      ),
      'query' => 
      array (
        'page' => 1,
        'pageSize' => 12,
      ),
    ),
    'CreateEditSalesReturnSettlementRefund' => 
    array (
      'auth' => true,
      'method' => 'POST',
      'path' => '/sales/return-settlements/refunds/',
      'args' => 
      array (
        0 => 'body',
      ),
    ),
    'GetSalesReturnSettlementRefund' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/sales/return-settlements/refunds/{id}',
      'args' => 
      array (
        0 => 'id',
      ),
    ),
    'GetAllItemReturns' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/sales/returns/items/',
      'args' => 
      array (
        0 => 'query',
      ),
      'query' => 
      array (
        'page' => 1,
        'pageSize' => 12,
      ),
    ),
    'GetRejectedReturnedSalesOrders' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/sales/returns/items/rejected/',
      'args' => 
      array (
        0 => 'query',
      ),
      'query' => 
      array (
        'page' => 1,
        'pageSize' => 12,
      ),
    ),
    'GetResolvedApprovedReturnedSalesOrders' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/sales/returns/items/resolved/',
      'args' => 
      array (
        0 => 'query',
      ),
      'query' => 
      array (
        'page' => 1,
        'pageSize' => 12,
      ),
    ),
    'GetAllSalesReturns' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/sales/sales-returns/',
      'args' => 
      array (
        0 => 'query',
      ),
      'query' => 
      array (
        'page' => 1,
        'pageSize' => 12,
      ),
    ),
    'CreateEditSalesReturn' => 
    array (
      'auth' => true,
      'method' => 'POST',
      'path' => '/sales/sales-returns/',
      'args' => 
      array (
        0 => 'body',
      ),
    ),
    'GetSalesReturn' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/sales/sales-returns/{id}',
      'args' => 
      array (
        0 => 'id',
      ),
    ),
    'GetAllOutstandingSalesReturns' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/sales/sales-returns/unpaid/',
      'args' => 
      array (
        0 => 'query',
      ),
      'query' => 
      array (
        'page' => 1,
        'pageSize' => 12,
      ),
    ),
    'GetAllSalesSettlements' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/sales/settlements/',
      'args' => 
      array (
        0 => 'query',
      ),
      'query' => 
      array (
        'page' => 1,
        'pageSize' => 12,
      ),
    ),
    'GetSalesSettlement' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/sales/settlements/{id}',
      'args' => 
      array (
        0 => 'id',
      ),
    ),
    'ShipmentOrders' => 
    array (
      'auth' => true,
      'method' => 'POST',
      'path' => '/sales/shipments/orders/',
      'args' => 
      array (
        0 => 'body',
      ),
    ),
  ),
  'Reports' => 
  array (
    'PrintLazadaInvoiceLabel' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/lazada/get-document/',
      'args' => 
      array (
        0 => 'query',
      ),
      'query' => 
      array (
        'ids' => NULL,
        'document_type' => NULL,
        'store_id' => NULL,
      ),
    ),
    'PrintShippingLabel' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/reports/shipping-label/',
      'args' => 
      array (
      ),
    ),
  ),
  'Location' => 
  array (
    'GetAllLocations' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/locations/',
      'args' => 
      array (
        0 => 'query',
      ),
      'query' => 
      array (
        'page' => 1,
        'pageSize' => 12,
      ),
    ),
    'CreateEditLocation' => 
    array (
      'auth' => true,
      'method' => 'POST',
      'path' => '/locations/',
      'args' => 
      array (
        0 => 'body',
      ),
    ),
    'DeleteLocation' => 
    array (
      'auth' => true,
      'method' => 'DELETE',
      'path' => '/locations/',
      'args' => 
      array (
        0 => 'body',
      ),
    ),
    'GetLocation' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/locations/{id}',
      'args' => 
      array (
        0 => 'id',
      ),
    ),
    'GetAllLocationsthathavePOSOutlets' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/locations/pos',
      'args' => 
      array (
        0 => 'query',
      ),
      'query' => 
      array (
        'page' => 1,
        'pageSize' => 12,
      ),
    ),
    'GetLocationStoreMapping' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/locations/store/',
      'args' => 
      array (
        0 => 'query',
      ),
      'query' => 
      array (
        'page' => 1,
        'pageSize' => 12,
      ),
    ),
  ),
  'Authentication' => 
  array (
    'Login' => 
    array (
      'auth' => false,
      'method' => 'POST',
      'path' => '/login',
      'args' => 
      array (
        0 => 'body',
      ),
    ),
  ),
  'Channels' => 
  array (
    'GetAllStores' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/marketplace/store/',
      'args' => 
      array (
        0 => 'query',
      ),
      'query' => 
      array (
        'page' => 1,
        'pageSize' => 12,
      ),
    ),
  ),
  'Purchasing' => 
  array (
    'DeletePurchaseReturn' => 
    array (
      'auth' => true,
      'method' => 'DELETE',
      'path' => '/purchase/',
      'args' => 
      array (
        0 => 'body',
      ),
    ),
    'GetAllBills' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/purchase/bills/',
      'args' => 
      array (
        0 => 'query',
      ),
      'query' => 
      array (
        'page' => 1,
        'pageSize' => 12,
      ),
    ),
    'CreateEditBill' => 
    array (
      'auth' => true,
      'method' => 'POST',
      'path' => '/purchase/bills/',
      'args' => 
      array (
        0 => 'body',
      ),
    ),
    'DeleteBill' => 
    array (
      'auth' => true,
      'method' => 'DELETE',
      'path' => '/purchase/bills/',
      'args' => 
      array (
        0 => 'body',
      ),
    ),
    'GetBill' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/purchase/bills/{id}',
      'args' => 
      array (
        0 => 'id',
      ),
    ),
    'GetAllDueBills' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/purchase/bills/overdue/',
      'args' => 
      array (
        0 => 'query',
      ),
      'query' => 
      array (
        'page' => 1,
        'pageSize' => 12,
      ),
    ),
    'GetAllOutstandingBills' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/purchase/bills/unpaid/',
      'args' => 
      array (
        0 => 'query',
      ),
      'query' => 
      array (
        'page' => 1,
        'pageSize' => 12,
      ),
    ),
    'GetAllPurchaseOrders' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/purchase/orders/',
      'args' => 
      array (
        0 => 'query',
      ),
      'query' => 
      array (
        'page' => 1,
        'pageSize' => 12,
      ),
    ),
    'CreateEditPurchaseOrder' => 
    array (
      'auth' => true,
      'method' => 'POST',
      'path' => '/purchase/orders/',
      'args' => 
      array (
        0 => 'body',
      ),
    ),
    'DeletePurchaseOrder' => 
    array (
      'auth' => true,
      'method' => 'DELETE',
      'path' => '/purchase/orders/',
      'args' => 
      array (
        0 => 'body',
      ),
    ),
    'GetPurchaseOrder' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/purchase/orders/{id}',
      'args' => 
      array (
        0 => 'id',
      ),
    ),
    'GetAllBillPayments' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/purchase/payments/',
      'args' => 
      array (
        0 => 'query',
      ),
      'query' => 
      array (
        'page' => 1,
        'pageSize' => 12,
      ),
    ),
    'CreateEditBillPayment' => 
    array (
      'auth' => true,
      'method' => 'POST',
      'path' => '/purchase/payments/',
      'args' => 
      array (
        0 => 'body',
      ),
    ),
    'DeleteBillPayment' => 
    array (
      'auth' => true,
      'method' => 'DELETE',
      'path' => '/purchase/payments/',
      'args' => 
      array (
        0 => 'body',
      ),
    ),
    'GetBillPayment' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/purchase/payments/{id}',
      'args' => 
      array (
        0 => 'id',
      ),
    ),
    'GetAllPurchaseReturns' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/purchase/purchase-returns/',
      'args' => 
      array (
        0 => 'query',
      ),
      'query' => 
      array (
        'page' => 1,
        'pageSize' => 12,
      ),
    ),
    'CreateEditPurchaseReturn' => 
    array (
      'auth' => true,
      'method' => 'POST',
      'path' => '/purchase/purchase-returns/',
      'args' => 
      array (
        0 => 'body',
      ),
    ),
    'GetPurchaseReturn' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/purchase/purchase-returns/{id}',
      'args' => 
      array (
        0 => 'id',
      ),
    ),
    'GetAllOutstandingPurchaseReturns' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/purchase/purchase-returns/unpaid/',
      'args' => 
      array (
        0 => 'query',
      ),
      'query' => 
      array (
        'page' => 1,
        'pageSize' => 12,
      ),
    ),
    'DeletePurchaseReturnSettlement' => 
    array (
      'auth' => true,
      'method' => 'DELETE',
      'path' => '/purchase/return-settlements/',
      'args' => 
      array (
        0 => 'body',
      ),
    ),
    'GetAllPurchaseReturnSettlementBills' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/purchase/return-settlements/bills/',
      'args' => 
      array (
        0 => 'query',
      ),
      'query' => 
      array (
        'page' => 1,
        'pageSize' => 12,
      ),
    ),
    'CreateEditPurchaseReturnSettlementBill' => 
    array (
      'auth' => true,
      'method' => 'POST',
      'path' => '/purchase/return-settlements/bills/',
      'args' => 
      array (
        0 => 'body',
      ),
    ),
    'GetPurchaseReturnSettlementBill' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/purchase/return-settlements/bills/{id}',
      'args' => 
      array (
        0 => 'id',
      ),
    ),
    'GetAllPurchaseReturnSettlementRefund' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/purchase/return-settlements/refunds/',
      'args' => 
      array (
        0 => 'query',
      ),
      'query' => 
      array (
        'page' => 1,
        'pageSize' => 12,
      ),
    ),
    'CreateEditPurchaseReturnSettlementRefund' => 
    array (
      'auth' => true,
      'method' => 'POST',
      'path' => '/purchase/return-settlements/refunds/',
      'args' => 
      array (
        0 => 'body',
      ),
    ),
    'GetPurchaseReturnSettlementRefund' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/purchase/return-settlements/refunds/{id}',
      'args' => 
      array (
        0 => 'id',
      ),
    ),
  ),
  'SystemSetting' => 
  array (
    'StoreLocations' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/store-locations/',
      'args' => 
      array (
        0 => 'query',
      ),
      'query' => 
      array (
        'page' => 1,
        'pageSize' => 12,
      ),
    ),
    'AccountMapping' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/systemsetting/account-mapping',
      'args' => 
      array (
      ),
    ),
    'CreateEditWebhook' => 
    array (
      'auth' => true,
      'method' => 'POST',
      'path' => '/systemsetting/webhook',
      'args' => 
      array (
        0 => 'body',
      ),
    ),
    'Taxes' => 
    array (
      'auth' => true,
      'method' => 'GET',
      'path' => '/taxes/',
      'args' => 
      array (
        0 => 'query',
      ),
      'query' => 
      array (
        'page' => 1,
        'pageSize' => 12,
      ),
    ),
  ),
  'Webhooks' => 
  array (
    'NewInvoice' => 
    array (
      'auth' => true,
      'method' => 'POST',
      'path' => '/webhooks/invoice',
      'args' => 
      array (
        0 => 'body',
      ),
    ),
    'UpdatePrice' => 
    array (
      'auth' => true,
      'method' => 'POST',
      'path' => '/webhooks/price',
      'args' => 
      array (
        0 => 'body',
      ),
    ),
    'NewProduct' => 
    array (
      'auth' => true,
      'method' => 'POST',
      'path' => '/webhooks/product',
      'args' => 
      array (
        0 => 'body',
      ),
    ),
    'NewPurchaseOrder' => 
    array (
      'auth' => true,
      'method' => 'POST',
      'path' => '/webhooks/purchaseorder',
      'args' => 
      array (
        0 => 'body',
      ),
    ),
    'UpdateSalesOrder' => 
    array (
      'auth' => true,
      'method' => 'POST',
      'path' => '/webhooks/salesorder',
      'args' => 
      array (
        0 => 'body',
      ),
    ),
    'NewSalesReturn' => 
    array (
      'auth' => true,
      'method' => 'POST',
      'path' => '/webhooks/salesreturn',
      'args' => 
      array (
        0 => 'body',
      ),
    ),
    'UpdateStock' => 
    array (
      'auth' => true,
      'method' => 'POST',
      'path' => '/webhooks/stock',
      'args' => 
      array (
        0 => 'body',
      ),
    ),
    'NewStockTransfer' => 
    array (
      'auth' => true,
      'method' => 'POST',
      'path' => '/webhooks/stocktransfer',
      'args' => 
      array (
        0 => 'body',
      ),
    ),
  ),
);