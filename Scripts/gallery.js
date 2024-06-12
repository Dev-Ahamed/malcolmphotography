function fullView(src) {
    document.getElementById('fullImage').src = src;
    document.getElementById('imageFullView').style.display = 'flex';
}

function closeButton() {
    document.getElementById('imageFullView').style.display = 'none';
}