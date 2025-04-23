<script src="https://cdn.jsdelivr.net/npm/motion@11.11.16/dist/motion.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script type="text/javascript">

    const { animate, scroll, inView } = Motion

    const items = document.querySelectorAll(".img-container");

    

// -----


const scrollSensitivity = 1; // lower = less sensitive
const totalDistance = (items.length - 1) * 100 * scrollSensitivity;

scroll(
  animate(".img-group", {
    transform: ["none", `translateX(-${totalDistance}vw)`],
  }),
  { 
    target: document.querySelector(".img-group-container")
  }
);




    scroll(animate(".progress", { scaleX: [0, 1] }), {
        target: document.querySelector(".img-group-container"),
    });

  


  AOSinit();
 
  function AOSinit(){

        AOS.init({
      // Global settings:
      disable: 0, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
      startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
      initClassName: 'aos-init', // class applied after initialization
      animatedClassName: 'aos-animate', // class applied on animation
      useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
      disableMutationObserver: false, // disables automatic mutations' detections (advanced)
      debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
      throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)
      
      // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
      offset: 120, // offset (in px) from the original trigger point
      delay: 400, // values from 0 to 3000, with step 50ms
      duration: 1700, // values from 0 to 3000, with step 50ms
      easing: 'ease', // default easing for AOS animations
      once: false, // whether animation should happen only once - while scrolling down
      mirror: false, // whether elements should animate out while scrolling past them
      anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

    });

  }




function findPosition(obj) {
            let currenttop = 0;
            if (obj.offsetParent) {
                do {
                    currenttop += obj.offsetTop;
                } while ((obj = obj.offsetParent));
                return [currenttop];
            }
        }

        px();

$(window).resize(function(){
  px();
});

function px() {
  var ww = window.innerWidth;
  var hh = window.innerHeight;
  var myratio = ww/hh;
  myratio  = parseFloat(myratio).toFixed(2);
  $('#px').html(ww + " x " + hh +" ("+myratio+")");
}

