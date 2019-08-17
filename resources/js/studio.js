const studioSlideButton = document.getElementById('studioSlideout')

studioSlideButton.onclick = function() {
    this.classList.toggle('is-active');
    document.getElementById('studioSideMenu').classList.toggle('is-active');
}
