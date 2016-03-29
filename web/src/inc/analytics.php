<?php
//Google analytics;  use with care
?>

<script type="text/javascript">
    //<![CDATA[
    if (window.top !== window.self)
        window.top.location.replace(window.self.location.href);

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-3827798-3']);
    _gaq.push(['_trackPageview']);

    (function () {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();
//]]>
</script>
