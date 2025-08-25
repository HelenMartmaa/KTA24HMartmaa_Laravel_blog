@props(['active' => false])

@props(['type' => 'a'])

@if($type === 'a')
    <a {{ $attributes->merge(['class' => 'text-blue-500']) }}>
        {{ $slot }}
    </a>
@elseif($type === 'button')
    <button {{ $attributes->merge(['class' => 'bg-blue-500 text-white px-3 py-1 rounded']) }}>
        {{ $slot }}
    </button>
@endif

<a class="{{ $active ? 'bg-gray-900 text-white': 'text-gray-300 hover:bg-gray-700 hover:text-white'}} rounded-md px-3 py-2 text-sm font-medium"
    aria-current="{{ $active ? 'page': 'false' }}"
    {{ $attributes }}
>{{ $slot }}</a>
