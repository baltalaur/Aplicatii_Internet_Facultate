var assassinsCreedDescription =
  "Seria Assassin's Creed este o franciză captivantă de jocuri video de acțiune-aventură dezvoltată de Ubisoft. În fiecare joc, vei explora lumea deschisă bogată și detaliată a unui anumit moment istoric și vei călători în timp pentru a juca rolul unui Asasin priceput. Vei fi îmbrăcat într-o varietate de epoci, inclusiv cruciadele, Renașterea italiană, Revoluția Americană și Egiptul Antic, printre altele. Fiecare joc oferă o experiență captivantă de joc, cu o poveste complexă și intrigantă care dezvăluie secrete, intrigi și mistere din trecutul Asasinilor și Templierilor. Veți avea la dispoziție un arsenal impresionant de arme și abilități, care vă vor permite să atacați în secret, să explorați orașe pline de viață și să vă implicați în lupte intense. Cu peisaje uimitoare, reprezentări istorice autentice și o combinație remarcabilă de acțiune și aventură, seria Assassin's Creed te va transporta într-o călătorie epică prin timp și spațiu, care te va face să te simți ca un adevărat Asasin.";

var leagueOfLegendsDescription =
  "League of Legends (LoL) este un joc de tip MOBA (Multiplayer Online Battle Arena) dezvoltat și publicat de Riot Games. Jocul se bazează pe confruntări strategice în echipe de câte cinci jucători, unde fiecare jucător controlează un campion puternic și unic. Scopul este de a distruge Nexusul echipei adverse, care se află într-un colț al hărții. League of Legends oferă o gamă variată de campioni, fiecare având abilități unice și stiluri de joc diferite, permițând jucătorilor să exploreze o varietate de roluri și strategii. Cu grafică impresionantă, mecanici complexe și o comunitate activă, League of Legends continuă să fie unul dintre cele mai populare jocuri MOBA din lume, atrăgând milioane de jucători din întreaga lume în competiții intense și acțiune palpitantă pe parcursul meciurilor.";

document.addEventListener("DOMContentLoaded", function () {
  var assassinsCreedElement = document.getElementById("assassins-creed");
  assassinsCreedElement.innerHTML = assassinsCreedDescription;

  var leagueOfLegendsElement = document.getElementById("league-of-legends");
  leagueOfLegendsElement.innerHTML = leagueOfLegendsDescription;
});
