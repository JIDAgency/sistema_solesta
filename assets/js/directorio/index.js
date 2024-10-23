document.addEventListener('DOMContentLoaded', function () {
    var searchBar = document.getElementById('searchBar');
    var categoryLinks = document.querySelectorAll('.category-link');
    var alphabetLinks = document.querySelectorAll('.alphabet-link');
    var localLinks = document.querySelectorAll('.local-link');
    var headings = document.querySelectorAll('h5[id^="letter-"]');
    var noResults = document.getElementById('no-results');

    var selectedCategory = 'all';
    var selectedLetter = null;

    searchBar.addEventListener('input', filterStores);

    categoryLinks.forEach(function (link) {
        link.addEventListener('click', function (event) {
            event.preventDefault(); // Prevenir comportamiento predeterminado del enlace

            // Remover clase activa de todos los enlaces y agregarla al enlace seleccionado
            categoryLinks.forEach(function (lnk) {
                lnk.classList.remove('active');
            });
            this.classList.add('active');

            selectedCategory = this.getAttribute('data-category');
            selectedLetter = null; // Reiniciar letra seleccionada
            // Remover clase activa de los enlaces de letra
            alphabetLinks.forEach(function (lnk) {
                lnk.classList.remove('active');
            });
            filterStores();
        });
    });

    alphabetLinks.forEach(function (link) {
        link.addEventListener('click', function (event) {
            event.preventDefault(); // Prevenir comportamiento predeterminado del enlace

            // Remover clase activa de todos los enlaces y agregarla al enlace seleccionado
            alphabetLinks.forEach(function (lnk) {
                lnk.classList.remove('active');
            });
            this.classList.add('active');

            selectedLetter = this.textContent.trim();
            filterStores();
        });
    });

    function filterStores() {
        var searchTerm = searchBar.value.toLowerCase();
        var anyVisible = false;
        var visibleLetters = new Set();

        localLinks.forEach(function (link) {
            var localName = link.getAttribute('data-name');
            var localCategory = link.getAttribute('data-category');
            var firstLetter = localName.charAt(0).toUpperCase();
            var matchesSearch = localName.indexOf(searchTerm) !== -1;
            var matchesCategory = (selectedCategory === 'all' || localCategory === selectedCategory);
            var matchesLetter = (selectedLetter === null || firstLetter === selectedLetter);

            if (matchesSearch && matchesCategory && matchesLetter) {
                link.parentElement.style.display = '';
                anyVisible = true;
                visibleLetters.add(firstLetter);
            } else {
                link.parentElement.style.display = 'none';
            }
        });

        // Ocultar encabezados de letras si no hay locales visibles en esa sección
        headings.forEach(function (heading) {
            var letter = heading.getAttribute('data-letter');
            var section = heading.nextElementSibling;
            var anyVisibleInSection = false;

            var linksInSection = section.querySelectorAll('.local-link');
            linksInSection.forEach(function (link) {
                if (link.parentElement.style.display !== 'none') {
                    anyVisibleInSection = true;
                }
            });

            if (anyVisibleInSection) {
                heading.style.display = '';
                section.style.display = '';
            } else {
                heading.style.display = 'none';
                section.style.display = 'none';
            }
        });

        // Mostrar o ocultar el mensaje de no resultados
        if (!anyVisible) {
            noResults.style.display = 'block';
        } else {
            noResults.style.display = 'none';
        }

        // Actualizar la navegación alfabética
        updateAlphabetNavigation(visibleLetters);
    }

    function updateAlphabetNavigation(visibleLetters) {
        // Mostrar u ocultar los enlaces de letra
        alphabetLinks.forEach(function (link) {
            var letter = link.textContent.trim();
            if (visibleLetters.has(letter)) {
                link.style.display = '';
            } else {
                link.style.display = 'none';
            }
        });

        // Si la letra seleccionada ya no tiene locales visibles, reiniciamos la selección
        if (selectedLetter && !visibleLetters.has(selectedLetter)) {
            selectedLetter = null;
            alphabetLinks.forEach(function (lnk) {
                lnk.classList.remove('active');
            });
        }
    }

    // Inicializar la categoría "Todas" como activa
    document.querySelector('.category-link[data-category="' + selectedCategory + '"]').classList.add('active');

    // Ejecutar el filtrado inicial
    filterStores();
});
