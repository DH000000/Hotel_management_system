@props(['type' => 'button', 'variant' => 'primary', 'size' => 'md', 'fullWidth' => false])

@php
    $variants = [
        'primary' => 'bg-[#E69500] hover:bg-[#CC8400] text-white',
        'secondary' => 'bg-gray-200 hover:bg-gray-300 text-gray-800',
        'outline' => 'border-2 border-[#E69500] text-[#E69500] hover:bg-[#E69500] hover:text-white',
        'danger' => 'bg-red-500 hover:bg-red-600 text-white',
        'success' => 'bg-green-500 hover:bg-green-600 text-white',
    ];

    $sizes = [
        'sm' => 'px-3 py-1.5 text-sm',
        'md' => 'px-5 py-2.5 text-base',
        'lg' => 'px-6 py-3 text-lg',
    ];

    $width = $fullWidth ? 'w-full' : '';
@endphp

<button
    type="{{ $type }}"
    class="{{ $variants[$variant] }} {{ $sizes[$size] }} {{ $width }} rounded-lg font-semibold transition transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-[#E69500] focus:ring-offset-2"
    {{ $attributes }}
>
    {{ $slot }}
</button>
