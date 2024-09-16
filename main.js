// script.js           

document.querySelectorAll('.team-member a').forEach(link => {
    link.addEventListener('click', () => {
        alert('You clicked on a team member!');
    });
});

