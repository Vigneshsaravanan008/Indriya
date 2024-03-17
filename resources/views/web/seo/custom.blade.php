
<title>{{ (@$common->meta_title != null) ? @$common->meta_title : ((@$common->meta_title != null) ? @$common->meta_title : @$seo->meta_title)}}</title>
    <meta name="title" content="{{ (@$common->meta_title != null) ? @$common->meta_title : ((@$common->meta_title != null) ? @$common->meta_title : @$seo->meta_title) }}" />
    <meta name="description" content="{!! (@$common->meta_description != null) ? @$common->meta_description : ((@$common->meta_description != null) ? @$common->meta_description : @$seo->meta_description)  !!}" />
    <meta name="keywords" content="{!! (@$common->meta_keyword != null) ? @$common->meta_keyword : ((@$common->meta_keyword != null) ? @$common->meta_keyword : @$seo->meta_keyword)  !!}" />
    <meta name="author" content="{{ (@$common->meta_title != null) ? @$common->meta_title : ((@$common->meta_title != null) ? @$common->meta_title : @$seo->meta_title) }}" />

    <link rel="canonical" href="{{ url()->current() }}">

    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ (@$common->meta_title != null) ? @$common->meta_title : ((@$common->meta_title != null) ? @$common->meta_title : @$seo->meta_title) }}" />
    <meta property="og:description" content="{!! (@$common->meta_description != null) ? @$common->meta_description : ((@$common->meta_description != null) ? @$common->meta_description : @$seo->meta_description)  !!}" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:site_name" content="{{ (@$common->meta_title != null) ? @$common->meta_title : ((@$common->meta_title != null) ? @$common->meta_title : @$seo->meta_title) }}" />
    <meta property="og:image" content="{{ (@$image!=''?@$image:asset('/uploads/setting/image/'.$setting->og_image)) }}" />

    <meta property="og:image:width" content="1200" />
	<meta property="og:image:height" content="629" />

    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="{!! (@$common->meta_description != null) ? @$common->meta_description : ((@$common->meta_description != null) ? @$common->meta_description : @$seo->meta_description)  !!}" />
    <meta name="twitter:site" content="{{ (@$common->meta_title != null) ? @$common->meta_title : ((@$common->meta_title != null) ? @$common->meta_title : @$seo->meta_title) }}" />
    <meta name="twitter:title" content="{{ (@$common->meta_title != null) ? @$common->meta_title : ((@$common->meta_title != null) ? @$common->meta_title : @$seo->meta_title) }}" />
    <meta name="twitter:url" content="{{ url()->current() }}" />
    <meta name="twitter:image" content="{{ (@$image!=''?@$image:asset('/uploads/setting/image/'.$setting->og_image)) }}" />
