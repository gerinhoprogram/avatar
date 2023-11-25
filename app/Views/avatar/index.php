<script src="http://html2canvas.hertzen.com/dist/html2canvas.js"></script>
<style>
    *,
    *::before,
    *::after {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    
    .wrapper {
        height: 300px;
        width: 300px;
        position: relative;
        background-color: #dbff3c;
        border-radius: 50%;
        overflow: hidden;
    }
    
    .controls input {
        display: none;
    }
    
    .head {
        height: 130px;
        width: 45%;
        border-radius: 100%;
        position: absolute;
        z-index: 5;
        bottom: 60px;
        right: 50%;
        transform: translateX(50%);
        background-color: #df3b3b;
        overflow: hidden;
    }
    
    .chapeu,
    .chapeu2,
    .chapeu3,
    .chapeu4,
    .chapeu5,
    .chapeu6,
    .chapeu7,
    .chapeu8,
    .chapeu9,
    .chapeu10 {
        position: absolute;
        z-index: 5;
        display: flex;
        align-items: end;
        bottom: 400px;
        justify-content: center;
        transition: bottom 0.3s ease-in-out;
    }
    
    .chapeu {
        right: 32%;
    }
    
    .chapeu2 {
        right: 32%;
    }
    
    .chapeu3 {
        right: 33%;
    }
    
    .chapeu4 {
        right: 27%;
    }
    
    .chapeu5 {
        right: 15%;
    }
    
    .chapeu6 {
        right: 26%;
    }
    
    .chapeu7 {
        right: 24%;
    }
    
    .chapeu8 {
        right: 23%;
    }
    
    .chapeu9 {
        right: 21%;
    }
    
    .chapeu10 {
        right: 27%;
    }
    
    .glasses,
    .glasses2,
    .glasses3,
    .glasses4,
    .glasses5,
    .glasses6,
    .glasses7,
    .glasses8,
    .glasses9,
    .glasses10 {
        display: flex;
        gap: 2rem;
        position: absolute;
        bottom: 120px;
        right: -50%;
        z-index: 5;
        transform: translateX(50%);
        transition: right 0.3s ease-in-out;
    }
    
    .nariz,
    .nariz2 {
        display: flex;
        gap: 2rem;
        position: absolute;
        right: -50%;
        z-index: 5;
        transform: translateX(50%);
        transition: right 0.3s ease-in-out;
    }
    
    .nariz {
        bottom: 93px;
    }
    /* respiração do trovão primeira forma hekireki issen */
    
    .nariz2 {
        bottom: 100px;
    }
    
    .tie,
    .tie2 {
        position: absolute;
        z-index: 7;
        transition: bottom 0.3s ease-in-out;
    }
    
    .tie {
        bottom: -80px;
        right: 36%;
    }
    
    .tie2 {
        bottom: -100px;
        right: 32%;
    }
    
    .boca2,
    .boca3,
    .boca,
    .boca4,
    .boca5,
    .boca6,
    .boca7 {
        position: absolute;
        bottom: -250px;
        right: 36%;
        z-index: 7;
        transition: bottom 0.3s ease-in-out;
    }
    
    .boca9,
    .boca8 {
        position: absolute;
        bottom: -250px;
        right: 38%;
        z-index: 7;
        transition: bottom 0.3s ease-in-out;
    }
    
    .control {
        height: 50px;
        width: 50px;
        background-color: #aff290;
        position: relative;
        place-items: center;
        border-radius: 50%;
        box-shadow: 8px 8px 14px #00000024;
        cursor: pointer;
        position: relative;
        margin: 10px;
    }
    /*     
    .glassescontrol:hover::before,
    .hatcontrol:hover::before,
    .tiecontrol:hover::before {
        content: attr(data-text);
        padding: 2px 5px;
        border-radius: 5px;
        position: absolute;
        top: 50%;
        left: 110%;
        transform: translateY(-50%);
        background-color: #c8e61f;
        color: white;
    } */
</style>
<div class="container mt-4 mb-4">
    
            
        <?php include('container.php') ?>
       
</div>


<script>
    function downloadimage() {
        var container = document.getElementById("htmltoimage");
        html2canvas(container, {
            allowTaint: true
        }).then(function(canvas) {
            var link = document.createElement("a");
            document.body.appendChild(link);
            link.download = "<?php echo $_SESSION['usuario_nome'] ?>.jpg";
            link.href = canvas.toDataURL();
            link.target = "_blank";
            link.click();
        });
    }

    function troca_cor_cabeca() {
        var cor = document.getElementById("cor_cabeca").value;
        document.getElementById("head").style.backgroundColor = cor;
    }

    function troca_cor_fundo() {
        var cor = document.getElementById("cor_fundo").value;
        document.getElementById("htmltoimage").style.backgroundColor = cor;
    }



    //controls  
    //olhos 
    const glassescheck = document.querySelector("#eyeglasses");
    const glassescheck2 = document.querySelector("#eyeglasses2");
    const glassescheck3 = document.querySelector("#eyeglasses3");
    const glassescheck4 = document.querySelector("#eyeglasses4");
    const glassescheck5 = document.querySelector("#eyeglasses5");
    const glassescheck6 = document.querySelector("#eyeglasses6");
    const glassescheck7 = document.querySelector("#eyeglasses7");
    const glassescheck8 = document.querySelector("#eyeglasses8");
    const glassescheck9 = document.querySelector("#eyeglasses9");
    const glassescheck10 = document.querySelector("#eyeglasses10");

    // nariz
    const narizcheck = document.querySelector("#nariz");
    const narizcheck2 = document.querySelector("#nariz2");

    // gravata
    const tiecheck = document.querySelector("#tie");
    const tiecheck2 = document.querySelector("#tie2");

    //boca
    const bocacheck = document.querySelector("#boca");
    const boca2check = document.querySelector("#boca2");
    const boca3check = document.querySelector("#boca3");
    const boca4check = document.querySelector("#boca4");
    const boca5check = document.querySelector("#boca5");
    const boca6check = document.querySelector("#boca6");
    const boca7check = document.querySelector("#boca7");
    const boca8check = document.querySelector("#boca8");
    const boca9check = document.querySelector("#boca9");

    // chapeu
    const chapeucheck = document.querySelector("#chapeu");
    const chapeu2check = document.querySelector("#chapeu2");
    const chapeu3check = document.querySelector("#chapeu3");
    const chapeu4check = document.querySelector("#chapeu4");
    const chapeu5check = document.querySelector("#chapeu5");
    const chapeu6check = document.querySelector("#chapeu6");
    const chapeu7check = document.querySelector("#chapeu7");
    const chapeu8check = document.querySelector("#chapeu8");
    const chapeu9check = document.querySelector("#chapeu9");
    const chapeu10check = document.querySelector("#chapeu10");

    //accessories  
    const glasses = document.querySelector(".glasses");
    const glasses2 = document.querySelector(".glasses2");
    const glasses3 = document.querySelector(".glasses3");
    const glasses4 = document.querySelector(".glasses4");
    const glasses5 = document.querySelector(".glasses5");
    const glasses6 = document.querySelector(".glasses6");
    const glasses7 = document.querySelector(".glasses7");
    const glasses8 = document.querySelector(".glasses8");
    const glasses9 = document.querySelector(".glasses9");
    const glasses10 = document.querySelector(".glasses10");

    const tie = document.querySelector(".tie");
    const tie2 = document.querySelector(".tie2");

    const nariz = document.querySelector(".nariz");
    const nariz2 = document.querySelector(".nariz2");

    const boca = document.querySelector(".boca");
    const boca2 = document.querySelector(".boca2");
    const boca3 = document.querySelector(".boca3");
    const boca4 = document.querySelector(".boca4");
    const boca5 = document.querySelector(".boca5");
    const boca6 = document.querySelector(".boca6");
    const boca7 = document.querySelector(".boca7");
    const boca8 = document.querySelector(".boca8");
    const boca9 = document.querySelector(".boca9");

    const chapeu = document.querySelector(".chapeu");
    const chapeu2 = document.querySelector(".chapeu2");
    const chapeu3 = document.querySelector(".chapeu3");
    const chapeu4 = document.querySelector(".chapeu4");
    const chapeu5 = document.querySelector(".chapeu5");
    const chapeu6 = document.querySelector(".chapeu6");
    const chapeu7 = document.querySelector(".chapeu7");
    const chapeu8 = document.querySelector(".chapeu8");
    const chapeu9 = document.querySelector(".chapeu9");
    const chapeu10 = document.querySelector(".chapeu10");

    // chapeu
    chapeucheck.addEventListener("change", chapeufun);

    function chapeufun() {
        if (chapeucheck.checked == true) {
            chapeu.style.bottom = "165px";
            chapeu2.style.bottom = "400px";
            chapeu3.style.bottom = "400px";
            chapeu4.style.bottom = "400px";
            chapeu5.style.bottom = "400px";
            chapeu6.style.bottom = "400px";
            chapeu8.style.bottom = "400px";
            chapeu7.style.bottom = "400px";
            chapeu9.style.bottom = "400px";
            chapeu10.style.bottom = "400px";
        } else {
            chapeu.style.bottom = "400px";
        }
    }
    chapeu3check.addEventListener("change", chapeu3fun);

    function chapeu3fun() {
        if (chapeu3check.checked == true) {
            chapeu3.style.bottom = "160px";
            chapeu2.style.bottom = "400px";
            chapeu.style.bottom = "400px";
            chapeu4.style.bottom = "400px";
            chapeu5.style.bottom = "400px";
            chapeu6.style.bottom = "400px";
            chapeu8.style.bottom = "400px";
            chapeu7.style.bottom = "400px";
            chapeu9.style.bottom = "400px";
            chapeu10.style.bottom = "400px";
        } else {
            chapeu3.style.bottom = "400px";
        }
    }
    chapeu2check.addEventListener("change", chapeu2fun);

    function chapeu2fun() {
        if (chapeu2check.checked == true) {
            chapeu2.style.bottom = "155px";
            chapeu.style.bottom = "400px";
            chapeu3.style.bottom = "400px";
            chapeu4.style.bottom = "400px";
            chapeu5.style.bottom = "400px";
            chapeu6.style.bottom = "400px";
            chapeu8.style.bottom = "400px";
            chapeu7.style.bottom = "400px";
            chapeu9.style.bottom = "400px";
            chapeu10.style.bottom = "400px";
        } else {
            chapeu2.style.bottom = "400px";
        }
    }

    chapeu4check.addEventListener("change", chapeu4fun);

    function chapeu4fun() {
        if (chapeu4check.checked == true) {
            chapeu4.style.bottom = "165px";
            chapeu2.style.bottom = "400px";
            chapeu3.style.bottom = "400px";
            chapeu.style.bottom = "400px";
            chapeu5.style.bottom = "400px";
            chapeu6.style.bottom = "400px";
            chapeu8.style.bottom = "400px";
            chapeu7.style.bottom = "400px";
            chapeu9.style.bottom = "400px";
            chapeu10.style.bottom = "400px";
        } else {
            chapeu4.style.bottom = "400px";
        }
    }

    chapeu5check.addEventListener("change", chapeu5fun);

    function chapeu5fun() {
        if (chapeu5check.checked == true) {
            chapeu5.style.bottom = "110px";
            chapeu2.style.bottom = "400px";
            chapeu3.style.bottom = "400px";
            chapeu4.style.bottom = "400px";
            chapeu.style.bottom = "400px";
            chapeu6.style.bottom = "400px";
            chapeu8.style.bottom = "400px";
            chapeu7.style.bottom = "400px";
            chapeu9.style.bottom = "400px";
            chapeu10.style.bottom = "400px";
        } else {
            chapeu5.style.bottom = "400px";
        }
    }

    chapeu6check.addEventListener("change", chapeu6fun);

    function chapeu6fun() {
        if (chapeu6check.checked == true) {
            chapeu6.style.bottom = "170px";
            chapeu2.style.bottom = "400px";
            chapeu3.style.bottom = "400px";
            chapeu4.style.bottom = "400px";
            chapeu5.style.bottom = "400px";
            chapeu.style.bottom = "400px";
            chapeu8.style.bottom = "400px";
            chapeu7.style.bottom = "400px";
            chapeu9.style.bottom = "400px";
            chapeu10.style.bottom = "400px";
        } else {
            chapeu6.style.bottom = "400px";
        }
    }

    chapeu7check.addEventListener("change", chapeu7fun);

    function chapeu7fun() {
        if (chapeu7check.checked == true) {
            chapeu7.style.bottom = "145px";
            chapeu2.style.bottom = "400px";
            chapeu3.style.bottom = "400px";
            chapeu4.style.bottom = "400px";
            chapeu5.style.bottom = "400px";
            chapeu6.style.bottom = "400px";
            chapeu8.style.bottom = "400px";
            chapeu.style.bottom = "400px";
            chapeu9.style.bottom = "400px";
            chapeu10.style.bottom = "400px";
        } else {
            chapeu7.style.bottom = "400px";
        }
    }

    chapeu8check.addEventListener("change", chapeu8fun);

    function chapeu8fun() {
        if (chapeu8check.checked == true) {
            chapeu8.style.bottom = "155px";
            chapeu2.style.bottom = "400px";
            chapeu3.style.bottom = "400px";
            chapeu4.style.bottom = "400px";
            chapeu5.style.bottom = "400px";
            chapeu6.style.bottom = "400px";
            chapeu.style.bottom = "400px";
            chapeu7.style.bottom = "400px";
            chapeu9.style.bottom = "400px";
            chapeu10.style.bottom = "400px";
        } else {
            chapeu8.style.bottom = "400px";
        }
    }

    chapeu9check.addEventListener("change", chapeu9fun);

    function chapeu9fun() {
        if (chapeu9check.checked == true) {
            chapeu9.style.bottom = "160px";
            chapeu2.style.bottom = "400px";
            chapeu3.style.bottom = "400px";
            chapeu4.style.bottom = "400px";
            chapeu5.style.bottom = "400px";
            chapeu6.style.bottom = "400px";
            chapeu8.style.bottom = "400px";
            chapeu7.style.bottom = "400px";
            chapeu.style.bottom = "400px";
            chapeu10.style.bottom = "400px";
        } else {
            chapeu9.style.bottom = "400px";
        }
    }

    chapeu10check.addEventListener("change", chapeu10fun);

    function chapeu10fun() {
        if (chapeu10check.checked == true) {
            chapeu10.style.bottom = "145px";
            chapeu2.style.bottom = "400px";
            chapeu3.style.bottom = "400px";
            chapeu4.style.bottom = "400px";
            chapeu5.style.bottom = "400px";
            chapeu6.style.bottom = "400px";
            chapeu8.style.bottom = "400px";
            chapeu7.style.bottom = "400px";
            chapeu9.style.bottom = "400px";
            chapeu.style.bottom = "400px";
        } else {
            chapeu10.style.bottom = "400px";
        }
    }
    // fim chapeu

    // nariz
    narizcheck.addEventListener("change", narizfun);

    function narizfun() {
        if (narizcheck.checked == true) {
            nariz.style.right = "50%";
            nariz2.style.right = "-50%";
        } else {
            nariz.style.right = "-50%";
        }
    }

    narizcheck2.addEventListener("change", narizfun2);

    function narizfun2() {
        if (narizcheck2.checked == true) {
            nariz2.style.right = "50%";
            nariz.style.right = "-50%";
        } else {
            nariz2.style.right = "-50%";
        }
    }

    // oculos
    glassescheck.addEventListener("change", glassesfun);

    function glassesfun() {
        if (glassescheck.checked == true) {
            glasses.style.right = "50%";
            glasses2.style.right = "-50%";
            glasses3.style.right = "-50%";
            glasses4.style.right = "-50%";
            glasses5.style.right = "-50%";
            glasses6.style.right = "-50%";
            glasses7.style.right = "-50%";
            glasses8.style.right = "-50%";
            glasses9.style.right = "-50%";
            glasses10.style.right = "-50%";
        } else {
            glasses.style.right = "-50%";
        }
    }

    glassescheck2.addEventListener("change", glassesfun2);

    function glassesfun2() {
        if (glassescheck2.checked == true) {
            glasses2.style.right = "50%";
            glasses.style.right = "-50%";
            glasses3.style.right = "-50%";
            glasses4.style.right = "-50%";
            glasses5.style.right = "-50%";
            glasses6.style.right = "-50%";
            glasses7.style.right = "-50%";
            glasses8.style.right = "-50%";
            glasses9.style.right = "-50%";
            glasses10.style.right = "-50%";
        } else {
            glasses2.style.right = "-50%";
        }
    }

    glassescheck3.addEventListener("change", glassesfun3);

    function glassesfun3() {
        if (glassescheck3.checked == true) {
            glasses3.style.right = "50%";
            glasses.style.right = "-50%";
            glasses2.style.right = "-50%";
            glasses4.style.right = "-50%";
            glasses5.style.right = "-50%";
            glasses6.style.right = "-50%";
            glasses7.style.right = "-50%";
            glasses8.style.right = "-50%";
            glasses9.style.right = "-50%";
            glasses10.style.right = "-50%";
        } else {
            glasses3.style.right = "-50%";
        }
    }

    glassescheck4.addEventListener("change", glassesfun4);

    function glassesfun4() {
        if (glassescheck4.checked == true) {
            glasses4.style.right = "50%";
            glasses.style.right = "-50%";
            glasses2.style.right = "-50%";
            glasses3.style.right = "-50%";
            glasses5.style.right = "-50%";
            glasses6.style.right = "-50%";
            glasses7.style.right = "-50%";
            glasses8.style.right = "-50%";
            glasses9.style.right = "-50%";
            glasses10.style.right = "-50%";
        } else {
            glasses4.style.right = "-50%";
        }
    }

    glassescheck5.addEventListener("change", glassesfun5);

    function glassesfun5() {
        if (glassescheck5.checked == true) {
            glasses5.style.right = "50%";
            glasses.style.right = "-50%";
            glasses2.style.right = "-50%";
            glasses3.style.right = "-50%";
            glasses4.style.right = "-50%";
            glasses6.style.right = "-50%";
            glasses7.style.right = "-50%";
            glasses8.style.right = "-50%";
            glasses9.style.right = "-50%";
            glasses10.style.right = "-50%";
        } else {
            glasses5.style.right = "-50%";
        }
    }
    glassescheck6.addEventListener("change", glassesfun6);

    function glassesfun6() {
        if (glassescheck6.checked == true) {
            glasses6.style.right = "50%";
            glasses.style.right = "-50%";
            glasses2.style.right = "-50%";
            glasses3.style.right = "-50%";
            glasses4.style.right = "-50%";
            glasses5.style.right = "-50%";
            glasses7.style.right = "-50%";
            glasses8.style.right = "-50%";
            glasses9.style.right = "-50%";
            glasses10.style.right = "-50%";
        } else {
            glasses6.style.right = "-50%";
        }
    }

    glassescheck7.addEventListener("change", glassesfun7);

    function glassesfun7() {
        if (glassescheck7.checked == true) {
            glasses7.style.right = "50%";
            glasses.style.right = "-50%";
            glasses2.style.right = "-50%";
            glasses3.style.right = "-50%";
            glasses4.style.right = "-50%";
            glasses5.style.right = "-50%";
            glasses6.style.right = "-50%";
            glasses8.style.right = "-50%";
            glasses9.style.right = "-50%";
            glasses10.style.right = "-50%";
        } else {
            glasses7.style.right = "-50%";
        }
    }

    glassescheck8.addEventListener("change", glassesfun8);

    function glassesfun8() {
        if (glassescheck8.checked == true) {
            glasses8.style.right = "50%";
            glasses.style.right = "-50%";
            glasses2.style.right = "-50%";
            glasses3.style.right = "-50%";
            glasses4.style.right = "-50%";
            glasses5.style.right = "-50%";
            glasses7.style.right = "-50%";
            glasses6.style.right = "-50%";
            glasses9.style.right = "-50%";
            glasses10.style.right = "-50%";
        } else {
            glasses8.style.right = "-50%";
        }
    }

    glassescheck9.addEventListener("change", glassesfun9);

    function glassesfun9() {
        if (glassescheck9.checked == true) {
            glasses9.style.right = "50%";
            glasses.style.right = "-50%";
            glasses2.style.right = "-50%";
            glasses3.style.right = "-50%";
            glasses4.style.right = "-50%";
            glasses5.style.right = "-50%";
            glasses7.style.right = "-50%";
            glasses8.style.right = "-50%";
            glasses6.style.right = "-50%";
            glasses10.style.right = "-50%";
        } else {
            glasses9.style.right = "-50%";
        }
    }

    glassescheck10.addEventListener("change", glassesfun10);

    function glassesfun10() {
        if (glassescheck10.checked == true) {
            glasses10.style.right = "50%";
            glasses.style.right = "-50%";
            glasses2.style.right = "-50%";
            glasses3.style.right = "-50%";
            glasses4.style.right = "-50%";
            glasses5.style.right = "-50%";
            glasses7.style.right = "-50%";
            glasses8.style.right = "-50%";
            glasses9.style.right = "-50%";
            glasses6.style.right = "-50%";
        } else {
            glasses10.style.right = "-50%";
        }
    }
    // fim oculos

    // gravata
    tiecheck.addEventListener("change", tiefun);

    function tiefun() {
        if (tiecheck.checked == true) {
            tie.style.bottom = "20px";
            tie2.style.bottom = "-100px";
        } else {
            tie.style.bottom = "-80px";
        }
    }
    tiecheck2.addEventListener("change", tiefun2);

    function tiefun2() {
        if (tiecheck2.checked == true) {
            tie2.style.bottom = "-20px";
            tie.style.bottom = "-80px";
        } else {
            tie2.style.bottom = "-100px";
        }
    }
    // fim gravata

    bocacheck.addEventListener("change", bocafun);

    function bocafun() {
        if (bocacheck.checked == true) {
            boca.style.bottom = "60px";
            boca2.style.bottom = "-80px";
            boca3.style.bottom = "-80px";
            boca4.style.bottom = "-80px";
            boca5.style.bottom = "-80px";
            boca6.style.bottom = "-100px";
            boca7.style.bottom = "-100px";
            boca9.style.bottom = "-80px";
            boca8.style.bottom = "-80px";
        } else {
            boca.style.bottom = "-80px";
        }
    }

    boca2check.addEventListener("change", boca2fun);

    function boca2fun() {
        if (boca2check.checked == true) {
            boca2.style.bottom = "45px";
            boca.style.bottom = "-80px";
            boca3.style.bottom = "-80px";
            boca4.style.bottom = "-80px";
            boca5.style.bottom = "-80px";
            boca6.style.bottom = "-100px";
            boca7.style.bottom = "-100px";
            boca9.style.bottom = "-80px";
            boca8.style.bottom = "-80px";
        } else {
            boca2.style.bottom = "-80px";
        }
    }
    boca3check.addEventListener("change", boca3fun);

    function boca3fun() {
        if (boca3check.checked == true) {
            boca3.style.bottom = "45px";
            boca2.style.bottom = "-80px";
            boca.style.bottom = "-80px";
            boca4.style.bottom = "-80px";
            boca5.style.bottom = "-80px";
            boca6.style.bottom = "-100px";
            boca9.style.bottom = "-80px";
            boca8.style.bottom = "-80px";
            boca7.style.bottom = "-100px";
        } else {
            boca3.style.bottom = "-80px";
        }
    }
    boca4check.addEventListener("change", boca4fun);

    function boca4fun() {
        if (boca4check.checked == true) {
            boca4.style.bottom = "45px";
            boca2.style.bottom = "-80px";
            boca3.style.bottom = "-80px";
            boca.style.bottom = "-80px";
            boca5.style.bottom = "-80px";
            boca6.style.bottom = "-100px";
            boca7.style.bottom = "-100px";
            boca9.style.bottom = "-80px";
            boca8.style.bottom = "-80px";
        } else {
            boca4.style.bottom = "-80px";
        }
    }

    boca5check.addEventListener("change", boca5fun);

    function boca5fun() {
        if (boca5check.checked == true) {
            boca5.style.bottom = "45px";
            boca2.style.bottom = "-80px";
            boca3.style.bottom = "-80px";
            boca4.style.bottom = "-80px";
            boca.style.bottom = "-80px";
            boca6.style.bottom = "-100px";
            boca7.style.bottom = "-100px";
            boca9.style.bottom = "-80px";
            boca8.style.bottom = "-80px";
        } else {
            boca5.style.bottom = "-80px";
        }
    }

    boca6check.addEventListener("change", boca6fun);

    function boca6fun() {
        if (boca6check.checked == true) {
            boca6.style.bottom = "1px";
            boca2.style.bottom = "-80px";
            boca3.style.bottom = "-80px";
            boca4.style.bottom = "-80px";
            boca5.style.bottom = "-80px";
            boca.style.bottom = "-80px";
            boca7.style.bottom = "-100px";
            boca9.style.bottom = "-80px";
            boca8.style.bottom = "-80px";
        } else {
            boca6.style.bottom = "-100px";
        }
    }

    boca7check.addEventListener("change", boca7fun);

    function boca7fun() {
        if (boca7check.checked == true) {
            boca7.style.bottom = "1px";
            boca2.style.bottom = "-80px";
            boca3.style.bottom = "-80px";
            boca4.style.bottom = "-80px";
            boca5.style.bottom = "-80px";
            boca6.style.bottom = "-100px";
            boca.style.bottom = "-80px";
            boca9.style.bottom = "-80px";
            boca8.style.bottom = "-80px";
        } else {
            boca7.style.bottom = "-100px";
        }
    }

    boca8check.addEventListener("change", boca8fun);

    function boca8fun() {
        if (boca8check.checked == true) {
            boca8.style.bottom = "60px";
            boca2.style.bottom = "-80px";
            boca3.style.bottom = "-80px";
            boca4.style.bottom = "-80px";
            boca5.style.bottom = "-80px";
            boca6.style.bottom = "-100px";
            boca.style.bottom = "-80px";
            boca7.style.bottom = "-100px";
            boca9.style.bottom = "-80px";
        } else {
            boca8.style.bottom = "-80px";
        }
    }

    boca9check.addEventListener("change", boca9fun);

    function boca9fun() {
        if (boca9check.checked == true) {
            boca9.style.bottom = "65px";
            boca2.style.bottom = "-80px";
            boca3.style.bottom = "-80px";
            boca4.style.bottom = "-80px";
            boca5.style.bottom = "-80px";
            boca6.style.bottom = "-100px";
            boca.style.bottom = "-80px";
            boca7.style.bottom = "-100px";
            boca8.style.bottom = "-80px";
        } else {
            boca9.style.bottom = "-80px";
        }
    }
</script>