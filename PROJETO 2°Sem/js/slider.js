
                jssor_slider1_init = function () {
        
                    var options = {
                        $SlideDuration: 800,                    
                        $DragOrientation: 3,                    
                        $AutoPlay: 1,                           
                        $Idle: 1500,                            
        
                        $BulletNavigatorOptions: {              
                            $Class: $JssorBulletNavigator$,     
                            $ChanceToShow: 2,                   
                            $Steps: 1,                          
                            $Rows: 1,                           
                            $SpacingX: 10,                      
                            $SpacingY: 10,                      
                            $Orientation: 1                     
                        },
        
                        $ArrowNavigatorOptions: {
                            $Class: $JssorArrowNavigator$,      
                            $ChanceToShow: 2                    
                        }
                    };
        
                    var jssor_slider1 = new $JssorSlider$('slider1_container', options);
                    
                    jssor_slider1.$Elmt.style.margin = "";
        
                    function ScaleSlider() {
        
                        var containerElement = jssor_slider1.$Elmt.parentNode;
                        var containerWidth = containerElement.clientWidth;
        
                        if (containerWidth) {
                            var expectedWidth = Math.min(containerWidth, jssor_slider1.$OriginalWidth());
        
                            jssor_slider1.$ScaleSize(expectedWidth, jssor_slider1.$OriginalHeight());
        
                            jssor_slider1.$Elmt.style.left = ((containerWidth - expectedWidth) / 2) + "px";
                        }
                        else {
                            window.setTimeout(ScaleSlider, 30);
                        }
                    }
        
                    ScaleSlider();
        
                    $Jssor$.$AddEvent(window, "load", ScaleSlider);
                    $Jssor$.$AddEvent(window, "resize", ScaleSlider);
                    $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
                };

                    jssor_slider1_init1 = function () {
            
                        var options = {
                            $SlideDuration: 800,                    
                            $DragOrientation: 3,                    
                            $AutoPlay: 1,                           
                            $Idle: 2700,                            
            
                            $BulletNavigatorOptions: {              
                                $Class: $JssorBulletNavigator$,     
                                $ChanceToShow: 2,                   
                                $Steps: 1,                          
                                $Rows: 1,                           
                                $SpacingX: 10,                      
                                $SpacingY: 10,                      
                                $Orientation: 1                     
                            },
            
                            $ArrowNavigatorOptions: {
                                $Class: $JssorArrowNavigator$,      
                                $ChanceToShow: 2                    
                            }
                        };
            
                        var jssor_slider1 = new $JssorSlider$('slider1_container1', options);
                       
                        jssor_slider1.$Elmt.style.margin = "";
            
                        
                        function ScaleSlider() {
            
                            var containerElement = jssor_slider1.$Elmt.parentNode;
                            var containerWidth = containerElement.clientWidth;
            
                            if (containerWidth) {
                                var expectedWidth = Math.min(containerWidth, jssor_slider1.$OriginalWidth());
            
                                jssor_slider1.$ScaleSize(expectedWidth, jssor_slider1.$OriginalHeight());
            
                                jssor_slider1.$Elmt.style.left = ((containerWidth - expectedWidth) / 2) + "px";
                            }
                            else {
                                window.setTimeout(ScaleSlider, 30);
                            }
                        }
            
                        ScaleSlider();
            
                        $Jssor$.$AddEvent(window, "load", ScaleSlider);
                        $Jssor$.$AddEvent(window, "resize", ScaleSlider);
                        $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
                    };

                    jssor_slider1_init2 = function () {
            
                        var options = {
                            $SlideDuration: 800,                   
                            $DragOrientation: 3,                    
                            $AutoPlay: 1,                           
                            $Idle: 2000,                            
            
                            $BulletNavigatorOptions: {              
                                $Class: $JssorBulletNavigator$,     
                                $ChanceToShow: 2,                   
                                $Steps: 1,                          
                                $Rows: 1,                           
                                $SpacingX: 10,                      
                                $SpacingY: 10,                      
                                $Orientation: 1                    
                            },
            
                            $ArrowNavigatorOptions: {
                                $Class: $JssorArrowNavigator$,      
                                $ChanceToShow: 2                    
                            }
                        };
            
                        var jssor_slider1 = new $JssorSlider$('slider1_container2', options);
                        
                        jssor_slider1.$Elmt.style.margin = "";
            
                        function ScaleSlider() {
            
                            var containerElement = jssor_slider1.$Elmt.parentNode;
                            var containerWidth = containerElement.clientWidth;
            
                            if (containerWidth) {
                                var expectedWidth = Math.min(containerWidth, jssor_slider1.$OriginalWidth());
            
                                jssor_slider1.$ScaleSize(expectedWidth, jssor_slider1.$OriginalHeight());
            
                                jssor_slider1.$Elmt.style.left = ((containerWidth - expectedWidth) / 2) + "px";
                            }
                            else {
                                window.setTimeout(ScaleSlider, 30);
                            }
                        }
            
                        ScaleSlider();
            
                        $Jssor$.$AddEvent(window, "load", ScaleSlider);
                        $Jssor$.$AddEvent(window, "resize", ScaleSlider);
                        $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
                    };
            

                    jssor_slider1_init3 = function () {
            
                        var options = {
                            $SlideDuration: 800,                    
                            $DragOrientation: 3,                    
                            $AutoPlay: 1,                           
                            $Idle: 2500,                            
            
                            $BulletNavigatorOptions: {              
                                $Class: $JssorBulletNavigator$,     
                                $ChanceToShow: 2,                   
                                $Steps: 1,                          
                                $Rows: 1,                           
                                $SpacingX: 10,                      
                                $SpacingY: 10,                      
                                $Orientation: 1                     
                            },
            
                            $ArrowNavigatorOptions: {
                                $Class: $JssorArrowNavigator$,      
                                $ChanceToShow: 2                    
                            }
                        };
            
                        var jssor_slider1 = new $JssorSlider$('slider1_container3', options);
                
                        jssor_slider1.$Elmt.style.margin = "";
            
                        
                        function ScaleSlider() {
            
                            var containerElement = jssor_slider1.$Elmt.parentNode;
                            var containerWidth = containerElement.clientWidth;
            
                            if (containerWidth) {
                                var expectedWidth = Math.min(containerWidth, jssor_slider1.$OriginalWidth());
            
                                jssor_slider1.$ScaleSize(expectedWidth, jssor_slider1.$OriginalHeight());
            
                                jssor_slider1.$Elmt.style.left = ((containerWidth - expectedWidth) / 2) + "px";
                            }
                            else {
                                window.setTimeout(ScaleSlider, 30);
                            }
                        }
            
                        ScaleSlider();
            
                        $Jssor$.$AddEvent(window, "load", ScaleSlider);
                        $Jssor$.$AddEvent(window, "resize", ScaleSlider);
                        $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
                    };
