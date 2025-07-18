import './bootstrap';

var videoEmbeds = document.querySelectorAll('iframe[src*="youtube.com"], iframe[src*="vimeo.com"]');

videoEmbeds.forEach((videoEmbed) => {
    let videoEmbedContainer = document.createElement('div');

    videoEmbedContainer.classList.add('aspect-h-9');
    videoEmbedContainer.classList.add('aspect-w-16');

    videoEmbed.parentNode.insertBefore(videoEmbedContainer, videoEmbed);
    videoEmbedContainer.appendChild(videoEmbed);
})
