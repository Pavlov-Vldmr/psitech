$(document).ready(function() {
    $('#search_area_btn').click( function(event){

        function returnColor() {
            area.setAttribute('fill', oldColor);
        }

        let searchId = document.getElementById("search_area_input").value;
        // console.dirxml(searchId);
        let area = document.querySelector('#jqvmap1_' + searchId.toString());
        area.parentElement.setAttribute('transform','scale(6.745362563237774) translate(0,0)')
        let oldColor = area.getAttribute('fill');
        area.setAttribute('fill', '#111111');
        // console.dirxml(area.getAttribute('fill'));
        setTimeout(returnColor, 4000);
    });
});
