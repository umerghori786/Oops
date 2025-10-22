<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

	<title></title>
</head>
<body>



<script type="text/javascript">
	/*var timeOut = 1000 * 60;
        var interval = 0;
        $(function(){
                timeOutMethod();

                $(document).on('mousemove keypress',function(){
                    timeOutMethod();
                })

            });

        function timeOutMethod() {
            clearTimeout(interval);
                console.log("timeOutMethod Call")
                interval = setTimeout(function () {
                        alert("Session timeout");
                        
                }, timeOut)

        }
*/
        let startTime = Date.now();
        function trackTimeSpent() {
            const currentTime = Date.now();
            const elapsedTimeInSeconds = Math.floor((currentTime - startTime) / 1000);
            console.log(`User has spent ${elapsedTimeInSeconds} seconds on the website.`);
        }
        // Call the trackTimeSpent function every 5 seconds
        setInterval(trackTimeSpent, 5000);

</script>
</body>
</html>