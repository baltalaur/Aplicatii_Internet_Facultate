document.addEventListener("DOMContentLoaded", function () {
  const games = [
    {
      title: "Assassin's Creed",
      description:
        "The original game in the series, set during the Third Crusade.",
      steamLink:
        "https://store.steampowered.com/app/15100/Assassins_Creed_Directors_Cut_Edition/",
    },
    {
      title: "Assassin's Creed II",
      description:
        "Follow Ezio Auditore da Firenze's journey during the Italian Renaissance.",
      steamLink:
        "https://store.steampowered.com/app/33230/Assassins_Creed_2_Deluxe_Edition/",
    },
    {
      title: "Assassin's Creed: Brotherhood",
      description: "Continue Ezio's story as he battles the Templars in Rome.",
      steamLink:
        "https://store.steampowered.com/app/48190/Assassins_Creed_Brotherhood/",
    },
    {
      title: "Assassin's Creed: Revelations",
      description:
        "Join Ezio in his final adventure as he explores Constantinople.",
      steamLink:
        "https://store.steampowered.com/app/201870/Assassins_Creed_Revelations/",
    },
    {
      title: "Assassin's Creed III",
      description:
        "Experience the American Revolution through the eyes of Connor, an Assassin.",
      steamLink:
        "https://store.steampowered.com/app/208480/Assassins_Creed_III_Remastered/",
    },
  ];

  let gameListElement = document.getElementById("game-list");

  games.forEach(function (game) {
    var listItem = document.createElement("li");
    var link = document.createElement("a");
    var description = document.createElement("p");

    link.textContent = game.title;
    link.href = game.steamLink;
    link.target = "_blank";

    description.textContent = game.description;

    listItem.appendChild(link);
    listItem.appendChild(description);
    gameListElement.appendChild(listItem);
  });
});
