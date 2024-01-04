@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-600 bg-gray-200 text-gray-900 focus:border-indigo-600 focus:ring-indigo-600 transition ease-in-out duration-150 hover:shadow-[0_3px_10px_rgb(0,0,0,0.2)] rounded-md shadow-sm']) !!}>
