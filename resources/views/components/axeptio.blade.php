<script>
    window.axeptioSettings = {
        clientId: "660bccf3aedfcaf8580cc0a6",
    };

    (function(d, s) {
        var t = d.getElementsByTagName(s)[0], e = d.createElement(s);
        e.async = true; e.src = "//static.axept.io/sdk.js";
        t.parentNode.insertBefore(e, t);
    })(document, "script");

    (_axcb = window._axcb || []).push(function(sdk) {
        sdk.on('consent:saved', function(choices) {
            window.location.reload();
        });
    });
</script>
