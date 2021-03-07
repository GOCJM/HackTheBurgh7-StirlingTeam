let macDictionary = {
    "Copy": "CMD + C",
    "Paste": "CMD + V",
    "Cut and Copy": "CMD + X",
    "Undo": "CMD + Z",
    "Select All": "CMD + A",
    "Find": "CMD + F",
    "Find Next": "CMD + G",
    "Find Previous": "CMD + SHIFT + G",
    "Hide Window": "CMD + H",
    "Hide All But Focused App": "CMD + OPTION + H",
    "Minimise": "CMD + M",
    "Minimise All": "CMD + OPTION + M",
    "New Document": "CMD + N",
    "Open": "CMD + O",
    "Print": "CMD + P",
    "Save": "CMD + S",
    "Close Window": "CMD + W",
    "Close All Windows": "CMD + OPTION + W",
    "Quit": "CMD + Q",
    "Force Quit": "CMD + OPTION + Esc",
    "Switch Apps": "CMD + TAB",
    "Screenshot Utility": "CMD + SHIFT + 5",
    "Screenshot Entire Screen": "CMD + SHIFT + 3",
    "Screenshot Selected Area": "CMD + SHIFT + 4",
    "Screenshot Window": "CMD + SHIFT + 4 + SPACE"
};

let points = 0;

function addPoints() {
    points += 10;
    document.getElementById("points").innerHTML = "Points: " + points;
}

function checkCode(answer, expectedAnswer) {
    for (var key in macDictionary) {
        if (macDictionary[key] === answer) {
            if (answer === expectedAnswer) {
                alert("Success, a match has been found.\n" + macDictionary[key]);
                addPoints();
                break;
            }
        }
    }
}

let string = "";
function quiz() {
    var keys = Object.keys(macDictionary);
    // var answer = macDictionary[keys[keys.length * Math.random() << 0]];
    // var question = Object.keys(macDictionary).find(key => macDictionary[key] === answer);
    var answer = macDictionary["Copy"];
    var question = Object.keys(macDictionary).find(key => macDictionary[key] === answer);
    document.getElementById("question").innerHTML = "Question: What is the <b>"+question+"</b> shortcut on Mac?";
    return answer;
};

let eA = quiz();

function keyPress(e) {
    string = "";
    var evtobj = window.event ? event : e
    if (evtobj.metaKey || evtobj.ctrlKey) {
        switch (evtobj.which) {
            case 67: // copy, CMD+C
                evtobj.preventDefault();
                evtobj.stopPropagation();
                string = macDictionary["Copy"];
                break;
            case 86: // paste, CMD+V
                evtobj.preventDefault();
                evtobj.stopPropagation();
                string = macDictionary["Paste"];
                break;
            case 88: // cut and copy, CMD+X
                evtobj.preventDefault();
                evtobj.stopPropagation();
                string = macDictionary["Cut and Copy"];
                break;
            case 90: // undo, CMD+Z
                evtobj.preventDefault();
                evtobj.stopPropagation();
                string = macDictionary["Undo"];
                break;
            case 70: // find, CMD+F
                evtobj.preventDefault();
                evtobj.stopPropagation();
                string = macDictionary["Find"];
                break;
            case 65: // find next, CMD+A
                evtobj.preventDefault();
                evtobj.stopPropagation();
                string = macDictionary["Select All"];
                break;
            case 90: // find previous, CMD+SHIFT+G
                if (evtobj.keyCode == 16) { // find previous, CMD+SHIFT+G
                    evtobj.preventDefault();
                    evtobj.stopPropagation();
                    string = macDictionary["Find Previous"];
                } else { // find next, CMD + G
                    evtobj.preventDefault();
                    evtobj.stopPropagation();
                    string = macDictionary["Find Next"];
                }
                break;
            case 72: // hide all but focused app, CMD+Option+H
                if (evtobj.keyCode == 18) { // hide all but focused app, CMD+SHIFT+H
                    evtobj.preventDefault();
                    evtobj.stopPropagation();
                    string = macDictionary["Hide All But Focused App"];
                } else {// hide window, CMD+H
                    evtobj.preventDefault();
                    evtobj.stopPropagation();
                    string = macDictionary["Hide Window"];
                }
                break;
            case 77: // minimise all, CMD+Option+M
                if (evtobj.keyCode == 18) { // minimise all, CMD+OPTION+M
                    evtobj.preventDefault();
                    evtobj.stopPropagation();
                    string = macDictionary["Minimise All"];
                } else {// minimise, CMD+M
                    evtobj.preventDefault();
                    evtobj.stopPropagation();
                    string = macDictionary["Minimise"];
                }
                break;
            case 78: // new document, CMD+N
                evtobj.preventDefault();
                evtobj.stopPropagation();
                string = macDictionary["New Document"];
                break;
            case 79: // open, CMD+O
                evtobj.preventDefault();
                evtobj.stopPropagation();
                string = macDictionary["Open"];
                break;
            case 80: // print, CMD+P
                evtobj.preventDefault();
                evtobj.stopPropagation();
                string = macDictionary["Print"];
                break;
            case 83: // save, CMD+S
                evtobj.preventDefault();
                evtobj.stopPropagation();
                string = macDictionary["Save"];
                break;
            case 87: // close all windows, CMD+Option+W
                if (evtobj.keyCode == 18) { // close all windows, CMD+Option+W
                    evtobj.preventDefault();
                    evtobj.stopPropagation();
                    string = macDictionary["Close All Windows"];
                } else {// close window, CMD+W
                    evtobj.preventDefault();
                    evtobj.stopPropagation();
                    string = macDictionary["Close Window"];
                }
                break;
            case 81: // quit, CMD+Q
                evtobj.preventDefault();
                evtobj.stopPropagation();
                string = macDictionary["Quit"];
                break;
            case 27: // force quit, CMD+OPTION+Esc
                if (evtobj.keyCode == 18) { // force quit, CMD+OPTION+Esc
                    evtobj.preventDefault();
                    evtobj.stopPropagation();
                    string = macDictionary["Force Quit"];
                }
                break;
            case 9: // switch apps, CMD+TAB
                evtobj.preventDefault();
                evtobj.stopPropagation();
                string = macDictionary["Switch Apps"];
                break;
            case 16: // Screenshot Utility, CMD+Shift+5
                if (evtobj.keyCode == 53) { // Screenshot Utility, CMD+Shift+5
                    evtobj.preventDefault();
                    evtobj.stopPropagation();
                    string = macDictionary["Screenshot Utility"];
                } else if (evtobj.keyCode == 51){
                    evtobj.preventDefault();
                    evtobj.stopPropagation();
                    string = macDictionary["Screenshot Entire Screen"];
                } else if (evtobj.keyCode == 52) {
                    evtobj.preventDefault();
                    evtobj.stopPropagation();
                    string = macDictionary["Screenshot Selected Area"];
                    if (evtobj.keyCode == 32) {
                        evtobj.preventDefault();
                        evtobj.stopPropagation();
                        string = macDictionary["Screenshot Window"];
                    }
                }
                break;
        }
    }
    checkCode(string, eA);
}

