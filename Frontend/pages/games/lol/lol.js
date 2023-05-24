function mamamia() {
  const sound = document.getElementById("ping");
  sound.play();
}

function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}

document.addEventListener("DOMContentLoaded", function() {
  // lista constanta cu obiecte care deschriu campioni de lol 
  const champions = [
    {
      name: "Ahri",
      role: "Mage",
      ultimate: "Spirit Rush",
      description: "Ahri is a seductive mage who charms her opponents and dashes through the battlefield."
    },
    {
      name: "Yasuo",
      role: "Fighter",
      ultimate: "Last Breath",
      description: "Yasuo is a skilled swordsman who wields the power of the wind to unleash devastating attacks."
    },
    {
      name: "Jinx",
      role: "Marksman",
      ultimate: "Super Mega Death Rocket!",
      description: "Jinx is an unpredictable marksman who brings chaos with her explosives and minigun."
    },
    {
      name: "Garen",
      role: "Tank",
      ultimate: "Demacian Justice",
      description: "Garen is a mighty warrior from Demacia who excels at soaking up damage and silencing his enemies."
    },
    {
      name: "Lux",
      role: "Mage",
      ultimate: "Final Spark",
      description: "Lux is a powerful mage who can control light and rain destruction upon her foes from a distance."
    }
  ];

  const championList = document.getElementById("champion-list");

  champions.forEach(champion => {
    const li = document.createElement("li");
    const h2 = document.createElement("h2");
    const pRole = document.createElement("p");
    const pUltimate = document.createElement("p");
    const pDescription = document.createElement("p");

    h2.textContent = champion.name;
    pRole.textContent = "Role: " + champion.role;
    pUltimate.textContent = "Ultimate: " + champion.ultimate;
    pDescription.textContent = "Description: " + champion.description;

    li.appendChild(h2);
    li.appendChild(pRole);
    li.appendChild(pUltimate);
    li.appendChild(pDescription);
    championList.appendChild(li);
  });
});
