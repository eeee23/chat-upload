<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;">
<title>页面</title>
</head>
<body>
    <script type="text/javascript">
        function getParams(key) {
            var reg = new RegExp("(^|&)" + key + "=([^&]*)(&|$)");
            var r = window.location.search.substr(1).match(reg);
            if (r != null) {
                return r[2];
            }
            return null;
        };
        console.log("参数param1:"+getParams("name"));
        console.log("参数param2:"+getParams("text"));
        if (getParams("name")==null && getParams("text")==null)
        {
              <?php
                $file = fopen("test.txt","a+");
                fwrite($file,decodeURIComponent(getParams("name"))+":"+decodeURIComponent(getParams("text")));
                fclose($file)
              ?>
        }
    </script>
</body>
</html>