document.onkeydown = keyPress;

// function KeyPress(e) {
//     string = "";
//     var evtobj = window.event ? event : e
//     if (evtobj.metaKey || evtobj.ctrlKey) {
//         switch (evtobj.which) {
//             case 67: // copy, CMD+C
//                 evtobj.preventDefault();
//                 evtobj.stopPropagation();
//                 string = macDictionary["Copy"];
//                 break;
//             case 89: // redo, CMD+Y
//                 evtobj.preventDefault();
//                 evtobj.stopPropagation();
//                 // Do your Redo stuff
//                 break;
//             case 90:
//                 if (evtobj.shiftKey) { // redo, CMD+SHIFT+Z
//                     evtobj.preventDefault();
//                     evtobj.stopPropagation();
//                     // Do your Redo stuff
//                 } else { // undo, CMD+Z
//                     evtobj.preventDefault();
//                     evtobj.stopPropagation();
//                     // Do your Undo stuff
//                     string = macDictionary["Undo"];
//                 }
//                 break;
//         }
//     }
//     checkCode(string, eA);
// }




/*
let macDictionary = {
  "Copy" : "CMD + C",
  "Paste": "CMD + V",
  "Cut and Copy": "CMD + X",
  "Undo": "CMD + Z",
  "Select All": "CMD + A",
  "Find": "CMD + F",
  "Find Next": "CMD + G",
  "Find Previous": "CMD + SHIFT + G",
  "Hide Window": "CMD + H",
  "Hide All But Focused App": "CMD + OPTION + H",
  "Minimise": "CMD + M",
  "Minimise All": "CMD + OPTION + M",
  "New Document": "CMD + N",
  "Open": "CMD + O",
  "Print": "CMD + P",
  "Save": "CMD + S",
  "Close Window": "CMD + W",
  "Close All Windows": "CMD + OPTION + W",
  "Quit": "CMD + Q",
  "Force Quit": "CMD + OPTION + Esc",
  "Switch Apps": "CMD + TAB",
  "Screenshot Utility": "CMD + SHIFT + 5",
  "Screenshot Entire Screen":  "CMD + SHIFT + 3",
  "Screenshot Selected Area":  "CMD + SHIFT + 4",
  "Screenshot Window":  "CMD + SHIFT + 4 + SPACE"
}

function keyPress(e) {
      var evtobj = window.event? event : e
      if (evtobj.metaKey || evtobj.ctrlKey) {
    switch (evtobj.which) {
        case 67: // copy, CMD+C
            evtobj.preventDefault();
            evtobj.stopPropagation();
            break;
        case 86: // paste, CMD+C
            evtobj.preventDefault();
            evtobj.stopPropagation();
            break;
        case 88: // cut and copy, CMD+C
            evtobj.preventDefault();
            evtobj.stopPropagation();
            break;
        case 88: // cut and copy, CMD+X
            evtobj.preventDefault();
            evtobj.stopPropagation();
            break;
        case 89: // select all, CMD+A
            evtobj.preventDefault();
            evtobj.stopPropagation();
            break;
        case 90: // undo, CMD+Z
            if (evtobj.shiftKey) { // redo, CMD+SHIFT+Z
                evtobj.preventDefault();
                evtobj.stopPropagation();
            } else { // undo, CMD+Z
                evtobj.preventDefault();
                evtobj.stopPropagation();
                alert("This worked!");
            }
            break;
        case 70: // find, CMD+F
            evtobj.preventDefault();
            evtobj.stopPropagation();
            break;
        case 71: // find next, CMD+A
            evtobj.preventDefault();
            evtobj.stopPropagation();
            break;
        case 90: // find previous, CMD+SHIFT+G
            if (evtobj.keyCode == 18) { // find previous, CMD+SHIFT+G
                evtobj.preventDefault();
                evtobj.stopPropagation();
            } else {
                evtobj.preventDefault();
                evtobj.stopPropagation();
                alert("This worked!");
            }
            break;
        case 72: // hide window, CMD+H
            evtobj.preventDefault();
            evtobj.stopPropagation();
            break;
        case 72: // hide all but focused app, CMD+Option+H
            if (evtobj.keyCode == 18) { // hide all but focused app, CMD+SHIFT+H
                evtobj.preventDefault();
                evtobj.stopPropagation();
            } else {
                evtobj.preventDefault();
                evtobj.stopPropagation();
                alert("This worked!");
            }
            break;
        case 77: // minimise, CMD+M
            evtobj.preventDefault();
            evtobj.stopPropagation();
            break;
        case 77: // minimise all, CMD+Option+M
            if (evtobj.keyCode == 18) { // hide all but focused app, CMD+SHIFT+H
                evtobj.preventDefault();
                evtobj.stopPropagation();
            } else {
                evtobj.preventDefault();
                evtobj.stopPropagation();
                alert("This worked!");
            }
        case 78: // new document, CMD+N
            evtobj.preventDefault();
            evtobj.stopPropagation();
            break;
        case 79: // open, CMD+O
            evtobj.preventDefault();
            evtobj.stopPropagation();
            break;
        case 80: // print, CMD+P
            evtobj.preventDefault();
            evtobj.stopPropagation();
            break;
        case 83: // save, CMD+S
            evtobj.preventDefault();
            evtobj.stopPropagation();
            break;
        case 87: // close window, CMD+W
            evtobj.preventDefault();
            evtobj.stopPropagation();
            break;
        case 87: // close all windows, CMD+Option+W
            if (evtobj.keyCode == 18) { // close all windows, CMD+Option+W
                evtobj.preventDefault();
                evtobj.stopPropagation();
            } else {
                evtobj.preventDefault();
                evtobj.stopPropagation();
                alert("This worked!");
            }
        case 81: // quit, CMD+Q
            evtobj.preventDefault();
            evtobj.stopPropagation();
            break;
        case 87: // close window, CMD+W
            evtobj.preventDefault();
            evtobj.stopPropagation();
            break;
        case 27: // force quit, CMD+OPTION+Esc
            if (evtobj.keyCode == 18) { // force quit, CMD+OPTION+Esc
                evtobj.preventDefault();
                evtobj.stopPropagation();
            } else {
                evtobj.preventDefault();
                evtobj.stopPropagation();
                alert("This worked!");
            }
        case 9: // switch apps, CMD+TAB
            evtobj.preventDefault();
            evtobj.stopPropagation();
            break;
        case 53: // Screenshot Utility, CMD+Shift+5
            if (evtobj.shiftKey) { // Screenshot Utility, CMD+Shift+5
                evtobj.preventDefault();
                evtobj.stopPropagation();
            } else {
                evtobj.preventDefault();
                evtobj.stopPropagation();
                alert("This worked!");
            }
        case 51: // Screenshot entire screen, CMD+Shift+3
            if (evtobj.shiftKey) { // Screenshot entire screen, CMD+Shift+3
                evtobj.preventDefault();
                evtobj.stopPropagation();
            } else {
                evtobj.preventDefault();
                evtobj.stopPropagation();
                alert("This worked!");
            }
        case 52: // Screenshot Selected Area, CMD+Shift+4
            if (evtobj.shiftKey) { // Screenshot Selected Area, CMD+Shift+4
                evtobj.preventDefault();
                evtobj.stopPropagation();
            } else {
                evtobj.preventDefault();
                evtobj.stopPropagation();
                alert("This worked!");
            }
        case 52: // Screenshot Window, CMD+Shift+4+Space
            if (evtobj.shiftKey && evtobj.keyCode == 32) { // Screenshot Window, CMD+Shift+4+Space
                evtobj.preventDefault();
                evtobj.stopPropagation();
            } else {
                evtobj.preventDefault();
                evtobj.stopPropagation();
                alert("This worked!");
            }
      }
   }
}

document.onkeydown = keyPress;
*/
