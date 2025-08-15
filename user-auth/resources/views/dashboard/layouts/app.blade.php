<!doctype html>
<html lang="en" >

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('rock/images/favicon-32x32.png') }}" type="image/png" />
    <link href="{{ asset('rock/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" />
    <link href="{{ asset('rock/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
    <link href="{{ asset('rock/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
    <link href="{{ asset('rock/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('rock/plugins/notifications/css/lobibox.min.css') }}" rel="stylesheet" />

    <link rel="manifest" href="{{ asset('manifest.json') }}">

    @isset($themeplugins)
        @foreach ($themeplugins as $plugin)
            @if ($plugin == 'datatable')
                <link href="{{ asset('rock/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
            @endif
            @if ($plugin == 'sweetalert2')
                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            @endif
            @if ($plugin == 'select2')
                <link rel="stylesheet" href="{{ asset('rock/plugins/select2/css/select2.min.css') }}" />
                <link rel="stylesheet"
                    href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
            @endif
            @if ($plugin == 'flatpickr')
                <link href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" rel="stylesheet" />
            @endif

            @if ($plugin == 'daterangepicker')
                <link rel="stylesheet" type="text/css"
                    href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
            @endif
        @endforeach
    @endisset
    <link href="{{ asset('rock/css/pace.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('rock/js/pace.min.js') }}"></script>
    <link href="{{ asset('rock/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('rock/css/bootstrap-extended.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="{{ asset('rock/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('rock/css/icons.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('rock/css/dark-theme.css') }}" />
    <link rel="stylesheet" href="{{ asset('rock/css/semi-dark.css') }}" />
    <link rel="stylesheet" href="{{ asset('rock/css/header-colors.css') }}" />
    <title>{{ env('APP_NAME') }}</title>


    <style>
        .bottom-bar {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: #ffffff;
            box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-around;
            padding: 10px 0;
            border-top: 1px solid #ddd;
        }

        .bottom-bar a {
            text-align: center;
            color: #555;
            font-size: 24px;
        }

        .bottom-bar a.active {
            color: #007bff;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        @include('dashboard.layouts.sidebar')
        @include('dashboard.layouts.header')
        @yield('content')
        <div class="overlay toggle-icon"></div>
        <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
        <footer class="page-footer">


        </footer>
    </div>

    <script src="{{ asset('rock/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('rock/js/jquery.min.js') }}"></script>
    <script src="{{ asset('rock/plugins/simplebar/js/simplebar.min.js') }}"></script>
    <script src="{{ asset('rock/plugins/metismenu/js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('rock/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('rock/plugins/notifications/js/lobibox.min.js') }}"></script>
    @isset($themeplugins)
        @foreach ($themeplugins as $plugin)
            @if ($plugin == 'datatable')
                <script src="{{ asset('rock/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
                <script src="{{ asset('rock/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>
            @endif
            @if ($plugin == 'chart')
                <script src="{{ asset('rock/plugins/chartjs/js/chart.js') }}"></script>
            @endif
            @if ($plugin == 'select2')
                <script src="{{ asset('rock/plugins/select2/js/select2.min.js') }}"></script>
            @endif
            @if ($plugin == 'flatpickr')
                <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
            @endif

            @if ($plugin == 'daterangepicker')
                <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
                <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
            @endif
        @endforeach
    @endisset
    <script src="{{ asset('rock/js/app.js') }}"></script>
    <script>
        function toaster(type = "default", message = "test") {
            Lobibox.notify(type, {
                pauseDelayOnHover: true,
                size: 'mini',
                rounded: true,
                delayIndicator: false,
                continueDelayOnInactiveTab: false,
                position: 'top right',
                msg: message
            });
        }






        function initializeDateRangePicker(selector, callback, options = {}) {


            var start = options.startDate || moment().startOf('year');
            var end = options.endDate || moment().endOf('year');
            var ranges = options.ranges || {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(7, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf(
                    'month')],
                'This Year': [moment().startOf('year'), moment().endOf('year')],
                'Last Year': [moment().subtract(1, 'year').startOf('year'), moment().subtract(1, 'year').endOf('year')]
            };

            function cb(start, end, label) {
                $(selector + ' span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                if (callback) {
                    callback({
                        start_date: start.format('YYYY-MM-DD'),
                        end_date: end.format('YYYY-MM-DD'),
                        label: label
                    });
                }
            }

            $(selector).daterangepicker({
                startDate: start,
                endDate: end,
                ranges: ranges
            }, cb);
            cb(start, end, options.initialLabel || 'Custom Range');
        }
    </script>



    @yield('scripts')
    @stack('js')


</body>

</html>
