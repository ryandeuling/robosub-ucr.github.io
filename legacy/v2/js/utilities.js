function get_text_from_file(filename) {
    var request = new XMLHttpRequest();
    request.open('GET', filename, false);
    request.send(null);
    return request.responseText;
}

function isolate_active(tab) {
    document.getElementById("home_tab").className = "";
    document.getElementById("about_tab").className = "";
    document.getElementById("teams_tab").className = "";
    //document.getElementById("gallery_tab").className = "";
    document.getElementById("sponsors_tab").className = "";
    document.getElementById("contact_tab").className = "";
    document.getElementById(tab).className = "active";
}

