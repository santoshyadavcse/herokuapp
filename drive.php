<html>
<head>

<script type="text/javascript" src="https://apis.google.com/js/api.js"></script>
<script type="text/javascript">
    init = function() {
        s = new gapi.drive.share.ShareClient('773237230127');
        s.setItemIds(["1Gqlsl7YHU6sMkWbbcEJUUIU-0JkP0VYdk-mClwI3Yb8"]);
    }
    window.onload = function() {
        gapi.load('drive-share', init);
    }
</script>
</head>
<body>
<button onclick="s.showSettingsDialog()">Share</button>

</body>

</html>