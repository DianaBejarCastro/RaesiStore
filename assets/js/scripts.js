$(document).ready(function () {
    let productos = [];
    let items = {
        id: 0
    }
    //Telas
    $('.editbtnte').on('click',function (){
        $tr=$(this).closest('tr');
        var datos= $tr.children("td").map(function (){
            return $(this).text();
        });

        $('#update_id').val(datos[0]);
        $('#nombreeditarte').val(datos[1]);
        $('#descripcioneditarte').val(datos[2]);
    });

    $(document).ready(function() {
        $('#tablatelas').DataTable(
            {
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
                },}
        );
    } ); 

    $('.infobtntela').on('click',function (){
        $tr=$(this).closest('tr');
        var datos= $tr.children("td").map(function (){
            return $(this).text();
        });
    });
    //Especialidades
    
    $('.editbtn').on('click',function (){
        $tr=$(this).closest('tr');
        var datos= $tr.children("td").map(function (){
            return $(this).text();
        });

        $('#update_id').val(datos[0]);
        $('#nombreeditar').val(datos[1]);
    });

    $(document).ready(function() {
        $('#tablaespecialidades').DataTable(
            {
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
                },}
        );
        } );
    //Categoria
    $('.editbtnca').on('click',function (){
        $tr=$(this).closest('tr');
        var datos= $tr.children("td").map(function (){
            return $(this).text();
        });

        $('#update_id').val(datos[0]);
        $('#nombreeditarca').val(datos[1]);
        var estadoeditarselect = $('#estadoeditarca').val(datos[2]);
        estadoeditarselect =  document.getElementById("estadoeditarca").innerHTML =JSON.stringify(estadoeditarselect[0]['value']).replace(/['"]+/g, '');
    });

    $(document).ready(function() {
        $('#tablacategorias').DataTable(
            {
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
                },}
        );
    } );
    //Productos
    $('.editbtnpro').on('click',function (){
        $tr=$(this).closest('tr');
        var datos= $tr.children("td").map(function (){
            return $(this).text();
        });

        $('#update_id').val(datos[0]);
        $('#imageneditpro').val(datos[1]);
        $('#imageneditdospro').val(datos[2]);
        $('#imagenedittrespro').val(datos[3]);
        $('#imageneditcuatropro').val(datos[4]);
        $('#nombreeditpro').val(datos[5]);
        $('#descripcioneditpro').val(datos[6]);
        $('#coloreditpro').val(datos[7]);
        $('#generoeditpro').val(datos[8]);
        $('#precioeditpro').val(datos[9]);
        $('#estadoeditpro').val(datos[10]);
        $('#tallaeditpro').val(datos[11]);
        //$('#imageneditpro').val(datos[]);
        //$('#categoriaeditpro').val(datos[]);
        //$('#especialidadeditpro').val(datos[]);
        
    });

    $('.infobtn').on('click',function (){
        $tr=$(this).closest('tr');
        var datos= $tr.children("td").map(function (){
            return $(this).text();
        });

        $('#detalles_id').val(datos[0]);
        $('#imagedetalles').val(datos[1]);
        $('#imagedetallesdos').val(datos[2]);
        $('#imagedetallestres').val(datos[3]);
        $('#imagedetallescuatro').val(datos[4]);
        var nombredetalles = $('#nombredetallespro').val(datos[5]);
        var descripciondetalles = $('#descripciondetallespro').val(datos[6]);
        var colordetalles = $('#colordetallespro').val(datos[7]);
        var generodetalles = $('#generodetallespro').val(datos[8]);
        var preciodetalles = $('#preciodetallespro').val(datos[9]);
        var estadodetalles = $('#estadodetallespro').val(datos[10]);
        var talladetalles = $('#talladetallespro').val(datos[11]);
        var teladetalles = $('#teladetallespro').val(datos[12]);
        //$('#imageneditpro').val(datos[]);
        var categoriadetalles = $('#categoriadetallespro').val(datos[13]);
        
        var especialidaddetalles = $('#especialidaddetallespro').val(datos[14]);
        
        nombredetalles =  document.getElementById("nombredetallespro").innerHTML =JSON.stringify(nombredetalles[0]['value']).replace(/['"]+/g, '');
        descripciondetalles = document.getElementById("descripciondetallespro").innerHTML =JSON.stringify(descripciondetalles[0]['value']).replace(/['"]+/g, '');
        colordetalles = document.getElementById("colordetallespro").innerHTML =JSON.stringify(colordetalles[0]['value']).replace(/['"]+/g, '');
        generodetalles = document.getElementById("generodetallespro").innerHTML =JSON.stringify(generodetalles[0]['value']).replace(/['"]+/g, '');
        preciodetalles = document.getElementById("preciodetallespro").innerHTML =JSON.stringify(preciodetalles[0]['value']).replace(/['"]+/g, '');
        estadodetalles = document.getElementById("estadodetallespro").innerHTML =JSON.stringify(estadodetalles[0]['value']).replace(/['"]+/g, '');
        talladetalles = document.getElementById("talladetallespro").innerHTML =JSON.stringify(talladetalles[0]['value']).replace(/['"]+/g, '');
        teladetalles = document.getElementById("teladetallespro").innerHTML =JSON.stringify(teladetalles[0]['value']).replace(/['"]+/g, '');

        categoriadetalles = document.getElementById("categoriadetallespro").innerHTML =JSON.stringify(categoriadetalles[0]['value']).replace(/['"]+/g, '');
        especialidaddetalles = document.getElementById("especialidaddetallespro").innerHTML =JSON.stringify(especialidaddetalles[0]['value']).replace(/['"]+/g, '');
    });

    $(document).ready(function() {
        $('#tablaproductos').DataTable(
            {
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
                },}
        );
    } );

    // -----------------------------------------
    mostrar();
    $('.navbar-nav .nav-link-busqueda[category="all"]').addClass('active');

    $('.nav-link-busqueda').click(function () {
        let productos = $(this).attr('category');

        $('.nav-link-busquedak').removeClass('active');
        $(this).addClass('active');

        $('.productos').css('transform', 'scale(0)');

        function ocultar() {
            $('.productos').hide();
        }
        setTimeout(ocultar, 400);

        function mostrar() {
            $('.productos[category="' + productos + '"]').show();
            $('.productos[category="' + productos + '"]').css('transform', 'scale(1)');
        }
        setTimeout(mostrar, 400);
    });

    $('.nav-link-busqueda[category="all"]').click(function () {
        function mostrarTodo() {
            $('.productos').show();
            $('.productos').css('transform', 'scale(1)');
        }
        setTimeout(mostrarTodo, 400);
    });

    

    $('.agregar').click( function(e){
        e.preventDefault();
        const id = $(this).data('id');
        items = {
            id: id
        }
        productos.push(items);
        localStorage.setItem('productos', JSON.stringify(productos));
        mostrar();
    })
    $('#btnCarrito').click(function(e){
        $('#btnCarrito').attr('href','carrito.php');
    })
    $('#btnVaciar').click(function(){
        localStorage.removeItem("productos");
        $('#tblCarrito').html('');
        $('#total_pagar').text('0.00');
    })
    //categoria
    $('#abrirCategoria').click(function(){
        $('#categorias').modal('show');
    })
    //productos
    $('#abrirProducto').click(function () {
        $('#productos').modal('show');
    })
    $('.eliminar').click(function(e){
        e.preventDefault();
        if (confirm('Esta seguro de eliminar?')) {
            this.submit();
        }
    })

      //especialidades
      $('#abrirEspecialidad').click(function(){
        $('#especialidades').modal('show');
    })
      $('#abrirEspecialidadEditar').click(function(){
        $('#especialidadeseditar').modal('show');
    })

    //telas
    $('#abrirTela').click(function(){
        $('#telas').modal('show');
    })
      $('#abrirTelaEditar').click(function(){
        $('#telaseditar').modal('show');
    })
    
});

function mostrar(){
    if (localStorage.getItem("productos") != null) {
        let array = JSON.parse(localStorage.getItem('productos'));
        if (array) {
            $('#carrito').text(array.length);
        }
    }



    
}


  /**
   * ---------------------------------
   */
   const select = (el, all = false) => {
    el = el.trim()
    if (all) {
      return [...document.querySelectorAll(el)]
    } else {
      return document.querySelector(el)
    }
  }
   window.addEventListener('load', () => {
    let portfolioContainer = select('.portfolio-container');
    if (portfolioContainer) {
      let portfolioIsotope = new Isotope(portfolioContainer, {
        itemSelector: '.portfolio-item',
        layoutMode: 'fitRows'
      });

      let portfolioFilters = select('#portfolio-flters li', true);

      on('click', '#portfolio-flters li', function(e) {
        e.preventDefault();
        portfolioFilters.forEach(function(el) {
          el.classList.remove('filter-active');
        });
        this.classList.add('filter-active');

        portfolioIsotope.arrange({
          filter: this.getAttribute('data-filter')
        });
        aos_init();
      }, true);
    }

  });

  /**
   -------------------------------------------------------
   */
  const portfolioLightbox = GLightbox({
    selector: '.portfokio-lightbox'
  });

  /**
   * Portfolio details slider
   */
  new Swiper('.portfolio-details-slider', {
    speed: 400,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    }
  });


