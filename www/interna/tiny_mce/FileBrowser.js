function myFileBrowser (field_name, url, type, win) {

    // alert("Field_Name: " + field_name + "\nURL: " + url + "\nType: " + type + "\nWin: " + win); // debug/testing

    /* If you work with sessions in PHP and your client doesn't accept cookies you might need to carry
       the session name and session ID in the request string (can look like this: "?PHPSESSID=88p0n70s9dsknra96qhuk6etm5").
       These lines of code extract the necessary parameters and add them back to the filebrowser URL again. */
    if (type=="image")
    {
    	var cmsURL = "../../../images_liste.php";
    } else if (type=="flash")
    {
    	var cmsURL = "../../../flash_liste.php";
    }
    else if (type=="galimage")
    {
    	var cmsURL = "../../../gal_images_liste.php";
    } else {
    	var cmsURL = "../../../file_liste.php";
    }

        // script URL - use an absolute path!
    if (cmsURL.indexOf("?") < 0) {
        //add the type as the only query parameter
        cmsURL = cmsURL + "?type=" + type;
    }
    else {
        //add the type as an additional query parameter
        // (PHP session ID is now included if there is one at all)
        cmsURL = cmsURL + "&type=" + type;
    }
    var width_window=document.body.clientWidth*0.95;
    tinyMCE.activeEditor.windowManager.open({
        file : cmsURL,
        title : 'My File Browser',
        width : width_window,  // Your dimensions may differ - toy around with them!
        height : 800,
        resizable : "yes",
        scrollbars: "yes",
        inline : "yes",  // This parameter only has an effect if you use the inlinepopups plugin!
        close_previous : "yes"
    }, {
        window : win,
        input : field_name
    });
    
    return false;
  }
