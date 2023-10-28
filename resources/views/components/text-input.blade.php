@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 dark:border-gray-700 dark:bg-gray-100 dark:text-gray-10000 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-red-500 dark:focus:ring-red-600 rounded-md shadow-sm']) !!}>
