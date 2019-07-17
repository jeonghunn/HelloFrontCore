

function getClientVersion(){
    return "<?php echo getClientVersion(); ?>";
}

function isDevelopmentMode(){
    return <?php echo isDevelopmentMode(); ?>;
}

function getCorePUrl(){
    return "<?php echo getCorePUrl(); ?>";
}

function getAPIKey(){
    return "<?php echo getAPIKey(); ?>";
}

function getUserAuth(){
    return "<?php echo getUserAuth(); ?>";
}

function getAPIUrl(){
    return "<?php echo getAPIUrl(); ?>";
}

function getAPIUrlS(){
    return "<?php echo getAPIUrlS(); ?>";
}


function getAPISUrl(){
    return "<?php echo getAPISUrl(); ?>";
}


function getClientPUrl(){
    return "<?php echo getClientPUrl(); ?>";
}

function getRequestHeader(){
    return "application/x-www-form-urlencoded";
}

function getReq(data){
    var infodata = {
        api_key : getAPIKey(),
        auth : getUserAuth()
    }

    var resultdata = $.extend(infodata, data);

    return {
        method: 'POST', //방식
        url: getAPIUrlS(), /* 통신할 URL */
        data: $.param(resultdata), headers: {
            'Content-Type': getRequestHeader()
        }



    };
}

function getLocale(){
    return "<?php echo getLang(); ?>";
}

