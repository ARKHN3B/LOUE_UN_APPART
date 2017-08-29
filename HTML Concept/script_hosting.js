var granimInstance = new Granim({
    element: '#logo-canvas',
    direction: 'left-right',
    opacity: [1, 1],
    states : {
        "default-state": {
            gradients: [
                // ['#ff4054', '#ff4054'],
                // ['#ff4054', '#6bc2ff'],
                // ['#6bc2ff', '#6bc2ff'],
                // ['#ff4054', '#ff4054'],
                // ['#ff4054', '#6bc2ff'],
                // ['#6bc2ff', '#6bc2ff']
                ['#ff4054', '#ff4054'],
                ['#ff4054', '#6bc2ff'],
                ['#6bc2ff', '#6bc2ff'],
            ],
            transitionSpeed: 3000
        }
    }
});


function pushNumber($id){
    var start = 0;
    var end = 25;

    var options = "";

    for (var push = start; push <= end; push++) {
        options += '<option value:\"'+ push +'\">'+ push +'</option>';
    }

    document.getElementById($id).innerHTML = options;
}

pushNumber("travelers");
pushNumber("beds");
pushNumber("bathrooms");
pushNumber("rooms");
pushNumber("kitchens");

$(function(){
    for (var counter = 5; counter >= 0; counter--) {
        if (counter > 0) {

            function counter(){
                document.getElementById("counter").innerHTML = counter;
                setTimeout("counter()", 1000);
            }
        } else {
            break;
        }
    }
});