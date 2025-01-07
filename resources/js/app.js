import "./bootstrap";
import "preline";

// Image file input and preview
const imageInput = document.querySelector('input[name="image"]');
const imagePreview = document.getElementById('file-preview-img');
const imagePreviewContainer = document.getElementById('file-preview-img-container');

imageInput.addEventListener('change', function(event) {
  const file = event.target.files[0];
  
  if (file) {
    const reader = new FileReader();
    reader.onload = function(e) {
      imagePreview.src = e.target.result;
      imagePreviewContainer.classList.remove('hidden');
    };
    reader.readAsDataURL(file);
  }
});

// Video file input and preview
const videoInput = document.querySelector('input[name="video"]');
const videoPreview = document.getElementById('file-preview-video');
const videoPreviewContainer = document.getElementById('file-preview-video-container');

videoInput.addEventListener('change', function(event) {
  const file = event.target.files[0];
  
  if (file) {
    const reader = new FileReader();
    reader.onload = function(e) {
      videoPreview.src = e.target.result;
      videoPreviewContainer.classList.remove('hidden');
    };
    reader.readAsDataURL(file);
  }
});
