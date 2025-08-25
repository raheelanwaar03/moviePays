<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'color:primary focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
