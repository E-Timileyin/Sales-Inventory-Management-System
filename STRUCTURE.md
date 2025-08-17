app/
 ├─ Models/
 │    ├─ User.php
 │    ├─ Product.php
 │    ├─ Customer.php
 │    ├─ Sale.php
 │    ├─ Invoice.php
 │    └─ InventoryLog.php
 │
 ├─ Http/
 │    ├─ Controllers/
 │    │    ├─ AuthController.php
 │    │    ├─ ProductController.php
 │    │    ├─ CustomerController.php
 │    │    ├─ SaleController.php
 │    │    └─ ReportController.php
 │    │
 │    └─ Requests/
 │         ├─ StoreProductRequest.php
 │         ├─ UpdateProductRequest.php
 │         └─ StoreSaleRequest.php
 │
 ├─ Policies/  (Role-based access)
 ├─ Services/  (Business logic helpers)
 └─ Notifications/



<!-- ALTER USER 'sales_user'@'localhost' IDENTIFIED BY '';  -->

