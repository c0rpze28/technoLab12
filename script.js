const enlargeImages = document.querySelectorAll('.enlarge-img');

    enlargeImages.forEach(image => {
      image.addEventListener('mouseenter', () => {
        image.style.transform = 'scale(1.1)';
      });
      image.addEventListener('mouseleave', () => {
        image.style.transform = 'scale(1)';
      });
    });