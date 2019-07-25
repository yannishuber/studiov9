const proj = () => {
    document.querySelectorAll('.project-item-image').forEach((e) => setTimeout(() => { e.style.opacity = 1 }, 100))
}

window.onload = proj