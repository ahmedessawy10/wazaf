document.addEventListener('DOMContentLoaded', function() {
    // Get the current URL path
    const path = window.location.pathname;
    
    // Get the search type select element
    const searchTypeSelect = document.querySelector('select[name="type"]');
    
    if (searchTypeSelect) {
        // Set the appropriate option based on the current path
        if (path.includes('/jobs')) {
            searchTypeSelect.value = 'jobs';
        } else if (path.includes('/employers')) {
            searchTypeSelect.value = 'companies';
        } else if (path.includes('/candidates')) {
            searchTypeSelect.value = 'candidates';
        }
    }
}); 