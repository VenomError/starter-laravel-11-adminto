<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <x-metadata.meta />
    <title>{{ $title ?? 'Page Title' }}</title>
    @livewireStyles
    <x-metadata.styles>
        @stack('styles')
    </x-metadata.styles>
</head>

<x-layouts layout="vertical" theme="dark" data-topbar="light" :preloader="true">

    @isset($auth)
    <x-slot:auth>
        {{ $auth }}
    </x-slot:auth>
    @endisset


    @empty($auth)
    {{ $slot }}
    @endempty

    <x-slot:scripts>
        @livewireScripts
        <x-metadata.scripts>
            @stack('scripts')
        </x-metadata.scripts>
    </x-slot:scripts>
</x-layouts>



</html>