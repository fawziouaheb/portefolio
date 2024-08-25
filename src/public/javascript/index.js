
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

    document.addEventListener('DOMContentLoaded', function() {
      const projectsContainer = document.getElementById('portfolio-projects');
      const modal = document.getElementById('projectModal');
      const closeModal = document.querySelector('.close');
      const modalImagesContainer = document.querySelector('.modal-images');
      const modalDescription = document.querySelector('.modal-description');
      
      // Sélectionne tous les éléments de filtre
      const filters = document.querySelectorAll('#portfolio-flters li');
    
      if (!projectsContainer || !modal || !closeModal || !modalImagesContainer || !modalDescription || !filters.length) {
        console.error("Un ou plusieurs éléments requis ne sont pas trouvés dans le DOM.");
        return;
      }
    
      // Le reste de ton code de gestion des projets et filtres
      const projects = {
        '*': [
          { category: 'filter-app', background: '/src/public/images/anssi_logo.png', images: ['/src/public/images/anssi_logo.png'], description: 'Description du projet app.' },
          { category: 'filter-card', background: '/src/public/images/anssi_logo.png', images: ['/src/public/images/anssi_logo.png'], description: 'Description du projet card.' },
          { category: 'filter-web', background: '/src/public/images/anssi_logo.png', images: ['/src/public/images/anssi_logo.png'], description: 'Description du projet web.' }
        ],
        '.filter-app': [
          { category: 'filter-app', background: '/src/public/images/anssi_logo.png', images: ['/src/public/images/anssi_logo.png'], description: 'Description du projet app.' }
        ],
        '.filter-card': [
          { category: 'filter-card', background: '/src/public/images/anssi_logo.png', images: ['/src/public/images/anssi_logo.png'], description: 'Description du projet card.' }
        ],
        '.filter-web': [
          { category: 'filter-web', background: '/src/public/images/anssi_logo.png', images: ['/src/public/images/anssi_logo.png'], description: 'Description du projet web.' }
        ]
      };
    
      function showProjects(filter) {
        const currentItems = document.querySelectorAll('#portfolio-projects .portfolio-item');
        currentItems.forEach(item => {
          item.classList.remove('show');
          setTimeout(() => item.remove(), 300);
        });
    
        setTimeout(() => {
          const selectedProjects = projects[filter];
          selectedProjects.forEach(project => {
            const projectItem = document.createElement('div');
            projectItem.classList.add('portfolio-item', project.category);
            projectItem.style.backgroundImage = `url('${project.background}')`;
            projectItem.innerHTML = `<div class="plus-icon"></div>`;
            
            projectItem.querySelector('.plus-icon').addEventListener('click', () => showModal(project));
            
            projectsContainer.appendChild(projectItem);
            
            setTimeout(() => {
              projectItem.classList.add('show');
            }, 10);
          });
        }, 300);
      }
    
      function showModal(project) {
        modal.style.display = 'flex';
        
        // Clear previous images
        modalImagesContainer.innerHTML = '';
        project.images.forEach((imgSrc, index) => {
          const img = document.createElement('img');
          img.src = imgSrc;
          if (index === 0) img.classList.add('active');
          modalImagesContainer.appendChild(img);
        });
        
        modalDescription.textContent = project.description;
        
        let currentIndex = 0;
        setInterval(() => {
          const images = document.querySelectorAll('.modal-images img');
          images[currentIndex].classList.remove('active');
          currentIndex = (currentIndex + 1) % images.length;
          images[currentIndex].classList.add('active');
        }, 3000);
      }
    
      closeModal.addEventListener('click', () => {
        modal.style.display = 'none';
      });
    
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
     
      const hamburger = document.querySelector('.hamburger');
      const navMenu = document.querySelector('.navbar-m ul');
      
      hamburger.addEventListener('click', () => {
          hamburger.classList.toggle('active');
          navMenu.classList.toggle('active');
      });
      


      document.addEventListener('DOMContentLoaded', function () {
        const typingText = document.getElementById('typing-text');
        const text = "Salut ! Moi c'est Fawzi. N'hésitez pas à scroller pour découvrir l'ensemble de mon profil !";
    
        let index = 0;
    
        function type() {
            if (index < text.length) {
                typingText.innerHTML += text.charAt(index);
                index++;
                setTimeout(type, 50); // Ajuste la vitesse de frappe ici
            }
        }
    
        type();
    });

    document.addEventListener('DOMContentLoaded', function() {
      const toggleIcon = document.querySelector('.background-toggle');
      let isGradient = false;
  
      toggleIcon.addEventListener('click', function() {
          if (isGradient) {
              document.body.style.background = '#2E2C2C'; // Couleur unie
          } else {
              document.body.style.background = 'linear-gradient(to left, #c6ffdd, #fbd786, #f7797d)'; // Dégradé
          }
          isGradient = !isGradient; // Basculer l'état
      });
  });
  
    