
function playMonkeySound(){
    var audio = document.createElement("audio");
    audio.setAttribute("controls", "controls")
    var src = document.createElement("source");
    src.setAttribute("src","./sounds/monkey.mp3" )

    audio.appendChild(src);

    document.body.appendChild(audio)
    // ^a-z should match anything which is not uppercase
    //g means all charchter
    // / is the  begning of regular expression
    var s =Math.random().toString(36).replace(/[^a-z]+/g, '').substr(0, 5);
    alert(s)
}
function playGiraffSound(){
    var audio = document.createElement("audio");
    audio.setAttribute("controls", "controls")
    var src = document.createElement("source");
    src.setAttribute("src","./sounds/giraff.mp3" )

    audio.appendChild(src);

    document.body.appendChild(audio)
    var s =Math.random().toString(36).replace(/[^a-z]+/g, '').substr(0, 5);
    alert(s)
}
function playKokosnottSound(){
    var audio = document.createElement("audio");
    audio.setAttribute("controls", "controls")
    var src = document.createElement("source");
    src.setAttribute("src","./sounds/knife.mp3" )

    audio.appendChild(src);

    document.body.appendChild(audio)
    var s =Math.random().toString(36).replace(/[^a-z]+/g, '').substr(0, 5);
    alert(s)
}
function playTigerSound(){
    var audio = document.createElement("audio");
    audio.setAttribute("controls", "controls")
    var src = document.createElement("source");
    src.setAttribute("src","./sounds/tiger.mp3" )

    audio.appendChild(src);

    document.body.appendChild(audio)
    var s =Math.random().toString(36).replace(/[^a-z]+/g, '').substr(0, 5);
    alert(s)
}
function playLionSound(){
    var audio = document.createElement("audio");
    audio.setAttribute("controls", "controls")
    var src = document.createElement("source");
    src.setAttribute("src","./sounds/lion.mp3" )

    audio.appendChild(src);

    document.body.appendChild(audio)
    var s =Math.random().toString(36).replace(/[^a-z]+/g, '').substr(0, 5);
    alert(s)
}
function playGorillSound(){
    var audio = document.createElement("audio");
    audio.setAttribute("controls", "controls")
    var src = document.createElement("source");
    src.setAttribute("src","./sounds/gorilla.mp3" )

    audio.appendChild(src);

    document.body.appendChild(audio)
    var s =Math.random().toString(36).replace(/[^a-z]+/g, '').substr(0, 5);
    alert(s)
}
function playAntelopeSound(){
    var audio = document.createElement("audio");
    audio.setAttribute("controls", "controls")
    var src = document.createElement("source");
    src.setAttribute("src","./sounds/antelope.mp3" )

    audio.appendChild(src);

    document.body.appendChild(audio)
    var s =Math.random().toString(36).replace(/[^a-z]+/g, '').substr(0, 5);
    alert(s)
}
function playRoseSound(){
    var s =Math.random().toString(36).replace(/[^a-z]+/g, '').substr(0, 5);
    alert(s)
}
function playPalmtradSound(){
    var s =Math.random().toString(36).replace(/[^a-z]+/g, '').substr(0, 5);
    alert(s)
}
function playGranSound(){
    var s =Math.random().toString(36).replace(/[^a-z]+/g, '').substr(0, 5);
    alert(s)
}

