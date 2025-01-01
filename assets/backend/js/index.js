const name_id_iframe = "iframe-auth-reg";

function create_iframe_authorization_registration() {
    var layout = document.getElementsByClassName('layout')[0];

    var pre_iframe = document.getElementById(name_id_iframe);
    if(!pre_iframe){
        var iframe_auth = document.createElement("iframe");

        iframe_auth.id = name_id_iframe;
        iframe_auth.name = iframe_auth.id;

        layout.prepend(iframe_auth);
    }
}

function close_iframe() {
    window.parent.change_size_iframe(window.name, 0, 50);
    var iframe =  document.getElementById(name_id_iframe);
    iframe.remove();
}

function change_size_iframe(name_iframe, width, height){
    // Получение корневого элемента
    const root = document.querySelector(":root");
    
    // Изменение значения стиля для корневого элемента
    root.style.setProperty("--iframeHeight", `${height}vh`);
}

function logout(path){
    $.ajax({
        type: "POST",
        url: path,
        data: {
            action: "logout"
        },
        success: function(result) {
            let json_data = JSON.parse(result);

            if(json_data.hasOwnProperty('url')){ // && json_data.hasOwnProperty('error_code')
                window.top.location.href = json_data['url'];
            }
        }
    });
}

