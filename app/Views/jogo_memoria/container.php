
    <div class="row jogo_memoria">
        <div class="col-lg-12 border p-3">
       
        <div class="count-container">
        <p class="attempts" style="font-size: 11pt">Jogadas: <span class="count"></span></p>
        <span class="reset" style="font-size: 11pt">Resetar <i class="fas fa-sync"></i></span>
        <p class="time" style="font-size: 11pt">Tempo: <span class="min-count">00</span>: <span class="sec-count">00</span></p>
        </div>
        <div id="game"></div>


        </div>
    </div>
       
    <script>
        const cardsArray = [
                    {
                        name: "personagem1",
                        img: "<?=URL?>/public/img/animes/personagem1.png",
                    },
                    {
                        name: "personagem2",
                        img: "<?=URL?>/public/img/animes/personagem2.png",
                    },
                    {
                        name: "personagem3",
                        img: "<?=URL?>/public/img/animes/personagem3.png",
                    },
                    {
                        name: "personagem4",
                        img: "<?=URL?>/public/img/animes/personagem4.png",
                    },
                    {
                        name: "personagem5",
                        img: "<?=URL?>/public/img/animes/personagem5.png",
                    },
                    {
                        name: "personagem6",
                        img: "<?=URL?>/public/img/animes/personagem6.png",
                    },
                    {
                        name: "personagem7",
                        img: "<?=URL?>/public/img/animes/personagem7.png",
                    },
                    {
                        name: "personagem8",
                        img: "<?=URL?>/public/img/animes/personagem8.png",
                    },
                    
                ];
    
        // GAME   
        const startScreen2 = document.getElementById('modal');
        const game = document.getElementById("game");
        const grid = document.createElement("section");
        grid.classList.add("grid");
        // game.addEventListener("click", secCount);  
        game.appendChild(grid);
        // DOUBLE ARREY  
        let gameGrid = cardsArray.concat(cardsArray);
        // FOR RAMDOMISING THE CARDS EVERY TIME WE REFERESH THE PAGE  
        gameGrid.sort(() => 0.5 - Math.random());
        // CREATE CARDS  
        gameGrid.forEach((item) => {
            const card = document.createElement("div");
            card.classList.add(`card`, `${item.name}`);
            card.dataset.name = item.name;
            const front = document.createElement("div");
            front.classList.add("front");
            const back = document.createElement("div");
            back.classList.add("back");
            back.style.backgroundImage = `url(${item.img})`;
            grid.appendChild(card);
            card.appendChild(front);
            card.appendChild(back);
        });
        // ATTEMPTS COUNT  
        let attemptCount = 0;
        let attempts = document.querySelector(".count");
        attempts.innerText = attemptCount;
        // TIME COUNT  
        var sec = 0;
        var timeInSec;
        let min = 0;

        function secCount() {
            sec = sec + 1;
            document.querySelector(".sec-count").innerText = Math.floor(sec % 60);
            timeInSec = setTimeout(secCount, 1000);
            min = Math.floor(sec / 60);
            document.querySelector(".min-count").innerText = min;
        }
        var timeStarted = false;
        // secCount();  
        // RESET ALL  
        let reset = document.querySelector(".reset");
        reset.addEventListener("click", () => {
            let confirmReset = confirm("Whole game will start again. continue to reset?");
            if (confirmReset === true) {
                window.location.reload();
            }
        });
        // VARIABLES FOR THE GAME  
        let firstGuess = "";
        let secondGuess = "";
        let previousTarget = null;
        let count = 0;
        let delay = 1200;
        // FUNCTIONS FOR THE GAME  
        const match = () => {
            var selected = document.querySelectorAll(".selected");
            selected.forEach((card) => {
                card.classList.add("match");
            });
        };
        const resetGuesses = () => {
            firstGuess = "";
            secondGuess = "";
            count = 0;
            var selected = document.querySelectorAll(".selected");
            selected.forEach((card) => {
                card.classList.remove("selected");
            });
        };
        // GAME LOGICS  
        
        var placas = 1; 
        grid.addEventListener("click", function(event) {
            
            !timeStarted && secCount();
            timeStarted = true;
            let clicked = event.target;
            attemptCount++;
            attempts.innerText = attemptCount;
            if (
                clicked.nodeName === "SECTION" ||
                clicked === previousTarget ||
                clicked.parentNode.classList.contains("selected")
            ) {
                return;
            }
            
            if (count < 2) {
                count++;
                if (count === 1) {
                    // Assign first guess  
                    firstGuess = clicked.parentNode.dataset.name;
                    clicked.parentNode.classList.add("selected");
                } else {
                    // Assign second guess  
                    secondGuess = clicked.parentNode.dataset.name;
                    clicked.parentNode.classList.add("selected");
                }
                // If both guesses are not empty... 
                
                if (firstGuess !== "" && secondGuess !== "") {
                    // and the first guess matches the second match...  
                    if (firstGuess === secondGuess) {
                        placas = placas + 1;
                        // alert(placas);
                        // run the match function  
                        // match();  
                        // resetGuesses();  
                        setTimeout(match, delay);
                        setTimeout(resetGuesses, delay);
                        
                        var matched = document.querySelectorAll(`.${firstGuess}`);
                        matched.forEach(node => node.addEventListener('click', function(e) {
                            e.stopPropagation();
                        }))

                        if(placas >= 9){
                            // alert(placas);
                            var n_jogadas = document.getElementsByClassName("count");
                            var minutos = document.getElementsByClassName("min-count");
                            var segundos = document.getElementsByClassName("sec-count");
                            var tempo = document.getElementById("minutos");
                            var jogadas = document.getElementById("jogadas");
                            startScreen2.classList.remove('hide');

                            tempo.value = minutos[0].innerText + ':' + segundos[0].innerText;
                            jogadas.value = n_jogadas[0].innerText;
                        }
                        
                        
                    } else {
                        setTimeout(resetGuesses, delay);
                    }
                }
                
                
            }
            
            // Set previous target to clicked  
            // previousTarget = clicked;
        });
        
    </script>
