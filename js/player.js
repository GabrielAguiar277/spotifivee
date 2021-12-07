const controller = {
    playPause(){
        
        if(isPlaying == false){
            this.play()
            isPlaying = true
        }else{
            this.pause()
            isPlaying = false
        }
    },

    play(){
        player.innerHTML = `<svg role="img" height="16" width="16" viewBox="0 0 16 16" class="button-controller button-controller__hover player"><path fill="none" d="M0 0h16v16H0z"></path><path d="M3 2h3v12H3zm7 0h3v12h-3z"></path></svg>`
        music.play()
    },

    pause(){
        player.innerHTML = `<svg role="img" height="16" width="16" viewBox="0 0 16 16" class="button-controller button-controller__hover player"><path d="M4.018 14L14.41 8 4.018 2z"></path></svg>`
        music.pause()
    },

    prev(){
        musicIndex = musicIndex-1
        console.log(musicIndex)
        loadMusic(musicIndex)
    },

    next(){
        musicIndex = musicIndex+1
        console.log(musicIndex)
        loadMusic(musicIndex)
        this.pause()
        setInterval(console.log("pei"), 1000)
        console.log("Play")
    },

    setTime(value){
        timeMusic.innerText = (value/60).toFixed(2).replace(".", ":")
    },

    setTimeNow(value){
        timeNowMusic.innerText = (value/60).toFixed(2).replace(".", ":")
    }
}

const player = document.querySelector(".button_player")
isPlaying = false

const buttonNext = document.querySelector("#next")
const buttonPrev = document.querySelector("#prev")
let progressBar = document.querySelector(".progress-bar__audio")
let timeMusic = document.querySelector(".final-music")
let timeNowMusic = document.querySelector(".state-time")



const songStatus = document.querySelector(".song-status")
imageMusic = songStatus.querySelector("img")
nameMusic = songStatus.querySelector(".song-name p")
nameArtist = songStatus.querySelector(".song-name span")
music = document.querySelector(".selected-music")

let musicIndex = 0

window.addEventListener("load", function(){
    loadMusic(musicIndex)
})

function loadMusic(indexNumb){
    nameMusic.innerText = allMusic[indexNumb].name
    nameArtist.innerText = allMusic[indexNumb].artist
    imageMusic.src = `./view/image/${allMusic[indexNumb].img}`
    music.src = `./view/music/${allMusic[indexNumb].src}.mp3`
}

music.addEventListener("timeupdate", function(e){
    const currentTime = e.target.currentTime
    const duration = e.target.duration

    controller.setTime(duration)
    controller.setTimeNow(currentTime)

    // console.log(currentTime)

    progressBarTime = (currentTime / duration) * 100
    progressBar.style.width = `${progressBarTime}%`
})

player.addEventListener("click", function(){
    controller.playPause()
})

buttonNext.addEventListener("click", function(){
    controller.next()
})

buttonPrev.addEventListener("click", function(){
    controller.prev()
})

