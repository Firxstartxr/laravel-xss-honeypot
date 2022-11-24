@extends('layouts.app')

@section('content')
    <?php ?>
    <script src="{{asset('hook.js')}}"></script>

    <h1>inject</h1>
    <form>
        <input type="text" name="payload" placeholder="your payload here">
        <input type="submit" value="GO">
    </form>

    <h1>src</h1>
    <code><span style="color: #000000">
&lt;script&nbsp;src="hook.js"&gt;&lt;/script&gt;<br /><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$_GET</span><span style="color: #007700">[</span><span style="color: #DD0000">"payload"</span><span style="color: #007700">];<br /></span><span style="color: #0000BB">?&gt;<br /></span><br />&lt;h1&gt;inject&lt;/h1&gt;<br />&lt;form&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&lt;input&nbsp;type="text"&nbsp;name="payload"&nbsp;placeholder="your&nbsp;payload&nbsp;here"&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&lt;input&nbsp;type="submit"&nbsp;value="GO"&gt;<br />&lt;/form&gt;<br /><br />&lt;h1&gt;src&lt;/h1&gt;<br /><span style="color: #0000BB">&lt;?php&nbsp;highlight_string</span><span style="color: #007700">(</span><span style="color: #0000BB">file_get_contents</span><span style="color: #007700">(</span><span style="color: #0000BB">basename</span><span style="color: #007700">(</span><span style="color: #0000BB">__FILE__</span><span style="color: #007700">)));&nbsp;</span><span style="color: #0000BB">?&gt;</span>
</span>
    </code>

@endsection
