document.getElementById('toggleButton').addEventListener('click', function() {
    var content = document.getElementById('conditionContent');
    var button = document.getElementById('toggleButton');
    
    if (content.style.display === 'none' || content.style.display === '') {
        content.style.display = 'block';
        button.innerHTML = '&#9650;'; // Arrow up
    } else {
        content.style.display = 'none';
        button.innerHTML = '&#9660;'; // Arrow down
    }
});
