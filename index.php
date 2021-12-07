<?php
    include_once("header.php");
?>
    <header class="side_bar-menu">
        <div class="logo">
            <svg viewBox="0 0 1134 340" class="spotify-logo--text"><title>Spotify</title><path fill="white" d="M8 171c0 92 76 168 168 168s168-76 168-168S268 4 176 4 8 79 8 171zm230 78c-39-24-89-30-147-17-14 2-16-18-4-20 64-15 118-8 162 19 11 7 0 24-11 18zm17-45c-45-28-114-36-167-20-17 5-23-21-7-25 61-18 136-9 188 23 14 9 0 31-14 22zM80 133c-17 6-28-23-9-30 59-18 159-15 221 22 17 9 1 37-17 27-54-32-144-35-195-19zm379 91c-17 0-33-6-47-20-1 0-1 1-1 1l-16 19c-1 1-1 2 0 3 18 16 40 24 64 24 34 0 55-19 55-47 0-24-15-37-50-46-29-7-34-12-34-22s10-16 23-16 25 5 39 15c0 0 1 1 2 1s1-1 1-1l14-20c1-1 1-1 0-2-16-13-35-20-56-20-31 0-53 19-53 46 0 29 20 38 52 46 28 6 32 12 32 22 0 11-10 17-25 17zm95-77v-13c0-1-1-2-2-2h-26c-1 0-2 1-2 2v147c0 1 1 2 2 2h26c1 0 2-1 2-2v-46c10 11 21 16 36 16 27 0 54-21 54-61s-27-60-54-60c-15 0-26 5-36 17zm30 78c-18 0-31-15-31-35s13-34 31-34 30 14 30 34-12 35-30 35zm68-34c0 34 27 60 62 60s62-27 62-61-26-60-61-60-63 27-63 61zm30-1c0-20 13-34 32-34s33 15 33 35-13 34-32 34-33-15-33-35zm140-58v-29c0-1 0-2-1-2h-26c-1 0-2 1-2 2v29h-13c-1 0-2 1-2 2v22c0 1 1 2 2 2h13v58c0 23 11 35 34 35 9 0 18-2 25-6 1 0 1-1 1-2v-21c0-1 0-2-1-2h-2c-5 3-11 4-16 4-8 0-12-4-12-12v-54h30c1 0 2-1 2-2v-22c0-1-1-2-2-2h-30zm129-3c0-11 4-15 13-15 5 0 10 0 15 2h1s1-1 1-2V93c0-1 0-2-1-2-5-2-12-3-22-3-24 0-36 14-36 39v5h-13c-1 0-2 1-2 2v22c0 1 1 2 2 2h13v89c0 1 1 2 2 2h26c1 0 1-1 1-2v-89h25l37 89c-4 9-8 11-14 11-5 0-10-1-15-4h-1l-1 1-9 19c0 1 0 3 1 3 9 5 17 7 27 7 19 0 30-9 39-33l45-116v-2c0-1-1-1-2-1h-27c-1 0-1 1-1 2l-28 78-30-78c0-1-1-2-2-2h-44v-3zm-83 3c-1 0-2 1-2 2v113c0 1 1 2 2 2h26c1 0 1-1 1-2V134c0-1 0-2-1-2h-26zm-6-33c0 10 9 19 19 19s18-9 18-19-8-18-18-18-19 8-19 18zm245 69c10 0 19-8 19-18s-9-18-19-18-18 8-18 18 8 18 18 18zm0-34c9 0 17 7 17 16s-8 16-17 16-16-7-16-16 7-16 16-16zm4 18c3-1 5-3 5-6 0-4-4-6-8-6h-8v19h4v-6h4l4 6h5zm-3-9c2 0 4 1 4 3s-2 3-4 3h-4v-6h4z"></path></svg>
        </div>

        <ul>
            <li>
                <a href="#">
                    <i class="fas fa-home"></i>
                    Início
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fas fa-search"></i>
                    Buscar
                </a>
            </li>
            <li>
                
                <a href="#">
                    <i class="fas fa-bars"></i>
                    Sua biblioteca
                </a>
            </li>
        </ul>

        <ul>
            <li>
                <a href="#">
                    <img src="./view/image/liked.png">
                    Criar playlist
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="./view/image/liked.png">
                    Músicas curtidas
                </a>
            </li>
        </ul>


    </header>

    <main>
        <div class="row">
            <h2 class="status-title">Tocado recentemente</h2>
            <div class="row-card">
                <div class="card">
                    <img src="./view/image/liked.png">
                    <p>Músicas curtidas</p>
                    <span>N músicas</span>
                </div>
            </div>
        </div>

        <div class="row">
            <h2 class="status-title">Angra</h2>
            <div class="row-card">
                <div class="card">
                    <img src="./view/image/angrarebirth.jpg">
                    <p>Rebirth</p>
                    <span>Angra</span>
                </div>

                <div class="card">
                    <img src="./view/image/angraangles.jpg">
                    <p>Carry on</p>
                    <span>Angra</span>
                </div>

                <div class="card">
                    <img src="./view/image/angraangles.jpg">
                    <p>Wuthering Heights</p>
                    <span>Angra</span>
                </div>
            </div>
        </div>

        <div class="row">
            <h2 class="status-title">Guns n roses</h2>
            <div class="row-card">
                <div class="card">
                    <img src="./view/image/guns.jpg">
                    <p>knocking on hea...</p>
                    <span>Guns n roses</span>
                </div>

                <div class="card">
                    <img src="./view/image/guns.jpg">
                    <p>Don't cry</p>
                    <span>Guns n roses</span>
                </div>
            </div>
        </div>
    </main>

    <div class="bottom-menu">
        <div class="song-status">
            <img src="">
            <div class="song-name">
                <p></p>
                <span></span>
            </div>
            <div class="liked-status">
                <i class="fas fa-heart"></i>
            </div>
        </div>
        <div class="song-player">
            <div class="player-controller">
                <div class="player-controller__buttons">
                    <button class="controller-icon">
                        <svg role="img" height="16" width="16" viewBox="0 0 16 16" class="button-controller button-controller__hover"><path d="M4.5 6.8l.7-.8C4.1 4.7 2.5 4 .9 4v1c1.3 0 2.6.6 3.5 1.6l.1.2zm7.5 4.7c-1.2 0-2.3-.5-3.2-1.3l-.6.8c1 1 2.4 1.5 3.8 1.5V14l3.5-2-3.5-2v1.5zm0-6V7l3.5-2L12 3v1.5c-1.6 0-3.2.7-4.2 2l-3.4 3.9c-.9 1-2.2 1.6-3.5 1.6v1c1.6 0 3.2-.7 4.2-2l3.4-3.9c.9-1 2.2-1.6 3.5-1.6z"></path></svg>
                    </button>
                    <button class="controller-icon" id="prev">
                        <svg role="img" height="16" width="16" viewBox="0 0 16 16" class="button-controller button-controller__hover"><path d="M13 2.5L5 7.119V3H3v10h2V8.881l8 4.619z"></path></svg>
                    </button>
                    <button class="controller-icon button_player">
                        <svg role="img" height="16" width="16" viewBox="0 0 16 16" class="button-controller button-controller__hover player"><path d="M4.018 14L14.41 8 4.018 2z"></path></svg>
                    </button>
                    <button class="controller-icon" id="next">
                        <svg role="img" height="16" width="16" viewBox="0 0 16 16" class="button-controller button-controller__hover"><path d="M11 3v4.119L3 2.5v11l8-4.619V13h2V3z"></path></svg>
                    </button>
                    <button class="controller-icon">
                        <svg role="img" height="16" width="16" viewBox="0 0 16 16" class="button-controller button-controller__hover"><path d="M5.5 5H10v1.5l3.5-2-3.5-2V4H5.5C3 4 1 6 1 8.5c0 .6.1 1.2.4 1.8l.9-.5C2.1 9.4 2 9 2 8.5 2 6.6 3.6 5 5.5 5zm9.1 1.7l-.9.5c.2.4.3.8.3 1.3 0 1.9-1.6 3.5-3.5 3.5H6v-1.5l-3.5 2 3.5 2V13h4.5C13 13 15 11 15 8.5c0-.6-.1-1.2-.4-1.8z"></path></svg>
                    </button>
                </div>
            </div>
            <div class="progress-bar">
                <div class="state-time">0:00</div>
                <div class="progress">
                    <audio src="./view/music/rebirth.mp3" class="selected-music"></audio>
                    <div class="progress-bar__audio"></div>
                </div>
                <div class="final-music">5:47</div>
            </div>
        </div>
        <div class="sound-status">
            <button class="sound-icon">
                <svg role="img" height="16" width="16" viewBox="0 0 16 16" fill="white"><path d="M8.5 1A4.505 4.505 0 004 5.5c0 .731.191 1.411.502 2.022L1.99 13.163a1.307 1.307 0 00.541 1.666l.605.349a1.307 1.307 0 001.649-.283L9.009 9.95C11.248 9.692 13 7.807 13 5.5 13 3.019 10.981 1 8.5 1zM4.023 14.245a.307.307 0 01-.388.066l-.605-.349a.309.309 0 01-.128-.393l2.26-5.078A4.476 4.476 0 007.715 9.92l-3.692 4.325zM8.5 9C6.57 9 5 7.43 5 5.5S6.57 2 8.5 2 12 3.57 12 5.5 10.429 9 8.5 9z"></path></svg>
            </button>
            <button class="sound-icon">
                <svg role="img" height="16" width="16" viewBox="0 0 16 16" fill="white"><path d="M2 2v5l4.33-2.5L2 2zm0 12h14v-1H2v1zm0-4h14V9H2v1zm7-5v1h7V5H9z"></path></svg>
            </button>
            <button class="sound-icon">
                <svg role="img" height="16" width="16" aria-label="Conectar a um dispositivo" viewBox="0 0 16 16" fill="white"><path d="M0 3v8c0 .55.45 1 1 1h5v-1H1V3h5V2H1c-.55 0-1 .45-1 1zm3 11.5c0 .275.225.5.5.5H6v-1H3.5c-.275 0-.5.225-.5.5zM15 2H9c-.55 0-1 .45-1 1v11c0 .55.45 1 1 1h6c.55 0 1-.45 1-1V3c0-.55-.45-1-1-1zm0 12H9V3h6v11zm-3-8a.75.75 0 100-1.5.75.75 0 000 1.5zm0 6a2 2 0 100-4 2 2 0 000 4zm0-3c.551 0 1 .449 1 1s-.449 1-1 1-1-.449-1-1 .449-1 1-1z"></path></svg>
            </button>
            <button class="sound-icon">
                <svg role="presentation" height="16" width="16" aria-label="Volume alto" id="volume-icon" viewBox="0 0 16 16" fill="white"><path d="M12.945 1.379l-.652.763c1.577 1.462 2.57 3.544 2.57 5.858s-.994 4.396-2.57 5.858l.651.763a8.966 8.966 0 00.001-13.242zm-2.272 2.66l-.651.763a4.484 4.484 0 01-.001 6.397l.651.763c1.04-1 1.691-2.404 1.691-3.961s-.65-2.962-1.69-3.962zM0 5v6h2.804L8 14V2L2.804 5H0zm7-1.268v8.536L3.072 10H1V6h2.072L7 3.732z"></path></svg>
            </button>
            <div class="volume-bar">
                <div class="progress"></div>
            </div>
        </div>
    </div>

    <script src="./js/player.js"></script>
    <script src="./js/listMusic.js"></script>

<?php include_once("footer.php");?>
