<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="shortcut icon" href="{{url('/')}}/assets/images/logo.ico" type="image/x-icon"/>
    <title>{{ $title ?? 'نهج الخطوة' }}</title>
    <link href="{{url('/')}}/assets/css/main.css" rel="stylesheet"/>
    
    {{ $styles ?? '' }}
    
    @stack('head-scripts')
    
    <style>
        {{ $additionalStyles ?? '' }}
    </style>
</head>

<body {{ $bodyAttributes ?? '' }}>
    <x-header :textColor="$headerTextColor ?? '#222'" />
    
    <!-- content -->
    <main class="relative w-100">
        {{ $slot }}
    </main>
    
    <x-footer />
    
    {{ $scripts ?? '' }}
    
    @stack('body-scripts')
</body>
</html>