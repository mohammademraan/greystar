document.querySelectorAll('.tab-link').forEach(button => {
    button.addEventListener('click', () => {
        const tabContainer = document.querySelector('.tabs');
        const tabNumber = button.dataset.tab;

        tabContainer.querySelectorAll('.tab-link').forEach(btn => {
            btn.classList.remove('active');
        });

        document.querySelectorAll('.tab-content').forEach(tab => {
            tab.classList.remove('active');
        });

        button.classList.add('active');
        document.getElementById(tabNumber).classList.add('active');
    });
});
document.addEventListener('DOMContentLoaded', function () {
    const tabLinks = document.querySelectorAll('.tab-link');
    const tabContents = document.querySelectorAll('.tab-content');

    tabLinks.forEach(tabLink => {
        tabLink.addEventListener('click', function () {
            const targetTab = this.getAttribute('data-tab');

            // Remove active class from all tab links and contents
            tabLinks.forEach(link => link.classList.remove('active'));
            tabContents.forEach(content => content.classList.remove('active'));

            // Add active class to the clicked tab link and corresponding content
            this.classList.add('active');
            document.getElementById(targetTab).classList.add('active');
        });
    });
});