$(function() {
    $(document).scroll(function(){
           const element = document.getElementById('progress'); 
            const computedStyle = window.getComputedStyle(element);
               const transformMatrix = computedStyle.transform;

                  const matrixRegex = /matrix\(([^,\)]+)/; // For 2D transforms
   const matrix3dRegex = /matrix3d\(([^,\)]+)/; // For 3D transforms
   let match;

   ww = $( window ).width();
   hh = $( window ).height();

   if (transformMatrix.startsWith("matrix")) {
       match = transformMatrix.match(matrixRegex);
       if (match && match[1]) {
           const scaleX = parseFloat(match[1]);
           //console.log("scaleX:", scaleX);
           $('#px2').html(scaleX);

           if (ww/hh > 1.2){
            animateTt(scaleX); 
           }
           
           //td1 fpd1
       }
   } else if (transformMatrix.startsWith("matrix3d")) {
       match = transformMatrix.match(matrix3dRegex);
       if (match && match[1]) {
           const scaleX = parseFloat(match[1]);
           //console.log("scaleX:", scaleX);
           $('#px2').html(scaleX);

           if (ww/hh > 1.2){
            animateTt(scaleX); 
           }
       }
   } else {
       //console.log("No transform applied or invalid transform format.");
   }


        
    });


    function animateTt(scaleX){

        sx = scaleX*400;


        // --------   one 1

        start1 = 50;

        x1 = sx - start1;

        opc1 = x1/60;
        xs1 = x1*30;
        xleft1 = 1000 - xs1;
        xleft1 = 0-xleft1;

        if (xleft1 > 0){ xleft1 = 0;}
        if (opc1 < 0) { opc1 = 0;} if (opc1 > 0.5) { opc1 = 0.5;}

        opc1a = x1/30;
        xx1a = x1*20;
        xleft1a = 500 - xx1a;
        xleft1a = 0-xleft1a;

        if (xleft1 > 0){ xleft1 = 0;}
        if (opc1 < 0) { opc1 = 0;} if (opc1 > 0.5) { opc1 = 0.5;}
        if (xleft1a > 0){ xleft1a = 0;}
        if (opc1a < 0) { opc1a = 0;} if (opc1a > 1) { opc1a = 1;}


/*
                htm =  " sx = " + sx + "<br>";
                htm += " x1 = " + x1 + "<br>";
                htm += " opc1 = " + opc1 + "<br>";
                htm += " opc1a = " + opc1a + "<br>";
                htm += " xleft1a = " + xleft1a + "<br>";
*/

        $('.td1').css('opacity',opc1);
        $('.td1').css('left',xleft1);

        $('.fpd1').css('opacity',opc1a);
        $('.fpd1').css('left',xleft1a);

        
        
        //$("#e01_top").css('transform', 'rotate(-30deg)');
        //$("#e01_top").css('border','2px solid olive');

        //$("#e01_top").css('transform:rotate(90deg)');

        

        rot1a = opc1a / 10;
        rot1a = 0.1-rot1a;

                            htm += " rot1a = " + rot1a + "<br>";

        sc1base = rot1a*20;
        sc1a = 1 - sc1base;
                            htm += " sc1a = " + sc1a + "<br>";

        //elie.css({ 'transform': 'rotate(' + opc1a + 'turn)'});
        var top1a = $("#e01_top");
        top1a.css({ 'transform': 'rotate(' + rot1a + 'turn)'});

        var shadow1a = $("#e01_shadow");
        shadow1a.css('scale', sc1a );
        


        // --------   two 2


        start2 = 100;

        x2 = sx - start2;

        opc2 = x2/60;
        xs2 = x2*30;
        xleft2 = 1000 - xs2;
        xleft2 = 0-xleft2;

        if (xleft2 > 0){ xleft2 = 0;}
        if (opc2 < 0) { opc2 = 0;} if (opc2 > 0.5) { opc2 = 0.5;}

        opc2a = x2/30;
        xx2a = x2*20;
        xleft2a = 500 - xx2a;
        xleft2a = 0-xleft2a;

        if (xleft2 > 0){ xleft2 = 0;}
        if (opc2 < 0) { opc2 = 0;} if (opc2 > 0.5) { opc2 = 0.5;}
        if (xleft2a > 0){ xleft2a = 0;}
        if (opc2a < 0) { opc2a = 0;} if (opc2a > 1) { opc2a = 1;}

/*

                htm +=  "<br> sx = " + sx + "<br>";
                htm += " x2 = " + x2 + "<br>";
                htm += " opc2 = " + opc2 + "<br>";
                htm += " xleft2a = " + xleft2a + "<br>";
*/

        $('.td2').css('opacity',opc2);
        $('.td2').css('left',xleft2);

        $('.fpd2').css('opacity',opc2a);
        $('.fpd2').css('left',xleft2a);


/* -------- */

        rot2a = opc2a *1;        

                            htm += " rot2a = " + rot2a + "<br>";

        var main1a = $("#e01_main");
        main1a.css('scale', rot2a );


        // --------   three 3


        start3 = 200;

        x3 = sx - start3;

        opc3 = x3/60;
        xs3 = x3*30;
        xleft3 = 1000 - xs3;
        xleft3 = 0-xleft3;

        if (xleft3 > 0){ xleft3 = 0;}
        if (opc3 < 0) { opc3 = 0;} if (opc3 > 0.5) { opc3 = 0.5;}

        opc3a = x3/30;
        xx3a = x3*20;
        xleft3a = 500 - xx3a;
        xleft3a = 0-xleft3a;

        if (xleft3 > 0){ xleft3 = 0;}
        opc33 = opc3;
        if (opc3 < 0) { opc3 = 0;} if (opc3 > 0.5) { opc3 = 0.5;}
        if (xleft3a > 0){ xleft3a = 0;}
        if (opc3a < 0) { opc3a = 0;} if (opc3a > 1) { opc3a = 1;}



                var htm =  "<br> sx = " + sx + "<br>";
                htm += " x3 = " + x3 + "<br>";
                htm += " opc3 = " + opc3 + "<br>";
                

        $('.td3').css('opacity',opc3);
        $('.td3').css('left',xleft3);

        $('.fpd3').css('opacity',opc3a);
        $('.fpd3').css('left',xleft3a);



        int10=0; int1=0; int2=0;
        if (opc33 >= 0.05 && opc33<2){
            int1 = opc33/2;
            int2 = int1 / 1.2;
            int10 = parseInt(int2*100);
        }

            htm += " INNOVA int1 = " + int1 + "<br>";
            htm += " INNOVA int2 = " + int2 + "<br>";
            htm += " INNOVA int10 = " + int10 + "<br>";

        int10 = int10 -7;
        $('.innova').css('display','none');

        if (int10<0){
            $('#innova1').css('display','block');
        }
        if (int10>4){
            $('#innova4').css('display','block');
        }
        if (int10>0 && int10<5){
            $('#innova'+int10).css('display','block');    
        } 


// --------   four 4

        // 270
        start4 = 300;

        x4 = sx - start4;

        opc4 = x4/60;
        xs4 = x4*30;
        xleft4 = 1000 - xs4;
        xleft4 = 0-xleft4;

        if (xleft4 > 0){ xleft4 = 0;}
        if (opc4 < 0) { opc4 = 0;} if (opc4 > 0.5) { opc4 = 0.5;}

        opc4a = x4/30;
        xx4a = x4*20;
        xleft4a = 500 - xx4a;
        xleft4a = 0-xleft4a;

        if (xleft4 > 0){ xleft4 = 0;}
        if (opc4 < 0) { opc4 = 0;} if (opc4 > 0.5) { opc4 = 0.5;}
        if (xleft4a > 0){ xleft4a = 0;}
        if (opc4a < 0) { opc4a = 0;} if (opc4a > 1) { opc4a = 1;}


        int10=0; int1=0; int2=0;
        if (opc4 >= 0.05 && opc4<1.5){
            int1 = opc4/2;
            int2 = int1 / 1.2;
            int10 = parseInt(int2*100);
        }
/* 
                htm +=  "<br> sx = " + sx + "<br>";
                htm += " x4 = " + x4 + "<br>";
                htm += " opc4 = " + opc4 + "<br>";
                htm += " xleft3a = " + xleft4a + "<br>";
                htm += " int10 = " + int10 + "<br>";
                htm += " int2 = " + int2 + "<br>";
*/

        $('.td4').css('opacity',opc4);
        $('.td4').css('left',xleft4);

        $('.fpd4').css('opacity',opc4a);
        $('.fpd4').css('left',xleft4a);

        $('.globe').css('display','none');
        if (int10>0 && int10<15){
            $('#globe'+int10).css('display','block');    
        } else {
            $('#globe15').css('display','block');
        }
        

        // --------   


// --------   four 5


        start5 = 330;

        x5 = sx - start5;

        opc5 = x5/60;
        xs5 = x5*30;
        xleft5 = 1000 - xs5;
        xleft5 = 0-xleft5;

        if (xleft5 > 0){ xleft5 = 0;}
        if (opc5 < 0) { opc5 = 0;} if (opc5 > 0.5) { opc5 = 0.5;}

        opc5a = x5/30;
        xx5a = x5*20;
        xleft5a = 500 - xx5a;
        xleft5a = 0-xleft5a;

        if (xleft5 > 0){ xleft5 = 0;}
        if (opc5 < 0) { opc5 = 0;} if (opc5 > 0.5) { opc5 = 0.5;}
        if (xleft5a > 0){ xleft5a = 0;}
        if (opc5a < 0) { opc5a = 0;} if (opc5a > 1) { opc5a = 1;}


        int10=0; int1=0; int2=0;
        if (opc5 >= 0.05 && opc5<1.5){
            int1 = opc5/2;
            int2 = int1 / 1.2;
            int10 = parseInt(int2*100);
        }

                htm +=  "<br> sx = " + sx + "<br>";
                htm += " x5 = " + x5 + "<br>";
                htm += " opc5 = " + opc5 + "<br>";
                htm += " xleft5a = " + xleft5a + "<br>";
                htm += " int10 = " + int10 + "<br>";
                htm += " int2 = " + int2 + "<br>";


        $('.td5').css('opacity',opc5);
        $('.td5').css('left',xleft5);

        $('.fpd5').css('opacity',opc5a);
        $('.fpd5').css('left',xleft5a);

        xleft5a1 = xleft5a/1.5;
        xleft5a1 = 'calc('+xleft5a1+'px + 10vw)';

        xleft5a2 = xleft5a/1.2;
        xleft5a2 = 'calc('+xleft5a2+'px + 4vw)';


        rot5a = 399.11 - sx;
        rot5a = rot5a/570;

        $('.fresa1').css('left',xleft5a1);
        $('.fresa2').css('left',xleft5a2);

        $('.fresa2').css({ 'transform': 'rotate(-' + rot5a + 'turn)'});
        
        $('#info').html(htm);
        //$('.fpd1').css();
    }

    

});


    $('.menuitem').mouseup(function(){
        var Colors = ['#666666','#007582','#c20430','#f98e2b','#6bc04b'];
        var n = $(this).attr('n');
        $('.menuitem').css('color','black');
        $('.rBig').css('display','none');
        $('.miarrow').css('display','none');
        nm = parseInt(n);
        
        $('.mi'+n).css('color',Colors[nm]);
        $('.r'+n).css('display','flex');
        $('.r'+n).fadeIn();
        $('.a'+n).fadeIn();
    });


    cntint = 1;
    cntint2 = 2;
    cntint3 = 3;
    cntint4 = 4;
    
    setInterval(function() {

        if (cntint > 4) { cntint=1;}
        if (cntint2 > 4) { cntint2=1;}
        if (cntint3 > 4) { cntint3=1;}
        if (cntint4 > 4) { cntint4=1;}

        cnt10 = cntint; 
        cnt9 = cntint2;
        cnt8 = cntint3;  
        cnt7 = cntint4;
            

        $('.main10').attr('src','im/texture-'+cnt10+'.jpg');
        $('.main9').attr('src','im/texture-'+cnt9+'.jpg');
        $('.main8').attr('src','im/texture-'+cnt8+'.jpg');
        $('.main7').attr('src','im/texture-'+cnt7+'.jpg');

        cntint4++; cntint3++; cntint2++;  cntint++;
    }, 2000);  

/*
document.ontouchmove = function(event){ event.preventDefault(); console.log("ontouchmove");}            
            window.onscroll = function(e){ e.preventDefault(); console.log("onscroll");}
            */




</script>






