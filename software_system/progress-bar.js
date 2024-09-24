document.addEventListener('DOMContentLoaded', function () {
    var winHeight = window.innerHeight,
          docHeight = document.documentElement.scrollHeight,
          progressBar = document.querySelector('#myBar');
    progressBar.max = docHeight - winHeight;
    progressBar.value = window.scrollY;

    document.addEventListener('scroll', function () {
          progressBar.max = document.documentElement.scrollHeight - window.innerHeight;
          progressBar.value = window.scrollY;
    });
});