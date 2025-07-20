{{-- หมวดหมู่เมนูสินค้า --}}
<div class="flex justify-center gap-6 text-sm font-medium text-gray-800">

    {{-- ผู้หญิง --}}
    <a href="#"
       class="flex items-center gap-1 {{ request()->is('women*') ? 'text-yellow-500 font-bold' : 'hover:text-yellow-400' }}">
        <svg class="w-4 h-4 text-yellow-400" fill="none" stroke="currentColor" stroke-width="2"
             viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M12 14a4 4 0 1 0-4-4 4 4 0 0 0 4 4Zm0 0v4m0 0h-2m2 0h2m-4 0h-4m8 0h4"/>
        </svg>
        ผู้หญิง
    </a>

    {{-- ผู้ชาย --}}
    <a href="#"
       class="flex items-center gap-1 {{ request()->is('men*') ? 'text-yellow-500 font-bold' : 'hover:text-yellow-400' }}">
        <svg class="w-4 h-4 text-yellow-400" fill="none" stroke="currentColor" stroke-width="2"
             viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M12 14a4 4 0 1 0-4-4 4 4 0 0 0 4 4Zm0 0v6m4-4h-8"/>
        </svg>
        ผู้ชาย
    </a>

    {{-- สินค้าขายดี --}}
    <a href="#"
       class="flex items-center gap-1 {{ request()->is('others*') ? 'text-yellow-500 font-bold' : 'hover:text-yellow-400' }}">
        <svg class="w-4 h-4 text-yellow-400" fill="none" stroke="currentColor" stroke-width="2"
             viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M12 4v16m8-8H4"/>
        </svg>
        สินค้าขายดี
    </a>

    {{-- สินค้าลดราคา --}}
    <a href="#"
       class="flex items-center gap-1 {{ request()->is('sale*') ? 'text-yellow-500 font-bold' : 'hover:text-yellow-400' }}">
        <svg class="w-4 h-4 text-yellow-400" fill="none" stroke="currentColor" stroke-width="2"
             viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M12 8v4l3 3m6 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"/>
        </svg>
        สินค้าลดราคา
    </a>
</div>
