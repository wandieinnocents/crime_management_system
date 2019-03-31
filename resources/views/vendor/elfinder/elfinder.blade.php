@extends('backpack::layout')

@section('after_scripts')
    <!-- jQuery and jQuery UI (REQUIRED) -->
    <link rel="stylesheet" href="{{ asset('js/jquery-ui-themes-1.12.1/themes/smoothness/jquery-ui.min.css') }}" />
    <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> -->
    <script src="{{ asset('js/jquery-ui-themes-1.12.1/jquery-ui.min.js') }}"></script>

    <!-- elFinder CSS (REQUIRED) -->
    <link rel="stylesheet" type="text/css" href="<?= asset($dir.'/css/elfinder.min.css') ?>">
    <!-- <link rel="stylesheet" type="text/css" href="<?= asset($dir.'/css/theme.css') ?>"> -->
    <link rel="stylesheet" type="text/css" href="<?= asset('vendor/backpack/elfinder/elfinder.backpack.theme.css') ?>">

    <!-- elFinder JS (REQUIRED) -->
    <script src="<?= asset($dir.'/js/elfinder.min.js') ?>"></script>

    <?php if($locale){ ?>
    <!-- elFinder translation (OPTIONAL) -->
    <script src="<?= asset($dir."/js/i18n/elfinder.$locale.js") ?>"></script>
    <?php } ?>

    <!-- elFinder initialization (REQUIRED) -->
    <script type="text/javascript" charset="utf-8">
        // Documentation for client options:
        // https://github.com/Studio-42/elFinder/wiki/Client-configuration-options
        $().ready(function() {
            $('#elfinder').elfinder({
                // set your elFinder options here
                <?php if($locale){ ?>
                    lang: '<?= $locale ?>', // locale
                <?php } ?>
                customData: {
                    _token: '<?= csrf_token() ?>'
                },
                url : '<?= route("elfinder.connector") ?>'  // connector URL
            });
        });
    </script>
@endsection

@section('header')
    <section class="content-header">
      <h1>
        File manager
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('admin') }}">Admin</a></li>
        <li class="active">File Manager</li>
      </ol>
    </section>
@endsection

@section('content')

    <!-- Element where elFinder will be created (REQUIRED) -->
    <div id="elfinder"></div>

@endsection
