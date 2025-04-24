<style>

.pt-sans-regular {
  font-family: "PT Sans", sans-serif;
  font-weight: 400;
  font-style: normal;
}

.pt-sans-bold {
  font-family: "PT Sans", sans-serif;
  font-weight: 700;
  font-style: normal;
}

.pt-sans-regular-italic {
  font-family: "PT Sans", sans-serif;
  font-weight: 400;
  font-style: italic;
}

.pt-sans-bold-italic {
  font-family: "PT Sans", sans-serif;
  font-weight: 700;
  font-style: italic;
}


  body{
    background-color:#fff;
    color:white;
    font-weight: 300;
    font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif; 
  }


    * { 
      font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif; 
      box-sizing: border-box;
    }

    * { box-sizing: border-box; } 
    html, body {
      width:100%;
       -webkit-appearance: none;        
    }


    body {      
      padding:0;
      margin:0;
      max-width:100%;  
      font-size:16px;
      color:#000;
      font-weight:100;

    }



    body {
    -ms-overflow-style: none;
    scrollbar-width: none;
    }
    body::-webkit-scrollbar { 
        display: none;  
    }
    html {
      overflow: scroll;
      overflow-x: hidden;
    }
::-webkit-scrollbar {
    width: 0;
    background: transparent;
}


    html, body{
      width:100vw;height:100vh; 
    }
    
    .rd { color:#ea002a; }
    .bn { color:#802629; }

/*  @media(max-width:600px){  body>div {overflow-x:hidden;}} */

    @media(max-width:840px){
      body{
        font-size:17px;  
      }
      
    }

    
    b { font-weight:600; }

    div{ border:0px solid gold; position:relative; }

    /* --------------------------------------------------- */

    

    svg, img { font-family: 'helvetica', sans-serif; }
    :root {
      --animate-duration: 1800ms;
      --animate-delay: 1.5s;
    }
    a { text-decoration:none; color:inherit; }
    
    .flex1{
      display: flex; flex-flow: row wrap; justify-content:space-between;
    }

    .flex2{
      display: flex; flex-flow: column wrap; justify-content:space-between;
    }

    .flex3{
      display: flex; flex-flow: row wrap; justify-content: flex-start;
    }

    .flex4{
      display: flex; flex-flow: row wrap; justify-content:center;
    }

    .flex5{
      display: flex; flex-flow: column wrap; justify-content:center;
    }
    .flex6{
      display: flex; flex-flow: column wrap; justify-content:flex-end;
    }
    .flex7{
      display: flex; flex-flow: column wrap; justify-content:space-around;
    }
    
     .w20 { width:20%; }
   .w25 { width:25%; }
   .w30 { width:30%; }
   .w35 { width:35%; }
   .w40 { width:40%; }
   .w45 { width:45%; }
   .w50 { width:50%; }
   .w55 { width:55%; }
   .w60 { width:60%; }
   .w65 { width:65%; }
   .w70 { width:70%; }
   .w75 { width:75%; }
   .w80 { width:80%; }
   .w85 { width:85%; }
   .w90 { width:90%; }
   .w20,.w25,.w30,.w35,.w40, .w45, .w50, .w55, .w60, .w65, .w70, .w75, .w80, .w85, .w90 { 
    position:relative;
   }
   @media(max-width:700px){
    .w20,.w25,.w30,.w35,.w40, .w45, .w50, .w55, .w60, .w65, .w70, .w75, .w80, .w85, .w90 { 
      width:100%;
    }
  
   }


   .w100 { width:100%; }
   .w100v { width:100vw; }
   .h100 { height:100%; }
   .h100v { height:100vh; }

  [data-aos='rotate-round'] {
    transform: rotate(-360deg);
    transition-property: transform;
   }
   [data-aos='rotate-round'].aos-animate {
      transform: rotate(0deg);
   }

/* clip-path: polygon(2% 0, 100% 0, 100% 100%, 0 100%);  */

    .highlight {
      background: url("//s2.svgbox.net/pen-brushes.svg?ic=brush-5&color=F26626");
      padding: 2px  6px;
      
    }
  
    .mainLogo { position:absolute; top:2vh; left:3vw;width:70px; }
    .EN_ES {  position:absolute; top:2vh; right:3vw; width:50px; color:white; cursor:pointer; z-index:30;}
    .EN_ES:hover { color:black; }

  /* --------------------  gallery ----------------- */
  
    #gallery {
        width: 100%;
    }
    .img-group-container {
        width:100%;
        height: 680vh; 
        position: relative;
        border:0px solid yellow;
    }
    @media(max-width:700px){
      .img-group-container {
        width:100%;
        height: 380vh; 
      }
    }

    .img-group-container > div {
        position: sticky;
        top: 0;
        overflow: hidden;
        /*height: 100vh;*/
        border:0px dashed white;
    }

    .img-group {
        display: flex;
        margin:0;
        padding:0;
    }
    
/*    
    @media (max-aspect-ratio: 1.8) {  .img-group {  margin-top:1vh; border-top:0px solid blue;}  }
    @media (max-aspect-ratio: 1.7) {  .img-group {  margin-top:15vh; border-top:0px solid pink;}  }
    @media (max-aspect-ratio: 1.5) {  .img-group {  margin-top:20vh; border-top:0px solid white;}  }
    @media (max-aspect-ratio: 1.2) {  .img-group {  margin-top:30vh; border-top:0px solid lime;}  }
    @media (max-aspect-ratio: 0.65) {  .img-group {  margin-top:25vh; border-top:0px solid yellow;}  }
    @media (max-aspect-ratio: 0.5) {  .img-group {  margin-top:30vh; border-top:0px solid purple;}  }
*/
    .img-container  {
        display: flex; 
        width: 100vw;
        height: 100vh;
        max-height:100vh;
        flex: 0 0 auto;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        
        background-size:cover;
        background-position-x:center;
        background-position-y:center;
        background-repeat: no-repeat;
    }
    .img-container-mobile  {
        display: block; 
        width: 100vw;
        height: 100vh;
        max-height:100vh;
        
        
        background-size:cover;
        background-position:center;
        background-repeat: no-repeat;
    }
    
      
      .img-container-mobile {
        display:none;
        border:0px dashed purple;
      }


          /* 
          @media(max-aspect-ratio:1.2 ){ */

    @media (max-aspect-ratio: 1.2) or (max-width: 800px) {
    
      .img-container-mobile {
        display:block;
      }
      .img-container {
        display:none;
      }      
    }
    

    .progress {
        display:block;
        position: fixed;
        left: 0;
        right: 0;
        /*
        height: 5px;
        background: #9911ff;
        bottom: 50px;
        */
        height: 1px;
        bottom: 1px;
        transform: scaleX(0);
    }

    .wh { color:white }

    .hDivider { width:100%;height:14vh;}

    .tit1, .tit1m { position:relative; margin:-10vh auto 0 auto; color:white;font-size:3em; font-family: "PT Sans", sans-serif; font-weight: 700;}
    .tit2, .tit2m { color:#e64461; font-weight:600; font-size:1em;letter-spacing:0.3em; }
    .tit1m, .tit2m { width:88%; margin:0em auto;  }
    .parr { color:white; width:26%; position:absolute;left:10vw; bottom:10vh; font-size:1.2em }

    .td{ position:absolute;width:100%;height:14vh; top:42vh; text-align: center;}
    .tdm{ position:relative;width:90%; text-align: center; }

    .ti{ height:100%; margin:-5% auto 0% auto; transition: all 1s ease-out; opacity:0.3}
    .ti.acc {  height:125%; margin-top:-7.6%;  }
    .tim{  width:90%;margin:0px auto; transition: all 1s ease-out; opacity:0.3}

    .bg{ width:100vw; height:100vh;position:relative;  }
    .bgm { width:100vw; height:100vh;position:relative; margin:0; background-color:rgba(0,0,0,0.2)}

    .fpd{ position:absolute;width:100%;height:60vh; bottom:17vh; text-align: center; border:0px solid cyan;}
    .fpdm{ position:relative;width:100%; text-align: center; }

    .fpi{ height:100%; margin:0px auto; right:-10vw; opacity:0.85; transition: all 1s ease-out;  }
    .fpinnova { height:100%; margin:0px auto; right:-45vw; opacity:0.85; transition: all 1s ease-out; margin:auto; }

    .loque { width:100%; text-align:center; font-size: 1.6em; margin-top:0.5em }

    @media(max-aspect-ratio:18/10){
       .fpinnova {right:-40vw; }
    }
    @media(max-aspect-ratio:16/10){
       .fpinnova {right:-35vw; top:0vh; }
    }
    @media(max-aspect-ratio:14/10){
       .fpinnova {right:-25vw; top:0vh; }
    }

    @media(max-width:1200px){
      .tit1, .tit1m { font-size:2em;}
    }

    @media(max-aspect-ratio:1.2){ 
      .tit1 { font-size:1.4em; }
      .tit2 {letter-spacing:0.05em; }
    }


    @media(max-width:800px){
      .fpd{ width:100%;height:50vw; bottom:7vh; text-align: center; }
      .fpi{ width:100%; height:50vw; }
      .fpinnova {width:100%; height:50vw; }
      /*.bg {height:80vw;}*/
      .ti {width:90vw;height:auto;}
      .tit1 { margin:-20vh auto 0 auto;}
    }

    @media(max-width:550px){
      .loque {font-size: 1.2em;  }
    }

    @media(max-width:400px){
      .tit1m { font-size:1.4em }
      .tit2m { letter-spacing:0em }
    }

    @media(max-width:380px){
      .loque {font-size: 1em;  }
    }

    .globe{ position:absolute; height:58%; top:13.5%;left:58%; transition: all 1s ease-out; transform:rotate(-19deg); display:none;}
    .innova{ position:absolute; height:100%; bottom:3%;left:0%; transition: all 1s ease-out;display:none; }

    .fresa2 { height:62%; top:26%;left:12%;position:absolute; transition: all 1s ease-out;  }
    .fresa1 { height:68%; top:26%;left:25%;position:absolute; transition: all 1s ease-out;  }

    .downBox, .downBoxQA { right:11%; bottom:11%; position:absolute; width:fit-content; height:fit-content; color:white; font-weight:600; font-size: 1.2em; text-align:right; }


    .downBoxM{ margin-right:3%; margin-top:9%; width:95%; position:relative;  height:fit-content; color:white; font-weight:600; font-size: 1.2em; text-align:right; z-index:30}
    .downBoxQAM{ right:3%; bottom:9%; width:fit-content; position:absolute;  height:fit-content; color:white; font-weight:600; font-size: 1.2em; text-align:right; z-index:30}

    .down { width:150px;cursor:pointer;}
    .down:hover { opacity:0.8; }


        .main1 { width:28%; position:absolute; top:6%;left:18%; }
    .main2 { width:13%; position:absolute; top:15%;left:32.8%; }
    .main3 { width:26%; position:absolute; top:15%;left:47%; }
    .main4 { width:8%; position:absolute; top:9%;left:46.5%; }
    .main5 { width:5%; position:absolute; top:14%;left:27.7%; }
    .main6 { width:13.5%; position:absolute; top:27%;left:85.5%; }
    .main7, .main7a { width:20%; position:absolute; top:27%;left:2.4%; }
    .main8, .main8a { width:20.6%; position:absolute; top:27%;left:23.5%; }
    .main9, .main9a { width:20%; position:absolute; top:27%;left:45%; }
    .main10, .main10a { width:21.4%; position:absolute; top:27%;left:66%; }


    .mainPh1 { width:16.7%; position:absolute; top:29.6%;left:4.7%; }
    .mainPh2 { width:33%; position:absolute; top:42.6%;left:11.3%; }
    .mainPh3 { width:16%; position:absolute; top:29.6%;left:44.5%; }
    .mainPh4 { width:33.7%; position:absolute; top:28%;left:51%; }

    .mainDiv { position:relative; margin:10vh auto auto auto;width:120vh; height:100vh;}

    .main6m {display:none;}

    @media(max-aspect-ratio:10/7){
        .mainDiv { position:relative; margin:auto;width:80vw; height:80vw; }
    }

    @media(max-aspect-ratio:0.8){

        .mainDiv { position:relative; margin:auto;width:100vw; height:110vw;  right:-5vw;}
        .main6 {display:none;}
        .main6m { display:block;width:150px; position:absolute; top:80%;left:calc(50% - 75px);}
    }
    
    .mask2 {    -webkit-mask-image: url('im/2-wh.png');mask-image: url('im/2-wh.png');
        mask-repeat: no-repeat;  mask-size: contain;    }
    .mask0 {    -webkit-mask-image: url('im/0-wh.png');mask-image: url('im/0-wh.png');
        mask-repeat: no-repeat;  mask-size: contain;    }    
    .mask4 {    
        -webkit-mask-image: url('im/4-wh.png'); mask-image: url('im/4-wh.png');
        mask-repeat: no-repeat;  mask-size: contain;    }


        .miarrow { width:3em; margin:0.3em auto; display:none; }
    .menuitem { width:fit-content; padding:0.3em 2em; text-align:center; font-weight:600; transition: all 0.5s ease-out; cursor: pointer;}
    .menuitem:hover { color:#555;}
    .rBox { width:22%; padding:0.5em 1em; margin:0.6em;  border-radius:6px; }
    .rBig { position:relative; width:86%; margin-left:7%; margin-top:2em; margin-bottom:2em; display:none; }
    .bg1 { background-color:#007582; color:#63ccca; }
    .bg2 { background-color:#f4be49; color:#c20430; }
    .bg3 { background-color:#f98e2b; color:#802629; }
    .bg4 { background-color:#6bc04b; color:#41693d; }

    .ft { width:18%;margin:1%; border-radius: 1.5vw; cursor:pointer;}
    .ft img{width:100%}
    .ft:hover { opacity:0.8 }

    .rBox b { font-size:1.2em }

    @media(max-width:1200px){
      .ft { width:27%;border-radius: 2.5vw;}      
    }

    @media(max-width:800px){
      .ft { width:27%;border-radius: 2.5vw;}      
      .rBox { width:30%; font-size:0.9em}
      .rBig { position:relative; width:98%; margin-left:1%;}

    }
    @media(max-width:600px){
      .ft { width:42%;border-radius: 5vw;}
      .rBox { width:44%; font-size:0.8em;}
      .main6m { width:120px;left:calc(50% - 60px);}
    }



    .elMensaje{ position:absolute; width:36vw; left:45vw;top:15vh; min-height: 70vh; color:white;}
        .pTitle  {position:absolute; top:15vh;  width:fit-content; height: fit-content; color:white; font-size:0.9em;z-index:5}
        .pFoto { left:27vw; position:absolute; top:0vh; height:100%; aspect-ratio:962/1265; z-index:2}
        .qa { position:absolute; mix-blend-mode:multiply; opacity:0.4; width:33vw;left:33vw;top:4vh; border:2px solid yellow; z-index:1;}
        .mensajeTitle { font-size:2em; line-height:100%; }

        @media(min-aspect-ratio:1601/800){
          .pTitle{left:15vw;}
        }

        @media(max-aspect-ratio:1600/800){
            .pTitle {right:13vw;}
            .pFoto { left:21vw};
        }
        @media(max-aspect-ratio:1300/800){
            .pTitle {right:12vw;}
        }
        @media(max-aspect-ratio:1200/800){
            .pTitle {right:9vw;}
            .elMensaje{ width:36vw; left:55vw; border:0px solid blue}   
            
            .qa {  width:33vw;left:36vw;top:4vh; }
        }

        @media(max-aspect-ratio:1000/800){
            .pTitle {right:4vw;}
            .elMensaje{ width:36vw; left:53vw; border:0px solid red}               
            .qa {  width:35vw;left:30vw;top:4vh; }
        }

        @media(max-aspect-ratio:900/800){
            .pTitle {right:3vw; top:1vw}
            .qa {  width:40vw;left:20vw;top:14vh; }
            .pFoto{ height:80vh !important; top:13vh; left:4vw; }
            .elMensaje{ width:50vw; left:40vw; top:10vh; border:0px solid pink}
        }
        @media(max-aspect-ratio:750/800){
            .pTitle {right:3vw; top:1vw; font-size:0.85em;}
            .qa {  width:40vw;left:20vw;top:14vh; }
            .pFoto{ height:80vh !important; top:13vh; left:4vw; }
            .elMensaje{ width:50vw; left:44vw; top:10vh; font-size:0.9em; border:0px solid purple}
        }
        @media(max-aspect-ratio:650/800){
            .pFoto{ left:0vw;}
            .pTitle {font-size:0.8em; right:3vw;}
            .mensajeTitle { font-size:1.6em;}
            .elMensaje{ width:50vw; left:48vw; top:10vh; font-size:0.9em; border:0px solid lime}
        }
        @media(max-aspect-ratio:520/800){
            .pFoto{ top:45vh}
            .pTitle {font-size:0.8em; top:41vh; right:3vw !important; }
            .mensajeTitle { font-size:1.6em;}
            .qa {width:80vw; top:50vh}
            .elMensaje{ position:relative; height:fit-content; min-height:30vh;width:94vw; left:4vw; top:3vh; font-size:0.9em; border:0px solid white}
        }

        

        .mainBack { width:100%; height:100%; background-image:url('im/main-back.jpg'); background-size:cover; background-position: center;  background-color:#BD0314;}
        .redLine { width:100%; background-color:#c22032; border-top:1px solid white;border-bottom:1px solid white; padding:1em 2em; }
        .firstDiv { width:100vw; min-height:100vh; background-color:white; position:relative; border-top:1px solid white; }
        .Photo1 { background-image:url('im/photo1.jpg');width:15vw; height:30vw; background-size:cover; background-position:center; position: absolute; left:4vw;top:8vh; border-radius:10px}
        .firstDivA { width:20vw; height:80vh; position: absolute; right:4vw;top:8vh;}
        .firstDivB { background-image:url('im/photo2.jpg');height:40vh; width:40vh; max-width:20vw; max-height:20vw; aspect-ratio: 1; background-size:cover; background-position:center; position: relative; border-radius:50%; margin:0px auto; }
        .firstDivC { background-image:url('im/photo3.jpg');height:30%; max-width:100%; aspect-ratio: 10/6; background-size:cover; background-position:center top; position: relative; border-radius:10px;" data-aos="fade-up }
        .firstDivD {font-size:2vw; width:50vw; min-height:84vh; margin-left:22.7vw; margin-top:8vh; position: relative; border:0px solid silver;
            font-size:clamp(1rem, 1.5vmax + .2rem, 2.7rem); line-height:105%; }
        .firstDivE   { width:70%; max-width:600px; border-radius:10px; margin-top:1.5em;margin-bottom:1.5em; }


        .dirBack { background-image:url('im/director-background.jpg'); }
        .dirPh { height:90vh !important; bottom:1vh !important; }

        .bgRed { background-color: #BD0314; background-image:url('im/bg-red.png'); }        
        .fpBal { width:70%; margin-left:20%; margin-top:-10%; }

        .Titles { width:100%; text-align:center;position:absolute;top:0;left:0 }
        .TitlesRel { position:relative;width:100%; text-align:center; margin-bottom:10%; }



        .bgAqua { background-image:url('im/bg-aqua.png');}
        .bgBlue { background-image:url('im/bg-blue.png'); }
        .bgGreen { background-image:url('im/bg-green.png'); }
        .bgOrange { background-image:url('im/bg-orange.png'); }
        .fpEstrat {height:35vh; margin-top:20vh}               
        .fpEstratM { width:70%; margin-left:20%; margin-top:-17%; }
        .fpInnova { width:66%; margin-left:0%; margin-top:-4%; }
        .fpInnovaM { width:66%; margin-left:0%; margin-top:-4%; }
        .fpEquil { height:100%;margin-bottom:-20vh; }
        .fpEquilM { width:90%; margin-left:0%; margin-top:-17%;}    
        .iConexM { width:50%; margin-left:0%; margin-top:-6%; }
        .fresas { height:100%; aspect-ratio: 1283/657; }
        .dispBlock { display: block;}
        .dispFlex { display: flex;}
        .cPointer { cursor:pointer; }
        .highDiv1 { width:100vw; background-color:white; position:relative; border-top:1px solid white; border-bottom:1px solid white; }
        .highDiv1 { position:relative; width:86%; margin-left:7%; margin-top:2em; margin-bottom:2em; }
        .highH1  { font-size:3em; }
        .highDown {  position:absolute;right:9vw; z-index:5 }

        .fpiBal { height:100%; aspect-ratio: 1283/657;}
        .fpdDir { height:90vh !important; bottom:1vh !important;}
        .bal1 { height:9.5%; top:74%;left:1%;position:absolute; transition: all 1s ease-out; }
        .bal2  { height:22%; top:60%;left:40%;position:absolute; }
        .bal3 { height:31.5%; top:32%;left:19%;position:absolute; transition: all 1s ease-out; }

        .fpInnova { width:100%; text-align:center;position:absolute;top:0;left:0; }

        .arr10 { width:10%;}
        .op4 { opacity:0.4;}
        .footerDiv { width:100%; position:relative; padding:2em auto; border-top:1px solid white; border-bottom:1px solid white; }
        .footerDiv2 { width:90%; margin-left:5%; }

        .genDiv1 { width:100%; font-size:0.94em; color:#4C5C6E; background-color:#EDF1F4; border:1px solid transparent; }
        .genDiv2 { width:96%;margin:2em auto; border:1px solid transparent; }
        .genDiv3 { width:43%; text-align: center; }
        .genLogo { width:1em; vertical-align:middle; margin-left:0.3em; margin-bottom: 0.2em; }

        .Titles { width:100%; text-align:center;position:absolute;top:0;left:0 }
        .TitlesRel { position:relative;width:100%; text-align:center; margin-bottom:10%; }
        .TitlesRel3 { position:relative;width:100%; text-align:center; margin-bottom:3%; }
        .TitlesRel5 { position:relative;width:100%; text-align:center; margin-bottom:5%; }
        .TitlesRel4 { position:relative;width:100%; text-align:center; margin-bottom:4%; }
        .parrM { width:80%; margin-left:10%; text-align:left; }

        .ecoColor { color:#007582; }
        .downInf { width:100%; margin-top:1.7%; }

        .width100 { width:100%; }
        .width95 {width:95%;}
        .width60 { width:60%; }
        .width43 { width:43%; }


        .downBar {  width:29vw; margin:0.2vw; padding:0.4em 2em 0.4em 1em; color:white; background-color: #C22032; border-radius:4px;}
            .downBar:hover {opacity:0.75; cursor:pointer;}
            @media(max-width:1200px){   .downBar {  width:44vw;  }  }
            @media(max-width:700px){   .downBar {  width:90vw;  }  }
            .da { width:2em; margin-right:1em; vertical-align: middle;}


            
</style>



