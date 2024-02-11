document.getElementById('showDocument').addEventListener('click', function() {
    var documentContainer = document.getElementById('documentContainer');
    if (documentContainer.style.display === 'none') {
      documentContainer.style.display = 'block';
    } else {
      documentContainer.style.display = 'none';
    }
  });
  