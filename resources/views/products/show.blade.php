@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 py-10">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">

        {{-- ภาพสินค้า --}}
        <div class="flex gap-4">
            {{-- thumbnails --}}
            <div class="space-y-4">
                @foreach ($product->images as $image)
                    <div class="border-2 rounded overflow-hidden cursor-pointer hover:scale-105 transition"  style="border-image: linear-gradient(to top, #facc15, transparent) 1;">
                        <img src="{{ $image->url }}" class="w-20 h-20 object-cover" alt="thumb">
                    </div>
                @endforeach
            </div>

            {{-- main image --}}
            <div class="flex-1 border-2 border-transparent rounded-xl"
                 style="border-image: linear-gradient(to top, #facc15, transparent) 1;">
                <img src="{{ $product->main_image_url }}" class="w-full h-auto object-cover rounded-xl">
            </div>
        </div>

        {{-- รายละเอียดสินค้า --}}
        <div class="space-y-4">
            {{-- ชื่อสินค้า --}}
            <h1 class="text-2xl font-bold text-gray-900">{{ $product->name }}</h1>
            <div class="text-sm text-gray-500">รหัสสินค้า : {{ $product->code }}</div>

            {{-- ราคา --}}
            <div class="text-2xl font-bold text-red-600">
                {{ number_format($product->discount_price, 0) }} บาท
                <span class="text-base text-gray-400 line-through ml-2">{{ number_format($product->price, 0) }} บาท</span>
            </div>

            {{-- สี --}}
            <div class="mt-4">
                <div class="text-sm font-semibold text-gray-700 mb-1">เลือกสี :</div>
                <div class="flex gap-2">
                    @foreach ($product->colors as $color)
                        <span class="w-6 h-6 rounded-full border border-gray-300"
                              style="background-color: {{ $color->hex }}"></span>
                    @endforeach
                </div>
            </div>

            {{-- ขนาด --}}
            <div class="mt-4">
                <div class="text-sm font-semibold text-gray-700 mb-1">เลือกขนาด :</div>
                <div class="flex gap-2 flex-wrap">
                    @foreach ($product->sizes as $size)
                        <span class="border border-gray-300 px-3 py-1 rounded cursor-pointer hover:bg-yellow-100">
                            {{ $size->label }}
                        </span>
                    @endforeach
                </div>
            </div>

            {{-- จำนวน + ปุ่มตะกร้า --}}
            <div class="mt-6 flex items-center gap-4">
                {{-- จำนวน --}}
                <div class="flex items-center border border-gray-300 rounded">
                    <button class="px-3 py-1">−</button>
                    <input type="text" value="1" class="w-10 text-center border-0 focus:outline-none">
                    <button class="px-3 py-1">+</button>
                </div>

                {{-- ปุ่มเพิ่มในตะกร้า --}}
                <button class="bg-yellow-400 hover:bg-blue-700 text-white px-6 py-2 rounded flex items-center gap-2">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" stroke-width="2"
                         viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13l-1.35 2.7a1 1 0 0 0 .9 1.5h12.9M10 21a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm7 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                    </svg>
                    เพิ่มลงในตะกร้า
                </button>
            </div>

            {{-- หมายเหตุการจัดส่ง --}}
            <div class="mt-8 text-sm text-gray-500 border-t pt-4">
                <p><strong>• ฟรี! ค่าจัดส่งในประเทศ</strong> เมื่อสั่งซื้อ 800 บาทขึ้นไป</p>
                <p>• คำสั่งซื้อจะถูกจัดส่งภายใน 2-5 วันทำการ</p>
            </div>
        </div>
    </div>
</div>
@endsection
