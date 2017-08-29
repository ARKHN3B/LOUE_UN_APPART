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