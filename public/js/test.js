jQuery(document).ready(function() {
    jQuery('#vmap').vectorMap({
        // map: 'us-il-chicago_merc',
        map: 'russia_en',

        // backgroundColor: 'none',
        backgroundColor: 'rgba(125,145,147,0.69)',
        borderColor: '#818181',
        borderOpacity: 0.25,
        borderWidth: 0,
        color: '#f3fced',
        enableZoom: true,
        hoverColor: '#c9dfaf',
        hoverOpacity: null,
        normalizeFunction: 'linear',
        scaleColors: ['#b6d6ff', '#005ace'],
        selectedColor: '#c9dfaf',
        // selectedRegions: null,
        showTooltip: true,
        colors: {
            77: "#a12341",
            1: "#a12341",
            2: "#a12341",
            3: "#a12341",
            4: "#a12341",
            5: "#a12341",
            797: "#a12341",
            798: "#a12341",
            799: "#a12341",
            7: "#a12341",
            565: "#a12341",
            7888: "#a12341",
        },

        onRegionClick: function(element, code, region, tag_info)
        {
            var message =
                // + region
                '" code: '
                + code.toUpperCase()
                + '" tag info: '
                + tag_info;

            // alert(message);
            $('#buy_area_block').fadeIn(297,	function(){
                $('#buy_area_block')
                    .css('display', 'flex')
                    // .css('position', 'absolute')
                    // .css('top', '50%')
                    // .css('right', '50%')
                    .animate({opacity: 1}, 198);

                $('#buy_area_block > p').text(message);
                $('#buy_area_block > h2').text(region);
                // $(p).text(message);
            });
            // $('#buy_area_button__close').click( function(){
            //     $('#buy_area_button').animate({opacity: 0}, 198, function(){
            //         $(this).css('display', 'none');
            //         $('#buy_area_button').fadeOut(297);
            //     });
            //     });
        }
    });
    $('#buy_area_block__close').click( function(){
        $('#buy_area_block').animate({opacity: 0}, 198, function(){
            $(this).css('display', 'none');

            // $('#myOverlayCasino').fadeOut(297);
        });
    });
});
$(document).ready(function() {
    let clickId;
    $('.click_me').hover( function(event) {
        setTimeout(() =>{
            $(this).css('display', 'none');
        }, 1000);

    });

    $('img.aside_photo').click( function(event){
        // $(this).css("transform","scalex");
        $('.click_me').css('display' , 'none');
        var src = $(this).attr('src');
        var short = src.split('_')[0];
        if($(this).attr('src') === short+"_photo.jpg"){
            src = short+"_avatar.jpg";

        } else {
            src = short+"_photo.jpg";
        }
        // console.dirxml(src);
        const MAX_ANGLE = -90;
        const speed = 2; // скорость вращения
        let angle = 0;
        const animate = () => {
            if (angle >= MAX_ANGLE) {
                requestAnimationFrame(animate);
            } else {
                angle = MAX_ANGLE;
            }
            $(this).css('transform', `rotateY(${angle}deg)`);
            angle -= speed;
        }
        animate({});

        setTimeout(() => {
            $(this).attr('src', src)  ;
            const MIN_ANGLE = 0;
            const speedMin = 2; // скорость вращения
            let angleMin = -90;
            const animateMin = () => {
                if (angleMin <= MIN_ANGLE) {
                    requestAnimationFrame(animateMin);
                    // console.dirxml(angleMin);
                } else {
                    angleMin = MIN_ANGLE;
                }
                $(this).css('transform', `rotateY(${angleMin}deg)`);
                angleMin += speedMin;
            }
            animateMin({});
        }, 1000);
    });

});
