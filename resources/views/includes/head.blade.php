
<meta charset="UTF-8">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>{{!empty( $settings->site_name) ?  $settings->site_name : '' }} — @yield('title')</title>

        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <script src="https://kit.fontawesome.com/f75ab26951.js" crossorigin="anonymous"></script>

<link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

<!-- Custom styles for this template-->
<link href="{{asset('css/app.css')}}" rel="stylesheet">
<link href="{{asset('admin/css/sb-admin-2.min.css')}}" rel="stylesheet">
<style>
@media (min-width: 1200px){
.container {
        width: 90%;
}     
}
.container:before, .row:after, .row:before {
        display: table;
        content: " ";
}

.c-layout-breadcrumbs-1 .c-page-title.c-pull-left {
float: left;
}
.c-layout-breadcrumbs-1 .c-page-title {
    display: inline-block;
}

.c-layout-breadcrumbs-1 .c-page-title h3 {
    color: #000000;
    margin: 10px 0 6px 0;
    font-weight: 500;
    font-size: 18px;
    letter-spacing: 1px;
}

.c-font-uppercase {
    text-transform: uppercase;
}
.c-font-sbold {
    font-weight: 500 !important;
}
.c-layout-breadcrumbs-1 .c-page-title h4 {
    color: #7f8c97;
    margin: 5px 0 5px 0;
    font-weight: 500;
    font-size: 15px;
    letter-spacing: 1px;
}
h4 {
    color: #3f444a;
    font-size: 16px;
    margin: 8px 0;
}
.c-layout-breadcrumbs-1.c-subtitle .c-page-breadcrumbs {
    margin-top: 10px;
}
.c-layout-breadcrumbs-1 .c-page-breadcrumbs.c-pull-right {
    float: right;
}
.c-layout-breadcrumbs-1 .c-page-breadcrumbs {
    display: inline-block;
    padding: 0;
    margin: 0;
    list-style-type: none;
}
.c-layout-breadcrumbs-1 .c-page-breadcrumbs.c-pull-right > li:last-child {
    padding-right: 0;
}
.c-layout-breadcrumbs-1 .c-page-breadcrumbs > li, .c-layout-breadcrumbs-1 .c-page-breadcrumbs > li > a {
    color: #7f8c97;
    font-size: 16px;
    font-weight: 400;
}
.c-layout-breadcrumbs-1 .c-page-breadcrumbs > li {
    display: inline-block;
    margin: 0;
    padding: 8px 4px 8px 4px;
}
breadcrumbs-1 .c-page-breadcrumbs > li > a {
    color: #7f8c97;
    font-size: 16px;
    font-weight: 400;
}

.container-fluid:after, .container-fluid:before, .container:after, .container:before, .row:after, .row:before {
    display: table;
    content: " ";
}
.c-layout-breadcrumbs-1:after {
    clear: both;
}
.c-layout-breadcrumbs-1:before, .c-layout-breadcrumbs-1:after {
    content: " ";
    display: table;
}
.pagination {
    justify-content: center!important;
}
.card{
    border: none !important;
}
</style>

