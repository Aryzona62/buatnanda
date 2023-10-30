<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>GeoFishery - {{ $title }}</title>
    <link href="{{ asset('assets/images/geotani.png') }}" rel="shortcut icon" />
    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="{{ asset('css/simplebar.css') }}">
    <!-- Fonts CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="{{ asset('dashboard-assets/css/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard-assets/css/select2.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard-assets/css/dropzone.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard-assets/css/uppy.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard-assets/css/jquery.steps.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard-assets/css/jquery.timepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard-assets/css/quill.snow.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard-assets/css/dataTables.bootstrap4.css') }}">
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="{{ asset('dashboard-assets/css/daterangepicker.css') }}">
    <!-- App CSS -->
    <link rel="stylesheet" href="{{ asset('dashboard-assets/css/app-light.css') }}" id="lightTheme">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard-assets/css/tix.css') }}" id="lightTheme">
    <script type="text/javascript" src="//cdn.fusioncharts.com/fusioncharts/latest/fusioncharts.js"></script>
    <script type="text/javascript" src="//cdn.fusioncharts.com/fusioncharts/latest/themes/fusioncharts.theme.fusion.js"></script>
    <!-- <link rel="stylesheet" href="css/app-dark.css" id="darkTheme" disable> -->
  </head>
  <body class="vertical  dark  ">
    <div class="wrapper">
      @include('dashboard.partials.navbar')
      @include('dashboard.partials.sidebar')
      
      <main role="main" class="main-content">
        @yield('container')
      </main> <!-- main -->
    </div> <!-- .wrapper -->
    <script type="text/javascript" src="{{ asset('dashboard-assets/js/trix.js') }}"></script>
    <script src="{{ asset('dashboard-assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('dashboard-assets/js/apps.min.js') }}"></script>
    <script src="{{ asset('dashboard-assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('dashboard-assets/js/moment.min.js') }}"></script>
    <script src="{{ asset('dashboard-assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('dashboard-assets/js/simplebar.min.js') }}"></script>
    <script src="{{ asset('dashboard-assets/js/daterangepicker.js') }}"></script>
    <script src="{{ asset('dashboard-assets/js/jquery.stickOnScroll.js') }}"></script>
    <script src="{{ asset('dashboard-assets/js/tinycolor-min.js') }}"></script>
    <script src="{{ asset('dashboard-assets/js/config.js') }}"></script>
    <script src="{{ asset('dashboard-assets/js/d3.min.js') }}"></script>
    <script src="{{ asset('dashboard-assets/js/topojson.min.js') }}"></script>
    <script src="{{ asset('dashboard-assets/js/datamaps.all.min.js') }}"></script>
    <script src="{{ asset('dashboard-assets/js/datamaps-zoomto.js') }}"></script>
    <script src="{{ asset('dashboard-assets/js/datamaps.custom.js') }}"></script>
    <script src="{{ asset('dashboard-assets/js/Chart.min.js') }}"></script>
    <script src="{{ asset('dashboard-assets/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('dashboard-assets/js/dataTables.bootstrap4.min.js') }}"></script>
    <script>
      $('#dataTable-1').DataTable(
      {
        autoWidth: true,
        "lengthMenu": [
          [16, 32, 64, -1],
          [16, 32, 64, "All"]
        ]
      });
    </script>
    <script>
      /* defind global options */
      Chart.defaults.global.defaultFontFamily = base.defaultFontFamily;
      Chart.defaults.global.defaultFontColor = colors.mutedColor;
    </script>
    <script src="{{ asset('dashboard-assets/js/gauge.min.js') }}"></script>
    <script src="{{ asset('dashboard-assets/js/apps.js') }}"></script>
    <script src="{{ asset('dashboard-assets/js/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('dashboard-assets/js/apexcharts.min.js') }}"></script>
    <script src="{{ asset('dashboard-assets/js/apexcharts.custom.js') }}"></script>
    <script src="{{ asset('dashboard-assets/js/jquery.mask.min.js') }}"></script>
    <script src="{{ asset('dashboard-assets/js/select2.min.js') }}"></script>
    <script src="{{ asset('dashboard-assets/js/jquery.steps.min.js') }}"></script>
    <script src="{{ asset('dashboard-assets/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('dashboard-assets/js/jquery.timepicker.js') }}"></script>
    <script src="{{ asset('dashboard-assets/js/dropzone.min.js') }}"></script>
    <script src="{{ asset('dashboard-assets/js/uppy.min.js') }}"></script>
    <script src="{{ asset('dashboard-assets/js/quill.min.js') }}"></script>
    <script>
      $('.select2').select2(
      {
        theme: 'bootstrap4',
      });
      $('.select2-multi').select2(
      {
        multiple: true,
        theme: 'bootstrap4',
      });
      $('.drgpicker').daterangepicker(
      {
        singleDatePicker: true,
        timePicker: false,
        showDropdowns: true,
        locale:
        {
          format: 'MM/DD/YYYY'
        }
      });
      $('.time-input').timepicker(
      {
        'scrollDefault': 'now',
        'zindex': '9999' /* fix modal open */
      });
      /** date range picker */
      if ($('.datetimes').length)
      {
        $('.datetimes').daterangepicker(
        {
          timePicker: true,
          startDate: moment().startOf('hour'),
          endDate: moment().startOf('hour').add(32, 'hour'),
          locale:
          {
            format: 'M/DD hh:mm A'
          }
        });
      }
      var start = moment().subtract(29, 'days');
      var end = moment();

      function cb(start, end)
      {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
      }
      $('#reportrange').daterangepicker(
      {
        startDate: start,
        endDate: end,
        ranges:
        {
          'Today': [moment(), moment()],
          'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days': [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month': [moment().startOf('month'), moment().endOf('month')],
          'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        }
      }, cb);
      cb(start, end);
      $('.input-placeholder').mask("00/00/0000",
      {
        placeholder: "__/__/____"
      });
      $('.input-zip').mask('00000-000',
      {
        placeholder: "____-___"
      });
      $('.input-money').mask("#.##0,00",
      {
        reverse: true
      });
      $('.input-phoneus').mask('(000) 000-0000');
      $('.input-mixed').mask('AAA 000-S0S');
      $('.input-ip').mask('0ZZ.0ZZ.0ZZ.0ZZ',
      {
        translation:
        {
          'Z':
          {
            pattern: /[0-9]/,
            optional: true
          }
        },
        placeholder: "___.___.___.___"
      });
      // editor
      var editor = document.getElementById('editor');
      if (editor)
      {
        var toolbarOptions = [
          [
          {
            'font': []
          }],
          [
          {
            'header': [1, 2, 3, 4, 5, 6, false]
          }],
          ['bold', 'italic', 'underline', 'strike'],
          ['blockquote', 'code-block'],
          [
          {
            'header': 1
          },
          {
            'header': 2
          }],
          [
          {
            'list': 'ordered'
          },
          {
            'list': 'bullet'
          }],
          [
          {
            'script': 'sub'
          },
          {
            'script': 'super'
          }],
          [
          {
            'indent': '-1'
          },
          {
            'indent': '+1'
          }], // outdent/indent
          [
          {
            'direction': 'rtl'
          }], // text direction
          [
          {
            'color': []
          },
          {
            'background': []
          }], // dropdown with defaults from theme
          [
          {
            'align': []
          }],
          ['clean'] // remove formatting button
        ];
        var quill = new Quill(editor,
        {
          modules:
          {
            toolbar: toolbarOptions
          },
          theme: 'snow'
        });
      }
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function()
      {
        'use strict';
        window.addEventListener('load', function()
        {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');
          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form)
          {
            form.addEventListener('submit', function(event)
            {
              if (form.checkValidity() === false)
              {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
    <script>
      var uptarg = document.getElementById('drag-drop-area');
      if (uptarg)
      {
        var uppy = Uppy.Core().use(Uppy.Dashboard,
        {
          inline: true,
          target: uptarg,
          proudlyDisplayPoweredByUppy: false,
          theme: 'dark',
          width: 770,
          height: 210,
          plugins: ['Webcam']
        }).use(Uppy.Tus,
        {
          endpoint: 'https://master.tus.io/files/'
        });
        uppy.on('complete', (result) =>
        {
          console.log('Upload complete! We’ve uploaded these files:', result.successful)
        });
      }
    </script>
    <script src="js/apps.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag()
      {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      gtag('config', 'UA-56159088-1');
    </script>
    <script src="{{asset('dashboard-assets/ckeditor/ckeditor.js')}}"></script>
    <script>
       var konten = document.getElementById("deskripsi");
         CKEDITOR.replace(konten,{
         language:'en-gb'
       });
       CKEDITOR.config.allowedContent = true;
    </script>

    <script>
      function previewImage(){
        const image = document.querySelector('#foto');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';
        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function (oFREvent) { 
          imgPreview.src = oFREvent.target.result;
         }
      }
    </script> 
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag("js", new Date());
      gtag("config", "UA-56159088-1");
    </script>
    
  </body>
</html>