
    document.addEventListener('scroll', function() {
        var progressVmware = document.getElementById('progress-vmware').querySelector('.progress');
        var progressPhp = document.getElementById('progress-php').querySelector('.progress');

        var vmwarePosition = document.getElementById('progress-vmware').getBoundingClientRect().top;
        var phpPosition = document.getElementById('progress-php').getBoundingClientRect().top;

        var screenPosition = window.innerHeight / 1.5;

        if (vmwarePosition < screenPosition) {
            progressVmware.style.width = '75%'; // Remplissage pour VMWARE
        }
        else{
            progressVmware.style.width = '0%';
        }

        if (phpPosition < screenPosition) {
            progressPhp.style.width = '60%'; // Remplissage pour PHP
        }else{
            progressPhp.style.width = '0%';
        }
    });

