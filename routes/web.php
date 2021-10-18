<?php

use Illuminate\Support\Facades\Route;

// Backend Routes

require_once __DIR__ . '/backend/authentication.php';

Route::group(['prefix' => 'sadmin', 'middleware' => ['auth:admin', 'admin'], 'namespace' => 'Backend'], function () {

    // Dashboard
    require_once __DIR__ . '/backend/dashboard.php';

    // Site Config
    require_once __DIR__ . '/backend/site_config.php';

    // Product Config
    require_once __DIR__ . '/backend/product.php';

    // Customer
    require_once __DIR__ . '/backend/customer.php';

    // Admin
    require_once __DIR__ . '/backend/admin.php';

    // EConfig
    require_once __DIR__ . '/backend/econfig.php';

    // Social link
    require_once __DIR__ . '/backend/social.php';

    // Blog
    require_once __DIR__ . '/backend/blog.php';

    // Seller
    require_once __DIR__ . '/backend/seller.php';

    // SMS, Email
    require_once __DIR__ . '/backend/sms & email.php';

    // Area Division
    require_once __DIR__ . '/backend/area_division.php';

    // City
    require_once __DIR__ . '/backend/city.php';

    // Post Code
    require_once __DIR__ . '/backend/post_code.php';

    // Campaign
    require_once __DIR__ . '/backend/campaign.php';

    // Agent
    require_once __DIR__ . '/backend/agent.php';

    // Comment
    require_once __DIR__ . '/backend/comment.php';

    // Order
    require_once __DIR__ . '/backend/order.php';

    // Transaction
    require_once __DIR__ . '/backend/transaction.php';

    // Report
    require_once __DIR__ . '/backend/report.php';

    // permission
    require_once __DIR__ . '/backend/permission.php';

    // module
    require_once __DIR__ . '/backend/module.php';

    //submodule
    require_once __DIR__ . '/backend/submodule.php';

});




// Frontend Routes

require_once __DIR__ . '/frontend/home.php';
