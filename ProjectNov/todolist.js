//0. kad lietotajs nospiez pogu, ja funkcija sakas ar on tas raskturo ka lietottajs kaut ko nospiez un izpildas
function onAddItemClick() {
  console.log("poga noklikskinata");
  var newItem = getNewItem();
  if (newItem === "") {
    // sis ir ja ieliek laukumua tuksumu tad vienkarsi iziet no lauka neko neparadot
    return;
  }
  addItem(newItem);
}
//1.dabujam vertibas ko lietotajs ievada ievades lauka
function getNewItem() {
  var newIteamInputEl = document.getElementById("new-item-input");
  var newItem = newIteamInputEl.value; //lai pec ievades nodzestos rakdtitais komandloga
  newIteamInputEl.value = ""; // lai pec ievades nodzestos rakdtitais komandloga
  return newItem; //lai pec ievades nodzestos rakdtitais komandloga
}
//2.Atrodam saraksta konteineri
function addItem(newItem) {
  var todoListEl = document.getElementById("todo-list");

  todoListEl.innerHTML =
    todoListEl.innerHTML +
    ' <li class= "list-group-item"> ' +
    newItem +
    '<button onclick= "removeItem(this)"type="button" class="btn btn-danger" > Remove</button></li>';
  //3.Izvedojam jaunu saraksta ierakstu
  //pielikam vel pogu klat no boostrap
  //this ir taa clickedButton
}
function removeItem(clickedButton) {
  console.log(clickedButton);
  clickedButton.parentNode.parentNode.removeChild(clickedButton.parentNode);
}
