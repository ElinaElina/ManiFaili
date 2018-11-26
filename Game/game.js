var v1, v2, v3, v4, v5, v6, v7, v8, v9, v0, vl;
var l1 = 0;
var l2 = 0;
var l3 = 0;
var l4 = 0;
var l5 = 0;
var l6 = 0;
var l7 = 0;
var l8 = 0;
var l9 = 0;
var l0 = 0;
var ic = -2;

var r = 0;
var ram = 0;
var trie = 0;
var hit = 0;
var vari = "d";
img = new Object();
img.i0 = new Image();
img.i0.src = "hang0.gif";
img.i1 = new Image();
img.i1.src = "hang1.gif";
img.i2 = new Image();
img.i2.src = "hang2.gif";
img.i3 = new Image();
img.i3.src = "hang3.gif";
img.i4 = new Image();
img.i4.src = "hang4.gif";
img.i5 = new Image();
img.i5.src = "hang5.gif";
img.i6 = new Image();
img.i6.src = "hang6.gif";
img.i7 = new Image();
img.i7.src = "hang7.gif";
img.i8 = new Image();
img.i8.src = "hang8.gif";

function display() {
  r = v1;
  if (l2 == 1) {
    r = r + " " + v2;
  } else {
    r = r + " +";
  }
  if (l3 == 1) {
    r = r + " " + v3;
  } else {
    r = r + " +";
  }
  if (l4 == 1) {
    r = r + " " + v4;
  } else {
    r = r + " +";
  }
  if (l5 == 1) {
    r = r + " " + v5;
  } else {
    r = r + " +";
  }
  if (l6 == 1) {
    r = r + " " + v6;
  } else {
    r = r + " +";
  }
  if (l7 == 1) {
    r = r + " " + v7;
  } else {
    r = r + " +";
  }
  if (l8 == 1) {
    r = r + " " + v8;
  } else {
    r = r + " +";
  }
  if (vl >= 9) {
    if (l9 == 1) {
      r = r + " " + v9;
    } else {
      r = r + " +";
    }
    if (vl == 10) r = r + " " + v0;
  }
  document.forms[0].main.value = r;
}
function cl(vari) {
  if (ram == 0 || trie == 8) {
    alert("Spele ir beigusies.");
  } else {
    hit = 0;
    if (v1 == vari && l1 == 0) {
      l1 = 1;
      display();
      hit = hit + 1;
    }
    if (v2 == vari && l2 == 0) {
      l2 = 1;
      display();
      hit = hit + 1;
    }
    if (v3 == vari && l3 == 0) {
      l3 = 1;
      display();
      hit = hit + 1;
    }
    if (v4 == vari && l4 == 0) {
      l4 = 1;
      display();
      hit = hit + 1;
    }
    if (v5 == vari && l5 == 0) {
      l5 = 1;
      display();
      hit = hit + 1;
    }
    if (v6 == vari && l6 == 0) {
      l6 = 1;
      display();
      hit = hit + 1;
    }
    if (v7 == vari && l7 == 0) {
      l7 = 1;
      display();
      hit = hit + 1;
    }
    if (v8 == vari && l8 == 0) {
      l8 = 1;
      display();
      hit = hit + 1;
    }
    if (vl >= 9) {
      if (v9 == vari && l9 == 0) {
        l9 = 1;
        display();
        hit = hit + 1;
      }
    }
    if (vl == 10) {
      if (v0 == vari && l0 == 0) {
        l0 = 1;
        display();
        hit = hit + 1;
      }
    }
    if (hit == 0) {
      trie++;
      document.images[3 + ic].src = eval("img.i" + trie + ".src");
      if (trie == 8) alert("Atvaino, bet vards nav atminets.");
    } else if (ram == hit) {
      alert("Apsveicam! Vards ir atminets.");
    } else ram -= hit;
  }
}
function choose() {
  r = Math.floor(Math.random() * 20);
  if (r == 0) {
    v1 = "A";
    v2 = "R";
    v3 = "M";
    v4 = "A";
    v5 = "G";
    v6 = "E";
    v7 = "D";
    v8 = "O";
    v9 = "N";
    v0 = "S";
    vl = 10;
    ram = vl;
    cl("O");
  }
  if (r == 1) {
    v1 = "A";
    v2 = "T";
    v3 = "Z";
    v4 = "I";
    v5 = "S";
    v6 = "A";
    v7 = "N";
    v8 = "A";
    vl = 8;
    ram = vl;
    cl("A");
  }
  if (r == 2) {
    v1 = "D";
    v2 = "A";
    v3 = "T";
    v4 = "O";
    v5 = "R";
    v6 = "I";
    v7 = "K";
    v8 = "I";
    vl = 8;
    ram = vl;
    cl("K");
  }
  if (r == 3) {
    v1 = "D";
    v2 = "E";
    v3 = "F";
    v4 = "I";
    v5 = "N";
    v6 = "I";
    v7 = "C";
    v8 = "I";
    v9 = "J";
    v0 = "A";
    vl = 10;
    ram = vl;
    cl("A");
  }
  if (r == 4) {
    v1 = "D";
    v2 = "R";
    v3 = "A";
    v4 = "U";
    v5 = "D";
    v6 = "Z";
    v7 = "I";
    v8 = "B";
    v9 = "A";
    vl = 9;
    ram = vl;
    cl("A");
  }
  if (r == 5) {
    v1 = "G";
    v2 = "R";
    v3 = "E";
    v4 = "D";
    v5 = "Z";
    v6 = "E";
    v7 = "N";
    v8 = "S";
    vl = 8;
    ram = vl;
    cl("S");
  }
  if (r == 6) {
    v1 = "I";
    v2 = "N";
    v3 = "F";
    v4 = "L";
    v5 = "A";
    v6 = "C";
    v7 = "I";
    v8 = "J";
    v9 = "A";
    vl = 9;
    ram = vl;
    cl("A");
  }
  if (r == 7) {
    v1 = "J";
    v2 = "A";
    v3 = "U";
    v4 = "T";
    v5 = "A";
    v6 = "J";
    v7 = "U";
    v8 = "M";
    v9 = "S";
    vl = 9;
    ram = vl;
    cl("S");
  }
  if (r == 8) {
    v1 = "K";
    v2 = "O";
    v3 = "N";
    v4 = "V";
    v5 = "E";
    v6 = "R";
    v7 = "S";
    v8 = "I";
    v9 = "J";
    v0 = "A";
    vl = 10;
    ram = vl;
    cl("A");
  }
  if (r == 9) {
    v1 = "M";
    v2 = "I";
    v3 = "L";
    v4 = "E";
    v5 = "S";
    v6 = "T";
    v7 = "I";
    v8 = "B";
    v9 = "A";
    vl = 9;
    ram = vl;
    cl("A");
  }
  if (r == 10) {
    v1 = "N";
    v2 = "O";
    v3 = "S";
    v4 = "A";
    v5 = "U";
    v6 = "K";
    v7 = "U";
    v8 = "M";
    v9 = "S";
    vl = 9;
    ram = vl;
    cl("N");
  }
  if (r == 11) {
    v1 = "N";
    v2 = "O";
    v3 = "Z";
    v4 = "I";
    v5 = "E";
    v6 = "G";
    v7 = "U";
    v8 = "M";
    v9 = "S";
    vl = 9;
    ram = vl;
    cl("S");
  }
  if (r == 12) {
    v1 = "P";
    v2 = "A";
    v3 = "S";
    v4 = "T";
    v5 = "A";
    v6 = "I";
    v7 = "G";
    v8 = "A";
    vl = 8;
    ram = vl;
    cl("A");
  }
  if (r == 13) {
    v1 = "P";
    v2 = "R";
    v3 = "I";
    v4 = "V";
    v5 = "A";
    v6 = "T";
    v7 = "U";
    v8 = "M";
    v9 = "S";
    vl = 9;
    ram = vl;
    cl("S");
  }
  if (r == 14) {
    v1 = "P";
    v2 = "R";
    v3 = "O";
    v4 = "C";
    v5 = "E";
    v6 = "N";
    v7 = "T";
    v8 = "I";
    vl = 8;
    ram = vl;
    cl("I");
  }
  if (r == 15) {
    v1 = "R";
    v2 = "I";
    v3 = "S";
    v4 = "I";
    v5 = "N";
    v6 = "A";
    v7 = "J";
    v8 = "U";
    v9 = "M";
    v0 = "I";
    vl = 10;
    ram = vl;
    cl("I");
  }
  if (r == 16) {
    v1 = "S";
    v2 = "A";
    v3 = "I";
    v4 = "S";
    v5 = "T";
    v6 = "I";
    v7 = "B";
    v8 = "A";
    vl = 8;
    ram = vl;
    cl("A");
  }
  if (r == 17) {
    v1 = "S";
    v2 = "A";
    v3 = "L";
    v4 = "D";
    v5 = "E";
    v6 = "J";
    v7 = "U";
    v8 = "M";
    v9 = "S";
    vl = 9;
    ram = vl;
    cl("S");
  }
  if (r == 18) {
    v1 = "R";
    v2 = "U";
    v3 = "D";
    v4 = "Z";
    v5 = "U";
    v6 = "P";
    v7 = "U";
    v8 = "K";
    v9 = "E";
    vl = 9;
    ram = vl;
    cl("Z");
  }
  if (r == 19) {
    v1 = "V";
    v2 = "E";
    v3 = "R";
    v4 = "D";
    v5 = "Z";
    v6 = "I";
    v7 = "B";
    v8 = "A";
    vl = 8;
    ram = vl;
    cl("A");
  }
  cl(v1);
  trie = 0;
  document.images[3 + ic].src = eval("img.i0.src");
}
choose();
display();
