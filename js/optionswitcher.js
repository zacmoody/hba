var OptionSwitcher=function() {
    return {
        initOptionSwitcher: function() {
            var panel=jQuery('.option-switcher');
            jQuery('.option-switcher-btn').click(function() {
                jQuery(this).css('display', 'none');
                jQuery('.option-switcher').removeClass("fadeOutRight").show();
            }
            );
            jQuery('.theme-close').click(function() {
                jQuery('.option-switcher').addClass("fadeOutRight", function() {
                    jQuery('.option-switcher').hide();
                }
                );
                jQuery('.option-switcher-btn').css('display',
                'block');
            }
            );
            jQuery('li',
            panel).click(function() {
                var color=jQuery(this).attr("data-color");
                var data_logo=jQuery(this).attr("data-logo");
                setColor(color, data_logo);
                jQuery('.list-unstyled li', panel).removeClass("theme-active");
                jQuery(this).addClass("theme-active");
            }
            );
            var setColor=function(color,
            data_logo) {
                jQuery('#option_color').attr("href", "css/colors/"+ color+".css");
                if(data_logo=='pink') {
                    jQuery('.navbar-brand img').attr("src", "img/logo1"+".png");
                }
                else if(data_logo=='purple') {
                    jQuery('.navbar-brand img').attr("src", "img/logo2"+".png");
                }
                else if(data_logo=='deepBlue') {
                    jQuery('.navbar-brand img').attr("src", "img/logo3"+".png");
                }
                else if(data_logo=='orange') {
                    jQuery('.navbar-brand img').attr("src", "img/logo4"+".png");
                }
                else if(data_logo=='default-logo') {
                    jQuery('.navbar-brand img').attr("src", "img/logo"+".png");
                }
            }
            jQuery('.boxed-layout-btn').click(function() {
                jQuery(this).addClass("active-switcher-btn");
                jQuery(".wide-layout-btn").removeClass("active-switcher-btn");
                jQuery("body").addClass("bodyColor container");
            }
            );
            jQuery('.wide-layout-btn').click(function() {
                jQuery(this).addClass("active-switcher-btn");
                jQuery(".boxed-layout-btn").removeClass("active-switcher-btn");
                jQuery("body").removeClass("bodyColor container");
            }
            );
            jQuery('.static-header-btn').click(function() {
                jQuery(this).addClass("active-switcher-btn");
                jQuery(".fixed-header-btn").removeClass("active-switcher-btn");
                jQuery(".navbar-default").removeClass("navbar-main");
            }
            );
            jQuery('.fixed-header-btn').click(function() {
                jQuery(this).addClass("active-switcher-btn");
                jQuery(".static-header-btn").removeClass("active-switcher-btn");
                jQuery(".navbar-default").addClass("navbar-main");
            }
            );
        }
    }
    ;
}
();