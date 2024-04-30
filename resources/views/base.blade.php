<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ env('APP_NAME') }} | {{ $title ?? 'Blank title' }} </title>
    @include('partials._styles')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    @php($user = Auth::user())

    <div class="wrapper">

        @include('partials._nav-bar')

        @include('partials._side-bar')
        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1> {{ $title ?? 'Blank title' }} </h1>
                        </div>
                        @isset($breadcrumbs)
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    @foreach ($breadcrumbs as $breadcrumb)
                                        @if ($loop->last)
                                            <li class="breadcrumb-item active">{{ $breadcrumb }}</li>
                                        @else
                                            <li class="breadcrumb-item">
                                                <a href="#">{{ $breadcrumb }}</a>
                                            </li>
                                        @endif
                                    @endforeach
                                </ol>
                            </div>
                        @endisset
                    </div>
            </section>
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    {{-- <div class="row"> --}}
                    {{-- <div class="col-md-12"> --}}
                    <div class="card">
                        @yield('content')
                    </div>
                    {{-- </div> --}}
                    {{-- </div> --}}
                </div>
            </section>
        </div>

        @include('partials._footer')
        @include('partials._messages')
        <aside class="control-sidebar control-sidebar-dark">
        </aside>
    </div>

    @include('partials._scripts')
</body>

</html>
