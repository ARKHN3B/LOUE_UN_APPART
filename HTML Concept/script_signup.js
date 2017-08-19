function selectYear(){
    var start = new Date().getFullYear();
    var end = 1900;
    
    var options = "";

    for (var year = start; year >= end; year--){
    options += '<option value:\"'+ year +'\">'+ year +'</option>';
    }

    document.getElementById("year").innerHTML = options;
}

function selectDay(){
    var start = 1;
    var end = 31;

    var options = "";

    for (var day = start; day <= end; day++) {
        options += '<option value:\"'+ day +'\">'+ day +'</option>';
    }

    document.getElementById("day").innerHTML = options;
}

selectYear();
selectDay();