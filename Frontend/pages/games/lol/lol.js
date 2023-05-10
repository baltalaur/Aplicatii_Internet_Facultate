var audio = document.getElementById("myAudio");
var gifContainer = document.querySelector(".gif-container");
var gif = gifContainer.querySelector("img");

document.addEventListener("keydown", function (event) {
  if (event.key === "f") {
    audio.play();
    gifContainer.style.display = "block";
    gif.classList.add("animate");

    setTimeout(function () {
      audio.pause();
      audio.currentTime = 0;
      gif.classList.remove("animate");
      gifContainer.style.display = "none";
    }, 5000);
  }
});

const sound = document.getElementById('ping');

document.addEventListener('click', (event) => {
  if (event.which === 1) {
    sound.play();
  }
});