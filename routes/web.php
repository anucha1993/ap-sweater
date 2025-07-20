<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/product-demo', function () {
    $product = (object)[
        'name' => 'AIIZ เสื้อโปโลผู้ชาย ทอริ้วปลายปก',
        'code' => 'MD54MA-G9CB01',
        'price' => 990,
        'discount_price' => 399,
        'main_image_url' => 'https://cdnaiiz.azureedge.net/media/catalog/product/cache/5e82c09ed71428f0dc796cc6c0ad5b73/1/7/17525537560.AVIF',
        'images' => [
            (object)['url' => 'https://cdnaiiz.azureedge.net/media/catalog/product/cache/5e82c09ed71428f0dc796cc6c0ad5b73/1/7/17525537560.AVIF'],
            (object)['url' => 'https://cdnaiiz.azureedge.net/media/catalog/product/cache/5e82c09ed71428f0dc796cc6c0ad5b73/1/7/17525537560.AVIF'],
            (object)['url' => 'https://cdnaiiz.azureedge.net/media/catalog/product/cache/5e82c09ed71428f0dc796cc6c0ad5b73/1/7/17525537560.AVIF'],
        ],
        'colors' => [
            (object)['hex' => '#000000'],
            (object)['hex' => '#B0B0B0'],
            (object)['hex' => '#440000'],
        ],
        'sizes' => [
            (object)['label' => 'S'],
            (object)['label' => 'M'],
            (object)['label' => 'L'],
            (object)['label' => '2XL'],
            (object)['label' => '3XL'],
        ]
    ];

    return view('products.show', compact('product'));
});
