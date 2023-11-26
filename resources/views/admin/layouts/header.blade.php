<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Restoran - Admin</title>
        <!-- plugins:css -->
        <link rel="stylesheet" href="{{ asset('admin/vendors/feather/feather.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/vendors/ti-icons/css/themify-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/vendors/css/vendor.bundle.base.css') }}">
        <!-- endinject -->
        <!-- Plugin css for this page -->
        <link rel="stylesheet" href="{{ asset('admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/vendors/ti-icons/css/themify-icons.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('admin/js/select.dataTables.min.css') }}">
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <link rel="stylesheet" href="{{ asset('admin/css/vertical-layout-light/style.css') }}">
        <!-- endinject -->

        <link href="{{ asset('img/favicon.ico') }}" rel="icon">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    </head>

<body>
    <div class="container-scroller">
        @include('admin.layouts.navbar')
        <div class="container-fluid page-body-wrapper">
            @include('admin.layouts.sidebar')
