$(document).ready(function(){
    // $('buy_btn').click(function(){
    //     $('buy_block_layout').addClass('visible')
    // })
    // $("bbb.buy_btn").click(function () {
    //     $(".buy_block_layout").show("fast");//показывает див модалки
    // });

    // //закрывает модалку при клике на кнопку Закрыть
    // $(".cansel").click(function () {
    //     $(".buy_block_layout").hide('fast');//скрывает див модалки
    // });

})

$(document).ready(function() {
    let clickId;
  $('a.buy_btn').click( function(event){
      clickId = this.id;
      if (clickId == "CasinoBuy"){
          clickId = "Casino"
      }
      if (clickId == "CasinoDeepBuy"){
          clickId = "CasinoDeep"
      }
      if (clickId == "MaxrelaxBuy"){
          clickId = "Maxrelax"
      }
      if (clickId == "MysticBuy"){
          clickId = "Mystic"
      }
      console.dirxml(clickId);
    event.preventDefault();
    // $('#myOverlayCasino.' + clickId).fadeIn(297,	function(){
      // $('#myModalCasino.'+ clickId)
    $('#myOverlay' + clickId).fadeIn(297,	function(){
      $('#myModal'+ clickId)
      .css('display', 'block')
      .animate({opacity: 1}, 198);
    });
  });

  // $('#myOverlay.' + clickId).click( function(){
  //   $('#myModal.'+ clickId).animate({opacity: 0}, 198, function(){
  //     $(this).css('display', 'none');
  //     $('#myOverlay.' + clickId).fadeOut(297);
  //   });
  // });
  $('#myModalCasino__close , #myOverlayCasino').click( function(){
      $('#myModalCasino').animate({opacity: 0}, 198, function(){
          $(this).css('display', 'none');
          $('#myOverlayCasino').fadeOut(297);
      });
  });
    $('#myModalCasinoDeep__close , #myOverlayCasinoDeep').click( function(){
        $('#myModalCasinoDeep').animate({opacity: 0}, 198, function(){
            $(this).css('display', 'none');
            $('#myOverlayCasinoDeep').fadeOut(297);
        });
    });
    $('#myModalMaxrelax__close , #myOverlayMaxrelax').click( function(){
        $('#myModalMaxrelax').animate({opacity: 0}, 198, function(){
            $(this).css('display', 'none');
            $('#myOverlayMaxrelax').fadeOut(297);
        });
    });
    $('#myModalMystic__close , #myOverlayMystic').click( function(){
        $('#myModalMystic').animate({opacity: 0}, 198, function(){
            $(this).css('display', 'none');
            $('#myOverlayMystic').fadeOut(297);
        });
    });
});


// new fullpage('#fullPage',{
//     autoScrolling: true,
//     navigation: true,
//     anchors: ['section1', 'section2', 'section3', 'section4','section5'],
//     navigationToooltips: ['Начало', 'Игра №1', 'Игра №2', 'Игра №3', 'Доставка'],
//     showActiveTooltip: true,
//     scrollingSpeed: 1500,
//     controlArrows: false,
//     verticalCentered: false,
//     scrollOverflow: true,
//     fitToSection: false,
//     slidesNavigation: true
// })
//
// new fullpage('#fullPage', {
//     onLeave: function(origin, destination, direction){
//       if (destination.index > 0) {
//         $("#delivery").addClass("scrolled");
//       } else {
//         $("#delivery").removeClass("scrolled")
//       }
//     }
//   });


function onEntry(entry) {
    entry.forEach(change => {
        if (change.isIntersecting) {
            change.target.classList.add('element-show');
        }
    });
}

let options = {
    threshold: [0.5] };
let observer = new IntersectionObserver(onEntry, options);
let elements = document.querySelectorAll('.element-animation');

for (let elm of elements) {
    observer.observe(elm);
}



