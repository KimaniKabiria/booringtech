const manageSlideButton = document.getElementById('manageSlideout')

manageSlideButton.onclick = function() {
    this.classList.toggle('is-active');
    document.getElementById('manageSideMenu').classList.toggle('is-active');
}
