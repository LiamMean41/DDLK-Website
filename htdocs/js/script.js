window.addEventListener("load", function() {
    var scanlinesElement = document.querySelector(".scanlines");
    var noiseElement = document.querySelector(".noise");
    var flickerElement = document.querySelector(".flicker");
    var animationButton = document.querySelector("#animationButton");
    var animationPaused = false;
  
    animationButton.addEventListener("click", function() {
      if (animationPaused) {
        scanlinesElement.style.animationPlayState = "running";
        noiseElement.style.animationPlayState = "running";
        flickerElement.style.animationPlayState = "running";
        animationButton.textContent = "Pause Animation";
        animationButton.classList.remove("btn-success");
        animationButton.classList.add("btn-primary");
      } else {
        scanlinesElement.style.animationPlayState = "paused";
        noiseElement.style.animationPlayState = "paused";
        flickerElement.style.animationPlayState = "paused";
        animationButton.textContent = "Play Animation";
        animationButton.classList.remove("btn-primary");
        animationButton.classList.add("btn-success");
      }
  
      animationPaused = !animationPaused;
    });
});
