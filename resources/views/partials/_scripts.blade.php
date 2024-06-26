   <!-- jQuery -->
   <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
   <!-- jQuery UI 1.11.4 -->
   <script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
   <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
   <script>
       $.widget.bridge('uibutton', $.ui.button)
   </script>
   <!-- Bootstrap 4 -->
   <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
   <!-- ChartJS -->
   <script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>
   <!-- Sparkline -->
   <script src="{{ asset('plugins/sparklines/sparkline.js') }}"></script>
   <!-- JQVMap -->
   <script src="{{ asset('plugins/jqvmap/jquery.vmap.min.js') }}"></script>
   <script src="{{ asset('plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
   <!-- jQuery Knob Chart -->
   <script src="{{ asset('plugins/jquery-knob/jquery.knob.min.js') }}"></script>
   <!-- daterangepicker -->
   <script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
   <script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
   <!-- Tempusdominus Bootstrap 4 -->
   <script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
   <!-- Summernote -->
   <script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
   <!-- overlayScrollbars -->
   <script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
   <!-- AdminLTE App -->
   <script src="{{ asset('dist/js/adminlte.js') }}"></script>
   <!-- AdminLTE for demo purposes -->
   <!-- <script src="{{ asset('dist/js/demo.js') }}"></script> -->
   <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
   <script src="{{ asset('dist/js/pages/dashboard.js') }}"></script>

   <!-- DataTables  & Plugins -->
   <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
   <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
   <script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
   <script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
   <script src="{{ asset('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
   <script src="{{ asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
   <script src="{{ asset('plugins/jszip/jszip.min.js') }}"></script>
   <script src="{{ asset('plugins/pdfmake/pdfmake.min.js') }}"></script>
   <script src="{{ asset('plugins/pdfmake/vfs_fonts.js') }}"></script>
   <script src="{{ asset('plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
   <script src="{{ asset('plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
   <script src="{{ asset('plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>


   <!-- Page specific script -->
   <script>
       $(function() {
           $("#example1").DataTable({
               "responsive": true,
               "lengthChange": false,
               "autoWidth": false,
               "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
           }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
           $('#example2').DataTable({
               "paging": true,
               "lengthChange": false,
               "searching": false,
               "ordering": true,
               "info": true,
               "autoWidth": false,
               "responsive": true,
           });
       });
   </script>



   <!-- **********************MODAL******************************* -->
   <!-- SweetAlert2 -->
   <script src="{{ asset('plugins/sweetalert2/sweetalert2.min.js') }}"></script>
   <!-- Toastr -->
   <script src="{{ asset('plugins/toastr/toastr.min.js') }}"></script>
   <!-- AdminLTE App -->
   <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>



   <!-- Page specific script -->
   <script>
       $(function() {
           var Toast = Swal.mixin({
               toast: true,
               position: 'top-end',
               showConfirmButton: false,
               timer: 3000
           });

           $('.swalDefaultSuccess').click(function() {
               Toast.fire({
                   icon: 'success',
                   title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
               })
           });
           $('.swalDefaultInfo').click(function() {
               Toast.fire({
                   icon: 'info',
                   title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
               })
           });
           $('.swalDefaultError').click(function() {
               Toast.fire({
                   icon: 'error',
                   title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
               })
           });
           $('.swalDefaultWarning').click(function() {
               Toast.fire({
                   icon: 'warning',
                   title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
               })
           });
           $('.swalDefaultQuestion').click(function() {
               Toast.fire({
                   icon: 'question',
                   title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
               })
           });

           $('.toastrDefaultSuccess').click(function() {
               toastr.success('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
           });
           $('.toastrDefaultInfo').click(function() {
               toastr.info('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
           });
           $('.toastrDefaultError').click(function() {
               toastr.error('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
           });
           $('.toastrDefaultWarning').click(function() {
               toastr.warning('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
           });

           $('.toastsDefaultDefault').click(function() {
               $(document).Toasts('create', {
                   title: 'Toast Title',
                   body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
               })
           });
           $('.toastsDefaultTopLeft').click(function() {
               $(document).Toasts('create', {
                   title: 'Toast Title',
                   position: 'topLeft',
                   body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
               })
           });
           $('.toastsDefaultBottomRight').click(function() {
               $(document).Toasts('create', {
                   title: 'Toast Title',
                   position: 'bottomRight',
                   body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
               })
           });
           $('.toastsDefaultBottomLeft').click(function() {
               $(document).Toasts('create', {
                   title: 'Toast Title',
                   position: 'bottomLeft',
                   body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
               })
           });
           $('.toastsDefaultAutohide').click(function() {
               $(document).Toasts('create', {
                   title: 'Toast Title',
                   autohide: true,
                   delay: 750,
                   body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
               })
           });
           $('.toastsDefaultNotFixed').click(function() {
               $(document).Toasts('create', {
                   title: 'Toast Title',
                   fixed: false,
                   body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
               })
           });
           $('.toastsDefaultFull').click(function() {
               $(document).Toasts('create', {
                   body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.',
                   title: 'Toast Title',
                   subtitle: 'Subtitle',
                   icon: 'fas fa-envelope fa-lg',
               })
           });
           $('.toastsDefaultFullImage').click(function() {
               $(document).Toasts('create', {
                   body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.',
                   title: 'Toast Title',
                   subtitle: 'Subtitle',
                   image: '../../dist/img/user3-128x128.jpg',
                   imageAlt: 'User Picture',
               })
           });
           $('.toastsDefaultSuccess').click(function() {
               $(document).Toasts('create', {
                   class: 'bg-success',
                   title: 'Toast Title',
                   subtitle: 'Subtitle',
                   body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
               })
           });
           $('.toastsDefaultInfo').click(function() {
               $(document).Toasts('create', {
                   class: 'bg-info',
                   title: 'Toast Title',
                   subtitle: 'Subtitle',
                   body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
               })
           });
           $('.toastsDefaultWarning').click(function() {
               $(document).Toasts('create', {
                   class: 'bg-warning',
                   title: 'Toast Title',
                   subtitle: 'Subtitle',
                   body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
               })
           });
           $('.toastsDefaultDanger').click(function() {
               $(document).Toasts('create', {
                   class: 'bg-danger',
                   title: 'Toast Title',
                   subtitle: 'Subtitle',
                   body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
               })
           });
           $('.toastsDefaultMaroon').click(function() {
               $(document).Toasts('create', {
                   class: 'bg-maroon',
                   title: 'Toast Title',
                   subtitle: 'Subtitle',
                   body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
               })
           });
       });
   </script>

   <!-- ****************************************** calendrier ******************************** -->

   <script src="{{ asset('plugins/fullcalendar/main.js') }}"></script>


   <!-- Page specific script -->
   <script>
       $(function() {

           /* initialize the external events
            -----------------------------------------------------------------*/
           function ini_events(ele) {
               ele.each(function() {

                   // create an Event Object (https://fullcalendar.io/docs/event-object)
                   // it doesn't need to have a start or end
                   var eventObject = {
                       title: $.trim($(this).text()) // use the element's text as the event title
                   }

                   // store the Event Object in the DOM element so we can get to it later
                   $(this).data('eventObject', eventObject)

                   // make the event draggable using jQuery UI
                   $(this).draggable({
                       zIndex: 1070,
                       revert: true, // will cause the event to go back to its
                       revertDuration: 0 //  original position after the drag
                   })

               })
           }

           ini_events($('#external-events div.external-event'))

           /* initialize the calendar
            -----------------------------------------------------------------*/
           //Date for the calendar events (dummy data)
           var date = new Date()
           var d = date.getDate(),
               m = date.getMonth(),
               y = date.getFullYear()

           var Calendar = FullCalendar.Calendar;
           var Draggable = FullCalendar.Draggable;

           var containerEl = document.getElementById('external-events');
           var checkbox = document.getElementById('drop-remove');
           var calendarEl = document.getElementById('calendar');

           // initialize the external events
           // -----------------------------------------------------------------

           new Draggable(containerEl, {
               itemSelector: '.external-event',
               eventData: function(eventEl) {
                   return {
                       title: eventEl.innerText,
                       backgroundColor: window.getComputedStyle(eventEl, null).getPropertyValue(
                           'background-color'),
                       borderColor: window.getComputedStyle(eventEl, null).getPropertyValue(
                           'background-color'),
                       textColor: window.getComputedStyle(eventEl, null).getPropertyValue('color'),
                   };
               }
           });

           var calendar = new Calendar(calendarEl, {
               headerToolbar: {
                   left: 'prev,next today',
                   center: 'title',
                   right: 'dayGridMonth,timeGridWeek,timeGridDay'
               },
               themeSystem: 'bootstrap',
               //Random default events
               events: [{
                       title: 'All Day Event',
                       start: new Date(y, m, 1),
                       backgroundColor: '#f56954', //red
                       borderColor: '#f56954', //red
                       allDay: true
                   },
                   {
                       title: 'Long Event',
                       start: new Date(y, m, d - 5),
                       end: new Date(y, m, d - 2),
                       backgroundColor: '#f39c12', //yellow
                       borderColor: '#f39c12' //yellow
                   },
                   {
                       title: 'Meeting',
                       start: new Date(y, m, d, 10, 30),
                       allDay: false,
                       backgroundColor: '#0073b7', //Blue
                       borderColor: '#0073b7' //Blue
                   },
                   {
                       title: 'Lunch',
                       start: new Date(y, m, d, 12, 0),
                       end: new Date(y, m, d, 14, 0),
                       allDay: false,
                       backgroundColor: '#00c0ef', //Info (aqua)
                       borderColor: '#00c0ef' //Info (aqua)
                   },
                   {
                       title: 'Birthday Party',
                       start: new Date(y, m, d + 1, 19, 0),
                       end: new Date(y, m, d + 1, 22, 30),
                       allDay: false,
                       backgroundColor: '#00a65a', //Success (green)
                       borderColor: '#00a65a' //Success (green)
                   },
                   {
                       title: 'Click for Google',
                       start: new Date(y, m, 28),
                       end: new Date(y, m, 29),
                       url: 'https://www.google.com/',
                       backgroundColor: '#3c8dbc', //Primary (light-blue)
                       borderColor: '#3c8dbc' //Primary (light-blue)
                   }
               ],
               editable: true,
               droppable: true, // this allows things to be dropped onto the calendar !!!
               drop: function(info) {
                   // is the "remove after drop" checkbox checked?
                   if (checkbox.checked) {
                       // if so, remove the element from the "Draggable Events" list
                       info.draggedEl.parentNode.removeChild(info.draggedEl);
                   }
               }
           });

           calendar.render();
           // $('#calendar').fullCalendar()

           /* ADDING EVENTS */
           var currColor = '#3c8dbc' //Red by default
           // Color chooser button
           $('#color-chooser > li > a').click(function(e) {
               e.preventDefault()
               // Save color
               currColor = $(this).css('color')
               // Add color effect to button
               $('#add-new-event').css({
                   'background-color': currColor,
                   'border-color': currColor
               })
           })
           $('#add-new-event').click(function(e) {
               e.preventDefault()
               // Get value and make sure it is not null
               var val = $('#new-event').val()
               if (val.length == 0) {
                   return
               }

               // Create events
               var event = $('<div />')
               event.css({
                   'background-color': currColor,
                   'border-color': currColor,
                   'color': '#fff'
               }).addClass('external-event')
               event.text(val)
               $('#external-events').prepend(event)

               // Add draggable funtionality
               ini_events(event)

               // Remove event from text input
               $('#new-event').val('')
           })
       })
   </script>

   @yield('scripts')
