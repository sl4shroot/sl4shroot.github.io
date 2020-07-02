var aText = new Array(
    " HBD NURUL! ",
    "Hi, how r u ? i hope ur fine ^^. thanks for open this s*hit"
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
            setTimeout("typewriter()", 500);
        }
    } else {
        setTimeout("typewriter()", iSpeed);
    }
}

typewriter();