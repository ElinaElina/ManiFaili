var vards = [];
var teksts = [];
var word;
var guess = "";
var trie = 0;

function fillWord(param) {
  var n = param.length;
  for (var i = 0; i < n; i++) {
    vards[i] = param.substring(i, i + 1);
    teksts[i] = 0;
  }
}

function display() {
  var result = "";
  var i = 0;
  while (i < vards.length - 1) {
    if (teksts[i] == 0) {
      result = result + "_ ";
    } else {
      result = result + vards[i] + " ";
    }
    i++;
  }

  if (teksts[vards.length - 1] == 0) {
    result = result + "_";
  } else {
    result = result + vards[vards.length - 1];
  }
  document.forms[0].main.value = result;
}

function cl(guess) {
  var x = 0;
  var correct = false;

  while (x < vards.length) {
    if (guess == vards[x]) {
      teksts[x] = 1;
      correct = true;
    }
    x++;
  }
  if (!correct) {
    trie++;
  }
  display();

  if (checkWin()) {
    alert("Apsveicam! Vards ir atminets.");
    newGame();
  } else {
    document.getElementById("bilde").src =
      "https://www.speles.org/speles/bende/hang" + trie + ".gif";
    if (trie == 8) {
      alert("Atvaino, bet vards nav atminets.\n Minamais vards bija " + word);
      newGame();
    }
  }
}

function checkWin() {
  var counter = 0;

  for (i = 0; i < teksts.length; i++) {
    if (teksts[i] == 1) {
      counter++;
    }
  }
  if (counter == teksts.length) {
    return true;
  } else {
    return false;
  }
}

function choose() {
  r = Math.floor(Math.random() * 3);
  if (r == 1) {
    word = "ARMAGEDONS";
  } else if (r == 2) {
    word = "DRAUDZIBA";
  } else if (r == 3) {
    word = "KOSMOSS";
  } else if (r == 4) {
    word = "ZIEDS";
  } else if (r == 5) {
    word = "LATVIJA";
  } else if (r == 6) {
    word = "ZEME";
  } else if (r == 7) {
    word = "PRIEKS";
  } else if (r == 8) {
    word = "ZAKIS";
  } else if (r == 9) {
    word = "PILSETA";
  }

  trie = 0;
  fillWord(word);
}

function newGame() {
  document.forms[0].main.value = "";
  document.getElementById("bilde").src =
    "https://www.speles.org/speles/bende/hang0.gif";
  choose();
}
choose();
