
    document.addEventListener('scroll', function() {
        var progressVmware = document.getElementById('progress-vmware').querySelector('.progress');
        var progressPhp = document.getElementById('progress-php').querySelector('.progress');

        var position = document.getElementById('progress-section').getBoundingClientRect().top;

        var screenPosition = window.innerHeight / 1.5;

        if (position < screenPosition) {
            progressPhp.style.width = '60%'; // Remplissage pour PHP
            progressVmware.style.width = '75%'; // Remplissage pour VMWARE
        }
        else{
            progressVmware.style.width = '0%';
            progressPhp.style.width = '0%';
        }
    });

    /**debut animation pour la partie projets scolaire */
    document.addEventListener('DOMContentLoaded', function() {
        const filters = document.querySelectorAll('#portfolio-flters li');
        const projectsContainer = document.getElementById('portfolio-projects');
      
        const projects = {
          '*': [
            { category: 'filter-app', background: '/src/public/images/anssi_logo.png' },
            { category: 'filter-card', background: '/src/public/images/anssi_logo.png' },
            { category: 'filter-web', background: '/src/public/images/anssi_logo.png' }
          ],
          '.filter-app': [
            { category: 'filter-app', background: '/src/public/images/anssi_logo.png' }
          ],
          '.filter-card': [
            { category: 'filter-card', background: '/src/public/images/anssi_logo.png' }
          ],
          '.filter-web': [
            { category: 'filter-web', background: '/src/public/images/anssi_logo.png' }
          ]
        };
      
        function showProjects(filter) {
          // Retirer les projets actuels avec une animation
          const currentItems = document.querySelectorAll('#portfolio-projects .portfolio-item');
          currentItems.forEach(item => {
            item.classList.remove('show');
            setTimeout(() => item.remove(), 300);  // Délai pour permettre à l'animation de s'exécuter
          });
      
          // Ajouter les nouveaux projets après le délai
          setTimeout(() => {
            const selectedProjects = projects[filter];
            selectedProjects.forEach(project => {
              const projectItem = document.createElement('div');
              projectItem.classList.add('portfolio-item', project.category);
              projectItem.style.backgroundImage = `url('${project.background}')`;
              projectItem.innerHTML = `<div class="plus-icon"></div>`;
              projectsContainer.appendChild(projectItem);
      
              // Appliquer la classe 'show' pour déclencher l'animation
              setTimeout(() => {
                projectItem.classList.add('show');
              }, 10);
            });
          }, 300);  // Délai correspondant à la durée de la transition
        }
      
        // Initialiser avec tous les projets
        showProjects('*');
      
        // Ajouter les événements de clic sur les filtres
        filters.forEach(filter => {
          filter.addEventListener('click', function() {
            filters.forEach(f => f.classList.remove('filter-active'));
            this.classList.add('filter-active');
            const filterValue = this.getAttribute('data-filter');
            showProjects(filterValue);
          });
        });
      });
      
      /** fin de la partie projet scolaire*/