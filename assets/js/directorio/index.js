document.getElementById('searchBar').addEventListener('input', filterStores);
document.getElementById('categoryFilter').addEventListener('change', filterStores);

function filterStores() {
    var searchTerm = document.getElementById('searchBar').value.toLowerCase();
    var selectedCategory = document.getElementById('categoryFilter').value.toLowerCase();
    var localLinks = document.querySelectorAll('.local-link');
    var headings = document.querySelectorAll('h5[id^="letter-"]');

    localLinks.forEach(function (link) {
        var localName = link.getAttribute('data-name');
        var localCategory = link.getAttribute('data-category') || '';
        var matchesSearch = localName.includes(searchTerm);
        var matchesCategory = selectedCategory === 'all' || localCategory === selectedCategory;

        if (matchesSearch && matchesCategory) {
            link.parentElement.style.display = '';
        } else {
            link.parentElement.style.display = 'none';
        }
    });

    // Ocultar encabezados de letras si no hay locales visibles en esa sección
    headings.forEach(function (heading) {
        var section = heading.nextElementSibling;
        var visibles = section.querySelectorAll('.col-md-2:not([style*="display: none"]), .col-sm-4:not([style*="display: none"]), .col-6:not([style*="display: none"])');
        if (visibles.length === 0) {
            heading.style.display = 'none';
        } else {
            heading.style.display = '';
        }
    });
}

// Función para obtener parámetros de la URL
function getURLParameter(name) {
    return decodeURIComponent((new RegExp('[?|&]' + name + '=' + '([^&;]+?)(&|#|;|$)').exec(location.search) || [, ""])[1].replace(/\+/g, '%20')) || null;
}

// Aplicar filtro de categoría desde la URL al cargar la página
window.addEventListener('load', function () {
    var categoryParam = getURLParameter('categoria');
    if (categoryParam) {
        var categoryFilter = document.getElementById('categoryFilter');
        categoryFilter.value = categoryParam.toLowerCase();
        // Verificar si el valor existe en las opciones
        if (categoryFilter.value !== 'all' && categoryFilter.querySelector('option[value="' + categoryFilter.value + '"]')) {
            filterStores();
        }
    }
});
