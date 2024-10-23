document.addEventListener('DOMContentLoaded', function () {
    var searchBar = document.getElementById('searchBar');
    var categoryLinks = document.querySelectorAll('.category-link');
    var alphabetLinks = document.querySelectorAll('.alphabet-link');
    var localLinks = document.querySelectorAll('.local-link');
    var headings = document.querySelectorAll('h2[id^="letter-"]');
    var noResults = document.getElementById('no-results');
    var selectedCategory = window.selectedCategory || 'all';
    var selectedLetter = window.selectedLetter || null;

    searchBar.addEventListener('input', filterStores);

    categoryLinks.forEach(function (link) {
        link.addEventListener('click', function (event) {
            event.preventDefault();

            // Obtener la categoría seleccionada
            var category = this.getAttribute('data-category');

            // Si la categoría ya está seleccionada, la deseleccionamos
            if (selectedCategory === category) {
                selectedCategory = 'all';
                categoryLinks.forEach(function (lnk) {
                    lnk.classList.remove('active');
                });
                document.querySelector('.category-link[data-category="all"]').classList.add('active');
            } else {
                selectedCategory = category;
                categoryLinks.forEach(function (lnk) {
                    lnk.classList.remove('active');
                });
                this.classList.add('active');
            }

            // Reiniciar letra seleccionada
            selectedLetter = null;
            alphabetLinks.forEach(function (lnk) {
                lnk.classList.remove('active');
            });
            document.querySelector('.alphabet-link[data-letter="all"]').classList.add('active');

            filterStores();
            updateURL();
        });
    });

    alphabetLinks.forEach(function (link) {
        link.addEventListener('click', function (event) {
            event.preventDefault();

            var letter = this.getAttribute('data-letter');

            // Si la letra es "all", reiniciamos la selección de letras
            if (letter === 'all') {
                selectedLetter = null;
                alphabetLinks.forEach(function (lnk) {
                    lnk.classList.remove('active');
                });
                this.classList.add('active');
            } else {
                // Si la letra ya está seleccionada, la deseleccionamos
                if (selectedLetter === letter) {
                    selectedLetter = null;
                    alphabetLinks.forEach(function (lnk) {
                        lnk.classList.remove('active');
                    });
                    document.querySelector('.alphabet-link[data-letter="all"]').classList.add('active');
                } else {
                    selectedLetter = letter;
                    alphabetLinks.forEach(function (lnk) {
                        lnk.classList.remove('active');
                    });
                    this.classList.add('active');
                }
            }

            filterStores();
            updateURL();
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

        // Mostrar u ocultar encabezados de letras según los locales visibles
        headings.forEach(function (heading) {
            var letter = heading.getAttribute('data-letter');
            var section = heading.parentElement;
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

        // Mostrar u ocultar el mensaje de no resultados
        if (!anyVisible) {
            noResults.style.display = 'block';
        } else {
            noResults.style.display = 'none';
        }

        // Actualizar la navegación alfabética
        updateAlphabetNavigation(visibleLetters);
    }

    function updateAlphabetNavigation(visibleLetters) {
        alphabetLinks.forEach(function (link) {
            var letter = link.getAttribute('data-letter');
            if (letter === 'all') {
                link.style.display = ''; // Siempre mostramos el botón "Todas"
                return;
            }
            if (visibleLetters.has(letter)) {
                link.style.display = '';
            } else {
                link.style.display = 'none';
            }
        });
    }

    function updateURL() {
        var params = new URLSearchParams(window.location.search);

        if (selectedCategory && selectedCategory !== 'all') {
            params.set('categoria', selectedCategory);
        } else {
            params.delete('categoria');
        }

        if (selectedLetter) {
            params.set('letra', selectedLetter);
        } else {
            params.delete('letra');
        }

        var newURL = window.location.pathname + '?' + params.toString();
        history.replaceState({}, '', newURL);
    }

    // Inicializar la categoría y letra seleccionadas al cargar la página
    function initializeFilters() {
        if (selectedCategory && selectedCategory !== 'all') {
            var categoryLink = document.querySelector('.category-link[data-category="' + selectedCategory + '"]');
            if (categoryLink) {
                categoryLink.classList.add('active');
            }
        } else {
            var allCategoryLink = document.querySelector('.category-link[data-category="all"]');
            if (allCategoryLink) {
                allCategoryLink.classList.add('active');
            }
        }

        if (selectedLetter) {
            var letterLink = document.querySelector('.alphabet-link[data-letter="' + selectedLetter + '"]');
            if (letterLink) {
                letterLink.classList.add('active');
            }
        } else {
            var allLetterLink = document.querySelector('.alphabet-link[data-letter="all"]');
            if (allLetterLink) {
                allLetterLink.classList.add('active');
            }
        }

        filterStores();
        updateURL();
    }

    initializeFilters();
});