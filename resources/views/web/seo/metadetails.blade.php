    <title>{{ $seo->meta_title }}</title>
    <meta name="title" content="{{ $seo->meta_title }}" />
    <meta name="description" content="{!! $seo->meta_description !!}" />
    <meta name="keywords" content="{!! $seo->meta_keyword !!}" />
    <meta name="author" content="{{ $seo->meta_title }}" />

    <link rel="canonical" href="{{ url()->current() }}">

    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ $seo->meta_title }}" />
    <meta property="og:description" content="{{ $seo->meta_description }}" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:site_name" content="{{ $seo->meta_title }}" />
    <meta property="og:image" content="{{ asset($seo->og_image) }}" />

    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="629" />

    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="{{ $seo->meta_description }}" />
    <meta name="twitter:site" content="{{ $seo->meta_title }}" />
    <meta name="twitter:title" content="{{ $seo->meta_title }}" />
    <meta name="twitter:url" content="{{ url()->current() }}" />
    <meta name="twitter:image" content="{{ asset($seo->og_image) }}" />
