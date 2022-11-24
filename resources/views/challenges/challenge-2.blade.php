@extends('layouts.app')

@section('content')
    <?php
    echo("Thanks Preben for the challenge");
    echo('<br /><br />');
    echo('Not working yet');
    $html = "
<button onclick='window.location.href = \"\"'>Click me!</button>
";
    echo $html;
    /*$url = $_GET['getData'];*/
    if (isset($url)) {
        $data = file_get_contents($url);
        echo $data;
    }?>
@endsection
