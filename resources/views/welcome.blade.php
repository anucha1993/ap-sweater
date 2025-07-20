@extends('layouts.app')

@section('content')
@include('components.category-menu')

<div class="text-center mb-10 mt-6">
    <h1 class="text-3xl font-bold text-gray-900">เสื้อผู้ชาย (มือสองญี่ปุ่น)</h1>
</div>

<div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-8 px-4">
    @for ($i = 1; $i <= 8; $i++)
    <div class="relative group rounded-xl overflow-hidden shadow-md hover:shadow-lg transition"
         style="border: 2px solid transparent; border-image: linear-gradient(to top, #facc15, transparent) 1;">

        {{-- ป้ายแสดงสถานะสินค้า --}}
        <div class="absolute top-3 left-3 space-y-1 z-10">
            @if ($i % 3 == 0)
            <span class="bg-red-600 text-white text-[10px] px-2 py-[2px] rounded font-bold block">
                สินค้าลดราคา
            </span>
            @endif

            @if ($i % 4 == 0)
            <span class="bg-green-600 text-white text-[10px] px-2 py-[2px] rounded font-bold block">
                สินค้าขายดี
            </span>
            @endif
        </div>

        {{-- Wishlist + Cart Icons --}}
        <div class="absolute top-3 right-3 flex gap-2 z-10">
            {{-- Wishlist (หัวใจ) --}}
            <button class="text-yellow-400 hover:text-yellow-500">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M4.318 6.318a4.5 4.5 0 0 1 6.364 0L12 7.636l1.318-1.318a4.5 4.5 0 1 1 6.364 6.364L12 20.682 4.318 12.682a4.5 4.5 0 0 1 0-6.364z" />
                </svg>
            </button>
            {{-- Cart (ตะกร้า) --}}
            <button class="text-yellow-400 hover:text-yellow-500">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13l-1.35 2.7a1 1 0 0 0 .9 1.5h12.9M10 21a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm7 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                </svg>
            </button>
        </div>

        {{-- รูปสินค้า --}}
        <div class="aspect-[3/4] bg-gray-100 overflow-hidden relative z-0">
            <img src="https://cdnaiiz.azureedge.net/media/catalog/product/cache/5e82c09ed71428f0dc796cc6c0ad5b73/1/7/17525537560.AVIF"
                 class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
        </div>

        {{-- รายละเอียดสินค้า --}}
        <div class="p-4 relative z-10 bg-white">
            <h2 class="text-sm font-semibold text-gray-800 mb-1 truncate">
                เสื้อโปโลผู้ชายลายเบอร์ {{ $i }}
            </h2>

            {{-- ราคา --}}
            @if ($i % 3 == 0)
            <div class="text-red-600 font-bold text-sm">
                299 บาท <span class="text-gray-400 line-through text-xs">399 บาท</span>
            </div>
            @else
            <div class="text-gray-800 font-bold text-sm">399 บาท</div>
            @endif

            {{-- สี --}}
            <div class="flex mt-3 gap-1">
                <span class="w-4 h-4 rounded-full border border-gray-300 bg-black"></span>
                <span class="w-4 h-4 rounded-full border border-gray-300 bg-yellow-400"></span>
                <span class="w-4 h-4 rounded-full border border-gray-300 bg-orange-500"></span>
            </div>
        </div>
    </div>
    @endfor
</div>
@endsection
