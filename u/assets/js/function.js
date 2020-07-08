var aText = new Array(
    " HBD NURUL! ",
    "Hi, how r u ? i hope ur fine ^^, thanks for open this s*hit. aciee udah 18+ ga kerasa ye bsk dah hari selasa hehe.",
    "ok langsung sj gausah basa basi, udah gede yh bing heheheheheh.",
    "bentar lagi udah mau jadi maba. amiinnnn y rab, G BOLEH betah nge gap!!! >:(",
    "jgn sering2 berantem sama ortu y km!!.",
    "makin gede, makin byk masalah yg bakal dihadapi. keep strong bro[emot tos].",
    "belajar dari apa yg u lalui, don't make a same mistake.",
    "jgn bikin diri u cape, leave the past learn to forgive.",
    "idk what happened. but, i pray the best for u.",
    "semoga bertanggungjwp yy sama pilihan PTN nyaa ^^",
    "u can make the future with yourself.",
    "'FIND YOURSELF!'",
    "o iaa, i give you something not without reasons, u know that the reasons.",
    "btw sry yh lope2 nya :(, nyari kang balon susah bett.",
    "tambahan mumpung masih fresh he he, n=13",
    "V CZCD GVRQVO *peacee hehe",
    "dah lah mls",
    "see you <3 ~.",
    "-dika",


);

var iSpeed = 500; //time delay of print out
var iIndex = 0; //start printing array
var iArrLength = aText[0].length; //the length of the text array
var iScrollAt = 20; //start scrolling up at this
var iTextPos = 0;
var sContents = '';
var iRow;

function typewriter() {
    sContents = ' ';
    iRow = Math.max(0, iIndex - iScrollAt);
    var destination = document.getElementById("typedtext");
    while (iRow < iIndex) {
        sContents += aText[iRow++] + '<br />';
    }
    destination.innerHTML = sContents + aText[iIndex].substring(0, iTextPos) + "_";
    if (iTextPos++ == iArrLength) {
        iTextPos = 0;
        iIndex++;
        if (iIndex != aText.length) {
            iArrLength = aText[iIndex].length;
            setTimeout("typewriter()", 1000);
        }
    } else {
        setTimeout("typewriter()", iSpeed);
    }
}

typewriter();