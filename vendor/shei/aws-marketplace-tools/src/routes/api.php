<?php
\Illuminate\Support\Facades\Route::post("/aws/resolve", [\Shei\AwsMarketplaceTools\Controllers\AwsMarketplaceController::class, "resolveCustomer"]);
