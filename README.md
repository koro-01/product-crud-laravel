# product-crud-laravel
A Laravel-based product management system with features to add, update, and delete products in a categorized inventory.
This completes the entire Laravel e-commerce project with full CRUD functionality for both categories and products. The application includes:

1. Controllers for handling business logic
2. Models for database interaction
3. Migrations for database structure
4. Views for user interface
5. Routes for defining URL structure
6. Here's the file and folder structure for this project:


   app/
└── Http/
    └── Controllers/
        └── Admin/
            ├── CategoryController.php
            └── ProductController.php
    └── Models/
        ├── Category.php
        └── Product.php

database/
└── migrations/
    ├── 2024_11_20_000001_create_categories_table.php
    └── 2024_11_20_000002_create_products_table.php

resources/
└── views/
    ├── layouts/
    │   └── admin.blade.php
    │
    └── admin/
        ├── categories/
        │   ├── index.blade.php
        │   ├── create.blade.php
        │   └── edit.blade.php
        │
        └── products/
            ├── index.blade.php
            ├── create.blade.php
            └── edit.blade.php

routes/
└── web.php
