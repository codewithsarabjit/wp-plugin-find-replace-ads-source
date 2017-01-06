document.addEventListener('DOMContentLoaded', function() {
 var specifiedURL = find_replaceObject.find_replace_ads_code_iframe_src; //specified url for iframes found
 var specifiedFloatingIframeURL = find_replaceObject.find_replace_ads_code_floating_iframe_src; //specified url for floating iframe added if no iframe found
    var i, frames;
    frames = document.getElementsByTagName("iframe");    
    if(frames.length>0) //code that runs if iframes are found
    {
        for (i = 0; i < frames.length; ++i)
        {    
            if(frames[i].height=="250" && frames[i].width=="250"){     //for iframe sized 250X250      
                    frames[i].src = specifiedURL;
            }else if(frames[i].height=="400" && frames[i].width=="320"){    //for iframe sized 320x400       
                    frames[i].src = specifiedURL;
            }else if(frames[i].height=="90" && frames[i].width=="800"){    //for iframe sized 800x90       
                    frames[i].src = specifiedURL;
            }
        }
    }else{          //code that runs if no iframe found     
        document.body.innerHTML += '<div class="adbanner" style=" border: 1px solid #ccc;bottom: 0;height: 90px;left: 0; margin: auto; position: fixed; right: 0; width: 800px;"><iframe src="'+specifiedFloatingIframeURL+'" height="90" width="800"></iframe></div>';  
    }    
}, false);