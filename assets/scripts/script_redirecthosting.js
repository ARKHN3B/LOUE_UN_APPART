$(function(){
    
    var i = 5;
    var interval = setInterval(function(){
        i--;
        document.getElementById("counter").innerHTML = i;

        if(i <= 0){
            clearInterval(interval); //evite de rapeler en boucle le location replace
            window.location.replace("home");
        }
    }, 1000);
});

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