var app = {
    // Application Constructor
    initialize: function() {
        $(document).ready(function(){
            //load halaman login
            $('#login').load('login.html');
            $('#beranda').load('beranda.html');
            $('#beranda').hide();
        });//jquery

        document.addEventListener("backbutton", onBackKeyDown, false);  

        function onBackKeyDown() {
            
            if (localStorage.getItem("user_login") === null) {
                navigator.app.exitApp();
            } else {    
            $('.content').hide();
        }
        }

        document.addEventListener("deviceready", onDeviceReady, false);
        function onDeviceReady() {
            console.log(device.cordova);
        }
    },
};

app.initialize();